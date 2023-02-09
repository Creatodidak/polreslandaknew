<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $judul ?> - Backend Polres Landak</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Laman Backend Website Polres Landak">
    <meta name="twitter:title" content="BACKEND POLRES LANDAK">
    <meta name="description" content="Laman Backend Website Polres Landak">
    <meta property="og:image" content="<?= base_url() ?>/backend/assets/img/tik.png">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="<?= base_url() ?>/backend/assets/img/tik.png">
    <link rel="stylesheet" href="<?= base_url() ?>/backend/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/backend/assets/css/Anek%20Malayalam.css">
    <link rel="stylesheet" href="<?= base_url() ?>/backend/assets/css/Nunito.css">
    <link rel="stylesheet" href="<?= base_url() ?>/backend/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/backend/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dt.css">

</head>
<?php 
$uri = service('uri')->getSegment(3); ?>
<body id="page-top" style="font-family: 'Anek Malayalam', sans-serif;">
    <div id="wrapper">
        <nav class="navbar navbar-dark d-flex align-items-start justify-content-center align-items-center sidebar sidebar-dark accordion bg-gradient-primary p-0 toggled"
            style="background: var(--bs-gray-800);height: 100vh;position: fixed;z-index: 5;">
            <div class="container-fluid d-flex flex-column p-0"><img src="<?= base_url() ?>/backend/assets/img/tik.png"
                    width="50%" style="margin-top: 30px;" />
                <h6 class="text-light">V 2.0</h6>
                <hr class="sidebar-divider my-0" />
                <ul id="accordionSidebar" class="navbar-nav text-light">
                    <li class="nav-item <?php if(session()->level != 1){echo 'd-none';} ?>"><a class="nav-link <?php if($uri == null){echo 'active';} ?>" href="<?= base_url('landak/dashboard') ?>"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($uri == 'profile'){echo 'active';} ?>" href="<?= base_url('landak/dashboard/profile') ?>"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($uri == 'berita'){echo 'active';} ?>" href="<?= base_url('landak/dashboard/berita') ?>"><i
                                class="fas fa-newspaper"></i><span>BERITA</span></a></li>
                </ul>
                <div class="text-center d-md-none d-inline"><button id="sidebarToggle"
                        class="btn rounded-circle border-0" type="button"></button></div>
            </div>
        </nav>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button id="sidebarToggleTop"
                            class="btn btn-warning d-md-none rounded-circle me-3" type="button"><i
                                class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">USER</span><img
                                            class="border rounded-circle img-profile"
                                            src="<?= base_url() ?>/backend/assets/img/tik.png" /></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in d-none"><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><?= request()->getIPAddress() ?><br><span>© TIK Polres
                            Landak 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?= base_url() ?>/backend/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/backend/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/backend/assets/js/chart.min.js"></script>
    <script src="<?= base_url() ?>/backend/assets/js/bs-init.js"></script>
    <script src="<?= base_url() ?>/backend/assets/js/theme.js"></script>
    <script src="<?= base_url() ?>/assets/js/sw.js"></script>
    <?= $this->renderSection('script') ?>

</body>

</html>