<? 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
ini_set('session.gc_maxlifetime',7200);
$variable=$_SESSION["Sm5c0mu1nt3gr4d4x"];
if ($variable == '3nv14nd0SM5'){
	echo "<script language='JavaScript'>document.location.href='index2.php';</script>";
	exit();
} 
include('../../extras/coneccion.php');
$link=Conectarse();
$ubicacion="canal";
$ruta="../../";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>teleSUR - Intranet - Aplicativos - SMS Comunicaciones Integradas </title>
<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
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
	font-family: Georgia, "Times New Roman", Times, serif;
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
</head>
<script type="text/javascript">
onClick="document.formulario.reset();return false"
</script>
<script type="text/javascript" src="../../extras/tuvoz/dynifs.js"></script>
<script type="text/javascript">
function limpia_formulario(){
 document.forms.formulario.reset();
 }
 
 
 function validandoando(){
    //valido el nombre
	validar=true;
    if (document.formulariox.login.value.length==0){
       alert("Debe ingresar el nombre de usuario")
       document.formulariox.login.focus()
	  
	    return false;
	   }
	      
       if (document.formulariox.password.value.length==0){
       alert("El campo clave no puede estar vacio")
       document.formulariox.password.focus()
	  
	    return false;
	   }
	 
	  
	   
  return validar;
	  
    
	}
 </script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../cabecera.php'); ?>
  <tr>
    <td ><img src="../../images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
	  <td colspan="2" align="center" class=" Estilo2 Estilo3"><div style="margin-bottom:20px; margin-top:15px;">SISTEMA DE ENVIO DE MENSAJES DE TEXTO (SMS) </div> </td>
	</tr>
  <tr>
	  <td colspan="2" align="center" class="Titulo_Rojo"><div style="margin-bottom:10px; margin-top:5px;">ACCESO RESTRINGIDO | IDENTIFIQUESE  </div>
	  <div style="margin-bottom:10px; margin-top:5px;">(Usar credenciales del Zimbra) </div></td>
	</tr>
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2" align="center"><img src="../../images/spacer.gif" width="50" height="10" /></td>
	</tr>
      <tr>
        <td width="11"><img src="../../images/spacer.gif" width="11" height="11" /></td>
        <td width="783" valign="top" align="center">
 <form id="formulariox" name="formulariox" method="post" action="login.php" onSubmit="return validandoando();">


<table width="290" height="213" cellspacing="0" cellpadding="0" background="../../images/fondo.jpg">
  <tr>
    <td height="131"><table width="256" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60" height="54" class="titulo_entrevista">Usuario</td>
    <td width="194">
        <input type="text" name="login" size="15" />
    </td>
  </tr>
  <tr>
    <td height="32" class="formulario_texto"><div align="left" class="titulo_entrevista">Clave</div></td>
    <td>
        <input type="password" name="password" size="15" />

    </td>
  </tr>
</table>
  </td>
  </tr>
  <tr>
    <td height="46" valign="top"><div align="center">
	
	<input type="image" src="../../images/entrar.jpg" align="bottom"  width="89" height="45" />
	<input type="image" src="../../images/borrar.jpg" align="bottom"  width="90" height="45" onClick="limpia_formulario(); return false" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>



	</form>	</td>
        </tr>
		<tr><td colspan="2" align="center"><img src="../../images/spacer.gif" width="50" height="10" /></td></tr>
		
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('../pie_pagina.php'); ?>
</table>

<blockquote>&nbsp;</blockquote>
</body>
</html>
