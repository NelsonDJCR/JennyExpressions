<?php
include '../../../controller/connection.php';
$exe = $con->query("SELECT * FROM catalogs ORDER BY id_catalog DESC");
while ($row = $exe->fetch_assoc()) {
    $id = "id=".$row['id_catalog'];
    $datax = $row['name'] . "||" . $row['description'] . "||" . $row['id_catalog'];
?>
    <tr class="trhover">

        <td><?php echo $row['id_catalog'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td style="max-width: 150px;"><?php echo $row['description'] ?></td>

        <td>
            <?php
            $id_catalog = $row['id_catalog'];
            $exe2 = $con->query("SELECT * FROM products WHERE id_catalog = '$id_catalog' ");
            $data = mysqli_num_rows($exe2);
            echo $data;

            ?>

        </td>
        <td></td>
        <td>
            <button onclick="edit('<?php echo $datax ?>');" class="btnx">Editar</button>
            <button onclick="deleteCatalog('<?php echo $id ?>');" class="btnx">Eliminar</button>

        </td>
    </tr>
<?php } ?>