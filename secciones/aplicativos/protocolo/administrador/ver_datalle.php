<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Trivia </title>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../admcms/extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.rayitas{
border-right-width: 1px;
border-left-width: 1px;
border-right-style: solid;
border-left-style: solid; 
border-right-color: #CCCCCC;
border-left-color: #CCCCCC; 
border-bottom-width:1px; 
border-bottom-color:#CCCCCC;
border-bottom-style:solid;
border-top-color:#CCCCCC;
border-top-style:solid;
border-top-width:1px;
}

</style>

</head>
<? 
 include('../../../extras/coneccion.php');
  $link=Conectarse();
$id_peticion=$_GET["clx"];
$desde=$_GET["desde"];
$hasta=$_GET["hasta"];
$departamento=$_GET["dep"];
$SSQL="SELECT * FROM m_aplicativos_protocolo WHERE  m_aplicativos_protocolo_id='$id_peticion'"; 
   $SSQUERy=mysql_query($SSQL, $link);
   $row=mysql_fetch_array($SSQUERy);
   $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
   $m_aplicativos_protocolo_dirrecion=$row['m_aplicativos_protocolo_dirrecion'];
   $m_aplicativos_protocolo_telefono=$row['m_aplicativos_protocolo_telefono'];
   $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];
   $m_aplicativos_protocolo_personasasistentes=$row['m_aplicativos_protocolo_personasasistentes'];
   $m_aplicativos_protocolo_lugar=$row['m_aplicativos_protocolo_lugar'];
   $m_aplicativos_protocolo_hora=$row['m_aplicativos_protocolo_hora'];
   $m_aplicativos_protocolo_numregalos=$row['m_aplicativos_protocolo_numregalos'];
   $m_aplicativos_protocolo_tiporegalo=$row['m_aplicativos_protocolo_tiporegalo'];
   $m_aplicativos_protocolo_aquien=$row['m_aplicativos_protocolo_aquien'];
   $m_aplicativos_protocolo_motivovisita=$row['m_aplicativos_protocolo_motivovisita'];
   $m_aplicativos_protocolo_lineaaerea=$row['m_aplicativos_protocolo_lineaaerea'];
   $m_aplicativos_protocolo_numerovuelo=$row['m_aplicativos_protocolo_numerovuelo'];
   $m_aplicativos_protocolo_paisprocedencia=$row['m_aplicativos_protocolo_paisprocedencia'];
   $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
   $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
   $m_aplicativos_protocolo_nombreinvitado=$row['m_aplicativos_protocolo_nombreinvitado'];
   $m_aplicativos_protocolo_comentario=$row['m_aplicativos_protocolo_comentario'];
   $m_aplicativos_protocolo_tiporefrigerio=$row['m_aplicativos_protocolo_tiporefrigerio'];
   $fecha=date('d/m/Y h:m:s');
?>
<body onload="DYNIFS.resize('agenda')">
<script type="text/javascript">
function volver(){
document.location="detalle.php?desde=<? echo $desde; ?>&hasta=<? echo $hasta; ?>&departamento=<? echo $departamento ?>";
}
</script>
<table width="700" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#E7E8E9">

<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
 <tr><td>
 <table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
 <tr >
   <td width="103" class="texto_pregunta_TuZona rayitas">Tipo:</td>
   <td width="598" class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"><? echo"$m_aplicativos_protocolo_tiposolicitud"; ?></div></td></tr>
 <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
 <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Fecha solicitud::</span>     <span class="titulo_entrevista">
     </div>
   </span></td>
   <td class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo" $fecha"; ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
<tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Direcci�n </span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_dirrecion ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Telefono:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_telefono ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Estado:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <img src="imagenes/<? if($m_aplicativos_protocolo_estatus=='A'){ echo'rojo.png';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_aplicativos_protocolo_estatus=='A'){ echo'Solicitud en espera';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'Solicitud en proceso';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'Solicitud resuelta';} ?>" />
   <span class="etiquetas" style="margin-left:5px;"><? if($m_aplicativos_protocolo_estatus=='A'){ echo'Solicitud en espera';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'Solicitud en proceso';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'Solicitud resuelta';} ?></span>
   </div></td></tr>
 </table>
 </td></tr>
 
<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>

<? if($m_aplicativos_protocolo_tiposolicitud=='Reuni�n'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="112"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de asitentes:</span></td>
   <td width="589"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_personasasistentes ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="112"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Lugar:</span></td>
   <td width="589"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lugar ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="112"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="589"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr>
   <td width="112"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Tipo refrigerio :</span></td>
   <td width="589"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_tiporefrigerio ?></div></td></tr>
   <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Regalo corporativo'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de regalos:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_numregalos ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Tipo de Regalo:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_tiporegalo ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Regalos dirigidos a:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_aquien ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Invitado Especial'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Nombre  Invitado:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_nombreinvitado ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Motivo de la visita - o programa al que asistir�:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_motivovisita ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Salida del Canal para recibir invitados'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Lugar:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lugar ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr> <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Nombre  Invitado:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_nombreinvitado ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">L�nea A�rea:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lineaaerea ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de vuelo:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_numerovuelo ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Pa�s de procedencia:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_paisprocedencia ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
	
	</table></td></tr>
	
   
<? } } } }?>
<tr><td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Comentarios:</span> <span class="texto"><? echo"$m_aplicativos_protocolo_comentario"; ?></span></td></tr>
	<tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  <td height="22" align="center" bgcolor="#000000" class="bold_12_blanco" colspan="3">Respuesta del equipo Soporte T&eacute;cnico </td>
</tr>
<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" />


</td></tr>

   <tr><td colspan="3"><div align="center">
    
	<input name="Submit" type="submit" value="Volver" onclick="volver(); return false" />
   </div></td></tr>
  <tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td>
  </tr>

</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>