<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./template/web/rainbow/mine\setUp.html";i:1548744523;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1548744524;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="format-detection" content="telephone=no">
    <title>设置</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/jquery.min.js"></script>
    
</head>

<body class="page-mine" style="background: white;">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>设置</h5>
</header>

<div class="main">
	 <div class="other">
             
                <ul>
                    <li>
                        <a href="<?php echo U('cosmetology/Mine/modifyingData'); ?>" class="flex-row" title="">
                            <div class="right flex-row">
                                <div class="name">修改资料</div>
                                <div class="jt-r"></div>
                            </div>
                        </a>
                    </li>
                  
                    <li>
                        <a href="<?php echo U('cosmetology/User/forgot_psw'); ?>" class="flex-row" title="">
                            <div class="right flex-row">
                                <div class="name">修改密码</div>
                                <div class="jt-r"></div>
                            </div>
                        </a>
                    </li>
                    
                     <li>
                        <a href="<?php echo U('cosmetology/Mine/aboutUs'); ?>" class="flex-row" title="">
                            <div class="right flex-row">
                                <div class="name">关于我们</div>
                                <div class="jt-r"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                
        <div class="btn-box">
            <button type="button" class="btn btn-submit" style="margin-top: 50%;width: 70%;border-radius: 0.85rem;">退出登陆</button>
        </div>

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

<!-- <a href="<?php echo U('cosmetology/User/logout'); ?>" class="btn btn-submit" style="margin-top: 50%;width: 70%;border-radius: 0.38rem;">退出登陆</a> -->
<script type="text/javascript">
$('.btn-submit').click(function() {
    dialogFun('确定退出？',"<?php echo U('cosmetology/User/logout'); ?>");
})

function dialogFun(str,url=''){
    dialog({
        width: 280,
        title: '提示',
        content: str,
        cancel: false,
        okValue: '确定',
        ok: function(){
            if(url != ''){
                window.location.href = url;
            }
        }
    }).showModal();
}
</script>

</body>

</html>