<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$ten = trim($_POST['ten']); // lấy tên sản phẩm gán vào biến $ten và loại bỏ khoảng trống ở 2 bên trái phải của tên sản phẩm
$ten = str_replace("'", "&#39;", $ten);
$danh_muc = $_POST['danh_muc']; // lấy id menu (danh mục menu) , id menu này sẽ được lưu vào cột 'thuoc_menu'
$gia = trim($_POST['price']); // lấy giá sản phẩm gán vào biến $gia và loại bỏ khoảng trống ở 2 bên trái phải của giá sản phẩm
if ($gia == "") // trường hợp không nhập giá thì giá sẽ là 0
{
    $gia = 0;
}
$ten_file_anh = $_FILES['image']['name'];
$trang_chu = $_POST['trang_chu'];
$noi_dung = $_POST['description'];
$noi_dung = str_replace("'", "&#39;", $noi_dung);
$tv_m = new mysqli('localhost', 'root', '', 'do_an_php');
$tv_m_1 = $tv_m->query("select max(sap_xep_trang_chu) from product");
$tv_m_2 = mysqli_fetch_array($tv_m_1);
$sap_xep_trang_chu = $tv_m_2[0] + 1;
if ($ten != "") {
    if ($ten_file_anh != "") {
        $tv_k = new mysqli('localhost', 'root', '', 'do_an_php');
        $tv_k_1 = $tv_k->query("select count(*) from product where image='$ten_file_anh' ");
        $tv_k_2 = mysqli_fetch_array($tv_k_1);
        if ($tv_k_2[0] == 0) {
            $tv = new mysqli('localhost', 'root', '', 'do_an_php');
            $tv->query("
                INSERT INTO product (
                id ,
                name ,
                price ,
                image ,
                description ,
                thuoc_menu ,
                trang_chu ,
                sap_xep_trang_chu
                )
                VALUES (
                NULL ,
                '$ten',
                '$gia',
                '$ten_file_anh',
                '$noi_dung',
                '$danh_muc',
                '$trang_chu',
                '$sap_xep_trang_chu'
                );");

            $duong_dan_anh = "../img/" . $ten_file_anh;
            move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);

            $_SESSION['danh_muc_menu'] = $danh_muc;
            $_SESSION['tuy_chon_trang_chu'] = $trang_chu;

            thong_bao_html("Đã thêm thành công");
        } else {
            thong_bao_html("Hình ảnh bị trùng tên");
        }
    } else {
        thong_bao_html("Chưa chọn ảnh");
    }
} else {
    thong_bao_html("Tên sản phẩm chưa được điền vào");
}
?>