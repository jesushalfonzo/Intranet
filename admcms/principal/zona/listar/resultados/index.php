<?
   include ('../../../../extras/connect.php');
    $linky=Conectarse();
    $id_ultima=$_GET["clx"];
	$cuantos="SELECT * FROM m_tuzona WHERE m_tuzona_id='$id_ultima' LIMIT 0,1";
    $res = mysql_query($cuantos,$linky);
    $last=mysql_fetch_array($res);
    $id_ultima=$last["m_tuzona_id"];
    $titulo_ultima=$last["m_tuzona_titulo"];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSURtv.net - Encuestas anteriores</title>
<link href="../../../../../noticias/css/estilos.css" rel="stylesheet" type="text/css"/>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<body>

<table width="650" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="4"><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
</tr>
<tr><td bgcolor="#CCCCCC" colspan="4"><div class="divMargen10pxLat etiquetas">Resultados encuestas TeleSUR</div></td></tr>
<tr><td colspan="4"><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
</tr>
<tr>
  <td colspan="4"><div class="divMargen10pxLat etiquetas"><? echo"$titulo_ultima"; ?></div></td>
</tr>
<tr><td colspan="4"><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
</tr>
<tr><td width="184" ><div class="divMargen10pxLat etiquetas">Opción</div></td><td width="169" class="etiquetas">Gráfica</td>
<td width="92" class="etiquetas">Votos</td>
<td width="205" class="etiquetas">Porcentaje</td>
</tr>
<tr><td colspan="4"><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
</tr>
</table> 
<div class="divMargen10pxLat">
<? 
$SQLmaximo="SELECT SUM(r_tuzona_opciones_votos) FROM r_tuzona_opciones WHERE r_tuzona_opciones_idzona='$id_ultima'";

 $querymaximo=mysql_query($SQLmaximo, $linky);
 $maximo = mysql_result($querymaximo,0); 
 if($maximo==0){
 $maximo=1;
 }
$SQL_poll="select * from r_tuzona_opciones where r_tuzona_opciones_idzona='$id_ultima'  order by r_tuzona_opciones_id ASC";
 $QUERY=mysql_query($SQL_poll, $linky);
 while ($ROW=mysql_fetch_array($QUERY)){
 $opcion=$ROW["r_tuzona_opciones_opcion"];
 $numero=$ROW["r_tuzona_opciones_votos"];
 $porcentaje = round((( $numero / $maximo ) * 100),2); 
 $total=$total+$numero;
 ?>
                           
         <table width="507" border="0" cellspacing="0" cellpadding="0" >
		  <tr>
            <td width="169"><? echo $opcion; ?></td>
            <td width="157" bgcolor="#FFFFFF">
            <table width="<? echo $porcentaje; ?>%" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
              <tr>
                 <td background="<? echo"$ruta"; ?>/images/cab_progra_674_37_2.gif" style="background-color:#336EAC">&nbsp;</td>
              </tr>
            </table></td>
            <td width="79" align="center">&nbsp;<? echo"$numero"; ?></td>
            <td width="102" align="center">&nbsp;<? echo"$porcentaje"; ?>%</td>
          </tr>
		  
        </table>
		<div align="center" style="height:10px;">&nbsp;</div>
		<? } ?>
</div>
<div style="margin-top:20px; margin-left:10px;" ><span class="etiquetas">Total de votos: </span><? echo"$total"; ?></div>
<div style="margin-top:20px; margin-left:20px;" align="center"><input type="button" name="nada" value="Volver" onClick="TomarValor()" /></div>
 </body></head><script language="JavaScript"> 
function TomarValor(){
 	
		window.location = "../index.php"; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	
	
	
}
</script>