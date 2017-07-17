<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 08:49:00
         compiled from "module:paypal/views/templates/front/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17710931165919a3bc48f218-23067321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffea87e3807e697178ee8347672b825b80d76d45' => 
    array (
      0 => 'module:paypal/views/templates/front/payment_infos.tpl',
      1 => 1490797492,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '17710931165919a3bc48f218-23067321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a3bc4946b7_96728757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a3bc4946b7_96728757')) {function content_5919a3bc4946b7_96728757($_smarty_tpl) {?><!-- begin /home/crystalsdx/www/modules/paypal/views/templates/front/payment_infos.tpl -->

<p><?php echo smartyTranslate(array('s'=>'Benefit from many PayPal advantages such as :','mod'=>'paypal'),$_smarty_tpl);?>
</p>
<p><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/protected.png" style="height: 43px; padding-right: 10px;"><?php echo smartyTranslate(array('s'=>'Your orders are protected','mod'=>'paypal'),$_smarty_tpl);?>
*</p>
<p><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/refund.png" style=" height: 43px; padding-right: 10px;"><?php echo smartyTranslate(array('s'=>'Return shipping refunded','mod'=>'paypal'),$_smarty_tpl);?>
*</p>
<p><i><?php echo smartyTranslate(array('s'=>'* See conditions on PayPal website','mod'=>'paypal'),$_smarty_tpl);?>
</i></p><!-- end /home/crystalsdx/www/modules/paypal/views/templates/front/payment_infos.tpl --><?php }} ?>
