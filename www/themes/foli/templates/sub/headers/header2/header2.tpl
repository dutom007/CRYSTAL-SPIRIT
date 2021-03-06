{**************************************
	     HEADER 2
***************************************}

	<header id="header" class="header2">
		<div id="topbar" class="topbar">
			<div class="container">
					{hook h="displayNav"}
			</div>
		</div>	
		<div  id="header-main" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div id="header_logo">
							<div id="logo-theme" class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
								<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
									<img class="logo img-responsive {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if}" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"/>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-6">
						{if class_exists('PtsthemePanel')}
							{plugin module='ptsblocksearch' hook='displayTop'}	
						{/if}
					</div>
					{if isset($HOOK_TOP)}
					<div class="col-xs-12 col-sm-4 col-md-3">
								{$HOOK_TOP}
					</div>
					{/if}
				</div>		
			</div>	
		</div>
	  <div id="pts-mainnav">
      <div class="container">
      	<div class="row no-margin">
        	<div class="col-xs-12 col-sm-12 col-md-9 no-padding left">
		        <div class="main-menu">
		        	{hook h="displayMainmenu"}
						</div>
					</div>        	
					<div class="col-xs-12 col-sm-12 col-md-3 no-padding right">
		        {if class_exists('PtsthemePanel')}
							{plugin module='psverticalmenu' hook='displayLeftColumn'}	
						{/if}
					</div>					
				</div>
      </div>
    </div>
	</header>