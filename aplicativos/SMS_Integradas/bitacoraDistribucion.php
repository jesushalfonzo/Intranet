<?php
include('logeo.php');
?>
<? $ruta="../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>teleSUR - Intranet - Aplicativos - Asistencia Jurídica </title>
<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.letrasblancas{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
color:#FFFFFF;
font-weight:bold;
}
</style>
</head>

<script type="text/javascript" src="extras/tuvoz/dynifs.js"></script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="187"></td>
	<td width="590"><div class="texto_Gris" align="right" style="margin-right:20px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td></tr></table></td></tr>
      <tr>
        <td width="5"><img src="../../images/spacer.gif" width="5" height="11" /></td>
        <td width="789" valign="top" align="center">
<table width="788" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="letrasblancas">Mensajes de texto enviados </div></td>
  </tr>
  <tr bgcolor="#000000">
   
    <td width="171" align="center"><span class="letrasblancas">Titulo</span></td>
	<td width="176" align="center"><span class="letrasblancas">Mensaje</span></td>
    <td width="125" ><div align="center" class="letrasblancas">Fecha de envio </div></td>
   <td width="180" ><div align="center" class="letrasblancas">Archivos </div></td>
  
    <td width="124" ><div align="center" class="letrasblancas">Usuario</div></td>
	<!--<td width="71" ><div align="center" class="letrasblancas">Estatus</div></td>-->

  </tr>
  <? 

  include('coneccion.php');
  $link=Conectarse();



  
    $tirasql="SELECT * FROM m_bitacora_distribucion, m_usuarios WHERE  m_bitacora_distribucion_loginusu = m_usuarios_login ORDER BY m_bitacora_distribucion_fecha DESC LIMIT 0,15";
	 $result = mysql_query($tirasql,$link);
  $numero=mysql_num_rows($result);
if($numero==0){
?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><span class="titulo_entrevista">No hay mensajes enviados </span></td>
  </tr>
<?php
}
    while ($row = mysql_fetch_array($result)){ 
     $m_bitacora_sms_id=$row['id'];
	 $m_bitacora_sms_fecha=strtotime($row['m_bitacora_distribucion_fecha']);
	 $fecha = date("d-m-Y H:i", $m_bitacora_sms_fecha);
	 $m_bitacora_sms_texto=$row['m_bitacora_distribucion_titulo'];
	 $m_bitacora_distribucion_mensaje=$row['m_bitacora_distribucion_mensaje'];
	 $m_bitacora_distribucion_archivo1=$row['m_bitacora_distribucion_archivo1'];
	 $m_bitacora_distribucion_archivo2=$row['m_bitacora_distribucion_archivo2'];
	 $m_bitacora_sms_usu=$row['m_bitacora_distribucion_usu'];
	  $m_bitacora_sms_ip=$row['m_bitacora_distribucion_ip'];
	  $nombre_usuario=$row['m_usuarios_nombre'];
  ?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_bitacora_sms_texto";?></span></td>
   <td align="center"><span class="titulo_entrevista"><? echo "$m_bitacora_distribucion_mensaje";?></span></td>
    <td><div align="center" class="titulo_entrevista"><? echo "$fecha";?></div></td>
	<td><div align="center" class="titulo_entrevista">
	<a href="distribucion_IMG/<?php echo "$m_bitacora_distribucion_archivo1";?>" style="text-decoration:none;">
	<?php echo "$m_bitacora_distribucion_archivo1";?> 
	</div>
	
	<br /> 
	<a href="distribucion_IMG/<?php echo "$m_bitacora_distribucion_archivo2";?>" style="text-decoration:none;">
	<?php echo "$m_bitacora_distribucion_archivo2";?></a></div></td>
    
    <td><div align="center" class="titulo_entrevista"><?php echo "$nombre_usuario";?></div></td>
	
	<!--<td><div align="center"><a href="ver.php?clx=<? echo"$m_bitacora_sms_id"; ?>"><img src="img/lupaver_1.png" width="30" height="30" border="0" title="Ver Solicitud" /></a></div></td>-->
  </tr>
 <? } ?>
 
 
 <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><a href="index2.php" title="Volver"><img src="imagenes/back30_1.png" width="30" height="30" vspace="5" border="0" title="Volver" /></a></td>
  </tr>
</table>		</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('../pie_pagina.php'); ?>
</table>

<blockquote>&nbsp;</blockquote>
</body>
</html>
