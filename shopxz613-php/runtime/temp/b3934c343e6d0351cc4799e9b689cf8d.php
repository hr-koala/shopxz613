<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./template/web/rainbow/agent\bankNote.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>分销中心</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-miorder report-currency">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>报单币</h5>
</header>

<div class="container">
    <div class="curren-top">
        <div class="lf">共计:<?php echo $user_info[bank_note_get]; ?></div>
        <div class="rg">剩余：<?php echo $user_info[bank_note_pay]; ?></div>
    </div>
    <div class="head">
        <ul class="flex-row">
            <li data-index="0" class="<?php echo $type==1?'':on; ?>" onclick="window.location.href='<?php echo U('cosmetology/Agent/bankNote'); ?>'">已入账</li>
            <li data-index="1" class="<?php echo $type==1?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Agent/bankNote',['type'=>1]); ?>'">已使用</li>
        </ul>
    </div>

    <div class="no-data">
        <!--<img src="images/icon-null-order.png">-->
    </div>
    <div class="list has-data">
        <?php if($list != null): ?>
            <div class="box">
                <ul>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li class="">
                            <div class="box-lf">
                                <div class="num"><?php echo $val[bank_note]; ?></div>
                                <div class="time">
                                    入账时间：<?php echo date('Y-m-d H:i:s',$val[change_time]); ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>


</body>
<!-- <footer id="footer-nav"></footer>
<script type="text/javascript">var footerNav =  5;</script>
<script type="text/javascript" src="js/footer.js"></script> -->
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

<script>

    $(function(){
        $('.head ul li').on('click', function(){
            var index = $(this).data('index')
            $(this).addClass("on").siblings().removeClass('on')
        })



    })

</script>
</html>