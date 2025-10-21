<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>{{ config('app.name', 'Medison Care') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Medison Care') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])

</head>

<body class="antialiased">
  <!-- Frame 9:16 - styling ada di resources/css/style.css -->
  <div class="aspect-9-16" style="--frame: 520px;">

    <!-- Bar atas: Search + Cart (side-by-side) -->
<div class="mt-4 flex items-center gap-3">

  <!-- 🔍 Search bar -->
  <form action="#" method="GET"
        class="flex items-center bg-white rounded-full px-3 py-1.5 w-full flex-1 shadow-sm">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
         stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
    </svg>
    <input type="text" name="search" placeholder="Search..."
           class="ml-2 w-full text-gray-700 bg-transparent outline-none placeholder-gray-400 text-sm" />
  </form>

  <!-- 🛒 Cart badge (klik-able) -->
  <a href="/cart" aria-label="Buka keranjang"
     class="relative inline-grid place-items-center w-12 h-12 shrink-0
            rounded-lg
            bg-[radial-gradient(theme(colors.green.500)_2px,transparent_2px)]
            focus:outline-none focus-visible:ring-2 focus-visible:ring-green-500/70 transition">
    <span class="grid place-items-center size-10 bg-white rounded-full
                 ring-1 ring-black/5 shadow-[0_6px_16px_rgba(0,0,0,0.15)]
                 hover:shadow-[0_8px_20px_rgba(0,0,0,0.18)] transition">
      <svg viewBox="0 0 24 24" class="w-6 h-6 text-green-700 fill-current">
        <path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM3 4h2l3.6 7.59a2 2 0 0 0 1.8 1.16H17a2 2 0 0 0 1.94-1.52l1.38-5.52A1 1 0 0 0 19.35 4H6.21l-.94-2H3z"/>
      </svg>
    </span>
  </a>

</div>




      <!-- 🖼️ Slider Container -->
      <div class="relative w-full overflow-hidden rounded-2xl shadow-2xl mt-4">
        <!-- Tips: jika nanti pakai slider JS, tambahkan width dinamis per slide -->
        <div class="slides flex transition-transform duration-700">
          <img
            src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg"
            class="w-full h-64 md:h-72 object-cover flex-shrink-0"
            alt="Healthcare banner 1"
          >
          <img
            src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg"
            class="w-full h-64 md:h-72 object-cover flex-shrink-0"
            alt="Healthcare banner 2"
          >
          <img
            src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg"
            class="w-full h-64 md:h-72 object-cover flex-shrink-0"
            alt="Healthcare banner 3"
          >
        </div>
      </div>

      <!-- Layanan Terbaik (1 baris, tanpa scroll) -->
<section class="mt-6">
  <h2 class="text-lg font-semibold text-gray-800 mb-3 px-2">Layanan Terbaik</h2>

  <div class="grid grid-cols-4 gap-3">  <!-- 4 kolom pas 1 baris -->
    <!-- item -->
    <a href="#konsultasi" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <img src="/photo/icon-konsultasi.png" alt="Konsultasi Dokter"
           class="w-14 h-14 object-contain drop-shadow">
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center leading-tight uppercase tracking-wide">
        Konsultasi<br>Dokter
      </p>
    </a>

    <a href="#unggah-resep" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <img src="/photo/icon-konsultasi.png" alt="Unggah Resep"
           class="w-14 h-14 object-contain drop-shadow">
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center uppercase tracking-wide">
        Unggah Resep
      </p>
    </a>

    <a href="#vaksin" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <img src="/photo/icon-konsultasi.png" alt="Vaksin Ekspres"
           class="w-14 h-14 object-contain drop-shadow">
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center leading-tight uppercase tracking-wide">
        Vaksin<br>Ekspres
      </p>
    </a>

    <a href="#dokter-rumah" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <img src="/photo/icon-konsultasi.png" alt="Dokter ke Rumah"
           class="w-14 h-14 object-contain drop-shadow">
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center leading-tight uppercase tracking-wide">
        Dokter Ke<br>Rumah
      </p>
    </a>
  </div>

</section>


<!-- Cari Berdasarkan Kategori (1 baris, tanpa scroll) -->
<section class="mt-6">
  <div class="flex justify-between items-center mb-3 px-2">
    <h2 class="text-lg font-semibold text-gray-800">Cari Berdasarkan Kategori</h2>
    <a href="#semua" class="text-sm text-green-600 hover:underline font-medium">lihat semua &gt;</a>
  </div>

  <div class="grid grid-cols-4 gap-3">
    <!-- Item -->
    <a href="#promo" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <div class="relative w-16 h-16 flex items-center justify-center">
        <div class="absolute w-12 h-12 bg-green-100 rounded-full -z-10"></div>
        <img src="/photo/icon-konsultasi.png" alt="Promo" class="w-14 h-14 object-contain drop-shadow">
      </div>
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center uppercase tracking-wide">Promo</p>
    </a>

    <a href="#susu" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <div class="relative w-16 h-16 flex items-center justify-center">
        <div class="absolute w-12 h-12 bg-green-100 rounded-full -z-10"></div>
        <img src="/photo/icon-konsultasi.png" alt="Susu" class="w-14 h-14 object-contain drop-shadow">
      </div>
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center uppercase tracking-wide">Susu</p>
    </a>

    <a href="#vitamin" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <div class="relative w-16 h-16 flex items-center justify-center">
        <div class="absolute w-12 h-12 bg-green-100 rounded-full -z-10"></div>
        <img src="/photo/icon-konsultasi.png" alt="Vitamin" class="w-14 h-14 object-contain drop-shadow">
      </div>
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center uppercase tracking-wide">Vitamin</p>
    </a>

    <a href="#kontrasepsi" class="flex flex-col items-center rounded-lg p-2 hover:bg-white hover:shadow">
      <div class="relative w-16 h-16 flex items-center justify-center">
        <div class="absolute w-12 h-12 bg-green-100 rounded-full -z-10"></div>
        <img src="/photo/icon-konsultasi.png" alt="Kontrasepsi" class="w-14 h-14 object-contain drop-shadow">
      </div>
      <p class="mt-1 text-[10px] font-semibold text-gray-800 text-center uppercase tracking-wide">Kontrasepsi</p>
    </a>
  </div>
</section>


<!-- PROMO -->
<section class="mt-6">
  <div class="flex items-center justify-between mb-3 px-2">
    <h2 class="text-lg font-semibold text-gray-800">Promo</h2>
    <a href="#semua-promo" class="text-sm text-green-600 hover:underline font-medium">lihat semua &gt;</a>
  </div>

  <!-- List horizontal -->
  <div class="overflow-x-auto snap-x snap-mandatory [-ms-overflow-style:none] [scrollbar-width:none] px-1">
    <div class="flex gap-4 min-w-max [ &>* ]:snap-start">

      <!-- CARD -->
      <article class="relative w-56 bg-white rounded-xl border border-green-400 shadow-md hover:shadow-lg transition overflow-hidden">
        <!-- Badge PROMO (centered, attached to top border) -->
        <div class="absolute top-0 left-0 w-full flex justify-center pointer-events-none">
          <span class="inline-block bg-[#C6A252] text-white text-[11px] font-semibold px-3 py-1 rounded-b-md shadow-sm uppercase tracking-wide">
            Promo
          </span>
        </div>

        <!-- Konten: tambah padding-top agar tidak ketimpa badge -->
        <div class="p-3 pt-5">
          <!-- Status dot -->
          <div class="flex items-center gap-2 mb-2">
            <span class="inline-block w-3 h-3 rounded-full bg-lime-500 shadow"></span>
          </div>

          <!-- Gambar -->
          <div class="h-28 flex items-center justify-center mb-2">
            <img src="/photo/obat.webp" alt="Tempra Anggur Sirup 60ml" class="max-h-24 object-contain">
          </div>

          <!-- Judul -->
          <h3 class="text-sm font-semibold text-gray-900 text-center leading-tight uppercase">
            TEMPRA ANGGUR<br>SIRUP 60ML
          </h3>

          <!-- Harga -->
          <div class="mt-2 text-center">
            <div class="text-[12px] text-red-500 line-through">Rp 54.021</div>
            <div class="text-green-600 font-extrabold">
              Rp 49.699,- <span class="text-gray-600 font-semibold">/ Botol</span>
            </div>
            <div class="text-[11px] text-gray-500 mt-1">13.4 RB+ Terjual</div>
          </div>
        </div>
      </article>


      <!-- CARD 2 -->
      <article class="relative w-56 bg-white rounded-xl border border-green-400 shadow-md hover:shadow-lg transition overflow-hidden">
      <!-- Badge PROMO (centered, attached to top border) -->
      <div class="absolute top-0 left-0 w-full flex justify-center pointer-events-none">
        <span class="inline-block bg-[#C6A252] text-white text-[11px] font-semibold px-3 py-1 rounded-b-md shadow-sm uppercase tracking-wide">
          Promo
        </span>
      </div>
        <div class="p-3 pt-5">
          <div class="flex items-center gap-2 mb-2">
            <span class="inline-block w-3 h-3 rounded-full bg-lime-500 shadow"></span>
          </div>
          <div class="h-28 flex items-center justify-center mb-2">
            <img src="/photo/obat.webp" alt="Lacto B Sachet" class="max-h-24 object-contain">
          </div>
          <h3 class="text-sm font-semibold text-gray-900 text-center leading-tight uppercase">
            LACTO B SACHET
          </h3>
          <div class="mt-2 text-center">
            <div class="text-[12px] text-red-500 line-through">Rp 10.450</div>
            <div class="text-green-600 font-extrabold">
              Rp 9.935,- <span class="text-gray-600 font-semibold">/ Pcs</span>
            </div>
            <div class="text-[11px] text-gray-500 mt-1">73.2 RB+ Terjual</div>
          </div>
        </div>
      </article>

      <!-- CARD 3 -->
      <article class="relative w-56 bg-white rounded-xl border border-green-400 shadow-md hover:shadow-lg transition overflow-hidden">
      <!-- Badge PROMO (centered, attached to top border) -->
      <div class="absolute top-0 left-0 w-full flex justify-center pointer-events-none">
        <span class="inline-block bg-[#C6A252] text-white text-[11px] font-semibold px-3 py-1 rounded-b-md shadow-sm uppercase tracking-wide">
          Promo
        </span>
      </div>
        <div class="p-3">
          <div class="flex items-center gap-2 mb-2">
            <span class="inline-block w-3 h-3 rounded-full bg-lime-500 shadow"></span>
          </div>
          <div class="h-28 flex items-center justify-center mb-2">
            <img src="/photo/obat.webp" alt="Tolak Angin Cair Plus Madu 15ml" class="max-h-24 object-contain">
          </div>
          <h3 class="text-sm font-semibold text-gray-900 text-center leading-tight uppercase">
            TOLAK ANGIN CAIR<br>PLUS MADU 15ML
          </h3>
          <div class="mt-2 text-center">
            <div class="text-[12px] text-red-500 line-through">Rp 55.592</div>
            <div class="text-green-600 font-extrabold">
              Rp 52.811,- <span class="text-gray-600 font-semibold">/ Dos</span>
            </div>
            <div class="text-[11px] text-gray-500 mt-1">10 RB+ Terjual</div>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>


      <!-- 🤝 Supported brand -->
      <section class="py-5 bg-white mt-4 rounded-2xl shadow">
        <div class="mx-auto max-w-md">
          <h3 class="mb-5 text-center text-lg font-semibold text-gray-700">Sponsored By</h3>

          <div class="grid grid-cols-3 sm:grid-cols-5 gap-4 place-items-center">
            <div class="sponsor-item text-center">
              <img src="photo/YouTube - Apps on Google Play.jpg" alt="YouTube" width="80" class="mx-auto">
              <p class="mt-1 text-xs text-gray-600">YouTube</p>
            </div>
            <div class="sponsor-item text-center">
              <img src="photo/Google_Favicon_2025.svg-removebg-preview.png" alt="Google" width="80" class="mx-auto">
              <p class="mt-1 text-xs text-gray-600">Google</p>
            </div>
            <div class="sponsor-item text-center">
              <img src="photo/Pin by Leticia Rossi M de Lima on Apps personagens _ App logo, App, Iphone background.jpg" alt="Gmail" width="80" class="mx-auto">
              <p class="mt-1 text-xs text-gray-600">Gmail</p>
            </div>
            <div class="sponsor-item text-center">
              <img src="photo/༄ 🄵🄰🄲🄴🄱🄾🄾🄺 🄸🄲🄾🄽 ༄.jpg" alt="Facebook" width="80" class="mx-auto">
              <p class="mt-1 text-xs text-gray-600">Facebook</p>
            </div>
            <div class="sponsor-item text-center">
              <img src="photo/Download premium png of LinkedIn png social media icon_ 7 JUNE 2021 - BANGKOK, THAILAND about png, transparent png, linkedin in icon, instagram highlight cover, and sticker 3344833.jpg" alt="LinkedIn" width="80" class="mx-auto">
              <p class="mt-1 text-xs text-gray-600">LinkedIn</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ⚙️ Footer -->
      <footer class="bg-[#85A35E] text-white mt-6 rounded-2xl overflow-hidden">
        <div class="px-6 py-8 grid grid-cols-1 md:grid-cols-4 gap-6">

          <!-- Brand -->
          <div>
            <h2 class="text-2xl font-bold text-white">Insyst</h2>
          </div>

          <!-- Navigation -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Navigation</h3>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="hover:text-cyan-200">Test</a></li>
              <li><a href="#" class="hover:text-cyan-200">Career</a></li>
              <li><a href="#" class="hover:text-cyan-200">About Us</a></li>
              <li><a href="#" class="hover:text-cyan-200">Contact Us</a></li>
            </ul>
          </div>

          <!-- Resources -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Resources</h3>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="hover:text-cyan-200">Blogs</a></li>
              <li><a href="#" class="hover:text-cyan-200">News &amp; Update</a></li>
              <li><a href="#" class="hover:text-cyan-200">Career</a></li>
            </ul>
          </div>

          <!-- Stay up to date -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Stay up to date</h3>
            <p class="text-sm mb-4 opacity-90">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </p>
            <form class="flex">
              <input
                type="email"
                placeholder="Your Email Address"
                class="w-full px-3 py-2 text-sm border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-cyan-300 text-gray-900"
              >
              <button type="submit" class="px-4 bg-gradient-to-r from-cyan-400 to-green-400 text-white rounded-r-lg hover:opacity-90 transition">
                Subscribe
              </button>
            </form>
          </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-white/20 py-3 text-center text-xs">
          © 2025 Medison Care. All rights reserved.
        </div>
      </footer>

    </div> <!-- /wrapper -->
  </div> <!-- /aspect-9-16 -->
</body>
</html>
