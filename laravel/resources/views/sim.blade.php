@extends('layout/master')

@section('content')
<section class="flex flex-col">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/assets/img/antipungli.webp" alt="" class="w-full">
    </div>
    <div class="flex flex-col md:flex-row items-center bg-gray-700 rounded-lg m-3 md:m-5">
        <div class="p-3 md:w-6/12 mx-auto flex flex-col items-center order-2 md:order-1">
            <video class="w-full rounded-md" autoplay muted controls loop>
                <source src="{{URL::to('/')}}/media/video/satpas.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="p-3 w-full md:w-6/12 mx-auto flex flex-col items-center order-1 md:order-2">
            {{-- <img src="{{ URL::to('/') }}/assets/img/lantas.png" class="w-20 mx-auto" alt="Flowbite Logo" /> --}}
            <h2 class=" text-gray-200 text-xl font-semibold mb-2">PERSONIL PELAYANAN SATPAS</h2>
            <div class="glide multi">
                <div class="glide__track" data-glide-el="track">
                  <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/saikul.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA SAIKUL ANAS</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA URUSAN SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMK</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>DIKJUR PENGUJI SIM</li>
                                        <li>PELATIHAN PENGUJI SIM</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/kardi.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA KARDIANSYAH</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA PEMBANTU BENMA SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN PENGUJI SIM</li>
                                        <li>SERTIFIKASI OPERATOR SIM</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/heni.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">AIPDA HENI KUSTATY, S.H.</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA OPERATOR SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: STRATA-1 (S-1)</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>DIKJUR LALU LINTAS DASAR</li>
                                        <li>PELATIHAN PENGUJI SIM</li>
                                        <li>PELATIHAN DIKMAS LANTAS</li>
                                        <li>PELATIHAN OPERATOR SIM</li>
                                        <li>SERTIFIKASI OPERATOR SIM</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/irpan.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPKA IRPAN SAPUTRA</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA UJIAN PRAKTIK SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN PENINDAKAN PELANGGARAN</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/catur.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIGPOL CATUR SARWONO</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA UJIAN TEORI SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMA</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>PELATIHAN PENGUJI SIM</li>
                                        <li>SERTIFIKASI OPERATOR SIM</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="w-full rounded-lg shadow bg-gray-800 border-gray-700 h-96">
                            <div class="flex flex-col items-center pt-5">
                                <img class="w-40 h-40 max-w-none mb-3 rounded-full border-4 border-blue-600 shadow-lg" src="{{URL::to('/')}}/media/sim/andri.jpeg" alt="pers"/>
                                <h5 class="mb-1 text-xl font-bold text-white">BRIPTU ANDRIYADI</h5>
                                <span class="text-sm text-gray-400 font-semibold">BINTARA UJIAN PRAKTIK SIM</span>
                            </div>
                            <div class="flex flex-col items-left px-5 pb-5">
                                <span class="text-sm text-gray-400">- PENDIDIKAN UMUM: SMK</span>
                                <span class="text-sm text-left text-gray-400">
                                    - DIKJUR/DIKLAT/SERTIFIKASI:
                                    <ul class="list-disc ml-2 text-xs">
                                        <li>DIKJUR PENGAWALAN LALU LINTAS</li>
                                        <li>PELATIHAN PENGAWALAN VIP</li>
                                        <li>SERTIFIKASI OPERATOR SIM</li>
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
        <img src="{{ URL::to('/') }}/media/sim/maklumat2.webp" alt="" class="w-11/12 mx-auto">
    </div>
    
    
    
 
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-gray-800 text-blue-300" class="p-5">
        <h2 id="accordion-color-heading-1" class="font-bold">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 rounded-t-xl focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-200 hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Apa Sih SIM itu?</span>
            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
          <div class="p-5 border border-b-0 border-gray-700 bg-gray-900">
            <p class="mb-2 text-gray-300">SIM (Surat Ijin Mengemudi) adalah bukti registrasi dan identifikasi yang diberikan oleh Polri kepada seseoraang yang telah memenuhi persyaratan administrasi, sehat jasmani dan rohani, memahami peraturan lalu lintas dan trampil mengemudikan kendaraan bermotor.</p>

            <ul class="text-gray-300 list-disc ml-5 font-semibold">
                <li>Dasar Hukum
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>UU No.2 Tahun 2002 Pasal 14 ayat (1)b dan Pasal 15 ayat (2)c</li>
                        <li>Peraturan Pemerintah No. 44 / 1993 Pasal 216</li>
                    </ol>
                </li>
                <li>Fungsi dan Peran SIM
                    <ol class="text-gray-300 list-decimal ml-5 font-normal">
                        <li>Sebagai sarana identifikasi / jati diri seseorang</li>
                        <li>Sebagai alat bukti</li>
                        <li>Sebagai sarana upaya paksa</li>
                        <li>Sebagai sarana pelayanan masyarakat</li>
                    </ol>
                </li>
            </ul>


            <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                <p class="text-lg italic font-medium leading-relaxed text-gray-300">"Setiap pengemudi kendaraan bermotor wajib memiliki SIM peraturan ini tercantum pada Pasal 18 (1) UU No. 14 Th 1992 tentang Lalu-lintas dan Angkutan Jalan, bahwa setiap pengemudi kendaraan bermotor diwilayah wajib memiliki Surat Ijin Mengemudi (SIM).
                    "</p>
            </blockquote>

            
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
        <h2 id="accordion-color-heading-2">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
            <span>Kategori Golongan SIM</span>
            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </h2>
        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
          <div class="p-5 font-light border border-b-0 border-gray-700">
            
            <p class="mb-2 text-gray-300 font-bold"> Berikut Golongan SIM Menurut Pasal 211 (2) PP 44 / 93</p>
            <ul class="text-gray-300 list-disc ml-5 font-semibold">
                <li>Golongan SIM A
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>SIM untuk kendaraan bermotor roda 4 dengan berat yang diperbolehkan tidak lebih dari 3.500 Kg.</li>
                    </ol>
                 </li>   
    
                 <li>Golongan SIM A Khusus 
                    <ol class="text-gray-300 ml-5 font-normal">
                            <li>SIM untuk kendaraan bermotor roda 3 dengan karoseri mobil (Kajen VI) yang digunakan untuk angkutan orang / barang (bukan sepeda motor dengan kereta samping)</li>
                    </ol>
                 </li>
                 
                 <li>Golongan SIM B1 
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>untuk mengemudikan mobil bus dan mobil barang yang mempunyai jumlah berat yang diperbolehkan lebih dari 3.500 kg</li>
                    </ol>
                 </li>
    
                 <li>Golongan SIM B2 
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>untuk mengemudikan tractor atau kendaraan bermotor dengan menarik kereta tempelan atau gandengan berat yang diperbolehkan untuk kereta tempelan atau kereta gandengan lebih dari 1.000 kg</li>
                    </ol>
                 </li>
                 
                 <li>Golongan SIM C 
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>SIM untuk kendaraan bermotor roda 2 yang dirancang dengan kecepatan lebih dari 40 Km / Jam</li>
                    </ol>
                 </li>
                     
                 <li>Golongan SIM D
                    <ol class="text-gray-300 ml-5 font-normal">
                        <li>SIM khusus bagi pengemudi yang menyandang disabilitas/berkebutuhan khusus.</li>
                    </ol>
                 </li>
            </ul>
          </div>
        </div>
        <h2 id="accordion-color-heading-3">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>Syarat Pembuatan SIM</span>
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
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Usia</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Berusia 17 (tujuh belas belas) tahun untuk SIM A, SIM C, dan SIM D</li>
                        <li>Berusia 20 (dua puluh) tahun untuk SIM B I</li>
                        <li>Berusia 21 (dua puluh satu) tahun untuk SIM B II</li>
                        <li>Berusia 20 (dua puluh) tahun untuk SIM A Umum</li>
                        <li>Berusia 22 (dua puluh dua) tahun untuk SIM B I Umum</li>
                        <li>Berusia 23 (dua puluh tiga) tahun untuk SIM B II Umum</li>
                    </ol>
                        
                </li>
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -left-3 ring-8 ring-gray-900 bg-blue-900">
                        <svg aria-hidden="true" fill="currentColor" class="w-3 h-3 text-blue-300" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                          </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Syarat Administrasi</h3>
                    <ol class="text-gray-300 list-disc ml-5 font-normal">
                        <li>Kartu Tanda Penduduk asli yang masih berlaku bagi Warga Negara Indonesia atau dokumen keimigrasian bagi Warga Negara Asing</li>
                        <li>Surat Keterangan Kesehatan Jasmani dari Dokter</li>
                        <li>Surat Keterangan Kesehatan Rohani dari Biro Psikologi</li>
                        <li>SIM lama untuk permohonan perpanjangan SIM</li>
                        <li>Untuk pengalihan golongan SIM, harus disertai dengan Surat Lulus Uji Keterampilan Simulator ataupun Klipeng</li>                        
                    </ol>
                    <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                        <p class="text-lg italic font-medium leading-relaxed text-gray-300">"SIM yang telah lewat masa berlakunya, dinyatakan tidak berlaku dan harus mengulangi proses penerbitan SIM baru kembali."</p>
                    </blockquote>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-4">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
              <span>Biaya Pembuatan SIM</span>
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
                        <li>SIM C Rp.100.000</li>
                        <li>SIM A Rp.120.000</li>
                        <li>SIM A Umum Rp.120.000</li>
                        <li>SIM BI/Umum Rp.120.000</li>
                        <li>SIM BII/Umum Rp.120.000</li>
                        <li>SIM D Rp.50.000</li>
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
                        <li>SIM C Rp.75.000</li>
                        <li>SIM A Rp.80.000</li>
                        <li>SIM A Umum Rp.80.000</li>
                        <li>SIM BI/Umum Rp.80.000</li>
                        <li>SIM BII/Umum Rp.80.000</li>
                        <li>SIM D Rp.30.000</li>     
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-5">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Alur Pembuatan SIM Baru dan Perpanjangan SIM</span>
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
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Pembuatan SIM Baru<br>
                        <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 120 Menit</span></h3>
                        <ol class="relative border-l border-gray-700 text-gray-400">
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon tiba di gedung Satpas Polres Landak</h3>
                            </li>             
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M13 3v1.27a.75.75 0 001.5 0V3h2.25A2.25 2.25 0 0119 5.25v2.628a.75.75 0 01-.5.707 1.5 1.5 0 000 2.83c.3.106.5.39.5.707v2.628A2.25 2.25 0 0116.75 17H14.5v-1.27a.75.75 0 00-1.5 0V17H3.25A2.25 2.25 0 011 14.75v-2.628c0-.318.2-.601.5-.707a1.5 1.5 0 000-2.83.75.75 0 01-.5-.707V5.25A2.25 2.25 0 013.25 3H13zm1.5 4.396a.75.75 0 00-1.5 0v1.042a.75.75 0 001.5 0V7.396zm0 4.167a.75.75 0 00-1.5 0v1.041a.75.75 0 001.5 0v-1.041zM6 10.75a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75zm0 2.5a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon mengambil nomor antrian</h3>
                                <p class="text-sm py-2">Pemohon akan mendapatkan nomor antrian, kami berkomitmen untuk memberikan Prioritas terhadap Lansia, Penyandang Disabilitas serta Ibu Hamil dan Menyusui</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Lobby Ruang Satpas</span></p>
    
                            </li>             
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon Mengisi Formulir Registrasi dan menyerahkannya kepada petugas registrasi</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 15 Menit</span>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Pendaftaran SIM</span></p>
                            </li> 
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M10 2.5c-1.31 0-2.526.386-3.546 1.051a.75.75 0 01-.82-1.256A8 8 0 0118 9a22.47 22.47 0 01-1.228 7.351.75.75 0 11-1.417-.49A20.97 20.97 0 0016.5 9 6.5 6.5 0 0010 2.5zM4.333 4.416a.75.75 0 01.218 1.038A6.466 6.466 0 003.5 9a7.966 7.966 0 01-1.293 4.362.75.75 0 01-1.257-.819A6.466 6.466 0 002 9c0-1.61.476-3.11 1.295-4.365a.75.75 0 011.038-.219zM10 6.12a3 3 0 00-3.001 3.041 11.455 11.455 0 01-2.697 7.24.75.75 0 01-1.148-.965A9.957 9.957 0 005.5 9c0-.028.002-.055.004-.082a4.5 4.5 0 018.996.084V9.15l-.005.297a.75.75 0 11-1.5-.034c.003-.11.004-.219.005-.328a3 3 0 00-3-2.965zm0 2.13a.75.75 0 01.75.75c0 3.51-1.187 6.745-3.181 9.323a.75.75 0 11-1.186-.918A13.687 13.687 0 009.25 9a.75.75 0 01.75-.75zm3.529 3.698a.75.75 0 01.584.885 18.883 18.883 0 01-2.257 5.84.75.75 0 11-1.29-.764 17.386 17.386 0 002.078-5.377.75.75 0 01.885-.584z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipanggil menuju ke Ruang Identifikasi SIM</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 20 Menit</span>
                                <p class="text-sm py-2">Pada tahap ini, identitas pemohon akan disesuaikan dengan data pada Database serta akan dilakukan pengambilan foto serta pengambilan data Biometrik pemohon</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Identifikasi SIM</span></p>
                            </li>        
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.75 16.82A7.462 7.462 0 0115 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0018 15.06v-11a.75.75 0 00-.546-.721A9.006 9.006 0 0015 3a8.963 8.963 0 00-4.25 1.065V16.82zM9.25 4.065A8.963 8.963 0 005 3c-.85 0-1.673.118-2.454.339A.75.75 0 002 4.06v11a.75.75 0 00.954.721A7.506 7.506 0 015 15.5c1.579 0 3.042.487 4.25 1.32V4.065z"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan diarahkan untuk menuju ke Ruang Pencerahan</h3>
                                <p class="text-sm py-2">Sebelum menghadapi Ujian Teori, pemohon akan diberikan kesempatan untuk mempelajari dan mendapat kisi-kisi dari soal-soal ujian teori</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Pencerahan</span></p>
                            </li>             
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk melaksanakan Ujian Teori</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 35 Menit</span>
                                <p class="text-sm py-2">Pemohon akan melaksanakan Ujian Teori dengan menggunakan sistem berbasis komputer</p>
                                <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                                <p class="text-sm text-red-400 font-semibold">Pemohon yang dinyatakan gagal tes teori akan diberikan kesempatan mengulang tes dihari berikutnya atau paling banyak 3 (tiga) kali dalam kurun waktu 14 (empat belas) hari.</p>
                                </blockquote>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Tes Teori</span></p>
                            </li>         
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                      <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 002 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 006.5 3zM2 12v2.5A1.5 1.5 0 003.5 16h.041a3 3 0 015.918 0h.791a.75.75 0 00.75-.75V12H2z"></path>
                                        <path d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM13.25 5a.75.75 0 00-.75.75v8.514a3.001 3.001 0 014.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 00-1.784-8.549A1.486 1.486 0 0014.823 5H13.25zM14.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk melaksanakan Ujian Praktik</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 45 Menit</span>
                                <p class="text-sm py-2">Didampingi oleh petugas, pemohon diwajibkan melakukan Ujian Praktik dengan kendaraan sesuai dengan SIM yang dimohon.</p>
                                <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                                <p class="text-sm text-red-400 font-semibold">Pemohon yang dinyatakan gagal tes praktik akan diberikan kesempatan mengulang tes dihari berikutnya atau paling banyak 3 (tiga) kali dalam kurun waktu 14 (empat belas) hari.</p>
                                </blockquote>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Lapangan Ujian Praktik</span></p>
                            </li>                       
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                    <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                      </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan diarahkan untuk menuju Ruang Pembayaran PNBP SIM</h3>
                                <p class="text-sm">Kami bekerjasama dengan Bank BRI dalam tugas menerima Pembayaran PNBP SIM, sehingga dapat kami pastikan uang yang anda berikan akan langsung masuk pada Kas Negara.</p>
                                <p class="text-sm">Lokasi:<span class="text-yellow-200">Ruang Pembayaran PNBP SIM</span></p>
                            </li>     
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                    <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk menuju Ruang Penyerahan SIM</h3>
                                <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                                <p class="text-sm py-2">Pemohon akan diberikan SIM dan diminta untuk mengecek kembali data yang tertera, sampai disini proses penerbitan SIM telah Selesai</p>
                                <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Penyerahan SIM</span></p>
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
                    
                    <h3 class="flex items-left mb-1 text-lg font-semibold text-white flex-col">Alur Perpanjangan SIM<br>
                    <span class="text-lg w-fit font-medium mr-2 px-2.5 py-0.5 mb-3 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 40 Menit</span><br>
                    <blockquote class="p-4 my-4 border-l-4 border-gray-500 bg-gray-800">
                        <p class="text-lg italic font-medium leading-relaxed text-gray-300">"SIM yang telah lewat masa berlakunya, dinyatakan tidak berlaku dan harus mengulangi proses penerbitan SIM baru kembali."</p>
                    </blockquote></h3>
                    <ol class="relative border-l border-gray-700 text-gray-400">
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon tiba di gedung Satpas Polres Landak</h3>
                        </li>             
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                  <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M13 3v1.27a.75.75 0 001.5 0V3h2.25A2.25 2.25 0 0119 5.25v2.628a.75.75 0 01-.5.707 1.5 1.5 0 000 2.83c.3.106.5.39.5.707v2.628A2.25 2.25 0 0116.75 17H14.5v-1.27a.75.75 0 00-1.5 0V17H3.25A2.25 2.25 0 011 14.75v-2.628c0-.318.2-.601.5-.707a1.5 1.5 0 000-2.83.75.75 0 01-.5-.707V5.25A2.25 2.25 0 013.25 3H13zm1.5 4.396a.75.75 0 00-1.5 0v1.042a.75.75 0 001.5 0V7.396zm0 4.167a.75.75 0 00-1.5 0v1.041a.75.75 0 001.5 0v-1.041zM6 10.75a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75zm0 2.5a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon mengambil nomor antrian</h3>
                            <p class="text-sm py-2">Pemohon akan mendapatkan nomor antrian, kami berkomitmen untuk memberikan Prioritas terhadap Lansia, Penyandang Disabilitas serta Ibu Hamil dan Menyusui</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Lobby Ruang Satpas</span></p>

                        </li>             
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                  <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon Mengisi Formulir Registrasi dan menyerahkannya kepada petugas registrasi</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 15 Menit</span>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Pendaftaran SIM</span></p>
                        </li> 
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                  <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M10 2.5c-1.31 0-2.526.386-3.546 1.051a.75.75 0 01-.82-1.256A8 8 0 0118 9a22.47 22.47 0 01-1.228 7.351.75.75 0 11-1.417-.49A20.97 20.97 0 0016.5 9 6.5 6.5 0 0010 2.5zM4.333 4.416a.75.75 0 01.218 1.038A6.466 6.466 0 003.5 9a7.966 7.966 0 01-1.293 4.362.75.75 0 01-1.257-.819A6.466 6.466 0 002 9c0-1.61.476-3.11 1.295-4.365a.75.75 0 011.038-.219zM10 6.12a3 3 0 00-3.001 3.041 11.455 11.455 0 01-2.697 7.24.75.75 0 01-1.148-.965A9.957 9.957 0 005.5 9c0-.028.002-.055.004-.082a4.5 4.5 0 018.996.084V9.15l-.005.297a.75.75 0 11-1.5-.034c.003-.11.004-.219.005-.328a3 3 0 00-3-2.965zm0 2.13a.75.75 0 01.75.75c0 3.51-1.187 6.745-3.181 9.323a.75.75 0 11-1.186-.918A13.687 13.687 0 009.25 9a.75.75 0 01.75-.75zm3.529 3.698a.75.75 0 01.584.885 18.883 18.883 0 01-2.257 5.84.75.75 0 11-1.29-.764 17.386 17.386 0 002.078-5.377.75.75 0 01.885-.584z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon akan dipanggil menuju ke Ruang Identifikasi SIM</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 20 Menit</span>
                            <p class="text-sm py-2">Pada tahap ini, identitas pemohon akan disesuaikan dengan data pada Database serta akan dilakukan pengambilan foto serta pengambilan data Biometrik pemohon</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Identifikasi SIM</span></p>
                        </li>                               
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-gray-700">
                                <svg aria-hidden="true" fill="currentColor" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" fill-rule="evenodd"></path>
                                  </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon akan diarahkan untuk menuju Ruang Pembayaran PNBP SIM</h3>
                            <p class="text-sm">Kami bekerjasama dengan Bank BRI dalam tugas menerima Pembayaran PNBP SIM, sehingga dapat kami pastikan uang yang anda berikan akan langsung masuk pada Kas Negara.</p>
                            <p class="text-sm">Lokasi:<span class="text-yellow-200">Ruang Pembayaran PNBP SIM</span></p>
                        </li>     
                        <li class="mb-10 ml-6">            
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-gray-900 bg-green-900">
                                <svg aria-hidden="true" class="w-5 h-5 text-green-400 animate-ping" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            <h3 class="font-medium leading-tight">Pemohon akan dipanggil untuk menuju Ruang Penyerahan SIM</h3>
                            <span class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-blue-400 border border-blue-400">Standart Waktu: 5 Menit</span>
                            <p class="text-sm py-2">Pemohon akan diberikan SIM dan diminta untuk mengecek kembali data yang tertera, sampai disini proses penerbitan SIM telah Selesai</p>
                            <p class="text-sm py-2">Lokasi:<span class="text-yellow-200"> Ruang Penyerahan SIM</span></p>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
        <h2 id="accordion-color-heading-6">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 focus:ring-4 focus:ring-blue-800 border-gray-700 text-gray-400  hover:bg-gray-800" data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Galeri</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </h2>
        <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
            <img src="{{URL::to('/')}}/media/sim/1.jpeg" class="m-1" alt="">
            <img src="{{URL::to('/')}}/media/sim/2.jpeg" class="m-1" alt="">
            <img src="{{URL::to('/')}}/media/sim/3.jpeg" class="m-1" alt="">
            <img src="{{URL::to('/')}}/media/sim/4.jpeg" class="m-1" alt="">
            <img src="{{URL::to('/')}}/media/sim/5.jpeg" class="m-1" alt="">
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