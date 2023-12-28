<?php
$sql_lietke = "SELECT * FROM dathang INNER JOIN sanpham ON dathang.id_sanpham = sanpham.id_sanpham";
$querylietke = mysqli_query($mysqli, $sql_lietke);

?>
<p>Danh sách đặt hàng</p>
<table border="1" width="50%" style="border-collapse: collapse;">

    <tr>
        <td>Họ tên</td>
        <td>Địa chỉ</td>
        <td>Email</td>
        <td>Số điện thoại</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td>Trạng thái</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($querylietke)) {
    ?>
        <tr>
            <td><?php echo $row['hoten']  ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['sdt'] ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['sl'] ?></td>
            <td><?php echo $row['thanhtien'] ?></td>
            <td><?php echo $row['trangthai'] ?></td>
            <td><a href="?action=quanlydathang&query=xn&iddathang=<?php echo $row['id_dathang'] ?>">Xác nhận</a></td>
        </tr>
    <?php
    }
    ?>
</table>