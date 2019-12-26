<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:41:"./template/mobile/rainbow/cart\cart2.html";i:1568702281;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header_nav.html";i:1573866148;s:79:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\cart\cart2_info.html";i:1568702281;s:82:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\cart\cart2_bespeak.html";i:1568702281;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>填写订单--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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
            <a id="backs" href="javascript:history.back(-1);"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>填写订单</span>
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
<script src="/public/js/md5.min.js"></script>
<script type="text/javascript" src="/template/mobile/rainbow/static/js/date.js"></script>
<script type="text/javascript" src="//api.map.baidu.com/api?ak=<?php echo $tpshop_config['basic_bd_ak']; ?>&type=lite&v=1.0"></script>
<style>
    .g4{
        background-color: #f2f2f2;
    }
    .content{
        background-color: #ffffff;
    }
    .edit_gtfix .namephone .top{
        font-weight: bold;
    }
    .edit_gtfix .namephone .bot span{
        font-weight: 500;
        margin-left: 0.8rem;
    }
    .fill-orderlist{
        margin-top: 0.55rem;
        padding: 0;
        background-color: #f2f2f2;
        margin-bottom: 0.427rem;
    }
    .shopprice .img_or{
        margin: 0;
        width: 3.84rem;
        height: 3.84rem;
    }
    .shopprice .img_or img{
        width: 100%;
        height: 100%;
    }
    .shopprice .fon_or{
        margin-left: 0.62rem;
        margin-top: 0;
        font-size: 0.55rem;
    }
    .shopprice .fon_or h2{
        margin: 0;
        color: #1d1d1d;
        font-size: 0.55rem;
    }
    .shopprice .fon_or div{
        margin-top: 0.41rem;
        font-size: 0.47rem;
        color: #999999;
        line-height: .6rem;
    }
    .shopprice .price_or{
        margin-top: 0;
        width: 11rem;
        float: left;
        padding-left: .55rem;
    }
    .fill-orderlist .shopprice .price_or p.red{
        float: left;
        width: 50%;
        font-size: 0.64rem;
        font-weight: bold;
        text-align: left;
        margin-top: 0.9rem;
    }
    .fill-orderlist .shopprice .price_or p.ligfill{
        float: right;
        width: 50%;
        font-size: 0.64rem;
        margin-top: 0.9rem;
        color: #1b1b1b;
    }
    .z-select-wrap .z-select-title{
        background-color: #ffffff;
        font-size: ;
    }
    .information_dr{
        margin-top: 0.427rem;
    }
    .z-dispatching .fl{
        font-size: 0.55rem;;
    }
    .invoice .myorder .order .fl span{
        font-size: 0.55rem;
    }
    .invoice .myorder .order .fl p{
        margin-bottom: 0.4rem;
    }
    .go-set-password{
        margin-left: 3.66rem;
    }
    #coupon_div{
        margin-top: 0;
    }
    .customer-messa p{
        font-size: 0.55rem;
        padding: 0;
        line-height: 1.9rem;
    }
    .customer-messa textarea{
        outline: none;
        margin-top: 0;
        height: 2.99rem;
        background-color: #f2f2f2;
        padding: 0.47rem 0.62rem;
    }
    .z-monry .z-monry-cont .fl{
        margin: 0;
        line-height: 1.26rem;
    }
    .z-monry .z-monry-cont .fr a{
        margin: 0;
        line-height: 1.26rem;
        font-weight: bold;
    }
    .dizhi-pop{
        background-color: #fafafa;
    }
    .z-Package-hrader{
        background-color: #eee;
    }
    .jd_listaddless{
        padding: 0.661rem 0;
        border-bottom: 0.021rem solid #e6e6e6;
    }
            .address-list{
                width: 100%;
                padding: 0.667rem 0;
                border-bottom: 0.022rem solid #e6e6e6;
                position: relative;
                overflow: hidden;
            }
            .address-list .list-radio{
                float: left;
                width: 0.64rem;
                height: 0.64rem;
                position: absolute;
                left: 0.64rem;
                top: 50%;
                transform: translate(0,-50%);
            }
            .address-list .list-radio input{
                display: block;
                width: 0.64rem;
                height: 0.64rem;
                position: relative;
                appearance:none;
                -webkit-appearance:none;
                outline: none;
                border: none;
                z-index: 2;
            }
            .address-list .list-radio input::before{
                position: absolute;
                z-index: 3;
                content: "";
                width: 0.64rem;
                height: 0.64rem;
                background-image: url(/template/mobile/rainbow/static/images/address-icon02.png);
                background-size: 0.64rem;
                background-repeat: no-repeat;
            }
            .address-list .list-radio input:checked::before{
                background-image: url(/template/mobile/rainbow/static/images/address-icon01.png);
            }
            .address-list .list-right{
                width: 10.8rem;
                height: auto;
                float: left;
                margin-left: 2.091rem;
                overflow: hidden;
            }
            .address-list .list-right .p1{
                font-size: 0.597rem;
                font-weight: bold;
                color: #333;
                line-height: 1.024rem;
            }
            .address-list .list-right .p1 span{
                margin-right: 0.661rem;
            }
            .address-list .list-right .p2{
                font-size: 0.597rem;
                color: #666;
                line-height: 0.9rem;
            }
            .address-list .list-modify{
                z-index: 3;
                position: absolute;
                width: 1.4rem;
                height: 1.4rem;
                right: 0.256rem;
                top: 50%;
                transform: translate(0,-50%);
                background-image: url(/template/mobile/rainbow/static/images/address-icon03.png);
                background-repeat: no-repeat;
                background-size: 0.768rem;
                background-position: center;
            }
            .createnew{
                position: fixed;
                width: 14.72rem;
                height: 1.963rem;
                border-radius: 0.213rem;
                left: 0.64rem;
                bottom: 0.64rem;
                font-size: 0.768rem;
                color: #fff;
                line-height: 1.963rem;
                text-align: center;
                z-index: 10;
            }
            .myorder{
                border-bottom: 1px solid #dadada;
                min-height: 1.877rem;
                overflow: hidden;
            }
            .floor .order{
                line-height: 1.877rem;
            }
            .floor .order .fl{
                float: left;
                width: 2.6rem;
                height: 1.877rem;
            }
            .floor .order .fr{
                float: right;
                width: 11rem;
                height: 1.877rem;
                margin: 0;
                font-size: 0.555rem;
                color: #666;
            }
            .floor .order .fr input{
                float: left;
                width: 100%;
                height: 1.877rem;
                border: none;
                outline: none;
                font-size: 0.555rem;
                color: #666;
                background-color: none;
            }
            .floor .order .fr .span01{
            color: #bbb;
            font-size: 0.512rem;
            }
           .floor .order .fr input::-webkit-input-placeholder{
            color: #bbb;
            font-size: 0.512rem;
            text-align: left;
            }
            .floor .order .fr .Mright{
                float: right;
            }
            .modify-btn{
                width: 14.72rem;
                height: 1.963rem;
                border-radius: 0.213rem;
                font-size: 0.768rem;
                color: #fff;
                line-height: 1.963rem;
                text-align: center;
                margin: 0.64rem auto 0;
                background-color: #ff4c4c;
            }
            .modify-btn a{
                display: block;
                width: 14.72rem;
                height: 1.963rem;
                color: #fff;
            }
            #address_form_confirm{
                cursor: pointer;
            }
</style>
<div id="wrapBody">
    <div id="pagePay">
        <form name="cart2_form" id="cart2_form" method="post">
            <input type="hidden" name="is_virtual" value="<?php echo !empty($cartList[0]['goods']['is_virtual'])?$cartList[0]['goods']['is_virtual']:0; ?>">
            <input type="hidden" name="coupon_id" value=""/>
            <input type="hidden" id="wap_invoice_title" name="invoice_title" value="个人">
            <input type="hidden" id="wap_taxpayer" name="taxpayer" value="">
            <input type="hidden" id="invoice_desc" name="invoice_desc" value="商品明细">
            <input type="hidden" id="address_id" name="address_id" value="" autocomplete="off"/> <!--收货地址id-->
            <input type="hidden" name="pay_points" value="" autocomplete="off">
            <input type="hidden" name="user_money" value="" autocomplete="off">
            <input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
            <!--立即购买才会用到-s-->
            <input type="hidden" name="action" value="<?php echo \think\Request::instance()->param('action'); ?>">
            <input type="hidden" name="goods_id" value="<?php echo \think\Request::instance()->param('goods_id'); ?>">
            <input type="hidden" name="item_id" value="<?php echo \think\Request::instance()->param('item_id'); ?>">
            <input type="hidden" name="goods_num" value="<?php echo \think\Request::instance()->param('goods_num'); ?>">
            <!--立即购买才会用到-e-->
            <input type="hidden" name="pay_pwd" value=""/>
            <input type="hidden" name="user_note" value="">
            <input type="hidden" name="consignee" value="">
            <input type="hidden" name="mobile" value="">
            <input type="hidden" name="shop_id" value="">
            <input type="hidden" name="take_time" value="">
        </form>
        <!--地址-s-->
        <div class="edit_gtfix shipping_div" id="addressDefault">
            <div class="namephone fl">
                <div class="top">
                    <div class="le fl" id="default_address_consignee"></div>
                    <div class="lr fl" id="default_address_mobile"></div>
                </div>
                <div class="bot">
                    <i class="dwgp"></i>
                    <span id="default_address_text"></span>
                </div>
            </div>
            <div class="fr youjter">
                <i class="Mright"></i>
            </div>
            <div class="ttrebu">
                <img src="/template/mobile/rainbow/static/images/tt.png"/>
            </div>
        </div>
        <!--地址-e-->
        <!--商品信息-s-->
        <div class="ord_list fill-orderlist p">
            <div class="maleri30">
                <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $i = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?>
                    <div class="shopprice">
                        <div class="img_or fl"><img src="<?php echo goods_thum_images($cart[goods_id],100,100,$cart[item_id]); ?>"/></div>
                        <div class="fon_or fl">
                            <h2 class="similar-product-text"><?php echo $cart[goods_name]; ?></h2>

                            <div><?php echo $cart[spec_key_name]; ?></div>
                        </div>
                        <div class="price_or fr">
                            <p class="red"><span>￥</span><span><?php echo $cart[member_goods_price]; ?></span></p>

                            <p class="ligfill">x<?php echo $cart[goods_num]; ?></p>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!--商品信息-e-->

        <?php if($cartList[0]['goods']['is_virtual'] ==2): ?>
            <div class="information_dr" >
                <div class="maleri30">
                    <div class="invoice list7">
                        <div class="myorder p">
                            <div class="content30">
                                <div class="order"  id="bespeak_info">
                                    <div class="fl">
                                        <span>预约信息</span>
                                    </div>
                                    <div class="fr">
                                        <span style="margin-top: 0.6rem;">填写预约信息</span>
                                        <i class="Mright"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information_dr">
                <div class="maleri30">
                    <div class="invoice list7">
                        <div class="myorder p">
                            <div class="content30">
                                <div class="order" id="replace_shop" >
                                    <div class="fl">
                                        <span>选择门店</span>
                                    </div>
                                    <div class="fr">
                                        <span style="margin-top: 0.6rem;" id="shop_address"></span>
                                        <i class="Mright"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!--配送方式 上门自提s-->
