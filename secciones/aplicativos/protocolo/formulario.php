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
* Drop down menu w/ description- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/


var thetext1=new Array()
thetext1[0]=""
thetext1[1]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'>N° de personas que asistirán: </span><br /><input type='text' name='numero_asistentes' size='30' id='numero_asistentes' /></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Lugar: </span> <br /><input type='text' name='lugar' size='50'></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Hora:(Formato 24 horas) </span><br /><input type='text' name='hora' size='25'/></div><div style='margin-top:5px; margin-bottom:7px;'><span class='texto_pregunta_TuZona'> Tipo de refrigerio: </span><br /> <input type='checkbox' name='cafe' value='Café' /><span class='texto_pregunta_TuZona'> Café </span><br /> <input type='checkbox' name='agua' value='Agua' /><span class='texto_pregunta_TuZona'> Agua </span><br /> <input type='checkbox' name='te' value='Té' /><span class='texto_pregunta_TuZona'> Té </span><br /> <input type='checkbox' name='galletas' value='Galletas' /><span class='texto_pregunta_TuZona'> Galletas </span></div><div aling='center'><input type='submit' name='boton' value='Guardar' /></div>"


thetext1[2]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'>N° de regalos: </span><br /><input type='text' name='numero_regalos' size='20' id='title' style='margin-top:5px; margin-bottom:5px;' /></div><div class='texto_pregunta_TuZona' style='margin-top:5px; margin-bottom:15px;'>Tipo de Regalo: <select name='tipo_regalo'><option>Seleccione</option><option value='vip'>Corporativo VIP</option><option value='masivo'>Corporativo masivo</option></select></div><div style='margin-top:5px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>A quien vá dirigido cada regalo:</span><br /><textarea name='detalle_regalos' cols='64' rows='4' id='detalle_regalos'></textarea></div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"
thetext1[3]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'> Hora: (Formato 24 horas)</span><br /><input type='text' name='hora' size='20' id='title' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Nombre del Invitado:</span><br /><input name='nombre_invitado' type='text' id='nombre_invitado' size='70' /> </div><div style='margin-top:5px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Motivo de la visita - o programa al que asistirá:</span><br /><textarea name='motivo_visita' cols='64' rows='4' id='motivo_visita'></textarea></div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"
thetext1[4]="<div style='margin-top:5px; margin-bottom:5px;'><span class='texto_pregunta_TuZona'> Hora:</span><br /><input type='text' name='hora' size='20' id='title' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Lugar:</span><br /><input name='lugar' type='text' id='lugar' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Nombre del Invitado:</span><br /><input name='nombre_invitado' type='text' id='nombre_invitado' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>Línea Aérea:</span><br /><input name='linea_aerea' type='text' id='linea_aerea' size='70' /> </div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>N° de vuelo:</span><br /><input name='numero_vuelo' type='text' id='numero_vuelo' size='50' /></div><div style='margin-top:10px; margin-bottom:15px;'><span class='texto_pregunta_TuZona'>País de procedencia:</span><br /><select name='pais_procedencia'><option value='' selected='selected'>Seleccione</option><option>Afganistán</option><option>Albania</option><option>Alemania</option><option>Andorra</option><option>Angola</option><option>Anguilla</option><option>Antártida</option><option>Antigua y Barbuda</option><option>Antillas Holandesas</option><option>Arabia Saudí</option><option>Argelia</option><option>Argentina</option><option>Armenia</option><option>Aruba</option><option>Australia</option><option>Austria</option><option>Azerbaiyán</option><option>Bahamas</option><option>Bahrein</option><option>Bangladesh</option><option>Barbados</option><option>Bélgica</option><option>Belice</option><option>Benin</option><option>Bermudas</option><option>Bielorrusia</option><option>Birmania</option><option>Bolivia</option><option>Bosnia y Herzegovina</option><option>Botswana</option><option>Brasil</option><option>Brunei</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option><option>Bután</option><option>Cabo Verde</option><option>Camboya</option><option>Camerún</option><option>Canadá</option><option>Chad</option><option>Chile</option><option>China</option><option>Chipre</option><option>Ciudad del Vaticano (Santa Sede)</option><option>Colombia</option><option>Comores</option><option>Congo</option><option>Congo, República Democrática del</option><option>Corea</option><option>Corea del Norte</option><option>Costa de Marfíl</option><option>Costa Rica</option><option>Croacia (Hrvatska)</option><option >Cuba</option><option>Dinamarca</option><option>Djibouti</option><option>Dominica</option><option>Ecuador</option><option>Egipto</option><option>El Salvador</option><option>Emiratos Árabes Unidos</option><option>Eritrea</option><option>Eslovenia</option><option>España</option><option>Estados Unidos</option><option>Estonia</option><option>Etiopía</option><option>Fiji</option><option>Filipinas</option><option>Finlandia</option><option>Francia</option><option>Gabón</option><option>Gambia</option><option>Georgia</option><option>Ghana</option><option>Gibraltar</option><option>Granada</option><option>Grecia</option><option>Groenlandia</option><option>Guadalupe</option><option>Guam</option><option>Guatemala</option><option>Guayana</option><option>Guayana Francesa</option><option>Guinea</option><option>Guinea Ecuatorial</option><option>Guinea-Bissau</option><option>Haití</option><option>Honduras</option><option>Hungría</option><option>India</option><option>Indonesia</option><option>Irak</option><option>Irán</option><option>Irlanda</option><option>Isla Bouvet</option><option>Isla de Christmas</option><option>Islandia</option><option>Islas Caimán</option><option>Islas Cook</option><option>Islas de Cocos o Keeling</option><option>Islas Faroe</option><option>Islas Heard y McDonald</option><option>Islas Malvinas</option><option>Islas Marianas del Norte</option><option>Islas Marshall</option><option>Islas menores de Estados Unidos</option><option>Islas Palau</option><option>Islas Salomón</option><option>Islas Svalbard y Jan Mayen</option><option>Islas Tokelau</option><option>Islas Turks y Caicos</option><option>Islas Vírgenes (EE.UU.)</option><option>Islas Vírgenes (Reino Unido)</option><option>Islas Wallis y Futuna</option><option>Israel</option><option>Italia</option><option>Jamaica</option><option>Japón</option><option>Jordania</option><option>Kazajistán</option><option>Kenia</option><option>Kirguizistán</option><option>Kiribati</option><option>Kuwait</option><option>Laos</option><option>Lesotho</option><option>Letonia</option><option>Líbano</option><option>Liberia</option><option>Libia</option><option>Liechtenstein</option><option>Lituania</option><option>Luxemburgo</option><option>Macedonia, Ex-República Yugoslava de</option><option>Madagascar</option><option>Malasia</option><option>Malawi</option><option>Maldivas</option><option>Malí</option><option>Malta</option><option>Marruecos</option><option>Martinica</option><option>Mauricio</option><option>Mauritania</option><option>Mayotte</option><option>México</option><option>Micronesia</option><option>Moldavia</option><option>Mónaco</option><option>Mongolia</option><option>Montserrat</option><option>Mozambique</option><option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Nicaragua</option><option>Níger</option><option>Nigeria</option><option>Niue</option><option>Norfolk</option><option>Noruega</option><option>Nueva Caledonia</option><option>Nueva Zelanda</option><option>Omán</option><option>Países Bajos</option><option>Panamá</option><option>Papúa Nueva Guinea</option><option>Paquistán</option><option>Paraguay</option><option>Perú</option><option>Pitcairn</option><option>Polinesia Francesa</option><option>Polonia</option><option>Portugal</option><option>Puerto Rico</option><option>Qatar</option><option>Reino Unido</option><option>República Centroafricana</option><option>República Checa</option><option>República de Sudáfrica</option><option>República Dominicana</option><option>República Eslovaca</option><option>Reunión</option><option>Ruanda</option><option>Rumania</option><option>Rusia</option><option>Sahara Occidental</option><option>Saint Kitts y Nevis</option><option>Samoa</option><option>Samoa Americana</option><option>San Marino</option><option>San Vicente y Granadinas</option><option>Santa Helena</option><option>Santa Lucía</option><option>Santo Tomé y Príncipe</option><option>Senegal</option><option>Seychelles</option><option>Sierra Leona</option><option>Singapur</option><option>Siria</option><option>Somalia</option><option>Sri Lanka</option><option>St. Pierre y Miquelon</option><option>Suazilandia</option><option>Sudán</option><option>Suecia</option><option>Suiza</option><option>Surinam</option><option>Tailandia</option><option>Taiwán</option><option>Tanzania</option><option>Tayikistán</option><option>Territorios franceses del Sur</option><option>Timor Oriental</option><option>Togo</option><option>Tonga</option><option>Trinidad y Tobago</option><option>Túnez</option><option>Turkmenistán</option><option>Turquía</option><option>Tuvalu</option><option>Ucrania</option><option>Uganda</option><option>Uruguay</option><option>Uzbekistán</option><option>Vanuatu</option><option>Venezuela</option><option>Vietnam</option><option>Yemen</option><option>Yugoslavia</option><option>Zambia</option><option>Zimbabue</option></select> </div><div style='margin-top:5px; margin-bottom:15px;' align='center'><input type='submit' value='Guardar' class='pequeno' /></div>"

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
       alert("Debe especificar la dirección a la cual pertenece")
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
	<div class="ScrollX" style="margin-right:80px;">
	<table width="794" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11"><img src="../images/spacer.gif" width="11" height="11" /></td>
        <td width="781" valign="top">
		
		
		
		<table width="781" cellspacing="0" cellpadding="0">
		
		 <tr>
	
	<td width="686"><div class="texto_Gris" align="right" style="margin-right:30px; margin-bottom:5px;"><a href="estadisticas.php"></a>Usuario:<span class="Numeros_rojo"><? echo $nombre_completo; ?></span> / <a href="cerrar.php" style="text-decoration:none;"> Cerrar sessión</a></div></td>
  </tr>
          <tr>
            <td width="779" height="23" background="../images/barra_larga.gif" class="Titulos">Protocolo</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			 <form id="form1" name="form1" method="post" action="guardar.php" onsubmit="return validando();">
			<table width="779" border="0" cellpadding="0" cellspacing="0" background="bkg022.gif">
			<tr><td colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" /></td></tr>
			<tr><td colspan="2"><span class="texto_pregunta_TuZona">Fecha solicitud:                </span>
                <input name="fecha_solicitud" type="text" value='<? echo date('d-m-Y', time()) ?>' size="20" disabled="disabled" /></td>
				
				<td><span class="texto_pregunta_TuZona">En qué fecha necesita nuestro servicio?</span> <input name="fecha_servicio" type="text" size="20" /></td>
				</tr>
				<tr><td colspan="2"><img src="../images/spacer.gif" height="10" width="10" border="0" /></td></tr>
				<tr><td class="texto_pregunta_TuZona" colspan="2">Dirección a la que pertenece:
				  <select name="departamento" style="max-width:300px;">
				  <option selected="selected" value="Seleccione">Seleccione</option>
				 <!--
				  <?
				  /*
$sql_datos="SELECT nombre_organizacion FROM organizacion ORDER BY id_organizacion ASC";
$query=mysql_query($sql_datos,$conecta);
while ($row=mysql_fetch_array($query)){
$nombre_organizacion=$row['nombre_organizacion'];
*/
?>
				  <option value="<? echo"$nombre_organizacion"; ?>"><? echo"$nombre_organizacion"; ?></option>
                <? // } ?>
				
				-->
				
				
				<option>PRESIDENCIA</option>
