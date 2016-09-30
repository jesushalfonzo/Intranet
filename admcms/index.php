<?php session_start();?>
<?   
   if (($_SERVER['PHP_AUTH_USER']!="intranet") || ($_SERVER['PHP_AUTH_PW']!="1ntran3tw3b")) { 
      header('WWW-Authenticate: Basic realm="Acceso restringido"'); 
      header('HTTP/1.0 401 Unauthorized'); 
      echo '<h1>ACCESO RESTRINGIDO</h1>'; 
      exit; 
   } else 
   {
   $_SESSION['permisox']="d1scla1m3randb01l1ngp01nts"; 
   //$_SESSION['user']="administrador";
   //$_SESSION['pass']="t3l3w3bs1t3SUR";  
   $_SESSION['permiso']="deqfsmner";
   session_destroy();
   }
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador de contenidos / Intranet TeleSUR</title>
</head>

<frameset rows="70,100%" cols="*" frameborder="yes">
  <frame src="acciones/index.html" frameborder="yes" scrolling="no" noresize="noresize" name="acciones" />
  <frameset rows="*" cols="185,100%" frameborder="yes">
    <frame src="contenidos/index.html" noresize="noresize" name="contenidos" />
    <frame src="principal/index.html" scrolling="auto" name="principal" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>
<?
$variable=$_SESSION["permiso"];
if ($variable != 'deqfsmner'){
echo "<script language='JavaScript'>document.location.href='error.html';</script>";
};
?>