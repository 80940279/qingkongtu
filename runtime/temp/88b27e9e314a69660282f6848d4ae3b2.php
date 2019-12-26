<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./template/mobile/rainbow/goods\search.html";i:1576220723;s:77:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\header.html";i:1568702281;s:78:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\top_nav.html";i:1576636010;}*/ ?>
<style>
    .classreturn{
        position: fixed;
    }
    .storenav{
        position: fixed;
    }
    .classreturn .content .search{
        margin-top: .3rem;
    }
    #goods_list{
        margin-top: 3.5rem;
    }
</style>
<link rel="stylesheet" href="/template/mobile/rainbow/static/css/search.css">
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>搜索列表--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
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

    <!--搜索栏-s-->
    <div class="classreturn whiback bornone">
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
                        <a href="<?php echo U('Goods/ajaxSearch',array('q'=>urlencode(I('q')))); ?>">
                            <input type="text" id="q" value="" placeholder="输入你想搜索的内容...">
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
                <div class="Collapsing"><span>全部商品</span></div>
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
                <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'virtual_sales')),''));?>" >
                     <span class="dq">销量</span>
                </a>
            </li>
            <li class="<?php if(I('sort') == 'shop_price'): ?>red<?php endif; ?>">
                <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>$sort_asc)),''));?>">
                    <span class="jg">价格 </span>
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

    <!--商品列表-s-->
    <div id="goods_list">
        <?php if(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty())): ?>
            <p class="goods_title" id="goods_title" style="line-height: 2rem;text-align: center;margin-top: 0.64rem; font-size:0.64rem">抱歉暂时没有相关结果，换个筛选条件试试吧</p>
        <?php else: ?>
            <!--商品-s-->
            <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $k=>$vo): ?>
                <div class="orderlistshpop p"  >
                    <div class="maleri30">
                            <div class="sc_list se_sclist">
                                <div class="shopimg fl">
                                    <?php if(!empty($vo['label_name'])): ?>
                                        <div class="h-label" style="background: url(/template/mobile/rainbow/static/images/h-label.png) no-repeat;background-size: 2rem 0.5rem;"><p><?php echo $vo['label_name']; ?></p></div><?php endif; ?>
                                    <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$vo[goods_id])); ?>" class="item"><img src="<?php echo goods_thum_images($vo['goods_id'],400,400); ?>"></a>
                                </div>
                                <div class="deleshow fr">
                                    <div class="deletes">
                                        <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$vo[goods_id])); ?>" class="item"><span class="similar-product-text fl"><?php echo $vo['goods_name']; ?></span></a>
                                    </div>
                                    <div class="b-deletes">
                                        <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$vo[goods_id])); ?>" class="item"><span class="similar-product-text fl"><?php echo getSubstr($vo['name_brief'],0,20); ?></span></a>
                                    </div>
                                    <div class="prices">
                                        <p class="sc_pri fl"><b><?php echo $vo[shop_price]; ?>日元</b></p>
                                    </div>
                                    <p class="weight">
                                    	<span>已售<?php echo $vo['sales_sum']+$vo['virtual_sales']; ?>件</span>
                                        <span goods_id="<?php echo $vo['goods_id']; ?>" class="add_cart"><img src="/template/mobile/rainbow/static/images/red-icon-cart.png" alt=""></span>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!--商品-e-->
        <?php endif; ?>
    </div>
    <!--商品列表-e-->
    <!--综合筛选弹框-s-->
    <div class="fil_all_comm">
        <div class="maleri30">
            <ul>
                <li >
                    <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'')),''));?>" class="<?php if((I('sort') == '')): ?>on red<?php endif; ?>" >综合</a>
                </li>
                <li >
                    <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'is_new')),''));?>" class="<?php if((I('sort') == 'is_new')): ?>on red<?php endif; ?>">新品</a>
                </li>
                <!--<li >
                    <a href="<?php echo urldecode(U('Mobile/Goods/search',array_merge($filter_param,array('sort'=>'comment_count')),''));?>" class="<?php if(I('sort') == 'comment_count'): ?>on red<?php endif; ?>">评价</a>
                </li>-->
            </ul>
        </div>
    </div>
    <!--综合弹框-e-->

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
<style>
    body{
        background: #F5F5F5;
    }
    #goods_list {
        padding-top: .2rem;
    }
    .rx-sp{
        margin-left: 0;
        position: absolute;
        top: 3rem;
    }
    .mask-filter-div{
        z-index: 999;
    }
    .sc_list .deleshow .prices{
        left: 0;
    }
    .addimgchan .se_sclist .deleshow .weight{
        height: 1.0667rem;
        line-height: 1.0667rem;
        padding-right: .314rem;
    }
</style>
<script type="text/javascript" src="/template/mobile/rainbow/static/js/sourch_submit.js"></script>
<div class="mask-filter-div" style="display: none;"></div>
<script>
    $(document).ready(function () {
        if('_square' ===  window.localStorage.listType){
            $(this).addClass('orimg');
            $('#goods_list').addClass('addimgchan');
        }
        ajax_header_cart();
    });
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
            });
            //判断当前二级筛选状态
            setTimeout(function(){
                sure();
            },400)
        })
