<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/validation_list_customers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12040903495919a934310dc7-84692994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3204e9f4f30155f9572dd0e6dffcf06ac1a4a02' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/validation_list_customers.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12040903495919a934310dc7-84692994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'addresses_to_valid' => 0,
    'address' => 0,
    'token_addresses' => 0,
    'token_customer' => 0,
    'name' => 0,
    'id_lang_locale' => 0,
    'nbre_page' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a93434a856_31537674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a93434a856_31537674')) {function content_5919a93434a856_31537674($_smarty_tpl) {?>

<input name="page" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['page']->value,'htmlall','UTF-8');?>
" type="hidden"/>
<?php if (count($_smarty_tpl->tpl_vars['addresses_to_valid']->value)==0) {?>
	<p><?php echo smartyTranslate(array('s'=>'Not yet customer data to process','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
<?php } else { ?>
<table id="table_customer">
<tr>
	<th>id_customer</th>
	<th>id_address</th>
	<th><?php echo smartyTranslate(array('s'=>'shop','mod'=>'checkvat'),$_smarty_tpl);?>
 (id_shop)</th>
	<th><?php echo smartyTranslate(array('s'=>'customer','mod'=>'checkvat'),$_smarty_tpl);?>
 (<?php echo smartyTranslate(array('s'=>'e-mail','mod'=>'checkvat'),$_smarty_tpl);?>
)</th>
	<th><?php echo smartyTranslate(array('s'=>'country','mod'=>'checkvat'),$_smarty_tpl);?>
 (<?php echo smartyTranslate(array('s'=>'ISO Code','mod'=>'checkvat'),$_smarty_tpl);?>
)</th>
	<th><?php echo smartyTranslate(array('s'=>'VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
</th>
	<th><?php echo smartyTranslate(array('s'=>'Customer','mod'=>'checkvat'),$_smarty_tpl);?>
</th>
	<th><?php echo smartyTranslate(array('s'=>'VIES','mod'=>'checkvat'),$_smarty_tpl);?>
</th>
	<th><?php echo smartyTranslate(array('s'=>'Validated addresses','mod'=>'checkvat'),$_smarty_tpl);?>
</th>
	<th><?php echo smartyTranslate(array('s'=>'Take off the list','mod'=>'checkvat'),$_smarty_tpl);?>
<br/><?php echo smartyTranslate(array('s'=>'and delete VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses_to_valid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
	<tr id="id_address_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8');?>
">
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_customer'],'htmlall','UTF-8');?>
</td>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8');?>
</td>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['shop'],'htmlall','UTF-8');?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_shop'],'htmlall','UTF-8');?>
)</td>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['firstname'],'htmlall','UTF-8');?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['lastname'],'htmlall','UTF-8');?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['email'],'htmlall','UTF-8');?>
)</td>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['country'],'htmlall','UTF-8');?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['iso_code'],'htmlall','UTF-8');?>
)</td>
		<td>
			<a target="_blank" href="index.php?tab=AdminAddresses&id_address=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8');?>
&updateaddress&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token_addresses']->value,'htmlall','UTF-8');?>
">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['vat_number'],'htmlall','UTF-8');?>

			</a>
		</td>
		<td>
			<a target="_blank" href ="index.php?tab=AdminCustomers&id_customer=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_customer'],'htmlall','UTF-8');?>
&updatecustomer&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token_customer']->value,'htmlall','UTF-8');?>
">
				<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/views/img/customer.gif" alt="<?php echo smartyTranslate(array('s'=>'Customer','mod'=>'checkvat'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Customer','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
			</a>
		<td>
			<a target="_blank" style="text-decoration: none;" href="http://ec.europa.eu/taxation_customs/vies/vatResponse.html?locale=
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id_lang_locale']->value,'htmlall','UTF-8');?>
&memberStateCode=<?php if ($_smarty_tpl->tpl_vars['address']->value['iso_code']=='GR') {?>EL<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['iso_code'],'htmlall','UTF-8');?>
<?php }?>&number=
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(substr($_smarty_tpl->tpl_vars['address']->value['vat_number'],2),'htmlall','UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['address']->value['iso_code']=='ES'||$_smarty_tpl->tpl_vars['address']->value['iso_code']=='GR') {?>&traderName=<?php }?>">
				<img src="../modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8');?>
/logo.gif" alt="<?php echo smartyTranslate(array('s'=>'Validation "VIES" of the VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Validation "VIES" of the VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
"/>
			</a>
		</td>
		<td>
			<ps-switch
			name="valid_address_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8');?>
"
			yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
			no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
			active="<?php if ($_smarty_tpl->tpl_vars['address']->value['address_valid']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch>
		</td>
		<td>
			<input name="take_off_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8');?>
" type="checkbox" value="1"/>
		</td>
	</tr>
<?php } ?>
</table>
<br/>
<p><?php echo smartyTranslate(array('s'=>'Page','mod'=>'checkvat'),$_smarty_tpl);?>
 : 
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbre_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbre_page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<span class="pagination <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page']->value) {?>current_page<?php }?>"><a href="index.php?tab=AdminModules&configure=checkvat&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_GET['token'],'htmlall','UTF-8');?>
&page=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'htmlall','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'htmlall','UTF-8');?>
</a></span> 
<?php }} ?>
</p>
<?php }?><?php }} ?>
