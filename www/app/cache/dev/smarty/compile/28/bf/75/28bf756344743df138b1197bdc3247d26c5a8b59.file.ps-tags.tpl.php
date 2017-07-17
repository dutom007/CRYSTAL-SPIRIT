<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13599715305919a934505c38-79097476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bf756344743df138b1197bdc3247d26c5a8b59' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-tags.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13599715305919a934505c38-79097476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a93450eec1_90491722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a93450eec1_90491722')) {function content_5919a93450eec1_90491722($_smarty_tpl) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['tags']->value)||!is_array($_smarty_tpl->tpl_vars['tags']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable(array('tabs','panel','form','alert','table'), null, 0);?>
<?php }?>

<script type="text/javascript">
	var color_picker = false;
</script>

<?php $_smarty_tpl->tpl_vars["ps_version"] = new Smarty_variable(sprintf("%.1f",@constant('_PS_VERSION_')), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
	<?php echo $_smarty_tpl->getSubTemplate ("./ps-".((string)$_smarty_tpl->tpl_vars['tag']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } ?>

<script type="riot/tag">
	<raw>
		<span></span>

		this.root.innerHTML = opts.content
	</raw>
</script>

<script type="text/javascript">
	riot.mount('*');
</script><?php }} ?>
