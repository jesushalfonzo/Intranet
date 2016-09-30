<?php session_start();?>
<? 
include('../../../extras/coneccion.php');
$link=Conectarse();

$ubicacion="canal";  

$login=$_POST["login"];
$password=$_POST["password"];


if($password!=""){
	$passwordEncrip=md5($password); 
}

if($password==""){
	$passwordEncrip=md5(''); 
}

$sql= "SELECT  * FROM m_usuarios_protocolo WHERE m_usuarios_protocolo_login='$login' and m_usuarios_protocolo_password='$passwordEncrip' and m_usuarios_protocolo_status='A'";

$result=mysql_query($sql,$link);
$num_rows= mysql_num_rows($result);
$row = mysql_fetch_array($result);
$nombre=$row['m_usuarios_protocolo_nombre'];

if ($num_rows!=0){  
    ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["cl4v3pr0t0c0l0"]= 'recl4v3xx';
	$_SESSION['n0mbr3usuP']=$nombre;
	
	echo "<script language='JavaScript'>document.location.href='peticiones.php';</script>";
	}
	else 
  {  
     echo "<script language='JavaScript'>document.location.href='index.php?ckl=1.php';</script>";
   }
   

?>