<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
    <?php
    if (!isset($_GET['id_menu'])) {
        $id_menu = "toan_bo_san_pham";
    } else {
        if ($_GET['id_menu'] != "" and $_GET['id_menu'] != "toan_bo_san_pham") {
            $id_menu = $_GET['id_menu'];
        } else {
            $id_menu = "toan_bo_san_pham";
        }
    }
    ?>
    <br>
    <div style="width:990px;text-align:left">
        Chọn : <select name="danh_muc" onchange="window.location='?thamso=quan_ly_san_pham&id_menu='+this.value">
            <option value="">
                <?php
                $tv = new mysqli('localhost', 'root', '', 'do_an_php');
                $tv_1 = $tv->query("select * from menu_doc order by id ");
                $a = "";
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                    $ten = $tv_2['name'];
                    $id = $tv_2['id'];
                    if ($id_menu == $id) {
                        $a = "selected";
                    }
                    echo "<option value='$id' $a >";
                    echo $ten;
                    echo "</option>";
                    $a = "";
                }
                ?>
            </option>
        </select>
    </div>
    <br>
    <?php
    $so_dong_tren_mot_trang = 10;
    if (!isset($_GET['trang'])) {
        $_GET['trang'] = 1;
    }

    if ($id_menu == "toan_bo_san_pham") {
        $tv = "select count(*) from product";
    } else {
        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    }
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select count(*) from product where thuoc_menu='$id_menu' ");
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0] / $so_dong_tren_mot_trang);

    $vtbd = ($_GET['trang'] - 1) * $so_dong_tren_mot_trang;
    if ($id_menu == "toan_bo_san_pham") {
        $tv = "select id,ten,gia,hinh_anh from san_pham order by id desc limit $vtbd,$so_dong_tren_mot_trang";
    } else {
        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    }
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select id,name,price,image from product where thuoc_menu='$id_menu' order by id desc limit $vtbd,$so_dong_tren_mot_trang");
    ?>

    <table width="990px" class="tb_a1" style="border: 2px solid black;">
        <tr style="background:#CCFFFF;height:40px;">
            <td align="center" width="120px" style="border: 2px solid black;"><b>Hình ảnh</b></td>
            <td align="center" width="450px" style="border: 2px solid black;"><b>Tên</b></td>
            <td align="center" width="140px" style="border: 2px solid black;"><b>Giá</b></td>
            <td align="center" width="140px" style="border: 2px solid black;"><b>Sửa</b></td>
            <td align="center" width="140px" style="border: 2px solid black;"><b>Xóa</b></td>
        </tr>
        <?php
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $id = $tv_2['id'];
            $ten = $tv_2['name'];
            $gia = $tv_2['price'];
            $gia = number_format($gia, 0, ",", ".");
            $link_hinh = "../img/" . $tv_2['image'];
            $link_sua = "?thamso=sua_san_pham&id_menu=" . $id_menu . "&id=" . $id . "&trang=" . $_GET['trang'];
            $link_xoa = "?xoa_san_pham=co&id=" . $id;
        ?>
            <tr class="a_1">
                <td align="center" style="border: 2px solid black;">
                    <a href="<?php echo $link_sua; ?>">
                        <img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="1px">
                    </a>
                </td>
                <td style="border: 2px solid black;">
                    <a href="<?php echo $link_sua; ?>" class="lk_a1" style="margin-left:10px; text-decoration: none;color:black;">
                        <?php echo $ten; ?>
                    </a>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <?php echo $gia; ?>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-success" style="border-radius: 3px;"><a href="<?php echo $link_sua; ?>" class="lk_a1" style="text-decoration: none; color: black;">Sửa</a></button>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-danger" style="border-radius: 3px;"><a href="<?php echo $link_xoa; ?>" class="lk_a1" style="text-decoration: none; color: black;">Xóa</a></button>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="5" align="center">
                <br>
                <?php
                for ($i = 1; $i <= $so_trang; $i++) {
                    $link_phan_trang = "?thamso=quan_ly_san_pham&id_menu=" . $id_menu . "&trang=" . $i;
                    echo "<a href='$link_phan_trang' class='phan_trang' >";
                    echo $i;
                    echo "</a> ";
                }
                ?>
                <br><br>
            </td>
        </tr>
    </table>
</body>

</html>