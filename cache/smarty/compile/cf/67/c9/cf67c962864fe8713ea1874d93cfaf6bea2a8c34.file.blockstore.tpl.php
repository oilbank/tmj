<?php /* Smarty version Smarty-3.1.14, created on 2014-04-30 07:15:16
         compiled from "C:\wamp\www\prestashop1606\themes\default-bootstrap\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224865360a304b73142-22811983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf67c962864fe8713ea1874d93cfaf6bea2a8c34' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1606\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1398561608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224865360a304b73142-22811983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360a304be54c0_03052391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360a304be54c0_03052391')) {function content_5360a304be54c0_03052391($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>

		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" />
			</a>
		</p>
		<?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)){?>
        <p class="store-description">
        	<?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

        </p>
        <?php }?>
		<div>
			<a 
			class="btn btn-default button button-small" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" 
			title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>