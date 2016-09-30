<? 
$desde=$_GET["desde"];
$hasta=$_GET["hasta"];

$separar=explode(' ', $desde);
$fecha_sucia=$separar[0];
$desde_back=str_replace('-',"/", $fecha_sucia);
$separador=explode('/', $desde_back);
$dia=$separador[0];
$mes=$separador[1];
$ano=$separador[2];
$desde_back2=$ano.'/'.$mes.'/'.$dia;


$separar2=explode(' ', $hasta);
$fecha_sucia=$separar2[0];
$hasta_back=str_replace('-',"/", $fecha_sucia);
$separador2=explode('/', $hasta_back);
$dia2=$separador2[0];
$mes2=$separador2[1];
$ano2=$separador2[2];
$hasta_back2=$ano2.'/'.$mes2.'/'.$dia2;


$departamento=$_GET["departamento"];

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet</title>
<style type="text/css">
.pequeno {

	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
</style>
<script type="text/javascript">
function volver(){
document.location="stadistc.php?desde=<? echo $desde_back2; ?>&hasta=<? echo $hasta_back2; ?>";
}
</script>
 <link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<table width="758" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones para el equipo de protocolo </div></td>
  </tr>
  <tr bgcolor="#000000">
    <td width="148" ><div align="center" class="Titulos">Usuario</div></td>
	<td width="153" ><div align="center" class="Titulos">Fecha</div></td>
	<td width="291" ><div align="center" class="Titulos">Tipo Petici&oacute;n </div></td>
	<td width="156" align="center"><div align="center" class="Titulos">estatus</div></td>
	<td width="156" align="center"><div align="center" class="Titulos">Detalle</div></td>
  </tr>
  <? 
  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();
  include('../../../extras/coneccion.php');
  $link=Conectarse();
 $tirasql="SELECT * FROM m_aplicativos_protocolo WHERE m_aplicativos_protocolo_fechasolicitud >= '$desde' AND m_aplicativos_protocolo_fechasolicitud <= '$hasta' AND m_aplicativos_protocolo_dirrecion='$departamento' ORDER BY m_aplicativos_protocolo_fechasolicitud ASC";
	 $result = mysql_query($tirasql,$link);
  
    while ($row = mysql_fetch_array($result)){ 
     $m_aplicativos_protocolo_id=$row['m_aplicativos_protocolo_id'];
     $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
     $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
	 $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
	 $fecha = date("d-m-Y H:i", $m_aplicativos_protocolo_fechasolicitud);
	 $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];
	 $m_aplicativos_protocolo_dirrecion=$row['m_aplicativos_protocolo_dirrecion'];
	 $cuantas=$row['cuanto'];
$sql_datos="SELECT nombre1, apellido1 FROM datospersonales where id_datospersonales='$m_aplicativos_protocolo_idiusupeticion'";
$que=mysql_query($sql_datos, $enlace);
$r=mysql_fetch_array($que);
$nombre=$r['nombre1'];
$apellido=$r['apellido1'];
$nombre_completo=$nombre.' '.$apellido;
  ?>

  <tr onMouseOver="this.bgColor='#CCCCCC'" onMouseOut="this.bgColor='#FFFFFF'">
    <td align="center"><span class="titulo_entrevista"><? echo"$nombre_completo"; ?></span></td>

   
    
    <td><div align="center" class="titulo_entrevista"><? echo"$fecha"; ?></div></td>
	<td><div align="center" class="titulo_entrevista"><? echo"$m_aplicativos_protocolo_tiposolicitud"; ?></div></td>
	 <td><div align="center"><img src="imagenes/<? if($m_aplicativos_protocolo_estatus=='A'){ echo'rojo.png';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_soporte_status=='A'){ echo'Solicitud en espera';}  if($m_soporte_status=='B'){ echo'Solicitud en proceso';}  if($m_soporte_status=='C'){ echo'Solicitud resuelta';} ?>"></div></td>
	<td><div align="center">
	<a href="#" onclick="TomarValor('<? echo"$m_aplicativos_protocolo_id"; ?>', '<? echo"$desde"; ?>', '<? echo"$hasta"; ?>', '<? echo $departamento; ?>')"><img src="imagenes/lupa.gif" width="21" height="15" border="0" title="Ver Solicitud" /></a></div></td>

  </tr>
 <? } ?>
   <tr >
    <td colspan="7">&nbsp;</td>
  </tr>
    <tr >
    <td colspan="7" align="center"><input type="button" name="boton" value="Volver" class="pequeno" onclick="volver();" /></td>
  </tr>
</table></head></html>
<script language="JavaScript"> 
function TomarValor(id,desde,hasta,dep){
 	
window.location = "ver_datalle.php?desde=" + desde + "&hasta=" + hasta + "&clx=" + id + "&dep=" + dep +""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	
}
</script>