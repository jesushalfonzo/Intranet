<? 
   
	  $id=$_GET["clx"]; 
	  $general=$_GET["general"];
	  ?>
	  <script language="JavaScript">	
	  var resp = confirm("¿Esta seguro que desea eliminar esta foto?");
	  // alert ("resp " + resp);
	  if(resp) { 
	     document.location.href="borrar.php?clx2=" + <? echo $id; ?> + "&clx="+ <? echo $general; ?>;
      
          }
	else  { 
        document.location.href="../index.php?clx="+<? echo $general; ?>;
		}
      </script>


      
 
