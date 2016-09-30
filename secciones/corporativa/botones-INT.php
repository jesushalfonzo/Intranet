<?php
$ruta = $_SERVER['PHP_SELF'];
$fichero = basename($ruta);

 ?>



<table width="1020" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="322" height="26">&nbsp;</td>
    <td width="128" height="26" class="<?php if($fichero=="index.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../index.php" class="<?php if($fichero=="index.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Noticias de inter&eacute;s</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    
   <?php/* <td width="128" height="26" class="<?php 
    if($fichero=="index2.php"){echo "Arial_12_bold_azul"; }
    
    elseif($fichero=="encuesta.php"){echo "Arial_12_bold_azul";}
    
    else {echo "Arial_12_bold_negro";} ?>"><a href="../encuesta/index.php" class="<?php if($fichero=="index2.php"){ echo "Arial_12_bold_azul";}  elseif($fichero=="encuesta.php"){echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Encuesta</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>*/?>
    
    <td width="148" height="26" class="<?php if($fichero=="descargas.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../descargas.php" class="<?php if($fichero=="descargas.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Descarga de material</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="72" height="26" class="<?php if($fichero=="canal.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../canal.php" class="<?php if($fichero=="canal.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">El canal</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="80" height="26" class="<?php if($fichero=="directorio.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../directorio.php" class="<?php if($fichero=="directorio.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Directorio</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="107" height="26" class="<?php if($fichero=="herramientas.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../herramientas.php" class="<?php if($fichero=="herramientas.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Herramientas</a></td>
    <td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="113" height="26" class="<?php if($fichero=="noticiero.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../noticiero.php" class="<?php if($fichero=="noticiero.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Noticiero interno</a></td>
	<td width="1" height="26"><img src="../../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
	 <td width="113" height="26" class="<?php if($fichero=="organigrama.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="../organigrama.php" class="<?php if($fichero=="organigrama.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Organigrama</a></td>
    <td width="44" height="26">&nbsp;</td>
  </tr>
</table>