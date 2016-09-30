<?php session_start(); 

?>
<?php




error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('../../../extras/coneccion.php');
$link = Conectarse();
$masterSeccio = "ENTRETENIMIENTO";

$login = $_POST["login"];
$password = $_POST["password"];
if ($password != "") {
    $passwordEncrip = md5($password);
}

if ($password == "") {
    $passwordEncrip = md5('');
}



require_once('../../entretenimiento/trivia/nusoap/lib/nusoap.php');
$cliente = new nusoap_client('http://192.168.3.60/webservices/cuenta/servicio.php');
$resultado = $cliente->call('cuenta_usuario_clave', array('usuario' => $login, 'clave' => $password));
$usuario_id = $resultado["user_id"];
$login = $resultado["username"];
$nombre_completo = ucfirst($resultado["nombre1"]) . " " . ucfirst($resultado["apellido1"]);
$email = $login . "@telesurtv.net";

if ($resultado) {
    ini_set('session.gc_maxlifetime', 7200);
    $_SESSION["v0t4nt3sC0ncurs0"] = 'usuariovotantes';
    $_SESSION['1dU5u4R10V0tante'] = $usuario_id;
    $_SESSION['N0mbr3V0t4nt3'] = $nombre_completo;

    echo "<script language='JavaScript'>document.location.href='encuesta.php';</script>";
    /*echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";*/
} else {
    echo "<script language='JavaScript'>alert('ERROR, Combinaci\u00F3n Usuario/Contrase\u00F1a no valida');</script>";
    echo "<script language='JavaScript'>document.location.href='index2.php?ckl=1';</script>";
    /* echo "<script language='JavaScript'>document.location.href='cerrado.php';</script>";*/
}
?>
