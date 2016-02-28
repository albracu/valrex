<?php /* Smarty version Smarty-3.1.7, created on 2015-10-09 14:53:28
         compiled from "/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/Quotes/QuotePDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12485718365610026f30de50-75498733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833b51b0c1cb3e35977e2c9f5b2ed3cba7459abe' => 
    array (
      0 => '/var/www/novation/valrex/includes/runtime/../../layouts/vlayout/modules/Quotes/QuotePDF.tpl',
      1 => 1444402406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12485718365610026f30de50-75498733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5610026f3fd4f',
  'variables' => 
  array (
    'RELATED_PRODUCTS' => 0,
    'ARCHIVO_FONDO' => 0,
    'SITE_URL' => 0,
    'LOGOEMPRESA' => 0,
    'HEIGHTLOGO' => 0,
    'FIELDS' => 0,
    'FECHA_HOY' => 0,
    'CONTACT' => 0,
    'USER' => 0,
    'SIGNATURE_USER' => 0,
    'ARCHIVO_CASO_EXITO' => 0,
    'INDEX' => 0,
    'LINE_ITEM_DETAIL' => 0,
    'FINAL_DETAILS' => 0,
    'NIT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5610026f3fd4f')) {function content_5610026f3fd4f($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['FINAL_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?>
<page>
<div style="width:815px;height:700px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['ARCHIVO_FONDO']->value;?>
);">
<table style="width:815px;height:700px;margin-left:-5px;margin-bottom:5px;">
<tr>
<td style="width:380px;padding-left:10px;height:623px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/<?php echo $_smarty_tpl->tpl_vars['LOGOEMPRESA']->value;?>
" style="height:<?php echo $_smarty_tpl->tpl_vars['HEIGHTLOGO']->value;?>
px;"/>
</td>
<td style="text-align:right;width:380px;padding-right:10px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/logocalidad.png"/>
</td>
</tr>
</table>
</div>
<div style="width:815px;height:77px;margin-top:-77px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/marqueza.png);">
&nbsp;
</div>
<div style="width:815px;height:300px;">
<table style="width:815px;height300px;">
<tr>
<td style="width:460px;padding-left:10px;padding-right:5px;">
	<ul style="color:#489cdf;font-size:15pt;">
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_755']=='1'){?>
	<li><b>Fácil</b>O&M</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_757']=='1'){?>
	<li><b>Rápida</b> instalación</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_759']=='1'){?>
	<li><b>Calidad</b> y larga vida útil</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_761']=='1'){?>
	<li><b>Alta ingeniería</b> para asegurar cumplimiento normativo </li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_763']=='1'){?>
	<li><b>Mínimo consumo</b> de químicos </li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_765']=='1'){?>
	<li><b>Repuestos y servicio post - venta</b></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FIELDS']->value['cf_767']=='1'){?>
	<li>Sistemas modulares y compactos para <b>fácil movilización</b></li>
	<?php }?>
	</ul>
</td>
<td style="width:10px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/separador.png"/>
</td>
<td style="text-align:center;width:320px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/cumplimiento.png"/>
</td>
</tr>
</table>
</div>
</page>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/<?php echo $_smarty_tpl->tpl_vars['LOGOEMPRESA']->value;?>
" style="height:110px"/>
	<br/>
</td>
</tr>
</table>
</page_header>
<div id="fecha" style="width:700px;padding-right:100px;padding-top:200px;text-align:right;">
<i>Bogota, <?php echo $_smarty_tpl->tpl_vars['FECHA_HOY']->value;?>
</i>
</div>
<br/>
<br/>
<div id="membrete" style="width:700px;padding-left:60px;text-align:left;color:#489cdf;font-size:10pt;">
<b>Asunto: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['subject'];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['CONTACT']->value['salutation'];?>
 <?php echo $_smarty_tpl->tpl_vars['CONTACT']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['CONTACT']->value['lastname'];?>
<br/></b>
</div>
<br/>
<br/>
<div id="texto" style="width:700px;height:400px;padding-left:60px;padding-right:70px;text-align:justify;font-size:10pt;">
<b>Cordial Saludo,</b><br/>
<br/>
<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['description'];?>

</div>
<div style="width:700px;padding-left:60px;font-size:10pt;">
Atentamente,
<br/>
<br/>
</div>
<div id="despedida" style="width:700px;padding-left:60px;left;color:#489cdf;font-size:10pt;">
<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>

</div>
<div id="despedida2" style="width:700px;padding-left:60px;left;color:#000000;font-size:10pt;">
<?php echo $_smarty_tpl->tpl_vars['SIGNATURE_USER']->value;?>

</div>
</page>
<page_footer>
<div style="width:815px;height:133px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/footer.png);">
</div>
</page_footer>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/<?php echo $_smarty_tpl->tpl_vars['LOGOEMPRESA']->value;?>
" style="height:110px"/>
	<br/>
</td>
</tr>
</table>
</page_header>
<div id="page3" style="width:800px;padding-right:60px;padding-left:40px;padding-top:150px;">
<table style="width:700px;height:200px;margin-top:-5px;margin-left:-5px;">
	<tr>
		<td colspan="2" style="color:#489cdf;text-align:center;font-size:16pt;height:60px;">
			<div style="width:700px;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['subject'];?>

			</div>
			<br/>
		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">1.	¿Cuál es el reto?</b><br/>
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_769'];?>

		</td>
		<td style="text-align:center;width:300;height:700px;" rowspan="3">
			<img src="<?php echo $_smarty_tpl->tpl_vars['ARCHIVO_CASO_EXITO']->value;?>
"/>
			<br/>
		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">2.	Nuestra propuesta</b><br/>
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_771'];?>

		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">3.	Beneficios para el Cliente?</b><br/>
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_773'];?>

		</td>
	</tr>
</table>
</div>
</page>
<page_footer>
<div style="width:815px;height:133px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/footer.png);">
</div>
</page_footer>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/<?php echo $_smarty_tpl->tpl_vars['LOGOEMPRESA']->value;?>
" style="height:110px"/>
	<br/>
</td>
</tr>
</table>
</page_header>
<div id="page3" style="width:800px;padding-right:60px;padding-left:60px;padding-top:150px;">
<div>
<b style="color:#489cdf;text-align:center;font-size:12pt;">4.	Inversión</b><br/>
</div>
<table style="width:700px;border-collapse:collapse;border: 1px solid #000000;">
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			SISTEMA
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['subject'];?>

		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			POBLACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_775'];?>

		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			DOTACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_777'];?>

		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			CAUDAL
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_779'];?>

		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			UBICACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			<?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_781'];?>

		</td>
	</tr>
</table>
</div>
<br/>
<table style="border-collapse:collapse;border: 1px solid #000000;padding-right:60px;padding-left:60px;" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="background-color:#B2D235;width:50px;border: 1px solid #000000;">
				<span style="color:#FFFFFF;font-weight: bold;">ÍTEM</span>
			</td>
			<td style="background-color:#B2D235;width:330px;border: 1px solid #000000;">
				<span style="color:#FFFFFF;font-weight: bold;">DESCRIPCIÓN</span>
			</td>
			<td style="background-color:#B2D235;width:100px;border: 1px solid #000000;">
				<span style="color:#FFFFFF;font-weight: bold;">CANTIDAD</span>
			</td>
			<td style="background-color:#B2D235;width:100px;border: 1px solid #000000;">
				<span style="color:#FFFFFF;font-weight: bold;">VALOR UNITARIO</span>
			</td>
			<td style="background-color:#B2D235;width:100px;border: 1px solid #000000;">
				<span style="color:#FFFFFF;font-weight: bold;">VALOR TOTAL</span>
			</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key => $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value){
$_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key;
?>
		<tr>
			<td style="width:50px;border: 1px solid #000000;text-align:center;">
				<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>

			</td>
			<td style="width:330px;border: 1px solid #000000;">
				<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productName".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
<br/>
				<?php echo nl2br($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["comment".($_smarty_tpl->tpl_vars['INDEX']->value)]);?>

			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:center;">
				<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["qty".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["listPrice".($_smarty_tpl->tpl_vars['INDEX']->value)],2,",",".");?>

			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["totalAfterDiscount".($_smarty_tpl->tpl_vars['INDEX']->value)],2,",",".");?>

			</td>
		</tr>
		<?php } ?>
		<tr>
			<td style="text-align:justify;width:380px;border: 1px solid #000000;" colspan="2" rowspan="5">
				Tiempo de entrega: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_795'];?>
. Moneda: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_797'];?>
. Validez de la oferta: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_799'];?>
. Forma de pago: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_801'];?>
. Sitio de entrega: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_803'];?>

			</td>
			<td style="border: 1px solid #000000;" colspan="2">
				Subtotal<br/>
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["hdnSubTotal"],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Admón
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][1]['percentage'],0);?>
%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][1]['amount'],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Imprev
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][2]['percentage'],0);?>
%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][2]['amount'],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Utilidad
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][3]['percentage'],0);?>
%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][3]['amount'],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				IVA
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][0]['percentage'],0);?>
%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][0]['amount'],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="width:380px;border: 1px solid #000000;text-align:center" colspan="2">
				Sujeto a cambios imprevistos en impuestos
			</td>
			<td style="border: 1px solid #000000;" colspan="2">
				TOTAL<br/>
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				<?php echo number_format($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["grandTotal"],2,",",".");?>

			</td>
		</tr>
		<tr>
			<td style="width:380px;border: 1px solid #000000;text-align:center" colspan="2">
				FIRMA: Carlos Restrepo
				Nombre: Carlos Restrepo
				Teléfono: 320 211 08 48
				Email: carlos.restrepo@valrex.com
			</td>
			<td style="border: 1px solid #000000;text-align:center;width:300px;" colspan="3">
				Pagar a nombre de <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['cf_787'];?>
 S.A.S. NIT: <?php echo $_smarty_tpl->tpl_vars['NIT']->value;?>
 Consignando en: Banco de Bogotá Cta. 084021724 - Banco de Occidente Cta. 219004645.
				Favor enviar consignación vía Fax al (091) 2255005.
				Dirección: Calle 93 B No. 19-35/57 PBX: (091) 3111109
			</td>
		</tr>
	</tbody>		
</table>
<br/>
<br/>
<div style="width:700px;padding-left:60px;font-size:10pt;">
Atentamente,
<br/>
<br/>
</div>
<div id="despedida" style="width:700px;padding-left:60px;left;color:#489cdf;font-size:10pt;">
<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>

</div>
<div id="despedida2" style="width:700px;padding-left:60px;left;color:#000000;font-size:10pt;">
<?php echo $_smarty_tpl->tpl_vars['SIGNATURE_USER']->value;?>

</div>
<page_footer>
<div style="width:815px;height:133px;background-image: url(<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
test/logo/footer.png);">
</div>
</page_footer>
</page><?php }} ?>