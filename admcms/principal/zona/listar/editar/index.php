<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Encuesta</title>
  <script src="../../agregar/convert.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
bkLib.onDomLoaded(nicEditors.allTextAreas);


//-->
</script>
<script>
function validar(){
    //valido el nombre
	 var opcion=document.form1.opciones_enc.value
	 //document.write(opcion);
	validar=true;
    if (document.form1.titulo_enc.value.length==0){
       alert("El campo pregunta No puede estar vacio")
       document.form1.titulo_enc.focus()
	  
	    return false;
	   }
	   
	   if (document.form1.opciones_enc.value.length==0){
       alert("La encuestas debe tener más de una opción")
       document.form1.opciones_enc.focus()

	        return false;
	   }
    
	   if (!/^([0-9])*$/.test(opcion)){
       alert("El cantidad de opciones debe estar expresado en números");
       document.form1.opciones_enc.focus()
        return false;
       }
	  
	    return validar;
    
	    }

    //valido la edad. tiene que ser entero mayor que 18
    
    //valido el interés
  </script>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>
<? 
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id_encuesta=$_GET["clx"];
$SQL_editar="SELECT * FROM m_tuzona WHERE m_tuzona_id='$id_encuesta'";
$QUERY_edit=mysql_query($SQL_editar, $linky);
$ROW_edit=mysql_fetch_array($QUERY_edit);
$m_tuzona_titulo=$ROW_edit["m_tuzona_titulo"];
$m_tuzona_imagen=$ROW_edit["m_tuzona_imagen"];
 ?>
<body>
<form name="form1" method="post" action="editar.php" onSubmit="return validar();" enctype="multipart/form-data">
<table width="821" height="23" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" bgcolor="#CCCCCC" class="etiquetas"><div align="center">Tu Zona </div></td>
</tr></table>
<table border="0" align="left" cellpadding="0" cellspacing="0">

<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr><td class="etiquetas" align="center">
<input type="hidden" name="id_encuesta" value="<? echo"$id_encuesta"; ?>" />

<tr><td class="etiquetas" colspan="2"><div align="center">Titulo de la encuesta:</div></td></tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<tr>
    <td colspan="2" align="center"><textarea name="titulo_enc" cols="50" rows="5"><? echo"$m_tuzona_titulo"; ?></textarea></td>
	</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>


<tr><td><table width="821" height="23" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" bgcolor="#CCCCCC" class="etiquetas"><div align="center">Opciones</div></td>
</tr></table></td></tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<? $SQL_opiones="SELECT * FROM r_tuzona_opciones WHERE r_tuzona_opciones_idzona='$id_encuesta' ORDER BY r_tuzona_opciones_id ASC"; 
   $i=1;
   $QUERY_opciones=mysql_query($SQL_opiones, $linky);
   $NUMERO=mysql_num_rows($QUERY_opciones);
   ?>
   <input type="hidden" name="numero_row" value="<? echo"$NUMERO"; ?>" />
   <? 
   while ($ROW_opciones=mysql_fetch_array($QUERY_opciones)){
   $opcion=$ROW_opciones["r_tuzona_opciones_opcion"];
?>
<tr><td class="etiquetas" align="center"><span class="etiquetas">Opción <?php echo $i; ?>:&nbsp;</span>
  
  <input name="opcion<?php echo $i; $i=$i+1;?>" type="text" size="40" value="<? echo"$opcion";?>" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
<? } ?>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>
 <tr>
     <td colspan="2">
       <div align="center"><span class="etiquetas">Imagen (141px X 121px):   </span>
	   
	   <? if ($m_tuzona_imagen!=''){ 
			$enlace3="../../../../../imagenes/zona/$m_tuzona_imagen";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_tuzona_imagen!='') {?>
    <a href="javascript:void(0)" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" ><? echo "$m_tuzona_imagen"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
	   
	   
	   
	   <br />
          <input type="file" name="imagen" size="70" />
          <br />
            <span class="alerta">Solo imagenes .jpg permitidas </span></div></td>
   </tr>
   </tr>
   <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
   </tr>
<tr><td colspan="2" align="center"><input type="submit" value="Actualizar" /></td></tr>
</table>
</form>
</body>
</html>