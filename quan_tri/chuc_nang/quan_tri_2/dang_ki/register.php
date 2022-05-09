<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../dang_ki/style.css" />
</head>

<body>
    <form method="post" action="register.php" class="form" style="width:500px;">

        <center>
            <h4>Đăng ký Thông Tin</h4>
        </center>

        <b>Username: </b><input type="text" name="username" value="" required placeholder="Nhập vào tên đăng nhập">

        <b>Password: </b><input type="text" name="password" value="" required placeholder="Nhập mật khẩu">

        <b>Email: </b><input type="email" name="email" value="" required placeholder="Nhập vào email đăng nhập">

        <b>Phone: </b><input type="text" name="phone" value="" required placeholder="Nhập vào số điện thoại">
        <br> </br>
        <center><button class="btn btn-success" type="submit" name="dangky" value="">Đăng Ký</button></center>
        <?php require 'xuly.php'; ?>
    </form>
</body>

</html>