<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $id_lectura=$_GET["clx"];
	  $tirasql="SELECT * FROM lecturas where id_lectura = '$id_lectura'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $id=$row['id_lectura'];
	  $titul = str_replace('"', "''",($row ['titulo_lectura']));
	  $titulo=stripslashes($titul);
	  $archivo=$row['archivo_lectura'];
	  $subtitulo = str_replace('"', "''",($row ['subtitulo_lectura']));
	// $subtitulo=(rteSafe($row['subtitulo_lectura']));
	 $autor=$row['autor_lectura'];
	 
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar Manuales</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body topmargin="3">
<form name="myform" method="post" enctype="multipart/form-data" action="editarlectura.php" onsubmit="return submitForm();">
  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto">
	  <input name="id" type="hidden" value="<? echo "$id"; ?>" /></td>
    </tr>
    
	
	<tr>
	<td class="texto"><span class="etiquetas">Titulo</span><br />
	<input name="titulo" type="text" value="<? echo"$titulo"; ?>" size="84"/></td>
	</tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	  <td class="texto"><span class="etiquetas">Sub-titulo </span></td>
	</tr>
	<tr><td><input type="text" name="subtitulo" size="84" value="<? echo"$subtitulo"; ?>" /></td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
   <td colspan="2" class="etiquetas"><span class="etiquetas">Autor Lectura</span>:
     <input type="text" name="autor" size="65" value="<? echo"$autor"; ?>" /></td></tr> 
	 <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
        <td class="texto"><span class="etiquetas">Archivo&nbsp;</span> /
      <a href="<? if ($archivo!='') {echo "../../../../../imagenes/lecturasrecomendadas/$archivo";} ?>"><? if ($archivo!=''){echo "$archivo";} else {echo "No hay archivo";} ?></a>	</td>
      </tr>
	 


<tr>
	<td class="texto">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="archivo" type="file"  size="68" />  </td>
	</tr>
	
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
	
	<td align="center"><input type="submit" value="Actualizar" /></td></tr>
  </table>
</form>
	</body>
	</html>
	
	<? function rteSafe($strText) {  
   //returns safe code for preloading in the RTE  
   $tmpString = $strText;  
     
   //convert all types of single quotes  
   $tmpString = str_replace(chr(145), chr(39), $tmpString);  
   $tmpString = str_replace(chr(146), chr(39), $tmpString);  
   //$tmpString = str_replace("'", "'", $tmpString);  
   $tmpString = str_replace("'", "&#39;", $tmpString);
    
   //convert all types of double quotes  
   $tmpString = str_replace(chr(147), chr(34), $tmpString);  
   $tmpString = str_replace(chr(148), chr(34), $tmpString);  
//   $tmpString = str_replace("\"", "\"", $tmpString);  
     
   //replace carriage returns & line feeds  
   $tmpString = str_replace(chr(10), " ", $tmpString);  
   $tmpString = str_replace(chr(13), " ", $tmpString);  
     
   return $tmpString;  
}//function rteSafe($strText)
?>
