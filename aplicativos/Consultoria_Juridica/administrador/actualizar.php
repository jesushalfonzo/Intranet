<?php 
include('logeo.php');
include('../../../extras/coneccion.php');
$link=Conectarse();
$clasificacion=$_POST["clasificacion"];
$fechaasignada=$_POST["fechaasignada"];
$explotar=explode('/', $fechaasignada);
$dia=$explotar[0];
$mes=$explotar[1];
$year=$explotar[2];


$nuevascitas=$_POST["nuevascitas"];
$fanalizar=$_POST["fanalizar"];
$editacitavieja=$_POST["editacitavieja"];


$diaatencionL=dia_semana($dia, $mes, $year);
$fechaformat=$year."-".$mes."-".$dia; 
$fechaasignada=$dia."-".$mes."-".$year;
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$nombre_completo=$nombre." ".$apellido;
$horaasignada=$_POST["horaasignada"];
$comentarios=$_POST["comentarios"];
$idrequerimiento=$_POST["idrequerimiento"];
$fechaneva=$fechaformat." ".$horaasignada;
$horaLetras=date('h:i A', strtotime($fechaneva));
$emaileviar=$_POST["email"];
$fecha_solicitud=$_POST["fecha_solicitud"];
$separator=explode(' ', $fecha_solicitud);
$solicitud=$_POST["solicitud"];
$fechapedida=$separator[0];
$consultorasignado=$_POST["consultorasignado"];


if($comentarios!=''){
$comentando="<br /><br />Los comentarios referente a su petición son los siguientes: <br /><br /><strong><i>".$comentarios."</strong></i>";

}

else{
$comentando="";
}


if($nuevascitas=='ONN'){
$Sqlcitax="INSERT INTO m_citas_juridicas VALUES(Null, '$idrequerimiento', '$fechaneva', '$comentarios', 'N')";
$querycita=mysql_query($Sqlcitax, $link);

$sql2="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_fechaasignada='$fechaneva' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";
$otroquery=mysql_query($sql2, $link);
}


if($nuevascitas=='ONN'){
$Sqlcitax2="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_estatus='B' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";
$querycita2=mysql_query($Sqlcitax2, $link);
}


if($fanalizar=='ONN'){
$Sqlcitax2="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_estatus='A' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";
$querycita2=mysql_query($Sqlcitax2, $link);
}





//$SQL="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_clasificacion='$clasificacion', m_aplicativo_cjuridica_comentarios='$comentarios', m_aplicativo_cjuridica_fechaasignada='$fechaneva' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";

$SQL="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_clasificacion='$clasificacion' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";
$queryx=mysql_query($SQL, $link);

$SQL2="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_consultor='$consultorasignado' WHERE m_aplicativo_cjuridica_id='$idrequerimiento'";
$queryx2=mysql_query($SQL2, $link);




$noSQL="SELECT * FROM m_consultoria_consultores WHERE m_consultoria_consultores_id='$consultorasignado'";
$queryno=mysql_query($noSQL, $link);
$rowno=mysql_fetch_array($queryno);
$nombreconsultor=$rowno["m_consultoria_consultores_nombre"];
$m_consultoria_consultores_correo=$rowAsignado["m_consultoria_consultores_correo"];



if($queryx){
echo"<script type='text/javascript'>alert('Datos guardados correctamente');</script>";
}
else{
echo"<script type='text/javascript'>alert('Datos NO guardados --- ERROR');</script>";
}


$Html_correo="<!DOCTYPE html_usuario PUBLIC '-//W3C//DTD Xhtml_usuario 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml_usuario1/DTD/xhtml_usuario1-transitional.dtd'>
<html_usuario xmlns='http://www.w3.org/1999/xhtml_usuario'>
<head>
<meta http-equiv='Content-Type' content='text/html_usuario; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'> Asistencia Jurídica</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr>
   <td><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Sr(a). ".$nombre_completo.", el Departamento de Consultoría Jurídica le informa que la petición hecha por Ud. el d&iacute;a ".$fechapedida." será atendida el día ".$diaatencionL.", ".$fechaasignada." a las ".$horaLetras." por nuestro asesor(a): ".$nombreconsultor.".".$comentando." </div></td>
 </tr>
 

