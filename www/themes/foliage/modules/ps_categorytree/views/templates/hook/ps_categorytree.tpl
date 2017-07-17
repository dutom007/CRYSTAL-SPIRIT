{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}


{function name="categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
        <ul class="category-sub-menu">
          {foreach from=$nodes item=node}
            <li data-depth="{$depth}">
              {if $depth===0}
				<!-- Ajout class leftmenu au lien actif -->
				{if strpos($node.link, $currenturl) !== false}
					<a href="{$node.link}" class="leftmenu">{$node.name}</a >   
				{else}
					<a href="{$node.link}" >{$node.name}</a >
				{/if}
				<!-- -->
                {if $node.children}
                  <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                    <i class="material-icons add">keyboard_arrow_down</i>
                    <i class="material-icons remove">keyboard_arrow_up</i>
                  </div>
                  <div class="collapse" id="exCollapsingNavbar{$node.id}">
                    {categories nodes=$node.children depth=$depth+1}
                  </div>
                {/if}
              {else}
                <a class="category-sub-link" href="{$node.link}">{$node.name}</a>
                {if $node.children}
                  <span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                    <i class="material-icons arrow-right">keyboard_arrow_down</i>
                    <i class="material-icons arrow-down">keyboard_arrow_up</i>
                  </span>
                  <div class="collapse" id="exCollapsingNavbar{$node.id}">
                    {categories nodes=$node.children depth=$depth+1}
                  </div>
                {/if}
              {/if}
            </li>
          {/foreach}
        </ul>
    {/if}
  {/strip}
{/function}

<div class="block-categories hidden-sm-down block">
  <h4 class="title-sidebar">{l s='Categories' d='Shop.Theme'}</h4>
  <div class="block_content">
    <ul class="category-top-menu">
      <li>{categories nodes=$categories.children}</li>
    </ul>
  </div>
</div>
