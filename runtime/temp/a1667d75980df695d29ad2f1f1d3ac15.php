<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:47:"./template/mobile/rainbow/goods\ajaxSearch.html";i:1568702281;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1573866148;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\footer_nav.html";i:1568702281;s:79:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\wx_share.html";i:1568702281;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>搜索--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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

<!--<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a id="[back]" href="javascript:history.back(-1);"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>搜索</span>
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
</script>-->
<style>
	.search_pl{
		margin: 0;
	}
	.search_pl .search2 .le_inp input{
		width: 11.95rem;
		height: 1.28rem;
		background-color: #f2f3f4!important;
		border-radius: 0.62rem;
		border: none;
		padding-left: 1.9rem;
		font-size: 0.47rem;
		background: url("/template/mobile/rainbow/static/images/search.png") no-repeat;
		background-size: 0.77rem 0.77rem;
		background-position: 0.62rem 0.26rem;
		margin-top: 0.3rem;
	}
	.search_pl .search2 .ri_ss{
		width: 1.75rem;
		height: 1.28rem;
		background-color: #f75656;
		border-radius: 0.64rem;
		font-size: 0.51rem;
		line-height: 1.28rem;
		margin-top: 0.3rem;
		margin-left: 0.53rem;
		letter-spacing: 1px;
	}
	.search_pl .search2 .ri_ss a{
		color: #ffffff;
	}
	.ret{
		display: inline-block;
		/*width: 0.32rem;*/
		width: .7rem;
		height: .7rem;
		background-color: red;
		float: left;
		margin-top: 0.64rem;
		margin-right: 0.55rem;
		margin-left: 0.47rem;
		background: url(/template/mobile/rainbow/static/images/return.png);
		background-size: 100% 100%;
	}
	.near-le-ri{
		padding: 0;
        margin-bottom: 0.55rem;
	}
	.ovfl{
		overflow: hidden;
		margin: 0;
		padding: 0.03rem 0 0.17rem 0;
		border-bottom: 0.21rem solid #f5f5f5;
	}
	.se_shien{
		padding: 0!important;
        margin-bottom: 1.64rem;
	}
	.near-le-ri span{
		color: #131313;
		font-size: 0.64rem;
		font-weight: bold;
		margin-top: 0.853rem;
		letter-spacing: 1px;
	}
	.lb_showhide ul li a{
		width: 2.56rem;
		height: 1.07rem;
		background-color: #f5f5f5;
		border-radius: 0.53rem;
		border: none;
		font-size: .512rem;
		padding: .21333rem .64rem;
	}
	.lb_showhide ul li{
		margin-right: 0.47rem;
        height: 1.07rem;
        line-height: 1.07rem;
	}
    .hs-title{
        font-size: 0.64rem;
        color: #131313;
        line-height: 0.66rem;
        font-weight: bold;
		letter-spacing: 1px;
		margin-bottom: .3rem;
    }
    .history-s{
        padding-left: 0.64rem;
    }
    .history-s li{
        width: 14.72rem;
        height: 1.92rem;
        line-height: 1.92rem;
        font-size: 0.55rem;
        border-bottom: 0.033rem solid #e5e5e5;
    }
	.del-h{
		width: 1.79rem;
		height: 0.77rem;
		border-radius: 0.38rem;
		border: solid 0.02rem #e5e5e5;
		font-size: 0.47rem;
		display: inline-block;
		float: right;
		color: #999999;
		line-height: 0.77rem;
		text-align: center;
		margin-top: 0.58rem;
	}
