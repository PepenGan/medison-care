<!DOCTYPE html>
<html lang="en" x-data="berandaData()" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])

</head>

<body class="antialiased">
    <div class="aspect-9-16" style="--frame: 520px;">

        {{-- HEADER FIXED --}}
        <div class="fixed top-0 z-50 bg-white pt-4 w-full pr-4 md:pr-16" style="max-width: var(--frame, 100%);">
            {{-- Search Bar --}}
            <div class="flex justify-center mt-3 ml-[50px]  ">
                <form action="#" method="GET"
                    class="hidden md:flex items-center gap-2 bg-[#f9fafb] border border-gray-300 rounded-full px-4 py-1.5 w-full max-w-[380px] shadow-sm focus-within:ring-2 focus-within:ring-gray-200 transition-all duration-300">
                    <!-- Ikon Search -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500">
                        <circle cx="11" cy="11" r="7" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>

                    <!-- Input -->
                    <input type="text" name="search" placeholder="Search anything..."
                        class="flex-1 bg-transparent text-gray-700 placeholder-gray-400 text-[14px] focus:outline-none" />

                    <!-- Tombol -->
                    <button type="submit"
                        class="px-3 py-1 text-sm font-medium text-gray-600 bg-white border border-gray-300 rounded-full hover:bg-gray-100 transition-colors duration-300">
                        Go
                    </button>
                </form>
            </div>

            {{-- Location & History --}}
            <div class="location-history flex justify-around text-center py-4 px-4">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke="#597445" stroke-width="2"
                        fill="none" class="w-6 h-6">
                        <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0116 0Z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    <p class="text-sm">Malang, Jawa Timur</p>
                </div>

                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke="#30a6ea" stroke-width="2"
                        fill="none" class="w-6 h-6">
                        <path d="M3 12a9 9 0 109-9 9.75 9.75 0 00-6.74 2.74L3 8" />
                        <path d="M3 3v5h5" />
                        <path d="M12 7v5l4 2" />
                    </svg>
                    <p class="text-sm">Order History</p>
                </div>
            </div>
        </div>

        {{-- Wrapper --}}
        <div class="p-1">
            <div class="mt-36"></div>

            {{-- Promo Banner --}}
            <div x-data="{ activeSlide: 0, slides: [1,2,3] }" class="w-full mt-4">
                <!-- Banner Container -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <div class="slides flex transition-transform duration-700"
                        :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        <template x-for="(slide, index) in slides" :key="index">
                            <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg"
                                class="w-full h-64 md:h-72 object-cover flex-shrink-0">
                        </template>
                    </div>
                </div>

                <!-- Indicator moved OUTSIDE -->
                <div class="flex justify-center space-x-2 mt-3">
                    <template x-for="(slide, index) in slides" :key="'dot-' + index">
                        <div class="w-6 h-2 rounded-full cursor-pointer transition
                            duration-300" :class="activeSlide === index ? 'bg-[#597445]' : 'bg-gray-300'"
                            @click="activeSlide = index"></div>
                    </template>
                </div>
            </div>


            {{-- Categories --}}
            <div class="categories flex justify-between items-center mb-2 mt-4">
                <h1 class="text-2xl font-bold text-[#597445] pl-4">Categories</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#597445" stroke-width="2"
                    fill="none">
                    <path d="M3 6h18" />
                    <path d="M7 12h10" />
                    <path d="M10 18h4" />
                </svg>
            </div>

            <div class="category-list">
                <div class="flex space-x-2 overflow-x-auto py-2">
                    <template x-for="category in categories" :key="category">
                        <button type="button"
                            class="px-5 py-2 rounded-full text-sm font-medium border whitespace-nowrap"
                            :class="activeCategory === category ? 'active' : 'inactive'"
                            @click="activeCategory = category" x-text="category">
                        </button>
                    </template>
                </div>
            </div>

            {{-- Catering List Example Preview --}}
            <div class="mt-6 space-y-3">
                <template x-for="c in filteredCaterings" :key="c.id">
                    <div class="bg-white rounded-2xl shadow-lg p-4 flex items-start gap-4">

                        <!-- Gambar di Kiri -->
                        <img :src="c.image_url" class="rounded-xl w-24 h-24 object-cover flex-shrink-0">

                        <!-- Detail di Kanan -->
                        <div class="flex flex-col justify-center w-full">
                            <p class="font-bold text-lg" x-text="c.nama"></p>
                            <p class="text-sm text-gray-500 mb-2">Rp <span x-text="c.price"></span></p>

                            <!-- Jika kamu mau, jadikan jadwal opsional -->
                            <div class="border-t border-gray-300 pt-2">
                                <p class="text-xs font-semibold text-gray-600 flex items-center gap-1">
                                    <span class="text-green-600 text-lg">●</span> Jadwal pengiriman
                                </p>
                                <div class="mt-1 text-xs text-gray-500 space-y-1">
                                    <p>🌅 <span x-text="c.start_time"></span></p>
                                    <p>🌞 <span x-text="c.end_time"></span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            {{-- Categories --}}
            <div class="categories flex justify-between items-center mb-2 mt-10">
                <h1 class="text-2xl font-bold text-[#597445] pl-4">Order Again</h1>

            </div>

            {{-- Catering List Example Preview --}}
            <div class="mt-6 space-y-3">
                <template x-for="c in filteredCaterings" :key="c.id">
                    <div class="bg-white rounded-2xl shadow-lg p-4 flex items-start gap-4">

                        <!-- Gambar di Kiri -->
                        <img :src="c.image_url" class="rounded-xl w-24 h-24 object-cover flex-shrink-0">

                        <!-- Detail di Kanan -->
                        <div class="flex flex-col justify-center w-full">
                            <p class="font-bold text-lg" x-text="c.nama"></p>
                            <p class="text-sm text-gray-500 mb-2">Rp <span x-text="c.price"></span></p>

                            <!-- Jika kamu mau, jadikan jadwal opsional -->
                            <div class="border-t border-gray-300 pt-2">
                                <p class="text-xs font-semibold text-gray-600 flex items-center gap-1">
                                    <span class="text-green-600 text-lg">●</span> Jadwal pengiriman
                                </p>
                                <div class="mt-1 text-xs text-gray-500 space-y-1">
                                    <p>🌅 <span x-text="c.start_time"></span></p>
                                    <p>🌞 <span x-text="c.end_time"></span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>


        </div>
    </div>

    <style>
        .category-list .active {
            background-color: #597445;
            color: white;
            border-color: #597445;
        }

        .category-list .inactive {
            background-color: white;
            color: #597445;
            border-color: #d1d5db;
        }

        .category-list {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .category-list::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('berandaData', () => ({
                caterings: [
                    {
                        id: 1,
                        nama: 'Intolerant Laktosa',
                        kategoris: ['Intolerant Laktosa', 'Tinggi Kalori'],
                        price: '250.000',
                        image_url: 'https://placehold.co/300x200/ffe5e5/ff0000?text=Menu+1',
                        start_time: '07.00 - 07.30',
                        end_time: '08.00 - 08.30'
                    },
                    {
                        id: 2,
                        nama: 'Tinggi Kalori',
                        kategoris: ['Tinggi Kalori'],
                        price: '350.000',
                        image_url: 'https://placehold.co/300x200/e0f7fa/006064?text=Menu+2',
                        start_time: '07.00 - 07.30',
                        end_time: '08.00 - 08.30'
                    },
                    {
                        id: 3,
                        nama: 'Prematur',
                        kategoris: ['Prematur'],
                        price: '350.000',
                        image_url: 'https://placehold.co/300x200/e0f7fa/006064?text=Menu+2',
                        start_time: '07.00 - 07.30',
                        end_time: '08.00 - 08.30'
                    }
                ],

                categories: ['All', 'Intolerant Laktosa', 'Tinggi Kalori', 'Prematur'],
                activeCategory: 'All',

                get filteredCaterings() {
                    return this.activeCategory === 'All'
                        ? this.caterings
                        : this.caterings.filter(c => c.kategoris.includes(this.activeCategory));
                }
            }));
        });
    </script>

</body>

</html>