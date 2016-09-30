<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR</title>
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
	height: 620px;
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
<script type="text/javascript" src="library/jquery-1.4.2.min.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="library/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        vertical: true,
        scroll: 2
    });
});

</script>
<script type="text/javascript">
function Cargar_Player(video, foto){
var imagen=foto;
var player = document.getElementById("ply");
player.sendEvent('STOP');
player.sendEvent('LOAD',{file:video, image:imagen, type:'video', title:"mi video"});
player.sendEvent('PLAY'); 
}
</script>

<script type="text/javascript">
function Reescribir(fecha, titulo){
var fechaX = document.getElementById("fechavideo"); 
fechaX.innerHTML = fecha;
var tituloX = document.getElementById("VideoTitulo"); 
tituloX.innerHTML = titulo;
}
</script>
<link rel="stylesheet" type="text/css" href="library/skin.css" />

<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg','../../img/32_1arriba_20x20.jpg','../../img/32_1abajo_20x20.jpg')">
<table width="1020"  border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_06_1020x970.jpg">
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
    <td width="1020" height="30" background="../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Noticiero interno </div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="608" background="../../img/58_imagenes_1020x608.jpg">
    <table width="1020" height="608" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="77" height="608">&nbsp;</td>
    <td width="213" headers="608" valign="top">
    <table width="213" height="566" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="213" height="38">&nbsp;</td>
  </tr>
  <tr>
    <td width="213" height="26" valign="top" class="Arial_18_regular_marron"><div style="width:203px; margin-left:10px;" >Noticiero interno </div></td>
  </tr>
  <tr>
    <td width="213" height="36">&nbsp;</td>
  </tr>
  <tr>
    <td width="213" height="186" valign="top">
    <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
	

<?php 
				$SQLsomos="SELECT * FROM m_somostelesur WHERE m_somostelesur_estatus='A' ORDER BY m_somostelesur_fecha DESC";
				$querysomos=mysql_query($SQLsomos, $link);
				
				
				while($rowsomos=mysql_fetch_array($querysomos)){
				$m_somostelesur_id=$rowsomos["m_somostelesur_id"];
				$m_somostelesur_titulo=$rowsomos["m_somostelesur_titulo"];
				$m_somostelesur_foto=$rowsomos["m_somostelesur_foto"];
				$m_somostelesur_archivo=$rowsomos["m_somostelesur_archivo"];
				$fecha=$rowsomos["m_somostelesur_fecha"];
				$mesletrado=MesLetras(date('m', strtotime($fecha)));
				$dia=date('d', strtotime($fecha));
				$anio=date('Y', strtotime($fecha));
	
				?>


	
	
	<li><table width="186" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="186" height="33"><div class="Arial_10_regular_marron" style="width:162px; margin-left:12px; margin-right:12px;" ><?php echo $dia; ?> de <?php echo $mesletrado; ?>, <?php echo $anio; ?></div></td>
  </tr>
  <tr>
    <td width="186" height="100" align="center"><a href="#." onclick="Cargar_Player('../../multimedia/videos/<?php echo $m_somostelesur_archivo; ?>', '../../multimedia/videos/<?php echo $m_somostelesur_foto; ?>'); Reescribir('<?php echo $dia; ?> de <?php echo $mesletrado; ?>, <?php echo $anio; ?>', '<?php echo $m_somostelesur_titulo; ?>');"><img src="../../multimedia/videos/<?php echo $m_somostelesur_foto; ?>" width="160" height="100" class="cuadrado_marron"  /></a></td>
  </tr>
  <tr>
    <td width="186" height="43"><div  style="width:162px; margin-left:12px; margin-right:12px;" ><a href="#." class="Arial_12_regular_marron" style="text-decoration:none;" onclick="Cargar_Player('../../multimedia/videos/<?php echo $m_somostelesur_archivo; ?>', '../../multimedia/videos/<?php echo $m_somostelesur_foto; ?>'); Reescribir('<?php echo $dia; ?> de <?php echo $mesletrado; ?>, <?php echo $anio; ?>', '<?php echo $m_somostelesur_titulo; ?>');"><?php echo $m_somostelesur_titulo; ?></a></div></td>
  </tr>
</table> </li>
	
	
	<?php } ?> 
	
	
	
	

	</ul></td>
  </tr>
  
  
  
</table>

    </td>
    <td width="47" height="608">&nbsp;</td> 
    <td width="603" height="608">
	
	<?php 
				$SQLsomos="SELECT * FROM m_somostelesur WHERE m_somostelesur_estatus='A' ORDER BY m_somostelesur_fecha DESC LIMIT 0,1";
				$querysomos=mysql_query($SQLsomos, $link);
				$rowsomos=mysql_fetch_array($querysomos);
				$m_somostelesur_id=$rowsomos["m_somostelesur_id"];
				$m_somostelesur_fecha=date("d-m-Y", strtotime($rowsomos["m_somostelesur_fecha"]));
				$m_somostelesur_titulo=$rowsomos["m_somostelesur_titulo"];
				$m_somostelesur_foto=$rowsomos["m_somostelesur_foto"];
				$m_somostelesur_archivo=$rowsomos["m_somostelesur_archivo"];
				$fecha=$rowsomos["m_somostelesur_fecha"];
				$mesletrado=MesLetras(date('m', strtotime($fecha)));
				$dia=date('d', strtotime($fecha));
				$anio=date('Y', strtotime($fecha));
				?>
	
    <table width="603" height="608" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="603" height="38">&nbsp;</td>
  </tr>
  <tr>
    <td width="603" height="26" class="Arial_18_regular_marron"><div style="width:583px; margin-left:10px; margin-right:10px;" id="fechavideo"><?php echo $dia; ?> de <?php echo $mesletrado; ?>, <?php echo $anio; ?></div></td>
  </tr>
  <tr>
    <td width="603" height="396" >
    <table width="603" height="432" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="41" height="432">&nbsp;</td>
        <td width="525" height="432">
        <table width="525" height="399" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="525" height="35">&nbsp;</td>
  </tr>
  <tr>
    <td width="525" height="325" valign="top"><div style=" padding-top:30px;" id="container"><a href="http://www.macromedia.com/go/getflashplayer">InstalarFlash Player </a>para ver este video.
	<script type="text/javascript" src="swfobject.js"></script>
	<script type='text/javascript'>
				  var so = new SWFObject('player.swf','ply','540','320','9','#ffffff');
				  so.addParam('allowfullscreen','true');
				  so.addParam('autostart', 'false');
				  so.addParam('allowscriptaccess','always');
				  so.addParam('wmode','opaque');
				  so.addParam('allownetworking','all');
				  so.addVariable('file','../../multimedia/videos/<?php echo $m_somostelesur_archivo; ?>&image=../../multimedia/videos/<?php echo $m_somostelesur_foto; ?>');	
				  so.addVariable('skin', 'snel.swf');				 
				  so.addVariable('flashvars', 'abouttext=TeleSUR!&aboutlink=http://www.telesurtv.net/&stretching=fill');
				  so.write('container');
				</script></div></td>
  </tr>
  <tr>
    <td width="525" height="39">&nbsp;</td>
  </tr>
</table>
</td>
        <td width="37" height="432">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="603" height="50" class="Arial_14_regular_marron"><div style="width:572px; margin-left:18px; margin-right:12px;" id="VideoTitulo"><?php echo $m_somostelesur_titulo; ?></div></td>
  </tr>
  <tr>
    <td width="603" height="52">&nbsp;</td>
  </tr>
</table>

    </td>
    <td width="80" height="608">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="54">&nbsp;</td>
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