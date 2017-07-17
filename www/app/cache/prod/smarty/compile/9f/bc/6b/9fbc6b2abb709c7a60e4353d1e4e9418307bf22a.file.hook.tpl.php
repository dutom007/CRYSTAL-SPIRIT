<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 19:08:42
         compiled from "/home/crystalsdx/www/themes/foliage/modules/ptsmaplocator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122498527595d717a71b0a3-55187436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbc6b2abb709c7a60e4353d1e4e9418307bf22a' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/ptsmaplocator/views/templates/hook/hook.tpl',
      1 => 1491211316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122498527595d717a71b0a3-55187436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pts_description' => 0,
    'mod_id' => 0,
    'pts_stores' => 0,
    'i' => 0,
    'location' => 0,
    'markers' => 0,
    'pts_height' => 0,
    'store_json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595d717a77af04_35887130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d717a77af04_35887130')) {function content_595d717a77af04_35887130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/crystalsdx/www/vendor/prestashop/smarty/plugins/function.math.php';
?>
<div class="box ptsmaplocator">
	<div class="page-header">
		<h1 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Map Locator','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h1>
	</div>
    
    <div class="box-content">
        <?php if (!empty($_smarty_tpl->tpl_vars['pts_description']->value)) {?>
            <div class="description">
            <?php echo $_smarty_tpl->tpl_vars['pts_description']->value;?>
</div>
        <?php }?>
        <div class="maplocator">
            <div id="directory-main-bar-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['mod_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="gmap"></div>
        </div>
        
        <div class="box-shop">
            <?php if (isset($_smarty_tpl->tpl_vars['pts_stores']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pts_stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['location']->key;
?>
                    <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['i']->value,'y'=>1,'assign'=>'i'),$_smarty_tpl);?>

                    <div class="item-location" id="location-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value["id_store"],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-id="shop<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-lat="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value["latitude"],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-lon="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value["longitude"],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                        <div class="shop-title">
                            <i class="icon-map-marker"></i><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                        </div>
                        <div class="shop-address"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['location']->value['address1'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>
                    </div>
                <?php } ?>
            <?php }?>
        </div>
    </div>
</div>

<script type="text/javascript">
var markers = <?php echo $_smarty_tpl->tpl_vars['markers']->value;?>
;
var pts_height = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pts_height']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

var mod_id = <?php echo $_smarty_tpl->tpl_vars['mod_id']->value;?>
;
var store_json = <?php echo $_smarty_tpl->tpl_vars['store_json']->value;?>
;
</script>
<?php }} ?>
