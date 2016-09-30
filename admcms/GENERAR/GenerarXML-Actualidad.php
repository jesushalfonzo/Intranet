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
	//GenerarXML("../../"); Línea comentada 16/06/14
 function GenerarXML($slaches)
 { 
      
	 $link=Conectarse();
		// defino el comenzo del xml
		$xml_ini = "<?xml version='1.0' encoding='iso-8859-1' ?>";
		$xml_ini2 = '<Actualidad>';
		//nombro el archivo xml a modificar
		//$myFile = $slaches."XML/ActualidadHome_2.xml";
		$myFile = $slaches."XML/ActualidadHome.xml";
		
		//abro mi archivo en modo "w" para sobreescribir el archivo generado cada vez
		echo "file:" . $myFile;
		$fh = fopen($myFile, 'w') or die("Errorrrrrrrrrrrrrrx");
		
		//escribo la primera parte en mi archivo
		fwrite($fh, $xml_ini);
		
		//cierro el primer modo de escritura
		fclose($fh);
		
		
		//abro denuevo el archivo en modo "a" para escribir al final de este
		$fhr = fopen($myFile, 'a') or die("Error!!");
		
		fwrite($fhr, $xml_ini2);
		
		//INFO RRHH
		
		$tirasql="SELECT * FROM m_rhh_info  WHERE m_rhh_info_aprobada='SI' ORDER BY m_rhh_info_fecha DESC LIMIT 0,1";

		echo "sql 1: " + $tirasql ."</br>";
	
			$result = mysql_query($tirasql, $link);
			$fetch = mysql_fetch_array($result);
			$m_rhh_info_id=$fetch["m_rhh_info_id"];
			$m_rhh_info_titulo =stripslashes($fetch["m_rhh_info_titulo"]);
			$m_rhh_info_sumario=stripslashes($fetch["m_rhh_info_sumario"]);
			$m_rhh_info_contenido=$fetch["m_rhh_info_contenido"];
			$m_rhh_info_categoria=$fetch["m_rhh_info_categoria"];	
			$m_rhh_info_fecha =$fetch["m_rhh_info_fecha"];	
			$m_rhh_info_categoria=$fetch["m_rhh_info_categoria"];
			if ($m_rhh_info_categoria=='operativos'){
			$pag="operativos.php";
			}
			else {
			if ($m_rhh_info_categoria=='charlas'){
			$pag="charlas.php";
			}
			else{
			$pag="index.php";
			}
			}
			$fecha1=strtotime($m_rhh_info_fecha);

				 $contenido[$fecha1] = "<actualidad id='".$m_rhh_info_id."'>
		<titulo><![CDATA[ ".$m_rhh_info_titulo."]]></titulo><sumario><![CDATA[ ".$m_rhh_info_sumario.']]></sumario><categoria>'.$m_rhh_info_categoria.'</categoria><fecha>'.$m_rhh_info_fecha.'</fecha><imagen>imagenes/generico.jpg</imagen><seccion>RRHH</seccion><link>secciones/RRHH/'.$pag.'</link></actualidad>';

	
		
		
		// CORPORATIVA -> ESTAS NOTAS ESTAN DESACTUALIZADAS
		$tirasql = "SELECT * FROM noticia  WHERE aprobado='SI' ORDER BY id desc LIMIT 0,1";

		echo "sql 2: " + $tirasql ."</br>";
	
			$result = mysql_query($tirasql, $link);
			$fetch = mysql_fetch_array($result);
			$id=$fetch["id"];
			$titulo =stripslashes($fetch["titulo"]);
			$sumario=stripslashes($fetch["sumario"]);
			$fecha=$fetch["fecha"];
			$imagen=$fetch["imagen"];
			$separar=explode('/',$fecha);
			$dia=$separar[0];
			$mes=$separar[1];
			$anio=$separar[2];
			$fechacompelta='20'.$anio.'-'.$mes.'-'.$dia.' '.date('H:i:s', time());
			$fecha2=strtotime($fechacompelta);
				

				 $contenido[$fecha2] = "<actualidad id='".$id."'>
		<titulo><![CDATA[ ".$titulo."]]></titulo><sumario><![CDATA[ ".$sumario.']]></sumario><categoria>'.$m_rhh_info_categoria.'</categoria><fecha>'.$fechacompelta.'</fecha><imagen>imagenes/'.$imagen.'</imagen><seccion>CORPORATIVA</seccion><link>secciones/corporativa/index.php?ckl='.$id.'</link></actualidad>';
		
		//escribo el xml con sus respectivas etiquetas
		//y como esta en modo "a" las ira escribiendo una bajo la otra
		//fwrite($fhr, $contenido);
		
		// GENTE
		$tirasql="SELECT * From  m_galerias WHERE m_galeria_estatus= 'A' and m_gelerias_activa_home= 'S' ORDER BY m_galeria_id  DESC LIMIT 0,1";
		echo "sql 3: " + $tirasql ."</br>";

			$result = mysql_query($tirasql, $link);
			$fetch = mysql_fetch_array($result);
			$m_galeria_id=$fetch["m_galeria_id"];
			$m_galeria_titulo =stripslashes($fetch["m_galeria_titulo"]);
			$m_galeria_fecha=$fetch["m_galeria_fecha"];
			$imagen=$fetch["imagen"];
				$GALERIASQL="SELECT m_galeria_fotos_imagenpeq FROM m_galeria_fotos WHERE m_galeria_fotos_idgaleria = '$m_galeria_id' ORDER BY m_galeria_fotos_id DESC";
				$query_galeria=mysql_query($GALERIASQL, $link);
				$row_galeria=mysql_fetch_array($query_galeria);
				$foto=$row_galeria['m_galeria_fotos_imagenpeq'];
			$fecha3=strtotime($m_galeria_fecha);
				

				 $contenido[$fecha3] = "<actualidad id='".$m_galeria_id."'>
		<titulo><![CDATA[ ".$m_galeria_titulo."]]></titulo><sumario><![CDATA[ ".$sumario.']]></sumario><categoria>'.$m_rhh_info_categoria.'</categoria><fecha>'.$m_galeria_fecha.'</fecha><imagen>imagenes/foto_galerias/'.$foto.'</imagen><seccion>GENTE TELESUR</seccion><link>secciones/gente/galeria.php</link></actualidad>';
		
		//escribo el xml con sus respectivas etiquetas
		//y como esta en modo "a" las ira escribiendo una bajo la otra
		//fwrite($fhr, $contenido);
		
		
		
			// ENTRETENIMIENTO
			$tirasql="SELECT * FROM m_inf_interes WHERE m_inf_interes_home = 'SI' LIMIT 0,1";

			echo "sql 4: " + $tirasql ."</br>";
			$result = mysql_query($tirasql, $link);
			$fetch = mysql_fetch_array($result);
			$m_inf_interes_id=$fetch["m_inf_interes_id"];
			$m_inf_interes_titulo =stripslashes($fetch["m_inf_interes_titulo"]);
			$m_inf_interes_sumario =stripslashes($fetch["m_inf_interes_sumario"]);
			$m_inf_interes_fecha=$fetch["m_inf_interes_fecha"];
			$m_inf_interes_images=$fetch["m_inf_interes_images"];
			$fecha4=strtotime($m_inf_interes_fecha);

				 $contenido[$fecha4] = "<actualidad id='".$m_inf_interes_id."'>
		<titulo><![CDATA[ ".$m_inf_interes_titulo."]]></titulo><sumario><![CDATA[ ".$m_inf_interes_sumario.']]></sumario><categoria></categoria><fecha>'.$m_inf_interes_fecha.'</fecha><imagen>/imagenes/interes/'.$m_inf_interes_images.'</imagen><seccion>ENTRETENIMIENTO</seccion><link>/secciones/entretenimiento/detalle_agenda.php?ckl='.$m_inf_interes_id.'</link></actualidad>';
		
		//escribo el xml con sus respectivas etiquetas
		//y como esta en modo "a" las ira escribiendo una bajo la otra
		//fwrite($fhr, $contenido);




$orden = array($fecha1,$fecha2,$fecha3, $fecha4);
//print_r($orden);
rsort($orden);

foreach ($orden as $key => $val) {
	$jecha= date('d-m-Y H:i:s', $val);
	fwrite($fhr, $contenido[$val]);
	/*echo "<script language='JavaScript'>alert('".$jecha."');</script>";*/
} 
		
	
		
		
		//}
		//cierro la escritura
		fclose($fhr);
		
		//abro el xml nuevamente en modo "a"
		$fhc = fopen($myFile, 'a') or die("Error!!");
		
		//defino el cierre del xml
		$xml_fini = '</Actualidad>';
		
		//lo escribo en el xml
		fwrite($fhc, $xml_fini);
		
		//cierro el xml
		fclose($fhc);
		
		
		$myList = $slaches."XML/ActualidadHome_2.xml"; 
		$original = $slaches."XML/ActualidadHome.xml"; 
        $xml = @simplexml_load_file($myList); 
		if($xml){
		
			if (file_exists($original)) {
   			$archi1=$slaches."XML/ActualidadHome_2.xml";
		   $arachi2=$slaches."XML/ActualidadHome_TEMP.xml";
		  $realizado=rename("$archi1", "$arachi2");
		   unlink($arachi2);
			}
		  		   
		   $archi3=$slaches."XML/ActualidadHome_2.xml";
		   $arachi4=$slaches."XML/ActualidadHome.xml";
		 	
		   
		   $realizado2=rename("$archi3", "$arachi4");
		  
		   
		   //rename("noticias3.xml","noticias2.xml");// error porq noticias2.xml existe 
		   }
		
}




 ?>
