<? include ('../../../extras/connect.php');?>
<? 

$autor_nota=$_POST["autor_nota"];
$fecha_nota=$_POST["fecha_nota"];
$hora_nota=$_POST["hora_nota"];
$tipo_nota=$_POST["tipo_nota"];
$avance=$_POST["avance"];
$antetitulo_nota=$_POST["antetitulo_nota"];
$titulo_nota=addslashes ($_POST["titulo_nota"]);
$sumario_nota=addslashes($_POST["sumario_nota"]);
$autor_nota=$_POST["autor"];
$rte1=addslashes($_POST["rte1"]);
//echo"$rte1";



$foto_0_nota=$_POST["foto_0_nota"];  // ojo aqui va la ruta de la imagen... o al menos el nombre del archivo.... !!!!

$leyenda_0_nota=$_POST["leyenda_0_nota"];



echo $tirasql="INSERT INTO noticia (titulo, contenido , sumario, fecha, leyenda, autor, aprobado) VALUES ('$titulo_nota', '$rte1', '$sumario_nota','$fecha_nota','$leyenda_0_nota','$autor_nota','NO')";

	  $link=Conectarse();   
       $resultado=mysql_query($tirasql,$link); 


  if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }
$lastshit = mysql_insert_id();
      
$nombre_origfoto_0_nota = $_FILES['foto_0_nota']['name'];

if ($nombre_origfoto_0_nota!='')
{
$nombre_original = $_FILES['foto_0_nota']['name'];
$carpeta = '../../../../imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto_0_nota']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update noticia set  imagen='$nombre_new' where id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
}
 mysql_close($link); 

  
?>
