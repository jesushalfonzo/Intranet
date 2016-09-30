 <?php
  
  
  function TitleXMLAFONDO($titulo)  
   {     
         //$titulo_link= strtolower($titulo);		          
		 //$titulo_link= rtrim(ltrim($titulo_link));
		 $titulo_link = str_replace('ô', "o", $titulo);
		 $titulo_link = str_replace('õ', "o", $titulo_link);
		 $titulo_link = str_replace('ç', "c", $titulo_link);
		 
	     $titulo_link = str_replace('à', "á", $titulo_link);
	     $titulo_link = str_replace('è', "é", $titulo_link);
		 $titulo_link = str_replace('ì', "í", $titulo_link);
		 $titulo_link = str_replace('ò', "ó", $titulo_link);
		 $titulo_link = str_replace('ù', "ú", $titulo_link);		 
	     $titulo_link = str_replace('û', "ú", $titulo_link);		 
		 $titulo_link = str_replace('ã', "á", $titulo_link);
		 
         $titulo_link=str_replace("°", "&ordm;", $titulo_link);
         $titulo_link = str_replace("á", "&aacute;", $titulo_link);
	     $titulo_link = str_replace("é", "&eacute;", $titulo_link); 
	     $titulo_link = str_replace("í", "&iacute;", $titulo_link);
	     $titulo_link = str_replace("ó", "&oacute;", $titulo_link);
	     $titulo_link = str_replace("ú", "&uacute;", $titulo_link);
		 $titulo_link = str_replace("Á", "&Aacute;", $titulo_link);
	     $titulo_link = str_replace("É", "&Eacute;", $titulo_link); 
	     $titulo_link = str_replace("Í", "&Iacute;", $titulo_link);
	     $titulo_link = str_replace("Ó", "&Oacute;", $titulo_link);
	     $titulo_link = str_replace("Ú", "&Uacute;", $titulo_link);
         $titulo_link = str_replace("ñ", "&ntilde;", $titulo_link);
		 $titulo_link = str_replace("Ñ", "&Ntilde;", $titulo_link);		 
		 $titulo_link = str_replace("ü", "&uuml;", $titulo_link);
		 $titulo_link = str_replace("Ü", "&Uuml;", $titulo_link);
		 $titulo_link = str_replace("¨", "&uml;", $titulo_link);		 
		 $titulo_link = str_replace("¿", "&iquest;", $titulo_link);		 
		 $titulo_link = str_replace("¡", "&iexcl;", $titulo_link);
		 $titulo_link = str_replace("º", "&ordm;", $titulo_link);
		 $titulo_link = str_replace("ª", "&ordf;", $titulo_link);		 
		 
		 $titulo_link = str_replace("Ø", "&Oslash;", $titulo_link);		 
		 $titulo_link = str_replace('“', '"', $titulo_link);
		 $titulo_link = str_replace('”', '"', $titulo_link);
		 $titulo_link = str_replace("‘’", '"', $titulo_link);
		 $titulo_link = str_replace("’’", '"', $titulo_link);
		 $titulo_link = str_replace("´", "'", $titulo_link);
		
		
		

      return $titulo_link; 
   } 

//Generación de XML por Afondo	
	
 function GenerarXMLHome($slaches)
 { 
      
	 $link=Conectarse();
	  echo "XXXXXXXXXXXXXXXXXXXX";
		// defino el comenzo del xml
		$xml_ini = "<?xml version='1.0' encoding='iso-8859-1' ?>";
		$xml_ini2 = '<Elelementos>';
		//nombro el archivo xml a modificar
		$myFile = $slaches."XML/Home_2.xml";
		
		//abro mi archivo en modo "w" para sobreescribir el archivo generado cada vez
		$fh = fopen($myFile, 'w') or die("Error!!");
		
		//escribo la primera parte en mi archivo
		fwrite($fh, $xml_ini);
		
		//cierro el primer modo de escritura
		fclose($fh);
		
		
		//abro denuevo el archivo en modo "a" para escribir al final de este
		$fhr = fopen($myFile, 'a') or die("Error!!");
		
		fwrite($fhr, $xml_ini2);
		
		//INFO RRHH
		$tirasql="SELECT * FROM m_elementos_home  WHERE m_elementos_home_activo='SI'";
	
			$result = mysql_query($tirasql, $link);
			$cuantos=mysql_num_rows($result);
			while($fetch = mysql_fetch_array($result)){
			$m_elementos_home_id=$fetch["m_elementos_home_id"];
			$m_elementos_home_titulo=stripslashes($fetch["m_elementos_home_titulo"]);
			$m_elementos_home_archivo=$fetch["m_elementos_home_archivo"];
			$m_elementos_home_link=$fetch["m_elementos_home_link"];	
			$m_elementos_home_target=$fetch["m_elementos_home_target"];
			$m_elementos_home_tipo=$fetch["m_elementos_home_tipo"];
			$m_elementos_home_fecha=$fetch["m_elementos_home_fecha"];
			$fecha1=strtotime($m_elementos_home_fecha);

				 $contenido = "<Home id='".$m_elementos_home_id."'>
		<titulo><![CDATA[".$m_elementos_home_titulo."]]></titulo><archivo><![CDATA[".$m_elementos_home_archivo.']]></archivo><link><![CDATA['.$m_elementos_home_link.']]></link><fecha>'.$fecha1.'</fecha><target>'.$m_elementos_home_target.'</target><tipo>'.$m_elementos_home_tipo.'</tipo><totalbanners>'.$cuantos.'</totalbanners></Home>';


		
		//escribo el xml con sus respectivas etiquetas
		//y como esta en modo "a" las ira escribiendo una bajo la otra
		fwrite($fhr, $contenido);
		

		}
	
		
		
		//}
		//cierro la escritura
		fclose($fhr);
		
		//abro el xml nuevamente en modo "a"
		$fhc = fopen($myFile, 'a') or die("Error!!");
		
		//defino el cierre del xml
		$xml_fini = '</Elelementos>';
		
		//lo escribo en el xml
		fwrite($fhc, $xml_fini);
		
		//cierro el xml
		fclose($fhc);
		
		
		$myList = $slaches."XML/Home_2.xml"; 
		$original = $slaches."XML/Home.xml"; 
        $xml = @simplexml_load_file($myList); 
		if($xml){
		
			if (file_exists($original)) {
   			$archi1=$slaches."XML/Home.xml";
		   $arachi2=$slaches."XML/Home_TEMP.xml";
		   $realizado=rename("$archi1", "$arachi2");
		   unlink($arachi2);
			}
		  		   
		   $archi3=$slaches."XML/Home_2.xml";
		   $arachi4=$slaches."XML/Home.xml";
		 	
		   
		   $realizado2=rename("$archi3", "$arachi4");
		  
		  
		   //rename("noticias3.xml","noticias2.xml");// error porq noticias2.xml existe 
		   }
		
}




 ?>