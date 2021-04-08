<?php
include '../../../controller/connection.php';
$exe = $con->query("SELECT * FROM products ORDER BY id_products DESC");
while ($row = $exe->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['id_products'] ?></td>
        <td><?php echo $row['id_catalog'] ?></td>
        <td><?php echo $row['name']  ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['sold'] ?></td>
        <td>
            <button onclick="editProduct(<?php echo  $row['id_products'] ?>)" class="btnx">Editar</button>
            <button onclick="deleteProduct(<?php echo  $row['id_products'] ?>)" class="btnx">Eliminar</button>
        </td>
    </tr>
<?php } ?>