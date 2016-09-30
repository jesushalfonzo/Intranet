 <?php 
 include('../../../extras/coneccion.php');
$link=Conectarse();
$idelementoSEL=$_GET["clk"];
$separarlos=explode('?', $idelementoSEL);
$idE=$separarlos[0];
$Sl="SELECT * FROM m_consultoria_consultores WHERE m_consultoria_consultores_id ='$idE'";
$Q=mysql_query($Sl, $link);
$rx=mysql_fetch_array($Q);
$nomcategoria=$rx['m_consultoria_consultores_nombre'];


 ?>
 <select name="consultorasignado">
				  <option >Sin Asignar</option>
				  <?php 
				  $Ssqlx="SELECT * FROM m_consultoria_consultores ORDER BY m_consultoria_consultores_id ASC";
				  $queryx=mysql_query($Ssqlx, $link);
				  while($rxow=mysql_fetch_array($queryx)){
				  $categoriax=$rxow['m_consultoria_consultores_id'];
				  $nombreconsultor=$rxow['m_consultoria_consultores_nombre'];
				  
	
				  ?>
				  <option value="<?php echo $categoriax; ?>" <?php if($categoriax==$idE){ echo 'selected="selected"';  } ?>><?php echo $nombreconsultor; ?></option>
				 
				  <?php } ?>
				  </select> 