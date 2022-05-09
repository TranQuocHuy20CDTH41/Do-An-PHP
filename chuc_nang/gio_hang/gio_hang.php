<?php
if (isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang'] == "co") {
    $_SESSION['trang_chi_tiet_gio_hang'] = "huy_bo";
    if (isset($_SESSION['id_them_vao_gio'])) {
        $so = count($_SESSION['id_them_vao_gio']);
        $trung_lap = "khong";
        for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
            if ($_SESSION['id_them_vao_gio'][$i] == $_GET['id']) {
                $trung_lap = "co";
                $vi_tri_trung_lap = $i;
                break;
            }
        }
        if ($trung_lap == "khong") {
            $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
            $_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
        }
        if ($trung_lap == "co") {
            $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
        }
    } else {
        $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
        $_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
    }
}

$gio_hang = "khong";
if (isset($_SESSION['id_them_vao_gio'])) {
    $so_luong = 0;
    for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
        $so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
    }
    if ($so_luong != 0) {
        $gio_hang = "co";
    }
}

echo "<h3>Giỏ hàng</h3>";
echo "<br>";
echo "<br>";
if ($gio_hang == "khong") {
    echo "Không có sản phẩm trong giỏ hàng";
} else {
    echo "<form action='' method='post' >";
    echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
    echo "<table class='table-solid'>";
    echo "<tr>";
    echo "<th width='250px' style='border: 2px solid black; background-color: #FF6633;'>Tên sản phẩm</th>";
    echo "<th width='150px' style='border: 2px solid black; background-color: #FF6633;'>Số lượng</th>";
    echo "<th width='150px' style='border: 2px solid black; background-color: #FF6633;'>Đơn giá</th>";
    echo "<th width='170px' style='border: 2px solid black; background-color: #FF6633;'>Thành tiền</th>";
    echo "</tr>";
    $tong_cong = 0;
    for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {

        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
        $tv_1 = $tv->query("select id,name,price from product where id='" . $_SESSION['id_them_vao_gio'][$i] . "'");
        $tv_2 = mysqli_fetch_array($tv_1);

        $tien = $tv_2['price'] * $_SESSION['sl_them_vao_gio'][$i];
        $tong_cong = $tong_cong + $tien;
        $name_id = "id_" . $i;
        $name_sl = "sl_" . $i;
        if ($_SESSION['sl_them_vao_gio'][$i] != 0) {
            echo "<tr>";
            echo "<td style='border: 2px solid black; background-color: #FFCCCC;'>" . $tv_2['name'] . "</td>";
            echo "<td style='border: 2px solid black; background-color: #FFCCCC;'>";
            echo "<input type='hidden' name='" . $name_id . "' value='" . $_SESSION['id_them_vao_gio'][$i] . "' >";
            echo "<input type='text' style='width:50px' name='" . $name_sl . "' value='" . $_SESSION['sl_them_vao_gio'][$i] . "' > ";
            echo "</td>";
            echo "<td style='border: 2px solid black; background-color: #FFCCCC;'>" . $tv_2['price'] . " VNĐ</td>";
            echo "<td style='border: 2px solid black; background-color: #FFCCCC;'>" . $tien . " VNĐ</td>";
            echo "</tr>";
        }
    }
    echo "<tr>";
    echo "<td>&nbsp;</td>";
    echo "<td><button type='submit' class='btn btn-success'>Cập nhật</button></td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";
    echo "<br>";
    echo "<b>Tổng giá trị đơn hàng là : </b>" . $tong_cong . " VNĐ";
    include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
}
