<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/www/wwwroot/maccms/application/admin/view/system/configpay.html";i:1579008638;s:59:"/www/wwwroot/maccms/application/admin/view/public/head.html";i:1579008638;s:59:"/www/wwwroot/maccms/application/admin/view/public/foot.html";i:1579008638;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1020">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1020">
    <script type="text/javascript" src="/static/js/jquery.js?v=1020"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1020"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>

<div class="page-container">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab" lay-filter="tb1">
            <ul class="layui-tab-title">
                <li class="layui-this" lay-id="configpay_1">在线支付设置</li>
                <li lay-id="configpay_2">卡密</li>
                <?php if(is_array($ext_list) || $ext_list instanceof \think\Collection || $ext_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ext_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li data-key="<?php echo $key; ?>" lay-id="configpay_<?php echo $i+2; ?>"><?php echo $vo; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>支付设置</legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">回调通知地址：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" readonly="readonly" value="<?php echo $http_type; ?><?php echo $config['site']['site_url']; ?>/index.php/payment/notify.html" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">支付接口通知回调地址</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">最小充值金额：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[min]" placeholder="单位RMB元，最低1元" value="<?php echo $config['pay']['min']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最小充值金额</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">兑换比例：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[scale]" placeholder="1元RMB兑换多少个积分" value="<?php echo $config['pay']['scale']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">1元人民币等于多少积分</div>
                    </div>
                </div>

                <div class="layui-tab-item ">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>卡密设置</legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">销售网址：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="pay[card][url]" placeholder="" value="<?php echo $config['pay']['card']['url']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">第三方卡密平台</div>
                    </div>
                </div>

                <?php echo $ext_html; ?>

            </div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript">
    layui.use(['element', 'form', 'layer'], function() {
        var element = layui.element
            ,form = layui.form
            , layer = layui.layer;


        element.on('tab(tb1)', function(){
            $.cookie('configpay_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('configpay_tab') !=null ) {
            element.tabChange('tb1', $.cookie('configpay_tab'));
        }

    });
</script>

</body>
</html>