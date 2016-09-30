<?php include('../../extras/coneccion.php');
$link=Conectarse();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />
<title>Intranet teleSUR - Cumpleañeros del mes</title>

<script type="text/javascript" src="library/jquery-1.4.2.min.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="library/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        vertical: true,
        scroll: 2
    });
});


</script>
<link rel="stylesheet" type="text/css" href="library/skin.css" />
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>

<ul id="mycarousel" class="jcarousel jcarousel-skin-tango">

	<?php 
	 if (isset($_GET["dia"])){$diaActual=$_GET["dia"];}else{ $diaActual=date('d', time()); }	
	 if (isset($_GET["mes"])){$mesActual=$_GET["mes"];}else{ $mesActual=date('m', time()); }
		
		if ($diaActual==00){
		$SQL="SELECT * FROM m_cumpleaneros, m_departamentos WHERE m_cumpleaneros_mes= '$mesActual' AND m_cumpleaneros_direccion=m_departamentos_id ORDER BY m_cumpleaneros_dia ASC";
		}
		else{
	$SQL="SELECT * FROM m_cumpleaneros, m_departamentos WHERE m_cumpleaneros_dia ='$diaActual' AND m_cumpleaneros_mes= '$mesActual' AND m_cumpleaneros_direccion=m_departamentos_id ORDER BY m_cumpleaneros_nombre";
	}
	$querycumple=mysql_query($SQL, $link);
	$numerocumples=mysql_num_rows($querycumple);
	while($rowcumple=mysql_fetch_array($querycumple)){
	$m_cumpleaneros_nombre=$rowcumple["m_cumpleaneros_nombre"];
	$m_departamentos_nombre=$rowcumple["m_departamentos_nombre"];
	$m_cumpleaneros_dia=$rowcumple["m_cumpleaneros_dia"];
	$m_cumpleaneros_mes=$rowcumple["m_cumpleaneros_mes"];
	$m_cumpleaneros_foto=$rowcumple["m_cumpleaneros_foto"];
	
	 ?>
	
	<li>
    <table width="314" height="114" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
      <tr>
        <td width="114"><div style="width:102px; margin-top:6px; margin-bottom:6px; margin-left:6px; margin-right:6px;"><img src="../../multimedia/fotoscumple/<?php echo $m_cumpleaneros_foto; ?>" width="100" height="100" class="cuadrado_marron" /></div></td>
        <td width="210">
        <div class="Arial_10_regular_marron" style="width:px; margin-top:40px;"><?php echo $m_cumpleaneros_dia; ?> de <?php echo mesLetras($m_cumpleaneros_mes); ?></div>
        <div class="Arial_12_bold_negro" style="width:px; margin-top:2px; margin-bottom:4px; text-align: left;"><strong><?php echo $m_cumpleaneros_nombre; ?></strong></div>
        <div class="Arial_10_regular_marron" style="width:px; margin-bottom:26px;"><strong><?php  echo $m_departamentos_nombre; ?></strong></div>
        </td>
      </tr>
    </table>
	</li>
	<?php } ?>
		
	<?php if($numerocumples==0){ ?>
	
		<li>
    <table width="314" height="114" border="0" cellspacing="0" cellpadding="0" class="cuadrado_marron">
      <tr>
        <td width="114"><div style="width:102px; margin-top:6px; margin-bottom:6px; margin-left:6px; margin-right:6px;"><img src="../../img/161_img_100x100.jpg" height="100" width="100" border="0" /></div></td>
        <td width="210">
        <div class="Arial_10_regular_marron" style="width:px; margin-top:40px;"><?php echo $diaActual; ?> de <?php echo mesLetras($mesActual); ?></div>
        <div class="Arial_12_bold_negro" style="width:px; margin-top:2px; margin-bottom:4px; text-align: left;"><strong>No hay cumpleañeros para este día</strong></div>        </td>
      </tr>
    </table>
	</li>
	
	<?php } ?>
	
	</ul>
</body>
</html>

<?php 

function MesLetras($mes)
{
$meses_ingles = $mes; //saco el mes 
$dame_meses="";
switch ($meses_ingles) { // hacemos los casos     
  case "1": $dame_meses = "enero"; break;//enero
  case "2": $dame_meses = "febrero"; break;
  case "3": $dame_meses = "marzo"; break;
  case "4": $dame_meses = "abril"; break;//abril
  case "5": $dame_meses = "mayo"; break;
  case "6": $dame_meses = "junio"; break;
  case "7": $dame_meses = "julio"; break;//julio
  case "8": $dame_meses = "agosto"; break;
  case "9": $dame_meses = "septiembre"; break;
  case "10": $dame_meses = "octubre"; break;
  case "11": $dame_meses = "noviembre"; break;
  case "12": $dame_meses = "diciembre"; break;//diciembre
  } 
  return $dame_meses;
  }
	?>

