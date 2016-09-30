<? include ('../../../extras/connect.php');
$linky=Conectarse();
$pregunta=$_POST["pregunta"];
$id_trivia=$_POST["id_trivia"];
$boton=$_POST["boton"];
if($boton=='Guardar y Volver'){
$validacion=1;
}
else {
$validacion=0;
}
$SQL="INSERT INTO m_trivia_pregunta VALUES(Null, '$id_trivia', '$pregunta')";
$query=mysql_query($SQL, $linky);
$last=mysql_insert_id();
  if ($query){
       echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";
    }
	
	
	 if (isset ($_FILES["archivos"])) {
        $tot = count($_FILES["archivos"]["name"]);
       for ($i = 0; $i < $tot; $i++){
		$opcion= $_POST["opcion"][$i];
		
		$SSQL="INSERT INTO r_trivia_pregunata_opc VALUES (Null, '$last', '$opcion', '0', 'NO')";

	$squery=mysql_query($SSQL, $linky);
		
		}
		}
	
?>

<html>
<head>
<script src="jquery-1.3.2.min.js" type="text/javascript"></script>
<link href="facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox()
	})
  </script>
<script type="text/javascript">
function clickButton(){
  document.getElementById('button1').click();
}

</script>
</head>
<body onLoad="clickButton()">
<a href="ventana.php?clx=<? echo"$last"; ?>&validacion=<? echo $validacion; ?>&id_master=<? echo $id_trivia; ?>" rel="facebox"><input type="button" name="button1" id="button1" value="jsjsjs" style="display:none;" /></a>
</body>
</html>