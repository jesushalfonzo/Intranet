<?

$id_despies=$_GET["ckl"];
$id_nota=$_GET["xls"];
include('../../../../../../../extras/connect.php');
$link=Conectarse();

$sql="SELECT titulo, contenido FROM noticia WHERE id='$id_nota'";

$QUERY=mysql_query($sql, $link);
$row=mysql_fetch_array($QUERY);
$titulo=stripslashes ($row['titulo']);
$contenido=$row['contenido'];


//PARA LOS DATOS DEL DESPIES

$SSQL="SELECT * FROM m_noticias_despies WHERE m_noticias_despies_id='$id_despies'";
$Squery=mysql_query($SSQL, $link);
$Srow=mysql_fetch_array($Squery);
$m_noticias_despies_titulo=$Srow['m_noticias_despies_titulo'];
$m_noticias_despies_texto=$Srow['m_noticias_despies_texto'];
$m_noticias_despies_guia=$Srow['m_noticias_despies_guia'];
$m_noticias_despies_alineacion=$Srow['m_noticias_despies_alineacion'];
$m_noticias_despies_foto=$Srow['m_noticias_despies_foto'];
$m_noticias_despies_fotoleyenda=$Srow['m_noticias_despies_fotoleyenda'];
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"  />
<title>Agregar Despies</title>
<link href="../../../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<script type="text/javascript">

      function disablequitar(){
	  document.editardespies.quitar.checked = false;
	  }
	  function disablecambiar(){
	  document.editardespies.cambiar.checked = false;
	  }
	  
</script>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="521" bgcolor="#CCCCCC"><span class="etiquetas">Agregar Despies</span></td>
</tr>
<tr><td><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td><span class="etiquetas"><? echo $titulo ?></span></td></tr>
<tr><td><img src="../../../../../../../img/spc.gif" width="10" height="15" border="0" /></td></tr>
<tr><td><span class="texto"><? echo $contenido ?></span></td></tr>
</table>

<form name="editardespies" action="editar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_despies" value="<? echo"$id_despies"; ?>" />
<input type="hidden" name="id_nota" value="<? echo"$id_nota"; ?>" />
<table cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="2"><span class="etiquetas">Datos del Despies</span></td></tr>
<tr> <td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Titulo:</span><br /><input type="text" size="70" name="titulo" value="<? echo"$m_noticias_despies_titulo"; ?>" /></td></tr>
<tr><td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr> <td colspan="2"><span class="etiquetas">Foto  para el home: (180 x 120) &nbsp;<? if ($m_noticias_despies_foto!=''){ 
			$enlace1="../../../../../../../../imagenes/despies/$m_noticias_despies_foto";
			$tamano=getimagesize($enlace1);	
							
			    }
		else {
		  $enlace1="";
		  }

	if ($m_noticias_despies_foto!='') {?>
       
	<a href="javascript:void(0)" onClick="MyWindow = window.open(' <? echo $enlace1; ?>','Foto','resizable=yes,width=<? echo $tamano[0]+20; ?>,height=<? echo$tamano[1]+20; ?>');" ><? echo "$m_noticias_despies_foto"; ?></a>
<?
 		}
		else {
		   echo "No hay archivo";
		  
		}	
?>
</span>&nbsp;<span class="etiquetas">/ &nbsp;Cambiar</span>
<input type="checkbox" value="ON" name="cambiar" onClick="disablequitar()" /><? if ($m_noticias_despies_foto!=''){ ?>&nbsp;<span class="etiquetas">Quitar</span><input type="checkbox" value="ON" name="quitar" onClick="disablecambiar()"/>

<? } ?>
  </span><br /><input type="file" name="foto" size="70" /></td></tr>
<tr> <td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr> <td><span class="etiquetas">Primera frase del parrafo:</span><br /><input type="text" name="guia" size="70" value="<? echo"$m_noticias_despies_guia"; ?>" /></td>

<td><span class="etiquetas" style="margin-left:10px;">Alineación</span><br /><select name="alineacion" id="jumpMenu" style="margin-left:10px;">
  <option value="left" <? if($m_noticias_despies_alineacion=='left'){ echo'selected="selected"';} ?>>Izquierda</option>
  <option value="right" <? if($m_noticias_despies_alineacion=='right'){ echo'selected="selected"';} ?>>Derecha</option>
</select></td></tr>
<tr><td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Foto Leyenda:</span><br /><textarea name="leyenda" rows="2" cols="60"><? echo"$m_noticias_despies_fotoleyenda"; ?></textarea></td></tr>
<tr><td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td colspan="2"><span class="etiquetas">Texto del despies:</span><br /><textarea name="texto_despies" cols="60" rows="4"><? echo"$m_noticias_despies_texto"; ?></textarea></td></tr>
<tr><td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td align="center"><input type="submit" value="Actualizar"  /></td></tr>
<tr><td colspan="2"><img src="../../../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
</table>
</form>

</body>
</html>
