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
$m_aplicativo_cjuridica_email=$rowx['m_aplicativo_cjuridica_email'];

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
var numero = 0; //Esta es una variable de control para mantener nombres
            //diferentes de cada campo creado dinamicamente.
evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
   return (!evt) ? event : evt;
}

//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
addCampo = function () { 
//Creamos un nuevo div para que contenga el nuevo campo
   nDiv = document.createElement('div');
//con esto se establece la clase de la div
   nDiv.className = 'archivo';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nDiv.id = 'file' + (++numero);
   
   nDiv.innerHTML = '<br /><span class="etiquetas">Titulo:</span><br /> ';

//creamos el input para el formulario:

 
 
  nCredito = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCredito.name = 'titulos[]';
//Establecemos el tipo de campo 
   nCredito.type = 'text';
   nCredito.size= '50';
   
   
   
       nCC = document.createElement('div');
//con esto se establece la clase de la div
   nCC.className = 'crediticos';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nCC.id = 'crediticos' + (++numero);
     nCC.setAttribute("class","etiquetas");
   //mostrador='<span id="MostContador'+aleatorio+'" class="etiquetas">100 caracteres restantes.</span> ';
   nCC.innerHTML = '<br /> Archivo:<br /> ';
 
   nCampo = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampo.name = 'archivos[]';
//Establecemos el tipo de campo 
   nCampo.type = 'file';
   nCampo.size= '50';
   nCampo.setAttribute("class","pequeno");


//con esto se establece la clase de la div
   var aleatorio = Math.floor(Math.random()*5000);  
  
   //alert(aleatorio);


	
	
	

//fin jesus
//Ahora creamos un link para poder eliminar un campo que ya no deseemos
   a = document.createElement('a');
//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
   a.name = nDiv.id;
//Este link no debe ir a ningun lado
   a.href = '#';
//Establecemos que dispare esta funcion en click
   a.onclick = elimCamp;
//Con esto ponemos el texto del link
   a.innerHTML = 'Eliminar<br />';
   

//Con esto ponemos el texto del link

//Bien es el momento de integrar lo que hemos creado al documento,
//primero usamos la función appendChild para adicionar el campo file nuevo

  nDiv.appendChild(nCredito); 
    nDiv.appendChild(nCC);
  nDiv.appendChild(nCampo); 
  nDiv.appendChild(a); 

 
//Adicionamos el Link

  
  

//y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
   container = document.getElementById('adjuntos');
   container.appendChild(nDiv);
   


}
//con esta función eliminamos el campo cuyo link de eliminación sea presionado
elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
}
//con esta función recuperamos una instancia del objeto que disparo el evento
rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;
}
</script>
<script type="text/javascript">
function getObject(obj) {
  var theObj;
  if(document.all) {
  if(typeof obj=="string") {
          return document.all(obj);
  } else {
          return obj.style;
  }
  }
  if(document.getElementById) {
  if(typeof obj=="string") {
          return document.getElementById(obj);
  } else {
          return obj.style;
  }
  }
  return null;
}

</script>
<script type="text/javascript" src="dynifs.js"></script>
<style type="text/css">
.pequeno {

	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
</style>
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
            <td bgcolor="#FFFFFF" valign="top">
			
			
			
			<form name="adjunntados" action="adjuntosphp.php" method="post" enctype="multipart/form-data">
			
			<input type="hidden" name="idpeticion" value="<?php echo $variableid; ?>" />
			<input type="hidden" name="correo" value="<?php echo $m_aplicativo_cjuridica_email; ?>" />
			<input type="hidden" name="nombre_completo" value="<?php echo $m_aplicativo_cjuridica_nombres." ".$m_aplicativo_cjuridica_apellidos; ?>" />
			<table width="779" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			  <td><div align="right" style="margin-right:15px;"><img src="../img/spacer.gif" width="10" height="20" /><a href="#" onClick="addCampo()" class="etiquetas">+ archivos </a></div></td>
			</tr>
			
			<tr>
			  <td><div align="center" class="Titulos_Internos">Enviar archivos al usuario: <span class="Titulo_Rojo"><?php echo $m_aplicativo_cjuridica_nombres." ".$m_aplicativo_cjuridica_apellidos; ?></span></div></td>
			</tr>
				  <tr>
			  <td>
			  <div id="adjuntos" style="margin-left:40px;">
			  <div id="" style=" margin-bottom:15px;">
       <span class="etiquetas">Titulo: </span><br />
       <input name="titulos[]" type="text" class="pequeno"  size="50" style="margin-bottom:0px;" />
       <br />
			  </div>
			  <div >
       <span class="etiquetas">Archivo: </span><br />
       <input name="archivos[]" type="file" class="pequeno"  size="50" style="margin-bottom:0px;" />
       <br />
			  </div>
			  
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><div align="center"><a href="peticiones.php" target="_parent" title="Cancelar"><img  src="../img/cancelar_grande.png" name="button" width="30" height="30" hspace="5"  border="1" style="color:#fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold; cursor:pointer;" title="Cancelar" type="image" value="cancelar" /></a>
			    <input type="image"  border="1" name="button" value="guardar" style="color: #fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../img/guradar_grande2.png" /></div></td>
			</tr>
			<tr>
			  <td><img src="../img/spacer.gif" width="10" height="20" /></td>
			</tr>
			</table>
			
			</form>
			
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
