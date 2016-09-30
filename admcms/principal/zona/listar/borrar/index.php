<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id_encuesta=$_GET["clx"]; ?>
	  
	  <script language="JavaScript">	
	  var resp = confirm("¿Esta seguro que desea eliminar esta encuesta?");
	  // alert ("resp " + resp);
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $id_encuesta; ?>;
      
          }
	else  { 
      document.location.href='../index.php';
		}
      </script>


      
 
