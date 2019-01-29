<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./template/web/rainbow/agent\myRecommend.html";i:1547457701;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="format-detection" content="telephone=no">
    <title>我的直推</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/mr_style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body class="page-direct"> -->
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
    <title>我的直推</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-invite">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>我的代理</h5>
</header>

<div class="container">
    <div class="top">
        <div class="num"><span><?php echo $subordinate[count]; ?></span></div>
        <div class="name">我的直推（人）</div>
    </div>
    <div class="mine-proxy">
        <div class="mine-offline active">我的下线</div>
        <div class="mine-offline">我的团队</div>
    </div>
    <div class="invite-con">
        <div class="con-top proxy-top-tit">
            <div class="time">注册时间</div>
            <div class="time">手机号码</div>
            <div class="time">当前等级</div>
            <div class="time">代理人数</div>
        </div>
        <div class="con-p">
            <?php if(is_array($subordinate['invitation_record']) || $subordinate['invitation_record'] instanceof \think\Collection || $subordinate['invitation_record'] instanceof \think\Paginator): $i = 0; $__LIST__ = $subordinate['invitation_record'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?>
                <div class="con-txt">
                    <div class="time"><?php echo date('Y-m-d',$record[reg_time]); ?></div>
                    <div class="time"><?php echo substr_replace($record[mobile], '****', 3, 4); ?></div>
                    <div class="time"><?php echo $record[level_name]; ?></div>
                    <div class="time">5</div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="con-top proxy-top-tit">
            <div class="time">注册时间</div>
            <div class="time">手机号码</div>
            <div class="time">当前等级</div>
        </div>
        <div class="con-p">
            <?php if(is_array($subordinate['invitation_record']) || $subordinate['invitation_record'] instanceof \think\Collection || $subordinate['invitation_record'] instanceof \think\Paginator): $i = 0; $__LIST__ = $subordinate['invitation_record'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?>
                <div class="con-txt">
                    <div class="time"><?php echo date('Y-m-d',$record[reg_time]); ?></div>
                    <div class="time"><?php echo substr_replace($record[mobile], '****', 3, 4); ?></div>
                    <div class="time"><?php echo $record[level_name]; ?></div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="invite-no">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_no-daili.png">
        <div class="no-num">
            暂无，去努力邀请好友吧~
        </div>
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

<script>
    $(function () {
        $(".mine-proxy .mine-offline").on("click",function () {
            $(this).addClass("active").siblings(".mine-offline").removeClass("active")
        })
    })
    $(function () {
        console.log($(".top .num span").text())
        if($(".top .num span").text() == 0){
            $(".invite-con").hide()
            $(".invite-no").show()
        }else {
            $(".invite-con").show()
            $(".invite-no").hide()
        }
    })
</script>

</body>
</html>