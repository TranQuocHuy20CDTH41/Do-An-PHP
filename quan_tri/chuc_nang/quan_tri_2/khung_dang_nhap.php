<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right bottom, #b2e3e2, #a9e0e2, #a1dde3, #98d9e4, #90d6e5, #8acee4, #87c6e3, #86bde0, #8badd6, #919dc9, #978db8, #9a7ea4);
            opacity: 85%;
        }

        button {
            outline: 2px solid black;
        }
    </style>
    <title>Đăng nhập</title>
</head>

<body>
    <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
    <br><br>
    <center>
        <form method="post">
            <table style="border: 2px solid black;border-radius: 3px;height: 200px; width: 400px;background:linear-gradient(to right bottom, #CCFFFF, #CCCCFF);">
                <tr>
                    <td>Ký danh :</td>
                    <td><input style="width:270px" name="ky_danh"></td>
                </tr>
                <tr>
                    <td>Mật khẩu :</td>
                    <td><input type="password" style="width:270px" name="mat_khau"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri">
                        <button type="submit" class="btn btn-success mt-2">Đăng nhập</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>