 <?php 
 include('../../../extras/coneccion.php');
$link=Conectarse();
$idelementoSEL=$_GET["clk"];
$separarlos=explode('?', $idelementoSEL);
$idE=$separarlos[0];
$Sl="SELECT m_aplicativo_cjuridica_clasificacion FROM m_aplicativo_cjuridica WHERE m_aplicativo_cjuridica_id ='$idE'";
$Q=mysql_query($Sl, $link);
$rx=mysql_fetch_array($Q);
$nomcategoria=$rx['m_aplicativo_cjuridica_clasificacion'];


 ?>
 <select name="clasificacion">
				  <option >Sin Asignar</option>
				  <?php 
				  $Ssqlx="SELECT * FROM m_categoria_juridica ORDER BY m_categoria_juridica_categoria ASC";
				  $queryx=mysql_query($Ssqlx, $link);
				  while($rxow=mysql_fetch_array($queryx)){
				  $categoriax=$rxow['m_categoria_juridica_categoria'];
				  
	
				  ?>
				  <option value="<?php echo $categoriax; ?>" <?php if($categoriax==$nomcategoria){ echo 'selected="selected"';  } ?>><?php echo $categoriax; ?></option>
				 
				  <?php } ?>
				  </select> 