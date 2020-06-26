<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"template/gay/html/user/buy.html";i:1544283124;s:55:"/www/wwwroot/maccms/template/gay/html/user/include.html";i:1544283128;s:52:"/www/wwwroot/maccms/template/gay/html/user/head.html";i:1544283126;s:52:"/www/wwwroot/maccms/template/gay/html/user/foot.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值卡充值 - 会员中心 -<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/member2.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.superslide.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/formValidator-4.0.1.js" type="text/javascript"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
<script>
$("head").append('<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">');
</script>
</head>
<body>
<div class="header">
	<div class="layout fn-clear">
		<div class="logo">
			<a href="<?php echo $maccms['path']; ?>"><img width="157" height="42" src="<?php echo $maccms['path_tpl']; ?>/images/logo.jpg" alt=""/></a>
		</div>
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href="<?php echo $maccms['path']; ?>">返回首页</a></li>
			<li class="nav-item" ><a class="nav-link"><?php echo $obj['user_name']; ?></a></li>
			<li class="nav-item" ><a class="nav-link" href="<?php echo url('user/logout'); ?>" >退出</a></li>
		</ul>
	</div>
</div>
<!-- // i-header end -->

<!-- 会员中心 -->
<div id="member" class="fn-clear">
    <div id="left">
		<div class="tou"><img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" alt="会员头像"><p><?php echo $obj['user_name']; ?><br /><?php echo $obj['group']['group_name']; ?></p></div>
		<ul>
			<li><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li class="hover"><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li><a href="<?php echo url('user/orders'); ?>">充值记录</a></li>
		</ul>
	</div>
    <div id="right">
		<h2>在线充值</h2>
		<div class="line40">
			<p><span class="xiang">剩余积分：</span><?php echo $obj['user_points']; ?></p>
			<p><span class="xiang">充值的金额：</span><input type="text" name="price" value="<?php echo $config['min']; ?>" class="jifen-input"></p>
			<p><input type="button" id="btn_submit_pay" class="jifen2-button" value="确认"></p>
			<p class="hui">友情提示：最小充值金额为<?php echo $config['min']; ?>元，1元可以兑换<?php echo $config['scale']; ?>个积分</p>
		</div>

		<div class="line40">
			<p><span class="xiang">充值卡号：</span><input type="text" name="card_no" value="" class="jifen-input"></p>
			<p><span class="xiang">充值密码：</span><input type="text" name="card_pwd" value="" class="jifen-input"></p>
			<p><input type="button" id="btn_submit_card" class="jifen2-button" value="确认"></p>
			<p class="hui">友情提示：请到卡密平台购买充值卡</p>
		</div>
    </div>
</div>
<script>

	$(".go-back").click(function () {
		var ref = document.referrer;
		location.href=ref;
	});

	$('#btn_submit_pay').click(function(){
		var that=$(this);
		var price = $("input[name='price']").val();
		if(Number(price)<1){
			return;
		}
		if(confirm('确定要在线充值吗')) {
			$.ajax({
				url: "<?php echo url('user/buy'); ?>",
				type: "post",
				dataType: "json",
				data: {price: price,flag:'pay'},
				beforeSend: function () {
					$("#btn_submit_pay").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					if (r.code == 1) {
						location.href="<?php echo url('user/pay'); ?>?order_code=" + r.data.order_code;
					}
					else{
						alert(r.msg);
					}
				},
				complete: function () {
					$("#btn_submit_pay").css("background","#fa4646").val("提交");
				}
			});
		}
	});

	$('#btn_submit_card').click(function(){
		var that=$(this);
		var no = $('input[name="card_no"]').val();
		var pwd = $('input[name="card_pwd"]').val();
		if(no=='' || pwd==''){
			alert('请输入充值卡号和密码');
			return;
		}
		if(confirm('确定要使用充值卡充值吗')) {
			$.ajax({
				url: "<?php echo url('user/buy'); ?>",
				type: "post",
				dataType: "json",
				data: {card_no: no,card_pwd:pwd,flag:'card'},
				beforeSend: function () {
					$("#btn_submit_card").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					alert(r.msg);
				},
				complete: function () {
					$("#btn_submit_card").css("background","#fa4646").val("提交");
				}
			});
		}
	});
</script>
<!-- // sign-content end -->
<footer class="footer"> 
   <div class="container" style="margin-top: 20px;"> 
    <div class="center"> 
     <a href="#">DMCA Disclaimer</a> | 
     <a href="#">2257 Statement</a> | 
     <a href="#">TOS</a> | 
     <a href="#">Privacy Policy</a> | 
     <a class="pay-link" href="/index.php/label/price.html">观看方案</a> | 
     <a class="btn-report" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $maccms['site_qq']; ?>&site=qq&menu=yes">联系我们</a> 
    </div> 
    <p class="center">&copy; <?php echo $maccms['site_name']; ?> 2018 <?php echo $maccms['site_icp']; ?> </p> 
    <p class="center">友情链接: <?php $__TAG__ = '{"num":"10","type":"font","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a target="_blank" href="<?php echo $vo['link_url']; ?>"><?php echo $vo['link_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p> 
	<p class="center"><?php echo $maccms['site_tj']; ?></p>
   </div> 
</footer> 
<!-- // footer end -->
</body>
</html>