<?php 
include('../../../extras/coneccion.php');
$link=Conectarse();
$idpeticion=$_POST["idpeticion"];
$fechacompleta=date('Y-m-d H:i:s');
$correo=$_POST["correo"];
$nombre_completo=$_POST["nombre_completo"];
  $k=1;
         if (isset ($_FILES["archivos"])) {
         //de se asi, para procesar los archivos subidos al servidor solo debemos recorrerlo
         //obtenemos la cantidad de elementos que tiene el arreglo archivos
         $tot = count($_FILES["archivos"]["name"]);
		 
		
         //este for recorre el arreglo
         for ($i = 0; $i < $tot; $i++){
         //con el indice $i, poemos obtener la propiedad que desemos de cada archivo
		$titulo= $_POST["titulos"][$i];
			
 
$extension = strrchr($_FILES['archivos']['name'][$i],'.');

$nombre_original = $_FILES["archivos"]["name"][$i];
if($nombre_original!=''){
$carpeta = '../archivos/';
$numerito=rand(0, 1115).$extension;
$nombre_new = 'Archivo_CJ_'.$idpeticion.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($HTTP_POST_FILES['archivos']['tmp_name'][$i],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="INSERT INTO t_documentos_juridicos VALUES(Null, '$idpeticion', '$titulo', '$nombre_new', '$fechacompleta', '1', '')";
$resultado=mysql_query($actualizar,$link); 

$k++;
			          
            }
      }  }


if($tot>1){
$letra="s";
$pl="los";
}
else{
$letra="";
$pl="el";
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
    <td colspan='7'><div align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF;'> Asesor&iacute;a Jurídica</div></td>
  </tr>
<tr><td colspan='3'>&nbsp;</td></tr>
 <tr>
   <td><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; margin-left:5px;'>Sr(a). ".$nombre_completo.", el Departamento de Consultoría Jurídica le informa que se le ha enviado un total de ".$tot." archivo".$letra.", para ver dicho".$letra." documento".$letra." acceda a la aplicaci&oacute;n y revise su solicitud, descargue ".$pl." archivo".$letra.", y una vez lleno".$letra." envielo".$letra." a trav&eacute;s de la misma, en lo opci&oacute;n &quot;enviar archivos&quot;. </div></td>
 </tr>
 

<tr>
  <td colspan='3'><div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px;'>Consultor&iacute;a Jur&iacute;dica</div >
    <div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin-left:5px; margin-top:15px; margin-bottom:15px;'>TeleSUR</div>
	<div style='font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:5px; margin-top:15px; margin-bottom:15px;'><i>De tener algún problema, responda este correo </i></div>
	
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
    $subjectvar="Asesoría  Jurídica - Tienes un archivo";
	//$subjectvar=htmlentities($texto,ENT_QUOTES,"UTF-8");
	
	
    $mail->setSubject($subjectvar); 
   
    
     //Establecemos el texto del mensaje de correo
    
    $mail->setHtml($Html_correo);
    
   
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true,'jalfonzo@telesurtv.net', '*webjesus*');

 $mail->send(array($correo), 'smtp');

echo "<script language='JavaScript'>parent.location.href='peticiones.php';</script>";





?>
