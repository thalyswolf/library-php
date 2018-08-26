{*
* 2007-2017 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div dir="ltr" style="text-align: left;" trbidi="on">
    <script type="text/javascript">
        (function(d, s, id){
            var js, ref = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)){
                js = d.createElement(s); js.id = id; js.async = true;
                js.src = "https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js";
                ref.parentNode.insertBefore(js, ref);
            }
        }(document, "script", "paypal-js"));
    </script>
</div>
<div class="container-fluid paypal-nav">
    <ul class="nav nav-pills navbar-separator">
        <li {if !$ec_paypal_active && !$ec_card_active}class="active"{/if}><a data-toggle="pill" href="#paypal_conf"><span>{l s='Products' mod='paypal'}</span></a></li>
        <li {if $ec_paypal_active || $ec_card_active}class="active"{/if}><a data-toggle="pill" href="#paypal_params"><span>{l s='Settings' mod='paypal'}</span></a></li>
    </ul>
    <div class="tab-content">
        <div id="paypal_conf"  class="tab-pane fade {if !$ec_paypal_active && !$ec_card_active}in active{/if}">
            <div class="box half left">
                <div class="logo">
                    <img src="{$path|escape:'html':'UTF-8'}/views/img/paypal_btm.png" alt=""  />
                </div>
                <div class="info">
                    <p class="paypal-bold">{l s='Merchant Country' mod='paypal'} {$country|escape:'html':'UTF-8'}</p>
                    <p><i>
                            {l s='If not specified, Default Country from configuration is used. To modify : ' mod='paypal'}
                            <a target="_blank" href="{$localization|escape:'html':'UTF-8'}">{l s='International > Localization' mod='paypal'}</a>
                        </i></p>
                    <p class="paypal-bold">
                        {l s='Benefit from PayPal’s complete payments platform and grow your business online, on mobile and internationally' mod='paypal'}
                    </p>
                </div>
            </div>

            <div class="box half right">
                <ul class="tick">
                    <li><span class="paypal-bold">{l s='Target more customers' mod='paypal'}</span><br />{l s='More than 190 million PayPal active users worldwide' mod='paypal'}</li>
                    <li><span class="paypal-bold">{l s='Truly global' mod='paypal'}</span><br />{l s='Access a whole world of customers. PayPal is available in more than 200 markets and in 25 currencies' mod='paypal'}</li>
                    <li><span class="paypal-bold">{l s='Safer' mod='paypal'}</span><br />{l s='We can protect your business with our Seller Protection and advanced encryption and fraud prevention tools' mod='paypal'}</li>
                    <li><span class="paypal-bold">{l s='Accept local and international payments' mod='paypal'}</span></li>
                </ul>
            </div>
            <div style="clear:both;"></div>

            <div class="active-products">
                <p><b>{l s='2 PayPal products selected for you' mod='paypal'}</b></p>
                <div class="col-sm-6">
                    <div class="panel">
                        <img class="paypal-products" src="{$path|escape:'html':'UTF-8'}/views/img/paypal.png">
                        <p>
                            {l s='Accept PayPal payments, you can optimize your conversion rate.' mod='paypal'}
                        </p>
                        <p>
                            {l s='Fast checkout and fast payment. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch' mod='paypal'}&trade;
                        </p>
                        <p>
                            <a target="_blank" href="https://www.paypal.com/webapps/mpp/express-checkout">{l s='More Information' mod='paypal'}</a>
                        </p>
                        <div class="bottom">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/paypal_btm.png" class="product-img">
                            <a class="btn btn-default pull-right" href="{$return_url|escape:'html':'UTF-8'}&method=EXPRESS_CHECKOUT&with_card=0{if $ec_paypal_active}&modify=1{/if}" >{if $ec_paypal_active}{l s='Modify' mod='paypal'}{else}{l s='Activate' mod='paypal'}{/if}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <img class="paypal-products" src="{$path|escape:'html':'UTF-8'}/views/img/paypal.png">
                        <p>
                            {l s='Accept credit cards, debit cards and PayPal payments' mod='paypal'}
                        </p>
                        <p>
                            {l s='Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch' mod='paypal'}&trade;
                        </p>
                        <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard">{l s='More Information' mod='paypal'}</a></p>
                        <div class="bottom">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/paypal_btm.png" class="product-img">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/mastercard.png" class="product-img">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/visa.png" class="product-img">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/discover.png" class="product-img">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/american_express.png" class="product-img">
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/maestro.png" class="product-img">
                            <a class="btn btn-default pull-right" href="{$return_url|escape:'html':'UTF-8'}&method=EXPRESS_CHECKOUT&with_card=1&{if $ec_card_active}&modify=1{/if}">{if $ec_card_active}{l s='Modify' mod='paypal'}{else}{l s='Activate' mod='paypal'}{/if}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="paypal_params" class="tab-pane fade col-sm-12 {if $ec_paypal_active || $ec_card_active}in active{/if}">
            <div class="panel parametres">
                <div class="panel-body">
                    <div class="col-sm-8 help-left">
                        {if !$paypal_card}
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/paypal.png">
                            <p>
                                {l s='Accept PayPal payments, you can optimize your conversion rate.' mod='paypal'} : {$active_products|escape:'html':'UTF-8'}
                            </p>
                            <p>
                                {l s='Fast checkout and fast payment. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch' mod='paypal'}&trade;
                            </p>
                            <p>
                                <a target="_blank" href="https://www.paypal.com/webapps/mpp/express-checkout">{l s='More Information' mod='paypal'}</a>
                            </p>
                        {else}
                            <img src="{$path|escape:'html':'UTF-8'}/views/img/paypal.png">
                            <p>
                                {l s='Accept credit cards, debit cards and PayPal payments' mod='paypal'} : {$active_products|escape:'html':'UTF-8'}
                            </p>
                            <p>
                                {l s='Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch' mod='paypal'}&trade;
                            </p>
                            <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard">{l s='More Information' mod='paypal'}</a></p>
                        {/if}
                    </div>
                    <div class="col-sm-3 help-right">
                        <p>
                            {l s='More Information' mod='paypal'} ?
                            <a target="_blank" href="https://www.paypal.com/webapps/mpp/contact-us">{l s='Contact us' mod='paypal'}</a>
                        </p>
                        <p>
                            {l s='API user name SandBox' mod='paypal'} : {if $api_user_name_sandbox == ''}{l s='not specified' mod='paypal'}{else}{$api_user_name_sandbox|escape:'htmlall':'UTF-8'}{/if}
                        </p>
                        <p>
                            {l s='API user name Live' mod='paypal'} : {if $api_user_name_live == ''}{l s='not specified' mod='paypal'}{else}{$api_user_name_live|escape:'htmlall':'UTF-8'}{/if}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div style="display: none;">
    <div id="content-rounding-settings">
        <form action="{$return_url|escape:'javascript':'UTF-8'}" method="post" id="credential-configuration" class="bootstrap">

            <h4>{l s='Warning' mod='paypal'}</h4>

            <p>{l s='Your product rounding settings are not compliant with PayPal module.' mod='paypal'}</p>
            <p style='margin-bottom: 30px;'>{l s='Without modification of your PrastaShop configuration, PayPal will round items from cart to your customers.' mod='paypal'}</p>

            <p>
                <button class="btn btn-default"  onclick="$.fancybox.close();return false;">{l s='I understand' mod='paypal'}</button>
                <button class="btn btn-info" name="save_rounding_settings">{l s='Change rounding settings' mod='paypal'}</button>
            </p>
        </form>
    </div>

</div>

<script type="text/javascript">

    function display_rounding()
    {
        $.fancybox.open([
            {
                type: 'inline',
                autoScale: true,
                minHeight: 30,
                content: $('#content-rounding-settings').html(),
            }
        ]);
    }

    $(document).ready(function(){

        var need_rounding = {$need_rounding|escape:'html':'UTF-8'};

        $('#configuration_form input[name=paypal_sandbox]').change(function(event) {
            sandbox = $('#configuration_form input[name=paypal_sandbox]:checked').val();
            if (need_rounding && sandbox == 0) {
                display_rounding();
            }
        });

        $('#change_product').click(function(event) {
            event.preventDefault();
            $('a[href=#paypal_conf]').click();
        });

        $('#configuration_form').insertAfter($('.parametres'));
        //var activate_link = "{*$PartnerboardingURL|escape:'html':'UTF-8'*}";

    });

</script>