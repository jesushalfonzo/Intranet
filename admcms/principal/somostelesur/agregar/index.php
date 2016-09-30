<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function validador(){
    //valido el nombre
	validar=true;
    if (document.agregar.archivo.value.length==0){
       alert("El archivo NO ha sido seleccionado")
       document.agregar.archivo.focus()
	  
	    return false;
	   }
	 	     
  return validar;
	      
	}

  </script>
<script language="javascript" src="cal2.js">
/*
Xin's Popup calendar script- Xin Yang (http://www.yxscripts.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use
*/
</script>
<script language="javascript" src="cal_conf2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Cumpleañeros del mes</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function soloJPG(valor, campo){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById(campo).value='';
}
}

function soloFLV(valor, campo){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="FLV"&&subc!="flv"){
alert("Solo se admiten videos .flv");
document.getElementById(campo).value='';
}
}
</script>
</head>

<body>
<p><span class="etiquetas">Somos TeleSUR </span></p>	
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data" onSubmit="return validador();">
<table width="735" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="135" class="etiquetas"><span class="etiquetas">Titulo: </span></td>
<td width="588" class="etiquetas"><input name="titulo" type="text" class="texto" id="titulo" size="84" /></td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>

<tr>
  <td><span class="etiquetas">Foto Player (320 X 240):</span></td>
  
    <td><input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input name="foto" type="file" id="foto" size="60" onChange="soloJPG(this, 'foto')" /> </td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Video (.flv) </span></td>
  
    <td><input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input type="file" name="archivo" id="archivo" size="60" onChange="soloFLV(this, 'archivo')"  /> </td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td class="etiquetas">Aprobar video: </td>
	<td><input type="checkbox" name="aprobar" value="ONN" /></td>
  </tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>

   
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
