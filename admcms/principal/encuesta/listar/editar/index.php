<?php 
include ('../../../../extras/connect.php');
$link=Conectarse(); 
$idpregunta=$_GET["clx"];
$SQL="SELECT * FROM m_concurso_preguntas WHERE m_concurso_preguntas_id ='$idpregunta'";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_concurso_preguntas_pregunta=$row["m_concurso_preguntas_pregunta"];
$m_concurso_preguntas_id =$row["m_concurso_preguntas_id"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Encuesta</title>
<script type="text/javascript">
var numero = 0; //Esta es una variable de control para mantener nombres
            //diferentes de cada campo creado dinamicamente.
evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
   return (!evt) ? event : evt;
}

//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
addCampo = function () { 
var numero = 0;
//Creamos un nuevo div para que contenga el nuevo campo
   nDiv = document.createElement('div');
//con esto se establece la clase de la div
   nDiv.className = 'recordsArray';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nDiv.id = 'recordsArray_' + (++numero);
  nDiv.setAttribute("class","punteados");
  nDiv.setAttribute("style","margin-bottom:20px; padding:10px;");
  
 
 
 
  Span1 = document.createElement('span');
//con esto se establece la clase de la div
   Span1.className = 'nombre';
 Span1.innerHTML = 'Nombre:';
 
 
   Span2 = document.createElement('span');
//con esto se establece la clase de la div
   Span2.className = 'apellido';
 Span2.innerHTML = 'Apellido:';
 
   Span3 = document.createElement('span');
//con esto se establece la clase de la div
   Span3.className = 'foto';
 Span3.innerHTML = 'Foto:';
 
    nCampo = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampo.name = 'nombre[]';
//Establecemos el tipo de campo 
   nCampo.type = 'text';
   nCampo.size= '30';
   
   
   
       nCampoAp = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampoAp.name = 'apellido[]';
//Establecemos el tipo de campo 
   nCampoAp.type = 'text';
   nCampoAp.size= '30';
   nCampoAp.innerHTML= '<br />';
   
   
   
        nCampoFOT = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampoFOT.name = 'foto[]';
//Establecemos el tipo de campo 
   nCampoFOT.type = 'file';
   nCampoFOT.size= '30';
   nCampoFOT.setAttribute("style","margin-left:20px;");
   
   
 
 //PARA CREAR EL LINK DE LA SEXUALERTA
 

 
     nImage = document.createElement('img');
   nImage.name = nDiv.id;
   nImage.src = 'b_drop.png';
   nImage.width = '16';
   nImage.height = '16';
   nImage.onclick = elimCamp;
   nImage.setAttribute("align","baseline");
   nImage.setAttribute("title","Eliminar");
   nImage.innerHTML= '<br />';
   
//Ahora creamos un link para poder eliminar un campo que ya no deseemos
   a = document.createElement('a');
//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
   a.name = nDiv.id;
//Este link no debe ir a ningun lado
   a.href = '#';
//Establecemos que dispare esta funcion en click
   a.onclick = elimCamp;
  // a.setAttribute("class","Estilo2");
//Con esto ponemos el texto del link
   a.innerHTML = '';
    Salto = document.createElement('br');
	Salto2 = document.createElement('br');
   //ARMAR
	nDiv.appendChild(Span1);
	nDiv.appendChild(nCampo);
	nDiv.appendChild(nImage);
	nDiv.appendChild(Salto);
	nDiv.appendChild(Span2);
	nDiv.appendChild(nCampoAp);
	nDiv.appendChild(Salto2);
	nDiv.appendChild(Span3);
	nDiv.appendChild(nCampoFOT);
	 
	nDiv.appendChild(a);
	
//Adicionamos el Link
  

    var segundo_p = document.getElementById('contenedor').getElementsByTagName('div')[0];
    document.getElementById('contenedor').insertBefore(nDiv,segundo_p);



}
//con esta funci�n eliminamos el campo cuyo link de eliminaci�n sea presionado
elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
}

//con esta funci�n recuperamos una instancia del objeto que disparo el evento
rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;
}

function eliminarprecargado(element){
elemento=document.getElementById(element);
elemento.parentNode.removeChild(elemento);
}

