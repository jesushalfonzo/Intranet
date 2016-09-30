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

<div class="etiquetas" style="background-color:#CCCCCC; margin-bottom:15px;">Agregar Entrevista</div>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return submitForm();" enctype="multipart/form-data">
<!-- -->
<span class="etiquetas">Titulo:</span><br />
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

<td class="texto"><span class="texto"><br />
</span><span class="etiquetas"><br />
Contenido:</span><br />
<br />

<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('contenido', 'Escribe aquí el contenido ...', 300, 250, true, false);
//-->
</script></td>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td></tr>
<tr>
  <td bgcolor="#FFFFFF"><span class="etiquetas">Foto entrevista interno (290 X 154):</span><br />
  <input type="file" name="imagen_interno" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><span class="etiquetas">Foto leyenda:</span><br /><textarea name="leyenda" cols="50" rows="3"></textarea></td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF"><span class="etiquetas">Foto entrevista home (240 X 140):</span><br />
  <input type="file" name="imagen_home" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><span class="etiquetas">Autor:<br />
</span> 
  <input type="text" name="autor" size="50" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td align="center"><input type="submit" value="Agregar entrevista"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