<div class="z-select-wrap shipping_div">
    <!--<div class="z-select-title">-->
        <!--<div class="maleri30">-->
            <!--选择配送方式-->
        <!--</div>-->
    <!--</div>-->
    <div class="maleri30 z-dispatching-wrap">
        <div class="p z-dispatching border-none">
            <div class="fl">
                快速配送
            </div>
            <div class="fr">
                <label class="dispatching-checkbox" >
                    <div id="express_delivery" class="dispatching-cont z-dispatching-cheng"></div>
                </label>
            </div>
        </div>
        <div class="z-dispatching-one dispatching-font1" style="display: block;">
            工作日、双休日与节假日均可送货
        </div>
        <?php if($cartList[0]['goods']['prom_type'] ==8 && $cartList[0]['goods']['prom_id'] > 0): else: ?>
            <div class="p z-dispatching ma-top-1" id="door_to_door_div" style="display: none">
                <div class="fl">
                    上门自提
                </div>
                <div class="fr">
                    <label class="dispatching-checkbox">
                        <div id="door_to_door" class="dispatching-cont">
                        </div>
                    </label>
                </div>

            </div>
            <div class="z-dispatching-one dispatching-font2">
                选择自提上门点并支付订单>收到提货短信>到自提点提货
            </div>
        <?php endif; ?>



        <div class="dispatching-Package">
            <!--自提时间-->
            <div class="invoice list7">
                <div class="myorder p">
                    <div class="content30">
                        <a class="remain">
                            <div class="order">
                                <div class="fl">
                                    <span>自提时间</span>
                                </div>
                                <div class="fr">
                                            <span class="invoice_Package" style="margin-top: 0.6rem;">
                                                <input type="text" id="date_time_picker_mask" value="<?php echo date('Y-m-d H:00',strtotime('+1 day')); ?>"
                                                       data-options="{'type':'YYYY-MM-DD hh:mm','beginYear':2018,'endYear':2088}"  >
                                                <em id="date_time_day"></em>
                                            </span>
                                    <i class="Mright" id="dtpm"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!--调用时间插件-->
            <script>
                $.date('#date_time_picker_mask');
                $(document).on('click', '#date_time_day,#dtpm', function () {
                    $('#date_time_picker_mask').trigger('click');
                });
            </script>
            <!--自提地点-->
            <div class="invoice list7" id="replace_shop">
                <div class="myorder p">
                    <div class="content30">
                        <a class="remain">
                            <div class="order">
                                <div class="fl">
                                    <span>自提地点</span>
                                </div>
                                <div class="fr">
                                    <span class="invoice_Package select-invoice-Package" style="margin-top: 0.6rem;" id="shop_address"></span>
                                    <i class="Mright"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--配送方式 上门自提e-->

        <?php endif; ?>





        <!--支持配送,发票信息-s-->
        <div class="information_dr">
            <div class="maleri30">
                <div class="invoice list7">
                    <div class="myorder p">
                        <div class="content30">
                                <div class="order" id="invoiceDefault">
                                    <div class="fl">
                                        <span>发票信息</span>
                                    </div>
                                    <div class="fr">
                                        <span class="invoice_title" style="margin-top: 0.6rem;">不开发票</span>
                                        <i class="Mright"></i>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--优惠券-s-->
                <div class="information_dr" id="coupon_div" style="display: <?php echo $cartList[0]['prom_type']==8?'none':'block'; ?>">
                    <div>
                        <div class="invoice list7">
                            <div class="myorder p">
                                <div class="content30 coupon_click" style="cursor:pointer">
                                    <div class="order">
                                        <div class="fl">
                                            <span>优惠券</span>
                                            <span class="couponssl"><em id="coupon_count"><?php echo (isset($userCouponNum['usable_num']) && ($userCouponNum['usable_num'] !== '')?$userCouponNum['usable_num']:'0'); ?></em>张可用</span>
                                        </div>
                                        <div class="fr">
                                            <span class="setalit counpn_name"><?php echo $checkconpon['name']; ?></span>
                                            <i class="Mright"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--优惠券-e-->
                <!--使用余额-s-->
                <!-- <div class="invoice list7">
                    <div class="myorder p">
                        <div class="content30">
                            <a class="remain" href="javascript:void(0);">
                                <div class="order">
                                    <div class="fl">
                                        <span>使用余额</span>

                                        <p>余额：￥<?php echo $user['user_money']; ?></p>
                                    </div>
                                    <div class="fr z-toggle-btn">
                                        <label class="z-toggle z-toggle-royal">
                                            <input type="checkbox" id="user_money" value="<?php echo $user['user_money']; ?>"/>

                                            <div class="z-tarck">
                                                <div class="z-handle">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
                <!--使用余额-e-->
                <?php if($cartList[0]['goods']['is_virtual'] !=2): ?>
                    <div class="invoice list7"  style="display: <?php echo $cartList[0]['prom_type']==8?'none':'block'; ?>">
                        <div class="myorder p">
                            <div class="content30">
                                <a class="remain" href="javascript:void(0);">
                                    <div class="order">
                                        <div class="fl">
                                            <span>使用积分</span>

                                            <p>积分:<?php echo $user['pay_points']; ?><i>可抵扣:<?php echo round(pay_point_money($user['pay_points']),2); ?>元</i></p>
                                        </div>
                                        <div class="fr z-toggle-btn">
                                            <label class="z-toggle z-toggle-royal">
                                                <input type="checkbox" id="pay_points" value="<?php echo $user['pay_points']; ?>"/>

                                                <div class="z-tarck">
                                                    <div class="z-handle">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!--使用余额、积分-s-->
                <div id="balance-li" class="invoice list7">

                    <div class="myorder myorder-2 p" id="paypwd_view" style="display: none">
                        <div class="content30">
                            <label>
                                <div class="incorise">
                                    <span>支付密码：</span>
                                    <input type="password" id="pay_pwd" placeholder="请输入支付密码" autocomplete="off"/>

                                    <?php if(empty($user['paypwd'])): ?>
                                        <a class="go-set-password" href="<?php echo U('Mobile/User/paypwd'); ?>?redirect_url=<?php echo $redirect_url; ?>">去设置支付密码?</a>
                                        <?php else: ?>
                                        <a class="go-set-password" href="<?php echo U('Mobile/User/paypwd'); ?>?redirect_url=<?php echo $redirect_url; ?>">忘记密码?</a>
                                    <?php endif; ?>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <!--使用余额、积分-e-->
            </div>
        </div>
        <!--支持配送,发票信息-s-->

        <!--卖家留言-s-->
        <div class="customer-messa">
            <div class="other-item no_shipping_div">
                <div class="other-left">手机 :</div>
                <div class="other-right leave-word-box">
                    <input class="leave-word tapassa user_note_txt" id="mobile_check" maxlength="13" placeholder="请输入手机号码,接受兑换码"/>
                </div>
            </div>
            <div class="maleri30">
                <p>买家留言</p>
                <textarea class="tapassa" id="user_note" maxlength="50" placeholder="选填：对本次交易的说明.."></textarea>
                <span class="xianzd"><em id="zero">50</em>/50</span>
            </div>
        </div>
        <!--卖家留言-e-->
        <!--订单金额-s-->
        <div class="information_dr ">
            <div class="z-monry">
                <div class="maleri30">
                    <div class="p z-monry-cont">
                        <div class="fl">
                            订单优惠
                        </div>
                        <div class="fr">
                            <a> ￥<span id="order_prom_amount">0</span></a>
                        </div>
                    </div>
                    <div class="p z-monry-cont">
                        <div class="fl">
                            商品金额
                        </div>
                        <div class="fr">
                            <a> ￥<span id="total_fee"><?php echo $cartPriceInfo['total_fee']; ?></span></a>
                        </div>
                    </div>
                    <div class="p z-monry-cont shipping_div">
                        <div class="fl">
                            配送费用
                        </div>
                        <div class="fr">
                            <a> ￥<span id="postFee">0</span></a>
                        </div>
                    </div>
                    <div class="p z-monry-cont">
                        <div class="fl">
                            优惠券抵扣
                        </div>
                        <div class="fr">
                            <a> ￥<span id="couponFee">0</span></a>
                        </div>
                    </div>
                    <div class="p z-monry-cont">
                        <div class="fl">
                            积分抵扣
                        </div>
                        <div class="fr">
                            <a> ￥<span id="pointsFee">0</span></a>
                        </div>
                    </div>
                 <!--    <div class="p z-monry-cont">
                        <div class="fl">
                            余额抵扣
                        </div>
                        <div class="fr">
                            <a> ￥<span id="balance">0</span></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--订单金额 -e-->
        <!--提交订单-s-->
        <!--<div class="mask-filter-div" style="display: none;"></div>-->
        <div class="payit fillpay ma-to-20">
            <div class="fr submit_price">
                <a href="javascript:void(0)" onclick="submit_order()">提交订单</a>
            </div>
            <div class="fl">
                <p><span class="pmo">应付金额：</span>￥<span id="payables">0</span><span></span></p>
            </div>
        </div>
        <!--提交订单-e-->
    </div>
    <div id="couponList" style="display: none">
        <div class="c_uscoupon_bgs"></div>
        <!--优惠券弹窗-s-->
        <div class="chooseebitcard newchoosecar coupongg" style="bottom: 0;" >
            <div class="choose-titr">
                <span>优惠券<em id="cl"></em></span>
                <i class="closer" onclick="closer()"></i>
            </div>
            <div class="soldout_cp p" id="emptyCoupon" style="display: none">
                <img class="nmy" src="/template/mobile/rainbow/static/images/nmy.png" alt=""/>

                <p class="nzw">当前店铺暂无可使用的优惠券</p>
            </div>
            <div class="c_uscoupon">
                <div class="maleri30">
                    <div class="no_get_coupon">
                        <p class="canus">可用优惠劵<span>（以下是当前店铺可使用的优惠劵）</span></p>
                        <?php if(is_array($userCartCouponList) || $userCartCouponList instanceof \think\Collection || $userCartCouponList instanceof \think\Paginator): $k = 0; $__LIST__ = $userCartCouponList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$userCoupon): $mod = ($k % 2 );++$k;if($userCoupon['coupon'][able] == 1): ?>
                                <div class="cuptyp" onclick="checkCoupon(this)" data-couponid="<?php echo $userCoupon[id]; ?>"
                                     data-conponname="<?php echo $userCoupon['coupon'][name]; ?>">
                                    <a href="javascript:;">
                                        <div class="le_pri">
                                            <h1><em>￥</em><?php echo round($userCoupon['coupon'][money],0); ?></h1>

                                            <p>满<?php echo $userCoupon['coupon'][condition]; ?>元可用</p>
                                        </div>
                                        <div class="ri_int">
                                            <div class="to_two">
                                                <span class="ba">商城券</span>
                                                <span><?php echo $userCoupon['coupon'][name]; ?></span>
                                            </div>
                                            <div class="bo_two">
                                                <span class="cp9">有效期：<?php echo date('Y.m.d',$userCoupon['coupon'][use_start_time]); ?>-<?php echo date('Y.m.d',$userCoupon['coupon'][use_end_time]); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--优惠券弹窗-e-->
    </div>
    <div id="shopList" style="display: none">
        <!--选择提货人弹窗 s-->
        <div class="pop-prkage-wraps p pop-prkage-ziti shopList-b">
            <div class="z-Package-hrader">
                <i class="z-Package-icon Package-icon-close" id="shop_list_back"></i>
                <h5>选择<?php echo $cartList[0]['goods']['is_virtual']==2?'门店' :'自提点'; ?></h5>
            </div>
            <div class="z-Package-wrap ">
                <div class="z-Packageiphon-header p"></div>
                <div class="z-SelectPackage-wrap">
                    <ul class="z-SelectPackage-ul" id="shop_list"></ul>
                </div>
            </div>
            <div class="z-Package-footer-wrap">
                <div class="Package-footer">
                    <?php if($cartList[0]['goods']['is_virtual'] !=2): ?>
                        <div class="z-Package-footer p" id="shop_consignee_edit">
                            <div class="fl Package-foot-cont">提货人：<span id="consignee_txt"></span></div>
                            <div class="fl Package-foot-cont">电话：<span id="mobile_txt"></span></div>
                            <i class="Package-right-icon"></i>
                        </div>
                    <?php endif; ?>
                    <div class="Package-footer-btn">
                        <input type="button" id="shop_list_confirm" value="确定"/>
                        <label></label>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".select-invoice-Package").click(function () {
                $(".pop-prkage-ziti").show();
            })
            $(".pop-prkage-ziti .Package-icon-close").click(function () {
                $(".pop-prkage-ziti").hide();
            })
        </script>
        <!--选择提货人弹窗 e-->
    </div>
    <div id="map" style="display: none">
        <!--地图定位弹窗s-->
        <div class="pop-prkage-wraps p prkage-wraps-map">
            <div class="z-Package-hrader Package-hrader-absolute">
                <i class="z-Package-icon Package-icon-map" id="map_back"></i>
                <h5><?php echo $cartList[0]['goods']['is_virtual']==2?'门店' :'自提点'; ?>地址</h5>
            </div>
            <div id="container" style="width:16rem;height: 20.2666rem;border:#ccc solid 1px;"></div>
            <div class="parkage-plat-cont">
                <div class="parkage-plat-title p">
                    <i class="fl"></i>
                    <p class="fl" id="shop_name"></p>
                </div>
                <ul class="parkage-plat-ul">
                    <li id="shop_address_text"></li>
                    <li>电话：<em id="phone"></em></li>
                    <li id="work_time_desc"></li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            var map;
            function show_map(obj)
            {
                // var shop_item = $('.Package-radio-checked').parent().parent().parent();
                var shop_item = $(obj).parents('li');
                var lnt = shop_item.data('longitude');
                var lat = shop_item.data('latitude');
                $("#shop_name").html(shop_item.find('.z-SelectPackage-title').html());
                $("#shop_address_text").html('地址：'+shop_item.data('shop-address'));
                $("#phone").html(shop_item.data('phone'));
                $("#work_time_desc").html("营业时间："+shop_item.data('work-time')+"<span>"+shop_item.data('work-day')+"</span>");
                map = new BMap.Map("container");//在百度地图容器中创建一个地图
                var poi = new BMap.Point(lnt, lat);//定义一个中心点坐标
                map.centerAndZoom(poi, 17);//设定地图的中心点和坐标并将地图显示在地图容器中
                //创建检索信息窗口对象
                var marker = new BMap.Marker(poi); //创建marker对象
                map.addOverlay(marker); //在地图中添加marker
            }
        </script>
        <!--地图定位弹窗e-->
    </div>
    <div id="shopConsignee" style="display: none">
        <!--修改提货人弹窗s-->
        <div class="pop-prkage-wraps up-prkage-pop">
            <div class="z-Package-hrader">
                <i class="z-Package-icon up-thr-icons" id="shop_consignee_back"></i>
                <h5>修改提货人</h5>
            </div>
            <div class="z-Package-wrap">
                <form>
                    <div class="z-Package-cont ma-to-48">
                        <div class="fl z-Package-title">
                            提货人
                        </div>
                        <div class="fr z-Package-up">

                            <div class="up-cont">
                                <label></label>
                                <input type="text" id="consignee" value="" maxlength="30"/>
                            </div>
                        </div>
                    </div>
                    <div class="z-Package-cont ma-to-48">
                        <div class="fl z-Package-title">
                            联系方式
                        </div>
                        <div class="fr z-Package-up">
                            <div class="up-cont">
                                <label></label>
                                <input type="text" id="mobile" value="" maxlength="11"/>
                            </div>
                        </div>
                    </div>
                    <div class="Package-btn ma-to-535">
                        <label></label>
                        <input type="button" id="shop_consignee_save" value="保存"/>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            $(".z-Package-footer").click(function () {
                $(".up-prkage-pop").show();
            })
            $(".up-thr-icons").click(function () {
                $(".up-prkage-pop").hide();
            })
        </script>
        <!--修改提货人弹窗e-->
    </div>
    <div id="addressList" style="display: none;">
        <!--地址-s-->
        <div class="dizhi-pop">
            <div class="z-Package-hrader">
                <i class="z-Package-icon Package-icon-close" id="address_list_back"></i>
                <h5>选择地址</h5>
            </div>
            <!-- id="address_list_html" -->
            <div id="address_list_html" style="height:calc(100% - 2.048rem);overflow:  scroll;">
                <div class="address-list">
                    <div class="list-radio">
                        <input type="radio" value="" name="address">
                    </div>
                    <div class="list-right">
                        <p class="p1"><span>王小二</span><span>15079286171</span></p>
                        <p class="p2">广东省深圳市龙岗区坂田街道同兴路下围东三巷21号</p>
                    </div>
                    <a class="list-modify">

                    </a>
                </div>
                <div class="address-list">
                    <div class="list-radio">
                        <input type="radio" value="" name="address">
                    </div>
                    <div class="list-right">
                        <p class="p1"><span>王小二</span><span>15079286171</span></p>
                        <p class="p2">广东省深圳市龙岗区坂田街道同兴路下围东三巷21号</p>
                    </div>
                    <a class="list-modify">

                    </a>
                </div>

            </div>
            <style>
        </style>
            <!--地址-e-->
            <div class="createnew ">
                <a id="add_address" >新增收货地址</a>
            </div>
        </div>
    </div>
    <div id="invoicelist" style="display: none">
        <!--发票内容-s-->
        <div class="dizhi-pop">
            <div class="z-Package-hrader">
                <i class="z-Package-icon Package-icon-close" id="invoice_list_back"></i>
                <h5>发票信息</h5>
            </div>
            <div class="invoice_con">
                <div class="invoice_tit">
                    <h3>发票抬头</h3>
                    <div class="invoice_type">
                        <div class="intype_item"><input type="radio" name="radio_title"  checked id="intype1" value="个人"><label for="intype1"></label><span>个人</span></div>
                        <div class="intype_item"><input type="radio" name="radio_title" id="intype2" value="单位"><label for="intype2"></label><span>单位</span></div>
                    </div>
                </div>
                <hr class="invoice_line">
                <div class="invoice_deta">
                    <h3>发票内容</h3>
                    <div class="invoice_comdel" style="display: none;">
                        <input type="text" id="invoice_title" placeholder="请填写单位名称" value="">
                        <input type="text" id="taxpayer" placeholder="请在此填写纳税人识别号"  value="">
                        <p>开企业抬头发票，请准确填写对应的“纳税人识别号”，以免影响您的发票报销.</p>
                    </div>
                    <div class="invoice_type">
                        <div class="intype_item"><input type="radio" name="radio_cont" checked id="intype3" value="商品明细"><label for="intype3"></label><span>商品明细</span></div>
                        <div class="intype_item"><input type="radio" name="radio_cont" id="intype4" value="商品类别"><label for="intype4"></label><span>商品类别</span></div>
                        <div class="intype_item"><input type="radio" name="radio_cont" id="intype5" value="不开发票"><label for="intype5"></label><span>不开发票</span></div>
                    </div>
                </div>
                <div class="invoice_confir"><input type="button" id="submit_invoice" value="确认"></div>
            </div>
                    </div>
    </div>
    <div id="addressAdd" style="display: none">
        <div class="dizhi-pop">
            <div class="z-Package-hrader">
                <i class="z-Package-icon Package-icon-close" id="address_add_back"></i>
                <h5>编辑地址</h5>
            </div>
            <div class="floor my p edit">
                <form id="address_form">
                    <input type="hidden" value="" name="address_id"/>
                    <input type="hidden" value="" name="province"/>
                    <input type="hidden" value="" name="city"/>
                    <input type="hidden" value="" name="district"/>
                    <input type="hidden" value="" name="twon"/>
                    <div class="content">
                        <div class="floor list7">
                            <div class="myorder p">
                                <div class="content30">
                                    <a href="javascript:void(0)">
                                        <div class="order">
                                            <div class="fl">
                                                <span>收货人</span>
                                            </div>
                                            <div class="fr">
                                                <input type="text" value="" name="consignee" placeholder="姓名" />
                                                <span class="err" id="err_address_consignee"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="myorder p">
                                <div class="content30">
                                    <a href="javascript:void(0)">
                                        <div class="order">
                                            <div class="fl">
                                                <span>联系方式</span>
                                            </div>
                                            <div class="fr">
                                                <input type="tel" value="" name="mobile" placeholder="手机号码" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="myorder p">
                                <div class="content30">
                                    <a href="javascript:void(0)" onclick="location_address(this);">
                                        <div class="order">
                                            <div class="fl">
                                                <span>所在地区</span>
                                            </div>
                                            <div class="fr">
                                                <p id="area"><span class="span01">请选择</span></p>
                                                <i class="Mright"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="myorder p">
                                <div class="content30">
                                    <a href="javascript:void(0)">
                                        <div class="order">
                                            <div class="fl">
                                                <span>详细地址</span>
                                            </div>
                                            <div class="fr">
                                                <input type="text" value="" name="address" placeholder="详细地址需填写楼栋楼层或房间号信息" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modify-btn">
                        <p id="address_form_confirm">确认</p>
                    </div>
                </form>
            </div>
            <!--选择地区-s-->
            <div class="container">
                <div class="city">
                    <div class="screen_wi_loc">
                        <div class="classreturn loginsignup">
                            <div class="content">
                                <div class="ds-in-bl return seac_retu">
                                    <a href="javascript:void(0);" onclick="close_location();"><img src="/template/mobile/rainbow/static/images/return.png" alt="返回"></a>
                                </div>
                                <div class="ds-in-bl search center">
                                    <span class="sx_jsxz">选择地区</span>
                                </div>
                                <div class="ds-in-bl suce_ok">
                                    <a href="javascript:void(0);">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="province-list"></div>
                    <div class="city-list" style="display:none"></div>
                    <div class="area-list" style="display:none"></div>
                    <div class="town-list" style="display:none"></div>
                </div>
            </div>
            <!--选择地区-e-->
        </div>
        <script src="/template/mobile/rainbow/static/js/mobile-location.js"></script>
        <script>
            //选择地址回调
            var address_form = $('#address_form');
            function select_area_callback(province_name, city_name, district_name, province_id, city_id, district_id,town_name,town_id) {
                var area = province_name + ' ' + city_name + ' ' + district_name+' '+town_name;
                $("#area").text(area);
                address_form.find("input[name='province']").val(getCookie('province_id'));
                address_form.find("input[name='city']").val(getCookie('city_id'));
                address_form.find("input[name='district']").val(getCookie('district_id'));
                address_form.find("input[name='twon']").val(getCookie('town_id'));
            }
        </script>
    </div>
    <?php if($cartList[0]['goods']['is_virtual'] ==2): ?>
        <style>
    .delete{
        color: #fff;width: 0.2rem;height: 0.2rem;background: red;float: right;
    }
    .ul_li li{width: 1.6rem;margin-right: .7rem;height: 1.6rem;}
    .bookinfo_tp{border-radius: 1rem;}
    .Package-footer-btn input{width: calc(100% - 2rem); height: 1.8rem; border-radius: 0.9rem; margin: 0 1rem;}
    .invoice_Package{color: #666;font-size: 0.6rem;}
    #city{
        background-color: #fff;
    }
    .bookinfo_list{
        overflow: hidden;
    }
    .z-select-wrap{height: 2.34667rem;}
