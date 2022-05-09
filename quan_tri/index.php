<?php
session_start();
$bien_bao_mat = "co";
include("../include/connect.php");
include("chuc_nang/quan_tri_2/xac_dinh_dang_nhap.php");
include("chuc_nang/quan_tri_2/ham.php");
if (isset($xac_dinh_dang_nhap)) {
    if ($xac_dinh_dang_nhap == "co") {
        include("chuc_nang/quan_tri_2/xu_ly_post_get.php");
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Quản trị</title>
</head>

<body>
    <?php
    if (!isset($xac_dinh_dang_nhap)) {
        include("chuc_nang/quan_tri_2/khung_dang_nhap.php");
    } else {
        if ($xac_dinh_dang_nhap == "co") {
            echo "<center>";
            include("chuc_nang/quan_tri_2/trang_chu.php");
            echo "</center>";
        }
    }
    ?>
</body>

</html>