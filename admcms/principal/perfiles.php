<? $ubicacion="canal"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR _ Intranet _ Perfiles</title>
<link href="css/cascadas.css" rel="stylesheet" type="text/css" />
<script language="javascript">

/*
Auto center window script- Eric King (http://redrival.com/eak/index.shtml)
Permission granted to Dynamic Drive to feature script in archive
For full source, usage terms, and 100's more DHTML scripts, visit http://dynamicdrive.com
*/

var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}

</script>
<style type="text/css">

<!--
body {
	background:#FFFFFF url("image/azul_1x707.jpg") top left repeat-x fixed;
	}
-->
</style>
</head>

<body onload="animate();">
 <table width="800" height="600" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col" valign="top"><table width="800" cellspacing="0" cellpadding="0">
      <tr>
        <th width="10"  class="border_left" valign="top"><div align="left"><img src="image/spacer.gif" width="10" height="10"  border="0"/></div></th>
        <th scope="col" width="780" height="600" valign="top"><div align="left">
          <table width="780" cellspacing="0" cellpadding="0">
            <tr>
              <th scope="col" width="780"><img src="image/spacer.gif" width="5" height="5" border="0" /></th>
              </tr>
              <tr>
              <td width="780" height="88" valign="top"><? include('cabecera.php'); ?></td>
              </tr>
           
            <tr>
              <td width="780" height="6"><img src="image/spacer.gif" width="6" height="6" border="0"/></td>
              </tr>
            <tr>
              <td width="780"><table width="780" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table cellspacing="0" cellpadding="0">
                     <tr>
                  <th background="image/Barra_azul_780.gif" scope="col" height="23" width="780"><div align="left" style="margin-left:10px; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><strong>Quién es quién</strong></div></th>
                </tr>
                      <tr>
                        <td class="barra_laterales"><img src="image/spacer.gif" width="11" height="11" border="0"/></td>
                      </tr> <?
	        $i=0;
	        $id=$_GET["ckl"];
	        $tirasql_perfiles="SELECT * FROM perfiles where id='$id' ";
	 		//echo"$tirasql_perfiles";
			$query=mysql_query($tirasql_perfiles, $link);
	 		$rowperfil = mysql_fetch_array($query);
			$perfil_titulo=$rowperfil['titulo'];
			$perfil_sumario=$rowperfil['sumario'];
			$perfil_contenido=$rowperfil['contenido'];
			$perfil_autor=$rowperfil['autor'];
			$perfil_foto_p=$rowperfil['foto_principal'];
			$perfil_leyenda_p=$rowperfil['leyenda_principal'];
			$idd=$rowperfil['id'];
	        	  ?>
					  
					  
                       <tr>
                        <td class="barra_laterales" > <div class="nota_principal" style="margin-left:10px;"><? echo"$perfil_titulo"; ?></div>
						<div class="autornotas"><strong><? echo"$perfil_autor"; ?></strong></div>
						</td></tr>
                      
					  <tr>
                        <td class="barra_laterales" ><table cellspacing="0" cellpadding="0">
                          <tr>  
                            <th valign="top">
							
							
							<div class="text_encontacto" align="left">  <? $tira_fotos="select * from fotos_perfiles where id_perfil='$id'"; 
			$variable=$perfil_contenido;
			$query_fotos=mysql_query($tira_fotos, $link);
			
			while($row_fotos=mysql_fetch_array($query_fotos)) {
			$numfotos=mysql_num_rows($query_fotos);
			
			$foto_perfil_ruta=$row_fotos['ruta_imagen'];
			//echo"$foto_perfil_ruta";
			$palabra_1=$row_fotos['palabra_1'];
			$palabra_2=$row_fotos['palabra_2'];
			$palabra_3=$row_fotos['palabra_3'];
			$aling=$row_fotos['alineacion'];
			//echo"$foto_perfil_ruta";
			
						$leyenda_foto=$row_fotos['foto_leyenda'];
		
		
	
		
						
							 if($foto_perfil_ruta == '' )

 { ?>
			  
			  
			  
			  <div class="textobase" >
			     
			 <? echo"$perfil_contenido"; ?>
			  </div>
			  <? } else 
{
			//$original = $perfil_contenido;
			//$variable = $perfil_contenido;
			if ($palabra3=="") {
			$buscar=$palabra_1." ".$palabra_2;
			}
			else { 
			$buscar=$palabra_1." ".$palabra_2." ".$palabra_3;
			}
			
			$pos = strpos ( $variable , $buscar ) ;
            

?>


			
<? 
$tabla1='<table width="194" height="120" align="';
$tabla0='"><tr><td width="208" align="center" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">';
$tabla2='<img src="imagenes/perfiles/';
$tabla3='" height="120"  width="180" align="';
$tabla5='" /></font></td></tr><tr> <td align="left" valign="top"><div class="leyenda_perfiles">';
$tabla4='</div></td></tr></table>';
$nuevo =$tabla1.$aling.$tabla0.$tabla2.$foto_perfil_ruta.$tabla3.$tabla5.$leyenda_foto.$tabla4;
?> 

<? 
$inicio = $pos;
$fin = 0 ;
$variable = substr_replace ( $variable , $nuevo , $inicio , $fin ) ;
$new=rteSafe($variable);
//$actualizar="update perfiles set contenido='$new' where id='$idd'";
//echo"$actualizar"; 
//$resultado=mysql_query($actualizar,$link);



//echo"$actualizar";
} 
} 
echo $variable ;

