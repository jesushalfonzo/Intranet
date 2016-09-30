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
if ($extension==pdf){
 $tipodb="p";
  }
 if(($extension==doc)  or ($extension=='odt'))  {
 $tipodb="d";
  }
 if (($extension==xls) or ($extension=='ods')) {
 $tipodb="x";
  }
 if ($extension==zip) {
 $tipodb="z";
   }
   
if ($nombre_original_doc<>"") 
{
$carpeta = '../../../../../documentos/';
$numerito=rand(0, 1115).'.'.$extension;
$nombre_new = 'DOCEDT'.$id_doc.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $archivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $archivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);

$actualizar="update documento set   fichero='$nombre_new', marca='$tipodb' where  id='$id_doc'"; 
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";



?>


