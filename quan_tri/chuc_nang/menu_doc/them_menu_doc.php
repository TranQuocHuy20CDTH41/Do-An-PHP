<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    } // xuất ra trang trắng nếu truy cập trực tiếp vào file này
    ?>
    <form action="" method="post">
        <table width="990px">
            <tr>
                <td colspan="2"><b style="color:blue;font-size:20px">Thêm danh mục</b><br><br> </td>
            </tr>
            <tr>
                <td width="150px">Tên danh mục: </td>
                <td width="840px">
                    <input style="width:300px;margin-top:3px;margin-bottom:3px;" name="ten" value="" placeholder="Nhập tên danh mục">
                    <!-- khung này có name là 'ten' => khi lấy dữ liệu từ khung này bằng mã php thì viết là $_POST['ten'] -->
                    <!-- (biểu mẫu hiện tại dùng phương thức post (thuộc tính method) nên khi lấy dữ liệu thì dùng $_POST ) -->
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <br>
                    <button class="btn btn-success" type="submit" name="bieu_mau_them_menu_doc" style="width:150px;height:40px;font-size:15px;cursor:pointer;">Thêm danh mục</button>
                    <!-- để xác định biểu mẫu có được gửi hay không ( isset($_POST['bieu_mau_them_menu_doc']) )
                định dạng css của nút này (thuộc tính style) là : rộng 200px , cao 50px , kích cỡ chữ 24px -->
                </td>
            </tr>
        </table>
    </form>
</body>

</html>