<? include ('../../../../extras/connect.php');
$linky=Conectarse();
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$leyenda=$_POST["leyenda"];
$id=$_POST["id"];
$boton=$_POST["boton"];

if ($boton=='Actualizar'){
$SQL="UPDATE m_entrevistas SET m_entrevistas_titulo='$titulo', m_entrevistas_sumario='$sumario', m_entrevistas_contenido='$contenido', m_entrevistas_autor='$autor', m_entrevistas_fotoleyenda='$leyenda' WHERE m_entrevistas_id='$id'";

}
else {

$SQL="UPDATE m_entrevistas SET m_entrevistas_titulo='$titulo', m_entrevistas_sumario='$sumario', m_entrevistas_contenido='$contenido', m_entrevistas_autor='$autor', m_entrevistas_fecha_aprobado=NOW(), m_entrevistas_aprobado= 'SI', m_entrevistas_fotoleyenda='$leyenda' WHERE m_entrevistas_id='$id'";

}

$query=mysql_query($SQL, $linky);
 if ($query)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   
  }
//FOTO GRANDE
$foto_grande = $HTTP_POST_FILES['imagen_interno']['name'];

if ($foto_grande!='')
{
$carpeta = '../../../../../imagenes/entrevistas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ENTED'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_interno']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_grande ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_grande No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_entrevistas set  m_entrevistas_fotointerna='$nombre_new' where m_entrevistas_id ='$id'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$linky); 
}
//FOTO HOME

$foto_home = $HTTP_POST_FILES['imagen_home']['name'];

if ($foto_home!='')
{
$carpeta = '../../../../../imagenes/entrevistas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ENTHED'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto_home ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto_home No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_entrevistas set  m_entrevistas_fotohome='$nombre_new' where m_entrevistas_id ='$id'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$linky); 
}

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
 //mysql_close($linky);
?>