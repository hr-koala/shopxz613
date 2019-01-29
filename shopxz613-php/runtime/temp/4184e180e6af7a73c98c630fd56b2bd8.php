<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./template/web/rainbow/user\login.html";i:1547466620;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-login">

    <header id="header" class="">
        <a href="javascript:history.back(-1)"><div class="icon-back"></div></a>
        <h5>登录</h5>
    </header>

    <div class="container" id="all">
        <div class="main">
            <div class="tit">填写以下信息完成众美平身h5的登陆</div>
            <div class="inp-box flex-row">
                <div class="left">
                    <input type="text" name="" id="userphone" value="" placeholder="请输入手机号码">
                </div>
                <div class="icon i1"></div>
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
            <div class="tx flex-row">
                <a href="<?php echo U('cosmetology/User/register'); ?>"><span>还没有账号？</span><span class="sign-up">立即注册</span></a>
                <a href="<?php echo U('cosmetology/User/forgot_psw'); ?>">忘记密码？</a>
            </div>
        </div>

        <div class="btn-box">
            <button type="button" class="btn btn-submit">确认登陆</button>
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
            pswValue: '', //密码
        },
        methods: {
            //显示密码
            showPswFun: function(){
                this.isShowPswFlag = true;
            },
            hidePswFun: function(){
                this.isShowPswFlag = false;
            }
        }
    })
  
    $('.btn-submit').on('click', function(){
        var flag = flagFun();
        if(flag){
            var userphone = $('#userphone').val();
            var psw = vm.$data.pswValue;
            $.post("<?php echo U('cosmetology/User/login'); ?>", {userphone:userphone,psw:psw},function(datas){
                var values = JSON.parse(datas);
                if(values['status'] == 1){
                    if("<?php echo $url; ?>" != 0){
                        var url = "<?php echo $url; ?>";
                    }else{
                        var url = "<?php echo U('cosmetology/Index/index'); ?>";
                    }
                    // dialogFun(values['msg'],"<?php echo U('cosmetology/Index/index'); ?>");
                    dialogFun(values['msg'],url);
                }else{
                    dialogFun(values['msg']);
                }
            });
        }
    })

})

//判断是否都有输入
function flagFun(){
    var userphone = $('#userphone').val();
    var psw = vm.$data.pswValue;
    if(userphone === ''){
        dialogFun('请输入您的手机号');
        return false;
    }
    var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
    if(!reg.test(userphone) || userphone.length != 11){
        dialogFun('手机号码格式有误');
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