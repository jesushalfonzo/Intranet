<?
include ('../../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];


$SQL="SELECT m_galeria_titulo from m_galerias WHERE m_galeria_id='$id'";
$query=mysql_query($SQL, $link);
$fetch=mysql_fetch_array($query);
$titulo=$fetch['m_galeria_titulo'];


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar fotos</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" />
<style type="text/css">
<!--
.style1 {color: #999999}
-->
</style>
</head>

<body>
<table width="329" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="etiquetas" bgcolor="#CCCCCC"><a href="agregar.php?ckl=<? echo"$id"; ?>" class="style1">Agregra foto</a></td>
  </tr>
  <tr><td bgcolor="#CCCCCC"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
   <tr><td bgcolor="#CCCCCC"><span class="etiquetas">Galería: <? echo"$titulo"; ?></span></td></tr>
    <tr><td><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
	
	<?
	$SSL="SELECT * FROM m_galeria_fotos WHERE m_galeria_fotos_idgaleria='$id' ORDER BY m_galeria_fotos_id DESC";
	//echo"$SSL";
	$SSQUERY=mysql_query($SSL, $link);
	$SSnumero=mysql_num_rows($SSQUERY);
	while ($SSrow=mysql_fetch_array($SSQUERY)){
	$m_galeria_fotos_id=$SSrow['m_galeria_fotos_id'];
	$m_galeria_fotos_imagen=$SSrow['m_galeria_fotos_imagen'];
	$m_galeria_fotos_leyenda=$SSrow['m_galeria_fotos_leyenda'];
	$m_galeria_fotos_imagenpeq=$SSrow['m_galeria_fotos_imagenpeq'];
	 ?>
<tr><td><table width="515" border="0" cellpadding="3" cellspacing="1" class="texto" bgcolor="#404040">
    <tr>
    <td width="128" bgcolor="#FFFFFF" class="etiquetas"><div align="center"><? echo "$i"; ?> <img src="../../../../../imagenes/foto_galerias/<? echo"$m_galeria_fotos_imagenpeq"; ?>" width="116" height="77" border="0" />  </div></td>
      <td width="372" align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$m_galeria_fotos_id";?>','Editar', '<? echo"$id"; ?>')" />         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$m_galeria_fotos_id";?>','Eliminar', '<? echo"$id"; ?>')" /></td>
        </tr>
      </table></td>
    </tr>
</table></td></tr>

<? } ?>

<? if($SSnumero==0){
 ?>
 <tr>
   <td><span class="etiquetas">No existen fotos agregadas a esta galería</span></td>
 </tr>
 <? } ?>
</table>

</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion,general){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
	
		if (Accion=="Eliminar") {
		window.location = "borrar/index.php?clx=" + codigo + "&general=" + general +"";//&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		
}
</script>
