<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Acciones Información</title>
<link href="../../extras/estilos.css" rel="stylesheet" type="text/css" />
<? $mes=date("m"); ?>
</head>
<body topmargin=5 class="body">
  <table width="720" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td><span class="etiquetas">Cumpleañeros del mes / </span><span class="texto"><a href="../../contenidos/index.html" target="contenidos">Mostrar lista de contenidos </a></span></td>
    </tr>
  </table>
  <form name="form1" id="form1" action="../../principal/cumpleaneros/listar/index.php" method="post" target="principal"> <table width="720" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040">
    <tr>
      <td width="35%" height="39" bgcolor="#D4D0C8" class="texto">
	  
	  <table width="577" border="0" cellpadding="0" cellspacing="0">
	    <tr><td width="116">Seleccione la acción</td>
	    <td width="119"><img src="../../img/Crystal_Clear_app_restart.png" width="32" height="32" border="0" align="absmiddle" /></td>
	    <td width="45" style=" border-color:#000000; border-width:1px; border-style:solid;"><a href="../../principal/cumpleaneros/agregar/index.php" target="principal" title="Agregar Cumpleañero"><img src="../../img/Cruzmas20_1.png" width="20" height="20" hspace="18" border="0" /></a></td>
	    <td width="151" style="border-bottom-color:#000000; border-bottom-width:1px; border-bottom-style:solid; border-right-color:#000000; border-right-width:1px; border-right-style:solid; border-top-color:#000000; border-top-width:1px; border-top-style:solid;"><div style="margin-left:20px;">
          <select name="mes" class="pequeno">
            <option value="01" <? if($mes=='01'){ echo'selected="selected"';} ?>>Enero</option>
			<option value="02" <? if($mes=='02'){ echo'selected="selected"';} ?>>Febrero</option>
			<option value="03" <? if($mes=='03'){ echo'selected="selected"';} ?>>Marzo</option>
			<option value="04" <? if($mes=='04'){ echo'selected="selected"';} ?>>Abril</option>
			<option value="05" <? if($mes=='05'){ echo'selected="selected"';} ?>>Mayo</option>
			<option value="06" <? if($mes=='06'){ echo'selected="selected"';} ?>>Junio</option>
			<option value="07" <? if($mes=='07'){ echo'selected="selected"';} ?>>Julio</option>
			<option value="08" <? if($mes=='08'){ echo'selected="selected"';} ?>>Agosto</option>
			<option value="09" <? if($mes=='09'){ echo'selected="selected"';} ?>>Septiembre</option>
			<option value="10" <? if($mes=='10'){ echo'selected="selected"';} ?>>Octubre</option>
			<option value="11" <? if($mes=='11'){ echo'selected="selected"';} ?>>Noviembre</option>
			<option value="12" <? if($mes=='12'){ echo'selected="selected"';} ?>>Diciembre</option>
			
        </select>
      <input type="submit" name="Listar" value="Listar" class="pequeno" /></div></td>
	    </tr></table>
	  
	  
	  
	     
       
     <!-- <a href="../../principal/cumpleanos/listar/index.php" target="principal">Listar</a> --></td>
    </tr>
  </table>  </form>
</body>
</html>
