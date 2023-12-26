<?php
$sql_lietke = "SELECT * FROM danhmuc ORDER BY thutu DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);

?>

<p>Thêm sản phẩm</p>


<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã loại sản phẩm</td>
            <!-- <td><input type="text" name="maloaisanpham"></td> -->
            <td>
                <select name="maloaisanpham">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($querylietke)) {
                        $i++;
                    ?>
                        <option value="<?php echo $row['id_danhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>

        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giasanpham"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>

</table>