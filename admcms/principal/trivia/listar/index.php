<? include ('../../../extras/connect.php');
$linky=Conectarse();
$SQL="SELECT * FROM m_trivia WHERE m_trivia_id >= '30' ORDER BY m_trivia_id DESC";
$query=mysql_query($SQL, $linky);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Efemérides</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="660" border="0" cellpadding="3" cellspacing="1" class="texto">

<tr>
  <td bgcolor="#CCCCCC" colspan="2" class="etiquetas">Trivias TeleSUR</td>
</tr>
  <? 
        while ($row = mysql_fetch_array($query)){ 
		$m_trivia_titulo=$row['m_trivia_titulo'];
		$m_trivia_aprobado=$row['m_trivia_aprobado'];
		$m_trivia_id=$row['m_trivia_id'];
  
  ?>
  <tr>
    <td width="578"> 
	
	<br />
    <span class="etiquetas"><? echo "$m_trivia_titulo";?> </span></td>
    <td width="95" align="center" valign="middle"><table width="70%" border="0" cellpadding="3" cellspacing="1">
      <tr>
        <td width="50%" align="center" valign="middle" ><input name="accion" type="submit" class="pequeno" value="<? if($m_trivia_aprobado=='SI'){ echo"Editar"; } else{ echo"Editar / Aprobar";} ?>" onclick="TomarValor('<? echo " $m_trivia_id";?>','Editar')"/>
          </form></td>
         
        <td width="50%" align="center" valign="middle"><input name="accion" type="submit" class="texto" value="Borrar" title="Borrar" onClick="TomarValor('<? echo "$m_trivia_id";?>','Eliminar')" />
        </form></td>
		<td width="50%" align="center" valign="middle"><input name="accion" type="submit" class="texto" value="resultados" title="Borrar" onClick="TomarValor('<? echo "$m_trivia_id";?>','resultado')" />
        </form></td>
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
	
	if (Accion=="resultado") {
		window.location = "resultados/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	
	
}
</script>
