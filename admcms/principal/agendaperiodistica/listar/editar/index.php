<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	 $id=$_GET["clx"];
	  
	  $tirasql="SELECT * FROM eventos where id = '$id'";
	// echo"$tirasql";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	   $id=$row['id'];
     $contenido=$row['descripcion'];
     $fecha=$row['fecha'];
	 $hora=$row['hora'];
	 $lugar=$row['lugar'];
	 $convoca=$row['institucion'];
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
  <!--DWLayoutTable-->
<tr>
<td  colspan="2" valign="top" class="texto"><span class="etiquetas">Agenda Periodistica (Editar)<br /><br />

<input type="hidden" name="id" value="<? echo "$id";?>">
</span></td>
</tr>
<tr>
<td width="83" class="etiquetas"><span class="etiquetas">Convoca </span></td>
<td width="420"><input name="titulo" type="text" class="texto" value="<? echo "$convoca";?>" size="80" /></td>
</tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Evento </span> </td>
<td><textarea name="contenido" id="cont" cols="64" rows="5"><? echo "$contenido";?></textarea> </td>
</tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto" align="left"><span class="etiquetas">Fecha </span></td> 
<td><input type="text" name="fecha" class="texto" value="<? echo "$fecha";?>" readonly="yes"   />&nbsp;<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a></td>
</tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr><td class="texto"><span class="etiquetas">Hora</span></td>
<td><input type="text" name="hora" id="hora" class="texto" value="<? echo "$hora";?>" /></td>
</tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
  <td class="texto"><span class="etiquetas">Lugar</span></td>
  <td><input type="text" name="lugar" id="lugar" class="texto" value="<? echo "$lugar" ?>" />  </td></tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
  
    <td height="30" colspan="2" align="center" valign="top" class="texto">    <input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>    
  </tr>
</table>
</form>



</body>
</html>
