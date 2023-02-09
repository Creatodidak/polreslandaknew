<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VALIDASI BACKEND</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-900">
    <div class="h-screen w-screen justify-center items-center flex">
        <div class="rounded-lg bg-gray-200 flex flex-col p-5 text-gray-700 gap-2">
            <img src="{{ URL::to('/') }}/assets/img/tik.png" class="w-20 mx-auto" alt="Flowbite Logo" />
            <p class="text-2xl font-bold text-center">MASUKAN KODE OTP</p>

            
            <form action="/backend/cekotp" method="post">
                @csrf
            <input type="text" name="otp" id="otp" class="p-2 mx-auto w-full text-white font-bold bg-gray-700 rounded-lg text-center" placeholder="XXXXXX" required>
            <button class="block py-2 mx-auto mt-3 pr-4 pl-3 text-white rounded bg-blue-700" type="submit">VALIDASI</button>
            </form>

            <p class="text-gray-800 font-semibold text-base text-center">Tidak menerima OTP?<br><span id="req"></span></p>
        </div>
    </div>
</body>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/cookie.js') }}"></script>
<script src="https://kit.fontawesome.com/b9de9ce998.js" crossorigin="anonymous"></script>
<script>
    var timeleft = 10;
    var nrp = <?= request()->session()->get('nrp');?>;
    var wa = <?= request()->session()->get('wa');?>;
    var otp = <?= request()->session()->get('otp');?>;
    
    var downloadTimer = setInterval(function(){
                                        if(timeleft <= 0){
                                            clearInterval(downloadTimer);
                                            $('#req').html("<span class='text-primary' style='cursor:pointer' onclick='kirimulang()'><b>KIRIM ULANG OTP</b></span>")
                                        } else {
                                            $('#req').html("Kirim Ulang Dalam <b>"+timeleft +" Detik</b>");
                                        }
                                    timeleft -= 1;
                                    }, 1000);
            
    function kirimulang(){
        $.ajax({
            type: "POST",
            url: "https://server.wa-bisnis.com/send-message",
            data: {api_key: '9u5OizNhKkJCr37qLH6VoKmxqu00wR', sender:'628115664145', number:'0'+wa , message:'KODE OTP ANDA ADALAH [ *'+otp+'* ] \n\n\n KODE INI HANYA BERLAKU SELAMA 60 MENIT'},
            dataType: "jsonp",
            cors: true ,
            contentType:'application/json',
            secure: true,
            headers: {'Access-Control-Allow-Origin': '*',},
            beforeSend: function (xhr) {xhr.setRequestHeader ("Authorization", "Basic " + btoa(""));},
            success: function (response) {
                var downloadTimer = setInterval(function(){
                    if(timeleft <= 0){
                        clearInterval(downloadTimer);
                        $('#req').html("<span class='text-primary' style='cursor:pointer' onclick='kirimulang()'><b>KIRIM ULANG OTP</b></span>")
                    } else {
                        $('#req').html("Kirim Ulang Dalam <b>"+timeleft +" Detik</b>");
                    }
                timeleft -= 1;
                }, 1000);
            }
        });
    }

 

</script>
</html>