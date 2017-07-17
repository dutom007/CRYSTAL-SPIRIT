<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:08:53
         compiled from "/home/crystalsdx/www/modules/pspagebuilder/views/templates/admin/pspagebuilder_footer/widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157565871859197e35a6e375-32912808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6559b6b9c5b02a35d8f8dc70a2a08d31769a87f7' => 
    array (
      0 => '/home/crystalsdx/www/modules/pspagebuilder/views/templates/admin/pspagebuilder_footer/widgets.tpl',
      1 => 1491211280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157565871859197e35a6e375-32912808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'widgets' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197e35a91a97_30906736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197e35a91a97_30906736')) {function content_59197e35a91a97_30906736($_smarty_tpl) {?>
<div class="wpo-widgets clearfix">
	
	<div class="widgets-filter">
		<div class="form-group has-success clearfix">
			<label class="col-lg-2 control-label" for="searchwidgets"><?php echo smartyTranslate(array('s'=>'Filter By Name','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</label>
			<div class="col-lg-10">
				<input type="text" id="searchwidgets"  name="searchwidgets">
			</div>
		</div>

		<div class="form-group clearfix">
			<label class="col-lg-2 control-label" for="searchwidgets"><?php echo smartyTranslate(array('s'=>'Filter By Group','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</label>
			<div class="col-lg-10" id="filterbygroups">
				 <ul class="nav nav-pills">
				 	<li class="filter-option" data-option="all">
						<a href="#"><?php echo smartyTranslate(array('s'=>'All','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<span class="badge"></span></a>
					</li>

				 	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<li class="filter-option" data-option="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['key'],'html','UTF-8');?>
">
						<a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['group'],'html','UTF-8');?>
<span class="badge"></span></a>
					</li>
			 		<?php } ?>
				</ul>
	      </div>  
		</div>
 	</div>

	<ul>
		<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
		<li class="wpo-wg-button" data-group="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget']->value['group'],'html','UTF-8');?>
">
			<?php echo $_smarty_tpl->tpl_vars['widget']->value['button'];?>

		</li>
		<?php } ?>
 	</ul>
 	<div class="clearfix"></div>
</div>

 <?php }} ?>