</style>
<!--填写预约信息弹窗 s-->
<div class="pop-prkage-wraps p pop-prkage-ziti" id="bespeak" style="display: none;position: fixed;width: 100%;height: 100%; z-index: 6;top: 0;left: 0;" >
    <div class="z-Package-hrader">
        <i class="z-Package-icon Package-icon-close" id="bespeak_close"></i>
        </a>
        <h5>填写预约信息</h5>
    </div>

    <form  id="bespeak_form" enctype="multipart/form-data">
        <div class="bookinfo_con">
            <?php if(is_array($cartList[0]['goods']['bespeak_template_unit']) || $cartList[0]['goods']['bespeak_template_unit'] instanceof \think\Collection || $cartList[0]['goods']['bespeak_template_unit'] instanceof \think\Paginator): $k = 0; $__LIST__ = $cartList[0]['goods']['bespeak_template_unit'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$template_unit): $mod = ($k % 2 );++$k;switch($template_unit['type']): case "1": ?>
                        <div class="bookinfo_list bookinfo_list_a"><label><?php echo $template_unit['title']; ?><i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                            <input type="text" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" id="<?php echo $template_unit['name']; ?>"  placeholder="<?php echo $template_unit['placeholder']; ?>" data-title="<?php echo $template_unit['title']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>" >
                        </div>
                    <?php break; case "2": ?>
                        <div class="boookinfo_mesg">
                            <h3><?php echo $template_unit['title']; ?>:<i style="color: #ff3333"><?php echo $template_unit['required']==1?"*":""; ?></i></h3>
                            <textarea type="textarea" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" data-title="<?php echo $template_unit['title']; ?>" placeholder="<?php echo $template_unit['placeholder']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>"></textarea>
                            <!--<span><i>50</i>/50</span>-->
                        </div>
                    <?php break; case "3": ?>
                        <div class="bookinfo_list bookinfo_radios">
                            <label ><?php echo $template_unit['title']; ?>：<i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                            <?php if(is_array($template_unit['value_arr']) || $template_unit['value_arr'] instanceof \think\Collection || $template_unit['value_arr'] instanceof \think\Paginator): $value_k = 0; $__LIST__ = $template_unit['value_arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value_v): $mod = ($value_k % 2 );++$value_k;?>
                                <div class="bookinfo_radios_cont">
                                    <input type="radio" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]"  id="<?php echo $template_unit['template_unit_id']; ?><?php echo $value_k; ?>" value="<?php echo $value_v; ?>" title="<?php echo $value_v; ?>" checked="" data-title="<?php echo $template_unit['title']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>">
                                    <label for="<?php echo $template_unit['template_unit_id']; ?><?php echo $value_k; ?>"><?php echo $value_v; ?></label>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    <?php break; case "4": ?>
                        <div class="bookinfo_list bookinfo_radios checkbox-label">
                            <label ><?php echo $template_unit['title']; ?>：<i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                            <?php if(is_array($template_unit['value_arr']) || $template_unit['value_arr'] instanceof \think\Collection || $template_unit['value_arr'] instanceof \think\Paginator): $value_k = 0; $__LIST__ = $template_unit['value_arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value_v): $mod = ($value_k % 2 );++$value_k;?>
                                <div class="bookinfo_radios_cont">
                                    <input data-unit="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" type="checkbox" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>][<?php echo $value_k; ?>]" data-title="<?php echo $template_unit['title']; ?>" id="<?php echo $template_unit['template_unit_id']; ?><?php echo $value_k; ?>" value="<?php echo $value_v; ?>" title="<?php echo $value_v; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>">
                                    <label for="<?php echo $template_unit['template_unit_id']; ?><?php echo $value_k; ?>"><?php echo $value_v; ?></label>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    <?php break; case "5": ?>
                        <div class="bookinfo_list bookinfo_list_select">
                            <label ><?php echo $template_unit['title']; ?>：<i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                            <select id="city" type="select" class="select" data-title="<?php echo $template_unit['title']; ?>" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>">

                                <option value="">请选择</option>
                                <?php if(is_array($template_unit['value_arr']) || $template_unit['value_arr'] instanceof \think\Collection || $template_unit['value_arr'] instanceof \think\Paginator): $value_k = 0; $__LIST__ = $template_unit['value_arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value_v): $mod = ($value_k % 2 );++$value_k;?>
                                    <option id="<?php echo $template_unit['template_unit_id']; ?><?php echo $value_k; ?>" value="<?php echo $value_v; ?>" title="<?php echo $value_v; ?>"><?php echo $value_v; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <i class="bookinfo_list_left"></i>
                        </div>
                    <?php break; case "6": ?>
                        <div class="bookinfo_list">
                            <label class="bookinfo_tp_name" ><?php echo $template_unit['title']; ?><i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                            <!--/template/mobile/rainbow/static/images/camera.png-->
                            <input type="hidden" id="img"  name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" data-title="<?php echo $template_unit['title']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>" >
                             <input type="file"style="display: none" onchange="up_img(this)" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]"  id="<?php echo $template_unit['template_unit_id']; ?>"  data-title="<?php echo $template_unit['title']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>"  accept="image/*"/>
                            <a class="bookinfo_tp " onclick="click_up(this)" >上传图片 </a>
                            <ul class="bookinfo_list_Ulimg ul_li" style="width: auto;min-width: 1.6rem;margin:.3rem 0;">

                            </ul>
                        </div>
                    <?php break; case "7": ?>
                        <!--多张图片-->
                       <div class="bookinfo_list" style="height: auto;min-height: 2.346667rem;">
                           <label class="bookinfo_tp_name" ><?php echo $template_unit['title']; ?>：<i><?php echo $template_unit['required']==1?"*":""; ?></i></label>
                           <input type="hidden" id="imgs"  name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" data-title="<?php echo $template_unit['title']; ?>" data-verify="<?php echo !empty($template_unit['required'])?'required':''; ?><?php echo !empty($template_unit['format'])?'|':''; ?><?php echo !empty($template_unit['format'])?$template_unit[format]:''; ?>" >
                           <input type="file" style="display: none" multiple onchange="up_img(this)"  id="<?php echo $template_unit['template_unit_id']; ?>"  accept="image/*" />
                           <a class="bookinfo_tp" onclick="click_up(this)"> 上传图片 </a>
                           <ul class="bookinfo_list_Ulimg">

                           </ul>
                       </div>
                    <?php break; case "8": ?>
                        <div class="bookinfo_list">
                            <div class="z-select-wrap">
                                <!--自提时间-->
                                <div class="invoice list7" style="height: 2.34667rem;">
                                    <div class="myorder p" style="border: 0;height: 2.34667rem;">
                                        <div class="content30" style="height: 2.34667rem;line-height: 2.34667rem;">
                                            <a class="remain" style="float: none;background: none;">
                                                <div class="order">
                                                    <div class="fl">
                                                        <span>预约时间</span>
                                                    </div>
                                                    <div class="fr" style="height: 2.34667rem;margin-top: 0;line-height: 2.34667rem;">
                                            <span class="invoice_Package" style="height: 2.34667rem;margin-top: 0;line-height: 2.34667rem;font-size: 0.7rem;color: #999;margin-right: 0.2rem;">
                                                <input type="text" id="date_time_picker_mask" value="" data-options="" style="font-size: 0.7rem;width: 5.8rem;">
                                                <input type="hidden" name="bespeak_form[<?php echo $template_unit['template_unit_id']; ?>]" id="bespeak_form_time" data-verify='' value="" >
                                                <!--<em id="date_time_day">【星期二】</em>-->
                                                <em id="date_time_day" style="font-size: 0.7rem;color: #999;">请选择时间</em>
                                            </span>
                                                        <i class="Mright" style="background-repeat: no-repeat;background-size:.34133rem .597333rem;width: .34133rem;height: 2.34667rem;display: block;float: left;background-position: center;margin: 0;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!--调用时间插件-->
                                <script>
                                    var endY = <?php echo date('Y',(isset($data['time']) && ($data['time'] !== '')?$data['time']:time())); ?>-0+1;
                                    var str = "{'type':'YYYY-MM-DD hh:mm','beginYear':<?php echo date('Y',(isset($data['time']) && ($data['time'] !== '')?$data['time']:time())); ?>,'endYear':"+endY+",'limitTime':'today'}";
                                    $('#date_time_picker_mask').attr('data-options',str);
                                    $.date('#date_time_picker_mask');
                                    $(document).on('click', '#date_time_day', function () {
                                        $('#date_time_picker_mask').trigger('click');
                                    });
                                </script>
                            </div>
                        </div>
                    <?php break; default: ?>default
                <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>

            <div class="Package-footer-btn" style="margin-top: 1.344rem;">
                <input type="button" onclick="bespeak_sub()" value="确定"/>
                <label></label>
            </div>
        </div>
    </form>
</div>
<!--填写预约信息弹窗 e-->


<script>
    //设置自提时间
//    function initShopTime() {
//        var date_time_picker_mask = $('#date_time_picker_mask').val();
//        date_time_picker_mask += ':00';
//        date = date_time_picker_mask.replace(/-/g, '/');
//        var d = new Date(date);
//        var timestamp = d.getTime().toString().substring(0, 10);
//        cart2_form.find("input[name='take_time']").val(timestamp);
//        $('#bespeak_form_time').val(timestampToTime(timestamp));
//        var weekDay = ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
//        var day = weekDay[d.getDay()];
//        $('#date_time_day').html('【' + day + '】');
//    }
</script>



<script>
    // 提交订单
    function bespeak_sub() {
        if($('#user_name').val()){
            $("input[name='consignee']").val($('#user_name').val());
        }
        if($('#user_mobile').val()){
            $("input[name='mobile']").val($('#user_mobile').val());
        }
        if(!$('#bespeak_form_time').val()){
            layer.open({content: '请输入预约时间',time:2});
            return false;
        }
		
		//复选框的required验证
		var msg = '';
		$('.checkbox-label :checkbox:first').each(function(){
			var verify = $(this).data('verify');
			if (verify == 'required') {
				var unit = $(this).data('unit');
				if ($(':checkbox:checked[data-unit="' + unit + '"]').length < 1) {
					msg = $(this).attr('data-title');
				}
			}
		});
		if (msg != '') {
			layer.open({content: msg + '至少选择一个',time:2});
			return false;
		}
		
        var status = 1;
        var serializeArray = $('#bespeak_form').serializeArray();

        console.log(serializeArray)
        $.each(serializeArray,function (i,o) {
            var name = $("*[name='"+o.name+"']");
            var verify = name.attr('data-verify');
            var title = name.attr('data-title');
            var verify = verify.split('|');//分隔验证规则
            var value = o.value;
            //验证必填规则
            if('required' == verify[0] &&　(value == ''||value == undefined)){
                layer.open({content: title + '为必填项',time:2});
                status = 0;
                return false;
            }
            if(name.attr('type')=='textarea' || name.attr('type')=='text'){
                if(name.val().length >=255){
                    layer.open({content: title+'不能超过255字符',time:2});
                    status = 0;
                    return false;
                }
            }
            if(value){
                //验证格式规则
                switch (verify[1]){
                    case 'mobile':
                        if(!/^1[34578]\d{9}$/.test(value)){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                    case 'phone':
                        if(!(/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/.test(value))){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                    case 'identity':
                        if(!(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(value))){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                    case 'zip_code':
                        if(!(/^[0-9][0-9]{5}$/.test(value))){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                    case 'email':
                        if(!(/[a-z0-9A-Z_-]+@[a-z0-9A-Z_-]+(\.[a-z]{2,5}){1,2}/.test(value))){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                    case 'url':
                        if(!(/[a-zA-z]+:\/\/[^\s]*/.test(value))){
                            layer.open({content: title+'格式不对',time:2});
                            status = 0;
                            return false;
                        }
                        break;
                }
                status = 1;
            }

        });
        if(status){
            $('#bespeak_close').click();
        }
    }


