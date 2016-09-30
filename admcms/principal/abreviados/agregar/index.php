<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Agregar extension</title>
</head>
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.departamento.value.length==0){
       alert("Debe agregar un nombre")
       document.myform.departamento.focus()
	  
	    return false;
	   }
	    if (document.myform.numero.value.length==0){
       alert("Debe agregar anu extension")
       document.myform.numero.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>
<body>
<form name="myform" action="agregar.php" enctype="multipart/form-data" method="post" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">

<tr>
  <td bgcolor="#CCCCCC"><span class="etiquetas">AgregarN&uacute;mero Abreviado</span></td>
</tr>

<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td ><span class="etiquetas">Nombre:</span><br />
  <input type="text" name="nombre" size="50" /></td></tr>
  <tr>
    <td><span class="etiquetas">N&uacute;mero:</span><br />
    <input type="text" size="30" name="numero" /></td></tr>


  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>

  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Agregar"/>  
    </tr>
</table>
</form>
</body>
</html>