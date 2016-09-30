<?php require_once('../../../Connections/conectarse.php'); ?>
<?php
mysql_select_db($database_conectarse, $conectarse);
$query_rsSemanaMax = "SELECT MAX(r_emision_semana) AS r_emision_semana FROM r_emision";
$rsSemanaMax = mysql_query($query_rsSemanaMax, $conectarse) or die(mysql_error());
$row_rsSemanaMax = mysql_fetch_assoc($rsSemanaMax);
$totalRows_rsSemanaMax = mysql_num_rows($rsSemanaMax);

$semanaUno = 52 + date("W");
$semanaDos = $semanaUno + 1;
$semanaTres = $semanaDos + 1;
$semanaMax = $row_rsSemanaMax['r_emision_semana'];
$diferencia = $semanaMax - $semanaUno;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contenidos EMISIONES</title>
<link href="../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="5" class="body" >

<?php
if ($diferencia == 0) { ?>
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
<tr>
<td bgcolor="#D4D0C8" class="etiquetas"><a href="crear.php?crearsemana=<?php echo $semanaDos; ?>">Agregar semana <?php echo $semanaDos; ?></a></td>
</tr>
</table><br />
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
  <tr>
    <td bgcolor="#D4D0C8" class="etiquetas">Semana actual (<?php echo $semanaUno; ?>)</td>
  </tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaUno; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaUno; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaUno; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaUno; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<?php } ?>

<?php
if ($diferencia == 1) { ?>
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
<tr>
<td bgcolor="#D4D0C8" class="etiquetas"><a href="crear.php?crearsemana=<?php echo $semanaTres; ?>">Agregar semana <?php echo $semanaTres; ?></a></td>
</tr>
</table><br />
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
  <tr>
    <td bgcolor="#D4D0C8" class="etiquetas">Semana actual (<?php echo $semanaUno; ?>)</td>
  </tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaUno; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaUno; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaUno; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaUno; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<br />
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
<tr>
<td bgcolor="#D4D0C8" class="etiquetas">Pr&oacute;xima semana  (<?php echo $semanaDos; ?>)</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaDos; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaDos; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaDos; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaDos; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<?php } ?>





<?php
if ($diferencia == 2) { ?>
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
  <tr>
    <td bgcolor="#D4D0C8" class="etiquetas">Semana actual (<?php echo $semanaUno; ?>)</td>
  </tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaUno; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaUno; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaUno; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaUno; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaUno; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<br />
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
<tr>
<td bgcolor="#D4D0C8" class="etiquetas">Pr&oacute;xima semana  (<?php echo $semanaDos; ?>)</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaDos; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaDos; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaDos; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaDos; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaDos; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<br />
<table width="160" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
<tr>
<td bgcolor="#D4D0C8" class="etiquetas">Semana  (<?php echo $semanaTres; ?>)</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">Editar emisiones del</td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=lunes&amp;semana=<?php echo $semanaTres; ?>" target="principal">Lunes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=martes&amp;semana=<?php echo $semanaTres; ?>" target="principal">Martes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=miercoles&amp;semana=<?php echo $semanaTres; ?>" target="principal">Mi&eacute;rcoles</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=jueves&amp;semana=<?php echo $semanaTres; ?>" target="principal">Jueves</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=viernes&amp;semana=<?php echo $semanaTres; ?>" target="principal">Viernes</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=sabado&amp;semana=<?php echo $semanaTres; ?>" target="principal">S&aacute;bado</a></td>
</tr>
<tr>
<td bgcolor="#D4D0C8" class="texto">&nbsp;&nbsp;&nbsp;<a href="../../principal/emisiones/listar/dos/index.php?dia=domingo&amp;semana=<?php echo $semanaTres; ?>" target="principal">Domingo</a></td>
</tr>
</table>
<?php } ?>

</body>
</html>
<?php
mysql_free_result($rsSemanaMax);
?>