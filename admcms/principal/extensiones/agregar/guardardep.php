<?php 
include ('../../../extras/connect.php');
$link=Conectarse();
$nombre=$_POST["nombre"];
$Sql="INSERT INTO  m_departamentos VALUES(Null, '$nombre')";
$query=mysql_query($Sql,$link);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/javascript">
function refrescarlavaina(){
window.opener.refreshdiv();
}

refrescarlavaina();

window.close();
</script>
</head>

<body>
</body>
</html>