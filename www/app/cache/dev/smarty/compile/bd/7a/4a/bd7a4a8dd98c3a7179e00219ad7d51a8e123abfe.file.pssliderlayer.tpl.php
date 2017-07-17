<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 10:51:35
         compiled from "modules/pssliderlayer/views/templates/hook/pssliderlayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125271164259197d1b02c379-17766327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7a4a8dd98c3a7179e00219ad7d51a8e123abfe' => 
    array (
      0 => 'modules/pssliderlayer/views/templates/hook/pssliderlayer.tpl',
      1 => 1494859232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125271164259197d1b02c379-17766327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59197d1b0cb015_58391949',
  'variables' => 
  array (
    'sliderParams' => 0,
    'sliderIDRand' => 0,
    'sliders' => 0,
    'slider' => 0,
    'layer' => 0,
    'count' => 0,
    'sliderImgUrl' => 0,
    'sliderFullwidth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59197d1b0cb015_58391949')) {function content_59197d1b0cb015_58391949($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/crystalsdx/www/vendor/prestashop/smarty/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
<div class="layerslider-wrapper<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['md_width']) {?> col-md-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['md_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-sm-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['xs_width']) {?> col-xs-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['xs_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
    <?php $_smarty_tpl->tpl_vars["sliderParams.group_class"] = new Smarty_variable('', null, 0);?>
<?php }?>
    <div class="bannercontainer banner-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="padding: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['padding'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;margin: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['margin'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['background'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <div id="sliderlayer<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderIDRand']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="rev_slider <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
banner" style="width:100%;height:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; " >
            <ul>
                <?php if ($_smarty_tpl->tpl_vars['sliders']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("61", null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>

                <li <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['data_link'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['data_delay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['data_target'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 data-masterspeed="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['params']['duration'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"  data-transition="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['params']['transition'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-slotamount="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['params']['slot'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-thumb="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['thumbnail'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['slider']->value['background_color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['background_color'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['slider']->value['videoURL']) {?>
                    <div class="caption fade fullscreenvideo" data-autoplay="true" data-x="0" data-y="0" data-speed="500" data-start="10" data-easing="easeOutBack">
                        <iframe src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['videoURL'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?title=0&amp;byline=0&amp;portrait=0;api=1" width="100%" height="100%"></iframe>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['slider']->value['main_image']) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['main_image'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['layersparams'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value['layersparams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
                    <div class="caption<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_class'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_animation']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_animation'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_easing']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_easing'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endanimation']!="auto"&&!$_smarty_tpl->tpl_vars['layer']->value['layer_endtime']) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_endanimation'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"
                         data-x="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_left'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                         data-y="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_top'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                         data-speed="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_speed'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                         data-start="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['time_start'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                         <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                         data-easing="easeOutExpo" <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endtime']) {?>data-end="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_endtime'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-endspeed="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_endspeed'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endeasing']!="nothing") {?>data-endeasing="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_endeasing'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?><?php }?>
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>onclick="window.open('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_link'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
','<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_target'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');"<?php }?>
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['css']) {?>style="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['css'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;z-index: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['count']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                        
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="image") {?>
                         <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderImgUrl']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_content'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                         <?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="video") {?>
                            <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_video_type']=="vimeo") {?>
                            <iframe src="http://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&amp;title=0&amp;byline=0&amp;portrait=0;api=1" width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></iframe>
                            <?php } else { ?>
                            <iframe width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" src="http://www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                            <?php }?>
                         <?php } else { ?>
                             
                            <?php echo htmlspecialchars(html_entity_decode(smarty_modifier_replace($_smarty_tpl->tpl_vars['layer']->value['layer_caption'],"_ASM_","&"),@constant('ENT_QUOTES'),"UTF-8"), ENT_QUOTES, 'UTF-8');?>

                         <?php }?>

                    </div>
                    <?php } ?>
                    <?php }?>
                </li>           
                <?php } ?>
                <?php }?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['show_time_line']) {?> 
            <div class="tp-bannertimer tp-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['time_line_position'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></div>
            <?php }?>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
</div>
<?php }?>

<script type="text/javascript">
             
                 var tpj=jQuery;
                 
                 if (tpj.fn.cssOriginal!=undefined)
                 tpj.fn.css = tpj.fn.cssOriginal;

                 tpj("#sliderlayer<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderIDRand']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
").revolution(
                 {
                     delay:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['delay'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
                 startheight:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
                 startwidth:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,


                 hideThumbs:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['hide_navigator_after'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,

                 thumbWidth:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_width'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,                     
                 thumbHeight:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_height'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
                 thumbAmount:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_amount'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
                 <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_type']!="both") {?>
                 navigationType:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_type'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
                 <?php } else { ?>
                 navsecond:"both",
                 <?php }?>
                 navigationArrows:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_arrows'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",                
                 <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['navigation_style']!="none") {?>
                 navigationStyle:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['navigation_style'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",          
                 <?php }?>

                 navOffsetHorizontal:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['offset_horizontal']) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['offset_horizontal'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
                 <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['offset_vertical']) {?>
                 navOffsetVertical:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['offset_vertical'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,  
                <?php }?>    
                 touchenabled:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['touch_mobile']) {?>on<?php } else { ?>off<?php }?>",         
                 onHoverStop:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['stop_on_hover']) {?>on<?php } else { ?>off<?php }?>",                     
                 shuffle:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['shuffle_mode']) {?>on<?php } else { ?>off<?php }?>",  
                 stopAtSlide: <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['auto_play']) {?>-1<?php } else { ?>1<?php }?>,                        
                 stopAfterLoops:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['auto_play']) {?>-1<?php } else { ?>0<?php }?>,                     

                 hideCaptionAtLimit:0,              
                 hideAllCaptionAtLilmit:0,              
                 hideSliderAtLimit:0,           
                 fullWidth:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderFullwidth']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
                 shadow:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['shadow_type'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
                 startWithSlide:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['slider_start_with_slide'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

         
                 });
                 $( document ).ready(function() {
                    $('.caption',$('#sliderlayer<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderIDRand']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
')).click(function(){
                        if($(this).data('link') != undefined && $(this).data('link') != '') location.href = $(this).data('link');
                    });

                    $('li',$('#sliderlayer<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderIDRand']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
')).click(function(){
                        if($(this).data('link') != undefined && $(this).data('link') != '') location.href = $(this).data('link');
                    });
                 });
             
</script><?php }} ?>
