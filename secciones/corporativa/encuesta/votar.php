<?php 
session_start();

//echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";

include('../../../extras/coneccion.php');
$link=Conectarse();
if (isset($_SESSION["v0t4nt3sC0ncurs0"])){ $variable=$_SESSION["v0t4nt3sC0ncurs0"]; } else{ $variable=""; }
if ($variable != 'usuariovotantes'){
	echo "<script language='JavaScript'>document.location.href='index.php';</script>";
	exit();
}

if (isset($_SESSION["1dU5u4R10V0tante"])){ $idusuario=$_SESSION["1dU5u4R10V0tante"]; }

$fecha=date("Y-m-d H:i:s", time());
$ipvotante=getRealIpAddr();



 if (isset ($_POST["ids"])) {
         $tot = count($_POST["ids"]);

         for ($i = 0; $i < $tot; $i++){
      
			$idpregunta=$_POST["ids"][$i];
			$nombre="opcion_".$idpregunta;
			$idrespuesta= $_POST[$nombre];
			
			$SQL="INSERT INTO intranet.r_concurso_votacion  VALUES (NULL, '1', '$idpregunta', '$idrespuesta', '$idusuario', '$fecha', '$ipvotante')";
			$query=mysql_query($SQL, $link);
                        
}
}else{echo "no hay post ids";}
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
}

?>