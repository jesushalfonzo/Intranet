<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $idinf=$_GET["clx"];
	  $tirasql="SELECT * FROM m_boletin where m_boletin_id = '$idinf'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $m_boletin_titulo= str_replace('"', "''",($row ['m_boletin_titulo']));
	  $m_boletin_imagen_1=$row["m_boletin_imagen_1"];
	  $m_boletin_imagen_2=$row["m_boletin_imagen_2"];
	  $m_boletin_date=$row["m_boletin_date"];
	 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Información</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">

<p><span class="etiquetas">TeleSUR Boletin </span></p>

<form id="form1" name="formulario" method="post" action="modificar.php"  enctype="multipart/form-data"><!-- -->
<span class="etiquetas">Titulo</span><br />
<input type="text" name="titulo" id="titulo" size="85" value="<? echo"$m_boletin_titulo"; ?>" />
<input type="hidden" name="id" value="<? echo"$idinf"; ?>" />


<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr><td>&nbsp;</td></tr>


<tr>
  <td bgcolor="#999999"><span class="etiquetas"><span class="etiquetas">Imagen primera cara( 548 px de ancho)</span> <? if ($m_boletin_imagen_1!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$m_boletin_imagen_1";		
			 $putotamano=getimagesize($enlace3);				
			    }
		else {
		  $enlace3="";
		  }

	if ($m_boletin_imagen_1!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=<? echo $putotamano[0]; ?>,height=<? echo $putotamano[1]; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_boletin_imagen_1"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?><br />
  <input type="file" name="imagen_1" size="70" id="img" /> </td>
</tr>


<tr><td bgcolor="#999999"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr>
  <td bgcolor="#999999"><span class="etiquetas"><span class="etiquetas">Imagen segunda cara( 548 px de ancho)</span><? if ($m_boletin_imagen_2!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$m_boletin_imagen_2";	
			 $putotamano=getimagesize($enlace3);					
			    }
		else {
		  $enlace3="";
		  }

	if ($m_boletin_imagen_2!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=<? echo $putotamano[0]; ?>,height=<? echo $putotamano[1]; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_boletin_imagen_2"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?><br />
  <input type="file" name="imagen_2" size="70" id="img" /> </td>
</tr>
<tr><td bgcolor="#999999"><img src="../../../../img/spc.gif" width="10" height="10" border="0"/></td>
</tr>
<tr><td align="center"><input type="submit" value="Actualizar"/>
</table>
</form>
</body>
</html>
