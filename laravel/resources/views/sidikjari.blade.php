@extends('layout/master')

@section('content')
<section class="flex flex-col">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/assets/img/antipungli.webp" alt="" class="w-full">
    </div>
    <div class="flex flex-col md:flex-row items-center bg-gray-700 rounded-lg m-3 md:m-5">
        <div class="p-3 md:w-6/12 mx-auto flex flex-col items-center order-2 md:order-1">
            <video class="w-full rounded-md" autoplay muted controls loop>
                <source src="{{URL::to('/')}}/media/video/umum.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="p-3 w-full md:w-6/12 mx-auto flex flex-col items-center order-1 md:order-2">
            {{-- <img src="{{ URL::to('/') }}/assets/img/lantas.png" class="w-20 mx-auto" alt="Flowbite Logo" /> --}}
            <h2 class=" text-gray-200 text-xl font-semibold mb-2">PERSONIL PELAYANAN SKCK</h2>
            <div class="glide multi">
                <div class="glide__track" data-glide-el="track">
                  <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-red-600 shadow-lg" src="{{URL::to('/')}}/media/iden/yeye.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA YOHANES YANTO, A.Md.</h5>
                                <span class="text-sm text-gray-400 font-semibold">PS. KAUR IDENTIFIKASI</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: DIPLOMA - III (D-III)</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN BINTARA IDENTIFIKASI</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-red-600 shadow-lg" src="{{URL::to('/')}}/media/iden/obet.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPTU ALBERT JORDAN</h5>
                                <span class="text-sm text-gray-400 font-semibold">???</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>???</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                  </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<" style="top:25%; border: 0px">
                        <svg aria-hidden="true" fill="currentColor" class="w-10 h-10 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.25-7.25a.75.75 0 000-1.5H8.66l2.1-1.95a.75.75 0 10-1.02-1.1l-3.5 3.25a.75.75 0 000 1.1l3.5 3.25a.75.75 0 001.02-1.1l-2.1-1.95h4.59z" fill-rule="evenodd"></path>
                          </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">" style="top:25%; border: 0px">
                        <svg aria-hidden="true" fill="currentColor" class="w-10 h-10 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM6.75 9.25a.75.75 0 000 1.5h4.59l-2.1 1.95a.75.75 0 001.02 1.1l3.5-3.25a.75.75 0 000-1.1l-3.5-3.25a.75.75 0 10-1.02 1.1l2.1 1.95H6.75z" fill-rule="evenodd"></path>
                          </svg>
                    </button>
                  </div>
            </div> 
        </div>
    </div>
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/media/iden/iden.webp" alt="" class="w-11/12 mx-auto">
    </div>
    
    
    
 
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-gray-800 text-blue-300" class="p-5">
        <h2 id="accordion-color-heading-1" class="font-bold">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 rounded-t-xl focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-200 hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Apa Sih Kartu Identifikasi Sidik Jari itu?</span>
            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
          <div class="p-5 border border-b-0 border-gray-700 bg-gray-900">
            <p class="mb-2 text-gray-300">Kartu Identifikasi sidik jari adalah Kartu yang berisi rumusan sidik jari seseorang. Rumusan sidik jari ini didapatkan dengan cara daktiloskopi. Daktiloskopi adalah salah satu Tugas Kepolisian yang diembankan kepada Fungsi Inafis untuk mempelajari sidik jari untuk keperluan pengenalan kembali identitas orang dengan cara mengamati garis yang terdapat pada guratan garis jari tangan dan telapak kaki. Daktiloskopi berasal dari bahasa Yunani yaitu dactylos yang berarti jari jemari atau garis jari, dan scopein yang artinya mengamati atau meneliti. Kemudian dari pengertian itu timbul istilah dalam bahasa Inggris, dactyloscopy yang kita kenal menjadi ilmu sidik jari. </p>

            <ul class="text-gray-300 list-disc ml-5 font-semibold">
                <li>Dasar Hukum
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>UU Kepolisian Republik Indonesia No 2 Tahun 2002</li>
                    </ol>
                </li>
                <li>Fungsi dan Peran Identifikasi Sidik Jari
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>Sebagai sarana identifikasi / jati diri seseorang</li>
                        <li>Sebagai salah satu syarat untuk membuat SKCK</li>
                        <li>Sebagai alat pembantu dalam proses pengungkapan kasus - kasus pidana</li>
                    </ol>
                </li>
            </ul>
          </div>
        </div>
        <h2 id="accordion-color-heading-11" class="font-bold">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-200 hover:bg-gray-800" data-accordion-target="#accordion-color-body-11" aria-expanded="false" aria-controls="accordion-color-body-11">
              <span>Jadwal Pelayanan</span>
              <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
          <div id="accordion-color-body-11" class="hidden" aria-labelledby="accordion-color-heading-11">
            <div class="p-5 border border-b-0 border-gray-700 bg-gray-900">
              <ul class="text-gray-300 list-disc ml-5 font-semibold">
                  <li>SENIN - KAMIS
                      <ol class="text-gray-300 ml-5 font-normal">
                          <li>BUKA: 08.00 WIB</li>
                          <li>ISTIRAHAT: 11.30 WIB - 12.30 WIB</li>
                          <li>TUTUP: 15.00 WIB</li>
                      </ol>
                  </li>
                  <li>JUM'AT
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>BUKA: 08.00 WIB</li>
                        <li>ISTIRAHAT: 11.30 WIB - 12.30 WIB</li>
                        <li>TUTUP: 15.30 WIB</li>
                    </ol>
                  </li>
                  <li>SABTU & MINGGU
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>TIDAK ADA PELAYANAN</li>
                    </ol>
                  </li>
              </ul>
            </div>
          </div>
        <h2 id="accordion-color-heading-3">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>Syarat Pembuatan Kartu Identifikasi Sidik Jari</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <ol class="relative border-l border-gray-700 p-5">                  
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Administrasi</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Foto Copy KTP 1 (satu) Lembar</li>
                        <li>Pas Foto Citra Depan 2 (dua) Lembar</li>
                        <li>Pas Foto Citra Sebelah Kiri 2 (dua) Lembar</li>
                        <li>Pas Foto Citra Sebelah Kanan 2 (dua) Lembar</li>
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-4">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
              <span>Biaya Pembuatan Kartu Identifikasi Sidik Jari</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
            <ol class="relative border-l border-gray-700 p-5">                  
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li class="font-bold text-yellow-300">Pembuatan Kartu Identifikasi Sidik Jari Tidak Dipungut Biaya Apapun atau 100% Gratis!</li>
                    </ol>
                        
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-5">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Alur Pembuatan Kartu Identifikasi Sidik Jari</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
        <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
            <ol class="relative border-l border-gray-700 p-5">                  
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Pembuatan Kartu Identifikasi Sidik Jari<br>
                        <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 10 Menit</span></h3>
                        <ol class="relative border-l border-gray-700 text-gray-400">
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon tiba di gedung SPKT Polres Landak dan langsung menuju ke Ruang Identifikasi Sidik Jari</h3>
                            </li>                     
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="none" class="w-5 h-5 text-gray-400" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon menyerahkan persyaratan administrasi dan mengisi data diri</h3>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Identifikasi</span></p>
                            </li> 
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M10 2.5c-1.31 0-2.526.386-3.546 1.051a.75.75 0 01-.82-1.256A8 8 0 0118 9a22.47 22.47 0 01-1.228 7.351.75.75 0 11-1.417-.49A20.97 20.97 0 0016.5 9 6.5 6.5 0 0010 2.5zM4.333 4.416a.75.75 0 01.218 1.038A6.466 6.466 0 003.5 9a7.966 7.966 0 01-1.293 4.362.75.75 0 01-1.257-.819A6.466 6.466 0 002 9c0-1.61.476-3.11 1.295-4.365a.75.75 0 011.038-.219zM10 6.12a3 3 0 00-3.001 3.041 11.455 11.455 0 01-2.697 7.24.75.75 0 01-1.148-.965A9.957 9.957 0 005.5 9c0-.028.002-.055.004-.082a4.5 4.5 0 018.996.084V9.15l-.005.297a.75.75 0 11-1.5-.034c.003-.11.004-.219.005-.328a3 3 0 00-3-2.965zm0 2.13a.75.75 0 01.75.75c0 3.51-1.187 6.745-3.181 9.323a.75.75 0 11-1.186-.918A13.687 13.687 0 009.25 9a.75.75 0 01.75-.75zm3.529 3.698a.75.75 0 01.584.885 18.883 18.883 0 01-2.257 5.84.75.75 0 11-1.29-.764 17.386 17.386 0 002.078-5.377.75.75 0 01.885-.584z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipindai Sidik Jarinya dan akan dilakukan perumusan oleh personil Identifikasi </h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 10 Menit</span>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Identifikasi</span></p>
                            </li>                  
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                    <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Sidik Jari yang telah dirumuskan akan diinput dan dicetak oleh petugas Identifikasi, selanjutnya akan diserahkan dalam bentuk Kartu Identifikasi Sidik jari</h3>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Identifikasi</span></p>
                            </li>
                        </ol>
                </li>
            </ol>
        </div>
    </div>
    <script src="{{URL::to('/')}}/assets/js/glide.js"></script>

    <script>
        
        new Glide('.multi', {
          type: 'carousel',
          autoplay: 3500,
          perView: 2,
          breakpoints: {
                800: {
                    perView: 1
                }
            }
        }).mount();
          </script>
</section>
@endsection


@section('script')
@endsection