<?php
$sql_lietke = "SELECT * FROM danhmuc ORDER BY thutu DESC";
$querylietke = mysqli_query($mysqli, $sql_lietke);
$sql_sua = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
$querysua = mysqli_query($mysqli, $sql_sua);

?>
<p>Sửa danh mục sản phẩm</p>


<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($querysua)) {
        ?>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham" value="<?php echo $dong['tensp'] ?>"></td>
            </tr>
            <tr>
                <td>Mã loại sản phẩm</td>

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
                <td><input type="text" name="giasanpham" value="<?php echo $dong['gia'] ?>"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="text" name="hinhanh" value="<?php echo $dong['hinhanh'] ?>"> | <input type="file" name="hinhanh">

                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        <?php
        }
        ?>
    </form>

</table>