


{sugar_include include=$includes}

<form class="compose-view" id="ComposeView" name="ComposeView" method="POST" action="index.php?module=Emails&action=send">
<input type="hidden" name="module" value="Emails">
<input type="hidden" name="action" value="{$ACTION}">
<input type="hidden" name="record" value="{$RECORD}">
<input type="hidden" name="type" value="out">
<input type="hidden" name="send" value="1">
<input type="hidden" name="return_module" value="{$RETURN_MODULE}">
<input type="hidden" name="return_action" value="{$RETURN_ACTION}">
<input type="hidden" name="return_id" value="{$RETURN_ID}">
<input type="hidden" name="inbound_email_id" value="{$INBOUND_ID}">
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
{sugar_translate label='LBL_COMPOSE_MODULE_NAME' module='Emails'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in" id="detailpanel_-1">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_TEMPLATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_TEMPLATE' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="emails_email_templates_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.emails_email_templates_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.emails_email_templates_name.name}" size="" value="{$fields.emails_email_templates_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.emails_email_templates_name.id_name}" 
id="{$fields.emails_email_templates_name.id_name}" 
value="{$fields.emails_email_templates_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.emails_email_templates_name.name}" id="btn_{$fields.emails_email_templates_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.emails_email_templates_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"$.fn.EmailsComposeView.onTemplateSelect","form_name":"ComposeView","field_to_name_array":{"id":"emails_email_templates_idb","name":"emails_email_templates_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.emails_email_templates_name.name}" id="btn_clr_{$fields.emails_email_templates_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.emails_email_templates_name.name}', '{$fields.emails_email_templates_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.emails_email_templates_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_RELATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_RELATE' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="parent" field="parent_name"  >
{counter name="panelFieldCount" print=false}

<select name='parent_type' tabindex="0" id='parent_type' title=''  onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; changeParentQS("{$fields.parent_name.name}"); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value sortoptions=true}
</select>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="0"
size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off"><input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  
{if $keepParent}value="{$fields.parent_id.value}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="0"	
title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"$.fn.EmailsComposeView.onParentSelect","form_name":"ComposeView","field_to_name_array":{"id":"parent_id","name":"parent_name","email1":"email1"}}{/literal}, "single", true);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{sugar_translate label=""}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = '';" value="{sugar_translate label=""}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script type="text/javascript">
if (typeof(changeParentQS) == 'undefined'){
function changeParentQS(field) {
    if(typeof sqs_objects == 'undefined') {
       return;
    }
	field = YAHOO.util.Dom.get(field);
    var form = field.form;
    var sqsId = form.id + "_" + field.id;
    var typeField =  form.elements.parent_type;
    var new_module = typeField.value;
    //Update the SQS globals to reflect the new module choice
    if (typeof(QSFieldsArray[sqsId]) != 'undefined')
    {
        QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
    }
	if(typeof QSProcessedFieldsArray != 'undefined')
    {
	   QSProcessedFieldsArray[sqsId] = false;
    }
    if(sqs_objects[sqsId] == undefined){
    	return;
    }
    sqs_objects[sqsId]["modules"] = new Array(new_module);
    if(typeof(disabledModules) != 'undefined' && typeof(disabledModules[new_module]) != 'undefined') {
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
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['ComposeView_parent_name']={"form":"ComposeView","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
<script>
//change this in case it wasn't the default on editing existing items.
$(document).ready(function(){
	changeParentQS("parent_name")
});
</script>
{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_FROM_ADDR' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="from_addr_name" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.from_addr_name.value) <= 0}
{assign var="value" value=$fields.from_addr_name.default_value }
{else}
{assign var="value" value=$fields.from_addr_name.value }
{/if}  
<input type='text' name='{$fields.from_addr_name.name}' 
id='{$fields.from_addr_name.name}' size='30' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="to_addrs_names">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TO' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="to_addrs_names" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.to_addrs_names.value) <= 0}
{assign var="value" value=$fields.to_addrs_names.default_value }
{else}
{assign var="value" value=$fields.to_addrs_names.value }
{/if}  
<input type='text' name='{$fields.to_addrs_names.name}' 
id='{$fields.to_addrs_names.name}' size='30' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="cc_addrs_names">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CC' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="cc_addrs_names" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.cc_addrs_names.value) <= 0}
{assign var="value" value=$fields.cc_addrs_names.default_value }
{else}
{assign var="value" value=$fields.cc_addrs_names.value }
{/if}  
<input type='text' name='{$fields.cc_addrs_names.name}' 
id='{$fields.cc_addrs_names.name}' size='30' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="bcc_addrs_names">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BCC' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="bcc_addrs_names" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.bcc_addrs_names.value) <= 0}
{assign var="value" value=$fields.bcc_addrs_names.default_value }
{else}
{assign var="value" value=$fields.bcc_addrs_names.value }
{/if}  
<input type='text' name='{$fields.bcc_addrs_names.name}' 
id='{$fields.bcc_addrs_names.name}' size='30' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SUBJECT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="description">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BODY' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="4"
cols="60"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="description_html">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BODY' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="emailbody" field="description_html" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.description_html.value) <= 0}
{assign var="value" value=$fields.description_html.default_value }
{else}
{assign var="value" value=$fields.description_html.value }
{/if}  
<input type='text' name='{$fields.description_html.name}' 
id='{$fields.description_html.name}' size='30' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEND_IN_PLAIN_TEXT' module='Emails'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_only_plain_text" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strval($fields.is_only_plain_text.value) == "1" || strval($fields.is_only_plain_text.value) == "yes" || strval($fields.is_only_plain_text.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.is_only_plain_text.name}" value="0"> 
<input type="checkbox" id="{$fields.is_only_plain_text.name}" 
name="{$fields.is_only_plain_text.name}" 
value="1" title='' tabindex="0" {$checked} >
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
<button class="btn btn-send-email" title="{$MOD.LBL_SEND_BUTTON_TITLE}"><span class="glyphicon glyphicon-send"></span></button>
<button class="vertical-separator"></button>
<button class="btn btn-attach-file" title="{$MOD.LBL_ATTACH_FILES}"><span class="glyphicon glyphicon-paperclip"></span></button>
<button class="btn btn-attach-document" title="{$MOD.LBL_ATTACH_DOCUMENTS}"><span class="glyphicon suitepicon suitepicon-module-documents"></span></button>
<button class="vertical-separator"></button>
<button class="btn btn-save-draft" title="{$MOD.LBL_SAVE_AS_DRAFT_BUTTON_TITLE}"><span class="glyphicon glyphicon-floppy-save"></span></button>
<button class="btn btn-disregard-draft" title="{$MOD.LBL_DISREGARD_DRAFT_BUTTON_TITLE}"><span class="glyphicon glyphicon-trash"></span></button>
</div>
</div>
</div>
{if !$IS_MODAL}
{literal}
<script type="text/javascript">

        var selectTab = function(tab) {
            $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
            $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        };

        var selectTabOnError = function(tab) {
            selectTab(tab);
            $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
            $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

            $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
            $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

        };

        var selectTabOnErrorInputHandle = function(inputHandle) {
            var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
            selectTabOnError(tab);
        };


        $(function(){
            $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
                if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                    var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                    selectTab(tab);
                }
            });

            $('a[data-toggle="collapse-edit"]').click(function(e){
                if($(this).hasClass('collapsed')) {
                  // Expand panel
                    // Change style of .panel-header
                    $(this).removeClass('collapsed');
                    // Expand .panel-body
                    $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
                } else {
                  // Collapse panel
                    // Change style of .panel-header
                    $(this).addClass('collapsed');
                    // Collapse .panel-body
                    $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
                }
            });
        });
        </script>
{/literal}
<script>
        
      $(document).ready(function() {ldelim}
        $('#ComposeView').EmailsComposeView({if $RETURN_MODULE != 'Emails' && $RETURN_ID}{ldelim}
          'attachment': {ldelim}
            'module': '{$RETURN_MODULE}',
            'id': '{$RETURN_ID}'
          {rdelim}
        {rdelim}{/if});
      {rdelim});
    </script>
{/if}
</form>