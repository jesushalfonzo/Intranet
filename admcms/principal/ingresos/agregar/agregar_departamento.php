
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>TeleSUR - Aplicativo - Consultor&iacute;a Jur&iacute;dica</title>
 
<style type="text/css">
<!--
.Estilo6 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight:bold; }
.Estilo7 {color: #000000; font-weight: bold; font-style: italic; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.scroll {
     width:300px;;
     height:50px;
     background-color:#F2F2F2;
     overflow:auto;
	 font-size: 11px;
}
.flotante {
  background: beige;
  border: solid 1px black;
  float: left;
  width:200px;
  position: fixed;
  top: 110px;
  left: 30px;
  padding: 3px;
  visibility:hidden;
  font-size:9px;
}

-->
</style>
<script type="text/javascript">
function isNumberKey(evt,elem) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 44 || charCode > 58 || charCode==45 || charCode==46 || charCode==47 || charCode==44)){
        return false;
    }
    
 
 if (elem.value.length >=11){
            elem.value= elem.value.substr(0,11)
        }
}


function validar_envia(){
validar=true;
	  if (document.formulario_inicio.nombre.value.length==0){
       alert("Debe ingresar el nombre del departamento")
       document.formulario_inicio.nombre.focus()
	  
	    return false;
	 
	 
	}
		 
		return validar;
		  }
</script>
</head>


<body>
<form method="post" name="formulario_inicio" id="formulario_inicio" action="guardardep.php" onsubmit="return validar_envia();">
<br />

<table width="295" border="0" align="center">
  <tr bgcolor="#FF0000">
    <td height="25" bgcolor="#006699" colspan="2"><div align="center" class="Estilo6" >Agregar Nuevo departamento </div></td>
    </tr>
  <tr>  	 
    <td width="101" height="39">


	  <div align="right"><span class="Estilo7">Nombre</span>:      </div></td>
	<td width="184">
	<input name="nombre" type="text" id="nombre" size="30" maxlength="100">	</td>
    </tr>
	 
	  
	<tr><td colspan="2"><div align="center">
	  <input type="image" border="1" name="button" value="guardar" width="30" height="30" style="color: #fff; background-image:url(../../../img/shade.png); padding: 5px; background-position: bottom; font-weight:bold;"  src="../../../img/guradar_grande2.png" alt="Guardar... " title="Guardar... " />
	</div></td></tr>
</table>
  <br />

</form>


	

</body>
</html>




