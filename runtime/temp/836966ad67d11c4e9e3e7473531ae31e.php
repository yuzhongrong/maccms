<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"template/gay/html/vod/play.html";i:1544283134;s:54:"/www/wwwroot/maccms/template/gay/html/public/head.html";i:1544283110;s:57:"/www/wwwroot/maccms/template/gay/html/public/serial1.html";i:1544283138;s:54:"/www/wwwroot/maccms/template/gay/html/public/foot.html";i:1544283110;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线播放,百度网盘,迅雷下载-<?php echo $maccms['site_name']; ?>_国内领先的在线视频网站·免VIP在线观看无广告高清视频</title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线观看,谈判官百度网盘,谈判官迅雷下载,<?php echo $maccms['site_name']; ?>_国内领先的在线视频网站·免VIP在线观看无广告高清视频" />
    <meta name="description" content="《<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>》在线观看,《<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>》高清资源迅雷下载,<?php echo $maccms['site_name']; ?>_国内领先的在线视频网站·免VIP在线观看无广告高清视频剧情:<?php echo $obj['art_blurb']; ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <link type="image/vnd.microsoft.icon" href="<?php echo $maccms['path']; ?>favicon.png" rel="shortcut icon" />
	<link href="<?php echo $maccms['path_tpl']; ?>css/home.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $maccms['path_tpl']; ?>css/app.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.min.js"></script>
    <script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
	<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
</head>
<body>
    <header class="itopbar">
        <div class="container">
            <h1 class="ilogo"><a href="<?php echo $maccms['path']; ?>" title="logo"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.jpg" alt="<?php echo $maccms['site_name']; ?>"><span><?php echo $maccms['site_name']; ?></span></a></h1>
			
			
				<script type="text/javascript">
