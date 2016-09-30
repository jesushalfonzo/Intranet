<?php
session_start();

if (isset($_SESSION["v0t4nt3sC0ncurs0"])) {
    $variable = $_SESSION["v0t4nt3sC0ncurs0"];
} else {
    $variable = "";
}
if ($variable != 'usuariovotantes') {
    echo "<script language='JavaScript'>document.location.href='index.php';</script>";
    exit();
}

include('../../../extras/coneccion.php');
$link = Conectarse();

if (isset($_SESSION["1dU5u4R10V0tante"])) {
    $idusu = $_SESSION["1dU5u4R10V0tante"];
} else {
    $idusu = "00";
}
$SQL = "SELECT *  FROM r_concurso_votacion WHERE r_concurso_votacion_idusuario = '$idusu'";
$query = mysql_query($SQL, $link);
$numero = mysql_num_rows($query);

if ($numero > 0) {
    echo "<script language='JavaScript'>document.location.href='exitoso.php?error=1';</script>";
}
?>
<?php
if (isset($_SESSION["N0mbr3V0t4nt3"])) {
    $NombreCompleto = $_SESSION["N0mbr3V0t4nt3"];
} else {
    $NombreCompleto = "";
}
if (isset($_SESSION["1dU5u4R10V0tante"])) {
    $idusuario = $_SESSION["1dU5u4R10V0tante"];
}