<tr>
  <td colspan='3'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px;'>Consultor&iacute;a Jur&iacute;dica</div >
    <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px; margin-bottom:15px;'>TeleSUR</div>
	<div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:5px; margin-top:15px; margin-bottom:15px;'><i>No responder este correo, de tener algún problema, llamar a Consultoría Jurídica para agendar de nuevo la cita.</i></div>
	
	</td>
</tr><tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>
</table> 
</body>
</html>";

$htmlConsultor="<!DOCTYPE html_usuario PUBLIC '-//W3C//DTD Xhtml_usuario 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml_usuario1/DTD/xhtml_usuario1-transitional.dtd'>
<html_usuario xmlns='http://www.w3.org/1999/xhtml_usuario'>
<head>
<meta http-equiv='Content-Type' content='text/html_usuario; charset=iso-8859-1' />
<title>Untitled Document</title>
</head>
<body>
<table width='700' border='0' cellpadding='0' cellspacing='0' align='center'>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr bgcolor='#000000'>
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'> Asistencia Jurídica</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr>
   <td><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Sr(a). ".$nombreconsultor.", el Departamento de Consultoría Jurídica le ha asignado  el siguiente caso: </div>
   <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:5px; margin-top:15px; margin-bottom:15px;'><strong>Nombre</strong>: ".$nombre_completo."</div>
   <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:5px; margin-top:15px; margin-bottom:15px;'><strong>Caso:</strong> ".$solicitud."</div>
   <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:5px; margin-top:15px; margin-bottom:15px;'><strong>Fecha de atención:</strong> ".$diaatencionL.", ".$fechaasignada." a las ".$horaLetras."</div>
   </td>
 </tr>
 

<tr>
  <td colspan='3'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px;'>Consultor&iacute;a Jur&iacute;dica</div >
    <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px; margin-bottom:15px;'>TeleSUR</div>
	
	
	</td>
</tr><tr>
  <td height='15' align='center' bgcolor='#000000' colspan='3'>&nbsp;</td>
</tr>
 <td height='22' align='center' bgcolor='#FFFFFF' colspan='3'>&nbsp;</td>
</tr>
</table> 
</body>
</html>";

require_once('../htmlMimeMail5/htmlMimeMail5.php');
    
    $mail = new htmlMimeMail5();

     //Establecemos el remitente
    
    $mail->setFrom('Consultoria Juridica <consultoriajuridica@telesurtv.net>');
    
    
   //Establecemos el asunto
    $subjectvar="Fecha de atención de su solicitud de Asistencia Jurídica";
	//$subjectvar=htmlentities($texto,ENT_QUOTES,"UTF-8");
	
	
    $mail->setSubject($subjectvar); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail->setHtml($Html_correo);
    
   
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true,'jalfonzo@telesurtv.net', '*webjesus*');
	
	//PARA EL CONSULTOR
	
	 $mail2 = new htmlMimeMail5();

     //Establecemos el remitente
    
    $mail2->setFrom('Consultoria Juridica <consultoriajuridica@telesurtv.net>');
    
    
   //Establecemos el asunto
    $subjectvar2="Asignació de solicitud de Asistencia Jurídica";
	//$subjectvar=htmlentities($texto,ENT_QUOTES,"UTF-8");
	
	
    $mail2->setSubject($subjectvar2); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail2->setHtml($htmlConsultor);
    
   
    $mail2->setSMTPParams('correo.telesurtv.net', 25, null, true,'jalfonzo@telesurtv.net', '*webjesus*');
	
	
	//FIN CONSULTOR
	 
if(($fanalizar!="ONN") and ($nuevascitas=="ONN")){
    $mail->send(array($emaileviar), 'smtp');
//CORREO PAL CONSULTOR
   $mail2->send(array($m_consultoria_consultores_correo), 'smtp');

}

if($editacitavieja!=""){
$mail->send(array($emaileviar), 'smtp');
$mail2->send(array($m_consultoria_consultores_correo), 'smtp');
$sup="UPDATE m_citas_juridicas SET m_citas_juridicas_update='N' WHERE m_citas_juridicas_id='$editacitavieja'";
$q=mysql_query($sup, $link);
}

echo"<script type='text/javascript'>parent.location.href='peticiones.php';</script>";




function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}

?>