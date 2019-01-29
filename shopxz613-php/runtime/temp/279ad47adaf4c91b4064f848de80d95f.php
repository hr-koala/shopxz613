<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./template/web/rainbow/goods\categoryList.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547606976;}*/ ?>
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
    <title>分类</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-classify">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>分类</h5>
</header>

<div class="container" id="all">
    <div class="search">
        <form id="frm1" action="<?php echo U('cosmetology/Goods/search'); ?>">
            <div class="search-box">
                <div class="icon"></div>
                <div class="right">
                    <input type="search" name="name" value="" placeholder="请输入要搜索的关键词">
                </div>
            </div>
        </form>
    </div>

    <div class="main flex-row">
        <div class="nav">
            <ul>
                <!-- <li v-for="n in 12" :class="n === 1 ? 'on':''"><p>V脸霜</p></li> -->
                <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection || $cat_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                	<li class="<?php echo $pitch_on==$list['parent_id_path']?'on':''; ?>" id="<?php echo $list['parent_id_path']; ?>"><p><?php echo $list['name']; ?></p></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="goods">
            <div class="list" id="goodslist">
            	<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ware): $mod = ($i % 2 );++$i;?>
	                <a href="<?php echo U('cosmetology/Goods/details',['id'=>$ware['goods_id']]); ?>" class="box flex-row">
	                    <div class="img"><img src="<?php echo $ware['original_img']; ?>" alt=""></div>
	                    <div class="right flex-column">
	                        <div class="name"><?php echo $ware['goods_name']; ?></div>
                            <?php if($level != null): ?>
                                <div class="bot flex-row">
                                    <div class="gleft">
                                        <div class="has-price">¥<?php echo $ware['shop_price']; ?></div>
                                        <div class="price">代理价：<span>¥<?php echo $ware['shop_price']/2; ?></span></div>
                                    </div>
                                    <div class="icon-cart"></div>
                                </div>
                            <?php else: ?>
                                <div class="bot flex-row">
                                    <div class="price"><span>¥<?php echo $ware['shop_price']; ?></span></div>
                                    <div class="icon-cart"></div>
                                </div>
                            <?php endif; ?>
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
</body>

<script type="text/javascript" src="/template/web/rainbow/static/js/vue.js"></script>
<script>

$(function(){
    var vm = new Vue({
        el: '#all'
    })

    /*切换分类*/
    $('.nav').on('click', 'ul li', function(){
        $(this).addClass('on').siblings().removeClass('on')
        var parent_id = $(this).attr('id');
        $.post("<?php echo U('cosmetology/Goods/ajaxGoods'); ?>", {parent_id:parent_id},function(datas){
            var values = JSON.parse(datas);
            if(values['status'] == 1){
                $('#goodslist').replaceWith(values['info']);
            }
        });
    })
})

</script>
</html>