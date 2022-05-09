<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
$id = $_GET['id'];
$tv = new mysqli('localhost', 'root', '', 'do_an_php');
$tv->query("DELETE FROM hoa_don WHERE id = $id ");
?>