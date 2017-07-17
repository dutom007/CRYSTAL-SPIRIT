<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19974540055919a9344cfa41-03233959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0860aadea58c2aba0d45ab464bd4715586a395' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-tabs.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19974540055919a9344cfa41-03233959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a9344dd717_09912062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a9344dd717_09912062')) {function content_5919a9344dd717_09912062($_smarty_tpl) {?>

<script type="riot/tag">

	<ps-tab>

		<ps-panel>
			<yield/>
		</ps-panel>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<style scoped>

				.panel {
				  border-top-left-radius: 0 !important;
					border-top-right-radius: 0 !important;
				}

			</style>

		<?php } else { ?>

			<style scoped>

				:scope {
					display: none;
				}

				:scope.active {
					display: block;
				}

			</style>

		<?php }?>

		$(this.root).addClass('tab-pane')
		if (this.parent && this.parent.opts.position == 'left')
		{
			this.tags['ps-panel'].opts.header = opts.title
			this.tags['ps-panel'].opts.icon = opts.icon
			this.tags['ps-panel'].opts.img = opts.img
		}

	</ps-tab>

</script>

<script type="riot/tag">

  <ps-tabs>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="row">

				<div class="{ col-md-2: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
					<ul class="{ nav: true, list-group: this.opts.position == 'left', nav-tabs: this.opts.position != 'left' }" id="{ this.opts.id }">
						<li id="li_{ tab.opts.id }" class="{ list-group-item: this.parent.opts.position == 'left', active: tab.opts.active }" each={ tab in this.tags['ps-tab'] }>
							<a href="#{ tab.opts.id }" onclick="{ tab.opts.onclick }('{ tab.opts.id }')" data-toggle="tab"><i class="{ tab.opts.icon }" if={ tab.opts.icon }></i> { tab.opts.title }</a>
						</li>
					</ul>
				</div>

				<div class="{ tab-content: true, col-md-10: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
					<yield/>
				</div>

				<div class="clearfix"></div>
			</div>

		<?php } else { ?>

			<div class="tabs-container">

				<ul class="{ tabs-navigation: true, tabs-navigation-left: this.opts.position == 'left', tabs-navigation-top: this.opts.position != 'left' }">
						<li each={ tab in this.tags['ps-tab'] } class={ active: tab.opts.active }>
							<a href="#{ tab.opts.id }" onclick={ changeTab }><img src="{ tab.opts.img }" if={ tab.opts.img } /> { tab.opts.title }</a>
						</li>
				</ul>

				<div class="{ tabs-content: true, tabs-content-left: this.opts.position == 'left', tabs-content-top: this.opts.position != 'left' }">
					<yield/>
				</div>

				<div class="clearfix"></div>

			</div>

		<?php }?>

		this.on('mount', function() {
			that = this
			that.tags['ps-tab'].forEach(function(elem) {
				if (elem.opts.active)
					$(elem.root).addClass('active')
			})
		})

		changeTab(event) {
			$(event.target).parents('ul.tabs-navigation').find('li.active').removeClass('active')
			$(event.target).parents('li').addClass('active')
			$(event.target).parents('.tabs-container').find('ps-tab.active').removeClass('active')
			var target = $(event.target).parents('li').find('a').attr('href')
			$(event.target).parents('.tabs-container').find('ps-tab'+target).addClass('active')
			return false
		}

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<style scoped>

				li.list-group-item {
					padding: 0 !important;
				}

				li.list-group-item a {
					color: #555;
				}

				li.list-group-item:hover {
					background-color: #f5f5f5;
				}

				li.list-group-item.active a {
					color: white;
				}

			</style>

		<?php } else { ?>

			<style scoped>

				.tabs-container {
					margin: 20px 0;
				}

				.tabs-content-left {
					margin-left: 200px;
				}

				.tabs-navigation li {
					background: #fafafa;
				}

				.tabs-navigation li:hover {
					background: #F1F3F9;
				}

				.tabs-navigation li a {
					color: #666;
					cursor: pointer;
					padding: 10px 15px;
					display: block;
					line-height: 18px;
				}

				.tabs-navigation li a img {
					margin-top: -4px;
					max-width: 16px;
					max-height: 16px;
				}

				.tabs-navigation li.active {
					background: #EBEDF4;
				}

				.tabs-navigation li.active a {
					color: black;
					font-weight: bold;
				}

				.tabs-navigation.tabs-navigation-top {
					margin-bottom: -1px;
				}

				.tabs-navigation.tabs-navigation-top li {
					border: 1px solid #CCCED7;
					border-right: none;
					display: inline-block;
				}

				.tabs-navigation.tabs-navigation-top li.active {
					border-bottom: 1px solid #EBEDF4;
				}

				.tabs-navigation.tabs-navigation-top li:last-child {
					border-right: 1px solid #CCCED7;
				}

				.tabs-navigation.tabs-navigation-left {
					float: left;
					border: 1px solid #CCCED7;
					width: 180px;
					margin-top: 11px;
				}

				.tabs-navigation.tabs-navigation-left li {
					border-bottom: 1px solid #CCCED7;
				}

				.tabs-navigation.tabs-navigation-left li:last-child {
					border-bottom: none;
				}

			</style>

		<?php }?>

  </ps-tabs>

</script><?php }} ?>
