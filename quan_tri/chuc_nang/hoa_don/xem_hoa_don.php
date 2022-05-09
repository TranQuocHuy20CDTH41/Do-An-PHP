<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            background-image: linear-gradient(to right, #8aecf5, #7ddfe7, #70d2d8, #63c6ca, #56b9bc, #44b5c1, #31b0c7, #1cabcc, #30aae3, #61a6f3, #969ef8, #c892ef);
            background-size: 100%;
            background-repeat: no-repeat;
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
    $id = $_GET['id'];
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from hoa_don where id='$id' ");
    $tv_2 = mysqli_fetch_array($tv_1);
    $ten_nguoi_mua = $tv_2['ten_nguoi_mua'];
    $email = $tv_2['email'];
    $dien_thoai = $tv_2['dien_thoai'];
    $dia_chi = $tv_2['dia_chi'];
    $noi_dung = $tv_2['noi_dung'];
    $hang_duoc_mua = $tv_2['hang_duoc_mua'];
    $link_dong = "?thamso=hoa_don&&trang=" . $_GET['trang'];
    $link_xoa = "?xoa_hoa_don_o_trang_chi_tiet=co&id=" . $id . "&trang=" . $_GET['trang'];
    ?>

    <table width="990px">
        <tr>
            <td width="250px"><b style="color:blue;font-size:20px">Sản phẩm được đặt hàng </b><br><br> </td>
            <td width="740px" align="right">
                <button class="btn btn-dark"><a href="<?php echo $link_dong; ?>" class="lk_a1" style="text-decoration:none;color: white;">Đóng</a></button>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="2">
                <table width="880px">
                    <tr style="background-color:aqua;">
                        <td width="100px" style="border: 2px solid black;">STT</td>
                        <td width="300px" style="border: 2px solid black;">Tên</td>
                        <td width="180px" style="border: 2px solid black;">Giá bán</td>
                        <td width="100px" style="border: 2px solid black;">Số lượng</td>
                        <td width="200px" style="border: 2px solid black;">Tổng cộng</td>
                    </tr>
                    <?php
                    $m = explode("[|||||]", $hang_duoc_mua);
                    $tong_lon = 0;
                    for ($i = 0; $i < count($m); $i++) {
                        if (isset($m[$i])) {
                            if ($m[$i] != "") {
                                $stt = $i + 1;
                                $m_2 = explode("[|||]", $m[$i]);
                                $id_sp = $m_2[0];
                                $sl_sp = $m_2[1];
                                $tv_sp = new mysqli('localhost', 'root', '', 'do_an_php');
                                $tv_sp_1 = $tv_sp->query("select id,name,price from product where id='$id_sp' ");
                                $tv_sp_2 = mysqli_fetch_array($tv_sp_1);
                                $ten = $tv_sp_2['name'];
                                $gia = $tv_sp_2['price'];
                                $gia_duoc_dinh_dang = number_format($gia, 0, ",", ".");
                                $tong = $gia * $sl_sp;
                                $tong_duoc_dinh_dang = number_format($tong, 0, ",", ".");
                                $tong_lon = $tong_lon + $tong;
                                if ($sl_sp != 0) {
                    ?>
                                    <tr style="border: 2px solid black;">
                                        <td style="border: 2px solid black;">
                                            <?php echo $stt; ?>
                                        </td>
                                        <td style="border: 2px solid black;">
                                            <?php echo $ten; ?>
                                        </td>
                                        <td style="border: 2px solid black;">
                                            <?php echo $gia_duoc_dinh_dang; ?>
                                        </td>
                                        <td style="border: 2px solid black;">
                                            <?php echo $sl_sp; ?>
                                        </td>
                                        <td style="border: 2px solid black;">
                                            <?php echo $tong_duoc_dinh_dang; ?>
                                        </td>
                                    </tr>
                    <?php
                                }
                            }
                        }
                    }
                    ?>
                    <tr>
                        <td colspan="5">
                            <br><br> Tổng tiền của đơn hàng là :
                            <?php
                            $tong_lon_duoc_dinh_dang = number_format($tong_lon, 0, ",", ".");
                            echo "<b>" . $tong_lon_duoc_dinh_dang . " VNĐ</b>";
                            ?>
                            <br><br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    <br><br>
    <table width="500px">
        <tr>
            <td width="150px"><b style="color:blue;font-size:20px">Thông tin người mua</b><br><br></td>
            <td width="450px" align="right">
                &nbsp;
            </td>
        </tr>
        <tr height="40px">
            <td style="border: 2px solid black;">Tên người mua : </td>
            <td style="border: 2px solid black;">
                <?php echo $ten_nguoi_mua; ?>
            </td>
        </tr>
        <tr height="40px">
            <td style="border: 2px solid black;">Email : </td>
            <td style="border: 2px solid black;">
                <?php echo $email; ?>
            </td>
        </tr>
        <tr height="40px">
            <td style="border: 2px solid black;">Điện thoại : </td>
            <td style="border: 2px solid black;">
                <?php echo $dien_thoai; ?>
            </td>
        </tr>
        <tr height="40px">
            <td valign="top" style="border: 2px solid black;">Địa chỉ : </td>
            <td style="border: 2px solid black;">
                <?php echo $dia_chi; ?>
            </td>
        </tr>
        <tr height="40px">
            <td valign="top" style="border: 2px solid black;">Nội dung : </td>
            <td style="border: 2px solid black;">
                <?php echo $noi_dung; ?>
            </td>
        </tr>

        <tr height="40px">
            <td>&nbsp;</td>
            <td>
                <button class="btn btn-danger mt-2"><a href="<?php echo $link_xoa; ?>" class="lk_a1" style="text-decoration:none;color: white;">Xóa</a></button>
            </td>
        </tr>
    </table>
</body>

</html>