@extends('layout/master')

@section('content')
@foreach ($conf as $c)    

<section class="flex flex-col md:flex-row">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}<?= $c->banner?>" alt="" class="w-full">
    </div>
</section>
<section class="flex flex-col md:flex-row">
    <div class="basis-full md:basis-2/6 order-2 md:order-1">
        <iframe class="w-full h-96 -z-0" src="<?= $c->youtube_embbed?>"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div class="basis-full md:basis-4/6 order-1 md:order-2">
        <div class="sliderAx h-96">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-black h-96 text-white flex content-center justify-center relative overflow-hidden">
                    <img class="object-cover opacity-40 hover:opacity-80 hover:scale-110 w-full h-96" src="{{ URL::to('/') }}/<?= $beritahumas[0]->foto ?>" alt="<?= $beritahumas[0]->foto ?>" style="transition-timing-function: ease-in; transition: 1s;">
                    <section class='absolute bottom-0 left-0 m-5'>
                        <h1 class="py-2 pl-1 font-bold bg-blue-600 uppercase w-24"><?= $beritahumas[0]->kategori ?></h1>
                        <h2 class="uppercase text-xl text-bold"><?= $beritahumas[0]->judul ?></h2>
                        <a href="{{URL::to('/')}}/berita/<?= $beritahumas[0]->link ?>">BACA SELENGKAPNYA</a>
                    </section>
                </div>
            </div>
            <div id="slider-2" class="container mx-auto">
                <div class="bg-black h-96 text-white flex content-center justify-center relative overflow-hidden">
                    <img class="object-cover opacity-40 hover:opacity-80 hover:scale-110 w-full h-96" src="{{ URL::to('/') }}/<?= $beritahumas[1]->foto ?>" alt="<?= $beritahumas[1]->foto ?>" style="transition-timing-function: ease-in; transition: 1s;">
                    <section class='absolute bottom-0 left-0 m-5'>
                        <h1 class="py-2 pl-1 font-bold bg-blue-600 uppercase w-24"><?= $beritahumas[1]->kategori ?></h1>
                        <h2 class="uppercase text-xl text-bold"><?= $beritahumas[1]->judul ?></h2>
                        <a href="{{URL::to('/')}}/berita/<?= $beritahumas[1]->link ?>">BACA SELENGKAPNYA</a>
                    </section>
                </div>
            </div>
            <div id="slider-3" class="container mx-auto">
                <div class="bg-black h-96 text-white flex content-center justify-center relative overflow-hidden">
                    <img class="object-cover opacity-40 hover:opacity-80 hover:scale-110 w-full h-96" src="{{ URL::to('/') }}/<?= $beritahumas[2]->foto ?>" alt="<?= $beritahumas[2]->foto ?>" style="transition-timing-function: ease-in; transition: 1s;">
                    <section class='absolute bottom-0 left-0 m-5'>
                        <h1 class="py-2 pl-1 font-bold bg-blue-600 uppercase w-24"><?= $beritahumas[2]->kategori ?></h1>
                        <h2 class="uppercase text-xl text-bold"><?= $beritahumas[2]->judul ?></h2>
                        <a href="{{URL::to('/')}}/berita/<?= $beritahumas[2]->link ?>">BACA SELENGKAPNYA</a>
                    </section>
                </div>
            </div>
    </div>
