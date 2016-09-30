<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $id=$_GET["clx"];
	 $tirasql="SELECT * FROM m_nuevos_ingresos WHERE  m_nuevos_ingresos_id  = '$id'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $id=$row["m_nuevos_ingresos_id"];
	  $nombre=$row["m_nuevos_ingresos_nombre"];
	  $m_nuevos_ingresos_iddep =$row["m_nuevos_ingresos_iddep"];
	  $departamento=$row["m_nuevos_ingresos_iddep"];
	  $m_nuevos_ingresos_fecha=$row["m_nuevos_ingresos_fecha"];
	  $m_nuevos_ingresos_foto =$row["m_nuevos_ingresos_foto"];
	  $m_nuevos_ingresos_cargo =$row["m_nuevos_ingresos_cargo"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar Efemérides</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/JavaScript">
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>

<script type="text/javascript">
refreshdiv();
</script>
<script src="ajax.js.php?ckl=<?php echo $departamento; ?>"></script>

<script type="text/javascript">
function soloJPG(valor){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById("foto").value='';
return false;
}
}
</script>


<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.agregar.nombre.value.length==0){
       alert("Debe ingresar el nombre")
       document.agregar.nombre.focus()
	  
	    return false;
	   } 
	    
	       if (document.agregar.cargo.value.length==0){
       alert("Debe elegir la fecha")
       document.agregar.cargo.focus()
	  
	    return false;
	   } 
    
  return validar;
	  
    
	}

//-->
</script>
</head>

<body>
<form action="modificar.php" name="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto" colspan="2"><span class="etiquetas">Nuevos ingresos<br /><br />

<input type="hidden" name="id" value="<? echo "$id";?>">
</span></td>
</tr>
<tr>
<td width="136" class="etiquetas"><span class="etiquetas">Nombre completo: &nbsp;</span></td> 
<td width="367" class="texto"><input name="nombre" type="text" class="texto" value="<? echo "$nombre";?>" size="70" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Cargo: </span> </td>
      <td class="texto"><input type="text" name="cargo" size="50" value="<?php echo $m_nuevos_ingresos_cargo; ?>" /></td>
</tr>

<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Departamento:</span></td>
    <td><table width="484" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><div name="timediv" id="timediv" style="width:300px;"> </div></td>
                      <td><a href="#" onclick="NewWindow('agregar_departamento.php','categoria','370','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nueva categoria" style="text-decoration:none;"> <img src="../../../../img/+catego_1.png" width="21" height="21" border="0" align="absmiddle" title="Agregar Nueva Categoría" /></a></td>
                    </tr>
        </table>
	</td></tr>
  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
   <tr><td colspan="2"><span class="etiquetas">Foto (100 X 100):</span>
   
      <? if ($m_nuevos_ingresos_foto!=''){ 
			$enlace3="../../../../../multimedia/ingresos/$m_nuevos_ingresos_foto";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_nuevos_ingresos_foto!='') {?>
    <a href="javascript:void(0)" class="etiquetas" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" ><? echo "$m_nuevos_ingresos_foto"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
   
   <br /><input type="file" name="foto" size="50" onChange="soloJPG(this)" /></td></tr>
    <tr><td colspan="2"><img src="../../../../../images/spacer.gif" width="1" height="1" /></td>
    </tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Actualizar"/>  </tr>
</table>
</form>



</body>
</html>
