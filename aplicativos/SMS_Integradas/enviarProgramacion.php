<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include('logeo.php');
	include('coneccion.php');
	$link=Conectarse();
	$ubicacion="canal";
	$ruta="../../";
	$fechacompleta=date('Y-m-d H:i:s');
	$datex=date('Y-m-d', time());
	$dir_ip = $_SERVER['REMOTE_ADDR'];
	$titulo=$_POST["titulo"];
	$mensajes=$_POST["mensajes"];
	
	
	
	$archivo1 = $_FILES["archivo1"]['name'];
	$fileSize = $_FILES["archivo1"]["size"];
	$fileType = $_FILES["archivo1"]["type"];
	$NombreArchivo = limpiarCadena($_FILES["archivo1"]["name"]);
	
	
	$archivo2 = $_FILES["archivo2"]['name'];
	$fileSize2 = $_FILES["archivo2"]["size"];
	$fileType2 = $_FILES["archivo2"]["type"];
	$NombreArchivo2 = limpiarCadena($_FILES["archivo2"]["name"]);
	
	
	
	
	$extarchivo1 = extension($fileType);
	$extarchivo2 = extension($fileType2);
	
	
	
	if ($archivo1!=""){
		$carpeta = 'distribucion_IMG/';
		$numerito=rand(0, 100) .$extarchivo1;
		$nombre_new = $fileTemp.'_'.$numerito;
		$nombre_temporal = 'temporal.jpg';
		
		if (move_uploaded_file($_FILES['archivo1']['tmp_name'],$carpeta.$nombre_temporal)){
		//echo "ARCHIVO 1 SIIIII";
		}
		else {
		//echo "ARCHIVO 1 NOooooo";
		}
		
		rename($carpeta.$nombre_temporal, $carpeta.$NombreArchivo); 
		chmod($carpeta.$NombreArchivo, 0644);
	}
	

//SUBIR ARCHIVO 2
	if ($archivo2!=""){
		$carpeta = 'distribucion_IMG/';
		$numerito=rand(0, 100) .$extarchivo2;
		$nombre_new = $fileTemp.'_'.$numerito;
		$nombre_temporal = 'temporalxx.jpg';
		
		if (move_uploaded_file($_FILES['archivo2']['tmp_name'],$carpeta.$nombre_temporal)){
		//echo "ARCHIVO 2 SIIIII";
		}
		else {
		//echo "ARCHIVO 2 NOooooo";
		}
		
		rename($carpeta.$nombre_temporal, $carpeta.$NombreArchivo2); 
		chmod($carpeta.$NombreArchivo2, 0644);
	}
	



	
	 $archivo1 = getcwd ().'/distribucion_IMG/'.$NombreArchivo;
	 $archivo2 = getcwd ().'/distribucion_IMG/'.$NombreArchivo2;
	
	
	  $SQLbitacora="INSERT INTO m_bitacora_distribucion (m_bitacora_distribucion_fecha ,m_bitacora_distribucion_titulo, m_bitacora_distribucion_mensaje, m_bitacora_distribucion_archivo1, m_bitacora_distribucion_archivo2 ,m_bitacora_distribucion_usu , m_bitacora_distribucion_loginusu, m_bitacora_distribucion_ip)VALUES ('$fechacompleta', '$titulo','$mensajes', '$NombreArchivo', '$NombreArchivo2', '$idiuauariointegrado', '$logini', '$dir_ip')";
	
	$query=mysql_query($SQLbitacora, $link);	

	$htmlenviar = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
			<html xmlns='http://www.w3.org/1999/xhtml'>
			<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title>$titulo</title>
			</head>			
			<body>
			<p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000'>$mensajes</p>
			</body>
			</html>
			";

//PARE EL CORREO QUE VA A IMOLKO
	require_once('htmlMimeMail5/htmlMimeMail5.php');
	$mailnew = new htmlMimeMail5();
    $mailnew->setFrom('Distribucion teleSUR <contactenos@telesurtv.net>'); 
	 $mailnew->setHeader("Reply-To", "distribucion@telesurtv.net");   
    $mailnew->setSubject("telesurwebimk:*t3l3SURcl4v32013/.* ".$titulo);    
    $mailnew->setHtml($htmlenviar);    
	$mailnew->addAttachment(new FileAttachment($archivo1));
	$mailnew->addAttachment(new FileAttachment($archivo2));
    $mailnew->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
    $mailnew->send(array('email-10025@z4.imolko.com, jalfonzo@telesurtv.net'), 'smtp');
	//LISTA DE DISTRIBUCION ----- $mailnew->send(array('email-10585@z4.imolko.com, jalfonzo@telesurtv.net'), 'smtp');
	
	//$mailnew->send(array('jalfonzo@telesurtv.net'), 'smtp');
	if ($mailnew){
		echo "<script language='JavaScript'>alert('La programación ha sido enviada satisfactoriamente');</script>";
	}else{
		echo "<script language='JavaScript'>alert('ERROR AL ENVIAR');</script>";
	}
	
	
