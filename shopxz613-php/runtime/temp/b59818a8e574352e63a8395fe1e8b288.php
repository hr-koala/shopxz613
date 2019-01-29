<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"./template/web/rainbow/cart\ajaxCartgoods.html";i:1547189949;}*/ ?>
<div class="main">
    <div class="list">
        <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $k = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($k % 2 );++$k;?>
            <div class="box flex-row" data-num="<?php echo $list['goods_num']; ?>" data-price="<?php echo $list['member_goods_price']; ?>">
                <label :for="'ch' + <?php echo $k; ?>" class="<?php echo $list['selected']==1?'on':''; ?>">
                    <?php if($list['selected'] == 1): ?>
                        <input type="checkbox" name="" :id="'ch' + <?php echo $k; ?>" class="choose" checked="true" value="<?php echo $list['goods_id']; ?>">
                    <?php else: ?>
                        <input type="checkbox" name="" :id="'ch' + <?php echo $k; ?>" class="choose" value="<?php echo $list['goods_id']; ?>">
                    <?php endif; ?>
                </label>
                <a class="img" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>"><img src="<?php echo goods_thum_images($list['goods_id'],400,400); ?>" alt=""></a>
                <div class="right flex-column">
                    <a class="name" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>"><?php echo $list['goods_name']; ?></a>
                    <div class="spec"></div>
                    <div class="sbot flex-row">
                        <a class="price" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>">¥<?php echo $list['member_goods_price']; ?></a>
                        <div class="set-num flex-row">
                            <div class="icon sub" id="subgoodsid<?php echo $list['goods_id']; ?>">-</div>
                            <div class="num"><?php echo $list['goods_num']; ?></div>
                            <div class="icon add" id="addgoodsid<?php echo $list['goods_id']; ?>">+</div>
                        </div>
                    </div>
                </div>
                <div class="icon del" id="delid<?php echo $list['goods_id']; ?>"></div>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="floor flex-row">
        <div class="left flex-row">
            <label for="ch-all" class="ch-lab flex-row">
                <input type="checkbox" name="ch-goods" id="ch-all" class="choose-all">
                <span></span>
                <p>全选</p>
            </label>
            <div class="qian">
                <div class="price">合计：<span id="allPrice">¥<?php echo $total['price']; ?></span></div>
                <div class="p1">不含运费</div>
            </div>
        </div>
        <div class="jies"><p>结算</p></div>
    </div>
    <?php if($cartList == null): ?>
        <div class="no-data">
            <div class="icon-none"></div>
            <p>购物袋空空如也</p>
            <a href="<?php echo U('cosmetology/Index/index'); ?>" class="btn">去首页选购商品吧</a>
        </div>
    <?php endif; ?>
</div>