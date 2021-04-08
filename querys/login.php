<?php 
include '../config/connection.php';

$user = $_POST['user'];
$pwd = $_POST['password'];

if ($user == 'admin@huellasbienestar.com' && $pwd == 'Colombia2020') {
    session_start();
    $_SESSION['admin'] = '1';
    echo '200';
}else{
    echo '500';
}

?>