<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forgot Password</title>
</head>
<body class="font-[Inter] bg-[#f4f4f4]">
  <section>
    <div>
      <p class="text-black font-bold text-3xl ml-[435px] mt-[100px]">Forgot Email</p>
    </div>

    <div class="bg-white w-[300px] h-auto border border-gray-400 shadow-md rounded-[45px] ml-[370px] mt-[25px] pb-6">
      <!-- Nama -->
      <div class="flex flex-col space-y-1 mt-[15px] ml-[40px]">
        <label for="nama" class="text-md font-semibold text-black">Email</label>
        <input 
          type="Email"
          id="nama"
          placeholder="Masukkan Email"
          class="w-[220px] h-[40px] px-3 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#597445] shadow-sm text-sm"
        />
      </div>
        <div class="bg-[#4a6339] w-[220px] h-[40px] rounded-[20px] shadow-sm ml-[40px] mt-[20px] text-white font-semibold text-[18px] flex items-center justify-center cursor-pointer hover:bg-[#3e562f] transition">
        Confirm Email
      </div>
      </section>
</body>
</html>