<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vask Clothes</title>
    <link rel="icon" type="image/x-icon" href="https://as1.ftcdn.net/v2/jpg/01/83/89/40/1000_F_183894038_uIpAt6OXo8bh8rDzMG1YCFBnTKZr0Wll.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/htsp.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=nam">Đồ Nam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=nu">Đồ Nữ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=khac">Phụ kiện</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php
                    if (isset($_SESSION['ten_dang_nhap'])) {
                        extract($_SESSION['ten_dang_nhap']); ?>
                        <li class="nav-item">
                            <a class="nav-link">Xin chào, <span style="color: red; text-transform: uppercase; font-weight: bold;"><?= $ten_dang_nhap; ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=giohang"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=donhangcuatoi"><i class="fas fa-list"></i> Đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=suatk&id_tai_khoan=<?php echo $_SESSION['ten_dang_nhap']['id_tai_khoan']; ?>"><i class="fas fa-user"></i> Tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=thoat"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                        </li>
                        <?php if ($vai_tro == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php"><i class="fas fa-user-shield"></i> Admin</a>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=dangnhap"><i class="fas fa-user"></i> Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=dangky"><i class="fas fa-user-plus"></i> Đăng ký</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
