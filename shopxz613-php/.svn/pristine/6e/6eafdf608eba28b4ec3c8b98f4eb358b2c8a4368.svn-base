<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"./template/web/rainbow/agent\inviteFriends.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>邀请好友</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-invite-friend">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>邀请好友</h5>
</header>

<div class="container">
    <div class="main">
        <!--<img src="/template/web/rainbow/static/tonghaoran/images/icon_yaoqing_bg.png">-->
        <div class="invite-qrcode">
            <div class="mine-code">
                我的邀请码
            </div><!--  style="visibility: hidden;" -->
            <input type="" id="mcode" value="<?php echo $user_info[invitation_code_own]; ?>" name="" style="opacity: 0">
            <div id="invite-code-num" class="invite-code-num"><?php echo $user_info[invitation_code_own]; ?></div>
            <div class="code-fuzhi">
                复制
            </div>
            <div class="fuzhi-succ">复制成功</div>
        </div>
        <div class="record">
            <?php if($invitation_record != null): ?>
                <div class="record-tit">
                    -----------------  邀请记录  ----------------
                </div>
                <ul class="record-con">
                    <li class="record-row record-row-tit">
                        <div class="record-col">邀请日期</div>
                        <div class="record-col">手机号</div>
                        <div class="record-col">当前等级</div>
                    </li>
                    <?php if(is_array($invitation_record) || $invitation_record instanceof \think\Collection || $invitation_record instanceof \think\Paginator): $i = 0; $__LIST__ = $invitation_record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?>
                        <li class="record-row">
                            <div class="record-col"><?php echo date('Y-m-d',$record[reg_time]); ?></div>
                            <div class="record-col"><?php echo substr_replace($record[mobile], '****', 3, 4); ?></div>
                            <div class="record-col levels"><?php if(is_array($all_level) || $all_level instanceof \think\Collection || $all_level instanceof \think\Paginator): $i = 0; $__LIST__ = $all_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i;if($level[level_id] == $record[level]): ?><?php echo $level[level_name]; endif; endforeach; endif; else: echo "" ;endif; ?></div>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            <?php endif; ?>
            <div class="record-shuoming">
                <div class="layer-con">
                    <div class="layer-top">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_point.png">
                        <div class="shuoming">
                            奖励说明
                        </div>
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_point.png">
                    </div>
                    <div class="layer-box">
                        <ul class="layer-p">
                            <?php if(is_array($notes_list['bonus_notes']) || $notes_list['bonus_notes'] instanceof \think\Collection || $notes_list['bonus_notes'] instanceof \think\Paginator): $i = 0; $__LIST__ = $notes_list['bonus_notes'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note): $mod = ($i % 2 );++$i;?>
                                <div class="layer-p1"><?php echo $note; ?></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
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

                </div>
            </div>
        <a href="<?php echo U('cosmetology/Agent/generatingCard'); ?>" class="invite-card">
            生成邀请卡
        </a>
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
        $(".page-invite-friend").on("click",".code-fuzhi",function () {
            copyText()
            $(".page-invite-friend .fuzhi-succ").show()
            setTimeout('$(".page-invite-friend .fuzhi-succ").hide()',1000)
        })
        function copyText() {
            var codeNum = $(".page-invite-friend .invite-code-num").text();
            var url2 = document.getElementById("invite-code-num");
            console.log(url2)
            // alert(1111)
            // $(url2).select(); // 选中文本
            $('#mcode').select()
            document.execCommand("Copy"); // 执行浏览器复制命令
        }

        $(".levels").each(function () {
            if($(this).html() === 'undefined' || $(this).html() === null || $(this).html() === ''){
                $(this).html('普通会员')
            }
        })
    })
</script>

</body>
</html>