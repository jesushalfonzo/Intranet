<? $id_tuvoz=$_GET["clx"]; ?>
<? include ('../../../../extras/connect.php');
$linky=Conectarse();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="650" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="4"><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
</tr>
<tr><td bgcolor="#CCCCCC" colspan="4"><div class="divMargen10pxLat etiquetas">Resultados Tu VOZ </div></td></tr>
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
 $maximo = 0;
 $SQLmaximo="SELECT tuvoz_si, tuvoz_no, (tuvoz_si + tuvoz_no) as valor FROM tuvoz where tuvoz_id='$id_tuvoz'";
 
 $querymaximo=mysql_query($SQLmaximo, $linky);
 $r = mysql_fetch_array($querymaximo); 
 $maximo=$r['valor'];
 $i=1;
 $SQL="select * from tuvoz where tuvoz_id='$id_tuvoz'";
 $QUERY=mysql_query($SQL, $linky);
 $maxnum=mysql_num_rows($QUERY);
 $ROW=mysql_fetch_array($QUERY);
 $numerono=$ROW["tuvoz_si"];
 $numerosi=$ROW["tuvoz_no"];
 $porcentaje = round((( $numerono / $maximo ) * 100),1);
 ?>
                           
         <table width="53%" border="0" cellspacing="0" cellpadding="0" >
         
		  <tr>
            <td width="150"><span class="etiquetas">Si</span></td>
            <td width="260" bgcolor="#FFFFFF"><table width="<? echo $porcentaje; ?>%" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
              <tr>
                 <td background="cab_progra_674_37_2.gif" style="background-color:#336EAC">&nbsp;</td>
              </tr>
            </table></td>
		    <td width="120" align="left"><div style="margin-right:20px; margin-left:5px;"><? echo"$numerono"; ?></div></td>
            <td width="122" align="left"><div style="margin-right:20px; margin-left:5px;"><? echo"$porcentaje%"; ?></div></td>
          </tr>
		  
</table>
		<div align="center" style="height:10px;">&nbsp;</div>
		 <? 
			  

 $porcentaje = round((( $numerosi / $maximo ) * 100),1);
			  ?>
			  <div class="divMargen5" align="left"> <table width="53%" border="0" cellspacing="0" cellpadding="0" >
         
		  <tr>
            <td width="150"><span class="etiquetas">No</span></td>
            <td width="260" bgcolor="#FFFFFF"><table width="<? echo $porcentaje; ?>%" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
              <tr>
                 <td background="cab_progra_674_37_2.gif" style="background-color:#336EAC">&nbsp;</td>
              </tr>
            </table></td>
		    <td width="120" align="left"><div style="margin-right:20px; margin-left:5px;"><? echo"$numerosi"; ?></div></td>
            <td width="122" align="left"><div style="margin-right:20px; margin-left:5px;"><? echo"$porcentaje%"; ?></div></td>
          </tr>
		  
</table>
		<div align="center" style="height:10px;">&nbsp;</div>

</div>
<div style="margin-top:20px; margin-left:10px;" ><span class="etiquetas">Total de votos: </span><? echo"$maximo"; ?></div>
<div style="margin-top:20px; margin-left:20px;" align="center"><input type="button" name="nada" value="Volver" onClick="TomarValor()" /></div>
</body>
</html>
<script language="JavaScript"> 
function TomarValor(){
 	
		window.location = "../index.php"; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	
	
	
}
</script>