</section>
{{-- <div class="flex bg-black justify-start h-12 overflow-scroll scroll- max-w-full">
    <ul class="text-yellow-400 flex flex-row gap-x-2 p-2 my-auto uppercase font-bold">
        <li>cccc</li>
        <li>cccc</li>
    </ul>
</div> --}}
<section class="flex justify-center align-middle flex-col w-full md:w-4/5 mx-auto p-6">
    <div class="flex justify-center align-middle flex-row">
        <div class="basis-full md:basis-3/5 bg-gradient-to-b from-gray-900 to-gray-500 p-4 rounded-t-lg">
            <p class="text-2xl text-center text-white font-bold">JADWAL PELAYANAN POLRES LANDAK</p>
        </div>
    </div>
    <div class="flex justify-center align-middle flex-col md:flex-row">
        <div class="basis-1/5 bg-gradient-to-tr from-amber-300 to-orange-500 p-4 md:rounded-b-lg flex flex-col align-middle">
            <p class="text-2xl text-center text-white font-bold">SPKT</p>
            <p class="text-3xl font-bold text-white text-center my-auto">24 JAM</p>
        </div>
        <div class="basis-1/5 bg-gradient-to-tr from-cyan-400 to-sky-600 p-4 md:rounded-b-lg">
            <p class="text-2xl text-center text-white font-bold">SATPAS</p>
            <ul class="list-disc ml-2">
                <li class="text-base text-white font-bold">SENIN - KAMIS
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.00 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">JUM'AT
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.30 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">SABTU - MINGGU
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>CLOSED</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="basis-1/5 bg-gradient-to-tr from-gray-500 to-gray-900 p-4 md:rounded-b-lg">
            <p class="text-2xl text-center text-white font-bold">SKCK</p>
            <ul class="list-disc ml-2">
                <li class="text-base text-white font-bold">SENIN - KAMIS
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.00 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">JUM'AT
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.30 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">SABTU - MINGGU
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>CLOSED</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="basis-1/5 bg-gradient-to-tr from-orange-500 to-red-600 p-4 md:rounded-b-lg">
            <p class="text-2xl text-center text-white font-bold">IDENTIFIKASI</p>
            <ul class="list-disc ml-2">
                <li class="text-base text-white font-bold">SENIN - KAMIS
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.00 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">JUM'AT
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.30 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">SABTU - MINGGU
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>CLOSED</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="basis-1/5 bg-gradient-to-tr from-lime-600 to-green-600 p-4 rounded-b-lg md:rounded-br-lg">
            <p class="text-2xl text-center text-white font-bold">KLINIK</p>
            <ul class="list-disc ml-2">
                <li class="text-base text-white font-bold">SENIN - KAMIS
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.00 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">JUM'AT
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>07.30 WIB - 15.30 WIB</li>
                    </ul>
                </li>
                <li class="text-base text-white font-bold">SABTU - MINGGU
                    <ul class="ml-2 font-semibold text-gray-100">
                        <li>CLOSED</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="flex justify-center align-middle flex-col md:flex-row">
    <div class="basis-full md:basis-4/5">
        <div class="w-full grid grid-flow-row gap-8 sm:grid-cols-1 md:grid-cols-3 p-2" id="listberita">
            @forelse ($berita as $b)
            <div class="my-1 rounded-2xl shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1">
                <a href="{{URL::to('/')}}/berita/<?= $b->link ?>">
                    <figure class="bg-black rounded-2xl overflow-hidden">
                        <img src="{{URL::to('/')}}<?= $b->foto ?>" class="rounded-t-2xl overflow-hidden h-45 w-full object-cover opacity-50 hover:opacity-100 hover:scale-110 hover:mb-3" alt="" style="transition-timing-function: ease-in; transition: 1s;">
                        <figcaption class="p-4 bg-gray-800 rounded-b-2xl">
                            <p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                <?= $b->judul ?>
                            </p>
                            <small class="leading-5 text-gray-500 dark:text-gray-400">
                                <?= substr($b->isi, 0, 100) ?>...<span class="font-semibold text-blue-500">Selengkapnya</span>
                            </small>
                            <div class="flex pt-2">
                                <div class="basis basis-10">
                                    <img src="<?= $b->publisherfoto ?>" alt="" class="rounded-full w-10 h-10 align-middle border-4 border-blue-500" style="max-width:2.5rem">
                                </div>
                                <div class="basis-auto pl-3">
                                    <p class="text-sm text-bold text-gray-400"><?= $b->namapublisher ?></p>
                                    <p class="text-xs text-gray-500"><?= $b->satker ?></p>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            @empty
            
            @endforelse
        </div>
        <div class="flex justify-center align-middle">
            <button type="button" class="text-white bg-gradient-to-r from-gray-700 via-gray-600 to-gray-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="loadMore">
                <span id="pr" class="hidden"><img src="{{ url('/assets/img/loading.png') }}" class="h-5 animate-spin" alt=""> <span class="ml-2">Processing...</span></span>
                <span id="ml">Muat Lainnya</span>
            </button>
        </div>
    </div>
    <div class="text-white basis-full md:basis-1/5 p-3 flex flex-col">
        <div id="kategori" class="kategori">
            <div class="p-2 rounded-lg bg-gray-700 text-white mb-2">
                <p class="text-lg font-bold">
                    KATEGORI BERITA
                </p>
                <ul class="ml-2 list-disc pl-5">
                    @foreach($cat as $k)
                    <li class="p-2 text-lg font-semibold"><a href="/berita/kategori/<?= strtolower(str_replace(' ', '%20', $k->kategori)) ?>"><?= $k->kategori ?></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="" id="iklan1">
            <img src="{{ asset('assets/img/ads1.png') }}" class="w-full" alt="">
        </div>
    </div>
