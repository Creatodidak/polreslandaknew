@extends('layout/master')

@section('content')
<section class="flex flex-col">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/assets/img/antipungli.webp" alt="" class="w-full">
    </div>
    <div class="bg-gray-700 p-5 m-5 rounded-lg flex-col">
        <p class="text-base text-gray-300 py-1">PILIH JENIS PELAYANAN<span class="text-red-500">*</span></p>
        <select id="pelayanan" name="pelayanan" class="w-full p-2 rounded-md bg-gray-700 text-white border-2 border-blue-400 text-lg auto" autocomplete="off" required>
            <option value="" selected>--</option>
            <option value="spkt">SPKT</option>
            <option value="sim">SATPAS</option>
            <option value="skck">SKCK</option>
            <option value="identifikasi">IDENTIFIKASI</option>
        </select>
        
        <div id="tables" class="relative overflow-x-auto rounded-lg mt-2 md:m-5">
            <table class="w-full text-sm text-left text-gray-200">
                <thead class="text-xs uppercase bg-gray-900 text-gray-200">
                    <tr class="text-center">
                        <th scope="col" class="px-6 py-3" width="4%">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3" width="96%">
                            Pertanyaan
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody" class="bg-gray-800">
                    <tr>
                        <td class="p-2 text-center" colspan="2">SILAHKAN PILIH JENIS PELAYANAN TERLEBIH DAHULU</td>
                    </tr>
                </tbody>
                
            </table>
        </div>

    </div>
</section>
@endsection


@section('script')
<script>
    $('#pelayanan').change(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/faqdata/"+this.value,
            dataType: "json",
            success: function (response) {
                if(response.length != 0){
                    $('#tbody').empty();                    
                    for (let i = 0; i < response.length; i++) {
                        $('#tbody').append('<tr><td class="px-2 text-center align-top text-lg" width="4%">'+Math.floor(i+1)+'</td><td class="px-2 text-justify" width="96%"><span class="text-white font-bold text-lg">'+response[i].pertanyaan+'</span><br><span class="text-white">'+response[i].jawaban+'<br><br></span></span></td></tr>');
                    }
                }else{
                    $('#tbody').empty();                    
                    $('#tbody').append('<td class="p-2 text-center" colspan="2">DATA TIDAK DITEMUKAN</td>');
                }
            }
        });
    });
</script>
@endsection