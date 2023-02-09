<!DOCTYPE html>
<html lang="id">
<?php foreach($data as $d):?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $judul ?> | <?= $d->namasitus ?></title>
    <meta name="twitter:description" content="<?= $d->deskripsi ?>">
    <meta name="description" content="<?= $d->deskripsi ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?= base_url() ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $d->namasitus ?>">
    <link rel="icon" type="image/png" sizes="120x120" href="<?= $d->favicon ?>">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=280f20aa879930ec23e2ae8867ce4bb9">
    <link rel="stylesheet" href="assets/css/Anek%20Malayalam.css?h=e2f3cfddfb62a688bbb94429596eab00">
    <link rel="stylesheet" href="assets/css/Anton.css?h=793f2df8ab8fed4862cf7b3738009b18">
    <link rel="stylesheet" href="assets/css/Lato.css?h=370a5e464fbafd2d17fd65f7180cdccc">
    <link rel="stylesheet" href="assets/css/Footer-Dark-icons.css?h=befd8a398792e305b7ffd4a176b5b585">
    <link rel="stylesheet" href="assets/css/styles.css?h=43ffd52ce2646b15ecdf00f00f4c7f9d">
</head>

<body style="font-family: 'Anek Malayalam', sans-serif;">
    <header>
        <section>
            <div class="row g-0" style="background: var(--bs-gray-dark);">
                <div class="col d-lg-flex align-items-lg-center">
                    <h6 class="text-light" style="margin-top: 8px;margin-left: 8px;"><?= $d->namasitus ?></h6>
                </div>
                <div class="col d-lg-flex justify-content-lg-end align-items-lg-center d-none">
                    <h6 style="margin-top: 8px;margin-left: 8px;margin-right: 8px; color:#00b4d8"><a href="https://time.is/Ngabang" id="time_is_link" class="d-none" rel="nofollow" style="color:#00b4d8">Time in Ngabang:</a><span id="Ngabang_z434"></span> WIB</h6>
                </div>
            </div>
        </section>
        <section class="d-inline">
            <div class="row g-0 d-lg-flex align-items-lg-center">
                <div class="col-12 col-md-3 d-none d-md-flex justify-content-center align-items-center" style="padding: 10px;"><a href="/"><img src="<?= $d->logo ?>" alt="<?= $d->logo ?>" style="width: 150px;"></a></div>
                <div class="col-12 col-md-9 d-flex justify-content-lg-end justify-content-center" style="padding: 10px;"><img src="<?= $d->ads1 ?>" alt="<?= $d->ads1 ?>" width="70%" style="box-shadow: 0px 4px 5px;"></div>
            </div>
        </section>
    </header>
    <section class="navbardesktop" style="z-index: 10;">
        <div class="row g-0 d-lg-flex justify-content-lg-center">
            <div class="col-12 col-md-9">
                <nav class="navbar navbar-light navbar-expand-md" style="background: var(--bs-body-bg);">
                    <div class="container-fluid"><a href="/"><img class="d-md-none" src="<?= $d->logo ?>" alt="<?= $d->logo ?>" style="width: 150px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">MENU</span><span class="navbar-toggler-icon" style="background: url(&quot;assets/img/icon-menu-png-5.png?h=35239163a42153fa21f5c1f7c29f72c5&quot;) center / cover no-repeat;"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav" id="cnav">
                                <?php foreach($navigasi as $nav):?>
                                    <?php if($nav->type == 'NAV-ITEM'){?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="<?= $nav->link ?>" href="<?= $nav->link ?>">
                                                <img height="16px" src="<?= $nav->image ?>" alt="<?= $nav->image ?>">
                                                <?= $nav->judul ?>
                                            </a>
                                        </li>
                                    <?php ;}?>

                                    <?php if($nav->type == 'NAV-DROPDOWN'){?>
                                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" id="<?= $nav->link ?>"><img height="16px" src="<?= $nav->image ?>" alt="<?= $nav->image ?>"> <?= $nav->judul ?></a>
                                            <div class="dropdown-menu">
                                                <?php
                                                    $subnav = new \App\Models\Msubnavigasi();
                                                    foreach($subnav->where('nav_id', $nav->id)->findAll() as $s){echo '
                                                        <a class="dropdown-item" href="'.$s->link.'">'.$s->judul.'</a>
                                                    ';}
                                                ?>
                                            </div>
                                        </li>
                                    <?php ;}?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-light" href="https://kalbar.polri.go.id">POLDA KALBAR</a></li>
                <li class="list-inline-item me-4"><a class="link-light" href="https://polri.go.id">POLRI</a></li>
                <li class="list-inline-item"><a class="link-light" href="https://penerimaan.polri.go.id">PENERIMAAN POLRI</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a href="<?= $d->fb ?>" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-4"><a href="<?= $d->tw ?>" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item"><a href="<?= $d->ig ?>" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></a></li>
            </ul>
            <p class="text-muted mb-0">©<?= date('Y') ?> | TIK POLRES LANDAK</p>
        </div>
    </footer><!-- End: Footer Dark -->
    <script src="assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="assets/js/sw.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=79ff9637b74326c362fb6f7f5801a7ba"></script>
    <script src="//widget.time.is/t.js"></script>
    <script>
        time_is_widget.init({Ngabang_z434:{}});
    </script>
    <?= $this->renderSection('script') ?>
</body>
<?php endforeach; ?>
</html>