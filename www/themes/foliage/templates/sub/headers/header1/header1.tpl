{**************************************
	     HEADER 1
***************************************}

	<header id="header" class="header1">
			<div  id="header-main" class="clearfix">
				<div class="container-fluid">
					<div class="row">
						<div id="header_logo" class="float-xs-left">
							<div id="logo-theme" class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
								<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
									<img class="logo img-responsive {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if}" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"/>
								</a>
							</div>
						</div>			
	      		<div class="main-menu pull-left">
					    {hook h="displayMainmenu"}
						</div>	
			      {if isset($HOOK_TOP)}
			        <div class="header-right float-xs-right">
									{$HOOK_TOP}
							</div>
						{/if}
						{if class_exists('PtsthemePanel')}
							<div class="float-xs-right">
									{plugin module='blocksearch' hook='displayTop'}	
							</div>
						{/if}
						<div class="topbar clearfix float-xs-right">
							{hook h="displayNav"}	
						</div>	
					</div>
				</div>	
			</div>
	</header>
	{if $page_name =='index' && $DEFAULT_THEMESKIN == home2}
		<div id="top_column" class="hidden-xs hidden-sm top_column fix-top">
			<div class="container">
				<div class="row">
					<div class="verticalmenu col-xs-12 col-sm-12 col-md-3 left">
		        {if class_exists('PtsthemePanel')}
							{plugin module='psverticalmenu' hook='displayLeftColumn'}	
						{/if}
					</div>
				</div>
			</div>	
			<div class="container-fluid">{hook h="displayTopColumn"}</div>
		</div>				
	{/if}