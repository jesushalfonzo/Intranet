<? include ('../../../extras/connect.php');
	  $link=Conectarse();
	  
	  $tirasql="SELECT * FROM hcm Order BY id";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $hcm_id=$row['id'];
	  $contenido_hcm=$row['contenido'];
	  $archivo_hcm=$row['archivo'];
	  $actualizacion=$row['actualizacion'];
	  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar NOTICIA TeleSUR en Contacto</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
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
<form name="myform" method="post" enctype="multipart/form-data" action="hcm.php" onsubmit="return submitForm();">
 <input type="hidden" name="id" value="<? echo"$hcm_id"; ?>" />
 <table width="515" border="0" cellspacing="0" cellpadding="3">
    
<tr><td><span class="etiquetas">Poliza de seguros HCM</span></td></tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr><tr>
	<tr>
	  <td><span class="etiquetas">Actualización al la fecha:</span></td>
	</tr>
	<tr><td><input type="text" name="actualizacion" size="50" value="<? echo"$actualizacion"; ?>" /></td></tr><tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr><tr>
      <td class="texto"><span class="etiquetas">Contenido</span><br />
	  		<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($contenido_hcm); ?>
			writeRichText('rte1', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script>

          <!--<textarea name="contenido_0_nota" cols="64" rows="20" id="contenido_nota"></textarea>-->		  </td>
    </tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Archivo&nbsp;</span> /
      <a href="<? if ($archivo_hcm!='') {echo "../../../../documentos/hcm/$archivo_hcm";} ?>"><? if ($archivo_hcm!=''){echo "$archivo_hcm";} else {echo "No hay archivo";} ?></a>	</td>
	</tr>
	
	<tr>
	<td class="texto">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="archivohcm" type="file"  size="68" />  </td>
	</tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
	
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
	
	