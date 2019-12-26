<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/mobile/rainbow/user\login.html";i:1577094849;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1577090973;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>河豚咕咕分销平台--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="/template/mobile/rainbow/static/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/mobile/rainbow/static/css/iconfont.css"/>
    <script src="/template/mobile/rainbow/static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <!--<script src="/template/mobile/rainbow/static/js/zepto-1.2.0-min.js" type="text/javascript" charset="utf-8"></script>-->
    <script src="/template/mobile/rainbow/static/js/style.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/mobile/rainbow/static/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/global.js"></script>
    <script src="/template/mobile/rainbow/static/js/layer.js"  type="text/javascript" ></script>
    <script src="/template/mobile/rainbow/static/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($tpshop_config['shop_info_store_ico']) && ($tpshop_config['shop_info_store_ico'] !== '')?$tpshop_config['shop_info_store_ico']:'/public/static/images/logo/storeico_default.png'); ?>" media="screen"/>
</head>
<body class="">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a id="[back]" href="javascript:history.back(-1);"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>河豚咕咕分销平台</span>
        </div>
        <?php if($is_fcate): ?>
        <div class="ds-in-bl menu">
            <a href="javascript:void(0);"><img src="/template/mobile/rainbow/static/images/class1.png" alt="菜单"></a>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="flool up-tpnavf-wrap tpnavf [top-header]">
    <div class="footer up-tpnavf-head">
    	<div class="up-tpnavf-i"> </div>
        <ul>
            <li>
                <a class="yello" href="<?php echo U('Index/index'); ?>">
                    <div class="icon">
                        <i class="icon-shouye iconfont"></i>
                        <p>首页</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Goods/categoryList'); ?>">
                    <div class="icon">
                        <i class="icon-fenlei iconfont"></i>
                        <p>分类</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Cart/index'); ?>">
                    <div class="icon">
                        <i class="icon-gouwuche iconfont"></i>
                        <p>购物车</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <i class="icon-wode iconfont"></i>
                        <p>我的</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
	
