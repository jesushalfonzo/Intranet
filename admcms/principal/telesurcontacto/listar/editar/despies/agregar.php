<?
include('../../../../../extras/connect.php');
$linky=Conectarse();
$id_nota=$_POST["id_nota"];
$titulo=$_POST["titulo"];
$guia=$_POST["guia"];
$alineacion=$_POST["alineacion"];
$leyenda=$_POST["leyenda"];
$texto_despies=$_POST["texto_despies"];
$SQL="INSERT INTO m_noticias_despies VALUES(Null, '$id_nota', '$titulo', '$texto_despies', '$guia', '$alineacion', '', '$leyenda')";
$query=mysql_query($SQL, $linky);
$lastshit = mysql_insert_id();
if ($query){  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }


$foto_original= $HTTP_POST_FILES['foto']['name'];

if ($foto_original!='')
{
$carpeta = '../../../../../../imagenes/despies/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'DPI'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_noticias_despies set  m_noticias_despies_foto='$nombre_new' where m_noticias_despies_id='$lastshit'"; 
$resultado=mysql_query($actualizar,$linky); 
echo "<script language='JavaScript'>document.location.href='listar/index.php?ckl=$id_nota';</script>";
}
 mysql_close($linky); 
 ?>