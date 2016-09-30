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
        <td width="252" height="150" class="web_alto"><div style="width:252px; margin-top:115px; text-align: center;" >www.telesurtv.net</div></td>
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
    <td width="320" height="44">&nbsp;</td>
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
	
		<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A1','','<? echo $serveractual; ?>/img/23_RRHH_01_121x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/22_RRHH_01_121x40.jpg" name="A1" width="121" height="40" border="0" id="A1" /></a>

	<?php } ?>
	
	</td>
	
	
    <td width="196" height="40">
	
	<?php if($masterSeccio=="GENTE"){ ?>
		<img src="<? echo $serveractual; ?>/img/25_genteTelesur_196x40.jpg" width="196" height="40" name="A2" />
	
	
	
		<?php } else { ?>
		
		<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A2','','<? echo $serveractual; ?>/img/25_genteTelesur_196x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/24_genteTelesur_196x40.jpg" name="A2" width="196" height="40" border="0" id="A2" /></a>

	<?php } ?>
	
	
	</td>
	
	
    <td width="252" height="40">
	
	<?php if($masterSeccio=="ENTRETENIMIENTO"){ ?>
	
	<img src="<? echo $serveractual; ?>/img/27_fueraOficio_252x40.jpg" width="252" height="40" name="A3" />
	
		<?php } else { ?>
		
		<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('A3','','<? echo $serveractual; ?>/img/27_fueraOficio_252x40.jpg',1)"><img src="<? echo $serveractual; ?>/img/26_fueraOficio_252x40.jpg" name="A3" width="252" height="40" border="0" id="A3" /></a>
	
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