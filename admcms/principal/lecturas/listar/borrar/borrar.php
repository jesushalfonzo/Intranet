<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idlectura=$_GET["clx"];



$tiraSQL="delete from lecturas where id_lectura = '$idlectura'";
$result = mysql_query($tiraSQL,$link);

   if ($result)
  {  
  echo "<script language='JavaScript'>alert('Registro eliminado');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Registro NO eliminado');</script>";   }

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

 

?>