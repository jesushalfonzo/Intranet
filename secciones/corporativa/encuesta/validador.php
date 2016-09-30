<?php session_start();?>
<? 
if (isset($_SESSION["v0t4nt3sC0ncurs0"])){ $variable=$_SESSION["v0t4nt3sC0ncurs0"]; } else{ $variable=""; }
if ($variable != 'usuariovotantes'){
	echo "<script language='JavaScript'>document.location.href='index.php';</script>";
	exit();
}

include('../../../extras/coneccion.php');
$link=Conectarse();

if (isset($_SESSION["1dU5u4R10V0tante"])){ $idusu=$_SESSION["1dU5u4R10V0tante"]; } else{ $idusu="00"; }
$SQL="SELECT *  FROM r_concurso_votacion WHERE r_concurso_votacion_idusuario = '$idusu'";
$query=mysql_query($SQL, $link);
$numero=mysql_num_rows($query);

if($numero >0){
echo "<script language='JavaScript'>document.location.href='NoVotar.php';</script>";
}

?>