$masterSeccio = "CORPORATIVA";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>INTRANET TELESUR - Corporativas</title>
        <script type="text/javascript">
            <!--
            function MM_swapImgRestore() { //v3.0
                var i, x, a = document.MM_sr;
                for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++)
                    x.src = x.oSrc;
            }
            function MM_preloadImages() { //v3.0
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }

            function MM_findObj(n, d) { //v4.01
                var p, i, x;
                if (!d)
                    d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all)
                    x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++)
                    x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++)
                    x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById)
                    x = d.getElementById(n);
                return x;
            }

            function MM_swapImage() { //v3.0
                var i, j = 0, x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc)
                            x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
            }
        </script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>


        <style type="text/css">


            #container{
                margin-left:100px;
                margin-right:10px;
                margin-bottom:10px;
                width:800px;
                height:210px;
                text-align:left;
                position:relative;
                padding:2px 0;
            }

            ul#items{		
                margin:1em 0;
                width:auto;
                height:210px;
                overflow:hidden;
            }
            ul#items li{
                list-style:none;
                float:left;
                height:210px;
                overflow:hidden;
                margin:0 4px;
                background:#DDDDDD;
                color:#fff;
                text-align:center;
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
                border-radius:5px;
                -moz-box-shadow:0 1px 1px #777;
                -webkit-box-shadow:0 1px 1px #777;
                box-shadow:0 1px 1px #777;
                color:#555;
            }
            ul#items li:hover{color:#333;}
            ul#items li .image{
                margin:20px 20px 10px 20px;
                width:134px;
                height:116px;
                overflow:hidden;
                border:2px solid #fff;
                -moz-box-shadow:0 1px 1px #bbb;
                -webkit-box-shadow:0 1px 1px #bbb;
                box-shadow:0 1px 1px #bbb;
            }	
            ul#items h3{text-transform:uppercase;font-size:14px;font-weight:bold;margin:.25em 0;text-shadow:#f1f1f1 0 1px 0;}	
            ul#items .info{color:#000000; max-width:134px; text-align:center; margin-left:20px;}	
            ol#pagination{position:relative;text-align:center;}
            ol#pagination li{
                display:inline-block;
                width:16px;
                height:16px;
                background:url(images/bg_buttons.png) no-repeat 0 0;
                text-align:left;
                text-indent:-8000px;
                list-style:none;
                cursor:pointer;
                margin:0 2px;
            }
            ol#pagination li:hover{background:url(images/bg_buttons.png) no-repeat 0 -16px;}
            ol#pagination li.current{color:#f00;font-weight:bold;background:url(images/bg_buttons.png) no-repeat 0 -32px;}
            ol#pagination li.prev, ol#pagination li.next{
                position:absolute;
                top:-150px;
            }
            ol#pagination li.prev{left:-30px;background:url(images/bg_buttons.png) no-repeat 0 -64px;}
            ol#pagination li.next{right:-30px;background:url(images/bg_buttons.png) no-repeat 0 -48px;}
            /*ol#pagination { display:none;}*/

            /* // content */

        </style>
        <style type="text/css">
            .ScrollX {

                overflow: scroll;
                height: 510px;
                visibility: inherit;
                SCROLLBAR-FACE-COLOR:#F0F0F0;
                SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF;
                SCROLLBAR-SHADOW-COLOR: #CCCCCC;
                SCROLLBAR-3DLIGHT-COLOR: #FFFFFF;
                SCROLLBAR-ARROW-COLOR: #1D396B;
                SCROLLBAR-TRACK-COLOR: #FFFFFF;
                SCROLLBAR-DARKSHADOW-COLOR: #CCCCCC;
                overflow-x: hidden;
                clip: rect(auto,auto,270px,auto);
            }
        </style>

        <script language=JavaScript type=text/javascript>
            function send_form(current_form) {
                // guardamos el nombre de grupo de radios o el primer radio de un grupo sin seleccionar
                // para devolverle el foco

                var radio_group = ""
                var ok_form = 1
                for (var ctr = 0; ctr < current_form.length; ctr++) {
                    // comprobamos que el campo es radio y que nombre de grupo de radio
                    if (current_form[ctr].type == "radio" && current_form[ctr].name != radio_group) {
                        //comprobamos si tiene marcado un radio en el grupo
                        if (check_radio(eval("current_form." + current_form[ctr].name))) {
                            // Si no tiene selecionado ningun radio rompemos el bucle
                            // y asignamos 0 a ok_form
                            ok_form--
                            // guardamos el radio para asignar el foco
                            radio_group = current_form[ctr]
                            break
                        }
                        // Si hemos llegado aqu� asignamos el nombre del grupo 
                        // para buscar en el siguiente grupo
                        radio_group = current_form[ctr].name
                    }
                }
                if (ok_form) {

                    current_form.submit()
                }
                else {
                    alert("Por favor, complete todas las opciones")
                    radio_group.focus()
                    return false
                }
            }
            // esta funcion comprueba el grupo  de radio
            function check_radio(radio_group) {
                // comprobamos que en el grupo de radio haiga uno seleccionado
                for (var ctr = 0; ctr < radio_group.length; ctr++) {
                    if (radio_group[ctr].checked) {
                        // Si hay uno selecionado
                        return false
                    }
                }
                // Si no hay ninguno seleccionado
                return true
            }
        </script>

        <link href="../../../css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body onload="MM_preloadImages('../../../img/04_web_01_160x106.jpg', '../../../img/06_correo_01_160x106.jpg', '../../../img/38_izq_02_26x52.jpg', '../../../img/40_der_02_26x52.jpg', '../../../img/23_RRHH_01_121x40.jpg', '../../../img/25_genteTelesur_196x40.jpg', '../../../img/27_fueraOficio_252x40.jpg', '../../../img/32_1arriba_20x20.jpg', '../../../img/32_1abajo_20x20.jpg')">
        <table width="1020" border="0" align="center" cellpadding="0" cellspacing="0"
               background="../../../img/01_Imagen_01_1020x1100.jpg">
            <tr>
                <td width="1020" height="190">
                    <?php include("../../cabecera/index.php"); ?>
                </td>
            </tr>
            <tr>
                <td width="1020" height="26">
                    <?php include("../botones-INT.php"); ?>
                </td>
            </tr>
            <tr>
                <td width="1020" height="16">

                </td>
            </tr>
            <tr>
                <td width="1020" height="30" background="../../../img/29_1_linea_1020x30.jpg"><div class="Arial_14_bold_blanco" style="width:px;  margin-left:210px;">Premios teleSUR </div></td>
            </tr>
            <tr>
                <td width="1020" height="22">
                </td>
            </tr>
            <tr>
                <td width="1020" height="738" background="../../../img/trabajadorAno.jpg">

                    <table width="1020" height="" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="1020" height="190" valign="bottom" align="right">
                                <div class="Arial_14_bold_blanco" style="padding-right:70px; margin-bottom:20px;">
                                    <?php echo $NombreCompleto; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="1020" height="520">
                                <form name="premiosForm" method="post" id="premiosForm" action="votar.php" onsubmit="send_form(this.form)">

                                    <table width="1020" height="520" border="0" cellspacing="0" cellpadding="0">

                                        <tr>
                                            <td width="66" height="520">
                                                <img src="../../../img/spc.gif" width="65" height="10" />
                                            </td>
                                            <td width="874" height="520" valign="top">

                                                <div class="ScrollX" id="Scroll">

                                                    <table width="844" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
                                                        <?php
                                                        $SQL = "SELECT * FROM m_concurso_preguntas WHERE m_concurso_preguntas_idMaster='1' and status = 1 ORDER BY m_concurso_preguntas_pregunta ASC ";
                                                        $query = mysql_query($SQL, $link);
                                                        $i = 0;
                                                        $flag = false;
                                                        while ($row = mysql_fetch_array($query)) {
                                                            $m_concurso_preguntas_id = $row["m_concurso_preguntas_id"];
                                                            $m_concurso_preguntas_pregunta = $row["m_concurso_preguntas_pregunta"];
                                                            ?>
                                                            <tr>
                                                                <td width="412" valign="top">
                                                                    <table width="840" border="0" cellpadding="0" cellspacing="0" class="cuadrado_3">
                                                                        <tr>
                                                                            <td width="844" height="30" bgcolor="#CD392B">
                                                                                <div class="Arial_16_Blanco"   style="width:390px; margin-top:2px; margin-bottom:2px; margin-right:10px; margin-left:10px;" >
                                                                                    <?php echo $m_concurso_preguntas_pregunta; ?>
                                                                                    <input type="hidden" name="ids[]" value="<?php echo $m_concurso_preguntas_id; ?>"/>

                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="840" height="15">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div  style="display:table; max-width:840px; height: auto; border-collapse:collapse;"> 
                                                                                    <?php
                                                                                    $SQLOpciones = "SELECT * FROM r_opciones_encuestas WHERE r_opciones_encuestas_idpregunta='$m_concurso_preguntas_id'ORDER BY RAND()" ;
                                                                                    $queryOpciones = mysql_query($SQLOpciones, $link);
                                                                                    while ($rowOpciones = mysql_fetch_array($queryOpciones)) {

                                                                                        $r_opciones_encuestas_id = $rowOpciones["r_opciones_encuestas_id"];
                                                                                        $r_opciones_encuestas_nombre = $rowOpciones["r_opciones_encuestas_nombre"];
                                                                                        $r_opciones_encuestas_apellido = $rowOpciones["r_opciones_encuestas_apellido"];
                                                                                        $r_opciones_encuestas_foto = $rowOpciones["r_opciones_encuestas_foto"];

                                                                                        if ($i % 5 == 0) {
                                                                                            ?>
                                                                                        </div>
                                                                                        <?php
                                                                                    }
                                                                                    if ($i == 0 || $i % 5 == 0) {
                                                                                        ?>
                                                                                        <div style="display:table-row;">

                                                                                            <?php
                                                                                        }
                                                                                        $i++;
                                                                                        ?>
                                                                                        <div style="display:table-cell; width:120px; padding:15px;">        
                                                                                            <div style="width: 100px; height: 100px;">
                                                                                                <?php
                                                                                                $cadena = $r_opciones_encuestas_foto;
                                                                                                $porciones = explode(".", $cadena);
                                                                                                if ($porciones[1] == "pdf") {
                                                                                                    ?>
                                                                                                    <a target="_blank" href="../../../../../multimedia/imagenes/encuesta/<?php echo $r_opciones_encuestas_foto; ?>">
                                                                                                        <img src="../../../../../multimedia/imagenes/encuesta/PDF_image.jpg" height="100" width="100" border="1" />
                                                                                                    </a>
                                                                                                    <?php
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <img src="../../../../../multimedia/imagenes/encuesta/<?php echo $r_opciones_encuestas_foto; ?>" height="100" width="100" border="1" />
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                            <div style="width: 100px; text-align: center;" class="Arial_12_blanco_Normal">
                                                                                                <?php echo $r_opciones_encuestas_nombre; ?>
                                                                                            </div>
                                                                                            <div style="width: 100px; text-align: center;" class="Arial_12_blanco_Normal">
                                                                                                <?php
                                                                                                echo $r_opciones_encuestas_apellido;
                                                                                                ?>
                                                                                            </div>
                                                                                            <div style="width: 100px; text-align: center;">
                                                                                                <input name="opcion_<?php echo $m_concurso_preguntas_id; ?>" type="radio" value="<?php echo $r_opciones_encuestas_id; ?>" />
                                                                                            </div>

                                                                                        </div>                                                                                               

                                                                                    <?php } ?>
                                                                                             <tr>
                                            <td colspan="3" height="30">	 
                                                <div align="center" style="margin-top:-5px; ">
                                                    <input type="image" border="1"
                                                           name="button"
                                                           value="guardar"
                                                           alt="Guardar"
                                                           title="Guardar"
                                                           onclick="return send_form(this.form)"
                                                           onmouseout="MM_swapImgRestore()"
                                                           onmouseover="MM_swapImage('Votar', '', '../../../img/vota-2.jpg', 1)"
                                                           src="../../../img/vota-1.png"
                                                           width="115" height="35" />
                                                </div>
                                            </td>
                                        </tr>

                                                                                </div>
                                                                               
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" height="30">	 
                                                
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </form> 
                                </div>

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td height="60">
                </td>
            </tr>
        </table>

    </body>
</html>

<?php

function dia_semana($dia, $mes, $ano) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
    return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
}
?>