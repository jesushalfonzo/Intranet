<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Informaci�n</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<p><b>Canal en Positivo</b></p>

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
<td class="texto"><span class="etiquetas">Nombre (remitente del mensaje)</span>
<input type="text" name="nombre" id="nombre_canal" size="84" />
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td class="texto"><span class="etiquetas">Sumario para el Home</span>
<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('sumario', 'Escribe aqu� el contenido ...', 300, 150, true, false);
//-->
</script></td></tr>
<tr>

<td class="texto"><span class="etiquetas"><br /><br />Contenido</span><br /><br />

<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('rte1', 'Escribe aqu� el contenido ...', 300, 250, true, false);
//-->
</script>
</td>
<tr><td>&nbsp;</td></tr>

<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
