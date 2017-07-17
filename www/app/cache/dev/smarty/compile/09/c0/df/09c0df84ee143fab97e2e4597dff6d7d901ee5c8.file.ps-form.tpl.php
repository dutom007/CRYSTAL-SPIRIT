<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2560058935919a9343d20e3-72890361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c0df84ee143fab97e2e4597dff6d7d901ee5c8' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/ps-form.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2560058935919a9343d20e3-72890361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a934413024_57112933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a934413024_57112933')) {function content_5919a934413024_57112933($_smarty_tpl) {?>

<script type="riot/tag">
	<ps-form-group>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="form-group">
				<label class="control-label col-lg-3 { opts.required == 'true' ? 'required' : '' }">
					<span class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="{ opts.hint }" if={ opts.hint }>{ opts.label }</span>
					<span if={ !opts.hint }>{ opts.label }</span>
				</label>
				<div class="col-lg-9"><yield/></div>
				<div class="col-lg-9 col-lg-offset-3"><div class="help-block" if={ opts.help }><raw content="{ opts.help }"/></div></div>
			</div>

		<?php } else { ?>

			<div style="clear: both; padding-top:15px;">

				<label class="conf_title"><sup if={ opts.required }>*&nbsp;</sup>{ opts.label }</label>
				<div class="margin-form">
					<yield/>
					<p class="preference_description" if={ opts.help }><raw content="{ opts.help }"/></p>
				</div>
			</div>

		<?php }?>

	</ps-form-group>
</script>

<script type="riot/tag">
	<ps-input-text-core>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

					<div class="{ opts.prefix || opts.suffix ? 'input-group input ' : '' }{ opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : '' }">
						<span class="input-group-addon" if={ opts.prefix }>{ opts.prefix}</span>
						<input id="{ opts.id_input }" type="text" name="{ input_name }" value="{ opts.value }"
							class="input { opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : '' }"
							placeholder="{ opts.placeholder }" required="{ opts.requiredInput == 'true' }"
							onkeyup="{ opts.onkeyup }({ this.parent.opts.idLang })" onClick="{ opts.onclick }({ this.parent.opts.idLang })">
						<span class="input-group-addon" if={ opts.suffix }>{ opts.suffix}</span>
					</div>

			<?php } else { ?>

				<span if={ opts.prefix }>{ opts.prefix }&nbsp;</span><input type="text" size="{ opts.size }" name="{ input_name }" value="{ opts.value }" placeholder="{ opts.placeholder }" required="{ opts.requiredInput == 'true' }"><span if={ opts.suffix }>&nbsp;{ opts.suffix }</span>

			<?php }?>

		// Get ps-input-text-lang name if needed
		if (this.opts.name)
			this.input_name = this.opts.name
		else
			this.input_name = this.parent.opts.name

		this.opts = this.parent.opts

	</ps-input-text-core>
</script>

<script type="riot/tag">
	<ps-input-text>

		<ps-form-group>

			<ps-input-text-core></ps-input-text-core>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-input-text>
</script>

<script type="riot/tag">
	<ps-input-text-lang>

		<ps-form-group>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				<yield/>

			<?php } else { ?>

				<div class="translatable">

					<yield/>

					<div class="displayed_flag"><img class="language_current pointer" src="../img/l/{ this.parent.opts.activeLang }.jpg" onclick="toggleLanguageFlags(this);"></div>
					<div class="language_flags" style="display: none;">
						<img class="pointer" src="../img/l/{ lang.idLang }.jpg" alt="{ lang.langName }" each={ lang in this.parent.langs } onclick="changeFormLanguage({ lang.idLang }, '{ lang.isoLang }', 0)">
					</div>
				</div>

			<?php }?>

		</ps-form-group>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>

			<style scoped>

				.language_flags .pointer {
					margin: 2px;
				}

				.translatable div[class^=lang_] {
					float: left;
				}

			</style>

			this.langs = []

			this.on('mount', function() {
				that = this
				that.tags['ps-form-group'].tags['ps-input-text-lang-value'].forEach(function(elem) {
					that.langs.push(elem.opts)
					$(elem.root).addClass('lang_'+elem.opts.idLang)
					if (that.opts.activeLang != elem.opts.idLang)
						$(elem.root).hide()
				})
				that.update()
			})

		<?php }?>

		this.tags['ps-form-group'].opts = opts

	</ps-input-text-lang>
