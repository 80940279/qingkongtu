<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"./template/mobile/rainbow/cart\index.html";i:1577065505;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\footer_nav.html";i:1576812558;s:79:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\wx_share.html";i:1576490065;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>购物车--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
        <div class="ds-in-bl search center">
            <span>购物车</span>
        </div>
    </div>
</div>
<style>
    body{
        background-color: #fff;
    }
    p{
        margin:0;
        padding: 0;
    }
    .classreturn{
        width: 16rem;
        height: 1.9333rem;
        background-color: #f8f8f8;
        border-bottom: 1px solid #f8f8f8;
        text-align: center;
        line-height: 1.87733rem;
        /* position: fixed; */
        z-index: 999;
        top: 0;
    }
    .get_mp span.disable {
        cursor: default;
        color: #e9e9e9;
    }
    .guesslike ul li:nth-child(2n+1) {
        padding-right: .04267rem;
    }
    .guesslike ul li {
        float: left;
        width: 50%;
        position: relative;
    }
    .guesslike ul li:nth-child(2n+1) .similer-product {
        float: right;
    }
    .guesslike ul li .similer-product {
        background-color: #fff;
        clear: both;
        overflow: hidden;
        display: block;
        padding-bottom: .42667rem;
        width: 100%;
    }
    .guesslike ul li .similer-product img {
        width: 7.95733rem;
        height: 7.68rem;
    }
    .payallb{
        height: 1.76rem;
        background-color: #fff;
    }
    .radio i{
        width: 0.85rem;
        height: 0.85rem;
        border-radius: 50%;
        border: solid 0.04rem #999999;
        background: none;
    }
    .payallb{
        border-top: 0.03rem solid #eee;
    }
    /*.payit .alllef{*/
        /*width: 10.71rem;*/
    /*}*/
    .payallb .alllef .radio{
        margin: 0;
        padding-left: 0.66rem;
        padding-top: 0.45rem;
    }
    .payallb .alllef .radio .all{
        margin-left: 0.58rem;
        color: #666666;
    }
    .payallb .youbia{
        width: 8.17rem;
    }
    .payit .fl p .pmo{
        font-size: 0.54rem;
        font-weight: 500;
    }
    .payit .fl p span{
        font-weight: bold;
    }
    .payit .fl .lastime span{
        font-size: 0.47rem;
        color: #1e1e1e;
        font-weight: 400;
    }
    .payallb .youbia p{
        padding-right: 0.55rem;
    }
    .payit .fr{
        width: 4.27rem;
    }
    .payit .fr a{
        height: 1.3rem;
        line-height: 1.3rem;
        font-size: 0.54rem;
        margin-top: 0.25rem;
        margin-right: 0.6rem;
        border-radius: 0.6rem;
    }
    .Set-meal-wrap{
        margin: 0.43rem!important;
        background-color: #fff;
        /*width: 15.15rem;*/
        border-radius: 0.21rem;
        padding: 0;
    }
    .orderlistshpop-titles{
        height: 1.792rem;
        line-height: 1.792rem;
    }
    .orderlistshpop-titles p{
        line-height: 2.04rem;
        padding: 0;
        font-weight: bold;
    }
    .r-first{
        width: 0.85rem;
        margin-right: 0.62rem;
        padding: 0.6rem 0;
    }
    .radio .dapei_icon_s{
        width: 0.85rem;
        height: 0.85rem;
    }
    .radio .check_t .dapei_icon_s{
        width: 0.85rem;
        height: 0.85rem;
        border-radius: 50%;
        margin: 0;
        background: url(/template/mobile/rainbow/static/images/ck2.png) no-repeat 100% 100%;
        border: 1px solid #f32c2c;
    }
    .sc_list{
        padding: 0;
        border: none;
    }
    .sc_list .shopimg img{
        width: 3.1rem;
        height: 3.1rem;
    }
    .radio .check_t .dapei_icon_b{
        width: 0.85rem;
        height: 0.85rem;
        border-radius: 50%;
        margin: 0;
        background: url(/template/mobile/rainbow/static/images/ck2.png) no-repeat 100% 100%;
        border: none;
    }
    .radio .dapei_icon_b{
        width: 0.85rem;
        height: 0.85rem;
        background-color: #ffffff;
        border: 1px solid #999;
    }
    .radio i{
        margin: 0;
        background-size: 100% 100%!important;
    }
    .orderlistshpop-titles{
        padding: 0 0.58rem;
    }
    .maleri30{
        margin: 0 0.58rem;
        margin-right: 0;
        padding-top: 0.34rem;
        padding-bottom: 0.45rem;
    }
    .sc_list .radio{
        margin-right: 0.3rem;
    }
    .sc_list .deleshow{
        width: 8.56rem;
        margin-right: 0.28rem;
    }
    .sc_list .deleshow .deletes .similar-product-text{
        font-size: 0.55rem;
        color: #333333;
        font-weight: bold;
        margin: 0;
    }
    .sc_list .deleshow .weight{
        font-size: 0.47rem;
        line-height: 1.0667rem;
        bottom: 1.6rem;
        right: .7rem;
        width: 8.94rem;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: left;
    }
    .sc_list .deleshow .prices .sc_pri{
        margin: 0;
        font-size: 0.45rem;
        margin-top: 0.4rem;
    }
    .sc_list .deleshow .prices .sc_pri .pic{
        font-size : 0.55rem; 
        font-weight: bold;
        color:#FFC155;
    }
    .sc_list .deleshow .prices{
        margin-top: 0.45rem;
    }
    .mp_price_i{
        line-height: 0.7rem;
    }
    .mun-two span.h-mp{
        line-height: 0;
    }
    .price-foots .price-foot-two{
        font-size: 0.43rem;
        color: #ff2a2a;
        border: solid 0.02rem #ff3939;
        background-color: #ffffff;
        padding: 0.13rem 0.28rem;
        border-radius: 0.64rem;
        margin: 0;
        line-height: 0.43rem;
    }
    .plus span{
        border:none;
    }
    .plus span input.input-num{
        height: 1rem;
        padding: 0;
        color: #1c1c1c;
        font-weight: bold;
    }
    .get_mp span.mp_minous{
        color: #999999;
        font-size: 0.67rem;
        width: 1.06667rem;
        height: 1.06667rem;
        border-radius: 0.51rem;
    }
    .get_mp span.mp_plus{
        color: #999999;
        font-size: 0.67rem;
        width: 1.06667rem;
        height: 1.06667rem;
        border-radius: 0.51rem;
    }
    .h-smw{
        padding-left: 0.3rem;
    }
    .sc_list .deleshow .prices .plus{
        font-weight: bold;
        color: #1c1c1c;
        border-top: 0.04rem solid #eee;
        border-bottom: 0.04rem solid #eee;
        border-radius: 0.51rem;
    }
    .sc_list .deleshow .prices .plus img{
        width:100%;
    }
    .sc_list .deleshow .prices .sc_pri em{
        font-size: 0.47rem;
    }
    .z_cart_wrap{
        padding: 0;
        border: 0;
    }
    .radio .check_t i{
        background: url(/template/mobile/rainbow/static/images/cgood.png);
        border: none;
    }
    .guesslike ul li .similer-product img{
        width: 7.68rem;
    }
    .guesslike ul li .similer-product{
        width: 7.68rem;
		height: 10.4rem;
		position:relative;
    }
    .guesslike ul li{
        width: 7.68rem;
        margin: 0 0.2rem 0.2rem 0;
    }
    .guesslike ul li:nth-child(2n+1){
        padding: 0;
        margin-left: 0.2rem;
    }
    .guesslike .likeshop span{
        vertical-align: bottom;
    }
    .content{
        margin: 0;
    }
	
	
	.Set-meal-wrap{
		border-bottom: 0rem solid #f3f5f7
	}
	.guesslike ul:after{
		content:"";
		display:block;
		clear:both;
	}
	.similar-product-text{
		margin-top:0.3rem;
	}
	.similar-product-text{
		height:auto !important;
		margin-bottom: 0.3rem;
	}
	.similar-product-price{
		position:absolute;
		left:0;
		bottom:0.4rem;
		font-weight:800;
	}
	
	.guesslike{
		margin-bottom:1.83rem;
	}
