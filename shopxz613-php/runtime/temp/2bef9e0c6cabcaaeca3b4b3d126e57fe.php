<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./template/web/rainbow/agent\reportManagement.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>报单管理</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-income page-manage">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<link rel="stylesheet" href="/template/web/rainbow/static/tonghaoran/css/FlexoCalendar.css">
<script src="/template/web/rainbow/static/tonghaoran/js/FlexoCalendar.js"></script>
<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>报单管理</h5>
</header>

<div class="container">
    <!--<div class="no-data">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
        <div class="no-data-txt">
            暂无!
        </div>
    </div>-->
    <div class="top">
        <div class="num"><span><?php echo $adopt_num; ?></span></div>
        <div class="name">审核通过人数</div>
        <ul class="tit flex-row">
            <!-- 累计获得报单币 bank_note_get、已使用报单币 bank_note_pay、剩余报单币 bank_note、 -->
            <li class="box">
                <p class="p1"><?php echo $user_info[bank_note_get]; ?></p>
                <p class="p2">累计报单币</p>
            </li>
            <li class="box">
                <p class="p1"><?php echo $user_info[bank_note]; ?></p>
                <p class="p2">未使用</p>
            </li>
            <li class="box">
                <p class="p1"><?php echo $user_info[bank_note_pay]; ?></p>
                <p class="p2">已使用</p>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="manage-top">
            <div class="total">
                <div class="all <?php echo $type=='all'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Agent/reportManagement',['type'=>'all']); ?>'">全部</div>
                <div class="all <?php echo $type=='auditing'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Agent/reportManagement',['type'=>'auditing']); ?>'">提交待审核</div>
                <div class="all <?php echo $type=='adopt'?on:''; ?>" onclick="window.location.href='<?php echo U('cosmetology/Agent/reportManagement',['type'=>'adopt']); ?>'">审核通过</div>
            </div>
        </div>

        <div class="no-data">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_income_no.png">
            <div class="no-data-txt">
                暂无!
            </div>
        </div>
        <div class="has-data">
            <ul>
                <?php if(is_array($user_list) || $user_list instanceof \think\Collection || $user_list instanceof \think\Paginator): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <li class="manage-box">
                        <div class="manage-box-left">
                            <div class="manage-img">
                                <img src="<?php if($list[head_pic] != null): ?><?php echo $list[head_pic]; else: ?>/template/web/rainbow/static/tonghaoran/images/prod6.png<?php endif; ?>">
                            </div>
                            <div class="manage-box-txt">
                                <div class="manage-box-left-name">
                                    <?php if($list['nickname'] != ''): ?><?php echo $list[nickname]; else: ?><?php echo $list[mobile]; endif; ?>
                                </div>
                                <div class="manage-box-left-date">
                                    <?php echo date('Y-m-d',$list[reg_time]); ?>
                                </div>
                            </div>
                        </div>
                        <div class="baodanbi">
                            <!-- <div class="baodanbi-txt">报单币</div> -->
                            <div class="baodanbi-stats"><?php if($list['registration_type'] == 1): ?>申请中<?php elseif($list['registration_type'] == 2): ?>已完成<?php endif; ?></div>
                        </div>
                        <div class="baodan-num">
                            <!-- <div class="baodanbi-num">+15000</div> -->
                            <div class="baodanbi-num-buy"><?php if($list['registration_type'] == 1): ?><a href="<?php echo U('Agent/taxationForm',['user_id'=>$list[user_id]]); ?>">去购买</a><?php elseif($list['registration_type'] == 2): ?><div class="baodanbi-num-buy baodanbi-num-shiyong"><span href="">已完成</span> </div><?php endif; ?>
                             </div>
                        </div>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
               <!--  <li class="manage-box">
                    <div class="manage-box-left">
                        <div class="manage-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/prod6.png">
                        </div>
                        <div class="manage-box-txt">
                            <div class="manage-box-left-name">
                                点点的光
                            </div>
                            <div class="manage-box-left-date">
                                2018-01-01
                            </div>
                        </div>
                    </div>
                    <div class="baodanbi">
                        <div class="baodanbi-txt">报单币</div>
                        <div class="baodanbi-stats">提交待审核</div>
                    </div>
                    <div class="baodan-num">
                        <div class="baodanbi-num">15000</div>
                        <div class="baodanbi-num-buy baodanbi-num-shiyong"><a href="">已使用</a> </div>
                    </div>
                </li> -->
            </ul>

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
    $(".page-manage .total .all").on("click",function () {
        $(".page-manage .total .all").removeClass("on")
        $(this).addClass("on")
    })
</script>

</body>
</html>