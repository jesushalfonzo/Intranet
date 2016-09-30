<?
  
   include ('../../extras/connect.php');
    $link=Conectarse();
     
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Encuestas</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="660" border="0" cellpadding="3" cellspacing="1" class="texto">

<tr>
  <td bgcolor="#CCCCCC" colspan="4" class="etiquetas"> Premios TeleSUR  </td>
</tr>
<tr>
  <td  class="etiquetas">Video</td>
  <td width="126"><div align="center"><strong>Productor</strong></div></td>
  <td width="129"><div align="center"><strong>Votos</strong></div></td>
  <td width="129"><div align="center"><strong>%</strong></div></td>
</tr>
<tr>
  <td bgcolor="#CCCCCC" colspan="4" class="etiquetas" height="10"><img src="../../../img/spc.gif" height="10" width="10" /></td>
</tr>
<?
$SQLTOTAL="SELECT m_resultados_videos_id FROM m_resultados_videos ORDER BY m_resultados_videos_id";
$queryTotal=mysql_query($SQLTOTAL, $link);
$total=mysql_num_rows($queryTotal);


$SQL="SELECT m_resultados_videos_id, COUNT(m_resultados_videos_id) AS votos, m_videos_premios_titulo AS Titulo, m_videos_premios_productor AS Productor  FROM m_resultados_videos, m_videos_premios WHERE m_videos_premios_id=m_resultados_videos_idopcion GROUP BY m_resultados_videos_idopcion";
$query=mysql_query($SQL, $link);
	  while ($row = mysql_fetch_array($query)){ 
		$Titulo=$row['Titulo'];
		$Productor =$row['Productor'];
		$votos =$row['votos'];
		 $porcentaje = round((( $votos / $total ) * 100),2);
  
  ?>
  <tr>
    <td width="416"> 
	
    <span class="etiquetas"><? echo "$Titulo";?> </span> </td>
    <td align="center" valign="middle" colspan="3"><table width="99%" border="0" align="left" cellpadding="3" cellspacing="1">
      
	  
	  <tr><td width="32%" valign="top"><?php echo $Productor; ?> </td>
	  <td width="36%" valign="top"><div align="center"><?php echo $votos; ?></div></td>
	   <td width="32%" valign="top"><div align="center"><?php echo $porcentaje; ?> %</div></td>
	  </tr> 
	
    </table>
    </td>
  </tr>
  <tr><td colspan="4"> <hr align="left" width="780" size="1" noshade="noshade" class="texto" /></td></tr>

  <? } ?>
   <tr><td colspan="4"> <div align="right" style="margin-right:40px;"><span class="etiquetas">Total <?php echo $total; ?> votos</span></div></td>
   </tr>
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
		if(confirm("¿Esta seguro que desea borrar esta pregunta?")) {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		}
	
	
	
	
	
}
</script>
