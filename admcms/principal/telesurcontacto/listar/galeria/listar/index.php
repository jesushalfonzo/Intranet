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
		$id_nota=$_GET["clx"];
	   $link=Conectarse();   
	   $tirasql="select m_galeria_id, m_galeria_foto_titulo, m_galeria_foto_archivo  from m_galeria_nota where m_galeria_nota_id='$id_nota'  order by m_galeria_id desc";
       $resultado=mysql_query($tirasql,$link);
	   $i="1"; 
	    $fotos_de_shit=mysql_num_rows($resultado);
	  if ($fotos_de_shit=='0'){
	  echo "<script language='JavaScript'>alert('NO existe una galeria de fotos para esta nota');</script>";
	  echo "<script language='JavaScript'>document.location.href='../../index.php';</script>";
	  }
  while ($row = mysql_fetch_array($resultado)){ 
 
	$id_foto=$row['m_galeria_id'];
	$titulo_foto=$row['	m_galeria_foto_titulo'];
	$archivo_foto=$row['m_galeria_foto_archivo'];
	
?>
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
    <tr>
    <td bgcolor="#FFFFFF" class="etiquetas"><? echo "$i"; ?> <img src="../../../../../../imagenes/galerias/<? echo"$archivo_foto"; ?>" width="164" height="92" border="0" />  </td>
      <td align="right" bgcolor="#FFFFFF" class="etiquetas"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
<input name="editar" type="submit" class="pequeno" id="editar" value="Editar"  onClick="TomarValor('<? echo "$id_foto";?>','Editar')" />
         </td>
          <td>
<input name="borrar" type="submit" class="pequeno" id="borrar" value="Borrar"  onClick="TomarValor('<? echo "$id_foto";?>','Eliminar')" />
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