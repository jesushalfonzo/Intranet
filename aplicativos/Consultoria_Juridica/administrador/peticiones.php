<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Aplicativos - Asistencia Jurídica</title>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.letrasblancas{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
color:#FFFFFF;
font-weight:bold;
}
</style>
<script type="text/javascript" src="extras/tuvoz/dynifs.js"></script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="105"><div align="center"><img src="../img/spacer.gif" width="1" height="1" border="0" title="Estadísticas" /></div></td>
    <td width="687"><div class="texto_Gris" align="right" style="margin-right:40px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr></table></td></tr>
      <tr>
        <td width="5"><img src="../../../images/spacer.gif" width="5" height="11" /></td>
        <td width="789" valign="top" align="center">
<table width="783" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones de Asistencia jur&iacute;dica </div></td>
  </tr>
  <tr bgcolor="#000000">
    <td width="130" ><div align="center" class="Titulos">Usuario</div></td>
    <td width="204" align="center"><span class="Titulos">T&iacute;tulo</span></td>
    <td width="128" ><div align="center" class="letrasblancas">Fecha de solicitud </div></td>
   <td width="134" ><div align="center" class="letrasblancas">Fecha asignada </div></td>
  
    <td width="64" ><div align="center" class="letrasblancas">Estatus</div></td>
	<td width="52" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
	<td width="55" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
  </tr>
  <? 
  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();
  include('../../../extras/coneccion.php');
  $link=Conectarse();
     $tirasql="SELECT * FROM m_aplicativo_cjuridica ORDER BY m_aplicativo_cjuridica_estatus DESC, m_aplicativo_cjuridica_fechasolicitud DESC LIMIT 0,25";
	 $result = mysql_query($tirasql,$link);
     while ($row = mysql_fetch_array($result)){ 
     $m_aplicativo_cjuridica_id=$row['m_aplicativo_cjuridica_id'];
     $m_aplicativo_cjuridica_nombres=$row['m_aplicativo_cjuridica_nombres'];
     $m_aplicativo_cjuridica_apellidos=$row['m_aplicativo_cjuridica_apellidos'];
	 $m_aplicativo_cjuridica_fechasolicitud=strtotime($row['m_aplicativo_cjuridica_fechasolicitud']);
	 $fecha = date("d-m-Y", $m_aplicativo_cjuridica_fechasolicitud);
	 $m_aplicativo_cjuridica_solicitud=$row['m_aplicativo_cjuridica_solicitud'];
	 $m_aplicativo_cjuridica_fechaasignada=$row['m_aplicativo_cjuridica_fechaasignada'];
	 $m_aplicativo_cjuridica_estatus=$row['m_aplicativo_cjuridica_estatus'];
	  $m_aplicativo_cjuridica_estatus=$row['m_aplicativo_cjuridica_estatus'];
	  if($m_aplicativo_cjuridica_fechaasignada!='0000-00-00 00:00:00'){
      $fechaasignada=date('d-m-Y h:i', strtotime($m_aplicativo_cjuridica_fechaasignada));
	  $fechaASIGPrint=date('d-m-Y h:i A', strtotime($m_aplicativo_cjuridica_fechaasignada));
	  }
	  else{
	  $fechaasignada="Por Asignar";
	   $fechaASIGPrint="Por Asignar";
	  }
	  
	  $separr=explode(' ', $m_aplicativo_cjuridica_nombres);
	  $nombre1=$separr[0];
	  
	   $separlo=explode(' ', $m_aplicativo_cjuridica_apellidos);
	   $apellido1=$separlo[0]
	  
  ?>
  
  
  

  <tr bgcolor="#FFFFFF">
    <td align="center"><span class="titulo_entrevista"><? echo $nombre1." ". $apellido1; ?></span></td>
   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_aplicativo_cjuridica_solicitud";?></span></td>
   
    <td><div align="center" class="titulo_entrevista"><? echo "$fecha";?></div></td>
    
    <td><div align="center" class="titulo_entrevista">
	
<?php echo $fechaASIGPrint; ?>	
</div></td>
	 
	 <td><div align="center">
	
	
	<?php 
	$fechahoy=date('Y-m-d H:i:s', time());
	
	?>
	<img src="../img/<?php if($m_aplicativo_cjuridica_estatus=='C'){ echo'rojo.png'; } if ($m_aplicativo_cjuridica_estatus =='B'){  echo'amarillo.png'; } if ($m_aplicativo_cjuridica_estatus =='A'){  echo'verde.png'; } ?>"
	 width="11" height="11" border="0" title="<?php if($m_aplicativo_cjuridica_estatus=='C'){ echo'En Espera'; } if ($m_aplicativo_cjuridica_estatus =='B'){  echo'En Proceso'; } if ($m_aplicativo_cjuridica_estatus =='A'){  echo'Atendida'; } ?>"></div></td>
	<td><div align="center"><a href="ver.php?clx=<? echo"$m_aplicativo_cjuridica_id"; ?>"><img src="../img/lupaver_1.png" width="20" height="20" border="0" title="Ver Solicitud" /></a></div></td>
	<td><div align="center"><a href="adjuntos.php?clx=<? echo"$m_aplicativo_cjuridica_id"; ?>" title="Enviar archivos"><img src="../img/clips_Layer 1.png" width="21" height="21" border="0" title="Enviar archivos" /></a></div></td>
  </tr>
 <? } ?>
 
 
 
</table>		</td>
        </tr>
		<tr bgcolor="#000000">
    <td colspan="7" bgcolor="#E7E8E9"><div align="center" class="Titulos"><a href="index2.php" target="_parent" title="Volver"><img  src="../img/back30_1.png" name="button" width="30" height="30" vspace="5"  border="1" style="color:#fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" title="Volver" type="image" value="Volver" /></a></div></td>
  </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('../../pie_pagina.php'); ?>
</table>

<blockquote>&nbsp;</blockquote>
</body>
</html>
