<? include ('../../../extras/connect.php');
	  $link=Conectarse();


	 	
	
   $tirasql="select * from m_galerias order by m_galeria_id  desc ";

$result=mysql_query($tirasql, $link);
   
   ?>
   
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="715" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">

  <?  while ($row = mysql_fetch_array($result)){ 
     $m_galerias_id=$row['m_galeria_id'];
     $m_galerias_titulo=$row['m_galeria_titulo'];
     $m_galerias_fecha=strtotime ($row['m_galeria_fecha']);
     $m_galerias_estatus=$row['m_galeria_estatus'];
	 $fecha=date('d-m-Y H:i', $m_galerias_fecha);
	 
	 
  ?>

  <tr>
    <td bgcolor="#FFFFFF"><? echo stripslashes($m_galerias_titulo);?> </td>
    <td bgcolor="#FFFFFF"> <? echo $fecha; ?> </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="<? if($m_galerias_estatus=='A'){ echo"Editar"; } else{ echo"Editar / Aprobar";} ?>" onclick="TomarValor('<? echo" $m_galerias_id";?>','Editar')"/></td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Borrar" onClick="TomarValor('<? echo "$m_galerias_id";?>','Eliminar')"/></td>
	 <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="Fotos" onclick="TomarValor('<? echo"$m_galerias_id";?>','Fotos')"/></td>
  

  


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
		if (Accion=="Fotos") {
		window.location = "fotos/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		
	
}
</script>
