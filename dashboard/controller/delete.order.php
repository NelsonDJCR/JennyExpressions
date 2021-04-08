<?php
include '../../controller/connection.php';
$id = $_POST['id'];

$e = $con->query("DELETE FROM  bill WHERE id_bill = '$id'");
if ($e) {
    echo 1;
}else{
    echo 2;
}
