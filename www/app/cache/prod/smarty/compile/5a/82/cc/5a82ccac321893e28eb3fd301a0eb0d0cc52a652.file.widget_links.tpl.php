<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:43
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810190407595cfcff1de6a0-61459222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a82ccac321893e28eb3fd301a0eb0d0cc52a652' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_links.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810190407595cfcff1de6a0-61459222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfcff204160_20762101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfcff204160_20762101')) {function content_595cfcff204160_20762101($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
<div class="widget-links block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addition_cls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['stylecls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
	<div class="widget-inner block_content">	
		<div id="tabs<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="panel-group">
			
			<ul class="nav-links">
			  <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
			  <li ><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ac']->value['link'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ac']->value['text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
			  <?php } ?>
			</ul>

	</div></div>
</div>
<?php }?>


<?php }} ?>
