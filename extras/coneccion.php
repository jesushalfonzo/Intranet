<?php 
function Conectarse()
{ 

    if (!($link=mysql_connect("localhost","intranet","*1ntr4netcl4v3*")))
   { 

      echo "Error conectando a la base de datos."; 

      exit(); 

   } 
   if (!mysql_select_db("intranet",$link)) 

   { 

      echo "Error seleccionando la base de datos."; 

      exit(); 

   } 

   return $link; 

} 

?>
