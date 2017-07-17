<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 08:49:00
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12483787335919a3bc267c58-95451115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a4f5f4c81aba42eb0f5a80658da043ab924b18' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1491211522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12483787335919a3bc267c58-95451115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a3bc295501_67087895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a3bc295501_67087895')) {function content_5919a3bc295501_67087895($_smarty_tpl) {?>
<section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
  <h1 class="step-title h3">
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

  </h1>
</section>
<?php }} ?>
