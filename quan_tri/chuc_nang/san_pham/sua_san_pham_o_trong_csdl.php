<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$ten = trim($_POST['name']);
$ten = str_replace("'", "&#39;", $ten);
$gia = trim($_POST['price']);
$trang_chu = $_POST['trang_chu'];
$noi_dung = $_POST['description'];
$noi_dung = str_replace("'", "&#39;", $noi_dung);
$ten_file_anh_tai_len = $_FILES['image']['name'];
if ($ten_file_anh_tai_len != "") {
    $ten_file_anh = $ten_file_anh_tai_len;
} else {
    $ten_file_anh = $_POST['ten_anh'];
}
$id = $_GET['id'];
if ($ten != "") {
    $tv_k = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_k_1 = $tv_k->query("select count(*) from product where image='$ten_file_anh' ");
    $tv_k_2 = mysqli_fetch_array($tv_k_1);
    if ($tv_k_2[0] == 0 or $ten_file_anh_tai_len == "") {
        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
        $tv->query("
            UPDATE product SET
            name = '$ten', image = '$ten_file_anh', price = '$gia', trang_chu = '$trang_chu', description = '$noi_dung' WHERE id =$id;");
        if ($ten_file_anh_tai_len != "") {
            $duong_dan_anh = "../img/" . $ten_file_anh_tai_len;
            move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
            $duong_dan_anh_cu = "../img/" . $_POST['ten_anh'];
            unlink($duong_dan_anh_cu);
        }
        thong_bao_html("Sửa sản phẩm thành công");
    } else {
        thong_bao_html("Hình ảnh bị trùng tên");
    }
} else {
    thong_bao_html("Tên sản phẩm chưa được điền vào");
}
?>