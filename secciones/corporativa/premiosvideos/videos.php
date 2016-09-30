<?php session_start();?>
<? 
if (isset($_SESSION["v0t4nt3sV1d30s"])){ $variable=$_SESSION["v0t4nt3sV1d30s"]; } else{ $variable=""; }
if ($variable != 'usuariosV1deos'){
	echo "<script language='JavaScript'>document.location.href='index.php';</script>";
	exit();
}

include('../../../extras/coneccion.php');
$link=Conectarse();

if (isset($_SESSION["1dU5u4R10V0tanteV1d30s"])){ $idusu=$_SESSION["1dU5u4R10V0tanteV1d30s"]; } else{ $idusu="00"; }
$SQL="SELECT *  FROM  m_resultados_videos WHERE m_resultados_videos_idusuario = '$idusu'";
$query=mysql_query($SQL, $link);
$numero=mysql_num_rows($query);

if($numero >0){
echo "<script language='JavaScript'>document.location.href='NoVotar.php';</script>";
}

?>
 <?php
if (isset($_SESSION["N0mbr3V0t4nt3V1d30s"])){ $NombreCompleto=$_SESSION["N0mbr3V0t4nt3V1d30s"]; } else { $NombreCompleto=""; }
if (isset($_SESSION["1dU5u4R10V0tanteV1d30s"])){ $idusuario=$_SESSION["1dU5u4R10V0tanteV1d30s"]; }

