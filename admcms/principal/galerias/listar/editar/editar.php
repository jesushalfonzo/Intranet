<? 
include('../../../../extras/connect.php');
//include ('../../../../GENERAR/GenerarXML-Actualidad.php'); 
$linky=Conectarse();
$id=$_POST["id"];
$titulo=$_POST["titulo"];
$boton=$_POST["boton"];
if($boton=='Actualizar'){
$SQL="UPDATE m_galerias SET m_galeria_titulo='$titulo' WHERE m_galeria_id='$id'";
}
else {
$SQL="UPDATE m_galerias SET m_galeria_titulo='$titulo', m_galeria_estatus='A' WHERE m_galeria_id='$id'";
}
//echo("query:" . $SQL);
$query=mysql_query($SQL, $linky);
if ($query)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }; 
  
  
  $slaches="../../../../../";
GenerarXML($slaches);
  
  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
  
  ?>