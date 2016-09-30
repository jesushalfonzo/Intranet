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
    if (document.agregar.nombre.value.length==0){
       alert("Debe ingresar el nombre")
       document.agregar.nombre.focus()
	  
	    return false;
	   } 
	   
	    if (document.agregar.foto.value.length==0){
       alert("Debe cargar una foto")
       document.agregar.foto.focus()
	  
	    return false;
	   }  
	       if (document.agregar.fecha.value.length==0){
       alert("Debe elegir la fecha")
       document.agregar.fecha.focus()
	  
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
<script type="text/javascript">
refreshdiv();
</script>
<script src="ajax.js.php"></script>

<script type="text/javascript">
function soloJPG(valor){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById("foto").value='';
return false;
}
}
</script>
</head>

<body>
<p><span class="etiquetas">	Agregar Cumpleañeros</span></p>	
<tr><td colspan="2">&nbsp;</td>
</tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<table width="730" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="135" class="etiquetas"><span class="etiquetas">Nombre completo: </span></td>
<td width="583" class="etiquetas"><input name="nombre" type="text" class="texto" id="nom" size="50" /></td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td class="texto"><span class="etiquetas">Fecha: </span></td>
<td class="texto">
<table width="162" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="81" valign="top" class="etiquetas">D&iacute;a</td>
    <td width="81" valign="top" class="etiquetas">Mes</td>
  </tr>
<tr><td valign="top"><select name="dia">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>

</td><td valign="top"><select name="mes">
<option value="1">Enero</option>
<option value="2">Febrero</option>
<option value="3">Marzo</option>
<option value="4">Abril</option>
<option value="5">Mayo</option>
<option value="6">Junio</option>
<option value="7">Julio</option>
<option value="8">Agosto</option>
<option value="9">Septiembre</option>
<option value="10">Octubre</option>
<option value="11">Noviembre</option>
<option value="12">Diciembre</option>

</select></td></tr>
</table>

</td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Departamento:</span></td>
    <td><table width="484" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><div name="timediv" id="timediv" style="width:300px;"> </div></td>
                      <td><a href="#" onclick="NewWindow('agregar_departamento.php','categoria','370','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nueva categoria" style="text-decoration:none;"> <img src="../../../img/+catego_1.png" width="21" height="21" border="0" align="absmiddle" title="Agregar Nueva Categoría" /></a></td>
                    </tr>
        </table>
	</td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
   <tr><td><span class="etiquetas">Foto (100 X 100):</span></td><td ><input type="file" name="foto" id="foto" size="40"  onChange="soloJPG(this)" /></td></tr>
    <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