</script>

<script type="riot/tag">
	<ps-input-text-lang-value>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="translatable-field row lang-{ this.opts.idLang }" style="display: { this.parent.opts.activeLang == this.opts.idLang ? 'block' : 'none' };">
				<div class="col-lg-{ this.parent.opts.colLg }">
					<ps-input-text-core name="{ this.parent.opts.name }_{ this.opts.idLang }"></ps-input-text-core>
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
						{ this.opts.isoLang }
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li each={ dropdown_lang in this.langs }>
							<a href="javascript:hideOtherLanguage({ dropdown_lang.idLang });" onclick="{ this.parent.opts.onclick_lang }({ dropdown_lang.idLang })">{ dropdown_lang.langName }</a>
						</li>
					</ul>
				</div>
			</div>

			this.langs = []

			this.on('mount', function() {
				that = this
				if (that.parent)
				{
					that.parent.tags['ps-input-text-lang-value'].forEach(function(elem) {
						that.langs.push(elem.opts)
					})
					that.update()
				}
			})

		<?php } else { ?>

			<ps-input-text-core name="{ this.parent.opts.name }_{ this.opts.idLang }" size="{ this.parent.opts.size }"></ps-input-text-core>

		<?php }?>

	</ps-input-text-lang-value>
</script>

<script type="riot/tag">

	<ps-textarea-core>

		<textarea name="{ opts.name }" class="{ rte: opts.richEditor == 'true', autoload_rte: opts.richEditor == 'true'}" rows="{ opts.rows }" <?php if ($_smarty_tpl->tpl_vars['ps_version']->value<1.6) {?>cols="{ opts.cols }"<?php }?>><yield/></textarea>

	</ps-textarea-core>

</script>

<script type="riot/tag">

	<ps-textarea>

		<ps-form-group>

			<ps-textarea-core rich-editor="{ opts.richEditor }" name="{ opts.name }" rows="{ opts.rows }" cols="{ opts.cols }"><yield/></ps-textarea-core>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-textarea>

</script>

<script type="riot/tag">
	<ps-textarea-lang>

		<ps-form-group>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				<yield/>

			<?php } else { ?>

				<div class="translatable">

					<yield/>

					<div class="displayed_flag"><img class="language_current pointer" src="../img/l/{ this.parent.opts.activeLang }.jpg" onclick="toggleLanguageFlags(this);"></div>
					<div class="language_flags" style="display: none;">
						<img class="pointer" src="../img/l/{ lang.idLang }.jpg" alt="{ lang.langName }" each={ lang in this.parent.langs } onclick="changeFormLanguage({ lang.idLang }, '{ lang.isoLang }', 0)">
					</div>
				</div>

			<?php }?>

		</ps-form-group>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==1.5) {?>

			<style scoped>

				.language_flags .pointer {
					margin: 2px;
				}

				.translatable div[class^=lang_] {
					float: left;
				}

			</style>

			this.langs = []

			this.on('mount', function() {
				that = this
				that.tags['ps-form-group'].tags['ps-textarea-lang-value'].forEach(function(elem) {
					that.langs.push(elem.opts)
					$(elem.root).addClass('lang_'+elem.opts.idLang)
					if (that.opts.activeLang != elem.opts.idLang)
						$(elem.root).hide()
				})
				that.update()
			})

		<?php }?>

		this.tags['ps-form-group'].opts = opts

	</ps-textarea-lang>
</script>

