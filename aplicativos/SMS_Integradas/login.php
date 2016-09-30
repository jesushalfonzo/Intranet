<?php session_start();?>
<? 
include('coneccion.php');
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


//PARA VERIFICAR SI ESTA ENTRE LA LISTA DE LOS PERMITIDOS
$sql= "SELECT  * FROM m_usuarios WHERE m_usuarios_login ='$login' AND m_usuarios_estatus='A'";
 $queryvalidar=mysql_query($sql, $link);
 $permitido=mysql_num_rows($queryvalidar);
$resultado=mysql_fetch_array($queryvalidar);

if($permitido==0){ echo "<script language='JavaScript'>alert('USTED NO TIENE PERMITIDO EL ACCESO A ESTA APLICACIÓN');</script><script language='JavaScript'>document.location.href='index.php?ckl=1.php';</script>"; exit(0); }


$m_roles_id=$resultado["m_usuarios_rol"];


require_once('nusoap/lib/nusoap.php');
        $cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('conectarusuario', array('usuario' => $login, 'clave' => $password));
		$usuario_id = $resultado["id"];
		$login = $resultado["username"];
		$nombre_completo =  ucfirst($resultado["primer_nombre"])." ".ucfirst($resultado["primer_apellido"]);
	    $email=$login."@telesurtv.net";

if ($usuario_id!=0 or $usuario_id!=""){  
    ini_set('session.gc_maxlifetime',7200);   
    $_SESSION["Sm5c0mu1nt3gr4d4x"]= '3nv14nd0SM5';
	$_SESSION['N0mbr3SM5']=$nombre_completo;
	$_SESSION['1dusu1nt3gr4d0']=$usuario_id;
	$_SESSION['l0g1n1usu']=$login;
	 

//PARA LOS PERMISOS

$SQl_Permisos="SELECT m_secciones.m_secciones_id, m_secciones.m_secciones_nombre, m_permisos.m_permisos_status
FROM m_secciones, m_permisos
WHERE m_permisos.m_permisos_idrol = '$m_roles_id'
AND m_secciones.m_secciones_id = m_permisos.m_permisos_seccion
ORDER BY m_secciones_id ASC";

$query_permisos=mysql_query($SQl_Permisos, $link);

while($row_permisos=mysql_fetch_array($query_permisos)){


$m_seccion_id=$row_permisos["m_secciones_id"];
$m_seccion_nombre=strtoupper($row_permisos["m_secciones_nombre"]);
$m_permiso_status=strtoupper($row_permisos["m_permisos_status"]);
$permisos[$m_seccion_nombre]['PERMITIR']=$m_permiso_status;

}
$_SESSION["R0l3sp3rM1s0s"]=$permisos;



echo "<script language='JavaScript'>document.location.href='index2.php';</script>";
}

else {
     echo "<script language='JavaScript'>document.location.href='index.php?ckl=1.php';</script>";
}









?>
