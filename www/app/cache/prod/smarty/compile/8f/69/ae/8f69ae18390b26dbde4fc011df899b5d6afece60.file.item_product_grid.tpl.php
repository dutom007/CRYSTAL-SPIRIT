<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 12:35:35
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/sub/item_product_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216896973595d15577e2b51-39585932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f69ae18390b26dbde4fc011df899b5d6afece60' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/sub/item_product_grid.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216896973595d15577e2b51-39585932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_style' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595d1557804e47_91845253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d1557804e47_91845253')) {function content_595d1557804e47_91845253($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['product_style']->value)) {?>
  <?php $_smarty_tpl->tpl_vars['product_style'] = new Smarty_variable(Configuration::get('PTS_CP_PRODUCT_STYLE'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("sub/product/".((string)$_smarty_tpl->tpl_vars['product_style']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'class'=>''), 0);?>

<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("sub/product/style1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'class'=>''), 0);?>

<?php }?><?php }} ?>
