<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./template/web/rainbow/agent\levelDescription.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\footer.html";i:1547189899;}*/ ?>
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
    <title>分销中心</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-level">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>等级说明</h5>
</header>

<div class="container">
    <div class="top">
        <div class="top-level">
            <div class="top-box">
                <div class="level-icon">
                    <!--<div class="level-icon-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_unit.png"/>
                    </div>-->
                    <div class="daili"></div>

                    <div class="level-line"></div>
                    <div class="daili">
                        <div data-index="0" class="level-icon-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_jingli.png"/>
                        </div>
                    </div>

                    <div class="level-line"></div>
                    <div class="daili">
                        <div data-index="1" class="level-icon-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_unit.png"/>
                        </div>
                    </div>

                    <div class="level-line"></div>
                    <div class="daili">
                        <div data-index="2" class="level-icon-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongjian.png"/>
                        </div>
                    </div>

                    <div class="level-line"></div>
                    <div class="daili">
                        <div data-index="3" class="level-icon-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongcai.png"/>
                        </div>
                    </div>

                    <div class="level-line"></div>
                    <div class="daili">
                        <div data-index="4" class="level-icon-img">
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_gudong.png"/>
                        </div>
                    </div>
                    <!--<div class="level-line"></div>-->
                </div>
                <div class="level-txt">
                    <?php if(is_array($all_level) || $all_level instanceof \think\Collection || $all_level instanceof \think\Paginator): $i = 0; $__LIST__ = $all_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$levels): $mod = ($i % 2 );++$i;?>
                        <div class="daili-con">
                            <div class="daili-txt"><?php echo $levels['level_name']; ?></div>
                            <div class="daili-num"><?php echo $levels['lower_rank']; ?></div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>
        </div>
        <div class="name">
            <?php if($user_info[level] == 2): if($lack[team] != ''): ?>
                    再加入<?php echo $lack[team]; ?>名团队人数
                <?php endif; if(($lack[team] != '') AND ($lack[agent] != '')): ?>,<?php endif; if($lack[agent] != ''): ?>
                    再加入<?php echo $lack[agent]; ?>名代理
                <?php endif; if(($lack[team] != '') OR ($lack[agent] != '')): ?>
                    成为<?php echo $all_level[$lack[upgrade]+1][level_name]; endif; else: if($lack[agent] != ''): ?>
                    再加入<?php echo $lack[agent]; ?>名<?php echo $all_level[$lack[upgrade]][level_name]; ?>成为<?php echo $all_level[$lack[upgrade]+1][level_name]; endif; endif; ?>
        </div>
    </div>
    <div class="main" style="margin-bottom: 3rem;">
        <div class="grade">
            <div class="grade-tit">
                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_grade.png">
            </div>
            <ul class="grade-con">
                <?php if(is_array($all_level) || $all_level instanceof \think\Collection || $all_level instanceof \think\Paginator): $i = 0; $__LIST__ = $all_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$levels): $mod = ($i % 2 );++$i;if($levels[level_id] != 2): ?>
                        <li class="grade-box">
                            <div class="grade-img">
                                <?php if($levels[level_id] == 10): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_jingli.png">
                                <?php elseif($levels[level_id] == 11): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_buzhang.png">
                                <?php elseif($levels[level_id] == 12): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongjian.png">
                                <?php elseif($levels[level_id] == 13): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongcai.png">
                                <?php elseif($levels[level_id] == 14): ?>
                                    <img src="/template/web/rainbow/static/tonghaoran/images/icon_gudong.png">
                                <?php endif; ?>
                            </div>
                            <div class="grade-txt">
                                <div class="grade-txt-name"><?php echo $levels[level_name]; ?></div>
                                <div class="grade-txt-p"><?php echo $levels[describe]; ?></div>
                            </div>
                        </li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <!-- <li class="grade-box">
                    <div class="grade-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_jingli.png">
                    </div>
                    <div class="grade-txt">
                        <div class="grade-txt-name">销售经理</div>
                        <div class="grade-txt-p">直推五名代理 团队达到二十五人  2%</div>
                    </div>
                </li>
                <li class="grade-box">
                    <div class="grade-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_buzhang.png">
                    </div>
                    <div class="grade-txt">
                        <div class="grade-txt-name">销售部长</div>
                        <div class="grade-txt-p">直推出现三名经理  4%</div>
                    </div>
                </li>
                <li class="grade-box">
                    <div class="grade-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongjian.png">
                    </div>
                    <div class="grade-txt">
                        <div class="grade-txt-name">销售总监</div>
                        <div class="grade-txt-p"> 直推出现三名部长 6%</div>
                    </div>
                </li>
                <li class="grade-box">
                    <div class="grade-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_zongcai.png">
                    </div>
                    <div class="grade-txt">
                        <div class="grade-txt-name">销售总裁</div>
                        <div class="grade-txt-p">直推出现三名总监 8%</div>
                    </div>
                </li>
                <li class="grade-box">
                    <div class="grade-img">
                        <img src="/template/web/rainbow/static/tonghaoran/images/icon_gudong.png">
                    </div>
                    <div class="grade-txt">
                        <div class="grade-txt-name">销售股东</div>
                        <div class="grade-txt-p">直推出现三名总裁 10%</div>
                    </div>
                </li> -->
                <div class="advance">
                    晋级奖 ： 根据业绩的提升，职位和利益随之提升差额奖
                </div>
            </ul>

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

<script>
    $(function () {
        /*for(let i=0;i<$(".page-level .level-icon-img").length - 1; i++){
            let ind = $(".page-level .level-icon-img").eq(i).attr("data-index")
            console.log(ind)
            if(ind == "<?php echo $display; ?>"){
                $(".page-level .level-icon-img").hide()
                $(".page-level .level-icon-img").eq(i).show()
            }
        }*/

        for(let i=0;i<$(".page-level .level-icon-img").length; i++){
                let ind = $(".page-level .level-icon-img").eq(i).attr("data-index")

                $(".page-level .level-icon-img").hide()
                if(ind == "<?php echo $display; ?>"){
                    // $(".page-level .level-icon-img").hide()
                    $(".page-level .level-icon-img").eq(i).show()
                    return;
                }
            }



        //设置  手指拖拽进度滑块 的事件
        // moveUp()
        function moveUp() {
            var  move = false;
            //开始按下手指事件
            $(".top-box").on("mousedown", function (e) {
                move = true;
                e=e||window.e;
                e.preventDefault();
                _x = e.pageX - parseInt($(".top-box").css("left"));
                _y = e.pageY;

                console.log(_x+"=="+_y);
            })
            //移动手指事件
            $(".top-box").on("mousemove", function (e) {
                e.preventDefault();
                if (move) {
                    x = e.pageX - _x;
                    $(".top-box").css("left", x+"px");
                }
            })
            //松开手指事件
            $(".top-box").on("mouseup", function (e) {
                e.preventDefault();
                move = false;
            })
        }
    })
</script>


</body>
</html>