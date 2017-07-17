<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:11
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_producttabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191058864559197d1b1c2991-76877948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa39b863ebba13a20ae1de53a770296055cf9c8' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_producttabs.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191058864559197d1b1c2991-76877948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'producttabs' => 0,
    'addition_cls' => 0,
    'ptab' => 0,
    'display_mode' => 0,
    'items_owl_carousel_tpl' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1b1d95b7_46846658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1b1d95b7_46846658')) {function content_59197d1b1d95b7_46846658($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['producttabs']->value)) {?>
<div class="widget-producttabs block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addition_cls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
 
	<div class="widget-inner  pts-tab clearfix">
		<ul  class="nav nav-tabs clearfix">
		<?php  $_smarty_tpl->tpl_vars['ptab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ptab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ptab']->key => $_smarty_tpl->tpl_vars['ptab']->value) {
$_smarty_tpl->tpl_vars['ptab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']++;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['ptab']->value['products'])) {?>
			<li class="nav-item"><a data-toggle="tab" href="#tab-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ptab']->value['key'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ptab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
			<?php }?>
		<?php } ?>
		</ul>
		<div class="tab-content">
		<?php  $_smarty_tpl->tpl_vars['ptab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ptab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ptab']->key => $_smarty_tpl->tpl_vars['ptab']->value) {
$_smarty_tpl->tpl_vars['ptab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myproducttabs']['index']++;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['ptab']->value['products'])) {?>
			<div id="tab-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ptab']->value['key'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="producttab-content tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myproducttabs']['index']==0) {?>active<?php }?>">
				<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['ptab']->value['key'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_owl_carousel_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['ptab']->value['products']), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['ptab']->value['products']), 0);?>

				<?php }?>
			</div>
			<?php }?>
		<?php } ?>
		</div>
	</div>
</div>
<?php }?> <?php }} ?>
