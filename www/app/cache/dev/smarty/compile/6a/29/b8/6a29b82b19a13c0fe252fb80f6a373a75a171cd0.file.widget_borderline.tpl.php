<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:08
         compiled from "modules/pspagebuilder/views/templates/front/widgets/widget_borderline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16360262959197d18843824-57825071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a29b82b19a13c0fe252fb80f6a373a75a171cd0' => 
    array (
      0 => 'modules/pspagebuilder/views/templates/front/widgets/widget_borderline.tpl',
      1 => 1491211281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16360262959197d18843824-57825071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'border_width' => 0,
    'border_style' => 0,
    'border_color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1884dd26_44454840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1884dd26_44454840')) {function content_59197d1884dd26_44454840($_smarty_tpl) {?>

<div class=" <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addition_cls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['stylecls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
	<div class="widget-inner block_content">	
		<div style="border-top: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['border_width']->value, ENT_QUOTES, 'UTF-8');?>
px <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['border_style']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['border_color']->value, ENT_QUOTES, 'UTF-8');?>
; height: 0; width: 100%;">&nbsp;</div>
	</div>
</div>



<?php }} ?>
