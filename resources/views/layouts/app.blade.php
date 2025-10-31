{{-- File: resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Medison Care') }}</title>

    {{-- Memuat aset global (Tailwind, app.js, dll) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])

    {{-- Slot untuk CSS yang spesifik per halaman --}}
    @stack('styles')
</head>

<body class="antialiased">
    <main class="aspect-9-16" style="--frame: 520px;">
      
       
       @yield('content')
       
        </main>

    {{-- Slot untuk JS yang spesifik per halaman --}}
    @stack('scripts')
</body>

</html>