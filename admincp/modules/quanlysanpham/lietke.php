<?php
$sql_lietke = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);

?>
<p>Danh sách danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">

    <tr>
        <td>Id</td>
        <td>Tên sản phẩm</td>
        <td>Mã loại</td>
        <td>Giá</td>
        <td>Hình ảnh</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($querylietke)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['maloaisp'] ?></td>
            <td><?php echo $row['gia'] ?></td>
            <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
            <td>
                <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> |
                <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>