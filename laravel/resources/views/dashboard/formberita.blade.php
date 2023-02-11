@extends('layout/backend')

@section('content')
<?php  
$no = 1;
$session = request()->session();
$sentence = $session->get('nama');
$nama = explode(' ', trim($sentence ))[0];

// print_r(request()->session()->all()) ?>
<section class="pt-2 flex flex-col px-2 mb-10 gap-2">
    <nav class="flex mt-4 px-5 py-3 text-gray-700 border rounded-lg bg-gray-800 border-gray-700 md:w-3/4 3xl:w-full md:m-auto"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ URL::to('/') }}/backend/dashboard"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg> 
                    BACKEND
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="ml-1 text-sm font-medium md:ml-2 text-gray-400">TAMBAH BERITA
                    </p>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-col mt-1 px-5 py-3 text-gray-300 border rounded-lg bg-gray-800 border-gray-700 md:w-3/4 3xl:w-full md:m-auto">
        <p class="text-xl font-bold mb-10">Masukan Rincian Berita Anda</p>

        <form id="addberitaform" method="post" enctype="multipart/form-data" class="flex flex-col">
            @csrf
            <p class="text-base text-gray-300 py-1">Judul Berita<span class="text-red-500">*</span></p>
            <input type="text" autocomplete="off" id="judul" name="judul" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
            <p class="text-base text-gray-300 py-1">Penulis<span class="text-red-500">*</span></p>
            <input type="text" autocomplete="off" id="penulis" name="penulis" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
            <p class="text-base text-gray-300 py-1">Isi Berita<span class="text-red-500">*</span></p>
            <textarea autocomplete="off" id="isi" name="isi" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" rows="15" required></textarea>
            <p class="text-base text-gray-300 py-1">Kategori Berita<span class="text-red-500">*</span></p>
            <select id="kategori" autocomplete="off" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" name="kategori" required>
                <option value="">PILIH KATEGORI</option>
                @foreach ($kategori as $k)
                    <option value="<?= $k->kategori ?>"><?= $k->kategori ?></option>
                @endforeach
            </select>
            <p class="text-base text-gray-300 py-1">Foto<span class="text-red-500">*</span></p>
            <div class="flex items-center justify-center w-full">
                <label for="file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer hover:bg-bray-800 bg-gray-700 border-gray-600 hover:border-gray-500 hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6" id="fotoform">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-400"><span class="font-semibold">Pilih Gambar</span></p>
                        <p class="text-xs text-gray-400">Hanya File Gambar (*jpg, *jpeg, *png)</p>
                        <p class="text-xs text-gray-400">Maksimal 2 MB</p>
                    </div>
                    <input id="file" name="file" type="file" class="hidden" accept="image/*" onchange="onFileUpload(this)" required/>
                </label>
            </div> 
            <p class="text-base text-gray-300 py-1">Caption Foto<span class="text-red-500">*</span></p>
            <input type="text" autocomplete="off" id="caption" name="caption" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
            <button type="submit" class="p-3 my-4 mx-2 rounded-md text-white bg-blue-600 font-bold">PUBLISH</button>
        </form>

    </div>
    
</section>
<div class="fixed bottom-0 w-full mt-1 py-3 text-gray-300 border rounded-b-lg bg-gray-800 border-gray-700 md:w-3/4 3xl:w-full md:m-auto">
    <p class="text-base text-center">&copy; SI TIK POLRES LANDAK</p>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/dt.css') }}">
<script src="{{ asset('assets/js/dt.js') }}"></script>
<script src="{{ asset('assets/js/sw.js') }}"></script>
<script src="{{ asset('ckeditor2/ckeditor.js') }}"></script>
<script src="{{ asset('ckeditor2/adapters/jquery.js') }}"></script>

<script>
    $('#addberitaform').submit(function (e) { 
        e.preventDefault();
        var fd = new FormData(this);    
        $.ajax({
            type: "POST",
            method: "POST",
            url: "/backend/berita/addberita",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function (response) {
                if(response.msg == 'ok'){
                    Swal.fire({
                        title: 'BERHASIL INPUT BERITA',
                        icon: 'success'
                    }).then((result) => {
                        location.reload();
                    })
                }else{
                    Swal.fire({
                        title: 'GAGAL INPUT BERITA',
                        text: response.msg,
                        icon: 'error'
                    })
                }
            }
        });
    });
</script>
<?php if($session->get('addok') != null){?>
    <script> Swal.fire({
        title: "Berita Berhasil Dipublish!",
        icon: 'success'
    })</script>
    <?php
    }?>

<?php if($session->get('addno') != null){?>
    <script> 
    var nos = '<?= $session->get('addno') ?>';
    Swal.fire({
        title: nos,
        icon: 'error'
    })</script>
    <?php
    }?>
    <script>


       function onFileUpload(input, id) {
            
            if((input.files[0].size/1000000).toFixed(2) <= '2'){
                id = id || '#fotoform';
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        // $(id).attr('src', e.target.result).width(300)
                        $(id).html('<img src="'+e.target.result+'" alt="" width="320px" style="height:240px">');
                        console.log(e);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }else{
                Swal.fire({
                    title: 'GAMBAR DIATAS 2MB!',
                    text: 'Ukuran File anda adalah \n'+(input.files[0].size/1000000).toFixed(2)+' Mb',
                    icon: 'error'
                })
            }
        }
    </script>

@endsection