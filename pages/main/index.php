<?php
$sql_lietke = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);
?>

<h3>Sản phẩm mới nhất</h3>
<?php
while ($row = mysqli_fetch_array($querylietke)) {
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