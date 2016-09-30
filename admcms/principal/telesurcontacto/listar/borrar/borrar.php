<? include ('../../../../extras/connect.php');
include ('../../../../GENERAR/GenerarXML-Actualidad.php'); 
	  $link=Conectarse();
	  $idnoticia=$_POST["id_nota"];



$tiraSQL="delete from noticia where id = '$idnoticia'";
$result = mysql_query($tiraSQL,$link);

  
  
  if ($result)
  {  
  echo "<script language='JavaScript'>alert('Registro eliminado');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Registro no eliminado');</script>";   }


  $slaches="../../../../../";
GenerarXML($slaches);


  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";


?>