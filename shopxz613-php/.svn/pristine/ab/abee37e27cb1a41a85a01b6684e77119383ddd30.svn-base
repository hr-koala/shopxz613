<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./template/web/rainbow/order\orderList.html";i:1547434047;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547606976;}*/ ?>
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
    <title>我的订单</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-miorder">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<header id="header" class="">
    <div class="icon-back" onclick="window.location.href='<?php echo U('cosmetology/Mine/index'); ?>'"></div>
    <h5>我的订单</h5>
</header>

<div class="container">
    <div class="head">
        <ul class="flex-row">
            <li data-index="0" class="<?php echo $pitch_on==1?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Order/orderList'); ?>'">全部</li>
            <li data-index="1" class="<?php echo $pitch_on=='WAITPAY'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Order/orderList',['status'=>'WAITPAY']); ?>'">待付款</li>
            <li data-index="2" class="<?php echo $pitch_on=='WAITSEND'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Order/orderList',['status'=>'WAITSEND']); ?>'">待发货</li>
            <li data-index="3" class="<?php echo $pitch_on=='WAITRECEIVE'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Order/orderList',['status'=>'WAITRECEIVE']); ?>'">待收货</li>
            <li data-index="4" class="<?php echo $pitch_on=='FINISH'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Order/orderList',['status'=>'FINISH']); ?>'">已完成</li>
        </ul>
    </div>

    <div class="no-data"></div>
    <div class="list has-data">
        <?php if(is_array($order_list) || $order_list instanceof \think\Collection || $order_list instanceof \think\Paginator): $i = 0; $__LIST__ = $order_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <div class="box">
                <div class="tit flex-row">
                    <!--<div class="order-time">
                        <div class=""> <?php echo date('Y-m-d H:i:s',$list['add_time']); ?></div>
                    </div>-->
                    <div class="bianh">订单编号：<?php echo $list['order_sn']; ?></div>
                    <div class="state"><?php echo C('ORDER_STATUS_DESC')[$list[order_status_code]]; ?></div>
                </div>
                 <!--<div class="state">
                    <?php echo $list['order_sn']; ?><?php echo date('Y-m-d H:i:s',$list['add_time']); ?>
                    <?php echo C('ORDER_STATUS_DESC')[$list[order_status_code]]; ?>
                 </div>-->
                
                <ul>
                    <?php if(is_array($list[goods_list]) || $list[goods_list] instanceof \think\Collection || $list[goods_list] instanceof \think\Paginator): $i = 0; $__LIST__ = $list[goods_list];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
                        <li class="goods">
                            <div class="item flex-row">
                                <a href="<?php echo U('cosmetology/Goods/details',['id'=>$goods['goods_id']]); ?>">
                                    <div class="img"><img src="/template/web/rainbow/static/images/details01.png" alt=""></div>
                                    <div class="right flex-column">
                                        <div class="name"><?php echo $goods['goods_name']; ?></div>
                                        <div class="bot">
                                            <neqempty name="<?php echo $goods['spec_key_name']; ?>">
                                                <div class="spec">规格:<?php echo $goods['spec_key_name']; ?></div>
                                            </neqempty>
                                            <div class="flex-row">
                                                <div class="price">￥<?php echo $goods['member_goods_price']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="num">x<?php echo $goods['goods_num']; ?></div>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <!--<div class="bianh">订单编号：<?php echo $list['order_sn']; ?></div>-->
                <div class="order-time">
                    <div class=""> 订单时间：<?php echo date('Y-m-d H:i:s',$list['add_time']); ?></div>
                </div>
                <div class="money">
                    <div class=""> 共<?php echo $list['goods_count']; ?>件商品</div>  <div class="money-total">合计:<span class="money-total-price">￥<?php echo $list['total_amount']; ?></span></div></div>

                <div class="btn-row">
                    <?php if($list[order_status_code] == 'WAITPAY'): ?>
                        <button type="button" class="btn btn-cancel" id="cancels<?php echo $list['order_id']; ?>">取消订单</button>
                        <button type="button" class="btn bg-blue" onclick="window.location.href='<?php echo U('cosmetology/Order/placeOrder',['order_id'=>$list['order_id']]); ?>'">支付订单</button>
                    <?php endif; if(($list[order_status_code] == 'WAITRECEIVE') OR ($list[order_status_code] == 'FINISH')): ?>
                        <button type="button" class="btn btn-logist" id="logist<?php echo $list[order_id]; ?>">查看物流</button>
                    <?php endif; if($list[order_status_code] == 'WAITRECEIVE'): ?>
                        <button type="button" class="btn confirm_receipt" id="receipt<?php echo $list[order_id]; ?>">确认收货</button>
                    <?php endif; ?>
                    
                    <button type="button" class="btn" onclick="window.location.href='<?php echo U('cosmetology/Order/details',['order_id'=>$list['order_id']]); ?>'">订单详情</button>

                </div>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


    <div class="wuliu"></div>
    <div class="mask"></div>
</div>
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
    $('.head ul li').on('click', function(){
        var index = $(this).data('index')
        $(this).addClass("on").siblings().removeClass('on')
    })

    $('.page-miorder .box .btn-cancel').on('click', function(){
        dialogFun('确定取消订单？',$(this));
    })

    $('.box .btn-row .confirm_receipt').on('click', function(){
        var order_id = $(this).attr('id').substring(7);
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

    boxlen()
    function boxlen() {
        if($(".page-miorder .box").length == 0){
            $(".page-miorder .has-data").hide()
            $(".page-miorder .no-data").show()
        }else {
            $(".page-miorder .has-data").show()
            $(".page-miorder .no-data").hide()
        }
    }

    $(".page-miorder .btn-logist").on("click",function () {
        var order_id = $(this).attr('id').substring(6);
        console.log(order_id)
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



function dialogFun(str,inx){
    dialog({
        width: 280,
        title: '提示',
        content: str,
        cancel: false,
        okValue: '确定',
        ok: function(){
            var order_id = $(inx).attr('id').substring(7);
            $.post("<?php echo U('cosmetology/Order/cancelOrder'); ?>", {order_id:order_id},function(datas){
                var values = JSON.parse(datas);
                if(values.status == 1){
                    $(inx).parent().parent(".box").remove()
                    boxlen()
                    dialogFun_two('取消成功')
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