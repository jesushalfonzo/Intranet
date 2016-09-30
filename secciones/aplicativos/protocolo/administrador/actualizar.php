<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	
<? 
 include('../../../extras/coneccion.php');
 $link=Conectarse();
$status=$_POST["status"];
$id_peticion=$_POST["id_peticion"];
$comentario=$_POST["comentario"];

$SQl="UPDATE m_aplicativos_protocolo SET m_aplicativos_protocolo_estatus='$status', m_aplicativos_protocolo_comentario='$comentario' WHERE m_aplicativos_protocolo_id='$id_peticion'";
$query=mysql_query($SQl, $link);
if($query){
echo"<script type='text/javascript'>alert('Actualización Exitosa');</script>";
}
else{
echo"<script type='text/javascript'>alert('Datos NO guardados --- ERROR');</script>";
}


$SSQL="SELECT * FROM m_aplicativos_protocolo WHERE  m_aplicativos_protocolo_id='$id_peticion'"; 
   $SSQUERy=mysql_query($SSQL, $link);
   $row=mysql_fetch_array($SSQUERy);
   $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
   $m_aplicativos_protocolo_dirrecion=$row['m_aplicativos_protocolo_dirrecion'];
   $m_aplicativos_protocolo_telefono=$row['m_aplicativos_protocolo_telefono'];
   $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];
   $m_aplicativos_protocolo_personasasistentes=$row['m_aplicativos_protocolo_personasasistentes'];
   $m_aplicativos_protocolo_lugar=$row['m_aplicativos_protocolo_lugar'];
   $m_aplicativos_protocolo_hora=$row['m_aplicativos_protocolo_hora'];
   $m_aplicativos_protocolo_numregalos=$row['m_aplicativos_protocolo_numregalos'];
   $m_aplicativos_protocolo_tiporegalo=$row['m_aplicativos_protocolo_tiporegalo'];
   $m_aplicativos_protocolo_aquien=$row['m_aplicativos_protocolo_aquien'];
   $m_aplicativos_protocolo_motivovisita=$row['m_aplicativos_protocolo_motivovisita'];
   $m_aplicativos_protocolo_lineaaerea=$row['m_aplicativos_protocolo_lineaaerea'];
   $m_aplicativos_protocolo_numerovuelo=$row['m_aplicativos_protocolo_numerovuelo'];
   $m_aplicativos_protocolo_paisprocedencia=$row['m_aplicativos_protocolo_paisprocedencia'];
   $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
   $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
   $m_aplicativos_protocolo_nombreinvitado=$row['m_aplicativos_protocolo_nombreinvitado'];
   $m_aplicativos_protocolo_comentario=$row['m_aplicativos_protocolo_comentario'];
   $m_aplicativos_protocolo_emailusuario=$row['m_aplicativos_protocolo_emailusuario'];
   
   $fecha=date('d/m/Y h:m:s');

//HTML PAL CORREO 

$html_usuario="
<!DOCTYPE html_usuario PUBLIC '-//W3C//DTD Xhtml_usuario 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml_usuario1/DTD/xhtml_usuario1-transitional.dtd'>
<html_usuario xmlns='http://www.w3.org/1999/xhtml_usuario'>
<head>
<meta http-equiv='Content-Type' content='text/html_usuario; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='left'>
<tr><td colspan='3'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Su solicitud ha sido procesada, los comentarios referentes a la misma se encuentra a continuación:<bR><br><b>Comentarios:</b> ".$m_aplicativos_protocolo_comentario."<br><br>Su solicitud fue la siguiente:</p></td></tr>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'>Solicitud</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr><td>
 <table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
 <tr >
   <td width='103'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo:</p></td>
   <td width='598' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_tiposolicitud."</div></td></tr>
 <tr><td colspan='2'>&nbsp;</td></tr>
 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha solicitud::</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
<tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Dirección </span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'> ".$m_aplicativos_protocolo_dirrecion."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Telefono:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_telefono."</div></td></tr>
    
 </table>
 </td></tr>
 

<tr><td colspan='3'>&nbsp;</td></tr>";

if($m_aplicativos_protocolo_tiposolicitud=='Reunión'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de asitentes:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_personasasistentes."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='112'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='589'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { if($m_aplicativos_protocolo_tiposolicitud=='Regalo corporativo'){

$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;
border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de regalos:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_numregalos."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Tipo de Regalo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_tiporegalo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Regalos dirigidos a:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_aquien."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } else { 

 if($m_aplicativos_protocolo_tiposolicitud=='Invitado Especial'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>

   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_nombreinvitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Motivo de la visita - o programa al que asistirá:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_motivovisita."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
} else { 

 if($m_aplicativos_protocolo_tiposolicitud=='Salida del Canal para recibir invitados'){
$html_usuario.="<tr><td>
<table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Hora:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_hora."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Lugar:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_lugar."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombre  Invitado:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_nombreinvitado."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Línea Aérea:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_lineaaerea."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>N° de vuelo:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_numerovuelo."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	<tr> <td width='118'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>País de procedencia:</span></td>
   <td width='583'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$m_aplicativos_protocolo_paisprocedencia."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	</table></td></tr>";
	
   
 } } } }
 
$html_usuario.="<tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
<tr>
  <td height='15' align='center'  colspan='3'>&nbsp;</td>
</tr>
</table> </body>
</html>";
require_once('../htmlMimeMail5/htmlMimeMail5.php');
    
    $mail = new htmlMimeMail5();

    
     //Establecemos el remitente
    
    $mail->setFrom('Protocolo <protocolo@telesurtv.net>');
    
    
   //Establecemos el asunto
   
	
    $mail->setSubject('Respuesta del equipo de protocolo'); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail->setText($html_usuario);
    
   
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
	 
    
    // Enviamos el mensaje de correo usando el modo SMTP
	 // para poder hacer smtp autenticado
    //$correo=$email.', jalfonzo@telesurtv.net';
    $mail->send(array($m_aplicativos_protocolo_emailusuario), 'smtp');
//FIN
echo"<script type='text/javascript'>document.location.href='peticiones.php';</script>";
?>

