<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"template/gay/html/user/popedom.html";i:1544283130;s:55:"/www/wwwroot/maccms/template/gay/html/user/include.html";i:1544283128;s:52:"/www/wwwroot/maccms/template/gay/html/user/head.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>会员中心 - <?php echo $maccms['site_name']; ?></title>
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
					<li><a href="<?php echo url('user/info'); ?>">修改信息</a></li>
					<li class="cur">我的权限</li>
				</ul>
			</div>
			<div id="listCon">
				<!-- 基本资料 -->
				<div class="cur">
					<p><span class="xiang">用户名：</span><?php echo $obj['user_name']; ?></p>
					<p><span class="xiang">用户组：</span><span class="fen"><?php echo $obj['group']['group_name']; ?></span></p>
					<p><span class="xiang">期限：</span><span class="fen"><?php if($obj['group_id'] < 3): ?>无限期<?php else: ?> <?php echo mac_day($obj['user_end_time']); endif; ?></span></p>
					<p><span class="xiang">权限列表：</span>绿色表示用户有访问权限，灰色表示无访问权限，若你想要提升访问权限可选择升级会员组</p>
					<?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<p>
						<span class="quanxian"><?php echo $vo['type_name']; ?></span>
						<?php if(is_array($vo['popedom']) || $vo['popedom'] instanceof \think\Collection || $vo['popedom'] instanceof \think\Paginator): if( count($vo['popedom'])==0 ) : echo "" ;else: foreach($vo['popedom'] as $key=>$v2): if($v2 == 1): ?><span class="you"><?php echo $key; ?></span><?php else: ?><span class="wu"><?php echo $key; ?></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</p>
						<p>
						<?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
						<span class="quanxian"><?php echo $child['type_name']; ?></span>
						<?php if(is_array($child['popedom']) || $child['popedom'] instanceof \think\Collection || $child['popedom'] instanceof \think\Paginator): if( count($child['popedom'])==0 ) : echo "" ;else: foreach($child['popedom'] as $key=>$v2): if($v2 == 1): ?><span class="you"><?php echo $key; ?></span><?php else: ?><span class="wu"><?php echo $key; ?></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</p>
						<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>