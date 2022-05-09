<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Sửa danh mục</title>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }

        button {
            outline: 2px solid black;
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
    $tv_1 = $tv->query("select * from menu_doc where id='$id' ");
    $tv_2 = mysqli_fetch_array($tv_1);
    $ten = $tv_2['name'];
    $link_dong = "?thamso=quan_ly_menu_doc&trang=" . $_GET['trang'];
    ?>
    <form action="" method="post">
        <table width="900px" style="border: 2px solid black;">
            <tr>
                <td width="150px"><b style="color:blue;font-size:20px">Sửa danh mục</b></td>
                <td width="750px" align="right">
                    <button class="btn btn-danger"><a href="<?php echo $link_dong; ?>" class="lk_a1" style="text-decoration: none; color:black;"><b>Đóng</b></a></button>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid black;">Tên danh mục: </td>
                <td style="border: 2px solid black;">
                    <input style="width:730px;margin-top:3px;margin-bottom:3px;margin-left: 10px;" name="ten" value="<?php echo $ten; ?>">
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid black;">&nbsp;</td>
                <td style="border: 2px solid black;">
                    <br>
                    <button type="submit" class="btn btn-success mb-2" name="bieu_mau_sua_menu_doc" value="" style="width:100px;margin-top:-10px;font-size:15px; border-radius: 3px;">Sửa menu</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>