<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="fb:app_id" content="342797811136983" />
    <title>ADMIN FAQ ZI POLRES LANDAK</title>
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
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/assets/img/tik.png">
</head>
<body class="bg-gray-900">
    <header class="sticky top-0 z-10">
        <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center text-lg text-gray-400 font-bold">
                    <img src="{{ URL::to('/') }}/assets/img/tik.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> FAQ ADMIN
                </a>
            </div>
        </nav>
    </header>
    <div id="alerts"></div>
    <div class="bg-gray-700 p-5 m-5 rounded-lg flex-col">
        <p class="text-base text-gray-300 py-1 uppercase">NRP<span class="text-red-500">*</span></p>
        <input type="text" id="nrp" name="nrp" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>
        <p class="text-base text-gray-300 py-1">PILIH JENIS PELAYANAN<span class="text-red-500">*</span></p>
        <select id="pelayanan" name="pelayanan" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg auto" autocomplete="off" required>
            <option value="" selected>--</option>
            <option value="spkt">SPKT</option>
            <option value="sim">SATPAS</option>
            <option value="skck">SKCK</option>
            <option value="identifikasi">IDENTIFIKASI</option>
        </select>
        
        <div id="tables" class="relative hidden overflow-x-auto rounded-lg m-5">
            <table class="w-full text-sm text-left text-gray-200">
                <thead class="text-xs uppercase bg-gray-900 text-gray-200">
                    <tr class="text-center">
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawaban
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    
                </tbody>
                <tfoot>
                    <tr class="border-b bg-gray-800 border-gray-700" id="tambah">
                        <td class="py-2 border border-black text-xs text-center" colspan="4">
                            <button type="button" onclick="tambah()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">TAMBAH DATA</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
    
</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/sw.js') }}"></script>
<script src="{{ asset('assets/js/cookie.js') }}"></script>
<script src="https://kit.fontawesome.com/b9de9ce998.js" crossorigin="anonymous"></script>
<script>
    var nrp = $('#nrp').val();
    var pelayanan = '';

    $('#pelayanan').change(function (e) { 
        e.preventDefault();
        
        if($('#nrp').val() != null){
            pelayanan = this.value;
            $.ajax({
                type: "get",
                url: "/faqadminval/"+nrp+"/"+this.value,
                dataType: "json",
                success: function (response) {
                    if(response.msg == 'ok'){
                        $('#tables').removeClass('hidden');
                        $('#nrp').prop('disabled', true);
                        $('#pelayanan').prop('disabled', true);
                        $('#alert-border-2').hide();
                        getdata();
                    }else{
                        $('#alerts').html('<div id="alert-border-2" class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert"><svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg><div class="ml-3 text-sm font-medium">Anda Tidak Diizinkan Mengakses Data Ini!</div><button onclick="hides()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close"><span class="sr-only">Dismiss</span><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button></div>');
                    }
                }
            });
        }
    });
    
    function hides(){
            $('#alert-border-2').hide();
            $('#alert-border-3').hide();
    }

    function getdata() {
        $.ajax({
            type: "GET",
            url: "/faqdata/"+pelayanan,
            dataType: "json",
            success: function (response) {
                if(response.length != 0){
                    $('#tbody').empty();

                    for (let i = 0; i < response.length; i++) {
                        $('#tbody').append('<tr class="border-b bg-gray-800 border-gray-700"><th scope="row" class="px-6 text-center py-4 border border-black text-xs font-medium whitespace-nowrap text-white" width="5%">'+Math.floor(i+1)+'</th><td class="py-2 px-2 border border-black text-xs" width="45%">'+response[i].pertanyaan+'</td><td class="py-2 px-2 border border-black text-xs" width="45%">'+response[i].jawaban+'</td><td class="py-2 px-2 border border-black text-xs" width="5%"><button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"  onclick="hapus('+response[i].id+')">HAPUS</button></td></tr>');   
                    }
                }else{
                    $('#tbody').append('<tr class="border-b bg-gray-800 border-gray-700"><td class="py-4 px-2 border border-black text-xs text-center" colspan="4">NIHIL</td></tr>');
                }
            }
        });
    }

    function tambah(){
        $('#tbody').append('<tr class="border-b bg-gray-800 border-gray-700" id="rowdata"><td class="text-center">Tambah Data</td><td colspan="2"><form method="post" class="flex flex-row gap-2 p-3" id="dataform">@csrf <input type="hidden" id="pelayanan" name="pelayanan" value="'+pelayanan+'"><textarea class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" rows="10" id="pertanyaan" name="pertanyaan" placeholder="pertanyaan" autocomplete="off" required></textarea><textarea class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" rows="10" id="jawaban" autocomplete="off" name="jawaban" placeholder="jawaban" required></textarea></form></td><td><button type="button" onclick="kirimdata()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">KIRIM DATA</button></td></tr>');

        $('#tambah').hide();
    }

    function kirimdata(){
        $.ajax({
            type: "POST",
            url: "/faqadd",
            data: $('#dataform').serialize(),
            dataType: "json",
            success: function (response) {
                if(response.msg == 'ok'){
                    $('#tambah').show();
                    $('#rowdata').hide();
                    $('#tbody').empty();
                    getdata();
                    hides();
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Data Berhasil Disimpan...',
                    showConfirmButton: false,
                    timer: 1500
                    })
                }else{
                    $('#alerts').html('<div id="alert-border-3" class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert"><svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg><div class="ml-3 text-sm font-medium">Data FAQ Gagal Di Input! Periksa Kembali Data Anda</div><button onclick="hides()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close"><span class="sr-only">Dismiss</span><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button></div>');
                }
            }
        });
    }

    function hapus(id){
        Swal.fire({
                title: 'HAPUS DATA INI?',
                text: "Data tidak akan dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: "/faqdel/"+id,
                        dataType: "json",
                        success: function (response) {
                            if(response.msg == 'ok'){
                                $('#tbody').empty();
                                getdata();
                                hides();
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Data Berhasil Dihapus...',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }else{
                                $('#alerts').html('<div id="alert-border-4" class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert"><svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg><div class="ml-3 text-sm font-medium">Data FAQ Gagal Di Hapus! </div><button onclick="hides()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close"><span class="sr-only">Dismiss</span><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button></div>');
                            }
                        }
                    });
                }
            })
    };

</script>
</html>