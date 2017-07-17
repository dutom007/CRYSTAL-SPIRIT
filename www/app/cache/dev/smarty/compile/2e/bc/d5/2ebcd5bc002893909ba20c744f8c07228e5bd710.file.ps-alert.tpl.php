<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5621587455919a93438dd45-51535865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebcd5bc002893909ba20c744f8c07228e5bd710' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-alert.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5621587455919a93438dd45-51535865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a9343996c2_58167502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a9343996c2_58167502')) {function content_5919a9343996c2_58167502($_smarty_tpl) {?>

<script type="riot/tag">
	<ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="alert { opts['alertClass'] }">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<yield/>
			</div>

		<?php } else { ?>

			<div class="{ opts['alertClass'] }">
				<yield/>
				<img class="close" alt="X" src="../img/admin/close.png" onclick={ hide }>
			</div>

			<style scoped>

				div {
					position: relative;
					padding-right: 25px !important;
				}

				img.close {
					margin: 0 !important;
					position: absolute;
					right: 10px;
					top: 15px;
					cursor: pointer;
				}

			</style>

			hide(e) {
				$(e.target).parent().hide()
			}

		<?php }?>

	</ps-alert>
</script>


<script type="riot/tag">
	<ps-alert-success>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>conf<?php } else { ?>alert alert-success<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-success>
</script>

<script type="riot/tag">
	<ps-alert-error>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>error<?php } else { ?>alert alert-danger<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-error>
</script>

<script type="riot/tag">
	<ps-alert-warn>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>warn<?php } else { ?>alert alert-warning<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-warn>
</script>

<script type="riot/tag">
	<ps-alert-hint>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>hint<?php } else { ?>alert alert-info<?php }?>">
			<yield/>
		</ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>

			<style scoped>
				.hint {
					display: block;
					margin: 0 0 10px 0;
				}
			</style>

		<?php }?>

	</ps-alert-hint>
</script><?php }} ?>
