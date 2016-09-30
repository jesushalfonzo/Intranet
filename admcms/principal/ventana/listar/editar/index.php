<?php
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_ventanaemergente WHERE m_ventanaemergente_id='$id'";
$query=mysql_query($SQL, $linky);
$row=mysql_fetch_array($query);
$m_ventanaemergente_titulo=$row['m_ventanaemergente_titulo'];
$m_ventanaemergente_imagen=$row['m_ventanaemergente_imagen'];
$m_ventanaemergente_enlace=$row['m_ventanaemergente_enlace'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>

function validar(){

if(document.formulario.titulo.value==''){
	  alert('Debe colocar un titulo');
	  document.formulario.titulo.focus();
		
		return false;
	 
	
	}

		
}


</script>
<script type="text/javascript">
function soloSWF(valor){
var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
document.formulario.extension.value=subc;
if(subc!="JPG"&&subc!="jpg"&&subc!="swf"&&subc!="SWF"&&subc!="gif"&&subc!="GIF"){
alert("Tipo de archivo no permitido");
document.formulario.archivo.value='';
}
if(subc=="swf"){
document.formulario.enlace.disabled=true;
document.formulario.archivo.value='';
}
else {
document.formulario.enlace.disabled=false;
}
}

</script>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="formulario" method="post" enctype="multipart/form-data" action="guardar.php" onsubmit="return validar();">
<input type="hidden" name="id" value="<? echo"$id"; ?>" />
<input type="hidden" name="extension" value="" id="extension" />
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td width="424" class="etiquetas">Editar Ventana Emergente </td>
  </tr>
   <tr>
    <td><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
    <tr>
    <td><span class="etiquetas">Titulo</span><br /><input type="text" name="titulo" size="60" value="<? echo"$m_ventanaemergente_titulo"; ?>" /></td>
  </tr>
   <tr>
    <td><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
   <tr>
    <td><span class="etiquetas">Archivo: (656 X 480) <span class="alerta">(JPG, SWF, GIG)</span></span>: 
	 <? if ($m_ventanaemergente_imagen!=''){ 
			$enlace3="../../../../../multimedia/home/$m_ventanaemergente_imagen";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_ventanaemergente_imagen!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=303,height=203, top=300, left=150');" ><? echo "$m_ventanaemergente_imagen"; ?></a>
    <?
 		}
		else {
		   echo "<span class='etiquetas' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?><br /><input type="file" name="archivo" id="archivo" size="50" onChange="soloSWF(this)" /></td>
  </tr>
   <tr>
    <td><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
     <tr>
    <td><span class="etiquetas">Enlace </span><span class="alerta">(Solo para los jpg y gif)</span> <br />
      <input type="text" name="enlace" id="enlace" size="50" value="<?php echo $m_ventanaemergente_enlace; ?>" /></td>
  </tr>
   <tr>
    <td><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
   <tr>
    <td><div align="center">
      <input name="submit" type="submit" value="Actualizar" />
    </div></td>
  </tr>
   <tr>
    <td><img src="../../../../img/spc.gif" height="10" width="10" border="0" /></td>
  </tr>
</table>
</form>
</body>
</html>
