

<script type="text/javascript">

/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Contents for menu 1
var menu1=new Array()
menu1[0]='<a href="<? echo"$ruta"; ?>mision-vision.php">Misión / Visión</a>'
menu1[1]='<a href="<? echo"$ruta"; ?>historica.php">Reseña Histórica</a>'
/*menu1[2]='<a href="ver_telesur.php">Ver TeleSUR</a>'*/
/*menu1[3]='<a href="http://www.telesurtv.net">Web TeleSUR</a>'*/
menu1[4]='<a href="<? echo"$ruta"; ?>extensiones.php">Extensiones</a>'
menu1[5]='<a href="<? echo"$ruta"; ?>abreviados.php">Números Abreviados</a>'
menu1[6]='<a href="<? echo"$ruta"; ?>programacion.php">Programación</a>'
menu1[7]='<a href="<? echo"$ruta"; ?>planificacion.php?ckl=1833184106">Plan de Trabajo 2010</a>'


//Contents for menu 2, and so on
var menu2=new Array()
menu2[0]='<a href="<? echo"$ruta"; ?>manuales.php">Manuales</a>'
menu2[1]='<a href="<? echo"$ruta"; ?>documentos.php">Documentos</a>'	
menu2[2]='<a href="<? echo"$ruta"; ?>parrilla.php">Parrilla</a>'	
menu2[3]='<a href="<? echo"$ruta"; ?>pautas.php">Pautas Post - Producción</a>'	
//menu2[4]='<a href="sala.php">Sala Situacional</a>'

	//Contents for menu 3, and so on
var menu3=new Array()
		  <? $tirasql="SELECT * FROM hcm ORDER BY id";
$resultados=mysql_query($tirasql, $link);
$row=mysql_fetch_array($resultados);
 $actualizacion=$row['actualizacion'];
 $contenido=$row['contenido'];
 $archivo=$row['archivo'];

?>
menu3[0]='<a href="<? echo"$ruta"; ?>poliza.php">Seguros Mercantil</a>'
menu3[1]='<a href="<? echo"$ruta"; ?>documentos/hcm/<? echo"$archivo"; ?>">Clinicas Afiliadas</a>'
menu3[2]='<a href="<? echo"$ruta"; ?>documentos/hcm/directorio_odontologico_07_08_11.pdf"> Clinicas Dentales</a>'
menu3[3]='<a href="<? echo"$ruta"; ?>documentos/hcm/Listado_de_Sucursales81.xls"> Oficinas Mercantil</a>'
menu3[4]='<a href="<? echo"$ruta"; ?>documentos/hcm/PLANILLA11.pdf"> Planilla</a>'
//Menu 4
var menu4=new Array()
menu4[0]='<a href="<? echo"$ruta"; ?>aplicativos/Consultoria_Juridica/">Asistencia Jurídica</a>'
/*menu4[1]='<a href="<? echo"$ruta"; ?>sit/login.html">Soporte Ingenieria (SIT)</a>'*/
/*menu4[2]='<a href="http://192.168.3.61:8080">Aplicaciones TeleSUR</a>'*/
menu4[2]='<a href="http://aplicativos.telesurtv.net">Aplicaciones TeleSUR</a>'
menu4[3]='<a href="<? echo"$ruta"; ?>aplicativos/protocolo/index.php">Aplicativo Protocolo</a>'
menu4[4]='<a href="http://rel.telesurtv.net">Reporte en Línea</a>'

//onClick="return default3()" onMouseover="dropdownmenu(this, event, menu5, "150px")" onMouseout="delayhidemenu()"
 	//Contents for menu 3, and so on
var menu5=new Array()
menu5[0]='<a href="<? echo"$ruta"; ?>poliza.php">Protocolo</a>'



var menuwidth='165px' //default menu width
var menubgcolor='#76AABF'  //menu bgcolor
var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?

/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth){
if (ie4||ns6)
dropmenuobj.style.left=dropmenuobj.style.top="-500px"
if (menuwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=menuwidth
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
obj.visibility=visible
else if (e.type=="click")
obj.visibility=hidden
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=0
if (whichedge=="rightedge"){
var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
}
else{
var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?
edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?
edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
}
}
return edgeoffset
}

function populatemenu(what){
if (ie4||ns6)
dropmenuobj.innerHTML=what.join("")
}


function dropdownmenu(obj, e, menucontents, menuwidth){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu()
dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv
populatemenu(menucontents)

if (ie4||ns6){
showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)

dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px"
}

return clickreturnvalue()
}

function clickreturnvalue(){
if (ie4||ns6) return false
else return true
}

function contains_ns6(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide(e){
if (ie4&&!dropmenuobj.contains(e.toElement))
delayhidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
delayhidemenu()
}

function hidemenu(e){
if (typeof dropmenuobj!="undefined"){
if (ie4||ns6)
dropmenuobj.style.visibility="hidden"
}
}

function delayhidemenu(){
if (ie4||ns6)
delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu(){
if (typeof delayhide!="undefined")
clearTimeout(delayhide)
}

if (hidemenu_onclick=="yes")
document.onclick=hidemenu

</script>
<style type="text/css">

#dropmenudiv{
position:absolute;
border:1px solid black;
border-bottom-width: 0;
font:normal 11px Arial;
line-height:18px;
z-index:100;
}

#dropmenudiv a{
width: 100%;
display: block;
text-indent: 3px;
border-bottom: 1px solid black;
padding: 1px 0;
text-decoration: none;
font-weight: bold;
color: #000000;
}

