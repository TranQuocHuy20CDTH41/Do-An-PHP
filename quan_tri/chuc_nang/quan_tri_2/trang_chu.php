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
    if (!isset($bien_bao_mat)) { // xuất ra trang trắng nếu truy cập trực tiếp vào file này 
        exit();
    }
    ?>
    <style type="text/css">
        a.lk_1 {
            font-size: 22px;
            text-decoration: none;
            color: blue;
            margin-right: 30px;
        }

        a.lk_1:hover {
            color: red
        }
    </style>
    <br>
    <center>
        <a href="index.php" style="font-size:72px;color:blue;text-decoration:none">Quản trị website</a>
    </center>
    <br><br>
    <table width="990px">
        <tr>
            <td width="800px" style="background-color:	#FF9933;">
                <!-- đây là vùng chứa các menu liên kết , các menu này có class là lk_1 (class này đã định nghĩa css phía trên)  -->
                <a href="index.php" class="lk_1" id="lk1"><b>Trang chủ</b></a>
                <a href="?thamso=menu_doc" class="lk_1"><b>Danh mục</b></a>
                <a href="?thamso=san_pham" class="lk_1"><b>Sản phẩm</b></a>
                <a href="?thamso=hoa_don" class="lk_1"><b>Hóa đơn</b></a>
            </td>
            <td align="right" style="background-color:	#FF9933;">
                <a href="?thamso=thoat" class="lk_1"><i class="bi bi-box-arrow-left" title="Thoát"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg></i></a>
                <!-- Tạo liên kết đăng xuất khỏi trang quản trị với liên kết là ?thamso=thoat -->
            </td>
        </tr>
    </table>
    <br><br>
    <?php
    include("chuc_nang/quan_tri_2/dieu_huong.php");
    // gọi trang 'dieu_huong.php' , trang này có nhiệm vụ dựa vào biến 'thamso' trên url để đến các trang web khác nhau
    // như trang thêm menu , sản phẩm ; trang sửa xóa menu , sản phẩm ; trang quản lý hóa đơn ...   
    ?>
    <br><br>
    <table width="990px">
        <tr>
            <td width="445px" align="right">
                <h3>Đồ án môn: </h3>
            </td>
            <td width="445px">
                <h3>Lập Trình Web Cơ Bản</h3>
            </td>
        </tr>
        <tr>
            <td align="right">
                <br>
                <h3>Thành viên nhóm:</h3>
            </td>
            <td>
                <br>
                <h4>Lê Hữu Tài</h4>

                <h4>Trần Văn Quang</h4>

                <h4>Trần Quốc Huy</h4>

            </td>
        </tr>
        <tr style="margin-top: 20px;">
            <td align="right">
                <br>
                <h3>Lớp :</h3>
            </td>
            <td>
                <br>
                <h3>20CDTH41</h3>
            </td>
        </tr>
    </table>
</body>

</html>