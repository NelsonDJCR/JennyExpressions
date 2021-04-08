<?php 

include '../../controller/connection.php';

$id = $_POST['id'];

$exe = $con->query("DELETE FROM catalogs WHERE id_catalog = '$id'");
$exe2 = $con->query("DELETE FROM products WHERE id_catalog = '$id';");
if ($exe && $exe2) {
    echo 1;
}
else{
    echo "Error";
}