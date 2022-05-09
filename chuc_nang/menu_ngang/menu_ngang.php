<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Menu ngang</title>
</head>

<body>
    <?php
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query('select id, name, loai_menu from menu_ngang order by id');
    echo "<div class='menu_ngang' >";
    echo "<a href='index.php'>Trang chủ</a>";
    while ($tv_2 = $tv_1->fetch_array()) {
        if ($tv_2['loai_menu'] == "") {
            $link_menu = "?thamso=xuat_mot_tin&id=" . $tv_2['id'];
        }
        if ($tv_2['loai_menu'] == "product") {
            $link_menu = "?thamso=xuat_san_pham_2";
        }
        echo "<a href='$link_menu'>";
        echo $tv_2['name'];
        echo "</a>";
    }
    echo "<a href='quan_tri/chuc_nang/quan_tri_2/dang_ki/register.php'>";
    echo "Đăng kí";
    echo "</a>";
    echo "<a href='quan_tri/index.php'>";
    echo "Đăng nhập";
    echo "</a>";
    echo "</div>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>