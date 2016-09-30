<? include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_entrevistas WHERE m_entrevistas_id='$id'";
$query=mysql_query($SQL, $linky);
$row = mysql_fetch_array($query);
 $m_entrevistas_id=$row['m_entrevistas_id'];
 $noticia_titul = str_replace('"', "''",($row ['m_entrevistas_titulo']));
 $m_entrevistas_titulo=stripslashes($noticia_titul);
 $m_entrevistas_sumario=$row['m_entrevistas_sumario'];
 $m_entrevistas_contenido=$row['m_entrevistas_contenido'];
 $m_entrevistas_fotointerna=$row['m_entrevistas_fotointerna'];
 $m_entrevistas_fotohome=$row['m_entrevistas_fotohome'];
 $m_entrevistas_autor=$row['m_entrevistas_autor'];
 $m_entrevistas_fecha=strtotime ($row['m_entrevistas_fecha']);
 $m_entrevistas_aprobado=$row['m_entrevistas_aprobado'];
 $fecha=date ('d-m-Y', $m_entrevistas_fecha);
 $m_entrevistas_fotoleyenda=$row['m_entrevistas_fotoleyenda'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<div class="etiquetas" style="background-color:#CCCCCC; margin-bottom:15px;">Editar Entrevista</div>

<form id="form1" name="formulario" method="post" action="editar.php" onsubmit="return submitForm();" enctype="multipart/form-data">
<!-- -->
<span class="etiquetas">Titulo:</span><br />
<input type="text" name="titulo" id="titulo" size="70" value="<? echo"$m_entrevistas_titulo"; ?>" />
<input type="hidden" name="id" value="<? echo"$m_entrevistas_id"; ?>" />
<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
updateRTEs();
//alert("Submitted value: "+document.myform.rte1.value) //alert submitted value
return true; //Set to false to disable form submission, for easy debugging.
}
initRTE("images/", "", "");
//-->
</script>


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr><td>&nbsp;</td></tr>
<tr><td class="texto"><span class="etiquetas">Sumario para la pagina principal</span>
<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($m_entrevistas_sumario); ?>
			writeRichText('sumario', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script></td></tr>

<tr>

<td class="texto"><span class="texto"><br />
</span><span class="etiquetas"><br />
Contenido:</span><br />
<br />
<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($m_entrevistas_contenido); ?>
			writeRichText('contenido', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script></td>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF"><span class="etiquetas">Foto entrevista interno(290 X 154): </span><? if ($m_entrevistas_fotointerna!=''){ 
			$enlace1="../../../../../imagenes/entrevistas/$m_entrevistas_fotointerna";					
			 
			    }
		else {
		  $enlace1="";
		  }
		  
		//echo $enlace1;
	if ($m_entrevistas_fotointerna!='') {?>
       
	<A HREF="javascript:void(0)" onClick="MyWindow = window.open(' <? echo $enlace1; ?>	','Foto','resizable=yes,width=370,height=205');" ><? echo "$m_entrevistas_fotointerna"; ?></A>

<?
 		}
		else {
		  
		   echo "No hay archivo";
		   
		}	
?>
	  <br />
  <input type="file" name="imagen_interno" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><span class="etiquetas">Foto leyenda:</span><br /><textarea name="leyenda" cols="50" rows="3"><? echo"$m_entrevistas_fotoleyenda"; ?></textarea></td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF"><span class="etiquetas">Foto entrevista home (240 X 140) :</span><? if ($m_entrevistas_fotohome!=''){ 
			$enlace1="../../../../../imagenes/entrevistas/$m_entrevistas_fotohome";					
			 
			    }
		else {
		  $enlace1="";
		  }
		  
		//echo $enlace1;
	if ($m_entrevistas_fotohome!='') {?>
       
	<A HREF="javascript:void(0)" onClick="MyWindow = window.open(' <? echo $enlace1; ?>	','Foto','resizable=yes,width=370,height=205');" ><? echo "$m_entrevistas_fotohome"; ?></A>

<?
 		}
		else {
		  
		   echo "No hay archivo";
		   
		}	
?><br />
  <input type="file" name="imagen_home" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><span class="etiquetas">Autor:<br />
</span> 
  <input type="text" name="autor" size="50" value="<? echo"$m_entrevistas_autor"; ?>" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td align="center"><input type="submit" value="Actualizar" name="boton"/><? if ($m_entrevistas_aprobado=='NO'){ ?><input type="submit" name="boton" value="Actualizar/Aprobar" style="margin-left:10px;"/><? } ?>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
	<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	// POR MILA: $tmpString = str_replace('"', "&#39;&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>