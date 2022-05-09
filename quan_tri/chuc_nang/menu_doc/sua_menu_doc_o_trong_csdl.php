
<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$ten_menu = trim($_POST['ten']);
$ten_menu = str_replace("'", "&#39;", $ten_menu);
$id = $_GET['id'];
if ($ten_menu != "") {
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv->query("
        UPDATE menu_doc SET
        name = '$ten_menu'
        WHERE id =$id;
        ");
    thong_bao_html("Sửa thành công");
} else {
    thong_bao_html("Tên danh mục chưa được điền vào");
}
?>