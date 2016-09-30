<?php require_once('../../extras/connect.php'); ?>
<?php
mysql_select_db($database_conectarse, $conectarse);
$query_rsBuscaIds = "SELECT r_parrilla_id FROM r_parrilla";
$rsBuscaIds = mysql_query($query_rsBuscaIds, $conectarse) or die(mysql_error());
$row_rsBuscaIds = mysql_fetch_assoc($rsBuscaIds);
$totalRows_rsBuscaIds = mysql_num_rows($rsBuscaIds);
$creaSemana = $_GET['crearsemana'];
?>
<?php do { ?>
<?php
$parrillaId = $row_rsBuscaIds['r_parrilla_id'];
mysql_select_db($database_conectarse, $conectarse); 
$query_rsCrearSemana = "INSERT INTO r_emision (r_emision_semana,r_parrilla_id) VALUES ('$creaSemana','$parrillaId')";
$rsCrearSemana = mysql_query($query_rsCrearSemana, $conectarse) or die(mysql_error());
$row_rsCrearSemana = mysql_fetch_assoc($rsCrearSemana);
$totalRows_rsCrearSemana = mysql_num_rows($rsCrearSemana);
?>
<?php } while ($row_rsBuscaIds = mysql_fetch_assoc($rsBuscaIds)); ?>
<?php
mysql_free_result($rsBuscaIds);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body class="body" >
<script language='JavaScript'>document.location.href='index.php';</script>
</body>
</html>