</style>
		<div class="p search_pl">
			<div class="maleri30 ovfl">
				<div class="search2">
                    <form method="get" action="<?php echo U('Goods/search'); ?>" id="sourch_form">
						<a class="ret" href="javascript:history.back(-1);"></a>
                        <div class="le_inp"><input type="text" name="q" id="q" value="<?php echo urldecode(I('q')); ?>" placeholder="输入你想搜索的内容..."/></div>
                        <a href="javascript:;" onclick="ajaxsecrch()" ><div class="ri_ss">搜索
						</a>
                    </form>
				</div>
			</div>
		</div>

		<div class="lb_showhide se_shien p" style="display: block;">
			<div class="near-le-ri p">
				<div class="maleri30">
					<span>热搜</span>
				</div>
			</div>
			<div class="maleri30">
				<ul>
                    <?php if(is_array($tpshop_config['hot_keywords']) || $tpshop_config['hot_keywords'] instanceof \think\Collection || $tpshop_config['hot_keywords'] instanceof \think\Paginator): if( count($tpshop_config['hot_keywords'])==0 ) : echo "" ;else: foreach($tpshop_config['hot_keywords'] as $k=>$wd): ?>
                        <li><a href="<?php echo U('Goods/search',array('q'=>$wd)); ?>" <?php if($k == 0): ?>class="ht"<?php endif; ?>><?php echo $wd; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
        <div class="history-s">
            <p class="hs-title">历史搜索</p>
            <ul class="history-list">
            </ul>
        </div>

        <!--底部导航-start-->
        <div class="foohi">
    <div class="footer">
        <ul>
            <li>
                <a <?php if(CONTROLLER_NAME == 'Index'): ?>class="yello" <?php endif; ?>  href="<?php echo U('Index/index'); ?>">
                    <div class="icon">
                        <div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/home1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/home2.png"/> </div>
                        <p>首页</p>
                    </div>
                </a>
            </li>
            <li>
                <a <?php if(CONTROLLER_NAME == 'Goods'): ?>class="yello" <?php endif; ?> href="<?php echo U('Goods/categoryList'); ?>">
                    <div class="icon">
                    	<div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/category1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/category2.png"/> </div>
                        <p>分类</p>
                    </div>
                </a>
            </li>
            <li>
                <a <?php if(CONTROLLER_NAME == 'Cart'): ?>class="yello" <?php endif; ?> href="<?php echo U('Cart/index'); ?>">
                    <div class="icon">
                        <div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/cart1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/cart2.png"/> </div>
                        <p>购物车</p>
                    </div>
                </a>
            </li>
            <li>
                <a <?php if(CONTROLLER_NAME == 'User'): ?>class="yello" <?php endif; ?> href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/user1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/user2.png"/> </div>
                        <p>我的</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<script src="/public/js/jqueryUrlGet.js"></script><!--获取get参数插件-->
<script type="text/javascript">
$(document).ready(function(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');
				$('#cart_quantity').html(cart_cn);						
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
});

set_first_leader();//设置推荐人
if($(".footer ul li a").hasClass("yello")){
	$(".footer ul li .yello").find(".icon_tp2").show();
	$(".footer ul li .yello").find(".icon_tp1").hide();
}

</script>
<!-- 微信浏览器 调用微信 分享js-->
<script type="text/javascript" src="<?php echo HTTP; ?>://res.wx.qq.com/open/js/jweixin-1.0.0.js" ></script>
<script type="text/javascript">

 //如果微信分销配置正常, 商品详情分享内容中的"图标"不显示, 则检查域名否配置了https, 如果配置了https,分享图片地址也要https开头
var httpPrefix = "<?php echo SITE_URL; ?>";
<?php if(ACTION_NAME == 'goodsInfo'): ?>
var ShareLink = httpPrefix+"/index.php?m=Mobile&c=Goods&a=goodsInfo&id=<?php echo $goods[goods_id]; ?>"; //默认分享链接
	var ShareImgUrl = "<?php echo goods_thum_images($goods[goods_id],100,100); ?>"; // 分享图标
	var ShareTitle = "<?php echo (isset($goods['goods_name']) && ($goods['goods_name'] !== '')?$goods['goods_name']:$tpshop_config['shop_info_store_title']); ?>"; // 分享标题
	var ShareDesc = "<?php echo (isset($goods['goods_remark']) && ($goods['goods_remark'] !== '')?$goods['goods_remark']:$tpshop_config['shop_info_store_desc']); ?>"; // 分享描述
<?php elseif(ACTION_NAME == 'info'): ?>
	var ShareLink = "<?php echo $team['bd_url']; ?>"; //默认分享链接
	var ShareImgUrl = "<?php echo $team['bd_pic']; ?>"; //分享图标
	var ShareTitle = "<?php echo $team[share_title]; ?>"; //分享标题
	var ShareDesc = "<?php echo $team[share_desc]; ?>"; //分享描述
