<?php
include('logeo.php');
include('../../../extras/coneccion.php');
$link=Conectarse();
$ubicacion="canal";
$ruta="../../";
include('../../../extras/coneccion_aplicaciones.php');
$conecta=Validar();



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Herramientas - Protocolo</title>
<script type="text/javascript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>


<script type="text/javascript">
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.cargo.value.length==0){
       alert("Debe especificar el nombre de su cargo")
       document.form1.cargo.focus()
	  
	    return false;
	   }
	      
       if (document.form1.departamento.value=='Seleccione'){
       alert("Debe especificar el departamento a la cual pertenece")
       document.form1.departamento.focus()
	  
	    return false;
	   }
	   

	   
	       if (document.form1.solicitud.value.length==0){
       alert("Debe colocar especificar cual es su solicitud")
       document.form1.solicitud.focus()
	  
	    return false;
	   }
	   
	   
	   	   
	    if (document.form1.extension.value.length==0){
       alert("Debe colocar una extensión!!!")
       document.form1.extension.focus()
	  
	    return false;
	   }
	   
  return validar;
	  
    
	}


 
function isNumberKey(evt,elem) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 44 || charCode > 58 || charCode==45 || charCode==46 || charCode==47 || charCode==44)){
        return false;
    }
    
 
 if (elem.value.length >=7){
            elem.value= elem.value.substr(0,7)
        }
}
 
//-->
</script>
<style type="text/css">
<!--
.linea_azul_left_rigth {
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #2574A1;
	border-left-color: #2574A1;
}
.linea_azul_top {
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #2574A1;
}
.linea_azul_bottom {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #2574A1;
}
.foto_entrevista {
	margin: 2px;
	padding: 4px;
}
.texto_internos {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	line-height: 18px;
	font-weight: lighter;
	color: #000000;
	padding-right: 4px;
	padding-left: 8px;
	margin-left: 0px;
}
.foto_internas {
	padding: 10px;
}
.texto_trivia {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: lighter;
	color: #FFFFFF;
	line-height: 18px;
	padding: 10px;
}
.texto_preg_trivia {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: italic;
	font-weight: lighter;
	color: #990000;
	padding: 5px;
}
.titulo_trivia {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	padding: 5px;
}
.subtitulo_trivia {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #333333;
	padding: 5px;
}
.form {
	padding-left: 15px;
}
.Titulos_Internos {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-weight: bold;
	color: #000000;
	padding-top: 6px;
	padding-right: 6px;
	padding-bottom: 6px;
	padding-left: 10px;
}
.texto_entrevista {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	line-height: 14px;
	font-weight: lighter;
	color: #000000;
	padding-left: 6px;
	padding-right: 4px;
}
.foto_delMes {
	padding-top: 2px;
	padding-right: 6px;
	padding-bottom: 2px;
	padding-left: 4px;
}
.Numeros_rojo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #990000;
	padding-left: 4px;
}
.titulares {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	line-height: 18px;
	font-weight: lighter;
	color: #000000;
	padding-right: 0px;
	padding-left: 0px;
}
.foto_programas {
	padding-top: 3px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 13px;
}
.imagen_listas_rojo {
	padding-left: 8px;
}
.images_gifs {
	padding-left: 6px;
}
.Titulos {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	font-weight: bold;
	color: #FFFFFF;
	padding-left: 18px;
}
.Titulos_negros {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	font-weight: bold;
	color: #000000;
	padding-left: 18px;
}
.texto_bold {
	line-height: 18px;
	font-weight: bold;
	color: #000000;
	padding-top: 0px;
	margin-top: 0px;
}
.texto_Gris {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
	color: #333333;
	font-style: italic;
	padding-right: 4px;
	padding-left: 6px;
}
.texto_pregunta_TuZona {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	line-height: 18px;
	font-weight: bold;
	color: #000000;
	padding-right: 4px;
	padding-left: 6px;
}
.foto_tuZona {
	padding-right: 4px;
	padding-left: 6px;
	padding-top: 4px;
	padding-bottom: 4px;
}
.Titulo_Rojo {
font-family:Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #990000;
}
.texto_respuesta {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	line-height: 18px;
	font-weight: lighter;
	color: #000000;
	padding-right: 4px;
	padding-left: 6px;
}
.links {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	line-height: 18px;
	font-weight: lighter;
	color: #003399;
	text-decoration: none;
	padding-left: 2px;
}
.Fecha {
	font-family: "Times New Roman", Times, serif;
	font-size: 11px;
	line-height: 13px;
	font-weight: bold;
	color: #FFFFFF;
	padding-left: 6px;
}
.Fecha_numero {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
	padding-right: 4px;
	padding-left: 4px;
}
.hora {
	font-family: "Times New Roman", Times, serif;
	font-size: 13px;
	font-weight: bold;
	color: #990000;
	padding-right: 6px;
	padding-left: 6px;
}
.texto_nombre {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 10px;
	font-weight: lighter;
	color: #000000;
	padding-left: 3px;
}
.Estilo1 {font-size: 12px}
.Estilo2 {
	color: #990000;
	font-size: 24;
}
.Estilo3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 36;
}

