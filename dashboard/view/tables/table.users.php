<?php
include "../../controller/connection.php";
$exe = $con->query("SELECT * FROM users ORDER BY id_user DESC");
while ($row = $exe->fetch_assoc()) {
    $data = $row['id_user'] ."||".$row['name']."||".$row['phone']."||".$row['city']."||".$row['email']."||".$row['address']; 
?>
    <tr class="trhover">
        <td><?php echo $row['id_user'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td>
            <button onclick="updateUser('<?php echo $data ?>');" class="btnx">Editar</button>
            <button onclick="deleteUser('<?php echo $data ?>');" class="btnx">Eliminar</button>
        </td>
    </tr>
<?php } ?>