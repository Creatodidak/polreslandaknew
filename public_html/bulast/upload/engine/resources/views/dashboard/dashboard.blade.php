@extends('layout/backend')

@section('content')
<?php  
$session = request()->session();
$sentence = $session->get('nama');
$nama = explode(' ', trim($sentence ))[0];

// print_r(request()->session()->all()) ?>
<section class="pt-2 flex flex-col px-2 gap-2">
    <nav class="flex mt-4 px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 md:w-3/4 3xl:w-full md:m-auto"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ URL::to('/') }}/backend/dashboard"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                    <p class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">DASHBOARD
                    </p>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-col mt-1 px-5 py-3 text-gray-300 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 md:w-3/4 3xl:w-full md:m-auto">
        <p class="text-xl text-center font-extrabold">HAI  <?= $nama?>🖐🏽</p>
        <p class="text-xl text-center font-semibold">SELAMAT DATANG DI DASHBOARD BACKEND POLRES LANDAK</p>
        <p class="text-base text-center">MENU DAPAT ANDA AKSES PADA TOMBOL MENU DISUDUT KANAN ATAS</p>
        <p class="text-base text-center">MENU DAPAT ANDA AKSES PADA TOMBOL MENU DISUDUT KANAN ATAS</p>
    </div>
    
</section>
<div class="fixed bottom-0 w-full mt-1 py-3 text-gray-300 border border-gray-200 rounded-b-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 md:w-3/4 3xl:w-full md:m-auto">
    <p class="text-base text-center">&copy; SI TIK POLRES LANDAK</p>
</div>
@endsection 