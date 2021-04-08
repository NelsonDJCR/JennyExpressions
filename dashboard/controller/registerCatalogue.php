<?php 
include "connection.php";
echo $name = $_POST['name'];
echo $description = $_POST['description'];

$exe = $con->query("INSERT INTO catalogs (name, description) VALUES ('$name','$description')");
if ($exe) {
    echo 1;
}

?>