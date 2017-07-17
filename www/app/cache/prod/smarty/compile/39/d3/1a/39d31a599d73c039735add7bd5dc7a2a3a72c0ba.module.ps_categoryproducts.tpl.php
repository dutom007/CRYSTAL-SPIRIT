<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:44
         compiled from "module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:395621189595cfd0089e587-97857424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl',
      1 => 1495635120,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '395621189595cfd0089e587-97857424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfd008aba13_61071500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfd008aba13_61071500')) {function content_595cfd008aba13_61071500($_smarty_tpl) {?>
<div class="block ps_categoryproducts clearfix">
  <h4 class="title_block">
    <?php echo smartyTranslate(array('s'=>'You May Also Like..','d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl);?>

    <!-- <?php if (count($_smarty_tpl->tpl_vars['products']->value)==1) {?>
      <?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl);?>

    <?php }?> -->
  </h4>
  <div class="block_content">
      <?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable(4, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['nbr_desktops'] = new Smarty_variable(4, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['nbr_tablets'] = new Smarty_variable(2, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['nbr_mobile'] = new Smarty_variable(1, null, 0);?>
      <?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?><?php echo (string)$_smarty_tpl->tpl_vars['product_style']->value;?><?php } else { ?><?php echo "style1";?><?php }?><?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("sub/products_module.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>"products-block grid ".$_tmp1), 0);?>

  </div>
</section>
<?php }} ?>
