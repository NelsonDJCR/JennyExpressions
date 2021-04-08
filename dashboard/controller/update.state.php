<?php
include '../../controller/connection.php';
$id = $_POST['id'];
$state = $_POST['state'];

$e = $con->query("UPDATE bill SET state = '$state' WHERE id_bill = '$id'");
if ($e) {
    echo 1;
}else{
    echo 2;
}

