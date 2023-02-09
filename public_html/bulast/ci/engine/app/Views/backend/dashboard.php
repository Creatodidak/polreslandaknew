<?= $this->extend('layout/dashboard'); ?>
<?= $this->section('content') ?>
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"><?= $judul ?></h3>
</div>
<div class="row">
    <div class="col-md-4 col-xl-4 mb-4">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>user</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span><?= $user ?> Pers</span></div>
                    </div>
                    <div class="col-auto"><svg class="fa-2x text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z">
                            </path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xl-4 mb-4">
        <div class="card shadow border-start-success py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>BERITA</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span><?= $berita ?> LINK</span></div>
                    </div>
                    <div class="col-auto"><svg class="fa-2x text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M480 32H128C110.3 32 96 46.33 96 64v336C96 408.8 88.84 416 80 416S64 408.8 64 400V96H32C14.33 96 0 110.3 0 128v288c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V64C512 46.33 497.7 32 480 32zM272 416h-96C167.2 416 160 408.8 160 400C160 391.2 167.2 384 176 384h96c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 320h-96C167.2 320 160 312.8 160 304C160 295.2 167.2 288 176 288h96C280.8 288 288 295.2 288 304C288 312.8 280.8 320 272 320zM432 416h-96c-8.836 0-16-7.164-16-16c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C448 408.8 440.8 416 432 416zM432 320h-96C327.2 320 320 312.8 320 304C320 295.2 327.2 288 336 288h96C440.8 288 448 295.2 448 304C448 312.8 440.8 320 432 320zM448 208C448 216.8 440.8 224 432 224h-256C167.2 224 160 216.8 160 208v-96C160 103.2 167.2 96 176 96h256C440.8 96 448 103.2 448 112V208z">
                            </path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-xl-4 mb-4">
        <div class="card shadow border-start-success py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-danger fw-bold text-xs mb-1"><span>TRAFFIC</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span><?= $traffic ?> Visitors</span></div>
                    </div>
                    <div class="col-auto"><svg class="fa-2x text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z">
                            </path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7 col-xl-8">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary fw-bold m-0">Earnings Overview</h6>
                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item"
                            href="#"> Action</a><a class="dropdown-item" href="#"> Another action</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"> Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area"><canvas height="400" width="628"
                        style="display: block; height: 320px; width: 503px;"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xl-4">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary fw-bold m-0">Revenue Sources</h6>
                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item"
                            href="#"> Action</a><a class="dropdown-item" href="#"> Another action</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"> Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area"><canvas height="400" width="428"
                        style="display: block; height: 320px; width: 343px;"></canvas></div>
                <div class="text-center small mt-4"><span class="me-2"><i
                            class="fas fa-circle text-primary"></i> Direct</span><span class="me-2"><i
                            class="fas fa-circle text-success"></i> Social</span><span class="me-2"><i
                            class="fas fa-circle text-info"></i> Refferal</span></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Projects</h6>
            </div>
            <div class="card-body">
                <h4 class="small fw-bold">Server migration<span class="float-end">20%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                        style="width: 20%;"><span class="visually-hidden">20%</span></div>
                </div>
                <h4 class="small fw-bold">Sales tracking<span class="float-end">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                        style="width: 40%;"><span class="visually-hidden">40%</span></div>
                </div>
                <h4 class="small fw-bold">Customer Database<span class="float-end">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                        style="width: 60%;"><span class="visually-hidden">60%</span></div>
                </div>
                <h4 class="small fw-bold">Payout Details<span class="float-end">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                        style="width: 80%;"><span class="visually-hidden">80%</span></div>
                </div>
                <h4 class="small fw-bold">Account setup<span class="float-end">Complete!</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                        style="width: 100%;"><span class="visually-hidden">100%</span></div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Todo List</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span>
                        </div>
                        <div class="col-auto">
                            <div class="form-check"><input id="formCheck-1" class="form-check-input"
                                    type="checkbox" /><label class="form-check-label" for="formCheck-1"></label></div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span>
                        </div>
                        <div class="col-auto">
                            <div class="form-check"><input id="formCheck-2" class="form-check-input"
                                    type="checkbox" /><label class="form-check-label" for="formCheck-2"></label></div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span>
                        </div>
                        <div class="col-auto">
                            <div class="form-check"><input id="formCheck-3" class="form-check-input"
                                    type="checkbox" /><label class="form-check-label" for="formCheck-3"></label></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-primary shadow">
                    <div class="card-body">
                        <p class="m-0">Primary</p>
                        <p class="text-white-50 small m-0">#4e73df</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-success shadow">
                    <div class="card-body">
                        <p class="m-0">Success</p>
                        <p class="text-white-50 small m-0">#1cc88a</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-info shadow">
                    <div class="card-body">
                        <p class="m-0">Info</p>
                        <p class="text-white-50 small m-0">#36b9cc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-warning shadow">
                    <div class="card-body">
                        <p class="m-0">Warning</p>
                        <p class="text-white-50 small m-0">#f6c23e</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-danger shadow">
                    <div class="card-body">
                        <p class="m-0">Danger</p>
                        <p class="text-white-50 small m-0">#e74a3b</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card text-white bg-secondary shadow">
                    <div class="card-body">
                        <p class="m-0">Secondary</p>
                        <p class="text-white-50 small m-0">#858796</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>

<?= $this->endSection() ?>