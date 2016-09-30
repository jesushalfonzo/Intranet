<?php include('logeo.php');?> 
<? include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="ENTRETENIMIENTO";

$SQL="SELECT * FROM m_trivia WHERE m_trivia_aprobado='SI' ORDER BY m_trivia_id DESC";
//echo "sql: " . $SQL;
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_trivia_titulo=$row['m_trivia_titulo'];
$m_trivia_id=$row['m_trivia_id'];
$m_trivia_imagen=$row['m_trivia_imagen'];
$fechacompleta=date('Y-m-d H:i:s');

$SELECT_validar="SELECT * FROM m_trivia_participantes WHERE m_trivia_participantes_idpersonal='$usuario' and m_trivia_participantes_idtrivia='$m_trivia_id'";
//echo "query: " . $SELECT_validar;
$query_valida=mysql_query($SELECT_validar, $link);
$num_rows=mysql_num_rows($query_valida);
if($num_rows==0){
$participa="index.php";
$INSERTAR_jugador="INSERT INTO m_trivia_participantes VALUES(Null, '$usuario', '$m_trivia_id', '$fechacompleta')";
$inserta_jugador=mysql_query($INSERTAR_jugador, $link);
$id_master=mysql_insert_id($link);
$_SESSION['master']=$id_master;
}
else{
$participa="denegado.php";
}
$onload="DYNIFS.resize('trivia')";

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
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="dynifs.js"></script>

<body onload="DYNIFS.resize('trivia')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../img/01_Imagen_1020x816.jpg">
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
    <td width="1019" height="30" background="../../img/29_4_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:244px;">Trivia</div></td>
  </tr>
   <tr>
    <td width="1020" height="22"></td>
  </tr>
   <tr>
    <td width="1020" height="460" background="../../img/235_imagenes_1020x460.jpg">
	
	<table width="1020" height="460" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1020" height="60">
    <table width="1020" height="60" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="510" height="60" valign="bottom">&nbsp;</td>
    <td width="510" height="60" align="right" valign="bottom"><div class="Arial_13_Negro_Bold" style="width:px;  margin-left:150px; margin-right:70px;"><? echo"$nombrecompleto"; ?></div></td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="1020" height="92" valign="top"><div class="Arial_16_blanco_regular" style="width:px; margin-left:60px; margin-right:60px; margin-top:40px; margin-bottom:5px; text-align: justify;">Conoce un poco más de Larinoamérica a través de 10 preguntas de selección simple relacciónes simple relacionadas a temas: políticos, económicos, sociales, culturales y geográficos.</div></td>
  </tr>
  <tr>
    <td width="1020" height="10" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="1020" height="280" valign="top">
    <table width="1020" height="270" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="60">&nbsp;</td>
    <td width="570" height="270" class="cuadrado_marron">
	<?php if (!isset($id_master)){ $id_master=""; } ?>
    <? echo'<iframe width="560" height="270" id="trivia" name="trivia" src="trivia/'.$participa.'?id='.$m_trivia_id.'&idmaster='.$id_master.'" onload="'.$onload.'" frameborder="0" scrolling="no" style="width:570px; height:270px; border:1px dotted #BEBEBE;"></iframe>'; ?>         

    </td>
    <td width="16">&nbsp;</td>
    <td width="310" height="270" class="cuadrado_marron"><img src="../../multimedia/imagenes/<? echo $m_trivia_imagen; ?>" width="310" height="270" /></td>
    <td width="64">&nbsp;</td>
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