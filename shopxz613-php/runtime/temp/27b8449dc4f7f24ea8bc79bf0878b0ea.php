<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/web/rainbow/agent\drawing.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="format-detection" content="telephone=no">
    <title>提现</title>
    <link rel="stylesheet" type="text/css" href="css/ui-dialog.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/jquery.min.js"></script>
    <style>
        select{background: #fff;}
    </style>
</head>
<body class="page-with1"> -->

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
    <title>提现</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-with1">

<style>
    select{background: #fff;}
</style>
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>提现</h5>
</header>

<div class="main">
    <!--<div class="inp-box flex-row">
        <div class="name">选择银行</div>
        <span>:</span>
        <div class="right">
            <select id="bankname">
                <option value="工商银行">工商银行</option>
                <option value="建设银行">建设银行</option>
                <option value="邮政银行">邮政银行</option>
                <option value="招商银行">招商银行</option>
            </select>
        </div>
    </div>
    <div class="inp-box flex-row">
        <div class="name">姓    名</div>
        <span>:</span>
        <div class="right">
            <input type="text" name="" id="name" value="" placeholder="请输入您的姓名">
        </div>
    </div>
    <div class="inp-box flex-row">
        <div class="name">银行卡号</div>
        <span>:</span>
        <div class="right">
            <input type="text" name="" id="bankcard" value="" placeholder="请输入您的银行卡号">
        </div>
    </div>
    <div class="inp-box flex-row">
        <div class="name">确认卡号</div>
        <span>:</span>
        <div class="right">
            <input type="text" name="" id="bankcard1" value="" placeholder="请再次输入您的银行卡号">
        </div>
    </div>-->

    <a class="yh" href="<?php echo U('cosmetology/Agent/bindingBankNumber'); ?>">
        <div class="yh-lf">
            <div class="yh-img">
                <img src="/template/web/rainbow/static/tonghaoran/images/icon_bank.png">
            </div>
            <div class="yh-name">
                <div class="yh-tit"><?php echo $user_info[opening_bank]; ?></div>
                <div class="yh-txt">尾号<?php echo substr($user_info[bank_account],-4); ?>储蓄卡</div>
            </div>
        </div>
        <div class="yh-rg"></div>
    </a>

    <div class="money">
        <h4>提取金额</h4>
        <div class="box flex-row">
            <span>￥</span>
            <div class="right">
                <input type="text" name="" id="money" value="" placeholder="100">
            </div>
            <button type="button" class="all">全部提现</button>
        </div>
        <div class="balance">当前余额<span class="user_money"><?php echo $user_info[user_money]; ?></span>元</div>
    </div>

    <div class="p1">请确保账号准确无误，预计3-7个工作日到账</div>

    <div class="btn-box">
        <button type="button" class="btn-blue btn-submit1">提现</button>
    </div>

</div>

<div class="bank-withdrawal">
    <div class="bank-withdrawal-img">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_bank.png">
    </div>
    <p>提现申请发起成功，银行处理中！</p>
    <div class="bank-withdrawal_btn">
        <input type="button" name="" value="确定" />
    </div>
</div>

<div class="mask"></div>


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

</body>
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/dialog-plus-min.js"></script>
<script>

    $(function(){
        var user_money = <?php echo $user_info[user_money]; ?>;
        $('.all').on('click', function(){
            $('#money').val(user_money)
        })


        $('.btn-submit').on('click', function(){
            var name = $('#name').val();
            var bankname = $('#bankname').val();
            var card = $('#bankcard').val();
            var card1 = $('#bankcard1').val();
            var money = $('#money').val();
            if(bankname === ''){
                dialogFun('请选择银行')
                return;
            }
            if(name === ''){
                dialogFun('请输入您的姓名')
                return;
            }
            if(card === ''){
                dialogFun('请输入您的银行卡号')
                return;
            }
            if(card1 === ''){
                dialogFun('请再次输入您的银行卡号')
                return;
            }
            if(card !== card1){
                dialogFun('两次输入的银行卡号不一致')
                return;
            }
            if(money === ''){
                dialogFun('请输入提现金额')
                return;
            }
        })


        $(".page-with1").on("click",".btn-submit1",function(){
            var money = $('#money').val();
            $.post("<?php echo U('cosmetology/Agent/drawing'); ?>", {money:money},function(datas){
                var values = JSON.parse(datas);
                if(values['status'] == 1){
                    $(".page-with1 .bank-withdrawal").show();
                    $(".page-with1 .mask").show();
                    $('#money').val(0)
                    user_money = values['info'];
                    $('.user_money').html(values['info'])
                }else{
                    dialogFun(values['msg'])
                }
            });
        });
        $(".bank-withdrawal_btn").on("click",function(){
            $(".page-with1 .bank-withdrawal").hide();
            $(" .page-with1 .mask").hide();
        });


    })

    function dialogFun(str){
        dialog({
            width: 280,
            title: '提示',
            content: str,
            cancel: false,
            okValue: '确定',
            ok: function(){
            }
        }).showModal();
    }
</script>
</html>