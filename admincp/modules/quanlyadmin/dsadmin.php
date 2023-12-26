<?php
$sql_lietke = "SELECT * FROM admin ORDER BY id_admin DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);

?>
<p>Danh sách tài khoản</p>
<table border="1" width="50%" style="border-collapse: collapse;">

    <tr>
        <td>Tài khoản</td>
        <td>Mật khẩu</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($querylietke)) {
    ?>
        <tr>
            <td><?php echo $row['user'] ?></td>
            <td><?php echo $row['pass'] ?></td>
            <td>
                <a href="?action=quanlyadmin&query=xoa&id_admin=<?php echo $row['id_admin'] ?>">Xóa</a>
            </td>

        </tr>
    <?php
    }
    ?>
</table>