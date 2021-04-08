<?php 
include "connection.php";
// Catalogs
$catalogs = $con->query("SELECT *FROM catalogs");
$catalogs = mysqli_num_rows($catalogs);
// Products
$products = $con->query("SELECT *FROM products");
$products = mysqli_num_rows($products);
// Catalogs
$users = $con->query("SELECT *FROM users");
$users = mysqli_num_rows($users);
