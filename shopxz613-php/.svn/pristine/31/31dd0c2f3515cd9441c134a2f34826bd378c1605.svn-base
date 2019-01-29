<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./template/web/rainbow/mine\collection.html";i:1547465791;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>我的收藏</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-classify page-collection">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
    <header id="header" class="">
        <div class="icon-back" onclick="history.back()"></div>
        <h5>我的收藏</h5>
    </header>

    <?php if(!$goods != null): ?>
        <div class="container" id="all">
            <div class="main flex-row main_collection">
                <div class="goods">
                    <div class="list">
                        <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>" class="box flex-row" id="remove<?php echo $list['goods_id']; ?>">
                                <div class="img"><img src="<?php echo $list[original_img]; ?>" alt=""></div>
                                <div class="right flex-column flex-column_y">
                                    <div class="name">
                                        <span id=""><?php echo $list[goods_name]; ?></span>
                                        <div class="icon-del" id="goodsids<?php echo $list['goods_id']; ?>"></div>
                                    </div>
                                    <div class="bot flex-row">
                                        <div class="price">¥<?php echo $list[shop_price]; ?></div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="nomore flex-row">
                        <div class="xian"></div>
                        <p>到底了~</p>
                        <div class="xian"></div>
                    </div>
                </div>
            </div>

            <div class="del_collection">
                <p>确定取消收藏？</p>
                <div class="del_collection_btn">
                    <input type="button" name="cancel" id="" value="取消" />
                    <input type="button" name="confirm" id="" value="确定" />
                </div>
            </div>
            <div class="mask"></div>
        </div>
    <?php else: ?>
        <div class="setSuccess collection">
            <img src="/template/web/rainbow/static/tonghaoran/images/prod5.png"/>
            <p>暂时还没有收藏哦！</p>
        </div>
    <?php endif; ?>
    


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

<script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/vue.js"></script>
<script>
$(function(){
    var vm = new Vue({
        el: '#all'
    });
	
	$(".icon-del").on("mousedown",function(){
		$(".del_collection").show();
		$(".mask").show();
        var goods_id = $(this).attr('id').substring(8);
        $(".del_collection_btn").children("input[name='confirm']").eq(0).on("click",function(){
            $.post("<?php echo U('cosmetology/Mine/remove_collection'); ?>", {goods_id:goods_id},function(datas){
                var values = JSON.parse(datas);
                $(".del_collection").hide();
                $(".mask").hide();
                if(values.status == 1){
                    $('#remove'+goods_id).remove();
                    dialogFun_two('已取消')
                }else{
                    dialogFun_two('取消收藏失败')
                }
            });
        });
	});

	$(".del_collection_btn").children("input[name='cancel']").eq(0).on("click",function(){
		$(".del_collection").hide();
		$(".mask").hide();
	});

    function dialogFun_two(str){
        webToast(str,"middle",3000);
    }


});

</script>
</html>