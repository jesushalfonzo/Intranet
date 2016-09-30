<?
ini_set('session.gc_maxlifetime',7200);
ini_set("session.cache_expire",120);
session_start();
$variable=$_SESSION["protomardito"];
if ($variable != 'v3rgacion'){
echo "<script language='JavaScript'>parent.location.href='index.php' ;</script>";
}
else{  
  $usuario=$_SESSION['usumardito'];
  $nombre_completo=$_SESSION['nombre_completomar'];
}

?>
<? include('../../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";

/*include('../../../extras/coneccion_aplicaciones.php');
$conecta=Validar();
 */
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Herramientas - Protocolo</title>
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
.ScrollX {
	
	overflow: scroll;
	height: 480px;
	margin-top:10px;
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
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg','../../../img/06_correo_01_160x106.jpg','../../../img/38_izq_02_26x52.jpg','../../../img/40_der_02_26x52.jpg','../../../img/23_RRHH_01_121x40.jpg','../../../img/25_genteTelesur_196x40.jpg','../../../img/27_fueraOficio_252x40.jpg','../../../img/32_1arriba_20x20.jpg','../../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../../img/01_Imagen_1020x816.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="17">&nbsp;    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Aplicativo Protocolo </div></td>
  </tr>
   
   <tr>
    <td width="1020" height="460" valign="top" >
	<div class="ScrollX" style="margin-right:80px;">
	<table width="794" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="781" valign="top">
		
		
		
		<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">

  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="187"><div  class="titulo_entrevista" style="margin-left:30px;"><a href="formulario.php">Nueva petición</a></div></td>
	<td width="590"><div class="texto_Gris" align="right" style="margin-right:20px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sessión</a></div></td></tr></table></td></tr>
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="783" valign="top" align="center">
<table width="758" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones para el equipo de protocolo </div></td>
  </tr>
  <tr bgcolor="#000000">
   
    <td width="281" align="center"><span class="Titulos">T&iacute;tulo</span></td>
    <td width="150" ><div align="center" class="Titulos">Fecha  </div></td>
   
  
    <td width="74" ><div align="center" class="Titulos">Estatus</div></td>
	<td width="109" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
  </tr>
  <? 
 

require_once('nusoap/lib/nusoap.php');
$cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
$resultado = $cliente->call('cuenta_id', array('id' => $usuario)); 
		
		
		
  
$tirasql="SELECT * FROM m_aplicativos_protocolo WHERE m_aplicativos_protocolo_idiusupeticion='$usuario' ORDER BY m_aplicativos_protocolo_estatus ASC, m_aplicativos_protocolo_fechasolicitud ASC LIMIT 0,30";
	 $result = mysql_query($tirasql,$link);
  $numero=mysql_num_rows($result);
  if($numero==0){
 echo "<script language='JavaScript'>document.location.href='formulario.php';</script>";
  exit();
  }
    while ($row = mysql_fetch_array($result)){ 
     $m_aplicativos_protocolo_id=$row['m_aplicativos_protocolo_id'];
     $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
     $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
	 $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
	 $fecha = date("d-m-Y H:i", $m_aplicativos_protocolo_fechasolicitud);
	 $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];

  ?>

  <tr onMouseOver="this.bgColor='#CCCCCC'" onMouseOut="this.bgColor='#FFFFFF'">

   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_aplicativos_protocolo_tiposolicitud";?></span></td>
   
    <td><div align="center" class="titulo_entrevista"><? echo "$fecha";?></div></td>
    
    <td><div align="center"><img src="administrador/imagenes/<? if($m_aplicativos_protocolo_estatus=='A'){ echo'rojo.png';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_soporte_status=='A'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_soporte_status=='C'){ echo'Solicitud resuelta';} ?>"></div></td>
	<td><div align="center"><a href="ver.php?clx=<? echo"$m_aplicativos_protocolo_id"; ?>"><img src="administrador/imagenes/lupa.gif" width="21" height="15" border="0" title="Ver Solicitud" /></a></div></td>
  </tr>
 <? } ?>
</table>		</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../images/spacer.gif" width="10" height="20" /></td>
  </tr>

</table></td>
        </tr>
    </table>
</div>
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