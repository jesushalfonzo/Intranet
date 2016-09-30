<? 
include('../../../../../../extras/connect.php');
$linky=Conectarse();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar INFOGRAFIAS</title>
<link href="../../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" width="515" class="etiquetas">
 <tr><td colspan="2" bgcolor="#D6D6D6"><input class="pequeno" type="button" value="Agregar Nuevo Despies" onClick="TomarValor('Nothing','Nuevo/Despies')" /></td></tr>
 <tr><td colspan="2"><img src="../../../../../../img/spc.gif" width="10" height="10" border="0" /></td>
 </tr>
 </table>
 <hr align="left" width="515" size="1" noshade="noshade" />
<? 
	 $id_listar=$_GET["clx"];
	 $m_despies_id_nota=$_GET["ckl"];
	   $link=Conectarse();   
	  // $tirasql="select * from m_despies_noticia where m_despies_noticia_idnota='$id_listar' order by m_despies_noticia_id desc";
	   $tirasql="select m_noticias_despies_id, m_noticias_despies_titulo, m_noticias_despies_foto, m_noticias_despies_idnota from m_noticias_despies where m_noticias_despies_idnota='$m_despies_id_nota' order by m_noticias_despies_id desc";
       $resultado=mysql_query($tirasql,$link); 
  while ($row = mysql_fetch_array($resultado)){ 
     $m_despies_noticia_id=$row['m_noticias_despies_id'];
	$m_noticias_despies_idnota=$row['m_noticias_despies_idnota'];
	 $m_noticias_despies_titulo=$row['m_noticias_despies_titulo'];
    
	 
?>

<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
   
	<tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "$m_noticias_despies_titulo"; ?> </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$m_despies_noticia_id";?>','Editar', '<? echo"$m_noticias_despies_idnota"; ?>')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$m_despies_noticia_id";?>','Eliminar','<? echo"$m_noticias_despies_idnota"; ?>')" />
</td>
        </tr>
      </table>
</td>
    </tr>
</table>
<hr align="left" width="515" size="1" noshade="noshade" />
<? } ?>
</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion,otro){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?ckl="  + codigo + "&xls=" + otro + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
		if (Accion=="Eliminar") {
		window.location = "borrar/index.php?clx=" + codigo + "&xls=" + otro + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	if (Accion=="Nuevo/Despies") {
		window.location = "../index.php?clx=" + <? echo "$m_despies_id_nota";?> + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	
	}

</script>