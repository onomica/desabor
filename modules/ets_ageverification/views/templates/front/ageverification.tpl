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

<div class="ets_av_overload active">
    <div class="ets_av_table">
        <div class="ets_av_table_cell">
            <div class="ets_av_content_popup">
                <div class="panel ets_av_ageverification{if !empty($positionAt)} ets_av_position_at_{$positionAt|escape:'html':'UTF-8'}{/if}">
                    {if $ETS_AV_ICON|trim !== ''}
                        <img class="img-thumbnail" src="{$ETS_AV_ICON_URL nofilter}" alt="{$ETS_AV_TITLE|escape:'html':'UTF-8'}" title="{$ETS_AV_TITLE|escape:'html':'UTF-8'}" style="max-width: 150px">
                    {/if}
                    {if $ETS_AV_TITLE|trim !== ''}
                        <h4 class="ets_av_title">{$ETS_AV_TITLE nofilter}</h4>
                    {/if}
                    {if $ETS_AV_DESCRIPTION|trim !== ''}
                        <div class="ets_av_desc">{$ETS_AV_DESCRIPTION nofilter}</div>
                    {/if}
                    {if $ETS_AV_VERIFICATION_TYPE|trim == 'birthdate' || isset($admin) && $admin}
                        <div class="ets_av_verification_type birthdate {if isset($admin) && $admin && $ETS_AV_VERIFICATION_TYPE|trim == 'birthdate'} active{/if}">
                            <form id="ets_av_age_verification" class="defaultForm form-horizontal" action="{$action nofilter}" enctype="multipart/form-data" type="POST">
                                <div class="fieldset">
                                    <div class="heading">
                                        <h4>{l s='Enter your date of birth' mod='ets_ageverification'}</h4>
                                    </div>
                                    <div class="wrapper">
                                        {if $months}
                                            <label for="month">
                                                <span class="title_label">{l s='Month' mod='ets_ageverification'}</span>
                                                <select id="month" name="month">
                                                    {foreach from=$months key='id' item='month'}
                                                        <option value="{$id|escape:'html':'UTF-8'}">{$month|escape:'html':'UTF-8'}</option>
                                                    {/foreach}
                                                </select>
                                            </label>
                                        {/if}
                                        {if $days}
                                            <label for="day">
                                                <span class="title_label">{l s='Day' mod='ets_ageverification'}</span>
                                                <select id="day" name="day">
                                                    {foreach from=$days item='day'}
                                                        <option value="{$day|escape:'html':'UTF-8'}">{$day|escape:'html':'UTF-8'}</option>
                                                    {/foreach}
                                                </select>
                                            </label>
                                        {/if}
                                        {if $years}
                                            <label for="year">
                                                <span class="title_label">{l s='Year' mod='ets_ageverification'}</span>
                                                <select id="year" name="year">
                                                    {foreach from=$years item='year'}
                                                        <option value="{$year|escape:'html':'UTF-8'}">{$year|escape:'html':'UTF-8'}</option>
                                                    {/foreach}
                                                </select>
                                            </label>
                                        {/if}
                                    </div>
                                <div class="error_box"></div>
                                <div class="footer">
                                    <a class="btn btn-default ets_av_cancel"  href="https://www.google.com/">{l s='Exit' mod='ets_ageverification'}</a>
                                    <button class="btn btn-primary ets_av_primary" name="ets_av_submit">{l s='Submit' mod='ets_ageverification'}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    {/if}
                    {if $ETS_AV_VERIFICATION_TYPE|trim == 'their_self' || isset($admin) && $admin}
                        <div class="ets_av_verification_type their_self footer ets_av_footer{if isset($admin) && $admin && $ETS_AV_VERIFICATION_TYPE|trim == 'their_self'} active{/if}">
                            <a class="btn btn-default ets_av_cancel" href="https://www.google.com/">{l s='No, I\'m under 18' mod='ets_ageverification'}</a>
                            <a id="ets_av_their_self" class="btn btn-primary ets_av_primary ets_av_submit" href="{$action nofilter}">{l s='Yes, I am 18+' mod='ets_ageverification'}</a>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
<style id="ets_av_background_and_color">
    .ets_av_primary {
        color: {$ETS_AV_SUBMIT_LABEL_COLOR|escape:'html':'UTF-8'} !important;
        background-color: {$ETS_AV_SUBMIT_BACKGROUND_COLOR|escape:'html':'UTF-8'} !important;
        border-color: {$ETS_AV_SUBMIT_BACKGROUND_COLOR|escape:'html':'UTF-8'} !important;
    }
    .ets_av_primary:hover {
        color: {$ETS_AV_SUBMIT_LABEL_HOVER|escape:'html':'UTF-8'} !important;
        background-color: {$ETS_AV_SUBMIT_BACKGROUND_HOVER|escape:'html':'UTF-8'} !important;
        border-color: {$ETS_AV_SUBMIT_BACKGROUND_HOVER|escape:'html':'UTF-8'} !important;
    }
</style>