<? 
include ('../../../../extras/connect.php');
$linky=Conectarse();
$titulo_encuesta=$_POST["titulo_enc"];
$id_encuesta=$_POST["id_encuesta"];
$actualizar=mysql_query("UPDATE m_tuzona SET m_tuzona_titulo='$titulo_encuesta' WHERE m_tuzona_id='$id_encuesta'", $linky);



//PRIMERO SUBO LA IMAGEN Y LUEGO PROSIGO CON LAS OPCIONES

$imagen = $HTTP_POST_FILES['imagen']['name'];

if ($imagen!='')
{
$carpeta = '../../../../../imagenes/zona/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ZonaEDT'.$id_pregunta.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_tuzona set  m_tuzona_imagen='$nombre_new' where m_tuzona_id='$id_encuesta'"; 
$resultado=mysql_query($actualizar,$linky); 
}

//FIN


$k=1;
$SQL_arreglo="select r_tuzona_opciones_id from r_tuzona_opciones where r_tuzona_opciones_idzona='$id_encuesta' order by r_tuzona_opciones_id ASC";
$query_arreglo=mysql_query($SQL_arreglo, $linky);
while ($arreglo=mysql_fetch_array($query_arreglo)){
$id=$arreglo["r_tuzona_opciones_id"];


$opcion_texto=$_POST["opcion".$k];
$SQLopciones = "UPDATE  r_tuzona_opciones SET r_tuzona_opciones_opcion='$opcion_texto' WHERE r_tuzona_opciones_id='$id'";
$QUERY_opciones = mysql_query($SQLopciones, $linky);
$k++;;

}
if ($actualizar)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   
  }
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>