<? include ('../../../../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $id=$_GET["clx"];
	  $id_nota=$_GET["xls"];
	 
	  ?>
<script language="JavaScript">	
	  var resp = confirm("¿Esta seguro de eliminar este despies?");
	  
	  if(resp) { 
	     document.location.href="borrar.php?clx=" + <? echo $id; ?> + "&ckl="+ <? echo $id_nota ?> + "";
      
          }
	else  { 
       document.location.href="../index.php?ckl="+ <? echo $id_nota;?>;
		}
      </script>