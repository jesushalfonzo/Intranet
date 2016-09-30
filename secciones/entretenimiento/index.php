<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";
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
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg','../../img/32_1arriba_20x20.jpg','../../img/32_1abajo_20x20.jpg')">
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
    <td width="1019" height="30" background="../../img/29_4_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:244px;">Trivia</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="580" background="../../img/258_img_1020x580.jpg">
    <table width="1020" height="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="658" height="558" valign="top">
    <table width="658" height="536" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="210" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="36">
        <div style="width:658px; text-align: center;"><a href="identificacion.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen15','','../../img/211_imagenes_127x36.jpg',1)"><img src="../../img/210_imagenes_127x36.jpg" name="Imagen15" width="127" height="36" border="0" id="Imagen15" /></a></div>
    </td>
  </tr>
  <tr>
    <td height="108">
	<?php 

$SQL="SELECT * FROM m_trivia WHERE m_trivia_aprobado='SI' ORDER BY m_trivia_id DESC";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_trivia_titulo=$row['m_trivia_titulo'];
$m_trivia_id=$row['m_trivia_id'];
$m_trivia_imagen=$row['m_trivia_imagen'];
$fechacompleta=date('Y-m-d H:i:s');
$m_trivia_home=$row['m_trivia_home'];
	
	?>
	
    <div class="Arial_22_bold_negro" style="width:px; margin-top:72px; text-align: center;"><?php echo $m_trivia_titulo; ?></div>
    </td>
  </tr>
  <tr>
  <td height="182" valign="top"> <div style="width:px; margin-top:10px; text-align: center; margin-left:118px; margin-right:70px;"><img src="../../multimedia/imagenes/<? echo $m_trivia_home; ?>" width="470" height="140" />

  </div></td>
  </tr>
</table>

    </td>
    <td width="362" height="536" valign="top">
    <table width="362" height="536" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="50">
    <div class="Arial_18_blanco_bold" style="width:px; margin-top:26px; text-align: center; margin-bottom:10px; margin-right:70px;">Contesta la pregunta y gana variados premios</div>
    </td>
  </tr>
  <tr>
    <td height="80" valign="top" width="362">
    <div class="Arial_14_bold_negro" style="width:px; margin-top:40px; margin-right:74px; margin-left:10px;">Contesta la pregunta y gana variados premios</div>
    </td>
  </tr>
  <tr>
    <td width="362" valign="top">
    <table width="362" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="37" height="24" valign="top"><div style="width:px; margin-right:4px; margin-left:10px;"><img src="../../img/192_img_22x20.jpg" width="22" height="20" /></div></td>
    <td width="325"><div class="Arial_12_regular_marron" style="width:px; margin-right:74px;">El participante debe registrarse con su usuario y clave del correo Zimbra </div></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
     <td width="37" height="24" valign="top"><div style="width:px; margin-right:4px; margin-left:10px;"><img src="../../img/192_img_22x20.jpg" width="22" height="20" /></div></td>
    <td width="325"><div class="Arial_12_regular_marron" style="width:px; margin-right:74px;">Cada pregunta tendrá un tiempo de duración de 15 seg. para ser contestada. </div></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="37" height="24" valign="top"><div style="width:px; margin-right:4px; margin-left:10px;"><img src="../../img/192_img_22x20.jpg" width="22" height="20" /></div></td>
    <td width="325"><div class="Arial_12_regular_marron" style="width:px; margin-right:74px;">El participante que acumule mayor puntaje optará por varios premios.</div></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="37" height="24" valign="top"><div style="width:px; margin-right:4px; margin-left:10px;"><img src="../../img/192_img_22x20.jpg" width="22" height="20" /></div></td>
    <td width="325"><div class="Arial_12_regular_marron" style="width:px; margin-right:74px;">Sólo se puede participar una vez por trivia. </div></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="37" height="24" valign="top"><div style="width:px; margin-right:4px; margin-left:10px;"><img src="../../img/192_img_22x20.jpg" width="22" height="20" /></div></td>
    <td width="325"><div class="Arial_12_regular_marron" style="width:px; margin-right:74px;">Cada pregunta tendrá un puntaje.</div></td>
  </tr>

</table>

    </td>
  </tr>
</table>

    </td>
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