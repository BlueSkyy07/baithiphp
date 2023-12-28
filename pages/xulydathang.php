<?php
include("../admincp/config/config.php");
$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$id_sanpham = $_GET['id_sanpham'];
$sl = $_POST['sl'];
$tt = $_POST['thanhtien'];
if (isset($_POST['xacnhandathang'])) {
    $sql_them = "INSERT INTO dathang(hoten,diachi,email,id_sanpham,sdt,sl,thanhtien, trangthai) VALUE('" . $hoten . "', '" . $diachi . "', '" . $email . "','" . $id_sanpham . "', '" . $sdt . "', '" . $sl . "', '" . $tt . "', 0)";
    mysqli_query($mysqli, $sql_them);
    session_start();
    $_SESSION['dathangtc'] = "Đặt hàng thành công!!";
    header("Location:./dathang.php");
}
