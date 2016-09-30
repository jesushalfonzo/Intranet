<?
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 include ('../../../../extras/connect.php');
$linky=Conectarse();
/*include('../../../../../extras/coneccion_aplicaciones.php');
$enlace=Validar();/*/
$id_trivia=$_GET["clx"];
//echo "trivia: ". $id_trivia;

$SQL_mardito="SELECT m_trivia_participantes, r_trivia_control";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.table{
border:1px #999999 solid;
}
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="1" class="table">
<tr>
    <td width="232" class="etiquetas"><div align="center">Empleado</div></td>
    <td width="351" class="etiquetas"><div align="center">Departamento</div></td>
    <td width="63" class="etiquetas"><div align="center">Puntaje</div></td>
    <td width="166" class="etiquetas"><div align="center">Tiempo</div></td>
  </tr>
<? 
$SQl_final="SELECT * FROM m_trivia_reslutados WHERE m_trivia_reslutados_idtrivia='$id_trivia' AND m_trivia_reslutados_idpersonal !='0' ORDER BY m_trivia_reslutados_puntos DESC, m_trivia_reslutados_tiempo ASC"; 

$query_final=mysql_query($SQl_final, $linky);
$participantes=mysql_num_rows($query_final);
while($row_final=mysql_fetch_array($query_final)){
$m_trivia_reslutados_idpersonal=$row_final['m_trivia_reslutados_idpersonal'];
$m_trivia_reslutados_puntos=$row_final['m_trivia_reslutados_puntos'];
$m_trivia_reslutados_tiempo=$row_final['m_trivia_reslutados_tiempo'];
/*
$sql_datos="SELECT B.ci, B.nombre1, B.apellido1, C.codigo_cargo, C.nombre_cargo, D.codigo_organizacion, D.nombre_organizacion FROM organizacion_cargo A, datospersonales B, cargo C, organizacion D where (A.id_datospersonales = B.id_datospersonales) and (A.id_cargo = C.id_cargo) and (A.id_organizacion = D.id_organizacion) and B.id_datospersonales='$m_trivia_reslutados_idpersonal'";
$que=mysql_query($sql_datos, $enlace);
$r=mysql_fetch_array($que);
$nombre=$r['nombre1'];
$nombre2=$r['nombre2'];
$apellido=$r['apellido1'];
$nombre_completo=$nombre.' '.$nombre2.' '.$apellido;
$departamento=$r['nombre_organizacion'];*/

require_once('nusoap/lib/nusoap.php');
        $cliente = new nusoap_client('http://192.168.3.139/sait/web/libs/webservices/cuenta/servicio.php');
        $resultado = $cliente->call('cuenta_id', array('id' => $m_trivia_reslutados_idpersonal));
		$login = $resultado["username"];
		$nombre_completo =  utf8_decode(ucfirst($resultado["nombre1"])." ".ucfirst($resultado["apellido1"]));
	    $departamento = $resultado["descripcion_dependencia"];
		
		if ($nombre_completo==' ')
	   {
	   $nombre_completo="PERSONA EGRESADA";
	   	   }
?>


  <tr>
    <td ><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px;"><? echo"$nombre_completo"; ?> <? //echo"$m_trivia_reslutados_idpersonal"; ?></div></td>
	<td><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px;"><? echo"$departamento"; ?></div></td>
    <td><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px; text-align:center"><? echo"$m_trivia_reslutados_puntos"; ?></div></td>
    <td><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px; text-align:center"><? echo $m_trivia_reslutados_tiempo; ?></div></td>
  </tr>
 <? } ?>
 <tr> <td colspan="4"><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px; text-align:center"> &nbsp;</div></td></tr>
 <tr> <td colspan="4"><div class="pequeno" style="margin-left:5px; margin-right:5px; margin-bottom:5px; margin-top:5px; text-align:center"> Numero de participantes:
 <? echo $participantes; ?></div></td></tr>
</table>
</body>
</html>

