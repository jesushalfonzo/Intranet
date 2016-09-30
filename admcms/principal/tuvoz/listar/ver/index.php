<? include ('../../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Informacion de interes</title>

<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="687" border="0" cellpadding="3" cellspacing="1" bgcolor="#404040" class="texto">
<? $id=$_GET["clx"];
	   $link=Conectarse();   
	   $tirasql="select * from m_tuvoz where m_tuvoz_pregunta_id='$id' order by m_tuvoz_id desc";
       $resultado=mysql_query($tirasql,$link); 
      while ($row = mysql_fetch_array($resultado)){ 
     $m_tuvoz_id=$row['m_tuvoz_id'];
     $m_tuvoz_respuesta=$row['m_tuvoz_respuesta'];
	 $m_tuvoz_status=$row['m_tuvoz_status'];
?>
  <tr>
    <td width="481" bgcolor="#FFFFFF"><? echo stripslashes($m_tuvoz_respuesta);?> </td>
    <td width="64" align="center" bgcolor="#D4D0C8"><input name="accion2" type="submit" class="pequeno" value="<? if ($m_tuvoz_status=='SI'){ echo"Desactivar";} else { echo"Activar";} ?>" onclick="TomarValor('<? echo "$m_tuvoz_id";?>','<? if ($m_tuvoz_status=='SI'){ echo"Desactivar";} else { echo"Activar";} ?>','<? echo $id;?>')"/></td>

	
  </tr>


  <? } ?>
</table>

</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion,general){

		//document.getElementById("txtcodigo").value= codigo;
		window.location = "desactivar/index.php?clx="+codigo +"&acc="+Accion +"&gene="+general+""; 
	}
	
	

</script>