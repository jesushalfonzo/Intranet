<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Corporativas - Extensiones</title>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript">
function BuscarAbreviados(letra){
parent.abreviadosX.location.href="buscador.php?letra="+letra;
}
</script>
<style type="text/css">
body, input{
	font-family: Calibri, Arial;
}
#accordion {
	list-style: none;
	padding: 0 0 0 0;
	width: 300px;
	margin-left:10px;
}
#accordion li{
	display: block;
	background-color: #F9F9F9;
	font-weight: bold;
	margin: 1px;
	cursor: pointer;
	padding: 5 5 5 7px;
	list-style: circle;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	margin-bottom:15px;
}
#accordion ul {
	list-style: none;
	padding: 0 0 0 0;
	display: none;
}
#accordion ul li{
	font-weight: normal;
	cursor: auto;
	background-color: #fff;
	padding: 0 0 0 7px;
	
}
#accordion a {
	text-decoration: none;
}
#accordion a:hover {
	text-decoration: underline;
}

</style>
<style type="text/css">
.ScrollEXT {
	
	overflow: scroll;
	height: 540px;
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

<body onload="MM_preloadImages('../../img/04_web_01_160x106.jpg','../../img/06_correo_01_160x106.jpg','../../img/38_izq_02_26x52.jpg','../../img/40_der_02_26x52.jpg','../../img/23_RRHH_01_121x40.jpg','../../img/25_genteTelesur_196x40.jpg','../../img/27_fueraOficio_252x40.jpg','../../img/32_1arriba_20x20.jpg','../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" height="1093" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_01_1020x1100.jpg">
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
    <td width="1020" height="29" background="../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Directorio</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="747" background="../../img/01_Imagen_04_1020x738.jpg">
    <table width="1020" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="76" height="747">&nbsp;</td>
        <td width="390" height="747">
        <table width="390" height="710" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="390" height="76">&nbsp;</td>
  </tr>
  <tr>
    <td width="390" height="581" valign="top">
    <table width="390"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="9" height="580">&nbsp;</td>
    <td width="373" height="580" valign="top">
    
<div class="ScrollEXT">
<ul id="accordion">



<?php 
$SQLGuia="SELECT * FROM m_extensiones, m_departamentos  WHERE m_departamentos_id=m_extensiones_idDep GROUP BY m_extensiones_idDep  ORDER BY m_departamentos_nombre ASC";
$queryGuia=mysql_query($SQLGuia, $link);
while($rowGuia=mysql_fetch_array($queryGuia)){
$m_departamentos_id=$rowGuia["m_departamentos_id"];
$m_departamentos_nombre=$rowGuia["m_departamentos_nombre"];

?>

	<li><?php echo $m_departamentos_nombre; ?></li>
	<ul>
		<li><table width="318" border="0" cellspacing="0" cellpadding="0">

<?php 
$SQLEx="SELECT * FROM m_extensiones WHERE m_extensiones_idDep='$m_departamentos_id' ORDER BY m_extensiones_departamento";
$queryExt=mysql_query($SQLEx, $link);
while($rowExt=mysql_fetch_array($queryExt)){
$m_extensiones_departamento=$rowExt["m_extensiones_departamento"];
$m_extensiones_numero=$rowExt["m_extensiones_numero"];

 ?>

 <tr>
    <td width="277" height="24" class="linea_abajo"><div class="Arial_12_Bold_griz" style="width:254px; margin-left:10px; margin-right:10px;"><?php echo $m_extensiones_departamento; ?></div></td>
    <td width="40" height="24" class="linea_abajo"><div class="Arial_12_Bold_griz" style="width:40px; "><?php echo $m_extensiones_numero; ?></div></td>
  </tr>
 
 
  <?php } ?>

  
  
  
</table></li>
	
	</ul>
	
	  <?php } ?>
	
	
</ul>
</div>

    </td>
    <td width="8" height="580">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  
</table>
</td>
        <td width="94" height="747">&nbsp;</td>
        <td width="373" height="747">
        <table width="374" height="738" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="12" height="738">&nbsp;</td>
    <td width="332" height="738" valign="top">
    <table width="332" height="738" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="332" height="90">&nbsp;</td>
  </tr>
  <tr>
    <td width="332" height="579" align="right" valign="top">
    <iframe name="abreviadosX" id="abreviadosX" src="directorio/buscador.php" width="330" height="530" frameborder="0" scrolling="no"></iframe>

    </td>
  </tr>

</table>

    </td>
    <td width="30" height="738" valign="top"><table width="30"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30" height="82">&nbsp;</td>
      </tr>
      <tr>
        <td>
        <iframe src="directorio/index.php" width="30" height="620" frameborder="0" scrolling="no"></iframe>

        </td>
      </tr>
      
    </table></td>
  </tr>
</table>

        </td>
        <td width="86" height="747">&nbsp;</td>
      </tr>
    </table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="58">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
$("#accordion > li").click(function(){

	if(false == $(this).next().is(':visible')) {
		$('#accordion > ul').slideUp(300);
	}
	$(this).next().slideToggle(300);
});

$('#accordion > ul:eq(0)').show();

</script>
</body>
</html>


<?php
function dia_semana ($dia, $mes, $ano) {
$dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}
?>