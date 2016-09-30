<? include ('../../../../../extras/connect.php');
$link=Conectarse();
$id_nota=$_GET["clx"];
$tira_nota="SELECT titulo FROM noticia WHERE id='$id_nota'";
$query_nota=mysql_query($tira_nota, $link);
$fetch_nota=mysql_fetch_array($query_nota);
$titulo_mesmo=$fetch_nota['titulo'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UAgregar Galeria</title>
<script>
function valida_foto(){
    //valido el nombre
	validar=true;
    if (document.myform.foto_archivo.value.length==0){
       alert("No hay foto seleccionada")
       document.myform.foto_archivo.focus()
	  
	    return false;
	   }
	 	     
  return validar;
	      
	}

  </script>
<link href="../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" width="515">
<form name="myform" action="agrega_f.php" method="post" enctype="multipart/form-data"  onSubmit="return valida_foto();">
<tr><td class="etiquetas">Foto galeria</td></tr>
<tr><td>
<img src="../../../../../../images/spc.gif" width="10" height="10" border="0" /><input type="hidden" name="id_nota" id="id" value="<? echo"$id_nota";?>" />
</td></tr>


<tr>
  <td><span class="etiquetas">Titulo de la nota</span><br />
    <input type="text" name="titulo_nota" value="<? echo"$titulo_mesmo"; ?>" size="70" readonly="yes"/></td></tr>
	<!--<tr><td><img src="../../../../../../images/spc.gif" width="10" height="10" border="0" /></td></tr>
	<tr><td><span class="etiquetas">Titulo de la foto</span><br /><input type="text" size="70" name="titulo_foto" id="titlle" /></td></tr>-->
	<tr><td><img src="../../../../../../images/spc.gif" width="10" height="10" border="0" /></td></tr>
	<tr>
	  <td><span class="etiquetas">Foto archivo</span><br />
	    <input type="file" name="foto_archivo" size="60" /></td></tr>
		<tr><td><img src="../../../../../../images/spc.gif" width="10" height="10" border="0" /></td></tr>
		<tr><td><span class="etiquetas">Foto leyenda</span><br /><textarea name="foto_leyenda" cols="54" rows="2" id="leyenda"></textarea></td></tr>
		<tr><td><img src="../../../../../../images/spc.gif" width="10" height="10" border="0" /></td></tr>
		<tr><td align="center"><input type="submit" name="enviar" value="Agregar foto" /></td></tr>
</form></table>

</body>
</html>
