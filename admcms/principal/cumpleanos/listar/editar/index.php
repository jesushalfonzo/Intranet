<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	 $id=$_GET["clx"];
	  //echo"$id";
	  $tirasql="SELECT * FROM cumpleanos where id = '$id'";
	// echo"$tirasql";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $id=$row["id"];
	  $nombre=$row["nombre"];
	  $fecha=$row["fecha"];
	  $departamento=$row["departamento"];
	  $foto=$row["foto"];
?>

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
<title>Modificar Efem�rides</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
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
<form action="modificar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto" colspan="2"><span class="etiquetas">Cumplea�eros del mes<br /><br />

<input type="hidden" name="id" value="<? echo "$id";?>">
</span></td>
</tr>
<tr>
<td class="etiquetas"><span class="etiquetas">Nombre completo: &nbsp;</span></td> 
<td class="texto"><input name="nombre" type="text" class="texto" value="<? echo "$nombre";?>" size="70" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Fecha: </span> </td>
      <td class="texto"><input type="text" name="fecha" class="texto" value="<? echo "$fecha";?>" size="15"  />&nbsp;<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a></td>
</tr>

<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Departamento:</span> </td>
     <td class="texto"><select name="departamento"  >
       <option selected="selected"><? echo "$departamento";?></option>
	  <option>Seleccione Departamento</option>
	  <option>Consultor�a Jur�dica</option>
      <option>Dir. General Ejecutiva</option>
	  <option>Dir. Admin. y Finanzas</option>
	  <option>Dir. de producci�n y Programaci�n</option>
	  <option>Dir. de Planificaci�n y Presupuesto</option>
	  <option>Dir. de RRHH</option>
      <option>Dir. General Auditor�a Interna</option>
      <option>Dir. Comunicaciones Integradas</option>
      <option>Dir. Informaci�n</option>
	  <option>Dir. Programas Informativos</option>	
	  <option>Dir. Realizaci�n</option>
	  <option>Dir. Programaci�n</option>
	   <option>Dir. Gr�ficas</option>
	   <option>Dir. Creativos</option>
	   <option>Dir. General de Serv. a la Producci�n </option>
	  <option>Dir. Transmisiones</option>
	  <option>Dir. Sistemas Inform�ticos</option>
	  <option>Dir. Planta</option>
	  <option>Dir. Sistema Multimedia</option>
	  <option>Dir. Gesti�n de Calidad</option>
	  <option>Dir. General de TV Digital</option>
	  <option>VP Ejecutiva</option>
      <option>VP. Distribuci�n, Comercializaci�n y Asuntos Internacionales</option>
       <option>VP. Operaciones y Tecnolog�a</option>
       <option>Presidencia</option>
     </select></td>
</tr>
  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
   <tr><td colspan="2"><span class="etiquetas">Foto (100 X 100):</span>
   
      <? if ($foto!=''){ 
			$enlace3="../../../../../multimedia/fotoscumple/$foto";						
			    }
		else {
		  $enlace3="";
		  }

	if ($foto!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" ><? echo "$foto"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
   
   <br /><input type="file" name="foto" size="70"  /></td></tr>
    <tr><td colspan="2"><img src="../../../../../images/spacer.gif" width="1" height="1" /></td>
    </tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Actualizar"/>  </tr>
</table>
</form>



</body>
</html>
