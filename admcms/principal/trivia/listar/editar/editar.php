<? include ('../../../../extras/connect.php');
$linky=Conectarse();
$id_trivia=$_POST["id_trivia"];
$titulo_trivia=$_POST["titulo_trivia"];

$boton=$_POST["boton"];
if($boton=='Actualizar'){
$SQL_trivia="UPDATE m_trivia SET m_trivia_titulo='$titulo_trivia' WHERE m_trivia_id='$id_trivia'";
$padonde="listar";
}
else {
if($boton=='Agregar pregunta'){
$SQL_trivia="UPDATE m_trivia SET m_trivia_titulo='$titulo_trivia' WHERE m_trivia_id='$id_trivia'";
$padonde="pregunta";
}
else {

$SQL_trivia="UPDATE m_trivia SET m_trivia_titulo='$titulo_trivia', m_trivia_aprobado='SI' WHERE m_trivia_id='$id_trivia'";
$padonde="listar";
}

}
$query_trivia=mysql_query($SQL_trivia, $linky);
 if ($query_trivia){
       echo "<script language='JavaScript'>alert('Actualización Exitosa');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Actualización NO Exitosa');</script>";
    }

$numero_pregunta=$_POST["numero_pregunta"];
$i=1;
while ($i <= $numero_pregunta){
$var1='pregunta'.$i;
$var2='id_pregunta'.$i;
$pregunta= $_POST[$var1];
$id_pregunta=$_POST[$var2];
$SSQL="UPDATE m_trivia_pregunta SET m_trivia_pregunta_texto='$pregunta' WHERE m_trivia_pregunta_id='$id_pregunta'";
$squery=mysql_query($SSQL, $linky);
$i++;
}


//PARA LOS OOPCIONES HIJAS DE LA GRANDISIMAS
 if (isset ($_FILES["archivos"])) {
        $tot = count($_FILES["archivos"]["name"]);
       for ($k = 0; $k < $tot; $k++){
		$opcion= $_POST["opcion"][$k];
		$opcionid= $_POST["opcionid"][$k];
		
		$SL="UPDATE r_trivia_pregunata_opc SET r_trivia_pregunata_opc_text='$opcion' WHERE r_trivia_pregunata_opc_id='$opcionid'";

	$squery=mysql_query($SL, $linky);
		
		}
		}
		
		
		
		// PA LA FUCKING IMAGEN DE SHIT
		
		$imagen = $_FILES['image']['name'];

if ($imagen!='')
{
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'TRIVIAEDT'.$id_trivia.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['image']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_trivia set  m_trivia_imagen='$nombre_new' where m_trivia_id ='$id_trivia'"; 
$resultado=mysql_query($actualizar,$linky); 


}

// PA LA FUCKING IMAGEN DE SHIT DEL HOME
		
		$imagen_home = $_FILES['image_home']['name'];

if ($imagen_home!='')
{
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'TRIVIA-HOME-EDT'.$id_trivia.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['image_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen_home ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen_home No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_trivia set  m_trivia_home='$nombre_new' where m_trivia_id ='$id_trivia'"; 
$resultado=mysql_query($actualizar,$linky); 


}
		
		//FIN DE LA SHHIT
		
		if($padonde=='listar') {
		 echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		 }
		 else{
		  echo "<script language='JavaScript'>document.location.href='../../agregar/index_pregunta.php?clx=$id_trivia';</script>";
		  }

?>
