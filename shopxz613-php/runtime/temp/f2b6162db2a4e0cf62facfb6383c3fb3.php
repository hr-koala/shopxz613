<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"./template/web/rainbow/mine\modifyingData.html";i:1547189949;s:72:"D:\PHPTutorial\WWW\shopxz613-php\template\web\rainbow\public\header.html";i:1547189899;}*/ ?>
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
    <title>修改资料</title>
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/alertPopShow.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/ui-dialog.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/common.css">
    <link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/css/mr_style.css">
    <script type="text/javascript" src="/template/web/rainbow/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/js/alertPopShow.js"></script>
    
</head>
<body class="page-mine page-setInform">

<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/common.css">
<link rel="stylesheet" type="text/css" href="/template/web/rainbow/static/tonghaoran/css/mr_style.css">
<script src="/template/web/rainbow/static/tonghaoran/js/vue.js"></script>
    <script type="text/javascript" src="/template/web/rainbow/static/tonghaoran/js/FileSaver.min.js"></script>

<header id="header" class="">
    <div class="icon-back" onclick="history.back()"></div>
    <h5>修改资料</h5>
</header>


<div class="main">
	 <div class="other" style="font-family: SourceHanSansCN-Normal;font-size: 0.7rem;">
             
        <ul>
            <li id="portrait">
                <a href="mine_set_inform.html" class="flex-row" title="">
                    <div class="right flex-row">
                        <div class="name">头像</div>
                        <div class="yuan">
			                <div class="avatar"><img src="<?php if($user_info[head_pic] != null): ?><?php echo $user_info[head_pic]; else: ?>/template/web/rainbow/static/tonghaoran/images/prod6.png<?php endif; ?>" alt=""></div>
			            </div>
                    </div>
                </a>
            </li>
          
            <li id="yourName">
                <a href="" class="flex-row" title="">
                    <div class="right flex-row ">
                        <div class="name">昵称</div>
                        <div class="yourNamea">
                        	<?php if($user_info['nickname'] != ''): ?><P><?php echo $user_info['nickname']; ?></P><?php else: ?><P>未设置</P><?php endif; ?>
                        	<div class="jt-r"></div>
                        </div>
                    </div>
                </a>
            </li>
            
             <li id="changePhone">
                <a href="" class="flex-row" title="">
                    <div class="right flex-row">
                        <div class="name">手机号</div>
                        <div class="yourNamea">
	                        <P><?php echo $user_info['mobile']; ?></P>
	                        <div class="jt-r"></div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>

    </div>
	
	<!-- <div class="y_avatar">
		<ul>
			<li class="photo">拍照上传</li>
			<li class="album">
                <input type="file" class="add-img" accept="image/*" value="" />从相册选择</li>
			<li class="cancel">取消</li>
		</ul>
	</div> -->

    <div class="y_avatar">
        <ul>
            <li class="photo">
                <input id="takepicture" class="add-img" type="file" accept="image/*" capture="camera" >
                <!--<video id="video"></video>-->
                拍照上传
            </li>
            <li class="album">
                <!--<input type="file" name="" value="" class="add-img" accept="image/*" title="点击替换图片">-->
                <input type="file" class="add-img" accept="image/*" value="" />从相册选择</li>
            <li class="cancel">取消</li>
        </ul>
    </div>

	
	<div class="setName">
		<p>修改昵称</p>
        <?php if($user_info['nickname'] != ''): ?><input type="text" name="" class="setName_txt" value="<?php echo $user_info['nickname']; ?>" /><?php else: ?><input type="text" name="" class="setName_txt" value="请输入您的昵称" /><?php endif; ?>
		
		<span>4-16个字符码，仅支持中英文、大小写、数字等组合</span>
		<div class="setName_btn">
			<input type="button" name="" value="取消" />
			<input type="button" name="" value="确定" />
		</div>
	</div>
	
	<div class="setphone">
		<p class="setphone_p">更换新手机号</p>
		<p>您当前的手机号码是<span>+86 <?php echo substr_replace($user_info[mobile], '****', 3, 4); ?></span>,</p>
		<p style="margin-left: 0.3rem;">更改后的新手机号将作为新的登陆账号。</p>
		<div class="setphone_btn">
			<input type="button" name="" value="取消" />
			<input type="button" name="" value="立即更改" />
		</div>
	</div>
	
	<div class="mask"></div>

	
