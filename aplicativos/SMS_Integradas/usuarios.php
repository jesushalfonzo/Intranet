<?php
include('logeo.php');
?>
<? $ruta="../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Aplicativos - SMS Comunicaciones Integradas </title>
<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.letrasblancas{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
color:#FFFFFF;
font-weight:bold;
}
</style>
<script language="JavaScript" type="text/JavaScript">
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
function refreshdiv(){
location.reload(true);
}
</script>
</head>

<script type="text/javascript" src="extras/tuvoz/dynifs.js"></script>
<body onload="DYNIFS.resize('agenda')">
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="187"></td>
	<td width="590"><div class="texto_Gris" align="right" style="margin-right:20px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td></tr></table></td></tr>
      <tr>
        <td width="5"><img src="../../images/spacer.gif" width="5" height="11" /></td>
        <td width="789" valign="top" align="center">
<table width="788" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#CCCCCC">
    <td colspan="2"><div align="center" class="texto_bold">USUARIOS</div></td>
	<td bgcolor="#CCCCCC"><div align="center"><a href="#" onclick="NewWindow('nuevoUsu.php','categoria','420','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nuevo usuario" style="text-decoration:none;"><img src="imagenes/cruz-mas-25_1.png" width="25" height="25" border="0" /></a>&nbsp;&nbsp;
	
	<?php if($usuarioadm=="Administrador"){ ?>
	<a href="#" onclick="NewWindow('TXT/exportar.php','categoria','420','200','no'); return false;" class="Negro_12px_bold"   title="Exportar nuevos usuarios" style="text-decoration:none;"><img src="imagenes/exportar.png" width="25" height="25" border="0" /></a>
	<?php } ?>
	</div></td>
  </tr>
  <tr bgcolor="#000000">
   
    <td width="398" align="center" class="letrasblancas">NOMBRE</td>
    <td width="384" ><div align="center" class="letrasblancas">TEL&Eacute;FONO</div></td>
   <td width="384" ><div align="center" class="letrasblancas">ESTATUS</div></td>
  
    
	

  </tr>
  <? 

  include('coneccion.php');
  $link=Conectarse();



  
    $tirasql="SELECT * FROM m_lista_imolko ORDER BY m_lista_imolko_id DESC";
	 $result = mysql_query($tirasql,$link);
  $numero=mysql_num_rows($result);
if($numero==0){
?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><span class="titulo_entrevista">NO HAY USUARIOS REGISTRADOS</span></td>
  </tr>
<?php
}
    while ($row = mysql_fetch_array($result)){ 
     $m_lista_imolko_id=$row['m_lista_imolko_id'];
	 $m_lista_imolko_nombre=$row['m_lista_imolko_nombre'];
	 $m_lista_imolko_telefono=$row['m_lista_imolko_telefono'];
	  $m_bitacora_sms_ip=$row['m_bitacora_sms_ip'];
	  $m_lista_imolko_estado=$row['m_lista_imolko_estado'];
  ?>

  <tr bgcolor="#FFFFFF">

   
    <td align="center"><span class="titulo_entrevista"><? echo "$m_lista_imolko_nombre";?></span></td>
   
    <td><div align="center" class="titulo_entrevista"><? echo "$m_lista_imolko_telefono";?></div></td>
    <td><div align="center" class="titulo_entrevista"><img src="imagenes/<? if($m_lista_imolko_estado=='P'){ echo'rojo.png';}   if($m_lista_imolko_estado=='A'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_lista_imolko_estado=='P'){ echo'En Espera';}   if($m_lista_imolko_estado=='A'){ echo'Activo';} ?>"></div></td>
    
	
	
  </tr>
 <? } ?>
 
 
 <tr bgcolor="#FFFFFF">

   
    <td align="center" colspan="5"><a href="index2.php" title="Volver"><img src="imagenes/back30_1.png" width="30" height="30" vspace="5" border="0" title="Volver" /></a>
	
	
	</td>
  </tr>
</table>		</td>
        </tr>
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
