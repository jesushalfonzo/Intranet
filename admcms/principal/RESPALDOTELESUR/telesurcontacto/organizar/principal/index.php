<? include ('../../../../extras/connect.php');
	  $link=Conectarse();
	  $soulsismine="select id, contenido, titulo,sumario, fecha,imagen  from noticia order by id desc"

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Secci&oacute;n / Organizar NOTICIAS</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="iprincipal.php" name="myform" method="post">
<table width="515" border="0" cellpadding="3" cellspacing="0" class="texto">
  <tr>
    <td class="texto">Notas desplegadas en la p&aacute;gina <span class="etiquetas">Principal</span></td>

  </tr>
  <tr>
    <td class="texto"><span class="etiquetas">1&deg; nota: </span>  <br />
      <br />
      	        <? 
		$consultilla="SELECT  noticia.id,titulo,fecha FROM  home_principal, noticia where  id_home=1 and noticia.id =  home_principal.id_nota";
	  $rconsultilla = mysql_query($consultilla,$link);
	  $rowconsultilla = mysql_fetch_array($rconsultilla);
	  $totalfilas = mysql_num_rows($rconsultilla);

	  $m_noticia_id_vigente=$rowconsultilla["id"];
	  $m_noticia_titulo_vigente=$rowconsultilla["titulo"];
	  $m_noticia_fechacreacion=$rowconsultilla['fecha'];	
	  $m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
	  $fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);

		?>

	  <li class="etiquetas"><? if ($m_noticia_id_vigente!='0'){ echo stripslashes($m_noticia_titulo_vigente);echo " - $fecha";}?></li><br />
      <dd>Sustituir por: <br />
        <select name="nota1" class="texto" size="">
               <option value="" selected>Lista de las Notas de TeleSUR en Contacto - seleccione sólo para cambiar ...</option>
		<? 
			  $result = mysql_query($soulsismine,$link);
			  	while ($fila = mysql_fetch_array($result)){
				$m_noticia_id=$fila['id'];
				$m_noticia_titulo=stripslashes($fila['titulo']);
				$m_noticia_fechacreacion=$fila['fecha'];	
				$m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
				$fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);
				$tituloyfecha= $m_noticia_titulo. " &iota;    " .	$fecha
				
		?>

        <option value="<? echo "$m_noticia_id";?>"><? echo $tituloyfecha;?></option>
			   
			   <? } ?>
                                  </select>
      </dd>
      <p></p></td>
  </tr>
  <tr>
    <td class="texto"><span class="etiquetas">2&deg; nota: </span>  <br />
      <br />
      	        <? 
		$consultilla="SELECT  noticia.id,titulo,fecha FROM  home_principal, noticia where  id_home=2 and noticia.id =  home_principal.id_nota";
	  $rconsultilla = mysql_query($consultilla,$link);
	  $rowconsultilla = mysql_fetch_array($rconsultilla);
	  $totalfilas = mysql_num_rows($rconsultilla);

	  $m_noticia_id_vigente=$rowconsultilla["id"];
	  $m_noticia_titulo_vigente=$rowconsultilla["titulo"];
	  $m_noticia_fechacreacion=$rowconsultilla['fecha'];	
	  $m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
	  $fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);

		?>

	  <li class="etiquetas"><? if ($m_noticia_id_vigente!='0'){ echo stripslashes($m_noticia_titulo_vigente);echo " - $fecha";}?></li><br />
      <dd>Sustituir por: <br />
        <select name="nota2" class="texto" size="">
              <option value="" selected>Lista de las Notas de TeleSUR en Contacto - seleccione sólo para cambiar ...</option>
		<? 
			  $result = mysql_query($soulsismine,$link);
			  	while ($fila = mysql_fetch_array($result)){
				$m_noticia_id=$fila['id'];
				$m_noticia_titulo=stripslashes($fila['titulo']);
				$m_noticia_fechacreacion=$fila['fecha'];	
				$m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
				$fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);
				$tituloyfecha= $m_noticia_titulo. " &iota;    " .	$fecha
				
		?>

        <option value="<? echo "$m_noticia_id";?>"><? echo $tituloyfecha;?></option>
			   
			   <? } ?>
      </select>
      </dd>
      <p></p></td>
  </tr>
  <tr>
    <td class="texto"><span class="etiquetas">3&deg; nota: </span>  <br />
      <br />
      	        <? 
		$consultilla="SELECT  noticia.id,titulo,fecha FROM  home_principal, noticia where  id_home=3 and noticia.id =  home_principal.id_nota";
	                  
	  $rconsultilla = mysql_query($consultilla,$link);
	  $rowconsultilla = mysql_fetch_array($rconsultilla);
	  $totalfilas = mysql_num_rows($rconsultilla);

	  $m_noticia_id_vigente=$rowconsultilla["id"];
	  $m_noticia_titulo_vigente=$rowconsultilla["titulo"];
	  $m_noticia_fechacreacion=$rowconsultilla['fecha'];	
	  $m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
	  $fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);

		?>

	  <li class="etiquetas"><? if ($m_noticia_id_vigente!='0'){ echo stripslashes($m_noticia_titulo_vigente);echo " - $fecha";}?></li><br />
      <dd>Sustituir por: <br />
        <select name="nota3" class="texto" size="">
              <option value="" selected>Lista de las Notas de TeleSUR en Contacto - seleccione sólo para cambiar ...</option>
		<? 
			  $result = mysql_query($soulsismine,$link);
			  	while ($fila = mysql_fetch_array($result)){
				$m_noticia_id=$fila['id'];
				$m_noticia_titulo=stripslashes($fila['titulo']);
				$m_noticia_fechacreacion=$fila['fecha'];	
				$m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
				$fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);
				$tituloyfecha= $m_noticia_titulo. " &iota;    " .	$fecha
				
		?>

        <option value="<? echo "$m_noticia_id";?>"><? echo $tituloyfecha;?></option>
			   
			   <? } ?>
      </select>
      </dd>
      <p></p></td>
  </tr>
  <tr>
    <td class="texto"><span class="etiquetas">4&deg; nota: </span>  <br />
      <br />
      	        <? 
		$consultilla="SELECT  noticia.id,titulo,fecha FROM  home_principal, noticia where  id_home=4 and noticia.id =  home_principal.id_nota";
	  $rconsultilla = mysql_query($consultilla,$link);
	  $rowconsultilla = mysql_fetch_array($rconsultilla);
	  $totalfilas = mysql_num_rows($rconsultilla);

	  $m_noticia_id_vigente=$rowconsultilla["id"];
	  $m_noticia_titulo_vigente=$rowconsultilla["titulo"];
	  $m_noticia_fechacreacion=$rowconsultilla['fecha'];	
	  $m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
	  $fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);

		?>

	  <li class="etiquetas"><? if ($m_noticia_id_vigente!='0'){ echo stripslashes($m_noticia_titulo_vigente);echo " - $fecha";}?></li><br />
      <dd>Sustituir por: <br />
        <select name="nota4" class="texto" size="">
               <option value="" selected>Lista de las Notas de TeleSUR en Contacto - seleccione sólo para cambiar ...</option>
		<? 
			  $result = mysql_query($soulsismine,$link);
			  	while ($fila = mysql_fetch_array($result)){
				$m_noticia_id=$fila['id'];
				$m_noticia_titulo=stripslashes($fila['titulo']);
				$m_noticia_fechacreacion=$fila['fecha'];	
				$m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
				$fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);
				$tituloyfecha= $m_noticia_titulo. " &iota;    " .	$fecha
				
		?>

        <option value="<? echo "$m_noticia_id";?>"><? echo $tituloyfecha;?></option>
			   
			   <? } ?>
      </select>
      </dd>
      <p></p></td>
  </tr>
  <tr>
    <td class="texto"><span class="etiquetas">5&deg; nota: </span>  <br />
      <br />
      	        <? 
		$consultilla="SELECT  noticia.id,titulo,fecha FROM  home_principal, noticia where  id_home=5 and noticia.id =  home_principal.id_nota";
	  $rconsultilla = mysql_query($consultilla,$link);
	  $rowconsultilla = mysql_fetch_array($rconsultilla);
	  $totalfilas = mysql_num_rows($rconsultilla);

	  $m_noticia_id_vigente=$rowconsultilla["id"];
	  $m_noticia_titulo_vigente=$rowconsultilla["titulo"];
	  $m_noticia_fechacreacion=$rowconsultilla['fecha'];	
	  $m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
	  $fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);

		?>

	  <li class="etiquetas"><? if ($m_noticia_id_vigente!='0'){ echo stripslashes($m_noticia_titulo_vigente);echo " - $fecha";}?></li><br />
      <dd>Sustituir por: <br />
        <select name="nota5" class="texto" size="">
               <option value="" selected>Lista de las Notas de TeleSUR en Contacto - seleccione sólo para cambiar ...</option>
		<? 
			  $result = mysql_query($soulsismine,$link);
			  	while ($fila = mysql_fetch_array($result)){
				$m_noticia_id=$fila['id'];
				$m_noticia_titulo=stripslashes($fila['titulo']);
				$m_noticia_fechacreacion=$fila['fecha'];	
				$m_noticia_fechacreacion=strtotime($m_noticia_fechacreacion);
				$fecha = date("d/m/Y H:i", $m_noticia_fechacreacion);
				$tituloyfecha= $m_noticia_titulo. " &iota;    " .	$fecha
				
		?>

        <option value="<? echo "$m_noticia_id";?>"><? echo $tituloyfecha;?></option>
			   
			   <? } ?>
      </select>
      </dd>
      <p></p></td></tr>
  

  <tr>
    <td align="right" class="texto"><!--<input name="Submit" type="submit" class="texto" value="Previsualizar" />-->
    <input name="Submit2" type="submit" class="texto" value="Aceptar cambios" /></td>
  </tr>
</table>
</form>
</body>
</html>
