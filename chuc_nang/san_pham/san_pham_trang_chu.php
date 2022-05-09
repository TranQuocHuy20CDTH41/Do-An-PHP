<br><br>
<h3 style="margin-left: 34px;">Sản phẩm của chúng tôi</h3>
<br><br>
<?php

$tv = new mysqli('localhost', 'root', '', 'do_an_php');
$tv_1 = $tv->query("select id,name,price,image,thuoc_menu from product where trang_chu='co' order by sap_xep_trang_chu desc limit 0,30");
echo "<table>";
while ($tv_2 = mysqli_fetch_array($tv_1)) {
    echo "<tr>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<td align='center' width='215px' valign='top'>";
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
        if ($i != 5) {
            $tv_2 = mysqli_fetch_array($tv_1);
        }
    }
    echo "</tr>";
}
echo "</table>";
?>