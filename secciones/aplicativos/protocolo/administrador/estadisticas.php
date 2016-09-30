<? include('logeo.php'); ?>
<? $ruta="../../../"; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Trivia </title>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="cal2.js">

</script>

<script language="javascript" src="cal_conf2.js"></script>
</head>
<style type="text/css">
.pequeno {

	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
</style>
<script type="text/javascript" src="../../../extras/tuvoz/dynifs.js"></script>
<body>
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../../../cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  
  <tr>
    <td><table width="796" cellspacing="0" cellpadding="0">
	<tr><td colspan="2">
	<form name="fechas" id="fechas" action="stadistc.php" target="central" method="post">
	<table cellpadding="0" cellspacing="0" border="0"><tr>
	<td width="417">
	   <div align="center" style="margin-left:20px;"><span class="titulo_entrevista" > Desde</span>
	       <input type="text" align="texttop" name="desde" class="pequeno"  size="10"  readonly="true" style="text-align:center; ">
	       <a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>
	       <span class="titulo_entrevista">Hasta</span>
	       <input type="text" align="texttop" name="hasta" class="pequeno" size="10"   readonly="true"  style="text-align:center;" >
	       <a href="javascript:showCal('calendariohasta')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>        
	     <input name="Submit" type="submit" class="pequeno" value="Listar" style="margin-left:10px;" />		
	     </div></td>
    <td width="362"><div class="texto_Gris" align="right" style="margin-right:50px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sessión</a></div></td>
  </tr></table>
	</form></td></tr>
      <tr>
        <td width="11"><img src="../../../images/spacer.gif" width="11" height="11" /></td>
        <td width="783" valign="top" align="center">
<iframe name="central" scrolling="no" id="central" frameborder="0" width="770" height="400" onload="DYNIFS.resize('central')" src="stadistc.php" style="width:758px; height:400px; border:0px dotted #BEBEBE;"></iframe>		</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="../../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('../../../pie_pagina.php'); ?>
</table>

<blockquote>&nbsp;</blockquote>
</body>
</html>
