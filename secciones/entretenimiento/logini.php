<?php session_start();?>
<? include('../../extras/coneccion.php');
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


require_once('trivia/nusoap/lib/nusoap.php');
        $cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('conectarusuario', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["id"];
		$login = $resultado["username"];
		$nombre_completo =  ucfirst($resultado["primer_nombre"])." ".ucfirst($resultado["primer_apellido"]);
	    $email=$login."@telesurtv.net";
	 
if ($resultado){  
ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["1ntrantr1v14"]= 'psicosomaticos';
	$_SESSION['xz3idusu']=$usuario_id;
    $_SESSION['xz3login']=$login;
	$_SESSION['xz3datospers']=$usuario_id;
	$_SESSION['noincluir']='0';
    $_SESSION['guianum3ro']='1';
	$_SESSION['n0mbr3tr1v14d0']=$nombre_completo;
	$realip = $_SERVER["REMOTE_ADDR"]; 
	
	echo "<script language='JavaScript'>document.location.href='participar.php';</script>";
	}
	else 
  {  
     echo "<script language='JavaScript'>document.location.href='identificacion.php?ckl=1';</script>";
   }
?>