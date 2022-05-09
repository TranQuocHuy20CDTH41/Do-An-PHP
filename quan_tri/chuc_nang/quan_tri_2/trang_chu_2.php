<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
    <style type="text/css">
        a.lk_2 {
            text-decoration: none;
            color: white;
            font-size: 22px;
            line-height: 30px;
        }

        a.lk_2:hover {
            color: red;
        }

        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }

        button {
            box-shadow: 5px 5px black;
            outline: 2px solid black;
        }
    </style>
    <table width="990px">
        <tr>
            <td width="495px" valign="top">
                <button class="btn btn-success mb-3"><a href="?thamso=them_menu_doc" class="lk_2" style="font-size:15px;">Thêm danh mục</a></button><br>
                <button class="btn btn-success mb-3"><a href="?thamso=them_san_pham " class="lk_2" style="font-size:15px;">Thêm sản phẩm</a></button><br>
            </td>
            <td width="495px" valign="top">
                <button class="btn btn-dark mb-3" style="width:180px;"><a href="?thamso=quan_ly_menu_doc" class="lk_2" style="font-size:15px;">Quản lý danh mục</a></button><br>

                <button class="btn btn-dark mb-3" style="width:180px;"><a href="?thamso=hoa_don" class="lk_2" style="font-size:15px;">Quản lý hóa đơn</a></button><br><br><br>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <button class="btn btn-primary mb-3" style="width:180px;"><a href="?thamso=quan_ly_san_pham" class="lk_2" style="font-size:15px;">Quản lý sản phẩm</a></button><br>
            </td>
            <td valign="top">
                <button class="btn btn-primary mb-3" style="width:180px;"><a href="?thamso=san_pham_trang_chu" class="lk_2" style="font-size:15px;">Sản phẩm trang chủ</a></button><br>
            </td>
        </tr>
    </table>
</body>

</html>