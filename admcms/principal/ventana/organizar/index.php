<?php 
include('../../../extras/connect.php');
$link=Conectarse();
	  $consult="select * from m_ventanaemergente order by m_ventanaemergente_id  desc";
	  $result = mysql_query($consult,$link);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function getDataServer(url, vars){
     var xml = null;
     try{
         xml = new ActiveXObject("Microsoft.XMLHTTP");
     }catch(expeption){
         xml = new XMLHttpRequest();
     }
     xml.open("GET",url + vars, false);
     xml.send(null);
     if(xml.status == 404) alert("Url no valida");
     return xml.responseText;
}
</script>

<script type="text/javascript">
function actualizar(id){
    var error = getDataServer("iactivar.php","?id="+id+"");
    if(error){
        alert('Nota definida correctamente');
    }
	
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="iactivar.php" method="post" name="miformcarajo">
<p class="etiquetas">Elige la noticia que desea resaltar en el home </p>
<br>
<table width="515" border="0" cellpadding="3" cellspacing="0">
	<? 
	while ($row = mysql_fetch_array($result)){
	$m_ventanaemergente_id=$row['m_ventanaemergente_id'];
	$m_ventanaemergente_titulo=$row['m_ventanaemergente_titulo'];
	$m_ventanaemergente_home=$row['m_ventanaemergente_home'];
	
	?>

    <tr>
      <td width="32" bgcolor="#FFFFFF" class="texto"><input name="campos" value="<? echo "$m_ventanaemergente_id";?>" type="radio" class="texto"
	   <? if ($m_ventanaemergente_home == 'SI') {echo "checked";} ?> onclick="actualizar('<? echo"$m_ventanaemergente_id"; ?>');"/></td>
      <td width="471" bgcolor="#FFFFFF" class="texto"><? echo "<b>$m_ventanaemergente_titulo</b>";?> </td>
    </tr>
	<? } ?>
	<tr><td colspan="2">&nbsp;</td></tr>
	
</table>
</form>
</body>
</html>



