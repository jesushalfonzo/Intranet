<? include ('../../../../extras/connect.php');?>
<?php
$link=Conectarse();
$id=$_GET["clx"];
$SQL="SELECT * FROM m_elementos_home WHERE m_elementos_home_id='$id'";
$query=mysql_query($SQL, $link);
$row=mysql_fetch_array($query);
$m_elementos_home_id=$row["m_elementos_home_id"];
$m_elementos_home_titulo=$row["m_elementos_home_titulo"];
$m_elementos_home_archivo=$row["m_elementos_home_archivo"];
$m_elementos_home_link=$row["m_elementos_home_link"];
$m_elementos_home_target=$row["m_elementos_home_target"];
$m_elementos_home_fecha=$row["m_elementos_home_fecha"];
$m_elementos_home_tipo=$row["m_elementos_home_tipo"];
$m_elementos_home_activo=$row["m_elementos_home_activo"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDITAR</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.agregar.titulo.value.length==0){
       alert("Debe ingresar el titulo")
       document.agregar.titulo.focus()
	  
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
function soloJPG(valor){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById("archivo").value='';
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
if(subc!="SWF"&&subc!="swf"){
alert("Solo se admiten archivos .swf");
document.getElementById("archivo1").value='';
return false;
}
}
</script>
</head>

<body>
<p><span class="etiquetas">Editar elemento para el home </span></p>	
<tr><td colspan="2">&nbsp;</td>
</tr>
<form action="agregar.php" name="agregar" method="post" enctype="multipart/form-data" onsubmit="return valida_envia();">
<input type="hidden" name="idelemento" id="idelemento" value="<?php echo $m_elementos_home_id; ?>" />
<input type="hidden" name="tipo" id="tipo" value="<?php echo $m_elementos_home_tipo;  ?>" />
<table width="730" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="111" class="etiquetas"><span class="etiquetas">Titulo: </span></td>
<td width="607" class="etiquetas"><input name="titulo" type="text" value="<?php echo $m_elementos_home_titulo; ?>" class="texto" id="nom" size="50" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
  


  <tr><td valign="top" colspan="2">
  <?php if($m_elementos_home_tipo=="jpg"){ ?>
  <div id="JPG" style="display:<?php if($m_elementos_home_tipo=="jpg"){ echo "block;"; } else { echo "none;"; } ?>">
  <table width="519" border="0" cellpadding="0" cellspacing="0">
   <tr>
     <td width="194"><div class="etiquetas" style="width:120px;">Imagen (596 X410):</div></td>
     <td width="325" > <? if ($m_elementos_home_archivo!=''){ 
			$enlace3="../../../../../multimedia/home/$m_elementos_home_archivo";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_elementos_home_archivo!='') {?>
    <a href="javascript:void(0)" class="etiquetas" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=596,height=370, top=300, left=150');" ><? echo "$m_elementos_home_archivo"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	

?>
   
   <br />
     <input type="file" name="archivo" id="archivo" size="40"  onChange="soloJPG(this)" /></td></tr>
    <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
	
	
	  <tr>
	    <td class="etiquetas">Enlace:</td>
	    <td><input name="link" type="text" class="texto" id="link" value="<?php echo $m_elementos_home_link; ?>" size="50" /></td></tr>
	  
	    <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
		<tr>
	    <td class="etiquetas">Cargar:</td>
	    <td><select name="target" id="target">
		<option value="_self" <?php if($m_elementos_home_target=="_self"){ ?>selected="selected" <?php } ?>>Misma página</option>
		<option value="_blank" <?php if($m_elementos_home_target=="_blank"){ ?>selected="selected" <?php } ?>>Página en blanco</option>
		</select>
		</td></tr></table>
  </div>
  <?php  } ?>
  <?php if($m_elementos_home_tipo=="swf"){ ?>
    <div id="SWF" style="display:<?php if($m_elementos_home_tipo=="swf"){ echo "block;"; } else { echo "none;"; } ?>">
  <table width="520" border="0" cellpadding="0" cellspacing="0">
   <tr>
     <td width="50%"><div class="etiquetas" style="width:120px;">SWF  (596 X 410):</div></td>
     <td > <? if ($m_elementos_home_archivo!=''){ 
			$enlace3="../../../../../multimedia/home/$m_elementos_home_archivo";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_elementos_home_archivo!='') {?>
    <a href="javascript:void(0)" class="etiquetas" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=596,height=370, top=300, left=150');" ><? echo "$m_elementos_home_archivo"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
   
   <br />
     <input type="file" name="archivo" id="archivo1" size="30"  onChange="soloSWF(this)" /></td></tr>
    <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
</table>
  </div>
   <?php  } ?>
  </td></tr>
		  <tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>
  </tr>
</table>
</form>



</body>
</html>
