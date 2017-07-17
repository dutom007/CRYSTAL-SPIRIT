<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 09:12:20
         compiled from "/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/checkvat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11457716895919a934295be4-29524372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fdc72525570986a79143e2a4069e45247888ca2' => 
    array (
      0 => '/home/crystalsdx/www/modules/checkvat/views/templates/admin/prestui/checkvat.tpl',
      1 => 1493718524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11457716895919a934295be4-29524372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'config' => 0,
    'employees' => 0,
    'employee' => 0,
    'list' => 0,
    'ligne' => 0,
    'liste_groupes' => 0,
    'groupe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a9342dd121_97370859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a9342dd121_97370859')) {function content_5919a9342dd121_97370859($_smarty_tpl) {?>



<ps-panel icon="icon-cogs" header="<?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'checkvat'),$_smarty_tpl);?>
">

<fieldset>
<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url']->value,'htmlall','UTF-8');?>
">
    <ps-tabs position="top" id="menu_module">
        <ps-tab title="<?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'checkvat'),$_smarty_tpl);?>
" active="true" id="tab1" icon="icon-AdminParentModules">
            <ps-switch
            name="address_required"
            label="<?php echo smartyTranslate(array('s'=>'Address required after inscription','mod'=>'checkvat'),$_smarty_tpl);?>
"
            id="address_required"
            yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
            no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
            active="<?php if ($_smarty_tpl->tpl_vars['config']->value['address_required']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
            
            <ps-switch
            name="vat_required"
            label="<?php echo smartyTranslate(array('s'=>'Customers registered must provide their VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
"
            id="vat_required"
            yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
            no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
            active="<?php if ($_smarty_tpl->tpl_vars['config']->value['vat_required']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
                        
            <ps-switch
            name="valid_auto_if_vies_enable"
            label="<?php echo smartyTranslate(array('s'=>'Automatic validation of the account if VIES is not accessible (only for validation automatic)','mod'=>'checkvat'),$_smarty_tpl);?>
"
            id="valid_auto_if_vies_enable"
            yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
            no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
            active="<?php if ($_smarty_tpl->tpl_vars['config']->value['valid_auto_if_vies_enable']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
            
            <ps-switch
            name="customer_group_pro_only"
            label="<?php echo smartyTranslate(array('s'=>'Group "pro" only (not default)','mod'=>'checkvat'),$_smarty_tpl);?>
"
            id="customer_group_pro_only"
            yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
            no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
            active="<?php if ($_smarty_tpl->tpl_vars['config']->value['customer_group_pro_only']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
            
            <ps-switch
            name="mail_customer"
            label="<?php echo smartyTranslate(array('s'=>'Send an email to the customer after validation of his address (only when you valid an address in the back office or by mail)','mod'=>'checkvat'),$_smarty_tpl);?>
"
            id="mail_customer"
            yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
            no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
            active="<?php if ($_smarty_tpl->tpl_vars['config']->value['mail_customer']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
            
                        
            <?php  $_smarty_tpl->tpl_vars['employee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['employee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['employees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->key => $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->_loop = true;
?>
                <ps-switch
                name="employee_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['employee']->value['id_employee'],'htmlall','UTF-8');?>
"
                label="<?php echo smartyTranslate(array('s'=>'Send an email to','mod'=>'checkvat'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['employee']->value['firstname'],'htmlall','UTF-8');?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['employee']->value['lastname'],'htmlall','UTF-8');?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['employee']->value['email'],'htmlall','UTF-8');?>
)"
                id="employee_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['employee']->value['id_employee'],'htmlall','UTF-8');?>
"
                yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
                no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
                hint="<?php echo smartyTranslate(array('s'=>'Only for valid an address','mod'=>'checkvat'),$_smarty_tpl);?>
"
                active="<?php if (in_array($_smarty_tpl->tpl_vars['employee']->value['id_employee'],$_smarty_tpl->tpl_vars['config']->value['mail_employees'])) {?>true<?php } else { ?>false<?php }?>"></ps-switch><br/><br/>
            <?php } ?>
            
            
            <table id="tableConfig">
            <tr style="text-align:center;font-weight:bold">
                <td><?php echo smartyTranslate(array('s'=>'Country (ISO Code)','mod'=>'checkvat'),$_smarty_tpl);?>
</td>
                <td><?php echo smartyTranslate(array('s'=>'ISO code','mod'=>'checkvat'),$_smarty_tpl);?>
</td>
                <td><?php echo smartyTranslate(array('s'=>'Customer group','mod'=>'checkvat'),$_smarty_tpl);?>
</td>
                <td><?php echo smartyTranslate(array('s'=>'Automatic validation','mod'=>'checkvat'),$_smarty_tpl);?>
</td>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligne']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->key => $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ligne']->value['country'],'htmlall','UTF-8');?>
</td>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ligne']->value['iso_code'],'htmlall','UTF-8');?>
</td>
                <td>
                    <select name="groupe_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ligne']->value['iso_code'],'htmlall','UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste_groupes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->key => $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['groupe']->value['id_group'],'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['ligne']->value['id_group']==$_smarty_tpl->tpl_vars['groupe']->value['id_group']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['groupe']->value['name'],'htmlall','UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </td>
                <td>
                <ps-switch name="validation_auto_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ligne']->value['iso_code'],'htmlall','UTF-8');?>
