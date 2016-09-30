<?php session_start();?>
<?
error_reporting(E_ERROR | E_WARNING | E_PARSE);
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


require_once('nusoap/lib/nusoap.php');
        //$cliente = new nusoap_client('http://192.168.3.60/webservices/cuenta/servicio.php');
		$cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('conectarusuario', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["user_id"];
		$login = $resultado["username"];
		$nombre_completo =  ucfirst($resultado["primer_nombre"])." ".ucfirst($resultado["primer_apellido"]);
	    $email=$login."@telesurtv.net";
	 
if ($resultado){  
    ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["protomardito"]= 'v3rgacion';
	$_SESSION['usumardito']=$usuario_id;
    $_SESSION['loginmardito']=$login;
	$_SESSION['iddatospersmardito']=$usuario_id;
	$_SESSION['nombre_completomar']=$nombre_completo;
	$_SESSION['mailusuarioremar']=$email;
	
	echo "<script language='JavaScript'>document.location.href='listado.php';</script>";
	}
	else 
  {  
	 echo "<script language='JavaScript'>document.location.href='index.php';</script>";
   }

?>