<?php elseif(ACTION_NAME == 'found'): ?>
var ShareLink = httpPrefix+"/index.php?m=Mobile&c=Team&a=found&id=<?php echo $teamFound[found_id]; ?>"; //默认分享链接
	var ShareImgUrl = "<?php echo $team[bd_pic]; ?>"; //分享图标
	var ShareTitle = "<?php echo $team[share_title]; ?>"; //分享标题
	var ShareDesc = "<?php echo $team[share_desc]; ?>"; //分享描述
<?php elseif(ACTION_NAME == 'my_store'): ?>
	var ShareLink = httpPrefix+"/index.php?m=Mobile&c=Distribut&a=my_store"; 
	var ShareImgUrl = "<?php echo $tpshop_config['shop_info_store_logo']; ?>";
	var ShareTitle = "<?php echo $share_title; ?>"; 
	var ShareDesc = httpPrefix+"/index.php?m=Mobile&c=Distribut&a=my_store}";
 <?php elseif(strtolower(CONTROLLER_NAME) == 'bargain' and ACTION_NAME == 'index'): ?>
 var ShareLink = httpPrefix+"/index.php?m=Mobile&c=Bargain&a=index&id=<?php echo \think\Request::instance()->get('id'); ?>";
 var ShareImgUrl = "<?php echo goods_thum_images($data['bargain_info']['goods_id'],400,400); ?>";
 var ShareTitle = "<?php echo $data['bargain_info']['title']; ?>";
 var ShareDesc = "<?php echo $data['bargain_info']['description']; ?>"; // description
<?php else: ?>
	var ShareLink = httpPrefix+"/index.php?m=Mobile&c=Index&a=index"; //默认分享链接
	var ShareImgUrl = "<?php echo $tpshop_config['shop_info_wap_home_logo']; ?>"; //分享图标
	var ShareTitle = "<?php echo $tpshop_config['shop_info_store_title']; ?>"; //分享标题
	var ShareDesc = "<?php echo $tpshop_config['shop_info_store_desc']; ?>"; //分享描述
<?php endif; ?>
 if(ShareImgUrl.indexOf('http') < 0){
	 ShareImgUrl = httpPrefix+ShareImgUrl
 }
var is_distribut = getCookie('is_distribut'); // 是否分销代理
var user_id = getCookie('user_id'); // 当前用户id
// 如果已经登录了, 并且是分销商 拼团分销链接分享
if(parseInt(is_distribut) == 1 && parseInt(user_id) > 0)
{
	if(ShareLink.indexOf('&')>0){
		ShareLink = ShareLink + "&first_leader="+user_id;
	}else{
		ShareLink = ShareLink + "/first_leader/"+user_id;
	}
}

$(function() {
	if(isWeiXin() && parseInt(user_id)>0){
		$.ajax({
			type : "POST",
			url:"/index.php?m=Mobile&c=Index&a=ajaxGetWxConfig&t="+Math.random(),
			data:{'askUrl':encodeURIComponent(location.href.split('#')[0])},		
			dataType:'JSON',
			success: function(res)
			{
				//微信配置
				wx.config({
				    debug: false, 
				    appId: res.appId,
				    timestamp: res.timestamp, 
				    nonceStr: res.nonceStr, 
				    signature: res.signature,
				    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage','onMenuShareQQ','onMenuShareQZone','hideOptionMenu'] // 功能列表，我们要使用JS-SDK的什么功能
				});
			},
			error:function(res){
				console.log("wx.config error:");
				console.log(res);
				return false;
			}
		}); 

		// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在 页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready 函数中。
		wx.ready(function(){
		    // 获取"分享到朋友圈"按钮点击状态及自定义分享内容接口
		    wx.onMenuShareTimeline({
		        title: ShareTitle, // 分享标题
		        link:ShareLink,
		        desc: ShareDesc,
		        imgUrl:ShareImgUrl, // 分享图标
                success: function () {
                    setTimeout(function(){
                        //test();
                    }, 500);
                }
		    });

		    // 获取"分享给朋友"按钮点击状态及自定义分享内容接口
		    wx.onMenuShareAppMessage({
		        title: ShareTitle, // 分享标题
		        desc: ShareDesc, // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
		    });
			// 分享到QQ
			wx.onMenuShareQQ({
		        title: ShareTitle, // 分享标题
		        desc: ShareDesc, // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
			});	
			// 分享到QQ空间
			wx.onMenuShareQZone({
		        title: ShareTitle, // 分享标题
		        desc: ShareDesc, // 分享描述
		        link:ShareLink,
		        imgUrl:ShareImgUrl // 分享图标
			});

		   <?php if(CONTROLLER_NAME == 'User'): ?> 
				wx.hideOptionMenu();  // 用户中心 隐藏微信菜单
		   <?php endif; ?>	
		});
	}
});
 //测试分享朋友圈成功后执行的回调方法
 function test(){
     alert(111);
 }
