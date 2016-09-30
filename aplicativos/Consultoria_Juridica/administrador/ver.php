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

if($m_aplicativo_cjuridica_fechaasignada!='0000-00-00 00:00:00'){
$fechaasignada=date('d-m-Y', strtotime($m_aplicativo_cjuridica_fechaasignada));
$horaasignar=date('H:i', strtotime($m_aplicativo_cjuridica_fechaasignada));
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
$solohora=date('h:i:s', strtotime($m_aplicativo_cjuridica_fechasolicitud));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Aplicativo - Asesoría Jurídica</title>
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../../../admcms/extras/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" title="default" media="screen" />

</head>
 
<script type="text/javascript">
<!--
function validando(){
    //valido el nombre
	validar=true;
    if (document.form1.cargo.value.length==0){
       alert("Debe especificar el nombre de su cargo")
       document.form1.cargo.focus()
	  
	    return false;
	   }
	      
       if (document.form1.departamento.value=='Seleccione'){
       alert("Debe especificar el departamento a la cual pertenece")
       document.form1.departamento.focus()
	  
	    return false;
	   }
	   
	    if (document.form1.turno.value.length==0){
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
 
 function recargarframe() {
DYNIFS.resize('framess');
 }
//-->
</script>
<script type="text/javascript" src="dynifs.js"></script>
<body >
<table width="801" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9" align="center">
 <? include('../../cabecera.php'); ?>
  <tr>
    <td ><img src="../../../images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="799" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11"><img src="../../../images/spacer.gif" width="11" height="11" /></td>
        <td width="786" valign="top">
		
		
		
		<table width="781" cellspacing="0" cellpadding="0">
		
		 <tr>
	
	<td width="686"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $usuarioadm; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sesión</a></div></td>
  </tr>
          <tr>
            <td width="779" height="23" background="../../../images/barra_larga.gif" class="Titulos"><a href="index2.php" style="text-decoration:none; color:#FFFFFF" class="Titulos">Asistencia Jur&iacute;dica</a></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top"><iframe frameborder="0" scrolling="auto" height="900" width="780" src="verframe.php?clx=<?php echo $variableid; ?>" name="framess" id="framess" onload="DYNIFS.resize('framess');"></iframe>
			                           </td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="799" height="20" ><img src="../../../images/spacer.gif" width="10" height="20" /></td>
  </tr>
   <? include('../../pie_pagina.php'); ?>
</table>

<script type="text/javascript">
function onChange_input(name){
 var a=name;
  document.myform.a.style.borderColor="#000000";

}
			
</script>
</body>
</html>
