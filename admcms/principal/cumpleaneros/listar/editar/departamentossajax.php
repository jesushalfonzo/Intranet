 <?php
include ('../../../../extras/connect.php');
$link=Conectarse();
$idDep=$_GET["ckl"];
$separarlos=explode('?', $idDep);
$idDep=$separarlos[0];
 ?>
 <select name="departamento">
				  <option >Seleccionar</option>
				  <?php 
				  $Ssqlx="SELECT * FROM  m_departamentos ORDER BY m_departamentos_nombre ASC";
				  $queryx=mysql_query($Ssqlx, $link);
				  while($rxow=mysql_fetch_array($queryx)){
				  $categoriax=utf8_encode($rxow['m_departamentos_nombre']);
				  $m_departamentos_id=$rxow["m_departamentos_id"];
				  
	
				  ?>
				  <option value="<?php echo $m_departamentos_id; ?>" <?php if ($m_departamentos_id==$idDep){ echo 'selected="selected"'; }?> ><?php echo $categoriax; ?></option>
				 
				  <?php } ?>
				  </select> 