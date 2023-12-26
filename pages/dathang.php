<?php
session_start();
if (isset($_SESSION['dathangtc'])) {
    echo $_SESSION['dathangtc'];
?>
    <a href="../index.php">Trở về trang chủ</a>
<?php
}
include("../admincp/config/config.php");

if (isset($_GET['id_sanpham']) && isset($_POST['sl'])) {
    $id_sanpham = $_GET['id_sanpham'];
    $so_luong = $_POST['sl'];

    $sql_sanpham = "SELECT * FROM sanpham WHERE id_sanpham = '$id_sanpham'";
    $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
?>
    <h1>Xác nhận đặt hàng</h1>

    <table border="1" width="50%" style="border-collapse: collapse;">

        <tr>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_sanpham)) {
        ?>
            <tr>
                <td><?php echo $row['tensp'] ?></td>
                <td><?php echo $row['gia'] ?></td>
                <td><img src="../admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
                <td>
                    <?php echo ($so_luong); ?>
                </td>
                <td>
                    <?php
                    $tong_tien = $row['gia'] * $so_luong;
                    echo ($tong_tien)
                    ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <h2>Thông tin khách hàng</h2>
    <form action="./xulydathang.php?id_sanpham=<?php echo $id_sanpham; ?>" method="post">
        <p>Họ và tên</p>
        <input type="text" name="hoten">
        <p>Địa chỉ</p>
        <input type="text" name="diachi">
        <p>Email</p>
        <input type="text" name="email">
        <p>Số điện thoại</p>
        <input type="text" name="sdt">
        <input type="text" value="<?php echo $so_luong ?>" name="sl" hidden="true">
        <input type="text" value="<?php echo $tong_tien ?>" name="thanhtien" hidden="true">

        <br><br><br>
        <input type="submit" value="Xác nhận đặt hàng" name="xacnhandathang">

    </form>

<?php
}
?>