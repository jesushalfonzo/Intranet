<? include('../../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_abreviados WHERE m_abreviados_id='$id'";
$query=mysql_query($SQL,$link);
$row=mysql_fetch_array($query);
$id=$row['m_abreviados_id'];
$nombre=$row['m_abreviados_nombre'];
$extension=$row['m_abreviados_numero'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Agregar extension</title>
</head>
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.departamento.value.length==0){
       alert("Debe agregar un nombre")
       document.myform.departamento.focus()
	  
	    return false;
	   }
	    if (document.myform.numero.value.length==0){
       alert("Debe agregar anu extension")
       document.myform.numero.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>
<body>
<form name="myform" action="editar.php" enctype="multipart/form-data" method="post" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">

<tr><td bgcolor="#CCCCCC"><span class="etiquetas">Agregar Extensiones</span></td></tr>

<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
</tr>
  <tr>
    <td ><span class="etiquetas">Nombre:</span><br />
	<input type="hidden" name="id" value="<? echo"$id"; ?>" />
  <input type="text" name="departamento" size="50" value="<? echo"$nombre"; ?>" /></td></tr>
  <tr>
    <td><span class="etiquetas">N&uacute;mero:</span><br />
    <input type="text" size="30" name="numero" value="<? echo"$extension"; ?>" /></td></tr>


  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>

  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Modificar"/>  
    </tr>
</table>
</form>
</body>
</html>