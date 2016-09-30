<?php 
$ubicacion="canal";
include('extras/coneccion.php');
$link=Conectarse();
 ?>
 		

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>TeleSUR - Intranet - Cumpleañeros del mes </title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.fotos_cumple{
border:1px #CCCCCC solid;
padding:4px;

}
.texto_Gris2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #333333;
	font-style: italic;
	padding-right: 4px;
	padding-left: 6px;
}
.Numeros_rojos2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #990000;
	padding-left: 4px;
}

</style>
<body>
<table width="798" cellspacing="0" cellpadding="0" bgcolor="#E7E8E9">

  <tr>
    <td ><img src="images/spacer.gif" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><table width="798" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11"><img src="images/spacer.gif" width="11" height="11" /></td>
        <td width="553" valign="top">

		
		<table width="552" cellspacing="0" cellpadding="0">
          <tr>
            <td width="550" height="23" background="images/Ima_interna_titulo.gif" class="Titulos">Cumplea&ntilde;eros del mes de <? echo mes_letras2(date('m')); ?></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" valign="top">
			<table cellpadding="0" cellspacing="0" border="0">
			
			<? 

$tirasqlcumpleanos="SELECT * FROM m_cumpleaneros  ORDER BY m_cumpleaneros_nombre";
$resultado=mysql_query($tirasqlcumpleanos,$link); 
$numero=mysql_num_rows($resultado);
 while ($row = mysql_fetch_array($resultado)){  
$nombrecumple=$row['m_cumpleaneros_nombre'];
$foto=$row['m_cumpleaneros_foto'];


?>
			
		  <tr><td width="440" ><div style="margin-top:10px; margin-left:10px;"><span class="Numeros_rojos2"><? echo"$diapresentar /$mes"; ?> - </span><span class="texto_Gris2"><? echo"$nombrecumple"; ?></span> <span class="Numeros_rojos2">- </span><span class="texto_Gris"><? echo"$departamento"; ?></span></div>
		  </td>
		  <td width="110" ><img src="multimedia/fotoscumple/<? echo"$foto"; ?>" width="100" height="100" border="0" align="middle" class="fotos_cumple" /></td>
		  </tr>
		<?php } ?> 


		</table>

</body>
</html>
<? 

		 function mes_letras2($mes_num) {
		  $num = $mes_num;
		 if ($num=='01'){
		 $Letters='Enero';
		 }else
		 if ($num=='02'){
		 $Letters='Febrero';
		 }else
		 if ($num=='03'){
		 $Letters='Marzo';
		 }else
		 if ($num=='04'){
		 $Letters='Abril';
		 }else
		 if ($num=='05'){
		 $Letters='Mayo';
		 }else
		 if ($num=='06'){
		 $Letters='Junio';
		 }else
		 if ($num=='07'){
		 $Letters='Julio';
		 }else
		 if ($num=='08'){
		 $Letters='Agosto';
		 }else
		 if ($num=='09'){
		 $Letters='Septiembre';
		 }else
		 if ($num=='10'){
		 $Letters='Octubre';
		 }else
		 if ($num=='11'){
		 $Letters='Noviembre';
		 }else
		 if ($num=='12'){
		 $Letters='Diciembre';
		 }
		 return $Letters;
		 }
				 ?>
