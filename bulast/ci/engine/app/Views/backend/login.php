<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Backend Polres Landak</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Laman Backend Website Polres Landak">
    <meta name="twitter:title" content="BACKEND POLRES LANDAK">
    <meta name="description" content="Laman Backend Website Polres Landak">
    <meta property="og:image" content="../backend/assets/img/tik.png">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="../backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="../backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="../backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="../backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="../backend/assets/img/tik.png">
    <link rel="icon" type="image/png" sizes="500x500" href="../backend/assets/img/tik.png">
    <link rel="stylesheet" href="../backend/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../backend/assets/css/Anek%20Malayalam.css">
    <link rel="stylesheet" href="../backend/assets/css/Nunito.css">
    <link rel="stylesheet" href="../backend/assets/css/sw.css">
</head>

<body class="bg-gradient-primary" style="background: var(--bs-dark);">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center"><img src="../backend/assets/img/tik.png" width="120px" style="padding: 15px;"></div>
                                    <form class="user" id="formlogin">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="nrp" aria-describedby="Masukan NRP anda" placeholder="NRP" name="nrp" required></div>
                                        <div class="mb-3"></div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    </form>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../backend/assets/js/jquery.min.js"></script>
    <script src="../backend/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../backend/assets/js/bs-init.js"></script>
    <script src="../backend/assets/js/theme.js"></script>
    <script src="../backend/assets/js/sw.js"></script>

    <script>
        $('#formlogin').submit(function (e) { 
            e.preventDefault();
            
            var otprand = Math.floor(1000 + Math.random() * 9000);
            var nrp = $('#nrp').val();
            $.ajax({
                type: "get",
                url: "<?= base_url('userapi')?>/"+nrp,
                dataType: "json",
                success: function (response) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('landak/sendotp')?>/"+response.id,
                        data: {otp: otprand},
                        dataType: "json",
                        success: function (response) {
                            if(response.status == 200){
                                $.ajax({
                                    type: "POST",
                                    url: "https://server.wa-bisnis.com/send-message",
                                    data: {api_key: '9u5OizNhKkJCr37qLH6VoKmxqu00wR', sender:'628115664145', number:response.wa , message:'KODE OTP ANDA ADALAH [ *'+otprand+'* ] \n\n\n ❤️TIK POLRES LANDAK'},
                                    dataType: "json",
                                    success: function (response) {
                                        if(response.status == true){
                                            
                                        }                           
                                    }
                                });

                                showotp(response.wa, nrp);
                            }
                        }
                    });
                },
                error: function (){
                    
                }
            });       
        });
        
        function showotp(wa, nrp){
            function replaceRange(s, start, end, substitute) {
            return s.substring(0, start) + substitute + s.substring(end);
            }

            Swal.fire({
                title: 'Masukan Kode OTP',
                html: 'kami telah mengirimkan kode OTP <br>ke Nomor Whatsapp Anda <b>'+replaceRange(wa, 2, 8, "******")+'</b>!<br><input type="text" id="otp" class="swal2-input" placeholder="Masukan Kode OTP">',
                allowOutsideClick: false,
                allowEscapeKey: false,
                footer: 'Tidak Menerima Kode OTP?&nbsp;<span id="re"></span>',
                confirmButtonText: 'Validasi',
                preConfirm: () => {
                    const otp = Swal.getPopup().querySelector('#otp').value
                    if (!otp) {
                    Swal.showValidationMessage('Masukan Kode OTP!')
                    }
                    return { otp: otp}
                }
            }).then((result) => {
                    $.ajax({
                        type: "GET",
                        url: "<?= base_url('userapi')?>/"+nrp,
                        dataType: "json",
                        success: function (response) {
                            console.log(response);

                            if(response.otp == result.value.otp){
                                window.location.replace('<?= base_url('landak/validasi') ?>/'+nrp)
                            }else{
                                Swal.fire({
                                    title: 'KODE OTP SALAH!',
                                    icon: 'error',
                                    text: 'Silahkan Login Kembali!',
                                    confirmButtonText: 'Login Ulang',
                                    confirmButtonColor: '#ff0000'
                                }).then((result) => {
                                    location.reload();
                                })
                            }
                        }
                    });
                    })

            var timeleft = 60;
            var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                $('#re').html("<span class='text-primary' style='cursor:pointer' onclick='kirimulang("+response.wa+","+otprand+")'><b>KIRIM ULANG OTP</b></span>")
            } else {
                $('#re').html("Kirim Ulang Dalam <b>"+timeleft +" Detik</b>");
            }
            timeleft -= 1;
            }, 1000);
        }
        function kirimulang(wa, otp) {
            $.ajax({
                type: "POST",
                url: "https://server.wa-bisnis.com/send-message",
                data: {api_key: '9u5OizNhKkJCr37qLH6VoKmxqu00wR', sender:'628115664145', number:'0'+wa , message:'KODE OTP ANDA ADALAH [ *'+otp+'* ] \n\n\n ❤️TIK POLRES LANDAK'},
                dataType: "json",
                success: function (response) {
                
                }
            });
        }
    </script>

</body>

</html>