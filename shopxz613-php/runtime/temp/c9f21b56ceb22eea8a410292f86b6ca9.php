<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/web/rainbow/mine\address.html";i:1547435232;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>我的地址</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-address">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>地址管理</h5>
</header>

<div class="container">
    <?php if($info != null): ?>
        <div class="main">
            <div class="top-line"></div>


            <ul class="box-con " style="margin-bottom: 2rem;">
                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <li class="box">

                        <div class="tit flex-row">
                            <div class="name">陈瑞</div>
                            <!--<div class="default_address">默认</div>-->
                            <div class="tel"><?php echo $list[mobile]; ?></div>
                        </div>
                        <div class="context">
                            <!--<div class="tel">13627897865</div>-->
                            <div class="address"><?php echo $regionList[$list[province]]; ?><?php echo $regionList[$list[city]]; ?><?php echo $regionList[$list[district]]; ?><?php echo $regionList[$list[twon]]; ?><?php echo $list[address]; ?></div>
                        </div>
                        <div class="box-right">
                            <!--<div class="icon"></div>-->
                            <label for="dz1" class="change-ads flex-row <?php echo $list[is_default]==1?on:''; ?>">
                                <input type="radio" name="default_address" id="dz1" value="<?php echo $list[address_id]; ?>" >
                                <span></span>
                                <p>默认地址</p>
                            </label>
                            <div class="right flex-row">
                                <div class="del flex-row" id="deletes<?php echo $list[address_id]; ?>">
                                    <div class="icon"></div>
                                    <p>删除</p>
                                </div>
                                <div class="edit flex-row">
                                    <div class="icon"></div>
                                    <p>编辑</p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>                
            </ul>
        </div>
    <?php else: ?>
        <div class="no-data">
            <div class="top-line"></div>
            <div class="icon"></div>
            <p>您暂时还没有收货地址哦</p>
        </div>
    <?php endif; ?>

</div>
<div class="add-address">
    <?php if($url != 1): ?>
        <a href="<?php echo U('cosmetology/User/newAddress',['url'=>'firm_order_url']); ?>" class="add add-ads" title="">+ 新建收货地址</a>
    <?php else: ?>
        <a href="<?php echo U('cosmetology/User/newAddress'); ?>" class="add add-ads" title="">+ 新建收货地址</a>
    <?php endif; ?>
</div>

<div class="submit-dialog"></div>
<div class="submit-dialog-con">
    <div class="submit-dialog-tit">
        提示
    </div>
    <div class="submit-dialog-txt">
        确定删除？
    </div>
    <div class="submit-dialog-btn">
        <div class="submit-dialog-cancel">取消</div>
        <div class="submit-dialog-confirm">确定</div>
    </div>
</div>

</body>

<script>

    $(function(){

        $('.page-address .box-right .right .del').on('click', function(){
            var box = $(this).closest(".box")
            var address_id = $(this).attr('id').substring(7);
            // alert(address_id)
            $(".page-address .submit-dialog").show()
            $(".page-address .submit-dialog-con").show()

            $('.page-address .submit-dialog-btn .submit-dialog-cancel').on('click', function(){
                $(".page-address .submit-dialog").hide()
                $(".page-address .submit-dialog-con").hide()
            })
            $('.page-address .submit-dialog-btn .submit-dialog-confirm').on('click', function(){
                $.post("<?php echo U('cosmetology/Mine/deleteAddress'); ?>", {address_id:address_id},function(datas){
                    var values = JSON.parse(datas);
                    if(values.status == 1){
                        $(".page-address .submit-dialog").hide()
                        $(".page-address .submit-dialog-con").hide()
                        box.remove()
                        boxlen()
                    }
                    dialogFun_two(values.msg)
                });
                
            })
        })

        $(function(){
            //设为默认地址
            $('.page-address .change-ads input').on('change', function(){
                $('.page-address .change-ads').removeClass('on')
                $(this).parent().addClass('on')

                var address_id = $(this).val();
                $.post("<?php echo U('cosmetology/Mine/defaultAddress'); ?>", {address_id:address_id},function(datas){
                    var values = JSON.parse(datas);
                    var url = "<?php echo getDeCode($url,'key'); ?>";
                    window.location.href=url;
                    /*if(values.status == 1 && url != 1){
                        var reg = /(\.html\S)/g;
                        url = url.replace(reg, '.html?')
                        window.location.href=url;
                    }*/
                });

            })
        })
    })

boxlen()
function boxlen() {
    console.log($(".page-address .box").length)
    if($(".page-address .box").length == 0){
        $(".page-address .main").hide()
        $(".page-address .no-data").show()
    }else {
        $(".page-address .main").show()
        $(".page-address .no-data").hide()
    }
}

function dialogFun_two(str){
    webToast(str,"middle",3000);
}
</script>
</html>