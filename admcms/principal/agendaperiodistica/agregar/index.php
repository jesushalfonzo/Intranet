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
<title>Agregar EFEMËRIDES</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><span class="etiquetas">Agenda Periodistica</span></p>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="etiquetas"><span class="etiquetas">convoca:</span><br /> 

<input name="convoca" type="text" class="texto" id="contenido" size="70" />
</td>
</tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>

<td><span class="etiquetas">Evento: </span>
<textarea name="descripcion" id="desc" rows="5" cols="60"></textarea></td></tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Fecha: </span> 
	<a href="javascript:showCal('calendario')"><img src="cal.jpg" width="16" height="15" border="0" align="texttop" /></a>
<input name="fecha" type="text" class="texto" id="fecha_efe" size="15" readonly="yes" />
</td></tr>
<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">hora:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> 
      <input name="hora" type="text" class="texto" id="hora" size="15" />&nbsp;<span class="etiquetas">(24h)</span>
</td>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
  <td class="texto"><span class="etiquetas">Lugar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span> 
    <input type="text" name="lugar" id="lugar" class="texto" size="70" /></td></tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
