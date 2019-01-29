<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"./template/web/rainbow/agent\reprotInforSuccess.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="format-detection" content="telephone=no">
    <title>提交成功</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/mr_style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body class="page-report-submit"> -->

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
    <title>提交成功</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-report-submit">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">


<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>提交成功</h5>
</header>

<div class="container">
    <div class="main">
        <img src="/template/web/rainbow/static/tonghaoran/images/report-submit.png">
        <h3>资料提交成功!</h3>
        <div class="prompt-txt"><div class="icon prompt"></div><span>购买4980礼包成为代理</span> </div>
    </div>

    <div class="btn-box">
        <a href="<?php echo U('cosmetology/Agent/reportManagement'); ?>" class="btn btn-blue">立即报单</a>
    </div>
</div>

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
<!-- 
<footer id="footer-nav"></footer>
<script type="text/javascript">var footerNav =  4;</script>
<script type="text/javascript" src="js/footer.js"></script> -->

</body>
</html>