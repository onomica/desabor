{*
* Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*}
{extends file="helpers/form/form.tpl"}
{block name="label"}
	{if isset($input.label)}
		<label class="control-label col-lg-3 {if (isset($input.required) && $input.required && $input.type != 'radio') || (isset($input.showRequired) && $input.showRequired)} required{/if}">
			{if isset($input.hint)}
			<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{if is_array($input.hint)}
						{foreach $input.hint as $hint}
							{if is_array($hint)}
								{$hint.text|escape:'html':'UTF-8'}
							{else}
								{$hint|escape:'html':'UTF-8'}
							{/if}
						{/foreach}
					{else}
						{$input.hint|escape:'html':'UTF-8'}
					{/if}">
			{/if}
			{$input.label|escape:'html':'UTF-8'}
			{if isset($input.hint)}
			</span>
			{/if}
		</label>
	{/if}
{/block}
{block name="legend"}
	{$smarty.block.parent}
    <div class="form-wrapper">
        <div class="form-group" style="">
            <label class="control-label col-lg-3 "> {l s='Number of days for which the product is considered "New"' mod='ets_newproducts'} </label>
            <div class="col-lg-8">
                <div class="input-group">
                    <input id="PS_NB_DAYS_NEW_PRODUCT" class="" name="PS_NB_DAYS_NEW_PRODUCT" value="{$PS_NB_DAYS_NEW_PRODUCT|escape:'html':'UTF-8'}" type="text" />
                    <span class="input-group-addon">{l s='Day(s)' mod='ets_newproducts'} </span>
                </div>
            </div>
        </div>
    </div>
    <div class="ets_newp_position_display">
        <span class="title">{l s='Display positions' mod='ets_newproducts'}</span>
        <ul id="sidebar-positions" class="sidebar-positions">
            <input type="hidden" name="current_tab" value="{$current_tab|escape:'html':'UTF-8'}" />
            <li id="sidebar-position-home" class="sidebar-position home_block{if $current_tab=='home_block'} active{/if}">
                    <div class="title-position" data-tab="home_block">{l s='Home page' mod='ets_newproducts'}</div>
            </li>
            <li id="sidebar-position-left" class="sidebar-position left_block{if $current_tab=='left_block'} active{/if}">
                <div class="title-position" data-tab="left_block">{l s='Left column' mod='ets_newproducts'}</div>
                <label class="ets_newp_switch {if $ETS_NEWP_ENABLED_IN_LEFT} active{/if}">
                    <input class="ets_newp_position"{if $ETS_NEWP_ENABLED_IN_LEFT} checked="checked"{/if} value="1" name="ETS_NEWP_ENABLED_IN_LEFT" type="checkbox" />
                    <span class="ets_newp_position_label on">{l s='On' mod='ets_newproducts'}</span>
                    <span class="ets_newp_position_label off">{l s='Off' mod='ets_newproducts'}</span>
                </label>
            </li>
            <li id="sidebar-position-right" class="sidebar-position right_block{if $current_tab=='right_block'} active{/if}">
                <div class="title-position" data-tab="right_block">{l s='Right column' mod='ets_newproducts'}</div>
                <label class="ets_newp_switch {if $ETS_NEWP_ENABLED_IN_RIGHT} active{/if}">
                    <input class="ets_newp_position"{if $ETS_NEWP_ENABLED_IN_RIGHT} checked="checked"{/if} value="1" name="ETS_NEWP_ENABLED_IN_RIGHT" type="checkbox" />
                    <span class="ets_newp_position_label on">{l s='On' mod='ets_newproducts'}</span>
                    <span class="ets_newp_position_label off">{l s='Off' mod='ets_newproducts'}</span>
                </label>
            </li>
            <li id="sidebar-position-left" class="sidebar-position product_block{if $current_tab=='product_block'} active{/if}">
                <div class="title-position" data-tab="product_block">{l s='Product detail page' mod='ets_newproducts'}</div>
                <label class="ets_newp_switch {if $ETS_NEWP_ENABLED_IN_PRODUCT} active{/if}">
                    <input class="ets_newp_position"{if $ETS_NEWP_ENABLED_IN_PRODUCT} checked="checked"{/if} value="1" name="ETS_NEWP_ENABLED_IN_PRODUCT" type="checkbox" />
                    <span class="ets_newp_position_label on">{l s='On' mod='ets_newproducts'}</span>
                    <span class="ets_newp_position_label off">{l s='Off' mod='ets_newproducts'}</span>
                </label>
            </li>
        </ul>
    </div>
{/block}
{block name="input_row"}
    {if $input.name=='ETS_NEWP_TILE_HOME_BLOCK' || $input.name=='ETS_NEWP_TILE_LEFT_BLOCK' || $input.name=='ETS_NEWP_TILE_RIGHT_BLOCK' || $input.name=='ETS_NEWP_TILE_PRODUCT_BLOCK'}
        <div class="form-group{if isset($input.form_group_class)} {$input.form_group_class|escape:'html':'UTF-8'}{/if}">
            <span class="title-page">
                {if $input.name=='ETS_NEWP_TILE_HOME_BLOCK'}
                    {l s='Display new products on home page' mod='ets_newproducts'}
                {/if}
                {if $input.name=='ETS_NEWP_TILE_LEFT_BLOCK'}
                    {l s='Display new products on left column' mod='ets_newproducts'}
                {/if}
                {if $input.name=='ETS_NEWP_TILE_RIGHT_BLOCK'}
                    {l s='Display new products on right column' mod='ets_newproducts'}
                {/if}
                {if $input.name=='ETS_NEWP_TILE_PRODUCT_BLOCK'}
                    {l s='Display new products on product detail page' mod='ets_newproducts'}
                {/if}
            </span>
        </div>
    {/if}
    <div class="ets_baw_row row_{$input.name|escape:'html':'UTF-8'}">
        {$smarty.block.parent}
    </div>
{/block}