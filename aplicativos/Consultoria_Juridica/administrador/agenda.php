<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	

<?php

  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();
  include('../../../extras/coneccion.php');
  $link=Conectarse();
  $datehoy=date('Y-m-d', time());
  $rangoconsulta=$_POST["rangofecha"];
  $lad=explode('/', $rangoconsulta);
  $d=$lad[0];
  $m=$lad[1];
  $a=$lad[2];
  if($rangoconsulta==""){
    $fechaconsulta=$datehoy;
	 $diaatencionL="Hoy";
	 $fechaescrita=date('d-m-Y', time());
	 }
	 else{
	 $fechaconsulta=$a."-".$m."-".$d;
	 $diaatencionL=dia_semana($d, $m, $a);
	 $fechaescrita=$d."-".$m."-".$a;
	 }
	 
	
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Aplicativo - Asistencia Jurídica </title>
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
<script language="javascript" src="cal2.js">

</script>
<script type="text/javascript">
function enviar_formulario(){
   //document.myform.submit()
   alert('Prueba');
}
</script> 
<script language="javascript" src="cal_conf2.js"></script>
<body>
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2">
	<form name="myform" action="agenda.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="199"><table width="199" border="0" cellpadding="0" cellspacing="0">
	  <tr><td width="34"><div align="center"> <a href="javascript:showCal('calendario')"><img src="../img/app_date.png" width="19" height="19" border="0" align="texttop" /></a></div></td><td width="66">
	<input type="text" align="texttop" name="rangofecha" class="pequeno" value="<?php echo $fechaconsulta; ?>"  size="10"  style="text-align:center;" onchange="enviar_formulario();">
	  
	   
	  </td>
	  <td width="99">
	   <input type="image" border="1" name="button" value="guardar" width="15" height="15" style="color: #fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../img/avances5.png" alt="Guardar... " title="Recargar... " /></td>
	  </tr></table></td>
    <td width="593"><div class="texto_Gris" align="right" style="margin-right:40px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr></table>
  </form>
  </td></tr>
      <tr>
        <td width="5"><img src="../../../images/spacer.gif" width="5" height="11" /></td>
        <td width="789" valign="top" align="center">
<table width="783" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones de Asistencia jur&iacute;dica para el día <?php echo $diaatencionL; ?>, <?php echo $fechaescrita; ?></div></td>
  </tr>
  <tr bgcolor="#000000">
    <td width="138" ><div align="center" class="Titulos">Usuario</div></td>
    <td width="227" align="center"><span class="Titulos">T&iacute;tulo</span></td>
    <td width="146" ><div align="center" class="letrasblancas">Fecha de solicitud </div></td>
   <td width="134" ><div align="center" class="letrasblancas">Fecha asignada </div></td>
  
    <td width="65" ><div align="center" class="letrasblancas">Estatus</div></td>
	<td width="59" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
  </tr>
  <? 

	  $tirasql="SELECT * FROM m_aplicativo_cjuridica WHERE date(m_aplicativo_cjuridica_fechaasignada)='$fechaconsulta'  ORDER BY m_aplicativo_cjuridica_estatus ASC, m_aplicativo_cjuridica_fechasolicitud ASC LIMIT 0,25";
	 //echo $tirasql;
	 $result = mysql_query($tirasql,$link);
	 $numero=mysql_num_rows($result);
	 if($numero==0){
	 
	 ?>
	  <tr bgcolor="#FFFFFF">
    <td colspan="6"><div align="center" class="texto_pregunta_TuZona">No existen citas para esta fecha</div></td>
  </tr>
	 
	 <?php
	 }
	 else{
     while ($row = mysql_fetch_array($result)){ 
     $m_aplicativo_cjuridica_id=$row['m_aplicativo_cjuridica_id'];
     $m_aplicativo_cjuridica_nombres=$row['m_aplicativo_cjuridica_nombres'];
     $m_aplicativo_cjuridica_apellidos=$row['m_aplicativo_cjuridica_apellidos'];
	 $m_aplicativo_cjuridica_fechasolicitud=strtotime($row['m_aplicativo_cjuridica_fechasolicitud']);
	 $fecha = date("d-m-Y", $m_aplicativo_cjuridica_fechasolicitud);
	 $m_aplicativo_cjuridica_solicitud=$row['m_aplicativo_cjuridica_solicitud'];
	 $m_aplicativo_cjuridica_fechaasignada=$row['m_aplicativo_cjuridica_fechaasignada'];
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
	<img src="../img/<?php if($fechaasignada=='Sin Asignar'){ echo'rojo.png'; } if ($fechaasignada >='$fechahoy'){  echo'amarillo.png'; } if ($fechaasignada <='$fechahoy'){  echo'verde.png'; } ?>"
	 width="11" height="11" border="0" title="<?php if($fechaasignada=='Sin Asignar'){ echo'En Espera'; } if ($fechaasignada >='$fechahoy'){  echo'En Proceso'; } if ($fechaasignada <='$fechahoy'){  echo'Atendida'; } ?>"></div></td>
	<td><div align="center"><a href="ver.php?clx=<? echo"$m_aplicativo_cjuridica_id"; ?>"><img src="../img/lupaver_1.png" width="30" height="30" border="0" title="Ver Solicitud" /></a></div></td>
  </tr>
 <? } }?>
</table>		</td>
        </tr>
		<tr bgcolor="#000000">
    <td colspan="7" bgcolor="#FFFFFF"><div align="center" class="Titulos"><a href="index2.php" target="_parent" title="Volver"><img  src="../img/back30_1.png" name="button" width="30" height="30" vspace="5"  border="1" style="color:#fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" title="Volver" type="image" value="Volver" /></a></div></td>
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
<?php 
function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}

?>