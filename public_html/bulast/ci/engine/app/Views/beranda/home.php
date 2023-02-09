<?= $this->extend($layout); ?>
<?php foreach($data as $d):?>
<?= $this->section('content') ?>
    <section style="background: #00000000;">
        <div class="row g-0 row-cols-1">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row g-0" style="height: 48px;">
                    <div
                        class="col-2 d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center topnews-tag">
                        <img src="assets/img/humas.png?h=fb56d3f055ee0f9d14bc88a0a8e38098" height="40px"></div>
                    <div class="col-10" style="background: var(--bs-gray-100);border-bottom: 5px solid #00b4d8;">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row g-0">
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="row g-0">
                            <div class="col-12 col-md-8 p-1" style="overflow: hidden;height: 300px;"><img
                                    src="<?= base_url($d->banner)?>" width="100%" alt="<?= $d->banner ?>"
                                    height="100%"></div>
                            <div class="col-12 col-md-4 p-1" style="height: 300px;"><img
                                    src="<?= base_url($d->nomorpengaduan) ?>" alt="<?= $d->nomorpengaduan ?>"
                                    width="100%" height="100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 offset-md-1" style="padding: 10px;background: var(--bs-black);">
                <div class="row g-0">
                    <div class="col-12 col-md-4">
                        <div class="row g-0 row-cols-1">
                            <div class="col" style="padding: 5px;height: 300px;"><iframe allowfullscreen="" frameborder="0"
                                    src="<?= $d->youtube_embbed ?>" width="100%" height="100%"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8" style="height: 300px;overflow: hidden;padding: 5px;">
                        <div style="position: relative;overflow: hidden;height: 300px;">
                            <div style="position: absolute;z-index: 1;left: 10px;bottom: 0px;"><span class="badge fs-5"
                                    style="background: rgba(255,193,7,0.52);">KATEGORI BERITA</span>
                                <p class="text-uppercase fw-bold">Judul beritanya nanti ada disini</p>
                            </div><img class="berita-img"
                                src="assets/img/antarafoto-apel-operasi-liong-kapuas-310122-jhw-3_ratio-16x9.jpg?h=ce3d4ddaa9ba3a879fe690192f6eb930"
                                style="min-height: 300px;width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row g-0 row-cols-1">
            <div class="col-md-10 offset-md-1 d-xl-flex justify-content-xl-center">
                <section class="d-flex justify-content-start align-items-center" style="width: 100%;overflow: scroll;">
                    <ul class="list-unstyled d-flex align-self-start">
                        <?php foreach($satker as $s):?>
                            <li class="kategori"><span class="badge rounded-pill kategori-bdg" style="cursor:pointer" id="catsatker<?= $s->id ?>" onclick="cat(<?= $s->id ?>)"><h4><?= $s->satker ?></h4></span></li>
                        <?php endforeach; ?>
                        <?php foreach($kategori as $k):?>
                            <li class="kategori"><span class="badge rounded-pill kategori-bdg" style="cursor:pointer" id="cat<?= $k->id ?>" onclick="cat(<?= $k->id ?>)"><h4><?= $k->kategori ?></h4></span></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="row g-0" id="beritalist">
                </div>
            </div>
        </div>
    </section>
    <section class="p-1">
        <div class="row g-0">
            <div class="col-md-10 offset-md-1 p-2">
                <section>
                    <div class="row g-0" style="margin: 0px;">
                        <div class="col-4" style="border-bottom: 5px solid var(--bs-light);"></div>
                        <div class="col-4 d-lg-flex justify-content-lg-center align-items-lg-center flash animated infinite"
                            style="background: var(--bs-body-color);border-top-left-radius: 15px;border-top-right-radius: 15px;">
                            <h4 class="text-center" style="color: var(--bs-body-bg);padding-left: 5px;">
                                <strong>F</strong>ollow Us!</h4>
                        </div>
                        <div class="col-4" style="border-bottom: 5px solid var(--bs-light);"></div>
                    </div>
                    <div class="row g-0 row-cols-5 row-cols-sm-5 row-cols-lg-5">
                        <a class="text-decoration-none" href="<?= $d->fb ?>" target="_blank" rel="noopener noreferrer">
                            <div class="col d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center"
                                data-bss-hover-animate="swing" style="background: var(--bs-blue);padding: 10px;">
                                <div class="row g-0">
                                    <div class="col d-flex justify-content-center align-items-lg-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                            fill="currentColor" style="color: rgb(255,255,255);font-size: 32px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                            </path>
                                        </svg></div>
                                    <div class="col d-lg-block d-none">
                                        <h2 style="margin-bottom: 0px;color: white;"><strong>&nbsp;Facebook</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-decoration-none" href="<?= $d->ig ?>" target="_blank" rel="noopener noreferrer">
                            <div class="col d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center"
                                data-bss-hover-animate="swing"
                                style="background: linear-gradient(-175deg, #ff7400 51%, #ffd864), rgba(13,110,253,0);padding: 10px;">
                                <div class="row g-0">
                                    <div class="col d-flex justify-content-center align-items-lg-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                            fill="currentColor" style="color: rgb(255,255,255);font-size: 32px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg></div>
                                    <div class="col d-lg-block d-none">
                                        <h2 style="margin-bottom: 0px;color: white;"><strong>&nbsp;Instagram</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-decoration-none" href="<?= $d->tw ?>" target="_blank" rel="noopener noreferrer">
                            <div class="col d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center"
                                data-bss-hover-animate="swing" style="background: var(--bs-cyan);padding: 10px;">
                                <div class="row g-0">
                                    <div class="col d-flex justify-content-center align-items-lg-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                            fill="currentColor" style="color: rgb(255,255,255);font-size: 32px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                            </path>
                                        </svg></div>
                                    <div class="col d-lg-block d-none">
                                        <h2 style="margin-bottom: 0px;color: white;"><strong>&nbsp;Twitter</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-decoration-none" href="<?= $d->yt ?>" target="_blank" rel="noopener noreferrer">
                            <div class="col d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center"
                                data-bss-hover-animate="swing" style="background: var(--bs-danger);padding: 10px;">
                                <div class="row g-0">
                                    <div class="col d-flex justify-content-center align-items-lg-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                                            fill="currentColor" style="color: rgb(255,255,255);font-size: 32px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                            </path>
                                        </svg></div>
                                    <div class="col d-lg-block d-none">
                                        <h2 style="margin-bottom: 0px;color: white;"><strong>&nbsp;Youtube</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-decoration-none" href="<?= $d->tiktok ?>" target="_blank" rel="noopener noreferrer">
                            <div class="col d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center"
                                data-bss-hover-animate="swing" style="background: var(--bs-gray-800);padding: 10px;">
                                <div class="row g-0">
                                    <div class="col d-flex justify-content-center align-items-lg-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                            fill="currentColor" style="color: rgb(255,255,255);font-size: 32px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                            </path>
                                        </svg></div>
                                    <div class="col d-lg-block d-none">
                                        <h2 style="margin-bottom: 0px;color: white;"><strong>&nbsp;Tiktok</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-10 offset-md-1">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-bef49b21-6067-4375-8308-8c5b503b4643"></div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?php endforeach; ?>
