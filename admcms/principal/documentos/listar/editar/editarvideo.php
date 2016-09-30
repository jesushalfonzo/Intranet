<? include ('../../../../extras/connect.php');?>

<? 

$id_doc=$_POST["id"];
$titulo_doc=addslashes($_POST["titulo"]);
$marca_doc=$_POST["marca"];


$tirasql= "update documento set  nombref='$titulo_doc' where id = $id_doc";
//echo"$tirasql";
	   $link=Conectarse();   
      $resultado=mysql_query($tirasql,$link); 
  if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }

$nombre_original_doc= $_FILES['archivo']['name'];
$separar = explode('.',$nombre_original_doc);
$archivo=$separar[0];
$extension=$separar[1];
if ($extension==Pdf){
 $tipodb="p";
  }
 if($extension==doc) {
 $tipodb="d";
  }
 if ($extension==xls) {
 $tipodb="x";
  }
 if ($extension==zip) {
 $tipodb="z";
   }
   
if ($nombre_original_doc<>"") 
{

$carpeta = '../../../../../documentos/';
//$numerito=rand(0, 1115) . '.$marca_doc';
//$nombre_new = 'MNF'.$id_parrilla.'_'.$numerito;
$nombre_temporal = 'temporal.$marca_extension';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original_doc ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original_doc No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_original_doc); 
chmod($carpeta.$nombre_orig_doc, 0644);
$actualizar="update documento set   fichero='$nombre_original_doc', marca='$tipodb' where  id='$id_doc'"; 
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";



?>


