
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guardar respuestas</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? 
$opciones=$_POST["opciones_enc"]; 
if (!is_numeric($opciones)){
echo "<script language='JavaScript'>alert('La cantidad de opciones debe ser expresada en números');</script>";
echo "<script language='JavaScript'>history.back();</script>";
}
$titulosucio=$_POST["titulo_enc"];
$titulo = str_replace('"', "''", "$titulosucio");
?>
<table width="821" height="35" border="0" cellpadding="0" cellspacing="0">
<tr><td height="20" colspan="2" bgcolor="#CCCCCC" class="etiquetas"><div align="center">Encuestas TeleSUR</div></td>
</tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="15" border="0" /></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0">
<form name="myform3" action="agregar.php" method="post">

<?php
  for($i=1;$i<=$opciones;$i++){
?>
  <tr>

    <td class="etiquetas"><span class="etiquetas">Opción <?php echo $i; ?>:&nbsp;</span></td>
    <td><input name="opcion<?php echo $i;?>" type="text" size="40"></td>
  </tr>
   <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="5" border="0" /></td>
<?php } ?>

  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="15" border="0" /></td>
</tr>
 <tr><td colspan="2" align="center">
<input name="titulo" type="hidden" value="<?php echo "$titulo";?>">
<input type="hidden" name="opcion_num" value="<?php echo "$opciones";?>">
<input name="Submit" type="submit" class="pequeno" value="Guardar respuestas"></td></tr>
</form>
</table>
</body>
</html>
