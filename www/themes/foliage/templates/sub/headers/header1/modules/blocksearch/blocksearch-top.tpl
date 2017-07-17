	
		<div class="block-search">
			<div class="search-focus btn  dropdown-toggle" data-toggle="modal" data-target=".search-modal-lg"> 
					<!-- <span class="text-label title">{l s='SEARCH' mod='blocksearch'}</span> -->
					<i class="icon-search"></i>			
			</div>
			<div class="modal fade search-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			    	<div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="gridSystemModalLabel">{l s='Search Products...' mod='blocksearch'}</h4>
			        </div>
			        <div class="modal-body">
						<div id="search_block_top" class="clearfix">
							<form id="searchbox" method="get" action="{$link->getPageLink('search', null, null, null, false, null, true)|escape:'html':'UTF-8'}" >
								<div class="input-group">
									<input type="hidden" name="controller" value="search" />
									<input type="hidden" name="orderby" value="position" />
									<input type="hidden" name="orderway" value="desc" />
									<input class="search_query form-control" type="text" placeholder="{l s='Search items...' mod='blocksearch'}" id="search_query_top" name="search_query" value="{$search_query|escape:'html':'UTF-8'|stripslashes}" />
									<div class="input-group-btn">
										<button class="button-search btn" name="submit_search" type="submit">
											<span class="icon-search"></span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			    </div>
			  </div>
			</div>
		</div>
