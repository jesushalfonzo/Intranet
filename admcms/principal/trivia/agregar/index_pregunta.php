<? include ('../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT m_trivia_titulo FROM m_trivia WHERE m_trivia_id='$id'";
$query=mysql_query($SQL, $linky);
$row=mysql_fetch_array($query);
$titulo=$row['m_trivia_titulo'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.oculto{
display:none;
}

</style>

<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.formulario.titulo.value.length==0){
       alert("Debe ingresar el Titulo de la trivia")
       document.formulario.titulo.focus()
	  
	    return false;
	   } 
	   
    
  return validar;
	  
    
	}

//-->
</script>





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
   nDiv.id = 'text' + (++numero);
   
   nDiv.innerHTML = '<br /><span class="etiquetas">Opción:</span><br /> ';
   
   
   

//Creamos un nuevo div para que contenga el nuevo campo
   nDivFalso = document.createElement('div');
//con esto se establece la clase de la div
   nDivFalso.className = 'archivo';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nDivFalso.id = 'text' + (++numero);
  nDivFalso.setAttribute("class","oculto");

//creamos el input para el formulario: SOLO PORQUE ME HACE FALTA, DIGAMOS UN PEQUEÑO ENGAÑO VISUAL


 nFile = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nFile.name = 'archivos[]';
//Establecemos el tipo de campo 
   nFile.type = 'file';
   nFile.size= '10';
  nFile.setAttribute("class","oculto");
 ///////////////////
 
 
 
   nCheck = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCheck.name = 'opcion[]';
//Establecemos el tipo de campo 
   nCheck.type = 'text';
   nCheck.size= '50';
   nCheck.setAttribute("class","cajas");



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
   a.innerHTML = 'Eliminar<br>';
   

//Con esto ponemos el texto del link

//Bien es el momento de integrar lo que hemos creado al documento,
//primero usamos la función appendChild para adicionar el campo file nuevo

nDiv.appendChild(nFile);
   nDiv.appendChild(nCheck);

   nDiv.appendChild(a);
//Adicionamos el Link
  

//Ahora si recuerdan, en el html hay una div cuyo id es 'adjuntos', bien
//con esta función obtenemos una referencia a ella para usar de nuevo appendChild
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
<body topmargin="0">
<form id="formulario" name="formulario" method="post" action="guardar_respuesta.php" onsubmit="return valida_envia();" enctype="multipart/form-data">


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr><td><span class="etiquetas">Trivia:</span><span class="texto"> <? echo"$titulo"; ?></span></td></tr>
<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  <td class="texto"><span class="etiquetas">Pregunta: </span> <br />
  <textarea name="pregunta" rows="3" cols="64"></textarea>
  <input type="hidden" name="id_trivia" value="<? echo"$id"; ?>" />
  </td></tr>


<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  <td class="texto">
  <div id="adjuntos">
  
  
  <span class="etiquetas">Opción:<br />
  </span>
    <input type="file" name="archivos[]" size="50" class="oculto" />
	<input type="text" name="opcion[]" size="50" />
	
  </div>
	
	</td></tr>
<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr>
  <td class="texto"><a href="#" onClick="addCampo()" class="etiquetas">Agregar respuesta </a></td>
</tr>
<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
<tr><td class="pequeno">Por favor usar este modulo con Mozilla Firefox.</td>
</tr>
<tr><td class="texto"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>

<tr><td align="center"><input type="submit" name="boton" value="Guardar y Volver" /><input name="boton" type="submit" value="Guardar y Salir" />
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
