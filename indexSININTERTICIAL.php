<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='favicon.ico' rel='shortcut icon' type='image/x-icon'/> 
<link href='favicon.ico' rel='icon' type='image/x-icon'/>
<title>INTRANET TELESUR</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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
		step:2
	});
	
});    
    
    </script>
		<style type="text/css">


	#container{
	margin-left:0px;
	margin-right:0px;
	margin-bottom:1px;
		width:590px;
		height:108px;
		text-align:left;
		position:relative;
		padding:2px 0;
		}
		
	ul#items{		
		margin:1em 0;
		width:auto;
		height:120px;
		overflow:hidden;
		margin-left:-30px;
		margin-top:0px;
		}
	ul#items li{
		list-style:none;
		float:left;
		height:100px;
		overflow:hidden;
		margin:0 8px;
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
		background:url(secciones/corporativa/images/bg_buttons.png) no-repeat 0 0;
		text-align:left;
		text-indent:-8000px;
		list-style:none;
		cursor:pointer;
		margin:0 2px;
		}
	ol#pagination li:hover{background:url(secciones/corporativa/images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(secciones/corporativa/images/bg_buttons.png) no-repeat 0 -32px;}
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-158px;
		}
	ol#pagination li.prev{left:10px;background:url(secciones/corporativa/images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:0px;background:url(secciones/corporativa/images/bg_buttons.png) no-repeat 0 -48px;}
	
/* // content */

    </style>
	
	<style type="text/css">
<!--

#publicidad {
    whith:596px;
    position: absolute;
    top: 0px;
    left: 50%;
	margin-left: -387px;
}

