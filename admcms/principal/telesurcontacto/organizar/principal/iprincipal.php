<?
include ('../../../../extras/connect.php');
include ('../../../../GENERAR/GenerarXML-Home.php');

	  $link=Conectarse();


	  //1 nota
	    $nota1=$_POST["nota1"];
		//echo"$nota1";
		if ($nota1!=''){
		$tiraSQL="update home_principal set id_nota='$nota1' where  id_home=1";
		//echo"$tiraSQL";
		$result = mysql_query($tiraSQL,$link);
		}

	  //2 nota
	    $nota2=$_POST["nota2"];
		if ($nota2!=''){
		$tiraSQL="update home_principal set id_nota='$nota2' where  id_home=2";
		$result = mysql_query($tiraSQL,$link);
		}

	  //3 nota
	    $nota3=$_POST["nota3"];
		if ($nota3!=''){
		$tiraSQL="update home_principal set id_nota='$nota3' where  id_home=3";
		$result = mysql_query($tiraSQL,$link);
		}

	  //4 nota
	    $nota4=$_POST["nota4"];
		if ($nota4!=''){
		$tiraSQL="update home_principal set id_nota='$nota4' where  id_home=4";
		$result = mysql_query($tiraSQL,$link);
		}
		 //5 nota
	    $nota5=$_POST["nota5"];
		if ($nota5!=''){
		$tiraSQL="update home_principal set id_nota='$nota5' where  id_home=5";
		$result = mysql_query($tiraSQL,$link);
		}

echo "<script language='JavaScript'>alert('Actualizado correctamente');</script>";
GenerarXML('../../../../../');
//echo "<script language='JavaScript'>document.location.href='../../listar/index.php';</script>";



 //echo "<script language='JavaScript'>document.location.href='../../listar/index.php';</script>";
?>