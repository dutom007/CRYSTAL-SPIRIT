<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 10:52:12
         compiled from "/home/crystalsdx/www/admin13497682/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534036516591c639cefd8c4-41518075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77298a7478337b959b89199e7cd10d31fdcd91f1' => 
    array (
      0 => '/home/crystalsdx/www/admin13497682/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1493025722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534036516591c639cefd8c4-41518075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591c639ceffee6_52455827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c639ceffee6_52455827')) {function content_591c639ceffee6_52455827($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
