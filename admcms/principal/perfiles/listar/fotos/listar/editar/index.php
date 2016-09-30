<? include ('../../../../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar fotos perfiles</title>
<link href="../../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>

<p><span class="etiquetas">Fotos perfiles</span></p>	
<img src="../../..//g/spc.gif" width="10" height="10" />
<form action="editar_foto.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
  <!--DWLayoutTable-->
<tr><td colspan="4"><span class="etiquetas"> Perfil:</span></td></tr>
<tr>
<td height="29" colspan="4" class="etiquetas">
    
   <?
   $linky=Conectarse();
   $id_perfil=$_GET["clx"];
   //echo"$id_perfil";
$tirasql_perfiles="select *from fotos_perfiles where id_fotos='$id_perfil'";
//echo"$tirasql_perfiles";
$res=mysql_query($tirasql_perfiles,$linky); 
$row = mysql_fetch_array($res);  
    
	$palabra_1=$row['palabra_1'];
	$palabra_2=$row['palabra_2'];
	$palabra_3=$row['palabra_3'];
	$alineacion=$row['alineacion'];
	$foto_leyenda=$row['foto_leyenda'];
	$foto=$row['ruta_imagen'];
	$id_fotos=$row['id_fotos'];
	$id_perf=$row['id_perfil'];
	
  ?>
  <? 
$tirasql="select titulo from perfiles where id='$id_perf'";
//echo"$tirasql";
$resultado=mysql_query($tirasql,$linky); 
$rowpud = mysql_fetch_array($resultado);  
    $titulo_perfil=$rowpud['titulo']; ?>
	
   <input type="hidden" name="id" value="<? echo"$id_fotos"; ?>" />
   <input type="text" name="titulo" size="78" value="<? echo"$titulo_perfil"; ?>" readonly="Yes" /></td>
</tr>
<tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
</tr>
<tr>
   
<td colspan="3" valign="top"> <span class="etiquetas">Foto: (180 x 120)</span>
<img src="../../../../../../../imagenes/perfiles/<? echo"$foto"; ?>" />
<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
  <input name="foto" type="file" size="64" /></td>
</tr>
 <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
 </tr>
  <tr>
  <td class="texto"><span class="etiquetas">Palabra 1</span><br />
  <input type="text" name="palabra_1" size="20" value="<? echo"$palabra_1"; ?>" /></td>
  <td class="texto"><span class="etiquetas">Palabra 2</span><br />
  <input type="text" name="palabra_2" size="20" value="<? echo"$palabra_2"; ?>" /></td>
  <td class="texto"><span class="etiquetas">Palabra 3</span><br />
  <input type="text" name="palabra_3" size="20" value="<? echo"$palabra_3"; ?>" /></td>
    </tr>
  <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td><tr>
  <tr><td height="25" colspan="4"><span class="etiquetas">Alinear la foto hacia la:&nbsp;</span>
      <select name="aling">
	  							  <? if ($alineacion==left) { $alineacionespanis ="Izquierda"; }
	  								 if($alineacion==right) { $alineacionespanis="Derecha"; }
									 if ($alineacion==center) { $alineacionespanis="Centro"; } ?>
	  
	  
	 <option selected="selected"> <? echo"$alineacionespanis";?></option>
    <option>Izquierda</option>
	<option>Derecha</option>
	<option>Centro</option>
  </select></td><tr>
   <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td><tr>
     <td height="25" colspan="4"><span class="etiquetas">Foto leyenda: &nbsp;</span>
       <input type="text" name="foto_leyenda" size="78" value="<? echo"$foto_leyenda"; ?>" /></td> 
  <tr>
  
    <td height="29" colspan="4" align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
</table>
</form>

</body>
</html>
