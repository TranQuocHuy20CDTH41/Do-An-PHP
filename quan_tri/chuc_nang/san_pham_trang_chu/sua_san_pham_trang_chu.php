<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Sửa sản phẩm trang chủ</title>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    for ($i = 1; $i <= 10; $i++) {
        $ten_select = "select_" . $i;
        $ten_input = "input_" . $i;
        $ten_id = "id_" . $i;
        if (isset($_POST[$ten_id])) {
            $id = $_POST[$ten_id];
            $trang_chu = $_POST[$ten_select];
            $sap_xep_trang_chu = $_POST[$ten_input];
            $tv = new mysqli('localhost', 'root', '', 'do_an_php');
            $tv->query("update product set trang_chu='$trang_chu', sap_xep_trang_chu='$sap_xep_trang_chu' where id='$id'");
        }
    }
    ?>
</body>

</html>