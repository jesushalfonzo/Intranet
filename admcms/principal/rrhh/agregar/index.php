<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
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


<table width="550" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="416" class="texto"><span class="etiquetas">Titulo:
  </span>
  <input type="text" name="titulo" id="nombre_canal" size="60" /></td>
  <td width="122" class="etiquetas">Categoría:
    <select name="categoria" class="pequeno"><option value="comunicados">Comunicados</option><option value="operativos">Operativos</option><option value="charlas">Charlas</option></select></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="texto" colspan="2"><span class="etiquetas">Sumario:</span></td>
</tr>

<tr><td class="texto" colspan="2"><textarea name="sumario" rows="6" cols="64"></textarea></td>
</tr>
<tr>
<tr><td class="texto" colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<td class="texto" colspan="2"><span class="etiquetas"><br /><br />Contenido</span><br /><br />

<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('rte1', 'Escribe aquí el contenido ...', 300, 250, true, false);
//-->
</script>
</td>
<tr><td colspan="2">&nbsp;</td></tr>

<tr><td align="center" colspan="2"><input type="submit" value="Guardar"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
