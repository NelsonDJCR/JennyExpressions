<!DOCTYPE html>
<html lang="es">
<?php include '../controller/connection.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.form.css" />
    <link rel="stylesheet" href="../assets/plugins/font/font.css" />
    <link rel="stylesheet" href="../assets/css/styles.tables.css">
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../assets/css/styles.modal.css">
    <link rel="stylesheet" href="../../assets/plugins/sweetAlert/sweetAlert.css">
</head>
<div class="container_modal" id="contanier_modal">
    <div class="modal" id="modal">

    </div>
    <div class="contaner_form">
        <form id="form_state" class="from">
            <button id="btnClose" class="btnClose">X</button>
            <h2 class="titleFrom">Cambiar Estado</h2><br>
            <input type="text" name="id" style="display: none;" id="id" placeholder="Nombre">

            <label for="">Estado</label>
            <select style="color: black;" name="state" id="state" class="input input-select border">
                <option value="0">-- --</option>
                <option value="1">Pago Pendiente</option>
                <option value="2">En camino</option>
                <option value="3">Entregado</option>
            </select>
            <input type="submit" id="btn_state" class="btn" value="Actualizar">
            <br><br>
        </form>
    </div>
</div>




<body>
    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/shiny-white-gray-background-with-wavy-lines_1017-25101.jpg?size=626&ext=jpg");
        }
    </style>
    <h1 class="title_table">Ordenes</h1>
    <p class="labelSearch">Filtrar</p>
    <input type="text" class="inputSearch" placeholder="Buscar..." id="inputBusqueda">
    <br>
    <br>
    <table class="tablex">
        <tr class="tablex_primary">
            <td>Factura</td>
            <td>ID Usuario</td>
            <td>Nombre</td>
            <td>Teléfono</td>
            <td>Ciudad</td>
            <td>Dirección</td>
            <td>Productos</td>
            <td>Tallas</td>
            <td>Total</td>
            <td>Método</td>
            <td>Estado</td>
            <td colspan="2">Acciones</td>
        </tr>
        <tbody id="myTable"></tbody>
    </table>
    <script src="../assets/plugins/Jquery/jquery.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/modal.orders.js"></script>
    <script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>

</body>

</html>