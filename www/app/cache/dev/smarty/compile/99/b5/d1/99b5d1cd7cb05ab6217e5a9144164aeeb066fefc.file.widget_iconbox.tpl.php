<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:08
         compiled from "/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_iconbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213306512259197d187d3cf0-37916276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b5d1cd7cb05ab6217e5a9144164aeeb066fefc' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/modules/pspagebuilder/views/templates/front/widgets/widget_iconbox.tpl',
      1 => 1491211315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213306512259197d187d3cf0-37916276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_align' => 0,
    'iconurl' => 0,
    'iconfile' => 0,
    'linkurl' => 0,
    'widget_heading' => 0,
    'iconclass' => 0,
    'sub_title' => 0,
    'htmlcontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d18811b65_82391322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d18811b65_82391322')) {function content_59197d18811b65_82391322($_smarty_tpl) {?>
<div class="feature-box  block  <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['text_align']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">

            <div class="fbox-content">  
                    <?php if (isset($_smarty_tpl->tpl_vars['iconurl']->value)&&$_smarty_tpl->tpl_vars['iconfile']->value) {?>
                        <div class="fbox-image">    
                                
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                             <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['linkurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                            <?php }?>
                            <img class="fa" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iconurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'icon','d'=>'Shop.Theme'),$_smarty_tpl);?>
">  
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                            </a>
                            <?php }?>
                  
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['iconclass']->value) {?>
                         <div class="fbox-icon">    
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                             <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['linkurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                            <?php }?>
                                <i class="material-icons"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iconclass']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</i>
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                            </a>
                            <?php }?>      
                        </div>
                    <?php }?>
                     <div class="fbox-body">   
                        <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                                     <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['linkurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                            <?php }?>

                                <h4 class="fbox-title">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget_heading']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                                </h4>
                            <?php if (isset($_smarty_tpl->tpl_vars['linkurl']->value)&&$_smarty_tpl->tpl_vars['linkurl']->value) {?>
                                </a>
                            <?php }?>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value)&&!empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
                            <div class="subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>

                  
                        <?php if (isset($_smarty_tpl->tpl_vars['htmlcontent']->value)&&$_smarty_tpl->tpl_vars['htmlcontent']->value) {?>
                         <div class="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>
                    </div>    
                </div>  

</div><?php }} ?>