</style>
<?php if(empty($user['user_id'])): ?>
    <!--###用户未登录###-->
    <!-- <div class="loginlater">
        <img src="/template/mobile/rainbow/static/images/small_car.png"/>
        <span>登录后可同步电脑和手机购物车</span>
        <a href="<?php echo U('Mobile/User/loagin'); ?>">登录</a>
    </div> -->
    <div class="nonenothing" style="border-top:1px solid #dddddd" <?php if(!(empty($cartList) || (($cartList instanceof \think\Collection || $cartList instanceof \think\Paginator ) && $cartList->isEmpty()))): ?>style="display: none"<?php endif; ?>>
        <img src="/template/mobile/rainbow/static/images/nothing.png"/>
        <p>登录后可同步电脑和手机购物车</p>
        <a href="<?php echo U('Mobile/User/loagin'); ?>">登录</a>
    </div>
<?php endif; if(!empty($user['user_id'])): ?>
    <div class="cart_list">
        <!--购物车没有商品-s-->
        <div class="nonenothing" <?php if(!(empty($cartList) || (($cartList instanceof \think\Collection || $cartList instanceof \think\Paginator ) && $cartList->isEmpty()))): ?>style="display: none"<?php endif; ?>>
            <img src="/template/mobile/rainbow/static/images/nothing.png"/>
            <p>你的购物车空空如也~</p>
            <a href="<?php echo U('Mobile/Index/index'); ?>">去逛逛</a>
        </div>
        <!--购物车没有商品-e-->
