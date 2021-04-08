<?php
include '../../controller/connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$e = $con->query(
    "UPDATE users SET name = '$name', phone = '$phone', address = '$address', city = '$city', email = '$email' WHERE id_user = '$id'"
);
if ($e) {
    echo 1;
} else {
    echo 2;
}
