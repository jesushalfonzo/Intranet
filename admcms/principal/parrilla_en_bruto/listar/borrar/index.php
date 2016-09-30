<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $id_parrilla=$_GET["clx"];



$tiraSQL="delete from parrilla where id = '$id_parrilla'";
$result = mysql_query($tiraSQL,$link);

   if ($result)
  {  
  echo "<script language='JavaScript'>alert('Registro de parrilla eliminado');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Registro de parrilla no eliminado');</script>";   }

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

 

?>