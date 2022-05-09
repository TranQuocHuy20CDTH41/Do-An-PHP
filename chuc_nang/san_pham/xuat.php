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
    require("chuc_nang/slideshow/slideshow.php");
    // require trong PHP được sử dụng để chèn nội dung của file php này vào file php khác
    echo "<br><br>
    <h3 style='margin-left: 35px;'>Sản phẩm của chúng tôi</h3>
    <br><br>";
    $id = $_GET['id'];

    $so_du_lieu = 15;
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select count(*) from product where thuoc_menu='$id';");
    // SELECT là lệnh được dùng để lấy kết quả từ bảng product trong cơ sở dữ liệu của SQL Server.
    $tv_2 = mysqli_fetch_array($tv_1);
    // mysqli_fetch_array() tìm nạp một hàng kết quả dưới dạng một mảng kết hợp, một mảng số hoặc cả hai.
    $so_trang = ceil($tv_2[0] / $so_du_lieu);
    if (!isset($_GET['trang'])) {
        $vtbd = 0;
    } else {
        $vtbd = ($_GET['trang'] - 1) * $so_du_lieu;
    }

    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from product where thuoc_menu='$id' order by id desc limit $vtbd,$so_du_lieu");
    echo "<table>";
    while ($tv_2 = $tv_1->fetch_array()) {
        echo "<tr>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<td align='center' width='250px' >";
            if ($tv_2 != false) {
                $link_anh = "img/" . $tv_2['image'];
                $link_chi_tiet = "?thamso=chi_tiet_san_pham&id=" . $tv_2['id'];
                $gia = $tv_2['price'];
                $gia = number_format($gia, 0, ",", ".");
                echo "<a href='$link_chi_tiet' >";
                echo "<img src='$link_anh' width='150px' >";
                echo "</a>";
                echo "<br>";
                echo "<br>";
                echo "<a href='$link_chi_tiet' >";
                echo $tv_2['name'];
                echo "</a>";
                echo "<div style='margin-top:5px' >";
                echo $gia;
                echo "</div>";
                echo "<br>";
            } else {
                echo "&nbsp;";
            }
            echo "</td>";
            if ($i != 5) {
                $tv_2 = mysqli_fetch_array($tv_1);
            }
        }
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan='5' align='center' >";
    echo "<div class='phan_trang' >";
    for ($i = 1; $i <= $so_trang; $i++) {
        $link = "?thamso=xuat_san_pham&id=" . $_GET['id'] . "&trang=" . $i;
        echo "<a href='$link' >";
        echo $i;
        echo " ";
        echo "</a>";
    }
    echo "</div>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>