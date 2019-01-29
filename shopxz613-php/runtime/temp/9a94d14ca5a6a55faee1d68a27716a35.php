<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/web/rainbow/agent\income.html";i:1547547701;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>我的收入</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-income">

<link rel="stylesheet" href="/template/web/rainbow/static/tonghaoran/css/FlexoCalendar.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<script src="/template/web/rainbow/static/tonghaoran/js/FlexoCalendar.js"></script>
<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>我的收入</h5>
</header>

<div class="container">
    <!--<div class="no-data">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
        <div class="no-data-txt">
            暂无!
        </div>
    </div>-->
    <div class="top">
        <div class="num"><span><?php echo $bonus[grand_total]; ?></span></div>
        <div class="name">累计奖励（元）</div>
        <ul class="tit flex-row">
            <?php if(is_array($bonus['award']) || $bonus['award'] instanceof \think\Collection || $bonus['award'] instanceof \think\Paginator): $i = 0; $__LIST__ = $bonus['award'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$award): $mod = ($i % 2 );++$i;?>
                <li class="box">
                    <p class="p1"><?php echo $award[value]; ?></p>
                    <p class="p2"><?php echo $award[name]; ?></p>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <div class="main">
        <div class="income-detail">
            <div class="income-detail-txt">收入明细</div>
            <div class="income-month">

                <div class="income-month-date"><span><?php echo date('Y-m',time()); ?></span><div class="income-month-date-downimg"></div></div>

                <div class="date-month month-hide">
                    <div class="calendar-wrapper">
                        <div id="calendar-monthly"></div>
                    </div>
                </div>
            </div>
            <!--<div class="income-reward">
                <div class="income-reward-txt">奖励说明</div>
                <div class="income-reward-img"></div>
            </div>-->
        </div>

        <!--<div class="income-detail-month">
            <div class="income-month-txt">本月</div>
            <div class="income-month">
                <div class="income-month-date"><?php echo date('Y-m',time()); ?>月</div>
                <div class="income-month-img">
                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_date.png">
                </div>
                <div class="date-month month-hide">
                    <div class="calendar-wrapper">
                        <div id="calendar-monthly"></div>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="no-data">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
            <div class="no-data-txt">
                暂无!
            </div>
        </div>
        <div class="has-data">
            <ul>
                <?php if(is_array($bonus_list) || $bonus_list instanceof \think\Collection || $bonus_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bonus_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bonus): $mod = ($i % 2 );++$i;?>
                    <li class="income-detail-jiangli">
                        <div class="income-jiangli-left">
                            <div class="income-jiangli-img">
                                <?php if($bonus[type] == 1): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_qiandai.png">
                                    <?php elseif($bonus[type] == 2): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_tuiguang.png">
                                    <?php elseif($bonus[type] == 3): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_jinji.png">
                                    <?php elseif($bonus[type] == 5): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_tongji.png">
                                    <?php elseif($bonus[type] == 6): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_xiaoshou.png">
                                    <?php elseif($bonus[type] == 7): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_jifen.png">
                                <?php endif; ?>
                            </div>
                            <div class="income-jiangli-txt">
                                <div class="income-jiangli-left-txt">
                                    <?php if($bonus[type] == 1): ?>直推奖励
                                        <?php elseif($bonus[type] == 2): ?>推广奖励
                                        <?php elseif($bonus[type] == 3): ?>晋级奖励
                                        <?php elseif($bonus[type] == 5): ?>同级奖励
                                        <?php elseif($bonus[type] == 6): ?>销售提成
                                        <?php if($bonus['user_money'] == 0): ?>&nbsp;<span style="color: #4f5352;">(待返)</span><?php endif; elseif($bonus[type] == 7): ?>积分红利
                                        <?php if($bonus['user_money'] == 0): ?>&nbsp;<span style="color: #4f5352;">(待返)</span><?php endif; endif; ?>
                                </div>
                                <div class="income-jiangli-left-date">
                                    <?php echo date('Y-m-d H:i:s',$bonus['change_time']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="income-jiangli-right">
                            <?php if(($bonus[type] == 6) AND ($bonus['user_money'] == 0)): ?>
                                <span style="color: #6f6d69;">+ <?php echo $bonus['sales_award']; ?></span>
                                <?php elseif(($bonus[type] == 7) AND ($bonus['user_money'] == 0)): ?>
                                <span style="color: #6f6d69;">+ <?php echo $bonus['bonus']; ?></span>
                                <?php else: ?>
                                + <?php echo $bonus['user_money']; endif; ?>
                        </div>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="income-layer"></div>
<div class="layer">
    <div class="layer-con">
        <div class="layer-top">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_point.png">
            <div class="shuoming">
                奖励说明
            </div>
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_point.png">
        </div>
        <div class="layer-p">
            <?php if(is_array($notes_list['bonus_notes']) || $notes_list['bonus_notes'] instanceof \think\Collection || $notes_list['bonus_notes'] instanceof \think\Paginator): $i = 0; $__LIST__ = $notes_list['bonus_notes'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note): $mod = ($i % 2 );++$i;?>
                <div class="layer-p1"><?php echo $note; ?></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="layer-tab">
            <dl border="1" cellpadding="0" cellspacing = "0">
                <dt>
                    <ol>
                        <li>销售业绩</li>
                        <li>提成比例</li>
                        <li>销售业绩</li>
                        <li>提成比例</li>
                    </ol>
                </dt>
                <dt>
                    <?php if(is_array($notes_list[sales_award]) || $notes_list[sales_award] instanceof \think\Collection || $notes_list[sales_award] instanceof \think\Paginator): $i = 0; $__LIST__ = $notes_list[sales_award];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sales): $mod = ($i % 2 );++$i;?>
                        <ul>
                            <li><?php echo $sales[achievement]/10000; ?>万</li>
                            <li><?php echo $sales[royalty_ratio]; ?>%</li>
                        </ul>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </dt>
            </dl>
        </div>
    </div>
    <div class="layer-del">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_close.png">
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
    $(".page-income").on("click",".income-reward",function () {
        $(".page-income .income-layer").show()
        $(".page-income .layer").show()
    })
    $(".page-income").on("click",".layer-del",function () {
        $(".page-income .income-layer").hide()
        $(".page-income .layer").hide()
    })

    $(".page-income").on("click",".income-month-date",function () {
        if($(".page-income .date-month").hasClass("month-hide")){
            $(".page-income .date-month").removeClass("month-hide")
        }else {
            $(".page-income .date-month").addClass("month-hide")
        }

    })
    $(".page-income").on("click",".tmonth ",function () {
        $(".page-income .date-month").addClass("month-hide")

    })


    $("#calendar-monthly").flexoCalendar({
        type: 'monthly',
        onselect: function(date){
            let time = date
            $(".page-income .income-month-date span").text(time)
            $.post("<?php echo U('cosmetology/Agent/ajaxIncome'); ?>", {date:date},function(datas){
                var values = JSON.parse(datas);
                if(values.status == 1){
                    $('.has-data').html(values.info)
                }
            });
        }
    });
</script>

</body>
</html>