//    确定筛选
    function sure(){
        if($('.suce_ ok').is('.two')){
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
        }
    }
        //返回按钮
        $('.seac_retu').click(function(){
            //判断当前二级筛选状态
            if($('.suce_ok').is('.two')){
                $(".filterspec").each(function(i,o){
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
    //筛选弹窗的品牌筛选
    function filtercriteria(criteria){
        $('#key').addClass(criteria);
        $('.filter').show();
        $('.tow-price').hide();
    }

    //筛选弹窗的价格筛选
    function filterprice(){
        $('.tow-price').show();
        $('.filter').hide();
    }

    //加载更多商品
    var  page = 2;
    /*** ajax 提交表单 查询订单列表结果*/
    var ajax_status = 1;
    function ajax_sourch_submit(){
        if(ajax_status == 0){
            return false;
        }
        ajax_status = 0;
        page += 1;
        $.ajax({
            type : "GET",
            url:"<?php echo U('Mobile/Goods/search'); ?>",//+tab,
            data:{brand_id:'<?php echo \think\Request::instance()->param('brand_id'); ?>',id:'<?php echo \think\Request::instance()->param('id'); ?>',sort:'<?php echo \think\Request::instance()->param('sort'); ?>',sort_asc:'<?php echo \think\Request::instance()->param('sort_asc'); ?>',sel:'<?php echo \think\Request::instance()->param('sel'); ?>',q:$('#q').val(),is_ajax:1,p:page},
            success: function(data)
            {
                ajax_status = 1;
                if($.trim(data) == ''){
                    // $('#getmore').hide();
                }else{
                    $("#goods_list").append(data);
                }
            }
        });
    }
//    function ajax_sourch_submit(){};//为了覆盖头部引用的JS
    //筛选菜单栏切换效果
    var lb = $('.search_list_dump .lb')
    var fil = $('.fil_all_comm');
    var cs = $('.classreturn,.search_list_dump');
    var son = $('.search_list_dump .jg').siblings();
    $(function(){
    $('.storenav ul li span').click(function(){
        $(this).parent().parent().addClass('red').siblings('li').removeClass('red')
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


    //综合
    lb.click(function(){
        fil.show();
        cover();
        cs.addClass('pore');
    });

    lb.html($('.on').html());


     //显示隐藏筛选弹窗
    $('.search_list_dump .sx').click(function(){
        $(".mask-filter-div").css({display:"block"})
        $('body').css('position','relative');
        $('.screen_wi').animate({width: '13.87rem', opacity: 'show'}, 'normal',function(){
            $('.screen_wi').show();
            cover();
        });
    })
    //关闭隐藏筛选弹窗
    $(".mask-filter-div").click(function(){
        $('.screen_wi').animate({width: '0', opacity: 'show'}, 'normal',function(){
            $('.screen_wi').hide();
        });
        $(this).css({display:"none"});
        sure();
    })
    //  筛选顶部 筛选1-popcover
    $('.popcover ul li span').click(function(){
        //给span添加样式，并给其子代input添加class
        $(this).addClass('ch_dg').find('input').addClass('sel');
        $(this).parent('li').siblings('li').find('span').removeClass('ch_dg')
                .find('input').removeClass('sel');
    })
        //  新的筛选页，筛选顶部
        $('.screen_wi ul li span').click(function(){
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
    $(function(){
        $('.two-related .myorder .order').click(function(){
            $('.two-related .myorder .order').find('.fr i').removeClass('Mright');
            var mright = $(this).find('.fr i');
            var input = mright.find("input");
            mright.toggleClass('Mright');
            //改变复选框状态
            mright.hasClass('Mright') ? input.attr('checked',true) : input.attr('checked',false);
        })
    })

    //切换商品排列样式
    $('.listorimg').click(function(){
        var storage = window.localStorage;
        $(this).toggleClass('orimg');
        $('#goods_list').toggleClass('addimgchan');
        storage.setItem('listType',$(this).hasClass('orimg') ?  '_square' : '_list');//_list  列表式  _square 宫格式

    })
})

    //############   点击多选确定按钮      ############
    // t 为类型  是品牌 还是 规格 还是 属性
    // btn 是点击的确定按钮用于找位置
    get_parment = <?php echo json_encode($_GET); ?>;
    function submitMoreFilter(t){
        var val = new Array();  // 请求的参数值
        $(".filter").each(function(i,o){
            var che=$(o).find('.fr input');
            if(che.attr('checked')){    //选中的值
                val.push(che.val());
            }
        });
        // 没有被勾选的时候
        if(key == ''){
            return false;
        }
        // 品牌
        if(t == 'brand')
        {
            get_parment.brand_id = val.join('_');
        }

        // 组装请求的url
        var url = '';
        for ( var k in get_parment )
        {
            if(k != 'a' && k != 'c' && k != 'm') {
                url += "&" + k + '=' + get_parment[k];
            }
        }
        location.href ="/index.php?m=Mobile&c=Goods&a=search"+url;
    }
    var is_get_goodsinfo = 1;
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
            event.stopPropagation();    //  阻止事件冒泡
            event.preventDefault(); //阻止默认行为 ( 表单提交 )。
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

</script>
</body>
</html>
