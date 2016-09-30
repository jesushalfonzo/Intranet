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
		height:90px;
		text-align:left;
		position:relative;
		padding:2px 0;
		}
		
	ul#items{		
		margin:1em 0;
		width:auto;
		height:95px;
		overflow:hidden;
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
		top:-80px;
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
    <td width="1020" align="center" height="601" valign="top">
	
	
	
    <img src="img/mapa 830x536.png" width="830" height="536" style="margin-top:15px;" />    </td>
  </tr>
  <tr>
    <td width="1020" height="17">&nbsp;</td>
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