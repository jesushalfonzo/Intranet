<?php
include ('../../../extras/connect.php');
$linky=Conectarse();
$fechacompleta=date('Y-m-d H:i:s');
$nombre=$_POST["nombre"];
$clase=$_POST["clase"];
$telefonos=$_POST["telefonos"];
$direccion=$_POST["direccion"];
$sql = "INSERT INTO m_guia_telesur VALUES (Null, '$nombre', '$clase', '$telefonos', '$direccion')";
$sql_query = mysql_query($sql, $linky);
$last = mysql_insert_id();


if ($sql_query)
  {  
  echo "<script language='JavaScript'>alert('Datos agregados correctamente');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Error, revise sus datos');</script>";   
  
  }

  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 ?>
