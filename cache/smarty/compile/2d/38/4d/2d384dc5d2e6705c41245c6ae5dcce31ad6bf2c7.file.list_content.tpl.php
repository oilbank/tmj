<?php /* Smarty version Smarty-3.1.14, created on 2014-04-30 07:15:28
         compiled from "C:\wamp\www\prestashop1606\admin\themes\default\template\controllers\attributes\helpers\list\list_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8145360a310ecb978-66493408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d384dc5d2e6705c41245c6ae5dcce31ad6bf2c7' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1606\\admin\\themes\\default\\template\\controllers\\attributes\\helpers\\list\\list_content.tpl',
      1 => 1398561608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8145360a310ecb978-66493408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'position_identifier' => 0,
    'tr' => 0,
    'identifier' => 0,
    'index' => 0,
    'color_on_bg' => 0,
    'has_bulk_actions' => 0,
    'list_skip_actions' => 0,
    'table' => 0,
    'fields_display' => 0,
    'params' => 0,
    'id_category' => 0,
    'no_link' => 0,
    'order_by' => 0,
    'current_index' => 0,
    'view' => 0,
    'token' => 0,
    'key' => 0,
    'order_way' => 0,
    'positions' => 0,
    'shop_link_type' => 0,
    'has_actions' => 0,
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360a31130ce45_37109439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360a31130ce45_37109439')) {function content_5360a31130ce45_37109439($_smarty_tpl) {?>
<tbody>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)){?>
<?php  $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tr']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->key => $_smarty_tpl->tpl_vars['tr']->value){
$_smarty_tpl->tpl_vars['tr']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['tr']->key;
?>
	<tr
	<?php if ($_smarty_tpl->tpl_vars['position_identifier']->value){?>id="tr_<?php echo $_smarty_tpl->tpl_vars['tr']->value['id_attribute_group'];?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
_<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['position']['position'])){?><?php echo $_smarty_tpl->tpl_vars['tr']->value['position']['position'];?>
<?php }else{ ?>0<?php }?>"<?php }?>
	<?php if ((1 & $_smarty_tpl->tpl_vars['index']->value)){?>class="alt_row"<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['color'])&&$_smarty_tpl->tpl_vars['color_on_bg']->value){?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value['color'];?>
"<?php }?>
	>
		<td class="center">
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['has_bulk_actions']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
				<?php if (isset($_smarty_tpl->tpl_vars['list_skip_actions']->value['delete'])){?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],$_smarty_tpl->tpl_vars['list_skip_actions']->value['delete'])){?>
						<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
" class="noborder" />
					<?php }?>
				<?php }else{ ?>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
" class="noborder" />
				<?php }?>
			<?php }?>
		</td>
		<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
			<td
				<?php if (isset($_smarty_tpl->tpl_vars['params']->value['position'])){?>
					id="td_<?php if ($_smarty_tpl->tpl_vars['id_category']->value){?><?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
<?php }else{ ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"
				<?php }?>
				class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value){?>pointer<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['params']->value['position'])&&$_smarty_tpl->tpl_vars['order_by']->value=='position'){?> dragHandle<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['params']->value['align'])){?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];?>
<?php }?>"

			<?php if ((!isset($_smarty_tpl->tpl_vars['params']->value['position'])&&!$_smarty_tpl->tpl_vars['no_link']->value)){?>
				onclick="document.location = '<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
<?php if ($_smarty_tpl->tpl_vars['view']->value){?>&view<?php }else{ ?>&update<?php }?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
'">
			<?php }else{ ?>
				>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['params']->value['prefix'])){?><?php echo $_smarty_tpl->tpl_vars['params']->value['prefix'];?>
<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['params']->value['color'])&&isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']])){?>
				<span class="color_field" style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value['color'];?>
">
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['params']->value['active'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['activeVisu'])){?>
				<i class="<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]){?>icon-check-sign<?php }else{ ?>icon-ban-circle<?php }?>"></i>
			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['position'])){?>
				<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='position'&&$_smarty_tpl->tpl_vars['order_way']->value!='DESC'){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position_url_down'];?>
" <?php if (!($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']!=$_smarty_tpl->tpl_vars['positions']->value[count($_smarty_tpl->tpl_vars['positions']->value)-1])){?>style="display: none;"<?php }?>>
						<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['order_way']->value=='ASC'){?>down<?php }else{ ?>up<?php }?>.gif" alt="<?php echo smartyTranslate(array('s'=>'Down'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Down'),$_smarty_tpl);?>
" />
					</a>

					<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position_url_up'];?>
" <?php if (!($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']!=$_smarty_tpl->tpl_vars['positions']->value[0])){?>style="display: none;"<?php }?>>
						<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['order_way']->value=='ASC'){?>up<?php }else{ ?>down<?php }?>.gif" alt="<?php echo smartyTranslate(array('s'=>'Up'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Up'),$_smarty_tpl);?>
" />
					</a>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

				<?php }?>
			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['image'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif((isset($_smarty_tpl->tpl_vars['params']->value['icon']))){?>
				<img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" />
			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['price'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['float'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['type'])&&$_smarty_tpl->tpl_vars['params']->value['type']=='date'){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['type'])&&$_smarty_tpl->tpl_vars['params']->value['type']=='datetime'){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			
			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['type'])&&$_smarty_tpl->tpl_vars['params']->value['type']=='editable'&&isset($_smarty_tpl->tpl_vars['tr']->value['id'])){?>
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
			<?php }elseif(isset($_smarty_tpl->tpl_vars['params']->value['callback'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

			<?php }elseif(isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])&&$_smarty_tpl->tpl_vars['key']->value=='color'){?>
				<?php if (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'])&&preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'], $tmp)>1){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'];?>
" alt="" />
				<?php }else{ ?>
					<div style="float: left; width: 18px; height: 12px; border: 1px solid #996633; background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
; margin-right: 4px;"></div>
				<?php }?>
			<?php }elseif(isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])){?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>

			<?php }else{ ?>
				--
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['params']->value['suffix'])){?><?php echo $_smarty_tpl->tpl_vars['params']->value['suffix'];?>
<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['params']->value['color'])&&isset($_smarty_tpl->tpl_vars['tr']->value['color'])){?>
				</span>
			<?php }?>
			</td>
		<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value){?>
		<td class="center" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>
">
			<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['shop_short_name'])){?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_short_name'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>

			<?php }?></td>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['has_actions']->value){?>
		<td class="center" style="white-space: nowrap;">
			<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value])){?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value];?>

				<?php }?>
			<?php } ?>
		</td>
	<?php }?>
	</tr>
<?php } ?>
<?php }else{ ?>
	<tr><td class="center" colspan="<?php echo count($_smarty_tpl->tpl_vars['fields_display']->value)+2;?>
"><?php echo smartyTranslate(array('s'=>'No records found'),$_smarty_tpl);?>
</td></tr>
<?php }?>
</tbody>
<?php }} ?>