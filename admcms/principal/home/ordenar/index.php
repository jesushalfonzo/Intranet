<?php  
      include ('../../../extras/connect.php');
      $link=Conectarse();

	   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<title>TeleSURtv.net - Administrador de contenidos!!!</title>
	    <style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {font-weight: bold}
#paginacion a{
 font-family:Arial, Helvetica, sans-serif;
 font-size:11px;
 color:#FFFFFF;
 font-weight:bold;
 
}
 .fecha_ord_actual{
 color:#7B7A5E;
 font-weight:bold;
 }
 
.Estilo5 {
	font-size: 10px;
	color: #333333;
	font-weight: bold;
}
.Estilo4 {
	
	color: #78876D;
	font-weight: bold;
}

.Estilo55 {
	
	color: #800000;
	font-weight: bold;
}

-->
        </style>
</head>
	<body>
	
		<!-- tables inside this DIV could have draggable content -->

<table width="700" border="0" cellspacing="0" cellpadding="0"  style="margin-left:5px;" align="center">
<tr>
    <td width="240" align="center">
 <div style="width:700px; padding:0px;" align="center">
 <form name="formulario" action="guardar.php" method="post">
 <div style=" border:solid; border-width:1px; border-color:#CCCCCC; padding:5px; background-color:#78876D; margin-top:20px;" >
 <div class="Estilo1" style=" height:25px; font-size:12px; margin-left:4px;"> 
   <div align="center"><strong>Seleccione el elementos que desea activar en el home:</strong> </div>
 </div>
 
 <div class="Estilo1" style="font-size:12px; margin-left:4px;"> 
   <div align="center">
   <table width="559" border="0" cellpadding="0" cellspacing="0">
   
   <?php 
   $SQL="SELECT * FROM m_elementos_home ORDER BY m_elementos_home_fecha DESC LIMIT 0,20";
   $query=mysql_query($SQL, $link);
   while($row=mysql_fetch_array($query)){
   
   $m_elementos_home_id=$row["m_elementos_home_id"];
   $m_elementos_home_titulo=$row["m_elementos_home_titulo"];
   $m_elementos_home_activo=$row["m_elementos_home_activo"];
    ?>
	
	<tr><td width="30" valign="top">
	
	<input name="opcion[<? echo "$m_elementos_home_id";?>]" type="checkbox" class="texto" <?php if($m_elementos_home_activo=="SI"){ echo 'checked="checked"';} ?> />
	
	
	
	</td><td width="529" valign="baseline"><?php echo $m_elementos_home_titulo; ?></td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	
	<?php } ?>
	
	</table>
   </div>
 </div>
 
 <div class="Estilo1" style=" height:25px; font-size:12px; margin-left:4px; margin-top:20px; margin-bottom:20px;"> 
   <div align="center"><input type="image" border="1" name="button" value="guardar" width="30" height="30" style="color: #fff; background-image:url(../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../../../img/Crystal_Clear_app_restart.png" alt="Guardar... " title="Guardar... " />
   </div>
 </div>
 </div>
 
 </form>
 </div></td>
</tr>
</table>

		
	</body>
</html>