<?php
  include('../coneccion.php');
  $link=Conectarse();

$fp = fopen ( "trabajadores.csv" , "r" );
while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) { // Mientras hay líneas que leer...

    $i = 0;
    foreach($data as $row) {
	$row=str_replace('-', '', $row);


$sep=explode(';', $row);
$nombresolo=$sep[0];
$apellidosolo=$sep[1];


$separa=explode('/', $apellidosolo);
$apellido=$separa[0];
$telefono=$separa[1];
$nombre_completo=$nombresolo." ".$apellido;

        echo "".$nombre_completo." ".$telefono." <br>"; // Muestra todos los campos de la fila actual
		$query="INSERT INTO m_lista_imolko VALUES (Null, '$nombre_completo', '$telefono', 'A')";
		$exe=mysql_query($query, $link);
        $i++ ;

    }

    echo "<br><br>";

}
fclose ( $fp );
?> 