<script type="riot/tag">
	<ps-textarea-lang-value>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="translatable-field row lang-{ this.opts.idLang }" style="display: { this.parent.opts.activeLang == this.opts.idLang ? 'block' : 'none' };">
				<div class="col-lg-{ this.parent.opts.colLg }">
					<ps-textarea-core name="{ this.parent.opts.name }_{ this.opts.idLang }" rows="{ this.parent.parent.opts.rows }" cols="{ this.parent.parent.opts.cols }" rich-editor="{ this.parent.opts.richEditor }"><yield/></ps-textarea-core>
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
						{ this.opts.isoLang }
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li each={ dropdown_lang in this.langs }>
							<a href="javascript:hideOtherLanguage({ dropdown_lang.idLang });">{ dropdown_lang.langName }</a>
						</li>
					</ul>
				</div>
			</div>

			this.langs = []

			this.on('mount', function() {
				that = this
				if (that.parent)
				{
					that.parent.tags['ps-textarea-lang-value'].forEach(function(elem) {
						that.langs.push(elem.opts)
					})
					that.update()
				}
			})

		<?php } else { ?>

			<ps-textarea-core name="{ this.parent.opts.name }_{ this.opts.idLang }" rows="{ this.parent.parent.opts.rows }" cols="{ this.parent.parent.opts.cols }" rich-editor="{ this.parent.opts.richEditor }"><yield/></ps-textarea-core>

		<?php }?>

	</ps-textarea-lang-value>
</script>

<?php if ($_smarty_tpl->tpl_vars['ps_version']->value<1.6) {?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('__PS_BASE_URI__'),'quotes','UTF-8');?>
/js/tinymce.inc.js"></script>
<?php }?>

<script type="text/javascript">
	var iso = iso_user;
	var pathCSS = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('_THEME_CSS_DIR_'),'quotes','UTF-8');?>
";
	var ad = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('__PS_BASE_URI__'),'htmlall','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(basename(@constant('_PS_ADMIN_DIR_')),'quotes','UTF-8');?>
";

	$( document ).ready(function() {
		if ($("ps-textarea .autoload_rte").length > 0) {
			tinySetup({ editor_selector: "autoload_rte" });
		}
	});
</script>

<script type="riot/tag">
	<ps-switch>

		<ps-form-group>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="{ opts.name }" id="{ opts.name }_on" value="1" checked={ opts.active == 'true' } disabled="{ opts.disabled == 'true' }">
					<label for="{ opts.name }_on" onclick="{ opts.onclick }(1)">{ opts.yes }</label>
					<input type="radio" name="{ opts.name }" id="{ opts.name }_off" value="0" checked={ opts.active != 'true' } disabled="{ opts.disabled == 'true' }">
					<label for="{ opts.name }_off" onclick="{ opts.onclick }(0)">{ opts.no }</label>
					<a class="slide-button btn"></a>
				</span>

			<?php } else { ?>

				<label class="t" for="{ opts.name }_on"><img src="../img/admin/enabled.gif" alt="{ opts.yes }" title="{ opts.yes }"></label>
				<input type="radio" name="{ opts.name }" id="{ opts.name }_on" value="1" checked={ opts.active == 'true' }>
				<label class="t" for="{ opts.name }_on"> { opts.yes }</label>
				<label class="t" for="{ opts.name }_off"><img src="../img/admin/disabled.gif" alt="{ opts.no }" title="{ opts.no }" style="margin-left: 10px;"></label>
				<input type="radio" name="{ opts.name }" id="{ opts.name }_off" value="0" checked={ opts.active != 'true' }>
				<label class="t" for="{ opts.name }_off"> { opts.no }</label>

			<?php }?>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-switch>
</script>

<script type="riot/tag">
	<ps-radios>

		<ps-form-group>
			<yield/>
		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-radios>
</script>

<script type="riot/tag">
	<ps-radio>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="radio">
				<label><input type="radio" name="{ opts.name }" id="{ opts.name }_{ opts.value }" value="{ opts.value }" checked={ opts.checked == 'true' }><yield/></label>
			</div>

		<?php } else { ?>

			<input type="radio" name="{ opts.name }" id="{ opts.name }_{ opts.value }" value="{ opts.value }" checked={ opts.checked == 'true' }>
			<label class="t" for="{ opts.name }_{ opts.value }"><yield/></label>
			<br>

		<?php }?>

	</ps-radio>
</script>

<script type="riot/tag">
	<ps-checkboxes>

		<ps-form-group>
			<yield/>
		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-checkboxes>
