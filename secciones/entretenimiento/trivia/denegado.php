<?php include('logeo2.php');?> 
<?
 include ('../../../extras/coneccion.php');
$link=Conectarse();
$id_trivia=$_GET["id"];
$id_personal=$_SESSION['xz3datospers'];
$S="SELECT * FROM m_trivia_participantes WHERE m_trivia_participantes_idpersonal='$id_personal' and m_trivia_participantes_idtrivia='$id_trivia'";
$q=mysql_query($S, $link);
$r=mysql_fetch_array($q);
$id_master=$r['m_trivia_participantes_id'];

$SQL="SELECT * FROM m_trivia_participantes, r_trivia_control, r_trivia_pregunata_opc WHERE  m_trivia_participantes_id='$id_master' and r_trivia_control_idmaster='$id_master' and r_trivia_pregunata_opc_correcta='SI' and r_trivia_pregunata_opc_id=r_trivia_control_idopcion";

$query=mysql_query($SQL, $link);
$acertadas=mysql_num_rows($query);
$acertadas=$acertadas*10;
$row=mysql_fetch_array($query);
$m_trivia_participantes_date =$row['m_trivia_participantes_date'];	
$fecha=strtotime($m_trivia_participantes_date);
$fecha= date('d/m/Y', $fecha);
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
    <td height="40"><div class="Arial_14_bold_negro" style="width:px; margin-left:20px; margin-right:60px; margin-top:6px; margin-bottom:6px; text-align: center;">Ya usted  participo en esta trivia el d&iacute;a <? echo"$fecha"; ?></div></td>
  </tr>
  <tr>
    <td height="55"><div style="width:px; margin-left:20px; margin-right:20px; margin-top:6px; margin-bottom:6px; text-align: center;"><span class="Arial_18_marron_Bold" >Obtuvistes</span>  <span class="Arial_44_rojo_Bold" ><? echo $acertadas ?></span> <span class="Arial_18_marron_Bold" >puntos</span></div></td>
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
