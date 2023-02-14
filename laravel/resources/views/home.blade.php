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
    </div>
</section>
<div class="p-5 border border-b-0 border-gray-700 bg-gray-900 flex flex-col  justify-center">
    <span class="text-gray-100 text-2xl font-bold text-center mx-auto">DATA SURVEY KEPUASAN MASYARAKAT POLRES LANDAK</span>
    <span class="text-gray-200 text-xl font-bold text-center mx-auto uppercase">PERIODE <span id="periode"></span></span>
    <span class="text-gray-300 text-base italic text-center pb-5 mx-auto">Sumber: Https://ikanmas.net<br> Update: <span id="upd"></span> Pukul <?= date('H:i') ?> Wib</span>
    <div class="flex flex-col md:flex-row gap-2">
        <div class="basis-full md:basis-2/5 flex flex-col items-center justify-center border-4 border-gray-500 rounded-lg p-5">
            <span class="text-2xl text-gray-100">NILAI MUTU PELAYANAN</span>
            <span class="text-center font-bold text-8xl" id="nilaiangka"></span>
            <span class="text-2xl" id="predikat"></span>
        </div>
        <div class="basis-full md:basis-4/5 flex flex-col items-center justify-center border-4 border-gray-500 rounded-lg p-5">
            <canvas class="p-1 md:p-5 text-white" id="chartBar"></canvas>
        </div>
        <div class="basis-full md:basis-2/5 flex flex-col items-left justify-center border-4 text-white text-lg font-bold border-gray-500 rounded-lg p-5">
            Unsur (U): 
            <ol class="list-disk">
                <li>U1: <span class="font-normal">Persyaratan Pelayanan</span></li>
                <li>U2: <span class="font-normal">Prosedur Pelayanan</span></li>
                <li>U3: <span class="font-normal">Kecepatan Pelayanan</span></li>
                <li>U4: <span class="font-normal">Kewajaran Biaya / Tarif</span></li>
                <li>U5: <span class="font-normal">Kesesuaian Produk Pelayanan</span></li>
                <li>U6: <span class="font-normal">Kompetensi Petugas Pelayanan</span></li>
                <li>U7: <span class="font-normal">Kesopanan dan Keramahan Petugas</span></li>
                <li>U8: <span class="font-normal">Kualitas Sarana Prasarana</span></li>
                <li>U9: <span class="font-normal">Penanganan Pengaduan</span></li>
            </ol>
        </div>
    </div>
</div>

