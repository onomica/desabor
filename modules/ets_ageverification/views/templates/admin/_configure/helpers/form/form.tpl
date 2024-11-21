{*
* 2007-2024 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses.
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please, contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2024 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
{extends file="helpers/form/form.tpl"}

{block name="input"}
	{if $input.type == 'file'}
		{assign var="has_file" value="{if isset($input.image) && $input.image|trim !== ''}1{else}0{/if}"}
		{if $has_file|intval < 1}
			<div class="form-group" style="display: none">
				<div class="col-lg-12" id="{$input.name|escape:'html':'UTF-8'}-images-thumbnails">
					<div>
						<p>
							<a class="btn btn-default base64encode" href="{$input.delete_url nofilter}">
								<svg class="w_14 h_14" width="14" height="14" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M704 736v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-576q0-14 9-23t23-9h64q14 0 23 9t9 23zm128 724v-948h-896v948q0 22 7 40.5t14.5 27 10.5 8.5h832q3 0 10.5-8.5t14.5-27 7-40.5zm-672-1076h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z"/></svg> {l s='Delete' mod='ets_ageverification'}
							</a>
						</p>
					</div>
				</div>
			</div>
		{/if}
		{$smarty.block.parent}
		{if $has_file|intval > 0}
			<input type="hidden" name="{$input.name|escape:'html':'UTF-8'}_REMOVED" value="0">
		{/if}
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
{block name="input_row"}
	{if $input.name == 'ETS_AV_ENABLED'}
		<div class="form-group-wrapper">
			{$smarty.block.parent}
	{elseif $input.name == 'ETS_AV_SUBMIT_BACKGROUND_HOVER'}
			{$smarty.block.parent}
		</div>
		<div class="form-group-preview">
			<h4>{l s='Preview' mod='ets_ageverification'}</h4>
			{$widget nofilter}
		</div>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
{block name="autoload_tinyMCE"}
	tinySetup({
	    editor_selector: 'autoload_rte',
		verify_html: false,
		force_br_newlines : true,
		force_p_newlines : false,
		forced_root_block : '',
	    setup: function (ed) {
	        ed.on('keyup change blur', function (ed) {
	            tinyMCE.triggerSave();
	            etsAvPreviewLanguage();
	        });
	    },
	    resize: false,
	    min_height: 350,
	});
{/block}