<?php
include '../../../controller/connection.php';
$exe = $con->query("SELECT * FROM bill ORDER BY id_bill DESC");

while ($row = $exe->fetch_assoc()) {
    $datax = $row['id_bill'] . "||" . $row['state'];
?>
    <tr class="trhover">

        <td><?php echo $row['id_bill'] ?></td>
        <td><?php echo $row['id_user'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td style="max-width: 150px;"><?php echo $row['products'] ?></td>
        <td><?php echo $row['size_select'] ?></td>
        <td>$ <?php echo number_format($row['total']) ?></td>
        <td><?php echo $row['method'] ?></td>
        <td><?php echo $row['state'] ?></td>

        
        <td>
            <button onclick="edit('<?php echo $datax ?>');" class="btnx">Editar Estado</button>
            <button onclick="deleteOrder('<?php echo $row['id_bill'] ?>');" class="btnx">&nbsp;&nbsp;&nbsp;Eliminar&nbsp;&nbsp;&nbsp;</button>

        </td>
    </tr>
<?php } ?>