<option>VICEPRESIDENCIA</option>
<option>AUDITORIA INTERNA</option>
<option>AUD- UNIDAD DE CONTROL POSTERIOR Y POTESTAD INVESTIGATIVA</option>
<option>AUD-UNIDAD DE DETERMINACION DE RESPONSABILIDAD</option>
<option>CONSULTORIA JURIDICA</option>
<option>PROYECTO ESCUELA TELESUR</option>
<option>DIRECCION GENERAL DE ASUNTOS INTERNACIONALES</option>
<option>DIRECCION GENERAL ATENCION AL CIUDADANO</option>
<option>DIRECCION GENERAL DE TECNOLOGIA</option>
<option>TECNOLOGIA-DIRECCION DE SISTEMAS MULTIMEDIA</option>
<option>TECNOLOGIA-MULTIMEDIA-UNIDAD DE POST PRODUCCION</option>
<option>TECNOLOGIA-MULTIMEDIA-UNIDAD DE SERVICIOS A CORRESPONSALIA</option>
<option>TECNOLOGIA-MULTIMEDIA-UNIDAD DE GESTION MULTIMEDIA</option>
<option>TECNOLOGIA-MULTIMEDIA-UNIDAD DE AUTOMATIZACION</option>
<option>TECNOLOGIA-DIRECCION DE SISTEMAS INFORMATIVAS</option>
<option>TECNOLOGIA-INFORMATIVOS-UNIDAD DE SOPORTE A USUARIO</option>
<option>TECNOLOGIA-INFORMATIVOS-UNIDAD DE PLATAFORMA Y COMUNICACIONES</option>
<option>TECNOLOGIA-INFORMATIVOS-UNIDAD DE APLICACIONES Y DESARROLLO</option>
<option>TECNOLOGIA-INFORMATIVOS-UNIDAD DE SERVICIOS WEB</option>
<option>TECNOLOGIA-DIRECCION DE PLANTA</option>
<option>TECNOLOGIA-PLANTA-UNIDAD DE INSTRUMENTACION</option>
<option>TECNOLOGIA-PLANTA-UNIDAD DE CONTROL DE CALIDAD</option>
<option>TECNOLOGIA-PLANTA-UNIDAD DE MASTER</option>
<option>TECNOLOGIA-PLANTA-UNIDAD DE CONTROL CENTRAL</option>
<option>TECNOLOGIA-DIRECCION DE TRANSMISION</option>
<option>TECNOLOGIA-TRANSMISION-UNIDAD DE TRANSMISIONES</option>
<option>TECNOLOGIA-DIRECCION DE GESTION DE CALIDAD</option>
<option>TECNOLOGIA-CALIDAD-UNIDAD DE GESTION DE CALIDAD</option>
<option>TECNOLOGIA-CALIDAD-UNIDAD DE PROYECTOS</option>
<option>DIRECCION GENERAL EJECUTIVA</option>
<option>EJECUTIVA-UNIDAD DE SEGURIDAD</option>
<option>EJECUTIVA-DIRECCION DE FINANZAS</option>
<option>EJECUTIVA-FINANZAS-UNIDAD DE TESORERIA</option>
<option>EJECUTIVA-FINANZAS-UNIDAD DE PROVEEDURIA, ALMACEN Y BIENES</option>
<option>EJECUTIVA-FINANZAS-UNIDAD DE APOYO LOGISTICO</option>
<option>EJECUTIVA-DIRECCION DE PLANIFICACION Y PRESUPUESTO</option>
<option>EJECUTIVA-PLANIF.Y PPTO-UNIDAD DE PLANIFICACION Y CONTROL DE GESTION</option>
<option>EJECUTIVA-PLANIF.YPPTO-UNIDAD DE PRESUPUESTO</option>
<option>EJECUTIVA-PLANIF.YPPTO-UNIDAD DE CONTABILIDAD</option>
<option>EJECUTIVA-DIRECCION DE SERVICIOS GENERALES</option>
<option>EJECUTIVA-SERV. GENERALES-UNIDAD DE TRANSPORTE</option>
<option>EJECUTIVA-SERV. GENERALES-UNIDAD DE MANTENIMIENTO</option>
<option>EJECUTIVA-SERV. GENERALES-UNIDAD DE ELECTROMECANICA</option>
<option>EJECUTIVA-SERV. GENERALES-UNIDAD DE CORRESPONDENCIA</option>
<option>DIRECCION GENERAL DE INFORMACION</option>
<option>INFORMACION-DIRECCION DE PRENSA</option>
<option>INFORMACION-PRENSA-UNIDAD DE REDACCION</option>
<option>INFORMACION-PRENSA-UNIDAD DE REDACCION EN OTROS IDIOMAS</option>
<option>INFORMACION-PRENSA-UNIDAD DE ASIGNACIONES</option>
<option>INFORMACION-PRENSA-UNIDAD DE PAGINA WEB</option>
<option>INFORMACION-DIRECCION DE PROGRAMAS INFORMATIVOS</option>
<option>INFORMACION-PROG. INFORM-UNIDAD DE CULTURA</option>
<option>INFORMACION-PROG. INFORM-UNIDAD DE PRODUCCION EJECUTIVO</option>
<option>INFORMACION-PROG. INFORM-UNIDAD DE REDACCION DE ECONOMIA</option>
<option>INFORMACION-DIRECCION DE REALIZACION</option>
<option>INFORMACION-REALIZACION-COORDINACION DE REALIZACION</option>
<option>DIRECCION GENERAL DE RECURSOS HUMANOS</option>
<option>RRHH-UNIDAD DE CAPTACION Y DESARROLLO</option>
<option>RRHH-UNIDAD DE ADMINISTRACION DE PERSONAL</option>
<option>RRHH-UNIDAD DE BIENESTAR SOCIAL Y SALUD LABORAL</option>
<option>RRHH-UNIDAD DE ASUNTOS LABORALES</option>
<option>DIRECCION GENERAL DE PRODUCCION Y PROGRAMACION</option>
<option>INFORMACION-PRENSA-UNIDAD DE DEPORTES</option>
<option>PROD Y PROG-DIRECCION DE PROGRAMACION</option>
<option>PROD Y PROG-PROGRAMACION-UNIDAD DE PROGRAMACION</option>
<option>PROD Y PROG-PROGRAMACION-UNIDAD DE ADQUISICIONES Y PRODUCCION</option>
<option>PROD Y PROG-UNIDAD DE INVESTIGACION SOCIAL</option>
<option>PROD Y PROG-UNIDAD DE VIDEOTECA</option>
<option>DIRECCION GENERAL DE DISTRIBUCION Y COMERCIALIZACION</option>
<option>DIRECCION GENERAL DE SERVICIOS A LA PRODUCCION</option>
<option>OPERACIONES</option>
<option>UNIDAD DE POST-PRODUCCION</option>
<option>UNIDAD DE ARCHIVO</option>
<option>UNIDAD DE MAQUILLAJE Y VESTUARIO</option>
<option>DIRECCION DE COMUNICACIONES INTEGRADAS</option>
<option>DISEÑO</option>
<option>CREATIVA</option>
<option>COMUNICACIONES CORPORATIVAS</option>
<option>UNIDAD DE DISEÑO</option>
<option>UNIDAD DE PROTOCOLO Y EVENTO</option>
<option>DIRECCION DE IMAGEN Y PROMOCIONES</option>
<option>DIR. COMERC. MERCADEO Y DIST.</option>
                  </select>
				  
				  </td>
				<td width="429" class="texto_pregunta_TuZona">Telefono para ser ubicado:<br /> 
				  <input name="telefono" type="text" class="pequeno" size="25" /></td>
				</tr>
				<tr><td colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" /></td>
				<tr><td colspan="3" class="texto_pregunta_TuZona">Tipo de solicitud:
				    <select name="tipo" onchange= "displaydesc(document.form1.tipo, thetext1, 'textcontainer1')" >
					<option selected="selected">Seleccione</option>
                      <option>Reunión</option>
					  <option>Regalo corporativo</option>
					  <option>Invitado Especial</option>
					  <option>Salida del Canal para recibir invitados</option>
                    </select></td>
				<tr><td colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" /></td>
				</tr>
				<tr><td colspan="3"><span id="textcontainer1" align="left" ></span></td>
				<tr><td colspan="3"><img src="../images/spacer.gif" height="10" width="10" border="0" />
				
					</td>							</table>                                               </form>                          </td>
          </tr>
        </table></td>
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