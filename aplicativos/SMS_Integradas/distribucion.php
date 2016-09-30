<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('logeo.php');
include('coneccion.php');
include('extras/permisos.php');
$link=Conectarse();
$ubicacion="canal";
$ruta="../../";

?>
<?php if(!TienePermisos('MAIL_DISTRIBUCION', 'PERMITIR')){ echo "<script language='JavaScript'>document.location.href='index.php?ckl=1.php';</script>"; exit(0); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>teleSUR - Intranet - Aplicativos - Programaci&oacute;n Semanal</title>
<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../admcms/extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
 
<script type="text/javascript">
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.titulo.value.length==0){
       alert("No puede enviar un mensaje de texto vacio!!!")
       document.form1.mensaje.focus()
	  
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
<body >
<table width="801" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../cabecera.php'); ?>
  <tr>
    <td ><img src="../../images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="799" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11"><img src="../../images/spacer.gif" width="11" height="11" /></td>
        <td width="786" valign="top">
		
		
		
		<table width="781" cellspacing="0" cellpadding="0">
		
		 <tr>
	
	<td width="686"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr>
          <tr>
            <td width="779" height="23" background="../../images/barra_larga.gif" class="Titulos">Distribuci&oacute;n | Enviar Programaci&oacute;n </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			 <form action="enviarProgramacion.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validando();">
			<table width="779" height="348" border="0" cellpadding="0" cellspacing="0" style="background-image:url(img/fondo_ley3.jpg); background-repeat:no-repeat; background-position:center;">
			<tr><td height="10" colspan="3"><img src="../../images/spacer.gif" height="10" width="10" border="0" /></td>
			</tr>
			<tr><td height="10" colspan="3"><div align="center" class="Numeros_rojo">Enviar la Programaci&oacute;n a la lista TeleSUR</div></td>
			</tr>
			
			<tr><td height="10" colspan="3"><img src="../../images/spacer.gif" height="20" width="10" border="0" /></td>
			</tr>
			<tr><td colspan="3"></td></tr>
			
			
			<tr><td height="85" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center">
			  <p>Titulo:<br />
			    <input name="titulo" id="titulo" type="text" maxlength="150" size="50" />
			  </p>
</div>
				
				</td></tr>
				
					<tr><td height="85" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center">
			  <p>Mensaje:<br />
			    <textarea name="mensajes" rows="4" cols="50"></textarea>
			  </p>
</div>
				
				</td></tr>
				<tr><td height="25" colspan="2" align="center"><img src="../../images/spacer.gif" height="20" width="10" border="0" /></td></tr>
			<tr><td height="25" colspan="2" align="center"><input type="file" name="archivo1" id="archivo1" /></td></tr>
			<tr><td height="25" colspan="2" align="center"><img src="../../images/spacer.gif" height="20" width="10" border="0" /></td></tr>
			<tr><td height="25" colspan="2" align="center"><input type="file" name="archivo2" id="archivo2" /></td></tr>
			<tr><td height="25" colspan="2" align="center"><img src="../../images/spacer.gif" height="20" width="10" border="0" /></td></tr>
			<tr>
				</tr>
				<tr><td colspan="3" align="center"><span id="textcontainer1" align="left" >  <input type="image" border="1" name="button" value="Enviar" width="30" height="30" style="color: #fff; background-image:url(imagenes/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="imagenes/send_1.png" alt="Enviar SMS" title="Enviar Programacion" />
				  <img src="imagenes/spacer.gif" width="10" height="10" /><a href="index2.php" target="_self" title="Cancelar"><img  src="imagenes/cancelar_grande.png" name="button" width="30" height="30"  border="1" style="color:#fff; background-image:url(imagenes/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" type="image" value="cancelar" title="Cancelar" /></a></span></td>
				<tr><td colspan="3"><img src="../../images/spacer.gif" height="10" width="10" border="0" />
				
					</td>							</table>                                               
			 </form>                          </td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="799" height="20" ><img src="../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
   <? include('../pie_pagina.php'); ?>
</table>
<script type="text/javascript">
 function contar(myform,id) {
  //alert(myform);
  
  n = myform.value.length;
  //alert(n);
  t = 135;  
	  if (n<t) {
		 document.getElementById(id).innerHTML= t-n +" carácteres disponibles para alcanzar el límite.";
		 myform.style.border="1px solid #0099CC";	
	  }
	  else {
		 myform.value = myform.value.substring(0, t);
		 myform.style.border="2px solid red";
		 document.getElementById(id).innerHTML= 0 +" carácteres disponibles para alcanzar el límite.";
	  }
}

</script>
<blockquote>&nbsp;</blockquote>
</body>
</html>