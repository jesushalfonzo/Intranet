<?php 
  include('../coneccion.php');
  $link=Conectarse();
    
$nombre_archivo = 'NuevosUsuarios_'.date('d-m-Y_H:i').'.txt';
$SQL="SELECT * FROM m_lista_imolko WHERE m_lista_imolko_estado='P'";
$query=mysql_query($SQL, $link);
while($row=mysql_fetch_array($query)){
$nombre=$row['m_lista_imolko_nombre'];
$telefono=$row['m_lista_imolko_telefono'];
$contenido.=$nombre.",".$telefono."\r\n";

}
$UpdateSQL="UPDATE m_lista_imolko SET m_lista_imolko_estado='A'";
$queryupdate=mysql_query($UpdateSQL, $link);

fopen($nombre_archivo, 'a+');

// Asegurarse primero de que el archivo existe y puede escribirse sobre el.
if (is_writable($nombre_archivo)) {

   // En nuestro ejemplo estamos abriendo $nombre_archivo en modo de adicion.
   // El apuntador de archivo se encuentra al final del archivo, asi que
   // alli es donde ira $contenido cuando llamemos fwrite().
   if (!$gestor = fopen($nombre_archivo, 'a')) {
         echo "No se puede abrir el archivo ($nombre_archivo)";
         exit;
   }

   // Escribir $contenido a nuestro arcivo abierto.
   if (fwrite($gestor, $contenido) === FALSE) {
       echo "No se puede escribir al archivo ($nombre_archivo)";
      // exit;
   }
   
 
   fclose($gestor);

} else {
   echo "No se puede escribir sobre el archivo $nombre_archivo";
} 


$file = $nombre_archivo;
$path = $file;
$type = '';
 
if (is_file($path)) {
    $size = filesize($path);
    if (function_exists('mime_content_type')) {
        $type = mime_content_type($path);
    } else if (function_exists('finfo_file')) {
        $info = finfo_open(FILEINFO_MIME);
        $type = finfo_file($info, $path);
        finfo_close($info); 
    }
    if ($type == '') {
        $type = "application/force-download";
    }
    // Set Headers
    header("Content-Type: $type");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " . $size);
    // Download File
    readfile($path);
} else {
    die("File not exist !!");
} 

?>