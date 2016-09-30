<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<p><span class="etiquetas">TeleSUR Informaci&oacute;n</span></p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return submitForm();" enctype="multipart/form-data"><!-- -->
<span class="etiquetas">Titulo(solo para guia a la hora de listar)</span><br />
<input type="text" name="titulo" id="titulo" size="70" />

<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
updateRTEs();
//alert("Submitted value: "+document.myform.rte1.value) //alert submitted value
return true; //Set to false to disable form submission, for easy debugging.
}
initRTE("images/", "", "");
//-->
</script>


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr><td>&nbsp;</td></tr>
<tr><td class="texto"><span class="etiquetas">Sumario para la pagina principal</span>
<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('sumario', 'Escribe aquí el contenido ...', 300, 150, true, false);
//-->
</script>
</td></tr>

<tr>

<td class="texto"><span class="texto"><br /><br />Contenido</span><br /><br />

<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('rte1', 'Escribe aquí el contenido ...', 300, 250, true, false);
//-->
</script>
</td>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr><td class="etiquetas" bgcolor="#999999">Solo para Imagenes  especiales</td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr>
  <td bgcolor="#999999"><span class="etiquetas"><span class="etiquetas">Imagen especial Para la pagina principal ( 270 px de ancho)</span><br />
  <input type="file" name="imagen_especial_home" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr>
  <td bgcolor="#999999"><span class="etiquetas">Imagen especial Para el interno (580 px de ancho)</span><br />
  <input type="file" name="imagen_especial_interno" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