<?php endif; if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $i = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?>
                <!--<if condition="!$cart['combination_cart']">-->

                <div class="z_cart_wrap">
                    <div class="orderlistshpop p" id="cart_list_<?php echo $cart['id']; ?>" date-type="<?php echo $cart['prom_type']; ?>">
                        <div class="maleri30 Set-meal-wrap h-smw">
                            <!--商品列表-s-->
                            <div class="sc_list">
                                <div class="radio fl ">
                                    <!--商品勾选按钮-->
                                    <span onClick="checkGoods(this)" <?php if($cart[selected] == 1): ?>class="che check_t"<?php else: ?>class="che"<?php endif; ?>>
                                     <i>
                                         <input name="checkItem" type="checkbox" style="display:none;" value="<?php echo $cart['id']; ?>" <?php if($cart[selected] == 1): ?>checked="checked"<?php endif; ?>>
                                     </i>
                                     </span>
                                </div>
                                <div class="shopimg fl">
                                    <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$cart[goods_id])); ?>">
                                        <!--商品图片-->
                                        <!--<img src="<?php echo goods_thum_images($cart['goods_id'],400,400,$cart[item_id]); ?>">-->
                                        <img src="https://www.hetungugu.com/<?php echo $cart['goods']['goods_thumb']; ?>">
                                    </a>
                                </div>
                                <div class="deleshow fr">
                                    <div class="deletes">
                                        <!--商品名-->
                                        <span class="similar-product-text fl">
                                            <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$cart[goods_id])); ?>"><?php echo $cart[goods_name]; ?></a>
                                        </span>
                                        <!--删除按钮-->
                                        <!--<a href="javascript:void(0);" class="delescj deleteGoods" data-cart-id="<?php echo $cart['id']; ?>"><img src="/template/mobile/rainbow/static/images/dele.png"/></a>-->
                                    </div>
                                    <!--商品属性，规格-->
                                    <!--<p class="weight"><?php echo $cart[spec_key_name]; ?></p>-->
                                    <p class="weight">15克</p>
                                    <div class="prices">
                                        <p class="sc_pri fl">
                                            <!--商品单价-->
                                            <!--<span id="cart_<?php echo $cart['id']; ?>_member_goods_price"><em>￥</em><?php echo explode_price($cart['member_goods_price'],0); ?><em>.<?php echo explode_price($cart['member_goods_price'],1); ?></em></span>-->
                                            <span class="pic" id="cart_<?php echo $cart['id']; ?>_member_goods_price"><?php echo intval($cart['member_goods_price']*$exchange_rate); ?>元</span>
                                            <span id="cart_<?php echo $cart['id']; ?>_member_goods_price">/<?php echo explode_price($cart['member_goods_price'],0); ?>日元</span>
                                        </p>
                                        <!--加减数量-->
                                        <div class="plus fr get_mp">
                                            <span class="mp_minous"><img src="/template/mobile/rainbow/static/images/cart-dowm@2x.png" alt="dowm"></span>
                                            <span class="mp_mp">
                                                <input name="changeQuantity_<?php echo $cart['id']; ?>" type="text" id="changeQuantity_<?php echo $cart['id']; ?>" value="<?php echo $cart['goods_num']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" class="input-num"/>
                                            </span>
                                            <span class="mp_plus"><img src="/template/mobile/rainbow/static/images/cart-add@2x.png" alt="add"></span>
                                        </div>
                                        <p class="sc_pri fr" style="display: none">库存不足
                                            <input  type="hidden" name="goods_num[<?php echo $cart['id']; ?>]"  value="0"  class="input-num" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--商品列表-e-->
                        </div>
                    </div>
                </div>
                <!--购物车没有商品-e-->
                    <!--</div>-->
                    <!--商品列表-e-->
                <!--</div>-->
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
        <!--提交栏-s-->
        <?php if(!(empty($cartList) || (($cartList instanceof \think\Collection || $cartList instanceof \think\Paginator ) && $cartList->isEmpty()))): ?>
            <div class="foohi foohiext">
                <div class="payit ma-to-20 payallb" style="margin-bottom:2.13333rem;">
                    <div class="fl alllef">
                        <div class="radio fl">
                                <span class="che alltoggle checkFull" onClick="checkGoods(this)">
                                    <i></i>
                                </span>
                            <span class="all">全选</span>
                        </div>
                        <div class="youbia">
                            <p><span class="pmo">合计：</span><span>￥</span><span id="total_fee">0.00</span></p>
                            <p class="lastime"><span id="goods_fee">利润：￥0.00</span></p>
                        </div>
                    </div>
                    <div class="fr">
                        <a href="javascript:void(0);" onclick="cart_submit();">去结算</a>
                    </div>
                </div>
            </div>
            <!--提交栏-e-->
            <script type="text/javascript">
                $(document).ready(function(){
                    initDecrement();
                    initCheckBox();
                });
            </script>
         <?php endif; ?>
    </div>
