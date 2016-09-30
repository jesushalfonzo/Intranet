<?php include ('../../../../extras/connect.php');
$link=Conectarse();
$idvideo=$_GET["clx"];

$SQL="SELECT * FROM m_somostelesur WHERE m_somostelesur_id='$idvideo'";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_somostelesur_id=$row["m_somostelesur_id"];
$m_somostelesur_fecha=$row["m_somostelesur_fecha"];
$m_somostelesur_titulo=str_replace('"', "''", $row["m_somostelesur_titulo"]);
$m_somostelesur_foto=$row["m_somostelesur_foto"];
$m_somostelesur_archivo=$row["m_somostelesur_archivo"];
$m_somostelesur_estatus=$row["m_somostelesur_estatus"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function validador(){
    //valido el nombre
	validar=true;
    if (document.agregar.titulo.value.length==0){
       alert("Debe colocar un titulo obligatoriamente")
       document.agregar.titulo.focus()
	  
	    return false;
	   }
	 	     
  return validar;
	      
	}

  </script>
<script language="javascript" src="cal2.js">
/*
Xin's Popup calendar script- Xin Yang (http://www.yxscripts.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use
*/
</script>
<script language="javascript" src="cal_conf2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Cumpleañeros del mes</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function soloJPG(valor, campo){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById(campo).value='';
}
}

function soloFLV(valor, campo){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="FLV"&&subc!="flv"){
alert("Solo se admiten videos .flv");
document.getElementById(campo).value='';
}
}
</script>
</head>

<body>
<p><span class="etiquetas">Somos TeleSUR </span></p>	
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<form action="editar.php" name="agregar" method="post" enctype="multipart/form-data" onSubmit="return validador();">
<table width="735" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="188" class="etiquetas"><span class="etiquetas">Titulo: </span></td>
<td width="535" class="etiquetas"><input type="hidden" name="idvideo" id="idvideo" value="<?php echo $idvideo; ?>" /><input name="titulo" type="text" class="texto" value="<?php echo $m_somostelesur_titulo; ?>" id="titulo" size="84" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>

<tr>
  <td><span class="etiquetas">Foto Player (320 X 240):</span></td>
  
    <td>
	<? if ($m_somostelesur_foto!=''){ 
			$enlace3="../../../../../multimedia/videos/$m_somostelesur_foto";		
			 $putotamano=getimagesize($enlace3);				
			    }
		else {
		  $enlace3="";
		  }

	if ($m_somostelesur_foto!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=<? echo $putotamano[0]; ?>,height=<? echo $putotamano[1]; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_somostelesur_foto"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?>
	<input name="foto" type="file" id="foto" size="60" onChange="soloJPG(this, 'foto')" /> </td></tr>
  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Video (.flv) </span></td>
  
    <td>
		<? if ($m_somostelesur_archivo!=''){ 
			$enlace3="../../../../../multimedia/videos/$m_somostelesur_archivo";		
			 //$putotamano=getimagesize($enlace3);				
			    }
		else {
		  $enlace3="";
		  }

	if ($m_somostelesur_archivo!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=<? echo "100"; ?>,height=<? echo "100"; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_somostelesur_archivo"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?>
	<input type="file" name="archivo" id="archivo" size="60" onChange="soloFLV(this, 'archivo')"  /> </td></tr>
  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>

     <tr>
    <td class="etiquetas">Aprobar video: </td>
	<td><input type="checkbox" name="aprobar" value="ONN" <?php if($m_somostelesur_estatus=="A"){ echo 'checked="checked"';} ?>  /></td>
  </tr>
  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
