<?php
include('logeo.php');
include('../../../extras/coneccion.php');
$link=Conectarse();
$ubicacion="canal";
$ruta="../../";
include('../../../extras/coneccion_aplicaciones.php');
$conecta=Validar();

$variableid=addslashes($_GET["clx"]);
$Sqls="SELECT * FROM m_aplicativo_cjuridica WHERE m_aplicativo_cjuridica_id='$variableid'";
$SQll=mysql_query($Sqls, $link);
$rowx=mysql_fetch_array($SQll);

$m_aplicativo_cjuridica_nombres=$rowx['m_aplicativo_cjuridica_nombres'];
$m_aplicativo_cjuridica_apellidos=$rowx['m_aplicativo_cjuridica_apellidos'];
$m_aplicativo_cjuridica_fechasolicitud=$rowx['m_aplicativo_cjuridica_fechasolicitud'];
$m_aplicativo_cjuridica_ci=$rowx['m_aplicativo_cjuridica_ci'];
$m_aplicativo_cjuridica_cargo =$rowx['m_aplicativo_cjuridica_cargo'];
$m_aplicativo_cjuridica_dependencia =$rowx['m_aplicativo_cjuridica_dependencia'];
$m_aplicativo_cjuridica_turno=$rowx['m_aplicativo_cjuridica_turno'];
$m_aplicativo_cjuridica_email=$rowx['m_aplicativo_cjuridica_email'];
$m_aplicativo_cjuridica_ext=$rowx['m_aplicativo_cjuridica_ext'];
$m_aplicativo_cjuridica_solicitud =$rowx['m_aplicativo_cjuridica_solicitud'];
$m_aplicativo_cjuridica_clasificacion=$rowx['m_aplicativo_cjuridica_clasificacion'];

if($m_aplicativo_cjuridica_clasificacion==''){
$clasificacion="Sin Asignar";
}
else{
$clasificacion=$m_aplicativo_cjuridica_clasificacion;
}
$solofecha=date('d-m-Y h:i', strtotime($m_aplicativo_cjuridica_fechasolicitud));
$solohora=date('h:i:s', strtotime($m_aplicativo_cjuridica_fechasolicitud));

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTRANET TELESUR - Herramientas - Protocolo</title>
<script type="text/javascript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>


<script>
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.fecha_servicio.value.length==0){
       alert("Debe especificar la fecha en que necesita el servicio")
       document.form1.fecha_servicio.focus()
	  
	    return false;
	   }
	      
       if (document.form1.departamento.value=='Seleccione'){
       alert("Debe especificar la dirección a la cual pertenece")
       document.form1.departamento.focus()
	  
	    return false;
	   }
  return validar;
	  
    
	}


//-->
</script>
<script language="JavaScript" type="text/JavaScript">
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>

