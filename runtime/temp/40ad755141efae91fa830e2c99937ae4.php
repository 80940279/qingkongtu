<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./template/mobile/rainbow/user\forget_pwd.html";i:1568702283;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1577090973;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>找回密码--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
            <span>找回密码</span>
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
    <img src="/template/mobile/rainbow/static/images/pic-reset-psw1.jpg" alt="" />
</div>
<div class="loginsingup-input">
    <form  method="post" id="fpForm">
        <div class="reset-pwd-title">账号验证</div>
        <div class="lsu">
            <span class="ico ico-username"></span>
            <input type="text" name="username" id="username" value="" placeholder="请输入账号"/>
        </div>
        <div class="lsu">
            <span class="ico ico-v-code"></span>
            <input class="v-code-input" type="text" name="verify_code" id="verify_code" value="" placeholder="请输入验证码"/>
            <img class="v-code-pic" src="/index.php?m=Mobile&c=User&a=verify&type=forget" id="verify_code_img" onclick="verify()">
        </div>
    </form>
    <div class="lsu-submit">
        <input type="button" id="btn_submit"  value="下一步" />
    </div>
</div>
</body>
<script>
    //加载验证码
    function verify(){
        $('#verify_code_img').attr('src','/index.php?m=Mobile&c=User&a=verify&type=forget&r='+Math.random());
    }

    var ajax_return_status=1;
    $("#btn_submit").click(function(){
        if (ajax_return_status==0){
            return false;
        }
        ajax_return_status=0;
        var username = $.trim($('#username').val());
        var verify_code = $.trim($('#verify_code').val());
        if(username == ' '){
            ajax_return_status=1;
            showErrorMsg('账号不能为空');
            return false;
        }
       if(verify_code == ''){
           ajax_return_status=1;
           showErrorMsg('验证码不能为空');
           return false;
       }
        $.ajax({
            type: "POST",
            url: '/index.php/mobile/User/forget_pwd',
            data: $("#fpForm").serialize(),
            dataType: 'json',
            success: function (data) {
                ajax_return_status=1;
                if (data.status == 1) {
                    layer.open({content: data.msg, time: 2,end:function(){
                        window.location.href=data.url;
                    }});
                } else {
                    showErrorMsg(data.msg);
                    verify();
                }
            }
        });
    });

</script>
</html>
