<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('logeo.php');
include('extras/permisos.php');
$ubicacion="canal";
$ruta="../../";
//print_r($permisos);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>teleSUR - Aplicativos - SMS Comunicaciones Integradas </title>
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
</head>
<script type="text/javascript">
onClick="document.formulario.reset();return false"
</script>
<script type="text/javascript" src="../../extras/tuvoz/dynifs.js"></script>
<script type="text/javascript">
function limpia_formulario(){
 document.forms.formulario.reset();
 }
 </script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../cabecera.php'); ?>
  <tr>
    <td ><img src="../../images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr>
	
	<td width="686" colspan="2"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr>
	<tr>
	  <td colspan="2" align="center" class=" Estilo2 Estilo3"><div style="margin-bottom:20px; margin-top:15px;">SISTEMA DE ENVIO DE MENSAJES SMS Y CORREOS </div> </td>
	</tr>
      <tr>
        <td width="11"><img src="../../images/spacer.gif" width="11" height="11" /></td>
        <td width="783" valign="top" align="center">
 <form id="formulario" name="formulario" method="post" action="login.php">


<table width="290" cellspacing="0" cellpadding="0" >
  <tr>
    <td height="15" valign="top"><img src="../img/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr><td valign="top" colspan="2"><img src="imagenes/top.jpg" height="37" width="290" border="0" /></td></tr>
  
 
  <tr>
    <td valign="top" background="imagenes/medio.jpg"><table width="289" border="0" cellpadding="0" cellspacing="0">
	
	  <?php if(TienePermisos('SMS_INTEGRADAS', 'PERMITIR')){ ?>
      <tr><td width="122" height="48" valign="middle"><div align="center" style="margin-top:10px;"><a href="formulario.php"><img src="imagenes/Untitled-1_1.png" width="48" height="48" border="0" /></a></div></td>
      <td width="167" align="left" valign="middle" class="Titulo_Rojo Estilo1"><a href="formulario.php" class="Titulo_Rojo" style="text-decoration:none;">ENVIAR SMS </a></td>
      </tr>
	  
	   <?php  } ?>
	  <?php if(TienePermisos('MAIL_DISTRIBUCION', 'PERMITIR')){ ?>
            <tr><td width="122" height="48" valign="middle"><div align="center" style="margin-top:10px;"><a href="programacion.php"><img src="imagenes/calendar-icon.png" width="48" height="48" border="0" /></a></div></td>
      <td width="167" align="left" valign="middle" class="Titulo_Rojo Estilo1">
	<!--  <a href="programacion.php" class="Titulo_Rojo" style="text-decoration:none;">ENVIAR PROGRAMACIÓN</a></td>-->
	  <a href="distribucion.php" class="Titulo_Rojo" style="text-decoration:none;">ENVIAR PROGRAMACIÓN</a></td>
      </tr>
	   <?php  } ?>
	  <?php if(TienePermisos('BITACORA', 'PERMITIR')){ ?>
	  
	  
	  <tr><td width="122" height="48" valign="top"><div align="center" style="margin-top:15px;"><a href="bitacora.php"><img src="imagenes/bita_1.png" width="48" height="48" border="0" /></a></div></td>
      <td width="167" align="left" valign="middle" class="Titulo_Rojo Estilo1"><a href="bitacora.php" class="Titulo_Rojo" style="text-decoration:none;">BIT&Aacute;CORA SMS </a></td>
      </tr>
	  <?php  } ?>
	  
	   <?php if(TienePermisos('BITACORADIST', 'PERMITIR')){ ?>
	  
	  
	  <tr><td width="122" height="48" valign="top"><div align="center" style="margin-top:15px;"><a href="bitacora.php"><img src="imagenes/bita_1.png" width="48" height="48" border="0" /></a></div></td>
      <td width="167" align="left" valign="middle" class="Titulo_Rojo Estilo1"><a href="bitacoraDistribucion.php" class="Titulo_Rojo" style="text-decoration:none;">BIT&Aacute;CORA DISTRIBUCI&Oacute;N </a></td>
      </tr>
	  <?php  } ?>
	  
	  
	 <?php if(TienePermisos('USUARIOS', 'PERMITIR')){ ?>
	 <tr><td width="122" height="48" valign="middle"><div align="center" style="margin-top:10px;"><a href="usuarios.php"><img src="imagenes/usuarios.png" width="48" height="48" border="0" /></a></div></td>
      <td width="167" align="left" valign="middle" class="Titulo_Rojo Estilo1"><a href="usuarios.php" class="Titulo_Rojo" style="text-decoration:none;">USUARIOS</a></td>
      </tr>
	  <?php  } ?>
	  <tr><td valign="top" colspan="2"><img src="imagenes/boton.jpg" height="37" width="290" border="0" /></td></tr>
    </table></td>
  </tr>
  <tr><td valign="top"><img src="../img/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr><td height="2" valign="top"><img src="../img/spacer.gif" width="1" height="1" /></td>
  </tr>
</table>



	</form>	</td>
        </tr>
		<tr><td colspan="2" align="center"><img src="../../images/spacer.gif" width="50" height="10" /></td></tr>
		<tr><td colspan="2" align="center"><div class="Numeros_rojo" style=" display:<? echo"$sale"; ?>"></div></td></tr>
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
