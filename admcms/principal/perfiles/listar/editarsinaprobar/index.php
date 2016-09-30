<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $idperfil=$_GET["clx"];
	  $tirasql="SELECT * FROM perfiles where id = '$idperfil'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $perfil_id=$row["id"];
	  $perfil_titulo= str_replace('"', "''",($row ['titulo']));
	  $perfil_sumario=$row["sumario"];
	  $perfil_contenido=$row["contenido"];
	  $perfil_autor=$row['autor'];
	  $perfil_fotoprincipal=$row['foto_principal'];
	  $perfil_leyenda_principal=$row['leyenda_principal'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar Perfil</title>
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
      <td class="texto"><input name="id_perfil" type="hidden" value="<? echo "$perfil_id"; ?>" /></td>
    </tr>
    
	<td class="texto"><span class="etiquetas">Nombre</span>
	<input name="titulo" type="" value="<? echo"$perfil_titulo"; ?>" size="70"/></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Sumario</span><br />
      <script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($perfil_sumario); ?>
			writeRichText('sumario', '<?=$content;?>', 300, 150, true, false);
			//-->
			</script> </td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td class="texto"><span class="etiquetas">Contenido</span><br />
	  		<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($perfil_contenido); ?>
			writeRichText('contenido', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script>

          <!--<textarea name="contenido_0_nota" cols="64" rows="20" id="contenido_nota"></textarea>-->		  </td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
	<tr><td><span class="etiquetas">Autor:</span><br /><input type="text" name="autor" size="84" value="<? echo"$perfil_autor"; ?>" /></td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	  <td><span class="etiquetas">Foto pagina principal: / </span><a href="<? if ($perfil_fotoprincipal!='') {echo "../../../../../imagenes/perfiles/$perfil_fotoprincipal";} ?>">
	    <? if ($perfil_fotoprincipal!=''){echo "$perfil_fotoprincipal";} else {echo "No hay archivo";} ?>
	  </a></td>
	</tr>
	<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input type="file" name="foto" size="84" /></td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	  <td><span class="etiquetas">leyenda Foto principal :</span><br />
	<input type="text" name="leyenda_principal" size="84" value="<? echo"$perfil_leyenda_principal"; ?>" /></td></tr>
	
	<tr><td align="center"><input type="submit" value="Actualizar" /></td></tr>
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
	
	