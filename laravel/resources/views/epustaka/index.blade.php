@extends('layout/master')

@section('content')
<section class="flex flex-col">
    
    <div class="bg-gray-700 text-white p-2 m-1 md:px-40 md:mx-5 md:mt-5 text-justify rounded-lg">
        <img src="{{ URL::to('/') }}/media/epustaka/banner.webp" alt="" class="w-full">
        <p>E-Pustaka Merupakan Salah Satu Inovasi Polres Landak Dalam Bidang Administrasi, Guna Memodernisasi Pengarsipan Dokumen - Dokumen Polres Landak.</p>

        <p>Dengan Hadirnya E-Pustaka Diharapkan Dapat Mempermudah Akses Data Dokumen Dan Membantu Masyarakat Untuk Memvalidasi Apakah Dokumen Yang Didapat Adalah Dokumen Yang Benar - Benar Direlease Oleh Kepolisian Resor Landak. Berdasarkan Prinsip - Prinsip Keterbukaan Informasi Publik, Kami Memberikan Akses Seluas-Luasnya Kepada Masyarakat Untuk Mengakses Data Kami. Kami Juga Menyediakan Fitur Qr-Code Yang Dapat Di Scan Untuk Memvalidasi Keabsahan Atas Dokumen Polres Landak Yang Beredar Di Masyarakat</p>

    </div>
    <div class="bg-gray-800 m-2 p-1 md:m-5 md:p-5 md:text-base rounded-lg flex flex-col items-center justify-center">
        <span class="md:text-xl font-bold text-white text-center">CARI DOKUMEN</span>
        <div class="flex flex-col md:flex-row w-full">
            <form id="searchdata" class="flex flex-col md:flex-row w-full">
                @csrf
                <select id="satker" name="satker" class="md:w-full p-2 md:mr-1 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg mt-2" autocomplete="off" required>
                    <option value="" selected>SATKER</option>
                    @foreach ($satker as $s)
                        <option value="<?= $s->satker ?>"><?= $s->satker ?></option>
                    @endforeach
                </select>
                
                <select id="satfung" name="satfung" class="md:w-full p-2 md:ml-1 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg mt-2" autocomplete="off" required>
                    <option value="" selected>SATFUNG</option>
            
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
            </form>
        </div>
        <button class="bg-blue-700 text-white m-2 w-full rounded-lg p-3" id="cari">CARI</button>

        <div class="bg-gray-700 w-full hidden" id="conthasil">
            <p class="text-left m-5 font-bold text-white text-xl">
                ...Menampilkan <span id="jumlah"></span> Dokumen
            </p>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4" id="hasil">
                
            </div>
        </div>
    </div>
</section>
@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('#satfung').prop('disabled', true);
        $('#cari').prop('disabled', true);
    });
    $('#satker').change(function (e) { 
        e.preventDefault();
        $('#satfung').prop('disabled', false);
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
        }
    });
    $('#satfung').change(function (e) { 
        e.preventDefault();
        $('#cari').prop('disabled', false);
    });

    $('#cari').click(function (e) { 
        e.preventDefault();
        var satker = $('#satker').val();
        var satfung = $('#satfung').val();

        $('#conthasil').removeClass('hidden');

        $.ajax({
            type: "POST",
            url: "/epustaka/search",
            data: $('#searchdata').serialize(),
            dataType: "json",
            success: function (response) {
                $('#jumlah').html(parseInt(response.length));
                $('#hasil').empty();
                if(response.length != 0){
                    for (let i = 0; i < response.length; i++) {
                        $('#hasil').append('<div onclick="download(&apos;'+response[i].file+'&apos;)" class="w-full rounded-lg p-1 md:p-5 text-white"><div class="p-3 cursor-pointer hover:scale-105"><div class="bg-gray-500 rounded-t-lg p-3"><img src="{{URL::to('/')}}/media/epustaka/pdf.png" class="w-24 mx-auto" alt=""></div><div class="bg-gray-400 p-3 rounded-b-lg shadow-lg shadow-gray-900/60"><p class="text-gray-900 font-bold text-sm">'+response[i].type.toUpperCase()+' Nomor '+response[i].nomor+' Tanggal '+response[i].tanggal+' Tentang '+response[i].tentang+'</p></div></div></div>');    
                    }
                }
            }
        });
    });

    function download(url) {
        var host = "{{URL::to('/')}}";
        window.open(host+url, '_blank').focus();
    }

</script>
@endsection