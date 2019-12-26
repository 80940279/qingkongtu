<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:39:"./template/mobile/rainbow/user\reg.html";i:1577170514;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1577090973;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>注册--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
            <a id="[back]" href="javascript:history.back(-1)"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>注册</span>
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
    #verify_code_img {
        padding: .55467rem .21333rem;
        width: 4.6rem;
        height: 2.9rem;
        color: white;
        border-radius: .128rem;
    }

    .lsu {
        height: 2.5rem !important;
    }

    .c-form-txt-normal {
        margin-top: 0.3rem
    }

    .v-code-input {
        margin-top: 0.3rem
    }

    .ico-telephone {
        background-image: url("/template/mobile/rainbow/static/images/system/username.png");
        background-size: 100% 100%;
    }

    .ico-password {
        background-image: url("/template/mobile/rainbow/static/images/system/password.png");
        background-size: 100% 100%;
    }
    .ico-v-code{
        background-image: url("/template/mobile/rainbow/static/images/system/code.png");
        background-size: 100% 100%;
    }
    .ico-referee{
        background-image: url("/template/mobile/rainbow/static/images/system/referee.png");
        background-size: 100% 100%;
    }
    .btn-text-message {
        color: #FFB763 !important;
        border: 1px solid #FFB763 !important;
        height: 1.2rem !important;
        line-height: 1.2rem !important;
        border-radius: .3rem !important;
    }
    .mybuttom {
        border: 0rem solid;
        text-align: center;

        border-radius: 0.2rem;
        margin: 1.5rem 15% 0 15%;
        font-size: 0.6rem;
        font-weight: bold;
        color: #ffffff;
        padding: 0.6rem;
        width: 70%;
        background-image: linear-gradient(to right, #FFB763, #FFC66D);
    }
    .signup-find{
        margin-top: 0.5rem;
        color: #999999;
    }
</style>

<!--注册表单-s-->
<div class="loginsingup-input" style="width: 100%;padding: 0;">
    <form action="" method="post" id="regFrom">
        <input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
        <input type="hidden" name="is_bind" value="<?php echo \think\Request::instance()->param('is_bind'); ?>">
        <div class="lsu">
            <span class="ico ico-telephone"></span>
            <p style="line-height: 0.9rem;margin-left: 1.3rem">手机号</p>
            <input style="width: 100%;" type="text" name="username" id="username" value="" placeholder="请输入手机号"
                   class="c-form-txt-normal">
            <span id="mobile_phone_notice"></span>
        </div>
        <?php if($regis_sms_enable == 1): ?>
        <div class="lsu">
            <span class="ico ico-v-code"></span>
            <p style="line-height: 0.9rem;margin-left: 1.3rem">验证码</p>
            <input class="v-code-input" type="text" id="mobile_code" value="" name="mobile_code" placeholder="请输入验证码">
            <a class="btn-text-message" rel="mobile" onClick="sendcode(this)">获取验证码</a>
        </div>
        <?php endif; ?>
        <div class="lsu">
            <span class="ico ico-password"></span>
            <p style="line-height: 0.9rem;margin-left: 1.3rem">密码</p>
            <input type="password" id="password" value="" maxlength="16" placeholder="请设置6-16位登录密码"
                   class="c-form-txt-normal" onBlur="check_password();">
            <input type="hidden" name="password" value=""/>
            <span id="password_notice"></span>
        </div>
        <div class="lsu">
            <span class="ico ico-password"></span>
            <p style="line-height: 0.9rem;margin-left: 1.3rem">确认密码</p>
            <input type="password" id="password2" value="" maxlength="16" placeholder="确认密码" style="margin-top: 0.3rem">
            <input type="hidden" name="password2" value=""/>
            <span id="confirm_password_notice"></span>
        </div>
        <!--<div class="lsu boo zc_se">-->
        <!--<input type="text"  value="" name="verify_code" placeholder="请输入验证码" >-->
        <!--<img src="/index.php?m=Home&c=User&a=verify" id="verify_code_img" onclick="verify()">-->
        <!--</div>-->
        <?php if($tpshop_config['integral_invite'] == 1): ?>
            <div class="lsu">
                <span class="ico ico-referee"></span>
                <p style="line-height: 0.9rem;margin-left: 1.3rem">邀请码</p>
                <input type="text" name="invite" id="invite" value="" placeholder="推荐人手机号(选填)"
                       class="c-form-txt-normal">
                <span id="invite_phone_notice"></span>
            </div>
        <?php endif; ?>
        <div class="signup-find">

            <p class="recept" style="margin-left: 0.6rem">温馨提示： 推荐码需要联系官方获取噢~</p>
            <!--<p class="recept">注册即视为同意<a href="javascript:show_agreement();">《开源用户注册协议》</a></p>-->
        </div>

        <input class="mybuttom" type="button" name="" id="" onclick="checkSubmit()" value="注 册"/>


    </form>
</div>
<script>
    //获取验证码
    function sendcode(o){
        var type = $(o).attr('type');
        var send = $("#validate_type_"+type).attr("val");
        $.ajax({
            url:'/index.php?m=Home&c=Api&a=send_validate_code&t='+Math.random(),
            type:'post',
            dataType:'json',
            data:{type:type,send:send,scene:1},
            success:function(res){
                if(res.status==1){
                    countdown(o);
                    showErrorMsg(res.msg);
                }else{
                    showErrorMsg(res.msg);
                }
            }
        })
    }

    //倒计时
    function countdown(obj){
        var obj = $(obj);
        var s = <?php echo (isset($tpshop_config['sms_sms_time_out']) && ($tpshop_config['sms_sms_time_out'] !== '')?$tpshop_config['sms_sms_time_out']:60); ?>;
        //添加样式
        obj.attr('id','fetchcode');
        //改变按钮状态
        obj.unbind("click");
        callback();
        //循环定时器
        var T = window.setInterval(callback,1000);
        function callback()
        {
            if(s <= 1){
                //移除定时器
                window.clearInterval(T);
                obj.text('获取验证码');
                obj.bind("click", countdown)
                $(obj).removeAttr('id','fetchcode');
            }else{
                if(s<=10){
                    obj.text( '0'+ --s + '秒后再获取');
                }else{
                    obj.text( --s + '秒后再获取');
                }
            }
        }
    }
</script>


</body>
</html>
