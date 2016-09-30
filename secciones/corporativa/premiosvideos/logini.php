<?php session_start();?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 include('../../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";

$login=$_POST["login"];
$password=$_POST["password"];
if($password!=""){
	$passwordEncrip=md5($password); 
}

if($password==""){
	$passwordEncrip=md5(''); 
}


require_once('../../entretenimiento/trivia/nusoap/lib/nusoap.php');
        $cliente = new nusoap_client('http://192.168.3.60/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('cuenta_usuario_clave', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["user_id"];
		$login = $resultado["username"];
		$nombre_completo =  ucfirst($resultado["nombre1"])." ".ucfirst($resultado["apellido1"]);
	    $email=$login."@telesurtv.net";
	 
if ($resultado){  
ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["v0t4nt3sV1d30s"]= 'usuariosV1deos';
	$_SESSION['1dU5u4R10V0tanteV1d30s']=$usuario_id;
	$_SESSION['N0mbr3V0t4nt3V1d30s']=$nombre_completo;
	
	/*echo "<script language='JavaScript'>document.location.href='videos.php';</script>";*/
	echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";
	}
	else 
  {  
  echo "<script language='JavaScript'>alert('ERROR, Combinación Usuario/Contraseña no valida');</script>";
   /*  echo "<script language='JavaScript'>document.location.href='index.php?ckl=1';</script>";*/
	 echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";
   }
?>