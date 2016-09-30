<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Corporativas -Descargas</title>
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
    <td width="1020" height="30" background="../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Descargas</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../img/01_Imagen_03_1020x738.jpg">
    <table width="1020" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="506" height="738">
        <table width="506" height="738" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="506" height="70">&nbsp;</td>
  </tr>
  <tr>
    <td width="506" height="636">
        <table width="488" height="638" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64" height="638">&nbsp;</td>
    <td width="378" height="638" valign="top">
        <div class="ScrollDocumentos" style="width:400px; margin-left:40px;"><table width="378" height="115" border="0" cellspacing="0" cellpadding="0" >
		
		<?php $tiramanuales="select * from manuales order by id DESC";
					$resultado_manuales=mysql_query($tiramanuales,$link); 
                    while ($rowmanuales = mysql_fetch_array($resultado_manuales)){ 
					$titulo_manual=$rowmanuales['titulo'];
					$sumario_manual=$rowmanuales['sumario'];
					$archivo_manual=$rowmanuales['archivo'];
					 
					?>
  <tr>
    <td valign="top" class="cuadrado_marron" >
    <div class="Arial_14_bold_negro" style="width:356px; margin-top:6px; margin-left:10px; margin-right:10px;"> <? echo"$titulo_manual"; ?></div>
    <div class="Arial_13_regular_negro" style="width:356px; margin-top:10px; margin-bottom:5px; margin-left:10px; margin-right:10px;"> <? echo"$sumario_manual"; ?></div>
    <div class="Arial_13_regular_negro" style="width:356px; margin-top:10px; margin-bottom:5px; margin-left:10px; margin-right:10px;"><a href="../../manuales_de_prensa/<? echo"$archivo_manual"; ?>" target="_blank" style="color:#000000;">Descargar archivo .pdf</a></div>    </td>
  </tr>
  <tr>
    <td width="378" height="16" valign="top">&nbsp;</td>
  </tr>
  <? } ?>
</table>
		</div> </td>
    <td width="14" height="638">&nbsp;</td>
    <td width="32" height="638">&nbsp; </td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="507" height="26">&nbsp;</td>
  </tr>
</table>

    </td>
    <td width="514" height="738">
    <table width="514" height="731" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="506" height="70">&nbsp;</td>
  </tr>
  <tr>
    <td width="506" height="636">
    <table width="492" height="636" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="34" height="636">&nbsp;</td>
    <td width="378" height="636"><div class="ScrollDocumentos" style=" width:400px; margin-left:30px;">
      <table width="378" border="0" cellspacing="0" cellpadding="0">
				
				<?php
				$tiradoc="SELECT * FROM documento ORDER BY nombref";
				$noticia = mysql_query($tiradoc, $link); 
				$numero=mysql_num_rows($noticia);
				$i=0;			
				while ($salida = mysql_fetch_array($noticia))
					{ 
					$nombref = $salida['nombref'];
					$fichero = $salida['fichero'];
					$extension= substr($fichero,-3); 
					$idd = $salida['id'];
					$marca = $salida['marca'];
				  ?>
	  
	  
        <tr>
          <td class="cuadrado_marron" width="634" height="52"><table width="378" height="52" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="56" height="52" align="center" ><?php if((($extension=="doc") or ($extension=="DOC") or ($extension=="odt"))){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/46_img_35x33.jpg" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>
				
				<?php }
				if(($extension=="pdf") or ($extension=="PDF")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/48_img_35x33.gif" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>
				
				<?php }
				if(($extension=="pdf") or ($extension=="PDF")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/47_img_35x33.jpg" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>
				
				<?php }
				if(($extension=="jpg") or ($extension=="JPG")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/jpg.jpg" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>
				
				<?php } 
				if(($extension=="xls") or ($extension=="XLS") or ($extension=="ods") or ($extension=="ODS")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/47_img_35x33.jpg" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>

					<? } 
				if(($extension=="zip") or ($extension=="ZIP")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/winzip.gif" border="0" width="35" height="33"  align="absmiddle" class="cuadrado_marron" ></a>
		
				<? } 
				if(($extension=="odp") or ($extension=="ODP") or ($extension=="ppt") or ($extension=="PPT")){ ?>
				<a href='dame.php?ckl=<? echo"$idd"; ?>'><img src="../../img/impress.jpg" border="0" width="35" height="33" align="absmiddle" class="cuadrado_marron"></a>
				
				<?php } ?></td>
                <td width="322"><div class="Arial_14_bold_negro" style="width:310px; margin-top:4px; margin-right:10px; margin-bottom:4px;"><a href='dame.php?ckl=<? echo"$idd"; ?>' style="text-decoration:none; color:#000000;"><? echo"$nombref"; ?></a></div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td width="634" height="14">&nbsp;</td>
        </tr>
		
		
		
		<?php } ?>
      </table>
    </div></td>
    <td width="14" height="636">&nbsp;</td>
     <td width="66" height="636">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="506"  height="22">&nbsp;</td>
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