<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idnoticia=$_GET["clx"];
	  $tirasql="SELECT * FROM noticia where id = '$idnoticia'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $noticia_id=$row['id'];
	  $noticia_contenido=$row['contenido'];
	  $noticia_imagen=$row['imagen'];
	  $noticia_sumario=$row['sumario'];
	  $noticia_fecha=$row['fecha'];
	  //$noticia_leyenda=$row['leyenda'];
	  $noticia_leyenda = str_replace('"', "''",($row ['leyenda']));
	  $noticia_titul = str_replace('"', "''",($row ['titulo']));
	  $noticia_titulo=stripslashes($noticia_titul);
	  $noticia_autor=$row['autor'];
	  $aprobado=$row['aprobado'];
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
<form name="myform" method="post" enctype="multipart/form-data" action="editarnoticia.php" onsubmit="return submitForm();">
  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto"><span class="etiquetas">Fecha</span><br />
	  <input name="id_nota" type="hidden" value="<? echo "$noticia_id"; ?>" /></td>
    </tr>
    
	<tr>
	<td><input type="text" name="fecha" size="15" value="<? echo"$noticia_fecha"; ?>" /></td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	<td class="texto"><span class="etiquetas">Titulo</span><br />
	<input name="titulo" type="" value="<? echo"$noticia_titulo"; ?>" size="84"/></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Sumario</span><br />
      <textarea name="sumario" cols="64" rows="5" id="sumarionota"><? echo"$noticia_sumario"; ?></textarea> </td>
    </tr>
	
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr><tr>
      <td class="texto"><span class="etiquetas">Contenido</span><br />
	  		<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($noticia_contenido); ?>
			writeRichText('rte1', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script>

          <!--<textarea name="contenido_0_nota" cols="64" rows="20" id="contenido_nota"></textarea>-->		  </td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Imágen&nbsp; (220 X 160)</span> /
      <a href="<? if ($noticia_imagen!='') {echo "../../../../../imagenes/$noticia_imagen";} ?>"><? if ($noticia_imagen!=''){echo "$noticia_imagen";} else {echo "No hay archivo";} ?></a>	</td>
	</tr>
	
	<tr>
	<td class="texto">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="foto_nota" type="file"  size="68" />  </td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	<td class="texto"><span class="etiquetas">Foto leyenda</span><br />
	<input type="text" id="leyenda" name="leyenda" value="<? echo"$noticia_leyenda"; ?>" size="84" /></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	<td class="texto"><span class="etiquetas">Autor</span><br />
	<input type="text" id="escritor" name="autor" value="<? echo"$noticia_autor"; ?>" size="84" /></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	
	<td align="center"><input type="submit" name="boton" value="Actualizar" /><? if($aprobado!='SI'){ ?><input type="submit" style="margin-left:+10px;" name="boton" value="Actualizar/Aprobar" /> <? } ?><input type="submit" name="boton" value="Despies" style="margin-left:+10px;"/></td></tr>
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
	
	