-->
</style>
<style type="text/css">
.ScrollX {
	
	overflow: scroll;
	height: 480px;
	margin-top:10px;
	visibility: inherit;
	SCROLLBAR-FACE-COLOR:#F0F0F0;
	SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-SHADOW-COLOR: #CCCCCC;
	SCROLLBAR-3DLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-ARROW-COLOR: #1D396B;
	SCROLLBAR-TRACK-COLOR: #FFFFFF;
	SCROLLBAR-DARKSHADOW-COLOR: #CCCCCC;
	overflow-x: hidden;
	clip: rect(auto,auto,270px,auto);
}
</style>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg','../../../img/06_correo_01_160x106.jpg','../../../img/38_izq_02_26x52.jpg','../../../img/40_der_02_26x52.jpg','../../../img/23_RRHH_01_121x40.jpg','../../../img/25_genteTelesur_196x40.jpg','../../../img/27_fueraOficio_252x40.jpg','../../../img/32_1arriba_20x20.jpg','../../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../../img/01_Imagen_1020x816.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="17">&nbsp;    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">SISTEMA  DE ASISTENCIA JUR&Iacute;DICA</div></td>
  </tr>
   
   <tr>
    <td width="1020" height="493" valign="top" >
	<div class="ScrollX" style="margin-right:60px; margin-top:20px;">
	<table width="794" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="781" valign="top">
		
		
		
		<table width="799" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="786" valign="top">
		
		
		
		<table width="781" cellspacing="0" cellpadding="0">
		
		 <tr>
	
	<td width="686"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr>
          <tr>
            <td width="779" height="23" background="../../images/barra_larga.gif" class="Titulos">Asistencia Jur&iacute;dica </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			 <form id="form1" name="form1" method="post" action="guardar.php" onsubmit="return validando();">
			<table width="779" height="488" border="0" cellpadding="0" cellspacing="0" style="background-image:url(img/fondo_ley3.jpg); background-repeat:no-repeat; background-position:center;">
			<tr><td height="10" colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" /></td>
			</tr>
			<tr>
			  <td height="48" colspan="3" class="hora">Consultoría Jurídica te brinda Asesoría Legal en casos no laborales. Los días lunes y martes podrás acceder al formulario, allí debes completar los campos y enviar la solicitud; de vuelta recibiras un correo indicandote el día, hora y abogado que atenderá tu consulta. </td>
			</tr>
			
			<tr><td height="10" colspan="3"><img src="../images/spacer.gif" height="40" width="10" border="0" /></td>
			</tr>
			<tr><td colspan="3"></td></tr>
			<tr>
			  <td height="19" colspan="3"><table width="770" border="0" cellpadding="0" cellspacing="0">
			    <tr><td width="393" height="200" valign="top"><table width="393" border="0" cellpadding="0" cellspacing="0">
			      <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Fecha solicitud: </span></td>
			      <td width="229" valign="top"><input name="fecha_solicitud" type="text" readonly="yes" class="pequeno" value='<? echo date('d-m-Y', time()) ?>' size="25" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				   <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Nombre:</span></td>
			      <td width="229" valign="top"><input name="nombre" readonly="yes" type="text" class="pequeno" value="<?php echo $nombre_solo; ?>" size="25" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				  
				   <tr>
				     <td width="164" valign="top"><span class="texto_pregunta_TuZona">C&eacute;dula de identidad:  </span></td>
			         <td width="229" valign="top"><input name="cedula" type="text" readonly="yes"  class="pequeno" id="cedula" value='<? echo $cedula; ?>' size="25" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				   <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Dependencia: </span></td>
			      <td width="229" valign="top"><select name="departamento" class="pequeno" >
				  <option selected="selected" value="Seleccione">Seleccione</option>
				  <? 
