
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Informacion de interes</title>

<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="agregar_foto.php" method="post" enctype="multipart/form-data" name="addfoto">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#CCCCCC"><span class="etiquetas">
	<input type="hidden" name="id_galeria" value="<? echo $id_galeria=$_GET["ckl"];?>" />
	Agregar Foto:</span></td>
   
  </tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">Foto Grande:(354 x 200)</span><br /><input type="file" name="foto" size="70" /></tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">Fotos Para el Home:(116 x 77)</span><br />
  <input type="file" name="foto_home" size="70" />
  </td></tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td valign="top"><span class="etiquetas">Foto Leyenda:</span><br /><textarea name="leyenda" cols="50" rows="5"></textarea></td></tr>
   <tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
    <tr><td align="center"><input type="submit" value="Agregar" /></td></tr>
</table>

</form>
</body>
</html>