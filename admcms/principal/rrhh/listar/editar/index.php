<? include ('../../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_rhh_info WHERE m_rhh_info_id ='$id'";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_rhh_info_titulo=stripslashes ($row['m_rhh_info_titulo']); 
$m_rhh_info_titulo = str_replace('"', "''", $m_rhh_info_titulo);
$m_rhh_info_sumario=$row['m_rhh_info_sumario'];
$m_rhh_info_contenido=$row['m_rhh_info_contenido'];
$m_rhh_info_aprobada=$row['m_rhh_info_aprobada'];
$m_rhh_info_categoria=$row['m_rhh_info_categoria'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información RRHH</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.formulario.titulo.value.length==0){
       alert("Debe ingresar el Titulo de la información")
       document.formulario.titulo.focus()
	  
	    return false;
	   } 
	   
	    if (document.formulario.sumario.value.length==0){
       alert("Debe ingresar el Sumario de la información")
       document.formulario.sumario.focus()
	  
	    return false;
	   }  
    
  return validar;
	  
    
	}

//-->
</script>
<body topmargin="0">

<p class="etiquetas">Informaciones de RRHH</p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return submitForm(), valida_envia();">
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
<tr>
<td width="402" class="texto" ><span class="etiquetas">Titulo:
  </span>
  <input type="text" name="titulo" id="nombre_canal" size="60" value="<? echo"$m_rhh_info_titulo"; ?>" />
  <input type="hidden" name="id" value="<? echo"$id"; ?>" />
  </td>
  
 <td width="101" class="etiquetas">Categoría:
    <select name="categoria" class="pequeno">
	
	<option value="comunicados" <?php if(($m_rhh_info_categoria=="comunicados") or ($m_rhh_info_categoria=="")){ echo 'selected="selected"'; } ?> >Comunicados</option>
	<option value="operativos" <?php if($m_rhh_info_categoria=="operativos"){ echo 'selected="selected"'; } ?>>Operativos</option>
	<option value="charlas" <?php if($m_rhh_info_categoria=="charlas"){ echo 'selected="selected"'; } ?>>Charlas</option>
	</select></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="texto" colspan="2"><span class="etiquetas">Sumario:</span></td>
</tr>

<tr><td class="texto" colspan="2"><textarea name="sumario" rows="6" cols="64"><? echo"$m_rhh_info_sumario"; ?></textarea></td>
</tr>
<tr>
<tr><td class="texto" colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<td class="texto" colspan="2"><span class="etiquetas"><br /><br />Contenido</span><br /><br />

<script language="JavaScript" type="text/javascript">
			<!--
			//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
			<? $content = rteSafe($m_rhh_info_contenido); ?>
			writeRichText('rte1', '<?=$content;?>', 300, 250, true, false);
			//-->
			</script>  
</td>
<tr><td colspan="2">&nbsp;</td></tr>

<tr><td align="center" colspan="2">

<input type="submit" value="Actualizar" name="botoncito"/>
<? if($m_rhh_info_aprobada=='NO'){?> <input type="submit" value="Actualizar / Aprobar" name="botoncito"/><? } ?>

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