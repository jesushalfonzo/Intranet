<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar shit</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<p class="etiquetas">Invitados Especiales</p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return submitForm();" enctype="multipart/form-data"><!-- -->
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
<tr>
<td class="texto"><span class="etiquetas">Titulo</span><br />
<input type="text" name="titulo" id="nombre_canal" size="84" />
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td class="texto"><span class="etiquetas">Sumario para el Home</span>
<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('sumario', 'Escribe aquí el contenido ...', 300, 150, true, false);
//-->
</script></td></tr>
<tr>

<td class="texto"><span class="etiquetas"><br /><br />Contenido / Entrevista</span><br /><br />

<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('contenido', 'Escribe aquí el contenido ...', 300, 250, true, false);
//-->
</script>
</td>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
   
<td colspan="3" valign="top"> <span class="etiquetas">Foto para la pagina principal (92 x 92):</span>
  <input name="foto_chiquita" type="file" id="foto_chiquita" size="84" /></td>
</tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
   
<td colspan="3" valign="top"> <span class="etiquetas">Foto para la el interno (180 x 120):</span>
  <input name="foto_grande" type="file" id="foto_grande" size="84" /></td>
</tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr><td><span class="etiquetas">Foto leyenda:</span><br />
<input type="text" name="leyenda" size="84" /></td></tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr><td><span class="etiquetas">Autor</span><br />
<input type="text" name="autor" id="aut" size="84" /></td></tr>
<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>

</body>
</html>
