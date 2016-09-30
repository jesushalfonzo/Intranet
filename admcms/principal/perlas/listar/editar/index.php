<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idperlas=$_GET["clx"];
	  $tirasql="SELECT * FROM perlas  where id_perlas= '$idperlas'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $perlas_id=$row['id_perlas'];
	  $perlas_titul = str_replace('"', "''",($row ['titulo_perlas']));
	  $perlas_titulo=stripslashes($perlas_titul);
	  $perlas_archivo=$row['archivo_perlas'];
	 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editarperlas</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="3">
<form name="myform" method="post" enctype="multipart/form-data" action="editarperlas.php" onsubmit="return submitForm();">
  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto">
	  <input name="id_perla" type="hidden" value="<? echo "$perlas_id"; ?>" /></td>
    </tr>
    
	
	<tr>
	<td class="texto"><span class="etiquetas">Titulo</span><br />
	<input name="titulo_perla" type="text" value="<? echo"$perlas_titulo"; ?>" size="84"/></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
        <td class="texto"><span class="etiquetas">Archivo&nbsp;</span> /
      <a href="<? if ($perlas_archivo!='') {echo "../../../../../perlas/$perlas_archivo";} ?>"><? if ($perlas_archivo!=''){echo "$perlas_archivo";} else {echo "No hay archivo";} ?></a>	</td>
      </tr>
	
	<tr>
	<td class="texto">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="archivo_perlas" type="file"  size="68" />  </td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
	
	<tr>
	
	<td align="center"><input type="submit" value="Actualizar" /></td></tr>
	</table>
</form>
	</body>
	</html>
	
	