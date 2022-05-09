<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Sản phẩm trang chủ</title>
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
    $so_dong_tren_mot_trang = 10;
    if (!isset($_GET['trang'])) {
        $_GET['trang'] = 1;
    }

    $tv = new mysqli('localhost', 'root', '', 'do_an_php');

    $tv_1 = $tv->query("select count(id) from product where trang_chu='co' ");
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0] / $so_dong_tren_mot_trang);

    $vtbd = ($_GET['trang'] - 1) * $so_dong_tren_mot_trang;
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');

    $tv_1 = $tv->query("select id,name,price,image,sap_xep_trang_chu from product where trang_chu='co' order by sap_xep_trang_chu desc limit $vtbd,$so_dong_tren_mot_trang");
    ?>

    <form method="post">
        <table width="990px" class="tb_a1" style="border: 2px solid black;">
            <tr style="background:#CCFFFF;height:40px;">
                <td width="120px" style="border: 2px solid black;"><b>Hình ảnh</b></td>
                <td width="450px" style="border: 2px solid black;"><b>Tên</b></td>
                <td align="center" width="140px" style="border: 2px solid black;"><b>Giá</b></td>
                <td align="center" width="140px" style="border: 2px solid black;"><b>Trang chủ</b></td>
                <td align="center" width="140px" style="border: 2px solid black;"><b>Thứ tự</b></td>
            </tr>
            <?php
            $i = 1;
            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                $id = $tv_2['id'];
                $ten = $tv_2['name'];
                $gia = $tv_2['price'];
                $gia = number_format($gia, 0, ",", ".");
                $link_hinh = "../img/" . $tv_2['image'];
                $sap_xep_trang_chu = $tv_2['sap_xep_trang_chu'];
                $ten_select = "select_" . $i;
                $ten_input = "input_" . $i;
                $ten_id = "id_" . $i;
            ?>
                <tr class="a_1">
                    <td align="center" style="border: 2px solid black;">
                        <img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0">
                    </td>
                    <td style="border: 2px solid black;">
                        <?php echo $ten; ?>
                    </td>
                    <td align="center" style="border: 2px solid black;">
                        <?php echo $gia; ?>
                    </td>
                    <td align="center" style="border: 2px solid black;">
                        <select name="<?php echo $ten_select; ?>">
                            <option value="">Không</option>
                            <option value="co" selected>Có</option>
                        </select>
                    </td>
                    <td align="center" style="border: 2px solid black;">
                        <input value="<?php echo $sap_xep_trang_chu; ?>" style="width:50px" name="<?php echo $ten_input; ?>">
                        <input type="hidden" value="<?php echo $id; ?>" name="<?php echo $ten_id; ?>">
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
            <tr>
                <td colspan="3" align="center">
                    &nbsp;
                </td>
                <td colspan="2" align="center">
                    <br>
                    <button type="submit" class="btn btn-success" name="bieu_mau_san_pham_trang_chu" value="" style="font-size:15px">Cập nhật</button>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center">
                    <br>
                    <?php
                    for ($i = 1; $i <= $so_trang; $i++) {
                        $link_phan_trang = "?thamso=san_pham_trang_chu&trang=" . $i;
                        echo "<a href='$link_phan_trang' class='phan_trang' >";
                        echo $i;
                        echo "</a> ";
                    }
                    ?>
                    <br><br>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>