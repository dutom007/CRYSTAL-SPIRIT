<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:08
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21749684459197d18944cb1-68961909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e44eae69b45ec15b25c2e7a46efd59e5489cda' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21749684459197d18944cb1-68961909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'time' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1894f6a3_08295534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1894f6a3_08295534')) {function content_59197d1894f6a3_08295534($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['ime'] = new Smarty_variable(time(), null, 0);?>
<div id="pts<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['prefix']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['time']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['prefix']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 clearfix">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['layout']->value), 0);?>

</div><?php }} ?>
