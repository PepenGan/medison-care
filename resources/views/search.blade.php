{{-- resources/views/search/prototype.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Medison Care') }} — Prototype Search</title>
  @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
</head>
<body class="antialiased">

@php
  /* ============================
     PROTOTYPE (tanpa DB):
     - Ubah $MOCK_RESULTS ke query DB nanti (Controller atau langsung di view).
     - Sudah ada struktur field standar.
     ============================ */
  $q = request('q', '');

  $MOCK_RESULTS = [
    [
      'id' => 101,
      'name' => 'Paracetamol 500mg Strip',
      'image_url' => 'https://picsum.photos/seed/para/200/200',
      'price_before' => 12000,
      'price' => 9500,
      'unit' => 'Strip',
      'rating' => 4.6,
      'sold_text' => '2.1 RB+ Terjual',
    ],
    [
      'id' => 102,
      'name' => 'Vitamin C 1000mg',
      'image_url' => 'https://picsum.photos/seed/vitc/200/200',
      'price_before' => 25000,
      'price' => 19900,
      'unit' => 'Tablet',
      'rating' => 4.8,
      'sold_text' => '5.3 RB+ Terjual',
    ],
    [
      'id' => 103,
      'name' => 'Obat Batuk Sirup Anak 60ml',
      'image_url' => 'https://picsum.photos/seed/cough/200/200',
      'price_before' => 32000,
      'price' => 28900,
      'unit' => 'Botol',
      'rating' => 4.4,
      'sold_text' => '920+ Terjual',
    ],
    [
      'id' => 104,
      'name' => 'Antiseptik Cair 100ml',
      'image_url' => 'https://picsum.photos/seed/antiseptic/200/200',
      'price_before' => 18000,
      'price' => 15000,
      'unit' => 'Botol',
      'rating' => 4.2,
      'sold_text' => '1.1 RB+ Terjual',
    ],
    [
      'id' => 105,
      'name' => 'Masker Medis 3-Ply (50 pcs)',
      'image_url' => 'https://picsum.photos/seed/mask/200/200',
      'price_before' => 38000,
      'price' => 33000,
      'unit' => 'Box',
      'rating' => 4.7,
      'sold_text' => '8.2 RB+ Terjual',
    ],
    [
      'id' => 106,
      'name' => 'Salep Luka 15g',
      'image_url' => 'https://picsum.photos/seed/ointment/200/200',
      'price_before' => 27000,
      'price' => 22000,
      'unit' => 'Tube',
      'rating' => 4.3,
      'sold_text' => '640+ Terjual',
    ],
    [
      'id' => 107,
      'name' => 'Susu Tinggi Kalori 400g',
      'image_url' => 'https://picsum.photos/seed/milk/200/200',
      'price_before' => 98000,
      'price' => 91500,
      'unit' => 'Kaleng',
      'rating' => 4.5,
      'sold_text' => '3.4 RB+ Terjual',
    ],
  ];

  /* Filter by query (simple contains) – untuk demo saja */
  $filtered = array_values(array_filter($MOCK_RESULTS, function($it) use ($q) {
    if ($q === '') return true;
    return str_contains(strtolower($it['name']), strtolower($q));
  }));

  /* Pagination manual sederhana (tanpa DB) */
  $perPage = 6;
  $page = max(1, (int) request('page', 1));
  $total = count($filtered);
  $lastPage = max(1, (int) ceil($total / $perPage));
  $page = min($page, $lastPage);
  $offset = ($page - 1) * $perPage;
  $results = array_slice($filtered, $offset, $perPage);

  /* Helper URL untuk prev/next */
  $qs = function($overrides = []) use ($q, $page) {
    return http_build_query(array_merge(['q'=>$q,'page'=>$page], $overrides));
  };
@endphp

<div class="aspect-9-16" style="--frame: 520px;">
  <div class="px-4 pb-6">

    {{-- Bar atas: Search + Cart --}}
    <div class="mt-4 flex items-center gap-3">
      <form action="{{ url()->current() }}" method="GET"
            class="flex items-center bg-white rounded-full px-3 py-1.5 w-full flex-1 shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z"/>
        </svg>
        <input name="q" value="{{ $q }}" placeholder="Cari obat, vitamin, dll…"
               class="ml-2 w-full text-gray-700 bg-transparent outline-none placeholder-gray-400 text-sm"/>
      </form>

      <a href="#" aria-label="Buka keranjang"
         class="relative inline-grid place-items-center w-12 h-12 shrink-0 rounded-lg
                [background-size:10px_10px]
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

    {{-- Header hasil & sort (dummy) --}}
    <div class="mt-4 flex items-center justify-between">
      <div class="text-sm text-gray-600">
        Menampilkan <span class="font-semibold text-gray-800">{{ $total }}</span>
        hasil untuk <span class="font-semibold text-gray-800">“{{ $q }}”</span>
      </div>
      <form method="GET" action="{{ url()->current() }}" class="flex items-center gap-2">
        <input type="hidden" name="q" value="{{ $q }}">
        <select name="sort" class="text-sm border rounded-md px-2 py-1 bg-white">
          <option value="">Urutkan</option>
          <option value="popular" @selected(request('sort')==='popular')>Paling Populer</option>
          <option value="price_asc" @selected(request('sort')==='price_asc')>Harga Terendah</option>
          <option value="price_desc" @selected(request('sort')==='price_desc')>Harga Tertinggi</option>
        </select>
      </form>
    </div>

    {{-- EMPTY STATE --}}
    @if($total === 0)
      <div class="mt-8 rounded-xl border bg-white p-6 text-center">
        <div class="mx-auto mb-3 w-12 h-12 grid place-items-center rounded-full bg-gray-100">
          <svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" fill="currentColor"><path d="M21 6H3v12h18V6zM1 4h22v16H1V4zm6 5h10v2H7V9zm0 4h6v2H7v-2z"/></svg>
        </div>
        <p class="text-sm text-gray-700 font-medium">Tidak ada hasil</p>
        <p class="text-xs text-gray-500 mt-1">Coba kata kunci lain atau kurangi filter.</p>
      </div>
    @endif

    {{-- LIST HASIL --}}
    <div class="mt-3 space-y-3">
      @foreach($results as $item)
        <article class="bg-white rounded-xl border shadow-sm hover:shadow transition p-3">
          <div class="flex gap-3">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded-lg overflow-hidden">
              <img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="max-h-24 w-auto object-contain">
            </div>

            <div class="flex-1 min-w-0">
              <h3 class="text-sm font-semibold text-gray-900 line-clamp-2">
                {{ $item['name'] }}
              </h3>

              @if(!empty($item['price_before']) && $item['price_before'] > $item['price'])
                <div class="mt-1 text-[12px] text-red-500 line-through">
                  Rp {{ number_format($item['price_before'],0,',','.') }}
                </div>
              @endif
              <div class="text-green-600 font-extrabold">
                Rp {{ number_format($item['price'],0,',','.') }}
                @if(!empty($item['unit'])) <span class="text-gray-600 font-semibold">/ {{ $item['unit'] }}</span> @endif
              </div>

              <div class="mt-1 flex items-center gap-2 text-[11px] text-gray-500">
                @if(!empty($item['rating']))
                  <span class="inline-flex items-center gap-1">
                    <svg class="w-3.5 h-3.5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118L10.5 13.348a1 1 0 0 0-1.175 0L6.615 16.283c-.784.57-1.838-.197-1.54-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.589-1.81H7.03a1 1 0 0 0 .95-.69l1.07-3.292z"/></svg>
                    {{ number_format($item['rating'],1) }}
                  </span>
                @endif

                @if(!empty($item['sold_text']))
                  <span>{{ $item['sold_text'] }}</span>
                @endif
              </div>

              <div class="mt-2 flex items-center gap-2">
                <a href="#" class="text-sm px-3 py-2 rounded-lg border bg-white hover:bg-gray-50">Detail</a>
                <button class="text-sm px-3 py-2 rounded-lg bg-[#85A35E] text-white hover:brightness-110">
                  Tambah
                </button>
              </div>
            </div>
          </div>
        </article>
      @endforeach
    </div>

    {{-- PAGINATION MANUAL --}}
    @if($total > 0)
      <div class="mt-4 flex items-center justify-between text-sm">
        @php
          $prevDisabled = $page <= 1;
          $nextDisabled = $page >= $lastPage;
        @endphp
        <a href="{{ $prevDisabled ? '#' : (url()->current().'?'. $qs(['page'=>$page-1])) }}"
           class="px-3 py-2 rounded-lg border bg-white hover:bg-gray-50 {{ $prevDisabled ? 'pointer-events-none opacity-50' : '' }}">
          &larr; Sebelumnya
        </a>
        <span class="text-gray-600">Halaman {{ $page }} / {{ $lastPage }}</span>
        <a href="{{ $nextDisabled ? '#' : (url()->current().'?'. $qs(['page'=>$page+1])) }}"
           class="px-3 py-2 rounded-lg border bg-white hover:bg-gray-50 {{ $nextDisabled ? 'pointer-events-none opacity-50' : '' }}">
          Berikutnya &rarr;
        </a>
      </div>
    @endif

  </div>
</div>

</body>
</html>
