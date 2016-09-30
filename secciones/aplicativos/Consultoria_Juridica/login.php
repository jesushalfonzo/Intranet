<?php session_start();?>
<?
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('../../../extras/coneccion.php');
$link=Conectarse();
include('../../../extras/coneccion_aplicaciones.php');
$conect=Validar();
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
        $cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('conectarusuario', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["id"];
		$login = $resultado["username"];
		$nombre_completo =  ucfirst($resultado["primer_nombre"])." ".ucfirst($resultado["primer_apellido"]);
	    $email=$login."@telesurtv.net";
        $nombre=ucfirst($resultado["primer_nombre"]);
		$nombre2=ucfirst($resultado["segundo_nombre"]);
		$apellido=ucfirst($resultado["primer_apellido"]);
		$apellido2=ucfirst($resultado["segundo_apellido"]);
	    $ci=$resultado["cedula"];

///

//cuenta_usuario se llama la funcion 
if ($resultado){
ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["c0nsult0r1aJur1d1c4"]= 'c0nsult4sjur1d1c4s';
	$_SESSION['usuarioconsulto']=$usuario_id;
    $_SESSION['loginconsulto']=$login;
	$_SESSION['iddatospersonalesc']=$usuario_id;
	$_SESSION['nombre_completocon']=$nombre_completo;
	$_SESSION['mailusuarioconsu']=$email;
	$_SESSION['n0mbr3s0l0']=$nombre.' '.$nombre2;
	$_SESSION['4p3ll1d0s0l0']=$apellido.' '.$apellido2;
	$_SESSION['num3r0c3dul4']=$ci;
	echo "<script language='JavaScript'>document.location.href='index2.php';</script>";
}

else {
echo "<script language='JavaScript'>document.location.href='index.php';</script>";
}
?>