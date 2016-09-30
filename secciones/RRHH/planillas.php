<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="RRHH";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - RRHH - Planillas de Seguros HCM</title>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 430px;
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
    <td width="1020" height="30" background="../../img/29_2_linea_1020x30.jpg"><table width="1020" height="30" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="55" height="22">&nbsp;</td>
    <td width="80" height="22" class="Arial_18_bold"></td>
    <td width="593" height="22">
    <table width="593" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="145" height="22"><div style="margin-left:15px; margin-right:10px;" ><a href="poliza.php" class="Arial_12_bold_negro" style="text-decoration:none;">Seguros Mercantil</a></div></td>
        <td width="1" height="22"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
        <td width="125" height="22" ><div style="margin-left:10px; margin-right:10px;" ><a href="clinicas.php" class="Arial_12_bold_negro" style="text-decoration:none;">Clínica Afiliada</a></div></td>
        <td width="1" height="22"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
        <td width="68"><div style="margin-left:10px; margin-right:10px;" class="Arial_12_blanco_Bold">Planillas</div></td>
        <td width="259">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="242" height="22" ></td>
    <td width="59" height="22">&nbsp;</td>
  </tr>
</table></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="727"  background="../../img/153_Imagen_1020x730.jpg">
    <table width="1020" height="730" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="143">&nbsp;</td>
  </tr>
  <tr>
    <td width="1020" height="552">
    <table width="1020" height="552" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70">&nbsp;</td>
    <td width="415"><a href="../../documentos/hcm/PLANILLA11.pdf" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ingreso','','../../img/155_1_img_415x552.jpg',1)"><img src="../../img/154_img_415x552.jpg" name="ingreso" width="415" height="552" border="0" id="ingreso" /></a></td>
    <td width="28">&nbsp;</td>
    <td width="415"><a href="../../documentos/hcm/Planilla_Tramite_Siniestro_HCM_Carta_Aval.pdf" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('aval','','../../img/157_1_img_415x552.jpg',1)"><img src="../../img/156_img_415x552.jpg" name="aval" width="415" height="552" border="0" id="aval" /></a></td>
    <td width="90">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="40">&nbsp;</td>
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