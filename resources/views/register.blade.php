<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[Inter] bg-[#f4f4f4]">
  <section>
    <div>
      <p class="text-black font-bold text-3xl ml-[460px] mt-[100px]">Register</p>
    </div>

    <div class="bg-white w-[300px] h-auto border border-gray-400 shadow-md rounded-[45px] ml-[370px] mt-[25px] pb-6">
      <!-- Tombol atas -->
      <a href="/views/login">
        <div class="bg-[#f8f8f8] w-[100px] h-[40px] shadow-md rounded-2xl text-[14px] text-black font-bold flex justify-center items-center hover:bg-[#4a6339] hover:text-white transition mt-[35px] ml-[40px]">
          Login
        </div>
      </a>
      <a href="#">
        <div class="bg-[#f8f8f8] w-[100px] h-[40px] shadow-md rounded-2xl text-[14px] text-black font-bold flex justify-center items-center hover:bg-[#4a6339] hover:text-white transition ml-[155px] mt-[-40px]">
          Register
        </div>
      </a>

      <!-- Nama -->
      <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
        <label for="nama" class="text-md font-semibold text-black">Nama</label>
        <input 
          type="text"
          id="nama"
          placeholder="Masukkan nama"
          class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] shadow-sm text-sm"
        />
      </div>

      <!-- Email -->
      <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
        <label for="email" class="text-md font-semibold text-black">Email</label>
        <input 
          type="email"
          id="email"
          placeholder="Masukkan email"
          class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] shadow-sm text-sm"
        />
      </div>

      <!-- Tanggal Lahir (DOB) -->
      <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
        <label for="dob" class="text-md font-semibold text-black">Tanggal Lahir</label>
        <input 
          type="date"
          id="dob"
          class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] shadow-sm text-sm"
        />
      </div>

      <!-- Password -->
      <div class="flex flex-col space-y-1 mt-[15px] ml-[40px] relative">
        <label for="password" class="text-md font-semibold text-black">Password</label>
        <div class="relative w-[220px]">
          <input 
            type="password"
            id="password"
            placeholder="Masukkan password"
            class="w-full h-[40px] px-3 pr-10 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] shadow-sm text-sm"
          />
          <button 
            type="button" 
            onclick="togglePassword()" 
            class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-[#597445]"
          >
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
      </div>
  <script>
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.outerHTML = `
          <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13.875 18.825A10.05 10.05 0 0112 19
              c-4.478 0-8.268-2.943-9.542-7
              a9.958 9.958 0 012.152-3.293
              m1.82-1.82A9.969 9.969 0 0112 5
              c4.478 0 8.268 2.943 9.542 7
              a9.953 9.953 0 01-4.26 4.868
              M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 3l18 18" />
          </svg>`;
      } else {
        passwordInput.type = "password";
        eyeIcon.outerHTML = `
          <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5
              c4.478 0 8.268 2.943 9.542 7
              -1.274 4.057-5.064 7-9.542 7
              -4.477 0-8.268-2.943-9.542-7z" />
          </svg>`;
      }
    }
  </script>

  <!--Confirm Password-->
  <div class="flex flex-col space-y-1 mt-[15px] ml-[40px] relative">
  <label for="confirmPassword" class="text-md font-semibold text-black">Confirm Password</label>

  <div class="relative w-[220px]">
    <input 
      type="password"
      id="confirmPassword"
      placeholder="Masukkan ulang password"
      class="w-full h-[40px] px-3 pr-10 border border-gray-300 rounded-2xl 
             focus:outline-none focus:ring-2 focus:ring-[#597445] 
             shadow-sm text-sm placeholder-gray-400"
    />

    <!-- 👁️ Tombol Mata -->
    <button 
      type="button" 
      onclick="toggleConfirmPassword()" 
      class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-[#597445]"
    >
      <svg id="eyeConfirmIcon" xmlns="http://www.w3.org/2000/svg" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M2.458 12C3.732 7.943 7.523 5 12 5
          c4.478 0 8.268 2.943 9.542 7
          -1.274 4.057-5.064 7-9.542 7
          -4.477 0-8.268-2.943-9.542-7z" />
      </svg>
    </button>
  </div>
</div>

<script>
  function toggleConfirmPassword() {
    const input = document.getElementById("confirmPassword");
    const icon = document.getElementById("eyeConfirmIcon");

    if (input.type === "password") {
      input.type = "text";
      icon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13.875 18.825A10.05 10.05 0 0112 19
          c-4.478 0-8.268-2.943-9.542-7
          a9.958 9.958 0 012.152-3.293
          m1.82-1.82A9.969 9.969 0 0112 5
          c4.478 0 8.268 2.943 9.542 7
          a9.953 9.953 0 01-4.26 4.868
          M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 3l18 18" />`;
    } else {
      input.type = "password";
      icon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M2.458 12C3.732 7.943 7.523 5 12 5
          c4.478 0 8.268 2.943 9.542 7
          -1.274 4.057-5.064 7-9.542 7
          -4.477 0-8.268-2.943-9.542-7z" />`;
    }
  }
</script>

  <!-- Tombol Register -->
      <div class="bg-[#4a6339] w-[220px] h-[40px] rounded-[20px] shadow-sm ml-[40px] mt-[20px] text-white font-semibold text-[18px] flex items-center justify-center cursor-pointer hover:bg-[#3e562f] transition">
        Register
      </div>

      <!-- Sudah punya akun -->
      <div class="ml-[40px] mt-[10px] text-[10px] font-[Inter]">
        <span class="text-[#4a6339] font-semibold">Already have an account? </span>
        <a href="/views/login" class="text-[#4a6339] font-medium hover:underline">Login here</a>
      </div>
    </div>
  </section>
</body>
</html>