//Fin Despies 
?></div>
                              
							  </th>
                          </tr>
                        </table></td>
                      </tr>
					  <tr>
                        <td><img src="image/inf_redondeado_gris.gif" width="600" height="14" /></td>
                      </tr>
                    </table></td>
                    <th scope="col" width="5"><img src="image/spacer.gif" width="5" height="5" border="0" /></th>
                    <th scope="col" width="174" valign="top"><table cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="col" valign="top"><img src="image/ver_mas_azul_enpositivo.jpg" width="174" height="24" /></th>
                      </tr>
					 	   <?
		 // $tiraperfiles="select * from perfiles where id<>$id order by id desc limit 0,5";
		  //$queryperfiles=mysql_query($tiraperfiles, $link);
		 // while ($rowlistaperfiles = mysql_fetch_array($queryperfiles)){
		  $lista_titulo=$rowlistaperfiles['titulo'];
		  $lista_perfiles_id=$rowlistaperfiles['id'];
		   ?>
                      <tr>
                        <td valign="top" class="barra_laterales"><div class="nota_secundarias"><a href="perfiles.php?ckl=<? echo"$lista_perfiles_id"; ?>"><? echo"$lista_titulo"; ?></a></div></td>
                      </tr>
					<? //} ?>
					  
                      <tr>
                        <td valign="top"><img src="image/barra_174x14_gris.jpg" width="174" height="14" /></td>
                      </tr>
                    </table></th>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td width="780" height="7"><img src="image/spacer.gif" width="7" height="7"  border="0"/></td>
              </tr>
              
          </table>
        </div></th>
        <th width="10" height="600" class="border_right" scope="col"><img src="image/spacer.gif" width="10" height="10" border="0" /></th>
      </tr>
	  
    </table></th>
  </tr>
<? include('pie.php'); ?>

</table>
</body>
</html>
<? function rteSafe($strText) {  
   //returns safe code for preloading in the RTE  
   $tmpString = $strText;  
     
   //convert all types of single quotes  
   $tmpString = str_replace(chr(145), chr(39), $tmpString);  
   $tmpString = str_replace(chr(146), chr(39), $tmpString);  
   //$tmpString = str_replace("'", "'", $tmpString);  
   $tmpString = str_replace("'", "&#39;", $tmpString);
    
   //convert all types of double quotes  
   $tmpString = str_replace(chr(147), chr(34), $tmpString);  
   $tmpString = str_replace(chr(148), chr(34), $tmpString);  
//   $tmpString = str_replace("\"", "\"", $tmpString);  
     
   //replace carriage returns & line feeds  
   $tmpString = str_replace(chr(10), " ", $tmpString);  
   $tmpString = str_replace(chr(13), " ", $tmpString);  
     
   return $tmpString;  
}//function rteSafe($strText)
?>