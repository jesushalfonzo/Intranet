<? ini_set('session.gc_maxlifetime',7200);
ini_set("session.cache_expire",120);
session_start();
$variable=$_SESSION["c0nsult0r1aJur1d1c4"];
if ($variable != 'c0nsult4sjur1d1c4s'){
echo "<script language='JavaScript'>parent.location.href='index.php' ;</script>";
}
else{  
  $usuarioid=$_SESSION['iddatospersonalesc'];
  $nombre_completo=$_SESSION['nombre_completocon'];
  $email=$_SESSION['mailusuarioconsu'];
  $nombre_solo=$_SESSION['n0mbr3s0l0'];
  $apellido_solo=$_SESSION['4p3ll1d0s0l0'];
  $cedula=$_SESSION['num3r0c3dul4'];
}

?>