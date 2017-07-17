<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 23:42:54
         compiled from "/home/crystalsdx/www/modules/ptsthemepanel/views/templates/admin/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369473951591d183eb0fa29-92857503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2d0f601f43d36b7d4ddfd6eabf1bbd06eabe90' => 
    array (
      0 => '/home/crystalsdx/www/modules/ptsthemepanel/views/templates/admin/form.tpl',
      1 => 1491211282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369473951591d183eb0fa29-92857503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tools_editor' => 0,
    'configform' => 0,
    'samples' => 0,
    'sample' => 0,
    'moduleEditURL' => 0,
    'btnnavs' => 0,
    'btnnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591d183eb42bd0_90829076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d183eb42bd0_90829076')) {function content_591d183eb42bd0_90829076($_smarty_tpl) {?>
<div class="col-sm-9">

<p class="clearfix">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tools_editor']->value,'html','UTF-8');?>
"   class="btn-danger btn pull-right" target="_blank" style="margin-left:10px;"><i class="fa-external-link-sign"></i> <?php echo smartyTranslate(array('s'=>'Live Theme Configurator','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</a> 
</p>

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#modulesetting" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'General Setting','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</a></li>
  <li><a href="#sitetools" id="sitetools-button" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Tools','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="modulesetting"> 
    <?php echo $_smarty_tpl->tpl_vars['configform']->value;?>

  </div>
 
  <div class="tab-pane" id="sitetools">
   

    <form method="post" action="" id="installmodfrm" enctype="multipart/form-data">
    <div class="panel">
                <div class="panel-heading">
                  <?php echo smartyTranslate(array('s'=>'Data Sample Modules','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>

                </div>
                  <div class="panel panel-content">
                         <div class="alert alert-danger">
                          <div>+ <?php echo smartyTranslate(array('s'=>'This Tool allow install datamples to make look and feel like as demo on existed store.','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</div>
                          <div>+ <?php echo smartyTranslate(array('s'=>'Click to Import Sample Configuration to install DataSample Of Configuration Of Modules Make For Actived Theme.','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</div>
                          <div>+ <?php echo smartyTranslate(array('s'=>'If Modules are ready with your old configurations, please click to backup button that will restores yours when clicking Restore button','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</div>
                          <div>+ <b><?php echo smartyTranslate(array('s'=>'Install Sample Queries feature is only used for module(s) which have not even installed or tables and records of module(s) is empty','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</b>. Recommend you should make configuration of module(s) in manually way in the guide</div>
                        </div>
                          <br>
                        <div class="clearfix" id="btn-tools">
                          
                          <div class="pull-left">
                            <button type="submit" name="importConfiguration" class="btn btn-info btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Import Sample Configuration','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</button>
                          

                            <button type="submit" name="importQueries" class="btn btn-md btn-warning btn-action"><?php echo smartyTranslate(array('s'=>'Import Sample Queries','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</button>
                            <button type="submit" name="restoreAll" class="btn btn-md btn-danger btn-action"><?php echo smartyTranslate(array('s'=>'Restore','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</button>

                            |   <button type="submit" name="assignHooksModulesInXml" class="btn btn-primary btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Re-Assign Modules - Hooks','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</button> 
                          </div>

                          <div class="pull-right">
                             <button onclick="$('.pts-checkbox').attr('checked','checked')" type="submit" name="backupAll" class="btn btn-danger btn-md">
                              <?php echo smartyTranslate(array('s'=>'Backup','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
 <em><?php echo smartyTranslate(array('s'=>'All Module Using To Restore Old','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</em>
                             </button>
                          </div>
                            
                        </div>
                        <hr>

                        <div class="table-responsive">
                          <table class="table">
                            <tr class="success">
                              <th></th>
                              <th><?php echo smartyTranslate(array('s'=>'Module','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Has Configuration','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Has Queries','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Back Up','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Action','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['sample'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sample']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samples']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sample']->key => $_smarty_tpl->tpl_vars['sample']->value) {
$_smarty_tpl->tpl_vars['sample']->_loop = true;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sample']->value['label'])&&$_smarty_tpl->tpl_vars['sample']->value['hassample']) {?>
                            <tr>
                              <td>
                                <input type="checkbox" class="pts-checkbox" name="modules[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sample']->value['name'],'html','UTF-8');?>
]" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sample']->value['label'],'html','UTF-8');?>
" />
                              </td>
                              <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sample']->value['label'],'html','UTF-8');?>
</td>
                              <td>
                                <span class="label label-info"><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</span>
                              </td>
                              <td> 
                                <?php if ($_smarty_tpl->tpl_vars['sample']->value['queries']) {?>
                                <span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</span>
                                <?php } else { ?>
                                 <span class="label label-danger"><?php echo smartyTranslate(array('s'=>'No','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</span>
                                <?php }?>
                              </td>
                              <td>
                                <?php if ($_smarty_tpl->tpl_vars['sample']->value['backup']) {?>
                                 <span class="label label-info"><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</span>
                                <?php } else { ?>
                                 <span class="label label-danger"><?php echo smartyTranslate(array('s'=>'No','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</span>
                                <?php }?>

                              </td>
                              <td>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sample']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sample']->value['name'],'html','UTF-8');?>
" class="btn btn-sm   btn-default liveeditmod"><?php echo smartyTranslate(array('s'=>'Live Configure','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</a>
                              </td>
                            </tr>
                            <?php }?>
                            <?php } ?>
                          </table>
                        </div>  

                        <div class="row">
                            <div class="btn-group bulk-actions open">
                                 <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                      <?php echo smartyTranslate(array('s'=>'Bulk actions','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
 <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">
                                  <li>
                                    <a onclick="$('#installmodfrm .pts-checkbox').prop('checked',true);return false;" href="#">
                                      <i class="fa-check-sign"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Select all','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>

                                    </a>
                                  </li>
                                  <li>
                                    <a onclick="$('#installmodfrm .pts-checkbox').prop('checked',false);return false;" href="#">
                                      <i class="fa-check-empty"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Unselect all','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>

                                    </a>
                                  </li>
                                </ul>

                            </div>
                        </div>
                  </div> 
                  
      </div>  

   <div class="panel">
        <div class="panel-heading">
          <?php echo smartyTranslate(array('s'=>'Theme Tools','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>

        </div>
        <div class="panel panel-content">
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'If you would like to hook or unhook modules to make look and feeld of theme as the demo. Please click to below button','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
 <br>
                <p> <button type="submit" name="assignHooksAllModulesInXml" class="btn btn-danger btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Re-Assign All Modules - Hooks','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</button> </p>
            </div>
        </div>  
    </div>  


       </form>      
  </div>
</div>
<script type="text/javascript">
 var hideSomeElement = function(){
  $('body',$('.fancybox-iframe').contents()).find("#header").hide();
      $('body',$('.fancybox-iframe').contents()).find("#footer").hide();
      $('body',$('.fancybox-iframe').contents()).find(".page-head, #nav-sidebar ").hide();
      $('body',$('.fancybox-iframe').contents()).find("#content.bootstrap").css( 'padding',0).css('margin',0);


 };

$(".pts-fancybox").fancybox({
  'type':'iframe',
  'width':960,
  'height':500});


$(".liveeditmod, .pts-fancybox").fancybox({
  'type':'iframe',
  'width':960,
  'height':500,
  afterLoad:function(   ){
    if( $('body',$('.fancybox-iframe').contents()).find("#main").length  ){  
        hideSomeElement();
         $('.fancybox-iframe').load( hideSomeElement );

    }else { 
      $('body',$('.fancybox-iframe').contents()).find("#psException").html('<div class="alert error"><?php echo smartyTranslate(array('s'=>'No Configuration Avairiable','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
</div>');
    }
  }
});
</script>
<script>
  $(function () {
 //   $('#myTab a:first').tab('show')
  })

  $("#btn-tools  button.btn-action").click( function() {  
      if( $('.pts-checkbox:checked').length > 0 ){
      }else {
        alert( '<?php echo smartyTranslate(array('s'=>'Please select module(s) to do this action.','d'=>'Modules.Ptsthemepanel.Admin'),$_smarty_tpl);?>
');
        return false;
      }
      return true;
  } );
</script>
</div>


<div class="col-sm-3">
  <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
      <ul class="nav bs-docs-sidenav nav-pills nav-stacked  img-rounded">
         <?php  $_smarty_tpl->tpl_vars['btnnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btnnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['btnnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btnnavs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['btnnav']->key => $_smarty_tpl->tpl_vars['btnnav']->value) {
$_smarty_tpl->tpl_vars['btnnav']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btnnavs']['iteration']++;
?>
          <li><a  href="#fieldset_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(($_smarty_tpl->getVariable('smarty')->value['foreach']['btnnavs']['iteration']-1),'html','UTF-8');?>
"><i class="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btnnav']->value['icon'],'html','UTF-8');?>
"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btnnav']->value['title'],'html','UTF-8');?>
</a></li>
         <?php } ?> 
       </ul> <div class="arrow_box"></div>
  </div>
 
</div>  <?php }} ?>
