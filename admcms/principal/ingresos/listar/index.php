<? include ('../../../extras/connect.php');
								 
       
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Efemérides</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><span class="etiquetas">Nuevos ingresos</span></p>

<table width="647" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td width="175" bgcolor="#FFFFFF" class="etiquetas" align="center">Nombre</td>
	<td width="293" align="center" bgcolor="#FFFFFF" class="etiquetas">Departamento</td>
     
    <td width="53" align="center" bgcolor="#D4D0C8"></td>
	<td width="55" align="center" bgcolor="#D4D0C8"></td>
  </tr>
</table>
<?php
 $link=Conectarse();   
	   $tirasql="SELECT * FROM m_nuevos_ingresos, m_departamentos WHERE m_nuevos_ingresos_iddep = m_departamentos_id ORDER BY  m_nuevos_ingresos_id  DESC ";
	   $resultado=mysql_query($tirasql,$link); 
	$talnumero=mysql_num_rows($resultado);
	if($talnumero>=1){
  		while ($row = mysql_fetch_array($resultado)){ 
     $id=$row['m_nuevos_ingresos_id'];
     $nombre=$row['m_nuevos_ingresos_nombre'];
     $m_nuevos_ingresos_fecha =date("d-m-Y", strtotime($row['m_nuevos_ingresos_fecha']));
	 $departamento=$row['m_nuevos_ingresos_iddep'];
	 $m_nuevos_ingresos_cargo =$row["m_nuevos_ingresos_cargo"];
	 $m_nuevos_ingresos_foto =$row["m_nuevos_ingresos_foto"];
	 $m_departamentos_nombre =$row["m_departamentos_nombre"];
	 
	
	 
	 ?>
	

<table width="647" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td width="178" bgcolor="#FFFFFF"><? echo "$nombre"; ?>  </td>
	
	<td bgcolor="#FFFFFF" align="center" width="298"><? echo "$m_departamentos_nombre"; ?>  </td>
	
    <td width="49" align="center" bgcolor="#D4D0C8"><input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$id";?>','Editar')" /></td> 
    <td width="49" align="center" bgcolor="#D4D0C8"><input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$id";?>','Eliminar')" /></td>
  </tr>
</table>

<? } 

}
else {
echo"<p class='etiquetas'>No existen elementos agregados</p>";

} ?>
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
		if(confirm("¿Esta seguro que desea borrar este registro?")) {
		
		//alert("BORRO"); 
		window.location = "borrar/index.php?clx=" + codigo +""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	}
	}
}
</script>
