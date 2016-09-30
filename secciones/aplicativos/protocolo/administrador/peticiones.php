<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Trivia </title>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="extras/tuvoz/dynifs.js"></script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../../../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="105"><div align="center"><a href="estadisticas.php"><img src="estadisticas.gif" width="34" height="34" border="0" title="Estadísticas" /></a></div></td>
    <td width="687"><div class="texto_Gris" align="right" style="margin-right:40px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sessión</a></div></td>
  </tr></table></td></tr>
      <tr>
        <td width="11"><img src="../../../images/spacer.gif" width="11" height="11" /></td>
        <td width="783" valign="top" align="center">
<table width="758" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones para el equipo de protocolo </div></td>
  </tr>
  <tr bgcolor="#000000">
    <td width="112" ><div align="center" class="Titulos">Usuario</div></td>
    <td width="281" align="center"><span class="Titulos">T&iacute;tulo</span></td>
    <td width="150" ><div align="center" class="Titulos">Fecha  </div></td>
   
  
    <td width="74" ><div align="center" class="Titulos">Estatus</div></td>
	<td width="109" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
  </tr>
  <?php
  require_once('../nusoap/lib/nusoap.php');
  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();
  include('../../../extras/coneccion.php');
  $link=Conectarse();
      $tirasql="SELECT * FROM m_aplicativos_protocolo ORDER BY m_aplicativos_protocolo_estatus ASC, m_aplicativos_protocolo_fechasolicitud ASC";
	  //echo"$tirasql";
	 $result = mysql_query($tirasql,$link);
  
    while ($row = mysql_fetch_array($result)){ 
     $m_aplicativos_protocolo_id=$row['m_aplicativos_protocolo_id'];
     $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
     $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
	 $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
	 $fecha = date("d-m-Y H:i", $m_aplicativos_protocolo_fechasolicitud);
	 $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];
	 /*
$sql_datos="SELECT nombre1, apellido1 FROM datospersonales where id_datospersonales='$m_aplicativos_protocolo_idiusupeticion'";
$que=mysql_query($sql_datos, $enlace);
$r=mysql_fetch_array($que);
$nombre=$r['nombre1'];
$apellido=$r['apellido1'];
$nombre_completo=$nombre.' '.$apellido;*/


$cliente = new nusoap_client('http://192.168.3.60/webservices/cuenta/servicio.php');
$resultado = $cliente->call('cuenta_id', array('id' => $m_aplicativos_protocolo_id));
$nombre_completo =  ucfirst($resultado["nombre1"])." ".ucfirst($resultado["apellido1"]);
  ?>

  <tr onMouseOver="this.bgColor='#CCCCCC'" onMouseOut="this.bgColor='#FFFFFF'">
    <td align="center"><span class="titulo_entrevista"><? echo"$nombre_completo"; ?></span></td>
   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_aplicativos_protocolo_tiposolicitud";?></span></td>
   
    <td><div align="center" class="titulo_entrevista"><? echo "$fecha";?></div></td>
    
    <td><div align="center"><img src="imagenes/<? if($m_aplicativos_protocolo_estatus=='A'){ echo'rojo.png';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_soporte_status=='A'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_soporte_status=='C'){ echo'Solicitud resuelta';} ?>"></div></td>
	<td><div align="center"><a href="ver.php?clx=<? echo"$m_aplicativos_protocolo_id"; ?>"><img src="imagenes/lupa.gif" width="21" height="15" border="0" title="Ver Solicitud" /></a></div></td>
  </tr>
 <? } ?>
</table>		</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('../../../pie_pagina.php'); ?>
</table>

<blockquote>&nbsp;</blockquote>
</body>
</html>
