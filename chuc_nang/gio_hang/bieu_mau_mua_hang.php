<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Đồ án PHP</title>
</head>

<body>
    <?php
    echo "<br>" . "<br>" . "<form method='post' action='' >" . "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
    echo "<table>" . "<tr>" . "<td colspan='2' height='30px' >" . "<b>Thông tin mua hàng</b>" . "</td>" . "</tr>";
    echo "<tr>" . "<td height='40px' >Lưu ý: </td>" . "<td>" . "Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào" . "</td></tr>";
    echo "<tr><td width='180px' >Tên người mua :</td><td>" . "<input type='text' style='width:400px' name='ten_nguoi_mua' >" . "</td></tr>";
    echo "<tr><td>Email : </td>" . "<td><input type='text' style='width:400px' name='email' ></td>" . "</tr>";
    echo "<tr>" . "<td>Địa chỉ : </td>" . "<td><textarea style='width:400px;' name='dia_chi' ></textarea></td>" . "</tr>";
    echo "<tr>" . "<td>Điện thoại : </td><td><input type='text' style='width:400px' name='dien_thoai' ></td>" . "</tr>";
    echo "<tr>" . "<td>Nội dung :</td><td><textarea style='width:400px;height:100px' name='noi_dung' ></textarea></td>" . "</tr>";
    echo "<tr>" . "<td>&nbsp;</td><td><button type='submit' class='btn btn-success'>Mua</button></td>" . "</tr>";
    echo "</table>";
    echo "</form>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>