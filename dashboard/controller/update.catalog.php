<?php
include '../../controller/connection.php';
$id = $_POST['id'];
$name = $_POST['update_name'];
$desc = $_POST['update_description'];
$sql = "UPDATE catalogs SET name = '$name', description = '$desc' WHERE id_catalog = $id";
$exe = $con->query($sql);
if ($exe) {
    echo 1;
}