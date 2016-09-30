<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Informacion de RRHH</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="550" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">
<? 
	   $link=Conectarse();   
	   $tirasql="select * from m_rhh_info order by m_rhh_info_id desc";
       $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $m_rhh_info_id=$row['m_rhh_info_id'];
     $m_rhh_info_titulo =stripslashes ($row['m_rhh_info_titulo']);
	 $m_rhh_info_aprobada=$row['m_rhh_info_aprobada'];
	 
?>
  <tr>
    <td width="481" bgcolor="#FFFFFF"><? echo $m_rhh_info_titulo;?> </td>
    <td width="64" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="<? if($m_rhh_info_aprobada=='NO'){ echo"Editar / Aprobar";} else { echo"Editar";} ?>" onclick="TomarValor('<? echo " $m_rhh_info_id";?>','Editar')"/></td>
    <td width="57" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Borrar" onClick="TomarValor('<? echo " $m_rhh_info_id";?>','Eliminar')"/></td>

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
}
</script>