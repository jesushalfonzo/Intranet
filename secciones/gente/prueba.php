<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Web Project</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
function cargar(div, desde)
{
     $(div).load(desde);
}
</script>
    </head>
    <body>
        <div id="divtest">Este contenido va a cambiar :D</div>
<a href="#" onclick="cargar('#divtest', 'sdsdsdsds')">Cargar contenido</a>
    </body>
</html>