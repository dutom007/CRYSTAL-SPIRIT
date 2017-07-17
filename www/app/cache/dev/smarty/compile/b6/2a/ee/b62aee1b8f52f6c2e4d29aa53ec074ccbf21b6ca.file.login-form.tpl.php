<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 08:49:00
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14645473855919a3bc23aa86-88431441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62aee1b8f52f6c2e4d29aa53ec074ccbf21b6ca' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/login-form.tpl',
      1 => 1491211522,
      2 => 'file',
    ),
    'eae176e2f2d2a73a0ee33cd3a563b36f7c03e8fc' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/customer/_partials/login-form.tpl',
      1 => 1493295708,
      2 => 'file',
    ),
    'e8eedca80747d282b46e80cd5882ce803c070eb3' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/form-errors.tpl',
      1 => 1491211317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14645473855919a3bc23aa86-88431441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5919a3bc251d23_13233018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919a3bc251d23_13233018')) {function content_5919a3bc251d23_13233018($_smarty_tpl) {?>


  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '14645473855919a3bc23aa86-88431441');
content_5919a3bc242559_74590134($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

  <form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

  <section>
      
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
      <?php } ?>
    
    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

      </a>
    </div>
  </section>

    
  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    
  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </button>

  </footer>
    
</form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 08:49:00
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5919a3bc242559_74590134')) {function content_5919a3bc242559_74590134($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
