<?php 
include '../controller/connection.php';
$id = $_POST['id'];
$exe=$con->query("DELETE FROM products WHERE id_products = '$id'");
if ($exe) {
    echo 1;
}