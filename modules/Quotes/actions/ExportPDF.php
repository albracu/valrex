<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

// convert in PDF

require_once('libraries/html2pdf/html2pdf.class.php');

class Quotes_ExportPDF_Action extends Inventory_ExportPDF_Action {

	public function process(Vtiger_Request $request) {

		$viewer = new Vtiger_Viewer;
		try
		{
			global $site_URL;
			$focus = CRMEntity::getInstance($_REQUEST['module']);
			$focus->id = $_REQUEST['record'];
			$focus->retrieve_entity_info($_REQUEST['record'], $_REQUEST['module']);
			
			$user = CRMEntity::getInstance('Users');
			$user->id = $focus->column_fields['assigned_user_id'];
			$user->retrieve_entity_info($user->id,'Users');
			
			if (!empty($focus->column_fields['account_id'])) {
				$focusA =  CRMEntity::getInstance('Accounts');
				$focusA->id = $focus->column_fields['account_id'];
				$focusA->retrieve_entity_info($focus->column_fields['account_id'], 'Accounts');
			}
			
			if (!empty($focus->column_fields['potential_id'])) {
				$focusP =  CRMEntity::getInstance('Potentials');
				$focusP->id = $focus->column_fields['potential_id'];
				$focusP->retrieve_entity_info($focus->column_fields['potential_id'], 'Potentials');
			}
			
			if (!empty($focus->column_fields['contact_id'])) {
				$focusC =  CRMEntity::getInstance('Contacts');
				$focusC->id = $focus->column_fields['contact_id'];
				$focusC->retrieve_entity_info($focus->column_fields['contact_id'], 'Contacts');
			}
			
			//Los LI
			$recordModel = Quotes_Record_Model::getInstanceById($_REQUEST['record'], 'Quotes');
			$viewer->assign('FIELDS',$focus->column_fields);
			$viewer->assign('CONTACT',$focusC->column_fields);
			$fileDetails = $recordModel->getFileDetails($focus->column_fields['cf_751']);
			$filePath = $fileDetails['path'];
			$fileName = $fileDetails['name'];

			$fileName = html_entity_decode($fileName, ENT_QUOTES, vglobal('default_charset'));
			$savedFile = $fileDetails['attachmentsid']."_".$fileName;
			
			$error = '';
			if ($fileName == '')
				$error.= 'Debe asociar una imágen de portada<br/>';
			$viewer->assign('SITE_URL',$site_URL);
			$viewer->assign('ARCHIVO_FONDO',$site_URL.$filePath.$savedFile);
			
			$fileDetails = $recordModel->getFileDetails($focus->column_fields['cf_753']);
			$filePath = $fileDetails['path'];
			$fileName = $fileDetails['name'];

			$fileName = html_entity_decode($fileName, ENT_QUOTES, vglobal('default_charset'));
			$savedFile = $fileDetails['attachmentsid']."_".$fileName;
			if ($fileName == '')
				$error.= 'Debe asociar una imágen de caso de éxito<br/>';
			$viewer->assign('ARCHIVO_CASO_EXITO',$site_URL.$filePath.$savedFile);
			
			if (!empty($error)) {
				echo '<h3>Error:'.$error.'</h3>';
				return;
			} 
			
			if ($focus->column_fields['cf_787'] == 'VALREX') {
				$logo = 'valrex.png';
				$NIT = '860525156-4';
				$heightlogo = '150';
			} elseif ($focus->column_fields['cf_787'] == 'TEPSA') {
				$logo = 'tepsa.png';
				$NIT = '800149414-9';
				$heightlogo = '220';
			} else {
				$logo = 'depurar.png';
				$NIT = '830059510-0';
				$heightlogo = '220';
			}
			
			$viewer->assign('LOGOEMPRESA',$logo);
			$viewer->assign('HEIGHTLOGO',$heightlogo);
			$viewer->assign('NIT',$NIT);
			$viewer->assign('USER',$user->column_fields['first_name'].' '.$user->column_fields['last_name']);
			$viewer->assign('SIGNATURE_USER',nl2br($user->column_fields['signature']));
			
			$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
			$viewer->assign('FECHA_HOY',(date('d')." de ".$meses[date('n')-1]. " del ".date('Y')));
						
			$viewer->assign('QUOTE_NO',$focus->column_fields['quote_no']);
			$viewer->assign('TOTAL',$focus->column_fields['total']);
			
			$record = $_REQUEST['record'];
			$recordModel = Inventory_Record_Model::getInstanceById($record);
			$relatedProducts = $recordModel->getProducts();
			
			$products = array();
			for($i =1;$i <= count($relatedProducts);$i++) {
				$category = $relatedProducts[$i]['servicecategory'];
				$productName = $relatedProducts[$i]['productName'.$i];
				$qty = $relatedProducts[$i]['qty'.$i];
				$unitPrice = $relatedProducts[$i]['listPrice'.$i];
				$productTotal = $relatedProducts[$i]['productTotal'.$i];
				$comment = $relatedProducts[$i]['comment'.$i];
				
				if (!isset($products[$category]['total']))
					$products[$category]['total'] = 0;
				$products[$category]['total'] += $productTotal;
				$products[$category]['products'][] = array('productName'=>$productName,
														   'qty' => $qty,
														   'unitPrice' => $unitPrice,
														   'productTotal' => $productTotal,
														   'comment' => $comment);
			}
			$viewer->assign('PROD_BY_CATEGORY',$products);
			$viewer->assign('RELATED_PRODUCTS',$relatedProducts);
			$viewer->assign('RELATED_PRODUCTS_EX',$relatedProductsEx);
			
			$content = $viewer->view('QuotePDF.tpl', 'Quotes', 'true');
			$html2pdf = new HTML2PDF('P', 'Letter', 'es', true, 'UTF-8',array(0,0,0,0));
			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
			$html2pdf->Output('Quote.pdf');
		}
		catch(HTML2PDF_exception $e) {
			echo $e;
			exit;
		}
	}
}
/*
vimport('~~/modules/Quotes/QuotePDFController.php');

class Quotes_ExportPDF_Action extends Inventory_ExportPDF_Action {
}
*/