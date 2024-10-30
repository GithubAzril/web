
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg flex w-3/4 max-w-4xl">
        <div class="w-1/2 p-10 bg-gradient-to-r from-blue-500 to-teal-400 text-white flex flex-col justify-center">
            <div class="mb-8">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-white rounded-full mr-2 ">
                        <img class="rounded-s-full" src="../gambar/logo.extra.jpg" alt="logo">
                    </div>
                    <div class="text-lg font-bold">Kewirausahaan</div>
                </div>
                <h1 class="text-4xl font-bold">Selamat Datang</h1>
                <p class="mt-4">Selamat datang di website kami! Temukan informasi terbaru, inspirasi, dan layanan terbaik. Kami siap membantu Anda mencapai tujuan. Nikmati pengalaman berkunjung!</p>
            </div>
        </div>
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <form class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="number" class="block text-sm font-medium text-gray-700">Nisn</label>
                    <input type="number" id="int" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="options" class="block text-sm font-medium text-gray-700">Pilih Jurusan :</label>
                    <select type="options" id="options" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="" disabled selected>-- Kelas --</option>
                    <option value="option0">X</option>
                    <option value="option1">XI</option>
                    </select>
                </div>
                <div>
                    <label for="options" class="block text-sm font-medium text-gray-700">Pilih Jurusan :</label>
                    <select type="options" id="options" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="" disabled selected>-- Pilih Jurusan --</option>
                    <option value="option0">AKL</option>
                    <option value="option1">PPLG</option>
                    <option value="option2">TJKT</option>
                    <option value="option3">FS</option>
                    <option value="option3">PM</option>
                    <option value="option3">AP</option>
                    <option value="option3">TE</option>
                    <option value="option3">MPLB</option>
                    </select>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="Login" class="w-full py-2 px-4 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Daftar</button>
                </div>
            </form>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</body>
</html>