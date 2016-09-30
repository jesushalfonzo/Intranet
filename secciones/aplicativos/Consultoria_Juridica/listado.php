<?php
include('logeo.php');

$ubicacion="canal";
$ruta="../../";
include('../../../extras/coneccion.php');
$link=Conectarse();
$diahoy= jddayofweek(cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 0 );
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


<script>
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.fecha_servicio.value.length==0){
       alert("Debe especificar la fecha en que necesita el servicio")
       document.form1.fecha_servicio.focus()
	  
	    return false;
	   }
	      
       if (document.form1.departamento.value=='Seleccione'){
       alert("Debe especificar la dirección a la cual pertenece")
       document.form1.departamento.focus()
	  
	    return false;
	   }
  return validar;
	  
    
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
	<div class="ScrollX" style="margin-right:80px;">
	<table width="794" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="781" valign="top">
		
		
		
		<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">

  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="187"></td>
	<td width="590"><div class="texto_Gris" align="right" style="margin-right:20px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td></tr></table></td></tr>
      <tr>
        <td width="5"><img src="../images/spacer.gif" width="5" height="11" /></td>
        <td width="789" valign="top" align="center">
<table width="788" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="letrasblancas">Solicitudes de Asesor&iacute;a Jur&iacute;dica </div></td>
  </tr>
  <tr bgcolor="#000000">
   
    <td width="279" align="center"><span class="letrasblancas">T&iacute;tulo</span></td>
    <td width="198" ><div align="center" class="letrasblancas">Fecha solicitud  </div></td>
   
  
    <td width="151" ><div align="center" class="letrasblancas">Fechade atenci&oacute;n </div></td>
	<td width="62" ><div align="center" class="letrasblancas">Estatus</div></td>
	<td width="77" ><div align="center" class="bold_12_blanco">&nbsp;</div></td>
  </tr>
  <? 
  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();

  
    $tirasql="SELECT * FROM m_aplicativo_cjuridica WHERE m_aplicativo_cjuridica_iddps='$usuarioid' ORDER BY m_aplicativo_cjuridica_estatus ASC, m_aplicativo_cjuridica_fechasolicitud ASC";
	 $result = mysql_query($tirasql,$link);
  $numero=mysql_num_rows($result);
if($numero==0){
?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><span class="titulo_entrevista">No tiene peticiones registradas</span></td>
  
  </tr>
<?php
}
    while ($row = mysql_fetch_array($result)){ 
     $m_aplicativo_cjuridica_id=$row['m_aplicativo_cjuridica_id'];
     $m_aplicativo_cjuridica_nombres=$row['m_aplicativo_cjuridica_nombres'];
     $m_aplicativo_cjuridica_apellidos=$row['m_aplicativo_cjuridica_apellidos'];
	 $m_aplicativo_cjuridica_fechasolicitud=strtotime($row['m_aplicativo_cjuridica_fechasolicitud']);
	 $fecha = date("d-m-Y", $m_aplicativo_cjuridica_fechasolicitud);
	 $m_aplicativo_cjuridica_solicitud=$row['m_aplicativo_cjuridica_solicitud'];
	 $m_aplicativo_cjuridica_fechaasignada=$row['m_aplicativo_cjuridica_fechaasignada'];
	  $m_aplicativo_cjuridica_estatus=$row['m_aplicativo_cjuridica_estatus'];
	  
	  if($m_aplicativo_cjuridica_fechaasignada!='0000-00-00 00:00:00'){
      $fechaasignada=date('d-m-Y h:i', strtotime($m_aplicativo_cjuridica_fechaasignada));
	  }
	  else{
	  $fechaasignada="Por Asignar";
	  }
  ?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_aplicativo_cjuridica_solicitud";?></span></td>
   
    <td><div align="center" class="titulo_entrevista"><? echo "$fecha";?></div></td>
    
    <td><div align="center" class="titulo_entrevista"><?php echo "$fechaasignada";?></div></td>
	<td><div align="center"><img src="img/<? if($m_aplicativo_cjuridica_estatus=='C'){ echo'rojo.png';}  if($m_aplicativo_cjuridica_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativo_cjuridica_estatus=='A'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_aplicativo_cjuridica_estatus=='C'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_aplicativo_cjuridica_estatus=='A'){ echo'Solicitud resuelta';} ?>"></div></td>
	<td><div align="center"><a href="ver.php?clx=<? echo"$m_aplicativo_cjuridica_id"; ?>"><img src="img/lupaver_1.png" width="30" height="30" border="0" title="Ver Solicitud" /></a></div></td>
  </tr>
 <? } ?>
 
 
 <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><a href="index2.php" title="Volver"><img src="img/back30_1.png" width="30" height="30" vspace="5" border="0" title="Volver" /></a></td>
  
  </tr>
</table>		</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../images/spacer.gif" width="10" height="20" /></td>
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