</body>


<script type="text/javascript">
	


$(function(){
        
        //修改头像
        $("#portrait").on("mousedown",function(){
            $(".y_avatar").show();
            $(".mask").show();
        });
        
        
        //修改昵称
        $("#yourName").on("mousedown",function(){
            $(".setName").show();
            $(".mask").show();
        });
        
        $(".setName_txt").on("click",function(){
            if($(this).val() === "请输入您的昵称"){
                $(this).val("");
            }

        });
        
        $(".setName_btn").children("input").eq(0).on("click",function(){
            $(".setName").hide();
            $(".mask").hide();
        });
        $(".setName_btn").children("input").eq(1).on("click",function(){
            var nickname = $(".setName_txt").val();
            console.log(nickname)
            $.post("<?php echo U('cosmetology/Mine/modifyNickname'); ?>", {nickname:nickname},function(datas){});
            // console.log($("#yourName").find("p").text())
            // console.log(2222)
            $("#yourName").find("p").text($(".setName_txt").val())


            $(".setName").hide();
            $(".mask").hide();
        });

        //修改手机号
        $("#changePhone").on("mousedown",function(){
            $(".setphone").show();
            $(".mask").show();
        });
        
        $(".setphone_btn").children("input").eq(0).on("click",function(){
            $(".setphone").hide();
            $(".mask").hide();
        });
        
        $(".setphone_btn").children("input").eq(1).on("click",function(){
            window.location.href="<?php echo U('cosmetology/User/changeNumber'); ?>";
        });
        // 拍照
        $(".page-setInform .photo").on("click",function () {
            $(".y_avatar").hide();
            $(".mask").hide();
        })
        // 相册
        $(".page-setInform .album").on("click",function () {
            $(".y_avatar").hide();
            $(".mask").hide();
        })
        // 取消
        $(".page-setInform .cancel").on("mousedown",function () {
            $(".y_avatar").hide();
            $(".mask").hide();
        })


        $('.page-setInform').on('change', '.add-img', function(event) {
            event.stopPropagation();
            var oFile = this.files[0]
            var _this = this
            var fr = new FileReader();
            var rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
            if (!rFilter.test(oFile.type)) {
                errorFun()
                return;
            };
            // console.log(event.target.value)//target.ownerDocument.value
            fr.readAsDataURL(oFile);

            fr.onload = function(FREvent) {
                console.log(FREvent)
                dealImage(FREvent.target.result, {
                    width : 500
                }, function(base){
                    // console.log(oFile)
                    // console.log(base)
                    alert(111)
                    $.post("<?php echo U('cosmetology/Mine/uploadPictures'); ?>", {base:base},function(datas){});
                    $(".page-setInform .avatar img").attr('src',base);
                })
            }
        })

        function dealImage(path, obj, callback) {
            var img = new Image();
            img.src = path;
            img.onload = function() {
                var that = this;
                // 默认按比例压缩
                var w = that.width,
                    h = that.height,
                    scale = w / h;
                w = obj.width || w;
                h = obj.height || (w / scale);
                var quality = 0.7; // 默认图片质量为0.7
                //生成canvas
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                // 创建属性节点
                var anw = document.createAttribute("width");
                anw.nodeValue = w;
                var anh = document.createAttribute("height");
                anh.nodeValue = h;
                canvas.setAttributeNode(anw);
                canvas.setAttributeNode(anh);
                ctx.drawImage(that, 0, 0, w, h);
                // 图像质量
                if (obj.quality && obj.quality <= 1 && obj.quality > 0) {
                    quality = obj.quality;
                }
                // quality值越小，所绘制出的图像越模糊
                var type = 'image/jpeg'
                var str = path.substring(0, path.search(/\;/g))
                if(str.search(/(png)/g) >= 0){
                    type = 'image/png'
                }
                var base64 = canvas.toDataURL(type, quality);
                // 回调函数返回base64的值
                callback(base64);
                // $.post("<?php echo U('cosmetology/Mine/uploadPictures'); ?>", {base64:base64},function(datas){});
            }
        }
    });
</script>

</html>