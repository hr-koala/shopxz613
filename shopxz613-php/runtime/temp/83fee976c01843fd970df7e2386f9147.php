<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/web/rainbow/cart\cartList.html";i:1547433257;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547606976;}*/ ?>
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
    <title>购物袋</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-cart page-report-cart">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>购物袋</h5>
</header>

<div class="container" id="all">
    <div class="main">
        <div class="list">
            <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $k = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($k % 2 );++$k;?>
                <div class="box flex-row" data-num="<?php echo $list['goods_num']; ?>" data-price="<?php echo $list['member_goods_price']; ?>">
                    <label :for="'ch' + <?php echo $k; ?>" class="<?php echo $list['selected']==1?'on':''; ?>">
                        <?php if($list['selected'] == 1): ?>
                            <input type="checkbox" name="" :id="'ch' + <?php echo $k; ?>" class="choose" checked="true" value="<?php echo $list['goods_id']; ?>">
                        <?php else: ?>
                            <input type="checkbox" name="" :id="'ch' + <?php echo $k; ?>" class="choose" value="<?php echo $list['goods_id']; ?>">
                        <?php endif; ?>
                    </label>
                    <a class="img" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>"><img src="/template/web/rainbow/static/images/details01.png" alt=""></a>
                    <div class="right flex-column">
                        <a class="name" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>">复合树莓果片压片糖果 XXX</a>
                        <div class="spec">规格:100ML</div>
                        <div class="sbot flex-row">
                            <a class="price" href="<?php echo U('cosmetology/Goods/details',['id'=>$list['goods_id']]); ?>">¥<?php echo $list['member_goods_price']; ?></a>
                            <div class="set-num flex-row">
                                <div class="icon sub" id="subgoodsid<?php echo $list['goods_id']; ?>">-</div>
                                <div class="num"><?php echo $list['goods_num']; ?></div>
                                <div class="icon add" id="addgoodsid<?php echo $list['goods_id']; ?>">+</div>
                            </div>
                        </div>
                    </div>
                    <div class="icon del" id="delid<?php echo $list['goods_id']; ?>"></div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- <?php if($user_info[bank_note] != 0): ?>
            <div class="report-curren">
                <div class="report-curren-selet on"></div>
                <div class="report-curren-txt">可使用的报单币：<?php echo $user_info[bank_note]; ?></div>
            </div>
        <?php endif; ?> -->
        <div class="floor flex-row">
            <div class="left flex-row">
                <label for="ch-all" class="ch-lab flex-row">
                    <input type="checkbox" name="ch-goods" id="ch-all" class="choose-all">
                    <span></span>
                    <p>全选</p>
                </label>
                <div class="qian">
                    <div class="price">合计：
                        <span id="allPrice">¥<?php echo $total['price']; ?></span>
                        <input type="hidden" class="hidden_price" value="<?php echo $total['price']; ?>">
                    </div>
                    <div class="p1">不含运费</div>
                </div>
            </div>
            <div class="jies"><p>结算</p></div>
        </div>
        <?php if($cartList == null): ?>
            <input type="hidden" class="is_record" value="0">
            <div class="no-data">
                <div class="icon-none"></div>
                <p>购物袋空空如也</p>
                <a href="<?php echo U('cosmetology/Index/index'); ?>" class="btn">去首页选购商品吧</a>
            </div>
        <?php else: ?>
            <input type="hidden" class="is_record" value="1">
        <?php endif; ?>
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
    countPrice()
    // setTimeout(countPrice, 1000)

    //全选
    $('.choose-all').on('change', function(){
        if(this.checked){
            $.each($('.main .box .choose'), function(is, el){
                this.checked = true
            });
            $('.main .box label').addClass('on')
        }else{
            $.each($('.main .box .choose'), function(is, el){
                this.checked = false
            });
            $('.main .box label').removeClass('on')
        }
        countPrice()
        $.post("<?php echo U('cosmetology/Cart/allElection'); ?>", {status:1},function(datas){});
    })

    //选择
    $('.main').on('change', '.box .choose', function(){
        var status = 0;
        if(this.checked){
            $(this).parent().addClass('on')
            var status = 1;
        }else{
            $(this).parent().removeClass('on')
        }
        countPrice()
        var goodsid = $(this).val();
        $.post("<?php echo U('cosmetology/Cart/pitchOn'); ?>", {status:status,goods_id:goodsid},function(datas){});
    })

    //减数量
    $('.main').on('click', '.box .sub', function(e){
        var $box = $(this).closest('.box');
        var num = parseInt($box.data('num'))
        if(num > 1){
            num -= 1;
            $box.data('num', num)
            $box.find('.num').html(num)
            countPrice()
            var goodsid = $(this).attr('id').substring(10);
            $.post("<?php echo U('cosmetology/Cart/subCart'); ?>", {goods_id:goodsid},function(datas){});
        }
    })
    //加
    $('.main').on('click', '.box .add', function(e){
        var $box = $(this).closest('.box');
        var num = parseInt($box.data('num'))
        num += 1;
        $box.data('num', num)
        $box.find('.num').html(num)
        countPrice()
        var goodsid = $(this).attr('id').substring(10);
        $.post("<?php echo U('cosmetology/Cart/addCart'); ?>", {goods_id:goodsid},function(datas){});
    })

    //计算价格 显示
    function countPrice(){
        var box = $('.main .box');
        var price = 0; //总价格
        var len = 0; //选中的个数
        $.each(box, function(is, el){
            if($(el).find('.choose')[0].checked){
                var num = parseInt($(el).data('num'))
                var pr = parseFloat($(el).data('price'))
                len++;
                price += num * pr;
            }
        })
        price = parseFloat(price.toFixed(2))
        if(len === box.length && len !== 0){
            $('.ch-lab').addClass('on')
            $('#ch-all')[0].checked = true
        }else{
            $('.ch-lab').removeClass('on')
            $('#ch-all')[0].checked = false
        }
        if(price > 0){
            $('.floor .jies').addClass('on')
        }else{
            $('.floor .jies').removeClass('on')
        }
        $('#allPrice').html('￥' + price)
        $('.hidden_price').val(price)
    }

    $('.main').on('click', '.box .del', function(e){
         var goodsid = $(this).attr('id').substring(5);
         console.log(goodsid)
        $.post("<?php echo U('cosmetology/Cart/delCart'); ?>", {goods_id:goodsid},function(datas){
            var values = JSON.parse(datas);
            console.log(values)
            if(values['status'] == 1){
                $('.main').html(values['info']);
                countPrice()
            }
            dialogFun_two(values['msg'])
        });
    })


    //结算
    $('.jies').click(function(){
        var is_record = $('.is_record').val();
        if(is_record === 0 || is_record === '0'){
            dialogFun_two('购物车还未添加商品，请去首页添加商品吧');
            return false;
        }
        var hidden_price = $('.hidden_price').val();
        if(hidden_price === 0 || hidden_price === '0'|| hidden_price === ''){
            dialogFun_two('请选择商品进行结算');
            return false;
        }
        window.location.href = '/cosmetology/Cart/firmOrder.html';
    })
    
})

    function dialogFun_two(str){
        webToast(str,"middle",3000);
    }
</script>
</html>