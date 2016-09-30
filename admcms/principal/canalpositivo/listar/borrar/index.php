<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idinformacion=$_GET["clx"];

 

$tiraSQL="delete from canalpositivo where id = '$idinformacion'";
$result = mysql_query($tiraSQL,$link);

 //echo"$tiraSQL"; 
  
  if ($result)
  {  
  echo "<script language='JavaScript'>alert('Registro eliminado');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Registro no eliminado');</script>";   }

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";


?>