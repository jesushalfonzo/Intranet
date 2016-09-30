<? include ('../../../../../../extras/connect.php');
$link=Conectarse();
$id_foto=$_GET["clx"];
$tira_foto="SELECT *FROM  m_galeria_nota  WHERE m_galeria_id='$id_foto'";
$query_nota=mysql_query($tira_foto, $link);
$fetch_foto=mysql_fetch_array($query_nota);
$titulo_mesmo=$fetch_foto['m_galeria_foto_titulo'];
$foto_mesma=$fetch_foto['m_galeria_foto_archivo'];
$leyenda_mesma=$fetch_foto['m_galeria_foto_leyenda'];
$id_nota=$fetch_foto['m_galeria_nota_id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UAgregar Galeria</title>
<link href="../../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" width="515">
<form name="myform" action="editar_foto.php" method="post" enctype="multipart/form-data">
<tr><td class="etiquetas">Foto galeria</td></tr>
<tr><td>
<img src="../../../../../../../images/spc.gif" width="10" height="10" border="0" />
<input type="hidden" name="id_foto" id="id" value="<? echo"$id_foto";?>" />
<input type="hidden" name="id_nota" id="id_not" value="<? echo"$id_nota";?>" />
</td></tr>



	<tr><td><img src="../../../../../../../images/spc.gif" width="10" height="10" border="0" /></td>
	</tr>
	<!--<tr><td><span class="etiquetas">Titulo de la foto</span><br /><input type="text" size="70" name="titulo_foto" id="titlle" value="<? echo"$titulo_mesmo"; ?>" /></td></tr>
	<tr><td><img src="../../../../../../../images/spc.gif" width="10" height="10" border="0" /></td>
	</tr>-->
	<tr><td><? if ($foto_mesma!='') {?> <img src="../../../../../../../imagenes/galerias/<? echo"$foto_mesma"; } else { echo"No hay foto"; } ?>" /></td></tr>
	<tr>
	  <td><span class="etiquetas">Foto archivo</span><br />
	    <input type="file" name="foto_archivo" size="60" /></td></tr>
		<tr><td><img src="../../../../../../../images/spc.gif" width="10" height="10" border="0" /></td>
		</tr>
		<tr><td><span class="etiquetas">Foto leyenda</span><br /><textarea name="foto_leyenda" cols="54" rows="2" id="leyenda"><? echo"$leyenda_mesma"; ?></textarea></td></tr>
		<tr><td><img src="../../../../../../../images/spc.gif" width="10" height="10" border="0" /></td>
		</tr>
		<tr><td align="center"><input type="submit" name="enviar" value="Guardar cambios" /></td></tr>
</form></table>

</body>
</html>