try{
    if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
        document.write('<nav class="sitenav"><a href="<?php echo $maccms['path']; ?>" <?php if($maccms['aid'] == 1): ?>class="cur"<?php endif; ?>>首页</a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?><a href="<?php echo mac_url('user/index'); ?>" <?php if($maccms['aid'] == 30 or $maccms['aid'] == 31): ?>class="cur"<?php endif; ?>>会员</a><a href="<?php echo mac_url('gbook/index'); ?>" <?php if($maccms['aid'] == 4): ?>class="cur"<?php endif; ?>>留言</a><a href="<?php echo mac_url_topic_index(); ?>" <?php if($maccms['aid'] == 7): ?>class="cur"<?php endif; ?>>专题</a></nav>');
    }else{
         document.write('<nav class="sitenav"><a href="<?php echo $maccms['path']; ?>" <?php if($maccms['aid'] == 1): ?>class="cur"<?php endif; ?>>首页</a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?><a href="<?php echo mac_url_topic_index(); ?>" <?php if($maccms['aid'] == 30 or $maccms['aid'] == 31): ?>class="cur"<?php endif; ?>>专题</a><a href="<?php echo mac_url('gbook/index'); ?>" <?php if($maccms['aid'] == 4): ?>class="cur"<?php endif; ?>>留言</a></nav>');
    }
}catch(e){}
</script>
			
            <div class="itr">
                <div class="mod">
                    <a href="javascript:;" class="mac_history"><i class="iconfont">&#xe62b;</i>看过<span class="caret"></span></a>
                </div>
                <div class="mod"><a href="<?php echo mac_url('user/index'); ?>" ><i class="iconfont">&#xe62c;</i>会员</a></div>
            </div>
            <span class="searchstart-on"><i class="iconfont">&#xe61e;</i></span><span class="searchstart-off"><i class="iconfont">&#xe622;</i></span>
            <form name="formsearch" class="searchform" action="<?php echo mac_url('vod/search'); ?>"  autocomplete="off">
                <input class="ipt" placeholder="输入影片片名或演员名称。" name="wd" type="text" id="wd" required="">
                <input type="submit" id="searchbutton" value="" class="hide"><a href="javascript:" class="ibtn" title="搜索" onClick="$('.searchform').submit();"><i class="iconfont">&#xe61e;</i> 搜索</a>
            </form>
        </div>
    </header>
    <div class="icon">
        <section class="iplaytop">
            <div class="container">
                <div class="col-l">
                    <div class="mtips"><i class="iconfont">&#xe630;</i>
                        <div class="mtxt">正在播放：<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; if($obj['type_1']['type_id'] != ''): ?> <?php echo $obj['type_1']['type_name']; else: ?> <?php echo $obj['type']['type_name']; endif; ?></div><i class="iconfont" onclick="closeTips()">&#xe622;</i></div>
                    <div class="iplays">
					<?php echo $player_data; ?>
					<?php echo $player_js; ?>
					</div>
                </div>
                <div class="col-r">
                    <div class="iptit">
                        <h3><?php echo $obj['vod_name']; if($obj['type_1']['type_id'] != ''): ?> 【<?php echo $obj['type_1']['type_name']; ?>】<?php else: ?> 【<?php echo $obj['type']['type_name']; ?>】<?php endif; ?></h3>
						<p><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></p>
                    </div>
                    <div class="fjcon">
                        <div class="fjtop clearfix"><?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?><a href="javascript:zush(<?php echo $key; ?>);" id="zush_<?php echo $key; ?>" class="fjtab <?php if($param['sid'] == $key): ?>cur<?php endif; ?>"><?php echo $vo['player_info']['show']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
                        <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                        <div class="xjs xjs_<?php echo $key; ?>" <?php if($param['sid'] == $vo['sid']): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>

                            <div class="xjn">
                                <ul class="xjn_ul play-list">
                                    <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
                                    <li class="xjn_li zhwli_<?php echo $key; ?>"><a class="x_n <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>cur<?php endif; ?>" href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                </ul>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <script>
                            function zush(i) {
                                $('.xjs').hide();
                                $('.xjs_' + i).show();
                                $('.fjtab').removeClass('cur');
                                $('#zush_' + i).addClass('cur')
                            }
                    </script>
                </div>
            </div>
			</div>
        </section>
		</div>
        <section class="describe">
            <div class="video-intro container">
                <div class="video-title">
                    <h1><?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></h1></div>
                <div class="video-tags"><span class="tags"><?php if($obj['type_1']['type_id'] != ''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?></span></div>
                <div class="clearfix"></div>
                <p class="hoster"><span>导演：<?php echo mac_url_create($obj['vod_director'],'director'); ?></span><span style="padding-left: 30px">主演：<?php echo mac_url_create($obj['vod_actor'],'actor'); ?></span></p>
                <div class="infor"><?php echo $obj['vod_blurb']; ?></div>
            </div>
        </section>
    <section class="idetail container">
        <div class="col-l">
            <div class="tv-hd v-border">
                <h2><span>剧情介绍</span></h2>
            </div>
            <div class="tv-bd">
                <div class="infor_intro"><?php echo $obj['vod_content']; ?></div>
            </div>
            <div class="tv-hd v-border">
                <h2><span>喜欢看【<?php echo $obj['vod_name']; ?>】的人也喜欢</span></h2>
            </div>
            <div class="tv-bd">
				<ul class="tv-list tv-hotlist"><?php $__TAG__ = '{"num":"12","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>">
    <div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
<?php echo $vo['vod_remarks']; else: ?>
<?php echo $vo['vod_state']; endif; break; case "2": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo['vod_serial']; ?>期
<?php endif; break; case "4": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div> <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
</div></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
            </div>
            <div class="tv-hd v-border">
                <h2><span>影片评论</span></h2><span class="s_num">共有<em><?php echo intval($__PAGING__['record_total']); ?></em>条影评</span>
            </div>
	<div class="mac_comment" id="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
        </div>
        <div class="col-r">
            <div class="tv-hd">
                <h2>本周 • 热播榜</h2></div>
            <div class="tv-bd">
                    <ul class="v-rank clearfix">
					<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
<?php echo $vo['vod_remarks']; else: ?>
<?php echo $vo['vod_state']; endif; break; case "2": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo['vod_serial']; ?>期
<?php endif; break; case "4": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
            </div>
            <div class="tv-hd">
                <h2>本月 • 热播榜</h2></div>
            <div class="tv-bd">
                    <ul class="v-rank clearfix">
					<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
<?php echo $vo['vod_remarks']; else: ?>
<?php echo $vo['vod_state']; endif; break; case "2": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo['vod_serial']; ?>期
<?php endif; break; case "4": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
            </div>
        </div>
    </section>
<span style="display:none" class="mac_ulog_set" alt="设置播放页浏览记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
<span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>" data-pic="<?php echo mac_url_img(mac_url_img($obj['vod_pic'])); ?>"></span>
<!-- 页脚 -->
    <footer class="ifoot">
        <nav class="bnav">
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>">热播<?php echo $vo['type_name']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="<?php echo mac_url('gbook/index'); ?>" title="留言求片">留言求片</a>
		</nav>
   <!--     <p>免责声明:本网站所有内容均系收集于各大网站，本站只提供WEB页面服务，并不提供影片资源储存也不参与录制与上传，若本站收录内容无意侵犯了贵公司版权，请给网页底部邮箱地址来信，我们会及时处理和回复，谢谢合作。</p>  
        <p class="en"><?php echo $maccms['site_url']; ?>站长邮箱:<?php echo $maccms['site_email']; ?></p>     !-->
		<p class="en"><?php echo $maccms['site_tj']; ?></p>
    </footer>
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?b9eab448a97a1a97ca52fb538650280b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<span style="display: none;" class="mac_timming" data-file="" ></span>
    <script src="<?php echo $maccms['path_tpl']; ?>js/lazyload.min.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/app.js"></script>
</body>
</html>