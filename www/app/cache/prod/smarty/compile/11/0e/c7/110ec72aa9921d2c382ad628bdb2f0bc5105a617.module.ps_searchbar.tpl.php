<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:43
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:750453799595cfcffac3e60-77310097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1491211316,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '750453799595cfcffac3e60-77310097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfcffac7410_77651371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfcffac7410_77651371')) {function content_595cfcffac7410_77651371($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="_desktop_search">
	<div id="search_widget"  data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<div class="search-focus">
			<i class="material-icons">search</i>	
		</div>

		<div class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search">
				<input class="ps_search" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
				<button type="submit" class="btnsearch">
					<i class="material-icons">search</i>
				</button>
				<span class="button-close">
					<i class="material-icons">close</i>
				</span>
			</form>
		</div>
	</div>
</div>


<?php }} ?>