$sql_datos="SELECT nombre_organizacion FROM organizacion ORDER BY nombre_organizacion ASC";
$query=mysql_query($sql_datos,$conecta);
while ($row=mysql_fetch_array($query)){
$nombre_organizacion=$row['nombre_organizacion'];
?>
				  <option value="<? echo"$nombre_organizacion"; ?>"><? echo"$nombre_organizacion"; ?></option>
                <? } ?>
                  </select></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				     <tr>
				       <td width="164" valign="top"><span class="texto_pregunta_TuZona">Correo :  </span></td>
			           <td width="229" valign="top"><input name="email" type="text" class="pequeno"  id="email" value='<? echo $email; ?>' size="25" /></td>
			      </tr>
				
				     
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="40" /></td>
				  </tr>
				  </table></td><td width="377" valign="top"><table width="393" border="0" cellpadding="0" cellspacing="0">
			      <tr><td width="76" valign="top"><span class="texto_pregunta_TuZona">Hora: </span></td>
			      <td width="317" valign="top"><input name="hora" type="text" readonly="yes" class="pequeno" value="<? echo date('H:i:s', time()) ?>" size="25" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				   <tr><td width="76" valign="top"><span class="texto_pregunta_TuZona">Apellido:</span></td>
			      <td width="317" valign="top"><input name="apellido" type="text" class="pequeno" readonly="yes"  size="25" value="<?php echo $apellido_solo; ?>"/></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				  
				   <tr><td width="76" valign="top"><span class="texto_pregunta_TuZona">Cargo:  </span></td>
			      <td width="317" valign="top"><input name="cargo" type="text" class="pequeno" id="cargo" onFocus="document.getElementById('cargo').style.borderColor='#666600'; document.getElementById('cargo').style.backgroundColor='#fef9e6;';" onBlur="document.getElementById('cargo').style.borderColor='#003875'; document.getElementById('cargo').style.backgroundColor='#ffffff;';" size="25" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				   <tr>
				     <td width="76" valign="top"><span class="texto_pregunta_TuZona">Turno:</span></td>
			         <td width="317" valign="top">
				  
				  
				  <table width="304" border="0" cellpadding="0" cellspacing="0">
				  <tr>
				  <td width="52" valign="middle" class="texto_Gris">Desde:</td>
				  <td width="94" valign="top"> <select name="desdeturno" class="pequeno">
                        <option value="12:00 AM">12:00 AM</option>
                        <option value="12:30 AM">12:30 AM</option>
                        <option value="1:00 AM">1:00 AM</option>
                        <option value="1:30 AM">1:30 AM</option>
                        <option value="2:00 AM">2:00 AM</option>
                        <option value="2:30 AM">2:30 AM</option>
                        <option value="3:00 AM">3:00 AM</option>
                        <option value="3:30 AM">3:30 AM</option>
                        <option value="4:00 AM">4:00 AM</option>
                        <option value="4:30 AM">4:30 AM</option>
                        <option value="5:00 AM">5:00 AM</option>
                        <option value="5:30 AM">5:30 AM</option>
                        <option value="6:00 AM">6:00 AM</option>
                        <option value="6:30 AM">6:30 AM</option>
                        <option value="7:00 AM">7:00 AM</option>
                        <option value="7:30 AM">7:30 AM</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="8:30 AM">8:30 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="9:30 AM">9:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AM</option>
						<option value="12:00 M">12:00 M</option>
						<option value="12:30 PM">12:30 PM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						<option value="10:30 PM">10:30 PM</option>
						<option value="11:00 PM">11:00 PM</option>
						<option value="11:30 PM">11:30 PM</option>
						
				  
				  
				  </select></td>
				  <td width="64" valign="middle" class="texto_Gris">Hasta:</td>
				  <td width="94" valign="top"> <select name="hastaturno" class="pequeno">
                            <option value="12:00 AM">12:00 AM</option>
                        <option value="12:30 AM">12:30 AM</option>
                        <option value="1:00 AM">1:00 AM</option>
                        <option value="1:30 AM">1:30 AM</option>
                        <option value="2:00 AM">2:00 AM</option>
                        <option value="2:30 AM">2:30 AM</option>
                        <option value="3:00 AM">3:00 AM</option>
                        <option value="3:30 AM">3:30 AM</option>
                        <option value="4:00 AM">4:00 AM</option>
                        <option value="4:30 AM">4:30 AM</option>
                        <option value="5:00 AM">5:00 AM</option>
                        <option value="5:30 AM">5:30 AM</option>
                        <option value="6:00 AM">6:00 AM</option>
                        <option value="6:30 AM">6:30 AM</option>
                        <option value="7:00 AM">7:00 AM</option>
                        <option value="7:30 AM">7:30 AM</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="8:30 AM">8:30 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="9:30 AM">9:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AM</option>
						<option value="12:00 M">12:00 M</option>
						<option value="12:30 PM">12:30 PM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						<option value="10:30 PM">10:30 PM</option>
						<option value="11:00 PM">11:00 PM</option>
						<option value="11:30 PM">11:30 PM</option>
						
				  
				  
				  </select></td>
				  </tr></table>
				 
				  </td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				     <tr><td width="76" valign="top"><span class="texto_pregunta_TuZona">Extensión:  </span></td>
			      <td width="317" valign="top"><input name="extension" type="text" class="pequeno" id="extension" size="25" onKeypress="return isNumberKey(event,this)" /></td>
			      </tr>
				
				     
				  <tr><td height="38" colspan="2" valign="top"><img src="img/spacer.gif" width="10" height="15" /></td>
				  </tr>
				  </table></td>
			    </tr></table></td>
			</tr>
			
			<tr><td height="158" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center">Solicitud:<br />
				      <textarea name="solicitud" cols="50" rows="4" class="pequeno" id="solicitud"  onfocus="document.getElementById('solicitud').style.borderColor='#666600'; document.getElementById('solicitud').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('solicitud').style.borderColor='#003875'; document.getElementById('solicitud').style.backgroundColor='#ffffff;';"></textarea>
				</div></td></tr>
			<tr>
				</tr>
				<tr><td colspan="3" align="center"><span id="textcontainer1" align="left" >  <input type="image" border="1" name="button" value="guardar" width="30" height="30" style="color: #fff; background-image:url(img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="img/guradar_grande2.png" alt="Guardar... " title="Guardar... " />
				  <img src="img/spacer.gif" width="10" height="10" /><a href="index2.php" target="_self" title="Cancelar"><img  src="img/cancelar_grande.png" name="button" width="30" height="30"  border="1" style="color:#fff; background-image:url(img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" type="image" value="cancelar" title="Cancelar" /></a></span></td>
				<tr><td colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" />
				
					</td>							</table>                                               
			 </form>                          </td>
          </tr>
        </table></td>
        </tr>
    </table></td>
        </tr>
    </table>
</div>
    </td>
  </tr>
  <tr>
    <td width="1020" height="58">&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?php
function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}
?>