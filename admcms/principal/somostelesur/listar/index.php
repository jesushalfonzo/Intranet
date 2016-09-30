<?  include ('../../../extras/connect.php');
	  $link=Conectarse();
	  $SQL_listar="SELECT * FROM  m_somostelesur ORDER BY m_somostelesur_id DESC";
      $result = mysql_query($SQL_listar, $link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Encuestas</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.verde{
color:#00FF33;
font-family:Arial, Helvetica, sans-serif;
font-size:12;
font-weight:bold;
}
.rojo{
color:#EC2722;
font-family:Arial, Helvetica, sans-serif;
font-size:12;
font-weight:bold;
}
</style>
</head>

<body>

<table width="660" border="0" cellpadding="3" cellspacing="1" class="texto">

<tr>
  <td bgcolor="#CCCCCC" colspan="2" class="etiquetas">Tu Zona </td>
</tr>
<?
	  while ($row = mysql_fetch_array($result)){ 
		$m_somostelesur_titulo=$row['m_somostelesur_titulo'];
		$fecha=date('d-m-Y', strtotime($row['m_somostelesur_fecha']));
		$m_somostelesur_id=$row['m_somostelesur_id'];
		$m_somostelesur_estatus=$row['m_somostelesur_estatus'];
		if($m_somostelesur_estatus=="A"){
		$estado="Activo";
		$clase="verde";
		}
		else{
		$estado="Pendiente";
		$clase="rojo";
		}
  
  ?>
  <tr>
    <td width="558"> 
	
    <span class="etiquetas"><? echo "$m_somostelesur_titulo";?> | <?php echo $fecha; ?> </span> / <span class="<?php echo $clase; ?>"><?php echo $estado; ?></span> </td>
    <td width="115" align="center" valign="middle"><table width="30%" border="0" align="left" cellpadding="3" cellspacing="1">
      <tr>
    <td width="42%" align="center" valign="middle"><input name="accion2" type="submit" class="texto" value="Editar" onclick="TomarValor('<? echo "$m_somostelesur_id";?>','Editar')" />
          </td> 
          <td width="58%" align="center" valign="middle"><input name="accion" type="submit" class="texto" value="Borrar" onClick="TomarValor('<? echo "$m_somostelesur_id";?>','Eliminar')" /></td>
         
         
		</tr> 
	     </table>
    </td>
  </tr>

  <tr><td colspan="2"> <hr align="left" width="680" size="1" noshade="noshade" class="texto" /></td></tr>
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
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	if (Accion=="Ver") {
		window.location = "resultados/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	
}
</script>
