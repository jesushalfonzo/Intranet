<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"]; ?>
	  
	  <script language="JavaScript">	
	  var resp = confirm("¿Esta seguro que desea eliminar esta registro?");
	  // alert ("resp " + resp);
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $id; ?>;
      
          }
	else  { 
        document.location.href="../index.php";
		}
      </script>


      
 
