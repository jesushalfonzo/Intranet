<? include ('../../../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Perfiles</title>

<link href="../../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? 
		$id_pfotos=$_GET["clx"];
	   $link=Conectarse();   
	   $tirasql="select * from fotos_perfiles where id_perfil='$id_pfotos'  order by id_fotos desc";
       $resultado=mysql_query($tirasql,$link);
	   $i="1"; 
  while ($row = mysql_fetch_array($resultado)){ 
 
	 $foto_id=$row['id_fotos'];
	 $perfil_id=$row['id_perfil'];
     $foto_ruta=$row['ruta_imagen'];
	 $palabra1=$row['palabra_1'];
	 $palabra2=$row['palabra_2'];
	 $palabra3=$row['palabra_3'];
	 $alineacion_foto=$row['alineacion'];
?>
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
    <tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "Foto $i"; ?> <img src="../../../../../../imagenes/perfiles/<? echo"$foto_ruta"; ?>" width="25" height="25" border="0" />  </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$foto_id";?>','Editar')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$foto_id";?>','Eliminar')" />
</td>

        </tr>
      </table>
</td>
    </tr>
</table>
<hr align="left" width="515" size="1" noshade="noshade" />
<? $i=$i+1; } ?>
</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
	
		if (Accion=="Eliminar") {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
	
}
</script>