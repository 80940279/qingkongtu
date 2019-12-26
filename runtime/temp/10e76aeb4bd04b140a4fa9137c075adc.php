<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/mobile/rainbow/user\userinfo.html";i:1574129754;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1573866148;}*/ ?>
<style>
	.list7 .myorder .fr i{
		margin-top: .73rem !important;
	}
	.classreturn .content .return,.classreturn .content .menu{
		margin-top: .6rem;
	}
	#logout{
		border: 0.01rem #FF5353 solid;
		color: #FF5353;
		background: #ffffff;
		border-radius: 0.3rem;
	}
	.ico-password{
		width: 0.9rem;
		height: 1rem;
		margin: 50% auto;
		background: url("/template/mobile/rainbow/static/images/system/password.png") no-repeat 100% 100%;
	}
	.ico-usehelp{
		width: 0.9rem;
		height: 1rem;
		margin: 50% auto;
		background: url("/template/mobile/rainbow/static/images/system/usehelp.png") no-repeat 100% 100%;
	}
</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>晴空兔--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
<body class="g4">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a id="[back]" href="javascript:history.back(-1);"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>晴空兔</span>
        </div>
        <div class="ds-in-bl menu">
            <a href="javascript:void(0);"><img src="/template/mobile/rainbow/static/images/class1.png" alt="菜单"></a>
        </div>
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
<script type="text/javascript" src="/public/static/js/datePicker/datePicker.js"></script>
		<div class="floor my p setting">
			<div class="content">
				<div class="floor list7">
<!--					<div class="myorder he p">-->
<!--						<div class="content30">-->
<!--							<div class="order">-->
<!--								<div class="fl">-->
<!--									<span>头像</span>-->
<!--									<span class="bridh"></span>-->
<!--								</div>-->
<!--								<div class="fr">-->
<!--									&lt;!&ndash;<a href="">&ndash;&gt;-->
<!--										<div class="hendicon">-->
<!--											<span></span>-->
<!--											<form id="head_pic" method="post" enctype="multipart/form-data">-->
<!--											<label class="file" style="cursor:pointer;">-->
<!--											<div class="around" id="fileList">-->
<!--												<img src="<?php echo (isset($user['head_pic']) && ($user['head_pic'] !== '')?$user['head_pic']:'/template/mobile/rainbow/static/images/user68.jpg'); ?>"/>-->
<!--												<input  type="file" accept="image/*" name="head_pic"  onchange="handleFiles(this)" style="display:none">-->
<!--											</div></label>-->
<!--											</form>-->
<!--										</div>-->
<!--									&lt;!&ndash;</a>&ndash;&gt;-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="myorder p">-->
<!--						<div class="content30">-->
<!--							<a href="<?php echo U('Mobile/User/userinfo',array('action'=>'nickname')); ?>">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>用户名</span>-->
<!--									</div>-->
<!--									<div class="fr">-->
<!--                                        <span><?php echo $user['nickname']; ?></span>-->
<!--										<i class="Mright"></i>-->
<!--									</div>-->
<!--								</div>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="myorder p">-->
<!--						<div class="content30">-->
<!--							<a href="<?php echo U('Mobile/User/userinfo',array('action'=>'sex')); ?>">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>性别</span>-->
<!--									</div>-->
<!--									<div class="fr">-->
<!--                                        <span><?php echo $sex[$user['sex']]; ?></span>-->
<!--										<i class="Mright"></i>-->
<!--									</div>-->
<!--								</div>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--                    <div class="myorder p">-->
<!--						<div class="content30">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>生日</span>-->
<!--									</div>-->
<!--									<div class="fr" id="birthday_time">-->
<!--                                        <form id="birthday_submit" method="post" enctype="multipart/form-data">-->
<!--                                            <span><?php echo date('Y-m-d',$user['birthday']); ?></span>-->
<!--                                            <input  type="hidden" name="birthday" id="birthday" value="<?php echo date('Y-m-d',$user['birthday']); ?>">-->
<!--                                            <i class="Mright"></i>-->
<!--                                        </form>-->
<!--									</div>-->
<!--								</div>-->
<!--						</div>-->
<!--					</div>-->
<!--                    <script>-->
<!--                        var calendar = new datePicker();-->
<!--                        calendar.init({-->
<!--                            'trigger': '#birthday_time', /*按钮选择器，用于触发弹出插件*/-->
<!--                            'type'   : 'date',      /*模式：date日期；datetime日期时间；time时间；ym年月；*/-->
<!--                            'minDate':'1900-1-1',   /*最小日期*/-->
<!--                            'maxDate':'2100-12-31',   /*最大日期*/-->
<!--                            'onSubmit':function(){  /*确认时触发事件*/-->
<!--                                $('#birthday').val(calendar.value);-->
<!--                                $('#birthday_submit').submit();-->
<!--                            },-->
<!--                            'onClose':function(){   /*取消时触发事件*/-->
<!--                            }-->
<!--                        });-->
<!--                        $("#birthday_time").focus(function(){-->
<!--                            document.activeElement.blur();-->
<!--                        });-->
<!--                    </script>-->
<!--					<div class="myorder p">-->
<!--						<div class="content30">-->
<!--							<a href="<?php echo U('Mobile/User/setMobile'); ?>">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>手机</span>-->
<!--									</div>-->
<!--									<div class="fr">-->
<!--                                        <span><?php echo $user['mobile']; ?></span>-->
<!--										<i class="Mright"></i>-->
<!--									</div>-->
<!--								</div>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="myorder p bo">-->
<!--						<div class="content30">-->
<!--							<a href="<?php echo U('Mobile/User/userinfo',array('action'=>'email')); ?>">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>邮箱</span>-->
<!--									</div>-->
<!--									<div class="fr">-->
<!--                                        <span><?php echo $user['email']; ?></span>-->
<!--										<i class="Mright"></i>-->
<!--									</div>-->
<!--								</div>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
					<div class="myorder p ma-to-20">
						<div style="text-align: center; font-size: 0.8rem">设置</div>
					</div>
					<div class="myorder p ma-to-20">
						<div class="content30">
							<a href="<?php echo U('Mobile/User/password'); ?>">
								<div class="order">
									<div style="width: 1.2rem;height: 100%;float: left">
										<div class="ico-password"></div>
									</div>
									<div class="fl">
										<span>修改密码</span>
									</div>
									<div class="fr">
										<i class="Mright"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="myorder p ma-to-20">
						<div class="content30">
							<a href="<?php echo U('Mobile/User/password'); ?>">
								<div class="order">
									<div style="width: 1.2rem;height: 100%;float: left">
										<div class="ico-usehelp"></div>
									</div>
									<div class="fl">
										<span>使用帮助</span>
									</div>
									<div class="fr">
										<i class="Mright"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
                    <div class="myorder p">
                        <div class="content30">
                            <a href="<?php echo U('Mobile/User/paypwd'); ?>">
                                <div class="order">
                                    <div class="fl">
                                        <span>支付密码</span>
                                    </div>
                                    <div class="fr">
                                        <i class="Mright"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
