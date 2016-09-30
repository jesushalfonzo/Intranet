<?
ini_set('session.gc_maxlifetime',7200);
ini_set("session.cache_expire",120);
session_start();
$variable=$_SESSION["1ntrantr1v14"];
if ($variable != 'psicosomaticos'){
echo "<script language='JavaScript'>parent.location.href='registro.php' ;</script>";
}
else{  
  $usuario=$_SESSION['xz3datospers'];
  $nombrecompleto=$_SESSION['n0mbr3tr1v14d0'];
}
?>