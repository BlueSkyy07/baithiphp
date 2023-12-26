<?php
$sql_tk = "SELECT * FROM admin ORDER BY id_admin DESC";
$querytk = mysqli_query($mysqli, $sql_tk);
?>

<h2>THÊM TÀI KHOẢn ADMIN</h2>
<form action="modules/quanlyadmin/xuly.php" method="post">
    <p>Tài khoản</p>
    <input type="text" name="user">
    <p>Mật khẩu</p>
    <input type="text" name="pass">
    <br><br><br>
    <input type="submit" value="Đăng ký" name="xacnhandangky">

</form>

<?php

?>