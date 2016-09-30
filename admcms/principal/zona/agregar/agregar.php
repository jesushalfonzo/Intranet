<?php
$titulo=$_POST["titulo"]; 
include ('../../../extras/connect.php');
$linky=Conectarse();
$fechacompleta=date('Y-m-d H:i:s');

//Insertamos la nueva encuesta
$sql = "INSERT INTO m_tuzona VALUES (Null, '$titulo', '$fechacompleta', '')";
$sql_query = mysql_query($sql, $linky);
$id_pregunta = mysql_insert_id();

//PRIMERO SUBO LA IMAGEN Y LUEGO PROSIGO CON LAS OPCIONES

$imagen = $HTTP_POST_FILES['imagen']['name'];

if ($imagen!='')
{
$carpeta = '../../../../imagenes/zona/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ZONA'.$id_pregunta.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_tuzona set  m_tuzona_imagen='$nombre_new' where m_tuzona_id='$id_pregunta'"; 
$resultado=mysql_query($actualizar,$linky); 
}

//FIN
// RECOGEMOS LOS DATOS DE LAS OPCIONES Y GUARDAMOS EN LA TABLA DE SHIT

$opcion_num=$_POST["opcion_num"];
$k=1;
while ($k <= $opcion_num){
$opcion_texto=$_POST["opcion".$k];
$SQLopciones = "INSERT INTO r_tuzona_opciones VALUES(Null, '$id_pregunta', '$opcion_texto', '0')";
$QUERY_opciones = mysql_query($SQLopciones, $linky);
$k=$k+1;
}


if ($sql_query)
  {  
  echo "<script language='JavaScript'>alert('Su encuesta fue agregada satisfactoriamente');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Encuesta NO Agregada');</script>";   }
  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 ?>
