<?php session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//PARA LOS COMENTARIOS
ini_set('session.gc_maxlifetime',7200);

if (isset($_SESSION["C0m3nt4r10sPr3s1"])){ $variable=$_SESSION["C0m3nt4r10sPr3s1"]; } else{ $variable=""; }
if (isset($_SESSION["N0mbr3C0m3nt4r10"])){ $Nombre=$_SESSION["N0mbr3C0m3nt4r10"]; } else{ $Nombre="Usuario no identificado"; }




if ($variable == 'pu3d3p4rt1c1p4r'){
$logeado=true;
}
else{
$logeado=false;
}


 include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";

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
<script type="text/javascript" src="../corporativa/js/jquery.min.js"></script>
<script type="text/javascript">

function contar(myform,id, t) {  
  n = myform.value.length;
  //alert(n);
  t = t;  
	  if (n<t) {
		 document.getElementById(id).innerHTML= t-n +" caracteres disponibles.";
		 myform.style.border="1px solid #0099CC";	
	  }
	  else {
		 myform.value = myform.value.substring(0, t);
		 myform.style.border="2px solid red";
		 document.getElementById(id).innerHTML= 0 +" caracteres disponibles.";
	  }
}


function pintar(myform){
 myform.style.border="1px solid #0099CC";
}

function blanquear(){

validar=true;
    if (document.formulario.comentario.value=="Escriba su comentario aquí..."){
       document.formulario.comentario.focus();
	   document.getElementById('mensajeX').innerHTML = '';
	    document.getElementById('mensaje').innerHTML = '400 caracteres disponibles.';
		  return false;
	   }
	   

	   return validar;
}
</script>
<script type="text/javascript">
function limpia_formulario(){
 document.forms.formulario.reset();
 }
 
 
 function validandoando(){
    //valido el nombre
	validar=true;
    if (document.formulariox.login.value.length==0){
       alert("Debe ingresar el nombre de usuario")
       document.formulariox.login.focus()
	  
	    return false;
	   }
	      
       if (document.formulariox.password.value.length==0){
       alert("El campo clave no puede estar vacio")
       document.formulariox.password.focus()
	  
	    return false;
	   }
	 
	  
	   
  return validar;
	  
    
	}
	
	function EnviarFormulario(){
	document.formulario.submit();

	}
	

function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.formulario.comentario.value.length==0){
       alert("El mensaje no puede estar vacío")
       document.formulario.comentario.focus()
	    
		  return false;
	   }


   if (document.formulario.comentario.value=="Escriba su comentario aquí..."){
       alert("El mensaje no puede estar vacío")
       document.formulario.comentario.focus()
	    
		  return false;
	   }


  return validar;
	  
    
	}

 </script>
 
<script>
   $(document).ready( function()
   {
	
	<?php if (isset($_GET["ancor"])){  ?>
	document.getElementById('anclaje').click();
	<?php } ?>
   } );
</script>


	<style type="text/css">
