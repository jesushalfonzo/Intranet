<?php 
if (isset($_GET["letra"])){ $letra=$_GET["letra"]; } else{ $letra="A"; }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTRANET TELESUR</title>

<script type="text/javascript">
function EnviarLetra(letra){
parent.BuscarAbreviados(letra);
}
</script>

    <script src="jquery.min.js" type="text/javascript" />
	<script type='text/javascript'>
$(document).ready(function(){
$('index.php?letra=Afmt li').hover(function (){
$(this).addClass('selected'); $(this).find('ul:first').slideDown();},
function (){$(this).removeClass('selected'); $(this).find('ul.fmtDrpDwn').hide()});
$('.fmtDrpDwn li').hover(function (){
$(this).find('ul:first').show('slide', {direction: 'left'}, 10000);},
function (){$(this).find('ul').hide()});
});
</script>

<style type="text/css">
#main{width:20px; height:auto; margin:0;}
#fmt {width:auto; height:auto;background:#F8F8F8; padding-top:0px; margin-left:0px; border:0px solid #666666;-moz-box-shadow:2px 2px 5px #d1d1d1; -webkit-box-shadow:2px 2px 5px #d1d1d1; box-shadow:2px 2px 5px #d1d1d1;}
#fmt ul {margin:0px; padding:0px; list-style:none;}
#fmt ul li {position: relative; width:auto; text-align:center; margin:2px 0px; }
#fmt ul li ul { display:none ;}
#fmt ul li a { font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:#000000; font-weight:bold; display:block; font-size:11px;}
#fmt ul li a span {display:block; height:18px; line-height:31px;padding-left:0px;}
#fmt ul li a:hover {background:; color:#FF0000; font-weight:bold;}
#fmt ul li a.active span, #fmt ul li a.active:hover { background:#030A75!important; color:#fff; font-weight:bold; height:31px; line-height:31px; }
#fmt ul li.selected { background: #FAC61C; color:#FFFFFF; font-weight:bold; }
#fmt ul li.selected a { color:#fff;}
#fmt ul li ul.fmtDrpDwn, #fmt ul li ul.fmtDrpDwn ul { position:absolute; left:168px; top:0; background:#FAC61C; width:185px; -moz-box-shadow:2px 2px 5px #d1d1d1; -webkit-box-shadow:2px 2px 5px #d1d1d1; box-shadow:2px 2px 5px #d1d1d1; padding-left:2px; border-top:solid 2px #fbc67a;}
#fmt ul li ul.fmtDrpDwn li, #fmt ul li ul.fmtDrpDwn ul li{ text-align:left; float:none; display:block; width:183px;}
#fmt ul li ul.fmtDrpDwn li a { font:normal 11px 'Tahoma', Arial, Helvetica, sans-serif; color:#fff; display:block; height:23px; line-height:23px; display:block; text-indent:15px;}
#fmt ul li ul.fmtDrpDwn li a:hover { font-weight:bold; background:#f47d12;}
#fmt ul li ul.fmtDrpDwn li.selected {background:#f47d12; font-weight:bold; -moz-box-shadow:none; -webkit-box-shadow:none;box-shadow:none;}
#fmt ul li ul.fmtDrpDwn ul { position:absolute; left:100%; top:0px; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body onload=" EnviarLetra('<?php echo $letra; ?>');">
<div id="main">
<div id="fmt">
<ul>
<li><a href="index.php?letra=A" <?php if($letra=="A"){ echo 'class="active"'; } ?> ><span>A</span></a></li>
<li><a href="index.php?letra=B" <?php if($letra=="B"){ echo 'class="active"'; } ?>><span>B</span></a></li>
<li><a href="index.php?letra=C" <?php if($letra=="C"){ echo 'class="active"'; } ?>><span>C</span></a>
<li><a href="index.php?letra=D" <?php if($letra=="D"){ echo 'class="active"'; } ?>><span>D</span></a></li>
<li><a href="index.php?letra=E" <?php if($letra=="E"){ echo 'class="active"'; } ?>><span>E</span></a></li>
<li><a href="index.php?letra=F" <?php if($letra=="F"){ echo 'class="active"'; } ?>><span>F</span></a></li>
<li><a href="index.php?letra=G" <?php if($letra=="G"){ echo 'class="active"'; } ?>><span>G</span></a></li>
<li><a href="index.php?letra=H" <?php if($letra=="H"){ echo 'class="active"'; } ?>><span>H</span></a></li>
<li><a href="index.php?letra=I" <?php if($letra=="I"){ echo 'class="active"'; } ?>><span>I</span></a></li>
<li><a href="index.php?letra=J" <?php if($letra=="J"){ echo 'class="active"'; } ?>><span>J</span></a></li>
<li><a href="index.php?letra=K" <?php if($letra=="K"){ echo 'class="active"'; } ?>><span>K</span></a></li>
<li><a href="index.php?letra=L" <?php if($letra=="L"){ echo 'class="active"'; } ?>><span>L</span></a></li>
<li><a href="index.php?letra=M" <?php if($letra=="M"){ echo 'class="active"'; } ?>><span>M</span></a></li>
<li><a href="index.php?letra=N" <?php if($letra=="N"){ echo 'class="active"'; } ?>><span>N</span></a></li>
<li><a href="index.php?letra=Ñ" <?php if($letra=="Ñ"){ echo 'class="active"'; } ?>><span>Ñ</span></a></li>
<li><a href="index.php?letra=O" <?php if($letra=="O"){ echo 'class="active"'; } ?>><span>O</span></a></li>
<li><a href="index.php?letra=P" <?php if($letra=="P"){ echo 'class="active"'; } ?>><span>P</span></a></li>
<li><a href="index.php?letra=Q" <?php if($letra=="Q"){ echo 'class="active"'; } ?>><span>Q</span></a></li>
<li><a href="index.php?letra=R" <?php if($letra=="R"){ echo 'class="active"'; } ?>><span>R</span></a></li>
<li><a href="index.php?letra=S" <?php if($letra=="S"){ echo 'class="active"'; } ?>><span>S</span></a></li>
<li><a href="index.php?letra=T" <?php if($letra=="T"){ echo 'class="active"'; } ?>><span>T</span></a></li>
<li><a href="index.php?letra=U" <?php if($letra=="U"){ echo 'class="active"'; } ?>><span>U</span></a></li>
<li><a href="index.php?letra=V" <?php if($letra=="V"){ echo 'class="active"'; } ?>><span>V</span></a></li>
<li><a href="index.php?letra=W" <?php if($letra=="W"){ echo 'class="active"'; } ?>><span>W</span></a></li>
<li><a href="index.php?letra=X" <?php if($letra=="X"){ echo 'class="active"'; } ?>><span>X</span></a></li>
<li><a href="index.php?letra=Y" <?php if($letra=="Y"){ echo 'class="active"'; } ?>><span>Y</span></a></li>
<li><a href="index.php?letra=Z" <?php if($letra=="Z"){ echo 'class="active"'; } ?>><span>Z</span></a></li>
</ul>
</div>
</div>
</body>
</html>