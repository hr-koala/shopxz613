<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"./template/web/rainbow/cart\firmOrder.html";i:1547432698;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />
    <!-- 苹果手机设置Web应用是否以全屏模式运行 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- 移动web页面自动探测电话号码 -->
    <meta name="format-detection" content="telephone=no">
    <title>确认订单</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-order">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/xiong/css/grabble.css">
<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>确认订单</h5>
</header>


<div class="conter">
    <div class="warning"></div>
    <!-- 提示 -->
    <!--<a href="" class="prompt">
        <span class="mask-text"></span>
        <p class="hint"><?php echo $order_advertising_news; ?></p>
        <p class="hint-two"><?php echo $order_advertising_news; ?></p>
    </a>-->

    <div class="address">
        <!-- 新建地址 -->
        <?php if($address != null): ?>
            <a class="existing" href="<?php echo U('cosmetology/Mine/address',['url'=>'firm_order_url']); ?>">
                <div class="existing-left">
                    <!--<div class="icon icon-address1"></div>-->
                    <span class="username"><?php echo $address['consignee']; ?></span>
                    <span class="statu">默认</span>
                </div>
                <div class="existing-right">
                    <span class="phone-number"><?php echo $address['mobile']; ?></span>
                    <span class="coordinate"><?php echo $regionList[$address['province']]; ?><?php echo $regionList[$address['city']]; ?><?php echo $regionList[$address['district']]; ?><?php echo $regionList[$address['twon']]; ?><?php echo $address['address']; ?></span>
                    <span class="e-right"></span>
                </div>
            </a>
            <input type="hidden" class="is_address" value="1">
        <?php else: ?>
            <a class="new-address" href="<?php echo U('cosmetology/User/newAddress',['url'=>'firm_order_url']); ?>">
                <div class="imgplus">
                    <img src="/template/web/rainbow/static/xiong/img/jia.png">
                </div>
                <span class="text">新建收货地址</span>
                <span class="right"></span>
            </a>
            <input type="hidden" class="is_address" value="0">
        <?php endif; ?>

        <!-- 提示填写收货地址 -->
        <div class="write">请选择收获地址</div>

    </div>

    <div class="information">
        <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $i = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <div class="commodity">
                <img src="/template/web/rainbow/static/images/details01.png">
                <div class="info" style="max-width: 65%;">
                    <p>复合树莓果片压片糖果复合树莓果片压片糖果</p>
                    <?php if(!(empty($list[spec_key_name]) || (($list[spec_key_name] instanceof \think\Collection || $list[spec_key_name] instanceof \think\Paginator ) && $list[spec_key_name]->isEmpty()))): ?>
                        <span class="specification">规格:<?php echo $list[spec_key_name]; ?></span>
                    <?php endif; if(($level != null) AND ($taxation_form == null)): ?>
                        <div class="proxy-prices">代理价:
                            <span class="proxy">¥<?php echo $list[member_goods_price]; ?></span>
                            <span class="old-prices">¥<?php echo $list[goods_price]; ?></span>
                        </div>
                    <?php elseif(($level != null) AND ($taxation_form != null)): ?>
                        <div class="prices">¥<?php echo $list[member_goods_price]*2; ?></div>
                    <?php else: ?>
                        <div class="prices">¥<?php echo $list[member_goods_price]; ?></div>
                    <?php endif; ?>
                    <!-- <?php if(!(empty($level) || (($level instanceof \think\Collection || $level instanceof \think\Paginator ) && $level->isEmpty()))): ?>
                        <div class="proxy-prices">代理价:
                            <span class="proxy">¥<?php echo $list[member_goods_price]; ?></span>
                            <span class="old-prices">¥<?php echo $list[goods_price]; ?></span>
                        </div>
                    <?php else: ?>
                        <div class="prices">¥<?php echo $list[member_goods_price]; ?></div>
                    <?php endif; ?> -->
                </div>
                <span>×<?php echo $list[goods_num]; ?></span>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <!-- 清除浮动 -->
        <div style="clear:both;"></div>
        <div class="distribution">
            <div class="distr">配送方式
                <span>快递发货</span>
            </div>
            <?php if(($level != null) AND ($taxation_form == null)): ?>
                <div class="commodprice">商品原价
                    <span>¥<?php echo $original_price; ?></span>
                </div>
                <div class="offerprices">代理优惠价
                    <span>¥<?php echo $cartPriceInfo['total_fee']; ?></span>
                </div>
            <?php elseif(($level != null) AND ($taxation_form != null)): ?>
                <div class="commodity-price">商品金额
                    <span>¥<?php echo $cartPriceInfo['total_fee']*2; ?></span>
                </div>
            <?php else: ?>
                <div class="commodity-price">商品金额
                    <span>¥<?php echo $cartPriceInfo['total_fee']; ?></span>
                </div>
            <?php endif; ?>
            <!-- <?php if(!(empty($level) || (($level instanceof \think\Collection || $level instanceof \think\Paginator ) && $level->isEmpty()))): ?>
                <div class="commodprice">商品原价
                    <span>¥<?php echo $cartPriceInfo['total_fee']*2; ?></span>
                </div>
                <div class="offerprices">代理优惠价
                    <span>¥<?php echo $cartPriceInfo['total_fee']; ?></span>
                </div>
            <?php else: ?>
                <div class="commodity-price">商品金额
                    <span>¥<?php echo $cartPriceInfo['total_fee']; ?></span>
                </div>
            <?php endif; ?> -->

        </div>
    </div>

    <form action="<?php echo U('Order/placeOrder'); ?>" method="post">
        <?php if($taxation_form != null): ?>
            <input type="hidden" name="taxation_form" value="<?php echo $taxation_form; ?>">
        <?php endif; if(!(empty($actions) || (($actions instanceof \think\Collection || $actions instanceof \think\Paginator ) && $actions->isEmpty()))): ?>
            <input type="hidden" name="actions" value="<?php echo $actions; ?>">
            <input type="hidden" name="goods_id" value="<?php echo $cartList[0]['goods_id']; ?>">
            <input type="hidden" name="goods_num" value="<?php echo $cartList[0]['goods_num']; ?>">
            <input type="hidden" name="item_id" value="<?php echo $cartList[0]['item_id']; ?>">
        <?php endif; ?>
        <input type="hidden" name="address_id" value="<?php echo $address['address_id']; ?>">
        <div class="communication" style="padding-bottom: 5rem;">
            <div class="freight">
                运费:
                <span>￥0</span>
            </div>
            <div class="leave-comments">
                买家留言:
                <input type="search" name="user_note" value="" placeholder="卖家留言">
            </div>
            <span>共<?php echo $cartPriceInfo['goods_num']; ?>件商品</span>
        </div>
        <div class="bottom">
            <div>合计:<span>￥
                <?php if(($level != null) AND ($taxation_form == null)): ?>
                    <?php echo $cartPriceInfo['total_fee']; elseif(($level != null) AND ($taxation_form != null)): ?>
                    <?php echo $cartPriceInfo['total_fee']*2; else: ?>
                    <?php echo $cartPriceInfo['total_fee']; endif; ?>
            </span></div>
            <input type="submit" class="btn" value="提交订单">
        </div>
    </form>
</div>

<script type="text/javascript">
    $('.btn').click(function(){
        var is_address = $('.is_address').val();
        if(is_address == 0){
            $('.write').show();
            setTimeout(function(){
                $('.write').hide();//找到对应的标签隐藏
            },2000)//3000是表示3秒后执行隐藏代码
            return false;
        }
    })
</script>

    
</body>
</html>