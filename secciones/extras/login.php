<?php session_start();?>
<?

$login=$_POST["login"];
$password=$_POST["password"];
if($password!=""){
	$passwordEncrip=md5($password); 
}

if($password==""){
	$passwordEncrip=md5(''); 
}


require_once('../entretenimiento/trivia/nusoap/lib/nusoap.php');
        $cliente = new nusoap_client('http://192.168.3.60/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('cuenta_usuario_clave', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["user_id"];
		$login = $resultado["username"];
		//$nombre_completo =  ucfirst($resultado["nombre1"])." ".ucfirst($resultado["apellido1"]);
		$nombre_completo =  utf8_decode(ucfirst($resultado["nombre1"])." ".ucfirst($resultado["apellido1"]));
	    $email=$login."@telesurtv.net";
	 
if ($resultado){  
ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["C0m3nt4r10sPr3s1"]= 'pu3d3p4rt1c1p4r';
	$_SESSION['C0mUsuId']=$usuario_id;
    $_SESSION['C0mUsUlogin']=$login;
	$_SESSION['N0mbr3C0m3nt4r10']=$nombre_completo;
	$realip = $_SERVER["REMOTE_ADDR"]; 
	
	echo "<script language='JavaScript'>document.location.href='index.php?ancor=1';</script>";
	}
	else 
  {  
     echo "<script language='JavaScript'>document.location.href='index.php?error=1&ancor=1';</script>";
   }
?>