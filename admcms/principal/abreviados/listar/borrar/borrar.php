<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $id=$_GET["clx"];



$tiraSQL="delete from m_abreviados where m_abreviados_id = '$id'";
$result = mysql_query($tiraSQL,$link);

   if ($result)
  {  
  echo "<script language='JavaScript'>alert('Registro ha eliminado');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Registro no eliminado');</script>";   }

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

 

?>