<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"template/gay/html/user/reg.html";i:1544283132;}*/ ?>

<!DOCTYPE html>
<html lang="zh-Hant">
 <head> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
  <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>  
  <meta name="description" content="<?php echo $maccms['site_description']; ?>" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta property="og:description" content="<?php echo $maccms['site_name']; ?>" /> 
  <meta property="og:url" content="http://<?php echo $maccms['site_url']; ?>/index.php/user/reg.html" /> 
  <meta property="og:type" content="website" /> 
  <meta property="og:title" content="注册 : <?php echo $maccms['site_name']; ?>" /> 
  <title>注册 : <?php echo $maccms['site_name']; ?></title> 
  <link rel="alternate" hreflang="x-default" href="//<?php echo $maccms['site_url']; ?>/index.php/user/reg.html" /> 
  <link rel="alternate" hreflang="zh-Hans" href="//<?php echo $maccms['site_url']; ?>/index.php/user/reg.html" /> 
  <link rel="canonical" href="//$maccms.site_url}/index.php/user/reg.html" /> 
  <link href="<?php echo $maccms['path_tpl']; ?>css/all-7c49267818.css" rel="stylesheet" /> 
  <link href="<?php echo $maccms['path_tpl']; ?>css/v2-607838a2ee.css" rel="stylesheet" />
  <!--[if lt IE 9]> <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/html5shiv.js"></script> <script src="<?php echo $maccms['path_tpl']; ?>html/style/js/respond.min.js"></script> <![endif]--> 
  <style> .jumbotron { background-color: #313131; color: #fff; }.nav-tabs>li>a {padding: 10px 15px;}</style> 
  <style> .dropdown:hover .dropdown-menu {display: block;} .navbar {margin-bottom: 0;}.navbar-toggle {margin-right:0;} #top-link-block {background-color:rgb(234, 90, 90);padding:5px;} #top-link-block.affix-top {position: absolute;bottom: -82px; right: 10px;} #top-link-block.affix {position: fixed;bottom: 82px;right: 10px;} .menu_right .nav li {display:inline-block;} .menu_right .navbar-collapse {float:right;} .menu_right .navbar-nav{ float:right;} .navbar-brand {padding:15px 15px;} @media (max-width: 767px) { .menu_right .navbar-nav{ padding:0 15px;float:left; overflow: scroll; width: 100%; white-space: nowrap;} } .menu_right .navbar-form {-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border:none;} .menu_right .navbar-nav .open .dropdown-menu{position:fixed;} .mm {width:100%} .footer { margin-top:20px;} body {background-color:#4c7598;color:#ccc;} a{color:#ecd1bb;} a:hover {text-decoration: none;color:#fff;} </style> 
  <script src="<?php echo $maccms['path_tpl']; ?>js/tab.js" type="text/javascript"></script>
  <script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
  <script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
  <script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
  <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.superslide.js"></script>
  <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
  <script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
  <script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
  <script src="<?php echo $maccms['path_tpl']; ?>js/formValidator-4.0.1.js" type="text/javascript"></script>
  <script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
 </head> 
 <body> 

  <div class="jumbotron text-center"> 
   <h2>登录后，体验高速播放</h2> 
   <p>关注本站公众号看片追剧永不掉队</p> 
  </div> 
  <div class="container"> 
   <div class="row"> 
   </div> 
   <div class="col-md-6 col-xs-12"> 
    <h3 style="margin-top:20px;margin-bottom:10px;">快速登入</h3> 
    <a href="<?php echo url('user/oauth'); ?>?type=qq" class="btn btn-lg btn-primary btn-block" type="submit">使用 QQ 登入</a> 
    <a href="<?php echo url('user/oauth'); ?>?type=qq" class="btn btn-lg btn-danger btn-block" type="submit" style="display:none;">使用 QQ 登入</a> 
   </div> 
   <div class="col-md-6 col-xs-12"> 
    <h4 style="margin-top:10px;margin-bottom:10px;"> 
     <ul class="nav nav-tabs" role="tablist"> 
	  <li role="presentation" class="active"><a href="/index.php/user/reg.html">注册账号</a></li>
	  <li role="presentation" class=""><a href="/index.php/user/login.html">登入</a></li>
	  <li role="presentation" class="activ"><a href="/">返回首页</a></li> 
     </ul> </h4> 
    <div class="tab-content"> 
     <div role="tabpanel" class="tab-pane active" id="register"> 
      <form method="post" id="fm" action=""> 
       <div class="form-group"> 
        <label class="control-label">输入你的用户名</label> 
        <input class="input-lg form-control" name="user_name" placeholder="示例: ymyuanma" title="请输入正确的用户名" id="user_name" required="" type="text" /> 
       </div> 
       <div class="form-group"> 
        <label class="control-label">设定你的密码</label> 
        <input class="form-control input-lg" placeholder="密码至少 6 个字元" name="user_pwd" id="user_pwd" required="" type="password" /> 
       </div> 
	   <div class="form-group"> 
        <label class="control-label">重复你的密码</label> 
        <input class="form-control input-lg" placeholder="请再一次输入密码" name="user_pwd2" id="user_pwd2" required="" type="password" /> 
       </div> 
	   <?php if($user_config['reg_verify'] != 0): ?>
	   <div class="form-group" style="overflow:hidden;"> 
        <label class="control-label" style="width:100%;">输入验证码</label> 
		<input class="form-control input-lg" placeholder="输入上图运算的答案" name="verify" id="verify" required="" type="text" style="width:60%;float:left;margin-right:5%;" />
		<img class="fr mr10 mt10" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'" title="看不清楚? 换一张！" alt="单击刷新" style="cursor:hand;width: 88px;height: 46px;float: left; isplay: block;overflow: hidden;margin: 0 10px 0 0;vertical-align: top;cursor: pointer;" />
       </div> 
	   <?php endif; ?>
       <div class="form-group"> 
		<input type="button" id="btn_submit" class="btn btn-lg btn-primary btn-block" value="注册">
       </div> 
      </form> 
     </div>  
    </div> 
   </div> 
  </div> 
  <div class="row" style="margin: 0;"> 
   <div class="col-md-12 text-center">
     成为本站会员，代表你同意我们的
    <a href="#" target="_blank">使用者条款</a>及
    <a href="#" target="_blank">隐私权政策</a> 
   </div> 
  </div> 
  <span id="top-link-block" class="hidden"><a href="#top" onclick="$('html,body').animate({scrollTop:0},'fast');return false;"><i class="fa fa-chevron-up fa-2x"></i></a></span> 
  
  <script src="<?php echo $maccms['path_tpl']; ?>js/all-fdcf04f904.js"></script> 
  <script src="<?php echo $maccms['path_tpl']; ?>js/v2-2755e1b5b8.js"></script>
    <!-- // sign-box#regbox end -->
<script type="text/javascript">

	$(function(){
		$("body").bind('keyup',function(event) {
			if(event.keyCode==13){ $('#btnLogin').click(); }
		});
		$('#btn_submit').click(function() {
			if ($('#user_name').val()  == '') { alert('请输入用户！'); $("#user_name").focus(); return false; }
			if ($('#user_pwd').val()  == '') { alert('请输入密码！'); $("#user_pwd").focus(); return false; }
			if ($('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

			$.ajax({
				url: "<?php echo url('user/reg'); ?>",
				type: "post",
				dataType: "json",
				data: $('#fm').serialize(),
				beforeSend: function () {
					$("#btn_submit").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					alert(r.msg);
					if(r.code==1){
						location.href="<?php echo url('user/login'); ?>";
					}
					else{
						$('#verify_img').click();
					}
				},
				complete: function () {
					$("#btn_submit").css("background","#fa4646").val("注册");
				}
			});

		});
	});

</script>
 </body>
</html>