<?php 
$server   = "localhost" ;
$database = "projects_candyjazz";
$user     = "root";
$password = "";

$con = new mysqli($server, $user, $password, $database);

if ($con -> connect_error) {
    die("No se pudo establecer la conexión");
}
?>