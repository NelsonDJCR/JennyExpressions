<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Huellas de Bienestar</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <header>
        <div class="logo"><img src="img/logo-eventlite.jpg" alt="">
            <h1>Huellas de Bienestar</h1>
        </div>
        <nav>
            <a href="#">Inicio</a>
            <a href="index.php#nosotros">Sobre nosotros</a>
            <a href="">Galería</a>
            <a href="">Contactenos</a>
        </nav>
    </header>

    <div class="banner">
        <div class="content-banner">
            <h2 class="">Fundacion</h2>
            <h1 class="title-banner"> Huellas de Bienestar</h1>
            <p>Animando a muchas personas para que no desistan <br>en la búsqueda de un país lleno de paz. <br> #Familia
                #FUHUBI #Somospartedelcambio </p>
        </div>
    </div>
    <section class="info" id="nosotros">
        <div class="info-a">
            <div class="box_info-a">
                <h1>Sobre nosotros</h1>
                <p>La Fundación huellas de bienestar, es una organización sin ánimo de lucro que viene trabajando en el diseño y ejecución de programas y proyectos para el desarrollo social, económico y cultural de las poblaciones más vulnerables del territorio colombiano, aportando los recursos necesarios para trabajar por el bienestar de la gente sin olvidar la atención integral de la población, mejorando su calidad de vida, invirtiendo en capital social, fomentando estilos de vida saludables y motivando la participación ciudadana con el fin de crear hechos de paz.</p>
                <div class="box_btn-info"><button class="btn-info">Saber más!</button></div>
            </div>
        </div>
        <div class="info-b">
            <div class="box_info-b">
                <img src="img/product.jpg" class="img_info-b" alt="">
            </div>
        </div>
    </section>
    <section class="section">
        <h1 class="title-banner">Huellas de Bienestar</h1>
        <p class="txt-banner">La FUNDACIÓN HUELLAS DE BIENESTAR, es una organización que desarrolla proyectos sociales en pro de las comunidades mas vulnerables del territorio nacional, enfocándonos principalmente en servicios de salud.</p>
        <div class="box_btn-banner">
            <button class="btn-banner" onclick="window.location = 'index.html#eventos';">Ver proyectos</button>
            <button class="btn-banner active">Más Información</button>
        </div>
    </section>
    <div class="" id="eventos"></div>
    <section class="section_our-products">
        <h1 class="title">BRIGADAS</h1>

        <div class="contenedor">


            <?php
            include 'config/connection.php';
            $sql = "SELECT * FROM brigades";
            $exe = mysqli_query($con, $sql);
            while ($row = $exe->fetch_assoc()) {
            ?>
                <div class="item" onclick="window.location = 'html/view.php?id=<?php echo $row['id'] ?>'">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" class="img">
                    <div class="content-card">
                        <h1 class="title-card"><?php echo $row['title'] ?></h1>
                        <p><?php echo $row['description'] ?></p>
                        <p class="price">Ver más</p>

                    </div>
                </div>
            <?php } ?>




        </div>
    </section>
    <?php include('layouts/footer.php'); ?>



</body>

</html>