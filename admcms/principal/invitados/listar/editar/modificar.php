<? include ('../../../../extras/connect.php');?>

<? 

$id=$_POST["id_busca"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$titulo=addslashes($_POST["titulo"]);
$leyenda_principal=$_POST["leyenda_principal"];
$autor=$_POST["autor"];

$boton=$_POST["boton"];  



if($boton=='Actualizar'){
$tirasql= "update m_invitados_especiales set m_invitados_especiales_titulo='$titulo', m_invitados_especiales_sumario='$sumario', m_invitados_especiales_contenido='$contenido', m_invitados_especiales_fotoleyenda='$leyenda_principal', m_invitados_especiales_autor='$autor' where m_invitados_especiales_id = $id";
}
else{
$tirasql= "update m_invitados_especiales set m_invitados_especiales_titulo='$titulo', m_invitados_especiales_sumario='$sumario', m_invitados_especiales_contenido='$contenido', m_invitados_especiales_fotoleyenda='$leyenda_principal', m_invitados_especiales_autor='$autor', m_invitados_especiales_estatus='A' where m_invitados_especiales_id = $id";
}
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


//LA PRIMERA CHICA

$foto_chica = $HTTP_POST_FILES['foto_chica']['name'];

if ($foto_chica!="") 
{
$nombre_original = $HTTP_POST_FILES['foto_chica']['name'];
$carpeta = '../../../../../imagenes/invitados/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INVEDI'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto_chica']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_invitados_especiales set  m_invitados_especiales_foto_home='$nombre_new' where  m_invitados_especiales_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 

}


//LA SEGUNDA GRANDE 
$foto_big = $HTTP_POST_FILES['foto_big']['name'];

if ($foto_big!="") 
{
$nombre_original = $HTTP_POST_FILES['foto_big']['name'];
$carpeta = '../../../../../imagenes/invitados/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INVEDI'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto_big']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_invitados_especiales set  m_invitados_especiales_adentro='$nombre_new' where  m_invitados_especiales_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 

}

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>


