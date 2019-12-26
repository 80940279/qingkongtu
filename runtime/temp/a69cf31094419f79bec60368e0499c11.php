<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:46:"./template/mobile/rainbow/goods\goodsList.html";i:1576913712;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:78:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\top_nav.html";i:1576813430;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\footer_nav.html";i:1576812558;s:79:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\wx_share.html";i:1576490065;}*/ ?>
<link rel="stylesheet" href="/template/mobile/rainbow/static/css/search.css">
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>商品列表--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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

    <!--搜索栏-s-->
    <div class="classreturn whiback">
        <div class="content">
            <!--<div class="ds-in-bl return">
                <a href="javascript:history.back(-1);"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
            </div>-->
            <div class="ds-in-bl menu">
                <a href="javascript:void(0);"><img src="/template/mobile/rainbow/static/images/class1.png" alt="菜单"><span>全部商品</span></a>
            </div>
            <div class="ds-in-bl search">
                <form action="" method="post">
                    <div class="sear-input">
                        <a href="<?php echo U('Goods/ajaxSearch'); ?>">
                            <input type="text" placeholder="搜索您想要的商品名称或者类别" value="<?php echo I('q')?>">
                        </a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <!--搜索栏-e-->

    <!--顶部隐藏菜单-s-->
    <div class="flool up-tpnavf-wrap tpnavf [top-header]">
    <div class="footer up-tpnavf-head">
        <ul>
            <li>
                <a href="<?php echo U('Mobile/Goods/goodsList',array()); ?>"><div class="Collapsing"><span>全部商品</span></div></a>
            </li>
            <?php if(is_array($goods_category_tree) || $goods_category_tree instanceof \think\Collection || $goods_category_tree instanceof \think\Paginator): if( count($goods_category_tree)==0 ) : echo "" ;else: foreach($goods_category_tree as $k=>$vo): if($vo[parent_id] == 0): ?>
                    <li>
                        <div class="Collapsing"><span><?php echo getSubstr($vo['cat_name'],0,12); ?></span><img src="/template/mobile/rainbow/static/img/main-icon02.png" alt=""></div>
                        <div class="coll_body">
                            <?php if(is_array($vo['tmenu']) || $vo['tmenu'] instanceof \think\Collection || $vo['tmenu'] instanceof \think\Paginator): if( count($vo['tmenu'])==0 ) : echo "" ;else: foreach($vo['tmenu'] as $tk=>$tm): ?>
                                <a href="<?php echo U('Mobile/Goods/goodsList',array('id'=>$tm[cat_id])); ?>"><?php echo $tm['cat_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>  
                        </div>
                    </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<style>
.coll_body{display: none; }
.coll_body a{display:block; margin:10px; padding-left: 1rem;
 }
</style>
<script type="text/javascript">
$(function(){	
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 1){ 
			$('.tpnavf').hide()
		}
	})
    $(".Collapsing").click(function(){
        $(".yello").removeClass("yello");
        $(this).toggleClass("yello").siblings('.Collapsing').removeClass("yello");//切换图标
        $(this).next(".coll_body").slideToggle(300).parent().siblings().find(".coll_body").slideUp(300);
        //$(this).next(".coll_body").slideToggle(300).siblings(".coll_body").slideUp(300);
    });

	$(".footer ul li a").click(function () {
        //$(this).addClass('yello').parent().siblings().find('a').removeClass('yello')
        $(this).addClass('yellos').siblings('a').removeClass('yellos');
        $('.tpnavf').hide();
	});
})
</script>
    <!--顶部隐藏菜单-e-->

    <!--排序按钮-s-->
    <nav class="storenav p search_list_dump" id="head_search_box product_sort">
        <ul>
            <li>
                <span class="lb <?php if((I('sort') == 'is_new' or  I('sort') == 'comment_count')): ?>red<?php endif; ?>">综合</span>
                <i></i>
            </li>
            <li class="<?php if(I('sort') == 'sales_sum'): ?>red<?php endif; ?>">
            <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'sales_sum')),''));?>" >
                <span class="dq">销量</span>
            </a>
            </li>
            <li class="<?php if(I('sort') == 'shop_price'): ?>red<?php endif; ?>">
            <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>$sort_asc)),''));?>">
                <span class="jg">价格</span>
                <i  class="pr  <?php if(I('sort_asc') == 'asc'): ?>bpr2<?php endif; if(I('sort_asc') == 'desc'): ?> bpr1 <?php endif; ?>"></i>
            </a>
            </li>
            <li >
                <span class="sx">筛选</span>
                <i class="fitter"></i>

            </li>
            <li>
                <i class="listorimg"></i>
            </li>
        </ul>
    </nav>
    <!--排序按钮-e-->

    <!--商品详情s-->
    <div id="goods_list">
        <?php if(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty())): ?>
            <p class="goods_title" id="goods_title" style="line-height: 2rem;text-align: center;margin-top: 0.64rem; font-size:0.64rem">抱歉暂时没有相关结果,换个筛选条件试试吧！</p>
        <?php else: ?>
        <!--优惠券适用列表价格区间-->
        <!--<div class="coupon_apply_list">123此列表商品可以使用满200减50的优惠券</div>-->
        <!--<a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$vo[goods_id])); ?>" class="item"></a>-->

            <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $k=>$vo): ?>
            <div class="orderlistshpop p">
                <div class="maleri30">
                        <div class="sc_list se_sclist">
                            <div class="shopimg fl">
                                <?php if(!empty($vo['label_name'])): ?>
                                <div class="h-label" style="background: url(/template/mobile/rainbow/static/images/h-label.png) no-repeat;background-size: 2rem 0.5rem;"><p><?php echo $vo['label_name']; ?></p></div><?php endif; ?>
                                <img src="https://www.hetungugu.com/<?php echo $vo['goods_thumb']; ?>">
                            </div>
                            <div class="deleshow fr">
                                <div class="deletes">
                                    <span class="similar-product-text fl"><?php echo getSubstr($vo['name_brief'],0,20); ?></span>
                                </div>
                                <div class="b-deletes">
                                    <span class="similar-product-text fl"><?php echo getSubstr($vo['goods_name'],0,40); ?></span>
                                </div>
                                <div class="prices">
                                    <p class="sc_pri fl"><b><?php echo intval($vo[shop_price]*$exchange_rate); ?>元</b><span>/<?php echo intval($vo[shop_price]); ?>日元</span></p>
                                </div>
                                <p class="weight">
                                    <span>已售出<?php echo $vo[sales_sum]+$vo['virtual_sales_sum']; ?>件</span>
                                </p>
                                <div class="float-r">
                                    <span><img src="/template/mobile/rainbow/static/images/icon_collect.png" alt=""></span>
                                    <span goods_id="<?php echo $vo['goods_id']; ?>" class="add_cart"><img src="/template/mobile/rainbow/static/images/icon-cart.png" alt=""></span>
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
    <!--商品详情e-->

    <!--加载更多S-->
    <?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): ?>
         <div class="loadbefore">
            <img class="ajaxloading" src="/template/mobile/rainbow/static/images/loading.gif" alt="loading...">
        </div>
    <?php endif; ?>
    <!--加载更多E-->

    <!--综合排序-s-->
    <div class="fil_all_comm">
        <div class="maleri30">
            <ul>
                <li class="<?php if(I('sort') == ''): ?>red<?php endif; ?>">
                    <a href="javascript:ios_click('<?php echo urldecode(U('Mobile/Goods/goodsList',array_merge($filter_param,array('sort'=>'')),''));?>')" >综合</a>
                </li>
                <li class="<?php if(I('sort') == 'is_new'): ?>red<?php endif; ?>">
                    <a href="javascript:ios_click('<?php echo urldecode(U('Mobile/Goods/goodsList',array_merge($filter_param,array('sort'=>'is_new')),''));?>')" >新品</a>
                </li>
                <li class="<?php if(I('sort') == 'comment_count'): ?>red<?php endif; ?>">
                    <a href="javascript:ios_click('<?php echo urldecode(U('Mobile/Goods/goodsList',array_merge($filter_param,array('sort'=>'comment_count')),''));?>')">评价</a>
                </li>
            </ul>
        </div>
    </div>
    <!--综合排序-e-->

    <!--筛选-s-->
