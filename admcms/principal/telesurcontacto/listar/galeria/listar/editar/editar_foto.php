<? include ('../../../../../../extras/connect.php');?>
<? 

$id_foto=$_POST["id_foto"];
$titulo_foto=$_POST["titulo_foto"];
$leyenda_foto=$_POST["foto_leyenda"];
$id_nota=$_POST["id_nota"];
									

$actualizar="update m_galeria_nota set m_galeria_foto_titulo='$titulo_foto', m_galeria_foto_leyenda='$leyenda_foto' where m_galeria_id='$id_foto'"; 
 

   $link=Conectarse();   
  $resultado=mysql_query($actualizar,$link);
 if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }


      
$archivo_foto= $_FILES['foto_archivo']['name'];
$separar = explode('.',$archivo_foto);
$archivo=$separar[0];
$extension=$separar[1];
if ($archivo_foto!='')
{
$carpeta = '../../../../../../../imagenes/galerias/';
$numerito=rand(0, 1115) . '.'.$extension;
$nombre_new = 'GALERIA'.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['foto_archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $archivo_foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $archivo_foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_nota set m_galeria_foto_archivo='$nombre_new' where m_galeria_id='$id_foto'"; 
echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}


$archivo_foto2= $_FILES['foto_archivo_grande']['name'];
$separar = explode('.',$archivo_foto2);
$archivo=$separar[0];
$extension=$separar[1];
if ($archivo_foto2!='')
{
$carpeta = '../../../../../../../imagenes/galerias/';
$numerito=rand(0, 1115) . '.'.$extension;
$nombre_new = 'GALERIAGra'.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['foto_archivo_grande']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $archivo_foto2 ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $archivo_foto2 No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_nota set m_galeria_foto_grande='$nombre_new' where m_galeria_id='$id_foto'"; 
echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
 echo "<script language='JavaScript'>document.location.href='../index.php?clx=$id_nota';</script>";
}

 mysql_close($link); 

 echo "<script language='JavaScript'>document.location.href='../index.php?clx=$id_nota';</script>";
 
?>