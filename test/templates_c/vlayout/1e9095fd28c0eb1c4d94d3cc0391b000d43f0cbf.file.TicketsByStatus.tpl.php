<?php /* Smarty version Smarty-3.1.7, created on 2015-09-24 14:50:44
         compiled from "/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/HelpDesk/dashboards/TicketsByStatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43364789956040dc4dcb8c9-38552705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e9095fd28c0eb1c4d94d3cc0391b000d43f0cbf' => 
    array (
      0 => '/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/HelpDesk/dashboards/TicketsByStatus.tpl',
      1 => 1443102493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43364789956040dc4dcb8c9-38552705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'CURRENTUSER' => 0,
    'ACCESSIBLE_USERS' => 0,
    'USER_ID' => 0,
    'USER_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56040dc4ea638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56040dc4ea638')) {function content_56040dc4ea638($_smarty_tpl) {?>
<script type="text/javascript">
	Vtiger_Barchat_Widget_Js('Vtiger_Ticketsbystatus_Widget_Js',{},{});
</script>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SETTING_EXIST'=>true), 0);?>

	<div class="row-fluid filterContainer hide" style="position:absolute;z-index:100001">
		<div class="row-fluid">
			<span class="span5">
				<span class="pull-right">
					<?php echo vtranslate('Created Time',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php echo vtranslate('LBL_BETWEEN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

				</span>
			</span>
			<span class="span4">
				<input type="text" name="createdtime" class="dateRange widgetFilter" />
			</span>
		</div>
		<div class="row-fluid">
			<span class="span5">
				<span class="pull-right">
					<?php echo vtranslate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

				</span>
			</span>
			<span class="span4">
				<?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId(), null, 0);?>
				<select class="widgetFilter" name="owner">
					<option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value==$_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId()){?>
							<?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>

						<?php }?>
					</option>
					<?php } ?>
				</select>
			</span>
		</div>
	</div>
</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>