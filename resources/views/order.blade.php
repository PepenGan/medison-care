<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
</head>
<body>
    <!-- ORDER PAGE -->
<div class="mx-auto w-full max-w-md bg-white rounded-2xl shadow border text-gray-900">

  <!-- Header -->
  <header class="px-4 py-3 border-b text-center">
    <h1 class="font-semibold">Medison</h1>
  </header>

  <main class="px-4">

    <!-- Alamat -->
    <section class="py-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <!-- pin -->
          <svg class="w-5 h-5 text-green-700" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
          </svg>
          <span class="text-sm font-medium">Alamat</span>
        </div>
        <!-- <button class="p-2 -mr-2 text-gray-600">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M9 6l6 6-6 6"/></svg>
        </button> -->
      </div>

      <!-- Alamat (Form) -->
<form action="#" method="POST" class="mt-2 border rounded-md p-3 space-y-3">
  <!-- @csrf -->

  <!-- Baris 1: Nama & Telepon -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
    <div>
      <label class="block text-xs text-gray-600 mb-1">Nama Penerima</label>
      <input type="text" name="receiver_name" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="Nama lengkap">
    </div>
    <div>
      <label class="block text-xs text-gray-600 mb-1">No. HP</label>
      <input type="tel" name="phone" inputmode="numeric" pattern="[0-9\s+()-]*" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="08xx xxxx xxxx">
    </div>
  </div>

  <!-- Baris 2: Alamat Lengkap -->
  <div>
    <label class="block text-xs text-gray-600 mb-1">Alamat Lengkap</label>
    <textarea name="address_line" rows="2" required
              class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
              placeholder="Nama jalan, nomor rumah, RT/RW, blok, patokan"></textarea>
  </div>

  <!-- Baris 3: Kecamatan & Kota/Kabupaten -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
    <div>
      <label class="block text-xs text-gray-600 mb-1">Kecamatan</label>
      <input type="text" name="district" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="Contoh: Cibeunying Kaler">
    </div>
    <div>
      <label class="block text-xs text-gray-600 mb-1">Kota/Kabupaten</label>
      <input type="text" name="city" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="Contoh: Bandung">
    </div>
  </div>

  <!-- Baris 4: Provinsi & Kode Pos -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
    <div>
      <label class="block text-xs text-gray-600 mb-1">Provinsi</label>
      <input type="text" name="province" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="Contoh: Jawa Barat">
    </div>
    <div>
      <label class="block text-xs text-gray-600 mb-1">Kode Pos</label>
      <input type="text" name="postal_code" inputmode="numeric" pattern="[0-9]*" minlength="5" maxlength="5" required
             class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
             placeholder="40123">
    </div>
  </div>

  <!-- Baris 5: Catatan (opsional) -->
  <div>
    <label class="block text-xs text-gray-600 mb-1">Catatan untuk Kurir (opsional)</label>
    <input type="text" name="note"
           class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600/30 focus:border-green-600"
           placeholder="Contoh: Titip di satpam">
  </div>

  <!-- Aksi -->
  <div class="pt-1 text-right">
    <button type="submit"
            class="inline-flex items-center px-4 h-9 rounded-full bg-[#85A35E] text-white text-sm font-semibold hover:brightness-110">
      Simpan Alamat
    </button>
  </div>
</form>


    <!-- Order -->
    <section class="py-3">
      <div class="flex items-center justify-between mb-2">
        <h2 class="text-sm font-semibold">Order</h2>
        <a href="#" class="text-xs text-gray-600 hover:underline">Add Items</a>
      </div>

      <!-- item -->
      <div class="space-y-4">
        <div class="flex items-start justify-between">
          <div class="text-sm">
            <div class="text-gray-700"><span class="font-semibold">1X</span> &nbsp;Susu Tinggi Kalori</div>
            <div class="pl-6 text-gray-500">SGM Optigrow</div>
            <div class="pl-6 text-gray-500">Dangrow</div>
          </div>
          <div class="text-sm">250.000</div>
        </div>
      </div>
    </section>

    <!-- Detail Pembayaran -->
    <section class="mt-4 border-y">
      <h3 class="px-0 py-3 text-sm font-semibold">Detail Pembayaran</h3>
      <div class="divide-y text-sm">
        <div class="flex items-center justify-between py-2">
          <span class="text-gray-600">Subtotal</span>
          <span>30.000</span>
        </div>
        <div class="flex items-center justify-between py-2">
          <span class="text-gray-600">Biaya Pengiriman</span>
          <span>10.000</span>
        </div>
      </div>
    </section>

    <!-- Metode Pembayaran -->
    <section class="">
      <h3 class="py-3 text-sm font-semibold">Metode Pembayaran</h3>
      <button class="w-full flex items-center justify-between py-3 px-3 border rounded-md">
        <span class="text-sm text-gray-700">Rp. 152.000</span>
        <svg class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="currentColor"><path d="M9 6l6 6-6 6"/></svg>
      </button>
    </section>

  </main>

  <!-- Total + Actions -->
  <section class="mt-4 border-t">
    <div class="px-4 py-3 flex items-center justify-between text-sm">
      <span class="font-medium">Total</span>
      <span class="font-bold">Rp. 40.000</span>
    </div>

    <div class="px-4 pb-4 flex items-center gap-3">
      <a href="#" class="flex-1 inline-flex items-center justify-center h-10 rounded-full bg-gray-100 text-gray-800 text-sm font-medium hover:bg-gray-200">Kembali</a>
      <button class="flex-1 h-10 rounded-full bg-[#85A35E] text-white text-sm font-semibold hover:brightness-110">Pesan Sekarang</button>
    </div>
  </section>

</div>

</body>
</html>