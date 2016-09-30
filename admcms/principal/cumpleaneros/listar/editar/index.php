<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $id=$_GET["clx"];
	  $tirasql="SELECT * FROM m_cumpleaneros WHERE  m_cumpleaneros_id  = '$id'";
	  $result = mysql_query($tirasql,$link);
	  $row = mysql_fetch_array($result);

	  $id=$row["m_cumpleaneros_id"];
	  $nombre=$row["m_cumpleaneros_nombre"];
	  $m_cumpleaneros_dia=$row["m_cumpleaneros_dia"];
	  $departamento=$row["m_cumpleaneros_direccion"];
	  $m_cumpleaneros_mes=$row["m_cumpleaneros_mes"];
	  $m_cumpleaneros_foto=$row["m_cumpleaneros_foto"];
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
	   
	    if (document.agregar.foto.value.length==0){
       alert("Debe cargar una foto")
       document.agregar.foto.focus()
	  
	    return false;
	   }  
	       if (document.agregar.fecha.value.length==0){
       alert("Debe elegir la fecha")
       document.agregar.fecha.focus()
	  
	    return false;
	   } 
    
  return validar;
	  
    
	}

//-->
</script>
</head>

<body>
<form action="modificar.php" name="agregar" method="post" enctype="multipart/form-data">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="texto" colspan="2"><span class="etiquetas">Cumpleañeros del mes<br /><br />

<input type="hidden" name="id" value="<? echo "$id";?>">
</span></td>
</tr>
<tr>
<td width="136" class="etiquetas"><span class="etiquetas">Nombre completo: &nbsp;</span></td> 
<td width="367" class="texto"><input name="nombre" type="text" class="texto" value="<? echo "$nombre";?>" size="70" /></td>
</tr>
<tr><td colspan="2"><img src="../../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
    <td class="texto"><span class="etiquetas">Fecha: </span> </td>
      <td class="texto"><table width="162" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="81" valign="top" class="etiquetas">D&iacute;a</td>
    <td width="81" valign="top" class="etiquetas">Mes</td>
  </tr>
<tr><td valign="top"><select name="dia">
<option value="1" <?php if($m_cumpleaneros_dia==1){ echo 'selected="selected"'; } ?> >01</option>
<option value="2" <?php if($m_cumpleaneros_dia==2){ echo 'selected="selected"'; } ?>>02</option>
<option value="3" <?php if($m_cumpleaneros_dia==3){ echo 'selected="selected"'; } ?>>03</option>
<option value="4" <?php if($m_cumpleaneros_dia==4){ echo 'selected="selected"'; } ?>>04</option>
<option value="5" <?php if($m_cumpleaneros_dia==5){ echo 'selected="selected"'; } ?>>05</option>
<option value="6" <?php if($m_cumpleaneros_dia==6){ echo 'selected="selected"'; } ?>>06</option>
<option value="7" <?php if($m_cumpleaneros_dia==7){ echo 'selected="selected"'; } ?>>07</option>
<option value="8" <?php if($m_cumpleaneros_dia==8){ echo 'selected="selected"'; } ?>>08</option>
<option value="9" <?php if($m_cumpleaneros_dia==9){ echo 'selected="selected"'; } ?>>09</option>
<option value="10" <?php if($m_cumpleaneros_dia==10){ echo 'selected="selected"'; } ?>>10</option>
<option value="11" <?php if($m_cumpleaneros_dia==11){ echo 'selected="selected"'; } ?>>11</option>
<option value="12" <?php if($m_cumpleaneros_dia==12){ echo 'selected="selected"'; } ?>>12</option>
<option value="13" <?php if($m_cumpleaneros_dia==13){ echo 'selected="selected"'; } ?>>13</option>
<option value="14" <?php if($m_cumpleaneros_dia==14){ echo 'selected="selected"'; } ?>>14</option>
<option value="15" <?php if($m_cumpleaneros_dia==15){ echo 'selected="selected"'; } ?>>15</option>
<option value="16" <?php if($m_cumpleaneros_dia==16){ echo 'selected="selected"'; } ?>>16</option>
<option value="17" <?php if($m_cumpleaneros_dia==17){ echo 'selected="selected"'; } ?>>17</option>
<option value="18" <?php if($m_cumpleaneros_dia==18){ echo 'selected="selected"'; } ?>>18</option>
<option value="19" <?php if($m_cumpleaneros_dia==19){ echo 'selected="selected"'; } ?>>19</option>
<option value="20" <?php if($m_cumpleaneros_dia==20){ echo 'selected="selected"'; } ?>>20</option>
<option value="21" <?php if($m_cumpleaneros_dia==21){ echo 'selected="selected"'; } ?>>21</option>
<option value="22" <?php if($m_cumpleaneros_dia==22){ echo 'selected="selected"'; } ?>>22</option>
<option value="23" <?php if($m_cumpleaneros_dia==23){ echo 'selected="selected"'; } ?>>23</option>
<option value="24" <?php if($m_cumpleaneros_dia==24){ echo 'selected="selected"'; } ?>>24</option>
<option value="25" <?php if($m_cumpleaneros_dia==25){ echo 'selected="selected"'; } ?>>25</option>
<option value="26" <?php if($m_cumpleaneros_dia==26){ echo 'selected="selected"'; } ?>>26</option>
<option value="27" <?php if($m_cumpleaneros_dia==27){ echo 'selected="selected"'; } ?>>27</option>
<option value="28" <?php if($m_cumpleaneros_dia==28){ echo 'selected="selected"'; } ?>>28</option>
<option value="29" <?php if($m_cumpleaneros_dia==29){ echo 'selected="selected"'; } ?>>29</option>
<option value="30" <?php if($m_cumpleaneros_dia==30){ echo 'selected="selected"'; } ?>>30</option>
<option value="31" <?php if($m_cumpleaneros_dia==31){ echo 'selected="selected"'; } ?>>31</option>