</section>
<section class="flex justify-center gap-2 align-middle flex-col">
    <div class="flex justify-center align-middle p-2">
        <img src="{{ asset('assets/img/ads2.png') }}" alt="">
    </div>
</section>
<div class="elfsight-app-bef49b21-6067-4375-8308-8c5b503b4643 mt-4 p-5"></div>
@endsection

@section('script')

<script src="https://apps.elfsight.com/p/platform.js" defer></script>

<script>
    var cont = 0;
    var news = 9;
    var url = {!! json_encode(url('/')) !!};

    function loopSlider() {
        var xx = setInterval(function () {
            switch (cont) {
                case 0: {
                    $("#slider-1").fadeOut(400); 
                    $("#slider-2").delay(400).fadeIn(400);
                    cont = 1;

                    break;
                }
                case 1: {

                    $("#slider-2").fadeOut(400);
                    $("#slider-3").delay(400).fadeIn(400);

                    cont = 2;

                    break;
                }
                case 2: {

                    $("#slider-3").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);

                    cont = 0;

                    break;
                }


            }
        }, 8000);

    }

    function reinitLoop(time) {
        clearInterval(xx);
        setTimeout(loopSlider(), time);
    }

    $(window).ready(function () {
        $("#slider-2").hide();
        $("#slider-3").hide();
        loopSlider();
    });

    $(document).ready(function() {
        if ($.cookie('noShowWelcome')) $('#welcome').hide();
        else {
            $("#close-welcome").click(function() {
                $("#welcome").fadeOut(1000);
                $.cookie('noShowWelcome', true);    
            });
        }
    });

    $('#loadMore').click(function (e) { 
        e.preventDefault();
        $('#pr').removeClass('hidden');
        $('#pr').addClass('flex flex-row');
        $('#ml').addClass('hidden');
        $.ajax({
            type: "GET",
            url: url+'/berita/more/'+news,
            dataType: "json",
            success: function (response) {

                if(response.length !=  0){
                    for (let x = 0; x < response.length; x++) {
                    $('#listberita').append('<div class="my-1 rounded-2xl shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1"><a href="/berita/'+response[x].link+'"><figure class="bg-black rounded-2xl overflow-hidden"><img src="{{URL::to('/')}}'+response[x].foto+'" class="rounded-t-2xl overflow-hidden h-45 w-full object-cover opacity-50 hover:opacity-100 hover:scale-110 hover:mb-3" alt="" style="transition-timing-function: ease-in; transition: 1s;"><figcaption class="p-4 bg-gray-800 rounded-b-2xl"><p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">'+response[x].judul+'</p><small class="leading-5 text-gray-500 dark:text-gray-400">'+response[x].isi+'<a href="{{URL::to('/')}}/berita/'+response[x].link+'">...Selengkapnya</a></small><div class="flex pt-2"><div class="basis basis-10"><img src="'+response[x].publisherfoto+'" alt="" class="rounded-full max-w-full h-auto align-middle border-none"></div><div class="basis-auto pl-3"><p class="text-sm text-bold text-gray-400">'+response[x].namapublisher+'</p><p class="text-xs text-gray-700">'+response[x].satker+'</p></div></div></figcaption></figure></a></div>');                    
                }
                $('#ml').removeClass('hidden');
                $('#pr').addClass('hidden');
                $('#pr').removeClass('flex flex-row');
                news = Math.floor(news+3);
                }else{
                    $('#loadMore').hide();
                }
            }
        });
    });
</script>
@endforeach
@endsection