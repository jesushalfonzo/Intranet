<? include ('../../../extras/connect.php');
$fechacumple=$_POST['fecha'];

if (isset($_POST["mes"])){ $mesformulario=$_POST["mes"]; } else{ $mesformulario=$_GET["tkl"]; }

if ($mesformulario=='') 
{
$mesformulario= date("m");

}

$mesenletras = mesLetras($mesformulario);
 
			
								 
       
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Efemérides</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><span class="etiquetas">Cumpleañeros del mes de <? echo $mesenletras; ?></span></p>

<table width="647" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td width="175" bgcolor="#FFFFFF" class="etiquetas" align="center">Nombre</td>
	<td width="293" align="center" bgcolor="#FFFFFF" class="etiquetas">Departamento</td>
    <td width="35" align="center" bgcolor="#D4D0C8" class="etiquetas">Día</td> 
    <td width="53" align="center" bgcolor="#D4D0C8"></td>
	<td width="55" align="center" bgcolor="#D4D0C8"></td>
  </tr>
</table>
<?
 $link=Conectarse();   
	   $tirasql="SELECT m_cumpleaneros_id, m_cumpleaneros_nombre, m_cumpleaneros_direccion, m_cumpleaneros_dia, m_cumpleaneros_mes, m_cumpleaneros_foto, m_departamentos.*  FROM m_cumpleaneros,  m_departamentos WHERE m_cumpleaneros_mes='$mesformulario' AND m_departamentos_id=m_cumpleaneros_direccion ORDER BY m_cumpleaneros_dia ASC ";

	   $resultado=mysql_query($tirasql,$link); 
	$talnumero=mysql_num_rows($resultado);
	if($talnumero>=1){
  while ($row = mysql_fetch_array($resultado)){ 
     $id=$row['m_cumpleaneros_id'];
     $nombre=$row['m_cumpleaneros_nombre'];
     $fecha=$row['fecha'];
	 $departamento=$row['m_cumpleaneros_direccion'];
	 $m_cumpleaneros_dia=$row["m_cumpleaneros_dia"];
	 $m_cumpleaneros_mes=$row["m_cumpleaneros_mes"];
	 $m_cumpleaneros_foto=$row["m_cumpleaneros_foto"];
	 $m_departamentos_nombre=$row["m_departamentos_nombre"];
	 
	
	 
	 ?>
	

<table width="647" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td width="178" bgcolor="#FFFFFF"><? echo "$nombre"; ?>  </td>
	
	<td bgcolor="#FFFFFF" align="center" width="298"><? echo "$m_departamentos_nombre"; ?>  </td>
	<td width="37" bgcolor="#D4D0C8" align="center"><? echo "$m_cumpleaneros_dia"; ?>  </td>
    <td width="49" align="center" bgcolor="#D4D0C8"><input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$id";?>','Editar')" /></td> 
    <td width="49" align="center" bgcolor="#D4D0C8"><input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$id";?>','Eliminar', '<?php echo $m_cumpleaneros_mes; ?>')" /></td>
  </tr>
</table>

<? } 

}
else {
echo"<p class='etiquetas'>No existen cumpleañeros agregados para este mes</p>";

} ?>
</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion, mes){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
	else {
		
		if (Accion=="Eliminar") {
		if(confirm("¿Esta seguro que desea borrar este registro?")) {
		
		//alert("BORRO"); 
		window.location = "borrar/index.php?clx=" + codigo + "&mes="+ mes +""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	}
	}
}
</script>
<?
function mesLetras($num)
{
switch ($num)
{
case 01: $month = "Enero"; break;
case 02: $month = "Febrero"; break;
case 03: $month = "Marzo"; break;
case 04: $month = "Abril"; break;
case 05: $month = "Mayo"; break;
case 06: $month = "Junio"; break;
case 07: $month = "Julio"; break;
case 08: $month = "Agosto"; break;
case 09: $month = "Septiembre"; break;
case 10: $month = "Octubre"; break;
case 11: $month = "Noviembre"; break;
case 12: $month = "Diciembre"; break;
}
return $month;
}

?>