<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:09
         compiled from "/home/crystalsdx/www/admin13497682/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9659629859197d194493a2-14888091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '9659629859197d194493a2-14888091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1944c964_28366246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1944c964_28366246')) {function content_59197d1944c964_28366246($_smarty_tpl) {?>
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
