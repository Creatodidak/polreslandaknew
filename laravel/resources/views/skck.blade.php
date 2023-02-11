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
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-yellow-400 shadow-lg" src="{{URL::to('/')}}/media/skck/johan.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPKA FRANSISKUS JOHAN</h5>
                                <span class="text-sm text-gray-400 font-semibold">KAUR YAN MIN</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN BINTARA PENYELIDIKAN</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-yellow-400 shadow-lg" src="{{URL::to('/')}}/media/skck/ginting.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIGPOL JOY D. GINTING, S.H.</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA OPERATOR SKCK</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: STRATA-1 (S-1)</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>SERTIFIKASI OPERATOR SKCK</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-yellow-400 shadow-lg" src="{{URL::to('/')}}/media/skck/ayu.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPTU AYU SRIWAHYUNI</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA PEMBANTU BENMA SKCK</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN OPERATOR SKCK ONLINE</li>
                                        <li>SERTIFIKASI OPERATOR SKCK</li>
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
        <img src="{{ URL::to('/') }}/media/skck/maklumat.webp" alt="" class="w-11/12 mx-auto">
    </div>
    
    
    
 
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-gray-800 text-blue-300" class="p-5">
        <h2 id="accordion-color-heading-1" class="font-bold">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 rounded-t-xl focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-200 hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Apa Sih SKCK itu?</span>
            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
          <div class="p-5 border border-b-0 border-gray-700 bg-gray-900">
            <p class="mb-2 text-gray-300">Surat Keterangan Catatan Kepolisian (disingkat SKCK) adalah catatan tertulis yang diselenggarakan oleh Polri terhadap seseorang yang pernah melakukan perbuatan melawan hukum atau melanggar hukum atau sedang dalam proses peradilan.</p>

            <ul class="text-gray-300 list-disc ml-5 font-semibold">
                <li>Dasar Hukum
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>UU Kepolisian Republik Indonesia No 2 Tahun 2002</li>
                        <li>UU No 25 Tahun 2009 Tentang Pelayanan Publik</li>
                        <li>PP No 60 Tahun 2016 Tentang Pnbp Yang Berlaku Pada Kepolsian Negara Republik Indonesia</li>
                        <li>Perkap No 18 Tahun 2014 Tentang Tata Cara Penerbitan Skck</li>
                    </ol>
                </li>
                <li>Fungsi dan Peran SKCK
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>Sebagai sarana identifikasi / jati diri seseorang</li>
                        <li>Sebagai bukti bahwa seseorang pernah atau tidak pernah melakukan perbuatan melawan hukum atau melanggar hukum</li>
                        <li>Sebagai bukti bahwa seseorang sedang atau tidak sedang dalam proses peradilan</li>
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
              <span>Syarat Pembuatan SKCK</span>
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
                        <li>Foto Copy Kartu Keluarga 1 (satu) Lembar</li>
                        <li>Foto Copy Akta Kelahiran 1 (satu) Lembar</li>
                        <li>Foto Copy Ijasah SD  Terakhir 1 (satu) Lembar</li>
                        <li>Kartu Sidik Jari</li>
                        <li>Pas Foto 4x6 Latar Belakang Merah 3 (tiga) Lembar</li>
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-4">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
              <span>Biaya Pembuatan SKCK</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
            <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                <p class="text-lg italic font-medium leading-relaxed text-gray-300">"Biaya yang tertera adalah biaya yang diatur pada PP Nomor 76 Tahun 2020, tentang Jenis dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak yang Berlaku Pada Kepolisian Negara Republik Indonesia...<br>Apabila anda melihat, mendengar atau diminta biaya diluar biaya dibawah ini silahkan melaporkannya kepada kami via Whatsapp Dumas Presisi Polres Landak"</p>
            </blockquote>
            <ol class="relative border-l border-gray-700 p-5">                  
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Biaya Penerbitan Baru</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Reguler Rp.30.000</li>
                        <li class="font-bold text-yellow-300">Gratis Bagi Yang Tidak Mampu Dengan Melampirkan Surat Keterangan Tidak Mampu</li>
                    </ol>
                        
                </li>
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Biaya Perpanjangan</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Reguler Rp.30.000</li>
                        <li class="font-bold text-yellow-300">Gratis Bagi Yang Tidak Mampu Dengan Melampirkan Surat Keterangan Tidak Mampu</li>
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-5">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Alur Pembuatan SKCK Baru dan Perpanjangan SKCK</span>
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
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Pembuatan SKCK Baru<br>
                        <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 20 Menit</span></h3>
                        <ol class="relative border-l border-gray-700 text-gray-400">
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon tiba di loket Pelayanan SKCK Polres Landak</h3>
                            </li>             
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M13 3v1.27a.75.75 0 001.5 0V3h2.25A2.25 2.25 0 0119 5.25v2.628a.75.75 0 01-.5.707 1.5 1.5 0 000 2.83c.3.106.5.39.5.707v2.628A2.25 2.25 0 0116.75 17H14.5v-1.27a.75.75 0 00-1.5 0V17H3.25A2.25 2.25 0 011 14.75v-2.628c0-.318.2-.601.5-.707a1.5 1.5 0 000-2.83.75.75 0 01-.5-.707V5.25A2.25 2.25 0 013.25 3H13zm1.5 4.396a.75.75 0 00-1.5 0v1.042a.75.75 0 001.5 0V7.396zm0 4.167a.75.75 0 00-1.5 0v1.041a.75.75 0 001.5 0v-1.041zM6 10.75a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75zm0 2.5a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon mengambil nomor antrian</h3>
                                <p class="text-sm py-2">Pemohon akan mendapatkan nomor antrian, kami berkomitmen untuk memberikan Prioritas terhadap Lansia, Penyandang Disabilitas serta Ibu Hamil dan Menyusui</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Lobby Ruang SKCK</span></p>
    
                            </li>             
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon Mengisi Formulir Registrasi Online</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 10 Menit</span>
                                <p class="text-sm py-2">Pemohon akan diarahkan untuk mengisi data diri secara online di website <a href="https://skck.polri.go.id"><span class="text-yellow-400 font-semibold">https://skck.polri.go.id</span></a> dan akan mendapatkan code barcode setelah selesai mengisi data diri</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Registrasi SKCK</span></p>
                            </li> 
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M3.75 2A1.75 1.75 0 002 3.75v3.5C2 8.216 2.784 9 3.75 9h3.5A1.75 1.75 0 009 7.25v-3.5A1.75 1.75 0 007.25 2h-3.5zM3.5 3.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zM3.75 11A1.75 1.75 0 002 12.75v3.5c0 .966.784 1.75 1.75 1.75h3.5A1.75 1.75 0 009 16.25v-3.5A1.75 1.75 0 007.25 11h-3.5zm-.25 1.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zm7.5-9c0-.966.784-1.75 1.75-1.75h3.5c.966 0 1.75.784 1.75 1.75v3.5A1.75 1.75 0 0116.25 9h-3.5A1.75 1.75 0 0111 7.25v-3.5zm1.75-.25a.25.25 0 00-.25.25v3.5c0 .138.112.25.25.25h3.5a.25.25 0 00.25-.25v-3.5a.25.25 0 00-.25-.25h-3.5zm-7.26 1a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm-9 9a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm-3.5-1.5a1 1 0 011-1H12a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V12zm6-1a1 1 0 00-1 1v.01a1 1 0 001 1H17a1 1 0 001-1V12a1 1 0 00-1-1h-.01zm-1 6a1 1 0 011-1H17a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V17zm-4-1a1 1 0 00-1 1v.01a1 1 0 001 1H12a1 1 0 001-1V17a1 1 0 00-1-1h-.01z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">pemohon menyerahkan code barcode dan persyaratan skck ke loket petugas SKCK dan petugas langsung mencetak SKCK pemohon</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Registrasi SKCK</span></p>
                            </li>                         
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan diarahkan untuk menuju Loket Pembayaran PNBP SKCK</h3>
                                <p class="text-sm">Lokasi:<span class="text-yellow-200"> Loket Pembayaran PNBP SKCK</span></p>
                            </li>     
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                    <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk menuju Loket Penyerahan SKCK</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                                <p class="text-sm py-2">Pemohon akan diberikan SKCK dan diminta untuk mengecek kembali data yang tertera, sampai disini proses penerbitan SKCK telah Selesai</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Penyerahan SKCK</span></p>
                            </li>
                        </ol>
                </li>
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Perpanjangan SKCK<br>
                    <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 20 Menit</span><br>
                    <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                        <p class="text-lg italic font-medium leading-relaxed text-gray-300">"Masa Berlaku SKCK adalah 6 (enam) Bulan semenjak SKCK diterbitkan"</p>
                    </blockquote></h3>
                    <ol class="relative border-l border-gray-700 text-gray-400">
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon tiba di loket Pelayanan SKCK Polres Landak</h3>
                        </li>             
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                  <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M13 3v1.27a.75.75 0 001.5 0V3h2.25A2.25 2.25 0 0119 5.25v2.628a.75.75 0 01-.5.707 1.5 1.5 0 000 2.83c.3.106.5.39.5.707v2.628A2.25 2.25 0 0116.75 17H14.5v-1.27a.75.75 0 00-1.5 0V17H3.25A2.25 2.25 0 011 14.75v-2.628c0-.318.2-.601.5-.707a1.5 1.5 0 000-2.83.75.75 0 01-.5-.707V5.25A2.25 2.25 0 013.25 3H13zm1.5 4.396a.75.75 0 00-1.5 0v1.042a.75.75 0 001.5 0V7.396zm0 4.167a.75.75 0 00-1.5 0v1.041a.75.75 0 001.5 0v-1.041zM6 10.75a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75zm0 2.5a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon mengambil nomor antrian</h3>
                            <p class="text-sm py-2">Pemohon akan mendapatkan nomor antrian, kami berkomitmen untuk memberikan Prioritas terhadap Lansia, Penyandang Disabilitas serta Ibu Hamil dan Menyusui</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Lobby Ruang SKCK</span></p>

                        </li>             
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                  <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon Mengisi Formulir Registrasi Online</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 10 Menit</span>
                            <p class="text-sm py-2">Pemohon akan diarahkan untuk mengisi data diri secara online di website <a href="https://skck.polri.go.id"><span class="text-yellow-400 font-semibold">https://skck.polri.go.id</span></a> dan akan mendapatkan code barcode setelah selesai mengisi data diri</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Registrasi SKCK</span></p>
                        </li> 
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M3.75 2A1.75 1.75 0 002 3.75v3.5C2 8.216 2.784 9 3.75 9h3.5A1.75 1.75 0 009 7.25v-3.5A1.75 1.75 0 007.25 2h-3.5zM3.5 3.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zM3.75 11A1.75 1.75 0 002 12.75v3.5c0 .966.784 1.75 1.75 1.75h3.5A1.75 1.75 0 009 16.25v-3.5A1.75 1.75 0 007.25 11h-3.5zm-.25 1.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zm7.5-9c0-.966.784-1.75 1.75-1.75h3.5c.966 0 1.75.784 1.75 1.75v3.5A1.75 1.75 0 0116.25 9h-3.5A1.75 1.75 0 0111 7.25v-3.5zm1.75-.25a.25.25 0 00-.25.25v3.5c0 .138.112.25.25.25h3.5a.25.25 0 00.25-.25v-3.5a.25.25 0 00-.25-.25h-3.5zm-7.26 1a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm-9 9a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm-3.5-1.5a1 1 0 011-1H12a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V12zm6-1a1 1 0 00-1 1v.01a1 1 0 001 1H17a1 1 0 001-1V12a1 1 0 00-1-1h-.01zm-1 6a1 1 0 011-1H17a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V17zm-4-1a1 1 0 00-1 1v.01a1 1 0 001 1H12a1 1 0 001-1V17a1 1 0 00-1-1h-.01z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">pemohon menyerahkan code barcode dan persyaratan skck ke loket petugas SKCK dan petugas langsung mencetak SKCK pemohon</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Registrasi SKCK</span></p>
                        </li>                         
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon akan diarahkan untuk menuju Loket Pembayaran PNBP SKCK</h3>
                            <p class="text-sm">Lokasi:<span class="text-yellow-200"> Loket Pembayaran PNBP SKCK</span></p>
                        </li>     
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk menuju Loket Penyerahan SKCK</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                            <p class="text-sm py-2">Pemohon akan diberikan SKCK dan diminta untuk mengecek kembali data yang tertera, sampai disini proses penerbitan SKCK telah Selesai</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Loket Penyerahan SKCK</span></p>
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