<div class="p-5 border border-b-0 border-gray-700 bg-gray-900 flex flex-col  justify-center">
    <span class="text-gray-100 text-2xl font-bold text-center mx-auto">DATA REALISASI ANGGARAN POLRES LANDAK TAHUN 2023</span>
    <div class="relative overflow-x-auto max-h-half shadow-md cursor-all-scroll text-white">
        <table id="example" class="display w-full text-xs font-bold text-gray-900 rounded-lg bg-gray-400 m-1 md:m-5">
            <thead class="text-sm bg-gray-900 rounded-md text-gray-400 sticky top-0">
                <tr>
                    <th class="dt-center border border-black p-2">NO</th>
                    <th class="dt-center border border-black p-2">SATUAN KERJA</th>
                    <th class="dt-center border border-black p-2">PAGU</th>
                    <th class="dt-center border border-black p-2">JAN</th>
                    <th class="dt-center border border-black p-2">FEB</th>
                    <th class="dt-center border border-black p-2">MAR</th>
                    <th class="dt-center border border-black p-2">APR</th>
                    <th class="dt-center border border-black p-2">MEI</th>
                    <th class="dt-center border border-black p-2">JUN</th>
                    <th class="dt-center border border-black p-2">JUL</th>
                    <th class="dt-center border border-black p-2">AGS</th>
                    <th class="dt-center border border-black p-2">SEP</th>
                    <th class="dt-center border border-black p-2">OKT</th>
                    <th class="dt-center border border-black p-2">NOV</th>
                    <th class="dt-center border border-black p-2">DES</th>
                </tr>
            </thead>
            <tbody>
                <?php if($pagu == '0'){$pagu = '1';} ?>
                <?php $no = 1; ?>
                @foreach($anggaran as $l)
                    <tr class="border border-black hover:bg-white">
                        <td class="p-2 border border-black text-center"><?= $no++ ?></td>
                        <td class="p-2 border border-black whitespace-nowrap"><?= $l->satker ?></td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->pagu == '0'){echo '-';}else{echo 'Rp. '.number_format($l->pagu,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->jan == '0'){echo '-';}else{echo 'Rp. '.number_format($l->jan,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->feb == '0'){echo '-';}else{echo 'Rp. '.number_format($l->feb,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->mar == '0'){echo '-';}else{echo 'Rp. '.number_format($l->mar,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->apr == '0'){echo '-';}else{echo 'Rp. '.number_format($l->apr,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->mei == '0'){echo '-';}else{echo 'Rp. '.number_format($l->mei,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->jun == '0'){echo '-';}else{echo 'Rp. '.number_format($l->jun,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->jul == '0'){echo '-';}else{echo 'Rp. '.number_format($l->jul,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->agu == '0'){echo '-';}else{echo 'Rp. '.number_format($l->agu,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->sep == '0'){echo '-';}else{echo 'Rp. '.number_format($l->sep,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->okt == '0'){echo '-';}else{echo 'Rp. '.number_format($l->okt,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->nov == '0'){echo '-';}else{echo 'Rp. '.number_format($l->nov,0,',','.');} ?>
                        </td>
                        <td class="p-2 text-center border border-black whitespace-nowrap">
                            <?php if($l->des == '0'){echo '-';}else{echo 'Rp. '.number_format($l->des,0,',','.');} ?>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="text-xs bg-gray-900 rounded-md text-gray-400 sticky bottom-0">
                <tr>
                    <th class="dt-center border border-black p-2"></th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">TOTAL</th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($pagu,0,',','.') ?></th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($jan,0,',','.') ?><br><?= round((($jan/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($feb,0,',','.') ?><br><?= round(((($jan+$feb)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($mar,0,',','.') ?><br><span
                            class="<?php if(round(((($jan+$feb+$mar)/$pagu)*100), 2) < '25'){echo 'text-red-600';}else{echo 'text-green-500';} ?>"><?= round(((($jan+$feb+$mar)/$pagu)*100), 2).'%' ?></span>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($apr,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($mei,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr+$mei)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($jun,0,',','.') ?><br><span
                            class="<?php if(round(((($jan+$feb+$mar+$apr+$mei+$jun)/$pagu)*100), 2) < '50'){echo 'text-red-600';}else{echo 'text-green-500';} ?>"><?= round(((($jan+$feb+$mar+$apr+$mei+$jun)/$pagu)*100), 2).'%' ?></span>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($jul,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($agu,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($sep,0,',','.') ?><br><span
                            class="<?php if(round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep)/$pagu)*100), 2) < '75'){echo 'text-red-600';}else{echo 'text-green-500';} ?>"><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep)/$pagu)*100), 2).'%' ?></span>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($okt,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($nov,0,',','.') ?><br><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov)/$pagu)*100), 2).'%' ?>
                    </th>
                    <th class="dt-center border border-black p-2 whitespace-nowrap">
                        <?= 'Rp. '.number_format($des,0,',','.') ?><br><span
                            class="<?php if(round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des)/$pagu)*100), 2) < '100'){echo 'text-red-600';}else{echo 'text-green-500';} ?>"><?= round(((($jan+$feb+$mar+$apr+$mei+$jun+$jul+$agu+$sep+$okt+$nov+$des)/$pagu)*100), 2).'%' ?></span>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<section class="flex justify-center align-middle flex-col md:flex-row">
    <div class="basis-full md:basis-4/5">
        <div class="w-full grid grid-flow-row gap-8 sm:grid-cols-1 md:grid-cols-3 p-2" id="listberita">
            @forelse ($berita as $b)
            <div class="my-1 rounded-2xl shadow-lg shadow-gray-900 bg-gray-800 duration-300 hover:-translate-y-1">
                <a href="{{URL::to('/')}}/berita/<?= $b->link ?>">
                    <figure class="bg-black rounded-2xl overflow-hidden">
                        <img src="{{URL::to('/')}}<?= $b->foto ?>" class="rounded-t-2xl overflow-hidden h-45 w-full object-cover opacity-50 hover:opacity-100 hover:scale-110 hover:mb-3" alt="" style="transition-timing-function: ease-in; transition: 1s;">
                        <figcaption class="p-4 bg-gray-800 rounded-b-2xl">
                            <p class="text-lg font-bold leading-relaxed text-gray-300">
                                <?= $b->judul ?>
                            </p>
                            <small class="leading-5 text-gray-400">
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
            <button type="button" class="text-white bg-gradient-to-r from-gray-700 via-gray-600 to-gray-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-800 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="loadMore">
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
            {{-- <img src="{{ asset('assets/img/ads1.png') }}" class="w-full" alt=""> --}}
            <img src="{{ URL::to('/') }}<?= $c->ads1?>" alt="" class="w-full">
        </div>
    </div>
</section>
<section class="flex justify-center gap-2 align-middle flex-col">
    <div class="flex justify-center align-middle p-2">
            <img src="{{ URL::to('/') }}<?= $c->ads2?>" alt="" class="w-full">
            {{-- <img src="{{ asset('assets/img/ads2.png') }}" alt=""> --}}
    </div>
</section>
<div class="elfsight-app-bef49b21-6067-4375-8308-8c5b503b4643 mt-4 p-5"></div>
@endsection

@section('script')

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    $('#listberita').append('<div class="my-1 rounded-2xl shadow-lg shadow-gray-200 shadow-gray-900 bg-gray-800 duration-300 hover:-translate-y-1"><a href="/berita/'+response[x].link+'"><figure class="bg-black rounded-2xl overflow-hidden"><img src="{{URL::to('/')}}'+response[x].foto+'" class="rounded-t-2xl overflow-hidden h-45 w-full object-cover opacity-50 hover:opacity-100 hover:scale-110 hover:mb-3" alt="" style="transition-timing-function: ease-in; transition: 1s;"><figcaption class="p-4 bg-gray-800 rounded-b-2xl"><p class="text-lg font-bold leading-relaxed text-gray-300">'+response[x].judul+'</p><small class="leading-5 text-gray-400">'+response[x].isi.slice(0, 100)+'<a href="{{URL::to('/')}}/berita/'+response[x].link+'">...Selengkapnya</a></small><div class="flex pt-2"><div class="basis basis-10"><img src="'+response[x].publisherfoto+'" alt="" class="rounded-full w-10 h-10 align-middle border-4 border-blue-500" style="max-width:2.5rem"></div><div class="basis-auto pl-3"><p class="text-sm text-bold text-gray-400">'+response[x].namapublisher+'</p><p class="text-xs text-gray-700">'+response[x].satker+'</p></div></div></figcaption></figure></a></div>');                    
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

    const sbaik = [];
    const baik = [];
    const kurang = [];
    const tidakbaik = [];

    $.ajax({
        type: "get",
        url: "https://ikanmas.net/lib/RVNYWk9ZQUpjSHoyOXhzM3ZIZUU2OTU3cGNDby8ybkY4bWFxbWFBMlVVc1V1Vjc0UkNzNEd1UDdyMEIxVVVVZw.json",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var res = response.result.data.survei;
            $('#periode').html(indo(response.result.data.survei.periode[0])+' - '+indo(response.result.data.survei.periode[1]));
            $('#upd').html(indo(new Date()));
            $('#nilaiangka').html(response.result.data.survei.indeks.angka);
            $('#predikat').html(response.result.data.survei.indeks.huruf+' ('+response.result.data.survei.indeks.kategori+')');
            if(response.result.data.survei.indeks.huruf == 'A'){
                $('#nilaiangka').addClass('text-green-400');
                $('#predikat').addClass('text-green-400');
            }

            if(response.result.data.survei.indeks.huruf == 'B'){
                $('#nilaiangka').addClass('text-blue-500');
                $('#predikat').addClass('text-blue-500');
            }

            if(response.result.data.survei.indeks.huruf == 'C'){
                $('#nilaiangka').addClass('text-yellow-500');
                $('#predikat').addClass('text-yellow-500');
            }

            if(response.result.data.survei.indeks.huruf == 'D'){
                $('#nilaiangka').addClass('text-red-500');
                $('#predikat').addClass('text-red-500');
            }


            sbaik.push(res.nilai[0][4],res.nilai[1][4],res.nilai[2][4],res.nilai[3][4],res.nilai[4][4],res.nilai[5][4],res.nilai[6][4],res.nilai[7][4],res.nilai[8][4]);
            baik.push(res.nilai[0][3],res.nilai[1][3],res.nilai[2][3],res.nilai[3][3],res.nilai[4][3],res.nilai[5][3],res.nilai[6][3],res.nilai[7][3],res.nilai[8][3]);
            kurang.push(res.nilai[0][2],res.nilai[1][2],res.nilai[2][2],res.nilai[3][2],res.nilai[4][2],res.nilai[5][2],res.nilai[6][2],res.nilai[7][2],res.nilai[8][2]);
            tidakbaik.push(res.nilai[0][1],res.nilai[1][1],res.nilai[2][1],res.nilai[3][1],res.nilai[4][1],res.nilai[5][1],res.nilai[6][1],res.nilai[7][1],res.nilai[8][1]);

            const DATA_COUNT = 9;
            const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};
            let delayed;
            const labels = ['U1', 'U2', 'U3', 'U4', 'U5', 'U6', 'U7', 'U8', 'U9']
            const data = {
            labels: labels,
            datasets: [
                        {
                        label: 'SANGAT BAIK',
                        data: sbaik,
                        borderColor: "#00d305",
                        backgroundColor: "#00d305",
                        },
                        {
                        label: 'BAIK',
                        data: baik,
                        borderColor: "#00b4ff",
                        backgroundColor: "#00b4ff",
                        },
                        {
                        label: 'KURANG',
                        data: kurang,
                        borderColor: "#ffc000",
                        backgroundColor: "#ffc000",
                        },
                        {
                        label: 'TIDAK BAIK',
                        data: tidakbaik,
                        borderColor: "#ff0000",
                        backgroundColor: "#ff0000",
                        }
                    ]
            };
            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'GRAFIK NILAI PER-UNSUR LAYANAN'
                        }
                    },
                    animation: {
                        onComplete: () => {
                            delayed = true;
                        },
                        delay: (context) => {
                            let delay = 0;
                            if (context.type === 'data' && context.mode === 'default' && !delayed) {
                            delay = context.dataIndex * 300 + context.datasetIndex * 100;
                            }
                            return delay;
                        },
                    }
                },
            };

            var chartBar = new Chart(
                document.getElementById("chartBar"),
                config
            );
        }
    });

    function indo(tgl){
        var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var bulan = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        let tanggals = new Date(tgl);
        var tanggal = tanggals.getDate();
        var xhari = tanggals.getDay();
        var xbulan = tanggals.getMonth();
        var xtahun = tanggals.getYear();

        var hari = hari[xhari];
        var bulan = bulan[xbulan];
        var tahun = (xtahun < 1000)?xtahun + 1900 : xtahun;

        return tanggal +' '+ bulan +' '+ tahun;
    }

    
</script>
@endforeach
@endsection