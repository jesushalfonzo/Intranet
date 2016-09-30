<? 
include ('../../../extras/connect.php');
$linky=Conectarse();
$fechacompleta=date('Y-m-d H:i:s');
$titulo=$_POST["titulo"];
$SQL="INSERT INTO m_trivia VALUES(Null, '$titulo', '$fechacompleta', 'NO', '', '')";
$query=mysql_query($SQL, $linky);
$last = mysql_insert_id();
if($query){
 echo "<script language='JavaScript'>alert('La trivia ha sido agregada correctamente, Por favor cargue sus preguntas');</script>";
}
else{
echo "<script language='JavaScript'>alert('Error cargando los datos');</script>";

 exit();
}


$imagen = $_FILES['imagen']['name'];

if ($imagen!='')
{
$carpeta = '../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'TRIVIA'.$last.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_trivia set  m_trivia_imagen='$nombre_new' where m_trivia_id ='$last'"; 
$resultado=mysql_query($actualizar,$linky); 

}


//PAL HOME

$imagen_home = $_FILES['imagen_home']['name'];

if ($imagen_home!='')
{
$carpeta = '../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'TRIVIA-HOME'.$last.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['imagen_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen_home ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen_home No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_trivia set  m_trivia_home='$nombre_new' where m_trivia_id ='$last'"; 
$resultado=mysql_query($actualizar,$linky); 

}


//FIN
 echo "<script language='JavaScript'>document.location.href='index_pregunta.php?clx=$last';</script>";
?>