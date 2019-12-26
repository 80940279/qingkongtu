<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./template/mobile/rainbow/index\index.html";i:1573800188;s:79:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\wx_share.html";i:1576490065;s:81:"D:\phpStudy\PHPTutorial\WWW\tpshop\template\mobile\rainbow\public\footer_nav.html";i:1576812558;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>首页-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="/template/mobile/rainbow/static/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/mobile/rainbow/static/css/iconfont.css"/>
    <script src="/template/mobile/rainbow/static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <!--<script src="/template/mobile/rainbow/static/js/zepto-1.2.0-min.js" type="text/javascript" charset="utf-8"></script>-->
    <script src="/template/mobile/rainbow/static/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/mobile/rainbow/static/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/global.js"></script>
    <script src="/template/mobile/rainbow/static/js/layer.js" type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon"
          href="<?php echo (isset($tpshop_config['shop_info_store_ico']) && ($tpshop_config['shop_info_store_ico'] !== '')?$tpshop_config['shop_info_store_ico']:'/public/static/images/logo/storeico_default.png'); ?>"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="/template/mobile/rainbow/static/css/personal.css"/>
</head>
<style>
    .content {
        background-color: rgba(0, 0, 0, 0);
    }

    .g4 {
        background-color: #eef0f3;
    }

    .jz-loods {
        height: 2.2rem;
        line-height: 2.2rem;
        background-color: #eef0f3;
    }

    .h-showcase {
        border-top: 0.213rem solid #eef0f3;
    }

    .f-recommend li:last-child {
        margin-bottom: 0.213rem;
    }

    body {
        background-color: #eef0f3;
    }

    .c-line {
        width: 100%;
        background-color: red;
        text-align: center;
        font-size: 0.52rem;
        background: url(/template/mobile/rainbow/static/images/c-line.png) no-repeat 100% 100%;
        background-position-y: 0.15rem;
        background-position-x: 0.545rem;
        background-size: 14.72rem;
        color: #999999;
        display: none;
        margin-top: 1rem;
    }

    .floor {
        background-color: #ffffff;
    }

    .fr-pdetail {
        padding-top: 0.4rem !important;
    }

    .frp-price {
        font-weight: 800;
    }

    .mslide li img {
        height: 7.254rem;
    }

    .mybutton {
        border: 0rem solid;
        text-align: center;
        display: inline-block;
        border-radius: 0.2rem;
        margin: 0.5rem 0 0;
        font-size: 0.6rem;
        font-weight: bold;
        padding: 0.6rem;
        color:#ffffff;
        width: 100%;
        background-image: linear-gradient(to right, #FFB763, #FFC66D);
    }

    nav a img {
        width: 2rem;
        height: 2rem;
    }

    nav a span {
        color: #666666;
    }

    .goods-parameter {
        display: flex;
        width: 100%;
        overflow: auto;
        background: #ffffff;
    }

    .merit {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 12rem;
        height: 100%;
        padding: 0.05rem 0 0 0.5rem;
    }

    .tip {
        width: 0.2rem;
        height: 60%;
        border-radius: 3rem;
        background-image: linear-gradient(to right, #ffb763, #ffc66d);
        float: left;
        margin-top: 2%;
        margin-left: 0.64rem;
    }

    .goods-parameter::-webkit-scrollbar {
        /* 隐藏滚动条, 这种方式不兼容 火狐 和 IE */
        display: none;
    }

    .goods {
        width: 100%;
        height: 100%;
        background-color: #fff;
    }

    .goods-list {
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    .goods-details {
        display: flex;
        justify-content: space-between;

        width: 100%;
        height: 5rem;
        padding: 0.2rem 0.6rem;
        border-bottom: 0.1rem solid #eee;
    }

    .goods-details img {

        width: 3rem;
        height: 3rem;
    }

    .goods-info {
        position: relative;

        width: 100%;
        height: 100%;
    }

    .goods-info h3 {
        width: 10.3rem;
        height: 1.6rem;
        font-size: 0.8rem;
        color: #000;
        word-wrap: break-word;
        word-break: break-all;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }

    .goods-info p {
        width: 10.55rem;
        font-size: 0.5rem;
        color: #666;
        margin-top: 0.1rem;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .goods-info span {
        display: inline-block;
        border: 0.03rem #ffc155 solid;
        border-radius: 0.2rem;
        color: #ffc155;
        font-size: 0.5rem;
        padding: 0.1rem 0.3rem 0.1rem 0.2rem;
        margin-top: 0.3rem;

    }

    .goods-info div {
        position: absolute;

        display: flex;
        align-items: center;
        justify-content: center;

        width: 1.25rem;
        height: 1.25rem;
        border-radius: 50%;

        right: 0.1rem;
        bottom: 0.01rem;
    }

    .goods-list::-webkit-scrollbar {
        /* 隐藏滚动条, 这种方式不兼容 火狐 和 IE */
        display: none;
    }
</style>
<body style="background: #ffffff">
<!--顶部搜索栏-s-->
<div class="classreturn">
    <div class="content">
        <div class="ds-in-bl search center">
            <span>晴空兔</span>
        </div>
    </div>
</div>
<!--顶部搜索栏-e-->

<!--顶部滚动广告栏-s-->
<!--    <div class="banner ban1">-->
<!--        <div class="mslide" id="slideTpshop">-->
<!--            <ul>-->
<!--                &lt;!&ndash;广告表&ndash;&gt;-->
<!--                <?php $pid =9;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("5")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 5- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>-->
<!--                    <li><a href="<?php echo $v['ad_link']; ?><?php echo !empty($edit_ad)?'&suggestion=750*300' : ''; ?>">-->
<!--                        <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>" alt="">-->
<!--                    </a></li>-->
<!--                <?php endforeach; ?>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--顶部滚动广告栏-e-->
<!--    -->

<div class="z_user_head">
    <div class="z_user_top">
        <div class="user_top_tx">
            <img src="<?php echo $user['head_pic']==''?'/template/mobile/rainbow/static/images/icon_03.png':$user['head_pic']; ?>"/>
        </div>
        <div class="user_top_name">
            <a href="javascript:void(0);"><?php echo $user['nickname']==''?'王先生':$user['nickname']; ?></a>
        </div>
        <div class="user_top_name">
            <a href="javascript:void(0);" style="font-size: 0.5rem;font-weight: 100;color: #666666;">上级推荐码<?php echo $user['nickname']==''?'688699':$user['nickname']; ?></a>
        </div>
        <div class="user_top_title">
            <a href="javascript:void(0);"></a>
        </div>
    </div>
    <div class="z_user_down">
        <div class="user_down_bg"></div>
        <ul>
            <li>
                <a href="<?php echo U('Mobile/User/account'); ?>">
                    <div class="user_down_dev" style="color: #FFB638"><?php echo $user['user_money']; ?></div>
                    <div class="user_down_name">销售额</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Mobile/User/points_list'); ?>">
                    <div class="user_down_dev" style="color: #4791FF"><?php echo $user['user_money']; ?></div>
                    <div class="user_down_name">本月利润</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Mobile/User/points_list'); ?>">
                    <div class="user_down_dev" style="color: #FF5438"><?php echo $user['user_money']; ?></div>
                    <div class="user_down_name">订单数</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="z_user_icon">
        <a href="/Mobile/User/userinfo.html">
            <i></i>
        </a>
    </div>
</div>


<!--菜单-start-->
<div class="floor dh">
    <nav>
        <a href="<?php echo U('Order/order_list'); ?>">
            <img src="/template/mobile/rainbow/static/images/system/allorder.png"/><br/>
            <span>全部订单</span>
        </a>
        <a href="<?php echo U('Order/order_list',array('type'=>'WAITPAY')); ?>">

            <img src="/template/mobile/rainbow/static/images/system/waitpay.png"/><br/>
            <span>待付款</span>
        </a>
        <!--<a href="shopcar.html">-->
        <a href="<?php echo U('Order/order_list',array('type'=>'WAITSEND')); ?>">
            <img src="/template/mobile/rainbow/static/images/system/waitsend.png"/><br/>
            <span>待发货</span>

        </a>
        <a href="<?php echo U('Order/wait_receive',array('type'=>'WAITRECEIVE')); ?>">

            <img src="/template/mobile/rainbow/static/images/system/waitsave.png"/><br/>
            <span>待收货</span>

        </a>
        <div class="mybutton">立即下单</div>
        <a href="<?php echo U('Activity/group_list'); ?>">

            <img src="/template/mobile/rainbow/static/images/system/sendset.png"/><br/>
            <span>发货人设置</span>

        </a>
        <a href="<?php echo U('User/address_list'); ?>">

            <img src="/template/mobile/rainbow/static/images/system/saveset.png"/><br/>
            <span>收货人设置</span>

        </a>
        <a href="<?php echo U('Goods/integralMall'); ?>">

            <img src="/template/mobile/rainbow/static/images/system/start.png"/><br/>
            <span>收藏商品</span>

        </a>
        <!--<a href="my.html">-->
        <a href="javascript:void(0);" onclick="alert('请购买高级版支持哦!');">

            <img src="/template/mobile/rainbow/static/images/system/contant.png"/><br/>
            <span>联系客服</span>

        </a>
    </nav>
</div>
<!--菜单-end-->

<!--秒杀-start-->

<div style="background: #fff;height: 1.5rem;">
    <div class="tip"></div>
    <div style="height:100%;line-height: 1.6rem;font-size: .64rem;font-weight: 600;padding-left: .427rem; display:inline-block;">
        促销活动
    </div>
    <div style="float: right;height:100%;line-height: 1.6rem;font-size: .54rem;font-weight: 600;padding-right: .427rem; ">
        <a href="<?php echo U('Mobile/Activity/flash_sale_list'); ?>" style="color: #FFC153">
            查看更多
        </a>
    </div>
</div>

<!--秒杀-end-->
<div class="goods-parameter">
    <div class="merit">
        <img style="width:100%;height:100%;border-radius: 0.4rem;" src="/template/mobile/rainbow/static/images/system/test.jpg"/>
    </div>
    <div class="merit">
        <img style="width:100%;height:100%;border-radius: 0.4rem;" src="/template/mobile/rainbow/static/images/system/test.jpg"/>
    </div>
    <div class="merit">
        <img style="width:100%;height:100%;border-radius: 0.4rem;" src="/template/mobile/rainbow/static/images/system/test.jpg"/>
    </div>
    <div class="merit">
        <img style="width:100%;height:100%;border-radius: 0.4rem;" src="/template/mobile/rainbow/static/images/system/test.jpg"/>
    </div>
    <div class="merit">
        <img style="width:100%;height:100%;border-radius: 0.4rem;" src="/template/mobile/rainbow/static/images/system/test.jpg"/>
    </div>
</div>
<div style="background: #fff;height: 1.5rem;margin-top: 0.3rem">
    <div class="tip"></div>
    <div style="height:100%;line-height: 1.6rem;font-size: .64rem;font-weight: 600;padding-left: .427rem; display:inline-block;">
        大家都在屯
    </div>

</div>
<div class="goods">
    <div class="goods-list" ref="goodsList">
        <div class="goods-details">
            <div style="width: 6rem;height: 100%;text-align: center;line-height: 4.5rem">
                <img src="/template/mobile/rainbow/static/images/system/download.jpg" alt="商品"/>
            </div>
            <div class="goods-info">
                <h3> 668,699,699668,699,699668,699,699668,699,699668,699,699668,699,699668,699,699 </h3>
                <span>利润  668,999,999 </span>
                <span style="color:#FFB58D;border:1pt #FFB58D solid;margin-left:10pt">利润率  668,699,999 </span>
                <p style="margin-top:0.3rem">
                    采购金额
                    <strong style="color:#6490FF;font-size:0.6rem"> 668,699,699 </strong> 日元/件
                </p>
                <p>
                    销售金额
                    <strong style="color:#FFB764;font-size:0.6rem"> 668,699,699 </strong> 日元/件
                </p>

                <!-- <van-icon name="shopping-cart" /> -->
                <div>
                    <img style="width:100%;height:100%" src="/template/mobile/rainbow/static/images/system/shop.png"/>
                </div>
                <div style="right: 1.4rem;">
                    <img style="width:100%;height:100%" src="/template/mobile/rainbow/static/images/system/like.png"/>
                </div>
            </div>
        </div>
        <div class="goods-details">
            <div style="width: 6rem;height: 100%;text-align: center;line-height: 4.5rem">
                <img src="/template/mobile/rainbow/static/images/system/download.jpg" alt="商品"/>
            </div>
            <div class="goods-info">
                <h3> 668,699,699668,699,699668,699,699668,699,699668,699,699668,699,699668,699,699 </h3>
                <span>利润  668,999,999 </span>
                <span style="color:#FFB58D;border:1pt #FFB58D solid;margin-left:10pt">利润率  668,699,999 </span>
                <p style="margin-top:0.3rem">
                    采购金额
                    <strong style="color:#6490FF;font-size:0.6rem"> 668,699,699 </strong> 日元/件
                </p>
                <p>
                    销售金额
                    <strong style="color:#FFB764;font-size:0.6rem"> 668,699,699 </strong> 日元/件
                </p>

                <!-- <van-icon name="shopping-cart" /> -->
                <div>
                    <img style="width:100%;height:100%" src="/template/mobile/rainbow/static/images/system/shop.png"/>
                </div>
                <div style="right: 1.4rem;">
                    <img style="width:100%;height:100%" src="/template/mobile/rainbow/static/images/system/like.png"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="f-classify">-->
<!--    <ul>-->
<!--        <li>-->
<!--            <?php $pid =507;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>&lt;!&ndash; 中间广告图-左图1 &ndash;&gt;-->
<!--                <?php if($_GET['edit_ad']  == 1): ?>-->
<!--                    <a href="<?php echo $v['ad_link']; ?>">-->
<!--                        <?php else: ?>-->
<!--                            <a href="<?php echo get_bd_url($v['ad_link'],$v['media_type']); ?>">-->
<!--                <?php endif; ?>-->

<!--                <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>"/>-->
<!--                </a>-->
<!--            <?php endforeach; ?>-->
<!--        </li>-->
<!--        <li>-->
<!--            <?php $pid =508;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>&lt;!&ndash; 中间广告图-左图2 &ndash;&gt;-->
<!--                <?php if($_GET['edit_ad']  == 1): ?>-->
<!--                    <a href="<?php echo $v['ad_link']; ?>">-->
<!--                        <?php else: ?>-->
<!--                            <a href="<?php echo get_bd_url($v['ad_link'],$v['media_type']); ?>">-->
<!--                <?php endif; ?>-->
<!--                <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>"/>-->
<!--                </a>-->
<!--            <?php endforeach; ?>-->
<!--        </li>-->
<!--        <li>-->
<!--            <?php $pid =509;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>&lt;!&ndash; 中间广告图-右图1 &ndash;&gt;-->
<!--                <?php if($_GET['edit_ad']  == 1): ?>-->
<!--                    <a href="<?php echo $v['ad_link']; ?>">-->
<!--                        <?php else: ?>-->
<!--                            <a href="<?php echo get_bd_url($v['ad_link'],$v['media_type']); ?>">-->
<!--                <?php endif; ?>-->
<!--                <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>"/>-->
<!--                </a>-->
<!--            <?php endforeach; ?>-->
<!--        </li>-->
<!--        <li>-->
<!--            <?php $pid =510;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>&lt;!&ndash; 中间广告图-右图2 &ndash;&gt;-->
<!--                <?php if($_GET['edit_ad']  == 1): ?>-->
<!--                    <a href="<?php echo $v['ad_link']; ?>">-->
<!--                        <?php else: ?>-->
<!--                            <a href="<?php echo get_bd_url($v['ad_link'],$v['media_type']); ?>">-->
<!--                <?php endif; ?>-->
<!--                <img class="pos-smallad4" src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>"/>-->
<!--                </a>-->
<!--            <?php endforeach; ?>-->
<!--        </li>-->
<!--    </ul>-->


<!--</div>-->
<!--<div class="h-showcase">-->
<!--    <?php $pid =506;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1576810800 and end_time >= 1576810800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>-->
<!--        <?php if($_GET['edit_ad']  == 1): ?>-->
<!--            <a href="<?php echo $v['ad_link']; ?>">-->
<!--                <?php else: ?>-->
<!--                    <a href="<?php echo get_bd_url($v['ad_link'],$v['media_type']); ?>">-->
<!--        <?php endif; ?>-->
<!--        <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>"/>-->
<!--        </a>-->
<!--    <?php endforeach; ?>-->
<!--</div>-->
<!--<div onclick=""></div>-->
<!--热销商品-start-->
<!--<div class="floor newshop">-->
<!--    <div class="banner banner_imgs">-->
<!--        <img src="/template/mobile/rainbow/static/images/h-rxsp.png" alt="热销商品"/>-->
<!--    </div>-->
<!--    <div class="rxsp-list" id="J_ItemList">-->
<!--        <ul>-->

<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--热销商品-end-->
<!--推荐商品-start-->
<!--<?php if($recommend_goods): endif; ?>-->
<!--<div class="floor hotshop index_hot">-->
<!--    <div class="banner banner_imgs ">-->
<!--        <img src="/template/mobile/rainbow/static/images/h-tstj.png" alt="推荐商品"/>-->
<!--    </div>-->
<!--    <div class="f-recommend">-->
<!--        <ul>-->
<!--            <?php if(is_array($recommend_goods) || $recommend_goods instanceof \think\Collection || $recommend_goods instanceof \think\Paginator): if( count($recommend_goods)==0 ) : echo "" ;else: foreach($recommend_goods as $key=>$v): ?>-->
<!--                <li>-->
<!--                    <a href="<?php echo U('mobile/goods/goodsInfo',array('id'=>$v['goods_id'])); ?>">-->
<!--                        <img src="<?php echo goods_thum_images($v['goods_id'],300,300); ?>" alt="<?php echo $v['goods_name']; ?>" style="height: 100%">-->
<!--                        <div class="fr-pdetail">-->
<!--                            <p class="frp-title"><?php echo $v['goods_name']; ?></p>-->
<!--                            <?php if($v['label_id']): ?>-->
<!--                                <span class="frp-label"><?php echo $v['label_id']; ?></span>-->
<!--                                <?php else: ?>-->
<!--                                    <span class="frp-label" style="border:none"></span>-->
<!--                            <?php endif; ?>-->
<!--                            <div class="frp-price"><span class="ro-sm">￥</span><span class="ro-price"><?php echo explode_price($v['shop_price'],0); ?></span><span-->
<!--                                    class="ro-sm">.<?php echo explode_price($v['shop_price'],1); ?></span></div>-->
<!--                            <div class="wo-msg">-->
<!--                                <span>已售<?php echo $v['sales_sum']; ?>件</span>-->
<!--                                <span><?php echo $v['comment_statistics']['high_rate']; ?>%好评</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--            <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--</if>-->
<!--推荐商品-end-->

<!--拼团列表-start-->
<!--<?php if($team_activity): ?>-->
<!--    <div class="floor guesslike m-b-0">-->
<!--        <div class="banner banner_imgs ">-->
<!--            <img src="/template/mobile/rainbow/static/images/h-ptlbzs.png" alt="拼团列表"/>-->
<!--        </div>-->
<!--        <div class="vir" style="width: 0.683rem"></div>-->
<!--        <div class="pt-group f-recommend">-->
<!--            <ul>-->
<!--                <?php if(is_array($team_activity) || $team_activity instanceof \think\Collection || $team_activity instanceof \think\Paginator): if( count($team_activity)==0 ) : echo "" ;else: foreach($team_activity as $key=>$v): ?>-->
<!--                    <li>-->
<!--                        <a href="<?php echo $v['bd_url']; ?>">-->
<!--                            <div class="content_img">-->
<!--                                <img src="<?php echo goods_thum_images($v['goods_id'],300,300); ?>" alt="<?php echo $v['goods_name']; ?>"-->
<!--                                     style="width: 100%">-->
<!--                            </div>-->
<!--                            <p class="rxsp-title"><?php echo $v['goods_name']; ?></p>-->
<!--                            <span class="rx-sp"><?php echo $v['team_type_desc']; ?></span>-->
<!--                            <span class="rx-sp"><?php echo $v['needer']; ?>人团</span>-->
<!--                            <span class="hd-img">-->
<!--                                        <?php if(is_array($v['follow_users_head_pic']) || $v['follow_users_head_pic'] instanceof \think\Collection || $v['follow_users_head_pic'] instanceof \think\Paginator): if( count($v['follow_users_head_pic'])==0 ) : echo "" ;else: foreach($v['follow_users_head_pic'] as $key=>$p): ?>-->
<!--                                            <span><img src="<?php echo $p['follow_user_head_pic']; ?>" alt=""-->
<!--                                                       style="width: 0.768rem;height: 0.768rem"></span>-->
<!--                                        <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--                                </span>-->
<!--                            <div class="rxsp-price">-->
<!--                                <span class="ro-sm">￥</span><span class="ro-price"><?php echo explode_price($v['team_goods_item'][0]['team_price'],0); ?></span><span-->
<!--                                    class="ro-sm">.<?php echo explode_price($v['team_goods_item'][0]['team_price'],1); ?></span>-->
<!--                                <span class="has-sold">已拼<?php echo $v['virtual_sale_num']; ?>件</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--<?php endif; ?>-->


<div class="jz-loods get_more">
    <span class="loading"><img src="/template/mobile/rainbow/static/images/loading2.gif" alt=""></span>
    <span>商品加载中...</span>
    <!--<em>商品加载完毕...</em>-->
</div>
<div class="c-line">
    <p>已显示完该类商品</p>
</div>
</div>
<!--猜您喜欢-end-->
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
<!--底部-start-->

<!--底部-end-->

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
<script src="/template/mobile/rainbow/static/js/style.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/template/mobile/rainbow/static/js/sourch_submit.js"></script>
<script type="text/javascript">
    $(function () {
//        加载热销商品信息
        ajax_sourch_submit();
    })
    $('.hd-img').children('span').each(function () {
        console.log($(this).index())
        $(this).css('right', $(this).index() * $('.vir').width())
    })

    /**
     * 秒杀模块倒计时
     * */
    function GetRTime(end_time) {
        var NowTime = new Date();
        var t = (end_time * 1000) - NowTime.getTime();
        // var d = Math.floor(t/1000/60/60/24);
        var h = Math.floor(t / 1000 / 60 / 60 % 24) < 10 ? '0' + Math.floor(t / 1000 / 60 / 60 % 24) : Math.floor(t / 1000 / 60 / 60 % 24);
        var m = Math.floor(t / 1000 / 60 % 60) < 10 ? '0' + Math.floor(t / 1000 / 60 % 60) : Math.floor(t / 1000 / 60 % 60);
        var s = Math.floor(t / 1000 % 60) < 10 ? '0' + Math.floor(t / 1000 % 60) : Math.floor(t / 1000 % 60);
        if (s >= 0)
            return h + ':' + m + ':' + s + '';
    }

    function GetRTime2() {
        var text = GetRTime('<?php echo $end_time; ?>');
        if (text == 0) {
            $(".hms").text('活动已结束');
        } else {
            $(".hms").text(text);
        }
    }

    setInterval(GetRTime2, 1000);

    /**
     * 继续加载猜您喜欢
     * */
    var before_request = 1; // 上一次请求是否已经有返回来, 有才可以进行下一次请求
    var page = 0;

    function ajax_sourch_submit() {
        if (before_request == 0)// 上一次请求没回来 不进行下一次请求
            return false;
        before_request = 0;
        page++;
        $.ajax({
            type: "get",
            url: "/index.php?m=Mobile&c=Index&a=ajaxGetMore&p=" + page,
            success: function (data) {
                if (data) {
                    $("#J_ItemList>ul").append(data);
                    before_request = 1;
                } else {
                    $('.get_more').hide();
                    $('.c-line').show()
                }
            }
        });
    }
</script>
</body>
</html>
