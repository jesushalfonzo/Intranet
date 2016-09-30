<? include ('../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $id=$_GET["clx"];?>
	  
<script language="JavaScript">	
	  var resp = confirm("¿Esta seguro de eliminar esta Lectura?");
	  
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $id; ?>;
      
          }
	else  { 
        document.location.href="../index.php";
		}
      </script>