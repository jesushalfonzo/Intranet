<?php
include ('../../../../extras/connect.php'); 
$linky=Conectarse();   
$idelemento=$_POST["idelemento"];
$titulo=$_POST["titulo"];
$link=$_POST["link"];
$target=$_POST["target"];
$tipo=$_POST["tipo"];
$fecha=date("Y-m-d H:i:s", time());
$SQL= "UPDATE m_elementos_home SET m_elementos_home_titulo='$titulo', m_elementos_home_link='$link', m_elementos_home_target='$target' , m_elementos_home_fecha='$fecha' WHERE m_elementos_home_id='$idelemento'";
$value = mysql_query($SQL, $linky);

echo "<script language='JavaScript'>alert('Los datos se actualizaron correctamente');</script>";
		  

  //LAS FOTOS Y LAS MUJERES PRIMERO
$foto = $_FILES['archivo']['name'];



if ($foto!='')
{
$carpeta = '../../../../../multimedia/home/';
$numerito=rand(0, 1115) .'.'.$tipo;
$nombre_new = 'HOME_EDT_'.$idelemento.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$link=Conectarse();
$actualizar="UPDATE m_elementos_home SET  m_elementos_home_archivo='$nombre_new' WHERE  m_elementos_home_id='$idelemento'"; 
$resultado=mysql_query($actualizar,$link); 
}

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

?>

