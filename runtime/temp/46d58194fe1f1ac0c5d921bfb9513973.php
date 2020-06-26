<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/maccms/application/admin/view/extend/pay/codepay.html";i:1579008638;}*/ ?>
<div class="layui-tab-item">

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>码支付设置 <a target="_blank" href="https://codepay.fateqq.com/i/40625" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
    </fieldset>

    <div class="layui-form-item">
        <label class="layui-form-label">支付商家编号：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[codepay][appid]" placeholder="" value="<?php echo $config['pay']['codepay']['appid']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">支付商家密钥：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[codepay][appkey]" placeholder="" value="<?php echo $config['pay']['codepay']['appkey']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">商家收款平台：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[codepay][type]" placeholder="" value="<?php echo $config['pay']['codepay']['type']; ?>" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">1：支付宝；2：QQ钱包；3：微信（多个用逗号分隔）</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">收款通知类型：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[codepay][act]" placeholder="" value="<?php echo $config['pay']['codepay']['act']; ?>" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">0表示及时到账 1则为商家代收款</div>
    </div>
</div>