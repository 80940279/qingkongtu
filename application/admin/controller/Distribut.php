<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 当燃
 * 拼团控制器
 * Date: 2016-06-09
 */

namespace app\admin\controller;

use app\admin\logic\OrderLogic;
use app\common\model\Users;
use app\common\model\TeamActivity;
use app\common\model\TeamFollow;
use app\common\model\TeamFound;
use app\common\logic\MessageFactory;
use think\AjaxPage;
use think\Loader;
use think\Db;
use think\Page;

class Distribut extends Base
{
	public function index()
	{
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}
	//会员列表
	public function tree()
    {
        $arr = db('user_level')->getField('level_id,level_name');
        if (empty($arr)) {
            $this->error('请先添加会员等级,', U('admin/User/level'));
            exit;
        }
        return $this->fetch();
    }

	public function ajaxtree()
	{
		// 搜索条件
        $condition = array();
        $user_id = input('user_id');
        if($user_id){
            $condition['user_id'] = $user_id;
        }else{
            $nickname = input('nickname');
            $account = input('account');
            $account ? $condition['email|mobile'] = ['like', "%$account%"] : false;
            $nickname ? $condition['nickname'] = ['like', "%$nickname%"] : false;
            $begin = input('start_time');
            $end = input('end_time');
            $begin = strtotime($begin);
            $end = strtotime($end) + 86400 - 1;
            if ($begin && $end) {
                $condition['reg_time'] = array('between', "$begin,$end");
            }
        }

        input('first_leader') && ($condition['first_leader'] = input('first_leader')); // 查看一级下线人有哪些
        input('second_leader') && ($condition['second_leader'] = input('second_leader')); // 查看二级下线人有哪些
        input('third_leader') && ($condition['third_leader'] = input('third_leader')); // 查看三级下线人有哪些
        $sort_order = I('order_by') . ' ' . I('sort');

        $usersModel = new Users();
        $count = $usersModel->where($condition)->count();
        $Page = new AjaxPage($count, 20);
        $userList = $usersModel->where($condition)->order($sort_order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $user_id_arr = get_arr_column($userList, 'user_id');
        if (!empty($user_id_arr)) {
            $first_leader = DB::query("select first_leader,count(1) as count  from __PREFIX__users where first_leader in(" . implode(',', $user_id_arr) . ")  group by first_leader");
            $first_leader = convert_arr_key($first_leader, 'first_leader');

            $second_leader = DB::query("select second_leader,count(1) as count  from __PREFIX__users where second_leader in(" . implode(',', $user_id_arr) . ")  group by second_leader");
            $second_leader = convert_arr_key($second_leader, 'second_leader');

            $third_leader = DB::query("select third_leader,count(1) as count  from __PREFIX__users where third_leader in(" . implode(',', $user_id_arr) . ")  group by third_leader");
            $third_leader = convert_arr_key($third_leader, 'third_leader');
        }
        $this->assign('first_leader', $first_leader);
        $this->assign('second_leader', $second_leader);
        $this->assign('third_leader', $third_leader);
        $show = $Page->show();
        $this->assign('userList', $userList);
        $this->assign('level', M('user_level')->getField('level_id,level_name'));
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('pager', $Page);
        return $this->fetch();
	}

	public function detail()
    {
        $uid = I('get.id');
        //$user = D('users')->where(array('user_id' => $uid))->find();
        $user = Users::get(['user_id' => $uid]);
        if (!$user)
            exit($this->error('会员不存在'));

        if (IS_POST) {
            $data = input('post.');
            //  会员信息编辑
            $password = I('post.password');
            $password2 = I('post.password2');
            if ($password != '' && $password != $password2) {
                exit($this->error('两次输入密码不同'));
            }
            if ($password == '' && $password2 == '') {
                unset($data['password']);
            } else {
                $data['password'] = encrypt($data['password']);
            }

            if (!empty($data['email'])) {
                $email = trim($data['email']);
                $c = M('users')->where("user_id != $uid and email = '$email'")->count();
                $c && exit($this->error('邮箱邮箱不得和已有用户重复'));
            }

            if (!empty($data['mobile'])) {
                $mobile = trim($data['mobile']);
                $c = M('users')->where("user_id != $uid and mobile = '$mobile'")->count();
                $c && exit($this->error('手机号不得和已有用户重复'));
            }

            $userLevel = D('user_level')->where('level_id=' . $data['level'])->value('discount');
            if (empty($userLevel)) {
                exit($this->error('请先设置会员等级！'));
            }
            $data['discount'] = $userLevel / 100;
            $row = M('users')->where(array('user_id' => $uid))->save($data);
            if ($row)
                exit($this->success('修改成功'));
                exit($this->error('未作内容修改或修改失败'));
        }

        $user['first_lower'] = M('users')->where("first_leader = {$user['user_id']}")->count();
        $user['second_lower'] = M('users')->where("second_leader = {$user['user_id']}")->count();
        $user['third_lower'] = M('users')->where("third_leader = {$user['user_id']}")->count();

        $this->assign('user', $user);
        return $this->fetch();
    }

    public function second_users()
	{
        $uid = I('get.id');

        $nickname = D('users')->where('user_id=' . $uid)->value('nickname');


        $this->assign('nickname', $nickname);

        $this->assign('first_id', $uid);

        return $this->fetch();
    }
    
    public function ajaxsecond_users()
	{
        $first_id = I('get.first_id');

        $condition = array();

        if($first_id){
            $condition['first_leader'] = $first_id;
        }

        $sort_order = I('order_by') . ' ' . I('sort');
        $usersModel = new Users();
        
        $userList = $usersModel->where($condition)->order($sort_order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $count = $usersModel->where($condition)->count();
        $Page = new AjaxPage($count, 20);

        $show = $Page->show();
        $this->assign('userList', $userList);

        $this->assign('page', $show);// 赋值分页输出
        $this->assign('pager', $Page);
        
        $this->assign('user_id', $uid);
        return $this->fetch();
    }
    
    public function second_detail()
    {
        $uid = I('get.id');
        $user = Users::get(['user_id' => $uid]);
        if (!$user){
            exit($this->error('会员不存在'));
        }       

        if (IS_POST) {
            $data = input('post.');
            //  会员信息编辑
            $password = I('post.password');
            $password2 = I('post.password2');
            if ($password != '' && $password != $password2) {
                exit($this->error('两次输入密码不同'));
            }
            if ($password == '' && $password2 == '') {
                unset($data['password']);
            } else {
                $data['password'] = encrypt($data['password']);
            }

            if (!empty($data['email'])) {
                $email = trim($data['email']);
                $c = M('users')->where("user_id != $uid and email = '$email'")->count();
                $c && exit($this->error('邮箱不得和已有用户重复'));
            }

            if (!empty($data['mobile'])) {
                $mobile = trim($data['mobile']);
                $c = M('users')->where("user_id != $uid and mobile = '$mobile'")->count();
                $c && exit($this->error('手机号不得和已有用户重复'));
            }

            /*$userLevel = D('user_level')->where('level_id=' . $data['level'])->value('discount');
            if (empty($userLevel)) {
                exit($this->error('请先设置会员等级！'));
            }
            $data['discount'] = $userLevel / 100;*/
            $row = M('users')->where(array('user_id' => $uid))->save($data);
            if ($row)
                exit($this->success('修改成功'));
                exit($this->error('未作内容修改或修改失败'));
        }
        $user['first_lower'] = M('users')->where("first_leader = {$user['user_id']}")->count();
        $user['second_lower'] = M('users')->where("second_leader = {$user['user_id']}")->count();
        $user['third_lower'] = M('users')->where("third_leader = {$user['user_id']}")->count();

        $this->assign('user', $user);
        
        return $this->fetch();

    }

     /**
	 * @return mixed
	 */
	public function grade_list()
	{
	header("Content-type: text/html; charset=utf-8");
    exit("模块开发中");	
	}

    /**
	 * @return mixed
	 */
	public function distributor_list()
	{
	header("Content-type: text/html; charset=utf-8");
    exit("模块开发中");	
	}

    /**
	 * @return mixed
	 */
	public function goods_list()
	{
	header("Content-type: text/html; charset=utf-8");
    exit("模块开发中");	
	}

	/**
	 * 拼团详情
	 * @return mixed
	 */
	public function info()
	{
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 保存
	 * @throws \think\Exception
	 */
	public function save(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 删除拼团
	 */
	public function delete(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");
	}

	/**
	 * 确认拼团
	 * @throws \think\Exception
	 */
	public function confirmFound(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 拼团退款
	 */
	public function refundFound(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 拼团抽奖
	 */
	public function lottery(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 拼团订单
	 */
	public function team_list()
	{
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 拼团订单详情
	 * @return mixed
	 */
	public function team_info()
	{
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	//拼团订单
	public function order_list(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	/**
	 * 团长佣金
	 */
	public function bonus(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}

	public function doBonus(){
	header("Content-type: text/html; charset=utf-8");
exit("商业用途必须购买正版,使用盗版将追究法律责任");	
	}
}
