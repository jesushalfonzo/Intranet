<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $idvideo=$_GET["clx"]; ?>
	  
	  <script language="JavaScript">	
	  var resp = confirm("¿Esta seguro que desea eliminar este video?");
	  // alert ("resp " + resp);
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $idvideo; ?>;
      
          }
	else  { 
      document.location.href='../index.php';
		}
      </script>


      
 
