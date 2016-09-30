<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="GENTE";


 if (isset($_GET["ano"])){$diaFrame=00;}else{ $diaFrame=date('d', time()); }	
 if (isset($_GET["mes"])){$mesFrame=$_GET["mes"];}else{ $mesFrame=date('m', time()); }


$tipo_semana = 1;
$tipo_mes = 1;

$MESCOMPLETO[1] = 'Enero';
$MESCOMPLETO[2] = 'Febrero';
$MESCOMPLETO[3] = 'Marzo';
$MESCOMPLETO[4] = 'Abril';
$MESCOMPLETO[5] = 'Mayo';
$MESCOMPLETO[6] = 'Junio';
$MESCOMPLETO[7] = 'Julio';
$MESCOMPLETO[8] = 'Agosto';
$MESCOMPLETO[9] = 'Septiembre';
$MESCOMPLETO[10] = 'Octubre';
$MESCOMPLETO[11] = 'Noviembre';
$MESCOMPLETO[12] = 'Diciembre';

$MESABREVIADO[1] = 'ENERO';
$MESABREVIADO[2] = 'FEBRERO';
$MESABREVIADO[3] = 'MARZO';
$MESABREVIADO[4] = 'ABRIL';
$MESABREVIADO[5] = 'MAYO';
$MESABREVIADO[6] = 'JUNIO';
$MESABREVIADO[7] = 'JULIO';
$MESABREVIADO[8] = 'AGOSTO';
$MESABREVIADO[9] = 'SEPTIEMBRE';
$MESABREVIADO[10] = 'OCTUBRE';
$MESABREVIADO[11] = 'NOVIEMBRE';
$MESABREVIADO[12] = 'DICIEMBRE';

$SEMANACOMPLETA[0] = 'Domingo';
$SEMANACOMPLETA[1] = 'Lunes';
$SEMANACOMPLETA[2] = 'Martes';
$SEMANACOMPLETA[3] = 'Miércoles';
$SEMANACOMPLETA[4] = 'Jueves';
$SEMANACOMPLETA[5] = 'Viernes';
$SEMANACOMPLETA[6] = 'Sábado';

$SEMANAABREVIADA[0] = 'Dom';
$SEMANAABREVIADA[1] = 'Lun';
$SEMANAABREVIADA[2] = 'Mar';
$SEMANAABREVIADA[3] = 'Mie';
$SEMANAABREVIADA[4] = 'Jue';
$SEMANAABREVIADA[5] = 'Vie';
$SEMANAABREVIADA[6] = 'Sáb';

////////////////////////////////////
if($tipo_semana == 0){
	$ARRDIASSEMANA = $SEMANACOMPLETA;
}elseif($tipo_semana == 1){
	$ARRDIASSEMANA = $SEMANAABREVIADA;
}
if($tipo_mes == 0){
	$ARRMES = $MESCOMPLETO;
}elseif($tipo_mes == 1){
	$ARRMES = $MESABREVIADO;
}
if (isset($_GET["mes"])){ $mes=$_GET["mes"]; }
if(!isset($dia)) $dia = date('d');
if(!isset($mes)) $mes = date('n');
if(!isset($ano)) $ano = date('Y');

$TotalDiasMes = date(t,mktime(0,0,0,$mes,$dia,$ano));
$DiaSemanaEmpiezaMes = date(w,mktime(0,0,0,$mes,1,$ano));
$DiaSemanaTerminaMes = date(w,mktime(0,0,0,$mes,$TotalDiasMes,$ano));
$EmpiezaMesCalOffset = $DiaSemanaEmpiezaMes;
$TerminaMesCalOffset = 6 - $DiaSemanaTerminaMes;
$TotalDeCeldas = $TotalDiasMes + $DiaSemanaEmpiezaMes + $TerminaMesCalOffset;


