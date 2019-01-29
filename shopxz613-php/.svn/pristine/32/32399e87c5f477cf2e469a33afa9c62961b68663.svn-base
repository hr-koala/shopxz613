<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:43:"./template/web/rainbow/goods\ajaxGoods.html";i:1547189899;}*/ ?>
<div class="list" id="goodslist">
    <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ware): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo U('cosmetology/Goods/details',['id'=>$ware['goods_id']]); ?>" class="box flex-row">
            <div class="img"><img src="<?php echo $ware['original_img']; ?>" alt=""></div>
            <div class="right flex-column">
                <div class="name"><?php echo $ware['goods_name']; ?></div>
                <?php if($level != null): ?>
                    <div class="bot flex-row">
                        <div class="gleft">
                            <div class="has-price">¥<?php echo $ware['shop_price']; ?></div>
                            <div class="price">代理价：<span>¥<?php echo $ware['shop_price']/2; ?></span></div>
                        </div>
                        <div class="icon-cart"></div>
                    </div>
                <?php else: ?>
                    <div class="bot flex-row">
                        <div class="price"><span>¥<?php echo $ware['shop_price']; ?></span></div>
                        <div class="icon-cart"></div>
                    </div>
                <?php endif; ?>
            </div>
        </a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>