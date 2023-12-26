<?php
$sql_lietke = "SELECT * FROM danhmuc ORDER BY thutu DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);

?>
<p>Danh sách danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">

    <tr>
        <td>Id</td>
        <td>Tên danh mục</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($querylietke)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="modules/quanlyloaisp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> |
                <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
            </td>

        </tr>
    <?php
    }
    ?>
</table>