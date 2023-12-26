<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a> </li>
        <li><a href="index.php?quanly=danhmucsanpham&id=1">Danh sách sản phẩm</a></li>
        <li>
            <form action="index.php?quanly=timkiem" method="POST">
                <input type="text" name="txttk" placeholder="Tìm kiếm">
                <input type="submit" value="Tìm" name="timkiem">
            </form>
        </li>
        <?php
        session_start();
        if (!isset($_SESSION['dangnhap'])) {
        ?>
            <li>
                <form action="../../baithi/admincp/index.php" method="post">
                    <input type="submit" value="Đăng nhập">
                </form>
            </li>
        <?php
            // header('Location:index.php');
        } else {
        ?>
            <li>
                <form action="../../baithi/admincp/index.php" method="post">
                    <input type="submit" value="Trở về ADMIN">
                </form>
            </li>
        <?php
        }
        ?>

    </ul>
</div>