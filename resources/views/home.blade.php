<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Medison   Care') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class="antialiased">

<nav class="relative bg-[#597445]">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>

      <!-- Left side -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <a href="home">
            <img src="{{ asset('photo/logo_medison.png') }}" alt="Your Company" class="h-10 w-auto" />
          </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="home" class="rounded-md bg-[#314026] px-3 py-2 text-sm font-medium text-white">Home</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
          </div>
        </div>
      </div>

      <!-- Right side -->
      <div class="flex items-center gap-4">
        <!-- 🔍 Search bar -->
        <form action="#" method="GET" class="hidden md:flex items-center bg-white rounded-full px-3 py-1.5 w-64 shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
          </svg>
          <input 
            type="text" 
            name="search" 
            placeholder="Search..." 
            class="ml-2 w-full text-gray-700 bg-transparent outline-none placeholder-gray-400 text-sm"
          />
        </form>

        <!-- 🔔 Notification button -->
        <button type="button" class="relative rounded-full p-1 text-gray-300 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>

        <!-- 👤 Profile dropdown -->
        <div class="relative ml-3">
          <button class="relative flex rounded-full focus:outline-none">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="profile" class="h-8 w-8 rounded-full bg-gray-800" />
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Slider Container -->
<div class="relative w-auto mx-auto overflow-hidden rounded-2xl shadow-2xl mt-6">
  
  <!-- Slides -->
  <div class="slides flex transition-transform duration-700">
    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg" 
         class="w-full h-[550px] object-cover flex-shrink-0" 
         alt="Slide 1">
    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg" 
         class="w-full h-[550px] object-cover flex-shrink-0" 
         alt="Slide 2">
    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/media/8587/hDwQMwUmOSbso6VlQ2c7ihQnxrWYeCSGQEbP0gBB.jpg" 
         class="w-full h-[550px] object-cover flex-shrink-0" 
         alt="Slide 3">
  </div>


  <!-- supported brand-->
  <section class= "py-5 bg-white">
    <div class = "container bg-white">
        <h3 class = "mb-5" >Sponsor By</h3>
            <div class = "d-flex justify-content-center flex-wrap gap-4">
                <div class ="sponsor-item">
                    <img src="photo/YouTube - Apps on Google Play.jpg" alt="https://www.youtube.com/" width=100>
                    <p>Youtube</p>
                </div>
                <div class ="sponsor-item">
                    <img src="photo/Google_Favicon_2025.svg-removebg-preview.png" alt="https://www.google.com/" width=100>
                    <p>Google</p>
                </div>
                <div class ="sponsor-item">
                    <img src="photo/Pin by Leticia Rossi M de Lima on Apps personagens _ App logo, App, Iphone background.jpg" alt="https://mail.google.com" width=100>
                    <p>Gmail</p>
                </div>
                <div class ="sponsor-item">
                    <img src="photo/༄ 🄵🄰🄲🄴🄱🄾🄾🄺 🄸🄲🄾🄽 ༄.jpg" alt="https://www.facebook.com" width=100>
                    <p>Facebook</p>
                </div>
                <div class ="sponsor-item">
                    <img src="photo/Download premium png of LinkedIn png social media icon_ 7 JUNE 2021 - BANGKOK, THAILAND about png, transparent png, linkedin in icon, instagram highlight cover, and sticker 3344833.jpg" alt="https://id.linkedin.com/" width=100>
                    <p>Linked in</p>
                </div>

            </div>
    </div>
</section>


<!-- Footer -->
<footer class="bg-[#85A35E] text-white mt-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Brand -->
    <div>
      <h2 class="text-2xl font-bold text-white">Insyst</h2>
    </div>

    <!-- Navigation -->
    <div>
      <h3 class="text-lg font-semibold mb-4">Navigation</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-cyan-500">Test</a></li>
        <li><a href="#" class="hover:text-cyan-500">Career</a></li>
        <li><a href="#" class="hover:text-cyan-500">About Us</a></li>
        <li><a href="#" class="hover:text-cyan-500">Contact Us</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div>
      <h3 class="text-lg font-semibold mb-4">Resources</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-cyan-500">Blogs</a></li>
        <li><a href="#" class="hover:text-cyan-500">News & Update</a></li>
        <li><a href="#" class="hover:text-cyan-500">Career</a></li>
      </ul>
    </div>

    <!-- Stay up to date -->
    <div>
      <h3 class="text-lg font-semibold mb-4">Stay up to date</h3>
      <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <form class="flex">
        <input type="email" placeholder="Your Email Address" class="w-full px-3 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
        <button type="submit" class="px-4 bg-gradient-to-r from-cyan-400 to-green-400 text-white rounded-r-lg hover:opacity-90 transition">Search</button>
      </form>
    </div>

  </div>

  <!-- Bottom -->
  <div class="border-t border-gray-200 py-4 text-center text-sm text-white">
    © 2025 Medison Care. All rights reserved.
  </div>
</footer>


</body>
</html>
