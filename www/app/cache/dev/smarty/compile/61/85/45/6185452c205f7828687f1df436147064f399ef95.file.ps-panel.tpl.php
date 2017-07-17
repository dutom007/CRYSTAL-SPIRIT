<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11142679525919a934449dd2-05453621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6185452c205f7828687f1df436147064f399ef95' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-panel.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11142679525919a934449dd2-05453621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a934457b01_54451873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a934457b01_54451873')) {function content_5919a934457b01_54451873($_smarty_tpl) {?>

<script type="riot/tag">
	<ps-panel-footer>
		<div class="panel-footer">
			<yield/>
		</div>

		<style scoped>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				.btn.pull-right {
					margin-left: 5px;
				}
				.btn.pull-left {
					margin-right: 5px;
				}

				a.btn i {
					display: block;
					width: 30px;
					height: 30px;
					margin: 0 auto;
					font-size: 28px;
					background: transparent;
					background-size: 26px;
					background-position: center
				}

			<?php } else { ?>

				.panel-footer {
					margin: 20px -13px 0px;
					background: rgba(182, 182, 182, 0.1);
					display: block;
					border-top: 1px solid rgba(160, 160, 160, 0.19);
					height: 80px;
					position: relative;
					bottom: -13px;
				}

				.btn {
					margin: 0;
					background: none;
					border: none;
					padding: 0 20px;
					outline: none;
					cursor: pointer;
					font-size: 11px;
					text-align: center;
					height: 100%;
					line-height: normal;
				}

				.btn.pull-right {
					border-left: 1px solid rgba(160, 160, 160, 0.19);
					float: right;
				}

				.btn.pull-left {
					border-right: 1px solid rgba(160, 160, 160, 0.19);
					float: left;
				}

				.btn:hover {
					background: rgba(182, 182, 182, 0.1);
				}

				.btn img {
					display: block;
					padding: 0;
					margin-bottom: 5px;
					margin-left: auto;
					margin-right: auto;
				}

			<?php }?>

		</style>
	</ps-panel-footer>
</script>

<script type="riot/tag">
	<ps-panel-footer-submit>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<button type="submit" class="btn btn-default pull-{ opts.direction }" name="{ opts.name }">
				<i class="{ opts.icon }"></i> { opts.title }
			</button>

		<?php } else { ?>

			<button type="submit" class="btn pull-{ opts.direction }" name="{ opts.name }">
				<img src="{ opts.img }" /> { opts.title }
			</button>

		<?php }?>

	</ps-panel-footer-submit>
</script>

<script type="riot/tag">
	<ps-panel-footer-link>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<a class="btn btn-default pull-{ opts.direction }" href="{ opts.href }">
				<i class="{ opts.icon }"></i> { opts.title }
			</a>

		<?php } else { ?>

			<a class="btn pull-{ opts.direction }" href="{ opts.href }">
				<img src="{ opts.img }" /> { opts.title }
			</a>

			<style scoped>

				a img {
					margin-top: 15px;
				}

			</style>

		<?php }?>

	</ps-panel-footer-link>
</script>

<script type="riot/tag">
	<ps-panel>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="panel">
				<div class="panel-heading" if={ opts.icon || opts.header }>
						<i class="{ opts.icon }" if={ opts.icon }></i> { opts.header }
				</div>

				<yield/>

			</div>

		<?php } else { ?>

			<fieldset>
				<legend if={ opts.header }><img src="{ opts.img }" if={ opts.img }>{ opts.header }</legend>

				<yield/>

			</fieldset>

			<style scoped>

				fieldset {
					margin-bottom: 20px;
					margin-left: auto;
					margin-right: auto;
				}

			</style>

		<?php }?>

	</ps-panel>
</script>
<?php }} ?>
