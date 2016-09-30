<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.agregar.titulo.value.length==0){
       alert("Debe ingresar el titulo")
       document.agregar.titulo.focus()
	  
	    return false;
	   } 
	   

	       if (document.agregar.imagen.value.length==0){
       alert("Debe subir una imagen obligatoriamente")
       document.agregar.imagen.focus()
	  
	    return false;
	   } 
    
  return validar;
	  
    
	}

//-->
</script>
<script language="JavaScript" type="text/JavaScript">
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>
<script language="javascript">
// definiciones basicas
OCULTO="none";
VISIBLE="block";
valor="0";
//show="off";
var show=new Array();

function mostrar_ocultar(blo) {
//alert('id'+id+'');
//alert('verga');
  if (blo=="JPG"){
  document.getElementById("JPG").style.display=VISIBLE;
  document.getElementById("SWF").style.display=OCULTO;
  
  } else {
   document.getElementById("SWF").style.display=VISIBLE;
  document.getElementById("JPG").style.display=OCULTO;
  }

}
</script>

<script type="text/javascript">
function soloJPG(valor){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById("archivo").value='';
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
if(subc!="SWF"&&subc!="swf"){
alert("Solo se admiten archivos .swf");
document.getElementById("archivo").value='';
return false;
}
}
</script>
</head>

<body>
<p><span class="etiquetas">Aregar elemento para el home </span></p>	
<tr><td colspan="2">&nbsp;</td>
</tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<table width="730" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="147" class="etiquetas"><span class="etiquetas">Titulo: </span></td>
<td width="571" class="etiquetas"><input name="titulo" type="text" class="texto" id="nom" size="50" /></td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  
  <tr><td colspan="2"><table width="661" border="0" cellpadding="0" cellspacing="0">
  <tr><td width="172" valign="top" class="etiquetas"><div align="right" style="margin-right:15px;">SWF </div></td>
  <td width="119" valign="top"><input type="radio" name="tipo" id="swf" value="swf" onclick="mostrar_ocultar('SWF');" checked="checked" /></td><td width="53" valign="top" class="etiquetas">Imagen</td>
  <td width="317" valign="top"><input type="radio" name="tipo" id="jpg" value="jpg" onclick="mostrar_ocultar('JPG');" /></td></tr></table>
  
  </td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr><td colspan="2">
<div id="JPG" style="display:none;">  
<table cellpadding="0" cellspacing="0" border="0">
 <tr>
     <td><span class="etiquetas">Imagen (596 X 410):</span></td>
     <td ><input type="file" name="archivo" id="archivo" size="30"  onChange="soloJPG(this)" /></td></tr>
    <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
	
	
	  <tr>
	    <td class="etiquetas">Enlace:</td>
	    <td><input name="link" type="text" class="texto" id="link" size="50" /></td></tr>
	  
	    <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
		<tr>
	    <td class="etiquetas">Cargar:</td>
	    <td><select name="target" id="target">
		<option value="_self" selected="selected">Misma página</option>
		<option value="_blank">Página en blanco</option>
		</select>
		</td></tr></table></div>
		
		
		<div id="SWF" style="display:block;"> 
		<table cellpadding="0" cellspacing="0" border="0">  <tr>
     <td><span class="etiquetas">Archivo SWF  (596 X 370):</span></td>
     <td ><input type="file" name="archivoflash" id="archivo" size="30"  onChange="soloSWF(this)" /></td></tr></table>
</div>
		
		
		
		
		</td></tr>
		  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
