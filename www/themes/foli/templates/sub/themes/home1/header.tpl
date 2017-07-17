{**************************************
	     HEADER DEFAULT
***************************************}

	<header id="header" class="header-default">
			<div id="topbar" class="topbar clearfix">
					<div class="topbar-inner clearfix">
						{if class_exists('PtsthemePanel')}
				    	<div class="float-xs-left">
								{plugin module='blockcontact' hook='displayNav'}
				    	</div>		
						{/if}
						{hook h="displayNav"}	
					</div>					
			</div>	
			<div  id="header-main" class="clearfix">
				<div class="header-main-inner">
					<div id="header_logo">
						<div id="logo-theme" class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
							<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
								<img class="logo img-responsive {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if}" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"/>
							</a>
						</div>
					</div>			
		      {if isset($HOOK_TOP)}
		        <div class="header-right float-xs-right">
								{$HOOK_TOP}
		        		{if class_exists('PtsthemePanel')}
						    	<div class="float-xs-right">
										{plugin module='blocksearch' hook='displayTop'}
						    	</div>		
								{/if}
						</div>
					{/if}
				  <div id="pts-mainnav">
	        	<div class="main-menu">
				        {hook h="displayMainmenu"}
				    </div>
				  </div>	
				</div>
			</div>
	</header>