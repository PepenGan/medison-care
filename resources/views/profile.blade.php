<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Medison Care') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased">
    <div class="aspect-9-16" style="--frame: 520px;">
        <div class="scrollable-content">
            <div class="relative bg-[#597445] text-center py-10 rounded-b-2xl w-full">
                <a href="javascript:void(0)" onclick="goBack()" class="absolute top-6 left-6 z-10 p-2 bg-white/20 rounded-full hover:bg-white/40 transition" aria-label="Kembali">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <img src="https://placehold.co/80x80/FFFFFF/0D1B2A?text=BS" alt="Profile Avatar"
                     class="w-20 h-20 rounded-full mx-auto bg-gray-300 border-4 border-white shadow-md">
                <p class="text-white text-lg font-bold mt-2.5">
                    Budi Siregar
                </p>
            </div>


            <div class="p-6 space-y-5">

                <div class="flex items-center border-b border-gray-200 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500 italic">
                            Username
                        </p>
                        <p class="text-base font-bold text-gray-800">
                            Budi123
                        </p>
                    </div>
                </div>

                {{-- Informasi Email --}}
                <div class="flex items-center border-b border-gray-200 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500 italic">
                            Email
                        </p>
                        <p class="text-base font-bold text-gray-800">
                            Budi123@gmail.com
                        </p>
                    </div>
                </div>

                {{-- Informasi Nomor Telepon --}}
                <div class="flex items-center border-b border-gray-200 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500 italic">
                            Nomor Telepon
                        </p>
                        <p class="text-base font-bold text-gray-800">
                            +62 812 3456 7890
                        </p>
                    </div>
                </div>

                {{-- Informasi Alamat --}}
                <div class="flex items-center pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500 italic">
                            Address
                        </p>
                        <p class="text-base font-bold text-gray-800">
                            Jl. Jenderal Sudirman No. 5, Jakarta
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- /scrollable-content -->
    </div> <!-- /aspect-9-16 -->

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
