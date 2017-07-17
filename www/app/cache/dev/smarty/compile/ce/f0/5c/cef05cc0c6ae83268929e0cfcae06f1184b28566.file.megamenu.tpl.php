<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:04:06
         compiled from "modules/psmegamenu/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126705627259197d16b210a9-62516459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef05cc0c6ae83268929e0cfcae06f1184b28566' => 
    array (
      0 => 'modules/psmegamenu/views/templates/hook/megamenu.tpl',
      1 => 1494494565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126705627259197d16b210a9-62516459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'psmegamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d16b239e6_58403650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d16b239e6_58403650')) {function content_59197d16b239e6_58403650($_smarty_tpl) {?>
<nav id="cavas_menu" class="ps-megamenu clearfix">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="offcanvas-heading hidden-lg-up">
        <button class="btn btn-mobile" type="button" data-toggle="offcanvas">
            <span class="material-icons icon-left">keyboard_backspace</span>
        </button>
    </div>
    <div id="pts-top-menu">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['psmegamenu']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
</nav>
<script type="text/javascript">
     // Offcanvas
     $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    $( "body" ).on( "click", "i.click-canavs-menu", function() {
        $(this).parent().find('.dropdown-menu:first').toggle();
    });
	

</script><?php }} ?>
