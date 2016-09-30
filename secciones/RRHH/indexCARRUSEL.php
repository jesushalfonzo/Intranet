<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="RRHH";
 ?>

<?php
				$SQL="SELECT m_rhh_info_titulo, m_rhh_info_sumario, m_rhh_info_id, m_rhh_info_fecha, m_rhh_info_contenido FROM m_rhh_info WHERE m_rhh_info_aprobada='SI' AND (m_rhh_info_categoria='comunicados' OR m_rhh_info_categoria='') ORDER BY m_rhh_info_id DESC";
				$query=mysql_query($SQL, $link);
				$row=mysql_fetch_array($query);
				$m_rhh_info_titulo=$row['m_rhh_info_titulo'];
				$m_rhh_info_sumario=$row['m_rhh_info_sumario'];
				$m_rhh_info_contenido=$row['m_rhh_info_contenido'];
				$m_rhh_info_id=$row['m_rhh_info_id'];
				$m_rhh_info_fecha=date('d-m-Y', strtotime($row['m_rhh_info_fecha']));
				$separar=explode('-', $m_rhh_info_fecha);
				$diay=$separar[0];
				$mesy=$separar[1];
				$anoy=$separar[2];
				?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - RRHH - <?php echo $m_rhh_info_titulo; ?></title>
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
<script type="text/javascript" src="../corporativa/js/jquery.min.js"></script>
	<script type="text/javascript" src="../corporativa/js/easypaginate.js"></script>
	<script type="text/javascript">
	
jQuery(function($){
	
	$('ul#items').easyPaginate({
		step:4
	});
	
});    
    
    </script>
	
	<style type="text/css">


	#container{
	margin-left:20px;
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
	ol#pagination li:hover{background:url(../corporativa/images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(../corporativa/images/bg_buttons.png) no-repeat 0 -32px;}
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-150px;
		}
	ol#pagination li.prev{left:-30px;background:url(../corporativa/images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:-30px;background:url(../corporativa/images/bg_buttons.png) no-repeat 0 -48px;}
	/*ol#pagination { display:none;}*/
	
/* // content */

    </style>
<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 300px;
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
    <td width="1020" height="30" background="../../img/29_2_linea_1020x30.jpg"><table width="1020" height="30" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="55" height="22">&nbsp;</td>
    <td width="80" height="22" class="Arial_18_bold"></td>
    <td width="593" height="22">
    <table width="593" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="98" height="22" class="Arial_12_blanco_Bold"><div style="margin-left:15px; margin-right:10px;" >Comunicados</div></td>
        <td width="1" height="22"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
        <td width="87" height="22"><div style="margin-left:10px; margin-right:10px;" ><a href="operativos.php" class="Arial_12_bold_negro" style="text-decoration:none;">Operativos</a></div></td>
        <td width="1" height="22"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
        <td width="95"><div style="margin-left:10px; margin-right:10px;" ><a href="charlas.php" class="Arial_12_bold_negro" style="text-decoration:none;">Charlas</a></div></td>
        <td width="311">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="242" height="22" ></td>
    <td width="59" height="22">&nbsp;</td>
  </tr>
</table></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../img/01_Imagen_02_1020x738.jpg">
    <table width="1020" height="738" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="100"><img src="../../img/131_img_1020x100.jpg" width="1020" height="100" /></td>
  </tr>
  <tr>
    <td width="1020" height="638">
    <table width="1020" height="638" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="62" height="638">&nbsp;</td>
    <td width="860" height="638" valign="top" > 
	
	
	<table width="877" border="0" cellpadding="0" cellspacing="0">
	
	  <tr><td valign="top">
	  

	  
	   <?php if ($m_rhh_info_fecha != '31-12-1969') { ?>
	   <div class="Arial_11_Regular_marron" style="width:860px; margin-top:10px; padding-left:20px;"><? echo dia_semana ($diay, $mesy, $anoy) ?> , <?php echo $diay; ?> de <?php echo MesLetras($mesy); ?> de <?php echo $anoy; ?></div><?php } ?>
	
	
	
	
<div style="width:860px;  margin-top:5px; padding-left:20px;" ><span class="Arial_22_bold_negro"><?php echo $m_rhh_info_titulo; ?></span></div>



<div class="ScrollDocumentos" style="padding-left:20px; padding-right:10px;"><p class="Arial_14_regular_marron" ><?php echo $m_rhh_info_contenido; ?></p></div>



</td></tr>
    <tr>
    <td width="1020" height="2"><div style="background-color:#0C4789; margin-left:40px; margin-right:40px; margin-top:10px;"><img src="../../img/spc.gif" height="10" width="10" /></div></td>
  </tr>
   <tr>
    <td width="1020"><div class="Arial_13_Vinotinto_Bold" style="margin-left:70px;">Otras noticias</div></td>
  </tr>
<tr>
    <td height="247"  valign="top">		  <div class="info" id="container">
		
<ul id="items">
	 <?
		   $noticiatira = "select noticia.titulo, noticia.id, noticia.imagen, home_principal.* from noticia, home_principal where id_nota <>'$idn' and home_principal.id_nota=noticia.id order by id_home ASC limit 0,4";
	        $salidatira = mysql_query($noticiatira,$link);
			$numero=mysql_num_rows($salidatira);
			$excluir="";
	        if($numero > 0){
			  
					 
		               while($salida=mysql_fetch_array($salidatira)){
		                $titulo =stripslashes ($salida['titulo']);
			            $idnoticia = $salida['id']; 
						$excluir .= $idnoticia.",";
						$imagenP = $salida['imagen'];
			
			
	  ?>
    <li>
    	<p class="image"><a href="index.php?ckl=<?php echo $idnoticia; ?>"><img src="../../imagenes/<? echo"$imagenP"; ?>" height="116" width="134" /></a></p>
    	<p class="info Arial_12_bold_negro"><a href="index.php?ckl=<?php echo $idnoticia; ?>" class="info Arial_12_bold_negro" style="text-decoration:none;"><? echo"$titulo"; ?></a></p>
    </li>
    <?php }} ?>
	
	<?php
	$excluir=$excluir."0";
	$SQLComplemeta="SELECT * FROM noticia WHERE id NOT IN($excluir) ORDER BY id DESC LIMIT 0,4";
	$query = mysql_query($SQLComplemeta,$link);
	while($salida=mysql_fetch_array($query)){
		$titulo =stripslashes ($salida['titulo']);
		$idnoticia = $salida['id']; 
		$excluir .= $idnoticia.",";
		$imagenP = $salida['imagen'];
	 ?>
    
   <li>
    	<p class="image"><a href="index.php?ckl=<?php echo $idnoticia; ?>"><img src="../../imagenes/<? echo"$imagenP"; ?>" height="116" width="134" /></a></p>
    	<p class="info Arial_12_bold_negro"><a href="index.php?ckl=<?php echo $idnoticia; ?>" class="info Arial_12_bold_negro" style="text-decoration:none;"><? echo"$titulo"; ?></a></p>
    </li>
	  <?php } ?>
</ul>
</div>  </td>
  </tr></table>
	
	 
   </td>
    <td width="12" height="638">&nbsp;</td>
    
    <td width="66" height="638">&nbsp;</td>
  </tr>
</table>
    </td>
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