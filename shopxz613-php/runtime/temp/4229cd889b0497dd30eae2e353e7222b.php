<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"./template/web/rainbow/agent\reprotInfor.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>报单资料</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-login page-reprot-register">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">


    <header id="header" class="">
        <a href="javascript:history.back(-1)"><div class="icon-back"></div></a>
        <h5>报单资料</h5>
    </header>

    <div class="container" id="all">
        <div class="main">
            <div class="tit">填写以下信息完成众美平身报单资料</div>

            <div class="inp-box flex-row">
                <div class="left">
                    <input type="text" name="" id="username" value="" placeholder="请输入姓名">
                </div>
                <div class="icon i5"></div>
            </div>

            <div class="inp-box flex-row">
                <div class="left">
                    <input type="text" name="" id="useridcard" value="" placeholder="请输入身份证号">
                </div>
                <div class="icon i6"></div>
            </div>

            <div class="inp-box flex-row">
                <div class="left">
                    <input type="text" name="" id="userphone" value="" placeholder="请输入手机号码">
                </div>
                <div class="icon i1"></div>
            </div>
            <div class="yz-code flex-row">
                <div class="inp-box flex-row">
                    <div class="left">
                        <input type="text" name="" id="yzcode" value="" placeholder="请输入验证码">
                    </div>
                    <div class="icon i4"></div>
                </div>
                <button id="vCode" type="button" class="code">获取验证码</button>
            </div>
            <div class="inp-box flex-row" v-if="!isShowPswFlag">
                <div class="left">
                    <input type="password" v-model="pswValue" name="" id="psw" placeholder="6-16位密码，不区分大小写">
                </div>
                <div class="icon i2" @click="showPswFun"></div>
            </div>
            <div class="inp-box flex-row" v-if="isShowPswFlag">
                <div class="left">
                    <input type="text" name="" v-model="pswValue"  value="" placeholder="6-16位密码，不区分大小写">
                </div>
                <div class="icon i3" @click="hidePswFun"></div>
            </div>

            <div class="inp-box flex-row" v-if="!isShowAgainPswFlag">
                <div class="left">
                    <input type="password" v-model="againPswValue" name="" id="againPsw" placeholder="请确认登录密码">
                </div>
                <div class="icon i2" @click="showAgainPswFun"></div>
            </div>
            <div class="inp-box flex-row" v-if="isShowAgainPswFlag">
                <div class="left">
                    <input type="text" name="" v-model="againPswValue"  value="" placeholder="请确认登录密码">
                </div>
                <div class="icon i3" @click="hideAgainPswFun"></div>
            </div>
        </div>
        <div class="btn-box">
            <button type="button" class="btn btn-submit">提交资料</button>
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
            isShowAgainPswFlag: false, //
            pswValue: '',
            againPswValue: '',
            isHyCodeFlag: false, //是否有好友邀请码
            hycodeValue: $('#hycode').val(), //好友邀请码
        },
        methods: {
            init: function(){
                if(this.hycodeValue){
                    this.isHyCodeFlag = true;
                }

            },
            //显示密码
            showPswFun: function(){
                this.isShowPswFlag = true;
            },
            hidePswFun: function(){
                this.isShowPswFlag = false;
            },
            showAgainPswFun: function(){
                this.isShowAgainPswFlag = true;
            },
            hideAgainPswFun: function(){
                this.isShowAgainPswFlag = false;
            },
            /*改变是否有好友邀请码*/
            chooseFrindCode: function(e){
                this.isHyCodeFlag = e.target.checked;
            }
        }
    })
    vm.init()
    // vm.$data.hycodeValue = 987 //给邀请码重新赋值
    // console.log(vm.$data.hycodeValue)

    $('.btn-submit').on('click', function(){
        var flag = flagFun();
        if(flag){
            var username = $('#username').val();
            var useridcard = $('#useridcard').val();
            var userphone = $('#userphone').val();
            var yzcode = $('#yzcode').val();
            var psw = vm.$data.pswValue;
            var againPsw = vm.$data.againPswValue;
            var code = "<?php echo $user_info[invitation_code_own]; ?>";
            $.post("<?php echo U('cosmetology/User/register'); ?>", {username:username,useridcard:useridcard,userphone:userphone,yzcode:yzcode,psw:psw,againPsw:againPsw,code:code,registration_type:1},function(datas){
                var values = JSON.parse(datas);
                if(values['status'] == 1){
                    window.location.href = "<?php echo U('cosmetology/Agent/reprotInforSuccess'); ?>";
                }else{
                    dialogFun('提交资料失败');
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
                data:{'phone':userphone,'type':1},
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
    var againPsw = vm.$data.againPswValue;
    if(userphone === ''){
        dialogFun('请输入您的手机号');
        return false;
    }
    var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
    if(!reg.test(userphone) || userphone.length != 11){
        dialogFun('手机号码格式有误');
        return false;
    }

    // 验证身份证
    if($.trim($('#useridcard').val()).length == 0) {  
        dialogFun('身份证号码没有输入');
        return false;
    } else {
        if(isCardNo($.trim($('#useridcard').val())) == false) {
            dialogFun('身份证号不正确');
            return false;
        }
    }

    if(yzcode === ''){
        dialogFun('请输入验证码');
        return false;
    }
    if(psw === ''){
        dialogFun('请输入密码');
        return false;
    }
    if(againPsw === ''){
        dialogFun('请再次输入密码');
        return false;
    }
    if(psw !== againPsw){
        dialogFun('两次输入的密码不一致');
        return false;
    }
    return true;
}

// 验证身份证 
function isCardNo(card) {  
   var pattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
   return pattern.test(card); 
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