<!doctype html>
<html>
@foreach($conf as $c)

    <head>
        <meta property="fb:app_id" content="342797811136983" />
        <?php if(request()->segment(1) != 'berita'){ ?>
        <title><?= $judul ?> | <?= $c->namasitus ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBBM">
        <meta name="keywords" content="polri, polisi, landak, kalimantan barat, polres, polres landak, polda kalbar">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="id">
        <meta name="revisit-after" content="1 days">
        <meta name="author" content="CREATODIDAK.ID">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="<?= $judul ?> | <?= $c->namasitus ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:image" content="{{ url('/') }}/assets/img/og.jpg">
        <meta property="og:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
        <meta property="og:site_name" content="POLRES LANDAK PRESISI">
        <meta property="og:locale" content="id_ID">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $judul ?> | <?= $c->namasitus ?>">
        <meta name="twitter:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
        <meta name="twitter:image" content="{{ url('/') }}/assets/img/og.jpg">
        <?php }else{
            foreach($data as $d):?>
        <title><?= $d->judul ?> - <?= $c->namasitus ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="<?= substr(preg_replace('~[\\\\/:*?"<>|]~', '', str_replace(array('<p>','</p>'), '', $d->isi)), 0, 150) ?>...">
        <meta name="keywords" content="polri, polisi, landak, kalimantan barat, polres, polres landak, polda kalbar">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="1 days">
        <meta name="author" content="CREATODIDAK.ID">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="<?= $d->judul ?> - <?= $c->namasitus ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?= url()->full() ?>">
        <meta property="og:image" content="{{ url('/') }}<?= $d->thumb ?>">
        <meta property="og:description"
            content="<?= substr(preg_replace('~[\\\\/:*?"<>|]~', '', str_replace(array('<p>','</p>'), '', $d->isi)), 0, 150) ?>...">
        <meta property="og:site_name" content="POLRES LANDAK PRESISI">
        <meta property="og:locale" content="id_ID">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $d->judul ?> - <?= $c->namasitus ?>">
        <meta name="twitter:description"
            content="<?= substr(preg_replace('~[\\\\/:*?"<>|]~', '', str_replace(array('<p>','</p>'), '', $d->isi)), 0, 150) ?>...">
        <meta name="twitter:image" content="{{ url('/') }}<?= $d->thumb ?>">

        <?php endforeach;
        }?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
        @vite('resources/css/app.css')
            <!-- Required Core Stylesheet -->
            <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/glide.core.css">

            <!-- Optional Theme Stylesheet -->
            <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/glide.theme.css">

            <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/assets/img/tik.png">


    </head>

    <body style="background-color: #080e12">

        <div id="helpbutton" class="fixed bottom-0 cursor-pointer left-5 z-40">
            <img src="{{ asset('assets/img/help.png') }}" id="dropdownHoverButton"
                data-dropdown-placement="top" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                class="w-20 md:w-30 animate-pulse" alt="">
            <div id="dropdownHover"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-screen md:w-96">
                <ul class="py-2 text-xl font-bold text-black" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white"><i
                                class="fab text-green-600 fa-whatsapp"></i> INFORMASI PELAYANAN</a>
                        <hr>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white"><i
                                class="fab text-green-600 fa-whatsapp"></i> PELAYANAN SPKT</a>
                        <hr>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white"><i
                                class="fab text-green-600 fa-whatsapp"></i> LAYANAN PENGADUAN</a>
                        <hr>
                    </li>
                </ul>
            </div>
        </div>

        <div id="welcome" class="w-screen h-screen fixed z-40 flex justify-center items-center"
            style="background: rgb(89,85,85);background: linear-gradient(45deg, rgba(89,85,85,0.7467319691548495) 0%, rgba(0,0,0,0.9568160027682948) 100%);">
            <div
                class="w-full h-full md:w-half md:h-half md:border-dashed md:border-4 md:border-gray-200 rounded-lg p-5 text-3xl font-bold mx-auto items-center justify-center text-center text-white flex flex-col gap-4">
                <i
                    class="far animate-spin fa-laugh-wink text-9xl bg-gradient-to-tr from-orange-600 to-amber-300 bg-clip-text text-transparent"></i>
                <p>FYI!</p>
                <p class="text-base">LAYANAN BANTUAN DAN PENGADUAN POLRES LANDAK KINI DAPAT DIAKSES DENGAN MUDAH MELALUI
                    TOMBOL DI SUDUT KIRI BAWAH LAYAR ANDA</p>
                <button type="button" id="close-welcome"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-800 shadow-lg shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">SAYA
                    MENGERTI</button>
            </div>
            <img src="{{ asset('assets/img/help.png') }}"
                class="w-20 md:w-40 fixed bottom-0 left cursor-pointer left-5 z-40 animate-bounce" alt="">
        </div>

        <header class="sticky top-0 z-10">
            <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    <a href="#" class="flex items-center">
                        <img src="{{ URL::to('/') }}/<?= $c->logo ?>" class="mr-3 h-6 sm:h-9"
                            alt="Flowbite Logo" />
                    </a>
                    <div class="flex items-center lg:order-2">
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-400 rounded-lg lg:hidden hover:focus:outline-none focus:ring-2 hover:bg-gray-700 focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">MENU</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                        id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            @foreach($nav as $n)
                                <li>
                                    <a href="/<?= $n->link ?>"
                                        class="block py-2 pr-4 pl-3 text-white rounded <?php if(request()->segment(1) == $n->link){echo 'bg-blue-700 lg:bg-transparent lg:text-blue-700';} ?> lg:p-0"><?= $n->judul?></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container mx-auto flex flex-col">
            @yield('content')
        </div>
        <footer class="relative bg-gray-900 pt-8 pb-6 mt-4">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl fonat-semibold text-gray-200">Kunjungi Social Media Kami!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-gray-500">
                            Temukan beragam informasi penting dan menarik...
                        </h5>
                        <div class="mt-6 lg:mb-0 mb-6">
                            <a href="<?= $c->fb ?>" target="blank">
                                <button
                                    class="bg-blue-600 text-white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"><i class="fab fa-facebook-square"></i></button>
                            </a>
                            <a href="<?= $c->ig ?>" target="blank">
                                <button
                                    class="bg-orange-400 text-white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"><i class="fab fa-instagram"></i></button>
                            </a>
                            <a href="<?= $c->tw ?>" target="blank">
                                <button
                                    class="bg-cyan-500 text-white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"><i class="fab fa-twitter"></i></button>
                            </a>
                            <a href="<?= $c->yt ?>" target="blank">
                                <button
                                    class="bg-red-700 text-white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"><i class="fab fa-youtube"></i></button>
                            </a>
                            <a href="<?= $c->tiktok ?>" target="blank">
                                <button
                                    class="bg-black text-white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                                    type="button"><i class="fab fa-tiktok"></i></button>
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-gray-500 text-sm font-semibold mb-2">Tautan
                                    Lainnya</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                            href="https://polri.go.id">POLRI</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                            href="https://kalbar.polri.go.id">POLDA KALBAR</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                            href="https://penerimaan.polri.go.id">PENERIMAAN POLRI</a>
                                    </li>
                                    <li>
                                        <a class="text-red-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                            href="https://lapor.go.id">LAPOR!</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-gray-500 font-semibold py-1">
                            with &#10084; © 2017 - <span id="get-current-year"><?= date('Y') ?></span> | Creatodidak
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/cookie.js') }}"></script>
        <script src="https://kit.fontawesome.com/b9de9ce998.js" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                if ($.cookie('noShowWelcome')) $('#welcome').hide();
                else {
                    $("#close-welcome").click(function () {
                        $("#welcome").fadeOut(1000);
                        $.cookie('noShowWelcome', true);
                    });
                }
            });

        </script>
        @yield('script')
    </body>
@endforeach

</html>