#dropmenudiv a:hover{ /*hover background color*/
background-color: #FFFFFF;
}

</style>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.buscar.palabra.value.length==0){
       alert("Debe ingresar la palabra que desea buscar")
       document.buscar.palabra.focus()
	  
	    return false;
	   } 
	   else
	   submitform();
	  
  return validar;
	  
    
	}

//-->
</script>
<script language="JavaScript">
function submitform()
{
  document.buscar.submit();
}
</script>

<link rel="stylesheet" type="text/css" href="<? echo"$ruta"; ?>css/flexdropdown.css" />

<script type="text/javascript" src="<? echo"$ruta"; ?>js/jquery-1.3.2.min.js"></script>

<script type="text/javascript" src="<? echo"$ruta"; ?>js/flexdropdown.js">

/***********************************************
* Flex Level Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
<tr>
    <td width="816" height="100" valign="top"><table width="798" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="139"><a href="<? echo"$ruta"; ?>index.php"><img src="<? echo"$ruta"; ?>images/logo.jpg" width="139" height="102" border="0" /></a></td>
        <td width="659" valign="top"><table width="659" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<? echo"$ruta"; ?>images/Div_arriba_Banner.jpg" width="659" height="12" /></td>
          </tr>
          <tr>
            <td><table width="659" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="521" height="90" align="center">
                
				<!--  Banner que ESTABA: banner_4_celarg.swf  -->
				  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="520" height="90" align="top">
                    <param name="movie" value="<? echo"$ruta"; ?>swf/Redes_Sociales.swf" />
                    <param name="quality" value="high" />
                    <embed src="<? echo"$ruta"; ?>swf/Redes_Sociales.swf" width="520" height="90" align="top" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                  </object>
                </td>
                <td width="10"><img src="<? echo"$ruta"; ?>images/div_hora.jpg" width="22" height="90" /></td>
                <td valign="top"><table width="106" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td background="<? echo"$ruta"; ?>images/imagen_ciudad.jpg" width="106" height="60" valign="bottom"><table width="101" height="12" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="37">&nbsp;</td>
                    <td width="68" valign="bottom" ><iframe name="hora" width="68" height="20" frameborder="0" scrolling="no" src="<? echo $ruta; ?>extras/hora.php" style="margin-right:2px;"></iframe></td>
                  </tr>
                </table></td>
                  </tr>
                  <tr>
                    <td background="<? echo"$ruta"; ?>images/imagen_hora.jpg" width="106" height="30" valign="top"><table width="106"  height="28" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26" class="Fecha" >Caracas<br />
                  <?
$mes_date= date ("m");
$ano=date("Y");
$dia=date("d");
$mes=mes_letras($mes_date);
echo"$mes - $ano";
?></td>
                <td class="Fecha_numero" valign="bottom"><? echo"$dia"; ?> </td>
              </tr>
            </table></td>
                  </tr>
                </table></td>
                <td width="22"><img src="<? echo"$ruta"; ?>images/Cierra_hora.jpg" width="10" height="90" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="7" valign="top"><img src="<? echo"$ruta"; ?>images/Index_r2_c1.gif"  height="7" width="798" /></td>
  </tr>
  <tr>
    <td valign="top"></td>
  </tr>
  <tr>
    <td height="3" valign="top"><img src="<? echo"$ruta"; ?>images/nueva_ima_sep.gif" width="798" height="31" /></td>
  </tr>
   <tr>
    <td height="5" valign="top"><img src="<? echo"$ruta"; ?>images/nueva_ima_sep_2.gif" width="798" height="5" /></td>
  </tr>
  <? 

		 function mes_letras($mes_num) {
		  $num = $mes_num;
		 if ($num=='01'){
		 $Letters='Ene';
		 }else
		 if ($num=='02'){
		 $Letters='Feb';
		 }else
		 if ($num=='03'){
		 $Letters='Mar';
		 }else
		 if ($num=='04'){
		 $Letters='Abr';
		 }else
		 if ($num=='05'){
		 $Letters='May';
		 }else
		 if ($num=='06'){
		 $Letters='Jun';
		 }else
		 if ($num=='07'){
		 $Letters='Jul';
		 }else
		 if ($num=='08'){
		 $Letters='Ago';
		 }else
		 if ($num=='09'){
		 $Letters='Sep';
		 }else
		 if ($num=='10'){
		 $Letters='Oct';
		 }else
		 if ($num=='11'){
		 $Letters='Nov';
		 }else
		 if ($num=='12'){
		 $Letters='Dic';
		 }
		 return $Letters;
		 }
				 ?>
<?php 
$GLOBALS['adl_count_params']=true;
@include_once $GLOBALS['HTTP_SERVER_VARS']['DOCUMENT_ROOT'].'/twatch_include/logger.php';
?>
