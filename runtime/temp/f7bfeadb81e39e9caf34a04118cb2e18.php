<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"./template/mobile/rainbow/goods\ajaxGoodsList.html";i:1576824690;}*/ ?>
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
                        <p class="sc_pri fl"><span>￥</span><b><?php echo $vo[shop_price]; ?>元</b></p>
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
<?php endforeach; endif; else: echo "" ;endif; ?>