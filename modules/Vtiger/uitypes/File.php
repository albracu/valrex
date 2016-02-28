<?php
/*+**********************************************************************************
 * The Initial Developer of the Original Code is Jetweb.
 * All code licensed to Jetweb, South Africa.
 * @Author Pavani, Jetweb (Pty) Ltd.
 * All Rights Reserved.
 ************************************************************************************/

class Vtiger_File_UIType extends Vtiger_Base_UIType {

	/**
	 * Function to get the Template name for the current UI Type object
	 * @return <String> - Template Name
	 */
	public function getTemplateName() {
		return 'uitypes/FileField.tpl';
	}

	/**
	 * Function to get the Display Value, for the current field type with given DB Insert Value
	 * @param <String> $value
	 * @param <Integer> $recordId
	 * @param <Vtiger_Record_Model>
	 * @return <String>
	 */
	public function getDisplayValue($value, $recordId, $recordModel = false) {
		$moduleName = $this->get('field')->getModule()->getName();
		if(!$recordModel) {
			$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);
		}

		if($recordModel) {
			if(!empty($value)) {
				$db = PearDatabase::getInstance();
				$fileIdRes = $db->pquery('SELECT vtiger_attachments.name FROM vtiger_attachments
								WHERE vtiger_attachments.attachmentsid=?', array($value));
				//$fileId = $db->query_result($fileIdRes, 0, 'attachmentsid');
				//if($fileId){
					$value = '<a href="index.php?module='.$moduleName.'&action=DownloadFile&record='.$recordId.'&fileid='.$value.'" title="'. vtranslate('Download File', $moduleName).'" >'.$db->query_result($fileIdRes, 0, 'name').'</a>';
				//}
			}
		}
		return $value;
	}
}
?>