</script>

<script type="riot/tag">
	<ps-checkbox>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

			<div class="checkbox">
				<label for="{ opts.name }_{ opts.value }">
					<input type="checkbox" name="{ opts.name }" id="{ opts.name }_{ opts.value }" checked={ opts.checked == 'true' } class="{ opts.class }">
					<yield/>
				</label>
			</div>

		<?php } else { ?>

			<input type="checkbox" name="{ opts.name }" id="{ opts.name }_{ opts.value }" value="{ opts.value }" checked={ opts.checked == 'true' }>
			<label class="t" for="{ opts.name }_{ opts.value }"><yield/></label>
			<br>

		<?php }?>

	</ps-checkbox>
</script>









<script type="riot/tag">
	<ps-color-picker-eyecon class="col-lg-12">
		<ps-form-group>
			
			<div class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value=='1.6') {?>input-group<?php }?> { opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : '' }">
				<div id="{ opts.div_id }" class="cp"><div style="background-color: { opts.value }"></div></div>
				<input id="{ opts.input_id }" name="{ opts.name }" value="{ opts.value }" style="display:none"/>
			</div>
			
			<style scoped>
				img {
					border: 0;
					margin:0 0 0 3px;
				}

				span {
					cursor: pointer;
				}
			</style>
		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-color-picker-eyecon>
</script>


<script type="riot/tag">
	<ps-color-picker>
		<ps-form-group>

			<div class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value=='1.6') {?>input-group<?php }?> { opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : 'fixed-width-lg' }">
				<input type="color" value="{ opts.color || '#000000' }" size="{ opts.size || 20 }" data-hex="true"
				class="color mColorPickerInput mColorPicker" name="{ opts.name }" id="{ opts.name }"
				onchange="{ opts.onchange }(this.value)">
			</div>

			<style scoped>
				img {
					border: 0;
					margin:0 0 0 3px;
				}

				span {
					cursor: pointer;
				}
			</style>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-color-picker>
</script>

<?php if ($_smarty_tpl->tpl_vars['ps_version']->value<1.6) {?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('__PS_BASE_URI__'),'quotes','UTF-8');?>
/js/jquery/plugins/jquery.colorpicker.js"></script>
<?php }?>

<script type="riot/tag">
	<ps-password>
		<ps-form-group>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				<div class="input-group { opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : 'fixed-width-lg' }">
					<span class="input-group-addon">
						<i class="icon-key"></i>
					</span>
					<input type="password" name="{ opts.name }" required="{ opts.requiredInput == 'true' }">
				</div>

			<?php } else { ?>

				<input type="password" size="{ opts.size }" name="{ opts.name }" required="{ opts.requiredInput == 'true' }">

			<?php }?>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-password>
</script>

<script type="riot/tag">
	<ps-date-picker>
		<ps-form-group>

			<?php if ($_smarty_tpl->tpl_vars['ps_version']->value>=1.6) {?>

				<div class="input-group { opts['fixedWidth'] ? 'fixed-width-'+opts['fixedWidth'] : 'fixed-width-lg' }">
					<input id="{ opts.name }" type="text" data-hex="true" class="datepicker" name="{ opts.name }" value="{ opts.value }" required="{ opts.requiredInput == 'true' }" />
					<span class="input-group-addon">
						<i class="icon-calendar-empty"></i>
					</span>
				</div>

			<?php } else { ?>

				<input id="{ opts.name }" type="text" data-hex="true" size="{ opts.size }" class="datepicker" name="{ opts.name }" value="{ opts.value }" required="{ opts.requiredInput == 'true' }" />

			<?php }?>

		</ps-form-group>

		this.tags['ps-form-group'].opts = opts

	</ps-date-picker>
</script>

<script type="text/javascript">
	$( document ).ready(function() {
		if ($("ps-date-picker .datepicker").length > 0) {
			$("ps-date-picker .datepicker").datepicker({
					prevText: '',
					nextText: '',
					altFormat: 'yy-mm-dd'
			});
		}
	});
</script>
<?php }} ?>
