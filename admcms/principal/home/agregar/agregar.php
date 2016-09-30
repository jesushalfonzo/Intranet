<? include ('../../../extras/connect.php'); ?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo"];
$link=$_POST["link"];
$target=$_POST["target"];
$fecha=date("Y-m-d H:i:s", time());
$tipo=$_POST["tipo"];
$SQL= "INSERT INTO m_elementos_home VALUES (Null, '$titulo', '', '$link', '$target', '$fecha', '$tipo', 'NO')";

 $value = mysql_query($SQL) or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());

$lastshit=mysql_insert_id();
echo "<script language='JavaScript'>alert('Los datos se guardaron correctamente');</script>";
		  

  //LAS FOTOS Y LAS MUJERES PRIMERO
$foto = $_FILES['archivo']['name'];

if ($foto!='')
{
$carpeta = '../../../../multimedia/home/';
$numerito=rand(0, 1115) .'.'.$tipo;
$nombre_new = 'HOME_'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$link=Conectarse(); 
$actualizar="UPDATE m_elementos_home SET  m_elementos_home_archivo='$nombre_new' WHERE  m_elementos_home_id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 
}


//PARA FLASH 

$foto = $_FILES['archivoflash']['name'];

if ($foto!='')
{
$carpeta = '../../../../multimedia/home/';
$numerito=rand(0, 1115) .'.'.$tipo;
$nombre_new = 'HOME_'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['archivoflash']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$link=Conectarse(); 
$actualizar="UPDATE m_elementos_home SET  m_elementos_home_archivo='$nombre_new' WHERE  m_elementos_home_id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 
}

mysql_close();
 echo "<script language='JavaScript'>document.location.href='../listar/index.php?tkl=$mes';</script>";

?>