.ScrollX {
	
	overflow: scroll;
	height: 275px;
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
 .estilotextarea2 {width:400px;height:160px;border: 1px dotted #000099;} 
 #separador
{
	width:100%;
	height:1px;
	clear:both;
}

 #separador2
{
	width:100%;
	height:10px;
	clear:both;
}
.txt_respuesta_allard {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: lighter;
	color: #000000;
	text-align: justify;	
}
.cerrar{
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
font-style:italic;
font-size:12px;
text-decoration:none;
color:#333333;
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
   <?php ///include("botones.php"); ?>
    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1020" height="30" background="../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Noticias de inter&eacute;s</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="738" background="../../img/01_Imagen_02_1020x738.jpg">
    <table width="1020" height="696" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="426" valign="top"><table width="1020" height="406" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="62">&nbsp;</td>
    <td width="860" valign="top">

    <div class="Arial_11_Regular_marron" style="width:860px; margin-top:10px; padding-left:20px;">Martes , 12 de diciembre de 2012</div>
    <div style="width:900px; padding-left:20px;  margin-top:10px; padding-right:10px;" class="Gris_Oscuro_13px_Regular">
  <table width="325" border="0" align="right" cellpadding="0" cellspacing="0" class="bordes_todos" style="margin-left:15px; margin-bottom:15px;">
    <tr>
      <td width="365"><div style="margin-left:5px; margin-right:5px; margin-top:5px; margin-bottom:5px;"><span class="Arial_22_bold_negro">
	  <img src="chavez-tuiter.jpg" width="400" height="300" />
	 </span></div></td>
      </tr>
  </table>
  <span class="Arial_22_bold_negro"><strong><a href="#ancla" id="anclaje"></a>¡FUERZA CHÁVEZ!</strong>
  </p>
  </span>
<p class="Arial_14_regular_marron">Hoy nos unimos ante una nueva batalla, un nuevo reto de vida y un desafío que pone a prueba la fuerza de nuestra Revolución.

<br />

Los trabajadores de teleSUR reafirmamos nuestro apoyo al Presidente en este período difícil de su vida y estamos confiados que esta adversidad se trasformará en experiencia y aprendizaje. Comandante saldremos una vez más victoriosos.

<br />
Gracias a usted Presidente, a su empuje, a su fuerza, a su constancia en la construcción de un mundo más humano. Gracias a usted por la creación de teleSUR. Cuente con nosotros y con nuestro compromiso con la integración, con la Patria Grande de Bolívar y con el fortalecimiento del socialismo.
<br />

Hoy nos unimos en una sola voz para transmitirle este mensaje de amor y solidaridad:</p>
</div>	
	</div>
</td>
    <td width="12" height="374">&nbsp;</td>
    <td width="20" height="374">    </td>
    <td width="66" height="374">&nbsp;</td>
  </tr>
    <tr>
    <td width="1020" height="2" background="../../img/30_linea_1020x18.jpg" colspan="5">&nbsp;</td>
  </tr>
   <tr>
    <td width="1020" colspan="5"><div class="Arial_13_Vinotinto_Bold" style="margin-left:70px;"><a name="ancla" id="a"></a>
	
	<?php 
		
		if ($logeado==false){
		
		?>
	Deja aquí tu comentario ( <?php echo $Nombre; ?>) 
	
	
	<?php } else {?>
	
	<?php echo $Nombre; ?>
	
	<?php } ?>
	
		<?php 
		
		if ($logeado==true){
		
		?>
	- <span><a href="cerrar.php" class="cerrar">Cerrar sesión</a></span>
	
	<?php }  ?>
	
	</div></td>
  </tr>
</table>
</td>
  </tr>

  <tr>
    <td height="247"  valign="top"><div style="margin-left:50px;"><table width="918" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" width="44%" align="center">
		
		
		
		<?php 
		
		if ($logeado==true){
		
		?>
		<div style="margin-left:20px;">
		<form name="formulario" id="formulario" action="guardar.php" method="post" onsubmit="return valida_envia();"><table cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><textarea name="comentario" id="mensajeX" cols="10" rows="6" class="estilotextarea2" onClick="contar(this,'mensaje', 400); blanquear();" onKeyUp="contar(this,'mensaje', 400);" onChange="contar(this,'mensaje', 400);">Escriba su comentario aquí...</textarea></td></tr><tr><td valign="top"><div id="form_campo3"><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" id="msj">
          <div align="center" id="mensaje" style="margin-top:10px; margin-bottom:15px;">400 caracteres disponibles.</div>
        </div></div></td></tr>
		<tr><td valign="top" align="center"><input type="image" src="images/enviar.jpg" align="bottom"  width="53" height="23" name="envia" id="envia" /></td></tr>
		</table></form>
		
		</div>
		<?php
		}
		else {
		?>
		
		<form id="formulariox" name="formulariox" method="post" action="login.php" onSubmit="return validandoando();">
		<div class="Arial_13_Vinotinto_Bold" style="margin-bottom:10px; margin-left:20px; text-align:left;">Ingresa con el usuario y la clave de tu correo Zimbra</div>

<div style="margin-left:20px;"><table width="290" height="213" align="left" cellpadding="0" cellspacing="0" background="../../images/fondo.jpg">
  <tr>
    <td height="131"><table width="256" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60" height="54" class="Arial_12_bold_negro">Usuario</td>
    <td width="194">
        <input name="login" type="text" size="20" />
    </td>
  </tr>
  <tr>
    <td height="32" class="formulario_texto"><div align="left" class="Arial_12_bold_negro">Clave</div></td>
    <td>
        <input name="password" type="password" size="20" />

    </td>
  </tr>
</table>
  </td>
  </tr>
  <tr>
    <td height="46" valign="top"><div align="center">
	
	<input type="image" src="../../images/entrar.jpg" align="bottom"  width="89" height="45" name="envia" id="envia" />
	</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table></div>



	</form>
		<?php } ?>
		
		
		
		
		
		
		
		
		</td>
        <td valign="top" width="56%">
		<div style="width:<?php 
		
		if ($logeado==true){
		echo "460";
		}
		else{
		echo "550";
		}
		?>px; padding-right:15px;" class="ScrollX">
		<?php 
		$SQL="SELECT * FROM m_comenterios WHERE m_comenterios_estatus ='A' ORDER BY m_comenterios_fecha DESC";
		$query=mysql_query($SQL, $link);
		while($row=mysql_fetch_array($query)){
		$m_comenterios_nombre=utf8_encode(escapex($row["m_comenterios_nombre"]));
		$m_comenterios_comentario=html_entity_decode(escapex($row["m_comenterios_comentario"]));
	    $m_comenterios_fecha=strtotime($row["m_comenterios_fecha"]);
		$fecha=date('d/m/Y H:i', $m_comenterios_fecha);
		?>
		
		<div style="width:<?php 
		
		if ($logeado==true){
		echo "420";
		}
		else{
		echo "510";
		}
		?>px; background:#FFFFFF; padding-left:5px; padding-right:5px;" align="left">
	<div style="width:160px; height:25px; float:left; background:#FFFFFF;">
		<div style="width:4px; height:25px; float:left;"><img src="images/img_izq_nom_forista.jpg" width="4" height="25" border="0"/></div>
		<div style="width:140px; height:22px; float:left; padding-top:3px; background: url(images/img_centro_nom_forista.jpg) repeat-x;" align="justify" class="txt_respuesta_allard"><?php echo $m_comenterios_nombre; ?></div>
		<div style="width:16px; height:25px; float:right;"><img src="images/img_der_nom_forista.jpg" width="16" height="25" border="0"/></div>
	</div>
	<div style=" width:350px; height:2px; float:right; background:#FFFFFF;"></div>
	
	<div id="separador"></div>
	<div class="cerrar" style="font-size:10px; margin-bottom:3px;"><?php echo $fecha; ?></div>
	<div style="width:100%; background:#FFFFFF;" align="justify"><span class="txt_respuesta_allard"><?php echo $m_comenterios_comentario; ?></span></div>
	<div id="separador2"></div>
</div>
	
			
		<?php } ?>
			
		
		</div>
		
		
		</td></tr></table></div> </td>
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

function escapex($str) 
{
	if(get_magic_quotes_gpc())
		$str = stripslashes($str);
		return htmlentities($str, ENT_QUOTES);
}
?>