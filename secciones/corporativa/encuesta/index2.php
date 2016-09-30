
<? include('../../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";
if(isset($_GET['error'])){
echo "<script language='JavaScript'>alert('Usted Solo puede votar una vez');</script>";
}
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Entretenimiento - Trivia</title>
<script type="text/javascript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script type="text/javascript">
function limpia_formulario(){
 document.forms.trivializando.reset();
 }
 </script>
 <script type="text/javascript">
 function enviarFormulario(){
 document.trivializando.submit();
 }
 </script>

<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 700px;
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
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.trivializando.login.value.length==0){
       alert("Debe especificar un usuario valido")
       document.trivializando.login.focus()
	  
	    return false;
	   }
	    if (document.trivializando.password.value.length==0){
       alert("Debe escribir su clave")
       document.trivializando.password.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>
<style type="text/css">
<!--
.Estilo1 {font-size: 9px}

#publicidad {
    whith:596px;
    position: absolute;
    top: 0px;
    left: 50%;
	margin-left: -387px;
}

-->
</style>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg','../../../img/06_correo_01_160x106.jpg','../../../img/38_izq_02_26x52.jpg','../../../img/40_der_02_26x52.jpg','../../../img/23_RRHH_01_121x40.jpg','../../../img/25_genteTelesur_196x40.jpg','../../../img/27_fueraOficio_252x40.jpg','../../../img/32_1arriba_20x20.jpg','../../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../../img/01_Imagen_1020x816.jpg">
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
    <td width="1019" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="  margin-left:220px;">Encuesta</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="460" background="../../../img/002_1020x460.jpg">
<!--	<div style="position:absolute; top:200px; z-index:1005;" id="publicidad" align="center"><table width="774" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td width="774" valign="top"><table width="596" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th height="10" colspan="2" valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th width="146" align="left" valign="top" scope="col"><img src="bt_cerrar.jpg" width="146" height="30" border="0" usemap="#Map" /></th>
          <th width="637" valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="2" valign="top" scope="col"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="596" height="410">
            <param name="movie" value="pop_up.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="6.0.65.0" />
             This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. 
            <param name="expressinstall" value="secciones/Scripts/expressInstall.swf" />
             Next object tag is for non-IE browsers. So hide it from IE using IECC. 
            [if !IE]>
            <object type="application/x-shockwave-flash" data="pop_up.swf" width="596" height="410">
              <![endif]
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
               The browser displays the following alternative content for users with Flash Player 6.0 and older. 
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
              </div>
              [if !IE]>
            </object>
            <![endif]
          </object></th>
        </tr>
    </table></td>
  </tr>
</table>-->

<map name="Map" id="Map">
  <area shape="rect" coords="1,1,144,28" href="#&nbsp;" target="_self" onclick="document.getElementById('publicidad').style.display = 'none'" />
</map>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
	</div>
	<form name="trivializando" id="trivializando" action="logini.php" method="post"  onsubmit="return valida_envia();">
    <table width="1020"  height="260" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="132"><div class="Arial_12_bold_negro" style="width:px; margin-top:292px; margin-left:400px; margin-right:380px; text-align: left; margin-bottom:4px;"><input name="login" type="text" style=" border:#FF0000;" size="20" />
    </div></td>
  </tr>
  <tr>
    <td width="1020" height="38"><div class="Arial_12_bold_negro" style="width:px; margin-left:400px; margin-right:380px; margin-right:400px; text-align: left; margin-top:16px;"><input type="password" name="password" style="border:none;" /></div></td>
  </tr>
  <tr>
    <td>
    <table width="1020" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="417">&nbsp;</td>
    <td width="96" valign="top"><div style="margin-bottom:30px; margin-top:12px;"><input type="image" src="../../../img/228_imagenes_95x33.jpg" align="bottom"  width="95" height="33" /></div></td>
    <td width="24">&nbsp;</td>
    <td width="96" valign="top"><div style="margin-bottom:30px; margin-top:12px;"><a href="#." onClick="limpia_formulario(); return false"> <img src="../../../img/229_imagenes_95x33.jpg" align="bottom"  width="95" height="33" onClick="limpia_formulario(); return false" /></a></div></td>
        <td width="387">&nbsp;</td>
  </tr>
</table>

    </td>
  </tr>
</table></form>

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