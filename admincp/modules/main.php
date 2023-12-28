<div class="clear"></div>
<div class="main">
    <?php


    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
        include("modules/quanlyloaisp/them.php");
        include("modules/quanlyloaisp/lietke.php");
    } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
        include("modules/quanlyloaisp/sua.php");
    } elseif ($tam == 'quanlysanpham' && $query == 'them') {
        include("modules/quanlysanpham/them.php");
        include("modules/quanlysanpham/lietke.php");
    } elseif (($tam == 'quanlysanpham' && $query == 'sua')) {
        include("modules/quanlysanpham/sua.php");
    } elseif (($tam == 'quanlyadmin' && $query == 'them')) {
        include("modules/quanlyadmin/themadmin.php");
    } elseif (($tam == 'quanlyadmin' && $query == 'ds')) {
        include("modules/quanlyadmin/dsadmin.php");
    } elseif (($tam == 'quanlyadmin' && $query == 'xoa')) {
        include("modules/quanlyadmin/xuly.php");
    } elseif (($tam == 'quanlydathang' && $query == 'dsdh')) {
        include("modules/quanlydathang/lietke.php");
    } elseif (($tam == 'quanlydathang' && $query == 'xn')) {
        include("modules/quanlydathang/xuly.php");
    } else include("modules/dashboard.php");
    ?>