<!--新的筛选页-->
<div class="screen_wi">
    <div class="title">筛选</div>
    <ul class="ul ul1">
        <li class="choose">
            <span <?php if(\think\Request::instance()->param('sel') == 'all' or \think\Request::instance()->param('sel') == 'all'): ?>class="ch_dg"<?php endif; ?>>
            显示全部<input type="hidden"  class="sel" value="all" >
            </span>
        </li>
        <li>
            <span <?php if(\think\Request::instance()->param('sel') == 'free_post'): ?>class="ch_dg"<?php endif; ?>>
            仅看包邮<input type="hidden"  value="free_post" >
            </span>
        </li>
        <li>
            <span <?php if(\think\Request::instance()->param('sel') == 'store_count'): ?>class="ch_dg"<?php endif; ?>>
            仅看有货<input type="hidden"  value='store_count'>
            </span>
        </li>
        <li>
            <span <?php if(\think\Request::instance()->param('sel') == 'prom_type'): ?>class="ch_dg"<?php endif; ?>>
            促销商品<input type="hidden"  value="prom_type" >
            </span>
        </li>
    </ul>
    <div class="line"></div>
    <div class="tit">价格</div>
    <ul class="ul ul2">
        <!--价格筛选-s-->
        <?php if(is_array($filter_price) || $filter_price instanceof \think\Collection || $filter_price instanceof \think\Paginator): if( count($filter_price)==0 ) : echo "" ;else: foreach($filter_price as $pricek=>$price): ?>
            <li data-href="<?php echo $price[href]; ?>"><?php echo $price[value]; ?></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div class="input">
        <input class="val1" placeholder='最低价' type="number">
        <text>-</text>
        <input class="val2" placeholder='最高价' type="number">
    </div>
    <div class="bottom">
        <p class="reset">重置</p><p class="ds-in-bl suce_ok ">确定</p>
    </div>
