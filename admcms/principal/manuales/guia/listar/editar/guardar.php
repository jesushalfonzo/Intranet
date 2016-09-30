<?php
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$clase=$_POST["clase"];
$telefonos=$_POST["telefonos"];
$direccion=$_POST["direccion"];
$sql = "UPDATE m_guia_telesur SET m_guia_telesur_nombre='$nombre', m_guia_telesur_clase='$clase', 	m_guia_telesur_telefono='$telefonos', m_guia_telesur_direccion ='$direccion' WHERE m_guia_telesur_id ='$id'";
$sql_query = mysql_query($sql, $linky);
$last = mysql_insert_id();


if ($sql_query)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Error, revise sus datos');</script>";   
  
  }

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
 ?>
