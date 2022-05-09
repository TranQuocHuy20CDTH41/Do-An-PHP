
<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
// dùng $_POST để lấy giá trị của biểu mẫu thêm menu dọc được gửi
$ten_menu = trim($_POST['ten']);
$ten_menu = str_replace("'", "&#39;", $ten_menu);
// thay thế dấu ' thành &#39; (cách viết này cũng hiển thị ra dấu ' )
if ($ten_menu != "") { // đây là trường hợp tên menu được điền vào , lúc này biến $ten_menu sẽ khác rỗng
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv->query("
        INSERT INTO menu_doc (  
        id ,
        name
        )
        VALUES (
        NULL ,
        '$ten_menu'
        );");
    thong_bao_html("Danh mục đã được thêm vào");
} else {
    thong_bao_html("Tên danh mục chưa được điền vào");
}
?>