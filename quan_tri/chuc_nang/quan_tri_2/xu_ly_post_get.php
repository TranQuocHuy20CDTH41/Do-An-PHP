 <!-- xác định biểu mẫu (form) nào đã được gửi rồi gọi file xử lý biểu mẫu đã được gửi đó , 
 ngoài ra file này cũng nhằm xác định một số liên kết đã bấm vào (xử lý get) để gọi file xử lý tương ứng với liên kết đã bấm vào -->
 <?php
    if (!isset($bien_bao_mat)) {
        exit();
    }
    ?>
 <?php
    if (isset($_POST['bieu_mau_them_menu_doc'])) {
        include("chuc_nang/menu_doc/them_menu_doc_vao_csdl.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_sua_menu_doc'])) {
        include("chuc_nang/menu_doc/sua_menu_doc_o_trong_csdl.php");
        trang_truoc_html();
    }
    if (isset($_GET['xoa_menu_doc'])) {
        include("chuc_nang/menu_doc/xoa_menu_doc.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_them_san_pham'])) {
        include("chuc_nang/san_pham/them_san_pham_vao_csdl.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_sua_san_pham'])) {
        include("chuc_nang/san_pham/sua_san_pham_o_trong_csdl.php");
        trang_truoc_html();
    }
    if (isset($_GET['xoa_san_pham'])) {
        include("chuc_nang/san_pham/xoa_san_pham.php");
        trang_truoc_html();
    }
    if (isset($_GET['xoa_hoa_don'])) {
        include("chuc_nang/hoa_don/xoa_hoa_don.php");
        trang_truoc_html();
    }
    if (isset($_GET['xoa_hoa_don_o_trang_chi_tiet'])) {
        include("chuc_nang/hoa_don/xoa_hoa_don_o_trang_chi_tiet.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_san_pham_trang_chu'])) {
        include("chuc_nang/san_pham_trang_chu/sua_san_pham_trang_chu.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_them_slideshow'])) {
        include("chuc_nang/slideshow/them_slideshow_vao_csdl.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_sua_slideshow'])) {
        include("chuc_nang/slideshow/sua_slideshow_o_trong_csdl.php");
        trang_truoc_html();
    }
    if (isset($_GET['xoa_slideshow'])) {
        include("chuc_nang/slideshow/xoa_slideshow.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_sua_banner'])) {
        include("chuc_nang/banner/sua_banner_o_trong_csdl.php");
        trang_truoc_html();
    }
    if (isset($_POST['bieu_mau_sua_thong_tin_quan_tri'])) {
        include("chuc_nang/quan_tri_2/sua_thong_tin_quan_tri_o_trong_csdl.php");
        trang_truoc_html();
    }
    if (isset($_GET['thamso'])) {
        if ($_GET['thamso'] == "thoat") {
            include("chuc_nang/quan_tri_2/thoat.php");
            trang_truoc_html();
        }
    }
    ?>