<? include ('../../../extras/connect.php');
	  $link=Conectarse();


	 	
	
   $tirasql="select id, titulo, fecha,aprobado  from noticia  order by id desc ";

$result=mysql_query($tirasql, $link);
   //echo"$tirasql";
   
   ?>
   
	
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar NOTICIAS TeleSUR en Contacto</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="715" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">

  <?  while ($row = mysql_fetch_array($result)){ 
     $idnoticia=$row['id'];
     $noticia_titulo=$row['titulo'];
    // $noticia_contenido=$row['contenido'];
     $noticia_fecha=$row['fecha'];
	 $aprobado=$row['aprobado'];
	 
  ?>

  <tr>
    <td bgcolor="#FFFFFF"><? echo stripslashes($noticia_titulo);?> </td>
    <td bgcolor="#FFFFFF"> <? echo $noticia_fecha; ?> </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="<? if($aprobado=='SI'){ echo"Editar"; } else{ echo"Editar / Aprobar";} ?>" onclick="TomarValor('<? echo " $idnoticia";?>','Editar')"/></td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Borrar" onClick="TomarValor('<? echo " $idnoticia";?>','Eliminar')"/></td>
	<td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Agregar Galeria" onClick="TomarValor('<? echo " $idnoticia";?>','Galeria')"/></td>
  	<td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Listar Galeria" onClick="TomarValor('<? echo " $idnoticia";?>','Listar_g')"/></td>
  </tr>


  <? } ?>
</table>
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
		if (Accion=="Galeria") {
		window.location = "galeria/agregar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	if (Accion=="Listar_g") {
		window.location = "galeria/listar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
}
</script>
