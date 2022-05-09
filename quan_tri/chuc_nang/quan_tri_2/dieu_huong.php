<?php
if (!isset($bien_bao_mat)) { // xuất ra trang trắng nếu truy cập trực tiếp vào file này
    exit();
}
?>
<?php
if (!isset($_GET['thamso'])) {
    $thamso = "";
} else {
    $thamso = $_GET['thamso'];
}
// vì có trường hợp biến 'thamso' trên url không khai báo nên gán giá trị biến 'thamso' trên url vào biến $thamso
// biến $thamso mang giá trị biến 'thamso' trên url  nhưng nếu biến 'thamso' trên url không tồn tại thì biến $thamso sẽ có giá trị rỗng

switch ($thamso) {
    case "menu_doc": // trường hợp biến $thamso có giá trị 'menu_doc'
        include("chuc_nang/menu_doc/lien_ket_menu_doc.php");
        // file này có nhiệm vụ xuất các liên kết khác liên quan đến phần menu dọc
        break;
    case "them_menu_doc": // trường hợp biến $thamso có giá trị 'them_menu_doc'
        include("chuc_nang/menu_doc/them_menu_doc.php");
        // file này có nhiệm vụ xuất trang web thêm menu dọc
        break;
    case "quan_ly_menu_doc": // trường hợp biến $thamso có giá trị 'quan_ly_menu_doc'
        include("chuc_nang/menu_doc/quan_ly_menu_doc.php");
        // file này có nhiệm vụ xuất trang web quản lý menu dọc
        break;
    case "sua_menu_doc": // trường hợp biến $thamso có giá trị 'sua_menu_doc'
        include("chuc_nang/menu_doc/sua_menu_doc.php");
        // file này có nhiệm vụ xuất trang web sửa menu dọc
        break;
    case "san_pham": // trường hợp biến $thamso có giá trị 'san_pham'
        include("chuc_nang/san_pham/lien_ket_san_pham.php");
        // file này có nhiệm vụ xuất các liên kết khác liên quan đến phần sản phẩm
        break;
    case "them_san_pham": // trường hợp biến $thamso có giá trị 'them_san_pham'
        include("chuc_nang/san_pham/them_san_pham.php");
        // file này có nhiệm vụ xuất trang web thêm sản phẩm
        break;
    case "quan_ly_san_pham": // trường hợp biến $thamso có giá trị 'quan_ly_san_pham'
        include("chuc_nang/san_pham/quan_ly_san_pham.php");
        // file này có nhiệm vụ xuất trang web quản lý sản phẩm
        break;
    case "sua_san_pham": // trường hợp biến $thamso có giá trị 'sua_san_pham'
        include("chuc_nang/san_pham/sua_san_pham.php");
        // file này có nhiệm vụ xuất trang web sửa sản phẩm
        break;
    case "hoa_don": // trường hợp biến $thamso có giá trị 'hoa_don'
        include("chuc_nang/hoa_don/quan_ly_hoa_don.php");
        // file này có nhiệm vụ xuất trang web quản lý hóa đơn
        break;
    case "xem_hoa_don": // trường hợp biến $thamso có giá trị 'xem_hoa_don'
        include("chuc_nang/hoa_don/xem_hoa_don.php");
        // file này có nhiệm vụ xuất trang web xem hóa đơn
        break;
    case "san_pham_trang_chu": // trường hợp biến $thamso có giá trị 'san_pham_trang_chu'
        include("chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
        // file này có nhiệm vụ xuất trang web quản lý sản phẩm trang chủ
        break;
    default:
        // trường hợp mặc định khi biến $thamso có giá trị ''       
        include("chuc_nang/quan_tri_2/trang_chu_2.php");
        // phần này xuất các liên kết đến các trang web khác nhau cùng với các chức năng khác nhau trong trang quản trị
}
?>