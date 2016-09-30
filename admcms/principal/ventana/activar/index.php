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
activo = document.getElementById("activar").checked;
if(activo==false){ 
estado="NO"; 
} 

else { 

estado="SI"; 
}
var error = getDataServer("guardar.php","?id="+estado+"");
        alert(error);
		refrescar();

	
}

function refrescar(){
location.reload(true);
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="guaradar.php" method="post" name="miformcarajo">
<p class="etiquetas">Activar / desactivar ventana emergente</p>
<table width="515" border="0" cellpadding="3" cellspacing="0">
	<? 
	include('../../../extras/connect.php');
    $link=Conectarse();
	$SQL="SELECT * FROM m_control_ventana WHERE m_control_ventana_id='1'";
	$query=mysql_query($SQL, $link);
	$row=mysql_fetch_array($query);
	$m_control_ventana_activo=$row['m_control_ventana_activo'];
	if($m_control_ventana_activo=='SI'){
	$colocar='NO';
	}
	else{
	$colocar='SI';
	}
	?>
    <tr>
      <td bgcolor="#FFFFFF" class="texto"><input type="checkbox" name="activar"  id="activar" <? if($m_control_ventana_activo=='SI'){ echo'checked="checked"'; }?> />
      <span class="etiquetas" id="texto"><? if($m_control_ventana_activo=='SI'){ echo'Desactivar'; } else { echo "Activar"; } ?></span> </td>
    </tr>
	
	<tr><td colspan="2"><div align="center">
	  <input type="submit" value="Guardar" onclick="actualizar('<? echo $colocar; ?>'); return false;" />
	  </div></td></tr>
</table>
</form>
</body>
</html>



