@extends('layout/backend')

@section('content')
<?php  
$no = 1;
$session = request()->session();
$sentence = $session->get('nama');
$nama = explode(' ', trim($sentence ))[0];

// print_r(request()->session()->all()) ?>
<section class="pt-2 flex flex-col px-2 gap-2">
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
                    <p class="ml-1 text-sm font-medium md:ml-2 text-gray-400">DAFTAR BERITA
                    </p>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-col mt-1 px-5 py-3 text-gray-300 border rounded-lg bg-gray-800 border-gray-700 md:w-3/4 3xl:w-full md:m-auto">
        <p class="text-xl font-bold mb-10">Daftar Berita Anda</p>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="dt-center w-5">NO</th>
                    <th class="dt-center">BERITA</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($list as $l)
                <tr>
                    <td class="dt-center align-top"><?= $no++ ?></td>
                    <td>
                        <?= $l->judul ?>
                        <br>
                        <span class="text-gray-300 cursor-pointer" onclick="salin('<?= $l->link ?>', '<?= $l->judul ?>', )">SALIN LINK</span> | <span class="text-xs font-bold"><a href="/backend/berita/edit/<?= $l->id ?>"  class="text-green-500">EDIT</a> | <span class="text-red-500 cursor-pointer" onclick="hapus('/backend/berita/delete/<?= $l->id ?>')">HAPUS</span></span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="dt-center">Err</td>
                    <td class="dt-center">BELUM ADA BERITA</td>
                </tr>
                @endforelse
            </tbody>
        </table>
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


    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function salin(link, judul){
            navigator.clipboard.writeText('*'+judul+'* Https://reslandak.kalbar.polri.go.id/berita/'+link);
            
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Link Disalin',
            showConfirmButton: false,
            timer: 1500
            })
        }

        function hapus(url) {
            Swal.fire({
                title: 'HAPUS BERITA INI?',
                text: "Berita tidak akan dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }

        function sukseshapus() {
            Swal.fire({
                title: "Berita Berhasil Dihapus!",
                icon: 'info'
            })
        }
    </script>
<?php
if($session->get('delmsg') != null){?>
    <script> Swal.fire({
        title: "Berita Berhasil Dihapus!",
        icon: 'info'
    })</script>
    <?php
    }?>
@endsection