<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"./template/web/rainbow/agent\generatingCard.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
<body class="page-invite-qrcode">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>邀请好友</h5>
</header>

<div class="container">
    <div class="main" id="mbsc">
        <div class="invite-qrcode">
            <div class="mine-code-avatar">
                <img src="<?php if($user_info[head_pic] != null): ?><?php echo $user_info[head_pic]; else: ?>/template/web/rainbow/static/tonghaoran/images/prod6.png<?php endif; ?>" />
            </div>
            <div class="invite-code-name">
                <div class="invite-qrcode-name"><?php if($user_info['nickname'] != ''): ?><?php echo $user_info['nickname']; else: ?><?php echo $user_info['mobile']; endif; ?>邀请你</div>
                <div class="invite-qrcode-name">注册众美平身</div>
            </div>
            <div class="code-qrcode">
                <img src="<?php echo $referral_code; ?>">
            </div>
            <div class="invite-card-txt">
                新用户扫码注册时 会自
                动填入您的邀请码
            </div>
        </div>
        <div class="tishi">长按识别二维码</div>
    </div>
</div>

<div class="invite-bottom">
    <div class="invite-bot-top">
        <div class="invite-back"></div>
        <div class="invite-back-txt">邀请卡已准备好，发给你的好友吧！</div>
    </div>
    <div class="invite-bot-con">
        <div class="invite-weixin">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_weixin.png">
            <div class="invite-weixin-txt">微信好友</div>
        </div>
        <div class="invite-weixin">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_quan.png">
            <div class="invite-weixin-txt">朋友圈</div>
        </div>
        <a class="invite-weixin invite-bendi">
            <img src="/template/web/rainbow/static/tonghaoran/images/icon_bendi.png">
            <div class="invite-weixin-txt">保存本地</div>
        </a>
    </div>
</div>


<script src="/template/web/rainbow/static/tonghaoran/js/html2canvas.js"></script>

<script type="text/javascript">
    $(function () {
        function download(){
            event.preventDefault();
            var w = $("#mbsc").width();
            var h = $("#mbsc").innerHeight();
            html2canvas($("#mbsc"), {
                width: w,
                height: h,
                allowTaint: true,
                taintTest: false,
                onrendered: function(canvas) {
                    canvas.id = "mycanvas";
                    //生成base64图片数据
                    var dataUrl = canvas.toDataURL();
                    var newImg = document.createElement("img");
                    newImg.src =  dataUrl;
                    console.log($('.invite-bendi').attr('href', canvas.toDataURL()))
                    $('.invite-bendi').attr('href', canvas.toDataURL());
                    $('.invite-bendi').attr('download', 'qrcode.png');
                    var html_canvas = canvas.toDataURL();
                    document.body.appendChild(newImg);
                    document.body.removeChild(newImg)
                }
            });
        }
        download()

    })
</script>
<script>
    $(function () {
        $(".page-invite-qrcode").on("click",".code-qrcode",function () {
            $(".page-invite-qrcode .invite-bottom").show()
        })
        $(".page-invite-qrcode").on("click",".invite-back",function () {
            $(".page-invite-qrcode .invite-bottom").hide()
        })
    })
</script>

</body>
</html>