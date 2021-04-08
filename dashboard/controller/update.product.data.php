<?php
include '../../controller/connection.php';
$id_catalogs = $_POST['catalog'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$sold = $_POST['sold'];
$id = $_POST['id'];

$exe=$con->query("UPDATE products SET  id_catalog= '$id_catalogs', name = '$name', price = '$price', size = '$size', sold = '$sold' WHERE id_products = '$id'");
if ($exe) {
    echo 1;
}
else{
    echo 2;
}
