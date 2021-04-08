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
        <form id="form_user" class="from">
            <button id="btnClose" class="btnClose">X</button>
            <h2 class="titleFrom">Editar Catálogo</h2><br>
            <input type="text" name="id" style="display: none;" id="id"  placeholder="Nombre">
            
            <label for="">Nombre</label>
            <input style="color:rgb(105, 105, 105);" name="name" type="text" id="name" class="input border" placeholder="Nombre">
            
            <label for="">Teléfono</label>
            <input style="color:rgb(105, 105, 105);" name="phone" type="text" id="phone" class="input border" placeholder="Nombre">
            
            <label for="">Dirección</label>
            <input style="color:rgb(105, 105, 105);" name="address" type="text" id="address" class="input border" placeholder="Nombre">
            
            <label for="">Ciudad</label>
            <input style="color:rgb(105, 105, 105);" name="city" type="text" id="city" class="input border" placeholder="Nombre">
            
            <label for="">Correo</label>
            <input style="color:rgb(105, 105, 105);" name="email" type="text" id="email" class="input border" placeholder="Nombre">
            <br>
            <input type="submit" id="btn_user" class="btn" value="Actualizar">
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
    <h1 class="title_table">Lista de usuarios</h1>
    <p class="labelSearch">Filtrar</p>
    <input type="text" class="inputSearch" placeholder="Buscar..." id="inputBusqueda">
    <br>
    <br>
    <table class="tablex">
        <tr class="tablex_primary">
            <td>ID</td>
            <td>Nombre</td>
            <td>Teléfono</td>
            <td>Dirección</td>
            <td>Ciudad</td>
            <td>Correo</td>
            <td colspan="2">Acciones</td>
        </tr>
        <tbody id="myTable"></tbody>
    </table>
    <script src="../assets/plugins/Jquery/jquery.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/modal.users.js"></script>
    <script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>

</body>
</html>