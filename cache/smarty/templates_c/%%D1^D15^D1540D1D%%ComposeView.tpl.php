<?php /* Smarty version 2.6.31, created on 2020-11-09 06:08:01
         compiled from cache/themes/SuiteP/modules/Emails/ComposeView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 4, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 36, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 60, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 109, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 52, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Emails/ComposeView.tpl', 54, false),)), $this); ?>



<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>


<form class="compose-view" id="ComposeView" name="ComposeView" method="POST" action="index.php?module=Emails&action=send">
<input type="hidden" name="module" value="Emails">
<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['ACTION']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['RECORD']; ?>
">
<input type="hidden" name="type" value="out">
<input type="hidden" name="send" value="1">
<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
<input type="hidden" name="inbound_email_id" value="<?php echo $this->_tpl_vars['INBOUND_ID']; ?>
">
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMPOSE_MODULE_NAME','module' => 'Emails'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in" id="detailpanel_-1">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_TEMPLATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_TEMPLATE','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="emails_email_templates_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['emails_email_templates_idb']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"$.fn.EmailsComposeView.onTemplateSelect","form_name":"ComposeView","field_to_name_array":{"id":"emails_email_templates_idb","name":"emails_email_templates_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['emails_email_templates_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_RELATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_RELATE','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="parent" field="parent_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name='parent_type' tabindex="0" id='parent_type' title=''  onchange='document.<?php echo $this->_tpl_vars['form_name']; ?>
.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value="";document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_id.value=""; changeParentQS("<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
"); checkParentType(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, document.<?php echo $this->_tpl_vars['form_name']; ?>
.btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
);'>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['parent_name']['options'],'selected' => $this->_tpl_vars['fields']['parent_type']['value'],'sortoptions' => true), $this);?>

</select>
<?php if (empty ( $this->_tpl_vars['fields']['parent_name']['options'][$this->_tpl_vars['fields']['parent_type']['value']] )): ?>
<?php $this->assign('keepParent', 0); ?>
<?php else: ?>
<?php $this->assign('keepParent', 1); ?>
<?php endif; ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" class="sqsEnabled" tabindex="0"
size="" <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
"<?php endif; ?> autocomplete="off"><input type="hidden" name="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
"  
<?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
"<?php endif; ?>>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="0"	
title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, 600, 400, "", true, false, <?php echo '{"call_back_function":"$.fn.EmailsComposeView.onParentSelect","form_name":"ComposeView","field_to_name_array":{"id":"parent_id","name":"parent_name","email1":"email1"}}'; ?>
, "single", true);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => ""), $this);?>
" class="button lastChild" onclick="this.form.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
.value = '';" value="<?php echo smarty_function_sugar_translate(array('label' => ""), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script type="text/javascript">
if (typeof(changeParentQS) == \'undefined\'){
function changeParentQS(field) {
    if(typeof sqs_objects == \'undefined\') {
       return;
    }
	field = YAHOO.util.Dom.get(field);
    var form = field.form;
    var sqsId = form.id + "_" + field.id;
    var typeField =  form.elements.parent_type;
    var new_module = typeField.value;
    //Update the SQS globals to reflect the new module choice
    if (typeof(QSFieldsArray[sqsId]) != \'undefined\')
    {
        QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
    }
	if(typeof QSProcessedFieldsArray != \'undefined\')
    {
	   QSProcessedFieldsArray[sqsId] = false;
    }
    if(sqs_objects[sqsId] == undefined){
    	return;
    }
    sqs_objects[sqsId]["modules"] = new Array(new_module);
    if(typeof(disabledModules) != \'undefined\' && typeof(disabledModules[new_module]) != \'undefined\') {
		sqs_objects[sqsId]["disable"] = true;
		field.readOnly = true;
	} else {
		sqs_objects[sqsId]["disable"] = false;
		field.readOnly = false;
    }
    enableQS(false);
}}
</script>
<script>var disabledModules=[];</script>
<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'ComposeView_parent_name\']={"form":"ComposeView","method":"query","modules":["'; ?>
<?php if (! empty ( $this->_tpl_vars['fields']['parent_type']['value'] )): ?><?php echo $this->_tpl_vars['fields']['parent_type']['value']; ?>
<?php else: ?>Accounts<?php endif; ?><?php echo '"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
<script>
//change this in case it wasn\'t the default on editing existing items.
$(document).ready(function(){
	changeParentQS("parent_name")
});
</script>
'; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_FROM_ADDR','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="from_addr_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['from_addr_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['from_addr_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['from_addr_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['from_addr_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['from_addr_name']['name']; ?>
' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="to_addrs_names">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TO','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="to_addrs_names" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['to_addrs_names']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['to_addrs_names']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['to_addrs_names']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['to_addrs_names']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['to_addrs_names']['name']; ?>
' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="cc_addrs_names">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CC','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="cc_addrs_names" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['cc_addrs_names']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['cc_addrs_names']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['cc_addrs_names']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['cc_addrs_names']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['cc_addrs_names']['name']; ?>
' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="bcc_addrs_names">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BCC','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="bcc_addrs_names" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bcc_addrs_names']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['bcc_addrs_names']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['bcc_addrs_names']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bcc_addrs_names']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['bcc_addrs_names']['name']; ?>
' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SUBJECT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="description">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BODY','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="4"
cols="60"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="description_html">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BODY','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="emailbody" field="description_html" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['description_html']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description_html']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description_html']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['description_html']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['description_html']['name']; ?>
' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SEND_IN_PLAIN_TEXT','module' => 'Emails'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_only_plain_text" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['is_only_plain_text']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['is_only_plain_text']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['is_only_plain_text']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['is_only_plain_text']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['is_only_plain_text']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['is_only_plain_text']['name']; ?>
" 
value="1" title='' tabindex="0" <?php echo $this->_tpl_vars['checked']; ?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>
<div class="attachments">
<div class="file-attachments"></div>
<div class="document-attachments"></div>
</div>
<div class="panel panel-default panel-email-compose">
<div class="panel-body">


<div class="custom-buttons">
<button class="btn btn-send-email" title="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_TITLE']; ?>
"><span class="glyphicon glyphicon-send"></span></button>
<button class="vertical-separator"></button>
<button class="btn btn-attach-file" title="<?php echo $this->_tpl_vars['MOD']['LBL_ATTACH_FILES']; ?>
"><span class="glyphicon glyphicon-paperclip"></span></button>
<button class="btn btn-attach-document" title="<?php echo $this->_tpl_vars['MOD']['LBL_ATTACH_DOCUMENTS']; ?>
"><span class="glyphicon suitepicon suitepicon-module-documents"></span></button>
<button class="vertical-separator"></button>
<button class="btn btn-save-draft" title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_AS_DRAFT_BUTTON_TITLE']; ?>
"><span class="glyphicon glyphicon-floppy-save"></span></button>
<button class="btn btn-disregard-draft" title="<?php echo $this->_tpl_vars['MOD']['LBL_DISREGARD_DRAFT_BUTTON_TITLE']; ?>
"><span class="glyphicon glyphicon-trash"></span></button>
</div>
</div>
</div>
<?php if (! $this->_tpl_vars['IS_MODAL']): ?>
<?php echo '
<script type="text/javascript">

        var selectTab = function(tab) {
            $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
            $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
        };

        var selectTabOnError = function(tab) {
            selectTab(tab);
            $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
            $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

            $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
            $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

        };

        var selectTabOnErrorInputHandle = function(inputHandle) {
            var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
            selectTabOnError(tab);
        };


        $(function(){
            $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
                if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                    var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                    selectTab(tab);
                }
            });

            $(\'a[data-toggle="collapse-edit"]\').click(function(e){
                if($(this).hasClass(\'collapsed\')) {
                  // Expand panel
                    // Change style of .panel-header
                    $(this).removeClass(\'collapsed\');
                    // Expand .panel-body
                    $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
                } else {
                  // Collapse panel
                    // Change style of .panel-header
                    $(this).addClass(\'collapsed\');
                    // Collapse .panel-body
                    $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
                }
            });
        });
        </script>
'; ?>

<script>
        
      $(document).ready(function() {
        $('#ComposeView').EmailsComposeView(<?php if ($this->_tpl_vars['RETURN_MODULE'] != 'Emails' && $this->_tpl_vars['RETURN_ID']): ?>{
          'attachment': {
            'module': '<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
',
            'id': '<?php echo $this->_tpl_vars['RETURN_ID']; ?>
'
          }
        }<?php endif; ?>);
      });
    </script>
<?php endif; ?>
</form>