<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar informaciones</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="richtext_compressed.js"></script>
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
<script>
<!--
function valida_envia(){
    //valido el nombre
	validar=true;
    if (document.myform.titulo.value.length==0){
       alert("Es obligatorio agregar uin titulo")
       document.myform.titulo.focus()
	  
	    return false;
	   }
	   
	   if (document.myform.sumario.value.length==0){
       alert("Debe agregar un sumario para el home")
       document.myform.sumario.focus()

	        return false;
	   }
	    if (document.myform.imagen.value.length==0){
       alert("Debe Cargar una imagen")
       document.myform.imagen.focus()

	        return false;
	   }
    
    
  return validar;
	  
    
	}


//-->
</script>
</head>

<body><script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
updateRTEs();
//alert("Submitted value: "+document.myform.rte1.value) //alert submitted value
return true; //Set to false to disable form submission, for easy debugging.
}
initRTE("images/", "", "");
//-->
</script>
<form name="myform" action="agregar.php" enctype="multipart/form-data" method="post" onsubmit="return submitForm(), valida_envia();">
<table width="515" border="0" cellspacing="0" cellpadding="3">
<tr>
<td class="etiquetas"><span class="etiquetas">Titulo: 
  <input name="titulo" type="text" class="texto" id="titulo" size="70" />
</span></td>
</tr>


<tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr><td ><span class="etiquetas">Sumario:</span><br /><textarea name="sumario" rows="5" cols="60"></textarea></td></tr>
    <tr><td ><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr><td><span class="etiquetas">Contenido:</span><br /><script language="JavaScript" type="text/javascript">
<!--
//Usage: writeRichText(fieldname, html, width, height, buttons, readOnly)
writeRichText('contenido', 'Escribe aquí el contenido ...', 250, 200, true, false);
//-->
</script></td></tr>
  <tr><td ><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
<tr>
  <td><span class="etiquetas">Imagen (320 x 160 ):</span>
    
    <br />
    <input type="file" name="imagen" size="70" /> </td></tr>
  <tr><td><img src="../../../img/spc.gif" width="10" height="10" /></td></tr>
  <tr>
    <td align="center" class="texto"><input name="enviar" type="submit" class="etiquetas" id="enviar" value="Guardar"/>  </tr>
</table>
</form>
</body> 
</html>
