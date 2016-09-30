<?php 
function Validar()
{ 
   if (!($link=mysql_connect("192.168.3.61","intranet","*s3l3cus3r")))
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
// nombre de la base de datos
   if (!mysql_select_db("telesur",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>