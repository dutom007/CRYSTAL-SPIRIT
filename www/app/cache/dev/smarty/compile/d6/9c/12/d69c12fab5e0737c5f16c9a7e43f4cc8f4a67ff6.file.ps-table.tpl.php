<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:987350945919a93448b0c0-57523105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69c12fab5e0737c5f16c9a7e43f4cc8f4a67ff6' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-table.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '987350945919a93448b0c0-57523105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a93449cf49_28765280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a93449cf49_28765280')) {function content_5919a93449cf49_28765280($_smarty_tpl) {?>

<script type="riot/tag">

	<ps-table>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<form method="post" method="post" class="form-horizontal clearfix">

				<input type="hidden" name="token" value="">

				<div class="panel col-lg-12">

					<div class="panel-heading">
						<i class="{ opts.icon }" if={ opts.icon }></i> { opts.header }
						<span class="badge">{ this.rows.length }</span>
						<span class="panel-heading-action" if={ this.top_actions }>
							<a class="list-toolbar-btn" href="{ this.base_action_url }&action={ elem.action }" title="{ elem.title }" each={ elem, index in this.top_actions }>
								<span data-toggle="tooltip" class="label-tooltip" data-original-title="{ elem.title }" data-html="true" data-placement="top">
									<i class="process-icon-new"></i>
								</span>
							</a>
						</span>
					</div>

					<div class="table-responsive-row clearfix">
						<table class="table">

							<thead>
								<tr class="nodrag nodrop">
									<th each={ elem, index in this.columns } class="{ this.columns_classes[this.columns.indexOf(elem)] }">
										<span class="title_box">
											{ elem.content }
										</span>
									</th>
									<th class="fixed-width-md"></th>
								</tr>
							</thead>

							<tbody>

								<tr class="odd" each={ row, i in this.rows }>
									<td each={ value, key in this.columns_keys } class="{ this.columns_classes[key] }">
										{ row[value] }
									</td>
									<td if={ this.primary_action }>
										<div class="btn-group-action">
											<div class="btn-group pull-right">
												<a href="{ this.base_action_url }&action={ this.primary_action.action }&{ this.identifier }={ row[this.identifier] }" title="{ this.primary_action.title }" class="edit btn btn-default">
													<i class="icon-{ this.primary_action.icon }"></i> { this.primary_action.title }
												</a>
												<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="icon-caret-down"></i>&nbsp;
												</button>
												<ul class="dropdown-menu" if={ this.secondary_actions }>
													<li each={ elem, index in this.secondary_actions }>
														<a href="{ this.base_action_url }&action={ elem.action }&{ this.identifier }={ row[this.identifier] }" title="{ elem.title }">
															<i class="icon-{ elem.icon }"></i> { elem.title }
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>

							</tbody>

						</table>
					</div>

				</div>

			</form>

		<?php } else { ?>

			<div class="toolbar-placeholder">
				<div class="toolbarBox toolbarHead">

					<ul class="cc_button" if={ this.top_actions }>
						<li each={ elem, index in this.top_actions }>
							<a class="toolbar_btn" href="{ this.base_action_url }&action={ elem.action }" title="{ elem.title }">
								<img src="{ elem.img }"/>
								<div>{ elem.title }</div>
							</a>
						</li>
					</ul>

					<div class="pageTitle">
						<h3>{ opts.header }</h3>
					</div>
				</div>
			</div>

			<form method="post" class="form">

				<table class="table_grid" name="list_table">
					<tbody>
						<tr>
							<td>
								<table class="table" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom:10px;">
									<thead>
										<tr class="nodrag nodrop" style="height: 40px">
											<th each={ elem, index in this.columns } class="{ this.columns_classes[this.columns.indexOf(elem)] }">
												<span class="title_box">
													{ elem.content }
												</span>
											</th>
											<th></th>
										</tr>
									</thead>

									<tbody>

										<tr class="row_hover" each={ row, i in this.rows }>
											<td each={ value, key in this.columns_keys } class="{ this.columns_classes[key] }">
												{ row[value] }
											</td>

											<td class="right" style="white-space: nowrap;" if={ this.primary_action }>
												<a href="{ this.base_action_url }&action={ this.primary_action.action }&{ this.identifier }={ row[this.identifier] }" title="{ this.primary_action.title }">
													<img src="{ this.primary_action.img }" alt="{ this.primary_action.title }">
												</a>

												<a each={ elem, index in this.secondary_actions } href="{ this.base_action_url }&action={ elem.action }&{ this.identifier }={ row[this.identifier] }" title="{ elem.title }">
													<img src="{ elem.img }" alt="{ elem.title }">
												</a>

											</td>

										</tr>

										<tr if={ this.rows.length == 0 }>
											<td class="center" colspan="{ this.columns.length + 1 }">{ this.opts.noItemsText }</td>
										</tr>

									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>

			</form>

		<?php }?>

		<style scoped>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value=='1.5') {?>

				.help-context-AdminModules {
					display: none !important;
				}

				> .toolbar-placeholder {
					margin-top: 20px;
				}

				> .toolbar-placeholder .pageTitle h3 {
					font-weight: normal;
				}

				> form {
					margin-bottom: 15px;
				}

			<?php }?>

		</style>

		content = JSON.parse(this.root.getAttribute('content'))

		this.columns = content.columns
		this.rows = content.rows

		this.columns_classes = []
		this.columns_keys = []

		for (var i in this.columns) {
			this.columns_classes.push(this.columns[i].center == true ? 'center' : '')
			this.columns_keys.push(this.columns[i].key)
		}

		this.base_action_url = currentIndex + "&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(Tools::getAdminTokenLite(Context::getContext()->controller->controller_name),'htmlall','UTF-8');?>
&" + jQuery.param(content.url_params)

		this.primary_action = content.rows_actions.slice(0, 1)[0]
		this.secondary_actions = content.rows_actions.slice(1)

		this.top_actions = content.top_actions

		this.identifier = content.identifier

	</ps-table>

</script>
<?php }} ?>
