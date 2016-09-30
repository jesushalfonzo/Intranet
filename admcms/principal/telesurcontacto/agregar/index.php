<?php include ('../../../extras/connect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar TeleSUR en Contacto</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
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
</head>

<body topmargin="0">
<form name="myform" method="post" enctype="multipart/form-data" action="noticia.php" onsubmit="return submitForm();"><!-- -->

<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
updateRTEs();
//alert("Submitted value: "+document.myform.rte1.value) //alert submitted value
return true; //Set to false to disable form submission, for easy debugging.
}
initRTE("images/", "", "");
//-->
</script>



  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto"><span class="etiquetas">T&iacute;tulo</span><br />
        <input name="titulo_nota" type="text" id="titulo_nota" size="84" /></td>
    </tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
	<tr>
      <td width="180" class="texto"><span class="etiquetas">Fecha </span><br />
      <input name="fecha_nota" type="text" id="fecha_nota" value="<? echo date("d/m/y", time());?>" size="16" /></td></tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td>
  </tr>
  </table>
</div>


  <table width="515" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td class="texto"><span class="etiquetas"><a name="sumario" id="sumario"></a>Sumario para el Home</span>


<br />
<textarea name="sumario_nota" cols="64" rows="10" id="sumario_nota"></textarea></td>
    </tr>
   <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td>
   </tr>
    <tr>
      <td class="texto">

<br />




<script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('rte1', 'Escribe aquí el contenido ...', 300, 250, true, false);
//-->
</script>


            </td>
    </tr>
  </table>







  <table width="500" border="0" cellspacing="0" cellpadding="3">
    <tr><td><img src="../../../../images/up.gif" width="9" height="5" /></td>
    </tr>
	<tr>
      <td class="texto"><span class="etiquetas">Foto (350x300) </span><br />
          <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
		  <input name="foto_0_nota" type="file"  size="68" />    
</td>
    </tr>
    <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td>
    </tr>
	<tr>
      <td class="texto"><span class="etiquetas">Foto leyenda</span><br />
          <textarea name="leyenda_0_nota" cols="64" rows="2" id="leyenda_nota"></textarea></td>
    </tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td>
	</tr>
	<tr><td class="texto"><span class="etiquetas">Autor</span><br />
	<input type="text" name="autor" id="autor" size="86" /></td></tr>
	<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td>
	</tr>
	<tr>
      <td align="center" class="texto">
<input type="submit" value="Enviar nota" />
</td>
    </tr>
  </table>


    
  </table>

  
</div>

</form>

</body>
</html>
