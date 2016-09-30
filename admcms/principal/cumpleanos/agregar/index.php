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
</head>

<body>
<p><span class="etiquetas">	Agregar Cumpleañeros</span></p>	
<tr><td colspan="2">&nbsp;</td>
</tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="etiquetas"><span class="etiquetas">Nombre completo: </span></td>
<td class="etiquetas"><input name="nombre" type="text" class="texto" id="nom" size="50" /></td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td class="texto"><span class="etiquetas">Fecha: </span></td>
<td class="texto"><input name="fecha" type="text" class="texto" id="fecha" size="15" readonly="yes" />&nbsp;<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>
</td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Departamento:</span></td>
    <td>
	<select name="departamento">
	  <option>Seleccione Departamento</option>
	  <option>Consultoría Jurídica</option>
      <option>Dir. General Ejecutiva</option>
	  <option>Dir. Admin. y Finanzas</option>
	  <option>Dir. de producción y Programación</option>
	  <option>Dir. de Planificación y Presupuesto</option>
	  <option>Dir. de RRHH</option>
      <option>Dir. General Auditoría Interna</option>
      <option>Dir. Comunicaciones Integradas</option>
      <option>Dir. Información</option>
	  <option>Dir. Programas Informativos</option>	
	  <option>Dir. Realización</option>
	  <option>Dir. Programación</option>
	   <option>Dir. Gráficas</option>
	   <option>Dir. Creativos</option>
	   <option>Dir. General de Serv. a la Producción </option>
	  <option>Dir. Transmisiones</option>
	  <option>Dir. Sistemas Informáticos</option>
	  <option>Dir. Planta</option>
	  <option>Dir. Sistema Multimedia</option>
	  <option>Dir. Gestión de Calidad</option>
	  <option>Dir. General de TV Digital</option>
	  <option>VP Ejecutiva</option>
      <option>VP. Distribución, Comercialización y Asuntos Internacionales</option>
	  <option>VP. Operaciones y Tecnología</option>
	  <option>Presidencia</option>
      </select></td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
   <tr><td colspan="2"><span class="etiquetas">Foto (100 X 100):</span><br /><input type="file" name="foto" size="70"  /></td></tr>
    <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
