
<?php

include ('../../../extras/connect.php');
$link=Conectarse(); 

$titulo_enc=$_POST["titulo_enc"];
$SQL="INSERT INTO m_concurso_preguntas VALUES (Null, '1', '$titulo_enc')";
$query=mysql_query($SQL, $link);
$lastshit=mysql_insert_id();


 if (isset ($_FILES["foto"])) {
         $tot = count($_FILES["foto"]["name"]);

         print_r($_FILES["foto"]["type"][0]);
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
			
			$SQLOPT="INSERT INTO r_opciones_encuestas (r_opciones_encuestas_id, r_opciones_encuestas_idpregunta, r_opciones_encuestas_nombre,  r_opciones_encuestas_apellido) VALUES (Null, '$lastshit', '$nombre', '$apellido')";
			
			
			$nombre_original = $_FILES["foto"]["name"][$i];
			if($nombre_original!=''){
			$carpeta = '../../../../multimedia/imagenes/encuesta/';
			$numerito=rand(0, 1115) . $tipo_extension;
			$nombre_new = 'ENC_FOTO_'.$lastshit.'_'.$numerito;
			$nombre_temporal = 'temporal'.$tipo_extension;
			
			if (move_uploaded_file($_FILES['foto']['tmp_name'][$i],$carpeta.$nombre_temporal))
			{
			echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
			}else{
			echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
			}
			
			rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
			chmod($carpeta.$nombre_new, 0644);
			 $actualizar="INSERT INTO r_opciones_encuestas VALUES (Null, '$lastshit', '$nombre', '$apellido', '$nombre_new')";
			$resultado=mysql_query($actualizar,$link); 
			
			}
			
			}
			}
 ?>
