
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/images/logo_icon.png">

    <link rel="stylesheet" href="../view/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fahip - Áo Polo</title>
    <style>
        .dangnhap img {
            width: 40px;
            margin-top: 10%;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .dangnhap {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

        <header>
            <div class="reponsi_phone">
                <div class="phone">
                    <div id="toggle"><i class="fa-solid fa-bars"></i></div>
                    <nav class="menu1">
                        <ul>
                            <div class="menu_title">
                                <h2>Menu</h2>
                                <p class="close"><i class="fa-solid fa-xmark"></i></p>
                            </div>
                            <li><a href="../controller/index.php">Trang chủ</a></li>
                            <li><a href="../controller/index.php">Giới thiệu</a></li>
                          
                            <li class="repon_login">
                            <?php
                                if (isset($_SESSION['name'])) {
                                    echo '
                                    <a href="../controller/index.php?act=register">ĐĂNG KÝ</a>
                                        <a href="../controller/index.php?act=login" class="dangnhap">
                                        <img  src="../view/images/' . $_SESSION['avata'] . '">
                                        </a><span></span>
                                       ';
                                } else {
                                    echo '
                                    <a href="../controller/index.php?act=login"><i class="fa-solid fa-user"></i> Đăng nhập</a>
                                    <a href="../controller/index.php?act=register"><i class="fa-solid fa-user-plus"></i> Đăng ký</a>
                                    ';
                                }
                                ?>
                                
                            </li>
                            <li><a href="../controller/index.php">Liên hệ</a></li>
                            <?php 
                                    $dsdanhmmuc = danhmuc_showAll();
                                    foreach($dsdanhmmuc as $row){
                                        echo '<li><a href="../controller/index.php?act=sanpham&id=' . $row['iddanhmuc'] . '">' . $row['tendanhmuc'] . '</a></li>';
                                    }
                            ?>
                        </ul>
                    </nav>
                    <a href="../controller/index.php" class="logo"><img src="../view/images/logo.png" alt=""></a>
                    <a href="../controller/index.php?act=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div class="top" style="  background: #758884 !important;">
                <div class="header-top" >
                    <span class="tille-top">TIN MỚI:</span>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4">
                        <a href="../controller/index.php?act=baiviet" title="Bán áo Polo tại Thành phố Hồ Chí Minh" >Bán áo Polo tại Thành phố Hồ Chí Minh</a>
                        <span class="hotline-space"></span>
                        <a href="../controller/index.php?act=baiviet" title="Mẫu áo Polo dành cho những bạn các tính" >Mẫu áo Polo dành cho những bạn các tính</a>
                        <span class="hotline-space"></span>
                        <a href="../controller/index.php?act=baiviet" title="12/12 siêu đại hội khuyên mãi" >12/12 siêu đại hội khuyên mãi</a>
                    </marquee>
                </div>
                <div class="header-top-main">
                    <div class="hotline-header">
                        <span>NHÂN VIÊN CỬA HÀNG ĐI SHIP NHANH</span><span class="hotline-space"></span>
                        <span>MIỄN PHÍ SHIP HÀNG</span><span class="hotline-space"></span>
                        <span>
                            <p>GỌI MUA HÀNG:&nbsp;&nbsp;<span style="color:#ffff;"><span style="font-size:16px;"><strong>0348008939&nbsp;&nbsp;</strong></p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="middle" style="  background: #758884 !important;">
                <div class="anh"><a href="../controller/index.php"> <img src="../view/images/logo.jpg" alt=""></a>
                </div>
                <form action="../controller/index.php?act=seach" method="POST" style="margin-top: 3px;">
                    <input type="text" name="filter" placeholder="Tìm kiếm sản phẩm..." style="color: black;">
                    <input type="submit" name="timkiem" value="Tìm Kiếm" style="color:white;">
                </form>
                <a href="../controller/index.php?act=cart" style="margin-top: 3px;"><i class="fa-solid fa-cart-shopping"></i> GIỎ HÀNG</a>
                <div class="login" style="margin-top: 3px;">
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo '
                            <a href="../controller/index.php?act=login" class="dangnhap">
                            <img  src="../view/images/' . $_SESSION['avata'] . '">
                            </a><span></span>
                            <a href="../controller/index.php?act=register">ĐĂNG KÝ</a>';
                    } else {
                        echo '<i class="fa-solid fa-user"></i>&nbsp;
                            <a href="../controller/index.php?act=login" class="dangnhap">ĐĂNG NHẬP</a><span></span>
                            <a href="../controller/index.php?act=register">ĐĂNG KÝ</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="middle_reponsive">
                <form action="../controller/index.php?act=seach" method="POST">
                    <input type="text" name="filter" placeholder="Tìm kiếm sản phẩm...">
                    <input type="submit" name="timkiem" value="Seach">
                </form>
            </div>
            <div class="bottom">
                <div class="trai">
                    <span style="  background: #758884 !important;"><i class="fa-solid fa-bars"></i> DANH MỤC SẢN PHẨM <i class="fa-solid fa-caret-down"></i></span>
                    <ul>
                        <?php 
                            $dsdanhmmuc = danhmuc_showAll();
                            foreach($dsdanhmmuc as $row){
                                echo '<li><a href="../controller/index.php?act=sanpham&id=' . $row['iddanhmuc'] . '">' . $row['tendanhmuc'] . '</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <nav class="phai">
                    <ul>

                        <li><a href="../controller/index.php">TRANG CHỦ</a></li>
                        <li><a href="../controller/about.php">GIỚI THIỆU</a></li>
                        <?php 
                            $dsdanhmmuc = danhmuc_showAll();
                            foreach($dsdanhmmuc as $row){
                                echo '<li><a href="../controller/index.php?act=sanpham&id=' . $row['iddanhmuc'] . '">' . $row['tendanhmuc'] . '</a></li>';
                            }
                        ?>

                        <li><a href="../controller/contac.php">LIÊN HỆ</a></li>
                    </ul>

                </nav>

            </div>
        </header>
        <main>