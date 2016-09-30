<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
date_default_timezone_set("America/Caracas");

 ?>
<script language="JavaScript" type="text/JavaScript">
    var Hoy = new Date("<?php echo date("d M Y G:i:s");?>");
function Reloj(){ 
    Hora = Hoy.getHours() 
    Minutos = Hoy.getMinutes() 
    Segundos = Hoy.getSeconds() 
    if (Hora<=9) Hora = "0" + Hora 
    if (Minutos<=9) Minutos = "0" + Minutos 
    if (Segundos<=9) Segundos = "0" + Segundos 
   /* var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); 
    var Mes = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    var Anio = Hoy.getFullYear(); 
    var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio + ", a las "; */
    var Inicio, Script, Final, Total 
    Inicio = "" 
    Script =  Hora + ":" + Minutos + ":" + Segundos 
    Final = "" 
    Total = Inicio + Script + Final 
    document.getElementById('Fecha_Reloj').innerHTML = Total 
    Hoy.setSeconds(Hoy.getSeconds() +1)
    setTimeout("Reloj()",1000) 
} 
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 5px;
}
.Hora_Alto {
	font-family: Arial;
	font-size: 32px;
	font-style: normal;
	font-weight: bold;
	color: #FFF;
	text-align: center;
}
body {background-color:transparent;} /* fondo transparente FireFox */
-->
</style></head>
<body onload="Reloj();">
<div id="Fecha_Reloj"  class="Hora_Alto"></div>
</body>
</html>
