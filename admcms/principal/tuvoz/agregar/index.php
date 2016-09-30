<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Agregar Tu Voz</title>
</head>
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.pregunta.value.length==0){
       alert("No ha escrito la pregunta")
       document.myform.pregunta.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>
<body>
<form name="myform" action="guardar.php" enctype="multipart/form-data" method="post" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">



<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr><td ><span class="etiquetas">Pregunta:</span><br /><textarea name="pregunta" rows="5" cols="60"></textarea></td></tr>


  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr><td><span class="etiquetas">Imagen:</span><br /><input type="file" name="imagen" size="70" /></td></tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>  </tr>
</table>
</form>
</body>
</html>