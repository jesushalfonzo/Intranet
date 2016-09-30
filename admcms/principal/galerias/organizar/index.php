<?
include('../../../extras/connect.php');
$linky=Conectarse();
$SQL="SELECT * FROM m_galerias WHERE m_galeria_estatus='A' AND m_gelerias_activa_home <>'S' ORDER BY `m_galeria_id` DESC";
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
    <td><span class="etiquetas">Organizar Galer&iacute;as en la pagina principal</span></td>
   
  </tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td></tr>
  <tr><td><span class="etiquetas">1&deg;: </span>  <br />
   <? 
		//$consultilla="SELECT m_galeria_titulo FROM m_galerias WHERE m_galeria_estatus='A' AND m_gelerias_activa_home ='S'";
		$consultilla="SELECT * FROM m_galerias WHERE m_galeria_estatus='A' AND m_gelerias_activa_home ='S'";
	    $rconsultilla = mysql_query($consultilla,$linky);
	    $rowconsultilla = mysql_fetch_array($rconsultilla);
	    $totalfilas = mysql_num_rows($rconsultilla);

	    //echo "total: " . $totalfilas;

	  $m_galeria_id_vigente=$rowconsultilla["m_galeria_id"];
	  //echo "id: ". $rowconsultilla["m_galeria_id"];
	  $m_galeria_titulo_vigente=$rowconsultilla["m_galeria_titulo"];

		?>
   <li class="etiquetas"><? if ($m_galeria_id_vigente!='0'){ echo stripslashes($m_galeria_titulo_vigente);}?></li><br />
      <dd class="etiquetas">Sustituir por: <br />
        <select name="galeria_cambiar" class="texto" size="">
               <option value="" selected>Lista de galer&iacute;as - seleccione s&oacute;lo para cambiar ...</option>
		<? 
			   $result = mysql_query($SQL,$linky);
			  	while ($fila = mysql_fetch_array($result)){
				$m_galeria_id=$fila['m_galeria_id'];
				$m_galeria_titulo=stripslashes($fila['m_galeria_titulo']);
				$m_galeria_fecha=$fila['m_galeria_fecha'];
				
				
		?>

        <option value="<? echo "$m_galeria_id";?>"><? echo $m_galeria_titulo;?></option>
			   
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
