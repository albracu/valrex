{assign var=FINAL_DETAILS value=$RELATED_PRODUCTS.1.final_details}
<page>
<div style="width:815px;height:700px;background-image: url({$ARCHIVO_FONDO});">
<table style="width:815px;height:700px;margin-left:-5px;margin-bottom:5px;">
<tr>
<td style="width:380px;padding-left:10px;height:623px;">
	<img src="{$SITE_URL}test/logo/{$LOGOEMPRESA}" style="height:{$HEIGHTLOGO}px;"/>
</td>
<td style="text-align:right;width:380px;padding-right:10px;">
	<img src="{$SITE_URL}test/logo/logocalidad.png"/>
</td>
</tr>
</table>
</div>
<div style="width:815px;height:77px;margin-top:-77px;background-image: url({$SITE_URL}test/logo/marqueza.png);">
&nbsp;
</div>
<div style="width:815px;height:300px;">
<table style="width:815px;height300px;">
<tr>
<td style="width:460px;padding-left:10px;padding-right:5px;">
	<ul style="color:#489cdf;font-size:15pt;">
	{if $FIELDS.cf_755 eq '1'}
	<li><b>Fácil</b>O&M</li>
	{/if}
	{if $FIELDS.cf_757 eq '1'}
	<li><b>Rápida</b> instalación</li>
	{/if}
	{if $FIELDS.cf_759 eq '1'}
	<li><b>Calidad</b> y larga vida útil</li>
	{/if}
	{if $FIELDS.cf_761 eq '1'}
	<li><b>Alta ingeniería</b> para asegurar cumplimiento normativo </li>
	{/if}
	{if $FIELDS.cf_763 eq '1'}
	<li><b>Mínimo consumo</b> de químicos </li>
	{/if}
	{if $FIELDS.cf_765 eq '1'}
	<li><b>Repuestos y servicio post - venta</b></li>
	{/if}
	{if $FIELDS.cf_767 eq '1'}
	<li>Sistemas modulares y compactos para <b>fácil movilización</b></li>
	{/if}
	</ul>
</td>
<td style="width:10px;">
	<img src="{$SITE_URL}test/logo/separador.png"/>
</td>
<td style="text-align:center;width:320px;">
	<img src="{$SITE_URL}test/logo/cumplimiento.png"/>
