<?php
$ruta = $_SERVER['PHP_SELF'];
$fichero = basename($ruta);
 ?>
 
 
 <table width="1020" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="639" height="26">&nbsp;</td>
    <td width="134" height="26" class="<?php if($fichero=="index.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="index.php" class="<?php if($fichero=="index.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Cumpleaños del mes</a></td>
    <td width="1" height="26"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="90" height="26" class="<?php if($fichero=="poliza.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="galeria.php" class="<?php if($fichero=="galeria.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Fotogalería</a></td>
    <td width="1" height="26"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="113" height="26" align="center"class="<?php if($fichero=="poliza.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="ingresos.php" class="<?php if($fichero=="ingresos.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Nuevos Ingresos 	 </a></td>
    <td width="44" height="26">&nbsp;</td>
  </tr>
</table>