<?= $this->section('script') ?>
    <script>
        var urls = '<?= base_url("api")?>';

        $.ajax({
            type: "get",
            url: urls,
            dataType: "json",
            success: function (response) {

            var brt = response.berita;

                $('#beritalist').append('<div class="col-md-4" style="overflow: hidden;padding: 5px;"><a style="text-decoration:none" href="/berita/baca/'+brt[0].link+'"><div style="position: relative;overflow: hidden;height: 100%;"><div style="position: absolute;z-index: 7;left: 10px;bottom: 0px;"><span class="badge fs-5"style="background: rgba(255,193,7,0.52);">'+brt[0].kategori+'</span><p class="text-uppercase fw-bold text-white">'+brt[0].judul+'</p></div><img class="berita-img" src="'+brt[0].foto+'" style="min-height: 100%;width: 100%;"></div></a></div><div class="col-md-8"><div id="beritasub" class="row g-0 row-cols-1 row-cols-md-2"></div></div>');

                for (let i = 1; i < brt.length; i++) {
                    $('#beritasub').append('<a style="text-decoration:none" href="/berita/baca/'+brt[i].link+'"><div class="col p-2"><div class="card bg-dark" style="border-radius: 5px;"><div class="card-body" style="padding: 0px;"><div class="row g-0"><div class="col-3"style="background: url(&quot;'+brt[i].foto+'&quot;) center / cover no-repeat;"></div><div class="col-9"><div class="row g-0 row-cols-1"><div class="col p-2"><h4 style="margin: 0px;" class="text-white">'+brt[i].judul+'</h4></div><div class="col p-2"><h6 style="margin: 0px;">'+brt[i].kategori+'</h6></div></div></div></div></div></div></div></a>')              
                }
            }

            
        });
    </script>
<?= $this->endSection() ?>
