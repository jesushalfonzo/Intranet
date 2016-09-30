<? include ('../../../extras/connect.php');?>
<? include ('../../../GENERAR/GenerarXML-Actualidad.php'); ?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["rte1"];
$categoria=$_POST["categoria"];

$sqlinsertar= "INSERT INTO m_rhh_info VALUES(Null, '$titulo', '$sumario', '$contenido', 'NO', 'NO', '$categoria', Now())"; 
$resultado=mysql_query($sqlinsertar,$link); 
if($resultado){
$slaches="../../../../";
GenerarXML($slaches);
echo "<script language='JavaScript'>alert('Sus datos fueron guardados satisfactoriamente');</script>"; 
 }
 else{
 echo "<script language='JavaScript'>alert('ERROR - DATOS NO GUARDADOS');</script>"; 
 }
 
 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>