</div>
    <!--选择属性的弹窗-s-->
    <form name="buy_goods_form" method="post" id="buy_goods_form">

    </form>
    <!--选择属性的弹窗-e-->
<a href="" id="ios_a" style="position: absolute;top: -33px;left: -33px;">ios_click</a>
<input type="hidden" value="<?php echo $page->totalPages; ?>" id="totalPages" name="totalPages">
<div class="mask-filter-div" style="display: none;"></div>

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
                <a <?php if(CONTROLLER_NAME == 'Goods'): ?>class="yello" <?php endif; ?> href="<?php echo U('Goods/goodsList'); ?>">
                    <div class="icon">
                    	<div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/goods1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/goods2.png"/> </div>
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
            <!--<li>
                <a <?php if(CONTROLLER_NAME == 'User'): ?>class="yello" <?php endif; ?> href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <div class="icon_tp1 icon_tps"><img src="/template/mobile/rainbow/static/images/user1.png"/> </div>
                        <div class="icon_tp2 icon_tps"><img src="/template/mobile/rainbow/static/images/user2.png"/> </div>
                        <p>我的</p>
                    </div>
                </a>
            </li>-->
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
<!--<button class="guide" style="display:none;" onclick="follow_wx()">关注公众号</button>-->
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

<script type="text/javascript" src="/template/mobile/rainbow/static/js/sourch_submit.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        ajax_header_cart();
    });
        //############   点击多选确定按钮      ############
        // t 为类型  是品牌 还是 规格 还是 属性
        // btn 是点击的确定按钮用于找位置
        get_parment = <?php if(isset($_GET['m'])){unset($_GET['m']); unset($_GET['c']);unset($_GET['a']);}echo json_encode($_GET); ?>;
        function submitMoreFilter(t)
        {
            var key = '';   // 请求的 参数名称
            var val = new Array();  // 请求的参数值
            $(".filter").each(function(i,o){
                var che=$(o).find('.fr input');
                if(che.attr('checked')){    //选中的值
                    key = $('#key').val();
                    val.push(che.val());
                }
            });
            // 没有被勾选的时候
            if(val == ''){
                return false;
            }
            // 品牌
            if(t == 'brand')
            {
                get_parment.brand_id = val.join('_');
            }

            // 规格
            if(t == 'spec')
            {
                if(get_parment.hasOwnProperty('spec'))
                {
                    get_parment.spec += '@'+key+'_'+val.join('_');
                }else{
                    get_parment.spec = key+'_'+val.join('_');
                }
            }
            // 属性
            if(t == 'attr')
            {
                if(get_parment.hasOwnProperty('attr'))
                {
                    get_parment.attr += '@'+key+'_'+val.join('_');
                }
                else
                {
                    get_parment.attr = key+'_'+val.join('_');
                }
            }

            // 组装请求的url
            var url = '';
            for ( var k in get_parment )
            {
                url += "&"+k+'='+get_parment[k];
            }
            location.href ="/index.php?m=Mobile&c=Goods&a=goodsList"+url;
        }


    /**
     * <a href="javascript:ios_click('/Mobile/Goods/goodsList/id/437/sort/sales_sum')" class="red">
     *     转为下面的
     *     /index.php?m=Mobile&c=Goods&a=goodsList&id=437&sort=sales_sum
     */
    function ios_click(url){
        var arr = url.replace(/.html/i,'').split('/')
        if(arr[0] == ''){
            arr.splice(0,1)
        }
        if(arr[0] == 'index.php'){
            arr.splice(0,1)
        }
        var str = '/index.php?m=' + arr[0] + '&c=' + arr[1] + '&a=' + arr[2]
        for (var i = 3; i < arr.length; i++) {
            str += '&' + arr[i] + '='
            i++;
            str += arr[i]
        }
        $("#ios_a").attr('href',str);

        $("#ios_a")[0].click();
        //location.href = str
    }
    //    新的筛选页选择
    $(".screen_wi .ul li").click(function(){
        $(this).siblings().removeClass('choose');
        $(this).addClass('choose');
    })
    //    筛选重置
    $(".reset").click(function(){
        $(".screen_wi .ul li").removeClass();
        $(".screen_wi .ul li").first().addClass("choose");
    })
        //确定按钮
        $('.suce_ok').click(function(){
            var min=$(".screen_wi .input .val1").val();  //最低价
            var max=$(".screen_wi .input .val2").val();  //最高价
            var href1='<?php echo $price[href]; ?>'.split('price/')[0];   //输入最低，最高价时跳转的href
            var href=$(".ul2 .choose").data('href');         //获取当前选中价格区间的href
            var val=min+'-'+max;
            if(min!='' && max!=''){
                window.location.href=href1+'price/'+val;
            }else if($(".ul2 .choose").text()){
                window.location.href=href;
            }
            //关闭隐藏筛选弹窗
            $('.screen_wi').animate({width: '0', opacity: 'show'}, 'normal',function(){
                $('.screen_wi').hide();
                $('.mask-filter-div').hide();
            });
            //判断当前二级筛选状态
            if($('.suce_ok').is('.two')) {
                var t=$('#key').attr('class');
                submitMoreFilter(t);
            }else{
                var sel = $('.sel').val();
                // 组装请求的url
                var url = '';
                for ( var k in get_parment )
                {
                    if(k != 'a' && k != 'c' && k != 'm' && k!='price'){
                        url += "&"+k+'='+get_parment[k];
                    }
                }
                if(sel){
                    url += '&sel='+sel;
                }
                location.href= "/index.php?m=Mobile&c=Goods&a=search"+url;
//                var url = '';
//                for ( var k in get_parment )
//                {
//                    if(sel != ''&& k=='sel'){
//                        continue;
//                    }
//                    url += "&"+k+'='+get_parment[k];
//                }
//                location.href= "/index.php?m=Mobile&c=Goods&a=goodsList"+url+"&sel="+sel;
            }
        })
    //关闭隐藏筛选弹窗
    $(".mask-filter-div").click(function(){

        $('.screen_wi').animate({width: '0', opacity: 'show'}, 'normal',function(){
            $('.screen_wi').hide();
        });

        $(this).css({display:"none"});
        $('.choose_shop_aready').hide();
        sure();
    })
    //返回按钮
    $('.seac_retu').click(function(){
        //判断当前二级筛选状态
        if($('.suce_ok').is('.two')){
            $(".filter").each(function(i,o){
                //去掉全部选择
                $(o).find('.fr input').attr('checked',false);
            });
            $('#key').removeAttr('class');
            //显示一级筛选
            $('.screen_wi,.popcover,.one-related').show();
            $('.two-related').hide();
            $('.sx_jsxz').html('筛选');
            $('.suce_ok').removeClass('two');
        }else{
            $('.screen_wi').animate({width: '0', opacity: 'hide'}, 'normal',function(){
                undercover();
                $('.screen_wi').hide();
            });
        }
    })
    //筛选弹窗的全部分类筛选
    function cateArr(){
        $('.catearr').show();
        $('.tow-price').hide();
        $('.filter').hide();
        $('.filterspec').hide();
    }
    //显示规格对应值筛选
    function filtercriteria(criteria,id){
        $('#key').addClass(criteria).val(id);
        $('.filter').each(function(i,o){
            if($(o).attr('data-id') == id){
                $(o).show();
            }else{
                $(o).hide();
            }
        });
        $('.tow-price').hide();
        $('.catearr').hide();
    }
    //显示筛选弹窗的价格筛选
    function filterprice(){
        $('.tow-price').show();
        $('.filterspec').hide();
        $('.catearr').hide();
    }

    var  page = 1;
    var  page_one = false;
    /**
     * ajax加载更多商品
     */
    function ajax_sourch_submit()
    {
        if(parseInt($("#totalPages").val())<2) return;
        if(page_one) return;
        page_one = true;
        page += 1;
        $.ajax({
            type : "POST",
            url:"/index.php/Mobile/Goods/goodsList", //+tab,<?php echo U('Mobile/Goods/goodsList'); ?>
//			data : $('#filter_form').serialize(),// 你的formid 搜索表单 序列化提交
            data:{
                id:'<?php echo \think\Request::instance()->param('id'); ?>',
                sort:'<?php echo \think\Request::instance()->param('sort'); ?>',
                sort_asc:'<?php echo \think\Request::instance()->param('sort_asc'); ?>',
                sel:'<?php echo \think\Request::instance()->param('sel'); ?>',
                spec:'<?php echo \think\Request::instance()->param('spec'); ?>',
                attr:'<?php echo \think\Request::instance()->param('attr'); ?>',
                price:'<?php echo \think\Request::instance()->param('price'); ?>',
                start_price:'<?php echo \think\Request::instance()->param('start_price'); ?>',
                end_price:'<?php echo \think\Request::instance()->param('end_price'); ?>',
                brand_id:'<?php echo \think\Request::instance()->param('brand_id'); ?>',
                is_ajax:1,
                p:page
            },
            success: function(data)
            {
                if($.trim(data) == ''){
                    $('.loadbefore').hide();
                    $('#getmore').hide();
                }else{
                    $("#goods_list").append(data);
                    page_one = false;
                }

                    /*if( $("#goods_list").hasClass('addimgchan')){
                        $('.orderlistshpop').addClass('addimgchan')
                    }else{
                        $('.orderlistshpop').removeClass('addimgchan')
                    }*/
            }
        });
    }

        //显示隐藏筛选弹窗
        var lb = $('.search_list_dump .lb')
        var fil = $('.fil_all_comm');
        var cs = $('.classreturn,.search_list_dump');
        var son = $('.search_list_dump .jg').siblings();
        $('.storenav ul li span').click(function(){
            $(this).parent().addClass('red').siblings('li').removeClass('red')
            if(!$(this).hasClass('lb')){
                fil.hide();
                undercover();
                cs.removeClass('pore');
            }
            if(!$(this).hasClass('jg')){
                son.removeClass('bpr1');
                son.removeClass('bpr2');
            }
        });


