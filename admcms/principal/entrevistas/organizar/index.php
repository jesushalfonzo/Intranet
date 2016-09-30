<?
include('../../../extras/connect.php');
$linky=Conectarse();
$SQL="SELECT m_entrevistas_titulo, m_entrevistas_fecha_aprobado, m_entrevistas_id  FROM m_entrevistas WHERE m_entrevistas_aprobado='SI'";
$query=mysql_query($SQL, $linky);


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../../extras/estilos.css" rel="stylesheet"/>
</head>

<body>
<form id="form1" name="form1" method="post" action="organizar.php">
<table width="515" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><span class="etiquetas">Organizar Entrevistas en la pagina principal</span></td>
   
  </tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">1&deg;: </span>
   <? 
		$consultilla="SELECT m_entrevistas_id, m_entrevistas_titulo, t_entrevistas_home_id, t_entrevistas_home_id_entrevista FROM m_entrevistas, t_entrevistas_home WHERE t_entrevistas_home_id_entrevista=m_entrevistas_id LIMIT 0,1";
	    $rconsultilla = mysql_query($consultilla,$linky);
	    $rowconsultilla = mysql_fetch_array($rconsultilla);
	    $totalfilas = mysql_num_rows($rconsultilla);

	  $m_entrevista_id_vigente=$rowconsultilla["m_entrevistas_id"];
	  $m_entrevista_titulo_vigente=stripslashes ($rowconsultilla["m_entrevistas_titulo"]);

		?>
   <li class="etiquetas"><? if ($m_entrevista_id_vigente!='0'){ echo stripslashes($m_entrevista_titulo_vigente);}?></li><br />
      <dd class="etiquetas">Sustituir por: <br />
        <select name="entrevista_cambiar" class="texto" size="">
               <option value="" selected>Lista de entrevistas - seleccione s&oacute;lo para cambiar ...</option>
		<? 
			   $result = mysql_query($SQL,$linky);
			  	while ($fila = mysql_fetch_array($result)){
				$m_entrevistas_id=$fila['m_entrevistas_id'];
				$m_entrevistas_titulo=stripslashes($fila['m_entrevistas_titulo']);
				$m_entrevistas_fecha_aprobado=strtotime($fila['m_entrevistas_fecha_aprobado']);
				$m_entrevistas_fecha_aprobado=date ('d-m-Y', $m_entrevistas_fecha_aprobado)
				
		?>

        <option value="<? echo "$m_entrevistas_id";?>"><? echo $m_entrevistas_titulo .' / '. $m_entrevistas_fecha_aprobado; ?></option>
			   
			   <? } ?>
      </select>
      </dd>
  
  
  </td></tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
   <tr><td align="center"><input type="submit" name="Actualizar" value="Actualizar" /></td></tr>
    <tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>

</table>

</form>
</body>
</html>
