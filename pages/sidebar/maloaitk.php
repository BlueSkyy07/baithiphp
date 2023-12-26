<?php
if (isset($_GET['id_danhmuc'])) {
    $id_danhmuc = $_GET['id_danhmuc'];
    $sql_tk = "SELECT * FROM sanpham WHERE maloaisp = '" . $id_danhmuc . "'";
    $query_tk = mysqli_query($mysqli, $sql_tk);
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
} else {
    echo "Không có sản phẩm nào.";
}
?>