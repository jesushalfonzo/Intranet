<?php
include('logeo.php');
include('../../../extras/coneccion.php');
$link=Conectarse();
$ubicacion="canal";
$ruta="../../../";
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
$m_aplicativo_cjuridica_fechaasignada=$rowx['m_aplicativo_cjuridica_fechaasignada'];
$m_aplicativo_cjuridica_comentarios=$rowx['m_aplicativo_cjuridica_comentarios'];
$m_aplicativo_cjuridica_estatus=$rowx['m_aplicativo_cjuridica_estatus'];
$m_aplicativo_cjuridica_consultor=$rowx['m_aplicativo_cjuridica_consultor'];

if($m_aplicativo_cjuridica_fechaasignada!='0000-00-00 00:00:00'){
$fechaasignada=date('d/m/Y', strtotime($m_aplicativo_cjuridica_fechaasignada));
$horaasignar=date('H:i:s', strtotime($m_aplicativo_cjuridica_fechaasignada));
}
else{
$fechaasignada="Sin Asignar";
$horaasignar="Sin Asignar";
}

if($m_aplicativo_cjuridica_clasificacion==''){
$clasificacion="Sin Asignar";
}
else{
$clasificacion=$m_aplicativo_cjuridica_clasificacion;
}
$solofecha=date('d-m-Y h:i', strtotime($m_aplicativo_cjuridica_fechasolicitud));
$solohora=date('H:i:s', strtotime($m_aplicativo_cjuridica_fechasolicitud));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../admcms/extras/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" title="default" media="screen" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="datePicker.js"></script>
<script type="text/javascript">
$(document).ready(init);
function init()
{
	$('input#date1').datePicker();


}
</script>

<script type="text/javascript">
function getDataServer(url, vars){
     var xml = null;
     try{
         xml = new ActiveXObject("Microsoft.XMLHTTP");
     }catch(expeption){
         xml = new XMLHttpRequest();
     }
     xml.open("GET",url + vars, false);
     xml.send(null);
     if(xml.status == 404) alert("Url no valida");
     return xml.responseText;
}
</script>
<script type="text/javascript">
function eliminar(id, idsoli){
 var resp = confirm("¿Esta seguro que desea eliminar esta cita?");
if(resp) { 
    var error = getDataServer("servidor.php","?idcita="+id+"&idsolicitud="+idsoli+"");
	alert(error);
    if(error){
        alert('Cita borrada');
		window.location.reload()
		//alert(error);
  
    }
	else{
	alert('No pudo ser borrada');
	
		}
 
 }
 }
 </script>
<script src="ajax.js.php?jk=<?php echo $variableid; ?>"></script>
<script src="ajaxconsultores.js.php?jk=<?php echo $m_aplicativo_cjuridica_consultor; ?>"></script>
<script type="text/javascript">
refreshdiv();
refreshdiv2();
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
<script type="text/javascript">
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.clasificacion.value=='Sin Asignar'){
       alert("Debe seleccionar una categoria para la solicitud")
       document.form1.clasificacion.focus()
	  
	    return false;
	   }
	      
       if (document.form1.fechaasignada.value=='Sin Asignar'){
       alert("Debe especificar la fecha de atención")
       document.form1.fechaasignada.focus()
	  
	    return false;
	   }
	   
	    if (document.form1.horaasignada.value=='Sin Asignar'){
       alert("Debe especificar turno de trabajo que cumple")
       document.form1.turno.focus()
	  
	    return false;
	   }
	   
	    if (document.form1.email.value.length==0){
       alert("Debe colocar una cuenta de correo valida")
       document.form1.email.focus()
	  
	    return false;
	   }
	   
	       if (document.form1.solicitud.value.length==0){
       alert("Debe colocar especificar cual es su solicitud")
       document.form1.solicitud.focus()
	  
	    return false;
	   }
	   
  return validar;
	  
    
	}


 
function isNumberKey(evt,elem) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 44 || charCode > 58 || charCode==45 || charCode==46 || charCode==47 || charCode==44)){
        return false;
    }
    
 
 if (elem.value.length >=7){
            elem.value= elem.value.substr(0,7)
        }
}
 
//-->
</script>
<script language="javascript">
// definiciones basicas
OCULTO="none";
VISIBLE="block";
valor="0";
//show="off";
var show=new Array();

