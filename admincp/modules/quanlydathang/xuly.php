<?php
include('../../config/config.php');
$id = $_GET['iddathang'];
$sql_xoa = "UPDATE dathang SET trangthai = 1 WHERE id_dathang='" . $id . "'";
mysqli_query($mysqli, $sql_xoa);
header('Location:./index.php?action=quanlydathang&query=dsdh');
