<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"./template/web/rainbow/order\viewLogistics.html";i:1547189899;}*/ ?>
<div class="wuliu">
    <div class="wuliu-stats">
        <div class="wuliu-top">
            <div class="box-top">
                <div class="lf">
                    <div class="shop-img">
                        <img src="<?php echo goods_thum_images($order[order_goods][0]['goods_id'],60,60); ?>">
                    </div>
                    <div class="shop-txt">共<?php echo $order[total_num]; ?>件商品</div>
                </div>
                <div class="rg">
                    <p><?php echo trim($order[goods_name],'、'); ?></p>
                    <div class="yuantong"><?php echo $order[shipping_name]; ?>：<?php echo $order[invoice_no]; ?></div>
                </div>
            </div>
        </div>

        <ul class="wuliu-con">
            <?php if(is_array($logistics_info) || $logistics_info instanceof \think\Collection || $logistics_info instanceof \think\Paginator): $i = 0; $__LIST__ = $logistics_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?>
                <li class="wuliu-box">
                    <div class="time">
                        <div class="day"><?php echo date('m-d',$log[time]); ?></div>
                        <div class="hour"><?php echo date('H:i',$log[time]); ?></div>
                    </div>
                    <div class="stats"></div>
                    <div class="wuliu-info">
                        <div class="wuliu-info-tit"></div>
                        <div class="yun-info">
                            <div class="yun-info1-yuan"></div>
                            <?php echo $log[context]; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="bot-del">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_close.png">
    </div>
</div>