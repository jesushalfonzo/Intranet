<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//PARA LOS COMENTARIOS
ini_set('session.gc_maxlifetime',7200);

if (!isset($_SESSION["C0m3nt4r10sPr3s1"])){ 

echo "<script language='JavaScript'>parent.location.href='index.php?error=1';</script>";
exit();

}

include('../../extras/coneccion.php');
$link=Conectarse();

$comentario=$_POST["comentario"];
$idusuario=$_SESSION["C0mUsuId"];
$login=$_SESSION["C0mUsUlogin"];
$nombre=$_SESSION["N0mbr3C0m3nt4r10"];
$nombre=utf8_encode($nombre);
$realip = $_SERVER["REMOTE_ADDR"];

$SQL="INSERT INTO m_comenterios VALUES (Null, '$nombre', '$login', '$idusuario', '$comentario', '$realip', Now(), 'A')";
$query=mysql_query($SQL, $link);
if($query){
echo "<script language='JavaScript'>alert('Su mensaje fue enviado correctamente');</script>";
}
else{
echo "<script language='JavaScript'>alert('ERROR!');</script>";
}


echo "<script language='JavaScript'>parent.location.href='index.php?ancor=1';</script>";






?>