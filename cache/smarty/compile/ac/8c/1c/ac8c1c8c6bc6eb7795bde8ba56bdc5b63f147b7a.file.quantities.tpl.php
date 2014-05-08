<?php /* Smarty version Smarty-3.1.14, created on 2014-04-30 07:15:35
         compiled from "C:\wamp\www\prestashop1606\admin\themes\default\template\controllers\products\quantities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281475360a317bca6e1-88134847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac8c1c8c6bc6eb7795bde8ba56bdc5b63f147b7a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1606\\admin\\themes\\default\\template\\controllers\\products\\quantities.tpl',
      1 => 1398561608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281475360a317bca6e1-88134847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'ps_stock_management' => 0,
    'show_quantities' => 0,
    'stock_management_active' => 0,
    'pack_quantity' => 0,
    'attributes' => 0,
    'attribute' => 0,
    'available_quantity' => 0,
    'product_designation' => 0,
    'order_out_of_stock' => 0,
    'token_preferences' => 0,
    'link' => 0,
    'has_attribute' => 0,
    'default_language' => 0,
    'languages' => 0,
    'countAttributes' => 0,
    'default_form_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360a317ec39c4_48469448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360a317ec39c4_48469448')) {function content_5360a317ec39c4_48469448($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)){?>
	<div id="product-quantities" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Quantities" />
		<h3><?php echo smartyTranslate(array('s'=>'Available quantities for sale'),$_smarty_tpl);?>
</h3>
		<?php if (!$_smarty_tpl->tpl_vars['ps_stock_management']->value){?>
			<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'The stock management is disabled'),$_smarty_tpl);?>
</div>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Quantities"), 0);?>

			<div class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'This interface allows you to manage available quantities for sale for products. It also allows you to manage product combinations in the current shop.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'You can choose whether or not to use the advanced stock management system for this product.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'You can manually specify the quantities for the product/each product combination, or you can choose to automatically determine these quantities based on your stock (if advanced stock management is activated).'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'In this case, quantities correspond to the real-stock quantities in the warehouses connected with the current shop, or current group of shops.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'For packs: If it has products that use advanced stock management, you have to specify a common warehouse for these products in the pack.'),$_smarty_tpl);?>
<br/>
				<?php echo smartyTranslate(array('s'=>'Also, please note that when a product has combinations, its default combination will be used in stock movements.'),$_smarty_tpl);?>

			</div>

			<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value==true){?>
				<div class="form-group" <?php if ($_smarty_tpl->tpl_vars['product']->value->is_virtual||$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>style="display:none;"<?php }?> class="row stockForVirtualProduct">
					<div class="col-lg-9 col-lg-offset-3">
						<p class="checkbox">
							<label for="advanced_stock_management">
								<input type="checkbox" name="advanced_stock_management" class="advanced_stock_management" id="advanced_stock_management" 
									<?php if ($_smarty_tpl->tpl_vars['product']->value->advanced_stock_management==1&&$_smarty_tpl->tpl_vars['stock_management_active']->value==1){?>
										value="1" checked="checked"
									<?php }else{ ?>
										value="0"
									<?php }?> 
									<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value==0||$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>
										disabled="disabled" 
									<?php }?> 
								/>
								<?php echo smartyTranslate(array('s'=>'I want to use the advanced stock management system for this product.'),$_smarty_tpl);?>

							</label>
						</p>
							<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value==0&&!$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>
								<p class="help-block"><i class="icon-warning-sign"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'This requires you to enable advanced stock management.'),$_smarty_tpl);?>
</p>
							<?php }elseif($_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>
								<p class="help-block"><?php echo smartyTranslate(array('s'=>'This parameter depends on the product(s) in the pack.'),$_smarty_tpl);?>
</p>
							<?php }?>
					</div>
				</div>

				<div <?php if ($_smarty_tpl->tpl_vars['product']->value->is_virtual||$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>style="display:none;"<?php }?> class="form-group stockForVirtualProduct">
					<label class="control-label col-lg-3" for="depends_on_stock_1"><?php echo smartyTranslate(array('s'=>'Available quantities'),$_smarty_tpl);?>
</label>
					<div class="col-lg-9">
						<p class="radio">
							<label for="depends_on_stock_1">
								<input type="radio" name="depends_on_stock" class="depends_on_stock" id="depends_on_stock_1" value="1"
									<?php if ($_smarty_tpl->tpl_vars['product']->value->depends_on_stock==1&&$_smarty_tpl->tpl_vars['stock_management_active']->value==1){?>
										checked="checked" 
									<?php }?> 
									<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value==0||$_smarty_tpl->tpl_vars['product']->value->advanced_stock_management==0||$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?>
										disabled="disabled" 
									<?php }?> 
								/>
								<?php echo smartyTranslate(array('s'=>'The available quantities for the current product and its combinations are based on the stock in your warehouse (using the advanced stock management system). '),$_smarty_tpl);?>
 
								<?php if (($_smarty_tpl->tpl_vars['stock_management_active']->value==0||$_smarty_tpl->tpl_vars['product']->value->advanced_stock_management==0)&&!$_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?> &nbsp;-&nbsp;<?php echo smartyTranslate(array('s'=>'This requires you to enable advanced stock management globally or for this product.'),$_smarty_tpl);?>

								<?php }elseif($_smarty_tpl->tpl_vars['product']->value->cache_is_pack){?> &nbsp;-&nbsp;<?php echo smartyTranslate(array('s'=>'This parameter depends on the product(s) in the pack.'),$_smarty_tpl);?>

								<?php }?>
							</label>
						</p>
						<p class="radio">
							<label for="depends_on_stock_0" for="depends_on_stock_0">
								<input type="radio" name="depends_on_stock" class="depends_on_stock" id="depends_on_stock_0" value="0"
									<?php if ($_smarty_tpl->tpl_vars['product']->value->depends_on_stock==0||$_smarty_tpl->tpl_vars['stock_management_active']->value==0){?>
										checked="checked" 
									<?php }?> 
								/>
								<?php echo smartyTranslate(array('s'=>'I want to specify available quantities manually.'),$_smarty_tpl);?>

							</label>
						</p>
					</div>
				</div>

				<?php if (isset($_smarty_tpl->tpl_vars['pack_quantity']->value)){?>
					<div class="alert alert-info">
						<p><?php echo smartyTranslate(array('s'=>'When a product has combinations, quantities will be based on the default combination.'),$_smarty_tpl);?>
</p>
						<p><?php echo smartyTranslate(array('s'=>'Given the quantities of the products in this pack, the maximum quantity should be:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['pack_quantity']->value;?>
</p>
					</div>	
				<?php }?>
				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<table class="table">
							<thead>
								<tr>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Designation'),$_smarty_tpl);?>
</span></th>
								</tr>
							</thead>
							<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
								<tr>
									<td class="available_quantity" id="qty_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
">
										<span><?php echo $_smarty_tpl->tpl_vars['available_quantity']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</span>
										<input type="text" class="fixed-width-sm" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['available_quantity']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']]);?>
"/>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['product_designation']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div id="when_out_of_stock" class="form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'When out of stock'),$_smarty_tpl);?>
</label>
					<div class="col-lg-9">
						<p class="radio">
							<label id="label_out_of_stock_1" for="out_of_stock_1">
								<input <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock==0){?> checked="checked" <?php }?> id="out_of_stock_1" type="radio" checked="checked" value="0" class="out_of_stock" name="out_of_stock">
								<?php echo smartyTranslate(array('s'=>'Deny orders'),$_smarty_tpl);?>

							</label>
						</p>
						<p class="radio">
							<label id="label_out_of_stock_2" for="out_of_stock_2">
								<input <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock==1){?> checked="checked" <?php }?> id="out_of_stock_2" type="radio" value="1" class="out_of_stock" name="out_of_stock">
								<?php echo smartyTranslate(array('s'=>'Allow orders'),$_smarty_tpl);?>

							</label>
						</p>
						<p class="radio">
							<label id="label_out_of_stock_3" for="out_of_stock_3">
								<input <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock==2){?> checked="checked" <?php }?> id="out_of_stock_3" type="radio" value="2" class="out_of_stock" name="out_of_stock">
								<?php echo smartyTranslate(array('s'=>'Default'),$_smarty_tpl);?>
:
								<?php if ($_smarty_tpl->tpl_vars['order_out_of_stock']->value==1){?>
								<?php echo smartyTranslate(array('s'=>'Allow orders'),$_smarty_tpl);?>

								<?php }else{ ?>
								<?php echo smartyTranslate(array('s'=>'Deny orders'),$_smarty_tpl);?>

								<?php }?> 
								<a class="confirm_leave" href="index.php?tab=AdminPPreferences&amp;token=<?php echo $_smarty_tpl->tpl_vars['token_preferences']->value;?>
">
									<?php echo smartyTranslate(array('s'=>'as set in the Products Preferences page'),$_smarty_tpl);?>

								</a>
							</label>
						</p>
					</div>
				</div>

			<?php }else{ ?>
				<div class="alert alert-warning">
					<p><?php echo smartyTranslate(array('s'=>'It is not possible to manage quantities when:'),$_smarty_tpl);?>
</p>
					<ul>
						<li><?php echo smartyTranslate(array('s'=>'You are currently managing all of your shops.'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'You are currently managing a group of shops where quantities are not shared between every shop in this group.'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'You are currently managing a shop that is in a group where quantities are shared between every shop in this group.'),$_smarty_tpl);?>
</li>
					</ul>
				</div>
			<?php }?>
		<?php }?>
		<div class="panel-footer">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right product_quantities_button"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right product_quantities_button"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
		</div>
	</div>
	<div class="panel">
		<h3><?php echo smartyTranslate(array('s'=>'Availability settings'),$_smarty_tpl);?>
</h3>

		<?php if (!$_smarty_tpl->tpl_vars['has_attribute']->value){?>
			<div class="form-group">
				<label class="control-label col-lg-3" for="minimal_quantity">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"minimal_quantity",'type'=>"default"), 0);?>

					<?php echo smartyTranslate(array('s'=>'Minimum quantity'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-9">
					<input class="form-control fixed-width-sm" maxlength="6" name="minimal_quantity" id="minimal_quantity" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value->minimal_quantity)===null||$tmp==='' ? 1 : $tmp);?>
" />
					<p class="help-block"><?php echo smartyTranslate(array('s'=>'The minimum quantity to buy this product (set to 1 to disable this feature)'),$_smarty_tpl);?>
</p>
				</div>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ps_stock_management']->value){?>			
			<div class="form-group">
				<label class="control-label col-lg-3" for="available_now_<?php echo $_smarty_tpl->tpl_vars['default_language']->value;?>
">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"available_now",'type'=>"default",'multilang'=>"true"), 0);?>

					<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'Forbidden characters:'),$_smarty_tpl);?>
 &#60;&#62;;&#61;#&#123;&#125;">
						<?php echo smartyTranslate(array('s'=>'Displayed text when in-stock'),$_smarty_tpl);?>

					</span>
				</label>
				<div class="col-lg-9">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->available_now,'input_name'=>'available_now'), 0);?>

				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="available_later_<?php echo $_smarty_tpl->tpl_vars['default_language']->value;?>
">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"available_later",'type'=>"default",'multilang'=>"true"), 0);?>

					<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'Forbidden characters:'),$_smarty_tpl);?>
 &#60;&#62;;&#61;#&#123;&#125;">
						<?php echo smartyTranslate(array('s'=>'Displayed text when backordering is allowed'),$_smarty_tpl);?>

					</span>
					
				</label>
				<div class="col-lg-9">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->available_later,'input_name'=>'available_later'), 0);?>

				</div>
			</div>
			
			<?php if (!$_smarty_tpl->tpl_vars['countAttributes']->value){?>
			<div class="form-group">
				<label class="control-label col-lg-3" for="available_date">
					<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"available_date",'type'=>"default"), 0);?>

					<?php echo smartyTranslate(array('s'=>'Available date:'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-9">
					<div class="input-group fixed-width-md">
						<input id="available_date" name="available_date" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->available_date;?>
" class="datepicker" type="text" />
						<div class="input-group-addon">
							<i class="icon-calendar-empty"></i>
						</div>

					</div>
					<p class="help-block"><?php echo smartyTranslate(array('s'=>'The available date when this product is out of stock.'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<?php }?>
		<?php }?>
		<div class="panel-footer">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right product_quantities_button"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right product_quantities_button"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
		</div>
		<script type="text/javascript">
			var quantities_ajax_success = '<?php echo smartyTranslate(array('s'=>'Data saved','js'=>1),$_smarty_tpl);?>
';
			var quantities_ajax_waiting = '<?php echo smartyTranslate(array('s'=>'Saving data...','js'=>1),$_smarty_tpl);?>
';
		</script>
	</div>
<?php }?>
<script type="text/javascript">
	hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
</script>
<?php }} ?>