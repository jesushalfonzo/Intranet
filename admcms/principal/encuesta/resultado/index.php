<?php
  
   include ('../../../extras/connect.php');
    $link=Conectarse();

	  $SQL_listar="SELECT * FROM  m_concurso_preguntas ORDER BY m_concurso_preguntas_pregunta ASC";
      $result = mysql_query($SQL_listar, $link);


//TOTAL GENERAL
			$SQLTT="SELECT *  FROM r_concurso_votacion GROUP BY r_concurso_votacion_idusuario";
			$queryTT=mysql_query($SQLTT, $link);
			$totalvotosG=mysql_num_rows($queryTT);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listar Encuestas</title>
<link href="../../../extras/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="766" border="0" cellpadding="3" cellspacing="1" class="texto">

<tr>
  <td bgcolor="#CCCCCC" colspan="4" class="etiquetas">Encuestas Premios TeleSUR  </td>
</tr>
<tr>
  <td  class="etiquetas">Categoria</td>
  <td width="118"><div align="center"><strong>Participante</strong></div></td>
  <td width="135"><div align="center"><strong>Puntuacion</strong></div></td>
  <td width="65"><div align="center"><strong class="etiquetas">%</strong></div></td>
</tr>
<tr>
  <td bgcolor="#CCCCCC" colspan="4" class="etiquetas" height="10"><img src="../../../img/spc.gif" height="10" width="10" /></td>
</tr>
<?
	  while ($row = mysql_fetch_array($result)){ 
		$m_encuesta_tuvoz_titulo=$row['m_concurso_preguntas_pregunta'];
		$m_concurso_preguntas_id =$row['m_concurso_preguntas_id'];
  
  ?>
  <tr>
    <td width="419"> 
	
    <span class="etiquetas"><? echo "$m_encuesta_tuvoz_titulo";?> </span> </td>
    <td align="center" valign="middle" colspan="3"><table width="99%" border="0" align="left" cellpadding="3" cellspacing="1">
      
	  <?php 
  $SQLOpciones="SELECT *  FROM `r_opciones_encuestas` WHERE `r_opciones_encuestas_idpregunta` = '$m_concurso_preguntas_id' ORDER BY `r_opciones_encuestas_id` ASC";
  $queryOpciones=mysql_query($SQLOpciones, $link);
  while($rowOpciones=mysql_fetch_array($queryOpciones)){
  $r_opciones_encuestas_id=$rowOpciones["r_opciones_encuestas_id"];
  $r_opciones_encuestas_nombre=$rowOpciones["r_opciones_encuestas_nombre"];
  $r_opciones_encuestas_apellido=$rowOpciones["r_opciones_encuestas_apellido"];
  $r_opciones_encuestas_foto=$rowOpciones["r_opciones_encuestas_foto"];
  
  //TOTAL
  			$SQL="SELECT *  FROM `r_concurso_votacion` WHERE ` r_concurso_votacion_idpregunta` = '$m_concurso_preguntas_id'";
			$query=mysql_query($SQL, $link);
			$totalvotos=mysql_num_rows($query);
			
			//INDIVIDUAL
  
			$SQL="SELECT *  FROM `r_concurso_votacion` WHERE ` r_concurso_votacion_idrespuesta` = '$r_opciones_encuestas_id'";
			$query=mysql_query($SQL, $link);
			$numero=mysql_num_rows($query);
			
                        
                        if($i<$numero){
                            
                            
                            $i=$numero;
                            $nombre1= $r_opciones_encuestas_nombre;
                            $apellido1=  $r_opciones_encuestas_apellido;
                            $porcentaje2 = round((( $i / $totalvotos ) * 100),2);
                            }
                                
                        
			 $porcentaje = round((( $numero / $totalvotos ) * 100),2);

  ?>
	  
	  <tr>
              <td width="37%" valign="top"><?php echo $r_opciones_encuestas_nombre; ?> <?php echo $r_opciones_encuestas_apellido; ?></td>
              <td width="42%" valign="top"><div align="center"><?php echo $numero; ?></div></td>
              <td width="21%" valign="top"><div align="center"><?php echo $porcentaje; ?> %</div></td>
	  </tr> 
	 <?php } ?>
    </table>
    </td>
  </tr>
  <tr><td colspan="4"> <hr align="left" width="780" size="1" noshade="noshade" class="texto" /></td></tr>

  <? } ?>
  <tr>
      <td width="419">  <span class="etiquetas">Opcion m&aacute;s Votada </span> </td>
  
  
              <td width="37%" valign="top"><?php echo $nombre1; ?> <?php echo $apellido1; ?></td>
              <td width="42%" valign="top"><div align="center"><?php echo $i; ?></div></td>
              <td width="21%" valign="top"><div align="center"><?php echo $porcentaje2; ?> %</div></td>
	  </tr> 
  
    
  <tr><td colspan="4"> <div align="right" style="margin-right:40px;"><span class="etiquetas">Total <?php echo $totalvotosG; ?> votos</span></div></td></tr>
</table>
  
</body>
</html>
<script language="JavaScript"> 
function TomarValor(codigo,Accion){
 	if (Accion=="Editar") {
		//document.getElementById("txtcodigo").value= codigo;
		window.location = "editar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
	}
	
		if (Accion=="Eliminar") {
		if(confirm("�Esta seguro que desea borrar esta pregunta?")) {
		window.location = "borrar/index.php?clx=" + codigo + ""; //&idusuario=1&idorganismousuario=1&idperfilusuario=1
		}
		}
	
	
	
	
	
}
</script>
