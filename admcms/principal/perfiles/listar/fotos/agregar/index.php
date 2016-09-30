<? include ('../../../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar fotos perfiles</title>
<script>
function valida_foto(){
    //valido el nombre
	validar=true;
    if (document.agregar.foto.value.length==0){
       alert("No hay foto seleccionada")
       document.agregar.foto.focus()
	  
	    return false;
	   }
	 	     
  return validar;
	      
	}

  </script>
<link href="../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
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
<img src="../../../../../../images/spc.gif" width="10" height="10" />
<form action="agregar_foto.php" name="agregar" method="post" enctype="multipart/form-data" onSubmit="return valida_foto();">
<table width="515" border="0" cellspacing="0" cellpadding="3">
  <!--DWLayoutTable-->
<tr><td colspan="4"><span class="etiquetas"> Perfil:</span></td></tr>
<tr>
<td height="29" colspan="4" class="etiquetas">
    
   <?
   $linky=Conectarse();
   $id_perfil=$_GET["clx"];
$tirasql_perfiles="select titulo from perfiles where id='$id_perfil'";
//echo"$tirasql_perfiles";
$res=mysql_query($tirasql_perfiles,$linky); 
$row = mysql_fetch_array($res);  
    $titulo_perfil=$row['titulo'];
  ?>
   <input type="hidden" name="id" value="<? echo"$id_perfil"; ?>" />
   <input type="text" name="titulo" size="78" value="<? echo"$titulo_perfil"; ?>" readonly="Yes" /></td>
</tr>
<tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
</tr>
<tr>
   
<td colspan="3" valign="top"> <span class="etiquetas">Foto: (180 x 120)</span>
  <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
  <input name="foto" type="file" size="64" /></td>
</tr>
 <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
 </tr>
  <tr>
  <td class="texto"><span class="etiquetas">Palabra 1</span><br />
  <input type="text" name="palabra_1" size="20" /></td>
  <td class="texto"><span class="etiquetas">Palabra 2</span><br />
  <input type="text" name="palabra_2" size="20"  /></td>
  <td class="texto"><span class="etiquetas">Palabra 3</span><br />
  <input type="text" name="palabra_3" size="20" /></td>
    </tr>
  <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td><tr>
  <tr><td height="25" colspan="4"><span class="etiquetas">Alinear la foto hacia la:&nbsp;</span>
      <select name="aling">
    <option>Izquierda</option>
	<option>Derecha</option>
	<option>Centro</option>
  </select></td><tr>
   <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td><tr>
     <td height="25" colspan="4"><span class="etiquetas">Foto leyenda: &nbsp;</span>
       <input type="text" name="foto_leyenda" size="78" /></td> 
  <tr>
  
    <td height="29" colspan="4" align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  <tr><td height="25" colspan="4"><img src="../../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
</table>
</form>

</body>
</html>