$masterSeccio="CORPORATIVA";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Corporativas - Premios teleSUR 2012</title>
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
.ScrollX {
	
	overflow: scroll;
	height: 510px;
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

<script language=JavaScript type=text/javascript>
<!--
function send_form(current_form){
// guardamos el nombre de grupo de radios o el primer radio de un grupo sin seleccionar
// para devolverle el foco

var radio_group = ""
var ok_form = 1
    for(var ctr = 0 ; ctr < current_form.length; ctr++){
    // comprobamos que el campo es radio y que nombre de grupo de radio
     if(current_form[ctr].type == "radio" && current_form[ctr].name != radio_group){
            //comprobamos si tiene marcado un radio en el grupo
            if(check_radio(eval("current_form." + current_form[ctr].name))){
              // Si no tiene selecionado ningun radio rompemos el bucle
              // y asignamos 0 a ok_form
              ok_form--
              // guardamos el radio para asignar el foco
              radio_group = current_form[ctr]
              break
            }
            // Si hemos llegado aquí asignamos el nombre del grupo 
            // para buscar en el siguiente grupo
            radio_group = current_form[ctr].name
        }
    }
 if(ok_form){
   
     current_form.submit()
 }
 else{
   alert("Por favor, debe seleccionar una opción")
   //radio_group.focus()
   return false
 }
}
// esta funcion comprueba el grupo  de radio
function check_radio(radio_group){
  // comprobamos que en el grupo de radio haiga uno seleccionado
  for(var ctr = 0 ; ctr < radio_group.length; ctr++){
    if(radio_group[ctr].checked){
     // Si hay uno selecionado
         return false
    }
  }
        // Si no hay ninguno seleccionado
      return true
}
//-->
</script>
<script type="text/javascript">
function Cargar_Player(video, foto){
var imagen=foto;
var player = document.getElementById("mediaplayer");
player.sendEvent('STOP');
player.sendEvent('LOAD',{file:video, image:imagen, type:'video', title:"mi video"});
player.sendEvent('PLAY'); 
}
</script>

<script type="text/javascript">
function Reescribir(titulo, productor){
var fechaX = document.getElementById("titulo"); 
fechaX.innerHTML = titulo;
var tituloX = document.getElementById("productor"); 
tituloX.innerHTML = productor;
}
</script>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg','../../../img/06_correo_01_160x106.jpg','../../../img/38_izq_02_26x52.jpg','../../../img/40_der_02_26x52.jpg','../../../img/23_RRHH_01_121x40.jpg','../../../img/25_genteTelesur_196x40.jpg','../../../img/27_fueraOficio_252x40.jpg','../../../img/32_1arriba_20x20.jpg','../../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../../img/01_Imagen_01_1020x1100.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="26">
   <?php include("../botones-INT.php"); ?>
    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Premios teleSUR 2012 </div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../../img/videos_1.jpg">
    
<table width="1020" height="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="190">&nbsp;</td>
  </tr>
  <tr>
    <td width="1020" height="520">
    <table width="1020" height="520" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72" height="520">&nbsp;</td>
    <td width="865" height="520" valign="top">
    <form name="premiosForm" method="post" id="premiosForm" action="votar.php" onsubmit="send_form(this.form)">
	<table width="865" height="520" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="865" height="24">&nbsp;</td>
      </tr>
      <tr>
        <td width="865" height="398" valign="top">
        <table width="865" height="398" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30" height="398">&nbsp;</td>
    <td width="386" height="398" valign="top">
    <table width="384" height="387" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="384" height="118">
	
	
	
	
	
    <table width="384" height="118" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="310" valign="top"><div class="Arial_22_Blanco_Fuerte"  style="width:px; margin-top:15px; margin-bottom:10px; margin-left:10px;">
	<a href="#." onclick="Cargar_Player('videos/musica_entre_el_fuego.flv', '../../../img/videomuestra.jpg'); Reescribir('Música entre el fuego', 'Por:  Angie Camacho');" class="Arial_22_Blanco_Fuerte" style="text-decoration:none;">
	Música entre el fuego</a></div>
    <div class="Arial_16_Blanco"  style="width:px; margin-bottom:5px; margin-left:10px;">Por:  Angie Camacho</div>
	<div class="Arial_12_regular_marron"  style="width:px; margin-bottom:10px; margin-left:10px;"><span class="Arial_14_bold_blanco"><a href="#." onclick="Cargar_Player('videos/musica_entre_el_fuego.flv', '../../../img/videomuestra.jpg'); Reescribir('Música entre el fuego', 'Por:  Angie Camacho');" class="Arial_14_bold_blanco" style="text-decoration:none;"><img src="../../../img/Play_2.png" width="20" height="19" border="0" align="absmiddle" /> Reproducir </a></div>
	</td>
    <td width="74" align="center" valign="middle"><input name="opcion" type="radio" value="1" disabled="disabled" /></td>
  </tr>
</table>
    </td>
  </tr>
  <tr>
    <td  width="384" height="22">&nbsp;</td>
  </tr>
  <tr>
    <td width="384" height="109"><table width="384" height="118" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="310" valign="top"><div class="Arial_22_Blanco_Fuerte"  style="width:px; margin-top:15px; margin-bottom:10px; margin-left:10px;">
	<a href="#." onclick="Cargar_Player('videos/Situacion_Yanomami.flv', '../../../img/videomuestra.jpg'); Reescribir('Situación Yanomami', 'Por:  Rolando Segura');" class="Arial_22_Blanco_Fuerte" style="text-decoration:none;">
	Situación Yanomami</a></div><div class="Arial_16_Blanco"  style="width:px; margin-bottom:5px; margin-left:10px;">Por:  Rolando Segura </div>
	<div class="Arial_12_regular_marron"  style="width:px; margin-bottom:10px; margin-left:10px;"><span class="Arial_14_bold_blanco"><a href="#." onclick="Cargar_Player('videos/Situacion_Yanomami.flv', '../../../img/videomuestra.jpg'); Reescribir('Situación Yanomami', 'Por:  Rolando Segura');" class="Arial_22_Blanco_Fuerte" style="text-decoration:none;"><img src="../../../img/Play_2.png" width="20" height="19" border="0" align="absmiddle" /> <span class="Arial_14_bold_blanco">Reproducir</span> </a></div>
	
	</td>
    <td width="74" align="center" valign="middle"><input name="opcion" type="radio" value="2"  disabled="disabled"/></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td width="384" height="22">&nbsp;</td>
  </tr>
  <tr>
    <td width="384" height="110">
    <table width="384" height="118" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="310" valign="top"><div class="Arial_22_Blanco_Fuerte"  style="width:px; margin-top:12px; margin-bottom:10px; margin-left:10px;">
	<a href="#." onclick="Cargar_Player('videos/chavez_ganador.flv', '../../../img/videomuestra.jpg'); Reescribir('Chávez ganador', 'Por:  Rodrigo Hernández');" class="Arial_22_Blanco_Fuerte" style="text-decoration:none;">
	Chávez ganador</a></div><div class="Arial_16_Blanco"  style="width:px; margin-bottom:5px; margin-left:10px;">Por:  Rodrigo Hernández</div>
	<div class="Arial_12_regular_marron"  style="width:px; margin-bottom:10px; margin-left:10px;"><span class="Arial_14_bold_blanco"><a href="#." onclick="Cargar_Player('videos/chavez_ganador.flv', '../../../img/videomuestra.jpg'); Reescribir('Chávez ganador', 'Por:  Rodrigo Hernández');" class="Arial_22_Blanco_Fuerte" style="text-decoration:none;"><img src="../../../img/Play_2.png" width="20" height="19" border="0" align="absmiddle" /> <span class="Arial_14_bold_blanco">Reproducir</span> </a></div>
	</td>
    <td width="74" align="center" valign="middle"><input name="opcion" type="radio" value="3" disabled="disabled" /></td>
  </tr>
</table>
    </td>
  </tr>
</table>
    </td>
    <td width="61" height="398">&nbsp;</td>
    <td width="358" height="398" valign="top">
    <table width="358" height="398" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="358" height="39">&nbsp;</td>
  </tr>
  <tr>
    <td width="358" height="240"><div  style="width:320px; margin-left:19px; margin-right:19px; height:240px;" id="container">

<script type="text/javascript" src="swfobject.js"></script>

	<script type="text/javascript">
		var s1 = new SWFObject("player.swf","mediaplayer","320","240","8");
		s1.addParam("allowfullscreen","true");
		s1.addVariable("autostart","false");
		s1.addVariable('lightcolor','0x999999');
		s1.addVariable('backcolor','0x000000'); 
		s1.addVariable('frontcolor','0xFFFFFF');
		s1.addVariable("width","400");
		s1.addVariable("height","266");
		s1.addVariable("file","videos/musica_entre_el_fuego.flv&image=../../../img/videomuestra.jpg");		
		s1.addVariable('overstretch','true');
		s1.write("container");
		</script></div>
	
	</div></td>
  </tr>
  <tr>
    <td width="358" height="32">&nbsp;</td>
  </tr>
  <tr>
    <td width="358" height="64"><div class="Arial_22_Blanco_Fuerte"  style="width:px; margin-top:px; margin-bottom:10px; margin-left:15px;" id="titulo">Música entre el fuego</div><div class="Arial_16_Blanco"  style="width:px; margin-bottom:15px; margin-left:15px;" id="productor">Por:  Angie Camacho</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
    </td>
    <td width="30" height="398">&nbsp;</td>
  </tr>
</table>
        </td>
      </tr>
      <tr>
        <td width="865" height="34">&nbsp;</td>
      </tr>
      <tr>
        <td width="865" height="35" align="center">
		
		<input type="image" border="1" name="button" value="guardar" alt="Guardar"  title="Guardar" onclick="return send_form(this.form)"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Votar','','../../../img/vota-3.jpg',1)"   src="../../../img/vota-3.jpg" width="115" height="35" />
		
		
		</td>
      </tr>
      <tr>
        <td width="865" height="10">&nbsp;</td>
      </tr>
    </table>
	
	</form>
	
	</td>
    <td width="83" height="520">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="28">&nbsp;</td>
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