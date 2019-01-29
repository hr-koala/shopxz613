<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./template/web/rainbow/user\changeNumber.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>更换手机号码</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-login page-forgot">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

    <header id="header" class="">
        <div class="icon-back" onclick="history.back()"></div>
        <h5>更换手机号码</h5>
    </header>

    <div class="container" id="all">
        <div class="main">
            <div class="inp-box flex-row">
                <div class="name">手机号</div>
                <div class="left">
                    <input type="text" name="" id="userphone" value="" placeholder="请输入手机号码">
                </div>
            </div>
            <div class="yz-code flex-row">
                <div class="inp-box flex-row">
                    <div class="name">验证码</div>
                    <div class="left">
                        <input type="text" name="" id="yzcode" value="" placeholder="请输入验证码">
                    </div>
                </div>
                <button id="vCode" type="button" class="code">获取验证码</button>
            </div>
        </div>

        <div class="btn-box">
            <button type="button" class="btn btn-submit" style="margin-top: 30%;">确认</button>
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
<!-- <footer id="footer-nav"></footer>
<script type="text/javascript">var footerNav =  5;</script>
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/footer.js"></script> -->
</body>

<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/dialog-plus-min.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/vue.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/jquery.cookie.js"></script>
<script>

$(function(){
    

    vm = new Vue({
        el: '#all',
        data: {
            isShowPswFlag: false, //是否显示密码
            pswValue: '',
        },
        methods: {
            //显示密码
            showPswFun: function(){
                this.isShowPswFlag = true;
            },
            hidePswFun: function(){
                this.isShowPswFlag = false;
            },
        }
    })

    $('.btn-submit').on('click', function(){
        var userphone = $('#userphone').val();
        var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
        if(!reg.test(userphone) || userphone.length != 11){
            dialogFun('手机号码格式有误');
            return false;
        }
        var userphone = $('#userphone').val();
        var yzcode = $('#yzcode').val();
        $.post("<?php echo U('cosmetology/User/changeNumber'); ?>", {userphone:userphone,yzcode:yzcode},function(datas){
            var values = JSON.parse(datas);
            if(values['status'] == 1){
                dialogFun(values['msg'],"<?php echo U('cosmetology/User/modifyingData'); ?>");
            }else{
                dialogFun(values['msg']);
            }
        });
    })

    //获取验证码
    $('#vCode').on('touchstart', function(){
        if(!isTelFlag()){
            dialogFun('请输入您的手机号');
            return false;
        }
        sendCode($("#vCode"));
        var date = new Date();
        var d = date.toString();
        date.setMinutes(date.getMinutes() + 1);
        $.cookie('secondsremained', escape(d), {expires: date});
        setCoutDown(60);
    })

    //发送验证码
    function sendCode(obj){
        var userphone = $('#userphone').val();
        var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
        if(!reg.test(userphone) || userphone.length != 11){
            dialogFun('手机号码格式有误');
            return false;
        }else{
            //加载ajax 获取验证码的方法
            var url="<?php echo U('cosmetology/User/sendCode'); ?>";
            $.ajax({
                cache:false,
                type:"POST",
                url:url,
                dataType:"json",
                data:{'phone':userphone,'type':3},
                timeout:30000,
                success:function(data){
                    if(data.state==1){

                    }else{
                        dialog({
                            width: 280,
                            title: '提示',
                            content: data.datas,
                            cancel: false,
                            okValue: '确定',
                            ok: function(){

                            }
                        }).showModal();
                        return false;
                    }
                }
            });
            // var date = new Date();
            // addCookie("secondsremained",date.toGMTString(),60);//添加cookie记录,有效时间60s
            setCoutDown(60);
        }
    }

    //校验打开页面的时候是否要继续倒计时
    checkCountdown()
    function checkCountdown(){
        var secondsremained = $.cookie("secondsremained");
        if(secondsremained){
            var date = new Date(unescape(secondsremained));
            var nowDate = new Date();
            var time_difference = 60 - ((nowDate.getTime()- date.getTime())/1000).toFixed(0);
            setCoutDown(time_difference);
        }
    }
    //倒计时
    function setCoutDown(time){
        if(time <= 0){
            // $.cookie('secondsremained', '');
            $('#vCode').removeAttr('disabled');
            $('#vCode').html("获取验证码");
            $('#vCode').removeClass('has')
        }else{
            $('#vCode').attr('disabled', true);
            $('#vCode').html("重发(" + time + ")");
            $('#vCode').addClass('has')
            time--;
            setTimeout(function() { setCoutDown(time) },1000) //每1000毫秒执行一次
        }
    }
  
})

//判断是否都有输入
function flagFun(){
    var userphone = $('#userphone').val();
    var yzcode = $('#yzcode').val();
    if(userphone === ''){
        dialogFun('请输入您的手机号');
        return false;
    }
    if(yzcode === ''){
        dialogFun('请输入验证码');
        return false;
    }
    return true;
}


function isTelFlag(){
    var tel = $('#userphone').val();
    var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
    if(reg.test(tel)){
        return true;
    }else{
        return false;
    }
}

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