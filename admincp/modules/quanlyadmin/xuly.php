<?php
include('../../config/config.php');
$user = $_POST['user'];
$pass = $_POST['pass'];
if (isset($_POST['xacnhandangky'])) {
    if ($user != '' && $pass != '') {
        $sql_them = "INSERT INTO admin(user,pass) VALUE('" . $user . "', '" . $pass . "')";
        mysqli_query($mysqli, $sql_them);
        header("Location:../../index.php?action=quanlyadmin&query=ds");
    } else {
        header("Location:../../index.php?action=quanlyadmin&query=them");
    }
} else {
    $id = $_GET['id_admin'];
    $sql_xoa = "DELETE FROM admin WHERE id_admin='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:./index.php?action=quanlyadmin&query=ds");
}
