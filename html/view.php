<!DOCTYPE html>
<html lang="en">
<?php
include '../config/connection.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM brigades WHERE id = '$id'";
$exe = mysqli_query($con, $sql);
$row = mysqli_fetch_array($exe);
?>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/view.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <header>
        <div class="logo"><img src="../img/logo-eventlite.jpg" alt="">
            <h1>Huellas de Bienestar</h1>
        </div>
        <nav>
            <a href="../">Inicio</a>
            <a href="../index.php#nosotros">Sobre nosotros</a>
            <a href="">Galería</a>
            <a href="">Contactenos</a>
        </nav>
    </header>
    <div class="banner_view">
        <div class="content-banner_view">
            <h1><?php echo $row['title'] ?></h1>

        </div>
    </div>
    <br>
    <br>
    <br>
    <section class="info" id="nosotros">
        <div class="info-a">
            <div class="box_info-a">

                <p class="description_view"><?php echo $row['description'] ?></p>
            </div>
        </div>
        <div class="info-b">
            <div class="box_info-b">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" class="img_view" alt="">
            </div>
        </div>
    </section>
    <section class="section_view">
      
    </section>
    <?php include('../layouts/footer.php') ?>
    
</body>


</html>
