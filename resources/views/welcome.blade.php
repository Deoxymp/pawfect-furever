<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col justify-center items-center gap-[60px] bg-backgroundColor">
  <nav class="flex w-full justify-between items-center px-[60px]">
    <img src="{{ asset('images/Logo.png') }}">
    <ul class="flex text-black font-Header font-medium gap-10">
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">Home</li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">About</li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">Services</li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">Testimoni</li>
    </ul>
    <button class="flex text-white font-Quicksand text-Header4 font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Cek Reservasi
    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
    </button>
  </nav>
  <div id="content" class="flex flex-col gap-10 justify-center items-center pb-10">
    <section id="Home" class="flex flex-col items-center gap-4 px-[120px] w-full">
      <h1 class="text-textTittle font-Quicksand font-bold text-heroTittle/Bold text-center">Anabul Cantik dan Sehat
        Setiap Hari</h1>
      <div class="flex w-full justify-between items-center">
        <p class="text-textTittle text-Header3 font-bold font-raleway w-full">Perawatan Terbaik untuk Kebahagiaan Hewan
          Peliharaan Anda.</p>
        <img src="{{ asset('images/Frame 13.png') }}">
        <button class="flex bg-Orange/70 gap-2 px-10 py-4 rounded-2xl text-white font-Quicksand text-Header4 font-bold items-center">Reservasi
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white"
            class="icon icon-tabler icons-tabler-filled icon-tabler-paw">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path
              d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" />
            <path
              d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" />
            <path
              d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" />
            <path
              d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" />
            <path
              d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" />
          </svg>
        </button>
      </div>
    </section>
    <section id="information" class="flex flex-col justify-center items-center w-full px-[120px]">
      <div class="flex w-full -mb-[110px] z-10 justify-between items-center">
        <div></div>
        <div></div>
        <img src="{{ asset('images/2cat.png') }}">
        <img src="{{ asset('images/cat track.png') }}" class="mt-[100px]">
      </div>
      <div
        class="flex h-fit w-full max-w-[1266px] bg-Orange/70 px-[120px] py-5 rounded-[20px] justify-center items-center gap-10">
        <div class="flex flex-col gap-4">
          <h2 class="text-white font-raleway text-Header2 font-bold">Jangan khawatir saat anda sibuk</h2>
          <p class="text-white font-raleway text-Large font-medium">Ketika Anda sibuk atau sedang bepergian, kami
            menawarkan tempat yang aman untuk sahabat berbulu Anda. Dengan fasilitas premium dan layanan pribadi, kami
            memastikan setiap hari mereka dipenuhi dengan perhatian, kenyamanan, dan kesenangan.</p>
        </div>
        <div class="h-[131px] bg-white w-[5px]"> </div>
        <h2 class="text-white font-Quicksand text-Header2 font-bold">20k/Malam</h2>
      </div>
    </section>
    <section id="About" class="flex gap-10 px-[120px] w-full justify-center items-center">
      <div class="flex flex-col items-center gap-5">
        <h1 class="text-textTittle text-Header1 font-Quicksand font-bold text-heroTittle w-full">Tempat Perawatan Terbaik untuk
          Sahabat Berbulu Anda</h1>
        <p class="text-textParagraph font-raleway font-medium text-Header4 text-justify">Selamat datang di Pawfect
          Furever! Didirikan pada tahun 2024, kami hadir dengan semangat dan dedikasi untuk memberikan perawatan terbaik
          bagi hewan peliharaan Anda. Dengan tim profesional yang berpengalaman, kami menawarkan layanan grooming yang
          tidak hanya membuat penampilan hewan kesayangan Anda menjadi lebih indah, tetapi juga memastikan kesehatan dan
          kebahagiaannya. Ayo, jadikan momen grooming sebagai pengalaman yang menyenangkan bagi hewan peliharaan Anda
          bersama kami!</p>
      </div>
      <img src="{{ asset('images/Frame 84.png') }}">
    </section>
    
    <section id="Service" class="flex flex-col gap-10 px-[120px] justify-center items-center">
      <h1 class="text-textTittle font-Quicksand text-Header1 font-bold">Pelayanan Kami</h1>
      <div class="flex gap-10">
        <div class="flex flex-col gap-10">
          <div class="flex bg-gray-300 justify-center items-center rounded-[40px] w-[580px] h-[331px]">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" /></svg>
          </div>
          <div class="flex flex-col gap-5">
            <p class="text-textParagraph font-raleway text-Large font-medium">Pawfect Furever berdiri dari cinta dan dedikasi terhadap hewan peliharaan, membawa layanan grooming berkualitas tinggi untuk memastikan setiap hewan merasa sempurna dan dicintai, selamanya</p>
            <button class="bg-Orange/70 px-4 py-4 rounded-[16px] justify-center items-center text-white font-Quicksand text-Base font-bold w-fit">Baca Selengkapnya</button>
          </div>
        </div>
        <div class="">
          <div>

          </div>
        </div>
      </div>
    </section>
  </div>
  <footer id="footer" class="flex flex-col bg-footerColor w-full justify-center items-center gap-10 py-5 rounded-t-[40px]">
        <div class="flex gap-[80px] w-[1183px]">
            <div class="flex flex-col gap-5 w-full">
                <div class="flex flex-col gap-4">
                    <p class="text-black font-Quicksand text-Header4 font-bold">Whatsapp</p>
                    <p class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>    
                    +62812123456789</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-black font-Quicksand text-Header4 font-bold">Email</p>
                    <p class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-gmail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" /><path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" /><path d="M16 4l-4 4l-4 -4" /><path d="M4 6.5l8 7.5l8 -7.5" /></svg>
                    pawfectfurever@gmail.com</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 justify-center items-center w-full">
                <img src="{{ asset('images/Logo.png') }}" class="w-[100px] h-[100px]">
                <p class="text-black font-Quicksand text-Header4 font-semibold">Pawfect Furever</p>
                <div class="flex gap-5">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                </div>
            </div>
            <ul class="flex flex-col text-black font-Quicksand text-Header4 font-semibold gap-3 justify-center items-center w-full">pages
                <li class="text-black font-Quicksand text-Header4 font-medium">Home</li>
                <li class="text-black font-Quicksand text-Header4 font-medium">About</li>
                <li class="text-black font-Quicksand text-Header4 font-medium">Service</li>
                <li class="text-black font-Quicksand text-Header4 font-medium">Testimoni</li>
                <li class="text-black font-Quicksand text-Header4 font-medium">Cek Reservasi</li>
            </ul>
        </div>
        <div class="flex h-[2px] w-[1238px] bg-black opacity-50"> </div>
        <p class="text-black opacity-70 font-Quicksand text-Large font-medium">pawfect furever © 2024 All Right Reserved</p>
  </footer>
</body>
</html>