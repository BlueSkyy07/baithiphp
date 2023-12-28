<?php
include('../../config/config.php');
$id = $_GET['iddathang'];
$sql_xoa = "DELETE FROM dathang WHERE id_dathang='" . $id . "'";
mysqli_query($mysqli, $sql_xoa);
header('Location:./index.php?action=quanlydathang&query=dsdh');