<!--看看热卖-start-->
<div class="hotshop seehotsho" style="display: none">
    <div class="thirdlogin">
        <h4>看看热卖</h4>
    </div>
</div>
<div class="floor guesslike" style="display: none">
    <div class="likeshop">
        <ul>
            <?php if(is_array($hot_goods) || $hot_goods instanceof \think\Collection || $hot_goods instanceof \think\Paginator): if( count($hot_goods)==0 ) : echo "" ;else: foreach($hot_goods as $key=>$good): ?>
                <li>
                    <a href="<?php echo U('Mobile/goods/goodsInfo',array('id'=>$good[goods_id])); ?>">
                        <div class="similer-product">
                            <img src="<?php echo goods_thum_images($good[goods_id],400,400); ?>"/>
                            <span class="similar-product-text"><?php echo getsubstr($good[goods_name],0,20); ?></span>
                                <span class="similar-product-price">
                                    ¥<span class="big-price"><?php echo $good[shop_price]; ?></span>
                                    <!--<span class="small-price">.00</span>-->
                                </span>
                        </div>
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="add">热卖商品实时更新，常回来看看哟~</div>
</div>
<!--看看热卖-end-->

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

<script type="text/javascript">
    $(document).ready(function(){
    });
        AsyncUpdateCart();
    $(function () {
        priceShow()

    })
    //初始化金额
    function priceShow(){
        var data = $('.price-foot-two').find('em');
        $.each(data,function (i,o) {
            var price = Number($(this).text()).toFixed(2);
            $(this).text(price);
        })
    }



    //点击结算
    function cart_submit() {
        //获取选中的商品个数
        var j = 0;
        $('input[name^="checkItem"]:checked').each(function () {
            j++;
        });
        //选择数大于0
        if (j > 0) {
            //跳转订单页面
            window.location.href = "<?php echo U('Mobile/Cart/cart2'); ?>"
        } else {
            layer.open({content: '请选择要结算的商品！', time: 2});
            return false;
        }
    }
    //购物车对象
    function CartItem(id, goods_num,selected) {
        this.id = id;
        this.goods_num = goods_num;
        this.selected = selected;
    }
    //初始化计算订单价格
    function AsyncUpdateCart(){
        var cart = new Array();
        var inputCheckItem = $("input[name^='checkItem']");
        inputCheckItem.each(function(i,o){
            var id = $(this).attr("value");
            var goods_num = $(this).parents('.sc_list').find("input[id^='changeQuantity']").attr('value');
            if ($(this).attr("checked") == 'checked') {
                var cartItemCheck = new CartItem(id,goods_num,1);
                cart.push(cartItemCheck);
            }else{
                var cartItemNoCheck = new CartItem(id,goods_num,0);
                cart.push(cartItemNoCheck);
            }
        })
        $.ajax({
            type : "POST",
            url:"<?php echo U('Mobile/Cart/AsyncUpdateCart'); ?>",//,
            dataType:'json',
            data: {cart: cart},
            success: function(data){
                if(data.status == 1){
                    $('#goods_num').empty().html(data.result.cart_price_info.goods_num);
                    $('#total_fee').empty().html(data.result.cart_price_info.total_fee.toFixed(2));
                    $('#goods_fee').empty().html('利润：￥'+data.result.cart_price_info.goods_fee.toFixed(2));
                    if(data.result.cart_list.length > 0){
                        set_cart_list_price(data.result.cart_list);
                    }else{
                        $('.total_price').empty();
                        $('.cut_price').empty();
                    }
                }
            }
        });
    }

    //更新价格
    function set_cart_list_price(cart_list)
    {
        for(var i = 0; i < cart_list.length; i++){
            $('#cart_'+cart_list[i].id+'_goods_price').empty().html('￥'+Number(cart_list[i]['goods_price']).toFixed(2));
            $('#cart_'+cart_list[i].id+'_total_price').empty().html('￥'+cart_list[i].total_fee.toFixed(2));
            $('#cart_'+cart_list[i].id+'_market_price').empty().html('￥'+cart_list[i].member_goods_price*cart_list[i].goods_num.toFixed(2)); //活动价格
            $('#cart_'+cart_list[i].id+'_save_price').empty().html(cart_list[i].cut_fee.toFixed(2));
            $('#changeQuantity_'+cart_list[i].id).val(cart_list[i].goods_num); //数量
            if (cart_list[i].hasOwnProperty("combination_cart") && cart_list[i].combination_cart.length > 0) {
                set_cart_list_price(cart_list[i].combination_cart);
            }
            //共省多少钱
            countDiscount();
        }
    }

    $(function(){
        countDiscount();
    })
    //遍历每个套餐共省多少钱
    function countDiscount(){
        $('.Set-meal-wrap ').each(function(i,o){
            var s =$(this).find('.orderlistshpop');
            // console.log(s);
            var countPrice = 0;
            s.each(function () {
                countPrice += parseFloat($(this).find('.price-foot-two em').text());
            })

            $(this).find('.orderlistshpop-titles em').text(countPrice.toFixed(2))
        })
    }

    //商品数量加减
    $(function(){
        //减数量
        $('.mp_minous').click(function(){
            if(!$(this).hasClass('disable')){
                var inputs = $(this).siblings('.mp_mp').find('input');
                var val = inputs.val();
                if(val>0){
                    val--;
                }
                inputs.val(val);
                inputs.attr('value',val);
                initDecrement();
                conCheckBox();
                changeNum(this);
                var html = '<em>￥</em><?php echo explode_price($cart['member_goods_price'],0); ?><em>.<?php echo explode_price($cart['member_goods_price'],1); ?></em>';
                var id = '#' + cart_<?php echo $cart['id']; ?>_member_goods_price.id;
                $(id).html(html)
                console.log($(id).html())
            }
        })
        //加数量
        $('.mp_plus').click(function(){
            var inputs = $(this).siblings('.mp_mp').find('input');
            var val = inputs.val();
            val++;
            if(val > 200){
                val = 200;
                layer.open({content: "购买商品数量不能大于200",time:2});
            }
            inputs.val(val);
            inputs.attr('value',val);
            initDecrement();
            changeNum(this);
            conCheckBox();
        })
        $(document).on("blur", '.get_mp input', function (e) {
            var changeQuantityNum = parseInt($(this).val());
            if(changeQuantityNum <= 0){
                layer.open({
                    content: '商品数量必须大于0'
                    ,btn: ['确定']
                });
                $(this).val($(this).attr('value'));
            }else{
                $(this).attr('value', changeQuantityNum);
            }
            initDecrement();
            changeNum(this);
            conCheckBox();
        })
    })

    //勾选商品
    function checkGoods(obj){

        if($(obj).hasClass('check_t')){
            //改变颜色
            $(obj).removeClass('check_t');
//          搭配购改变颜色
            $(obj).parents(".Set-meal-wrap").find(".dpg-radios-class").children("span").removeClass("check_t");
                 $(obj).parents(".Set-meal-wrap").find(".sc_list_icn").addClass("sc_list-none");
            //取消选中
            $(obj).find('input').attr('checked',false);
        }else {
            //改变颜色
            $(obj).addClass('check_t');
            //勾选选中
             $(obj).find('input').attr('checked',true);
           //          搭配购改变颜色
     		 $(obj).parents(".Set-meal-wrap").find(".dpg-radios-class").children("span").addClass("check_t");
       		  $(obj).parents(".Set-meal-wrap").find(".sc_list_icn").removeClass("sc_list-none");

        }

        //选中全选多选框
        if($(obj).hasClass('checkFull')){
            if($(obj).hasClass('check_t')){
                $(".che").each(function(i,o){
                    $(this).addClass('check_t');
                     $(this).parents(".Set-meal-wrap").find(".dpg-radios-class").children("span").addClass("check_t");
       		 		  $(this).parents(".Set-meal-wrap").find(".sc_list_icn").removeClass("sc_list-none");
                    $(this).find('input').attr('checked',true);
                })
            }else{
                $(".che").each(function(i,o){
                    $(this).removeClass('check_t');
                     $(this).parents(".Set-meal-wrap").find(".dpg-radios-class").children("span").removeClass("check_t");
                		  $(this).parents(".Set-meal-wrap").find(".sc_list_icn").addClass("sc_list-none");
                    $(this).find('input').attr('checked',false);
                })
            }
        }
    }
