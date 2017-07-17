<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:08
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/hook/builderlayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2039856159197d18968979-78407967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a64702ee42cdc7326f58209b89eb974e457c99' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/hook/builderlayout.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039856159197d18968979-78407967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'col' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1899a105_88125951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1899a105_88125951')) {function content_59197d1899a105_88125951($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==1) {?> 
        <div class="pts-container <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->cls,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->attrs, ENT_QUOTES, 'UTF-8');?>
>        
            <div class="pts-inner container<?php if ($_smarty_tpl->tpl_vars['row']->value->fullwidth==1) {?>-fluid<?php }?>">
    <?php }?>    
    <div class="row-inner row-level-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->level,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <div class="row <?php if (isset($_smarty_tpl->tpl_vars['row']->value->sfxcls)&&$_smarty_tpl->tpl_vars['row']->value->sfxcls) {?>row-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->sfxcls,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value->level>=2) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->cls,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> clearfix" >
            <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value->cols; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
                <div class="col-lg-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->lgcol,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->mdcol,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->smcol,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->xscol,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==2) {?> 
                   <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?>

                     <div class="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->attrs, ENT_QUOTES, 'UTF-8');?>
> 
                    <?php }?>
                    <?php }?>
                        <div class="col-inner <?php if (isset($_smarty_tpl->tpl_vars['col']->value->sfxcls)&&$_smarty_tpl->tpl_vars['col']->value->sfxcls) {?>col-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->sfxcls,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['col']->value->cls,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->attrs, ENT_QUOTES, 'UTF-8');?>
>
                        <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col']->value->widgets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['widget']->value->content)) {?>
                            <div class="widget-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget']->value->wtype,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value->content, ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <?php }?>
                        <?php } ?>
                        <?php if (isset($_smarty_tpl->tpl_vars['col']->value->rows)&&$_smarty_tpl->tpl_vars['col']->value->rows) {?>
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['col']->value->rows), 0);?>

                        <?php }?>
                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==2) {?> 
                        <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?>

                         </div>
                        <?php }?>
                    <?php }?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==1) {?>
            </div>
        </div>
    <?php }?>
<?php } ?>    <?php }} ?>
