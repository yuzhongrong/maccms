<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/maccms/application/admin/view/extend/pay/zhapay.html";i:1579008638;}*/ ?>
<div class="layui-tab-item">

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>幻兮支付设置 <a target="_blank" href="https://www.zhapay.com/ad_8rRGj4nN.html" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
    </fieldset>

    <div class="layui-form-item">
        <label class="layui-form-label">支付商家编号：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[zhapay][appid]" placeholder="" value="<?php echo $config['pay']['zhapay']['appid']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">支付商家密钥：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[zhapay][appkey]" placeholder="" value="<?php echo $config['pay']['zhapay']['appkey']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">商家收款平台：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[zhapay][type]" placeholder="" value="<?php echo $config['pay']['zhapay']['type']; ?>" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">1：微信；2：支付宝；（多个用逗号分隔）</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">收款通知类型：</label>
        <div class="layui-input-inline w400">
            <input type="text" name="pay[zhapay][act]" placeholder="" value="<?php echo $config['pay']['zhapay']['act']; ?>" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">2表示及时到账 1则为商家代收款</div>
    </div>
</div>