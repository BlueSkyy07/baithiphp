<?php
include("../admincp/config/config.php");

if (isset($_POST['update'])) {
    // Lấy dữ liệu từ form
    $id_sanpham = $_POST['id_sanpham'];
    $soluong_moi = $_POST['sl'];

    // Thực hiện câu lệnh SQL để cập nhật số lượng trong cơ sở dữ liệu
    $sql_update = "UPDATE sanpham SET soluong = '$soluong_moi' WHERE id_sanpham = '$id_sanpham'";
    $query_update = mysqli_query($mysqli, $sql_update);

    // Kiểm tra và xử lý các tác vụ khác (ví dụ: tính toán lại thành tiền)

    // Chuyển hướng hoặc hiển thị thông báo khi cập nhật thành công hoặc không thành công
    if ($query_update) {
        header("Location: chitietsp.php?id_sanpham=$id_sanpham");
        exit();
    } else {
        echo "Lỗi khi cập nhật số lượng.";
    }
} else {
    // Hiển thị thông báo hoặc chuyển hướng người dùng khi không có dữ liệu được gửi
    echo "Không có dữ liệu được gửi.";
}
