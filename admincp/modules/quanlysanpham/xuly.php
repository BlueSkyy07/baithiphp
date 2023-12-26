<?php
include('../../config/config.php');
$tensp = $_POST['tensanpham'];
$maloaisp = $_POST['maloaisanpham'];
$giasp = $_POST['giasanpham'];
// $hinhanh = $_POST['hinhanh'];
//xử lý hình ảnh

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
// move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO sanpham(tensp,maloaisp,gia,hinhanh) VALUE('" . $tensp . "', '" . $maloaisp . "', '" . $giasp . "','" . $hinhanh . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    $sql_sua = "UPDATE sanpham SET tensp = '" . $tensp . "', maloaisp = '" . $maloaispsp . "', gia = '" . $giasp . "', hinhanh = '" . $hinhanh . "' WHERE id_sanpham = '$_GET[idsanpham]'";
    mysqli_query($mysqli, $sql_sua);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