/*	//$para = 'serviciosweb@telesurtv.net, dlopez@telesurtv.net, hmalave@telesurtv.net, pmantilla@telesurtv.net, yramirez@telesurtv.net';	
	$para = 'jesushalfonzo@gmail.com';	
	$mail2 = new htmlMimeMail5();
    $mail2->setFrom('Servicios Web <serviciosweb@telesurtv.net>');
    $mail2->setSubject($titulo); 
    $mail2->setHTML($htmlenviar);
    $mail2->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
    $mail2->send(array($para), 'smtp');
	*/
	
	echo "<script language='JavaScript'>document.location.href='index2.php';</script>";

function extension($fileType){

 $ext ="";
                if($fileType== "image/jpeg")
                    $ext =".jpg";
                else if($fileType== "image/gif")
                    $ext =".gif";
                else if($fileType== "image/png")
                    $ext =".png";
					else if($fileType== "image/png")
                    $ext =".png";
						 else if($fileType== "application/vnd.ms-excel")
		$ext =".xls";
					return $ext;
}


function limpiarCadena($titulo){
			$titulo=utf8_encode($titulo);
         $titulo_link = str_replace('ô', "o", $titulo);
		 $titulo_link = str_replace('õ', "o", $titulo_link);
		 $titulo_link = str_replace('ç', "c", $titulo_link);
		 
	     $titulo_link = str_replace('à', "a", $titulo_link);
	     $titulo_link = str_replace('è', "e", $titulo_link);
		 $titulo_link = str_replace('ì', "i", $titulo_link);
		 $titulo_link = str_replace('ò', "o", $titulo_link);
		 $titulo_link = str_replace('ù', "u", $titulo_link);		 
	     $titulo_link = str_replace('û', "u", $titulo_link);		 
		 $titulo_link = str_replace('ã', "a", $titulo_link);
		 
		 $titulo_link = str_replace('&aacute;', "a", $titulo_link);
	     $titulo_link = str_replace('&eacute;', "e", $titulo_link);
		 $titulo_link = str_replace('&iacute;', "i", $titulo_link);
		 $titulo_link = str_replace('&oacute;', "o", $titulo_link);
		 $titulo_link = str_replace('&uacute;', "u", $titulo_link);		 
		 
         $titulo_link=str_replace("°", "&ordm;", $titulo_link);
         $titulo_link = str_replace("á", "a", $titulo_link);
	     $titulo_link = str_replace("é", "e", $titulo_link); 
	     $titulo_link = str_replace("í", "i", $titulo_link);
	     $titulo_link = str_replace("ó", "o", $titulo_link);
	     $titulo_link = str_replace("ú", "u", $titulo_link);
		 $titulo_link = str_replace("Á", "A", $titulo_link);
	     $titulo_link = str_replace("É", "E", $titulo_link); 
	     $titulo_link = str_replace("Í", "I", $titulo_link);
	     $titulo_link = str_replace("Ó", "O", $titulo_link);
	     $titulo_link = str_replace("Ú", "U", $titulo_link);
         $titulo_link = str_replace("ñ", "n", $titulo_link);
		 $titulo_link = str_replace("Ñ", "n", $titulo_link);		 
		 $titulo_link = str_replace("ü", "u", $titulo_link);
		 $titulo_link = str_replace("Ü", "U", $titulo_link);
		 $titulo_link = str_replace("¨", "_", $titulo_link);		 
		 $titulo_link = str_replace("¿", "_", $titulo_link);		 
		 $titulo_link = str_replace("¡", "_", $titulo_link);
		 $titulo_link = str_replace("º", "_", $titulo_link);
		 $titulo_link = str_replace("ª", "_", $titulo_link);		 
		 $titulo_link = str_replace(" ", "_", $titulo_link);
		 $titulo_link = str_replace("ó", "_", $titulo_link); 
		 $titulo_link = str_replace("Ø", "_", $titulo_link);		 
		 $titulo_link = str_replace('“', '_', $titulo_link);
		 $titulo_link = str_replace('”', '_', $titulo_link);
		 $titulo_link = str_replace("‘’", '_', $titulo_link);
		 $titulo_link = str_replace("’’", '_', $titulo_link);
		 $titulo_link = str_replace("´", "_", $titulo_link);
		 

return $titulo_link;
}

?>