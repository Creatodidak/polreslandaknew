<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN BACKEND</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-900">
    <div class="h-screen w-screen justify-center items-center flex">
        <div class="rounded-lg bg-gray-200 flex flex-col p-5 text-gray-700 gap-2">
            <img src="{{ URL::to('/') }}/assets/img/tik.png" class="w-20 mx-auto" alt="Flowbite Logo" />
            <p class="text-2xl font-bold text-center">LOGIN DASHBOARD</p>
            <?php if(request()->session()->get('error') != null){?>
                <div id="alert-2"
                class="flex p-4 mb-4 rounded-lg bg-gray-800 text-red-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" 
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    <?= request()->session()->get('error') ?>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex h-8 w-8 bg-gray-800 text-red-400 hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <?php } ?>
            <form action="backend/getotp" method="post" class="flex flex-col">
            @csrf
            <input type="text" name="nrp" id="nrp" class="p-2 mx-auto mb-2 w-full text-white font-bold bg-gray-700 rounded-lg text-center" placeholder="NRP" autocomplete="off" required>
            <input type="password" name="password" id="password" class="p-2 mb-2 mx-auto w-full text-white font-bold bg-gray-700 rounded-lg text-center" autocomplete="off" placeholder="PASSWORD" required>
            <button type="submit" class="block py-2 mx-auto mt-3 pr-4 pl-3 text-white rounded bg-blue-700" id="login">LOGIN</button>
            </form>
        </div>
    </div>
</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/cookie.js') }}"></script>
<script src="https://kit.fontawesome.com/b9de9ce998.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/sw.js') }}"></script>

<script>
    // $('#login').click(function (e) { 
    //     e.preventDefault();
    //     Swal.fire({
    //         title: 'Menghubungi Server OTP...',
    //         allowOutsideClick: false,
    //                 didOpen: () => {
    //                     Swal.showLoading()}
    //     })

    //     return true;
    // });

</script>

</html>