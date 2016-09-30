<?
$donde_viene=$_GET["clx"];
$id_nota=$_GET["ckl"];

include('../../../../../extras/connect.php');
$link=Conectarse();
if($donde_viene==''){

$SQL="SELECT m_noticias_despies_id FROM m_noticias_despies WHERE m_noticias_despies_idnota='$id_nota'";
$query=mysql_query($SQL, $link);
$mostrar=mysql_num_rows($query);
if($mostrar >0){

echo "<script language='JavaScript'>document.location.href='listar/index.php?ckl=$id_nota';</script>";
}
}
if ($donde_viene!=''){
$sql="SELECT titulo, contenido FROM noticia WHERE id='$donde_viene'";
}
else {
$sql="SELECT titulo, contenido FROM noticia WHERE id='$id_nota'";
}

$QUERY=mysql_query($sql, $link);
$row=mysql_fetch_array($QUERY);
$titulo=stripslashes ($row['titulo']);
$contenido=$row['contenido'];
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"  />
<title>Agregar Despies</title>
<link href="../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="521" bgcolor="#CCCCCC"><span class="etiquetas">Agregar Despies</span></td>
</tr>
<tr><td><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td><span class="etiquetas"><? echo $titulo ?></span></td></tr>
<tr><td><img src="../../../../../img/spc.gif" width="10" height="15" border="0" /></td></tr>
<tr><td><span class="texto"><? echo $contenido ?></span></td></tr>
</table>

<form name="agregardespies" action="agregar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_nota" value="<? if($donde_viene==''){ echo"$id_nota";} else {echo"$donde_viene";} ?>" />
<table cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="2"><span class="etiquetas">Datos del Despies</span></td></tr>
<tr> <td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Titulo:</span><br /><input type="text" size="70" name="titulo" /></td></tr>
<tr><td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr> <td colspan="2"><span class="etiquetas">Foto: (180 x 120)</span><br /><input type="file" name="foto" size="70" /></td></tr>
<tr> <td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr> <td><span class="etiquetas">Primera frase del parrafo:</span><br /><input type="text" name="guia" size="70" /></td>

<td><span class="etiquetas" style="margin-left:10px;">Alineación</span><br /><select name="alineacion" id="jumpMenu" style="margin-left:10px;">
  <option value="left">Izquierda</option>
  <option value="right">Derecha</option>
</select></td></tr>
<tr><td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Foto Leyenda:</span><br /><textarea name="leyenda" rows="2" cols="60"></textarea></td></tr>
<tr><td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Texto del despies:</span><br /><textarea name="texto_despies" cols="60" rows="4"></textarea></td></tr>
<tr><td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td align="center"><input type="submit" value="Agregar"  /></td></tr>
<tr><td colspan="2"><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
</table>
</form>

</body>
</html>
