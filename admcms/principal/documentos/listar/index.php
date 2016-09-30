<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Documentos</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? 
	   $link=Conectarse();   
	   $tirasql="select * from documento order by id desc ";
       $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $iddoc=$row['id'];
     $titulodoc=$row['nombref'];
	 $archivo=$row['fichero'];
	 $marca=$row['marca'];
	 
?>
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
    <tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "$titulodoc"; ?>  </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$iddoc";?>','Editar')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$iddoc";?>','Eliminar')" />
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
	else {
		if (Accion=="Eliminar") {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	}
}
</script>