<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"./template/mobile/rainbow/goods\ajaxSearchList.html";i:1576218779;}*/ ?>
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
                        <a href="<?php echo U('Mobile/Goods/goodsInfo',array('id'=>$vo[goods_id])); ?>" class="item"><span class="similar-product-text fl"><?php echo $vo['goods_name']; ?> <?php echo $vo['specGoodsPrice'][0]['key_name']; ?></span></a>
                    </div>
                    <div class="prices">
                        <p class="sc_pri fl"><span>￥</span><b><?php echo $vo[shop_price]; ?>元</b></p>
                    </div>
                    <p class="weight">
                        <span>已售出<?php echo $vo['sales_sum']+$vo['virtual_sales']; ?>件</span>
                        <span goods_id="<?php echo $vo['goods_id']; ?>" class="add_cart"><img src="/template/mobile/rainbow/static/images/red-icon-cart.png" alt=""></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<!--商品-e-->