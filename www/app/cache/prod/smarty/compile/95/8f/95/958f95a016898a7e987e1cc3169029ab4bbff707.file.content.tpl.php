<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:52:26
         compiled from "/home/crystalsdx/www/admin13497682/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943830029595cfd2a691922-73116076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '958f95a016898a7e987e1cc3169029ab4bbff707' => 
    array (
      0 => '/home/crystalsdx/www/admin13497682/themes/default/template/content.tpl',
      1 => 1493025721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1943830029595cfd2a691922-73116076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfd2a6d1285_46071266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfd2a6d1285_46071266')) {function content_595cfd2a6d1285_46071266($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
