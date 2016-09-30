<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<p><span class="etiquetas">TeleSUR Boletin </span></p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return submitForm();" enctype="multipart/form-data"><!-- -->
<span class="etiquetas">Titulo</span><br />
<input type="text" name="titulo" id="titulo" size="85" />



<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr><td>&nbsp;</td></tr>


<tr>
  <td bgcolor="#999999"><span class="etiquetas"><span class="etiquetas">Imagen primera cara( 548 px de ancho)</span><br />
  <input type="file" name="imagen_1" size="70" id="img" /> </td>
</tr>


<tr><td bgcolor="#999999"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr>
  <td bgcolor="#999999"><span class="etiquetas"><span class="etiquetas">Imagen segunda cara( 548 px de ancho)</span><br />
  <input type="file" name="imagen_2" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>
</body>
</html>
