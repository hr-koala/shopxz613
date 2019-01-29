<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"./template/web/rainbow/user\newAddress.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>新增收货地址</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-adsedit">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mpicker.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<script type='text/javascript' src='/template/web/rainbow/static/tonghaoran/js/jquery.min.js'></script>

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>新建地址</h5>
</header>

<form onsubmit="return onSubmitFun();" name="formAds" method="post" >
  <input type="hidden" name="address_id" value="<?php echo $address['address_id']; ?>">
  <input type="hidden" name="url" value="<?php echo $url; ?>">
    <div class="main">
        <div class="inp-box flex-row">
            <div class="name">姓名</div>
            <div class="right">
                <input type="text" name="username" value="<?php echo $address['consignee']==''?'':$address['consignee']; ?>" placeholder="请填写姓名">
            </div>
        </div>
        <div class="inp-box flex-row">
            <div class="name">手机号码</div>
            <div class="right">
                <input type="tel" name="usertel" value="<?php echo $address['mobile']==''?'':$address['mobile']; ?>" placeholder="请输入正确的11位手机号码">
            </div>
        </div>
        <div class="inp-box flex-row inp-qy">
            <div class="name">地址</div>
            <div class="right">
                <!-- <?php if($address['province'] != 0): ?>
                  <?php echo $region[$address['province']]; ?>-<?php echo $region[$address['city']]; ?>-<?php echo $region[$address['district']]; endif; ?> -->
                <input type="text" class="select-value" value="<?php echo $region[$address['province']]==''?'':$region[$address['province']]; ?><?php echo $region[$address['city']]==''?'':'-'.$region[$address['city']]; ?><?php echo $region[$address['district']]==''?'':'-'.$region[$address['district']]; ?>" placeholder="省市区/县信息" readonly>
                <div class="addr flex-row" id="addr1">
                    <input type="text" class="sheng" name="prov" value="<?php echo $address['province']==''?'':$address['province']; ?>" placeholder="选择省">
                    <input type="text" class="shi" name="city" value="<?php echo $address['city']==''?'':$address['city']; ?>" placeholder="选择市">
                    <input type="text" class="qu" name="area" value="<?php echo $address['district']==''?'':$address['district']; ?>" placeholder="选择区">
                </div>
            </div>
        </div>
        <div class="inp-box flex-row">
            <div class="name">详细地址</div>
            <div class="right">
                <input type="text" name="address" value="<?php echo $address['address']==''?'':$address['address']; ?>" placeholder="详细地址信息，如街道、楼牌号等">
            </div>
        </div>

        <div class="default_address">
            <div  class="default_address-img <?php echo $address['is_default']==1?'on':''; ?>">
                <input type="checkbox" value="1"  name="is_default" <?php echo $address['is_default']==1?'checked': ""; ?>>
            </div>
            <div class="default_address-txt">
                设为默认地址
            </div>
        </div>

        <div class="btn-box">
            <button type="submit" class="btn-blue">保存</button>
        </div>
    </div>

</form>

<div class="submit-dialog"></div>
    <div class="submit-dialog-con">
        <div class="submit-dialog-tit">
            提示
        </div>
        <div class="submit-dialog-txt">
            确定保存？
        </div>
        <div class="submit-dialog-btn">
            <div class="submit-dialog-cancel">取消</div>
            <div class="submit-dialog-confirm">确定</div>
        </div>
    </div>


</body>
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/dialog-plus-min.js"></script>
<!-- <script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/json.js"></script> -->
<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/mPickerBeta.js"></script>
<!--<script src="http://healthshop.umark.cc/index.php/Api/Mine/region" ></script>-->

<script>
 


$(function(){
        //所在区域
        // var sheng, shi ,qu;
        var city5 = <?php echo $list; ?>;
        $('.select-value').mPicker({
            level:3,
            dataJson: city5.province,
            Linkage:true,
            rows:6,
            idDefault:true,
            splitStr:'-',
            header:'<div class="mPicker-header"><div class="mPicker-cancel">取消</div><div class="mPicker-confirm">确定</div></div>',
            confirm:function(){
                var id1= $('.select-value').data('id1');
                var id2 = $('.select-value').data('id2');
                var id3 = $('.select-value').data('id3');

                var shengID = city5['province'][id1].id;
                var shiID = city5['province'][id1].city[id2].id;
                var quID = city5['province'][id1].city[id2].district[id3].id;

                $('#addr1').children('.sheng').attr({"value": shengID});
                $('#addr1').children('.shi').attr({"value": shiID});
                $('#addr1').children('.qu').attr({"value": quID});

            },
            cancel:function(){
            }
        })

        $(".default_address-img input").on('change', function(){
          if(this.checked){
            $(this).parent().addClass('on')
          }else{
            $(this).parent().removeClass('on')
          }
        })

   })

   function onSubmitFun(){
       var form = document.forms['formAds'];
       var username = form['username'].value;
       var usertel = form['usertel'].value;
       var prov = form['prov'].value;
       var address = form['address'].value;
       if(username === ''){
           dialogFun('请输入您的姓名')
           return false;
       }
       if(usertel === ''){
           dialogFun('请输入您的电话')
           return false;
       }
       var reg = /0?(13|14|15|17|18|19)[0-9]{9}/g;
       if(!reg.test(usertel) || usertel.length != 11){
          dialogFun('手机号码格式有误');
          return false;
       } 

      /* if(prov === ''){
           dialogFun('请输入您的所在地区')
           return false;
       }*/
       if(address === ''){
           dialogFun('请输入您的详细地址')
           return false;
       }
       return true;
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


   $(function(){
       //showData()
       function showData(){
           var xhr = new XMLHttpRequest();
            // 前端设置是否带cookie
           xhr.withCredentials = true;
           xhr.open('post', 'http://healthshop.umark.cc/index.php/Api/Mine/region', true);
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
           xhr.send();
           xhr.onreadystatechange = function() {
               if (xhr.readyState == 4 && xhr.status == 200) {
                   alert(xhr.responseText);
               }
           };


           /*$.ajax({
               url: 'http://healthshop.umark.cc/index.php/Api/Mine/region',
               type: 'get',
               dataType: 'jsonp',  // 请求方式为jsonp
               // jsonpCallback: "onBack",    // 自定义回调函数名
               // data: {},
               success:function (data) {
                   console.log(data)
               }
           });*/
       }


       function onBack (result) {
           var data = JSON.stringify(result); //json对象转成字符串
           console.log(data);
       }



   })


</script>


</html>