<?php
include('logeo.php'); 
include ('../../../extras/coneccion.php');
$linky=Conectarse();
$fecha_solicitud=$_POST["fecha_solicitud"];
$hora=$_POST["hora"];
$fecha_completa=$fecha_solicitud.' '.$hora;
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cedulaID=$_POST["cedula"];
$cargo=$_POST["cargo"];
$departamento=$_POST["departamento"];


$desdeturno=$_POST["desdeturno"];
$hastaturno=$_POST["hastaturno"];
$turno=$desdeturno." - ".$hastaturno;


$email=$_POST["email"];
$extension=$_POST["extension"];
$solicitud=$_POST["solicitud"];
$fechacompleta=date('Y-m-d H:i:s', time());
$fecha_correo=date('d-m-Y H:i', strtotime($fecha_completa));

 $SQL="INSERT INTO m_aplicativo_cjuridica VALUES(Null, '$usuarioid', '$nombre', '$apellido', '$fechacompleta', '$cedula', '$cargo', '$departamento', '$turno', '$email', '$extension', '$solicitud', '', 'C', '', '','')";


$query=mysql_query($SQL, $linky);
if($query){
echo"<script type='text/javascript'>alert('Datos guardados correctamente');</script>";
}
else{
echo"<script type='text/javascript'>alert('Datos NO guardados --- ERROR');</script>";
}
$correos="jalfonzo@telesurtv.net";

//PARE EL CORREO QUE VA A IMOLKO Y ENVIA LOS MENSAJES DE TEXTO
$html="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>El usuario ".$nombre_completo." ha hecho una nueva solicitud, las especificaciones de la misma se muestran a continuación:</p></td></tr>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'>Detalles de la solicitud de Asistencia Jurídica </div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr><td>
 <table width='701' border='0' align='left' cellpadding='0' cellspacing='0'>
 <tr >
   <td width='225'  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Fecha solicitud:</p></td>
   <td width='476' style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$fecha_correo."</div></td></tr>
 <tr><td colspan='2'>&nbsp;</td></tr>
 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Nombres y Apellidos </span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$nombre." ".$apellido."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
	 <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Dependencia:</span>   </td>
   <td style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$departamento."</div></td></tr>
	 <tr><td colspan='2'>&nbsp;</td></tr>
<tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Turno: </span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'> ".$turno."</div></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Email:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$email."</div></td></tr>
     <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Extensi&oacute;n:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$extension."</div></td></tr>
        <tr><td colspan='2'>&nbsp;</td></tr>
   <tr>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px;'>Solicitud:</span></td>
   <td  style='border-right-width: 1px; border-left-width: 1px; border-right-style: solid; border-left-style: solid; border-right-color: #CCCCCC;border-left-color: #CCCCCC; border-bottom-width:1px; border-bottom-color:#CCCCCC;border-bottom-style:solid;border-top-color:#CCCCCC;border-top-style:solid;border-top-width:1px;'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px; margin-left:10px; margin-right:10px;'>".$solicitud."</div></td></tr>
 </table>
 </td></tr>
 <tr><td colspan='2'>&nbsp;</td></tr>
<tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>
</table> </body>
</html>";
//FIN



//CORREO PAL USUARIO 

$html_usu="<!DOCTYPE html_usuario PUBLIC '-//W3C//DTD Xhtml_usuario 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml_usuario1/DTD/xhtml_usuario1-transitional.dtd'>
<html_usuario xmlns='http://www.w3.org/1999/xhtml_usuario'>
<head>
<meta http-equiv='Content-Type' content='text/html_usuario; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'>Confirmación de Solicitud de Asistencia Jurídica</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr><td><span style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Usted ha realizado una petici&oacute;n al departamento de Consultor&iacute;a Jur&iacute;dica, la misma ha sido recibida satisfactoriamente y le informamos que su caso ser&aacute; revisado a la brevedad posible y le haremos llegar la fecha y confirmaci&oacute;n de su cita por esta misma via. </span></td></tr>
 

<tr>
  <td colspan='3'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px;'>Consultor&iacute;a Jur&iacute;dica</div >
    <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px; margin-bottom:15px;'>TeleSUR</div></td>
</tr><tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>
</table> 
</body>
</html>";
//

//AHORA ENVIAMOS LA SHIT
require_once('htmlMimeMail5/htmlMimeMail5.php');
    
    $mail = new htmlMimeMail5();

     //Establecemos el remitente
    
    $mail->setFrom('Consultoria Juridica <consultoriajuridica@telesurtv.net>');
    
    
   //Establecemos el asunto
   
	
    $mail->setSubject('Solicitud de Asistencia Jerídica'); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail->setHtml($html);
    
   
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
	 
    
    // Enviamos el mensaje de correo usando el modo SMTP
	 // para poder hacer smtp autenticado
    //$correo=$email.', jalfonzo@telesurtv.net';
   // $mail->send(array($email), 'smtp');
	
//PARA EL USU

$mail2 = new htmlMimeMail5();

     //Establecemos el remitente
    
    $mail2->setFrom('Consultoria Juridica <consultoriajuridica@telesurtv.net>');
    
    
   //Establecemos el asunto
   
	
    $mail2->setSubject('Solicitud de Asistencia Jurídica'); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail2->setHtml($html_usu);
    
   
    $mail2->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
	 
    
    // Enviamos el mensaje de correo usando el modo SMTP
	 // para poder hacer smtp autenticado
    //$correo=$email.', jalfonzo@telesurtv.net';
    $mail2->send(array($email), 'smtp');

echo"<script type='text/javascript'>document.location.href='listado.php';</script>";

?>
