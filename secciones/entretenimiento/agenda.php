<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Entretenimiento - Agenda Cultural</title>
<script type="text/javascript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>


<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 610px;
	visibility: inherit;
	SCROLLBAR-FACE-COLOR:#F0F0F0;
	SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-SHADOW-COLOR: #CCCCCC;
	SCROLLBAR-3DLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-ARROW-COLOR: #1D396B;
	SCROLLBAR-TRACK-COLOR: #FFFFFF;
	SCROLLBAR-DARKSHADOW-COLOR: #CCCCCC;
	overflow-x: hidden;
	clip: rect(auto,auto,270px,auto);
}
</style>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });

				// Tabs
				$('#tabs').tabs();

				// Dialog
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() {
							$(this).dialog("close");
						},
						"Cancel": function() {
							$(this).dialog("close");
						}
					}
				});

				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});

				// Progressbar
				$("#progressbar").progressbar({
					value: 20
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
		</script>
		<style type="text/css">
		.pestanas{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		}
		</style>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_01_1020x1100.jpg">
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
    <td width="1019" height="30" background="../../img/29_4_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:244px;">Agenda Cultural</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../img/194_Imagen_02_1020x738.jpg" valign="top">
	
	<table width="1020" height="738" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="90">
    <table width="1020" height="85" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="510" height="85"><div class="Arial_18_marron_Bold" style="width:450px; margin-top:25px; margin-bottom:40px; margin-left:60px;">AGENDA CULTURAL</div></td>
    <td width="510" align="right" class="Arial_46_verde_bold"><div style="width:px; margin-top:5px; margin-bottom:30px; margin-right:70px;"><?php echo MesLetras(date('m', time())); ?> <?php echo date('d', time()); ?></div></td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="610" valign="top">
    <table width="1020" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="69" height="610" valign="top">&nbsp;</td>
    
    <td width="18" height="610">&nbsp;</td>
    <td width="835" height="610" valign="top" class="Lineal_cuadrado_azulito">
    <div class="ScrollDocumentos"><table width="835" border="0" cellspacing="0" cellpadding="0">
	
	
	
	
      <tr>
        <td width="835" height="194">
		
		
		
		
			<? 
			$SQL2="SELECT * FROM m_inf_interes ORDER BY m_inf_interes_id DESC LIMIT 0,3";
			$query2=mysql_query($SQL2, $link);
			while ($row2=mysql_fetch_array($query2)){
			$titulo2=$row2['m_inf_interes_titulo'];
			$id2=$row2['m_inf_interes_id'];
			$m_inf_interes_sumario=$row2['m_inf_interes_sumario'];
			$m_inf_interes_images =$row2['m_inf_interes_images'];
			$m_inf_interes_fecha=date('d-m-Y', strtotime($row2['m_inf_interes_fecha']));
			$hora=date('H:i', strtotime($row2['m_inf_interes_fecha']));
			$separar=explode('-',$m_inf_interes_fecha);
			$diay=$separar[0];
			$mesy=$separar[1];
			$anoy=$separar[2];
			
			?>
        <table width="835" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="835" headers="12">
    <table width="835" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40" class="AZUL_44B2C3">&nbsp;</td>
    
    <td width="722" class="AZUL_44B2C3">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="835" height="10">&nbsp;</td>
  </tr>
  <tr>
    <td width="835" height="160">
    <table width="835" height="160" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20" height="160">&nbsp;</td>
    <td width="320" height="160">
	<a href="detalle_agenda.php?ckl=<?php echo $id2; ?>">
	<img src="../../imagenes/interes/<? echo"$m_inf_interes_images"; ?>" width="320" height="160" border="0"  />
	</a>
	</td>
    <td width="20" height="160" valign="top"><div style="width:px; margin-top:3px; margin-bottom:140px; margin-right:4px; margin-left:8px;"><img src="../../img/196_img_16x12.jpg" width="16" height="12" /></div></td>
    <td width="466" height="160" valign="top">
    <table width="466" height="156" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="466" height="20">
    <table width="466" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="217" height="20"><div class="Arial_13_Bold_Cursiva" style="width:px; margin-bottom:3px; margin-right:7px;"><? echo dia_semana ($diay, $mesy, $anoy) ?> , <?php echo $diay; ?> de <?php echo MesLetras($mesy); ?> de <?php echo $anoy; ?></div></td>
    <td width="1"><img src="../../img/197_img_1x20.jpg" width="1" height="20" /></td>
  <td width="248"><div class="Arial_13_Bold_Cursiva" style="width:px; margin-bottom:3px; margin-right:7px; margin-left:14px;"><?php echo $hora; ?></div></td>
  </tr>
</table>
    </td>
  </tr>
  <tr>
    <td>
</td>
  </tr>
  <tr>
    <td height="34" valign="top"><div class="Arial_18_marron_regular" style="width:px; margin-right:7px; margin-bottom:6px; margin-top:20px;"><a href="detalle_agenda.php?ckl=<?php echo $id2; ?>" class="Arial_18_marron_regular" style="text-decoration:none;"><? echo"$titulo2"; ?></a></div></td>
  </tr>
  <tr>
    <td height="86" valign="top"><div class="Arial_14_regular_666666" style="width:px; margin-right:14px; text-align: justify;"><? echo"$m_inf_interes_sumario"; ?></div></td>
  </tr>
</table>

    </td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
<?php } ?>
        </td>
      </tr>

     
    </table></div>
    </td>
    <td width="76" height="608">&nbsp;</td>
  </tr>
</table>

    </td>
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