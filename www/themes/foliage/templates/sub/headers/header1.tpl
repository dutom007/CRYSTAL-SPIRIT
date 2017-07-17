{**************************************
       HEADER 1
***************************************}

<div class="header1">

  {block name='header_nav'}
    <nav class="header-nav">
      <div class="container">
          <div class="hidden-md-down">
            <div class="container hidden-md-down">
              <div class="row nav-top">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 left-nav">
                  {hook h='displayNav'}
                </div>
                <div class="col-md-4 col-lg-4 perfect-center" id="_desktop_logo">
                  <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
                    <a href="{$urls.base_url}" title="{$shop.name}">
                      <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
                    </a>
                  </div>
                </div>
                <div class="position-static header-right col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  {capture name='displayNav2'}{hook h='displayNav2'}{/capture}
                   {if $smarty.capture.displayNav2}
                    <div id="_desktop_setting">
                      <div class=" setting-btn dropdown js-dropdown">
                        <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="">
                          <i class="material-icons expand-more">settings</i>
                          <i class="material-icons expand-more">arrow_drop_down</i>
                        </a>
                        <div class="dropdown-menu">
                           {$smarty.capture.displayNav2 nofilter}
                        </div>
                      </div>
                    </div>
                    {/if}
                   {hook h='displayTop'}  
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="hidden-lg-up text-xs-center header-mobile mobile"> 
            <button class="btn canvas-menu float-xs-left" data-toggle="offcanvas" type="button"><span class="material-icons">dehaze</span>
            </button> 
            <div class="float-xs-right" id="_mobile_search"></div>                 
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_setting"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="contact_link" id="_mobile_contact_link"></div>
            <div class="clearfix"></div>
          </div>
      </div>
    </nav>
  {/block}
  {block name='header_top'}
    <div class="header-top  hidden-md-down">
      <div class="container">
        <div id="_desktop_menu" class="ps-desktop-megamenu position-static col-lg-8">
            {hook h="displayMainmenu"}
        </div>  
      </div>
    </div> 
    {hook h='displayNavFullWidth'}
  {/block}
</div>
