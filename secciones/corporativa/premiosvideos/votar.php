<?php 
session_start();
echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";
/*
include('../../../extras/coneccion.php');
$link=Conectarse();
if (isset($_SESSION["v0t4nt3sV1d30s"])){ $variable=$_SESSION["v0t4nt3sV1d30s"]; } else{ $variable=""; }
if ($variable != 'usuariosV1deos'){
	echo "<script language='JavaScript'>document.location.href='index.php';</script>";
	exit();
}

if (isset($_SESSION["1dU5u4R10V0tanteV1d30s"])){ $idusuario=$_SESSION["1dU5u4R10V0tanteV1d30s"]; }

$fecha=date("Y-m-d H:i:s", time());
$ipvotante=getRealIpAddr();
		
		
		$idrespuesta= $_POST["opcion"];
		
		$SQL="INSERT INTO intranet. m_resultados_videos  VALUES (NULL, '$idrespuesta', '$idusuario', '$fecha', '$ipvotante')";
		$query=mysql_query($SQL, $link);
session_unset();
session_destroy();
echo "<script language='JavaScript'>document.location.href='exitoso.php';</script>";
?>
<?php
function getRealIpAddr() {
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
              $ip=$_SERVER['HTTP_CLIENT_IP'];
       } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
              $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
       }else{
              $ip=$_SERVER['REMOTE_ADDR'];
       }
return $ip;
}*/
?>