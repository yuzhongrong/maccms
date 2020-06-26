<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:35:"template/gay/html/user/upgrade.html";i:1544283132;s:55:"/www/wwwroot/maccms/template/gay/html/user/include.html";i:1544283128;s:52:"/www/wwwroot/maccms/template/gay/html/user/head.html";i:1544283126;s:52:"/www/wwwroot/maccms/template/gay/html/user/foot.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>升级会员组 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
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
			<li ><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li class="hover"><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li><a href="<?php echo url('user/orders'); ?>">充值记录</a></li>
		</ul>
	</div>

    <div id="right">
		<h2>升级会员</h2>
		<div class="line40">
			<p><span class="xiang">所属会员组：</span>[<?php echo $obj['group']['group_name']; ?>] </p>
			<p><span class="xiang">剩余积分：</span>[<?php echo $obj['user_points']; ?>] </p>
			<p><span class="xiang">到期时间：</span><?php if($obj['group_id'] < 3): ?>[无限期]<?php else: ?>[<?php echo mac_day($obj['user_end_time']); ?>]<?php endif; ?></p>
			<p><span class="xiang">请选择升级选项：</span><span class="fen">点击需要的会员组和时长进行购买升级</span></p>
		</div>
		<form action="" method="post" name="form3" id="form3">
		<div class="shengji">
		 <!-- BEGIN row -->
		<?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): $i = 0; $__LIST__ = $group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['group_id'] > 2): ?>
			 <div class="huang grade" style="width:170px; line-height:40px; text-align:center; color:#fff; margin-right:15px; display:inline-block;" data-id="<?php echo $vo['group_id']; ?>" data-name="<?php echo $vo['group_name']; ?>" data-points="<?php echo $vo['group_points_day']; ?>" data-long="day">
				 <?php echo $vo['group_name']; ?>-包天：<?php echo $vo['group_points_day']; ?>积分
			 </div>
			<div class="lan grade" style="width:170px; line-height:40px; text-align:center; color:#fff; margin-right:15px; display:inline-block;" data-id="<?php echo $vo['group_id']; ?>" data-name="<?php echo $vo['group_name']; ?>" data-points="<?php echo $vo['group_points_week']; ?>" data-long="week">
				<?php echo $vo['group_name']; ?>-包周：<?php echo $vo['group_points_week']; ?>积分
			</div>
				<div class="hong grade" style="width:170px; line-height:40px; text-align:center; color:#fff; margin-right:15px; display:inline-block;" data-id="<?php echo $vo['group_id']; ?>" data-name="<?php echo $vo['group_name']; ?>" data-points="<?php echo $vo['group_points_month']; ?>" data-long="month">
					<?php echo $vo['group_name']; ?>-包月：<?php echo $vo['group_points_month']; ?>积分
				</div>
					<div class="zi grade" style="width:170px; line-height:40px; text-align:center; color:#fff; margin-right:15px; display:inline-block;" data-id="<?php echo $vo['group_id']; ?>" data-name="<?php echo $vo['group_name']; ?>" data-points="<?php echo $vo['group_points_year']; ?>" data-long="year">
						<?php echo $vo['group_name']; ?>-包年：<?php echo $vo['group_points_year']; ?>积分
					</div>
			 <?php endif; endforeach; endif; else: echo "" ;endif; ?>
		 <!-- END row -->
		</div>
	</form>
    </div>
</div>
<script>
	
		$('.grade').click(function(){
			var that=$(this);
			var group_id = that.attr('data-id');
			var group_name = that.attr('data-name');
			var long = that.attr('data-long');
			var points = that.attr('data-points');
	
			if(confirm('确定要升级到【'+group_name+'】吗,需要花费【'+points+'】积分')) {
				$.ajax({
					url: "<?php echo url('user/upgrade'); ?>",
					type: "post",
					dataType: "json",
					data: {group_id: group_id,long:long },
					beforeSend: function () {
						$("#btn_submit").css("background","#fd6a6a").val("loading...");
					},
					success: function (r) {
						alert(r.msg);
						if (r.code == 1) {
							location.reload();
						}
					},
					complete: function () {
						$("#btn_submit").css("background","#fa4646").val("提交");
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