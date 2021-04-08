<?php
include '../../controller/connection.php';
$id = $_POST['id_product'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$exe=$con->query("UPDATE products SET img = '$img' WHERE products.id_products = '$id'");
if ($exe) {
    header("location:../view/update.product.php?id=$id&r=ready ");
    
}

