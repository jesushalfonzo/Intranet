<? include ('../../../extras/connect.php');?>
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
<title>Agregar EFEM�RIDES</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><span class="etiquetas">Agregar Efemerides</span></p>	
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="etiquetas"><span class="etiquetas">T�tulo: </span>
<input name="contenido" type="text" class="texto" id="contenido" size="70" />
</td>
</tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">A�o:&nbsp;&nbsp;&nbsp; </span> 
<input name="ano" type="text" class="texto" id="ano_efe" size="15" />
</td>
  </tr>
 <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td class="texto"><span class="etiquetas">Fecha: </span> 
	
<input name="fecha" type="text" class="texto" id="fecha_efe" size="15" readonly="yes" />&nbsp;<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>
</td>
  <tr>
    <td align="right" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
