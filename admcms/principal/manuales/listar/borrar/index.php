<? include ('../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $idman=$_GET["clx"];?>
	  
<script language="JavaScript">	
	  var resp = confirm("¿Esta seguro de eliminar este Manual?");
	  
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $idman; ?>;
      
          }
	else  { 
        document.location.href="../index.php";
		}
      </script>