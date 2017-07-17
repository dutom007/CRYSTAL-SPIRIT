<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:08
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118233528659197d188a2df4-35739615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912abe0d766e85a1b018b815bcbf2ed1b117be9a' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_image.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118233528659197d188a2df4-35739615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbnailurl' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'animation' => 0,
    'widget_heading' => 0,
    'link_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d188b1d07_93593247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d188b1d07_93593247')) {function content_59197d188b1d07_93593247($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['thumbnailurl']->value)) {?>
<div class="widget-images block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addition_cls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['stylecls']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['animation']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
	<div class="widget-inner block_content clearfix">
		 <div class="image-item">
			 	<a href="<?php if ($_smarty_tpl->tpl_vars['link_url']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>" class="pts-btnlink img-animation" title="<?php echo smartyTranslate(array('s'=>'Large Image','d'=>'Shop.Theme'),$_smarty_tpl);?>
">
			 		<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['thumbnailurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="" />
			 	</a>
		 </div>
	</div>
</div>
<?php }?> <?php }} ?>
