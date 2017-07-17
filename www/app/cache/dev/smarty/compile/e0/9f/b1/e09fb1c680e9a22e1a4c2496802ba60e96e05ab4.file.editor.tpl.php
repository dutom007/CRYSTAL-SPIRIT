<?php /* Smarty version Smarty-3.1.19, created on 2017-05-15 06:08:53
         compiled from "/home/crystalsdx/www/modules/pspagebuilder/views/templates/admin/pspagebuilder_footer/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193127796159197e352fe972-97725190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09fb1c680e9a22e1a4c2496802ba60e96e05ab4' => 
    array (
      0 => '/home/crystalsdx/www/modules/pspagebuilder/views/templates/admin/pspagebuilder_footer/editor.tpl',
      1 => 1491211280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193127796159197e352fe972-97725190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'export_msg' => 0,
    'profile_link' => 0,
    'savelayout' => 0,
    'profile' => 0,
    'id_pagebuilderprofile' => 0,
    'profiles' => 0,
    'item' => 0,
    'moduleInShop' => 0,
    'cloudlink' => 0,
    'time' => 0,
    'sfxclss' => 0,
    'clxrow' => 0,
    'clxcol' => 0,
    'layoutjson' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197e3539b329_49781935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197e3539b329_49781935')) {function content_59197e3539b329_49781935($_smarty_tpl) {?>
<script type="text/javascript">
    if (current_id_tab === undefined) {
      var current_id_tab = '';
    }
</script>
<div class="bootstrap">
<?php if (isset($_smarty_tpl->tpl_vars['export_msg']->value)&&$_smarty_tpl->tpl_vars['export_msg']->value) {?>
  <div class="alert alert-success">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['export_msg']->value,'html','UTF-8');?>

  </div>
<?php }?>
<div class="pagebuilder-editor"> 
        
        <div id="othertoolpanel" style="display:none" class="container"><form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
" method="post" enctype="multipart/form-data" id="submitpspagebuilderImport">
          <div class="panel panel-default">
            <div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Profiles Tools','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
            <div class="panel-body">

                <div class="alert alert-info">
                  <?php echo smartyTranslate(array('s'=>'Import a profile layout, please select a file and put its profile name','mod'=>'pspagebuilder'),$_smarty_tpl);?>

                </div>

            
                  <div class="form-group clearfix">
                    <label for="condition" class="control-label col-lg-3">   
                        <?php echo smartyTranslate(array('s'=>'Profile Name','mod'=>'pspagebuilder'),$_smarty_tpl);?>

                    </label>
                    <div class="col-lg-3">
                      <input type="text" name="import_name" />
                    </div>
                  </div>
                  <div class="form-group"> 
                    <label for="condition" class="control-label col-lg-3">   
                        <?php echo smartyTranslate(array('s'=>'Select A File:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 
                    </label>
                    <div class="col-lg-3">
                          <input type="file" name="import_file"/>
                    </div>
                  </div>  
               
            </div>
            <div class="panel-footer">
                <button class="btn btn-default pull-left" name="submitpspagebuilderImport" type="submit"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>
            </div>

          </div> </form>  
        </div>

        <div id="helpPanel" style="display:none" class="container">
          <div class="panel panel-default">
            <div class="panel-heading"><?php echo smartyTranslate(array('s'=>'How to hook PS Footer Builder to your footer','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
            <div class="panel-body">
                <div class="alert alert-info">
                  <?php echo smartyTranslate(array('s'=>'Please following exactly these steps:','mod'=>'pspagebuilder'),$_smarty_tpl);?>

                  <ol>
                    <li><?php echo smartyTranslate(array('s'=>'Set the profile you want to show to default','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</li>
                    <li><?php echo smartyTranslate(array('s'=>'Copy this short-code: ','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<code><?php echo smartyTranslate(array('s'=>'{widget name="pspagebuilder"}','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</code></li>
                    <li><?php echo smartyTranslate(array('s'=>'Open your footer template file','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</li>
                    <li><?php echo smartyTranslate(array('s'=>'Paste the short-code below to the area you want to show','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</li>
                  </ol>
                </div>
            </div>
          </div>
        </div>


        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['savelayout']->value,'html','UTF-8');?>
" method="post"   id="frmsavealll">
        
   
        <div id="screenview" class="container"><div class="row">

             
               <div class="col-lg-3"> <div class="screenview-title"><?php echo smartyTranslate(array('s'=>'Design In:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                 <div class="btn-group button-alignments">
                    <button  class="btn btn-default active ptstooltip" data-option="large-screen" type="button" data-toggle="tooltip" data-placement="top" title="Large Devices, Wide Screens"><span class="icon icon-desktop"></span></button>
                    <button  class="btn btn-default ptstooltip" data-option="medium-screen" type="button" data-toggle="tooltip" data-placement="top" title="Medium Devices, Desktops"><span class="icon icon-laptop"></span></button>
                    <button   class="btn btn-default ptstooltip"  data-option="tablet-screen" type="button" data-toggle="tooltip" data-placement="top" title="Small Devices, Tablets"> <span class="icon icon-tablet"></span></button>
                    <button  class="btn btn-default ptstooltip"  data-option="mobile-screen"  type="button" data-toggle="tooltip" data-placement="top" title="Extra Small Devices, Phones"><span class="icon icon-mobile"></span> </button>
                  </div> 
                </div>
                <div class="col-lg-2">
                  <div><?php echo smartyTranslate(array('s'=>'Enable Grid','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                  <div>
                    <div class="btn-group button-enablegrid">
                      <button  class="btn btn-default " onclick="$('#layout-builder').addClass('grid-editor');"  type="button"><span class="icon icon-check-square"></span></button>
                      <button  class="btn btn-default " onclick="$('#layout-builder').removeClass('grid-editor');"  type="button"><span class="icon icon-check-square-o"></span></button>
                    </div> 
                  </div>
                </div>

                  <div class="col-lg-6 pull-right">
                  
                   <div class="input-group pull-left">
                      <div><?php echo smartyTranslate(array('s'=>'Profile Name:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 
                         <a title="<?php echo smartyTranslate(array('s'=>'Click This To Set Active','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" class="setdefault pull-right <?php if ($_smarty_tpl->tpl_vars['profile']->value->isDefault()) {?>active<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
&id_pagebuilderprofile=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value->id,'html','UTF-8');?>
&setdefault=1&ajax=true" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value->id,'html','UTF-8');?>
"> <span class="icon-star"></span></a>
                      </div>
                      <input type="text" name="name" class="form-control" size="25" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value->name,'html','UTF-8');?>
">

                  </div>

                    <div class="pull-right">
                       <input type="hidden" name="savelayoutbuilder" value="1">
                       <input type="hidden" name="id_pagebuilderprofile" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value,'html','UTF-8');?>
">
                        <div><?php echo smartyTranslate(array('s'=>'Switch To A Profile:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                         <span class="icon-rocket"></span> <?php echo smartyTranslate(array('s'=>'Layout Profiles:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
   <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" id="listprofiles" role="menu">
                          <li class="clearfix">
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Create New A Profile','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a>
                          </li>

                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                          <li class="clearfix <?php if ($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?>active<?php }?>">  
                            <a s='Click This To Set Active' <?php if ($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
&id_pagebuilderprofile=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8');?>
</a>
                             <a <?php echo smartyTranslate(array('s'=>'Click This To Set Active','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 class="setdefault pull-right <?php if ($_smarty_tpl->tpl_vars['item']->value['isdefault']) {?>active<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
&id_pagebuilderprofile=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8');?>
&setdefault=1&ajax=true" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8');?>
"> <span class="icon-star"></span></a>
                            <a  title="<?php echo smartyTranslate(array('s'=>'Delete This','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" class="delete pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
&id_pagebuilderprofile=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8');?>
" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8');?>
"> <span class="icon-trash"></span></a>
                          </li>
                         <?php } ?>
                        </ul>
                      </div>

                      <div class="pull-right">
                        <div> <button onclick="$('#helpPanel').toggle();" type="button" id="othertool" class="btn btn-default">
                          <i class="icon-question-sign"></i> <?php echo smartyTranslate(array('s'=>'Tools','mod'=>'Help'),$_smarty_tpl);?>
</button>
                        </div>
                      </div>

                      <div class="pull-right">
                        <div> <button onclick="$('#othertoolpanel').toggle();" type="button" id="othertool" class="btn btn-default">
                          <span class="icon-wrench"></span> <?php echo smartyTranslate(array('s'=>'Tools','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>
                        </div>
                      </div>

                    </div>  
                  </div>

           </div></div>
      
        <hr>
        <?php if (!$_smarty_tpl->tpl_vars['moduleInShop']->value&&$_smarty_tpl->tpl_vars['profile']->value->id) {?>
            <div class="alert alert-warning">
                <button data-dismiss="alert" class="close" type="button"></button>
                <?php echo smartyTranslate(array('s'=>'This profile has not saved with this shop yet. If you want use this profile for this shop, you need click to "Save Layout Profile" button.','mod'=>'pspagebuilder'),$_smarty_tpl);?>

            </div>
          <?php }?>
          <div class="layout-builder-wrapper">
              
               <div id="layout-builder">
                  <div class="inner"></div>

                  <ul class="suggess-add-row-tools suggess-row-container">
                      <li>
                        <div  class="heading"> <?php echo smartyTranslate(array('s'=>'Add Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 </div>
                      </li>  
                      <li class="add-row sg-row ptstooltip" data-columns="12|0|0" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 1 Column In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-30"></div>
                      </li> 
                      
                      <li class="add-row sg-row ptstooltip" data-columns="6|6|0" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-15"></div>
                          <div class="col-width col-width-15"></div>
                      </li> 

                      <li class="add-row sg-row ptstooltip" data-columns="4|4|4" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 3 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-10"></div>
                          <div class="col-width col-width-10"></div>
                          <div class="col-width col-width-10"></div>
                      </li> 

                       <li class="add-row sg-row ptstooltip" data-columns="3|3|3|3" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 4 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-5"></div>
                          <div class="col-width col-width-5"></div>
                          <div class="col-width col-width-5"></div>
                          <div class="col-width col-width-5"></div>
                      </li> 

                      <li class="add-row sg-row ptstooltip" data-columns="4|8" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-10"></div>
                          <div class="col-width col-width-30"></div>
                      </li> 

                       <li class="add-row sg-row ptstooltip" data-columns="8|4" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-30"></div>
                          <div class="col-width col-width-10"></div>
                      </li> 

                      <li class="add-row sg-row ptstooltip" data-columns="3|6|3" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Add 3 Columns In Row','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <div class="col-width col-width-10"></div>
                          <div class="col-width col-width-30"></div>
                          <div class="col-width col-width-10"></div>
                      </li> 

                      <li class="paste-clipboard ptstooltip" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Paste copied row from Clipboard.','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" data-alert="<?php echo smartyTranslate(array('s'=>'You dont have any thing in clipboard.','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                          <i class="material-icons">content_paste</i>
                      </li>

                       <li data-loading-text="<div>Loadding</div>"  class="cloud-copy ptstooltip pull-right" data-toggle="tooltip" data-placement="bottom" title="<?php echo smartyTranslate(array('s'=>'Import from our live cloud','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" >
                       <a class="cloud-copy-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cloudlink']->value,'html','UTF-8');?>
" >  <i class="material-icons">cloud_download</i> </a>
                      </li>
                  </ul> 
                </div>
          </div>    
      
        </form>
       </div>
   
  <div id="custom-width-columns" class="popover top">
    <div class="arrow"></div>
    <div class="popover-title"><?php echo smartyTranslate(array('s'=>'Custom Width Columns','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<span class="wpo-close"></span></div>
    <div class="popover-content clearfix">
       <ul class="suggess-add-row-tools suggess-row-container">
            <li class="add-row sg-row ptstooltip" data-columns="12|0|0" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 1 Column: 12|0|0','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-30"></div>
            </li> 
            
            <li class="add-row sg-row ptstooltip" data-columns="6|6|0" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns: 6|6|0','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-15"></div>
                <div class="col-width col-width-15"></div>
            </li> 

    
            <li class="add-row sg-row ptstooltip" data-columns="4|8" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns: 4|8','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="8|4" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns: 8|4','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-30"></div>
                <div class="col-width col-width-10"></div>
            </li> 


             <li class="add-row sg-row ptstooltip" data-columns="5|7" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 2 Columns: 5|7','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="4|4|4" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 3 Columns: 4|4|4','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-10"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="3|6|3" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 3 Columns: 3|6|3','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
                <div class="col-width col-width-10"></div>
            </li> 

            <li class="add-row sg-row ptstooltip" data-columns="3|3|3|3" data-toggle="tooltip" data-placement="top" title="<?php echo smartyTranslate(array('s'=>'Add 4 Columns: 3|3|3|3','mod'=>'pspagebuilder'),$_smarty_tpl);?>
">
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
            </li> 

      </ul>   
        <hr>
        <form class="form-inline">
         
           <label><?php echo smartyTranslate(array('s'=>'Enter your custom width: (3|3|3|3)'),$_smarty_tpl);?>
</label>  
          <div class="input-group">
 
            <input type="text" class="form-control"  placeholder="4|4|4">
            <div class="input-group-addon text-primary">Apply</div>
          </div>


         
        </form>              
    </div>  
  </div>     


     <div  id="row-builder" class="popover bottom">
                <div class="arrow"></div>
                <div class="popover-title"><?php echo smartyTranslate(array('s'=>'Row Setting','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<span class="wpo-close"></span></div>
                  <div class="popover-content clearfix">
                     <form action="" name="frmrow">
                      <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#row-general" aria-controls="row-general" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'General','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a></li>
                              <li role="presentation"><a href="#row-adjustment" aria-controls="row-adjustment" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Design','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a></li>
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="row-general">
                                      <div class="row-form">
                                         <div class="row">
                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                  <label> <?php echo smartyTranslate(array('s'=>'Background Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                  <div class="inpt-setting-color">
                                                   <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                                                 </div>
                                              </div>  

                                            <div class="inpt-setting col-sm-4 fly-buttons">
                                                <label> <?php echo smartyTranslate(array('s'=>'Text Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                <div class="inpt-setting-color">
                                                  <input type="text" name="textcolor" class="input-color"  data-hex="true"/>
                                               </div>
                                            </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                <label> <?php echo smartyTranslate(array('s'=>'Font Size','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                <input type="text" name="fontsize" class="auto-correct" data-suffix="cm"  data-hex="true"/>
                                            </div>  
                                        </div>  
                                          <div class="inpt-setting fly-buttons">
                                          <label> <?php echo smartyTranslate(array('s'=>'Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                          <?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable(time(), null, 0);?>
                                            <input type="text" name="bgimage" id="uploadimage<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['time']->value,'html','UTF-8');?>
" class="imageuploaded"/>
            
                                          </div>  

                                          <div class="inpt-setting">
                                          <label><?php echo smartyTranslate(array('s'=>'Fullwidth','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                           <select name="fullwidth">
                                              <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                              <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                           </select>
                                          </div>

                                          <div class="inpt-setting">
                                          <label><?php echo smartyTranslate(array('s'=>'Parallax Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                           <select name="parallax">
                                              <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                              <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                           </select>
                                          </div>
                                          <div class="inpt-setting">
                                              <label> <?php echo smartyTranslate(array('s'=>'Class','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                              <input type="text" name="cls" />
                                          </div> 
                                          
                                            <div class="inpt-setting">
                                              <label>
                                                  <?php echo smartyTranslate(array('s'=>'Row Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                                                   <select name="sfxcls">
                                                       <?php  $_smarty_tpl->tpl_vars['clxrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clxrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfxclss']->value['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clxrow']->key => $_smarty_tpl->tpl_vars['clxrow']->value) {
$_smarty_tpl->tpl_vars['clxrow']->_loop = true;
?>
                                                          <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['clxrow']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['clxrow']->value,'html','UTF-8');?>
</option>
                                                      <?php } ?>
                                                   </select>
                                               </label>
                                           </div> 
                                      </div>


                              </div>
                             
                              <div role="tabpanel" class="tab-pane" id="row-adjustment">
                                   <div class="row-form">
                                      

                                        <div class="inpt-setting fly-buttons">
                                            <p> <label> <?php echo smartyTranslate(array('s'=>'Margin','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="margin[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="margin[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="margin[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="margin[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                
                                            </div>    
                                        </div>

                                        <div class="inpt-setting fly-buttons">
                                            <p><label> <?php echo smartyTranslate(array('s'=>'Padding','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="padding[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                            </div>   
                                        </div>

                                       

                                        <div class="inpt-setting fly-buttons">
                                            <p><label> <?php echo smartyTranslate(array('s'=>'Border','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                            <div class="row">
                                                <div class="col-sm-4"> <input type="text" name="border[width]"    class="input-text auto-correct" data-suffix="px" data-hex="true"/></div> 
                                                <div class="col-sm-4"> 
                                                  <select  name="border[type]" >
                                                            <option value=""><?php echo smartyTranslate(array('s'=>'None','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="hidden"><?php echo smartyTranslate(array('s'=>'hidden','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="dotted"><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="dashed"><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="solid"><?php echo smartyTranslate(array('s'=>'solid','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="double"><?php echo smartyTranslate(array('s'=>'double','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="groove"><?php echo smartyTranslate(array('s'=>'groove','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="ridge"><?php echo smartyTranslate(array('s'=>'ridge','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="inset"><?php echo smartyTranslate(array('s'=>'inset','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="outset"><?php echo smartyTranslate(array('s'=>'outset','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                            <option value="inherit"><?php echo smartyTranslate(array('s'=>'inherit','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                  </select>
                                                 

                                                </div> 
                                                <div class="col-sm-4">
                                                  <div class=" inpt-setting-color"> 
                                                  <input type="text" name="border[color]" class="input-color" data-suffix="px" data-hex="true"/></div> 
                                                </div>
                                            </div>   
                                        </div>
                                          <div class="inpt-setting fly-buttons">
                                            <p><label> <?php echo smartyTranslate(array('s'=>'Border Radius','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="bradius[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                
                                            </div>   
                                        </div>

                                  </div>  
                              </div>
                             
                            </div>

                      </div>

                      <hr>
                    
                        <div class="inpt-setting">
                           <button type="submit" class="btn btn-sm btn-primary"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>     
                      </div>
                            
                      </form>
                    </div>
                 </div>     
    

 

  
          <div id="col-builder"  class="popover right">
            <div class="arrow"></div>
            <div class="popover-title"><?php echo smartyTranslate(array('s'=>'Column Setting','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 <span class="wpo-close"></span></div>
                   <div class="popover-content clearfix">
                   <form action="" name="frmcol">

                       <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#col-general" aria-controls="col-general" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'General','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a></li>
                              <li role="presentation"><a href="#col-adjustment" aria-controls="col-adjustment" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Design','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a></li>
                               
                            </ul>

                            <div class="tab-content">

                                  <div role="tabpanel" class="tab-pane active" id="col-general">
                                           <div class="row-form">
                                              
                                                
                                                <div class="row">
                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                    <label> <?php echo smartyTranslate(array('s'=>'Background Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                    <div class="inpt-setting-color">
                                                     <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                                                   </div>
                                                </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                  <label> <?php echo smartyTranslate(array('s'=>'Text Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                  <div class="inpt-setting-color">
                                                    <input type="text" name="textcolor" class="input-color"  data-hex="true"/>
                                                 </div>
                                              </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                      <label> <?php echo smartyTranslate(array('s'=>'Font Size','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                                                      <input type="text" name="fontsize" class="auto-correct" data-suffix="cm"  data-hex="true"/>
                                                  </div>  
                                              </div>  
                                                <div class="inpt-setting fly-buttons">
                                                <label> <?php echo smartyTranslate(array('s'=>'Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                                <?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable(time(), null, 0);?>
                                                  <input type="text" name="bgimage" id="uploadimage<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['time']->value,'html','UTF-8');?>
" class="imageuploaded"/>
                  
                                                </div> 
                                                <div class="inpt-setting">
                                                  <label> <?php echo smartyTranslate(array('s'=>'Class','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                                                  <input type="text" name="cls" />
                                                </div> 
                                                <div class="inpt-setting">
                                                   <label>
                                                    <?php echo smartyTranslate(array('s'=>'Column Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                                                     <select name="sfxcls">
                                                        <?php  $_smarty_tpl->tpl_vars['clxcol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clxcol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfxclss']->value['col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clxcol']->key => $_smarty_tpl->tpl_vars['clxcol']->value) {
$_smarty_tpl->tpl_vars['clxcol']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['clxcol']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['clxcol']->value,'html','UTF-8');?>
</option>
                                                        <?php } ?>
                                                     </select>
                                                     </label>
                                                 </div> 
                                              
                                            </div>
                                  </div>

                                  <div role="tabpanel" class="tab-pane" id="col-adjustment">
                                           <div class="row-form">
                                      

                                                <div class="inpt-setting fly-buttons">
                                                    <p> <label> <?php echo smartyTranslate(array('s'=>'Margin','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="margin[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                         <input type="text" name="margin[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="margin[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="margin[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                       
                                                    </div>    
                                                </div>

                                                <div class="inpt-setting fly-buttons">
                                                    <p><label> <?php echo smartyTranslate(array('s'=>'Padding','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="padding[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                         <input type="text" name="padding[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="padding[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="padding[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                       
                                                    </div>   
                                                </div>

                                               

                                                <div class="inpt-setting fly-buttons">
                                                    <p><label> <?php echo smartyTranslate(array('s'=>'Border','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                                    <div class="row">
                                                        <div class="col-sm-4"> <input type="text" name="border[width]"    class="input-text auto-correct" data-suffix="px" data-hex="true"/></div> 
                                                        <div class="col-sm-4"> 
                                                          <select  name="border[type]" >
                                                                    <option value=""><?php echo smartyTranslate(array('s'=>'None','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="hidden"><?php echo smartyTranslate(array('s'=>'hidden','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="dotted"><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="dashed"><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="solid"><?php echo smartyTranslate(array('s'=>'solid','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="double"><?php echo smartyTranslate(array('s'=>'double','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="groove"><?php echo smartyTranslate(array('s'=>'groove','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="ridge"><?php echo smartyTranslate(array('s'=>'ridge','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="inset"><?php echo smartyTranslate(array('s'=>'inset','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="outset"><?php echo smartyTranslate(array('s'=>'outset','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                                    <option value="inherit"><?php echo smartyTranslate(array('s'=>'inherit','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                                          </select>
                                                         

                                                        </div> 
                                                        <div class="col-sm-4">
                                                          <div class=" inpt-setting-color"> 
                                                          <input type="text" name="border[color]" class="input-color" data-suffix="px" data-hex="true"/></div> 
                                                        </div>
                                                    </div>   
                                                </div>
                                                  <div class="inpt-setting fly-buttons">
                                                    <p><label> <?php echo smartyTranslate(array('s'=>'Border Radius','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="bradius[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                          <input type="text" name="bradius[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="bradius[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="bradius[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                      
                                                    </div>   
                                                </div>

                                          </div>  
                                  </div>

                            <hr>
                            <div class="inpt-setting">
                                  <button type="submit" class="btn btn-primary">  <?php echo smartyTranslate(array('s'=>'Save','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>  
                           </div> 


                        </div>
                    </form>
              </div>
        </div>
    
       <script type="text/javascript">
           $(".imageuploaded").WPO_Gallery({ gallery:false,preview:false,widgetaction:false});
        </script>

       <script type="text/javascript">
           $(".ptstooltip").tooltip();
    
      $(document).ready(function() {
          var config = { 
              
              urlwidgets: listwidgets,
              urlwidget: widgetform,
              urlwidgetdata: widgetdata,
               controller:'AdminPspagebuilderFooter' 
          };
          
          $("#layout-builder").WPO_Layout(config, '<?php echo $_smarty_tpl->tpl_vars['layoutjson']->value;?>
');
      });


      $("#listprofiles a.delete").click(function() {
          var $a = $(this);
          if (confirm('<?php echo smartyTranslate(array('s'=>'Are you sure to delete this?','mod'=>'pspagebuilder'),$_smarty_tpl);?>
')) {
              $.ajax({
                url:  $a.attr('href'),
                data:{
                  rand:Math.random(),
                  controller : 'AdminPspagebuilderFooter',
                  action : 'deleteProfile',
                  ajax : true,
                  id_tab : current_id_tab
                },
                type:'post',
                dataType:'json'
              }).done(function(output) {
                 if (output.id == $('[name=id_pagebuilderprofile]').val()) {
                    location.href = PS_PAGEbuilder_URL;
                 }else {
                    $a.parent().remove();
                 } 
              });

              return false;
          }
           return false;
      });
     </script>    </div><?php }} ?>
