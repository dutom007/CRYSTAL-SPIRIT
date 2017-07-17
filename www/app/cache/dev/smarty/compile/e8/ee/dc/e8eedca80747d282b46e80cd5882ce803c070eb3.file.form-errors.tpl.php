<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 08:27:59
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71793528359199ecf067846-32730047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8eedca80747d282b46e80cd5882ce803c070eb3' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/form-errors.tpl',
      1 => 1491211317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71793528359199ecf067846-32730047',
  'function' => 
  array (
  ),
  'unifunc' => 'content_59199ecf06c9c4_59818609',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59199ecf06c9c4_59818609')) {function content_59199ecf06c9c4_59818609($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
