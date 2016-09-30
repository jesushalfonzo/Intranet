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
	 <?php 
		$urlphpserver= curPageURL();
		
		$aux_server=explode("/",$urlphpserver);
		$server=$aux_server[0]."//".$aux_server[2];
		$ruta=$server."/secciones"; 
		//echo $ruta;  
		$serveractual=$aux_server[0]."//".$aux_server[2]."";
		
		function curPageURL() {
		$pageURL = 'http';
		// if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
		}
		$actuapage="INDEX";
		
		if(!isset($masterSeccio)){ $masterSeccio=""; }
 ?>
<table width="1020" height="190" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="190" height="190"><a href="<?php echo $serveractual; ?>" style="text-decoration:none;"><div style="height:190px; width:190px;">&nbsp;</div></a></td>
    <td width="830" height="190">
         <table width="830" height="190" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="830" height="150">
    <table width="830" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="258" height="150">
        <table width="258" height="150" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="258" height="98" class="Hora_Alto"><div style="width:258px; margin-top:48px;" ><iframe width="258" height="50" frameborder="0" allowtransparency="allowtransparency" src="<? echo $serveractual; ?>/secciones/cabecera/hora.php"></iframe></div></td>
  </tr>
  <tr>
    <td width="258" height="52" class="dia_medio"><div style="width:258px; margin-bottom:28px;"><?php echo date("d", time()); ?> <?php echo MesLetras(date("m", time()));?> <?php echo date("Y", time()); ?></div></td>
  </tr>
 </table>
        </td>
        <td width="252"  class="web_alto" valign="top"><table width="252" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="252">
            <table width="252"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" >
	
	    <?php

if($masterSeccio!=""){
 ?>
	<a href="<?php echo $serveractual; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('inicio','','<?php echo $serveractual; ?>/img/2_inicio_122x106.png',1)"><img src="<?php echo $serveractual; ?>/img/1_inicio_122x106.png" name="inicio" width="122" height="104" border="0" id="inicio" /></a>
	
	<?php } else { ?>
	<img src="<?php echo $serveractual; ?>/img/spc.gif" name="inicio" width="122" height="106" border="0" id="inicio" />	<?php } ?>	</td>
    <td valign="top"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('mapa','','<?php echo $serveractual; ?>/img/2_mapa_128x106.png',1)"><img src="<?php echo $serveractual; ?>/img/1_mapa_128x106.png" name="mapa" width="128" height="106" border="0" id="mapa" /></a></td>
  </tr>
</table>
            </td>
          </tr>
          <tr>
            <td  class="web_alto"><div style="width:250px; margin-top:8px; text-align: center; margin-bottom:1px;" >www.telesurtv.net</div></td>
          </tr>
        </table></td>
        <td width="320" height="150">
         <table width="320" height="150" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="320" height="106">
    <table width="320" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="160" height="106"><a href="http://www.telesurtv.net" onmouseover="MM_swapImage('web','','<?php echo $serveractual; ?>/img/04_web_01_160x106.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo $serveractual; ?>/img/03_web_160x106.jpg" name="web" width="160" height="106" border="0" id="web" /></a></td>
    <td width="160" height="106"><a href="http://correo.telesurtv.net" onmouseover="MM_swapImage('correo','','<?php echo $serveractual; ?>/img/06_correo_01_160x106.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo $serveractual; ?>/img/05_correo_160x106.jpg" name="correo" width="160" height="106" border="0" id="correo" /></a></td>
  </tr>
 </table>
    </td>
  </tr>
  <tr>
    <td width="320" height="44">
<!--Búsqueda Google -->
<FORM method=GET action="http://www.google.com/search" target="_blank">
<div style="margin-left:20px; margin-top:8px;">

<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0"
ALT="Google" align="absmiddle" width="64" height="26"></A>
<INPUT TYPE=text name=q size="10" maxlength=255 value="">
<INPUT TYPE=hidden name=hl value=es>
<INPUT type=submit name=btnG VALUE="Buscar">
</td></tr></TABLE>

</div>
</FORM>
<!-- Búsqueda Google --> </td>
  </tr>
 
 </table>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="830" height="40">
     <table width="830" height="40" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="238" height="40">
	<?php if($masterSeccio=="CORPORATIVA"){ ?>
	
<img src="<? echo $serveractual; ?>/img/21_Corporativa_01_238x40.jpg" width="238" height="40" name="A0" />
	
	
	<?php } else { ?>
	
		<a href="<? echo $serveractual; ?>/secciones/corporativa/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A0','','<? echo $serveractual; ?>/img/21_Corporativa_01_238x40',1)"><img src="<? echo $serveractual; ?>/img/20_Corporativa_01_238x40.jpg" width="238" height="40" name="A0" border="0" /></a>
	<?php } ?>
	</td>
	
    <td width="121" height="40">
	
	<?php if($masterSeccio=="RRHH"){ ?>
	
	<img src="<? echo $serveractual; ?>/img/23_RRHH_01_121x40.jpg" width="121" height="40" name="A1" />
	
	<?php } else { ?>
	
		<a href="<? echo $serveractual; ?>/secciones/RRHH/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A1','','<? echo $serveractual; ?>/img/23_RRHH_01_121x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/22_RRHH_01_121x40.jpg" name="A1" width="121" height="40" border="0" id="A1" /></a>

	<?php } ?>
	
	</td>
	
	
    <td width="196" height="40">
	
	<?php if($masterSeccio=="GENTE"){ ?>
		<img src="<? echo $serveractual; ?>/img/25_genteTelesur_196x40.jpg" width="196" height="40" name="A2" />
	
	
	
		<?php } else { ?>
		
		<a href="<? echo $serveractual; ?>/secciones/gente/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A2','','<? echo $serveractual; ?>/img/25_genteTelesur_196x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/24_genteTelesur_196x40.jpg" name="A2" width="196" height="40" border="0" id="A2" /></a>

	<?php } ?>
	
	
	</td>
	
	
    <td width="252" height="40">
	
	<?php if($masterSeccio=="ENTRETENIMIENTO"){ ?>
	
	<img src="<? echo $serveractual; ?>/img/27_fueraOficio_252x40.jpg" width="252" height="40" name="A3" />
	
		<?php } else { ?>
		
		<a href="<? echo $serveractual; ?>/secciones/entretenimiento/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A3','','<? echo $serveractual; ?>/img/27_fueraOficio_252x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/26_fueraOficio_252x40.jpg" name="A3" width="252" height="40" border="0" id="A3" /></a>
	
	<?php } ?>
	
	
	</td>
	
	
    <td width="23" height="40">&nbsp; </td>
  </tr>
 </table>
   </td>
  </tr>
 </table>
    </td>
  </tr>
 </table>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://intranet.telesurtv.net/estadisticas/" : "http://intranet.telesurtv.net/estadisticas/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p></p></noscript>
<!-- End Piwik Tracking Code -->