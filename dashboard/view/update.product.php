<!DOCTYPE html>
<html lang="es">
<?php
include '../../controller/connection.php';


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $exe = $con->query("SELECT * FROM products WHERE id_products = '$id'");
    $catalog = $con->query("SELECT * FROM catalogs");
    $row = $exe->fetch_assoc();
    $id_catalog = $row['id_catalog'];
    $catalogActu = $con->query("SELECT * FROM catalogs WHERE id_catalog = '$id_catalog'");
    $rowCat = $catalogActu->fetch_assoc();

?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/update.product.css">
        <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
        <link rel="stylesheet" href="../../assets/plugins/font/font.css">
        <link rel="stylesheet" href="../../assets/plugins/sweetAlert/sweetAlert.css">
    </head>
    <!-- <div style="z-index: 1;" class="entrance animate__animated  animate__bounceOut">
    <div class="box-img_entrance ">
        <img src="https://www.hostgator.mx/blog/wp-content/uploads/2020/03/04-abril-Apps-online-para-edi%C3%A7%C3%A3o-de-fotos.png">
    </div>
</div> -->

    <body>
        <div class="container">
            <div class="box_content">
                <h3>Editar producto</h3>
                <div class="box-img">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>">

                    <form action="../controller/update.product.img.php" method="post" onsubmit="return validarimg();" enctype="multipart/form-data" class="form_img">
                        <br>
                        <div class="file-box ">
                            <p class="file-txt">Seleccione Archivo</p>
                            <input type="text" style="display: none;" name="id_product" value="<?php echo $id ?>">
                            <input type="file" name="img" id="img" class="input-file" />
                        </div>
                        <input type="submit" name="btn_img" class="btn-small" value="¡Actualizar imagen!">
                    </form>
                </div>
                <div class="box-data">
                    <form id="form_data" class="form_data">
                        <label for="">Catálogo</label>
                        <select name="catalog" class="input input-select border">
                            <option value="<?php echo $rowCat['id_catalog'] ?>"><?php echo $rowCat['name'] . " - Actual"  ?></option>
                            <?php
                            while ($rowc = $catalog->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $rowc['id_catalog'] ?>"> <?php echo $rowc['name'] ?> </option>
                            <?php } ?>
                        </select>
                        <label for="" class="label">Nombre</label>
                        <input name="id" type="text" style="display: none;" class="input input-text border" value="<?php echo $row['id_products'] ?>" placeholder="Nombre del producto" />
                        <input name="name" type="text" class="input input-text border" value="<?php echo $row['name'] ?>" placeholder="Nombre del producto" />
                        <label for="" class="label">Precio</label>
                        <input name="price" type="text" class="input input-text border" value="<?php echo $row['price'] ?>" placeholder="Costo del producto" />
                        <label for="" class="label">Talla</label>
                        <input name="size" type="text" class="input input-text border" value="<?php echo $row['size'] ?>" placeholder="Tallas disponibles" />
                        <label for="" class="label">Ventas</label>
                        <input name="sold" type="text" class="input input-text border" value="<?php echo $row['sold'] ?>" placeholder="Total ventas" />
                        <br><br>
                        <input type="submit" id="btn_data" class="btn" value="Actualizar información">
                    </form>
                </div>
            </div>
            <br>

        </div>

    </body>
    <script src="../../assets/plugins/Jquery/jquery.js"></script>
    <script src="../assets/js/update.product.img.js"></script>
    <script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>

</html>
<?php } else {
    echo 'No tiene acceso';
}
?>