if($mes == 1){
	$MesAnterior = 12;
	$MesSiguiente = $mes + 1;
	$AnoAnterior = $ano - 1;
	$AnoSiguiente = $ano;
}elseif($mes == 12){
	$MesAnterior = $mes - 1;
	$MesSiguiente = 1;
	$AnoAnterior = $ano;
	$AnoSiguiente = $ano + 1;
}else{
	$MesAnterior = $mes - 1;
	$MesSiguiente = $mes + 1;
	$AnoAnterior = $ano;
	$AnoSiguiente = $ano;
	$AnoAnteriorAno = $ano - 1;
	$AnoSiguienteAno = $ano + 1;
}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Gente teleSUR - Cumpleañeros del mes</title>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<script type="text/javascript">
function CambiarDia(dia, mes){
parent.cumpliendo.location.href="frame_cumples.php?dia="+dia+"&mes="+mes+"";
var contenedor = document.getElementById("contiene");
var lista = contenedor.getElementsByTagName("td");
for(var i=0; i<lista.length; ++i) {lista[i].style.backgroundColor = "#FFFFFF";}
for(var i=0; i<lista.length; ++i) {lista[i].setAttribute("class","Arial_18_regular_marron");}
bloque="Bloque"+dia;
DivAct=document.getElementById(bloque);
DivAct.style.backgroundColor='#9D0100';
var listaenlaces = contenedor.getElementsByTagName("a");
for(var i=0; i<listaenlaces.length; ++i) {listaenlaces[i].setAttribute("class","Arial_18_regular_marron");}
enlace=document.getElementById("enlace"+dia);
enlace.setAttribute("class","Arial_18_blanco_bold");

}
</script>
 

<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 430px;
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
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg')">
<table width="1020" height="799" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_1020x816.jpg">
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
    <td width="1020" height="29" background="../../img/29_3_linea_1020x30.jpg"><table width="1020" height="29" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="134" height="29">&nbsp;</td>
    <td width="88" height="29" class="Arial_18_bold">&nbsp;</td>
    <td width="605" height="29" ><table width="401" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="369" height="22" ><div class="Arial_12_blanco_Bold" style="margin-left:10px; margin-right:10px;" >Noticias de interés</div></td>
        <td width="32">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="130" height="29" ></td>
    <td width="63" height="29">&nbsp;</td>
  </tr>
</table></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="476"  background="../../img/160_imagen_1020x468.jpg">
    <table width="1020" height="476" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="101" height="476">&nbsp;</td>
    <td width="442" height="476">
    <table width="442" height="468" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="442" height="64"><a name = "anclajes"></a></td>
  </tr>
  <tr>
    <td width="442" height="50">
    <table width="442" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="297"><div class="Arial_14_bold_blanco" style="width:px; margin-top:2px;">CALENDARIO</div></td>
    <td width="145"><table width="145" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="60">&nbsp;</td>
    <td width="27"><a href="index.php?mes=<?php echo $MesAnterior."&ano=".$AnoSiguiente; ?>#anclajes"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('izq3','','../../img/168_izq_27x17.jpg',1)"><img src="../../img/166_izq_27x17.jpg" name="izq3" width="27" height="17" border="0" id="izq3" /></a></td>
    <td width="17">&nbsp;</td>
    <td width="27"><a href="index.php?mes=<?php echo $MesSiguiente."&ano=".$AnoSiguiente; ?>#anclajes" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('der3','','../../img/169_izq_27x17.jpg',1)"><img src="../../img/168_der_27x17.jpg" name="der3" width="27" height="17" border="0" id="der3" /></a></td>
    <td width="14">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><div class="Arial_18_blanco_bold" style="width:px; margin-top:2px; margin-bottom:4px;"><?php echo $ano; ?></div></td>
    <td><div class="Arial_14_rojo_bold" style="width:px; margin-top:2px; margin-bottom:4px; text-align: center; margin-right:5px; margin-left:45px;"><a href="#." onclick="CambiarDia('00', '<?php echo $mes; ?>');" style="text-decoration:none;" class="Arial_14_rojo_bold"><?php echo $ARRMES[$mes]; ?></a></div></td
  ></tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="442" height="44">&nbsp;</td>
  </tr>
  <tr>
    <td width="442" height="240"  valign="top"><div style="margin-left:5px;" id="contiene">
<?


print "<table style='font-family:arial;font-size:18px;' height='240'  align='center' border='1' cellpadding='0' cellspacing='0' width='430' class='cuadrado_marron'>";
//print " <tr>";
//print " <td colspan=10>";
//print " <table border=0 align=center width=\"1%\">";
//print " <tr>";
//print " <td width=\"1%\"><a href=\"$PHP_SELF?mes=$mes&ano=$AnoAnteriorAno\"><img src=atras2.gif border=0>df</a></td>";
//print " <td width=\"1%\"><a href=\"$PHP_SELF?mes=$MesAnterior&ano=$AnoAnterior\"><img src=atras.gif border=0></a></td>";
//print " <td width=\"1%\" colspan=\"1\" align=\"center\" nowrap><b>".$ARRMES[$mes]." - $ano</b></td>";
//print " <td width=\"1%\"><a href=\"$PHP_SELF?mes=$MesSiguiente&ano=$AnoSiguiente\"><img src=avanzar.gif border=0></a></td>";
//print " <td width=\"1%\"><a href=\"$PHP_SELF?mes=$mes&ano=$AnoSiguienteAno\"><img src=avanzar2.gif border=0></a></td>";
//print " </tr>";
//print " </table>";
//print " </td>";
//print "</tr>";
print "<tr>";
foreach($ARRDIASSEMANA AS $key){
	//print "<td bgcolor=#ccccff><b>$key</b></td>";
}
print "</tr>";

