<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="fb:app_id" content="342797811136983" />
    <title>VALIDASI E-PUSTAKA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBBM">
    <meta name="keywords" content="polri, polisi, landak, kalimantan barat, polres, polres landak, polda kalbar">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="id">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="CREATODIDAK.ID">

        <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="ADMIN FAQ ZI POLRES LANDAK">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url('/') }}/assets/img/og.jpg">
    <meta property="og:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
    <meta property="og:site_name" content="POLRES LANDAK PRESISI">
    <meta property="og:locale" content="id_ID">

        <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ADMIN FAQ ZI POLRES LANDAK">
    <meta name="twitter:description"
            content="Selamat Datang Di Website Kepolisian Resor Landak, Polda Kalimantan Barat | POLRES LANDAK #SIAP MENUJU WBK DAN WBB">
    <meta name="twitter:image" content="{{ url('/') }}/assets/img/og.jpg">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/assets/img/tik.png">
</head>
<body class="bg-gray-900 h-screen flex justify-center items-center">

  

  

@forelse ($data as $d)
<div class="w-full max-w-lg mx-auto">
    <div class="rounded-lg shadow-lg p-12 text-xs mt-8 mx-4 sm:mx-0 bg-gray-300">
      <div>
        <div class="flex flex-col">
            <svg aria-hidden="true" fill="currentColor" class="w-24 h-24 animate-bounce mx-auto text-green-400" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z"></path>
              </svg>
          <h1 class="text-gray-800 text-2xl text-center font-bold mb-2">DOKUMEN TERDAFTAR</h1>
        </div>
        <hr class="my-4">
        <div>
          <div class="flex justify-between items-center">
            <span class="font-medium text-base mb-2"><b>Nomor Dokumen:</b><br><?= $d->nomor ?></span>
          </div>
          <div class="flex justify-between items-center">
            <span class="font-medium text-base mb-2"><b>Tanggal Dokumen:</b><br><?= $d->tanggak ?></span>
          </div>
          <div class="flex justify-between items-center">
            <span class="font-medium text-base mb-2"><b>Tentang:</b><br><?= $d->tentang ?></span>
          </div>
          <div class="flex justify-between items-center">
            <span class="font-bold text-blue-600 text-base"><a href="{{URL::to('/')}}<?= $d->file ?>" target="_blank" rel="noopener noreferrer">DOWNLOAD FILE</a></span>
          </div>
          <hr class="my-4">
          <div class="flex justify-between items-center">
            <span class="text-base text-center font-medium">Silahkan Bandingkan Isi Dokumen Yang Anda Miliki Dengan Dengan Data Yang Kami Berikan.<br>Apabila Terdapat Perbedaan Silahkan Abaikan Dolkumen Tersebut Karena Tidak Dapat Dipastikan Keabsahannya</span>
          </div>
        </div>
      </div>
    </div>
</div>
@empty
<div class="w-full max-w-lg mx-auto">
    <div class="rounded-lg shadow-lg p-12 text-xs mt-8 mx-4 sm:mx-0 bg-gray-300">
      <div>
        <div class="flex flex-col">
            <svg aria-hidden="true" fill="currentColor" class="w-24 h-24 animate-bounce mx-auto text-red-700" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.73 5.25h1.035A7.465 7.465 0 0118 9.375a7.465 7.465 0 01-1.235 4.125h-.148c-.806 0-1.534.446-2.031 1.08a9.04 9.04 0 01-2.861 2.4c-.723.384-1.35.956-1.653 1.715a4.498 4.498 0 00-.322 1.672V21a.75.75 0 01-.75.75 2.25 2.25 0 01-2.25-2.25c0-1.152.26-2.243.723-3.218C7.74 15.724 7.366 15 6.748 15H3.622c-1.026 0-1.945-.694-2.054-1.715A12.134 12.134 0 011.5 12c0-2.848.992-5.464 2.649-7.521.388-.482.987-.729 1.605-.729H9.77a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23zM21.669 13.773c.536-1.362.831-2.845.831-4.398 0-1.22-.182-2.398-.52-3.507-.26-.85-1.084-1.368-1.973-1.368H19.1c-.445 0-.72.498-.523.898.591 1.2.924 2.55.924 3.977a8.959 8.959 0 01-1.302 4.666c-.245.403.028.959.5.959h1.053c.832 0 1.612-.453 1.918-1.227z"></path>
              </svg>
          <h1 class="text-gray-800 text-2xl text-center font-bold mb-2">TIDAK TERDAFTAR</h1>
        </div>
        <hr class="my-4">
        <div>
            <img src="https://www.pngall.com/wp-content/uploads/8/Wrong-Logo-PNG.png" alt="invalid">
          <hr class="my-4">
          <div class="flex justify-between items-center">
            <span class="text-base text-center font-medium">Silahkan Hapus Dokumen Tersebut, Karena Tidak Terdaftar di Database Sehingga Keabsahannya Tidak Dapat Di Pertanggung Jawabkan!</span>
          </div>
        </div>
      </div>
    </div>
</div>
@endforelse
</body>
</html>