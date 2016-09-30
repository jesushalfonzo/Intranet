<?php 
$ubicacion="canal";
include('extras/coneccion.php');
$link=Conectarse();
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Informaciones RRHH: <? echo"$titulo"; ?></title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function activar_video(video,imagen2, fecha, titulo, embed){
document.getElementById('nombresito').innerHTML = titulo+ " - " + fecha;
var player = document.getElementById("ply");
player.sendEvent('STOP');
player.sendEvent('LOAD',{file:video, image:imagen2, type:'video', title:"mi video"});
player.sendEvent('PLAY'); 

}
</script>
</head>

<body>
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9">
 <? include('cabecera.php'); ?>
  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="798" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11"><img src="images/spacer.gif" width="11" height="11" /></td>
        <td width="550" valign="top">

		
		<table width="550" cellspacing="0" cellpadding="0">
          <tr>
            <td width="550" height="23" background="images/Ima_interna_titulo.gif" class="Titulos_negros"> SOMOS TeleSUR </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			<?php 
				$SQLsomos="SELECT * FROM m_somostelesur WHERE m_somostelesur_estatus='A' ORDER BY m_somostelesur_fecha DESC LIMIT 0,1";
				$querysomos=mysql_query($SQLsomos, $link);
				$rowsomos=mysql_fetch_array($querysomos);
				$m_somostelesur_id=$rowsomos["m_somostelesur_id"];
				$m_somostelesur_fecha=date("d-m-Y", strtotime($rowsomos["m_somostelesur_fecha"]));
				$m_somostelesur_titulo=$rowsomos["m_somostelesur_titulo"];
				$m_somostelesur_foto=$rowsomos["m_somostelesur_foto"];
				$m_somostelesur_archivo=$rowsomos["m_somostelesur_archivo"];
				?>
			<div align="center"><div style=" padding-top:20px;" id="container"><a href="http://www.macromedia.com/go/getflashplayer">InstalarFlash Player </a>para ver este video.
	<script type="text/javascript" src="swfobject.js"></script>
	<script type='text/javascript'>
				  var so = new SWFObject('player.swf','ply','321','244','9','#ffffff');
				  so.addParam('allowfullscreen','true');
				  so.addParam('autostart', 'false');
				  so.addParam('allowscriptaccess','always');
				  so.addParam('wmode','opaque');
				  so.addParam('allownetworking','all');
				  so.addVariable('file','multimedia/videos/<?php echo $m_somostelesur_archivo; ?>&image=multimedia/videos/<?php echo $m_somostelesur_foto; ?>');	
				  so.addVariable('skin', 'snel.swf');				 
				  so.addVariable('flashvars', 'abouttext=TeleSUR!&aboutlink=http://www.telesurtv.net/&stretching=fill');
				  so.write('container');
				</script></div></div>
				<div style="margin-top:15px; height:10px;" id="nombresito" align="center" class="texto_Gris"><?php echo $m_somostelesur_titulo." - ".$m_somostelesur_fecha; ?></div>
			    <div style="margin-top:15px; height:30px;">&nbsp;</div>
			
			
			<?php 
				$SQLsomos="SELECT * FROM m_somostelesur WHERE m_somostelesur_estatus='A' ORDER BY m_somostelesur_fecha DESC";
				$querysomos=mysql_query($SQLsomos, $link);
				while($rowsomos=mysql_fetch_array($querysomos)){
				$m_somostelesur_id=$rowsomos["m_somostelesur_id"];
				$m_somostelesur_fecha=date("d-m-Y", strtotime($rowsomos["m_somostelesur_fecha"]));
				$m_somostelesur_titulo=$rowsomos["m_somostelesur_titulo"];
				$m_somostelesur_foto=$rowsomos["m_somostelesur_foto"];
				$m_somostelesur_archivo=$rowsomos["m_somostelesur_archivo"];
				
				
				
				
				?>
				<div class="Titulo_Rojo" style="margin-top:5px; margin-bottom:5px; margin-left:15px;"><img src="images/tele_1.png" width="20" height="20" hspace="5" border="0" /><a href="#arriba_player" onClick="activar_video('<? echo "multimedia/videos/".$m_somostelesur_archivo;?>','<? echo "multimedia/videos/".$m_somostelesur_foto;?>','<? echo $m_somostelesur_fecha;?>', '<? echo $m_somostelesur_titulo;?>'); " style="text-decoration:none;"  ><?php echo $m_somostelesur_titulo; ?> - <?php echo $m_somostelesur_fecha; ?></a></div>
				
				
				<?php  } ?>
			 </td>
          </tr>
		    <tr>
            <td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="550" height="10" /></td>
          </tr>
                    

          <tr>
            <td><img src="images/Rojo_interno1.gif" width="550" height="6" /></td>
          </tr>
        </table></td>
        <td width="13"><img src="images/spacer.gif" width="13" height="11" /></td>
        <td width="156" valign="top"><table width="214" cellspacing="0" cellpadding="0">
         <? 
		 
	$SQL2="SELECT * FROM m_rhh_info  WHERE m_rhh_info_id <>'$id' and m_rhh_info_aprobada='SI'  ORDER BY m_rhh_info_id DESC LIMIT 0,3";
	 $query2=mysql_query($SQL2, $link);
	 $numero=mysql_num_rows($query2);
	 if($numero > 0){
	  ?>
		  <tr>
            <td width="214" height="23" background="images/ima_interna_2.gif"><a href="listado_rrhh.php"  class="Titulos" style="text-decoration:none;">Ver m&aacute;s </a></td>
          </tr>
           <? 
     
							 while ($row2=mysql_fetch_array($query2)){
							 $titulo2=$row2['m_rhh_info_titulo'];
							 $id2=$row2['m_rhh_info_id'];
						
						  ?><tr>
            <td bgcolor="#F2F2F2" ><div style="margin-top:5px; margin-left:4px; margin-right:4px;"><a href="informacionesRRHH.php?ckl=<? echo"$id2"; ?>" class="links_internos"><img src="images/listas.gif" border="0" class="images_gifs1" /><? echo"$titulo2"; ?></a></div></td>
          </tr>
		  <? }
		  
		  } ?>
          
		  <? include('extras/titularesINTERNO.php'); ?>
        </table></td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="798" height="20" ><img src="images/spacer.gif" width="10" height="20" /></td>
  </tr>
  <? include('pie_pagina.php'); ?>
</table>

</body>
</html>