</script>
<script>
    //删除图片
    function delete_img(e) {
        var src = $(e).prev().attr('src');
        console.log(src)
        var img_arr = $(e).parents('.bookinfo_list').find("input[type='hidden']").val();
        img_arr = img_arr.split(',');
        console.log(img_arr)
        var i = img_arr.indexOf(src);
        console.log(i)
        if(i > -1){
            img_arr.splice(i,1);
            // img_arr.join(',')
            $(e).parents('.bookinfo_list').find("input[type='hidden']").val(img_arr.join(','));
            $(e).parents('.bookinfo_list').find("input[type='hidden']").next().attr('type','text');//改变类型，可以多次上传同一张图片
            $(e).parents('.bookinfo_list').find("input[type='hidden']").next().attr('type','file');//改变类型，可以多次上传同一张图片
            $(e).parent().remove();
        }
    }
    function click_up(e) {
        $(e).parent().find('input').click();
    }
    //上传图片
    function up_img(e) {
        var id = $(e).attr('id');
        if(!$(e).attr('multiple') && $('#'+id).parent().find('.bookinfo_list_Ulimg').children().length){
            $('#'+id).parent().find('.bookinfo_list_Ulimg').text('');
        }
        //判断图片
        if($(e).attr('multiple')){
            if($('#imgs').val()){
                var le = $('#imgs').val().split(',').length;
            }else {
                var le = 0;
            }
            if(e.files.length + le >4){
                layer.open({content:"最多只能上传4张图片!",time:2});
                return false;
            }

        }
        // $.each(e.files,function (i,o) {
        //     var rd = new FileReader();//创建文件读取对象
        //     rd.readAsDataURL(e.files[i]);//文件读取装换为base64类型
        //     rd.onloadend = function(e) {
        //         //加载完毕之后获取结果赋值给img
        //         $('#'+id).parent().find('.bookinfo_list_Ulimg').append('<li><img src="'+this.result+'"><span onclick="delete_img(this)">×</span></li>');
        //         // $('#'+id).before('<img style="width: 1.6rem;height: 1.6rem;" src="'+this.result+'"> ');
        //     }
        // });

        var formData = new FormData();//表单id
        $.each(e.files,function (i,o) {
            formData.append('bespeak_img_file[]',e.files[i]);
        });
        $.ajax({
            type: "POST",
            url: "<?php echo U('mobile/cart/bespeakUpImg'); ?>",
            data: formData,
            dataType: "json",
            async: false,
            cache: false,  //上传文件不需要缓存
            contentType: false,
            processData: false, //因为data值是FormData对象，不需要对数据做处理
            error: function (data) {
                alert(JSON.stringify(data));
                layer.open({content:"服务器繁忙, 请联系管理员!",time:2});
            },
            success: function (data) {
                if (data.status == 1) {
                    if($(e).attr('multiple')){
                        if($('#imgs').val()){
                            $('#imgs').val($('#imgs').val()+','+data.data);
                        }else{
                            $('#imgs').val(data.data);
                        }
                    }else{
                        $('#img').val(data.data);
                    }
                    $.each(data.data.split(','),function (i,o) {
                        //加载完毕之后获取结果赋值给img
                        $('#'+id).parent().find('.bookinfo_list_Ulimg').append('<li><img src="'+o+'"><span onclick="delete_img(this)">×</span></li>');
                    });
                }else {
                    layer.open({content: data.msg, time: 2});
                }
            }
        });

    }
