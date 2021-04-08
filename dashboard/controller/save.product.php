<?php
include '../../config/connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
// 
$sql = 
"INSERT INTO brigades (title, description, img) VALUES ('$name','$description','$img')";

$exe = $con->query($sql);
if ($exe) {
    echo "";
}else{
    echo error_reporting();
}

