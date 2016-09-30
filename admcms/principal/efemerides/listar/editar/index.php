<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	 $id=$_GET["clx"];
	  
	  $tirasql="SELECT * FROM historico where id = '$id'";
	// echo"$tirasql";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $idefe=$row["id"];
	  $descripcion=$row["resumen"];
	  $ano=$row["año"];
	  $fechaefe=$row["fecha"];
	  $descripcion = str_replace('"', "''",($row ['resumen']));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="cal2.js">
/*
Xin's Popup calendar script- Xin Yang (http://www.yxscripts.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use
*/
</script>
<script language="javascript" src="cal_conf2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar Efemérides</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="modificar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto"><span class="etiquetas">Efemérides<br /><br />

<input type="hidden" name="id" value="<? echo "$idefe";?>">
</span></td>
</tr>
<tr>
<td class="etiquetas">Título:&nbsp; <span class="etiquetas">
<input name="titulo" type="text" class="texto" value="<? echo "$descripcion";?>" size="70" />
</span></td>
</tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Año: </span> 
      &nbsp;&nbsp;&nbsp;
      <input type="text" name="ano" class="texto" value="<? echo "$ano";?>" size="15"  /></td>
</tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Fecha: </span> 
      <input type="text" name="fecha" class="texto" value="<? echo "$fechaefe";?>" size="15"  />&nbsp;<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>
</td>
</tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Actualizar"/>
  </tr>
</table>
</form>



</body>
</html>
