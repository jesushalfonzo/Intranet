<?php
date_default_timezone_set("America/Caracas");

 ?>
<?php 
function Conectarse()
{ 

//if (!($link=mysql_connect("localhost","root",""))) 
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

/*
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conectarse = "localhost";
$database_conectarse = "intranet";
//$username_conectarse = "root";
$username_conectarse = "intranet";
//$password_conectarse = "A442N9fWfFMtU3rT";ZKlMZDAwVzYBd571
//$password_conectarse = "";
$password_conectarse = "*1ntr4netcl4v3*";
$conectarse = mysql_connect($hostname_conectarse, $username_conectarse, $password_conectarse) or trigger_error(mysql_error(),E_USER_ERROR); 
*/


?>
