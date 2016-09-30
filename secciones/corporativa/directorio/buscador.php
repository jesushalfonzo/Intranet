<? include('../../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="CORPORATIVA";

if (isset($_GET["letra"])){ $letra=$_GET["letra"]; } else{ $letra="A"; }

$SQL="SELECT m_abreviados_id, m_abreviados_numero, m_abreviados_nombre FROM m_abreviados WHERE left(m_abreviados_nombre, 1) = '$letra' ORDER BY m_abreviados_nombre ASC";
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TeleSUR - Intranet - Números abreviados </title>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.ScrollDocumentos {
	
	overflow: scroll;
	height: 535px;
	visibility: inherit;
	SCROLLBAR-FACE-COLOR:#F0F0F0;
	SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-SHADOW-COLOR: #CCCCCC;
	SCROLLBAR-3DLIGHT-COLOR: #FFFFFF;
	SCROLLBAR-ARROW-COLOR: #1D396B;
	SCROLLBAR-TRACK-COLOR: #FFFFFF;
	SCROLLBAR-DARKSHADOW-COLOR: #CCCCCC;
	overflow-x: hidden;
	clip: rect(auto,auto,270px,auto);
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body >
<table width="305" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="305" height="579" valign="top">
       <div class="ScrollDocumentos">
	   <table width="296" border="0" cellspacing="0" cellpadding="0">
	   
		<?php 
		$consulta=mysql_query($SQL) or die (mysql_error());
		$num=mysql_num_rows($consulta);
		
		if($num==0){
		echo'<div class="Arial_12_Bold_griz" style="width:224px; margin-left:10px;">No existe ningun nombre registrado por la letra '. $letra.'</div>';
		}
		
		$i=0;
		while ($resultado=mysql_fetch_array($consulta)){
		$m_extensiones_departamento=$resultado['m_abreviados_nombre'];
		$m_extensiones_numero=$resultado['m_abreviados_numero'];
		if ($i % 2){
		$color="#ffffff"; }
		else {
		$color="#A8C5E7";
		}
		$i++;
	   
	   ?>
  <tr>
    <td width="230" height="24" class="linea_abajo"><div class="Arial_12_Bold_griz" style="width:224px; margin-left:10px;"><?php echo $m_extensiones_departamento; ?></div></td>
    <td width="66" height="24" class="linea_abajo"><div class="Arial_12_Bold_griz" style="width:54px; "><?php echo $m_extensiones_numero; ?></div></td>
  </tr>



<?php } ?>


</table>
	   </div>
    </td>
    

  </tr>
</table>
</body>
</html>