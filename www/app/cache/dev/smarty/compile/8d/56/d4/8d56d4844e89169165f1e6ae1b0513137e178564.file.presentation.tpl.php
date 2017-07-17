<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/presentation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4825789515919a934238f93-08808228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d56d4844e89169165f1e6ae1b0513137e178564' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/presentation.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4825789515919a934238f93-08808228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'displayname' => 0,
    'version' => 0,
    'iso_code' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a93424d2f6_29003482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a93424d2f6_29003482')) {function content_5919a93424d2f6_29003482($_smarty_tpl) {?>

<?php if (isset($_GET['tab'])) {?>
<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8');?>
logo.png"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['displayname']->value,'htmlall','UTF-8');?>
 (v. <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['version']->value,'htmlall','UTF-8');?>
) <?php echo smartyTranslate(array('s'=>'by','mod'=>'checkvat'),$_smarty_tpl);?>
 MassonVincent</h1>
<a href="http://addons.prestashop.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'htmlall','UTF-8');?>
/ratings.php" target="_blank" style="float:right;margin-right:100px;">
<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/rating.png" style="margin-right:3px" title="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/rating.png" style="margin-right:3px" title="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/rating.png" style="margin-right:3px" title="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/rating.png" style="margin-right:3px" title="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/rating.png" style="margin-right:3px" title="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Evaluation','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
</a>
<p><b><?php echo smartyTranslate(array('s'=>'This module allows you to change the customer group manually or automatically if the customers have a VAT number.','mod'=>'checkvat'),$_smarty_tpl);?>
</b></p>
<br/><br/>
<?php }?><?php }} ?>
