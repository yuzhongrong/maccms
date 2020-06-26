<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:32:"template/gay/html/user/info.html";i:1544283128;s:55:"/www/wwwroot/maccms/template/gay/html/user/include.html";i:1544283128;s:52:"/www/wwwroot/maccms/template/gay/html/user/head.html";i:1544283126;s:52:"/www/wwwroot/maccms/template/gay/html/user/foot.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>修改资料 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
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
			<li class="hover"><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li><a href="<?php echo url('user/orders'); ?>">充值记录</a></li>
		</ul>
	</div>
	<div id="right">
		<h2>我的资料</h2>
		<div id="tab">
			<div class="list">
				<ul class="fn-clear">
					<li><a href="<?php echo url('user/index'); ?>">基本资料</a></li>
					<li class="cur">修改信息</li>
					<li><a href="<?php echo url('user/popedom'); ?>">我的权限</a></li>
				</ul>
			</div>
			<div id="listCon">

				<!-- 修改信息 -->
				<div class="cur">
					<form id="fm" name="fm" method="post" action="" >
					<p><span class="xiang">用户名：</span><?php echo $obj['user_name']; ?></p>
					<p><span class="xiang">原始密码：</span><input type="password" name="user_pwd" class="member-input"></p>
					<p><span class="xiang">新密码：</span><input type="password" name="user_pwd1" class="member-input"><span class="tishi">不修改请留空</span></p>
					<p><span class="xiang">重复密码：</span><input type="password" name="user_pwd2" class="member-input"></p>
					<p><span class="xiang">QQ号码：</span><input type="text" name="user_qq" class="member-input" value="<?php echo $obj['user_qq']; ?>"></p>
					<?php if($obj['user_email'] != ''): ?>
						<p><span class="xiang">邮箱：</span><input type="text" name="user_email" class="member-input" readonly="readonly" value="<?php echo $obj['user_email']; ?>">[<a class="btn_unbind" ac="email" href="javascript:;">解绑</a>]</p>
					<?php else: ?>
						<p><span class="xiang">邮箱：</span><input type="text" name="user_email" class="member-input" value="">[<a href="<?php echo url('user/bind'); ?>?ac=email">绑定</a>]</p>
					<?php endif; ?>

					<p><span class="xiang">找回密码问题：</span><input type="text" name="user_question" class="member-input" value="<?php echo $obj['user_question']; ?>"></p>
					<p><span class="xiang">找回密码答案：</span><input type="text" name="user_answer" class="member-input" value="<?php echo $obj['user_answer']; ?>"></p>
					<p><span class="xiang"></span><input type="button" id="btn_submit" class="search-button" value="保存"><span class="wjmm"><a href="<?php echo url('user/findpass'); ?>">忘记密码了？</a></span></p>
					<p><span class="xiang"></span></p>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	$('.btn_unbind').click(function(){
		var ac = $(this).attr('ac');
		if(ac!='email' && ac!='phone'){
			alert('参数错误');
		}
		if(confirm('确认解除绑定吗？此操作不可恢复？')) {
			$.ajax({
				url: "<?php echo url('user/unbind'); ?>",
				type: "post",
				dataType: "json",
				data: {ac: ac},
				beforeSend: function () {
					//开启loading
				},
				success: function (r) {
					alert(r.msg);
					if(r.code==1){
						location.href="<?php echo url('user/info'); ?>";
					}
				},
				complete: function () {
					//结束loading
				}
			});
		}
	});

	$("#btn_submit").click(function() {
		var data = $("#fm").serialize();
		$.ajax({
			url: "<?php echo url('user/info'); ?>",
			type: "post",
			dataType: "json",
			data: data,
			beforeSend: function () {
				//开启loading
				//$(".loading_box").css("display","block");
				$("#btn_submit").css("background","#fd6a6a").val("loading...");
			},
			success: function (r) {
				alert(r.msg);
				if(r.code==1){
					location.href="<?php echo url('user/info'); ?>";
				}
			},
			complete: function () {
				//结束loading
				//$(".loading_box").css("display","none");
				$("#btn_submit").css("background","#fa4646").val("提交");
			}
		});
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