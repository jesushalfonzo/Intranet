<? 
$desde=$_POST["desde"];
$hasta=$_POST["hasta"];

if ($desde==''){
$desde=$_GET["desde"];
}
if ($hasta==''){
$hasta=$_GET["hasta"];
}

$separar=explode('/', $desde);
$dia=$separar[0];
$mes=$separar[1];
$ano=$separar[2];
$desde_buscar=$ano.'-'.$mes.'-'.$dia.' 00:00:00';
$separar2=explode('/', $hasta);
$dia2=$separar2[0];
$mes2=$separar2[1];
$ano2=$separar2[2];
$hasta_buscar=$ano2.'-'.$mes2.'-'.$dia2.' 23:59:59';
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<script type="text/javascript">
function retroceder(){
window.parent.location.href="peticiones.php";
}
</script>
<title>TeleSUR - Intranet</title>
 <link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<table width="758" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center">
  
  <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">Peticiones para el equipo de protocolo </div></td>
  </tr>
  <tr bgcolor="#000000">
	<td width="291" ><div align="center" class="Titulos">Departamento</div></td>
	<td width="156" align="center"><div align="center" class="Titulos">Peticiones</div></td>
	<td width="156" align="center"><div align="center" class="Titulos">Detalle</div></td>
  </tr>
  <? 
  include('../../../extras/coneccion_aplicaciones.php');
  $enlace=Validar();
  include('../../../extras/coneccion.php');
  $link=Conectarse();
 $tirasql="SELECT * , count( m_aplicativos_protocolo_dirrecion ) AS cuanto FROM m_aplicativos_protocolo WHERE m_aplicativos_protocolo_fechasolicitud >= '$desde_buscar' AND m_aplicativos_protocolo_fechasolicitud <= '$hasta_buscar' GROUP BY m_aplicativos_protocolo_dirrecion";
	  //echo"$tirasql";
	 $result = mysql_query($tirasql,$link);
     $numero_de_shit=mysql_num_rows($result);
	 if($numero_de_shit!=0){
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
	<td><div align="center" class="titulo_entrevista"><? echo"$m_aplicativos_protocolo_dirrecion"; ?></div></td>
	<td><div align="center" class="titulo_entrevista"><? echo $cuantas; ?></div></td>
	<td><div align="center"><a href="#" onclick="TomarValor('<? echo $desde_buscar; ?>','<? echo $hasta_buscar; ?>','<? echo $m_aplicativos_protocolo_dirrecion; ?>');" ><img src="imagenes/lupa.gif" width="21" height="15" border="0" title="Ver Solicitud" /></a></div></td>

  </tr>
 <? }
 }
 else {
 ?>
  <tr>
    <td colspan="7" bgcolor="#FFFFFF"><div align="center" class="texto_pregunta_TuZona">Escoja el rango de fechas <img src="imagenes/flechlas.png" width="22" height="27" border="0" /></div></td>
  </tr>
   <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">&nbsp;</div></td>
  </tr>
   
 <?
 }
 ?> <tr>
    <td colspan="7" align="center"><div align="center" class="Titulos" style="margin-top:10px;"><input type="button" value="Volver" onclick="retroceder();"  /></div></td>
  </tr>
    <tr bgcolor="#000000">
    <td colspan="7"><div align="center" class="Titulos">&nbsp;</div></td>
  </tr>
</table></head></html>
<script language="JavaScript"> 
function TomarValor(desde,hasta,depart){
 	
window.location = "detalle.php?desde=" + desde + "&hasta=" + hasta + "&departamento=" + depart + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	
}
</script>