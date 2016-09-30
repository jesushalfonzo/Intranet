<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="GENTE";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Gente teleSUR - Nuevos ingresos</title>


<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg','../../img/32_1arriba_20x20.jpg','../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_1020x816.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="26">
   <?php include("botones.php"); ?>
    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1019" height="30" background="../../img/29_3_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:224px;">Nuevos ingresos</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="454" background="../../img/186_imagenes_1020x454.jpg">
    <table width="1020" height="454" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="184" height="454">&nbsp;</td>
    <td width="650" height="454">
    <table width="650" height="404" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="69">&nbsp;</td>
  </tr>
  
  
  <?php
  /*
$tirasql="SELECT * FROM m_nuevos_ingresos, m_departamentos WHERE m_nuevos_ingresos_iddep = m_departamentos_id ORDER BY  m_nuevos_ingresos_id  DESC LIMIT 0,2";
	   $resultado=mysql_query($tirasql,$link); 
	$talnumero=mysql_num_rows($resultado);
  		while ($row = mysql_fetch_array($resultado)){ 
     $id=$row['m_nuevos_ingresos_id'];
     $nombre=$row['m_nuevos_ingresos_nombre'];
     $m_nuevos_ingresos_fecha =date("d-m-Y", strtotime($row['m_nuevos_ingresos_fecha']));
	 $departamento=$row['m_nuevos_ingresos_iddep'];
	 $m_nuevos_ingresos_cargo =$row["m_nuevos_ingresos_cargo"];
	 $m_nuevos_ingresos_foto =$row["m_nuevos_ingresos_foto"];
	 $m_departamentos_nombre =$row["m_departamentos_nombre"];
	 */
	
	 
	 ?>
  <!--<tr>
    <td width="650" height="154">
    <table width="650" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="195" height="154"><div style="width:px; margin-top:5px; margin-bottom:5px; margin-left:5px; margin-right:5px;" class="cuadrado_negro"><img src="../../multimedia/ingresos/<?php echo $m_nuevos_ingresos_foto; ?>" width="180" height="140"  /></div></td>
    <td width="455" valign="top">
    <div class="Arial_11_marron_bold" style="width:443px; margin-bottom:4px; text-align: left; margin-left:10px; margin-top:10px;">NOMBRE</div>
    <div class="Arial_18_bold" style="width:443px; text-align: left; margin-bottom:5px; margin-left:10px;"><?php echo $nombre; ?></div>
    <div class="Arial_11_marron_bold" style="width:443px; margin-bottom:4px; text-align: left; margin-left:10px; margin-top:5px;">DIRECCIÓN</div>
    <div class="Arial_18_bold" style="width:443px; text-align: left; margin-bottom:5px; margin-left:10px;"><?php echo $m_departamentos_nombre; ?></div>
    <div class="Arial_11_marron_bold" style="width:443px; margin-bottom:4px; text-align: left; margin-left:10px; margin-top:5px;">CARGO</div>
    <div class="Arial_18_bold" style="width:443px; text-align: left; margin-bottom:5px; margin-left:10px;"><?php echo $m_nuevos_ingresos_cargo; ?></div>
    </td>
  </tr>
</table>

    </td>
  </tr>
-->
  <?php // } ?>
    <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>

    </td>
    <td width="188" height="454">&nbsp;</td>
  </tr>
</table>

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