<?php
$sql_loai = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
$queryloai = mysqli_query($mysqli, $sql_loai);
?>

<div class="sidebar">
    <h3 style="text-align: center;">Danh sách loại</h3>
    <form action="index.php" method="GET">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($queryloai)) {
        ?>
            <ul class="list_sidebar">
                <li><a href="index.php?quanly=maloaitk&id_danhmuc=<?php echo $row['id_danhmuc']; ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            </ul>
        <?php
        }
        ?>
    </form>
</div>