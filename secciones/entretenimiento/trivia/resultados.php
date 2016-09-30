<?php include('logeo2.php');?> 
<?
 include ('../../../extras/coneccion.php');
$linky=Conectarse();
$id_master=$_GET["idmaster"];
$idtrivia=$_GET["idtrivia"];
$SQL_resultado="SELECT * FROM m_trivia_participantes, r_trivia_control, r_trivia_pregunata_opc WHERE  m_trivia_participantes_id='$id_master' and r_trivia_control_idmaster='$id_master' and r_trivia_pregunata_opc_correcta='SI' and r_trivia_pregunata_opc_id=r_trivia_control_idopcion";
$query_resultado=mysql_query($SQL_resultado, $linky);
$acertadas_resultado=mysql_num_rows($query_resultado);
$acertadas_resultado=$acertadas_resultado*10;
?>
<? 

//ESTE PROCESO LLENA LA TABLA FINAL
$Totalsql="SELECT MAX( r_trivia_control.r_trivia_control_tiempo )  AS max_fecha, MIN(r_trivia_control.r_trivia_control_tiempo)  AS min_fecha
FROM m_trivia_participantes, r_trivia_control, r_trivia_pregunata_opc WHERE m_trivia_participantes_idtrivia = '$idtrivia' AND r_trivia_control_idmaster = '$id_master'";
$querys=mysql_query($Totalsql, $linky);
$raw=mysql_fetch_array($querys);
$minimo=$raw['min_fecha'];
$maximo=$raw['max_fecha'];
$diferencia = date_diffx($minimo, $maximo);
$tiempo_empleado='0'.$diferencia['hours'] . ':'.'0'. $diferencia['minutes'] . ':' . $diferencia['seconds'] .'';
//LOS TIEMPOS

//CREO LA TABLA NUEVA PARA FACILITAR EL CONTROL DE LSO DATOS
$newSQL="INSERT INTO m_trivia_reslutados VALUES(Null, '$usuario', '$idtrivia', '$acertadas_resultado', '$tiempo_empleado')";
//echo "sql:  " . $newSQL;
$insertalo=mysql_query($newSQL, $linky);

///


//FIN DEL PROCESO TABLA FINAL
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Trivia</title>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
<body>

<table width="570" height="270" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="40"><div class="Arial_14_bold_negro" style="width:px; margin-left:20px; margin-right:60px; margin-top:6px; margin-bottom:6px; text-align: center;"></div></td>
  </tr>
  <tr>
    <td height="55"><div style="width:px; margin-left:20px; margin-right:20px; margin-top:6px; margin-bottom:6px; text-align: center;"><span class="Arial_18_marron_Bold" >Obtuvistes</span>  <span class="Arial_44_rojo_Bold" ><? echo $acertadas_resultado ?></span> <span class="Arial_18_marron_Bold" >puntos</span></div></td>
  </tr>
  <tr>
    <td height="105"><div class="Arial_13_regular_negro" style="width:px; margin-left:20px; margin-right:20px; margin-top:6px; margin-bottom:6px; text-align: center;">La próxima semana se darán a conocer los ganadores de trivia.</div></td>
  </tr>
   <tr>
    <td height="44" align="center"><a href="cerrar_session.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen10','','../../../img/239_imagenes_122x44.jpg',1)"><img src="../../../img/240_imagenes_122x44.jpg" name="Imagen10" width="122" height="44" border="0" id="Imagen10" /></a></td>
  </tr>
  <tr>
    <td height="20"><div class="Arial_12_bold_negro" style="width:px; margin-left:20px; margin-right:60px; margin-top:2px; margin-bottom:2px; text-align: left;"></div></td>
  </tr>
</table>


</body>
</html>
<?php
function date_diffx($from, $to)
{
    if (!is_integer($from))
    {
        $from = strtotime($from);
    }
    if (!is_integer($to))
    {
        $to = strtotime($to);
    } 
    $diff = $to - $from;
    $return['days'] = floor($diff / (24 * 60 * 60));
    $diff -= $return['days'] * 24 * 60 * 60;
    $return['hours'] = floor($diff / (60 * 60));
    $diff -= $return['hours'] * 60 * 60;
    $return['minutes'] = floor($diff / (60));
    $diff -= $return['minutes'] * 60;
    $return['seconds'] = floor($diff);
    return $return;
}

 ?>