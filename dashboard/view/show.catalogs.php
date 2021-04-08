<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.form.css" />
    <link rel="stylesheet" href="../assets/plugins/font/font.css" />
    <link rel="stylesheet" href="../assets/css/styles.tables.css">
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../assets/css/styles.modal.css">
    <link rel="stylesheet" href="../../assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../../assets/plugins/sweetAlert/sweetAlert.css">
    
</head>
<div class="container_modal" id="contanier_modal">
    <div class="modal" id="modal">

    </div>
    <div class="contaner_form">
        <form id="updateData" class="from">
            <button id="btnClose" class="btnClose">X</button>
            <h2 class="titleFrom">Editar Catálogo</h2><br>
            <label for="">Nombre</label>
            <input type="text" name="id" style="display: none;" id="uptate_id"  placeholder="Nombre">
            <input style="color:rgb(105, 105, 105);" name="update_name" type="text" id="update_name" class="input border" placeholder="Nombre">
            <label for="">Descripción</label>
            <textarea style="color:rgb(105, 105, 105);" name="update_description" id="update_description" class="input textarea border" placeholder="Text Area Big"></textarea>

            <br>
            <input type="submit" id="modalUpdate" class="btn" value="Actualizar">
            <br><br>
        </form>
    </div>
</div>
<style>
    body {
        background-image: url("https://img.freepik.com/free-vector/abstract-paper-hexagon-white-background_51543-7.jpg?size=626&ext=jpg");
    }
</style>

<body>


    <h1 class="title_table">Lista de catálogos</h1>
    <p class="labelSearch">Filtrar</p>
    <input type="text" class="inputSearch" placeholder="Buscar..." id="inputBusqueda">
    <br>
    <br>
    <table class="tablex">
        <tr class="tablex_primary">
            <td>ID_catalog</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Productos</td>
            <td colspan="2">Acciones</td>

        </tr>
        <tbody id="myTable">

            


        </tbody>
    </table>
    



    <br>
    <br>
    <br>
    <br>
    <br>


    <script src="../assets/plugins/Jquery/jquery.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/modal.catalogs.js"></script>
    <script src="../../assets/plugins/sweetAlert/sweetAlert.js"></script>
    <!-- JS, Popper.js, and jQuery -->

</body>

</html>