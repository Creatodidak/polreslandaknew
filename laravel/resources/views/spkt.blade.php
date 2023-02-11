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
            <h2 class=" text-gray-200 text-xl font-semibold mb-2">PERSONIL SPKT</h2>
            <div class="glide multi">
                <div class="glide__track" data-glide-el="track">
                  <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/egi.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">IPDA EGIDIUS EGI, S.H.</h5>
                                <span class="text-sm text-gray-400 font-semibold">KA SPKT</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: STRATA-1 (S-1)</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">Pelatihan Bintara Pengawalan</li>
                                        <li class="uppercase">Dikbangpers Ba Idik TP Terorisme</li>
                                        <li class="uppercase">Dikbangpers Pama Idik TP Karhutla </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/tampe.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">IPDA APRIANUS S. TAMPE, S.H.</h5>
                                <span class="text-sm text-gray-400 font-semibold">KANIT SPKT I</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: STRATA-1 (S-1)</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">Pelatihan Brigadir Pengawalan Obvit</li>
                                        <li class="uppercase">Pelatihan Bintara/PPNS Gol 2 Advokasi </li>
                                        <li class="uppercase">Pelatihan Bintara Persekusi </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/teguh.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA TEGUH WIBISONO</h5>
                                <span class="text-sm text-gray-400 font-semibold">BANIT SPKT 1</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">Pelatihan Brigadir Polmas FT. Binmas</li>
                                        <li class="uppercase">Pelatihan Brigadir Penyuluhan Masyarakat</li>
                                        <li class="uppercase">Pelatihan Bintara Instruktur Satpam</li>
                                        <li class="uppercase">Dikbangspes Bintara Binmas</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/zhani.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA MUHAMMAD ZHANI</h5>
                                <span class="text-sm text-gray-400 font-semibold">BANIT SPKT I</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                {{-- <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase"></li>
                                    </ul>
                                </span> --}}
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/ryan.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA RIAN SUKMA PUTRA</h5>
                                <span class="text-sm text-gray-400 font-semibold">BANIT SPKT II</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">PELATIHAN DASAR BINTARA LALU LINTAS</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/himori.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA HIMORI</h5>
                                <span class="text-sm text-gray-400 font-semibold">PS. KANIT SPKT III</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">Pelatihan Bintara Idik TP Ilegal Logging</li>
                                        <li class="uppercase">Pelatihan Brigadir Polmas FT Binmas</li>
                                        <li class="uppercase">Pelatihan Tipiring FT Samapta </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/sastro.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA SASTRO DIHARJO</h5>
                                <span class="text-sm text-gray-400 font-semibold">BANIT SPKT III</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">PELATIHAN BHABINKAMTIBMAS</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-black shadow-lg" src="{{URL::to('/')}}/media/spkt/suris.jpg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPKA SURISTIONO</h5>
                                <span class="text-sm text-gray-400 font-semibold">BANIT SPKT III</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-10 text-xs">
                                        <li class="uppercase">Pelatihan Ba Dalmas</li>
                                        <li class="uppercase">Pelatihan Ba Penerimaan Barang</li>
                                        <li class="uppercase">Pelatihan Ba Penerimaan Laporan Polisi</li>
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
        <img src="{{ URL::to('/') }}/media/spkt/maklumat.webp" alt="" class="w-11/12 mx-auto">
    </div>
    
    
    
 
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-gray-800 text-blue-300" class="p-5">
        <h2 id="accordion-color-heading-1" class="font-bold">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 rounded-t-xl focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-200 hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Apa sih tugas SPKT itu?</span>
            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
          <div class="p-5 border border-b-0 border-gray-700 bg-gray-900">
            <p class="mb-2 text-gray-300">SPKT bertugas memberikan pelayanan kepolisian kepada masyarakat, dalam bentuk penerimaan dan penanganan pertama laporan/pengaduan, pelayanan bantuan/pertolongan kepolisian, bersama fungsi terkait mendatangi TKP untuk melaksanakan kegiatan pengamanan dan olah TKP sesuai ketentuan hukum dan peraturan yang berlaku.</p>

            <ul class="text-gray-300 list-disc ml-5 font-semibold">
                <li>Dasar Hukum
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>UU Kepolisian Republik Indonesia No 2 Tahun 2002</li>
                    </ol>
                </li>
                <li>Fungsi dan Peran SPKT
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>Melayani Pembuatan Laporan Polisi (LP)</li>
                        <li>Melayani Pembuatan Laporan Pengaduan</li>
                        <li>Melayani Pembuatan Laporan Kehilangan</li>                        
                        <li>Pengkoordinasian dan pemberian bantuan serta pertolongan, anatara laian penanganan tempat kejadian perkara ( TKP ) meliputi tindakan pertama di TKP ( TPTKP ) dan pengolahan TKP, turjawali (pengaturan jalan dan pengawalan lalu-lintas), dan pengamanan</li>
                        <li>Pelayanan masyarakat antara lain melalui telepon, pesan singkat, faksimili, internet (jejaring sosial), dan surat</li>
                        <li>Penyajian informasi umum yang berkaitan dengan kepentingan masyarakat sesuai dengan ketentuan peraturan perundang-undangan.</li>
                    </ol>
                </li>
            </ul>
          </div>
        </div>
        <h2 id="accordion-color-heading-3">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>Syarat Pembuatan Laporan Polisi, Laporan Pengaduan dan Laporan Kehilangan</span>
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
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Pembuatan Laporan Polisi</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Identitas Diri (KTP/SIM/KK) atau Surat Pengantar dari RT/RW apabila tidak ada Identitas apapun</li>
                        <li>Dokumen atau Benda atau Bukti yang dapat mendukung peristiwa yang akan dilaporkan</li>
                        <li>Orang lain yang mengetahui atau menyaksikan peristiwa yang akan dilaporkan (jika ada)</li>
                        <li>Surat/Dokumen kepemilikan kendaraan jika yang akan dilaporkan adalah berhubungan dengan kendaraan bermotor</li>
                    </ol>
                </li>
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Pembuatan Laporan Pengaduan</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Identitas Diri (KTP/SIM/KK) atau Surat Pengantar dari RT/RW apabila tidak ada Identitas apapun</li>
                        <li>Dokumen atau Benda atau Bukti yang dapat mendukung peristiwa yang akan diadukan</li>
                        <li>Orang lain yang mengetahui atau menyaksikan peristiwa yang akan diadukan (jika ada)</li>
                    </ol>
                </li>
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Pembuatan Laporan Kehilangan</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Identitas Diri (KTP/SIM/KK) atau Surat Pengantar dari RT/RW apabila tidak ada Identitas apapun</li>
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-4">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
              <span>Biaya Pelayanan SPKT</span>
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
                        <li class="font-bold text-yellow-300">Segala Bentuk Pelayanan SPKT diatas Tidak Dipungut Biaya Apapun atau 100% Gratis!</li>
                    </ol>
                        
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-5">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Alur Pembuatan Laporan Polisi, Laporan Pengaduan dan Laporan Kehilangan</span>
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
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Pembuatan Laporan Polisi / Laporan Pengaduan / Laporan Kehilangan<br>
                        <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: Max 40 Menit</span></h3>
                        <ol class="relative border-l border-gray-700 text-gray-400">
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pelapor tiba di gedung SPKT Polres Landak</h3>
                            </li>                     
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="none" class="w-5 h-5 text-gray-400" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pelapor menyerahkan Identitas Diri</h3>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang SPKT</span></p>
                            </li> 
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="none" class="w-5 h-5 text-gray-400" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pelapor akan dimintai keterangan oleh Personil SPKT</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: Max 30 Menit</span>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang SPKT</span></p>
                            </li>        
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Keterangan Pelapor akan dianalisa dan dikoordinasikan dengan Satuan Fungsi terkait (jika diperlukan) oleh personil SPKT</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: max 10 Menit</span>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang SPKT</span></p>
                            </li>             
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                    <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pelapor akan diberikan Surat Tanda Bukti Lapor dan akan diarahkan ke Satuan Fungsi terkait jika menurut analisa personil SPKT diperlukan</h3>
                                <p class="text-sm py-2">Pelapor dapat kembali ke rumah atau diarahkan ke Satuan Fungsi terkait jika menurut analisa personil SPKT diperlukan</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang SPKT</span></p>
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