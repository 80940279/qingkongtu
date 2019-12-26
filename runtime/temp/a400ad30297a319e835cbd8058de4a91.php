<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/mobile/rainbow/user\find_pwd.html";i:1568702283;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1577090973;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>验证账户--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
<body class="[body]">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a id="[back]" href="javascript:history.back(-1)"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>验证账户</span>
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
<div class="reset-pwd-steps">
    <img src="/template/mobile/rainbow/static/images/pic-reset-psw2.jpg" alt="" />
</div>
<div class="loginsingup-input singupphone">
    <form action="" method="post">
        <?php if(strstr($user['username'],'@')): ?>
        <!--邮箱-->
            <div class="reset-pwd-title" id="validate_type_email" value="email" val="<?php echo $user['email']; ?>">邮箱验证</div>
            <div class="reset-pwd-cont">点击发送<span class="co-red">验证码</span>到您的邮箱</div>
            <div class="v-contact reset-pwd-email"><?php echo $user['email']; ?></div>
            <div class="v-identity">
                <span class="v-til">验证码 :</span>
                <div class="v-cont-wrap">
                    <input type="text" id="email_code" name="email_code" class="hq_phone" value=""  placeholder="请输入验证码"/>
                    <a id="zemail" type="email"  class="m_phone" onclick="sendcode(this)">获取验证码</a>
                </div>
            </div>
        <?php else: ?>
        <!--手机-->
            <div class="reset-pwd-title" id="validate_type_mobile" value="mobile" val="<?php echo $user['mobile']; ?>">手机验证</div>
            <div class="reset-pwd-cont">点击发送<span class="co-red">获取验证码</span>到您的手机</div>
            <div class="v-contact reset-pwd-tel"><?php echo $user['mobile']; ?></div>   
            <div class="v-identity">
                <span class="v-til">验证码 :</span>
                <div class="v-cont-wrap">
                    <input type="text" id="mobile_code" name="mobile_code" value="" class="hq_phone" placeholder="请输入验证码"/>
                    <a id="zphone" type="mobile" class="m_phone" onclick="sendcode(this)">获取验证码</a>
                </div>
            </div>
        <?php endif; ?>
        <div class="lsu-submit">
            <input type="button" name="button" id="btn_submit" class="btn_big1" value="下一步" />
        </div>
    </form>
</div>
</body>
<script>
    // 手机号打码
    var __telNum__=$('.reset-pwd-tel').text();
     $('.reset-pwd-tel').text(__telNum__.replace(/^(\d{3})\d{4}(\d{4})$/,"$1****$2"));
    //获取验证码
    function sendcode(o){
        var type = $(o).attr('type');
        var send = $("#validate_type_"+type).attr("val");
        $.ajax({
            url:'/index.php?m=Home&c=Api&a=send_validate_code&t='+Math.random(),
            type:'post',
            dataType:'json',
            data:{type:type,send:send,scene:2},
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

    //提交
    $("#btn_submit").click(function(){
        var type = $(".m_phone").attr('type');
        var send = $("#validate_type_"+type).attr("val");
        if(type == 'mobile'){
            if($("#mobile_code").val().length == 0){
                $("#mobile_code").focus();
                showErrorMsg("验证码不能为空！");
                return false;
            }
            tpcode = $("#mobile_code").val();
        }else if(type == 'email'){
            if($("#email_code").val().length == 0){
                $("#email_code").focus();
                showErrorMsg("验证码不能为空！");
                return false;
            }
            tpcode = $("#email_code").val();
        }
        $.ajax({
            url:'/index.php?m=Home&c=Api&a=check_validate_code&t='+Math.random(),
            type:'post',
            dataType:'json',
			data:{code:tpcode,send:send,type:type,scene:2},
            success:function(res){
                if(res.status==1){
                    window.location.href = '/index.php?m=Mobile&c=User&a=set_pwd';
                }else{
                    showErrorMsg(res.msg);
                }
            }
        })
    });

</script>
</html>
