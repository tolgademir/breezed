<?php

require_once 'islemler/db.php';

include 'islemler/fonksiyonlar.php';

oturumkontrol();

?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/x-icon" href="resimler/favicon/<?php echo $panel_ayarlar['panel_logo'] ?>">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-code"></i></div>
                <div class="sidebar-brand-text mx-3">Panel <sup>v.2.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Ana Sayfa -->
            <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-fw fa-home"></i><span>Ana Sayfa</span></a></li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Panel</div>

            <!-- Nav Item - Ayarlar -->
            <li class="nav-item"><a class="nav-link" href="ayarlar.php"><i class="fas fa-fw fa-cog"></i><span>Ayarlar</span></a></li>

            <!-- Nav Item - Profil -->
            <li class="nav-item"><a class="nav-link" href="profil.php"><i class="fas fa-fw fa-user"></i><span>Profil</span></a></li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Website</div>

            <li class="nav-item"><a class="nav-link" href="seo.php"><i class="fas fa-fw fa-file"></i><span>Seo</span></a></li>

            <li class="nav-item"><a class="nav-link" href="navbar.php"><i class="fas fa-fw fa-file"></i><span>Navbar</span></a></li>

            <li class="nav-item"><a class="nav-link" href="banner.php"><i class="fas fa-fw fa-file"></i><span>Banner</span></a></li>

            <li class="nav-item"><a class="nav-link" href="slider.php"><i class="fas fa-fw fa-file"></i><span>Slider</span></a></li>

            <li class="nav-item"><a class="nav-link" href="hizmetler.php"><i class="fas fa-fw fa-file"></i><span>Hizmetler</span></a></li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline"><button class="rounded-circle border-0" id="sidebarToggle"></button></div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $kullanici['kul_isim'] ?></span>
                                <img class="img-profile rounded-circle" src="resimler/favicon/<?php echo $panel_ayarlar['panel_logo'] ?>">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"

                                aria-labelledby="userDropdown"><a class="dropdown-item" href="profil.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil</a>

                                <a class="dropdown-item" href="../index.php" target="_blank"><i class="fas fa-fw fa-code fa-sm fa-fw mr-2 text-gray-400"></i>Websiteyi Görüntüle</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="islemler/cikis.php" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Çıkış Yap</a>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->