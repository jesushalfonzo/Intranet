<? include ('../../../extras/connect.php');
$fechalistar=$_POST['fecha'];

if ($fechalistar!='') 
{
$separar = explode('/',$fechalistar);
$dia=$separar[0];
$mes=$separar[1];
$año=$separar[2];
$slach="/";
$fecha=$dia.$slach.$mes;
$mesenletras = mesletras($mes);
}
else {
if ($fechalistar=="") {

					$dia=date("d");
					$slach="/";
					$mes=date("m");
					$año= date("Y");
					$fecha=$dia.$slach.$mes;
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
<p><span class="etiquetas">Efemérides correspondientes a la fecha <? echo $dia." de ".$mesenletras; ?></span></p>
<?
 $link=Conectarse();   
	   $tirasql="SELECT LEFT( fecha, 5 ) , resumen, id, fecha FROM historico WHERE LEFT( fecha, 5 )='$fecha' and id <>'628' order by año";
       //echo"$tirasql";
	   $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $idefe=$row['id'];
     $contenidoefe=$row['resumen'];
     $fechaefe=$row['fecha'];
	 //$anoefe=$row['año'];
	 
	 
	
	 
	 ?>
	

<table width="515" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td bgcolor="#FFFFFF" align="left"><? echo "$contenidoefe"; ?>  </td>
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$idefe";?>','Editar')" /></td> 
    <td width="50" align="center" bgcolor="#D4D0C8"><input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$idefe";?>','Eliminar')" /></td>
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