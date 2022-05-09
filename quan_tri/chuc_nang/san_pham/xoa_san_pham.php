<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$id = $_GET['id'];

$tv = new mysqli('localhost', 'root', '', 'do_an_php');
$tv_1 = $tv->query("select * from product where id='$id' ");
$tv_2 = mysqli_fetch_array($tv_1);

$link_hinh = "../img" . $tv_2['image'];
if (is_file($link_hinh)) {
    unlink($link_hinh);
}

$tv = new mysqli('localhost', 'root', '', 'do_an_php');;
$tv->query("DELETE FROM product WHERE id = $id ");
?>