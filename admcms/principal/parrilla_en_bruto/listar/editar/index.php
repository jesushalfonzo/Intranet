<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idparrilla=$_GET["clx"];
	  $tirasql="SELECT * FROM parrilla where id = '$idparrilla'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $parrilla_id=$row['id'];
	  $parrilla_titul = str_replace('"', "''",($row ['titulo']));
	  $parrilla_titulo=stripslashes($parrilla_titul);
	  $parrilla_archivo=$row['archivo'];
	  $archivo_grande=$row['archivo_grande'];
	 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar Parrilla en bruto</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="3">
<form name="myform" method="post" enctype="multipart/form-data" action="editarparrilla.php" onsubmit="return submitForm();">
  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto">
	  <input name="id" type="hidden" value="<? echo "$parrilla_id"; ?>" /></td>
    </tr>
    
	
	<tr>
	<td class="texto"><span class="etiquetas">Titulo</span><br />
	<input name="titulo" type="text" value="<? echo"$parrilla_titulo"; ?>" size="84"/></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
            <td class="texto"><span class="etiquetas">Archivo (550x 900) &nbsp;</span> /
      <a href="<? if ($parrilla_archivo!='') {echo "../../../../../documentos/parrillas/$parrilla_archivo";} ?>"><? if ($parrilla_archivo!=''){echo "$parrilla_archivo";} else {echo "No hay archivo";} ?></a>	</td>
      </tr>
	
	<tr>
	<td class="texto">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="archivo" type="file"  size="68" />  </td>
	</tr>
	
	 <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td>
	 </tr>
<tr>
  <td><span class="etiquetas">Archivo jpg para ampliar: (800 px de ancho) </span>/
      <a href="<? if ($archivo_grande!='') {echo "../../../../../documentos/parrillas/$archivo_grande";} ?>"><? if ($archivo_grande!=''){echo "$archivo_grande";} else {echo "No hay archivo";} ?></a><br />
  
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="parrilla_grande" type="file" id="parrilla_grande" size="70" /> </td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
	
	<tr>
	
	<td align="center"><input type="submit" value="Actualizar" /></td></tr>
	</table>
</form>
	</body>
	</html>
	
	