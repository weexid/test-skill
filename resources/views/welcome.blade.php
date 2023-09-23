<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'My Anemone') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/site.webmanifest">


        <style>
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">

        <div class="bg-white w-full md:w-[80%] md:flex-row md:gap-5 mx-auto flex flex-col items-center justify-between">
            <div>
                <iframe src="logo/logo.svg" frameborder="0"></iframe>       
            </div>

            <div class="mb-5 md:mb-0 text-center">
                <p class="text-2xl ">Belajar Baca Tulis Hitung Terbaik di Indonesia</p>
            </div>
        </div>

        <div style="background-image: url(hero/hero.jpg)" class="relative w-full h-[800px] bg-cover bg-center bg-no-repeat flex items-center justify-center">
            <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="relative z-100 flex flex-col items-center">
                <div class="mb-5 text-white text-center">
                    <h1 class="text-6xl">
                        Belajar Mambaca dan Berhitung Lebih Menyenangkan bersama <br> <span class="font-bold text-[#d93169]">Anemone Indonesia</span>
                    </h1>
                </div>
                <div class="mt-5">
                    <a class="py-2 px-4 border-2 hover:bg-primary text-white font-semibold rounded-3xl text-2xl hover:border-white hover:border-2 duration-300 ease-in-out" href="/register">Ayo Belajar Bersama</a>
                </div>
            </div>
        </div>

        <div class="w-full bg-[#24acc3] text-center p-2">
            <div class="w-[1140px] mx-auto py-10">
                <h2 class="text-yellow-500 text-lg font-semibold">LES BACA TULIS INI BENAR BENAR FANTASTIS</h2>
                <h3 class="font-semibold text-slate-800 mt-5">METODE TERBARU DARI LES BACA TULIS INI SUPER CEPAT DAN SUPER AMPUH UNTUK BELAJAR MEMBACA</h3>
                <p class="font-sm text-white mt-1 leading-2">Bayangkan, bagaimana perasaan Anda jika menyaksikan buah hati kesayangan Anda yang awalnya belum tahu huruf sama sekali, sekarang bisa membaca cerita tanpa mengeja, hanya dengan belajar kurang dari 1 jam? Anda pasti takkan percaya. Nggak mungkinlah! mana mungkin tanpa hafal huruf, anak bisa membaca cerita, tanpa mengeja pula dan mengerti dengan makna cerita. Tapi inilah yang terjadi di Anemone Reading School Indonesia. Sebuah tempat Les Baca Tulis Terbaik di Indonesia yang memiliki Program Cara Baca Ajaib, dimana HANYA 1 JAM, ANAK BISA MEMBACA KATA, KALIMAT DAN CERITA TANPA MENGEJA. Para orang tua sungguh antusias berbondong-bondong menyekolahkan putra putrinya di lebih dari 100 outlet di seluruh Indonesia. Anemone melayani lebih dari 7000 anak setiap bulannya, memberikan mereka...</p>
                <div class='mt-5'>
                    <a class="font-semibold text-yellow-500 mt-10" href="/register">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="w-full bg-white p-2">
            <div class="w-[1140px] mx-auto py-10">
                <div class="flex items-center justify-between">
                    <div class="w-[70%]">
                        <h2 class="text-yellow-500 text-lg font-semibold">CARA BACA AJAIB</h2>
                        <h3 class="font-semibold text-slate-800 mt-5">BUKAN METODE INSTAN</h3>
                        <p class="text-slate-700">Banyak yang keliru menafsirkan, bahwa Cara Baca Ajaib adalah Metode Instant dan Drilling. Ada pula yang menganggap itu hanya bahasa marketing, agar orang tertarik dan penasaran. Mana mungkin sih, tanpa hafal huruf anak bisa membaca Kata, Kalimat dan Cerita Tanpa Mengeja hanya dalam 1 jam? Ini rahasianya : Process Focus Result Oriented Little Steps Individual System Ingin tahu HASILNYA seperti apa?? Yuk simak video berikut. Ayo COBA GRATIS SAMPAI BISA di Anemone terdekat di kota Anda!  Join Us Today and Feel the Magic of Cara Baca...</p>
                        <div class='mt-5'>
                            <a class="font-semibold text-yellow-500 mt-10" href="/register">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="w-[500px]">
                        <img class="w-[500px]" src="https://anemoneindonesia.com/wp-content/uploads/2022/02/CARA-BACA-AJAIB-Anemone.png" alt="cara baca ajaib">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-yellow-500 p-2">
            <div class="w-[1140px] mx-auto py-10 flex justify-center gap-5">
                <div class="bg-white p-5 w-[30%]">
                    <img height="250" src="https://anemoneindonesia.com/wp-content/uploads/2022/03/Outlet-Anemone_-620x450.png" alt="img">
                    <div class="flex flex-col items-center justify-end text-slate-600 mt-5 leading-[20px]">
                        <p class="text-center">Dimana saja outlet anemon yang ada di seluruh Indonesia yang terdekat di lokasi anda?</p>
                        
                        <div class='mt-5'>
                            <a class="font-semibold text-yellow-500 mt-10" href="/register">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-5 w-[30%]">
                    <img height="250" src="https://anemoneindonesia.com/wp-content/uploads/2022/02/Investasi-620x450.jpg" alt="img">
                    <div class="flex flex-col items-center justify-between text-slate-600 mt-5 leading-[20px]">
                        <p class="text-center">Jika anda ingin berinvestasi di bidang pendidikan, Anemone Indonesia merupakan bisnis yang proven dan profitable setiap tahunnya.</p>
                        
                        <div class='mt-5'>
                            <a class="font-semibold text-yellow-500 mt-10" href="/register">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-5 w-[30%]">
                    <img height="250" src="https://anemoneindonesia.com/wp-content/uploads/2022/02/Testimonial_-620x450.jpg" alt="img">
                    <div class="flex flex-col items-center justify-between text-slate-600 mt-5 leading-[20px]">
                        <p class="text-center">Anemone memberikan BUKTI bukan Janji. Berikut beberapa Testimonial dai orang tua siswa Anemone.</p>
                        
                        <div class='mt-5'>
                            <a class="font-semibold text-yellow-500 mt-10" href="/register">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-white">
            <div class="w-[1140px] mx-auto py-20 flex items-start justify-between gap-1">
                <img width="1100" src="https://anemoneindonesia.com/wp-content/uploads/2018/06/Info-Les-Baca-Tulis-Anemone.png" alt="promo">
            </div>
        </div>

        <footer class="w-full bg-primary">
            <div class="w-[1140px] mx-auto py-10 flex items-start justify-between gap-1">
                <div class="">
                    <a href="/register">
                        <img width="250" src="https://anemoneindonesia.com/wp-content/uploads/2021/05/logoanemonewebfooter.png" alt="logo">
                    </a>
                </div>
                <div class="">
                    <h2 class="text-yellow-500 text-lg font-semibold">KANTOR PUSAT ANEMONE</h2>
                    <div>
                        <div class="flex items-center gap-2">
                            <i class='text-white bx bxs-map'></i>
                            <span class="text-white">
                                Jl.Tukad Sanghyang No 9 Panjer, Denpasar, Bali
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class='text-white bx bxs-envelope'></i>
                            <span class="text-white">
                                anemonereadingschool@gmail.com
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class='text-white bx bxs-phone'></i>
                            <span class="text-white">
                                0361 4782277
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <h2 class="text-yellow-500 text-lg font-semibold">SOCIAL MEDIA OFFICIAL ANEMONE</h2>
                    <div>
                        <a class="text-white text-2xl" href="#"><i class='bx bxl-linkedin-square'></i></a>
                        <a class="text-white text-2xl" href="#"><i class='bx bxl-youtube'></i></a>
                        <a class="text-white text-2xl" href="#"><i class='bx bxl-instagram-alt' ></i></a>
                        <a class="text-white text-2xl" href="#"><i class='bx bxl-facebook-square'></i></a>
                    </div>
                    <div class="text-white text-sm">
                        Copyright © 2023 <a class="text-yellow-500" href="#">Anemone Indonesia</a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="relative sm:flex sm:justify-center sm:items-center bg-center bg-gray-100">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-primary focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-primary focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        
    </body>
</html>
