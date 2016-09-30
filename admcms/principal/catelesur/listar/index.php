<? include ('../../../extras/connect.php');
	  $link=Conectarse();


	 	
	
   $tirasql="SELECT * FROM m_catelesur  ORDER BY m_catelesur_id DESC ";

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
     $m_catelesur_id=$row['m_catelesur_id'];
	 $m_catelesur_titulo = str_replace('"', "''",($row ['m_catelesur_titulo']));
     $m_catelesur_titulo =stripslashes($m_catelesur_titulo );
     $m_catelesur_fecha=strtotime ($row['m_catelesur_fecha']);
	 
	 $fecha=date ('d-m-Y', $m_catelesur_fecha)
  ?>

  <tr>
    <td bgcolor="#FFFFFF"><? echo stripslashes($m_catelesur_titulo);?> </td>
    <td bgcolor="#FFFFFF"> <? echo $fecha; ?> </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="Editar" onclick="TomarValor('<? echo " $m_catelesur_id";?>','Editar')"/></td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="accion" type="submit" class="pequeno" value="Borrar" onClick="TomarValor('<? echo " $m_catelesur_id";?>','Eliminar')"/></td>

 
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
			if(confirm("¿Esta seguro que desea borrar este registro?")) {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		}
	
}
</script>
