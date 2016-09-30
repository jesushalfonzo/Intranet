<?php include('logeo.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>TeleSUR - Aplicativo - Consultor&iacute;a Jur&iacute;dica</title>
 
<style type="text/css">
<!--
.Estilo6 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight:bold; }
.Estilo7 {color: #000000; font-weight: bold; font-style: italic; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.scroll {
     width:270px;
     height:50px;
     background-color:#F2F2F2;
     overflow:auto;
	 font-size: 11px;
}
.flotante {
  background: beige;
  border: solid 1px black;
  float: left;
  width:270px;
  position: fixed;
  top: 110px;
  left: 30px;
  padding: 3px;
  visibility:hidden;
  font-size:9px;
}

-->
</style>
<link rel="stylesheet" type="text/css" href="styles.css" title="default" media="screen" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="datePicker.js"></script>
<script type="text/javascript">
$(document).ready(init);
function init()
{
	$('input#date1').datePicker();


}
</script>
</head>

<?php

include('../../../extras/coneccion.php');
$link=Conectarse();

$idcita=addslashes($_GET["idcita"]);
$SQl="SELECT * FROM m_citas_juridicas WHERE m_citas_juridicas_id='$idcita'";
$sqlcita=mysql_query($SQl, $link);
$rowcita=mysql_fetch_array($sqlcita);
$m_citas_juridicas_id=$rowcita['m_citas_juridicas_id'];
$m_citas_juridicas_idsolicitud=$rowcita['m_citas_juridicas_idsolicitud'];
$fechacita=$rowcita['m_citas_juridicas_fechacita'];
$fechaantescita=date('d/m/Y', strtotime($fechacita));
$horaantescita=date('h:i A', strtotime($fechacita));
$horaasignar=date('H:i:s', strtotime($fechacita));
?>
<body>
<form method="post" name="formulario_inicio" id="formulario_inicio" action="editarcitaPHP.php">
<br />

<table width="351" border="0" align="center">
  <tr bgcolor="#FF0000">
    <td height="25" bgcolor="#006699"><div align="center" class="Estilo6" >Editar Cita </div></td>
    </tr>
  <tr>  	 
    <td width="209" height="101" align="center">

	<table width="345" border="0" cellpadding="0" cellspacing="0">
	<tr><td colspan="2"><img src="../img/spacer.gif" width="50" height="30" />
	<input type="hidden" name="idcita" value="<?php echo $idcita; ?>" />
	<input type="hidden" name="idsolicitud" value="<?php echo $m_citas_juridicas_idsolicitud; ?>" />
	
	</td>
	</tr>
	<tr>
	  <td width="75" valign="top" class="Estilo7"><div style="margin-left:20px;">Fecha:</div></td>
	  <td width="270" valign="top"><input name="fechaasignada" type="text" class="date-picker" id="date1"  onfocus="document.getElementById('date1').style.borderColor='#666600'; document.getElementById('date1').style.backgroundColor='#fef9e6;';" onBlur="document.getElementById('date1').style.borderColor='#003875'; document.getElementById('date1').style.backgroundColor='#ffffff;';" value="<?php echo $fechaantescita; ?>" size="15" /></td></tr>
	  <tr><td colspan="2"><img src="../img/spacer.gif" width="50" height="30" /></td>
	</tr>
	<tr>
	  <td valign="top" class="Estilo7"><div style="margin-left:20px;">Hora:</div></td>
	  <td valign="top"><select name="horaasignada" >
				  <option value="00:00:00" <?php if($horaasignar=="Sin Asignar"){echo 'selected="selected"'; } ?> >Sin Asignar</option>
				  <option value="07:00:00" <?php if($horaasignar=="07:00:00"){echo 'selected="selected"'; } ?>>7:00 AM</option>
				  <option value="07:30:00" <?php if($horaasignar=="07:30:00"){echo 'selected="selected"'; } ?>>7:30 AM</option>
				  <option value="08:00:00" <?php if($horaasignar=="08:00:00"){echo 'selected="selected"'; } ?>>8:00 AM</option>
				  <option value="08:30:00" <?php if($horaasignar=="08:30:00"){echo 'selected="selected"'; } ?>>8:30 AM</option>
				  <option value="09:00:00" <?php if($horaasignar=="09:00:00"){echo 'selected="selected"'; } ?>>9:00 AM</option>
				  <option value="09:30:00" <?php if($horaasignar=="09:30:00"){echo 'selected="selected"'; } ?>>9:30 AM</option>
				  <option value="10:00:00" <?php if($horaasignar=="10:00:00"){echo 'selected="selected"'; } ?>>10:00 AM</option>
				  <option value="10:30:00" <?php if($horaasignar=="10:30:00"){echo 'selected="selected"'; } ?>>10:30 AM</option>
				  <option value="11:00:00" <?php if($horaasignar=="11:00:00"){echo 'selected="selected"'; } ?>>11:00 AM</option>
				  <option value="11:30:00" <?php if($horaasignar=="11:30:00"){echo 'selected="selected"'; } ?>>11:30 AM</option>
				  <option value="12:00:00" <?php if($horaasignar=="12:00:00"){echo 'selected="selected"'; } ?>>12:00 M </option>
				  <option value="12:30:00" <?php if($horaasignar=="12:30:00"){echo 'selected="selected"'; } ?>>12:30 PM</option>
				  <option value="13:00:00" <?php if($horaasignar=="13:00:00"){echo 'selected="selected"'; } ?>>01:00 PM</option>
				  <option value="13:30:00" <?php if($horaasignar=="13:30:00"){echo 'selected="selected"'; } ?>>01:30 PM</option>
				  <option value="14:00:00" <?php if($horaasignar=="14:00:00"){echo 'selected="selected"'; } ?>>02:00 PM</option>
				  <option value="14:30:00" <?php if($horaasignar=="14:30:00"){echo 'selected="selected"'; } ?>>02:30 PM</option>
				  <option value="15:00:00" <?php if($horaasignar=="15:00:00"){echo 'selected="selected"'; } ?>>03:00 PM</option>
				  <option value="15:30:00" <?php if($horaasignar=="15:30:00"){echo 'selected="selected"'; } ?>>03:30 PM</option>
				  <option value="16:00:00" <?php if($horaasignar=="16:00:00"){echo 'selected="selected"'; } ?>>04:00 PM</option>
				  <option value="16:30:00" <?php if($horaasignar=="16:30:00"){echo 'selected="selected"'; } ?>>04:30 PM</option>
				  <option value="17:00:00" <?php if($horaasignar=="17:00:00"){echo 'selected="selected"'; } ?>>05:00 PM</option>
				  <option value="17:30:00" <?php if($horaasignar=="17:30:00"){echo 'selected="selected"'; } ?>>05:30 PM</option>
				  <option value="18:00:00" <?php if($horaasignar=="18:00:00"){echo 'selected="selected"'; } ?>>06:00 PM</option>
				   </select></td></tr>
	</table>
	  
	  
	  <br />
	  <br />
	 <input type="image" border="1" name="button" value="guardar" width="30" height="30" style="color: #fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../img/guradar_grande2.png" alt="Guardar... " title="Guardar... " />
	  </td>
    </tr>
</table>
  <br />

</form>


	

</body>
</html>


