<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/web/rainbow/agent\myTeam.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>我的团队</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-team">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<link rel="stylesheet" href="/template/web/rainbow/static/tonghaoran/css/dropload.css">
<script src="/template/web/rainbow/static/tonghaoran/js/dropload.min.js"></script>


<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>我的团队</h5>
</header>

<div class="container">
    <div class="top">
        <div class="num"><span><?php echo $count_team; ?></span></div>
        <div class="name">我的团队（人）</div>
    </div>
    <div class="invite-con">
        <div class="con-top">
            <div class="time">注册时间</div>
            <div class="time">手机号</div>
            <div class="time">当前等级</div>
        </div>
        <ul class="con-p">
            <!-- <li class="con-txt">
                <div class="time">2018-12-22</div>
                <div class="time">132****3157</div>
                <div class="time">一级销售经理</div>
            </li> -->
        <?php if($team != null): if(is_array($team) || $team instanceof \think\Collection || $team instanceof \think\Paginator): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?>
                <div class="con-txt">
                    <div class="time"><?php echo date('Y-m-d',$record[reg_time]); ?></div>
                    <div class="time"><?php echo substr_replace($record[mobile], '****', 3, 4); ?></div>
                    <div class="time levels"><?php if(is_array($all_level) || $all_level instanceof \think\Collection || $all_level instanceof \think\Paginator): $i = 0; $__LIST__ = $all_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i;if($level[level_id] == $record[level]): ?><?php echo $level[level_name]; endif; endforeach; endif; else: echo "" ;endif; ?></div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
    </div>
    <div class="invite-no">
        <img src="/template/web/rainbow/static/tonghaoran/images/icon_no-daili.png">
        <div class="no-num">
            暂无，去努力邀请好友吧~
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
<!-- <footer id="footer-nav"></footer>
<script type="text/javascript">var footerNav =  4;</script>
<script type="text/javascript" src="js/footer.js"></script> -->

<script>
    $(function () {
        console.log($(".top .num span").text())
        if($(".top .num span").text() == 0){
            $(".invite-con").hide()
            $(".invite-no").show()
        }else {
            $(".invite-con").show()
            $(".invite-no").hide()
        }
    })

    $(".levels").each(function () {
        if($(this).html() === 'undefined' || $(this).html() === null || $(this).html() === ''){
            $(this).html('普通会员')
        }
    })

    function loadMore() {
        var jsContent = "";
        var loadMoreContent = "<div id='load_more_content' class='red_load_more_content'>-- 加载更多 --</div>";
        $("#load_more_content").remove();
        for (var i = 0; i < 10; i++) {
            jsContent += '<li class="con-txt"> <div class="time">2018-12-22</div> <div class="time">132****3157</div> <div class="time">销售经理</div> </li>';
        }
        jsContent+=loadMoreContent;
        $(".con-p").append(jsContent);
    }

        // loadMore();
    //  监听指定组件滑动
    $(".con-p").scroll(function(){
        console.log("$(\"this\").scrollHeight" + $(this)[0].scrollHeight);
        console.log("$(this).height()" + $(this).height());
        console.log("$(this)[0].scrollTop" + $(this)[0].scrollTop);
        if($(this)[0].scrollTop+$(this).height()>=$(this)[0].scrollHeight){
            setTimeout(function(){
                // loadMore();
            },1000)
        }
    });
 /*   $(function(){
        var page = 1;                           // 页数
        var size = 2;                         // 每页展示10个
        $('.content').dropload({
            scrollArea : window,
            domDown : {
                domClass   : 'dropload-down',
                domRefresh : '<p class="dropload-refresh">↑加载更多</p>',
                domLoad    : '<p class="dropload-load"><span class="loading"></span>加载中...</p>',
                domNoData  : '<p class="dropload-noData">暂无数据</p>'
            },
            loadDownFn : function(me){
                page++;            // 拼接HTML
                var result = '';
                $.ajax({
                    type: 'GET',
                    url: '/cosmetology/dropload/json.php?page='+page+'&size='+size,
                    dataType: 'json',
                    success: function(data){
                        var arrLen = data.length;
                        if(arrLen > 0){
                            for(var i=0; i<arrLen; i++){
                            result += '<li class="con-txt"> <div class="time">2018-12-22</div> <div class="time">132****3157</div> <div class="time">销售经理</div> </li>';
                            }
                        }else{                        // 如果没有数据
                            me.lock();                // 锁定
                            me.noData();              // 无数据
                        }
                        setTimeout(function(){
                            $('.lists').append(result);            // 插入数据到页面，放到最后面
                            me.resetload();                        // 每次数据插入，必须重置
                        },1000);
                    },
                    error: function(xhr, type){
                        alert('Ajax error!');                    // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            },
            threshold : 50
        });
    });*/
</script>

</body>
</html>