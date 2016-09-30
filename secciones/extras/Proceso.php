<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php 


 include('../../extras/coneccion.php');
$link=Conectarse();
		$SQL="SELECT * FROM m_comenterios WHERE m_comenterios_estatus ='A' ORDER BY m_comenterios_fecha DESC";
		$query=mysql_query($SQL, $link);
		while($row=mysql_fetch_array($query)){
		$m_comenterios_nombre=utf8_encode(escapex($row["m_comenterios_nombre"]));
		$m_comenterios_comentario=html_entity_decode(escapex($row["m_comenterios_comentario"]));
	    $m_comenterios_fecha=strtotime($row["m_comenterios_fecha"]);
		$fecha=date('d/m/Y H:i', $m_comenterios_fecha);
		?>
<?php echo $m_comenterios_nombre; ?><br /><?php echo $fecha; ?><br /><br /><?php echo $m_comenterios_comentario; ?><hr /><br /><br />
<?php } ?>
</body>
</html>

<?php
function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}

function escapex($str) 
{
	if(get_magic_quotes_gpc())
		$str = stripslashes($str);
		return htmlentities($str, ENT_QUOTES);
}
?>