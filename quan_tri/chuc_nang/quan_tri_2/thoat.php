<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<?php
// unset để xóa đi session 'ky_danh' và session 'mat_khau'
unset($_SESSION['ky_danh']);
unset($_SESSION['mat_khau']);
?>