<?php

include 'connection.php';

$name = $_POST['name'];
$description = $_POST['description'];

$exe = $con->query("SELECT * FROM catalogs WHERE name = '$name'");

$row = $exe->fetch_assoc();

$id = $row['id_catalog'];

echo  $id;