<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"template/gay/html/user/pay.html";i:1544283130;s:55:"/www/wwwroot/maccms/template/gay/html/user/include.html";i:1544283128;s:52:"/www/wwwroot/maccms/template/gay/html/user/head.html";i:1544283126;s:52:"/www/wwwroot/maccms/template/gay/html/user/foot.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>充值卡充值 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
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

<div id="member" class="fn-clear">
	<div id="left">
		<div class="tou"><img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" alt="会员头像"><p><?php echo $info['user_name']; ?><br /><?php echo $info['group']['group_name']; ?></p></div>
		<ul>
			<li><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li class="hover"><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
		</ul>
	</div>
	<div id="right">
		<h2>在线充值</h2>
		<form method="post" target="_blank" action="<?php echo url('user/gopay'); ?>">
			<input type="hidden" name="order_id" value="<?php echo $info['order_id']; ?>">
			<input type="hidden" name="order_code" value="<?php echo $info['order_code']; ?>">
		<div class="line40">
			<p><span class="xiang">订单编号：</span><?php echo $info['order_code']; ?></p>
			<p><span class="xiang">订单金额：</span><?php echo $info['order_price']; ?>元</p>
			<p>
				<?php if($config['alipay']['appid'] != ''): ?>
			<div class="ui-form-item fn-clear">
				<label class="ui-label w130">支付宝支付：</label><input type="radio" name="payment" value="alipay" id="alipay" checked>
			</div>
			<?php endif; if($config['weixin']['appid'] != ''): ?>
			<div class="ui-form-item fn-clear">
				<label class="ui-label w130">微信支付：</label><input type="radio" name="payment" value="weixin" id="weixin" checked >
			</div>
			<?php endif; if($config['codepay']['appid'] != ''): ?>
			<div class="ui-form-item fn-clear">
				<label class="ui-label w130">码支付：</label><input type="radio" name="payment" value="codepay" id="codepay" checked>
				<br>
				<label class="ui-label w130">码支付-途径：</label>
				<input type="radio" name="paytype" value="1" checked>支付宝
				<input type="radio" name="paytype" value="2" >QQ钱包
				<input type="radio" name="paytype" value="3" >微信
			</div>
			<?php endif; ?>
			</p>
			<p><input type="submit" id="btn_submit" class="jifen2-button" value="确认"></p>
		</div>
		</form>
	</div>
</div>
<script>

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