function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}
</script>
<!--微信关注提醒 start-->
<?php if(\think\Session::get('subscribe') == 0): ?>
<button class="guide" style="display:none;" onclick="follow_wx()">关注公众号</button>
<style type="text/css">
.guide{width:0.627rem;height:2.83rem;text-align: center;border-radius: 8px ;font-size:0.512rem;padding:8px 0;border:1px solid #adadab;color:#000000;background-color: #fff;position: fixed;right: 6px;bottom: 200px;z-index: 99;}
#cover{display:none;position:absolute;left:0;top:0;z-index:18888;background-color:#000000;opacity:0.7;}
#guide{display:none;position:absolute;top:5px;z-index:19999;}
#guide img{width: 70%;height: auto;display: block;margin: 0 auto;margin-top: 10px;}
div.layui-m-layerchild h3{font-size:0.64rem;height:1.24rem;line-height:1.24rem;}
.layui-m-layercont img{height:8.96rem;width:8.96rem;}
</style>
<script type="text/javascript">
  //关注微信公众号二维码	 
function follow_wx()
{
	layer.open({
		type : 1,  
		title: '关注公众号',
		content: '<img src="<?php echo $wechat_config['qr']; ?>">',
		style: ''
	});
}
  
$(function(){
	if(isWeiXin()){
		var subscribe = getCookie('subscribe'); // 是否已经关注了微信公众号		
		if(subscribe == 0)
			$('.guide').show();
	}else{
		$('.guide').show();
	}
})
 
</script>
<?php endif; ?>
<!--微信关注提醒  end-->
<!-- 微信浏览器 调用微信 分享js  end-->
        <!--底部导航-end-->
</body>
</html>
<script>
    function ajaxsecrch(){
        if($.trim($('#q').val()) != ''){
			var txt = $('#q').val(); //把这个保存起来，用于历史记录
			add_a_history(txt)
            $("#sourch_form").submit();
        }else{
            layer.open({content:'请输入搜索关键字',time:2});
        }
    }
    $(function(){
        $('#q').focus();
		set_history();
    })
	// 设置历史记录
	function set_history(){
		var s = get_serch();
		var str = '';
		if(s){
			for (var i = s.length - 1; i >= 0; i--) {
				str += get_li_a(s[i])
			}
		}

		$(".history-s").find('ul').html(str)
	}
	function get_li_a(txt){
		return '<li><a href="/mobile/Goods/search/q/'+txt+'">'+txt+'</a><span class="del-h">删除</span></li>'
	}
	// 添加一个历史
	function add_a_history(v){
		var s = get_serch();
		if(s){
			s.push(v);
			s = uniq(s);

		}else{
			 s = new Array();
			 s.push(v)
		}
		set_serch(s);
	}
	function get_serch(){
		return JSON.parse(localStorage.getItem('goods_serch'))
	}
	function set_serch(v){
		localStorage.setItem('goods_serch', JSON.stringify(v))
	}

	function uniq(array){
		var temp = [];
		array = array.reverse()
		for(var i = 0; i < array.length; i++) {
			if(array.indexOf(array[i]) == i){
				temp.push(array[i])
			}
		}
		//console.log(array,temp)
		if(temp.length>8){
			temp.pop();
		}
		return temp.reverse();
	}
	$('.history-list').on('click','.del-h',function () {
		var delStr = $(this).siblings('a').html();
        var loc = get_serch();
        Array.prototype.remove = function(val) {
            var index = this.indexOf(val);
            if (index > -1) {
                this.splice(index, 1);
            }
        };
        for(var i of loc){
            if(i==delStr){
                console.log(i);
                loc.remove(i)
			}
        }
        set_serch(loc);
        $(this).parent().remove()
    })
</script>