function mostrar_ocultar(blo) {
  if (show[blo]==undefined){show[blo]="off"}
  
  if (show[blo]=="off"){
  document.getElementById(blo).style.display=VISIBLE;
  show[blo]="on";
  
  } else {
 
 document.getElementById(blo).style.display=OCULTO; 
   show[blo]="off";

  }
  
  document.form1.fanalizar.checked=false;

}

function refreshpage(){
window.location.reload();
}
function chequear()
{
document.form1.editacitavieja.checked;
}
</script>
<body>
<form id="form1" name="form1" method="post" action="actualizar.php" onsubmit="return validando();">
  <table width="751" height="528" border="0" cellpadding="0" cellspacing="0" style="background-image:url(../img/fondo_ley3.jpg); background-repeat:no-repeat; background-position:center;">
    <tr>
      <td width="751" height="10" colspan="3"><img src="../../../images/spacer.gif" height="10" width="10" border="0" /></td>
    </tr>
    <tr>
      <td height="48" colspan="3" class="hora">Consultoría Jurídica te brinda Asesoría Legal en casos no laborales. Los días lunes y martes podrás acceder al formulario, allí debes completar los campos y enviar la solicitud; de vuelta recibiras un correo indicandote el día, hora y abogado que atenderá tu consulta. </td>
    </tr>
    <tr>
      <td height="10" colspan="3"><img src="../../../images/spacer.gif" height="30" width="10" border="0" /></td>
    </tr>
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td height="19" colspan="3"><table width="746" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="381" height="200" valign="top"><table width="381" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="164" valign="top"><span class="texto_pregunta_TuZona">Fecha solicitud: </span></td>
                  <td width="229" valign="top"><input name="fecha_solicitud" type="text" readonly="yes" class="pequeno" value='<? echo $solofecha; ?>' size="25" />
                      <input type="hidden" name="idrequerimiento" value="<?php echo $variableid; ?>" /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td valign="top" class="etiquetas">Responsable:</td>
                  <td><table width="222" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="190"><div name="timedivConsultores" id="timedivConsultores" style="width:150px;"> </div></td>
                        <td width="32"><a href="#" onclick="NewWindow('asignarconsultor.php','categoria','450','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nuevo consultor" style="text-decoration:none;"> <img src="../img/+catego_1.png" width="21" height="21" border="0" align="absmiddle" title="Agregar Nueva Categoría" /></a></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="164" valign="top"><span class="texto_pregunta_TuZona">Nombre:</span></td>
                  <td width="229" valign="top"><input name="nombre" readonly="yes" type="text" class="pequeno" value="<?php echo $m_aplicativo_cjuridica_nombres; ?>" size="25"  /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="164" valign="top"><span class="texto_pregunta_TuZona">Cedula de indentidad: </span></td>
                  <td width="229" valign="top"><input name="cedula" type="text" readonly="yes"  class="pequeno" id="cedula" value='<? echo $m_aplicativo_cjuridica_ci; ?>' disabled="disabled" size="25" /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="164" valign="top"><span class="texto_pregunta_TuZona">Dependencia: </span></td>
                  <td width="229" valign="top"><div class="etiquetas">
                    <?php  echo $m_aplicativo_cjuridica_dependencia; ?>
                  </div></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="164" valign="top"><span class="texto_pregunta_TuZona">Email: </span></td>
                  <td width="229" valign="top"><input name="email" type="text" class="pequeno"  id="email" value='<? echo $m_aplicativo_cjuridica_email; ?>' size="25" /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="40" /></td>
                </tr>
            </table></td>
            <td width="378" valign="top"><table width="365" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="105" valign="top"><span class="texto_pregunta_TuZona">Clasificación: </span></td>
                  <td width="273" valign="top"><table width="191" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><div name="timediv" id="timediv" style="width:200px;"> </div></td>
                      <td><a href="#" onclick="NewWindow('categoria.php','categoria','250','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nueva categoria" style="text-decoration:none;"> <img src="../img/+catego_1.png" width="21" height="21" border="0" align="absmiddle" title="Agregar Nueva Categoría" /></a></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="105" valign="top"><span class="texto_pregunta_TuZona">Apellido:</span></td>
                  <td width="273" valign="top"><input name="apellido" type="text" class="pequeno" readonly="yes"  size="25" value="<?php echo $m_aplicativo_cjuridica_apellidos; ?>"  /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="105" valign="top"><span class="texto_pregunta_TuZona">Cargo: </span></td>
                  <td width="273" valign="top"><input name="cargo" value="<? echo $m_aplicativo_cjuridica_cargo ; ?>" type="text" class="pequeno" id="cargo" onfocus="document.getElementById('cargo').style.borderColor='#666600'; document.getElementById('cargo').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('cargo').style.borderColor='#003875'; document.getElementById('cargo').style.backgroundColor='#ffffff;';" size="25" disabled="disabled"/></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="105" valign="top"><span class="texto_pregunta_TuZona">Turno: </span></td>
                  <td width="273" valign="top"><input name="turno" type="text" class="pequeno" id="turno" onfocus="document.getElementById('turno').style.borderColor='#666600'; document.getElementById('turno').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('turno').style.borderColor='#003875'; document.getElementById('turno').style.backgroundColor='#ffffff;';" size="25" value="<?php echo $m_aplicativo_cjuridica_turno ; ?>"  disabled="disabled" /></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                </tr>
                <tr>
                  <td width="105" valign="top"><span class="texto_pregunta_TuZona">Extensión: </span></td>
                  <td width="273" valign="top"><input name="extension" type="text" class="pequeno" id="extension" size="25" onkeypress="return isNumberKey(event,this)" value="<?php echo $m_aplicativo_cjuridica_ext ; ?>"  disabled="disabled" /></td>
                </tr>
                <tr>
                  <td height="38" colspan="2" valign="top"><img src="../img/spacer.gif" width="10" height="15" /></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="81" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center">Solicitud:<br />
              <textarea name="solicitud" cols="70" rows="4" class="pequeno" id="solicitud"  onfocus="document.getElementById('solicitud').style.borderColor='#666600'; document.getElementById('solicitud').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('solicitud').style.borderColor='#003875'; document.getElementById('solicitud').style.backgroundColor='#ffffff;';" readonly="readonly" style=" background-color:#CCCCCC; color:#000000; font-weight:bold;"><?php echo $m_aplicativo_cjuridica_solicitud; ?></textarea>
      </div></td>
    </tr>
	
	
	
	<tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#CACACA; height:30px; padding-top:10px; padding-bottom:10px;">
        <div align="left" style="margin-left:20px;">Archivos enviados: <img src="../img/cliprojo_Layer 1.png" width="30" height="30" align="absmiddle" /></div>
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
	$dir="../archivos/".$archivo;
	?>
	<tr>	
	  <td class="texto_Gris"><a href="#" onclick="NewWindow('<?php echo $dir; ?>','categoria','250','200','no'); return false;" style="text-decoration:none;"> <img src="../img/clips_Layer 1.png" width="21" height="21" hspace="3" vspace="3" border="0" align="absmiddle" /> <?php echo $titulo; ?></a></td>
	</tr>
	<?php }}
	else{ ?>
	<tr>	
	  <td class="texto_Gris">No existen archivos enviado!!!</td>
	</tr>
	<?php } ?>
	
	
	
	<tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#CACACA; height:30px; padding-top:10px; padding-bottom:10px;">
        <div align="left" style="margin-left:20px;">Archivos recibidos: <img src="../img/cliprojo_Layer 1.png" width="30" height="30" align="absmiddle" /></div>
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
	$dir="../archivos/".$archivo;
	?>
	<tr>	
	  <td class="texto_Gris"><a href="#" onclick="NewWindow('<?php echo $dir; ?>','categoria','250','200','no'); return false;" style="text-decoration:none;"> <img src="../img/clips_Layer 1.png" width="21" height="21" hspace="3" vspace="3" border="0" align="absmiddle" /> <?php echo $titulo; ?></a></td>
	</tr>
	<?php }}
	else{ ?>
	<tr>	
	  <td class="texto_Gris">No existen archivos recibidos!!!</td>
	</tr>
	<?php } ?>
	
	
    <tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#CACACA; height:30px; padding-top:15px;">Datos de las citas asignadas: </div></td>
      
    </tr>
	
	
	
	
	
    <?php 
			$Sqlcita="SELECT *FROM m_citas_juridicas WHERE m_citas_juridicas_idsolicitud='$variableid'";
			$sqlcita=mysql_query($Sqlcita, $link);
			$numerodecitas=mysql_num_rows($sqlcita);
			if($numerodecitas==0){

			?>
    <tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="left" class="Titulo_Rojo" style="margin-top:10px; padding-left:10px; margin-bottom:2px; background-color:#CACACA;">No hay citas asignadas aún. </div></td>
    </tr>
    <?php
			}
			else{
			while($rowcita=mysql_fetch_array($sqlcita)){
			$m_citas_juridicas_id=$rowcita['m_citas_juridicas_id'];
			$fechacita=$rowcita['m_citas_juridicas_fechacita'];
			$fechaantescita=date('d-m-Y', strtotime($fechacita));
			$horaantescita=date('h:i A', strtotime($fechacita));
			$m_citas_juridicas_update=$rowcita['m_citas_juridicas_update'];
			
			
			?>
    <tr>
      <td colspan="2"><table width="724" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="left" class="Titulo_Rojo" style="margin-top:10px; padding-left:10px; margin-bottom:2px; background-color:#CACACA;">Fecha de cita: <span class="Titulo_enContacto"><?php echo $fechaantescita; ?></span> </div>
                <div align="left" class="Titulo_Rojo" style="margin-top:2px; margin-bottom:10px; background-color:#CACACA; padding-left:10px;">Hora de cita: <span class="Titulo_enContacto"><?php echo $horaantescita; ?></span> </div></td>
            <td width="88" align="center"><?php 
			
			$hoydia=date('Y-m-d H:i:s', time());


if($fechacita > $hoydia){ ?>
                <a href="#" title="Editar Cita" onclick="NewWindow('editarcita.php?idcita=<?php echo $m_citas_juridicas_id; ?>','categoria','450','300','no'); return false;"><img src="../img/edit2.png" width="20" height="20" border="0" /></a>
                <?php } else { ?>
                <img src="../img/edit-bloqued.gif" width="20" height="20" border="0" title="Imposible editar, la fecha de la ya pasó." />
                <?php

}
?>            </td>
          </tr>
      </table></td>
    </tr>
    <?php }
			} ?>
    <tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><div style="display:none;">
        <input type="checkbox" name="editacitavieja" <?php if($m_citas_juridicas_update=='Y'){ echo'checked="checked"'; } ?> value="<?php echo $m_citas_juridicas_id; ?>" />
      </div>
          <div align="left" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#FFFFFF;">&nbsp;</div></td>
    </tr>
    <tr>
      <td height="38" colspan="2" valign="top" class="texto_pregunta_TuZona"><table width="734" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="387" valign="top"><div align="left" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#FFFFFF;">&nbsp;
              Asignar nueva cita
              <input name="nuevascitas" type="checkbox" id="nuevascitas" value="ONN" onclick="mostrar_ocultar('citasnuevas'); JavaScript:parent.recargarframe();" <?php if($m_aplicativo_cjuridica_estatus=='A'){ echo'disabled="disabled"'; } ?> />
            </div></td>
            <td width="389" valign="top"><div align="left" class="Titulo_Rojo" style="margin-top:10px; margin-bottom:10px; background-color:#FFFFFF;">&nbsp;Finalizar solicitud
              <input name="fanalizar" type="checkbox" id="fanalizar" value="ONN" <?php if($m_aplicativo_cjuridica_estatus=='A'){ echo'checked="checked" disabled="disabled"'; } ?> />
            </div></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="19" colspan="3"><div id="citasnuevas" style="display:none;">
        <table width="751" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="372" height="50" valign="top"><table width="372" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="164" valign="top"><span class="texto_pregunta_TuZona">Fecha de atenci&oacute;n: </span></td>
                    <td width="229" valign="top"><div style="margin-left:10px; margin:0px; width: 200px;"   class="demo-holder">
                        <input type="text" class="date-picker" name="fechaasignada" id="date1"  onfocus="document.getElementById('date1').style.borderColor='#666600'; document.getElementById('date1').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('date1').style.borderColor='#003875'; document.getElementById('date1').style.backgroundColor='#ffffff;';" value="<?php echo $fechaasignada; ?>" />
                    </div></td>
                  </tr>
                  <tr>
                    <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                  </tr>
              </table></td>
              <td width="398" valign="top"><table width="379" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="149" valign="top"><span class="texto_pregunta_TuZona">Hora de atenci&oacute;n : </span></td>
                    <td width="244" valign="top"><select name="horaasignada" >
                        <option value="00:00:00" <?php if($horaasignar=="Sin Asignar"){echo 'selected="selected"'; } ?> >Sin Asignar</option>
                        <option value="07:00:00" <?php if($horaasignar=="07:00:00"){echo 'selected="selected"'; } ?>>7:00 AM</option>
                        <option value="07:30:00" <?php if($horaasignar=="07:30:00"){echo 'selected="selected"'; } ?>>7:30 AM</option>
                        <option value="08:00:00" <?php if($horaasignar=="08:00:00"){echo 'selected="selected"'; } ?>>8:00 AM</option>
                        <option value="08:30:00" <?php if($horaasignar=="08:30:00"){echo 'selected="selected"'; } ?>>8:30 AM</option>
                        <option value="09:00:00" <?php if($horaasignar=="09:00:00"){echo 'selected="selected"'; } ?>>9:00 AM</option>
                        <option value="09:30:00" <?php if($horaasignar=="09:30:00"){echo 'selected="selected"'; } ?>>9:30 AM</option>
                        <option value="10:00:00" <?php if($horaasignar=="10:00:00"){echo 'selected="selected"'; } ?>>10:00 AM</option>
                        <option value="10:30:00" <?php if($horaasignar=="10:30:00"){echo 'selected="selected"'; } ?>>10:30 AM</option>
                        <option value="11:00:00" <?php if($horaasignar=="11:00:00"){echo 'selected="selected"'; } ?>>11:00 AM</option>
                        <option value="11:30:00" <?php if($horaasignar=="11:30:00"){echo 'selected="selected"'; } ?>>11:30 AM</option>
                        <option value="12:00:00" <?php if($horaasignar=="12:00:00"){echo 'selected="selected"'; } ?>>12:00 M </option>
                        <option value="12:30:00" <?php if($horaasignar=="12:30:00"){echo 'selected="selected"'; } ?>>12:30 PM</option>
                        <option value="13:00:00" <?php if($horaasignar=="13:00:00"){echo 'selected="selected"'; } ?>>01:00 PM</option>
                        <option value="13:30:00" <?php if($horaasignar=="13:30:00"){echo 'selected="selected"'; } ?>>01:30 PM</option>
                        <option value="14:00:00" <?php if($horaasignar=="14:00:00"){echo 'selected="selected"'; } ?>>02:00 PM</option>
                        <option value="14:30:00" <?php if($horaasignar=="14:30:00"){echo 'selected="selected"'; } ?>>02:30 PM</option>
                        <option value="15:00:00" <?php if($horaasignar=="15:00:00"){echo 'selected="selected"'; } ?>>03:00 PM</option>
                        <option value="15:30:00" <?php if($horaasignar=="15:30:00"){echo 'selected="selected"'; } ?>>03:30 PM</option>
                        <option value="16:00:00" <?php if($horaasignar=="16:00:00"){echo 'selected="selected"'; } ?>>04:00 PM</option>
                        <option value="16:30:00" <?php if($horaasignar=="16:30:00"){echo 'selected="selected"'; } ?>>04:30 PM</option>
                        <option value="17:00:00" <?php if($horaasignar=="17:00:00"){echo 'selected="selected"'; } ?>>05:00 PM</option>
                        <option value="17:30:00" <?php if($horaasignar=="17:30:00"){echo 'selected="selected"'; } ?>>05:30 PM</option>
                        <option value="18:00:00" <?php if($horaasignar=="18:00:00"){echo 'selected="selected"'; } ?>>06:00 PM</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td valign="top" colspan="2"><img src="../img/spacer.gif" width="10" height="30" /></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="81" colspan="2" valign="top" class="texto_pregunta_TuZona"><div align="center" style="margin-bottom:15px;">Comentarios:<br />
                      <textarea name="comentarios" cols="70" rows="4" class="pequeno" id="comentarios"  onfocus="document.getElementById('comentarios').style.borderColor='#666600'; document.getElementById('comentarios').style.backgroundColor='#fef9e6;';" onblur="document.getElementById('comentarios').style.borderColor='#003875'; document.getElementById('comentarios').style.backgroundColor='#ffffff;';"><?php echo $m_aplicativo_cjuridica_comentarios; ?></textarea>
              </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><span id="textcontainer1" align="left" >
        <input type="image"  border="1" name="button" value="guardar" style="color: #fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../img/guradar_grande2.png" />
        <img src="../img/spacer.gif" width="10" height="10" /> <a href="peticiones.php" target="_parent" title="Cancelar"><img  src="../img/cancelar_grande.png" name="button" width="30" height="30"  border="1" style="color:#fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" type="image" value="cancelar" title="Cancelar" /></a></span></td>
    </tr>
    <tr>
      <td colspan="3"><img src="../../../images/spacer.gif" height="10" width="10" border="0" /> </td>
    </tr>
  </table>
</form>
</body>
</html>
