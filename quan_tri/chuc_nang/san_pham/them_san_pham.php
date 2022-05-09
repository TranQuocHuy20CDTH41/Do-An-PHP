<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <Link type="text/css" rel="stylesheet" href="">
    <title>Thêm sản phẩm</title>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }

        button {
            outline: 2px solid black;
            box-shadow: 5px 5px 5px black;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- tạo biểu mẫu với phương thức là post (thuộc tính method)
         lưu ý là có viết enctype="multipart/form-data" , cách viết này cho phép biểu mẫu tải hình ảnh lên -->
        <table width="990px">
            <tr>
                <td colspan="2"><b style="color:blue;font-size:20px">Thêm sản phẩm</b><br><br> </td>

            </tr>
            <tr>
                <td width="150px"><b>Tên: </b></td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" placeholder="Nhập tên sản phẩm">
                </td>
            </tr>
            <tr>
                <td><b>Danh mục: </b></td>
                <td>
                    <?php
                    if (!isset($_SESSION['danh_muc_menu'])) {
                        $_SESSION['danh_muc_menu'] = "";
                        // vì mình muốn sau khi thêm sản phẩm thì web sẽ giữ lại phần danh mục menu được chọn trước đó nên tạo ra biến session này
                        // biến session 'danh_muc_menu' sẽ lưu giá trị của danh mục menu được chọn sau khi thêm sản phẩm 
                    }
                    ?>
                    <select name="danh_muc" style="margin-top:3px;margin-bottom:3px;">
                        <!-- xuất hộp tùy chọn select với name là 'danh_muc' (hộp này cũng cách trên , cách dưới 3px)
                        khi lấy dữ liệu từ hộp này thì viết là $_POST['danh_muc'] -->
                        <?php
                        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
                        $tv_1 = $tv->query("select * from menu_doc order by id "); // chọn các menu trong bảng 'menu_doc' để xuất vào thẻ 'select'
                        $a = "";
                        while ($tv_2 = mysqli_fetch_array($tv_1)) // lấy dữ liệu của các dòng dữ liệu trong bảng 'menu_doc' rồi gán vào mảng $tv_2
                        {
                            $ten = $tv_2['name'];
                            $id_menu = $tv_2['id'];
                            if ($_SESSION['danh_muc_menu'] == $id_menu)  // nếu id menu trùng khớp với session 'danh_muc_menu' thì danh mục đó đã được chọn trong lần thêm sản phẩm trước đó
                            {
                                $a = "selected";
                                // khi xảy ra trùng khớp thì sẽ cho biến $a có giá trị là 'selected' rồi xuất vào thẻ 'option'
                                // thẻ 'option' nào có 'selected' thì sẽ được chọn và hiển thị ra trước
                            }
                            echo "<option value='$id_menu' $a >";
                            echo $ten;
                            echo "</option>";
                            $a = "";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Hình ảnh: </b></td>
                <td>
                    <input type="file" name="image">
                    <!-- xuất hộp chọn tải ảnh , hộp chọn tải ảnh sẽ có type là file -->
                </td>
            </tr>
            <tr>
                <td><b>Giá: </b></td>
                <td>
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="price" value="" placeholder="Nhập giá sản phẩm">
                </td>
            </tr>
            <tr>
                <td><b>Trang chủ: </b></td>
                <td>
                    <?php
                    $a_1 = "";
                    $a_2 = "";
                    if (isset($_SESSION['tuy_chon_trang_chu'])) {
                        if ($_SESSION['tuy_chon_trang_chu'] == "co") {
                            $a_2 = "selected";
                        }
                    }
                    ?>
                    <select name="trang_chu" style="margin-top:3px;margin-bottom:3px;">
                        <option value="" <?php echo $a_1; ?>>Không</option>
                        <option value="co" <?php echo $a_2; ?>>Có</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top"><b>Nội dung: </b></td>
                <td>
                    <textarea id="description" name="description" style="width: 500px;height: 400px;" placeholder="Nhập vào chi tiết sản phẩm"></textarea>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <br>
                    <button type="submit" name="bieu_mau_them_san_pham" class="btn btn-success" value="" style="width:150px;height:40px;font-size:15px">Thêm sản phẩm</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>