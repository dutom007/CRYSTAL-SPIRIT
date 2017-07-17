<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 05:21:02
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/listing/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1856505200596346fe1a9b10-51232904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe27660104df0775b0185b43cc86d66f7e4a5f3' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/catalog/listing/search.tpl',
      1 => 1491211316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856505200596346fe1a9b10-51232904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbItemsPerLine' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596346fe39ed36_87899902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596346fe39ed36_87899902')) {function content_596346fe39ed36_87899902($_smarty_tpl) {?>
 <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('catalog/listing/product-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value), 0);?>

<?php }} ?>
