<? include ('../../../extras/connect.php');
$fechacumple=$_POST['fecha'];

if ($fechacumple!='') 
{
$separar = explode('/',$fechalistar);
$dia=$separar[0];
$mes=$separar[1];
$año=$separar[2];
$slach="/";
$fecha=$mes.$slach.$año;
$mesenletras = mesletras($mes);
}
else {
if ($fechacumple=="") {

					$dia=date("d");
					$slach="/";
					$mes=date("m");
					$año= date("Y");
					$fecha=$mes.$slach.$año;
					$mesenletras = mesletras($mes);
}
}

 
					
								 
       
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Efemérides</title>

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><span class="etiquetas">Cumpleañeros del mes de <? echo $mesenletras." de ".$año; ?></span></p>
<?
 $link=Conectarse();   
	   $tirasql="SELECT RIGHT( fecha, 7 ), fecha, nombre, departamento, id  FROM cumpleanos WHERE RIGHT( fecha, 7 ) ='$fecha' order by departamento  ";
       //echo"$tirasql";
	   $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $id=$row['id'];
     $nombre=$row['nombre'];
     $fecha=$row['fecha'];
	 $departamento=$row['departamento'];
	 
	 
	
	 
	 ?>
	

<table width="515" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td bgcolor="#FFFFFF"><? echo "$nombre"; ?>  </td>
	<td bgcolor="#FFFFFF" align="center" width="150"><? echo "$departamento"; ?>  </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$id";?>','Editar')" /></td> 
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$id";?>','Eliminar')" /></td>
     </tr>
 </table>

<? }  ?>
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
<?
function mesletras($mesnumero) {

	$mesexp=$mesnumero;
	
	if ($mesexp=="01") {
$mesexp=Enero; 
}
 
if  ($mesexp=="02") {
$mesexp=Febrero;
} 
if ($mesexp=="03") {
$mesexp=Marzo;
} 

if ($mesexp=="04") {
$mesexp=Abril;
} 
if ($mesexp=="05") {
$mesexp=Mayo;
} 
if ($mesexp=="06") {
$mesexp=Junio;
} 
if ($mesexp=="07") {
$mesexp=Julio;
} 
if ($mesexp=="08") {
$mesexp=Agosto;
} 
if ($mesexp=="09") {
$mesexp=Septiembre;
} 
if ($mesexp=="10") {
$mesexp=Octubre;
} 
if ($mesexp=="11") {
$mesexp=Noviembre;
} 
if ($mesexp=="12") {
$mesexp=Diciembre;
} 

	
	return $mesexp;
	
} ?>