<?php
$ruta = $_SERVER['PHP_SELF'];
$fichero = basename($ruta);
 ?>


<table width="1020" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="668" height="28">&nbsp;</td>
    <td width="60" height="26" class="<?php if(($fichero=="index.php") or ($fichero=="identificacion.php") or ($fichero=="participar.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="index.php" class="<?php if(($fichero=="index.php") or ($fichero=="identificacion.php") or ($fichero=="participar.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Trivia</a></td>
    <td width="1" height="26"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="118" height="26" class="<?php if(($fichero=="agenda.php") or ($fichero=="detalle_agenda.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="agenda.php" class="<?php if(($fichero=="agenda.php") or ($fichero=="detalle_agenda.php")){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;">Agenda cultural</a></td>
    <td width="1" height="26"><img src="../../img/28_linea_1x11.jpg" width="1" height="11" /></td>
    <td width="132" height="26" class="<?php if($fichero=="guia.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>"><a href="guia.php" class="<?php if($fichero=="guia.php"){ echo "Arial_12_bold_azul";} else { echo "Arial_12_bold_negro"; } ?>" style="text-decoration:none;"> Guía de servicios</a></td>
    <td width="40" height="26">&nbsp;</td>
  </tr>
</table>