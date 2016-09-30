	<?php 
	include('../../extras/coneccion.php');
	$link=Conectarse();
	$diaActual=$_GET["dia"];
	$mesActual=$_GET["mes"];
	$SQLcumple="SELECT * FROM m_cumpleaneros, m_departamentos WHERE m_cumpleaneros_dia ='$diaActual' AND m_cumpleaneros_mes= '$mesActual' AND m_cumpleaneros_direccion=m_departamentos_id ORDER BY m_cumpleaneros_nombre ASC";
	$query=mysql_query($SQLcumple, $link);
	//echo $num=mysql_num_rows($querycumple);
	while ($row=mysql_fetch_array($query)){
	$m_cumpleaneros_nombre=utf8_encode($row["m_cumpleaneros_nombre"]);
	$m_departamentos_nombre=utf8_encode($row["m_departamentos_nombre"]);
	$m_cumpleaneros_dia=$row["m_cumpleaneros_dia"];
	$m_cumpleaneros_mes=$row["m_cumpleaneros_mes"];
	$m_cumpleaneros_foto=$row["m_cumpleaneros_foto"];

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