<? include ('../../../../extras/connect.php');?>

<? 

$id_nota=$_POST["id_nota"];
$autor_nota=$_POST["autor"];
$fecha_nota=$_POST["fecha"];
$titulo_nota=addslashes($_POST["titulo"]);
$sumario_home_nota=$_POST["sumario"];
$rte1=$_POST["rte1"];

$foto_nota=$_POST["foto_nota"];  // ojo aqui va la ruta de la imagen... o al menos el nombre del archivo.... !!!!

$leyenda=$_POST["leyenda"];



$tirasql= "update noticia set autor='$autor_nota',fecha='$fecha_nota',titulo='$titulo_nota',sumario='$sumario_home_nota',contenido='$rte1', leyenda='$leyenda',  autor='$autor_nota' where id = $id_nota";
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




$nombre_origfoto_nota = $HTTP_POST_FILES['foto_nota']['name'];

if ($nombre_origfoto_nota<>"") 
{
$nombre_original = $HTTP_POST_FILES['foto_nota']['name'];
$carpeta = '../../../../../imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'MNF'.$id_nota.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto_nota']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update noticia set  imagen='$nombre_new' where  id='$id_nota'"; 
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>


