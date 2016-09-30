<?php 
include('../../../extras/coneccion.php');
$link=Conectarse();
$idcita=$_POST["idcita"];
$fechaasignada=$_POST["fechaasignada"];
$horaasignada=$_POST["horaasignada"];
$idsolicitud=$_POST["idsolicitud"];
$separador=explode('/', $fechaasignada);
$d=$separador[0];
$m=$separador[1];
$y=$separador[2];


 $fechanuevaFORMAT=$y."-".$m."-".$d;
$fechanuevaFORMAT=$fechanuevaFORMAT." ".$horaasignada;
$Sql="UPDATE m_citas_juridicas SET m_citas_juridicas_fechacita='$fechanuevaFORMAT', m_citas_juridicas_update='Y' WHERE m_citas_juridicas_id='$idcita'";
$query=mysql_query($Sql,$link);

$SQLtoprincipal="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_fechaasignada='$fechanuevaFORMAT' WHERE m_aplicativo_cjuridica_id='$idsolicitud'";
$queryx=mysql_query($SQLtoprincipal,$link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/javascript">
function refrescarlavaina(){
//llamada a la función de ventana abridora
window.opener.refreshpage()
}

function chekshit(){
//llamada a la función de ventana abridora
window.opener.chequear()
}
refrescarlavaina();
window.close();
</script>
</head>

<body>
</body>
</html>