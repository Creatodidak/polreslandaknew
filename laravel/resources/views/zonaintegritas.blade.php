@extends('layout/master')

@section('content')
<section class="flex flex-col">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/assets/img/antipungli.webp" alt="" class="w-full">
    </div>
    <div class="flex flex-col md:flex-row items-center bg-gray-700 rounded-lg m-3 md:m-5">
        <div class="p-3 md:w-6/12 mx-auto flex flex-col items-center order-2 md:order-1">
            <video class="w-full rounded-md" autoplay muted controls loop>
                <source src="{{ URL::to('/') }}/media/video/profile.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="p-3 md:w-6/12 text-center mx-auto flex flex-col items-center order-1 md:order-2">
            <span class="text-base md:text-3xl text-white font-bold">
                SELAMAT DATANG<br>DI ZONA INTEGRITAS POLRES LANDAK
            </span>
            <span class="text-base md:text-3xl text-white font-bold">
                #SIAPMENUJU<span class="text-cyan-400">WBK</span>DAN<span class="text-cyan-400">WBBM</span>
            </span>
        </div>
    </div>

    <div class="flex flex-col items-center bg-gray-800 rounded-lg mx-3 md:mx-5">
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 gap-5 content-around justify-center m-5">
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal" data-modal-toggle="staticModal"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM I</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">MANAJEMEN PERUBAHAN</span>
            </div>
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal2" data-modal-toggle="staticModal2"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM II</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">PENATAAN TATA LAKSANA</span>
            </div>
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal3" data-modal-toggle="staticModal3"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM III</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">PENATAAN SISTEM MANAJEMEN SDM</span>
            </div>
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal4" data-modal-toggle="staticModal4"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM IV</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">PENGUATAN AKUNTABILITAS</span>
            </div>
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal5" data-modal-toggle="staticModal5"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM V</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">PENGUATAN PENGAWASAN</span>
            </div>
            <div class="items-center p-5 md:p-10 m-1 md:m-5 justify-center flex flex-col rounded-2xl shadow-lg shadow-blue-500/50" data-modal-target="staticModal6" data-modal-toggle="staticModal6"
                style="background-image: url('{{ URL::to("/") }}/media/zi/bg.png'); background-repeat: no-repeat; background-size:cover">
                <span class="text-lg md:text-2xl pt-1 md:pt-10 font-bold text-white">PROGRAM VI</span>
                <span class="text-xs md:text-lg pb-1 md:pb-10 font-medium text-gray-200">PENINGKATAN KUALITAS YANLIK</span>
            </div>
        </div>
    </div>

</section>

    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM I
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program I
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya komitmen seluruh jajaran pimpinan dan pegawai unit kerja;</li>
                        <li>Terjadinya perubahan pola pikir dan budaya kerja pada unit kerja; dan</li>
                        <li>Menurunnya resiko kegagalan yang disebabkan kemungkinan timbulnya resistensi terhadap perubahan.</li>
                    </ol>
                    <a href="https://drive.google.com/drive/folders/1-IL7LHlDHy9lKcI4RZuAjqe-QfcIpNxM" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="staticModal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM II
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program II
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya penggunaan teknologi informasi dalam proses penyelenggaraan manajemen pemerintahan;</li>
                        <li>Meningkatnya efisiensi dan efektivitas proses manajemen pemerintahan; dan</li>
                        <li>Meningkatnya kinerja di Zona Integritas.</li>
                    </ol>
                    <a href="https://drive.google.com/drive/folders/1uGeQuk1FJNpWakeeuqCC0yFcimthqJ0b" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal2" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="staticModal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM III
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program III
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya ketaatan terhadap pengelolaan SDM aparatur;</li>
                        <li>Meningkatnya transparansi dan akuntabilitas pengelolaan SDM aparatur;</li>
                        <li>Meningkatnya disiplin SDM aparatur;</li>
                        <li>Meningkatnya efektivitas manajemen SDM aparatur; dan</li>
                        <li>Meningkatnya profesionalisme SDM aparatur.</li>
                    </ol>
                    <a href="https://drive.google.com/drive/folders/1eWSbSWbiZhj1IIoEGcQVp5DYLZrorDpb" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal3" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="staticModal4" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM IV
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program IV
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya kinerja instansi pemerintah; dan</li>
                        <li>Meningkatnya akuntabilitas instansi pemerintah.</li>
                    </ol>
                    <a href="" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal4" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>
  
    <div id="staticModal5" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM V
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program V
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya kepatuhan terhadap pengelolaan keuangan negara;</li>
                        <li>Meningkatnya efektivitas pengelolaan keuangan negara;</li>
                        <li>Meningkatnya status opini BPK terhadap pengelolaan keuangan negara; dan</li>
                        <li>Menurunnya tingkat penyalahgunaan wewenang.</li>
                    </ol>
                    <a href="https://drive.google.com/drive/folders/17KxTzMQwbOx-mewniQM6jfd5vxaP1v_A" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal5" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="staticModal6" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full md:w-3/4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-900">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        PROGRAM VI
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-2">
                    <p class="text-lg leading-relaxed text-gray-300 font-semibold">
                        Target Capaian Program I
                    </p>
                    <ol class="list-decimal ml-6 leading-relaxed text-lg text-gray-300">
                        <li>Meningkatnya kualitas pelayanan publik (lebih cepat, murah, aman, dan mudah dijangkau);</li>
                        <li>Meningkatnya jumlah unit pelayanan yang memperoleh standardisasi pelayanan internasional pada instansi pemerintah; dan</li>
                        <li>Meningkatnya indeks kepuasan masyarakat terhadap penyelenggaraan pelayanan publik oleh masing-masing instansi pemerintah.</li>
                    </ol>
                    <a href="https://drive.google.com/drive/folders/1hccDKof7CI6FYq5WjKRJojkzcdsv5u4x" target="blank"><img src="{{URL::to('/')}}/media/zi/btn.png" alt="btn" class="mx-auto w-96 animate-pulse p-5"></a>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                    <button data-modal-hide="staticModal6" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
<script src="{{ asset('assets/js/dt.js') }}"></script>
<script>
$.ajax({
    type: "POST",
    url: "https://epzi-ws.polri.go.id/api/auth",
    data: JSON.stringify({"username":"polreslandak","password":"polri123","rememberMe":false}),
    processData : false,
    contentType : 'application/json',
    success: function (response) {
        if(response.data.token != null){
            $.ajax({
                type: "GET",
                url: "https://epzi-ws.polri.go.id/api/dashboard/survey?satkerId=922&flat=false&isDefault=true",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer '+response.data.token);
                },
                success: function (response2) {
                    console.log('umum',response2);
                    $.ajax({
                            type: "GET",
                            url: "https://epzi-ws.polri.go.id/api/dashboard/survey?satkerId=922&flat=false&surveyId=62",
                            beforeSend: function (xhr) {
                                xhr.setRequestHeader('Authorization', 'Bearer '+response.data.token);
                            },
                            success: function (response4) {
                        console.log('umum3',response4);
                                
                            }
                        });
                }
            });
        }
       
    }
});
</script>
@endsection
