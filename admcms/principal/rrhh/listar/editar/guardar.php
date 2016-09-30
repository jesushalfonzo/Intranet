<? include ('../../../../extras/connect.php');?>
<? include ('../../../../GENERAR/GenerarXML-Actualidad.php'); ?>
<? 
$link=Conectarse(); 
$id=$_POST["id"];  
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["rte1"];
$categoria=$_POST["categoria"];
$boton=$_POST["botoncito"];

if($boton=='Actualizar'){
$sqlinsertar= "UPDATE m_rhh_info SET m_rhh_info_titulo='$titulo', m_rhh_info_sumario='$sumario', m_rhh_info_categoria='$categoria', m_rhh_info_contenido='$contenido' WHERE m_rhh_info_id='$id'"; 

}
else{
$sqlinsertar= "UPDATE m_rhh_info SET m_rhh_info_titulo='$titulo', m_rhh_info_sumario ='$sumario', m_rhh_info_categoria='$categoria', m_rhh_info_contenido ='$contenido', m_rhh_info_aprobada = 'SI' WHERE m_rhh_info_id ='$id'"; 
}



$resultado=mysql_query($sqlinsertar,$link); 

$slaches="../../../../../";
GenerarXML($slaches);

if($resultado){


 echo "<script language='JavaScript'>alert('Actualización Exitosa');</script>"; 
 }
 
 else {
 
 echo "<script language='JavaScript'>alert('Actualización NO Exitosa');</script>"; 
 }
 echo "<script language='JavaScript'>document.location.href='../../listar/index.php';</script>";
?>

