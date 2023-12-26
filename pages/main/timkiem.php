<?php
if (isset($_POST['timkiem'])) {
    $txttk = $_POST['txttk'];
}
$sql_tk = "SELECT * FROM sanpham WHERE tensp LIKE '%" . $txttk . "%'";
$query_tk = mysqli_query($mysqli, $sql_tk);
?>
<h3>Sản phẩm tìm kiếm</h3>
<?php
while ($row = mysqli_fetch_array($query_tk)) {
?>
    <ul class="product_list">

        <li>
            <img src="../../../baithi/admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px" height="180px">
            <p class="title_product"><?php echo $row['tensp'] ?></p>
            <p class="price_product"><?php echo $row['gia'] ?> VND</p>
        </li>

    </ul>
<?php
}
?>