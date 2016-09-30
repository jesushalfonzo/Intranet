<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Perfiles</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? 
	   $link=Conectarse();   
	   $tirasql="select * from perfiles order by id desc";
       $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $perfil_id=$row['id'];
     $perfil_titulo=$row['titulo'];
	 $perfil_sumario=$row['sumario'];
	 
?>
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
    <tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "$perfil_titulo"; ?>  </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$perfil_id";?>','Editar')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$perfil_id";?>','Eliminar')" />
</td>
<td>
<input name="fotos" type="submit" class="pequeno" id="fotos" value="Fotos"  onClick="TomarValor('<? echo "$perfil_id";?>','fotos')" />
</td>
<td>
<input name="listar_fotos" type="submit" class="pequeno" id="listar_fotos" value="Listar Fotos"  onClick="TomarValor('<? echo "$perfil_id";?>','listar_fotos')" />
</td>
        </tr>
      </table>
</td>
    </tr>
</table>
<hr align="left" width="515" size="1" noshade="noshade" />
<? } ?>
</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
	
		if (Accion=="Eliminar") {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	if (Accion=="fotos") {
	window.location = "fotos/agregar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		if (Accion=="listar_fotos") {
	window.location = "fotos/listar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
}
</script>