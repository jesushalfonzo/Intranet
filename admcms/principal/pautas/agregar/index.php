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

<span class="etiquetas">Pautas Post-producción / Dep de Edición</span><br /><br />

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
<td class="texto"><span class="etiquetas">Título / Semana</span>
  <input type="text" name="titulo_pauta" id="post_pro" size="84" />
</td>
</tr><!--
<tr><td>&nbsp;</td></tr>
<tr><td class="texto"><span class="etiquetas">Contenido / Tabla</span>
<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('contenido', 'Escribe aquí el contenido ...', 300, 300, true, false);
//-->
<!--</script></td></tr>-->

</tr>
<tr>
  <td class="texto"><span class="etiquetas">Archivo (550 px de ancho) </span>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
<input type="file" name="pauta_archivo" size="70" value="" />

</td></tr>
<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>

</body>
</html>
