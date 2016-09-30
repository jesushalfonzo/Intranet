<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idpauta=$_GET["clx"];
	  $tirasql="SELECT * FROM pautas_post where id_pauta = '$idpauta'";
	  
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $pauta_id=$row['id_pauta'];
	  $pauta_contenido=$row['contenido_pauta'];
	  $pauta_titul = str_replace('"', "''",($row ['titulo_pauta']));
	  $pauta_titulo=stripslashes($pauta_titul);
	  $pauta_archivo=$row['archivo_pauta'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar Información</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<span class="etiquetas">Pautas Post-producción / Dep de Edición</span><br /><br />

<form id="form1" name="formulario" method="post" action="editar.php" onsubmit="return submitForm();" enctype="multipart/form-data"><!-- -->
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
<input type="hidden" name="id_pauta" id="id" value="<? echo"$idpauta"; ?>" />
  <input type="text" name="titulo_pauta" id="post_pro" size="84" value="<? echo"$pauta_titulo"; ?>" />
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<!--<tr><td class="texto"><span class="etiquetas">Contenido / Tabla</span>
<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($pauta_contenido); ?>
			writeRichText('contenido', '<?=$content;?>', 300, 250, true, false);
			
			</script>
</td></tr>
<tr><td><img src="../../../image/spc.gif" height="10" width="10" /></td>
</tr>//-->
<tr>
  <td class="texto"><span class="etiquetas">Archivo(550 px) </span>
<a href="<? if ($pauta_archivo!='') {echo "../../../../../documentos/pautas_edicion/$pauta_archivo";} ?>"><? if ($pauta_archivo!=''){echo "$pauta_archivo";} else {echo "No hay archivo";} ?></a>
<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
<input type="file" name="pauta_archivo" size="70" value="" />

</td></tr>
<tr><td align="center"><input type="submit" value="Agregar"/>
</table>
</form>

</body>
</html>
<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	// POR MILA: $tmpString = str_replace('"', "&#39;&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>
	
	