function enviar_formulario(){
if (RecorrerForm()!=false){
document.form1.submit();
} 
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
function limpiar(campo)
{
//alert(campo);
divB = document.getElementById(campo);
divB.parentNode.removeChild(divB);
}

function BorrarElemento(id){
elemento="ELEMENTO_"+id;
if(confirm("�Esta seguro que desea eliminada esta opci�n?")) {
    var error = getDataServer("servidor.php","?idelemento="+id+"");
    if(error){
        alert('La opci�n ha sido eliminada');
		limpiar(elemento);
    }
	}
}
</script>
<style type="text/css">
.punteados{

border-width:1px; 
border-style: dashed;
border-color:#000000;
width:610px;
margin-bottom:10px;
}
</style>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="form1" method="post" action="editar.php" enctype="multipart/form-data">
<table width="821" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td colspan="2" bgcolor="#CCCCCC" class="etiquetas"><div align="center">Encuesta concurso </div></td>
</tr></table>
<table width="434" border="0" align="center" cellpadding="0" cellspacing="0">

<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="15" border="0" /></td></tr>

<tr><td class="etiquetas" colspan="2">Pregunta:</td></tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="15" border="0" /></td></tr>

<tr>
    <td colspan="2"><textarea name="titulo_enc" cols="80" rows="2"><?php echo $m_concurso_preguntas_pregunta; ?></textarea><input type="hidden" name="idpregunta" value="<?php echo $m_concurso_preguntas_id; ?>" /></td>
	</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="40" border="0" /></td>
</tr>
<tr><td width="333"  class="etiquetas"><div align="center">Opciones</div></td>
  <td width="103" class="texto"><a href="#" onClick="addCampo()" class="etiquetas">Agregar opci&oacute;n </a> </td>
</tr>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="15" border="0" /></td>
</tr>

<tr>
  <td  class="etiquetas" colspan="2"><div id="contenedor">
  <?php 
  $SQLopt="SELECT * FROM r_opciones_encuestas WHERE r_opciones_encuestas_idpregunta='$m_concurso_preguntas_id' ORDER BY r_opciones_encuestas_id DESC";
  $queryopt=mysql_query($SQLopt, $link);
  while ($rowopt=mysql_fetch_array($queryopt)){
  $r_opciones_encuestas_id=$rowopt["r_opciones_encuestas_id"];
  $r_opciones_encuestas_nombre=$rowopt["r_opciones_encuestas_nombre"];
  $r_opciones_encuestas_apellido=$rowopt["r_opciones_encuestas_apellido"];
  $r_opciones_encuestas_foto=$rowopt["r_opciones_encuestas_foto"];
  
   $cadena = $r_opciones_encuestas_foto;    
    $porciones = explode(".", $cadena);
    if ($porciones[1]=="pdf"){
        $nombre= "Titulo";
        $apellido= "Autor";
        
    }
    else {
        $nombre= "Nombre";
        $apellido="Apellido";
    }
  
  ?>
  <div class="punteados" style="margin-bottom:20px; padding:10px;" id="ELEMENTO_<?php echo $r_opciones_encuestas_id; ?>">
  <table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr><td valign="top">
  <?php echo "$nombre"; ?>: <input type="text" name="nombreCargada[]" size="30" value="<?php echo $r_opciones_encuestas_nombre; ?>" />
  <input type="hidden" name="idelemento[]" size="30" value="<?php echo $r_opciones_encuestas_id; ?>" />
  <br />
  <?php echo"$apellido";?>: 
  <input type="text" name="apellidoCargada[]" size="30" value="<?php echo $r_opciones_encuestas_apellido; ?>"  />
  <br />
  Foto: 
  <input type="file" name="fotoCargada[]" size="30" style=" margin-left:20px;" /></td>
  
  <td>
  <?php 
    $cadena = $r_opciones_encuestas_foto;    
    $porciones = explode(".", $cadena);
    if ($porciones[1]=="pdf"){
       ?>
      <a target="_blank" href="../../../../../multimedia/imagenes/encuesta/<?php echo $r_opciones_encuestas_foto; ?>"><img src="../../../../../multimedia/imagenes/encuesta/PDF_image.jpg" height="100" width="100" border="1" /></a>
      <?php 
    }else{
     ?>
      <img src="../../../../../multimedia/imagenes/encuesta/<?php echo $r_opciones_encuestas_foto; ?>" height="100" width="100" border="1" />
      <?php 
    }

   ?>
  
  </td>

  <td>
  <a href="#." onclick="BorrarElemento('<?php echo $r_opciones_encuestas_id; ?>')" style="text-decoration:none;">
  <img src="b_drop.png" width="16" height="16" hspace="5" vspace="4" border="0" /></a></td>
  </tr></table></div>
  
  <?php } ?>
  
  </div>
  </td></tr>
   <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="15" border="0" /></td></tr>
   
<tr><td colspan="2" align="center"><input type="submit" name="Submit" value="Guardar" class="pequeno"></td></tr>
</table>
    

</form>
</body>
</html>