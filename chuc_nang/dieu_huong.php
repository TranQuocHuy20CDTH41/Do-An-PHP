<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['thamso'])) {
        $tham_so = $_GET['thamso'];
    } else {
        $tham_so = "";
    }
    switch ($tham_so) {
        case "xuat_san_pham":
            include("chuc_nang/san_pham/xuat.php");
            // Câu lệnh include require trong PHP được sử dụng để chèn nội dung của file php này vào file php khác
            break;
        case "chi_tiet_san_pham":
            include("chuc_nang/san_pham/chi_tiet_san_pham.php");
            break;
        case "tim_kiem":
            include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
            break;
        case "gio_hang":
            include("chuc_nang/gio_hang/gio_hang.php");
            break;
        default:
            include("chuc_nang/slideshow/slideshow.php");
            include("chuc_nang/san_pham/san_pham_trang_chu.php");
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>