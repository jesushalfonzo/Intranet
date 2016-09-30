<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Corporativas</title>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/easypaginate.js"></script>
	<script type="text/javascript">
	
jQuery(function($){
	
	$('ul#items').easyPaginate({
		step:4
	});
	
});    
    
    </script>
	
	<style type="text/css">


	#container{
	margin-left:100px;
	margin-right:10px;
	margin-bottom:10px;
		width:800px;
		height:210px;
		text-align:left;
		position:relative;
		padding:2px 0;
		}
		
	ul#items{		
		margin:1em 0;
		width:auto;
		height:210px;
		overflow:hidden;
		}
	ul#items li{
		list-style:none;
		float:left;
		height:210px;
		overflow:hidden;
		margin:0 4px;
		background:#DDDDDD;
		color:#fff;
		text-align:center;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		-moz-box-shadow:0 1px 1px #777;
		-webkit-box-shadow:0 1px 1px #777;
		box-shadow:0 1px 1px #777;
		color:#555;
		}
	ul#items li:hover{color:#333;}
	ul#items li .image{
		margin:20px 20px 10px 20px;
		width:134px;
		height:116px;
		overflow:hidden;
		border:2px solid #fff;
		-moz-box-shadow:0 1px 1px #bbb;
		-webkit-box-shadow:0 1px 1px #bbb;
		box-shadow:0 1px 1px #bbb;
		}	
	ul#items h3{text-transform:uppercase;font-size:14px;font-weight:bold;margin:.25em 0;text-shadow:#f1f1f1 0 1px 0;}	
	ul#items .info{color:#000000; max-width:134px; text-align:center; margin-left:20px;}	
	ol#pagination{position:relative;text-align:center;}
	ol#pagination li{
		display:inline-block;
		width:16px;
		height:16px;
		background:url(images/bg_buttons.png) no-repeat 0 0;
		text-align:left;
		text-indent:-8000px;
		list-style:none;
		cursor:pointer;
		margin:0 2px;
		}
	ol#pagination li:hover{background:url(images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(images/bg_buttons.png) no-repeat 0 -32px;}
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-150px;
		}
	ol#pagination li.prev{left:-30px;background:url(images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:-30px;background:url(images/bg_buttons.png) no-repeat 0 -48px;}
	/*ol#pagination { display:none;}*/
	
/* // content */

    </style>
	<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 620px;
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
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_01_1020x1100.jpg">
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
    <td width="1019" height="30" background="../../img/29_4_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:244px;">Agenda cultural</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../img/01_Imagen_02_1020x738.jpg" valign="top">
    <table width="1020" height="570" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="475" valign="top"><table width="1020" height="454" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="62">&nbsp;</td>
    <td width="860" valign="top">
    <?php
	

	 $idnota=$_GET["ckl"];
	 $noticiatira = "SELECT  * FROM m_inf_interes WHERE m_inf_interes_id='$idnota'";
	
	                             $salidatira = mysql_query($noticiatira,$link); 
		                         $salida=mysql_fetch_array($salidatira);
		                         $titulo =stripslashes ($salida['m_inf_interes_titulo']);
			                     $imagen = $salida['m_inf_interes_images'];
			                     $sumario = $salida['m_inf_interes_sumario'];	  
			                     $contenido = $salida['m_inf_interes_contenido'];
								 $fecha = date('d/m/Y', strtotime($salida['m_inf_interes_fecha']));
								 $separa = explode('/', $fecha);
								 $diay = $separa[0];
								 $mesy = $separa[1];
								 $anoy = "20".$separa[2]; 
			
			
	  ?>
    <div class="Arial_11_Regular_marron" style="width:860px; margin-top:15px;"><? echo dia_semana ($diay, $mesy, $anoy) ?> , <?php echo $diay; ?> de <?php echo MesLetras($mesy); ?> de <?php echo $anoy; ?></div> 
	
	 <div class="Arial_22_bold_negro"><strong><? echo"$titulo"; ?></strong></div>
 
  
<div style="width:870px;  margin-top:8px; padding-right:15px;" class="Gris_Oscuro_13px_Regular ScrollDocumentos">
  <table width="325" border="0" align="right" cellpadding="0" cellspacing="0" class="bordes_todos" style="margin-left:15px; margin-bottom:15px;">
    <tr>
      <td width="365"><div style="margin-left:5px; margin-right:5px; margin-top:5px; margin-bottom:5px;"><span class="Arial_22_bold_negro">
	  <img src="../../imagenes/interes/<? echo"$imagen"; ?>" width="350" height="300" />
	 </span></div></td>
      </tr>
  </table>

<p class="Arial_14_regular_marron"><? echo"$sumario"; ?></p>
<p class="Arial_14_regular_marron"><? echo"$contenido"; ?></p>
</div>

<div align="right" style="margin-top:10px; padding-right:100px;"><a href="agenda.php" class="small button blue" style="text-decoration:none;">Volver</a></div>	
	</div></td>
    
    
   
  </tr>
</table></td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="58">&nbsp;</td>
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