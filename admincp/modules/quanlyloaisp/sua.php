<?php
$sql_sua = "SELECT * FROM danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
$querysua = mysqli_query($mysqli, $sql_sua);

?>
<p>Sửa danh mục sản phẩm</p>


<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlyloaisp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($querysua)) {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục"></td>
            </tr>
        <?php
        }
        ?>
    </form>

</table>