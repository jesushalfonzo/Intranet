<? 
ini_set('session.gc_maxlifetime',7200);
ini_set("session.cache_expire",120);
session_start();
$variable=$_SESSION["protomardito"];
if ($variable != 'v3rgacion'){
echo "<script language='JavaScript'>parent.location.href='index.php' ;</script>";
}
else{  
  $usuario=$_SESSION['iddatospersmardito'];
  $nombre_completo=$_SESSION['nombre_completomar'];
  $email=$_SESSION['mailusuarioremar'];
}
include ('../../../extras/coneccion.php');
$linky=Conectarse();
$fecha_solicitud=$_POST["fecha_solicitud"];
$fecha_servicio=$_POST["fecha_servicio"];
$departamento=$_POST["departamento"];
$telefono=$_POST["telefono"];
$tipo=$_POST["tipo"];
$numero_asistentes=$_POST["numero_asistentes"];
$lugar=$_POST["lugar"];
$hora=$_POST["hora"];
$tipo_regalo=$_POST["tipo_regalo"];
$motivo_visita=$_POST["motivo_visita"];
$nombre_invitado=$_POST["nombre_invitado"];
$linea_aerea=$_POST["linea_aerea"];
$numero_vuelo=$_POST["numero_vuelo"];
$pais_procedencia=$_POST["pais_procedencia"];
$numero_regalos=$_POST["numero_regalos"];
$detalle_regalos=$_POST["detalle_regalos"];
$cafe=$_POST["cafe"];
$agua=$_POST["agua"];
$te=$_POST["te"];
$galletas=$_POST["galletas"];
if($cafe!=''){
$tipo_refrigerio.=$cafe.',';
}
if($agua!=''){
$tipo_refrigerio.=$agua.',';
}
if($te!=''){
$tipo_refrigerio.=$te.',';
}
if($galletas!=''){
$tipo_refrigerio.=$galletas;
}

$SQL="INSERT INTO m_aplicativos_protocolo VALUES(Null, Now(), '$fecha_servicio', '$departamento', '$telefono', '$tipo', '$numero_asistentes', '$lugar', '$hora', '$numero_regalos', '$tipo_regalo', '$detalle_regalos', '$nombre_invitado', '$motivo_visita', '$linea_aerea', '$numero_vuelo', '$pais_procedencia', 'A', '$usuario', '', '$email', '$tipo_refrigerio')";

$query=mysql_query($SQL, $linky);
if($query){
echo"<script type='text/javascript'>alert('Datos guardados correctamente');</script>";
}
else{
echo"<script type='text/javascript'>alert('Datos NO guardados --- ERROR');</script>";
}
//$correos="jalfonzo@telesurtv.net, dfreitez@telesurtv.net";
if($tipo=="Invitado Especial"){
$correos="mleon@telesurtv.net, dmendoza@telesurtv.net, jalfonzo@telesurtv.net, dlopez@telesurtv.net, jvillegas@telesurtv.net, irodrigues@telesurtv.net, hmalave@telesurtv.net, ccalzadilla@telesurtv.net, resanchez@telesurtv.net , reiborges@telesurtv.net, marodriguez@telesurtv.net, seguridad@telesurtv.net, yeirodriguez@telesurtv.net, arivas@telesurtv.net";
}
else{
$correos="mleon@telesurtv.net, dmendoza@telesurtv.net, jalfonzo@telesurtv.net, dlopez@telesurtv.net, jvillegas@telesurtv.net, marodriguez@telesurtv.net, irodrigues@telesurtv.net, hmalave@telesurtv.net, ccalzadilla@telesurtv.net, yeirodriguez@telesurtv.net, arivas@telesurtv.net";
}
//ccalzadilla@telesurtv.net: Temporal mientras que termina suplencia.
//$correos="jesushalfonzo@gmail.com";
//PARE EL CORREO QUE VA A IMOLKO Y ENVIA LOS MENSAJES DE TEXTO
$html="
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>El usuario ".$nombre_completo." ha hecho una nueva solicitud para el departamento de protocolo, las especificaciones de la misma se muestran a continuación:</p></td></tr>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'>Nueva solicitud</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr><td>
 <table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
 <tr >
   <td width='225'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo:</p></td>
   <td width='476' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo."</div></td></tr>
 <tr><td colspan='2'>&nbsp;</td></tr>
 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha solicitud:</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha_solicitud."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha en que se necesita el servicio:</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha_servicio."</div></td></tr>
	 <tr><td colspan='2'>&nbsp;</td></tr>
<tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Dirección </span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'> ".$departamento."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Telefono:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$telefono."</div></td></tr>
    
 </table>
 </td></tr>
 

<tr><td colspan='3'>&nbsp;</td></tr>";

if($tipo=='Reunión'){
$html.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de asitentes:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_asistentes."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>Tipo refrigerio :</div></td>
   <td width='589' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo_refrigerio."</div></td></tr>
   <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { if($tipo=='Regalo corporativo'){

$html.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;
border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de regalos:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_regalos."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo de Regalo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo_regalo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Regalos dirigidos a:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$detalle_regalos."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } else { 

 if($tipo=='Invitado Especial'){
$html.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$nombre_invitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Motivo de la visita - o programa al que asistirá:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$motivo_visita."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { 

 if($tipo=='Salida del Canal para recibir invitados'){
$html.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$mhora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$nombre_invitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Línea Aérea:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$linea_aerea."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de vuelo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_vuelo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>País de procedencia:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$pais_procedencia."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } } } }
 
$html.="<tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>
</table> </body>
</html>";
 


 
//FIN DEL SCRIPT
  
//PARA EL CORREO DEL USUARIO
$html_usuario="
<!DOCTYPE html_usuario PUBLIC '-//W3C//DTD Xhtml_usuario 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml_usuario1/DTD/xhtml_usuario1-transitional.dtd'>
<html_usuario xmlns='http://www.w3.org/1999/xhtml_usuario'>
<head>
<meta http-equiv='Content-Type' content='text/html_usuario; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Usted ha realizado una petici&oacute;n al departamento de protocolo, las especificaciones son las siguientes: </p></td></tr>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'>Solicitud</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr><td>
 <table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
 <tr >
   <td width='228'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo:</p></td>
   <td width='473' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo."</div></td></tr>
 <tr><td colspan='2'>&nbsp;</td></tr>
 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha solicitud::</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha_solicitud."</div></td></tr>
       <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha en que se necesita el servicio:</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha_servicio."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
<tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Dirección </span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'> ".$departamento."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Telefono:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$telefono."</div></td></tr>
    
 </table>
 </td></tr>
 

<tr><td colspan='3'>&nbsp;</td></tr>";

if($tipo=='Reunión'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de asitentes:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_asistentes."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>Tipo refrigerio :</div></td>
   <td width='589' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo_refrigerio."</div></td></tr>
   <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { if($tipo=='Regalo corporativo'){

$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;
border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de regalos:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_regalos."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo de Regalo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$tipo_regalo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Regalos dirigidos a:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$detalle_regalos."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } else { 

 if($tipo=='Invitado Especial'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$nombre_invitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Motivo de la visita - o programa al que asistirá:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$motivo_visita."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { 

 if($tipo=='Salida del Canal para recibir invitados'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$mhora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$nombre_invitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Línea Aérea:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$linea_aerea."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de vuelo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$numero_vuelo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>País de procedencia:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$pais_procedencia."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } } } }
 
$html_usuario.="<tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
<tr><td colspan='3'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-top:10px;'>Su solicitud será atendida y la respuesta se le hará llegar por esta misma via. </p></td></tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>

</table> </body>
</html>";
//FIN

//

//AHORA ENVIAMOS LA SHIT

require_once('htmlMimeMail5/htmlMimeMail5.php');
    
    $mail = new htmlMimeMail5();

    
     //Establecemos el remitente
    
    $mail->setFrom('Protocolo <protocolo@telesurtv.net>');
    
    
   //Establecemos el asunto
   
	
    $mail->setSubject('Petición protocolo'); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail->setHtml($html);
    
   
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
	 
    
    // Enviamos el mensaje de correo usando el modo SMTP
	 // para poder hacer smtp autenticado
    //$correo=$email.', jalfonzo@telesurtv.net';
    $mail->send(array($correos), 'smtp');
	
	
	$mail2 = new htmlMimeMail5();

    
     //Establecemos el remitente
    
    $mail2->setFrom('Protocolo <protocolo@telesurtv.net>');
    
    
   //Establecemos el asunto
   
	
    $mail2->setSubject('Petición protocolo'); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail2->setHtml($html_usuario);
    
   
    $mail2->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
	 
    
    // Enviamos el mensaje de correo usando el modo SMTP

	$mail2->send(array($email), 'smtp');



echo"<script type='text/javascript'>document.location.href='listado.php';</script>";
?>
