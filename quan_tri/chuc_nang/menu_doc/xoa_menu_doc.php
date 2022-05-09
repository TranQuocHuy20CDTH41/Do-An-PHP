<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$id = $_GET['id'];
$tv = new mysqli('localhost', 'root', '', 'do_an_php');
$tv_1 = $tv->query("select count(*) from product where thuoc_menu='$id' ");
// câu truy vấn này là xem menu được bấm xóa có còn dữ liệu hay không , nếu truy vấn select trả về 0 thì menu không có dữ liệu
// lệnh count để đếm dòng dữ liệu
// điều kiện để được đếm là thuoc_menu='$id' (sản phẩm nào có cột 'thuoc_menu' chứa id của menu dọc nào thì thuộc về sản phẩm của
// menu đó)
$tv_2 = mysqli_fetch_array($tv_1);
if ($tv_2[0] == 0) {
    $truy_van_xoa = new mysqli('localhost', 'root', '', 'do_an_php');
    $truy_van_xoa->query("DELETE FROM menu_doc WHERE id = $id ");
    // câu truy vấn xóa dữ liệu thì dùng lệnh delete , bảng menu_doc sẽ được xóa dữ liệu
    // WHERE id = $id : dòng dữ liệu được xóa sẽ là dòng mà cột 'id' của dòng đó có giá trị là biến 'id' trên url
    // (tức là id của menu dọc cần xóa)
    thong_bao_html("Xóa thành công");
} else {
    thong_bao_html("Menu này vẫn còn dữ liệu nên không thể xóa");
}
?>