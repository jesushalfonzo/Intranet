<?php 
function Conectarse()
{ 
   if (!($link=mysql_connect("localhost","intranet","*1ntr4netcl4v3*")))
   { 

      echo "Error conectando a la base de datos."; 

      exit(); 

   } 
// nombre de la base de datos
   if (!mysql_select_db("sms",$link)) 

   { 

      echo "Error seleccionando la base de datos."; 

      exit(); 

   } 

   return $link; 

} 

?>