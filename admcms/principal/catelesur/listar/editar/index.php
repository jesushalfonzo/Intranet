<? include ('../../../../extras/connect.php');
$linky=Conectarse();
$ckl=$_GET["clx"];
$SQL="SELECT * FROM m_catelesur WHERE m_catelesur_id ='$ckl'";
$query=mysql_query($SQL, $linky);
$row=mysql_fetch_array($query);
$m_catelesur_fecha =$row["m_catelesur_fecha"];
$m_catelesur_titulo =$row["m_catelesur_titulo"];
$m_catelesur_contenido =$row["m_catelesur_contenido"];
$m_catelesur_foto =$row["m_catelesur_foto"];
$m_catelesur_leyenda =$row["m_catelesur_leyenda"];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar TeleSUR en Contacto</title>
<link href="../../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#LayerAuxiliar {
	position:absolute;
	width:540px;
	z-index:2;
	background-color: #FFFFFF;
	visibility: hidden;
	left: 0;
}
-->
</style>

<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
<script src="ckeditor/ckeditor/_samples/sample.js" type="text/javascript"></script>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_changeProp(objName,x,theProp,theValue) { //v6.0
  var obj = MM_findObj(objName);
  if (obj && (theProp.indexOf("style.")==-1 || obj.style)){
    if (theValue == true || theValue == false)
      eval("obj."+theProp+"="+theValue);
    else eval("obj."+theProp+"='"+theValue+"'");
  }
}

//-->
</script>

<script type="text/javascript">
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.titulo_nota.value.length==0){
       alert("Debe ingresar un titulo")
       document.myform.titulo_nota.focus()
	  
	    return false;
	   } 
	   
	 
    
  return validar;
	  
    
	}

//-->
</script>

<script type="text/javascript">
function soloJPG(valor){

var src = valor.value;
var log = src.length;
var an = log - 3;
var subc= src.substring(an,log);
if(subc!="JPG"&&subc!="jpg"&&subc!="jpeg"){
alert("Solo se admiten imagenes .jpg");
document.getElementById("foto_0_nota").value='';
return false;
}
}
</script>
</head>

<body topmargin="0">
<form name="myform" method="post" enctype="multipart/form-data" action="agregar.php" onsubmit="return valida_envia();">





  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto"><span class="etiquetas">T&iacute;tulo</span><br />
        <input name="titulo_nota" type="text" id="titulo_nota" size="50" value="<?php echo $m_catelesur_titulo; ?>" />
		<input type="hidden" name="idnota" value="<?php echo $ckl; ?>" />
		</td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
    </tr>
	<tr><td valign="top"><textarea cols="50" id="editor1" name="editor1" rows="4" class="cajaTexto" ><?php echo $m_catelesur_contenido; ?></textarea>
<script type="text/javascript">
			//<![CDATA[
CKEDITOR.replace( 'editor1',
    { 
        toolbar : 'MyToolbar'
    });

			</script></td></tr>
  
  </table>
</div>


  







  <table width="500" border="0" cellspacing="0" cellpadding="3">
    <tr><td><img src="../../../../../images/spacer.gif" width="1" height="1" /></td>
    </tr>
	<tr>
      <td class="texto"><span class="etiquetas">Foto (350 X 300) </span>
   
      <? if ($m_catelesur_foto!=''){ 
			$enlace3="../../../../../multimedia/imagenes/$m_catelesur_foto";						
			    }
		else {
		  $enlace3="";
		  }

	if ($m_catelesur_foto!='') {?>
    <a href="javascript:void(0)" class="etiquetas" onclick="MyWindow = window.open(' <? echo $enlace3; ?>	','Foto Nota','resizable=yes,width=350,height=300, top=300, left=150');" ><? echo "$m_catelesur_foto"; ?></a>
    <?
 		}
		else {
		   echo "<span class='style1' style='margin-left:12px;'>No hay archivo</span>";
		  
		}	
?><br />
          <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
		  <input name="foto_0_nota" id="foto_0_nota" type="file"  size="40" onChange="soloJPG(this)" />    
</td>
    </tr>
    <tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
    </tr>
	<tr>
      <td class="texto"><span class="etiquetas">Foto leyenda</span><br />
          <textarea name="leyenda_0_nota" cols="64" rows="2" id="leyenda_nota"><?php echo $m_catelesur_leyenda; ?></textarea></td>
    </tr>
	<tr><td><img src="../../../../img/spc.gif" width="10" height="10" /></td>
	</tr>

	<tr>
      <td align="center" class="texto">
<input type="submit" value="Guardar" />
</td>
    </tr>
  </table>


    
  </table>

  
</div>

</form>

</body>
</html>
