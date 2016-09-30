<? include ('../../../extras/connect.php');
$linky=Conectarse();
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$leyenda=$_POST["leyenda"];
$SQL="INSERT INTO m_entrevistas VALUES (Null, '$titulo', '$sumario', '$contenido', '', '$leyenda', '', '$autor', NOW(), 'NO', '')";
//echo"$SQL";
$query=mysql_query($SQL, $linky);

  if ($query)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   
  }
$lastshit = mysql_insert_id();
//FOTO GRANDE
$foto_grande = $HTTP_POST_FILES['imagen_interno']['name'];

if ($foto_grande!='')
{
$carpeta = '../../../../imagenes/entrevistas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ENT'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_interno']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_grande ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_grande No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_entrevistas set  m_entrevistas_fotointerna='$nombre_new' where m_entrevistas_id ='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$linky); 
}
//FOTO HOME

$foto_home = $HTTP_POST_FILES['imagen_home']['name'];

if ($foto_home!='')
{
$carpeta = '../../../../imagenes/entrevistas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ENTH'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_home ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_home No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_entrevistas set  m_entrevistas_fotohome='$nombre_new' where m_entrevistas_id ='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$linky); 
}

echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 //mysql_close($linky);
?>