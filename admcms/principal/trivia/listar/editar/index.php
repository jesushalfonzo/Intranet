<? include ('../../../../extras/connect.php');
$linky=Conectarse();
$id_master=$_GET["clx"];
$SQL="SELECT * FROM m_trivia WHERE m_trivia_id=$id_master";
$query=mysql_query($SQL, $linky);
$row=mysql_fetch_array($query);
$titulo_trivia=$row['m_trivia_titulo'];
$m_trivia_aprobado=$row['m_trivia_aprobado'];
$m_trivia_imagen=$row['m_trivia_imagen'];
$m_trivia_home=$row['m_trivia_home'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Editar la Trivia</title>
</head><style type="text/css">
.oculto{
display:none;
}

</style>
<script type="text/javascript">
function getDataServer(url, vars){
     var xml = null;
     try{
         xml = new ActiveXObject("Microsoft.XMLHTTP");
     }catch(expeption){
         xml = new XMLHttpRequest();
     }
     xml.open("GET",url + vars, false);
     xml.send(null);
     if(xml.status == 404) alert("Url no valida");
     return xml.responseText;
}
</script>

<script type="text/javascript">

function actualizar_correcta(id, idmas){
    var error = getDataServer("servidor.php","?id="+id+"&idmas="+ idmas +"");
   if(error){
        alert('Actualizada respuesta correcta');
    }
	
}

function borra_pregunta(idpregunta,campo){

 var resp = confirm("¿Esta seguro que desea eliminar esta pregunta?");
	 if(resp) { 
    var error = getDataServer("servidor_borrar.php","?id="+idpregunta+"");

   if(error){
        alert('Pregunata borrada');
		document.getElementById(campo).innerHTML="";
    }
	}
}


function borrar_opcion(idopcion,campo2){

 var respuesta = confirm("¿Esta seguro que desea eliminar esta opción?");
	 if(respuesta) { 
    var errores = getDataServer("borrar_opcion.php","?id="+idopcion+"");

   if(errores){
        alert('Opción borrada');
		//alert(campo2);
		document.getElementById(campo2).innerHTML="";
    }
	}
}
</script>

<body>
<form id="formulario" name="formulario" method="post" action="editar.php" enctype="multipart/form-data">
<table width="577" border="0" cellpadding="0" cellspacing="0">
<tr><td width="569">
<input type="text" name="titulo_trivia" size="80" class="etiquetas" value="<? echo"$titulo_trivia"; ?>" />
<input type="hidden" name="id_trivia" value="<? echo"$id_master"; ?>" />
</td></tr>
<tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>
<tr>
  <td ><span class="etiquetas">Imagen interna: (310 X 270)</span>

<? if ($m_trivia_imagen!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$m_trivia_imagen";		
			 $putotamano=getimagesize($enlace3);				
			    }
		else {
		  $enlace3="";
		  }

	if ($m_trivia_imagen!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=<? echo $putotamano[0]; ?>,height=<? echo $putotamano[1]; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_trivia_imagen"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?><br />
<input type="file" name="image" size="70" />


</td></tr>
<tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>

<tr>
  <td ><span class="etiquetas">Imagen Home: (470 X 140)</span>

<? if ($m_trivia_home!=''){ 
			$enlace4="../../../../../multimedia/imagenes/$m_trivia_home";		
			 $putotamano=getimagesize($enlace4);				
			    }
		else {
		  $enlace3="";
		  }

	if ($m_trivia_home!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace4; ?>	','Foto Nota','resizable=yes,width=<? echo $putotamano[0]; ?>,height=<? echo $putotamano[1]; ?>, top=300, left=150');" class='etiquetas'><? echo "$m_trivia_home"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;' class='etiquetas'>No hay archivo</span>";
		  
		}	
?><br />
<input name="image_home" type="file" id="image_home" size="70" />


</td></tr>
<tr><td align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>

<tr><td bgcolor="#CCCCCC" align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>
<tr><td bgcolor="#CCCCCC" align="center"><span class="etiquetas">Preguntas asociadas</span></td></tr>
<tr><td bgcolor="#CCCCCC" align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>

<tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>
<?
$SSQL="SELECT *FROM m_trivia_pregunta WHERE m_trivia_pregunta_idtrivia='$id_master'";
$Squery=mysql_query($SSQL, $linky);
$numero_pre=mysql_num_rows($Squery);
?>
<input type="hidden" name="numero_pregunta<? echo"$i"; ?>" value="<? echo"$numero_pre"; ?>" />
<?
$i=1;
while ($Srow=mysql_fetch_array($Squery)){
//$m_trivia_pregunta_texto=$Srow['m_trivia_pregunta_texto'];
$m_trivia_pregunta_texto=str_replace('"',"''", $Srow["m_trivia_pregunta_texto"]);
$m_trivia_pregunta_id=$Srow['m_trivia_pregunta_id'];

 ?>
 
 
 <tr><td>
 
 
 
 
 
<div id="limpiar<? echo $m_trivia_pregunta_id; ?>">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="578"><span class="alerta"><? echo"$i"; ?>) - </span> <span class="etiquetas">
<input type="text" name="pregunta<? echo"$i"; ?>" value="<? echo"$m_trivia_pregunta_texto"; ?>" size="70" />
<input type="hidden" name="id_pregunta<? echo"$i"; ?>" value="<? echo"$m_trivia_pregunta_id"; ?>" />
<img src="flechas.png" width="30" height="29" align="absmiddle" /><a href="#" onclick="borra_pregunta('<? echo"$m_trivia_pregunta_id"; ?>', 'limpiar<? echo $m_trivia_pregunta_id; ?>');"><img src="borra.png" width="16" height="16" border="0" title="Borrar Pregunta" /></a></span></td>
</tr>
<tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>

<?
$SSSQL="SELECT *FROM r_trivia_pregunata_opc WHERE r_trivia_pregunata_opc_idpregunta='$m_trivia_pregunta_id'";
//echo"$SSSQL";
$SSquery=mysql_query($SSSQL, $linky);
$k=1;
$numero=mysql_num_rows($SSquery);
while ($SSrow=mysql_fetch_array($SSquery)){
//$r_trivia_pregunata_opc_text=$SSrow['r_trivia_pregunata_opc_text'];
$r_trivia_pregunata_opc_text=str_replace('"',"''", $SSrow["r_trivia_pregunata_opc_text"]);
$r_trivia_pregunata_opc_id=$SSrow['r_trivia_pregunata_opc_id'];
$r_trivia_pregunata_opc_correcta=$SSrow['r_trivia_pregunata_opc_correcta'];
 ?>



<tr>

<td align="right"><div id="Op<? echo"$r_trivia_pregunata_opc_id"; ?>"><span class="alerta"> - </span> <span class="etiquetas">
<input type="file" name="archivos[]" size="50" class="oculto" />
<input type="text" name="opcion[]" value="<? echo"$r_trivia_pregunata_opc_text"; ?>" size="50" />
<input type="hidden" name="opcionid[]" value="<? echo"$r_trivia_pregunata_opc_id"; ?>" />

<input name="correcta<? echo"$m_trivia_pregunta_id"; ?>" type="radio" value="<? echo $r_trivia_pregunata_opc_id; ?>" <? if($r_trivia_pregunata_opc_correcta=='SI'){ echo'checked="checked"'; } ?> onclick="actualizar_correcta(this.value, '<? echo"$m_trivia_pregunta_id"; ?>');" /><img src="flechas.png" width="30" height="29" align="absmiddle" /><a href="#" onclick="borrar_opcion('<? echo"$r_trivia_pregunata_opc_id"; ?>', 'Op<? echo $r_trivia_pregunata_opc_id; ?>');"><img src="borra.png" width="16" height="16" border="0" title="Borrar Opción" /></a>
</span></div></td></tr>

<tr><td  align="center"><img src="../../../../img/spc.gif" height="<? if($k < $numero){ echo"10";} else { echo"30"; } ?>" width="10" /></td></tr>
<? 
$k++;
}?>
 <tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr></table></div>

<?
$i++; 
} ?>






</td></tr>
<tr><td  align="center"><input type="submit" value="Actualizar" name="boton" /><? if($m_trivia_aprobado=='NO'){ ?><input type="submit" value="Actualizar / Aprobar" name="boton" /><? } ?><input type="submit" value="Agregar pregunta" name="boton" /></td></tr>
<tr><td  align="center"><img src="../../../../img/spc.gif" height="10" width="10" /></td></tr>
</table>
</form>


</body>
</html>
