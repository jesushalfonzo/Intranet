<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Entretenimiento - Guia de Servicios</title>
<script type="text/javascript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>


<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 700px;
	visibility: inherit;
	SCROLLBAR-FACE-COLOR:#F0F0F0;
	SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-SHADOW-COLOR: #CCCCCC;
	SCROLLBAR-3DLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-ARROW-COLOR: #1D396B;
	SCROLLBAR-TRACK-COLOR: #FFFFFF;
	SCROLLBAR-DARKSHADOW-COLOR: #CCCCCC;
	overflow-x: hidden;
	clip: rect(auto,auto,270px,auto);
}
</style>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });

				// Tabs
				$('#tabs').tabs();

				// Dialog
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() {
							$(this).dialog("close");
						},
						"Cancel": function() {
							$(this).dialog("close");
						}
					}
				});

				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});

				// Progressbar
				$("#progressbar").progressbar({
					value: 20
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
		</script>
		<style type="text/css">
		.pestanas{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		}
		</style>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_01_1020x1100.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="26">
   <?php include("botones.php"); ?>
    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1019" height="30" background="../../img/29_4_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:244px;">Guía de servicios</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="730" background="../../img/MeLoPego.jpg" valign="top">
	
	<table width="907" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr><td width="907" valign="top"><img src="../../img/spc.gif" width="900" height="230" /></td>
	  </tr>
	  <tr><td width="907" valign="top"><div id="tabs" class="cuadrado_marron" style="min-height:460px; max-height:460px;">
<ul style="margin-left:20px;">
				<li><a href="#tabs-1" class="pestanas">Agencias Bancarias</a></li>
				<li><a href="#tabs-2" class="pestanas">Comida Delivery</a></li>
				<li><a href="#tabs-3" class="pestanas">Farmacia</a></li>
				<li><a href="#tabs-4" class="pestanas">Entretenimiento</a></li>
				<li><a href="#tabs-5" class="pestanas">Otros</a></li>
		</ul>
			<div id="tabs-1">
			<table width="831" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
			
	<?php 
	$SQL="SELECT * FROM m_guia_telesur WHERE m_guia_telesur_clase = 'banco' OR m_guia_telesur_clase = 'Banco' ORDER BY m_guia_telesur_nombre ASC";
	$consulta=mysql_query($SQL);
	$i=0;
	while ($resultado=mysql_fetch_array($consulta)){
	$m_guia_telesur_nombre=$resultado['m_guia_telesur_nombre'];
	$m_guia_telesur_telefono=$resultado['m_guia_telesur_telefono'];
	$m_guia_telesur_direccion=$resultado['m_guia_telesur_direccion'];
	if ($i % 2){
$color="#FFFFFF"; }
else {
$color="#CCCCCC";
}
	?>
  <tr>
    <td width="214" bgcolor="<?php echo $color; ?>" height="30"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_nombre; ?></div></td>
    <td width="217" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_telefono; ?></div></td>
    <td width="400" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_direccion; ?></div></td>
  </tr>

<?php $i++; }  ?>


  
</table>
			
			</div>
			<div id="tabs-2"><table width="831" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
			
	<?php 
	$SQL="SELECT * FROM m_guia_telesur WHERE m_guia_telesur_clase = 'delivery' ORDER BY m_guia_telesur_nombre ASC";
	$consulta=mysql_query($SQL);
	$i=0;
	while ($resultado=mysql_fetch_array($consulta)){
	$m_guia_telesur_nombre=$resultado['m_guia_telesur_nombre'];
	$m_guia_telesur_telefono=$resultado['m_guia_telesur_telefono'];
	$m_guia_telesur_direccion=$resultado['m_guia_telesur_direccion'];
	if ($i % 2){
$color="#FFFFFF"; }
else {
$color="#CCCCCC";
}
	?>
  <tr>
    <td width="214" bgcolor="<?php echo $color; ?>" height="30"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_nombre; ?></div></td>
    <td width="217" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_telefono; ?></div></td>
    <td width="400" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_direccion; ?></div></td>
  </tr>

<?php $i++; }  ?>


  
</table></div>
			<div id="tabs-3">
			<table width="831" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
			
	<?php 
	$SQL="SELECT * FROM m_guia_telesur WHERE m_guia_telesur_clase = 'farmacia' ORDER BY m_guia_telesur_nombre ASC";
	$consulta=mysql_query($SQL);
	$i=0;
	while ($resultado=mysql_fetch_array($consulta)){
	$m_guia_telesur_nombre=$resultado['m_guia_telesur_nombre'];
	$m_guia_telesur_telefono=$resultado['m_guia_telesur_telefono'];
	$m_guia_telesur_direccion=$resultado['m_guia_telesur_direccion'];
	if ($i % 2){
$color="#FFFFFF"; }
else {
$color="#CCCCCC";
}
	?>
  <tr>
    <td width="214" bgcolor="<?php echo $color; ?>" height="30"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_nombre; ?></div></td>
    <td width="217" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_telefono; ?></div></td>
    <td width="400" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_direccion; ?></div></td>
  </tr>

<?php $i++; }  ?>


  
</table>
			</div>
	<div id="tabs-4"><table width="831" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
			
	<?php 
	$SQL="SELECT * FROM m_guia_telesur WHERE m_guia_telesur_clase = 'entretenimiento' ORDER BY m_guia_telesur_nombre ASC";
	$consulta=mysql_query($SQL);
	$i=0;
	while ($resultado=mysql_fetch_array($consulta)){
	$m_guia_telesur_nombre=$resultado['m_guia_telesur_nombre'];
	$m_guia_telesur_telefono=$resultado['m_guia_telesur_telefono'];
	$m_guia_telesur_direccion=$resultado['m_guia_telesur_direccion'];
	if ($i % 2){
$color="#FFFFFF"; }
else {
$color="#CCCCCC";
}
	?>
  <tr>
    <td width="214" bgcolor="<?php echo $color; ?>" height="30"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_nombre; ?></div></td>
    <td width="217" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_telefono; ?></div></td>
    <td width="400" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_direccion; ?></div></td>
  </tr>

<?php $i++; }  ?>


  
</table></div>
		<div id="tabs-5"><table width="831" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
			
	<?php 
	$SQL="SELECT * FROM m_guia_telesur WHERE m_guia_telesur_clase = 'otros' ORDER BY m_guia_telesur_nombre ASC";
	$consulta=mysql_query($SQL);
	$i=0;
	while ($resultado=mysql_fetch_array($consulta)){
	$m_guia_telesur_nombre=$resultado['m_guia_telesur_nombre'];
	$m_guia_telesur_telefono=$resultado['m_guia_telesur_telefono'];
	$m_guia_telesur_direccion=$resultado['m_guia_telesur_direccion'];
	if ($i % 2){
$color="#FFFFFF"; }
else {
$color="#CCCCCC";
}
	?>
  <tr>
    <td width="214" bgcolor="<?php echo $color; ?>" height="30"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_nombre; ?></div></td>
    <td width="217" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_telefono; ?></div></td>
    <td width="400" bgcolor="<?php echo $color; ?>"><div class="Arial_12_Bold_marron" style="width:px; margin-right:14px; margin-left:14px;"><?php echo $m_guia_telesur_direccion; ?></div></td>
  </tr>

<?php $i++; }  ?>


  
</table></div>



</div></td>
	  </tr>
	  
	  </table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="58">&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?php
function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}
?>