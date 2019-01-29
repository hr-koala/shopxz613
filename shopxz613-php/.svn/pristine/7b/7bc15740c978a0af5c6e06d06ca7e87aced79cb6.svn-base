<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"./template/web/rainbow/order\placeOrder.html";i:1547186387;s:69:"E:\phpStudy\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1546591859;}*/ ?>
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
<body class="page-caqror">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
</header>

<div class="container">
    <div class='main'>
        <div class='box flex-row'>
            <div class='name'>订单编号</div>
            <div class='num'><?php echo $order; ?></div>
        </div>
        <div class='box flex-row'>
            <div class='name'>订单金额</div>
            <div class='num cg1'>￥<?php echo $info['total_amount']; ?></div>
        </div>
        <div class='btn-box'><!-- onclick="window.location.href='/cosmetology/Pay/wxh5pay.html?order=<?php echo $order; ?>'" -->
            <button type="button" class="btn" >微信支付</button>
        </div>
        <div class='btn-box'><!-- onclick="window.location.href='/cosmetology/Pay/alipay_pay.html?order=<?php echo $order; ?>'" -->
            <button type="button" class="btn zhifubao" >支付宝支付</button>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="/template/web/rainbow/static/js/dialog-plus-min.js"></script>
<script>
$(function(){
    /*$('.zhifubao').click(function(){
        dialogFun_two('暂未开通支付宝支付')
    })*/

    function dialogFun_two(str){
        webToast(str,"middle",3000);
    }
})
</script>
</html>