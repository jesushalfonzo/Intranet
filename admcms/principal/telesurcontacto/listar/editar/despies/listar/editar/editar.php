<?
include('../../../../../../../extras/connect.php');
$linky=Conectarse();
$id_despies=$_POST["id_despies"];
$id_nota=$_POST["id_nota"];
$titulo=$_POST["titulo"];
$guia=$_POST["guia"];
$alineacion=$_POST["alineacion"];
$leyenda=$_POST["leyenda"];
$texto_despies=$_POST["texto_despies"];
$SQL="UPDATE m_noticias_despies SET m_noticias_despies_titulo='$titulo', m_noticias_despies_texto='$texto_despies', m_noticias_despies_guia='$guia', m_noticias_despies_alineacion='$alineacion', m_noticias_despies_fotoleyenda='$leyenda' WHERE m_noticias_despies_id='$id_despies'";
$query=mysql_query($SQL, $linky);
$lastshit = mysql_insert_id();
if ($query){  
  echo "<script language='JavaScript'>alert('Actualización Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Actualización NO Exitosa');</script>";   }

$botoncambiar=$_POST["cambiar"];
$botonquitar=$_POST["quitar"];
if($botonquitar=='ON'){
$quitarsql="UPDATE m_noticias_despies SET m_noticias_despies_foto='' WHERE m_noticias_despies_id='$id_despies'";
$queryquitar=mysql_query($quitarsql, $linky);
if ($queryquitar){  
  echo "<script language='JavaScript'>alert('La foto fue eliminada con exito');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Foto NO eliminada');</script>";   }

}

$foto_original= $HTTP_POST_FILES['foto']['name'];

if (($foto_original!='') and ($botoncambiar=='ON'))
{
$carpeta = '../../../../../../../../imagenes/despies/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'DPIM'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_noticias_despies set  m_noticias_despies_foto='$nombre_new' where m_noticias_despies_id='$id_despies'"; 
$resultado=mysql_query($actualizar,$linky); 

}
 mysql_close($linky); 
 echo "<script language='JavaScript'>document.location.href='../index.php?ckl=$id_nota';</script>";
 ?>