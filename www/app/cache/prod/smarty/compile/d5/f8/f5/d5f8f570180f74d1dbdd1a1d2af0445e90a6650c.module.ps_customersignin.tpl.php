<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:43
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1539448891595cfcffaa9607-40577765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1491211316,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1539448891595cfcffaa9607-40577765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfcffab0801_66866848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfcffab0801_66866848')) {function content_595cfcffab0801_66866848($_smarty_tpl) {?><div id="_desktop_user_info">
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div class="dropdown js-dropdown">
        <a
          data-target="#" 
          data-toggle="dropdown" 
          aria-haspopup="true" 
          aria-expanded="false"
          rel="nofollow"
        >
          <i class="material-icons">person</i>
        </a>
      <div class="dropdown-menu">
       <a
          class="logout"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          rel="nofollow"
          title="<?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        >
          <i class="material-icons">person</i>
          <?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </a>
        <a
          class="account"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
          rel="nofollow"
        >
          <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
      </div>
    </div>
      
    <?php } else { ?>
      <a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons">person</i>
        <!-- <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span> -->
      </a>
    <?php }?>
  </div>
</div><?php }} ?>
