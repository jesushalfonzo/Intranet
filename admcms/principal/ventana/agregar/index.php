<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>

function validar(){

if(document.formulario.titulo.value==''){
	  alert('Debe colocar un titulo');
	  document.formulario.titulo.focus();
		
		return false;
	 
	
	}

		
}


</script>
<script type="text/javascript">
function soloSWF(valor){
var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
document.formulario.extension.value=subc;
if(subc!="JPG"&&subc!="jpg"&&subc!="swf"&&subc!="SWF"&&subc!="gif"&&subc!="GIF"){
alert("Tipo de archivo no permitido");
document.formulario.archivo.value='';
}

if(subc=="swf"){
document.formulario.enlace.disabled=true;
}
else {
document.formulario.enlace.disabled=false;
}


}

</script>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="formulario" id="formulario" method="post"  onsubmit="return validar();" enctype="multipart/form-data"  action="guardar.php">
<input type="hidden" name="extension" value="" id="extension" />
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td><span class="etiquetas">Agregar ventana emergente al home </span></td>
  </tr>
   <tr>
    <td><img src="../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
    <tr>
    <td><span class="etiquetas">Titulo</span><br /><input type="text" name="titulo" size="60" /></td>
  </tr>
   <tr>
    <td><img src="../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
   <tr>
    <td><span class="etiquetas">Imagen: (656 X 480)</span>:<span class="alerta">(JPG, SWF, GIG)</span><br /><input type="file" name="archivo" id="archivo" size="50" onChange="soloSWF(this)" /></td>
  </tr>
     <tr>
    <td><img src="../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
   <tr>
    <td><span class="etiquetas">Enlace </span><span class="alerta">(Solo para los jpg y gif)</span> <br />
      <input type="text" name="enlace" id="enlace" size="50" /></td>
  </tr>
   <tr>
    <td><img src="../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
   <tr>
    <td><div align="center">
      <input type="submit" value="Guardar" />
    </div></td>
  </tr>
   <tr>
    <td><img src="../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
</table>
</form>
</body>
</html>