//  默认选中虚线
    $(".Set-meal-wrap").find(".sc_list_icn").addClass("sc_list-none");
    //更改购买数量对减购买数量按钮的操作
    function initDecrement(){
        $("input[id^='changeQuantity']").each(function(i,o){
            if($(o).val() == 1){
                $(o).parents('.get_mp').find('.mp_minous').addClass('disable');
            }
            if($(o).val() > 1){
                $(o).parents('.get_mp').find('.mp_minous').removeClass('disable');
            }
        })
    }
    //多选框点击事件
    $(function () {
        $(document).on("click", '.che', function (e) {
            checkGoods($(this));
            initCheckBox();
            AsyncUpdateCart();
        })
    })
    //更改购物车请求事件
    function changeNum(obj){
        // var checkall = $(obj).parents('.orderlistshpop').find('.che');
        var checkall = $(obj).parents('.sc_list').find('.radio span');

        if(!checkall.hasClass('check_t')){
            checkGoods(checkall);
            initCheckBox();

        }
        var input = $(obj).parents('.get_mp').find('input');
        var cart_id = input.attr('id').replace('changeQuantity_','');
        var goods_num = input.attr('value');
        var cart = new CartItem(cart_id, goods_num, 1);
        var type = $(obj).parents('.orderlistshpop').attr('data-type');
        if(type == 7){
            var v = $(obj).parents('.orderlistshpop').next().find('.mp_price_input').val();
        }
        $.ajax({
            type: "POST",
            url: "<?php echo U('Mobile/Cart/changeNum'); ?>",//+tab,
            dataType: 'json',
            data: {cart: cart},
            success: function (data) {
                if(data.status == 1){
                    AsyncUpdateCart();
                }else{
                    input.val(v ? v : data.result.limit_num);
                    layer.open({
                        content: data.msg
                        ,btn: ['确定']
                    });
                    initDecrement();
                }
            }
        });
    }
    //删除购物车商品
    $(function () {
        //删除购物车商品事件
        $(document).on("click", '.deleteGoods', function (e) {
            var cart_ids = new Array();
            cart_ids.push($(this).attr('data-cart-id'));
            layer.open({
                content: '确定要删除此商品吗'
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    layer.close(index);
                    $.ajax({
                        type : "POST",
                        url:"<?php echo U('Mobile/Cart/delete'); ?>",
                        dataType:'json',
                        data: {cart_ids: cart_ids},
                        success: function(data){
                            if(data.status == 1){
                                for (var i = 0; i < cart_ids.length; i++) {
                                    var that = $('#cart_list_' + cart_ids[i]);
                                    var type = that.parent().find('.orderlistshpop').eq(0).attr('data-type');
                                    var goods_id = that.parent().find('.orderlistshpop').eq(0).attr('data-goods-id');
                                    var item_id = that.parent().find('.orderlistshpop').eq(0).attr('data-goods-item');
                                    var cart_id = that.parent().find('.orderlistshpop').eq(0).find('.deleteGoods').attr('data-cart-id');//主商品cart_id
                                    //如果主商品和被删除的商品相等，则全部删除
                                    if(cart_id == cart_ids[i]){
                                        that.parent().remove();
                                        cartEmpty();
                                    }else {
                                        if(that.parent().find('.orderlistshpop').length <= 2){
                                            that.parent().remove();
                                            if(type==7){
                                                //搭配购删除剩下主商品的时候，恢复原价
                                                recoveryGoods(goods_id,item_id)
                                            }else{
                                                cartEmpty();
                                            }
                                        }else{
                                            that.remove();
                                            cartEmpty();
                                        }
                                    }

                                }

                            }else{
                                layer.open({content: data.msg,time:2});
                            }
                            AsyncUpdateCart();
                        }
                    });
                }
            });
        })
    })

    /**
     * 检测购物车是否为空
     */
    function cartEmpty() {
        var store_div = $('.orderlistshpop');
        if(store_div.length == 0){
            location.reload();
        }
    }


    /**
     * 检测选项框
     */
    function initCheckBox(){
        var checkBoxsFlag = true;
        $("input[name^='checkItem']").each(function(i,o){
            if ($(this).attr("checked") != 'checked') {
                checkBoxsFlag = false;
            }
        })
        if(checkBoxsFlag == false){
            $('.checkFull').removeClass('check_t');
        }else{
            $('.checkFull').addClass('check_t');
        }
        conCheckBox()
    }

    /**
     * 搭配购删除回复普通商品原价
     */
    function recoveryGoods(id,item) {
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/Cart/add'); ?>",
            data: {goods_id: id,goods_num: 1,item_id: item},//+tab,
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if (data.status == 1) {
                    window.location.reload();
                } else {
                    layer.msg('操作失败', {icon: 2});
                }
            }
        });
    }
    /**
     * 检测搭配购选项框
     */
    function conCheckBox(){
        $('.Set-meal-wrap ').each(function(i,o){
            var s =$(this).find('.orderlistshpop').eq(0).find('.radio span');
                if(s.hasClass('check_t')){
                    $(this).find('.orderlistshpop-titles').find('.radio span').addClass('check_t')
                    $(this).find('.orderlistshpop-titles').find('.radio input').attr('checked','checked')
                }
        })
    }
</script>
</body>
</html>



