<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/web/rainbow/order\details.html";i:1547433416;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547606976;}*/ ?>
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
    <title>订单详情</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-miorder page-order-detail">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="order-details">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>订单详情</h5>
</header>

<div class="container">
    <div class="top">
        <div class="top-stats"><?php echo $order[order_status_detail]; ?></div>
        <div class="top-img">
            <img src="/template/web/rainbow/static/tonghaoran/images/order-detail.png">
        </div>
    </div>

    <div class="no-data">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon-null-order.png">
    </div>
    <div class="list has-data">

        <a href="mine_address.html" class="address">
            <div class="lf">
                <div class="address-dingwei">
                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_dingwei.png">
                </div>
                <div class="address-con">
                    <div class="tit">
                        <div class="name">收货人：<?php echo $order[consignee]; ?></div>
                        <div class="tel"><?php echo $order[mobile]; ?></div>
                    </div>
                    <div class="address-txt">收货地址：<?php echo str_replace("，","",$order[full_address]); ?></div>
                </div>
            </div>
             <div class="rg"></div>
        </a>
        <div class="box">
            <ul>
                <?php if(is_array($order['order_goods']) || $order['order_goods'] instanceof \think\Collection || $order['order_goods'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
                    <li class="goods">
                        <div class="item flex-row">
                            <a href="#">
                                <div class="img"><img src="/template/web/rainbow/static/images/details01.png" alt=""></div>
                                <div class="right flex-column">
                                    <div class="name">复合树莓果片压片糖果复合树莓果片压片糖果复合树莓果片压片糖果复合树莓果片压片糖果</div>
                                    <div class="bot">
                                        <div class="spec"><?php echo $goods[spec_key_name]; ?></div>
                                        <div class="flex-row">
                                            <div class="price">￥<?php echo $goods[member_goods_price]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="num">x<?php echo $goods[goods_num]; ?></div>
                            </a>
                        </div>
                    </li>
                    <li class="goods">
                        <div class="item flex-row">
                            <a href="#">
                                <div class="img"><img src="/template/web/rainbow/static/images/details01.png" alt=""></div>
                                <div class="right flex-column">
                                    <div class="name"><?php echo $goods[goods_name]; ?></div>
                                    <div class="bot">
                                        <div class="spec"><?php echo $goods[spec_key_name]; ?></div>
                                        <div class="flex-row">
                                            <div class="price">￥<?php echo $goods[member_goods_price]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="num">x<?php echo $goods[goods_num]; ?></div>
                            </a>
                        </div>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>
        <div class="all">
            <div class="total-price">
                <span>商品总额：</span>
                <span>¥<?php echo $order[goods_price]; ?></span>
            </div>
            <div class="total-price">
                <span>运费：</span>
                <span>¥<?php echo $order[shipping_price]; ?></span>
            </div>
            <div class="total-price">
                <span>实付费（含运费）</span>
                <span>¥<?php echo $order[total_amount]; ?></span>
            </div>
        </div>
        <div class="biaohao">
            <div class="biaohao-txt">
                订单编号：<?php echo $order[order_sn]; ?>
            </div>
            <div class="biaohao-txt">
                创建时间：<?php echo date('Y-m-d H:i:s',$order[add_time]); ?>
            </div>
        </div>
        <div class="btn-row">
            <?php if($order[order_status_detail] == '待支付'): ?>
                <button type="button" class="btn btn-cancel">取消订单</button>
                <button type="button" class="btn bg-blue" onclick="window.location.href='<?php echo U('cosmetology/Order/placeOrder',['order_id'=>$order['order_id']]); ?>'">立即支付</button>
            <?php elseif($order[order_status_detail] == '待收货'): ?>
                <button type="button" class="btn confirm_receipt">确认收货</button>
                <button type="button" class="btn btn-logist">查看物流</button>
            <?php elseif($order[order_status_detail] == '已完成'): ?>
                <button type="button" class="btn btn-logist">查看物流</button>
            <?php endif; ?>
        </div>
    </div>

</div>

<div class="wuliu"></div>
<div class="mask"></div>

<script type="text/javascript" src="/template/web/rainbow/static/js/dialog-plus-min.js"></script>
<footer id="footer-nav"></footer>
<script>
    if("<?php echo $level_status; ?>" == 1){
        var isdaili = true;
    }else{
        var isdaili = false;
    }
</script>
<script type="text/javascript">var footerNav =  <?php echo $footer; ?>;</script>
<script type="text/javascript" src="/template/web/rainbow/static/js/footer.js"></script>

</body>
<script>

    $(function(){
        var order_id = <?php echo $order['order_id']; ?>;
        $('.head ul li').on('click', function(){
            var index = $(this).data('index')
            $(this).addClass("on").siblings().removeClass('on')
        })

        $('.page-miorder .box .btn-cancel').on('click', function(){
            $(this).parent().parent(".box").remove()
            boxlen()
        })
        boxlen()
        function boxlen() {
            console.log($(".page-miorder .box").length)
            if($(".page-miorder .box").length == 0){
                $(".page-miorder .has-data").hide()
                $(".page-miorder .no-data").show()
            }else {
                $(".page-miorder .has-data").show()
                $(".page-miorder .no-data").hide()
            }
        }

        $(".btn-row .btn-logist").on("click",function () {
            $.post("<?php echo U('cosmetology/Order/viewLogistics'); ?>", {order_id:order_id},function(datas){
                var values = JSON.parse(datas);
                if(values.status == 1){
                    $(".page-miorder .wuliu").html(values.info)
                    $(".page-miorder .mask").show()
                    $(".page-miorder .wuliu").show()
                }
            });
            
        })

        $(".wuliu ").on('click', '.bot-del img',function () {
            $(".mask").hide()
            $(".wuliu").hide()
        })

        $('.btn-row .confirm_receipt').on('click', function(){
            $.post("<?php echo U('cosmetology/Order/confirm_receipt'); ?>", {order_id:order_id},function(datas){
                var values = JSON.parse(datas);
                if(values.status == 1){
                    dialogFun_two('已收货')
                    window.location.reload()
                }else{
                    dialogFun_two('收货失败')
                }
            });
        })

        $('.btn-row .btn-cancel').on('click', function(){
            dialogFun('确定取消订单？',$(this));
        })

        function dialogFun(str,inx){
            dialog({
                width: 280,
                title: '提示',
                content: str,
                cancel: false,
                okValue: '确定',
                ok: function(){
                    $.post("<?php echo U('cosmetology/Order/cancelOrder'); ?>", {order_id:order_id},function(datas){
                        var values = JSON.parse(datas);
                        if(values.status == 1){
                            /*$(inx).parent().parent(".box").remove()
                            boxlen()
                            dialogFun_two('取消成功')*/
                            dialogFun_two('取消成功')
                            window.location.href="/cosmetology/Order/orderList.html"
                        }else{
                            dialogFun_two('取消失败')
                        }
                    });
                }
            }).showModal();
        }

        function dialogFun_two(str){
            webToast(str,"middle",3000);
        }

    })

</script>
</html>