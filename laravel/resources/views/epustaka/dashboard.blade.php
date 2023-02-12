<?php 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="fb:app_id" content="342797811136983" />
    <title>ADMIN E - PUSTAKA</title>
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
    <meta property="og:title" content="ADMIN FAQ ZI POLRES LANDAK">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url('/') }}/assets/img/og.jpg">
    <meta property="og:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
    <meta property="og:site_name" content="POLRES LANDAK PRESISI">
    <meta property="og:locale" content="id_ID">

        <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ADMIN FAQ ZI POLRES LANDAK">
    <meta name="twitter:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
    <meta name="twitter:image" content="{{ url('/') }}/assets/img/og.jpg">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/assets/img/tik.png">
</head>
<body class="bg-gray-900">
    <header class="sticky top-0 z-50">
        <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex items-center text-lg text-gray-400 font-bold">
                    <img src="{{ URL::to('/') }}/assets/img/tik.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> E-PUSTAKA ADMIN
                </a>
            </div>
        </nav>
    </header>
    
    <div class="bg-gray-700 pt-5 h-screen fixed left-0 w-60 z-40">
        <ol>
            <li id="adddata" class="text-gray-100 mx-5 bg-blue-500 hover:bg-blue-700 p-3 rounded-lg font-bold shadow-lg shadow-blue-700/50 flex flex-row justify-center items-center cursor-pointer">
                <svg aria-hidden="true" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" fill-rule="evenodd"></path>
                </svg> TAMBAH DATA
            </li>
            <ol class="mt-10">
                <li class="mx-5 my-1 py-3 px-5 font-bold text-gray-100 bg-blue-600 rounded-full">DATA GLOBAL</li>
                {{-- <li class="hover:rounded-r-full mr-5 py-3 pl-5 hover:bg-white text-lg font-semibold hover:font-bold text-gray-100 hover:text-blue-600">DATA SOP</li>
                <li class="hover:rounded-r-full mr-5 py-3 pl-5 hover:bg-white text-lg font-semibold hover:font-bold text-gray-100 hover:text-blue-600">DATA SKEP</li>
                <li class="hover:rounded-r-full mr-5 py-3 pl-5 hover:bg-white text-lg font-semibold hover:font-bold text-gray-100 hover:text-blue-600">DATA SURAT EDARAN</li> --}}
            </ol>
            <li class="flex flex-row justify-center items-center">
                <a href="/epustaka/logout" class="text-gray-100 mx-5 mt-10 bg-gray-500 hover:bg-blue-700 p-3 rounded-lg font-bold shadow-lg shadow-gray-700/50 cursor-pointer">LOG OUT</a>
            </li>
        </ol>
    </div>
    <div class="bg-gray-600 w-full py-3 fixed text-white text-lg pl-64 border-b-2 border-b-gray-800" id="judul">
        DATA GLOBAL
    </div>
    <div class="bg-gray-600 w-full mt-14 min-h-screen py-3 text-white text-lg pl-64 border-b-2 border-b-gray-800" id="content">
        <div id="alldata">
            <div class="grid grid-cols-5 gap-4 p-5">
                
                
                @forelse ($data as $d)
                <div class="p-3 cursor-pointer hover:scale-105">
                    <div class="bg-gray-500 rounded-t-lg p-3">
                        <img src="{{URL::to('/')}}/media/epustaka/pdf.png" class="w-24 mx-auto" alt="">
                    </div>
                    <div class="bg-gray-400 p-3">
                        <p class="text-gray-900 text-sm"><?= substr($d->tentang, 0, 50) ?>...</p>
                    </div>
                    <div class="flex justify-end bg-gray-400 rounded-b-lg p-3 shadow-lg shadow-gray-900/60">
                        <button class="p-2 text-xs rounded-lg text-white bg-gray-600 hover:bg-red-600" onclick="hapus('<?= $d->id ?>')">HAPUS</button>
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
        </div>

        <div id="globalupload" class="hidden">
            <div class="flex flex-row h-96">
                <div class="w-8/12">
                    <form id="dataawal">
                        @csrf
                        <p class="text-base text-gray-300 py-1">PILIH JENIS NASKAH DINAS<span class="text-red-500">*</span></p>
                        <select id="jenis" name="jenis" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg auto" autocomplete="off" required>
                            <option value="" selected>--</option>
                            <option value="sop">STANDAR OPERASIONAL PROSEDUR</option>
                            <option value="skep">SURAT KEPUTUSAN</option>
                            <option value="se">SURAT EDARAN</option>
                        </select>
            
                        <p class="text-base text-gray-300 py-1 uppercase">Nomor Surat<span class="text-red-500">*</span></p>
                        <input type="text" autocomplete="off" id="nomor" name="nomor" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>
            
                        <p class="text-base text-gray-300 py-1 uppercase">Tentang<span class="text-red-500">*</span></p>
                        <input type="text" autocomplete="off" id="tentang" name="tentang" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>
            
                        <p class="text-base text-gray-300 py-1 uppercase">Tanggal Surat<span class="text-red-500">*</span></p>
                        <div class="flex flex-row gap-2">
                            <select class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-1/6" id="tanggal" name="tanggal" autocomplete="off" required>
                                <option value="" selected>--</option>
                                <option value='01'>01</option>
                                <option value='02'>02</option>
                                <option value='03'>03</option>
                                <option value='04'>04</option>
                                <option value='05'>05</option>
                                <option value='06'>06</option>
                                <option value='07'>07</option>
                                <option value='08'>08</option>
                                <option value='09'>09</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                                <option value='17'>17</option>
                                <option value='18'>18</option>
                                <option value='19'>19</option>
                                <option value='20'>20</option>
                                <option value='21'>21</option>
                                <option value='22'>22</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='25'>25</option>
                                <option value='26'>26</option>
                                <option value='27'>27</option>
                                <option value='28'>28</option>
                                <option value='29'>29</option>
                                <option value='30'>30</option>
                                <option value='31'>31</option>
                            </select>
                            <select class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-3/6" id="bulan" name="bulan" autocomplete="off" required>
                                <option value="" selected>--</option>
                                <option value="JANUARI">JANUARI</option>
                                <option value="FEBRUARI">FEBRUARI</option>
                                <option value="MARET">MARET</option>
                                <option value="APRIL">APRIL</option>
                                <option value="MEI">MEI</option>
                                <option value="JUNI">JUNI</option>
                                <option value="JULI">JULI</option>
                                <option value="AGUSTUS">AGUSTUS</option>
                                <option value="SEPTEMBER">SEPTEMBER</option>
                                <option value="OKTOBER">OKTOBER</option>
                                <option value="NOVEMBER">NOVEMBER</option>
                                <option value="DESEMBER">DESEMBER</option>
                            </select>
                            <input type="text" id="tahun" name="tahun" autocomplete="off" placeholder="TAHUN" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-2/6" required>
                        </div>
                        <button type="submit" class="h-14 mt-2 w-full bg-blue-500 m-auto font-bold rounded-lg" id="gqr">GENERATE QR</button>
                    </form>
                </div>
                <div class="w-4/12 align-center flex flex-col items-center justify-center">
                    <img src="/assets/img/tik.png" class="h-80 m-auto border-8 border-blue-500 rounded-t-lg" alt="qr" id="qrimg">
                    <p class="h-16 w-80 bg-blue-500 m-auto font-bold rounded-b-lg text-xs justify-center text-center text" id="dwd">KLIK KANAN -> SAVE IMAGE AS</p>
                </div>
            </div>
    
            <div class="flex flex-col p-10 " id="fileinput">
                <div class="mx-auto w-8/12 rounded-lg p-4 border-2 border-dashed">
                    <form id="fileupload" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <p class="text-xl font-bold text-center text-gray-300 py-1">UPLOAD FILE YANG SUDAH DI BERI QR CODE (PDF)</p>
                        <input type="file" name="file" id="file" class="bg-gray-800 p-5 rounded-lg w-full" accept="application/pdf" autocomplete="off">
                        <button type="submit" class="h-14 mt-2 w-full bg-blue-500 m-auto font-bold rounded-lg">UPLOAD!</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        
    </div>
    
