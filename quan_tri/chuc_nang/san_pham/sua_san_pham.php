<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }

        button {
            outline: 2px solid black;
            box-shadow: 5px 5px 5px black;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
    <?php
    $id = $_GET['id'];
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from product where id='$id' ");
    $tv_2 = mysqli_fetch_array($tv_1);
    $ten = $tv_2['name'];
    $gia = $tv_2['price'];
    $trang_chu = $tv_2['trang_chu'];
    $noi_dung = $tv_2['description'];
    $ten_anh = $tv_2['image'];
    $link_hinh = "../img/" . $tv_2['image'];
    $link_dong = "?thamso=quan_ly_san_pham&id_menu=" . $_GET['id_menu'] . "&trang=" . $_GET['trang'];
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table width="990px">
            <tr>
                <td width="180px"><b style="color:blue;font-size:20px">Sửa sản phẩm</b><br><br> </td>
                <td width="810px" align="right"></td>
            </tr>
            <tr>
                <td><b>Tên sản phẩm: </b></td>
                <td>
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="name" value="<?php echo $ten; ?>">
                </td>
            </tr>
            <tr>
                <td valign="top"><b>Hình ảnh: </b></td>
                <td>
                    <img src='<?php echo $link_hinh; ?>' style='width:180px'>
                    <br><br>
                    <input type="file" name="image">
                    <input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>">
                    <br><br>
                    <a href="<?php echo $link_hinh; ?>" class="lk_a1" style="font-size:24px;text-decoration: none; color:red;" target="_blank"><b>Xem ảnh kích cỡ đầy đủ</b></a>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td><b>Giá: </b></td>
                <td>
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="price" value="<?php echo $gia; ?>">
                </td>
            </tr>
            <tr>
                <td><b>Trang chủ: </b></td>
                <td>
                    <?php
                    $a_1 = "";
                    $a_2 = "";
                    if ($trang_chu == "co") {
                        $a_2 = "selected";
                    }
                    ?>
                    <select name="trang_chu" style="margin-top:3px;margin-bottom:3px;">
                        <option value="" <?php echo $a_1; ?>>Không</option>
                        <option value="co" <?php echo $a_2; ?>>Có</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Nội dung: </b></td>
                <td>
                    <textarea id="description" name="description" style="width: 500px; height: 400px;"><?php echo $noi_dung; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <br>
                    <button class="btn btn-success" type="submit" name="bieu_mau_sua_san_pham" value="" style="width:150px;height:40px;font-size:15px">Sửa sản phẩm</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>