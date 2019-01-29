<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./template/web/rainbow/goods\details.html";i:1547713937;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>详情</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-detail">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>详情</h5>
</header>
<div class="container" id="all">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(is_array($goods_images_list) || $goods_images_list instanceof \think\Collection || $goods_images_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_images_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide img"><img src="/template/web/rainbow/static/images/banner1.png" alt=""></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="top">
        <div class="name">复合树莓果片压片糖果</div>
        <div class="shop-desc">
            <span class="desc-num">一箱 / 5盒</span>
            <span class="desc-effect">减重</span>
            <span class="desc-effect">减重</span>
            <span class="desc-effect">不反弹</span>
        </div>
        <div class="qian flex-row">
            <div class="price">
                <!-- ¥<?php if(($level == null) AND ($goods['is_agent'] == '0')): ?>
                    <input type="hidden" class="final_price" value="<?php echo $goods['shop_price']; ?>">
                    <input type="hidden" class="multiple" value="1">
                    <?php echo $goods['shop_price']; else: ?>
                    <input type="hidden" class="final_price" value="<?php echo $goods['shop_price']/2; ?>">
                    <input type="hidden" class="multiple" value="2">
                    <?php echo $goods['shop_price']/2; endif; ?> -->

                ¥<?php if(!$level != null): ?>
                    <input type="hidden" class="final_price" value="<?php echo $goods['shop_price']/2; ?>">
                    <input type="hidden" class="multiple" value="2">
                    <?php echo $goods['shop_price']/2; else: ?>
                    <input type="hidden" class="final_price" value="<?php echo $goods['shop_price']; ?>">
                    <input type="hidden" class="multiple" value="1">
                    <?php echo $goods['shop_price']; endif; ?>

            </div>
            <div class="like flex-row" v-if="!isLikeFlag" @click="changeLikeFun">
                <div class="icon icon-like"></div>
                <p>收藏</p>
            </div>
            <div class="like flex-row" v-else @click="changeLikeFun">
                <div class="icon icon-like1"></div>
                <p>已收藏</p>
            </div>
        </div>
        <div class="yun flex-row">
            <p>运费：免运费</p>
            <p>剩余：<?php echo $goods['store_count']; ?></p>
        </div>
        <div class="tag flex-row">
            <?php if(is_array($attribute) || $attribute instanceof \think\Collection || $attribute instanceof \think\Paginator): $i = 0; $__LIST__ = $attribute;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i;if($attr['status'] != 0): ?>
                    <div class="box flex-row">
                        <div class="icon icon-dui"></div>
                        <p><?php echo $attr['name']; ?></p>
                    </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <!-- <div class="box flex-row">
                <div class="icon icon-dui"></div>
                <p>企业认证</p>
            </div>
            <div class="box flex-row">
                <div class="icon icon-dui"></div>
                <p>快递送货</p>
            </div> -->
        </div>
    </div>

    <div class="main">
        <div class="tit"><p>商品详情</p></div>
        <div class="detail">
            <!-- <img src="/template/web/rainbow/static/images/banner2.png" alt=""> -->
            <?php echo htmlspecialchars_decode($goods['goods_content']); ?>
        </div>
    </div>

    <div class="floor flex-row">
        <a href="<?php echo U('cosmetology/Cart/cartList'); ?>" title="" class="box">
            <div class="icon icon-cart"></div>
            <p>购物袋</p>
        </a>
        <div class="btn add-cart btn-num-null" @click="addCartFun"><p>已售罄</p></div>
        <div class="btn bg1 payment" @click="paymentFun"><p>立即付款</p></div>
    </div>

    <div class="mask" v-show="isShowSpecPopFlag" @click="hideSpecPopFun"></div>
    <div class="spec-pop" v-show="isShowSpecPopFlag">
        <div class="icon close" @click="hideSpecPopFun"></div>
        <div class="goods flex-row">
            <div class="img"><img src="/template/web/rainbow/static/images/details01.png" alt=""></div>
            <div class="right flex-column">
                <div class="name">复合树莓果片压片糖果XXXX XXX</div>
                <div class="goods-total">
                    <div class="price">¥{{buy.price}}</div>
                    <div class="goods-num">x1</div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="box flex-row" v-for="(item, key, index) in specList">
                <div class="name">{{key}}：</div>
                <ul class="flex-row">
                    <li v-for="(cit, cis) in item" @click="chooseSpecItem" :data-id="cit.item_id" :data-index="index">{{cit.item}}</li>
                </ul>
            </div>
        </div>
        <div class="shul flex-row">
            <div class="left">
                <div class="name">数量：</div>
                <p class="surplus">剩余{{buy.store_count}}件</p>
            </div>
            <div class="set-num flex-row">
                <div class="icon sub" @click="subNumFun">-</div>
                <div class="num">{{buy.num}}</div>
                <div class="icon add" @click="addNumFun">+</div>
            </div>
        </div>
    </div>
    
</div>

</body>

<script type="text/javascript" src="/template/web/rainbow/static/js/swiper.min.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/js/dialog-plus-min.js"></script>
<script type="text/javascript" src="/template/web/rainbow/static/js/vue.js"></script>
<script>

$(function(){
    var goods_id = <?php echo $goods['goods_id']; ?>;
    var vm = new Vue({
        el: '#all',
        data: {
            isShowSpecPopFlag: false, //是否显示规格弹窗
            specArr: [], //选择的规格id数组
            buy: {}, //选择的规格和数量
            isLikeFlag: false, //是否已关注
        },
        computed: {
            /*规格数组*/
            specList: function(){
                var arr = <?php echo $filter_spec; ?>;
                console.log(arr)
                return arr;
            },
            /*规格组合数组*/
            specGoods: function(){
                var arr = <?php echo $spec_goods_price; ?>;
                console.log(arr)
                return arr;
            }
        },
        methods: {
            /*初始化*/
            init: function(){
                var buy = {
                    num: 1,
                    price: $('.price .final_price').val(),
                    store_count: <?php echo $goods['store_count']; ?>, //剩余
                }
                this.buy = buy;
                if(<?php echo $collect; ?> > 0){
                    this.isLikeFlag = true
                }else{
                    this.isLikeFlag = false
                }
            },
            /*改变关注状态*/
            changeLikeFun: function(){
                if(<?php echo $user_id; ?> === 0){
                    dialogFun('立即登陆',"<?php echo U('cosmetology/User/login',['url'=>'/cosmetology/Goods/details.html?id="+goods_id+"']); ?>");
                    this.isLikeFlag = false
                }else{
                    this.isLikeFlag = !this.isLikeFlag;
                    var follow = 0;
                    if(this.isLikeFlag == true){
                        var follow = 1;
                    }
                    $.post("<?php echo U('cosmetology/Goods/follow'); ?>", {follow:follow,goods_id:<?php echo $goods['goods_id']; ?>},function(datas){
                        var values = JSON.parse(datas);
                        dialogFun_two(values['msg']);
                    });
                }
            },
            /*选择规格项*/
            chooseSpecItem: function(e){
                var id = $(e.target).data('id')
                var index = $(e.target).data('index')
                if(this.specArr[index] != id){
                    this.specArr[index] = id;
                    $(e.target).addClass('on').siblings().removeClass('on')
                    this.countSpecFun()
                }
            },
            /*加入购物袋*/
            addCartFun: function(){
                if(this.hasSpecFun()){
                    if(<?php echo $user_id; ?> === 0 || <?php echo $user_id; ?> === '0'){
                        window.location.href = '/cosmetology/User/login.html?url=/cosmetology/Goods/details.html?id='+goods_id;
                        return false;
                    }
                    var id = '';
                    if(this.buy.spec){
                        id = this.buy.spec.item_id;
                    }
                    var num = $('.num').text();
                    $.ajax({
                        type : "GET",
                        dataType: "json",
                        url:"<?php echo U('cosmetology/Cart/ajaxAddCart'); ?>",
                        data: {goods_id: goods_id, goods_num: num,item_id:id},
                        success: function(data){
                            if(data.status == 1){
                                vm.hideSpecPopFun();
                            }
                            dialogFun_two(data.msg)
                        }
                    });
                }
            },
            /*立即付款*/
            paymentFun: function(){
                if(this.hasSpecFun()){
                    if(<?php echo $user_id; ?> === 0 || <?php echo $user_id; ?> === '0'){
                        window.location.href = '/cosmetology/User/login.html?url=/cosmetology/Goods/details.html?id='+goods_id;
                        return false;
                    }
                    var id = '';
                    if(this.buy.spec){
                        id = this.buy.spec.item_id;
                    }
                    var num = $('.num').text();
                    window.location.href = '/cosmetology/Cart/firmOrder.html?goods_id='+goods_id+'&goods_num='+num+'&item_id='+id+'&action=buy_now';
                }
            },
            /*判断是否显示弹窗 或 有规格*/
            hasSpecFun: function(){
                if(this.isShowSpecPopFlag){
                    if(this.specList && $('.spec-pop .list .box').length > 0){
                        if(!this.buy.spec){
                            dialogFun('请先选择规格')
                            return false;
                        }
                        if(this.buy.store_count < this.buy.num){
                            dialogFun('库存不足')
                            return false;
                        }
                        if(<?php echo $user_id; ?> === 0 || <?php echo $user_id; ?> === '0'){
                            window.location.href = '/cosmetology/User/login.html?url=/cosmetology/Goods/details.html?id='+goods_id;
                            return false;
                        }
                    }
                    return true;
                }else{
                    this.isShowSpecPopFlag = true;
                    
                    return false;
                }
            },
            /*减*/
            subNumFun: function(){
                if(this.buy.num > 1){
                    this.buy.num -= 1;
                }
            },
            /*加*/
            addNumFun: function(){
                if(this.buy.num < this.buy.store_count){
                    this.buy.num += 1;
                }
            },
            /*隐藏规格弹窗*/
            hideSpecPopFun: function(){
                this.isShowSpecPopFlag = false;
            },
            /*计算规格*/
            countSpecFun: function(){
                var arr = this.specArr.join('_').split('_');
                var len = 0;
                for(var i = 0; i < arr.length; i++){
                    if(arr[i]){
                        len++;
                    }else{
                        break;
                    }
                }

                if(len < $('.spec-pop .list .box').length){
                    return;
                }
                var list = this.specGoods;
                arr.sort();
                var str = arr.join('_')
                var obj = {};
                for(var i in list){
                    var a = list[i].key.trim().split('_').sort().join('_');
                    if(a === str){
                        obj = list[i];
                        break;
                    }
                }
                var buy = this.buy;
                buy.spec = obj;
                var multiple = $('.multiple').val();
                var price = obj.price / multiple;
                var a = price.toString().indexOf('.');
                if(a >= 0){
                    a += 3;
                    var b = price.toString().charAt(a)
                    a -= 1;
                    var c = price.toString().charAt(a)
                    if(b >= 5){
                        c++;
                    }
                    var ar = price.toFixed(2).toString().split('');
                    ar[a] = c;
                    price = ar.join('')
                }
                buy.price = price;
                buy.store_count = obj.store_count;
                console.log(buy.store_count)
            }
        }
    })

    vm.init()

    var mySwiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 3000
        },
        loop : true,
        pagination: {
            el: '.swiper-pagination',
        },
    })
})

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

function dialogFun_two(str){
    webToast(str,"middle",3000);
}

</script>
</html>