</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/sw.js') }}"></script>
<script src="{{ asset('assets/js/cookie.js') }}"></script>
<script src="https://kit.fontawesome.com/b9de9ce998.js" crossorigin="anonymous"></script>
<script>

    $('#adddata').click(function (e) { 
        e.preventDefault();
        
        $('#alldata').addClass('hidden');
        $('#globalupload').removeClass('hidden');
        $('#judul').html('UPLOAD FILE BARU');
    });

    $('#dataawal').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            method: "POST",
            url: "/epustaka/add",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function (response) {
                if(response.qr != null){
                    $('#qrimg').attr('src', response.qr);
                    $('#gqr').prop('disabled', true);
                    $('#gqr').removeClass('bg-blue-500');
                    $('#gqr').addClass('bg-gray-700');
                    $('#id').val(response.qr);
                }else{
                    Swal.fire({
                        title: "GAGAL!",
                        text: response.msg,
                        icon: 'error'
                    })
                }
            }
        });
    });

    $('#fileupload').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            method: "POST",
            url: "/epustaka/addfile",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function (response) {
                if(response.msg == 'ok'){
                    Swal.fire({
                        title: "SUKSES!",
                        text: 'Dokumen Berhasil Di Upload!',
                        icon: 'success'
                    }).then((result) => {
                        location.reload();
                    })
                }else{
                    Swal.fire({
                        title: "GAGAL!",
                        text: response.msg,
                        icon: 'error'
                    }).then((result) => {
                        location.reload();
                    })
                }
            }
        });
    });

    function hapus(id){
        Swal.fire({
                title: 'HAPUS DATA INI?',
                text: "DATA tidak akan dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: "/epustaka/del/"+id,
                        dataType: "json",
                        success: function (response) {
                            if(response.msg == 'ok'){
                                Swal.fire({
                                    title: "SUKSES!",
                                    text: 'Dokumen Berhasil Di Hapus!',
                                    icon: 'success'
                                }).then((result) => {
                                    location.reload();
                                })
                            }else{
                                Swal.fire({
                                    title: "GAGAL HAPUS DATA!",
                                    text: response.msg,
                                    icon: 'error'
                                }).then((result) => {
                                    location.reload();
                                })
                            }
                        }
                    });
                }
            })
        
    }

</script>
</html>