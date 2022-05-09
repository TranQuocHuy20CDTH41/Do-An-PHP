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
    $so_dong_tren_mot_trang = 10;
    if (!isset($_GET['trang'])) {
        $_GET['trang'] = 1;
    }

    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select count(*) from hoa_don");
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0] / $so_dong_tren_mot_trang);

    $vtbd = ($_GET['trang'] - 1) * $so_dong_tren_mot_trang;
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang");
    ?>
    <table width="990px" class="tb_a1" style="border: 2px solid black;">
        <tr style="background:#CCFFFF;height:40px;">
            <td width="370px" style="border: 2px solid black;"><b>Tên</b></td>
            <td width="300px" style="border: 2px solid black;"><b>Email</b></td>
            <td width="120px" style="border: 2px solid black;"><b>Điện thoại</b></td>
            <td align="center" width="100px" style="border: 2px solid black;text-decoration: none;"><b>Sửa</b></td>
            <td align="center" width="100px" style="border: 2px solid black;text-decoration: none;"><b>Xóa</b></td>
        </tr>
        <?php
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $id = $tv_2['id'];
            $ten = $tv_2['ten_nguoi_mua'];
            $email = $tv_2['email'];
            $dien_thoai = $tv_2['dien_thoai'];
            $link_xem = "?thamso=xem_hoa_don&id=" . $id . "&trang=" . $_GET['trang'];
            $link_xoa = "?xoa_hoa_don=co&id=" . $id;
        ?>
            <tr class="a_1" height="50px">
                <td style="border: 2px solid black;">
                    <a href="<?php echo $link_xem; ?>" class="lk_a1" style="text-decoration: none; color: black;"><?php echo $ten; ?></a>
                </td>
                <td style="border: 2px solid black;">
                    <?php echo $email; ?>
                </td>
                <td style="border: 2px solid black;">
                    <?php echo $dien_thoai; ?>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-success"><a href="<?php echo $link_xem; ?>" class="lk_a1" style="text-decoration: none; color: white;">Xem</a></button>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-danger"><a href="<?php echo $link_xoa; ?>" class="lk_a1" style="text-decoration: none; color: black;">Xóa</a></button>
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
                    $link_phan_trang = "?thamso=hoa_don&trang=" . $i;
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