<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="GENTE";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Gente teleSUR - Galeria de fotos</title>

<script type="text/javascript" src="lib_galeria/jquery-1.4.2.min.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="lib_galeria/jquery.jcarousel.min.js"></script>
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
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->



function Cargar_Galeria(idcargar, titulogaleria, fechagaleria){
parent.galerias.location.href="frame_fotos.php?idgaleria="+idcargar+"";
document.getElementById("TituliLLO").innerHTML=titulogaleria;
document.getElementById("FechaGaleria").innerHTML=fechagaleria;
}
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
<link rel="stylesheet" type="text/css" href="lib_galeria/skin.css" />

<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg','../../img/32_1arriba_20x20.jpg','../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_1020x816.jpg">
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
    <td width="1019" height="30" background="../../img/29_3_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:224px;">Fotogalería</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="454" background="../../img/170_imagenen_1020x454.jpg">
    <table width="1020" height="454" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="76" height="454">&nbsp;</td>
    <td width="403" height="454" valign="top">
   
	
	<table width="360" height="276" border="0" cellspacing="0" cellpadding="0">
	<tr>
    <td width="360" height="82" valign="top"><div class="Arial_22_bold_negro" style="width:360px; margin-top:30px; margin-bottom:10px; text-align: right;">Fotogalería</div></td>
  </tr>
	<tr>
	  <td valign="top" align="left">
	 <div id="contenedoresx"><ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
	 
	 <?php
   $sqlpauta="SELECT * From  m_galerias WHERE m_galeria_estatus='A' ORDER BY m_galeria_id  DESC"; 
   $query_pauta=mysql_query($sqlpauta, $link);
   $i=0;
    $numero=mysql_num_rows($query_pauta);
   while($fila_pauta=mysql_fetch_array($query_pauta)){
   $m_galeria_titulo=$fila_pauta['m_galeria_titulo'];
   $m_galeria_id=$fila_pauta['m_galeria_id'];
   $m_galeria_estatus=$fila_pauta['m_galeria_estatus'];
   $m_galeria_id=$fila_pauta['m_galeria_id'];
   $m_galeria_fecha=date("d-m-Y", strtotime($fila_pauta['m_galeria_fecha']));
  
  
   if ($i==0){$ultimoid=$m_galeria_id; $ultimotitulo=$m_galeria_titulo; $ultimafecha=$m_galeria_fecha; }
   $i++;
   
   
$GALERIASQL="SELECT m_galeria_fotos_imagenpeq FROM m_galeria_fotos WHERE m_galeria_fotos_idgaleria = '$m_galeria_id' ORDER BY m_galeria_fotos_id DESC";
  $query_galeria=mysql_query($GALERIASQL, $link);
$row_galeria=mysql_fetch_array($query_galeria);
  $foto=$row_galeria['m_galeria_fotos_imagenpeq'];


?>
	 <li><table width="360" height="82" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
  <tr>
    <td width="86"><div style="width:83px; margin-top:2px; margin-bottom:2px; margin-left:6px; margin-right:6px;">
	<a href="#." onclick="Cargar_Galeria('<?php echo $m_galeria_id; ?>', '<?php echo $m_galeria_titulo; ?>', '<?php echo $m_galeria_fecha; ?>');"><img src="../../imagenes/foto_galerias/<? echo"$foto";?>" width="82" height="72" border="0" /></a>
</div></td>
    <td width="270" valign="top">
        <div class="Arial_10_regular_marron" style="width:px; margin-bottom:5px; margin-top:10px; margin-right:10px;"><?php echo $m_galeria_fecha; ?></div>
        <div class="Arial_12_bold_negro" style="width:px; margin-top:10px; margin-bottom:5px; text-align: left; margin-right:10px"><a href="#." onclick="Cargar_Galeria('<?php echo $m_galeria_id; ?>', '<?php echo $m_galeria_titulo; ?>', '<?php echo $m_galeria_fecha; ?>');" class="Arial_12_bold_negro" style="text-decoration:none;"><? echo"$m_galeria_titulo"; ?></a></div>
    </td>
  </tr>
</table></li>
	 
	 <?php } ?>
	 
	

  	</ul></div>
</td>
	</tr>
  
</table>
	
</td>
    <td width="10" height="454">&nbsp;</td>
    
    <td width="451" height="454">
    <table width="450" height="454" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="450" height="95">
    <div  class="Arial_14_bold_negro" style="width:460px; max-height:30px; margin-top:32px; margin-bottom:6px; text-align: left;" id="TituliLLO"><?php echo $ultimotitulo; ?></div>
    <div class="Arial_12_regular_marron" style="width:360px; max-height:20px; text-align: left; margin-bottom:15px;" id="FechaGaleria"><?php echo $ultimafecha; ?></div>
    </td>
  </tr>
  <tr>
    <td width="450" height="290">
	<iframe src="frame_fotos.php?idgaleria=<?php echo $ultimoid; ?>" width="472" height="332" name="galerias" id="gaerias" frameborder="0" scrolling="no" allowtransparency="allowtransparency"></iframe>
	
	
	</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

    </td>
    
    <td width="80" height="454">&nbsp;</td>
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