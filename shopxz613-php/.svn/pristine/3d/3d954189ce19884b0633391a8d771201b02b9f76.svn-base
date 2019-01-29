<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"./template/web/rainbow/agent\bindingBankNumber.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>填写信息</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-fill">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>填写信息</h5>
</header>

<div class="container" id="all">
    <div class="main">
        <div class="tit"><div class="tit-info">持卡人信息</div> <div class="">请填写真实信息，核实后不可更改</div> </div>
        <div class="inp-box flex-row">
            <div class="icon i1"></div>
            <div class="left">
                <label for="username">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label><span></span>
                <input type="text" name="" id="username" value="<?php echo $user_info[bank_name]==''?'':$user_info[bank_name]; ?>" placeholder="请输入持卡人姓名">
            </div>
        </div>
        <div class="inp-box flex-row">
            <div class="icon i2"></div>
            <div class="left">
                <label for="useridcard">身&nbsp;份&nbsp;证：</label><span></span>
                <input type="text" name="" id="useridcard" value="<?php echo $user_info[id_card]==''?'':$user_info[id_card]; ?>" placeholder="请输入持卡身份证号">
            </div>
        </div>
        <div class="tit"><div class="">银行卡信息</div>  </div>
        <div class="inp-box flex-row">
            <div class="icon i3"></div>
            <div class="left">
                <label for="bankname">所属银行：</label><span></span>
                <select name="" id="bankname" value="">
                    <option value="0" placeholder="请选择银行卡名称">请选择银行卡名称</option>
                    <option value="工商银行" <?php echo $user_info[opening_bank]=='工商银行'?'selected':''; ?> >工商银行</option>
                    <option value="建设银行" <?php echo $user_info[opening_bank]=='建设银行'?'selected':''; ?> >建设银行</option>
                    <option value="邮政银行" <?php echo $user_info[opening_bank]=='邮政银行'?'selected':''; ?> >邮政银行</option>
                    <option value="中国银行" <?php echo $user_info[opening_bank]=='中国银行'?'selected':''; ?> >中国银行</option>
                    <option value="招商银行" <?php echo $user_info[opening_bank]=='招商银行'?'selected':''; ?> >招商银行</option>
                    <option value="农业银行" <?php echo $user_info[opening_bank]=='农业银行'?'selected':''; ?> >农业银行</option>
                    <option value="交通银行" <?php echo $user_info[opening_bank]=='交通银行'?'selected':''; ?> >交通银行</option>
                </select>
            </div>
            <div class="more"></div>
        </div>

        <div class="inp-box flex-row">
            <div class="icon i4"></div>
            <div class="left">
                <label for="bankcardnum">银行卡号：</label><span></span>
                <input type="text" name="" id="bankcardnum" value="<?php echo $user_info[bank_account]==''?'':$user_info[bank_account]; ?>" placeholder="请输入银行卡卡号">
            </div>
        </div>

    </div>

    <div class="btn-box">
        <button type="button" class="btn btn-submit">确定</button>
    </div>
</div>

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
                isShowAgainPswFlag: false, //
                pswValue: '',
                againPswValue: '',
                isHyCodeFlag: true, //是否有好友邀请码
            },
            methods: {
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

        $('.btn-submit').on('click', function(){
            var flag = flagFun();
            if(flag){
                var username = $('#username').val();
                var useridcard = $('#useridcard').val();
                var bankname = $('#bankname').val();
                var bankcardnum = $('#bankcardnum').val();
                $.post("<?php echo U('cosmetology/Agent/bindingBankNumber'); ?>", {bank_name:username,id_card:useridcard,opening_bank:bankname,bank_account:bankcardnum},function(datas){
                    var values = JSON.parse(datas);
                    dialogFun(values['msg']);
                    /*if(values['status'] == 1){
                        dialogFun(values['msg'],"<?php echo U('cosmetology/User/login'); ?>");
                    }else{
                        dialogFun(values['msg']);
                    }*/
                });
            }
        })

    })

    //判断是否都有输入
    function flagFun(){
        var username = $('#username').val();
        var useridcard = $('#useridcard').val();
        var bankname = $('#bankname').val();
        var bankcardnum = $('#bankcardnum').val();
        var psw = vm.$data.pswValue;
        var againPsw = vm.$data.againPswValue;
        if(username === ''){
            dialogFun('请输入持卡人姓名');
            return false;
        }
        if(useridcard === ''){
            dialogFun('请输入持卡身份证号');
            return false;
        }

        // 验证身份证
        if($.trim(useridcard).length == 0) {  
            dialogFun('身份证号码没有输入');
            return false;
        } else {
            if(isCardNo($.trim(useridcard)) == false) {
                dialogFun('身份证号不正确');
                return false;
            }
        }

        if(bankname === '' || bankname == '请选择' || bankname == '0'){
            dialogFun('请选择银行卡名称');
            return false;
        }
        if(bankcardnum === ''){
            dialogFun('请输入银行卡卡号');
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