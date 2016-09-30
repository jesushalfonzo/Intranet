<? include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Encuesta</title>
<script>
function validar(){
    //valido el nombre
	 var opcion=document.form1.opciones_enc.value
	 //document.write(opcion);
	validar=true;
	   
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

<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="form1" method="post" action="respuestas.php" onSubmit="return validar();" enctype="multipart/form-data">
<table width="821" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td colspan="2" bgcolor="#CCCCCC" class="etiquetas"><div align="center">Tu Zona</div></td>
</tr></table>
<table width="434" border="0" align="center" cellpadding="0" cellspacing="0">

<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr><td class="etiquetas" colspan="2"><div align="center">Titulo de la encuesta:</div></td></tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr>
    <td colspan="2"><textarea name="titulo_enc" cols="50" rows="5"></textarea></td>
	</tr>
<tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
</tr>

<tr>
  <td width="126"  class="etiquetas">N&uacute;mero de opciones:</td>
   <td width="308"> <input name="opciones_enc" type="text" id="opciones_enc"></td></tr>

   <tr><td colspan="2"><img src="../../../img/spc.gif" width="10" height="10" border="0" /></td>
   </tr>
<tr><td colspan="2" align="center"><input type="submit" name="Submit" value="Agregar" class="pequeno"></td></tr>
</table>
    

</form>
</body>
</html>