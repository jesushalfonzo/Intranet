<? include('../../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_extensiones WHERE m_extensiones_id='$id'";
$query=mysql_query($SQL,$link);
$row=mysql_fetch_array($query);
$id=$row['m_extensiones_id'];
$nombre=$row['m_extensiones_departamento'];
$extension=$row['m_extensiones_numero'];
$m_extensiones_idDep =$row['m_extensiones_idDep'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<title>Agregar extension</title>
</head>
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.departamento.value.length==0){
       alert("Debe agregar un nombre")
       document.myform.departamento.focus()
	  
	    return false;
	   }
	    if (document.myform.numero.value.length==0){
       alert("Debe agregar anu extension")
       document.myform.numero.focus()
	  
	    return false;
	   }
	      
    
  return validar;
	  
    
	}


//-->
</script>

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
<script src="ajax.js.php?ckl=<?php echo $m_extensiones_idDep; ?>"></script>
<body>
<form name="myform" action="editar.php" enctype="multipart/form-data" method="post" onsubmit="return valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">

<tr><td bgcolor="#CCCCCC"><span class="etiquetas">Agregar Extensiones</span></td></tr>

<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
</tr>
  <tr>
    <td ><span class="etiquetas">Departamento y/o Persona:</span><br />
	<input type="hidden" name="id" value="<? echo"$id"; ?>" />
  <input type="text" name="departamentoL" size="50" value="<? echo"$nombre"; ?>" /></td></tr>
  <tr><td><span class="etiquetas">Extension:</span><br /><input type="text" size="30" name="numero" value="<? echo"$extension"; ?>" /></td></tr>


  <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
<tr><td><table cellpadding="0" cellspacing="0" border="0">
 <tr>
  <td><span class="etiquetas" style="margin-right:20px;">Departamento:</span></td>
    <td><table width="490" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><div name="timediv" id="timediv" style="width:300px;"> </div></td>
                      <td><a href="#" onclick="NewWindow('agregar_departamento.php','categoria','370','200','no'); return false;" class="Negro_12px_bold"   title="Agregar nuevo departamento" style="text-decoration:none;"> <img src="../../../../img/+catego_1.png" width="21" height="21" border="0" align="absmiddle" title="Agregar Nueva Categoría" /></a></td>
                    </tr>
        </table>
	</td></tr>
</table>
</td></tr>
<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Modificar"/>  
    </tr>
</table>
</form>
</body>
</html>