<? include ('../../../../../extras/connect.php');
$link=Conectarse();
$id_nota=$_POST["id_nota"];
$titulo_foto=$_POST["titulo_foto"];
$leyenda_foto=$_POST["foto_leyenda"];

$tira_inserta="INSERT INTO m_galeria_nota VALUES (null, '$id_nota', '$titulo_foto', '', '$leyenda_foto', '')";
$query_inserta=mysql_query($tira_inserta, $link);
 if ($query_inserta)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }
$lastshit = mysql_insert_id();
      
	  //AHORA CARGO LA FOTO A ESCALA
	  
$nom_original = $_FILES['foto_archivo']['name'];
$separar = explode('.',$nom_original);
$archivo=$separar[0];
$extension=$separar[1];

if ($nom_original!='')
{
$carpeta = '../../../../../../imagenes/galerias/';
$numerito=rand(0, 1115) . '.'.$extension;
$nombre_new = 'GALERIA'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['foto_archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nom_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nom_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_nota set  m_galeria_foto_archivo='$nombre_new' where m_galeria_id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
}
//AHORA LA FOTO GRANDE PARA DESPLEGAR
	  
$nom_original = $_FILES['foto_archivo_grande']['name'];
$separar = explode('.',$nom_original);
$archivo=$separar[0];
$extension=$separar[1];

if ($nom_original!='')
{
$carpeta = '../../../../../../imagenes/galerias/';
$numerito=rand(0, 1115) . '.'.$extension;
$nombre_new = 'GALERIABIG'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['foto_archivo_grande']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nom_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nom_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_nota set  m_galeria_foto_grande='$nombre_new' where m_galeria_id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
}
echo "<script language='JavaScript'>document.location.href='../../index.php';</script>";

 mysql_close($link); 
 
?>