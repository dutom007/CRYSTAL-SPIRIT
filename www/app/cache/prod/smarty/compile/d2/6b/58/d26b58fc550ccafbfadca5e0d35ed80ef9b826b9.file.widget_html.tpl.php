<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:43
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058478161595cfcff1912d3-36667548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26b58fc550ccafbfadca5e0d35ed80ef9b826b9' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_html.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058478161595cfcff1912d3-36667548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfcff1bbed8_96435545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfcff1bbed8_96435545')) {function content_595cfcff1bbed8_96435545($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addition_cls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['stylecls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
	<div class="widget-inner block_content">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
</div>
<?php }?><?php }} ?>
