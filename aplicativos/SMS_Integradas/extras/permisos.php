<?php

//PARA EL MANEJO CENTRALIZADO DE LA VALIDACION DE PERMISOS

function TienePermisos($seccion){
$permitir=false;
$permisos=$_SESSION["R0l3sp3rM1s0s"];
@$consulta=$permisos[$seccion]["PERMITIR"];
if ($consulta=="SI"){
$permitir=true;
}
else{
$permitir=false;
}
return $permitir;

}

?>