<? include ('../../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"]; 
	  $accion=$_GET["acc"];
	  $general=$_GET["gene"];

	  ?>
	  
	<script language="JavaScript">	
	  var resp = confirm("¿Esta seguro de <? echo"$accion"; ?> este comentario ?");
	  
	  if(resp) { 
	      document.location.href="status.php?clx=<? echo $id;?>&acc=<? echo $accion;?>&gene=<? echo $general;?>";
      
          }
	else  { 
        document.location.href="../index.php?clx=<? echo $general;?>";
		}
      </script>


      
 
