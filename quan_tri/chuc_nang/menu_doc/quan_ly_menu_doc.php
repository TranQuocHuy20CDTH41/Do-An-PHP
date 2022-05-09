<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Quản lý danh mục</title>
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
    }
    ?>
    <?php
    $so_dong_tren_mot_trang = 20;  // số menu xuất ra trong 1 trang , ở đây là 20 menu
    if (!isset($_GET['trang'])) {
        $_GET['trang'] = 1;
    }

    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select count(*) from menu_doc");  // đếm số dòng trong bảng 'menu_doc'
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0] / $so_dong_tren_mot_trang);
    // tính số trang xuất ra của phần quản lý menu dọc (nếu lớn hơn 20 thì số trang lớn hơn 1 )

    $vtbd = ($_GET['trang'] - 1) * $so_dong_tren_mot_trang;
    // tính vị trí bắt đầu giới hạn của bảng 'menu_doc' tùy theo trang hiện hành
    $tv = new mysqli('localhost', 'root', '', 'do_an_php');
    $tv_1 = $tv->query("select * from menu_doc order by id limit $vtbd,$so_dong_tren_mot_trang");
    // lệnh truy cập vào bảng 'menu_doc' sắp xếp theo 'id' tăng dần với giới hạn là tùy theo trang hiện tại
    ?>
    <table width="500px" class="tb_a1" style="border: 2px solid black; box-shadow: 2px 2px black;">
        <tr style=" background:#CCFFFF;height:40px;">
            <td width="400px" align="center" style="border: 2px solid black;"><b>Tên</b></td>
            <td align="center" width="50px" style="border: 2px solid black;"><b>Sửa</b></td>
            <td align=" center" width="50px" style="border: 2px solid black;"><b>Xóa</b></td>
        </tr>
        <?php
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $id = $tv_2['id'];
            $ten = $tv_2['name'];
            $link_sua = "?thamso=sua_menu_doc&id=" . $id . "&trang=" . $_GET['trang'];
            $link_xoa = "?xoa_menu_doc=co&id=" . $id;
        ?>
            <tr class=" a_1">
                <td style="border: 2px solid black;">
                    <a href=" <?php echo $link_sua; ?>" class="lk_a1" style="text-decoration: none; color: black;">
                        <?php echo $ten; ?>
                    </a>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-success"><a href=" <?php echo $link_sua; ?>" class="lk_a1" style="text-decoration: none; color:white;">Sửa</a></button>
                </td>
                <td align="center" style="border: 2px solid black;">
                    <button class="btn btn-danger"><a href=" <?php echo $link_xoa; ?>" class="lk_a1" style="text-decoration: none; color: white;">Xóa</a></button>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3" align="center">
                <br>
                <?php
                for ($i = 1; $i <= $so_trang; $i++) {
                    $link_phan_trang = "?thamso=quan_ly_menu_doc&trang=" . $i;
                    echo "<a href='$link_phan_trang' class='phan_trang' >";
                    echo $i;
                    echo "</a> ";
                }
                ?>
                <br><br>
            </td>
        </tr>
    </table>
</body>

</html>