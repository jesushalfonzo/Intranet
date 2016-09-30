<?php 
header("Content-type: text/javascript; charset: UTF-8"); 
header("Cache-Control: must-revalidate"); 
$ExpStr = "Expires:".gmdate ( "D, d M Y H:i:s",
       time() + (21 * 24 * 60 * 60)). " GMT";
       header ($ExpStr);  
	   $idconsultorx=$_GET["jk"];
  ?>
// Cambia estos parametros

var segundos = 2000000; // el tiempo en que se refresca
var dividx = "timedivConsultores"; // el div que quieres actualizar!
var urlx = "consultoresajax.php?clk=<?php echo $idconsultorx; ?>"; // el archivo que ira en el div

////////////////////////////////
//
// Refreshing the DIV
//
////////////////////////////////

function refreshdiv2(){

// The XMLHttpRequest object

var xmlHttp;
try{
xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
}
catch (e){
try{
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
}
catch (e){
try{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e){
alert("Tu explorador no soporta AJAX.");
return false;
}
}
}

// Timestamp for preventing IE caching the GET request
var fetch_unix_timestamp ="";// lets declare the variable

fetch_unix_timestamp = function()
{
return parseInt(new Date().getTime().toString().substring(0, 10))
}

var timestamp = fetch_unix_timestamp();
var nocacheurl = urlx+"?t="+timestamp;

// The code...

xmlHttp.onreadystatechange=function(){
if(xmlHttp.readyState==4){
document.getElementById(dividx).innerHTML=xmlHttp.responseText;
setTimeout('refreshdiv2()',segundos*1000);
}
}
xmlHttp.open("GET",nocacheurl,true);
xmlHttp.send(null);
}

// Empieza la función de refrescar

window.onload = function startrefresh(){
refreshdiv2();
}