</script>

    <?php endif; ?>
</div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    $(function(){
        var b=0;
        var a=setInterval(function(){
            b++;
            //        postFee为0包邮
            var postFee=$("#postFee").html()
            if(postFee==0){
                $("#postFee").html("包邮");
                $("#postFee").css({'font-size':'.555rem'})
                $("#postFee").parent().css({'font-size':'.0'})
            }
//        订单优惠为0时隐藏
            var amount=$("#order_prom_amount").html()
            if(amount==0){
                $("#order_prom_amount").parent().parent().parent().css({display:'none'})
            }else{
                $("#order_prom_amount").parent().parent().parent().css({display:'block'})
            }
//        优惠券抵扣为0时隐藏
            var couponFee=$("#couponFee").html()
            if(couponFee==0){
                $("#couponFee").parent().parent().parent().css({display:'none'})
            }else {
                $("#couponFee").parent().parent().parent().css({display:'block'})
            }
            //        积分抵扣为0时隐藏
            var pointsFee=$("#pointsFee").html()
            if(pointsFee==0){
                $("#pointsFee").parent().parent().parent().css({display:'none'})
            }else{
                $("#pointsFee").parent().parent().parent().css({display:'block'})
            }
            //        余额抵扣为0时隐藏
            var balance=$("#balance").html()
            if(balance==0){
                $("#balance").parent().parent().parent().css({display:'none'})
            }else{
                $("#balance").parent().parent().parent().css({display:'block'})
            }
        },500)

    })

    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"]; ?>',
        timestamp: '<?php echo $signPackage[timestamp]; ?>',
        nonceStr: '<?php echo $signPackage[nonceStr]; ?>',
            signature: '<?php echo $signPackage[signature]; ?>',
            jsApiList: [
        // 所有要调用的 API 都要加到这个列表中
        'checkJsApi',
        'openAddress',
    ]
    });

    function getWeChatAddress(){
        wx.openAddress({
            success: function (res) {
                alert(JSON.stringify(res));
            }
        });
    }





</script>



