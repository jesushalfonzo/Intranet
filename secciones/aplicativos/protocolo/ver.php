<?
ini_set('session.gc_maxlifetime',7200);
ini_set("session.cache_expire",120);
session_start();
$variable=$_SESSION["protomardito"];
if ($variable != 'v3rgacion'){
echo "<script language='JavaScript'>parent.location.href='index.php' ;</script>";
}
else{  
  $usuario=$_SESSION['usumardito'];
  $nombre_completo=$_SESSION['nombre_completomar'];
}

?>
<? include('../../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";

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

<script type="text/javascript">

/***********************************************
* Drop down menu w/ description- � Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/


var thetext1=new Array()
thetext1[0]=""
thetext1[1]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'>N� de personas que asistir�n: </span><br /><input type='text' name='numero_asistentes' size='30' id='numero_asistentes' /></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Lugar: </span> <br /><input type='text' name='lugar' size='50'></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Hora:(Formato 24 horas) </span><br /><input type='text' name='hora' size='25'/></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Tipo de refrigerio: </span><br /> <input type='checkbox' name='cafe' value='Caf�' /><span class='texto_pregunta_TuZona'> Caf� </span><br /> <input type='checkbox' name='agua' value='Agua' /><span class='texto_pregunta_TuZona'> Agua </span><br /> <input type='checkbox' name='te' value='T�' /><span class='texto_pregunta_TuZona'> T� </span><br /> <input type='checkbox' name='galletas' value='Galletas' /><span class='texto_pregunta_TuZona'> Galletas </span></div><div aling='center'><input type='submit' name='boton' value='Guardar' /></div>"


thetext1[2]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'>N� de regalos: </span><br /><input type='text' name='numero_regalos' size='20' id='title' style='margin-top:5px; margin-bottom:5px;' /></div><div class='texto_pregunta_TuZona' style='margin-top:5px; margin-bottom:15px;'>Tipo de Regalo: <select name='tipo_regalo'><option>Seleccione</option><option value='vip'>Corporativo VIP</option><option value='masivo'>Corporativo masivo</option></select></div><div style='margin-top:5px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>A quien v� dirigido cada regalo:</span><br /><textarea name='detalle_regalos' cols='64' rows='4' id='detalle_regalos'></textarea></div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"
thetext1[3]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'> Hora: (Formato 24 horas)</span><br /><input type='text' name='hora' size='20' id='title' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Nombre del Invitado:</span><br /><input name='nombre_invitado' type='text' id='nombre_invitado' size='70' /> </div><div style='margin-top:5px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Motivo de la visita - o programa al que asistir�:</span><br /><textarea name='motivo_visita' cols='64' rows='4' id='motivo_visita'></textarea></div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"
thetext1[4]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'> Hora:</span><br /><input type='text' name='hora' size='20' id='title' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Lugar:</span><br /><input name='lugar' type='text' id='lugar' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Nombre del Invitado:</span><br /><input name='nombre_invitado' type='text' id='nombre_invitado' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>L�nea A�rea:</span><br /><input name='linea_aerea' type='text' id='linea_aerea' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>N� de vuelo:</span><br /><input name='numero_vuelo' type='text' id='numero_vuelo' size='50' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Pa�s de procedencia:</span><br /><select name='pais_procedencia'><option value='' selected='selected'>Seleccione</option><option>Afganist�n</option><option>Albania</option><option>Alemania</option><option>Andorra</option><option>Angola</option><option>Anguilla</option><option>Ant�rtida</option><option>Antigua y Barbuda</option><option>Antillas Holandesas</option><option>Arabia Saud�</option><option>Argelia</option><option>Argentina</option><option>Armenia</option><option>Aruba</option><option>Australia</option><option>Austria</option><option>Azerbaiy�n</option><option>Bahamas</option><option>Bahrein</option><option>Bangladesh</option><option>Barbados</option><option>B�lgica</option><option>Belice</option><option>Benin</option><option>Bermudas</option><option>Bielorrusia</option><option>Birmania</option><option>Bolivia</option><option>Bosnia y Herzegovina</option><option>Botswana</option><option>Brasil</option><option>Brunei</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option><option>But�n</option><option>Cabo Verde</option><option>Camboya</option><option>Camer�n</option><option>Canad�</option><option>Chad</option><option>Chile</option><option>China</option><option>Chipre</option><option>Ciudad del Vaticano (Santa Sede)</option><option>Colombia</option><option>Comores</option><option>Congo</option><option>Congo, Rep�blica Democr�tica del</option><option>Corea</option><option>Corea del Norte</option><option>Costa de Marf�l</option><option>Costa Rica</option><option>Croacia (Hrvatska)</option><option >Cuba</option><option>Dinamarca</option><option>Djibouti</option><option>Dominica</option><option>Ecuador</option><option>Egipto</option><option>El Salvador</option><option>Emiratos �rabes Unidos</option><option>Eritrea</option><option>Eslovenia</option><option>Espa�a</option><option>Estados Unidos</option><option>Estonia</option><option>Etiop�a</option><option>Fiji</option><option>Filipinas</option><option>Finlandia</option><option>Francia</option><option>Gab�n</option><option>Gambia</option><option>Georgia</option><option>Ghana</option><option>Gibraltar</option><option>Granada</option><option>Grecia</option><option>Groenlandia</option><option>Guadalupe</option><option>Guam</option><option>Guatemala</option><option>Guayana</option><option>Guayana Francesa</option><option>Guinea</option><option>Guinea Ecuatorial</option><option>Guinea-Bissau</option><option>Hait�</option><option>Honduras</option><option>Hungr�a</option><option>India</option><option>Indonesia</option><option>Irak</option><option>Ir�n</option><option>Irlanda</option><option>Isla Bouvet</option><option>Isla de Christmas</option><option>Islandia</option><option>Islas Caim�n</option><option>Islas Cook</option><option>Islas de Cocos o Keeling</option><option>Islas Faroe</option><option>Islas Heard y McDonald</option><option>Islas Malvinas</option><option>Islas Marianas del Norte</option><option>Islas Marshall</option><option>Islas menores de Estados Unidos</option><option>Islas Palau</option><option>Islas Salom�n</option><option>Islas Svalbard y Jan Mayen</option><option>Islas Tokelau</option><option>Islas Turks y Caicos</option><option>Islas V�rgenes (EE.UU.)</option><option>Islas V�rgenes (Reino Unido)</option><option>Islas Wallis y Futuna</option><option>Israel</option><option>Italia</option><option>Jamaica</option><option>Jap�n</option><option>Jordania</option><option>Kazajist�n</option><option>Kenia</option><option>Kirguizist�n</option><option>Kiribati</option><option>Kuwait</option><option>Laos</option><option>Lesotho</option><option>Letonia</option><option>L�bano</option><option>Liberia</option><option>Libia</option><option>Liechtenstein</option><option>Lituania</option><option>Luxemburgo</option><option>Macedonia, Ex-Rep�blica Yugoslava de</option><option>Madagascar</option><option>Malasia</option><option>Malawi</option><option>Maldivas</option><option>Mal�</option><option>Malta</option><option>Marruecos</option><option>Martinica</option><option>Mauricio</option><option>Mauritania</option><option>Mayotte</option><option>M�xico</option><option>Micronesia</option><option>Moldavia</option><option>M�naco</option><option>Mongolia</option><option>Montserrat</option><option>Mozambique</option><option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Nicaragua</option><option>N�ger</option><option>Nigeria</option><option>Niue</option><option>Norfolk</option><option>Noruega</option><option>Nueva Caledonia</option><option>Nueva Zelanda</option><option>Om�n</option><option>Pa�ses Bajos</option><option>Panam�</option><option>Pap�a Nueva Guinea</option><option>Paquist�n</option><option>Paraguay</option><option>Per�</option><option>Pitcairn</option><option>Polinesia Francesa</option><option>Polonia</option><option>Portugal</option><option>Puerto Rico</option><option>Qatar</option><option>Reino Unido</option><option>Rep�blica Centroafricana</option><option>Rep�blica Checa</option><option>Rep�blica de Sud�frica</option><option>Rep�blica Dominicana</option><option>Rep�blica Eslovaca</option><option>Reuni�n</option><option>Ruanda</option><option>Rumania</option><option>Rusia</option><option>Sahara Occidental</option><option>Saint Kitts y Nevis</option><option>Samoa</option><option>Samoa Americana</option><option>San Marino</option><option>San Vicente y Granadinas</option><option>Santa Helena</option><option>Santa Luc�a</option><option>Santo Tom� y Pr�ncipe</option><option>Senegal</option><option>Seychelles</option><option>Sierra Leona</option><option>Singapur</option><option>Siria</option><option>Somalia</option><option>Sri Lanka</option><option>St. Pierre y Miquelon</option><option>Suazilandia</option><option>Sud�n</option><option>Suecia</option><option>Suiza</option><option>Surinam</option><option>Tailandia</option><option>Taiw�n</option><option>Tanzania</option><option>Tayikist�n</option><option>Territorios franceses del Sur</option><option>Timor Oriental</option><option>Togo</option><option>Tonga</option><option>Trinidad y Tobago</option><option>T�nez</option><option>Turkmenist�n</option><option>Turqu�a</option><option>Tuvalu</option><option>Ucrania</option><option>Uganda</option><option>Uruguay</option><option>Uzbekist�n</option><option>Vanuatu</option><option>Venezuela</option><option>Vietnam</option><option>Yemen</option><option>Yugoslavia</option><option>Zambia</option><option>Zimbabue</option></select> </div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"

function displaydesc(which, descriptionarray, container){
if (document.getElementById)
document.getElementById(container).innerHTML=descriptionarray[which.selectedIndex];


}

function jumptolink(what){
var selectedopt=what.options[what.selectedIndex]
if (document.getElementById && selectedopt.getAttribute("target")=="newwin")
window.open(selectedopt.value)
else
window.location=selectedopt.value
}

//2) Call function displaydesc() for each drop down menu you have on the page
//   This function displays the initial description for the selected menu item
//   displaydesc(name of select menu, name of corresponding text array, ID of SPAN container tag):
//   Important: Remove the calls not in use (ie: 2nd line below if there's only 1 menu on your page)

//displaydesc(document.myform.tipo_nota, thetext1, 'textcontainer1')



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
       alert("Debe especificar la direcci�n a la cual pertenece")
       document.form1.departamento.focus()
	  
	    return false;
	   }
  return validar;
	  
    
	}


//-->
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
    <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Aplicativo Protocolo </div></td>
  </tr>
   
   <tr>
    <td width="1020" height="460" valign="top" >
	
	<?php $id_peticion=$_GET["clx"];
$SSQL="SELECT * FROM m_aplicativos_protocolo WHERE  m_aplicativos_protocolo_id='$id_peticion'"; 
   $SSQUERy=mysql_query($SSQL, $link);
   $row=mysql_fetch_array($SSQUERy);
   $m_aplicativos_protocolo_fechasolicitud=strtotime($row['m_aplicativos_protocolo_fechasolicitud']);
   $m_aplicativos_protocolo_fechaservicio=$row['m_aplicativos_protocolo_fechaservicio'];
   $m_aplicativos_protocolo_dirrecion=$row['m_aplicativos_protocolo_dirrecion'];
   $m_aplicativos_protocolo_telefono=$row['m_aplicativos_protocolo_telefono'];
   $m_aplicativos_protocolo_tiposolicitud=$row['m_aplicativos_protocolo_tiposolicitud'];
   $m_aplicativos_protocolo_personasasistentes=$row['m_aplicativos_protocolo_personasasistentes'];
   $m_aplicativos_protocolo_lugar=$row['m_aplicativos_protocolo_lugar'];
   $m_aplicativos_protocolo_hora=$row['m_aplicativos_protocolo_hora'];
   $m_aplicativos_protocolo_numregalos=$row['m_aplicativos_protocolo_numregalos'];
   $m_aplicativos_protocolo_tiporegalo=$row['m_aplicativos_protocolo_tiporegalo'];
   $m_aplicativos_protocolo_aquien=$row['m_aplicativos_protocolo_aquien'];
   $m_aplicativos_protocolo_motivovisita=$row['m_aplicativos_protocolo_motivovisita'];
   $m_aplicativos_protocolo_lineaaerea=$row['m_aplicativos_protocolo_lineaaerea'];
   $m_aplicativos_protocolo_numerovuelo=$row['m_aplicativos_protocolo_numerovuelo'];
   $m_aplicativos_protocolo_paisprocedencia=$row['m_aplicativos_protocolo_paisprocedencia'];
   $m_aplicativos_protocolo_estatus=$row['m_aplicativos_protocolo_estatus'];
   $m_aplicativos_protocolo_idiusupeticion=$row['m_aplicativos_protocolo_idiusupeticion'];
   $m_aplicativos_protocolo_nombreinvitado=$row['m_aplicativos_protocolo_nombreinvitado'];
   $m_aplicativos_protocolo_comentario=$row['m_aplicativos_protocolo_comentario'];
   $m_aplicativos_protocolo_tiporefrigerio=$row['m_aplicativos_protocolo_tiporefrigerio'];
   $tipo_refrigerio = str_replace(' ', ",", $m_aplicativos_protocolo_tiporefrigerio);
   
   $fecha=date('d/m/Y h:m:s');?>
	<div class="ScrollX" style="margin-right:80px;">
	<form name="nueva_solicitud" action="listado.php" id="actualizar" method="post" enctype="multipart/form-data">
<table width="700" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#E7E8E9">
<tr>
    <td colspan="7" ><div class="texto_Gris" align="right" style="margin-right:5px; margin-bottom:5px;">Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sessi�n</a></div></td>
  </tr>
<tr><td colspan="3"><img src="administrador/imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
 <tr><td>
 <table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
 <tr >
   <td width="234" class="texto_pregunta_TuZona rayitas">Tipo:</td>
   <td width="467" class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"><? echo"$m_aplicativos_protocolo_tiposolicitud"; ?></div></td></tr>
 <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
 <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Fecha solicitud:</span></td>
   <td class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo" $fecha"; ?></div></td></tr>
   <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Fecha en que se necesita el servicio:</span>     <span class="titulo_entrevista">
     </div>
   </span></td>
   <td class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo" $m_aplicativos_protocolo_fechaservicio"; ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
<tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Direcci�n </span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_dirrecion ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Telefono:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_telefono ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
   <tr>
   <td  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Estado:</span></td>
   <td  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <img src="imagenes/<? if($m_aplicativos_protocolo_estatus=='A'){ echo'rojo.png';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'amarillo.png';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'verde.png';} ?>" width="11" height="11" border="0" title="<? if($m_aplicativos_protocolo_estatus=='A'){ echo'Solicitud en espera';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'Solicitud en proceso';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'Solicitud resuelta';} ?>" />
   <span class="etiquetas" style="margin-left:5px;"><? if($m_aplicativos_protocolo_estatus=='A'){ echo'Solicitud en espera';}  if($m_aplicativos_protocolo_estatus=='B'){ echo'Solicitud en proceso';}  if($m_aplicativos_protocolo_estatus=='C'){ echo'Solicitud resuelta';} ?></span>
   </div></td></tr>
 </table>
 </td></tr>
 
<tr><td colspan="3"><img src="administrador/imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>

<? if($m_aplicativos_protocolo_tiposolicitud=='Reuni�n'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="247"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de asitentes:</span></td>
   <td width="454"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_personasasistentes ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="247"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Lugar:</span></td>
   <td width="454"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lugar ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="247"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="454"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr>
   <td width="247"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Tipo refrigerio :</span></td>
   <td width="454"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_tiporefrigerio ?></div></td></tr>
    <tr><td colspan="2"><img src="administrador/imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Regalo corporativo'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de regalos:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_numregalos ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Tipo de Regalo:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_tiporegalo ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="118"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Regalos dirigidos a:</span></td>
   <td width="583"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_aquien ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Invitado Especial'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="278"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="423"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="278"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Nombre  Invitado:</span></td>
   <td width="423"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_nombreinvitado ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="278"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Motivo de la visita - o programa al que asistir�:</span></td>
   <td width="423"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_motivovisita ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } else { ?>

<? if($m_aplicativos_protocolo_tiposolicitud=='Salida del Canal para recibir invitados'){?>
<tr><td>
<table width="701" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
   <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Hora:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_hora ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr>
   <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Lugar:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lugar ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	 <tr> <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Nombre  Invitado:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_nombreinvitado ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">L�nea A�rea:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_lineaaerea ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">N� de vuelo:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_numerovuelo ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	<tr> <td width="239"  class="rayitas"><span class="titulo_entrevista" style="margin-left:5px;">Pa�s de procedencia:</span></td>
   <td width="462"  class="rayitas"><div class="texto" style="margin-left:10px; margin-right:10px;"> <? echo $m_aplicativos_protocolo_paisprocedencia ?></div></td></tr>
    <tr><td colspan="2"><img src="imagenes/spc.gif" width="10" height="5" border="0" /></td></tr>
	</table></td></tr>
	
   
<? } } } }?>
<tr>
  <td height="22" align="center" bgcolor="#000000" class="bold_12_blanco" colspan="3">Respuesta del equipo Soporte T&eacute;cnico </td>
</tr>
<tr><td colspan="3"><img src="administrador/imagenes/spc.gif" width="10" height="10" border="0" />
<input type="hidden" name="id_peticion" value="<? echo"$id_peticion"; ?>" />

</td></tr>




 <tr><td><img src="administrador/imagenes/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  </tr>
   <tr><td colspan="3"><div align="center">
    
	

	<input name="Submit" type="submit" value="Volver" onclick="volver(); return false" />
   </div></td></tr>
  <tr><td colspan="3"><img src="administrador/imagenes/spc.gif" width="10" height="10" border="0" /></td>
  </tr>
  
</table>
</form>
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