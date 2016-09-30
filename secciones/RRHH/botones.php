<?php
$ruta = $_SERVER['PHP_SELF'];
$fichero = basename($ruta);
 ?>
<table width="1020" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="518" height="40">&nbsp;</td>
    <td width="111" height="40" class="<?php if(($fichero=="index.php") or ($fichero=="operativos.php") or ($fichero=="charlas.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="index.php" class="<?php if(($fichero=="index.php") or ($fichero=="operativos.php") or ($fichero=="charlas.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Comunicados</a></td>
    <td width="1" height="40"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="121" height="40" class="<?php if(($fichero=="poliza.php") or ($fichero=="clinicas.php") or ($fichero=="planillas.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="poliza.php" class="<?php if(($fichero=="poliza.php") or ($fichero=="clinicas.php") or ($fichero=="planillas.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Póliza de seguro</a></td>
    <td width="1" height="40"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="99" height="40" class="<?php if($fichero=="beneficios.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="beneficios.php" class="<?php if($fichero=="beneficios.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Beneficios</a></td>
    <td width="1" height="40"><img src="../JPG/img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="121" height="40" class="Hora_Alto"><a href="catelesur.php"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('catelesur','','../../img/129_catelesur_106x40.jpg',1)"><img src="../../img/128_catelesur_106x40.jpg" name="catelesur" width="106" height="40" border="0" id="catelesur" /></a></td>
    <td width="47" height="40">&nbsp;</td>
  </tr>
</table>
