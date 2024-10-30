<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Networking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">


</head>
<body>
<header>
      <nav class="bg-[#fff] shadow-sm fixed top-0 left-0 w-full bg-white shadow-md z-10">
        <div class="container items-center max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Hamburger button -->
              <button id="menu-button" class="inline-flex items-center justify-center pl-80  rounded-md text-gray-400 hover:text-gray-500 focus:outline-none" aria-expanded="false" aria-controls="mobile-menu">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-start sm:items-stretch sm:justify-between">
              <div class="flex-shrink-0 flex items-center">
                <a href="#">
                  <img class="h-9 w-12 rounded-s-full" src="../gambar/logo.extra.jpg" alt="logo"/>
                </a>
                <a href="#">
                  <h1 class="text-xl font-bold ml-2 text-[#6A9C89]">Kewirausahaan</h1>
                </a>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                  <div class="btn navbar ">
                    <a href="../php/index.php" class=" font-semibold text-[#405D72] hover:bg-[#FFE6A5] px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                    <a href="#Profil" class="font-semibold text-[#405D72] hover:bg-[#FFE6A5] px-3 py-2 rounded-md text-sm font-medium">Profil</a>
                    <a href="#Pengurus" class="font-semibold text-[#405D72] hover:bg-[#FFE6A5] px-3 py-2 rounded-md text-sm font-medium">Pengurus</a>
                    <a href="#" class="font-semibold text-[#405D72] hover:bg-[#FFE6A5] px-3 py-2 rounded-md text-sm font-medium">Album</a>
                    <a href="#" class="font-semibold text-[#405D72] hover:bg-[#FFE6A5] px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>
                  </div>
                  <div class="flex items-center space-x-4">
                    <button class="absolute flex flex-row-reverse bg-green-500 text-white px-4 py-1  rounded-full">
                      Sign Up
                     </button>
                     <button class="relative bg-green-100 text-green-500 px-4 py-1 rounded-full">
                      Daftar
                     </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sm:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="text-[#405D72] hover:bg-[#FFE6A5] block px-3 py-2 rounded-md text-base font-semibold">Beranda</a>
            <a href="#" class="text-[#405D72] hover:bg-[#FFE6A5] block px-3 py-2 rounded-md text-base font-semibold">Profil</a>
            <a href="#" class="text-[#405D72] hover:bg-[#FFE6A5] block px-3 py-2 rounded-md text-base font-semibold">Album</a>
            <a href="#" class="text-[#405D72] hover:bg-[#FFE6A5] block px-3 py-2 rounded-md text-base font-semibold">Tentang Kami</a>
          </div>
        </div>
      </nav>
    </header>
<section class="footer text-white py-20"> 
            <div class="container mx-auto text-center">
             <h2 class="text-3xl font-bold mb-8">
              Apakah Anda tertarik join Kewirausahaan?
             </h2>
             <p class="text-lg mb-8">
              Jika tertarik ayo click daftar di bawah ini
             </p>
             <a class="bg-blue-500 text-white px-6 py-3 rounded-full" href="#">
              Daftar Di sini
             </a>
            </div>
           </section>
           <!-- Footer -->
           <footer class="bg-[#A66E38] text-white py-12">
             <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
             <div>
              <h3 class="text-xl font-semibold mb-4">
               Zenpay
              </h3>
              <p>
               Empowering you to reach your financial goals with secure, seamless, and innovative payment solutions.
              </p>
             </div>
             <div>
              <h3 class="text-xl font-semibold mb-4">
               About
              </h3>
              <ul>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Company
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Careers
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Blog
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Contact Us
                </a>
               </li>
              </ul>
             </div>
             <div>
              <h3 class="text-xl font-semibold mb-4">
               Products
              </h3>
              <ul>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Personal Accounts
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Business Accounts
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Integrations
                </a>
               </li>
              </ul>
             </div>
             <div>
              <h3 class="text-xl font-semibold mb-4">
               Resources
              </h3>
              <ul>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Help Center
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Security
                </a>
               </li>
               <li>
                <a class="hover:text-gray-400" href="#">
                 Report a Problem
                </a>
               </li>
              </ul>
             </div>
            </div> 
            <div class="container mx-auto text-center mt-8">
             <div class="space-x-4 mt-4">
                 <div class="social">
                     <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     <a href="https://www.instagram.com/eclub.smkn1bawang/"><i class="fa-brands fa-instagram"></i></a>
                     <a href="mailto:azrilfathanf@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    </div>
              <p class="p-4 text-gray-500 text-white">
               © Enterpreneur ( E-Club )
              </p>
             </div>
            </div>
           </footer>
</body>
</html>