<?php include('../../extras/coneccion.php');
$link=Conectarse();

if (!isset($_GET['ckl']) || empty($_GET['ckl'])) {
    exit();
}
$id=$_GET['ckl'];
$SQL="SELECT  * from documento WHERE id='$id'";
$query=mysql_query($SQL, $link);
$r=mysql_fetch_array($query);
$fichero=$r['fichero'];
$marca=$r['marca'];
if ($marca=='p'){
 $tipodb="pdf";
  }
 if($marca=='d') {
 $tipodb="doc";
  }
 if ($marca=='x') {
 $tipodb="xls";
  }
 if ($marca=='z') {
 $tipodb="zip";
   }


$root = "../../documentos/";
$file = basename($fichero);
$path = $root.$file;
$type = $tipodb;

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
  header("Content-Type: ".$type."");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " .$size);

    // Download File

    readfile($path);

} else {

    die("No existe el archivo !!");

}

?>