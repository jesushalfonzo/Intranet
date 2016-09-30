<? include ('../../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];
$tirasql="select * from m_galerias where m_galeria_id='$id'";
$result=mysql_query($tirasql, $link);
$row=mysql_fetch_array($result);
$id=$row['m_galeria_id'];
$titulo=$row['m_galeria_titulo'];
$fecha=$row['m_galeria_fecha'];
$estatus=$row['m_galeria_estatus'];

   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" />
</head>

<body>
<form action="editar.php" method="post" enctype="multipart/form-data" name="agregar">
<table border="0" cellspacing="0" cellpadding="0">
<input type="hidden" name="id" value="<? echo $id ?>" />
 <tr><td><span class="etiquetas">Titulo de la galeria:</span><br /><input type="text" name="titulo" size="70" value="<? echo"$titulo"; ?>"/></td></tr>
<tr><td><img src="../../../../../image/spacer.gif" width="1" height="10" border="0" /></td></tr>
<tr><td align="center"><input type="submit" value="Actualizar" name="boton" /><? if($estatus=='D'){ ?>&nbsp;&nbsp;<input type="submit" value="Actualizar / Aprobar" name="boton"/><? } ?></td></tr>
</table>


</form>
</body>
</html>
