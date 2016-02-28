<?php /* Smarty version Smarty-3.1.7, created on 2015-10-07 23:18:31
         compiled from "/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/Settings/EmailTemplates/ListContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9002517085615a8479997d1-24710407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6b7e161a3a739962ac569f983a1a57a0a6f3879' => 
    array (
      0 => '/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/Settings/EmailTemplates/ListContents.tpl',
      1 => 1443102493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9002517085615a8479997d1-24710407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'EMAIL_TEMPLATES' => 0,
    'EMAIL_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5615a847a3282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615a847a3282')) {function content_5615a847a3282($_smarty_tpl) {?>
<div id="popupPageContainer" class="popupBackgroundColor"><div class="emailTemplatesContainer"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><hr><div style="padding:0 10px"><table class="table table-bordered table-condensed"><thead><tr class="listViewHeaders"><th><a><?php echo vtranslate('LBL_TEMPLATE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th><a><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th><th><a><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></th></tr></thead><?php  $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_TEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->key => $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value){
$_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->_loop = true;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('templateid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('subject');?>
" data-info="<?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('body');?>
"><td><a class="cursorPointer"><?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('templatename',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</a></td><td><a class="cursorPointer"><?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('subject',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</a></td><td><?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_TEMPLATE']->value->get('description',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</td></tr><?php } ?></table></div></div><input type="hidden" class="triggerEventName" value="<?php echo $_REQUEST['triggerEventName'];?>
"/></div><?php }} ?>