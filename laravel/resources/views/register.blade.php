@extends('layout/master')
@section('content')

    <section class="pt-2 flex flex-col px-2 gap-2">
        <div class="bg-gray-800 p-2 flex flex-col rounded-md">
            <img src="{{ URL::to('/') }}/assets/img/tik.png" class="w-20 mx-auto" alt="Flowbite Logo" />
            <p class="text-lg text-white font-bold text-center">
                FORM REGISTRASI PERSONIL POLRES LANDAK
            </p>
            <form action="/register/add" enctype="multipart/form-data" method="post" id="form" autocomplete="off">
            @csrf

            <p class="text-base text-gray-300 py-1 uppercase">Nama Lengkap<span class="text-red-500">*</span></p>
            <input type="text" id="nama" name="nama" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>

            <p class="text-base text-gray-300 py-1">Pangkat<span class="text-red-500">*</span></p>
            <select id="pangkat" name="pangkat" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
                <option value="" selected>--</option>
                @foreach ($pangkat as $p)
                    <option value="<?= $p->short ?>"><?= $p->short ?></option>
                @endforeach
            </select>

            <p class="text-base text-gray-300 py-1">NRP/NIP<span class="text-red-500">*</span></p>
            <input type="text" id="nrp" name="nrp" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>

            <p class="text-base text-gray-300 py-1">Tanggal Lahir<span class="text-red-500">*</span></p>
            <div class="flex flex-row gap-2">
                <select class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-1/6" id="tanggal" name="tanggal" required>
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
                <select class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-3/6" id="bulan" name="bulan" required>
                    <option value="" selected>--</option>
                    <option value="01">JANUARI</option>
                    <option value="02">FEBRUARI</option>
                    <option value="03">MARET</option>
                    <option value="04">APRIL</option>
                    <option value="05">MEI</option>
                    <option value="06">JUNI</option>
                    <option value="07">JULI</option>
                    <option value="08">AGUSTUS</option>
                    <option value="09">SEPTEMBER</option>
                    <option value="10">OKTOBER</option>
                    <option value="11">NOVEMBER</option>
                    <option value="12">DESEMBER</option>
                </select>
                <input type="text" id="tahun" name="tahun" placeholder="TAHUN" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-2/6" required>
            </div>
            <p class="text-base text-gray-300 py-1">Satker<span class="text-red-500">*</span></p>
            <select id="satker" name="satker" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
                <option value="" selected>--</option>
                @foreach ($satker as $s)
                    <option value="<?= $s->satker ?>"><?= $s->satker ?></option>
                @endforeach
            </select>
            
            <p class="text-base text-gray-300 py-1">Satfung<span class="text-red-500">*</span></p>
            <select id="satfung" name="satfung" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
                <option value="" selected>--</option>

                <optgroup label="Tingkat Polres" class="polres"></optgroup>
                @foreach ($fpolres as $f)
                    <option value="<?= $f->satfung ?>" class="polres"><?= $f->satfung ?></option>
                @endforeach

                <optgroup label="Tingkat Polsek" class="polsek"></optgroup>
                @foreach ($fpolsek as $f)
                    <option value="<?= $f->satfung ?>" class="polsek"><?= $f->satfung ?></option>
                @endforeach

                <optgroup label="Tingkat Polsubsektor" class="polsub"></optgroup>
                @foreach ($fpolsubsektor as $f)
                    <option value="<?= $f->satfung ?>" class="polsub"><?= $f->satfung ?></option>
                @endforeach
            </select>
            
            <p class="text-base text-gray-300 py-1">Jabatan<span class="text-red-500">*</span></p>
            <select id="jabatan" name="jabatan" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg" required>
                <option value="" selected>--</option>

                <optgroup label="Tingkat Polres" class="polres"></optgroup>
                @foreach ($jpolres as $f)
                    <option value="<?= $f->jabatan ?>" class="polres"><?= $f->jabatan ?></option>
                @endforeach

                <optgroup label="Tingkat Polsek" class="polsek"></optgroup>
                @foreach ($jpolsek as $f)
                    <option value="<?= $f->jabatan ?>" class="polsek"><?= $f->jabatan ?></option>
                @endforeach

                <optgroup label="Tingkat Polsubsektor" class="polsub"></optgroup>
                @foreach ($jpolsubsektor as $f)
                    <option value="<?= $f->jabatan ?>" class="polsub"><?= $f->jabatan ?></option>
                @endforeach
            </select>
            
            <p class="text-base text-gray-300 py-1">Foto<span class="text-red-500">*</span></p>
            <div class="flex items-center justify-center w-full">
                <label for="file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer hover:bg-bray-800 bg-gray-700 border-gray-600 hover:border-gray-500 hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6" id="fotoform">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-400"><span class="font-semibold">Pilih Foto</span></p>
                        <p class="text-xs text-gray-400">Hanya File Gambar (*jpg, *jpeg, *png) <b>Max 5 Mb</b></p>
                    </div>
                    <input id="file" name="file" type="file" class="hidden" accept="image/*" onchange="onFileUpload(this)" required/>
                </label>
            </div> 

            <p class="text-base text-gray-300 py-1">Nomor Whatsapp<span class="text-red-500">* (Wajib Aktif)</span></p>
            <input type="text" id="wa" name="wa" class="p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg w-full" required>
            <button type="submit" class="p-3 my-4 mx-2 rounded-md text-white bg-blue-600 font-bold">KIRIM!</button>
            </form>
        </div>
    </section>


@endsection

@section('script')

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script src="{{ asset('assets/js/sw.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#satfung').prop('disabled', true);
        $('#jabatan').prop('disabled', true);
    });
    $('#satker').change(function (e) { 
        e.preventDefault();
        $('#satfung').prop('disabled', false);
        $('#jabatan').prop('disabled', false);
        var a = $('#satker').val();
        if (a.indexOf('POLRES') > -1) {
            $('.polsek').hide();
            $('.polsub').hide();
            $('.polres').show();
        }else if(a.indexOf('POLSEK') > -1){
            $('.polres').hide();
            $('.polsub').hide();
            $('.polsek').show();
        }else if(a.indexOf('POLSUB') > -1){
            $('.polsek').hide();
            $('.polres').hide();
            $('.polsub').show();
        }else{
            $('.polsek').hide();
            $('.polres').hide();
            $('.polsub').hide();
            $('#satfung').prop('disabled', true);
            $('#jabatan').prop('disabled', true);
        }
    });

    function onFileUpload(input, id) {
            id = id || '#fotoform';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    // $(id).attr('src', e.target.result).width(300)
                    $(id).html('<img src="'+e.target.result+'" alt="" width="160px" style="height:240px">');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    $('#form').submit(function (e) { 
        e.preventDefault();
        Swal.fire({
            title: 'Memproses Data...',
            allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()}
        })

        $.ajax({
            type: "POST",
            url: "/register/add",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function(response) {                
                if (response.msg == 'ok') {
                    Swal.fire({
                        title: 'Sukses',
                        text: 'BERHASIL MENDAFTAR!',
                        icon: 'success'
                    }).then(() => {
                        window.location.replace('/')
                    })
                } else {
                    Swal.fire({
                        title: 'GAGAL MENDAFTAR!',
                        text: response.msg,
                        icon: 'error'
                    }).then(() => {
                        Swal.close();
                    })
                }
            }
        });
    });
</script>
@endsection
