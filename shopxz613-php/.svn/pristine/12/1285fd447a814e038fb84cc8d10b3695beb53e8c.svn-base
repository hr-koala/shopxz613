<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"./template/web/rainbow/agent\drawingRecord.html";i:1547458541;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>提现明细</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-withdraw-detail">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>提现明细</h5>
</header>
<!--<div class="no-data">
    <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
    <div class="no-data-txt">暂无！</div>
</div>-->
<div class="container has-data">
    <div class="top">
        <div class="num">￥<span><?php echo $info['total_withdrawals']; ?></span></div>
        <div class="name">共计提现</div>
    </div>
    <div class="main">
        <div class="balance">
            <div class="balance-lf">
                <div class="balance-img">
                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_tixian1.png">
                </div>
                <div class="balance-txt">
                    当前余额：<span><?php echo $user_info['user_money']; ?></span>
                </div>
            </div>
            <div class="balance-right" onclick="window.location.href='<?php echo $url; ?>'">
                <span>去提现</span>
                <img src="/template/web/rainbow/static/tonghaoran/images/icon_fanhui.png">
            </div>
        </div>
        <div class="no-data">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
            <div class="no-data-txt">暂无！</div>
        </div>
         <!--<div class="withdraw">
            <div class="withdraw-lf">
                <div class="withdraw-img">
                    <img src="/template/web/rainbow/static/tonghaoran/images/prod6.png">
                </div>
                <div class="withdraw-txt">
                    <div class="withdraw-txt1">佣金提现</div>
                    <div class="withdraw-txt-time">2018-12-13  09:04:40</div>
                </div>
            </div>
            <div class="withdraw-right">
                <div class="withdraw-right-num">-200.00</div>
                <div class="withdraw-right-txt">提现成功</div>
            </div>
        </div>-->
        <!-- <div class="withdraw">
            <div class="withdraw-lf">
                <div class="withdraw-img">
                    <img src="/template/web/rainbow/static/tonghaoran/images/prod6.png">
                </div>
                <div class="withdraw-txt">
                    <div class="withdraw-txt1">佣金提现</div>
                    <div class="withdraw-txt-time">2018-12-13  09:04:40</div>
                </div>
            </div>
            <div class="withdraw-right">
                <div class="withdraw-right-num">-200.00</div>
                <div class="withdraw-right-txt">提现成功</div>
            </div>
        </div> -->
        <!-- <div class="withdraw">
            <div class="withdraw-lf">
                <div class="withdraw-img">
                    <img src="/template/web/rainbow/static/tonghaoran/images/prod6.png">
                </div>
                <div class="withdraw-txt">
                    <div class="withdraw-txt1">佣金提现</div>
                    <div class="withdraw-txt-time">2018-12-13  09:04:40</div>
                </div>
            </div>
            <div class="withdraw-right">
                <div class="withdraw-right-num">-200.00</div>
                <div class="withdraw-right-txt">提现成功</div>
            </div>
        </div> -->
        <?php if(is_array($info['drawing_record']) || $info['drawing_record'] instanceof \think\Collection || $info['drawing_record'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['drawing_record'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <div class="withdraw">
                <div class="withdraw-lf">
                    <div class="withdraw-img">
                        <img src="<?php if($user_info[head_pic] != null): ?><?php echo $user_info[head_pic]; else: ?>/template/web/rainbow/static/tonghaoran/images/prod6.png<?php endif; ?>">
                    </div>
                    <div class="withdraw-txt">
                        <div class="withdraw-txt1">佣金提现</div>
                        <div class="withdraw-txt-time"><?php echo date('Y-m-d H:i:s',$list[create_time]); ?></div>
                    </div>
                </div>
                <div class="withdraw-right">
                    <div class="withdraw-right-num"><?php if($list[status] == 2): ?>-<?php endif; ?><?php echo $list[money]; ?></div>
                    <div class="withdraw-right-txt">
                        <?php if($list[status] == -2): ?>删除作废
                        <?php elseif($list[status] == -1): ?>审核失败
                        <?php elseif($list[status] == 0): ?>申请中
                        <?php elseif($list[status] == 1): ?>审核通过
                        <?php elseif($list[status] == 2): ?>付款成功
                        <?php elseif($list[status] == 3): ?>付款失败
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
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
        console.log($(".top .num span").text())
        if($(".top .num span").text() > 0){
            $(".page-withdraw-detail .no-data").hide()
            $(".page-withdraw-detail .has-data").show()
        }else {
            $(".page-withdraw-detail .no-data").show()
            $(".page-withdraw-detail .has-data").hide()
        }
    })
</script>

</body>
</html>