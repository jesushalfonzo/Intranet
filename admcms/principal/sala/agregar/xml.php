<? 
include('../../../extras/connect.php'); 
$link=Conectarse();
$sql="SELECT * FROM m_sala_situacional WHERE m_sala_situacional_id='1'"; 
$QUERY=mysql_query($sql, $link);
$row=mysql_fetch_array($QUERY);
$archivo=$row['m_sala_situacional_file'];
?>
<?
$xml_ini='<xml xmlns:o="urn:schemas-microsoft-com:office:office">';

$myFile = "filelist.xml";
		
		
		
		$fh = fopen($myFile, 'w') or die("Error!!");
		
		
		fwrite($fh, $xml_ini);
		
		fclose($fh);
		
		$xml_ini2= '<o:MainFile HRef="$archivo"/><o:File HRef="filelist.xml"/></xml>';
		
		//abro denuevo el archivo en modo "a" para escribir al final de este
		$fhr = fopen($myFile, 'a') or die("Error!!");
		
		fwrite($fhr, $xml_ini2);
			
        fclose($fhr);

 

 ?>
</body>
</html>
