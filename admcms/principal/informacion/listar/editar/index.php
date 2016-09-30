<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $idinf=$_GET["clx"];
	  $tirasql="SELECT * FROM informacion where id = '$idinf'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $inf_id=$row["id"];
	  $inf_titulo= str_replace('"', "''",($row ['titulo']));
	  $inf_sumario=$row["sumario"];
	  $inf_contenido=$row["contenido"];
	  $inf_img_peq=$row["img_especial_home"];
	  $inf_img_GRA=$row["img_especial_interno"];
	 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar NOTICIA TeleSUR en Contacto</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="3">
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
<form name="myform" method="post" enctype="multipart/form-data" action="modificar.php" onsubmit="return submitForm();">
  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto"><input name="id_nota" type="hidden" value="<? echo "$inf_id"; ?>" /></td>
    </tr>
	<tr> <td class="texto"><span class="etiquetas">Titulo</span><br />
	<input type="text" name="titulo" size="70" value="<? echo "$inf_titulo"; ?>" /></td></tr>
    
	<tr><td><img src="../../../../img/spc.gif" width="10" height="20" /></td></tr>
		<tr>
      <td class="texto"><span class="etiquetas">Sumario para pagina principal</span><br />
      <script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($inf_sumario); ?>
			writeRichText('sumario', '<?=$content;?>', 300, 150, true, false);
			//-->
			</script> </td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="20" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Contenido</span><br />
	  		<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($inf_contenido); ?>
			writeRichText('rte1', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script>

          <!--<textarea name="contenido_0_nota" cols="64" rows="20" id="contenido_nota"></textarea>-->		  </td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="20" /></td></tr>
	<tr><td class="etiquetas" bgcolor="#999999">Solo para Imagenes  especiales</td>
	<tr><td bgcolor="#999999"><img src="../../../../img/spc.gif" width="10" height="20" /></td></tr>
	<tr>
  <td bgcolor="#999999"><span class="etiquetas">Imagen especial Para la pagina principal ( 245 x 235) / </span><a href="<? if ($inf_img_peq!='') {echo "../../../../../imagenes/diasespeciales/$inf_img_peq";} ?>"><? if ($inf_img_peq!=''){echo "$inf_img_peq";} else {echo "No hay archivo";} ?></a><br />
  <input type="file" name="imagen_especial_home" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
	<tr>
  <td bgcolor="#999999"><span class="etiquetas">Imagen especial Para el interno (500 px de ancho) /</span><a href="<? if ($inf_img_GRA!='') {echo "../../../../../imagenes/diasespeciales/$inf_img_GRA";} ?>"><? if ($inf_img_GRA!=''){echo "$inf_img_GRA";} else {echo "No hay archivo";} ?></a><br />
  <input type="file" name="imagen_especial_interno" size="70" id="img" /> </td>
</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
	<tr>
	
	<td align="center"><input type="submit" value="Actualizar" /></td></tr>
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
	
	