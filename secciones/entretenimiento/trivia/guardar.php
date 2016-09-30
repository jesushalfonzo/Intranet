<?php include('logeo2.php');?> 
<?
 include ('../../../extras/coneccion.php');
$link=Conectarse();
$fechacompleta=date('Y-m-d H:i:s');
$pregunta_numero=$_SESSION["guianum3ro"];
$acumulator=$_SESSION["noincluir"];
$id_agregado=$_POST["id_agregado"];
$respuesta=$_POST["correcta"];
$idmaster=$_POST["idmaster"];
$idtrivia=$_POST["idtrivia"];
$id_pregunta=$_POST["id_pregunta"];
$INSERT="UPDATE  r_trivia_control SET  r_trivia_control_idopcion='$respuesta' WHERE r_trivia_control_id='$id_agregado'";
$query=mysql_query($INSERT, $link);

	$_SESSION['guianum3ro']=$pregunta_numero+1;
    $_SESSION['noincluir']=$acumulator.','.$id_pregunta;
	
	if($pregunta_numero<10){
	echo "<script language='JavaScript'>parent.trivia.location.href='index.php?id=".$idtrivia."&idmaster=".$idmaster."' ;</script>";
	}
	else{
	echo "<script language='JavaScript'>parent.trivia.location.href='resultados.php?idmaster=".$idmaster."&idtrivia=".$idtrivia."';</script>";
	}
?>
