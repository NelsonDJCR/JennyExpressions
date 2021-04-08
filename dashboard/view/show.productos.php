<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.form.css" />
    <link rel="stylesheet" href="../assets/plugins/font/font.css" />
    <link rel="stylesheet" href="../assets/css/styles.tables.css">
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../../assets/plugins/sweetAlert/sweetAlert.css">
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
</head>
<?php include '../controller/connection.php' ?>
<style>
    body {
        background-image: url("https://img.freepik.com/free-vector/elegant-white-background-with-shiny-lines_1017-17580.jpg?size=626&ext=jpg");
    }
</style>

<body>

    <h1 class="title_table">Lista de productos</h1>
    <p class="labelSearch">Filtrar</p>
    <input type="text" class="inputSearch" placeholder="Buscar..." id="inputBusqueda">
    <br>
    <br>
    <table class="tablex">
        <thead>
            <tr class="tablex_primary">
                <td>ID</td>
                <td>ID_catalogo</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Tallas</td>
                <td>Ventas</td>
                <td colspan="2">Acciones</td>

            </tr>
        </thead>
        <tbody id="myTable">

            

        </tbody>

    </table>
</body>
<script src="../assets/plugins/Jquery/jquery.js"></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/modal.products.js"></script>
<script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>


</html>