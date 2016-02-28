{*<!--
/*+**********************************************************************************
 * The Initial Developer of the Original Code is Jetweb.
 * All code licensed to Jetweb, South Africa.
 * @Author Pavani, Jetweb (Pty) Ltd.
 * All Rights Reserved.
 ************************************************************************************/
 -->*}
  
{*<!--
<script type='text/javascript' src='modules/Products/multifile.js'>
<script>
var {$fldname}Images=new Array();
	var {$fldname}count=0;
</script>
 -->*}

{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
{assign var=RAW_FIELD_INFO value=$FIELD_MODEL->getFieldInfo()}
{assign var="FIELD_INFO" value=Zend_Json::encode($RAW_FIELD_INFO)}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}

<div class="fileUploadContainer">
	<input type="file" class="input-large {if $FIELD_MODEL->isNameField()}nameField{/if}" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true}required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="{$FIELD_MODEL->getFieldName()}"
		   value="{if $IS_INTERNAL_LOCATION_TYPE} {$FIELD_VALUE} {/if}" data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator='{Zend_Json::encode($SPECIAL_VALIDATOR)}'{/if}/>

	<div class="uploadedFileDetails {if $IS_EXTERNAL_LOCATION_TYPE}hide{/if}">
		<div class="uploadedFileSize"></div>
		<div class="uploadedFileName">
			{if !empty($FIELD_VALUE)}
				[{$FIELD_VALUE}]
			{/if}
		</div>
		<div class="uploadFileSizeLimit redColor">
			{vtranslate('LBL_MAX_UPLOAD_SIZE',$MODULE)}&nbsp;<span class="maxUploadSize" data-value="{$MAX_UPLOAD_LIMIT}">{$MAX_UPLOAD_LIMIT_MB}{vtranslate('MB',$MODULE)}</span>
		</div>
	</div>
</div>
{/strip}