$(function(){
    //显示综合筛选弹窗
    lb.click(function(){
        fil.show();
        cover();
        cs.addClass('pore');
    });

    lb.html($('.on').html());
        //筛选
        $('.search_list_dump .sx').click(function(){
            $('body').css('position','relative');
            $('.screen_wi').animate({width: '14.4rem', opacity: 'show'}, 'normal',function(){
                $('.screen_wi').show();
                cover();
            });
        })

        //  顶部筛选 筛选1-popcover
        $('.popcover ul li span').click(function(){
//            $(this).toggleClass('ch_dg');
            //给span添加样式，并给其子代input添加class
            $(this).addClass('ch_dg').find('input').addClass('sel');
            $(this).parent('li').siblings('li').find('span').removeClass('ch_dg')
                    .find('input').removeClass('sel');
        })


        // 一级筛选条件筛选2-one-related
        $('.one-related .myorder .order').click(function(){
            $('.two-related').show();
            $('.suce_ok').addClass('two');
            $('.tow-price,.one-related,.popcover').hide();
            $('.sx_jsxz').html($(this).find('.fl span').text());
        })

        //筛选3-two-related
        $('.two-related .myorder .order').click(function(){
            var mright = $(this).find('.fr i');
            var input = mright.find("input");
            mright.toggleClass('Mright');
            //改变复选框状态
            mright.hasClass('Mright') ? input.attr('checked',true) : input.attr('checked',false);
        })

        //切换商品排列样式
        $('.listorimg').click(function(){
            $(this).toggleClass('orimg');
            $('#goods_list').toggleClass('addimgchan');
            /*$('.orderlistshpop').toggleClass('addimgchan');*/
        })
    })
//        点击购物车按钮
    $(document).on("click",".add_cart",function(e){
        var goods_id=$(this).attr("goods_id");
        
        $.post("<?php echo U('Mobile/Goods/goodsinfolist'); ?>",{'id':goods_id},function(res){
            $('#buy_goods_form').html(res);
            $('#join_cart').text('确定');
            $('#join_cart').width('100%').show();
            $('#join_cart').attr('data-id',1);
            $('.choose_shop_aready').show();
            $('.podee').hide();
            $('.mask-filter-div').show();
            setTimeout(function(){
                $('#join_cart').removeClass('buy_bt_disable')
            },1000)
        });
    })

    //ajax请求购物车列表
    function ajax_header_cart(){
        var cart_cn = getCookie('cn');
        if (cart_cn == '') {
            $.ajax({
                type: "GET",
                url: "/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
                success: function (data) {
                    cart_cn = getCookie('cn');
                }
            });
        }
        $('#tp_cart_info').html(cart_cn);
    }

    //function ajax_sourch_submit(){};//没用,只是为了覆盖头部引用的JS
</script>
	</body>
</html>