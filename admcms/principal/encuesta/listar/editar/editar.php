
<?php
include ('../../../../extras/connect.php');
$link=Conectarse(); 
$idpregunta=$_POST["idpregunta"];
$titulo_enc=$_POST["titulo_enc"];
$SQL="UPDATE m_concurso_preguntas SET m_concurso_preguntas_pregunta ='$titulo_enc'  WHERE m_concurso_preguntas_id='$idpregunta'";
$query=mysql_query($SQL, $link);


 if (isset ($_FILES["fotoCargada"])) {
         $tot = count($_FILES["fotoCargada"]["name"]);

     if($_FILES["fotoCargada"]["type"][0]=='application/pdf'){
    		$tipo_extension = '.pdf';
    		echo $tipo_extension;

    	}   else{
    		$tipo_extension = '.jpg';
    		echo $tipo_extension;
    	} 

         for ($i = 0; $i < $tot; $i++){
      
			$id=$_POST["idelemento"][$i];
			$nombre= $_POST["nombreCargada"][$i];
			$apellido= $_POST["apellidoCargada"][$i];
			
			$SQLOPT="UPDATE r_opciones_encuestas SET r_opciones_encuestas_nombre='$nombre', r_opciones_encuestas_apellido='$apellido' WHERE r_opciones_encuestas_id='$id'";
			$queryx=mysql_query($SQLOPT, $link);
			
			$nombre_original = $_FILES["fotoCargada"]["name"][$i];
			
			if($nombre_original!=''){
			$carpeta = '../../../../../multimedia/imagenes/encuesta/';
			$numerito=rand(0, 1115) . $tipo_extension;
			$nombre_new = 'ENC_FOTO_EDT_'.$lastshit.'_'.$numerito;
			$nombre_temporal = 'temporal'.$tipo_extension;
			
			if (move_uploaded_file($_FILES['fotoCargada']['tmp_name'][$i],$carpeta.$nombre_temporal))
			{
			echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
			}else{
			echo "<script language='JavaScript'>alert('Ocurri� alg�n error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
			}
			
			rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
			chmod($carpeta.$nombre_new, 0644);
			$actualizar="UPDATE r_opciones_encuestas SET r_opciones_encuestas_foto='$nombre_new' WHERE r_opciones_encuestas_id='$id'";
			$resultado=mysql_query($actualizar,$link); 
			
			}
			
			}
			}
			
			
			
			//GUARDANDO LAS NUEVAS
			if (isset ($_FILES["foto"])) {
         $tot = count($_FILES["foto"]["name"]);
         
         if($_FILES["foto"]["type"][0]=='application/pdf'){
    		$tipo_extension = '.pdf';
    		echo $tipo_extension;

    	}   else{
    		$tipo_extension = '.jpg';
    		echo $tipo_extension;
    	} 

         for ($i = 0; $i < $tot; $i++){
      

			$nombre= $_POST["nombre"][$i];
			$apellido= $_POST["apellido"][$i];
			
			
			
			$nombre_original = $_FILES["foto"]["name"][$i];
			if($nombre_original!=''){
			$carpeta = '../../../../../multimedia/imagenes/encuesta/';
			$numerito=rand(0, 1115) . $tipo_extension;
			$nombre_new = 'ENC_FOTO_'.$idpregunta.'_'.$numerito;
			$nombre_temporal = 'temporal'.$tipo_extension;
			
			if (move_uploaded_file($_FILES['foto']['tmp_name'][$i],$carpeta.$nombre_temporal))
			{
			echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
			}else{
			echo "<script language='JavaScript'>alert('Ocurri� alg�n error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
			}
			
			rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
			chmod($carpeta.$nombre_new, 0644);
			echo $actualizar="INSERT INTO r_opciones_encuestas VALUES (Null, '$idpregunta', '$nombre', '$apellido', '$nombre_new')";
			$resultado=mysql_query($actualizar,$link); 
			
			}
			
			}
			}
			
			
			echo "<script language='JavaScript'>parent.principal.location.href='../index.php';</script>";
 ?>
