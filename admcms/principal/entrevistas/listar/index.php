<? include ('../../../extras/connect.php');
	  $link=Conectarse();


	 	
	
   $tirasql="select m_entrevistas_id, m_entrevistas_titulo, m_entrevistas_fecha, m_entrevistas_aprobado from m_entrevistas  order by m_entrevistas_id desc ";

    $result=mysql_query($tirasql, $link);
   //echo"$tirasql";
   
   ?>
   
	
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Entrevista TeleSUR</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="715" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">

  <?  while ($row = mysql_fetch_array($result)){ 
     $m_entrevistas_id=$row['m_entrevistas_id'];
	  $noticia_titul = str_replace('"', "''",($row ['m_entrevistas_titulo']));
     $m_entrevistas_titulo=stripslashes($noticia_titul);
     $m_entrevistas_fecha=strtotime ($row['m_entrevistas_fecha']);
	 $m_entrevistas_aprobado=$row['m_entrevistas_aprobado'];
	 
	 $fecha=date ('d-m-Y', $m_entrevistas_fecha)
  ?>

  <tr>
    <td bgcolor="#FFFFFF"><? echo stripslashes($m_entrevistas_titulo);?> </td>
    <td bgcolor="#FFFFFF"> <? echo $fecha; ?> </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="<? if($m_entrevistas_aprobado=='SI'){ echo"Editar"; } else{ echo"Editar / Aprobar";} ?>" onclick="TomarValor('<? echo " $m_entrevistas_id";?>','Editar')"/></td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Borrar" onClick="TomarValor('<? echo " $m_entrevistas_id";?>','Eliminar')"/></td>

 
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