for($a=1;$a <= $TotalDeCeldas;$a++){ 
	if(!$b) $b = 0;
	if($b == 7) $b = 0;
	if($b == 0) print '<tr>';
	if(!$c) $c = 1;
	if($a > $EmpiezaMesCalOffset AND $c <= $TotalDiasMes){
		if($c == date(d) && $mes == date(m) && $ano == date(Y)){
			print "<td align='center' bgcolor='#990000' class='abajo_derecha_marron' valign='middle' id='Bloque$c'><div class='Arial_18_blanco_bold' id='Bloque\"$c\"' style='height:47px; min-height:47px;'><a href='#.'  class='Arial_18_blanco_bold' onclick='CambiarDia(\"$c\", \"$mes\");' style='text-decoration:none; '>$c</a></div></td>";
		}elseif($b == 0 OR $b == 6){
			print "<td bgcolor='#FFFFFF' align='center' onMouseOver='this.bgColor=\"#CEEEFD\"' onMouseOut='this.bgColor=\"#FFFFFF\"' valign='middle' id='Bloque$c'><div class='Arial_18_regular_marron' id='Bloque$c' style='height:38px; max-height:38px;'><a href='#.' onclick='CambiarDia(\"$c\", \"$mes\");' class='Arial_18_regular_marron' style='text-decoration:none;' id='enlace$c' >$c</a></div></td>";
		}else{
			print "<td bgcolor=\"#EEEEEE\" align='center' onMouseOver='this.bgColor=\"#CEEEFD\"' onMouseOut='this.bgColor=\"#FFFFFF\"' valign='middle' id='Bloque$c'><div class='Arial_18_regular_marron' id='Bloque$c' style='height:38px; max-height:38px;'><a href='#.' onclick='CambiarDia(\"$c\", \"$mes\");' class='Arial_18_regular_marron' style='text-decoration:none;' id='enlace$c' >$c</a></div></td>";
		}
		$c++;
	}else{
		print "<td> </td>";
	}
	if($b == 6) print '</tr>'; 
	$b++;
}
//print "<tr><td align=center colspan=10></a></td></tr>";
print "</table>";
?></div>

    </td>
  </tr>
  <tr>
    <td style="" >&nbsp;</td>
  </tr>
</table>

    </td>
    <td width="50" height="476">&nbsp;</td>
    <td width="324" height="476" valign="top">
    <table width="324" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="324" height="34"><img src="../../img/spc.gif" height="65" width="50" border="0" /></td>
  </tr>
  <tr>
    <td width="324" height="45" valign="top">
    <table width="324" height="45" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="324" align="right"><div class="Arial_14_bold_blanco" style="width:px; margin-top:2px;">CUMPLEAÑOS DEL MES</div></td>
  </tr>
  <tr>
    <td width="324" align="right"><div class="Arial_12_blanco_bold" style="width:px; margin-top:2px; margin-bottom:4px;" id="misbolas"><a href="#." onclick="CambiarDia('00', '<?php echo $mes; ?>');" style="text-decoration:none;" class="Arial_12_blanco_bold"><?php echo $ARRMES[$mes];?></a></div></td>
  </tr>
</table>

    </td>
  </tr>

  <tr>
    <td width="324" height="238" valign="top">
    
	
	
	<table width="324" height="238" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="324" height="114" valign="top" >
<div id="refrescando">
	
	<iframe name="cumpliendo" width="324" height="292" frameborder="0" scrolling="no" allowtransparency="yes" src="frame_cumples.php?dia=<?php echo $diaFrame; ?>&mes=<?php echo $mesFrame; ?>"></iframe>
	</div>
	
	</td>
  </tr>
  <tr>
     <td width="324" height="5" valign="top">&nbsp;</td>
  </tr>
   
</table>
	

    </td>
  </tr>
  
  <tr>
    <td width="324" height="40">&nbsp;</td>
  </tr>
</table>

    </td>
    <td width="103" height="476">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="39">&nbsp;</td>
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
