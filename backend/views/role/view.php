<?php
/**
 * Created by PhpStorm.
 * User: ahanfeng
 * Date: 18-12-24
 * Time: 下午3:24
 */
use yii\helpers\Url;
?>
<div class="layui-form layui-row">
        <div class="layui-fluid">
            <blockquote class="layui-elem-quote">
                分配权限到角色:<?=$role_info['name']?>
            </blockquote>
            <blockquote class="layui-elem-quote layui-quote-nm">
                角色描述:  <?=$role_info['description']?>
            </blockquote>

            <div class="layui-row layui-col-space10">
                <div class="layui-col-md5">
                    <table class="layui-hide" id="left_tab" lay-filter="left"></table>
                </div>
                <div class="layui-col-md2 btn-height">
                    <div style="margin-bottom: 10px;">
                        <button class="layui-btn  layui-btn-disabled left-btn">
                            <i class="layui-icon layui-icon-forward"></i>
                        </button>
                    </div>
                    <div >
                        <button class="layui-btn layui-btn-disabled right-btn">
                            <i class="layui-icon layui-icon-back"></i>
                        </button>
                    </div>
                </div>
                <div class="layui-col-md5">
                    <table class="layui-hide" id="right_tab" lay-filter="right"></table>
                </div>
            </div>
        </div>
</div>
<script>
    const role_name='<?=$role_info['name']?>';
    const permissionAllUrl='<?=Url::to(['role/permission-all'])?>';
    const permissionAssUrl='<?=Url::to(['role/permission-ass'])?>';
    const permissionAssignUrl='<?=Url::to(['role/assign'])?>';
    const permissionRemoveUrl='<?=Url::to(['role/remove'])?>';
</script>
<?=$this->registerJsFile("@adminPageJs/role/view.js")?>