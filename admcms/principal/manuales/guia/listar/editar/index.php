<? include ('../../../../extras/connect.php');?>
<?  
      $id=$_GET["clx"];
	  $link=Conectarse();
	  $SQL_listar="SELECT * FROM  m_guia_telesur WHERE m_guia_telesur_id='$id'";
      $result = mysql_query($SQL_listar, $link);
	  $row=mysql_fetch_array($result);
	  $m_guia_telesur_nombre=$row['m_guia_telesur_nombre'];
	  $m_guia_telesur_clase=$row['m_guia_telesur_clase'];
	  $m_guia_telesur_telefono=$row['m_guia_telesur_telefono'];
	  $m_guia_telesur_direccion=$row['m_guia_telesur_direccion'];
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />

</head>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.formulario.nombre.value.length==0){
       alert("Debe ingresar el nombre del establecimiento")
       document.formulario.nombre.focus()
	  
	    return false;
	   } 
	   
	    if (document.formulario.clase.value=='seleccione'){
       alert("Debe elegir la clase")
       document.formulario.clase.focus()
	  
	    return false;
	   }  
    
  return validar;
	  
    
	}

//-->
</script>
<body topmargin="0">

<p class="etiquetas">Promociones en pantalla </p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return valida_envia();" enctype="multipart/form-data">


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto"><span class="etiquetas">Nombre:
  </span>
  <input type="text" name="nombre" id="nombre" size="84" value="<? echo $m_guia_telesur_nombre; ?>" /> <input type="hidden" name="id" value="<? echo"$id"; ?>" /></td>
 
</tr>


<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr><td class="texto"><span class="etiquetas">Clase:</span><br /><select name="clase">
  <option  value="seleccione">Seleccione</option>
  <option value="banco" <? if($m_guia_telesur_clase=='banco'){ echo'selected="selected"'; } ?>>Agencias Bancarias</option>
  <option value="delivery" <? if($m_guia_telesur_clase=='delivery'){ echo'selected="selected"'; } ?>>Comida Delivery</option>
  <option value="entretenimiento" <? if($m_guia_telesur_clase=='entretenimiento'){ echo'selected="selected"'; } ?>>Entretenimiento</option>
  <option value="farmacia" <? if($m_guia_telesur_clase=='farmacia'){ echo'selected="selected"'; } ?>>Farmacia</option>
  <option value="otros" <? if($m_guia_telesur_clase=='otros'){ echo'selected="selected"'; } ?>>Otros</option>
  
</select></td></tr>



<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr>
  <td class="texto"><span class="etiquetas">Telefono(s):
  </span><br />
    <input type="text" name="telefonos" id="telesonos" size="40" value="<? echo"$m_guia_telesur_telefono"; ?>" /></td>
</tr>

<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr>
  <td class="texto"><span class="etiquetas">Direcci&oacute;n:
  </span><br />
  <input type="text" name="direccion" size="84" value="<? echo"$m_guia_telesur_direccion"; ?>" /></td>
</tr>
<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr><td align="center"><input type="submit" value="Guardar"/>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