<script type="text/javascript">
    var is_shipping_able = true,shop_list_data,cart2_form = $('#cart2_form');
    window.addEventListener('popstate', function () {
        panel();
    });
    $(document).ready(function () {
        var is_virtual = $("input[name='is_virtual']").val();
        if(is_virtual == 0 || is_virtual == 2){
            $('.no_shipping_div').hide();
            $('.shipping_div').show();
        }else{
            $('.no_shipping_div').show();
            $('.shipping_div').hide();
        }
        pay_pwd_view();
        get_address_list();
    });
    //各种弹窗返回上一步
    $(function () {
        //主页面返回上一步
        $(document).on('click', '#back', function () {
            var action = cart2_form.find("input[name='action']");
            var url = "/index.php?m=Mobile&c=Cart&a=index";
            if (action.val() == 'buy_now') {
                var goods_id = cart2_form.find("input[name='goods_id']");
                var item_id = cart2_form.find("input[name='item_id']");
                url = "/index.php?m=Mobile&c=Goods&a=goodsInfo&id="+goods_id.val()+'&item_id='+item_id.val();
            }
            window.location.href = url;
        });
        //地址弹窗返回上一步
        $(document).on('click', '#address_list_back,#invoice_list_back,#address_add_back,#shop_list_back,#shop_consignee_back,#map_back,#bespeak_close', function () {
            history.back(-1);
            panel();
        });
    });
    //点击地址
    $(function () {
        //点击地址
        $(document).on('click', '#addressDefault', function () {
            window.location.hash = "#addressList";
            get_address_list();
            panel();
        });
        //修改发票
        $(document).on('click', '#invoiceDefault', function () {
            window.location.hash = "#invoicelist";
            panel();
        });
        //选择地址
        $(document).on('click', '.select_address', function () {
            var address_id = $(this).data('address-id');
            var mobile = $(this).data('mobile');
            var consignee = $(this).data('consignee');
            var address_area = $(this).data('address-area');
            var address = $(this).data('address');
            var province_id = $(this).data('province-id');
            var city_id = $(this).data('city-id');
            var district_id = $(this).data('district-id');
            var longitude = $(this).data('longitude');
            var latitude = $(this).data('latitude');
            cart2_form.find("input[name='address_id']").val(address_id);
            $("#default_address_mobile").empty().html(mobile);
            $("#default_address_consignee").empty().html(consignee);
            $("#default_address_text").empty().html(address_area + ' '+ address);
            window.location.hash = "#";
            panel();
            get_shop_list(province_id, city_id, district_id, '', longitude, latitude);
            ajax_order_price();
        });
        //点击新建地址
        $(document).on('click', '#add_address', function () {
            address_form.find("input[name='address_id']").val('');
            address_form.find("input[name='consignee']").val('');
            address_form.find("input[name='address']").val('');
            address_form.find("input[name='mobile']").val('');
            address_form.find("input[name='province']").val('');
            address_form.find("input[name='city']").val('');
            address_form.find("input[name='district']").val('');
            $('#area').html('');
            window.location.hash = "#addressAdd";
            panel();
        });
        var address_form_confirm_f = false;
        //添加地址
        $(document).on('click', '#address_form_confirm', function () {
            if(address_form_confirm_f){
                layer.open({icon: 1, content: '正在保存', time: 2});
                return;
            }
            address_form_confirm_f = true;
            $.ajax({
                type: "POST",
                url: '/index.php?m=Mobile&c=User&a=addressSave',
                data:  $("#address_form").serialize(),
                dataType: "json",
                success: function (data) {
                    address_form_confirm_f = false;
                    if (data.status == 1) {
                        $("#address_add_back").trigger('click');
                        get_address_list(data.result.address_id);
                    } else {
                        var err_msg = data.msg;
                        $.each(data.result, function (index, item) {
                            err_msg = item;
                        });
                        layer.open({icon: 2, content: err_msg, time: 2});
                    }
                }
            });
        });
        //编辑地址弹窗事件
        $(document).on("click", '.address_item', function (e) {
            window.location.hash = "#addressAdd";
            panel();
            var select_address = $(this).parent().find('.select_address');
            console.log(select_address);
            address_form.find("input[name='address_id']").val(select_address.data('address-id'));
            address_form.find("input[name='consignee']").val(select_address.data('consignee'));
            address_form.find("input[name='address']").val(select_address.data('address'));
            address_form.find("input[name='mobile']").val(select_address.data('mobile'));
            address_form.find("input[name='province']").val(select_address.data('province-id'));
            address_form.find("input[name='city']").val(select_address.data('city-id'));
            address_form.find("input[name='district']").val(select_address.data('district-id'));
            $('#area').html(select_address.data('address-area'));
        })
    });
    //单页面显示
    function panel(){
        var hash = window.location.hash;
        $('#wrapBody').children('div').hide();
        if(hash == ''){
            $('#pagePay').show();
        }else{
            $(hash).show();
        }
    }
    //获取自提点列表
    function get_shop_list(province_id, city_id, district_id, shop_address, longitude, latitude) {
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/Api/shop'); ?>",
            dataType: 'json',
            data: {
                province_id: province_id,
                city_id: city_id,
                district_id: district_id,
                shop_address: shop_address,
                longitude: longitude,
                latitude: latitude
            },
            success: function (data) {
                if(data.result.length > 0){
                    shop_list_data = data.result;
                    set_shop_list();
                }else{
                    shop_list_data = [];
                    $('#shop_address').text('');
                    $('#shop_list').html('');
                    $("input[name='shop_id']").val('');
                    if($('#door_to_door').hasClass('z-dispatching-cheng')){
                        $('#express_delivery').trigger('click');
                    }
                }
                door_to_door_hide_or_show();
            }
        });
    }
    //上门自提按钮显示
    function door_to_door_hide_or_show(){
        var door_to_door_div = $('#door_to_door_div');
        if(is_shipping_able == true && shop_list_data.length > 0){
            door_to_door_div.show();
        }else{
            door_to_door_div.hide();
        }
    }
    //自提点初始化
    function set_shop_list() {
        var shop_html = '';
        var near_show_html = '';
        for (var i = 0; i < shop_list_data.length; i++) {
            if(i == 0){
                near_show_html = '';
            }else{
                near_show_html = "style='display:none'";
            }
            shop_html += '<li class="p" data-shop-id="'+shop_list_data[i].shop_id+'" data-longitude="'+shop_list_data[i].longitude+'" data-latitude="'+shop_list_data[i].latitude+'"' +
                    ' data-shop-address="'+shop_list_data[i].area_list[0].name+shop_list_data[i].area_list[1].name+shop_list_data[i].area_list[2].name+ shop_list_data[i].shop_address +'"' +
                    ' data-phone="'+shop_list_data[i].phone+'" data-work-day="'+shop_list_data[i].work_day+'" ' +
                    'data-work-time="'+shop_list_data[i].work_time+'"> <div class="fl Package-radio-wrap"> <div class="Package-radio"> ' +
                    '<label class="Package-radio-label"></label> </div> </div> <div class="fl Package-radio-cont"> <div class="z-SelectPackage-title">' +
                    shop_list_data[i].shop_name + '</div> <div class="z-SelectPackage-nvg"><span>'+shop_list_data[i].shop_address+'</span></div> ' +
                    '<div class="z-SelectPackage-phon">电话:<em>' + shop_list_data[i].phone + '</em></div> </div> ' +
                    '<div class="fl Package-radio-Lately p"> <i class="Package-Lately  fl" '+near_show_html+'> 离我最近 </i> <div class="Package-distance-wrap fr">' +
                    ' <div class="Package-distance">' + shop_list_data[i].distance_text + '</div> <div class="p distance-icon-wrap"> <div class="Package-distance-icon fl"> ' +
                    '</div> <span class="Package-Location fl"></span> </div> </div> </div> </li>';
        }
        $("#shop_list").empty().append(shop_html);
        initShop();
    }
    //自提点初始化数据
    function initShopInfo() {
        var consignee = cart2_form.find("input[name='consignee']");
        var mobile = cart2_form.find("input[name='mobile']");
        if(consignee.val() == ''){
            var consignee_val = $('#default_address_consignee').html();
            consignee.val(consignee_val);
        }
        if(mobile.val() == ''){
            var mobile_val = $('#default_address_mobile').html();
            mobile.val(mobile_val);
        }
        $('#consignee_txt').html(consignee.val());
        $('#mobile_txt').html(mobile.val());
        $('#mobile').val(mobile.val());
        $('#consignee').val(consignee.val());
        var shop_item = $('.Package-radio-checked').parent().parent().parent();
        $('#shop_address').html(shop_item.find('.z-SelectPackage-title').html());
        if($('#express_delivery').hasClass('z-dispatching-cheng')){
            cart2_form.find("input[name='shop_id']").val('');
        }
    }
    //选择上门自提时，初始化自提点
    function initShop() {
        var shop_list = $("#shop_list");
        if(shop_list.find('Package-radio-checked').length == 0){
            shop_list.children('li').eq(0).find(".Package-radio label").trigger('click');
        }
        $('#shop_list_confirm').trigger('click');
    }
    //获取地址列表
    function get_address_list(select_address_id){
        var address_id = cart2_form.find("input[name='address_id']");
        var addressid = document.getElementById("address_id").value;
        $.ajax({
            type: "get",
            url: '/index.php?m=Mobile&c=User&a=ajaxAddressList',
            dataType: "json",
            success: function (data) {
                var address_list_html = '';
                for (var i = 0; i < data.length; i++) {
                    var checked=addressid==data[i].address_id?"checked":"";
                    address_list_html += '<div class="address-list"><a class="select_address address_id_'+data[i].address_id+'" ' +
                            'data-address-id="'+data[i].address_id+'" data-mobile="'+ data[i].mobile +'" data-consignee="'+ data[i].consignee+'" ' +
                            'data-address-area="'+ data[i].address_area+'" data-address="'+ data[i].address+'" data-province-id="'+data[i].province+'"  ' +
                            'data-city-id="'+data[i].city+'" data-district-id="'+data[i].district+'" data-town-id="'+data[i].twon+'" data-longitude="'+data[i].longitude+'" ' +
                            'data-latitude="'+data[i].latitude+'"  ><div class="list-radio"><input type="radio"'+checked+' value="" name="address"> </div> <div class="list-right"> <p class="p1"><span>'+data[i].consignee+'</span><span>'+data[i].mobile+'</span></p> <p class="p2">'+data[i].address_area + ' ' + data[i].address+'</p> </div></a> <a class="list-modify address_item"> </a> </div>';
                }
                $("#address_list_html").empty().html(address_list_html);
                if(data.length == 0){
                    $("#add_address").trigger('click');
                    //获取微信地址
                }
                if(data.length > 0 && address_id.val() == ''){
                    $("#address_list_html").find('.select_address').eq(0).trigger('click');
                }
                if(select_address_id > 0){
                    $("#address_list_html").find('.address_id_'+select_address_id).trigger('click');
                }
            }
        });
    }
    function close_location(){
        var province_div = $('.province-list');
        var city_div = $('.city-list');
        var area_div = $('.area-list');
        if(area_div.is(":hidden") == false){
            area_div.hide();
            city_div.show();
            province_div.hide();
            return;
        }
        if(city_div.is(":hidden") == false){
            area_div.hide();
            city_div.hide();
            province_div.show();
            return;
        }
        if(province_div.is(":hidden") == false){
            area_div.hide();
            city_div.hide();
            $('.container').animate({width: '0', opacity: 'show'}, 'normal',function(){
                $('.container').hide();
            });
            undercover();
            $('.mask-filter-div').css('z-index','inherit');
            return;
        }
    }
    function location_address(e){
        $('.container').animate({width: '14.4rem', opacity: 'show'}, 'normal',function(){
            $('.container').show();
        });
        if(!$('.container').is(":hidden")){
            $('body').css('overflow','hidden')
            cover();
            $('.mask-filter-div').css('z-index','9999');
        }
    }
    //自提点
    $(function () {
        //选择快递配送
        $(document).on('click', '#express_delivery', function () {
            $(".dispatching-cont").removeClass("z-dispatching-cheng");
            $(this).addClass("z-dispatching-cheng");
            $(".dispatching-font1").show().siblings(".dispatching-font2").hide();
            $(".dispatching-Package").slideUp();
            cart2_form.find("input[name='shop_id']").val('');
            ajax_order_price();
        });
        //选择自提点
        $(document).on('click', '#door_to_door', function () {
            $(".dispatching-cont").removeClass("z-dispatching-cheng");
            $(this).addClass("z-dispatching-cheng");
            $(".dispatching-font2").show().siblings(".dispatching-font1").hide();
            $(".dispatching-Package").slideDown();
            initShop();
            initShopTime();
            ajax_order_price();
        });
        //点击自提点
        $(document).on("click", '#replace_shop', function (e) {
            window.location.hash = "#shopList";
            panel();
            $('.shopList-b').show();

        })
		//点击预约
        $(document).on("click", '#bespeak_info', function (e) {
            window.location.hash = "#bespeak";
            panel();
        });
        //选择自提点切换
        $(document).on("click", '.pop-prkage-wraps .Package-radio label', function (e) {
            $(".pop-prkage-wraps .Package-radio label").removeClass("Package-radio-checked");
            $(this).addClass("Package-radio-checked");
        })
        //点击编辑提货人事件
        $(document).on('click', '#shop_consignee_edit', function () {
            window.location.hash = "#shopConsignee";
            panel();
        });
        //点击提货人保存按钮
        $(document).on('click', '#shop_consignee_save', function () {
            var consignee_val = $('#consignee').val();
            var mobile_val = $('#mobile').val();
            cart2_form.find("input[name='mobile']").val(mobile_val);
            cart2_form.find("input[name='consignee']").val(consignee_val);
            initShopInfo();
            $('#shop_consignee_back').trigger('click');
        });
        //选择自提点确定按钮
        $(document).on('click', '#shop_list_confirm', function () {
            var shop_item = $('.Package-radio-checked').parent().parent().parent();
            cart2_form.find("input[name='shop_id']").val(shop_item.data('shop-id'));
            if(window.location.hash == '#shopList'){
                $('#shop_list_back').trigger('click');
            }
            initShopInfo();
        });
        //确认选择自提点时间
        $(document).on('click', '#d-confirm', function () {

            initShopTime();
        });
        $(document).on('click', '.Package-distance-wrap', function () {
            window.location.hash = "#map";
            panel();
            show_map(this);
        });
    })
    //积分余额密码
    $(function () {
        //选择使用积分和余额
        $(document).on('click', '#pay_points,#user_money', function () {
            pay_pwd_view();
            ajax_order_price();
        });
        //支付密码点击事件
        $(document).on('blur', '#pay_pwd', function () {
            var pay_pwd = md5($("input[name='auth_code']").val() + $.trim($('#pay_pwd').val()));
            $('input[name="pay_pwd"]').val(pay_pwd);
        })
    })
    //备注
    $(function () {
        //备注输入
        $(document).on('keyup', '#user_note', function () {
            $('input[name="user_note"]').val(this.value);
            var len = this.value.length;
            var limit = 50;
            if(len > limit){
                $(this).val($(this).val().substring(0,limit));
            }
            var num = limit - len;
            if(num <= 0){
                $("#zero").text(0);
            }else{
                $("#zero").text(num);
            }
        });
    })
    //支付密码是否显示
    function pay_pwd_view() {
        var user_money = $('#user_money');
        var pay_points = $('#pay_points');
        if (user_money.is(':checked')) {
            $("input[name='user_money']").val(user_money.val());
        }else{
            $("input[name='user_money']").val('');
        }
        if (pay_points.is(':checked')) {
            $("input[name='pay_points']").val(pay_points.val());
        }else{
            $("input[name='pay_points']").val('');
        }
        if (user_money.is(':checked') || pay_points.is(':checked')) {
          //  $('#paypwd_view').show();
        } else {
            $('#paypwd_view').hide();
        }
    }
    //兑换优惠券
    function wield() {
        var couponCode = $('#couponCode').val();
        if (couponCode == '') {
            layer.open({icon: 1, content: "请输入兑换码！", time: 2});
            return ;
        }
        $.ajax({
            type: "POST",
            url: '/index.php?m=Home&c=Cart&a=cartCouponExchange',
            data: {coupon_code: couponCode},
            dataType: "json",
            success: function (data) {
                if (data.status != 1) {
                    layer.open({icon: 2, content: data.msg, time: 1, end:function(){
                        // 登录超时
                        if (data.status == -100) {
                            location.href = "<?php echo U('Mobile/User/login'); ?>";
                        }
                    }});
                } else {
                    layer.open({icon: 1, content: data.msg, time: 1, end:function(){
                        window.location.reload();
                    }});
                }
            }
        });
    }
    // 获取订单价格
    function ajax_order_price() {
        couponListHide();
        var address_id = cart2_form.find("input[name='address_id']").val();
        if(address_id == ''){
            get_address_list();
        }
        $.ajax({
            type: "POST",
            url: '/index.php?m=Mobile&c=Cart&a=cart3',
            data: cart2_form.serialize(),
            dataType: "json",
            success: function (data) {
                is_shipping_able = true;
                if(data.hasOwnProperty('code') && data.code == 301){
                    is_shipping_able = false;
                    door_to_door_hide_or_show();
                }
                if (data.status != 1) {
                    layer.open({icon: 2, content: data.msg, time: 1, end:function(){
                        // 登录超时
                        if (data.status == -100) {
                            location.href = "<?php echo U('Mobile/User/login'); ?>";
                        }
                        $('.submit_price a').addClass("disable");
                    }});
                    return false;
                }else{
                    $('.submit_price a').removeClass("disable");
                    refresh_price(data);
                }
            }
        });
    }
    //刷新价格
    function refresh_price(data) {
        if(typeof(data.result.user_money) != 'undefined'){
            $("#balance").text(data.result.user_money.toFixed(2));// 余额
            var balance=$("#balance").html()
            if(balance!=0){
                $("#balance").parent().parent().parent().css({display:'block'})
            }
            if(balance==0){
                $("#balance").parent().parent().parent().css({display:'none'})
            }

        }
        if(typeof(data.result.integral_money) != 'undefined'){
            $("#pointsFee").text(data.result.integral_money.toFixed(2));// 积分支付
        }
        if(typeof(data.result.order_prom_amount) != 'undefined'){
            $("#order_prom_amount").text(data.result.order_prom_amount.toFixed(2));// 订单 优惠活动
        }
        if(typeof(data.result.shipping_price) != 'undefined'){
            $("#postFee").text(data.result.shipping_price.toFixed(2)); // 物流费
        }
        if(typeof(data.result.goods_price) != 'undefined'){
            $("#total_fee").text(data.result.goods_price.toFixed(2)); // 商品总金额
        }
        if(typeof(data.result.coupon_price) != 'undefined'){
            $("#couponFee").text(data.result.coupon_price.toFixed(2));// 优惠券
        }
        if(typeof(data.result.order_amount) != 'undefined'){
            $("#payables").text(data.result.order_amount.toFixed(2));// 应付
        }
    }
    //设置自提时间
    function initShopTime() {
        var date_time_picker_mask = $('#date_time_picker_mask').val();
        date_time_picker_mask += ':00';
        date = date_time_picker_mask.replace(/-/g, '/');
        var d = new Date(date);
        var timestamp = d.getTime().toString().substring(0, 10);
        cart2_form.find("input[name='take_time']").val(timestamp);
        $('#bespeak_form_time').val(timestampToTime(timestamp));
        var weekDay = ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
        var day = weekDay[d.getDay()];
        $('#date_time_day').html('【' + day + '】');
    }
    // 提交订单
    var ajax_return_status = 1; // 标识ajax 请求是否已经回来 可以进行下一次请求
    function submit_order() {
        var shop_id = cart2_form.find("input[name='shop_id']").val();
        var is_virtual=<?php echo $cartList[0]['goods']['is_virtual']; ?>;
        if(!shop_id && is_virtual==2){
            showErrorMsg('请选择门店');
            return false;
        }
        if($('#user_name').val()){
            $("input[name='consignee']").val($('#user_name').val());
        }
        if($('#user_mobile').val()){
            $("input[name='mobile']").val($('#user_mobile').val());
        }

        if ($('.submit_price a').hasClass("disable")) {
            return;
        }

        if (ajax_return_status == 0){
            return false;
        }
        ajax_return_status = 0;
        $.ajax({
            type: "POST",
            url: "<?php echo U('Mobile/Cart/cart3'); ?>",//+tab,
			data: cart2_form.serialize()+'&'+$('#bespeak_form').serialize() + "&act=submit_order",// 你的formid
            //data: cart2_form.serialize() + "&act=submit_order",// 你的formid
            dataType: "json",
            success: function (data) {
                layer.closeAll();
                if (data.status != 1) {
                    showErrorMsg(data.msg);  //执行有误
                    // 登录超时
                    if (data.status == -100){
                        location.href = "<?php echo U('Mobile/User/login'); ?>";
                    }
                    ajax_return_status = 1; // 上一次ajax 已经返回, 可以进行下一次 ajax请求
                    return false;
                }
                $("#postFee").text(data.result.shipping_price); // 物流费
                if (data.result.coupon_price == null) {
                    $("#couponFee").text(0);// 优惠券
                } else {
                    $("#couponFee").text(data.result.coupon_price);// 优惠券
                }
                $("#balance").text(data.result.user_money);// 余额
                $("#pointsFee").text(data.result.integral_money);// 积分支付
                $("#payables").text(data.result.order_amount);// 应付
                $("#order_prom_amount").text(data.result.order_prom_amount);// 订单 优惠活动
                showErrorMsg('订单提交成功，跳转支付页面!');
                var is_virtual=<?php echo $cartList[0]['goods']['is_virtual']; ?>;
                if(is_virtual==2){
                    //预约商品跳到预约界面
                    location.href = "/index.php?m=Mobile&c=Cart&a=cart4&is_virtual=2&order_sn=" + data.result+"&goods_name=" + "<?php echo $cartList[0]['goods_name']; ?>"+"&take_time=" +$("input[name='take_time']").val();
                }else{
                    //普通商品
                    location.href = "/index.php?m=Mobile&c=Cart&a=cart4&order_sn=" + data.result;
                }
            }
        });
    }
    $(function () {
        get_invoice();

        $('.submits_de').click(function () {
            $('.mask-filter-div').hide();
            $('.losepay').hide();
        })

        //显示隐藏使用发票信息
        $('.invoiceclickin').click(function () {
            get_invoice();
            $('#invoice').toggle(300);
        })
    })

    function couponListHide(){
        var displays= $("#couponList").css("display");
        if(displays=="none"){
            $('.mask-filter-div').hide();
        }
    }
    //优惠券
    $(function () {
        $(document).on('click', '.coupon_click', function () {
            window.location.hash = "#couponList";
            panel();
            cover();
            $('.coupongg').show();
            $('html,body').addClass('ovfHiden');
            var coupon_length = <?php echo (isset($userCouponNum['usable_num'] ) && ($userCouponNum['usable_num']  !== '')?$userCouponNum['usable_num'] : '0'); ?>;
            if (coupon_length == 0) {
                $('.soldout_cp').show();
                $('.no_get_coupon').hide();
            } else {
                $('.no_get_coupon').show();
                $('.soldout_cp').hide();
            }
        })
    })
    //关闭优惠券弹窗
    function closer() {
        window.location.hash = "#";
        panel();
        undercover();
        $('.newchoosecar').hide();
        $('html,body').removeClass('ovfHiden');
    }
    //选择优惠券
    function checkCoupon(obj) {
        $(obj).toggleClass('checked').siblings('.cuptyp').removeClass('checked')
        if ($(obj).hasClass('checked')) {
            var conponname = $(obj).data('conponname');
            var couponid = $(obj).data('couponid');
            $('.counpn_name').text(conponname); //优惠券名称显示出来
            $("input[name^='coupon_id']").val(couponid);  //优惠券ID写到隐藏表单
        } else {
            $("input[name^='coupon_id']").val('');  //优惠券ID写到隐藏表单
            $('.counpn_name').text('未使用');
        }
        closer();
        ajax_order_price();
    }

    //时间戳转换时间格式
    function timestampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        Y = date.getFullYear() + '-';
        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
        D = (date.getDate() < 10 ? '0'+(date.getDate()) : date.getDate()) + ' ';
        h = (date.getHours() < 10 ? '0'+(date.getHours()) : date.getHours()) + ':';
        m = (date.getMinutes() < 10 ? '0'+(date.getMinutes()) : date.getMinutes()) + ':';
        s = (date.getSeconds() < 10 ? '0'+(date.getSeconds()) : date.getSeconds());
        return Y+M+D+h+m+s;
    }
