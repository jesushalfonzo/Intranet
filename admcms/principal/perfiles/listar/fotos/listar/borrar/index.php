<? include ('../../../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $idperfil=$_GET["clx"];
	 
	  ?>
	  
<script language="JavaScript">	
	  var resp = confirm("¿Esta seguro de eliminar esta foto?");
	  
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $idperfil; ?>;
      
          }
	else  { 
        document.location.href="../index.php";
		}
      </script>