</select>

</td><td valign="top"><select name="mes">
<option value="1" <?php if($m_cumpleaneros_mes==1){ echo 'selected="selected"'; } ?>>Enero</option>
<option value="2" <?php if($m_cumpleaneros_mes==2){ echo 'selected="selected"'; } ?>>Febrero</option>
<option value="3" <?php if($m_cumpleaneros_mes==3){ echo 'selected="selected"'; } ?>>Marzo</option>
<option value="4" <?php if($m_cumpleaneros_mes==4){ echo 'selected="selected"'; } ?>>Abril</option>
<option value="5" <?php if($m_cumpleaneros_mes==5){ echo 'selected="selected"'; } ?>>Mayo</option>
<option value="6" <?php if($m_cumpleaneros_mes==6){ echo 'selected="selected"'; } ?>>Junio</option>
<option value="7" <?php if($m_cumpleaneros_mes==7){ echo 'selected="selected"'; } ?>>Julio</option>
<option value="8" <?php if($m_cumpleaneros_mes==8){ echo 'selected="selected"'; } ?>>Agosto</option>
<option value="9" <?php if($m_cumpleaneros_mes==9){ echo 'selected="selected"'; } ?>>Septiembre</option>
<option value="10" <?php if($m_cumpleaneros_mes==10){ echo 'selected="selected"'; } ?>>Octubre</option>
<option value="11" <?php if($m_cumpleaneros_mes==11){ echo 'selected="selected"'; } ?>>Noviembre</option>
<option value="12" <?php if($m_cumpleaneros_mes==12){ echo 'selected="selected"'; } ?>>Diciembre</option>

</select></td></tr>
</table></td>
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
   
      <? if ($m_cumpleaneros_foto!=''){ 
			$enlace3="../../../../../multimedia/fotoscumple/$m_cumpleaneros_foto";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_cumpleaneros_foto!='') {?>
    <a href="javascript:void(0)" class="etiquetas" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=150,height=130, top=300, left=150');" ><? echo "$m_cumpleaneros_foto"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?>
   
   <br /><input type="file" name="foto" size="50"  /></td></tr>
    <tr><td colspan="2"><img src="../../../../../images/spacer.gif" width="1" height="1" /></td>
    </tr>
  <tr>
    <td align="center" class="texto" colspan="2"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Actualizar"/>  </tr>
</table>
</form>



</body>
</html>
