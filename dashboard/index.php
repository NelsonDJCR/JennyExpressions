<!DOCTYPE html>
<html lang="es">
<?php
session_start();
include 'controller/captureQuantity.php';
if (isset($_SESSION['admin'])) {
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="shortcut icon" href="../assets/img/logo/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/plugins/font/font.css">
        <link rel="stylesheet" href="../plugins/animate/animate.min.css">
        <script src="../plugins/jquery.js"></script>

        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <!-- animate__animated animate__backOutUp -->
        <div id="loader" class="box_before 
        ">
            <img src="https://i.pinimg.com/originals/43/d2/f8/43d2f89e92120d235fa45e8ec4b3cd47.gif" alt="">
        </div>




        <div class="top">
            <p>Panel de administración <b>Huellas de Bienestar &nbsp;&nbsp;&nbsp;&nbsp;</b></p>
        </div>

        <div class="work-area">

            <div class="box_menu">
                <div class="box_logo">
                    <img class="icon-dashboard" src="assets/img/config.png" alt="">
                </div>
                <ul>
                    <br>
                    <h3><a target="iframe" href="view/home.php" style="color: white;" href="">Admin</a></h3>
                    <li><a target="iframe" href="view/save.newProducts.php">Nueva Brigada</a></li><br>
                    <li><a target="iframe" href="view/save.newProducts.php">Brigadas</a></li><br>
                    <li><a target="iframe" href="view/show.catalogs.php">Galería</a></li><br>
                    <li><a target="iframe" href="view/show.productos.php">Mensajes</a></li><br>
                    <li><a href="../controller/logout.php">Cerrar Sesión </a></li>
                </ul>
            </div>
            <div class="box-iframe">
                <iframe name="iframe" class="iframe" src="view/home.php" iframeBorder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <footer>
            <p>Huellas de Bienestar © 2021</p>
        </footer>
    </body>

</html>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("#loader").addClass('animate__animated').addClass('animate__fadeOut');
        }, 2000);
        setTimeout(function() {
            $("#loader").remove();
        }, 3000);
    });
</script>
<?php

} else {
    header("Location: ../index.php");
}
?>