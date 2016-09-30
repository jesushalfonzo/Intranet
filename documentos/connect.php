<?php 
function Conectarse()
{ 
//aqui va tu nombre de usuario y tu contraseña
if (!($link=mysql_connect("localhost","davidgff","silverpen95"))) 
   //if (!($link=mysql_connect("localhost","telesur","")))
   //root 

   { 

      echo "Error conectando a la base de datos."; 

      exit(); 

   } 
// nombre de la base de datos
   if (!mysql_select_db("davidgff_agenda",$link)) 

   { 

      echo "Error seleccionando la base de datos."; 

      exit(); 

   } 

   return $link; 

} 

?>