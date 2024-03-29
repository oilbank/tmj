{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

	</div>
</div>
{if $display_footer}
<div id="footer" class="bootstrap hide">
	<div class="col-sm-2 hidden-xs">
		<a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade; {$ps_version}</a>
		<a href="http://www.presta-shop.ir/" target="_blank">پارسی</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="{l s='Load time: '}"></i> {number_format(microtime(true) - $timer_start, 3, '.', '')}s</span>
	</div>
	<div class="col-sm-2 hidden-xs social-networks">
		<a class="link-social link-twitter" href="https://twitter.com/PrestaShopIran" target="_blank" title="Twitter">
			<i class="icon-twitter"></i>
		</a>
		<a class="link-social link-facebook" href="https://www.facebook.com/persianpresta" target="_blank" title="Facebook">
			<i class="icon-facebook"></i>
		</a>
		<a class="link-social link-github" href="https://github.com/PrestaShop/PrestaShopIran/" target="_blank" title="Github">
			<i class="icon-github"></i>
		</a>
		<a class="link-social link-google" href="https://www.google.com/+PrestashopIran" target="_blank" title="Google">
			<i class="icon-google-plus"></i>
		</a>
	</div>	

	<div class="col-sm-4 footer-contact">
		<p>
			<a href="http://www.presta-shop.ir/contact_us?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-envelope"></i>
				{l s='Contact'}
			</a>
			/&nbsp;
			<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-bug"></i>
				{l s='Bug Tracker'}
			</a>
			/&nbsp;
			<a href="http://www.presta-shop.ir/forum/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-comments"></i>
				{l s='Forum'}
			</a>
			/&nbsp;
			<a href="http://bazaar.presta-shop.ir/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-puzzle-piece"></i>
				{l s='Addons'}
			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/en/training-prestashop?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-book"></i>
				{l s='Training'}
			</a>
		</p>
		{if $iso_is_fr}
		<p>Questions • Renseignements • Formations : 
			<strong>+33 (0)1.40.18.30.04</strong>
		<p>
		{/if}
	</div>
	<div class="col-sm-4">
		{hook h="displayBackOfficeFooter"}
	</div>
	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
{/if}
{if isset($php_errors)}
	{include file="error.tpl"}
{/if}
</body>
</html>
