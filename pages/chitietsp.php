<?php
include("../admincp/config/config.php");

if (isset($_GET['id_sanpham'])) {
    $id_sanpham = $_GET['id_sanpham'];
    $sql_dh = "SELECT * FROM sanpham WHERE id_sanpham = '" . $id_sanpham . "'";
    $querydh = mysqli_query($mysqli, $sql_dh);
?>

    <h1 style="text-align: center;">Đặt hàng</h1>
    <form action="./dathang.php?id_sanpham=<?php echo $id_sanpham; ?>" method="post">
        <table border="1" width="50%" style="border-collapse: collapse;">

            <tr>
                <td>Tên sản phẩm</td>
                <td>Giá</td>
                <td>Hình ảnh</td>
                <td>Số lượng</td>
                <td></td>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($querydh)) {
            ?>
                <tr>
                    <td><?php echo $row['tensp'] ?></td>
                    <td><?php echo $row['gia'] ?></td>
                    <td><img src="../admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
                    <td>
                        <input type="number" name="sl" min="1" value="1">
                    </td>
                    <td>
                        <input type="submit" value="Đặt hàng">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
<?php
} else {
    echo "Không tìm thấy sản phẩm.";
}
?>