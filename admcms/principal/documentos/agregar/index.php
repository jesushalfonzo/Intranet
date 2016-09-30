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
<title>Agregar Cumpleañeros del mes</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<p><span class="etiquetas">Parrilla en Bruto </span></p>	
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="etiquetas"><span class="etiquetas">Titulo: </span></td>
<td class="etiquetas"><input name="titulo" type="text" class="texto" id="titulo" size="70" /></td>
</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Archivo:</span></td>
  
    <td><input type="hidden" name="MAX_FILE_SIZE" value="30000000">
	<input type="file" name="archivo" size="70" /> </td></tr>
  <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>

   
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
