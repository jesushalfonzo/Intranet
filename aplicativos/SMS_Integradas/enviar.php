<?php

    include('logeo.php');
    include('coneccion.php');
    $link = Conectarse();
    //Tematica ServiciosW-SMS
    //$email = "sms-10155@z4.imolko.com";
   //Tematica Comunicaciones Integradas-SMS
    $email = "sms-13163@z4.imolko.com";
    $ubicacion = "canal";
    $ruta = "../../";
    $fechacompleta = date('Y-m-d H:i:s');
    $dir_ip = $_SERVER['REMOTE_ADDR'];
    $mensaje = $_POST["mensaje"];


    $SQLbitacora = "INSERT INTO m_bitacora_sms (`m_bitacora_sms_id` ,`m_bitacora_sms_fecha` ,`m_bitacora_sms_texto` ,`m_bitacora_sms_usu` ,`m_bitacora_sms_ip`) 
			  VALUES (NULL , '$fechacompleta', '$mensaje', '$idiuauariointegrado', '$dir_ip');";

    //PARE EL CORREO QUE VA A IMOLKO Y ENVIA LOS MENSAJES DE TEXTO
    require_once('htmlMimeMail5/htmlMimeMail5.php');
    $limite = 135;
    //$cadena=texto_limpio($mensaje);
    $cadena = $mensaje;
    $limit_string = substr($cadena, 0, $limite);
    $limit_string = texto_limpio($limit_string);
    $variable_contenido = $limit_string;
    //echo"$variable_contenido";
    $mail = new htmlMimeMail5();    //Establecemos el remitente
    $mail->setFrom('Contactenos teleSUR <contactenos@telesurtv.net>');
    //Establecemos el asunto que en este caso ser� lo que se enviara por mensaje de texto
    $mail->setSubject("telesurwebimk:*t3l3SURcl4v32013/.* @" . $variable_contenido);
    //Establecemos el texto del mensaje de correo, para los mensajes de texto IMOLKO toma el asunto del mensaje, no el contenido!!!
    $mail->setText('');
    $mail->setSMTPParams('correo.telesurtv.net', 25, null, true, 'webtelesur@telesurtv.net', '/W3b-Tele$ur..');
    //$mail->setSMTPParams('mail.gmail.com ', 587, null, true, 'servicioswebtelesur@gmail.com', '*s0l0w3b*');

    // Enviamos el mensaje de correo usando el modo SMTP
    // para poder hacer smtp autenticado
    //$mail->send(array('z.telesurweb-sms-comuintegradas@zenkiu.com.ve'), 'smtp');
    //$mail->send(array('sms-3235@z4.imolko.com'), 'smtp');//Lista de SMS
    $result = "";
    try {	
    	$result = $mail->send(array($email), "smtp") or die(); //LISTA DE SERVICIOS WEB    
        $query = mysql_query($SQLbitacora, $link);        
        if($query){
            echo "<script language='JavaScript'>alert('SMS enviado correctamente!!!');</script>";
        }else{
            echo "<script language='JavaScript'>alert('SMS enviado, pero ocurrio un error al crear la bitacora!');</script>";
        }       
        echo "<script language='JavaScript'>document.location.href='index2.php';</script>";
    } catch (Exception $e) {
        echo "<script language='JavaScript'>alert('No se envio el SMS!!!');</script>";
        echo "Ocurrio una excepcion ".$e->getMessage();
    }

//LIMPIAR LOS ACENTOS PARA EVITAR ERROR (IMOLKO NO LOS ENVIA SI NO ESTAN 100% LIMPIOS)
    function texto_limpio($palabrotas) 
    {     
	$texto_limpio= strtolower($palabrotas);		          
	$texto_limpio= rtrim(ltrim($texto_limpio));
	$texto_limpio = str_replace("á", "a", $texto_limpio);
	$texto_limpio = str_replace("é", "e", $texto_limpio); 
	$texto_limpio = str_replace("í", "i", $texto_limpio);
	$texto_limpio = str_replace("ó", "o", $texto_limpio);
	$texto_limpio = str_replace("ú", "u", $texto_limpio);
	$texto_limpio = str_replace("Á", "a", $texto_limpio);
	$texto_limpio = str_replace("É", "e", $texto_limpio); 
	$texto_limpio = str_replace("Í", "i", $texto_limpio);
	$texto_limpio = str_replace("Ó", "o", $texto_limpio);
	$texto_limpio = str_replace("Ú", "u", $texto_limpio);
	$texto_limpio = str_replace("ñ", "n", $texto_limpio);		 
	$texto_limpio = str_replace("ü", "u", $texto_limpio);
	$texto_limpio = str_replace("'", "", $texto_limpio);		
	$texto_limpio = str_replace('', "", $texto_limpio);
	$texto_limpio = str_replace('', "", $texto_limpio);
	$texto_limpio = str_replace("", "", $texto_limpio);
	$texto_limpio = str_replace("", "", $texto_limpio);
	$texto_limpio = str_replace('°', "", $texto_limpio);
	$texto_limpio = str_replace("Ž", "", $texto_limpio);
	$texto_limpio = str_replace('ô', "o", $texto_limpio);
	$texto_limpio = str_replace('õ', "o", $texto_limpio);
	$texto_limpio = str_replace('ç', "c", $texto_limpio);
	$texto_limpio = str_replace('à', "a", $texto_limpio);
	$texto_limpio = str_replace('è', "e", $texto_limpio);
	$texto_limpio = str_replace('û', "u", $texto_limpio);
	$texto_limpio = str_replace('Ñ', "n", $texto_limpio);
	$texto_limpio = str_replace('ã', "a", $texto_limpio);
	$texto_limpio = str_replace("š", "", $texto_limpio);
	$texto_limpio = str_replace("", "", $texto_limpio);


	$find = array('&', '\r\n', '\n', '+'); 
	$texto_limpio = str_replace ($find, ' ', $texto_limpio);


	$texto_limpio=strip_tags($texto_limpio);
	return $texto_limpio; 
   } 

?>
