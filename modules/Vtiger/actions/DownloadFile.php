<?php
/*+**********************************************************************************
 * The Initial Developer of the Original Code is Jetweb.
 * All code licensed to Jetweb, South Africa.
 * @Author Pavani, Jetweb (Pty) Ltd.
 * All Rights Reserved.
 ************************************************************************************/

class Vtiger_DownloadFile_Action extends Vtiger_Action_Controller {

	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();

		if(!Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $request->get('record'))) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED', $moduleName));
		}
	}

	public function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();

		$RecordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
		//Download the file
		$RecordModel->downloadFile($request->get('fileid'));
	}
}
?>
