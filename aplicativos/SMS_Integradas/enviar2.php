<?php
	include('logeo.php');
	include('coneccion.php');
	$link=Conectarse();
	$ubicacion="canal";
	$ruta="../../";
	$fechacompleta=date('Y-m-d H:i:s');
	$dir_ip = $_SERVER['REMOTE_ADDR'];
	$titulo=$_POST["titulo"];
	$fileSize = $_FILES["archivo"]["size"];
	$fileType = $_FILES["archivo"]["type"];
	$fileTemp = $_FILES["archivo"]["tmp_name"];
	$nombre_archivo = guardarArchivo($fileTemp, $fileType, $fileSize);
	$archivo = getcwd ().'/programacion_images/'.$nombre_archivo;
	$SQLbitacora="INSERT INTO m_bitacora_programacion (`m_bitacora_programacion_fecha` ,`m_bitacora_programacion_titulo`,`m_bitacora_programacion_archivo` ,`m_bitacora_programacion_usu` ,`m_bitacora_programacion_ip`)VALUES ( '$fechacompleta', '$titulo', '$archivo', '$idiuauariointegrado', '$dir_ip');";
	
	$query=mysql_query($SQLbitacora, $link);	
	$url_archivo= 'http://intranet.telesurtv.net/aplicativos/SMS_Integradas/programacion_images/'.$nombre_archivo;

	$htmlenviar = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
			<html xmlns='http://www.w3.org/1999/xhtml'>
			<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title>$titulo</title>
			</head>			
			<body>
			<img src = '$url_archivo' alt='$titulo'/>
			</body>
			</html>
			";

//PARE EL CORREO QUE VA A IMOLKO
	require_once('htmlMimeMail5/htmlMimeMail5.php');
	$mailnew = new htmlMimeMail5();
    $mailnew->setFrom('Contactenos TeleSUR <contactenos@telesurtv.net>');    
    $mailnew->setSubject("telesurwebimk:*t3l3SURcl4v3* ".$titulo);    
    $mailnew->setHtml($htmlenviar);    
    $mailnew->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
    $mailnew->send(array('email-10025@z4.imolko.com'), 'smtp');
	if ($mailnew){
		echo "<script language='JavaScript'>alert('La programación ha sido enviada satisfactoriamente');</script>";
	}else{
		echo "<script language='JavaScript'>alert('ERROR AL ENVIAR');</script>";
	}
	
	
	//$para = 'serviciosweb@telesurtv.net, dlopez@telesurtv.net, hmalave@telesurtv.net, pmantilla@telesurtv.net, yramirez@telesurtv.net';	
	$para = 'dlopez@telesurtv.net, ernest.barroso@gmail.com';	
	$mail2 = new htmlMimeMail5();
    $mail2->setFrom('Servicios Web <serviciosweb@telesurtv.net>');
    $mail2->setSubject($titulo); 
    $mail2->setHTML($htmlenviar);
    $mail2->setSMTPParams('correo.telesurtv.net', 25, null, true,'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
    $mail2->send(array($para), 'smtp');
	
	
	echo "<script language='JavaScript'>document.location.href='index2.php';</script>";

    function guardarArchivo($fileTemp, $fileType, $fileSize){
        if ((($fileType == "image/jpeg")
            || ($fileType == "image/gif")
            || ($fileType == "image/png"))
            && ($fileSize < 2000000)){
            
            if ($_FILES["file"]["error"] > 0){
                return 0;
            }else{   
                $ext ="";
                if($fileType== "image/jpeg")
                    $ext =".jpg";
                else if($fileType== "image/gif")
                    $ext =".gif";
                else if($fileType== "image/png")
                    $ext =".png";
                
				$fecha = new DateTime('now');
				$result = $fecha->format('Y-m-d-H-i-s');
                $nombre = md5(time())."-".$result.$ext;
				$ruta = getcwd ().'/programacion_images/';
				$archivo = $ruta.$nombre;
                if(move_uploaded_file($fileTemp, $archivo)){
                    return $nombre;
                }else{
                    return false;
                }                
            }
        }else{
            return false;
        }
    }