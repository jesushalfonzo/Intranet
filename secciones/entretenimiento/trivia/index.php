<?php include('logeo2.php');?> 
<?
 include ('../../../extras/coneccion.php');
$link=Conectarse();
$pregunta_numero=$_SESSION["guianum3ro"];

if($pregunta_numero > 10){
exit();
}
$acumulator=$_SESSION["noincluir"];
$id_trivia=$_GET["id"];
//$id_master=$_GET["idmaster"];
$id_master=$_SESSION['master'];
$fechacompleta=date('Y-m-d H:i:s');

$SQL="SELECT * FROM m_trivia_pregunta WHERE m_trivia_pregunta_idtrivia='$id_trivia' and m_trivia_pregunta_id not in ($acumulator) ORDER BY rand() LIMIT 0,1";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_trivia_pregunta_texto=$row['m_trivia_pregunta_texto'];
$m_trivia_pregunta_id=$row['m_trivia_pregunta_id'];


$INSERT="INSERT INTO r_trivia_control VALUES(Null, '$id_master', '$m_trivia_pregunta_id', '0', '$fechacompleta')";
$query=mysql_query($INSERT, $link);
$id_agregado=mysql_insert_id();
//echo"$INSERT";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Trivia</title>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
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

<body onload="ini()">
<script type="text/javascript">
var cuentaInicial = "15";
function fin() {
document.fornulario.submit();
}
function unoMenos() {
with (
document.forms["fornulario"]["regresiva"]) value = 'Tiempo restante '+cuentaInicial+' segundos.';
if (
cuentaInicial-- > 0
)
setTimeout("unoMenos()", 1000);
else fin();
}
function ini() {
with (
document.forms["fornulario"]["regresiva"]) value = 'Tiempo restante '+cuentaInicial--+' segundos.';
setTimeout("unoMenos()", 1000);
}
</script>

 <form id="fornulario" name="fornulario" method="post" action="guardar.php">
  <input type="hidden" name="id_agregado" value="<? echo"$id_agregado"; ?>" />
 <input type="hidden" name="id_pregunta" value="<? echo"$m_trivia_pregunta_id"; ?>" />
 <input type="hidden" name="idmaster" value="<? echo"$id_master"; ?>" />
 <input type="hidden" name="idtrivia" value="<? echo"$id_trivia"; ?>" />
<table width="570" height="194" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="31"><div class="Arial_14_bold_negro" style="width:px; margin-left:20px; margin-right:60px; margin-top:6px; margin-bottom:6px; text-align: center;">Pregunta <? echo"$pregunta_numero"; ?> de 10</div></td>
  </tr>
  <tr>
    <td height="55"><div class="Arial_14_rojo_bold" style=" max-width:520px; margin-left:20px; margin-right:20px; margin-top:4px; margin-bottom:4px;"><? echo"$m_trivia_pregunta_texto"; ?></div></td>
  </tr>
  
                    <? $SQLopciones="SELECT * FROM r_trivia_pregunata_opc WHERE r_trivia_pregunata_opc_idpregunta='$m_trivia_pregunta_id' ORDER BY RAND()";
					   $opcquery=mysql_query($SQLopciones, $link);
					   while ($opcrow=mysql_fetch_array($opcquery)){
					   $r_trivia_pregunata_opc_text=$opcrow['r_trivia_pregunata_opc_text'];
					   $r_trivia_pregunata_opc_correcta=$opcrow['r_trivia_pregunata_opc_correcta'];
					   $r_trivia_pregunata_opc_id=$opcrow['r_trivia_pregunata_opc_id'];
					 ?>
  <tr>
    <td height="26" valign="top"><div style="float:left; width:540px; margin-top:6px; margin-left:20px;" ><div style="width:20px; float:left;" ><input name="correcta" type="radio" class="form" value="<? echo"$r_trivia_pregunata_opc_id"; ?>"/> </div>
    <div class="Arial_14_regular_marron" style="width:500px; max-width:500px; float:left; margin-left:4px; margin-bottom:2px;"><? echo"$r_trivia_pregunata_opc_text"; ?></div></div></td>
  </tr>
<?php } ?> 
   <tr>
    <td height="44" align="center">
	<input type="image" src="../../../img/236_imagenes_122x44.jpg" align="bottom"  width="122" height="44" /></td>
  </tr>
  <tr>
    <td height="20"><div class="Arial_12_bold_negro" style="width:px; margin-left:20px; margin-right:60px; margin-top:2px; margin-bottom:2px; text-align: left;"><input name="regresiva" type="text" class="texto_entrevista" style="border:0px;" size="55" readonly="yes"></div></td>
  </tr>
</table>

</form>


</body>
</html>