</td>
</tr>
</table>
</div>
</page>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url({$SITE_URL}test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="{$SITE_URL}test/logo/{$LOGOEMPRESA}" style="height:110px"/>
	<br/>
</td>
</tr>
</table>
</page_header>
<div id="fecha" style="width:700px;padding-right:100px;padding-top:200px;text-align:right;">
<i>Bogota, {$FECHA_HOY}</i>
</div>
<br/>
<br/>
<div id="membrete" style="width:700px;padding-left:60px;text-align:left;color:#489cdf;font-size:10pt;">
<b>Asunto: {$FIELDS.subject}<br/>
{$CONTACT.salutation} {$CONTACT.firstname} {$CONTACT.lastname}<br/></b>
</div>
<br/>
<br/>
<div id="texto" style="width:700px;height:400px;padding-left:60px;padding-right:70px;text-align:justify;font-size:10pt;">
<b>Cordial Saludo,</b><br/>
<br/>
{$FIELDS.description}
</div>
<div style="width:700px;padding-left:60px;font-size:10pt;">
Atentamente,
<br/>
<br/>
</div>
<div id="despedida" style="width:700px;padding-left:60px;left;color:#489cdf;font-size:10pt;">
{$USER}
</div>
<div id="despedida2" style="width:700px;padding-left:60px;left;color:#000000;font-size:10pt;">
{$SIGNATURE_USER}
</div>
</page>
<page_footer>
<div style="width:815px;height:133px;background-image: url({$SITE_URL}test/logo/footer.png);">
</div>
</page_footer>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url({$SITE_URL}test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="{$SITE_URL}test/logo/{$LOGOEMPRESA}" style="height:110px"/>
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
			{$FIELDS.subject}
			</div>
			<br/>
		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">1.	¿Cuál es el reto?</b><br/>
			{$FIELDS.cf_769}
		</td>
		<td style="text-align:center;width:300;height:700px;" rowspan="3">
			<img src="{$ARCHIVO_CASO_EXITO}"/>
			<br/>
		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">2.	Nuestra propuesta</b><br/>
			{$FIELDS.cf_771}
		</td>
	</tr>
	<tr>
		<td style="width:350px;height:120px;">
			<b style="color:#489cdf;text-align:center;font-size:12pt;">3.	Beneficios para el Cliente?</b><br/>
			{$FIELDS.cf_773}
		</td>
	</tr>
</table>
</div>
</page>
<page_footer>
<div style="width:815px;height:133px;background-image: url({$SITE_URL}test/logo/footer.png);">
</div>
</page_footer>
<page>
<page_header>
<table style="width:815px;height:200px;margin-top:-5px;margin-left:-5px;background-image: url({$SITE_URL}test/logo/header1.png); background-repeat: no-repeat;">
<tr>
<td style="width:500px;height:120px;">
	<br/>
</td>
<td style="text-align:center;width:315px;height:120px;">
	<img src="{$SITE_URL}test/logo/{$LOGOEMPRESA}" style="height:110px"/>
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
			{$FIELDS.subject}
		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			POBLACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			{$FIELDS.cf_775}
		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			DOTACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			{$FIELDS.cf_777}
		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			CAUDAL
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			{$FIELDS.cf_779}
		</td>
	</tr>
	<tr>
		<td style="width:150px;border: 1px solid #000000;">
			UBICACIÓN
		</td>
		<td style="width:550px;border: 1px solid #000000;">
			{$FIELDS.cf_781}
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
		{foreach key=INDEX item=LINE_ITEM_DETAIL from=$RELATED_PRODUCTS}
		<tr>
			<td style="width:50px;border: 1px solid #000000;text-align:center;">
				{$INDEX}
			</td>
			<td style="width:330px;border: 1px solid #000000;">
				{$LINE_ITEM_DETAIL["productName$INDEX"]}<br/>
				{$LINE_ITEM_DETAIL["comment$INDEX"]|nl2br}
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:center;">
				{$LINE_ITEM_DETAIL["qty$INDEX"]}
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$LINE_ITEM_DETAIL["listPrice$INDEX"]|number_format:2:",":"."}
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$LINE_ITEM_DETAIL["totalAfterDiscount$INDEX"]|number_format:2:",":"."}
			</td>
		</tr>
		{/foreach}
		<tr>
			<td style="text-align:justify;width:380px;border: 1px solid #000000;" colspan="2" rowspan="5">
				Tiempo de entrega: {$FIELDS.cf_795}. Moneda: {$FIELDS.cf_797}. Validez de la oferta: {$FIELDS.cf_799}. Forma de pago: {$FIELDS.cf_801}. Sitio de entrega: {$FIELDS.cf_803}
			</td>
			<td style="border: 1px solid #000000;" colspan="2">
				Subtotal<br/>
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$FINAL_DETAILS["hdnSubTotal"]|number_format:2:",":"."}
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Admón
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				{$FINAL_DETAILS["taxes"][1]['percentage']|number_format:0}%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$FINAL_DETAILS["taxes"][1]['amount']|number_format:2:",":"."}
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Imprev
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				{$FINAL_DETAILS["taxes"][2]['percentage']|number_format:0}%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$FINAL_DETAILS["taxes"][2]['amount']|number_format:2:",":"."}
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				Utilidad
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				{$FINAL_DETAILS["taxes"][3]['percentage']|number_format:0}%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$FINAL_DETAILS["taxes"][3]['amount']|number_format:2:",":"."}
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000000;border-left: 0px">
				IVA
			</td>
			<td style="border: 1px solid #000000;border-left: 0px">
				{$FINAL_DETAILS["taxes"][0]['percentage']|number_format:0}%
			</td>
			<td style="width:100px;border: 1px solid #000000;text-align:right;">
				{$FINAL_DETAILS["taxes"][0]['amount']|number_format:2:",":"."}
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
				{$FINAL_DETAILS["grandTotal"]|number_format:2:",":"."}
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
				Pagar a nombre de {$FIELDS.cf_787} S.A.S. NIT: {$NIT} Consignando en: Banco de Bogotá Cta. 084021724 - Banco de Occidente Cta. 219004645.
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
{$USER}
</div>
<div id="despedida2" style="width:700px;padding-left:60px;left;color:#000000;font-size:10pt;">
{$SIGNATURE_USER}
</div>
<page_footer>
<div style="width:815px;height:133px;background-image: url({$SITE_URL}test/logo/footer.png);">
</div>
</page_footer>
</page>