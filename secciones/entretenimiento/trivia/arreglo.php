
<?
 include ('../../../extras/coneccion.php');
$linky=Conectarse();

//ESTE PROCESO LLENA LA TABLA FINAL
$Totalsql="SELECT MAX( r_trivia_control.r_trivia_control_tiempo )  AS max_fecha, MIN(r_trivia_control.r_trivia_control_tiempo)  AS min_fecha
FROM m_trivia_participantes, r_trivia_control, r_trivia_pregunata_opc WHERE m_trivia_participantes_idtrivia = '3' AND r_trivia_control_idmaster = '1'";
$querys=mysql_query($Totalsql, $linky);
$raw=mysql_fetch_array($querys);
$minimo=$raw['min_fecha'];
$maximo=$raw['max_fecha'];
$diferencia = date_diff($minimo, $maximo);
$tiempo_empleado='0'.$diferencia['hours'] . ':'.'0'. $diferencia['minutes'] . ':' . $diferencia['seconds'] .'';
echo"$tiempo_empleado";


//FIN DEL PROCESO TABLA FINAL
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<body>

</body>
</html>
<?php
function date_diff($from, $to)
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