<?php
session_start();

include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['pass'];
    $sql = "SELECT * FROM admin WHERE user = '" . $taikhoan . "' AND pass = '" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.");</script>';
        header("Location:login.php");
    }
}
if (isset($_GET['quenmk'])) {
    $quenmk = $_GET['quenmk'];
    if ($quenmk == 1) {
        echo '<script>alert("Vui lòng liên hệ qua hotline: 0972084822.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper-login">
        <a href="../../baithi/index.php">Trở về trang chủ</a>

        <form action="" method="POST">
            <table border="1" class="tbllogin">
                <tr>
                    <td colspan="2">
                        <h3>Đăng nhập ADMIN</h3>
                    </td>
                </tr>
                <tr>
                    <td>Tài khoản</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="login.php?quenmk=1">Quên mật khẩu</a></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login" name="dangnhap"></td>
                </tr>
            </table>
        </form>
    </div>
    <script type="text" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>