</script>

<!--发票优化-->
<script type="text/javascript">
    //发票相关js
    $("#intype1").click(function(){
        $(".invoice_comdel").css("display","none");
        $('#wap_invoice_title').val("");
        $('#wap_taxpayer').val("");
    });
    $("#intype2").click(function(){
        var radioCont = $('input[name="radio_cont"]:checked').val();
        if(radioCont == '商品明细' || radioCont == '商品类别'){
            $(".invoice_comdel").css("display","block");
        }else{
            $(".invoice_comdel").css("display","none");
        }
    });
    $("#intype3,#intype4").click(function(){
        $(".invoice_tit").css("display","block");
        var radioTitle = $('input[name="radio_title"]:checked').val();
        var radioCont = $('input[name="radio_cont"]:checked').val();
        $("#invoice_desc").val(radioCont);
        if(radioTitle == "个人"){
            $(".invoice_comdel").css("display","none");
            $('#wap_invoice_title').val("");
            $('#wap_taxpayer').val("");
        }else{
            $(".invoice_comdel").css("display","block");
        }
    });
    $("#intype5").click(function(){
        var radioCont = $('input[name="radio_cont"]:checked').val();
        $("#invoice_desc").val(radioCont);
        $(".invoice_tit").css("display","none");
        $(".invoice_comdel").css("display","none");
        $('#wap_invoice_title').val("");
        $('#wap_taxpayer').val("");
    });
    //填写发票确认按钮
    $("#submit_invoice").click(function() {
        var radioTitle = $('input[name="radio_title"]:checked').val();
        var invoice_title = $("#invoice_title").val();
        var taxpayer = $("#taxpayer").val();
        var radioCont = $('input[name="radio_cont"]:checked').val();
        if (radioTitle=="单位" && radioCont!="不开发票"){
            if (invoice_title.length == 0) {
                layer.open({icon: 1, content: "发票抬头不能为空！", time: 2});
                return false;
            }
            if ((taxpayer.length == 15) || (taxpayer.length == 18) || (taxpayer.length == 20)) {
            } else {
                layer.open({icon: 1, content: "请输入正确的纳税人识别号！", time: 2});
                return;
            }
            var addressCode = taxpayer.substring(0, 6);
            // 校验地址码
            var check = checkAddressCode(addressCode);
            if (!check) {
                layer.open({icon: 1, content: "请输入正确的纳税人识别号！", time: 2});
                return;
            }
            // 校验组织机构代码
            var orgCode = taxpayer.substring(6, 9);
            check = orgcodevalidate(orgCode);
            if (!check) {
                layer.open({icon: 1, content: "请输入正确的纳税人识别号！", time: 2});
                return;
            }
            $('#wap_taxpayer').val(taxpayer);
            $('#wap_invoice_title').val(invoice_title);
        }else{
            $('#wap_taxpayer').val("");
            $('#wap_invoice_title').val("");
        }
        var str = "";
        if(radioCont!="不开发票"){
            if(radioTitle=="单位"){
                str = "纸质（"+invoice_title+"-"+radioCont+"）";
            }else {
                str = "纸质（个人-"+radioCont+"）";
            }
        }else{
            str = "不开发票";
        }
        $(".invoice_title").html(str);
        save_invoice();
        window.location.hash = "#";
    });
    //获取发票信息
    function get_invoice() {
        var str = "";
        $.get("<?php echo U('Cart/invoice'); ?>", function (json) {
            var data = eval("(" + json + ")");
            if (data.status > 0) {
                if (data.result.invoice_title != "") {
                    $('#wap_invoice_title').val(data.result.invoice_title);
                    $('#wap_taxpayer').val(data.result.taxpayer);
                    $('#invoice_title').val(data.result.invoice_title);
                    $("#invoice_desc").val(data.result.invoice_desc);
                    $("#taxpayer").val(data.result.taxpayer);
                    str = "纸质（" + data.result.invoice_title + "-"+data.result.invoice_desc+"）";
                }
                if (data.result.invoice_title == "个人" && data.result.invoice_desc != "不开发票") {
                    $('#wap_invoice_title').val("个人");
                    $('#wap_taxpayer').val("");
                    $('#invoice_title').val("");
                    $("#taxpayer").val("");
                    $(".invoice_title").html("纸质（个人-"+data.result.invoice_desc+"）");
                    str = "纸质（个人-"+data.result.invoice_desc+"）";
                }
                if (data.result.invoice_desc == "不开发票") {
                    $(".invoice_tit").css("display","none");
                    $(".invoice_comdel").css("display","none");
                    $("#intype5").attr("checked", "checked");
                    $('#wap_invoice_title').val("");
                    $('#wap_taxpayer').val("");
                    $('#invoice_title').val("");
                    $("#invoice_desc").val(data.result.invoice_desc);
                    $("#taxpayer").val("");
                    str = "不开发票";
                }
                //加载之前发票信息
                $(".invoice_title").html(str);
                if(data.result.invoice_title == "单位" && data.result.taxpayer == ""){
                    $("#intype1").attr("checked", "checked");
                }
                if(data.result.taxpayer　!= ""){
                    $(".invoice_comdel").css("display","block");
                    $("#intype2").attr("checked", "checked");
                }
                if(data.result.invoice_desc　== "商品明细") {
                    $("#intype3").attr("checked", "checked");
                }
                if(data.result.invoice_desc　== "商品类别") {
                    $("#intype4").attr("checked", "checked");
                }
                $(".invoice_title").html(str);
            } else {
                $("#intype1").attr("checked", "checked");
                $("#intype3").attr("checked", "checked");
            }
        });
    }
    //修改发票信息
    function save_invoice() {
        var invoice_desc = $('#invoice_desc').val();
        if(invoice_desc != "不开发票") {
            var invoice_title = $('input[name="radio_title"]:checked').val();
            if (invoice_title == "单位") {
                var invoice_title = $('#wap_invoice_title').val();
                var taxpayer = $('#wap_taxpayer').val();
            }
        }
        var data = {invoice_title: invoice_title, taxpayer: taxpayer, invoice_desc: invoice_desc};
        $.post("<?php echo U('Cart/save_invoice'); ?>", data, function (json) {
            var data = eval("(" + json + ")");
            $("#invoice").hide();
        });
    }
    $(document).on('keyup', '#mobile_check', function() {
        $('input[name="mobile"]').val(this.value);
    })
    //优惠券高度充满屏幕
    $('.order').on('click',function () {
        $('.newchoosecar').css('height',$(window).height())
    })
</script>
</body>
</html>
