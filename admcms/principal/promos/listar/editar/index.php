<? include ('../../../../extras/connect.php');
$link=Conectarse();
$id_video=$_GET["clx"];
$SQL_listar="SELECT * FROM  m_videos_promos WHERE m_videos_promos_id='$id_video'";
$result = mysql_query($SQL_listar, $link);
$row=mysql_fetch_array($result);
$titulo_video=stripslashes ($row['m_videos_promos_titulo']);
$titulo_video = str_replace('"', "''", $titulo_video);
$archivo=$row['m_videos_promos_archivo'];
$imagen=$row['m_videos_promos_imagen'];

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
    if (document.formulario.titulo.value.length==0){
       alert("Debe ingresar el Titulo del video")
       document.formulario.titulo.focus()
	  
	    return false;
	   } 
	   
	  
    
  return validar;
	  
    
	}

//-->
</script>
<body topmargin="0">

<p class="etiquetas">Promociones en pantalla </p>

<form id="form1" name="formulario" method="post" action="guardar.php" onsubmit="return valida_envia();" enctype="multipart/form-data">
<input type="hidden" name="id_video" value="<? echo"$id_video"; ?>" />
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto"><span class="etiquetas">Titulodel video:
  </span>
  <input type="text" name="titulo" id="titulo" size="84" value="<? echo"$titulo_video"; ?>" /></td>
</tr>


<tr>
<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr>
<tr>
  <td class="texto"><span class="etiquetas">Video</span>(<span class="alerta">Solo archivos .flv</span>): 	   
	<? if ($archivo!='') {?>
    <a href="../../../../../multimedia/videos/<? echo"$archivo"; ?>" ><? echo "$archivo"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'><b>No hay archivo</b></span>";
		  
		}	
?><br />
    <input type="file" name="video" size="70" /></td>
</tr>
<tr>
<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr>
  <td class="texto"><span class="etiquetas">Imagen (127 X 86 px):</span>(<span class="alerta">Solo archivos .jpg</span>)
  
  
   <? if ($imagen!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$imagen";						
			    }
		else {
		  $enlace3="";
		  }

	if ($imagen!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" ><? echo "$imagen"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
  
<br />
  

    <input type="file" name="imagen" size="70" /></td>
</tr>
<tr><td class="texto"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr><td align="center"><input type="submit" value="Guardar"/>
</table>
</form>
</body>
</html>