$(function(){	
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 1){ 
			$('.tpnavf').hide()
		}
	})
})
</script>
<style>
    #tabCon{
        clear: both;
    }
    #tabCon_1{
        display: none;
    }
    #tabCon_2{
        display: none;
    }
    #top_0{
        height: 0.1rem;
        width: 30%;
        margin: 0 auto;
        margin-top: -0.3rem;
        border-radius: 0.3rem;
        background-color: #ffB763;
    }
    #top_1{
        height: 0.1rem;
        width: 30%;
        margin: 0 auto;
        margin-top: -0.3rem;
        border-radius: 0.3rem;
    }
    .ico-username{
        background-image: url("/template/mobile/rainbow/static/images/system/username.png");
        background-size: 100% 100%;
    }
    .ico-password{
        background-image: url("/template/mobile/rainbow/static/images/system/password.png");
        background-size: 100% 100%;
    }
    .ico-code{
        background-image: url("/template/mobile/rainbow/static/images/system/code.png");
        background-size: 100% 100%;
    }
    .mybuttom{
        border: 0rem solid;
        text-align: center;
        display: inline-block;
        border-radius: 0.2rem;
        margin: 1.5rem 0 0;
        font-size: 0.6rem;
        font-weight: bold;
        color: #ffffff;
        padding: 0.6rem;
        width: 100%;
        background-image: linear-gradient(to right, #FFB763, #FFC66D);
    }
    .btn-text-message {
        color: #FFB763 !important;
        border: 1px solid #FFB763 !important;
        background-color: #ffffff !important;
        height: 1.2rem !important;
        line-height: 1.2rem !important;
        border-radius: .3rem !important;
        margin-top: -1rem;
    }
    .lsu{
        padding: .8rem 0.64rem 0.426667rem !important;
    }
</style>
<div class="logo-wrap-bg">
    <a class="login-logo-wrap" href="#">
        <img src="<?php echo (isset($tpshop_config['shop_info_store_user_logo']) && ($tpshop_config['shop_info_store_user_logo'] !== '')?$tpshop_config['shop_info_store_user_logo']:'/public/static/images/logo/pc_home_user_logo_default.png'); ?>"
             alt="LOGO"/>
    </a>
</div>

<div class="loginsingup-input" style="margin-bottom: 4rem;">
    <!--登录表单-s-->
    <form id="loginform" method="post">
        <input type="hidden" name="referurl" id="referurl" value="<?php echo $referurl; ?>">
        <div class="two-bothshop">
            <div class="maleri30">
                <ul>
                    <li  onclick="changeTab('0')">
                        <a><span>账号登录</span></a>
                        <div id="top_0"></div>
                    </li>
                    <li  onclick="changeTab('1')">
                        <a><span>验证码登录</span></a>
                        <div id="top_1"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="tabCon">
            <div id="tabCon_0">
                <div class="lsu">
                    <span class="ico ico-username"></span>
                    <input type="text" name="username" id="username" value="" placeholder="请输入用户名"/>
                </div>
                <div class="lsu">
                    <span class="ico ico-password"></span>
                    <input type="password" name="password" id="password" value="" placeholder="请输入密码"/>
                </div>
<!--                <?php if(!(empty($first_login) || (($first_login instanceof \think\Collection || $first_login instanceof \think\Paginator ) && $first_login->isEmpty()))): ?>-->
<!--                    <div class="lsu">-->
<!--                        <span class="ico ico-v-code"></span>-->
<!--                        <input class="v-code-input" type="text" name="verify_code" id="verify_code" value=""-->
<!--                               placeholder="请输入验证码"/>-->
<!--                        <img class="v-code-pic" id="verify_code_img" src="<?php echo U('Mobile/User/verify'); ?>"-->
<!--                             onClick="verify()"/>-->
<!--                    </div>-->
<!--                <?php endif; ?>-->
            </div>
            <div id="tabCon_1">
                <div class="lsu">
                    <span class="ico ico-username"></span>
                    <input type="text" name="phone" id="phone" value="" placeholder="请输入手机号"/>
                </div>
                <div class="lsu">
                    <span class="ico ico-code"></span>
                    <input type="text" name="code" id="code" value="" placeholder="请输入验证码"/>
                    <button class="btn-text-message">获取验证码</button>
                </div>

            </div>

        </div>

            <input type="button" value="立即登录" onclick="submitverify()" class="mybuttom"/>

    </form>
    <div class="signup-find p" style="text-align: center;margin-top: 1.5rem">
        <a class="note" >没有账号？</a>
        <a class="note" style="color:#FFB763 " href="<?php echo U('User/reg'); ?>">快速注册</a>
    </div>

    <div class="signup-find" style="width: 100%;height: 3.5rem;text-align: center;margin-top: 1.5rem">
        <a style="width: 1.5rem;height: 100%"  href="<?php echo U('index/index'); ?>">
            <img style="width: 2.5rem;height: 2.5rem" src="/template/mobile/rainbow/static/images/system/gogo.png">
            <p style="margin-top: 0.3rem">随便逛逛</p>
        </a>
    </div>
    <!--登录表单-e-->
    <!--第三方登陆-s-->
    <div class="thirdlogin">
        <h4>第三方登陆</h4>
        <div class="third-login-list">
            <?php
                                   
                                $md5_key = md5("select * from __PREFIX__plugin where type='login' AND status = 1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from __PREFIX__plugin where type='login' AND status = 1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <!--             腾讯只开放给了部分大型的商务合作伙伴-->
                <?php if($v['code'] == 'weixin' AND is_weixin() != 1): ?>
                    <a class="item-ico ico-wechat-login" href="<?php echo U('LoginApi/login',array('oauth'=>'weixin')); ?>"
                       target="_blank" title="weixin"></a>
                <?php endif; ?>

                <!--            <?php if($v['code'] == 'qq' AND is_qq() != 1): ?>-->
                <!--                <a  href="<?php echo U('LoginApi/login',array('oauth'=>'qq')); ?>" target="_blank" title="QQ">-->
                <!--                    <img src="/template/mobile/rainbow/static/images/qq.jpg" width="70"/>-->
                <!--                </a>-->
                <!--            <?php endif; ?>-->
                <!--<?php if($v['code'] == 'alipay' AND is_alipay() != 1 AND is_weixin() != 1): ?>
                <a class="item-ico ico-alipay-login" href="<?php echo U('LoginApi/login',array('oauth'=>'alipay')); ?>"></a>
                <?php endif; if($v['code'] == 'alipaynew' AND is_alipay() != 1 AND is_weixin() != 1): ?>
                    <a class="item-ico ico-alipay-login" href="alipays://platformapi/startapp?appId=20000067&url=<?php echo $alipay_url; ?>"></a>
                <?php endif; ?>-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--第三方登陆-e-->
</div>


<script type="text/javascript">
    function verify() {
        $('#verify_code_img').attr('src', '/index.php?m=Mobile&c=User&a=verify&r=' + Math.random());
    }

    //复选框状态
    function remember(obj) {
        var che = $(obj).attr("class");
        if (che == 'che check_t') {
            $("#autologin").prop('checked', false);
        } else {
            $("#autologin").prop('checked', true);
        }
    }

    //回车提交
    $(document).keyup(function (event) {
        if (event.keyCode == 13) {
            submitverify()
        }
    });

    function submitverify() {
        var username = $.trim($('#username').val());
        var password = $.trim($('#password').val());
        var remember = $('#remember').val();
        var referurl = $('#referurl').val();
        var verify_code = $.trim($('#verify_code').val());
        if (username == '') {
            showErrorMsg('用户名不能为空!');
            return false;
        }
        if (!checkMobile(username) && !checkEmail(username)) {
            showErrorMsg('账号格式不匹配!');
            return false;
        }
        if (password == '') {
            showErrorMsg('密码不能为空!');
            return false;
        }
        var codeExist = $('#verify_code').length;
        if (codeExist && verify_code == '') {
            showErrorMsg('验证码不能为空!');
            return false;
        }

        var data = {username: username, password: password, referurl: encodeURIComponent(referurl)};
        if (codeExist) {
            data.verify_code = verify_code;
        }
        $.ajax({
            type: 'post',
            url: '/index.php?m=Mobile&c=User&a=do_login&t=' + Math.random(),
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data.status == 1) {
                    var url = decodeURIComponent(data.url);
                    if (url.indexOf('user') >= 0 && url.indexOf('login') >= 0 || url == '') {
                        window.location.href = '/index.php/mobile';
                    } else {
                        window.location.href = url;
                    }
                } else {
                    layer.open({
                        content: data.msg, time: 2, end: function () {
                            if (codeExist) {
                                verify();
                            } else {
                                location.reload();
                            }
                        }
                    });
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                showErrorMsg('网络异常，请稍后重试');
            }
        })
    }
    function changeTab(tabCon_num){
        for(i=0;i<=1;i++) {
            document.getElementById("tabCon_"+i).style.display="none"; //将所有的层都隐藏
            document.getElementById("top_"+i).style.backgroundColor="#ffffff"; //将所有的层都隐藏
        }
        document.getElementById("tabCon_"+tabCon_num).style.display="block";//显示当前层
        document.getElementById("top_"+tabCon_num).style.backgroundColor="#ffB763"; //将所有的层都隐藏
    }
</script>
</body>
</html>
