<?php
include '../controller/connection.php';
$name = $_POST['catalogSave_name'];
$desc = $_POST['catalogSave_desctiption'];
$exe = $con->query("INSERT INTO catalogs (name, description) VALUES ('$name','$desc')");
if ($exe) {
    echo 1;
}


