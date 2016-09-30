<? include ('../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["clx"];
$id_master=$_GET["id_master"];
$validacion=$_GET["validacion"];
$SQL="SELECT * FROM r_trivia_pregunata_opc WHERE r_trivia_pregunata_opc_idpregunta='$id'";
$query=mysql_query($SQL, $linky);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function getDataServer(url, vars){
     var xml = null;
     try{
         xml = new ActiveXObject("Microsoft.XMLHTTP");
     }catch(expeption){
         xml = new XMLHttpRequest();
     }
     xml.open("GET",url + vars, false);
     xml.send(null);
     if(xml.status == 404) alert("Url no valida");
     return xml.responseText;
}
</script>
<script type="text/javascript">
function actualizar(opcion){
    var error = getDataServer("servidor.php","?id="+opcion+"");
    if(error){
       alert('Respuesta correcta establecida correctamente');
	   <? if($validacion=='1'){  
	 echo 'document.location.href="index_pregunta.php?clx='.$id_master.'"'; 
	   } 
	   else {
	   echo 'document.location.href="../listar/index.php"'; 
	   }
	   ?>
	  
    }
}
</script>
<script src="facebox.js" type="text/javascript"></script>
<title>Correcta</title>
</head>

<body>

<form name="formulario" method="post">
<table cellpadding="0" cellspacing="0" border="0">

<tr><td><span class="etiquetas">Elija la opción correcta</span></td></tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" height="10" width="10" /></td></tr>
<?
  $i=0;
  while ($row=mysql_fetch_array($query)){ 
   $opcion=htmlentities($row['r_trivia_pregunata_opc_text']);
   $id_opcion=$row['r_trivia_pregunata_opc_id'];
?>
<tr><td><span class="etiquetas"><? echo"$opcion"; ?>: </span></td><td>
<input type="radio" name="correcta" value="<? echo"$id_opcion"; ?>" onclick="actualizar(this.value);" /></td></tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" height="10" width="10" /></td></tr>
<? $i++; } ?>

</table>

</form>


</body>
</html>