<style type="text/css">
.ScrollX {
	
	overflow: scroll;
	height: 480px;
	margin-top:10px;
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
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
<link href="../../../admcms/extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg','../../../img/06_correo_01_160x106.jpg','../../../img/38_izq_02_26x52.jpg','../../../img/40_der_02_26x52.jpg','../../../img/23_RRHH_01_121x40.jpg','../../../img/25_genteTelesur_196x40.jpg','../../../img/27_fueraOficio_252x40.jpg','../../../img/32_1arriba_20x20.jpg','../../../img/32_1abajo_20x20.jpg')">
<table width="1020" border="0" align="center" cellpadding="0" cellspacing="0" background="../../../img/01_Imagen_1020x816.jpg">
  <tr>
    <td width="1020" height="190">
        <?php include("../../cabecera/index.php"); ?>
    </td>
  </tr>
  <tr>
    <td width="1020" height="17">&nbsp;    </td>
  </tr>
   <tr>
    <td width="1020" height="16"></td>
  </tr>
   <tr>
    <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">SISTEMA  DE ASISTENCIA JUR&Iacute;DICA</div></td>
  </tr>
   
   <tr>
    <td width="1020" height="493" valign="top" >
	<div class="ScrollX" style="margin-right:80px;">
	<table width="803" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
  <tr>
    <td ><img src="../../images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="800" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10"><img src="../images/spacer.gif" width="1" height="1" /></td>
        <td width="788" valign="top">
		
		
		
		<table width="788" cellspacing="0" cellpadding="0">
		
		 <tr>
	
	<td width="786"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr>
          <tr>
            <td width="786" height="23" background="../../images/barra_larga.gif" class="Titulos">Asistencia Jur&iacute;dica </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			 <form id="form1" name="form1" method="post" action="guardar.php" onsubmit="return validando();">
			<table width="786" height="485" border="0" cellpadding="0" cellspacing="0" style="background-image:url(img/fondo_ley3.jpg); background-repeat:no-repeat; background-position:center;">
			<tr><td width="786" height="10" colspan="3"><img src="../images/spacer.gif" height="1" width="1" border="0" /></td>
			</tr>
			<tr>
			  <td height="48" colspan="3" class="hora">Consultoría Jurídica te brinda Asesoría Legal en casos no laborales. Los días lunes y martes podrás acceder al formulario, allí debes completar los campos y enviar la solicitud; de vuelta recibiras un correo indicandote el día, hora y abogado que atenderá tu consulta. </td>
			</tr>
			
			<tr><td height="10" colspan="3"><img src="../images/spacer.gif" height="1" width="1" border="0" /></td>
			</tr>
			<tr><td colspan="3"></td></tr>
			<tr>
			  <td height="19" colspan="3"><table width="770" border="0" cellpadding="0" cellspacing="0">
			    <tr><td width="393" height="200" valign="top"><table width="393" border="0" cellpadding="0" cellspacing="0">
			      <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Fecha solicitud: </span></td>
			      <td width="229" valign="top"><input name="fecha_solicitud" type="text" readonly="yes" class="pequeno" value='<? echo $solofecha; ?>' size="25"  disabled="disabled" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				   <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Nombre:</span></td>
			      <td width="229" valign="top"><input name="nombre" readonly="yes" type="text" class="pequeno" value="<?php echo $m_aplicativo_cjuridica_nombres; ?>" size="25"  disabled="disabled" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				  
				   <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Cedula de indentidad:  </span></td>
			      <td width="229" valign="top"><input name="cedula" type="text" readonly="yes"  class="pequeno" id="cedula" value='<? echo $m_aplicativo_cjuridica_ci; ?>' size="25"  disabled="disabled" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				   <tr><td width="164" valign="top"><span class="texto_pregunta_TuZona">Dependencia: </span></td>
			      <td width="229" valign="top"><div class="etiquetas"><?php  echo $m_aplicativo_cjuridica_dependencia; ?></div></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				     <tr>
				       <td width="164" valign="top"><span class="texto_pregunta_TuZona">Correo:  </span></td>
			           <td width="229" valign="top"><input name="email" type="text" class="pequeno"  id="email" value='<? echo $m_aplicativo_cjuridica_email; ?>' size="25"  disabled="disabled" /></td>
			      </tr>
				
				     
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="40" /></td>
				  </tr>
				  </table></td><td width="377" valign="top"><table width="393" border="0" cellpadding="0" cellspacing="0">
			      <tr>
			      <td width="105" valign="top"><span class="texto_pregunta_TuZona">Clasificación: </span></td>
			      <td width="288" valign="top"><input name="hora" type="text" readonly="yes" class="pequeno" value="<? echo $clasificacion; ?>" size="25"  disabled="disabled" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				   <tr><td width="105" valign="top"><span class="texto_pregunta_TuZona">Apellido:</span></td>
			      <td width="288" valign="top"><input name="apellido" type="text" class="pequeno" readonly="yes"  size="25" value="<?php echo $m_aplicativo_cjuridica_apellidos; ?>"  disabled="disabled"/></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				  
				   <tr><td width="105" valign="top"><span class="texto_pregunta_TuZona">Cargo:  </span></td>
			      <td width="288" valign="top"><input name="cargo" value="<? echo $m_aplicativo_cjuridica_cargo ; ?>" type="text" class="pequeno" id="cargo" onFocus="document.getElementById('cargo').style.borderColor='#666600'; document.getElementById('cargo').style.backgroundColor='#fef9e6;';" onBlur="document.getElementById('cargo').style.borderColor='#003875'; document.getElementById('cargo').style.backgroundColor='#ffffff;';" size="25" disabled="disabled"/></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				  
				   <tr><td width="105" valign="top"><span class="texto_pregunta_TuZona">Turno: </span></td>
			      <td width="288" valign="top"><input name="turno" type="text" class="pequeno" id="turno" onFocus="document.getElementById('turno').style.borderColor='#666600'; document.getElementById('turno').style.backgroundColor='#fef9e6;';" onBlur="document.getElementById('turno').style.borderColor='#003875'; document.getElementById('turno').style.backgroundColor='#ffffff;';" size="25" value="<?php echo $m_aplicativo_cjuridica_turno ; ?>"  disabled="disabled" /></td>
			      </tr>
				  <tr><td valign="top" colspan="2"><img src="img/spacer.gif" width="10" height="30" /></td>
				  </tr>
				     <tr><td width="105" valign="top"><span class="texto_pregunta_TuZona">Extensión:  </span></td>
			      <td width="288" valign="top"><input name="extension" type="text" class="pequeno" id="extension" size="25" onKeypress="return isNumberKey(event,this)" value="<?php echo $m_aplicativo_cjuridica_ext ; ?>"  disabled="disabled" /></td>
			      </tr>
				
				     
				  <tr><td height="38" colspan="2" valign="top"><img src="img/spacer.gif" width="10" height="15" /></td>
				  </tr>
				  </table></td>
			    </tr></table></td>
			</tr>
			
			<tr><td height="77" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center">Solicitud:<br />
				      <textarea name="solicitud" cols="50" rows="4" class="pequeno" id="solicitud"  onfocus="document.getElementById('solicitud').style.borderColor='#666600'; document.getElementById('solicitud').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('solicitud').style.borderColor='#003875'; document.getElementById('solicitud').style.backgroundColor='#ffffff;';"  disabled="disabled"><?php echo $m_aplicativo_cjuridica_solicitud; ?></textarea>
				</div></td></tr>
			<tr>
				</tr>
				<tr><td colspan="3" align="center"><img src="img/spacer.gif" width="10" height="20" /></td></tr>
				<tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#CACACA; height:30px; padding-top:10px; padding-bottom:10px;">
        <div align="left" style="margin-left:20px;">Archivos recibidos: <img src="img/cliprojo_Layer 1.png" width="30" height="30" align="absmiddle" /></div>
      </div></td>
      
    </tr>
				<?php 
	$SQL_adjuntos="SELECT *FROM t_documentos_juridicos WHERE t_documentos_juridicos_idpeticion='$variableid' AND t_documentos_juridicos_tipo='1' ORDER BY t_documentos_juridicos_id ASC";
	$query_adjunto=mysql_query($SQL_adjuntos, $link);
	$numerodocumentos=mysql_num_rows($query_adjunto);
	if($numerodocumentos >0){
	while($row_adjuntos=mysql_fetch_array($query_adjunto)){
	$archivo=$row_adjuntos["t_documentos_juridicos_archivo"];
	$titulo=$row_adjuntos["t_documentos_juridicos_titulo"];
	$dir="archivos/".$archivo;
	?>
	<tr>	
	  <td class="texto_Gris"><a href="#" onclick="NewWindow('<?php echo $dir; ?>','categoria','250','200','no'); return false;" style="text-decoration:none;"> <img src="img/clips_Layer 1.png" width="21" height="21" hspace="3" vspace="3" border="0" align="absmiddle" /> <?php echo $titulo; ?></a></td>
	</tr>
	<?php }}
	else{ ?>
	<tr>	
	  <td class="texto_Gris">No existen archivos recibidos!!!</td>
	</tr>
	<?php } ?>
	
	
	<tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#CACACA; height:30px; padding-top:10px; padding-bottom:10px;">
        <table width="762" border="0" cellpadding="0" cellspacing="0">
          <tr><td width="423"><div align="left" style="margin-left:20px;">Archivos enviados: <img src="img/cliprojo_Layer 1.png" width="30" height="30" align="absmiddle" /></div></td>
          <td width="427"><div align="right" style="margin-right:20px;"><a href="adjuntos.php?clx=<?php echo $variableid; ?>" class="Numeros_rojo" style="text-decoration:none;">Enviar archivos <img src="img/plusfile_1.png" width="30" height="30" align="absmiddle" border="0" /></a></div></td>
          </tr></table>
      </div></td>
      
    </tr>
	
	
	
	<?php 
	$SQL_adjuntos="SELECT *FROM t_documentos_juridicos WHERE t_documentos_juridicos_idpeticion='$variableid' AND t_documentos_juridicos_tipo='2' ORDER BY t_documentos_juridicos_id ASC";
	$query_adjunto=mysql_query($SQL_adjuntos, $link);
	$numerodocumentos=mysql_num_rows($query_adjunto);
	if($numerodocumentos >0){
	while($row_adjuntos=mysql_fetch_array($query_adjunto)){
	$archivo=$row_adjuntos["t_documentos_juridicos_archivo"];
	$titulo=$row_adjuntos["t_documentos_juridicos_titulo"];
	$dir="archivos/".$archivo;
	?>
	<tr>	
	  <td class="texto_Gris"><a href="#" onclick="NewWindow('<?php echo $dir; ?>','categoria','250','200','no'); return false;" style="text-decoration:none;"> <img src="img/clips_Layer 1.png" width="21" height="21" hspace="3" vspace="3" border="0" align="absmiddle" /> <?php echo $titulo; ?></a></td>
	</tr>
	<?php }}
	else{ ?>
	<tr>	
	  <td class="texto_Gris">No existen archivos enviados!!!</td>
	</tr>
	<?php } ?>
	
	
				<tr><td colspan="3" align="center"><img src="img/spacer.gif" width="10" height="20" /></td></tr>
				
				<tr><td colspan="3" align="center"><span id="textcontainer1" align="left" ><img src="img/spacer.gif" width="10" height="10" /><a href="listado.php" target="_self" title="Cancelar"><img  src="img/back30_1.png" name="button" width="30" height="30"  border="1" style="color:#fff; background-image:url(img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" type="image" value="cancelar" title="Cancelar" /></a></span></td></tr>
				<tr><td colspan="3"><img src="../images/spacer.gif" height="1" width="1" border="0" />
				
					</td>							
				</table>                                               
			 </form>                          </td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="801" height="20" ><img src="../images/spacer.gif" width="1" height="1" /></td>
  </tr>

</table>
</div>
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