<?php include('../logeo.php');?> 
<? $ubicacion="soporte";
include ('../../administrador/extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];
 $tirasql="SELECT * FROM m_soporte WHERE m_soporte_id='$id'";
	  //echo"$tirasql";
	 $result = mysql_query($tirasql,$link);
	 $row=mysql_fetch_array($result);
	 $m_soporte_id=$row['m_soporte_id'];
     $m_soporte_titulo=$row['m_soporte_titulo'];
     $m_soporte_status=$row['m_soporte_status'];
	 $m_soporte_solicitud=$row['m_soporte_solicitud'];
     $m_soporte_respuesta=$row['m_soporte_respuesta'];
	 $m_soporte_usuario=$row['m_soporte_usuario'];
	 $m_soporte_idsit=$row['m_soporte_idsit'];
	 $m_soporte_fechapedido=strtotime($row['m_soporte_fechapedido']);
	 $fecha = date("d-m-Y", $m_soporte_fechapedido);
	 $hora = date("H:i", $m_soporte_fechapedido);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TeleSURtv.net - Soporte Técnico</title>
<link href="../../extras/home.css" rel="stylesheet" type="text/css" />
<link href="../../admcmsweb/extras/estilos.css" rel="stylesheet" />
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
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<?php require_once('../cabecera/index.php'); ?>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<br />
<? include('../botonera.php'); ?>
<form name="nueva_solicitud" action="respuesta.php" id="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="bold_12_blanco">Peticiones de Soporte T&eacute;cnico </div></td>
  </tr>
<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
 <tr><td>
 <table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
 <tr ><td width="81" class="texto_pregunta_TuZona">Titulo:</td>
 <td width="620" class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"><? echo"$m_soporte_titulo"; ?></div></td></tr>
 <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
 <tr>
   <td  class="rayitas"><span class="texto_pregunta_TuZona" style="margin-left:5px;">Solicitud:</span></div></td>
   <td class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo" $m_soporte_solicitud"; ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
<tr>
   <td  class="rayitas"><span class="texto_pregunta_TuZona" style="margin-left:5px;">Fecha:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $fecha ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="etiquetas" style="margin-left:5px;">Hora:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="etiquetas" style="margin-left:5px;">Estado:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <img src="imagenes/<? if($m_soporte_status=='A'){ echo'rojo.png';}  if($m_soporte_status=='B'){ echo'amarillo.png';}  if($m_soporte_status=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_soporte_status=='A'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_soporte_status=='C'){ echo'Solicitud resuelta';} ?>" />
   <span class="etiquetas" style="margin-left:5px;"><? if($m_soporte_status=='A'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_soporte_status=='C'){ echo'Solicitud resuelta';} ?></span>
   </div></td></tr>
 </table>
 </td></tr>
 
<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>


<tr>
  <td height="22" align="center" bgcolor="#000000" class="bold_12_blanco" colspan="3">Respuesta del equipo Soporte T&eacute;cnico </td>
</tr>
<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /><input type="hidden" name="usu" value="<? echo"$m_soporte_usuario"; ?>" />
<input type="hidden" name="id_sit" value="<? echo"$m_soporte_idsit"; ?>" />
</td></tr>

<? $SSQL="SELECT * FROM m_soporte_respuestas WHERE  m_soporte_respuestas_idrequerimiento='$id'"; 
   $SSQUERy=mysql_query($SSQL, $link);
   $cuantas=mysql_num_rows($SSQUERy);
   if($cuantas!=0){
   ?>
<?
  }
  while ($fetch=mysql_fetch_array($SSQUERy)){
  $texto=$fetch['m_soporte_respuestas_texto'];
  $stauts=$fetch['m_soporte_respuestas_estatus'];
  $fecha=strtotime ($fetch['m_soporte_respuestas_fecha']);
  $fecha=date ('d-m-Y H:i', $fecha);

?>
 <tr><td><div class="rayitas"><img src="imagenes/spc.gif" width="10" height="1" border="0" /></div></td></tr>

 <? } ?>
 <tr><td><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  <td class="rayitas" align="center"><span class="titulo_entrevista" style="margin-left:5px;">Nueva Respuesta:</span></td>
</tr>
 <tr><td><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><table cellpadding="0" cellspacing="0" border="0" align="center">
 <tr ><td class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"><textarea name="respuesta" rows="5" cols="60"></textarea>
 </div></td></tr>

 
  
 </table></td></tr>


<tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
   <tr><td colspan="3"><div align="center">
     <input name="Submit" type="submit" value="responder" />
   </div></td></tr>
  <tr><td colspan="3"><img src="imagenes/spc.gif" width="10" height="10" border="0" /></td>
  </tr>
</table>
</form>

</body>
</html>
