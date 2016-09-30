<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $id=$_GET["clx"];
	  $tirasql="SELECT * FROM manuales where id = '$id'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);
	  
	  $id=$row['id'];
	  $titul = str_replace('"', "''",($row ['titulo']));
	  $titulo=stripslashes($titul);
	  $archivo=$row['archivo'];
	 $sumario=$row['sumario'];
	 
	
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
<form name="myform" method="post" enctype="multipart/form-data" action="editarmanual.php" onsubmit="return submitForm();">
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
	<tr><td class="texto"><span class="etiquetas">Sumario</span></td></tr>
	<tr><td><textarea name="sumario" cols="64" rows="5" id="sumarionota"><? echo"$sumario"; ?></textarea></td></tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
        <td class="texto"><span class="etiquetas">Archivo&nbsp;</span> /
      <a href="<? if ($archivo!='') {echo "../../../../../manuales_de_prensa/$archivo";} ?>"><? if ($archivo!=''){echo "$archivo";} else {echo "No hay archivo";} ?></a>	</td>
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
	
	