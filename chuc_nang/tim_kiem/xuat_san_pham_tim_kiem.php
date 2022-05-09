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
    if (trim($_GET['tu_khoa']) != "")
    // Hàm trim() trong php giúp chúng ta xóa bỏ các ký tự trắng dư thừa trong chuỗi.
    {
        $m = explode(" ", $_GET['tu_khoa']);
        // Hàm explode để tách chuỗi thành mảng.Ở đây chuỗi ở đây là biến 'tu_khoa trên url'.
        $chuoi_tim_sql = "";
        for ($i = 0; $i < count($m); $i++) {
            $tu = trim($m[$i]);
            if ($tu != "") {
                $chuoi_tim_sql = $chuoi_tim_sql . " name like '%" . $tu . "%' or";
            }
        }

        $m_2 = explode(" ", $chuoi_tim_sql);
        $chuoi_tim_sql_2 = "";
        for ($i = 0; $i < count($m_2) - 1; $i++) {
            $chuoi_tim_sql_2 = $chuoi_tim_sql_2 . $m_2[$i] . " ";
        }
        $so_du_lieu = 15;
        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
        $tv_1 = $tv->query("select count(*) from product where $chuoi_tim_sql_2");
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
        $tv_1 = $tv->query("select id, name, price, image, thuoc_menu from product where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu");
        // SELECT là lệnh được dùng để lấy kết quả từ một hoặc nhiều bảng trong cơ sở dữ liệu của SQL Server với where là điều kiện. Query chỉ định chuỗi truy vấn
        echo "<tabe>";
        while ($tv_2 = $tv_1->fetch_array()) {
            echo "<tr>";
            for ($i = 1; $i <= 3; $i++) {
                echo "<td align='center' width='215px' >";
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
                if ($i != 3) {
                    $tv_2 = mysqli_fetch_array($tv_1);
                }
            }
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td colspan='3' align='center' >";
        echo "<div class='phan_trang' >";
        for ($i = 1; $i <= $so_trang; $i++) {
            $link = "?thamso=tim_kiem&tu_khoa=" . $_GET['tu_khoa'] . "&trang=" . $i;
            echo "<a href='$link' >";
            echo $i;
            echo " ";
            echo "</a>";
        }
        echo "</div>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "Bạn chưa nhập từ khóa";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>