<? include('../../../extras/connect.php'); 
$link=Conectarse();
$sql="INSERT INTO m_sala_situacional VALUES(Null, '', NOW())";
$query=mysql_query($sql, $link);
$last=mysql_insert_id();


$nombre_origarchivo = $HTTP_POST_FILES['archivo']['name'];

$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];

/*if ($extension!='htm'){
echo "<script language='JavaScript'>alert('ERROR Solo archivos .htm');</script>";
exit();
}*/
$nombre_original = $HTTP_POST_FILES['archivo']['name'];

if ($nombre_original!='')
{
$carpeta = '../../../../sala_situacional/';
$numerito=rand(0, 1115);
$nombre_new = 'SALA_'.$last.'_'.$numerito .'.'.$extension;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_sala_situacional set  m_sala_situacional_file='$nombre_new' where m_sala_situacional_id='$last'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
}

  


$xml_ini='<xml xmlns:o="urn:schemas-microsoft-com:office:office">';

$myFile = "../../../../sala_situacional/filelist.xml";
		
		
		
		$fh = fopen($myFile, 'w') or die("Error!!");
		
		
		fwrite($fh, $xml_ini);
		
		fclose($fh);
		
		$xml_ini2= '<o:MainFile HRef="'.$nombre_new.'"/><o:File HRef="filelist.xml"/></xml>';
		
		//abro denuevo el archivo en modo "a" para escribir al final de este
		$fhr = fopen($myFile, 'a') or die("Error!!");
		
		fwrite($fhr, $xml_ini2);
			
        fclose($fhr);

 



?>