<!--					<div class="myorder p">-->
<!--						<div class="content30">-->
<!--							<a href="<?php echo U('Mobile/User/address_list'); ?>">-->
<!--								<div class="order">-->
<!--									<div class="fl">-->
<!--										<span>收货地址</span>-->
<!--									</div>-->
<!--									<div class="fr">-->
<!--										<i class="Mright"></i>-->
<!--									</div>-->
<!--								</div>-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
					<!--<div class="myorder p bo">
						<div class="content30">
							<a href="<?php echo U('Mobile/User/authinfo'); ?>">
								<div class="order">
									<div class="fl">
										<span>实名认证</span>
									</div>
									<div class="fr">
										<i class="Mright"></i>
									</div>
								</div>
							</a>
						</div>
					&lt;!&ndash;</div>&ndash;&gt;
				</div>-->
			</div>
			<div class="close">
                <?php if(!$is_wx): ?>
				<a href="<?php echo U('User/logout'); ?>" id="logout">安全退出</a>
                <?php endif; ?>
				<a id="asubmit" style="display:none;" href="javascript:;" onclick="javascript:$('#head_pic').submit();">保存头像</a>
			</div>
		</div>
      </div>
<script>
//显示上传照片
window.URL = window.URL || window.webkitURL;
function handleFiles(obj) {
    fileList = document.getElementById("fileList");
    var files = obj.files;
    img = new Image();
    if(window.URL){
        img.src = window.URL.createObjectURL(files[0]); //创建一个object URL，并不是你的本地路径
        img.width = 60;
        img.height = 60;
        img.onload = function(e) {
            window.URL.revokeObjectURL(this.src); //图片加载后，释放object URL
        }
        if(fileList.firstElementChild){
            fileList.removeChild(fileList.firstElementChild);
        }
        $('#fileList').find('img').remove();
        fileList.appendChild(img);
    }else if(window.FileReader){
        //opera不支持createObjectURL/revokeObjectURL方法。我们用FileReader对象来处理
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function(e){
            img.src = this.result;
            img.width = 60;
            img.height = 60;
            $('#fileList').find('img').remove();
            fileList.appendChild(img);
        }
    }else
    {
        //ie
        obj.select();
        obj.blur();
        var nfile = document.selection.createRange().text;
        document.selection.empty();
        img.src = nfile;
        img.width = 60;
        img.height = 60;
        img.onload=function(){

        }
        $('#fileList').find('img').remove();
        fileList.appendChild(img);
    }
    $('#asubmit').show();
    $('#logout').hide();
    $('#head_pic').submit();
}
$(function(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
    	$('#logout').hide();
    }
});
</script>

	</body>
</html>