-->
</style>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('img/04_web_01_160x106.jpg','img/06_correo_01_160x106.jpg','img/222_imagenes_22x22.jpg','img/224_imagenes_22x22.jpg','img/13_corporativa_01_325x138.jpg','img/15_RRHH_01_325x138.jpg','img/17_genteTelesur_01_325x138.jpg','img/19_fueraOficio_01_325x138.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="img/01_Imagen_1020x816.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("secciones/cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="552">
	
	
	
    <table width="1020" height="552" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="43" height="552">&nbsp;</td>
    <td width="325" height="552" valign="top">
       <table width="327" height="552" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="327" height="138"><a href="secciones/corporativa/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen11','','img/13_corporativa_01_325x138.jpg',1)"><img src="img/12_corporativa_325x138.jpg" name="Imagen11" width="325" height="138" border="0" id="Imagen11" /></a></td>
  </tr>
  <tr>
    <td width="327" height="138"><a href="secciones/RRHH/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen12','','img/15_RRHH_01_325x138.jpg',1)"><img src="img/14_RRHH_325x138.jpg" name="Imagen12" width="325" height="138" border="0" id="Imagen12" /></a></td>
  </tr>
  <tr>
    <td width="327" height="138"><a href="secciones/gente/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen13','','img/17_genteTelesur_01_325x138.jpg',1)"><img src="img/16_genteTelesur_325x138.jpg" name="Imagen13" width="325" height="138" border="0" id="Imagen13" /></a></td>
  </tr>
  <tr>
    <td width="327" height="138"><a href="secciones/entretenimiento/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Imagen14','','img/19_fueraOficio_01_325x138.jpg',1)"><img src="img/18_fueraOficio_325x138.jpg" name="Imagen14" width="325" height="138" border="0" id="Imagen14" /></a></td>
  </tr>
</table>
</td>
    <td width="12" height="552">&nbsp;</td>
    <td width="596" height="552">
    <table width="596" height="552" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="596" height="410">
    <div style="width:px; margin-top:4px; margin-bottom:3px; ">
	
	<?php	

//RONDOM

 $myList = "XML/Home.xml" ;  
  $xml5 = @simplexml_load_file($myList);
		if($xml5){	   
			   
	$banners1= $xml5->Home;
	$cuantosbanner=trim($banners1->totalbanners);	
	$num_banner= rand(1,$cuantosbanner);

	     
			   $j= 0;
			  
	foreach ($xml5->Home as $banners) {
	  
	       
			
			  $j=$j +1;
			if ($num_banner == $j ){	  
		    
				$archivo= $banners->archivo;
				$idelemento= $banners['id'];
				$titulo= $banners->titulo ;
				$link= $banners->link;
				$fecha= $banners->fecha;
				$target= $banners->target;
				$tipo= $banners->tipo;
			  break;
			  
		  }

  }

//




/*$myList = "XML/Home.xml" ;  
$xml = @simplexml_load_file($myList);
if($xml){
$Home= $xml->Home;
$idelemento= $Home['id'];
$titulo= $Home->titulo ;
$archivo= $Home->archivo ;
$link= $Home->link;
$fecha= $Home->fecha;
$target= $Home->target;
$tipo= $Home->tipo;
*/
if($tipo=="jpg"){
?>
	
	
	<?php if($link!=""){ ?><a href="<?php echo $link; ?>"><?php } ?><img src="multimedia/home/<?php echo $archivo; ?>" width="596" height="410" border="0" /><?php if($link!=""){ ?></a><?php } ?>
	
	<?php } else { ?>
	<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="596" height="410">
        <param name="movie" value="multimedia/home/<?php echo $archivo; ?>" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="multimedia/home/<?php echo $archivo; ?>" width="596" height="410">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
          <div>
            <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
	<?php }}  ?>
	
	</div></td>
  </tr>
  <tr>
    <td width="596" height="134" background="img/LoActual_1_596x134.png">
    <table cellpadding="0" cellspacing="0" border="0">
	<tr>
    <td width="301"><div class="Arial_14_bold_blanco" style="width:px; margin-left:40px; margin-top:5px; margin-bottom:2px;" >Lo actual</div></td>
  </tr>
	<tr><td valign="top"><div class="info" id="container">
		
<ul id="items">

<?php 

	
	
	
 $myList = "XML/ActualidadHome.xml"; 
  
  //PARA VERIFICAR QUE EL ARCHIVO EXISTA
  if (file_exists($myList)){ 
    $xml = @simplexml_load_file($myList) or die ("Cargando..."); 
   	foreach ($xml->actualidad as $actual) {
      $idelemento= $actual['id'];
      $titulo= $actual->titulo;
	 // $titulo = substr( $titulo, 0, 35)."..."; 
      $sumario= $actual->sumario;
      $imagen= $actual->imagen;
	  $seccion= $actual->seccion;
	  $link=$actual->link;
	  $fecha= $actual->fecha;
	  $fechaimp=date('d/m/Y', strtotime($fecha));
			$separa = explode('/', $fechaimp);
			$diay = $separa[0];
			$mesy = $separa[1];
			$anoy = $separa[2]; 
			


?>

<li>
<table width="269" border="0" cellspacing="0" cellpadding="0">
<tr><td width="123" valign="middle"><div class="cuadrado_marron" style=" margin-left:2px;"><a href="<?php echo $link; ?>"><img src="<?php echo $imagen; ?>" width="120" height="88" border="1" style="border-color:#000000;" /></a></div></td><td width="107" valign="top"><table width="148" height="102" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="80" valign="top">
    <div class="Arial_10_regular_marron" style="margin-top:2px; margin-bottom:2px; margin-right:5px; margin-left:5px; text-align:left;" ><? //echo dia_semana ($diay, $mesy, $anoy) ?> <?php echo $diay; ?> de <?php echo MesLetras($mesy); ?> de <?php echo $anoy; ?></div>
        <div class="Arial_13_Negro_Bold" style=" margin-top:6px; margin-bottom:2px; margin-right:5px; margin-left:5px; max-height:48px;" ><a href="<?php echo $link; ?>" style="text-decoration:none; color:#000000;"><?php echo $titulo; ?></a></div>
    </td>
  </tr>
  <tr>
    <td width="138" height="21" align="center"  background="img/LINEA_147x21.png" bgcolor="#323232"><div class="Arial_10_blanco" style="width:px; margin-left:20px; margin-top:4px; margin-right:6px;" ><?php echo $seccion; ?></div></td>
  </tr>
</table></td>
</tr>
</table>
</li>

<?php }} ?>

</ul>
</div></td></tr></table>
	
	</td>
  </tr>
</table>

    </td>
    <td width="42" height="552">&nbsp;</td>
  </tr>
 </table>
    </td>
  </tr>
  <tr>
    <td width="1020" height="68">&nbsp;</td>
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