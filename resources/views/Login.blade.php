<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="font-inter">
    <Section>
        <div>
            <p class="text-black font-bold font font-[Inter] text-3xl ml-[480px] mt-[110px] ">Login</p>
        </div>
        <div class="bg-white w-[300px]  h-[450px]  border border-gray-400 shadow-md rounded-[45px] ml-[370px] mt-[25px]">
        <a href="#">
            <div class="bg-[#f8f8f8] w-[100px] h-[40px] shadow-md rounded-2xl text-[14px] text-black font-bold font-[Inter] flex justify-center items-center hover:bg-[#4a6339] hover:text-white transition mt-[35px] ml-[40px]">
             Login
            </div>
        </a>
        <a href="/views/register">
            <div class="bg-[#f8f8f8] w-[100px] h-[40px] shadow-md rounded-2xl text-[14px] text-black font-bold font-[Inter] flex justify-center items-center  hover:bg-[#4a6339] hover:text-white transition ml-[155px] mt-[-40px]">
             Register
            </div>
        </a>

             <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
            <label for="=email" class="text-md font-semibold text-black font-[inter] ">Nama</label>
            <input 
                type="text" 
                id="nama" 
                placeholder=""
                class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] focus:border-transparent shadow-sm text-sm"
                />
            </div>

            <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
            <label for="=email" class="text-md font-semibold text-black font-[inter] ">Email</label>
            <input 
                type="text" 
                id="email" 
                placeholder=""
                class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] focus:border-transparent shadow-sm text-sm"
                />
            </div>

            <!--Passwords-->
<div class="flex flex-col space-y-1 mt-[10px] ml-[40px]">
  <label for="password" class="text-md font-semibold text-black font-[Inter]">Password</label>

  <div class="relative w-[220px]"> <!-- ✅ disamakan ukuran dengan Email -->
    <input 
      type="password" 
      id="password"
      placeholder="Masukkan password"
      class="w-full h-[40px] px-3 pr-10 border border-gray-300 rounded-2xl 
             focus:outline-none focus:ring-2 focus:ring-[#597445] focus:border-transparent 
             shadow-sm text-sm placeholder-gray-400"
    />

    <!-- 👁️ Ikon Mata di dalam input -->
    <button 
      type="button" 
      onclick="togglePassword()" 
      class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-[#597445] focus:outline-none"
    >
      <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" 
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
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.innerHTML = `
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
      passwordInput.type = "password";
      eyeIcon.innerHTML = `
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

    <div class="mt-[5px] ml-[40px]">
        <a href="/Forgot" class="text-[#4a6339] font-medium text-[12px] font-[inter]"> Forgot a password</a>
    </div>
 
    <div class="bg-[#4a6339] w-[220px] h-[40px] rounded-[20px] shadow-sm ml-[40px] text-white font-semibold text-[18px] flex items-center justify-center">
       Login
    </div>

    <div>
      <a href="/register">
        <div class=" ml-[40px]">
          <span class="font-semibold text-[#4a6339] text-[10px]">
            Not a member 
          </span>
          <span class="font-medium text-[#4a6339] text-[10px]">Register now</span>
        </div>
      </a>
      
    </div>

            </div>
            </div>
        </div>
    </Section>
</body>
</html>