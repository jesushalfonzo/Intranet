<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.formulario.nombre.value.length==0){
       alert("Debe ingresar el nombre del establecimiento")
       document.formulario.nombre.focus()
	  
	    return false;
	   } 
	   
	    if (document.formulario.clase.value=='seleccione'){
       alert("Debe elegir la clase")
       document.formulario.clase.focus()
	  
	    return false;
	   }  
    
  return validar;
	  
    
	}

//-->
</script>
<body topmargin="0">

<p class="etiquetas">Promociones en pantalla </p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return valida_envia();" enctype="multipart/form-data">


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto"><span class="etiquetas">Nombre:
  </span>
  <input type="text" name="nombre" id="nombre" size="84" /></td>
</tr>


<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>

<tr><td class="texto"><span class="etiquetas">Clase:</span><br /><select name="clase">
  <option selected="selected" value="seleccione">Seleccione</option>
  <option value="Banco">Agencias Bancarias</option>
  <option value="delivery">Comida Delivery</option>
  <option value="entretenimiento">Entretenimiento</option>
  <option value="farmacia">Farmacia</option>
  <option value="otros">Otros</option>
  
</select></td></tr>



<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr>
  <td class="texto"><span class="etiquetas">Telefono(s):
  </span><br />
    <input type="text" name="telefonos" id="telesonos" size="40" /></td>
</tr>

<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr>
  <td class="texto"><span class="etiquetas">Direcci&oacute;n:
  </span><br />
  <input type="text" name="direccion" size="84" /></td>
</tr>
<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr><td align="center"><input type="submit" value="Guardar"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
