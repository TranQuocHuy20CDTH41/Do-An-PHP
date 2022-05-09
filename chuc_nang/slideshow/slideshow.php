<style type="text/css">
    div.slideshow img {
        width: 600px;
        height: 260px
    }
</style>
<center>
    <div class="slideshow" id="slideshow" width="700px">
        <?php
        $tv = new mysqli('localhost', 'root', '', 'do_an_php');
        $tv_1 = $tv->query("select hinh,lien_ket from slideshow order by id");
        while ($tv_2 = mysqli_fetch_array($tv_1))
        // mysqli_fetch_array() tìm nạp một hàng kết quả dưới dạng một mảng kết hợp, một mảng số hoặc cả hai.
        {
            $link_hinh = "img/" . $tv_2['hinh'];
            echo "<img style='width: 1000px;margin-right: 50px;' src='" . $link_hinh . "'>";
        }
        ?>
    </div>
</center>
<script type="text/javascript">
    var i_img = 0;
    var div_slideshow = document.getElementById("slideshow");
    // getElementById trả về phần tử có thuộc tính ID là giá trị được chỉ định.
    var img_slideshow = div_slideshow.getElementsByTagName("img");
    for (var i = 0; i < img_slideshow.length; i++) {
        img_slideshow[i].style.display = "none";
    }
    img_slideshow[0].style.display = "block";

    setInterval(function() {
        img_slideshow[i_img].style.display = "none";
        i_img = i_img + 1;
        if (i_img >= img_slideshow.length) {
            i_img = 0;
        }
        img_slideshow[i_img].style.display = "block";
    }, 5000);
</script>