<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Parrilla en bruto</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? 
	   $link=Conectarse();   
	   $tirasql="select * from pautas_post order by id_pauta desc";
       $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $idpauta=$row['id_pauta'];
     $titulopauta=$row['titulo_pauta'];
	 //$archivopauta=$row['archivo'];
	 
?>
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
    <tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "$titulopauta"; ?>  </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$idpauta";?>','Editar')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$idpauta";?>','Eliminar')" />
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