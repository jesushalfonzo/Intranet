<?
  
   include ('../../../extras/connect.php');
    $link=Conectarse();

	  $SQL_listar="SELECT * FROM  m_concurso_preguntas ORDER BY m_concurso_preguntas_id DESC";
      $result = mysql_query($SQL_listar, $link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Encuestas</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="660" border="0" cellpadding="3" cellspacing="1" class="texto">

<tr>
  <td bgcolor="#CCCCCC" colspan="2" class="etiquetas">Encuestas Premios TeleSUR  </td>
</tr>
<?
	  while ($row = mysql_fetch_array($result)){ 
		$m_encuesta_tuvoz_titulo=$row['m_concurso_preguntas_pregunta'];
		$m_encuesta_tuvoz_id =$row['m_concurso_preguntas_id'];
  
  ?>
  <tr>
    <td width="535"> 
	
    <span class="etiquetas"><? echo "$m_encuesta_tuvoz_titulo";?> </span> </td>
    <td width="138" align="center" valign="middle"><table width="30%" border="0" align="left" cellpadding="3" cellspacing="1">
      <tr>
       <td width="42%" align="center" valign="middle"><input name="accion2" type="submit" class="texto" value="Editar" onclick="TomarValor('<? echo "$m_encuesta_tuvoz_id ";?>','Editar')" />
          </td>
          <td width="58%" align="center" valign="middle"><input name="accion" type="submit" class="texto" value="Borrar" onClick="TomarValor('<? echo "$m_encuesta_tuvoz_id ";?>','Eliminar')" /></td>
       
          
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
		if(confirm("¿Esta seguro que desea borrar esta pregunta?")) {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		}
	
	
	
	
	
}
</script>
