<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id_nota"];
$titulo=$_POST["titulo"];  
$sumario=$_POST['sumario'];
$rte1=$_POST["rte1"];


//$actualizar="update m_noticia set   m_noticia_videoarchivo='$nombre_new' where  m_noticia_id='$id_nota'"; 
$actualizar="update canalpositivo set contenido='$rte1', nombre='$titulo', sumario='$sumario' where id=$id"; 
$resultado=mysql_query($actualizar,$link); 
//echo"$actualizar";
echo "<script language='JavaScript'>alert('Sus datos fueron actualizados correctamente');</script>";
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>