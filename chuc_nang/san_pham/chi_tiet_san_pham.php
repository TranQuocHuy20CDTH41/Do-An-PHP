<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $_SESSION['trang_chi_tiet_gio_hang'] = "co";
    $id = $_GET['id'];
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from product where id ='$id'");
    $tv_2 = mysqli_fetch_array($tv_1);
    $link_anh = "img/" . $tv_2['image'];
    echo "<table>";
    echo "<tr>";
    echo "<td width='250px' align='center' >";
    echo "<img src='$link_anh' width='150px' >";
    echo "</td>";
    echo "<td valign='top' >";
    echo "<a href='#'>";
    echo $tv_2['name'];
    echo "</a>";
    echo "<br>";
    echo "<br>";
    $gia = $tv_2['price'];
    $gia = number_format($gia, 0, ",", ".");
    //  number_format() sẽ định dạng lại số theo hàng nghìn. Hàm trả về là số đã được định dạng.
    echo "<br>";
    echo "<br>";
    echo "<form>";
    echo "<input type='hidden' name='thamso' value='gio_hang' > ";
    echo "<input type='hidden' name='id' value='" . $_GET['id'] . "' > ";
    echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
    echo "<button type='submit' class='btn btn-success' style='margin-left: 15px;'>Thêm vào giỏ</button>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='2' >";
    echo "<br>";
    echo "<br>";
    echo $tv_2['description'];
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>