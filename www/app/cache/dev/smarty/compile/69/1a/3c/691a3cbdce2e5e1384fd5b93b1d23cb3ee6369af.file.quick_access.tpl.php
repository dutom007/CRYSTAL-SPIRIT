<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 23:42:35
         compiled from "/home/crystalsdx/www/admin13497682/themes/new-theme/template/components/layout/quick_access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2101766670591d182b57ffc1-18393990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691a3cbdce2e5e1384fd5b93b1d23cb3ee6369af' => 
    array (
      0 => '/home/crystalsdx/www/admin13497682/themes/new-theme/template/components/layout/quick_access.tpl',
      1 => 1493025724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101766670591d182b57ffc1-18393990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quick_access' => 0,
    'quick' => 0,
    'link' => 0,
    'matchQuickLink' => 0,
    'quick_access_current_link_icon' => 0,
    'quick_access_current_link_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591d182b5b3466_18183313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d182b5b3466_18183313')) {function content_591d182b5b3466_18183313($_smarty_tpl) {?>
<div class="ps-dropdown dropdown">
  <span type="button" id="quick-access" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="selected-item"><?php echo smartyTranslate(array('s'=>'Quick Access'),$_smarty_tpl);?>
</span> <i class="material-icons arrow-down">keyboard_arrow_down</i>
  </span>
  <div class="ps-dropdown-menu dropdown-menu" aria-labelledby="quick-access">
    <?php  $_smarty_tpl->tpl_vars['quick'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quick']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quick_access']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quick']->key => $_smarty_tpl->tpl_vars['quick']->value) {
$_smarty_tpl->tpl_vars['quick']->_loop = true;
?>
      <a class="dropdown-item<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['quick']->value['link'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['link']->value->matchQuickLink($_tmp2)) {?><?php $_smarty_tpl->tpl_vars["matchQuickLink"] = new Smarty_variable($_smarty_tpl->tpl_vars['quick']->value['id_quick_access'], null, 0);?> active<?php }?>"
         href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['quick']->value['link'],'html','UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['quick']->value['new_window']) {?> target="_blank"<?php }?>
         data-item="<?php echo $_smarty_tpl->tpl_vars['quick']->value['name'];?>
"
      ><?php echo $_smarty_tpl->tpl_vars['quick']->value['name'];?>
</a>
    <?php } ?>
    <hr>
    <?php if (isset($_smarty_tpl->tpl_vars['matchQuickLink']->value)) {?>
      <a
         class="dropdown-item js-quick-link"
         data-method="remove"
         data-quicklink-id="<?php echo $_smarty_tpl->tpl_vars['matchQuickLink']->value;?>
"
         data-rand="<?php echo rand(1,200);?>
"
         data-icon="<?php echo $_smarty_tpl->tpl_vars['quick_access_current_link_icon']->value;?>
"
         data-url="<?php echo $_smarty_tpl->tpl_vars['link']->value->getQuickLink($_SERVER['REQUEST_URI']);?>
"
         data-post-link="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminQuickAccesses');?>
"
         data-prompt-text="<?php echo smartyTranslate(array('s'=>'Please name this shortcut:','js'=>1),$_smarty_tpl);?>
"
         data-link="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['quick_access_current_link_name']->value,32);?>
"
      >
        <i class="material-icons">remove_circle_outline</i>
        <?php echo smartyTranslate(array('s'=>'Remove from QuickAccess'),$_smarty_tpl);?>

      </a>
    <?php } else { ?>
      <a
        class="dropdown-item js-quick-link"
        data-rand="<?php echo rand(1,200);?>
"
        data-icon="<?php echo $_smarty_tpl->tpl_vars['quick_access_current_link_icon']->value;?>
"
        data-method="add"
        data-url="<?php echo $_smarty_tpl->tpl_vars['link']->value->getQuickLink($_SERVER['REQUEST_URI']);?>
"
        data-post-link="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminQuickAccesses');?>
"
        data-prompt-text="<?php echo smartyTranslate(array('s'=>'Please name this shortcut:','js'=>1),$_smarty_tpl);?>
"
        data-link="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['quick_access_current_link_name']->value,32);?>
"
      >
        <i class="material-icons">add_circle_outline</i>
        <?php echo smartyTranslate(array('s'=>'Add current page to QuickAccess'),$_smarty_tpl);?>

      </a>
    <?php }?>
    <a class="dropdown-item" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminQuickAccesses"));?>
">
      <i class="material-icons">settings</i>
      <?php echo smartyTranslate(array('s'=>'Manage quick accesses'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>
