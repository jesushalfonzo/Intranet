<? include('../../../../extras/connect.php');
$link=Conectarse();
 $id=$_GET["clx"]; 
$SQL="SELECT * FROM tuvoz WHERE tuvoz_id='$id'";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$id=$row['tuvoz_id'];
$pregunta=$row['tuvoz_pregunta'];
$imagen=$row['tuvoz_imagenes'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Agregar Tu Voz</title>
</head>
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.pregunta.value.length==0){
       alert("No ha escrito la pregunta")
       document.myform.pregunta.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>
<body>
<form name="myform" action="editar.php" enctype="multipart/form-data" method="post" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<input type="hidden" name="id" value="<? echo"$id"; ?>" />


<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
</tr>
  <tr><td ><span class="etiquetas">Pregunta:</span><br /><textarea name="pregunta" rows="5" cols="60"><? echo"$pregunta"; ?></textarea></td></tr>


  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
    <tr><td><span class="etiquetas">Imagen (127 X 86 px):</span>(<span class="alerta">Solo archivos .jpg</span>)
  
  
   <? if ($imagen!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$imagen";						
			    }
		else {
		  $enlace3="";
		  }

	if ($imagen!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" class='etiquetas'><? echo "$imagen"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?>
  
<br /><input type="file" name="imagen" size="70" /></td></tr>
  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Actualizar"/>  
    </tr>
</table>
</form>
</body>
</html>