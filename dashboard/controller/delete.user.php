<?php 
include '../controller/connection.php';
$id = $_POST['id'];
$exe=$con->query("DELETE FROM users WHERE id_user = '$id'");
if ($exe) {
    echo 1;
}