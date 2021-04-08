<?php 
$server   = "localhost" ;
$database = "db_huellasdebienestar";
$user     = "root";
$password = "";

$con = new mysqli($server, $user, $password, $database);

if ($con -> connect_error) {
    die("No se pudo establecer la conexión");
}
?>