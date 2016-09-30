<? 
include('../../../../../extras/connect.php');
$linky=Conectarse();
$id_foto=$_GET["clx"];
$SQL="SELECT * FROM m_galeria_fotos WHERE m_galeria_fotos_id='$id_foto'";
$QUERY=mysql_query($SQL, $linky);
$row=mysql_fetch_array($QUERY);
$m_galeria_fotos_imagen=$row['m_galeria_fotos_imagen'];
$m_galeria_fotos_leyenda=$row['m_galeria_fotos_leyenda'];
$m_galeria_fotos_idgaleria=$row['m_galeria_fotos_idgaleria'];
$m_galeria_fotos_imagenpeq=$row['m_galeria_fotos_imagenpeq'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Informacion de interes</title>
<script type="text/javascript">
//-->
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<link href="../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="editar.php" method="post" enctype="multipart/form-data" name="addfoto">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#CCCCCC"><span class="etiquetas">
	<input type="hidden" name="id_galeria" value="<? echo"$id_foto"; ?>" />
	<input type="hidden" name="id_general" value="<? echo"$m_galeria_fotos_idgaleria"; ?>" />
	Editar Foto</span></td>
   
  </tr>
  <tr><td><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">Foto Grande:</span> <? if ($m_galeria_fotos_imagen!=''){ 
			$enlace1="../../../../../../imagenes/foto_galerias/$m_galeria_fotos_imagen";
			    }
		else {
		  $enlace1="";
		  }
		  
	if ($m_galeria_fotos_imagen!='') {?>
        <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace1; ?>			','Foto','resizable=yes,width=370,height=205');" ><? echo "$m_galeria_fotos_imagen"; ?></a>
        <?
 		}
		else {
		  
		   echo "No hay archivo";
		   
		}	
?><br /><input type="file" name="foto" size="70" /></tr>
  <tr><td><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">Foto Home:</span> <? if ($m_galeria_fotos_imagenpeq!=''){ 
			$enlace1="../../../../../../imagenes/foto_galerias/$m_galeria_fotos_imagenpeq";
			    }
		else {
		  $enlace1="";
		  }
		  
	if ($m_galeria_fotos_imagenpeq!='') {?>
        <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace1; ?>			','Foto','resizable=yes,width=370,height=205');" ><? echo "$m_galeria_fotos_imagenpeq"; ?></a>
        <?
 		}
		else {
		  
		   echo "No hay archivo";
		   
		}	
?><br /><input type="file" name="foto_home" size="70" /></td></tr>
  <tr><td><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td valign="top"><span class="etiquetas">Foto Leyenda:</span><br /><div style="margin-left:0px;"><textarea name="leyenda" cols="50" rows="5"><? echo"$m_galeria_fotos_leyenda"; ?></textarea></div></td></tr>
   <tr><td><img src="../../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
    <tr><td align="center"><input type="submit" value="Actualizar" /></td></tr>
</table>

</form>
</body>
</html>