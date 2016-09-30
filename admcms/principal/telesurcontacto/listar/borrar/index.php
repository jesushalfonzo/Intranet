<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $idnoticia=$_GET["clx"];
	  $tirasqlborra="SELECT titulo FROM noticia where id = '$idnoticia'";
	  $resultado = mysql_query($tirasqlborra,$link);
	  $row = mysql_fetch_array($resultado);

	   $m_noticia_titulo = stripslashes($row ['titulo']);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Borrar NOTICIAS</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="515" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="515" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td class="alerta">Haz click en <span class="texto">Borrar</span> para eliminar definitivamente: </td>
      </tr>
    </table>
        <table width="515" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">
          <tr><form action="borrar.php" name="miform" method="post">
            <td bgcolor="#FFFFFF"><input name="id_nota" type="hidden" value="<? echo "$idnoticia"; ?>" />
             <? echo "$m_noticia_titulo"; ?> </td>
            <td width="50" align="center" bgcolor="#D4D0C8"><input name="borrar" type="submit" class="pequeno" value="Borrar" />
<!--Eliminar la sigueinte línea, es sólo para referencia
<a href="../index.html" target="principal"><span class="borrar">(*)</span></a>			--></td>
          </form></tr>
        </table></td>
  </tr>
</table>
</body>
</html>
