<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"./template/web/rainbow/user\forgot_psw.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>找回密码</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-login page-forgot">

    <header id="header" class="">
        <a href="javascript:history.back(-1)"><div class="icon-back"></div></a>
        <h5>找回密码</h5>
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
            <div class="inp-box flex-row" v-if="!isShowPswFlag">
                <div class="name">新密码</div>
                <div class="left">
                    <input type="password" v-model="pswValue" name="" id="psw" placeholder="6-16位密码，不区分大小写">
                </div>
                <div class="icon i2" @click="showPswFun"></div>
            </div>
            <div class="inp-box flex-row" v-if="isShowPswFlag">
                <div class="name">新密码</div>
                <div class="left">
                    <input type="text" name="" v-model="pswValue"  value="" placeholder="6-16位密码，不区分大小写">
                </div>
                <div class="icon i3" @click="hidePswFun"></div>
            </div>
            
        </div>

        <div class="btn-box">
            <button type="button" class="btn btn-submit">下一步</button>
        </div>
    </div>
    
</body>

<script type="text/javascript" src="/template/web/rainbow/static/js/dialog-plus-min.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/js/vue.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/js/jquery.cookie.js"></script>
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
        var flag = flagFun();
        if(flag){
            var userphone = $('#userphone').val();
            var yzcode = $('#yzcode').val();
            var psw = vm.$data.pswValue;
            $.post("<?php echo U('cosmetology/User/forgot_psw'); ?>", {userphone:userphone,yzcode:yzcode,psw:psw},function(datas){
                var values = JSON.parse(datas);
                if(values['status'] == 1){
                    dialogFun(values['msg'],"<?php echo U('cosmetology/User/login'); ?>");
                }else{
                    dialogFun(values['msg']);
                }
            });
        }
    })

    //获取验证码
    $('#vCode').on('touchstart', function(){
        if(!isTelFlag()){
            dialogFun('手机号不存在或格式有误');
            return false;
        }
        sendCode($("#vCode"));
        var date = new Date();
        var d = date.toString();
        date.setMinutes(date.getMinutes() + 1);
        $.cookie('secondsremained', escape(d), {expires: date});
        // setCoutDown(60);
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
                data:{'phone':userphone,'type':2},
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
    var psw = vm.$data.pswValue;
    if(userphone === ''){
        dialogFun('请输入您的手机号');
        return false;
    }
    if(yzcode === ''){
        dialogFun('请输入验证码');
        return false;
    }
    if(psw === ''){
        dialogFun('请输入密码');
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
</html>