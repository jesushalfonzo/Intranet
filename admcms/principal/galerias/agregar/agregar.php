<? 
include('../../../extras/connect.php');
$linky=Conectarse();
$titulo=$_POST["titulo"];
$SQL="INSERT INTO m_galerias VALUES(Null, '$titulo', NOW(), 'D', 'N')";
$query=mysql_query($SQL, $linky);
if ($query)
  {  
  echo "<script language='JavaScript'>alert('Inclusi�n Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusi�n NO Exitosa');</script>";   }; 
  
  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";

?>