"
                    label="" 
                    id="validation_auto_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ligne']->value['iso_code'],'htmlall','UTF-8');?>
" 
                    yes="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
"
                    no="<?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
"
                    active="<?php if ($_smarty_tpl->tpl_vars['ligne']->value['validation_auto']==1) {?>true<?php } else { ?>false<?php }?>"></ps-switch>    
                </td>
            </tr>
            <?php } ?>
            </table>
        </ps-tab>
        
        
        
        
        
        
        
        <ps-tab title="<?php echo smartyTranslate(array('s'=>'Addresses customers','mod'=>'checkvat'),$_smarty_tpl);?>
" id="tab2" icon="icon-AdminParentModules">
            <div id="validation_list_customers">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./validation_list_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </ps-tab>    
        
        <ps-tab title="<?php echo smartyTranslate(array('s'=>'Help','mod'=>'checkvat'),$_smarty_tpl);?>
" id="tab3" icon="icon-AdminParentModules">
            <div id="help_checkvat">


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Address required after inscription','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'customers will have to register an address to visit the shop,','mod'=>'checkvat'),$_smarty_tpl);?>
<br/>
                    <strong><?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'customers can visit the shop without registering an address','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>
                
                
                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Customers registered must provide their VAT number','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'reserved for B2B, ie if and only if all your customers are professionals','mod'=>'checkvat'),$_smarty_tpl);?>
<br/>
                    <strong><?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'If you have non-professional clients (individuals)','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Automatic validation of the account if VIES is not accessible (only for validation automatic)','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'advised, if the VIES system is inaccessible, it is very rare but it can happen, customers will not be blocked when registering the address','mod'=>'checkvat'),$_smarty_tpl);?>
<br/>
                    <strong><?php echo smartyTranslate(array('s'=>'No','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'this blocks the clients on the address page they are resnseigner if VIES is at the same time inaccessible.','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Group "pro" only (not default)','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'allows to put the client in the professional client group you have chosen, it will not be in the client group "default",','mod'=>'checkvat'),$_smarty_tpl);?>
<br/>
                    <?php echo smartyTranslate(array('s'=>'This allows not to display a means of delivery which you reserve to the private (not professional) and which you do not want to propose to the professionals for example,','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Send an email to the customer after validation of his address (only when you valid an address in the back office or by mail)','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'this will notify your customer that his address has been validated and that he has changed client group','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Send an email to','mod'=>'checkvat'),$_smarty_tpl);?>
... (<?php echo smartyTranslate(array('s'=>'admin','mod'=>'checkvat'),$_smarty_tpl);?>
)</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'if you want to be notified by email that a customer has just registered and validate his address. If the validation of its address is automatic, you do not receive an email.','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>


                <p class="cv_help"><?php echo smartyTranslate(array('s'=>'Automatic validation','mod'=>'checkvat'),$_smarty_tpl);?>
</p>
                <p class="cv_answer">
                    <strong><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'checkvat'),$_smarty_tpl);?>
</strong>: <?php echo smartyTranslate(array('s'=>'Automatically validate an address, this prevents you from having to validate each client address, if you have many clients, it is advisable','mod'=>'checkvat'),$_smarty_tpl);?>

                </p>
            </div>
        </ps-tab>
        
        
        
        
        
        
    </ps-tabs>
<ps-panel-footer>
    <ps-panel-footer-submit title="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'checkvat'),$_smarty_tpl);?>
" icon="process-icon-save" direction="right" name="submitConfigAdd" value="save"></ps-panel-footer-submit>
</ps-panel-footer>
</form></fieldset>
</ps-panel><?php }} ?>
