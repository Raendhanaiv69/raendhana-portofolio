<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Raendhana Ilmi Vadhiasih</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            overflow-x: hidden;
        }

        .bg-custom-yellow {
            background-color: #FFF9CB;
        }

        .btn-gradient {
            background-image: linear-gradient(to right, #FC8DBA, #FFF9CB);
        }

        .text-pink-custom {
            color: #ED6495;
        }

        .text-pink-darker {
            color: #FC8DBA;
        }

        .shadow-custom-pink {
            box-shadow: 0 10px 15px -3px rgba(252, 141, 186, 0.3), 0 4px 6px -2px rgba(252, 141, 186, 0.1);
        }

        /* Animasi */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Custom style untuk gambar di Design Documentation agar full cover, disesuaikan */
        .design-img-container {
            width: 100%;
            max-width: 320px;
            aspect-ratio: 4/3;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .design-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .design-img-container img:hover {
            transform: scale(1.05);
        }

        /* Custom Colors */
        .bg-pink-custom {
            background-color: #ED6495;
        }

        .text-yellow-200 {
            color: #fef08a;
            /* Contoh warna kuning yang digunakan Tailwind */
        }

        .text-white {
            color: #ffffff;
        }
    </style>
</head>

<body class="min-h-screen bg-custom-yellow flex flex-col">

    <header class="fixed top-0 left-0 w-full z-50 p-4">
        <nav
            class="max-w-5xl mx-auto sticky top-4 bg-black h-16 w-full rounded-full flex items-center justify-between px-4 md:px-6 py-2 z-30">
            <div>
                <span class="text-pink-custom font-bold text-xl">PORTOFOLIO</span>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-pink-custom focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex h-full items-center">
                <div class="bg-pink-custom rounded-full flex items-center px-4 space-x-4 md:space-x-8 h-full">
                    <a href="#home" class="text-yellow-200 hover:text-white transition-colors duration-300">HOME</a>
                    <a href="#about" class="text-white hover:text-yellow-200 transition-colors duration-300">ABOUT
                        ME</a>
                    <a href="#projects"
                        class="text-white hover:text-yellow-200 transition-colors duration-300">PROJECT</a>
                    <a href="#skills" class="text-white hover:text-yellow-200 transition-colors duration-300">SKILL</a>
                    <a href="#certificates"
                        class="text-white hover:text-yellow-200 transition-colors duration-300">CERTIFICATES</a>
                </div>
            </div>
        </nav>
    </header>

    <main id="home" class="flex flex-col items-center justify-center flex-grow p-6 md:p-10 mt-44 text-center fade-in">
        <p class="text-gray-700 font-bold text-base sm:text-lg md:text-3xl">
            Hello, I am
        </p>

        <h1
            class="text-center font-bold text-pink-custom leading-tight mt-2 text-4xl sm:text-5xl md:text-6xl lg:text-6xl xl:text-7xl max-w-full">
            RAENDHANA ILMI VADHIASIH
        </h1>

        <p class="text-lg sm:text-xl md:text-3xl font-semibold text-gray-800 mt-2">
            WEB DEVELOPER & UI/UX
        </p>

        <p class="text-gray-700 font-medium text-sm sm:text-base md:text-2xl mt-2">
            Ensuring stable, user-friendly, and high-quality digital products.
        </p>

        <button
            class="btn-gradient font-bold py-2 px-6 sm:py-3 sm:px-8 rounded-full mt-4 shadow-md hover:opacity-90 transition-opacity duration-300 text-sm sm:text-base">
            More About Me
        </button>

        <div class="flex items-center justify-center mt-6 space-x-6">
            <a href="https://github.com/username" target="_blank"
                class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.387.6.113.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.613-4.042-1.613-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.205.084 1.84 1.238 1.84 1.238 1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.932 0-1.31.468-2.38 1.236-3.22-.124-.303-.536-1.524.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.045.137 3.003.404 2.29-1.552 3.296-1.23 3.296-1.23.656 1.652.244 2.873.12 3.176.77.84 1.234 1.91 1.234 3.22 0 4.61-2.803 5.624-5.475 5.922.43.372.814 1.104.814 2.227 0 1.606-.015 2.898-.015 3.293 0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.63-5.37-12-12-12z" />
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/raendhana-ilmi-vadhiasih" target="_blank"
                class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20.447 20.452H17.3V14.9c0-1.314-.026-3.003-1.828-3.003-1.829 0-2.11 1.43-2.11 2.906v5.649h-3.147V9h3.021v1.561h.043c.421-.797 1.449-1.637 2.983-1.637 3.189 0 3.777 2.099 3.777 4.823v6.704zM5.337 7.433a1.833 1.833 0 11-.003-3.667 1.833 1.833 0 01.003 3.667zM6.963 20.452H3.71V9h3.253v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.728v20.543C0 23.226.792 24 1.771 24h20.451C23.205 24 24 23.226 24 22.271V1.728C24 .774 23.205 0 22.225 0z" />
                </svg>
            </a>
        </div>
    </main>

    <section id="about" class="container mx-auto px-10 py-12 md:py-48 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">About Me</h2>

        <div class="flex flex-col md:flex-row items-center md:items-start justify-center gap-10 lg:gap-20">
            <div
                class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-2xl overflow-hidden shadow-lg transform rotate-6 hover:rotate-0 transition-transform duration-300 bg-pink-300 p-2 animate-on-scroll">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-300 to-yellow-200 opacity-75 rounded-2xl z-0">
                </div>
                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761407635/akuu_cnjopf.jpg" alt="Foto Ilmi"
                    class="relative z-10 w-full h-full object-cover rounded-xl border-4 border-white shadow-md">
            </div>

            <div class="max-w-xl text-center md:text-left animate-on-scroll">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Who Am I</h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                    Saya adalah lulusan D3 Rekayasa Perangkat Lunak Aplikasi dengan fokus pada UI/UX Design dan
                    pengembangan antarmuka web.
                    Saya berpengalaman merancang alur pengguna, wireframe, hingga prototipe interaktif untuk proyek
                    sistem informasi klinik,
                    dengan menerapkan konsistensi desain, dan pendekatan berorientasi pengguna. Dalam proses desain,
                    saya berfokus pada peningkatan efisiensi alur layanan serta menciptakan pengalaman penggunaan yang
                    mudah dimengerti bagi pasien dan admin.
                    Selain pengalaman proyek, saya juga pernah menjadi Asisten Praktikum Alat Bantu Gambar Digital,
                    membimbing mahasiswa dalam memahami materi dan mendukung kelancaran proses pembelajaran.
                    Dengan latar belakang desain dan pengalaman praktikum tersebut, saya terus berusaha menghasilkan
                    solusi digital yang fungsional, modern, dan mudah digunakan.
                </p>

                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Personal Info</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-gray-700 text-base md:text-lg">
                    <div>
                        <p><strong class="font-semibold">Education :</strong> Telkom University, Rekayasa Perangkat
                            Lunak Aplikasi</p>
                        <p><strong class="font-semibold">GPA :</strong> 3.77</p>
                    </div>
                    <div>
                        <p><strong class="font-semibold">Email :</strong> raendhana@gmail.com</p>
                        <p><strong class="font-semibold">Phone :</strong> 089665908930</p>
                    </div>
                </div>

                <button
                    onclick="window.open('https://drive.google.com/file/d/12sEe3jfoxth_xQA3lwL8kwaPoNtzxR9H/view?usp=drive_link', '_blank');"
                    class="btn-gradient font-bold py-3 px-8 rounded-full mt-8 shadow-custom-pink hover:opacity-90 transition-opacity duration-300 flex items-center gap-2 mx-auto md:ml-0">
                    Lihat CV
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section id="skills" class="container mx-auto px-6 py-24 md:py-16">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-5xl font-bold text-gray-800 mt-2">
                Exploring my expertise <br />
                <span class="text-yellow-500">Behind My Designs & Developments</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-8 justify-items-center">
            <!-- Trello -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg" alt="Trello"
                        class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Trello</p>
                <p class="text-yellow-500 font-bold">90%</p>
            </div>

            <!-- Adobe XD -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xd/xd-plain.svg" alt="Adobe XD"
                        class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Adobe XD</p>
                <p class="text-yellow-500 font-bold">30%</p>
            </div>

            <!-- Canva -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg" alt="Canva"
                        class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Canva</p>
                <p class="text-yellow-500 font-bold">98%</p>
            </div>

            <!-- Figma -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma"
                        class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Figma</p>
                <p class="text-yellow-500 font-bold">90%</p>
            </div>

            <!-- Postman -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg"
                        alt="Postman" class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Postman</p>
                <p class="text-yellow-500 font-bold">50%</p>
            </div>

            <!-- Laravel -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                        alt="Laravel" class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Laravel</p>
                <p class="text-yellow-500 font-bold">90%</p>
            </div>

            <!-- Photoshop -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg"
                        alt="Photoshop" class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Photoshop</p>
                <p class="text-yellow-500 font-bold">60%</p>
            </div>

            <!-- Adobe Illustrator -->
            <div class="flex flex-col items-center space-y-2">
                <div
                    class="relative w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg"
                        alt="Illustrator" class="w-10 h-10">
                </div>
                <p class="text-gray-700 font-semibold text-sm mt-1">Illustrator</p>
                <p class="text-yellow-500 font-bold">85%</p>
            </div>
        </div>
    </section>


    <section id="projects" class="container mx-auto px-6 py-10 md:py-10 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-10">PROJECT EXPERIENCE UI DESIGN</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2  gap-10 justify-items-center">

            <div class="bg-white rounded-xl shadow-lg overflow-visible text-center p-4 ">
                <span
                    class="inline-block bg-green-200 text-green-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                    Client Project
                </span>

                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761997124/DOkumen_Porto_gwlu5b.png"
                    alt="Desain Kartu Nama" class="w-full rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Web Klinik LUNOX</h3>
                <p class="text-gray-600 text-sm mt-2 mb-4 text-justify">Melalui website ini, pasien dapat mengenal
                    profil dokter, melihat jadwal praktik, serta memperoleh informasi seputar layanan dan lokasi klinik
                    untuk
                    mendukung kemudahan dalam membuat janji temu.</p>

                {{-- <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center bg-pink-300 text-white font-medium px-4 py-2 rounded-lg shadow-md hover:bg-pink-400 transition-colors duration-300">
                        Lihat Project
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open"
                        class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-top">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="https://www.figma.com/design/zEDyEdWQMbNOKeWTT6qvTY/LUNOX?node-id=0-1&t=ex1n0OXBXuZtJGz4-1"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 mb-1" role="menuitem">UI
                                Screens Preview</a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-visible text-center p-4 ">
                <span class="inline-block bg-red-200 text-red-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                    Competition Project
                </span>
                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764511965/Tambahkan_judul_dsxdtq.png"
                    alt="Desain Kartu Nama" class="w-full rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Aplikasi Mobile Ngider Bandung</h3>
                <p class="text-gray-600 text-sm mt-2 mb-4 text-justify">Aplikasi mobile ini dirancang untuk membantu
                    pengguna yang kesulitan dalam mencari informasi mengenai posisi dan keberadaan transportasi umum,
                    seperti bus dan angkot, di Kota Bandung. </p>

                {{-- <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center bg-pink-300 text-white font-medium px-4 py-2 rounded-lg shadow-md hover:bg-pink-400 transition-colors duration-300">
                        Lihat Project
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open"
                        class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-top">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="https://www.figma.com/proto/DYE2QkDdknvFCCGUVGm5yP/NgiderBandung?node-id=58-111&p=f&t=K1nGkRNRaTGrn1Ta-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 mb-1" role="menuitem">UI
                                Screens Preview</a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-visible text-center p-4">
                <span
                    class="inline-block bg-green-200 text-green-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                    Client Project
                </span>
                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764577385/lu_shop_ju4r5z.png"
                    alt="Poster Promosi" class="w-full rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Web LUNOX Shop</h3>
                <p class="text-gray-600 text-sm mt-2 mb-4 text-justify">Melalui website ini, pengalaman belanja yang lebih mudah, praktis, dan nyaman 
                    untuk mendapatkan berbagai kebutuhan perawatan gigi dan mulut</p>

                {{-- <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center bg-pink-300 text-white font-medium px-4 py-2 rounded-lg shadow-md hover:bg-pink-400 transition-colors duration-300">
                        Lihat Project
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open"
                        class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-top">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="https://www.figma.com/design/rQqc0kJiq5VOZDqDRwUORP/SHOP-LUNOX?node-id=0-1&t=87CzldLbjNWCDwVK-1"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">UI
                                Screens Preview</a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-visible text-center p-4">
                <span
                    class="inline-block bg-green-200 text-green-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                    Client Project
                </span>
                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1763007227/DOkumen_Porto_2_etpmch.png"
                    alt="Poster Promosi" class="w-full rounded-lg mb-4">
                <h3 class="text-lg font-semibold">Web Klinik Smile</h3>
                <p class="text-gray-600 text-sm mt-2 mb-4 text-justify">Melalui website ini, pasien dapat mengenal
                    profil dokter, melihat jadwal praktik, serta memperoleh informasi seputar layanan
                    dan lokasi klinik untuk mendukung kemudahan dalam membuat Antrian.</p>

                {{-- <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center bg-pink-300 text-white font-medium px-4 py-2 rounded-lg shadow-md hover:bg-pink-400 transition-colors duration-300">
                        Lihat Project
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open"
                        class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 origin-top">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="https://www.figma.com/design/9Pt10qo1EXSMGjvh7LFnP3/SMILE-WEB?node-id=0-1&t=f19ZJ4HqoYASj7Uj-1"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">UI
                                Screens Preview</a>
                        </div>
                    </div>
                </div> --}}
            </div>


    </section>




    <section id="design" class="container mx-auto px-6 py-24 md:py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">
            DESIGN DOCUMENTATION
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 justify-items-center">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761999576/1_ubnkx8.png" alt="Design 1"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761999564/4_fnypkk.png" alt="Design 2"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761999564/5_wfecq0.png" alt="Design 3"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761999564/3_kgrc24.png" alt="Design 4"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
        </div>
    </section>

    <!-- === CERTIFICATES (dipindah ke paling bawah) === -->
    <section id="certificates" class="container mx-auto px-6 py-24 md:py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">CERTIFICATES</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761410374/SERTIFIKAT_BOOTCAMP_cnzrds.jpg"
                alt="Sertifikat UI/UX Bootcamp"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761410321/E_-_Sertifikat_Alat_Bantu_Gambar_Digital_untuk_Antarmuka_Aplikasi_an._Raendhana_Ilmi_Vadhiasih_page-0001_r6oszw.jpg"
                alt="Sertifikat Asisten Praktikum"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761410295/WhatsApp_Image_2025-06-19_at_14.12.57_148a093b_n6vjmo.jpg"
                alt="Sertifikat Magang"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
        </div>
    </section>

    <footer class="bg-black text-white py-12 mt-16">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-3xl font-bold">Raendhana Ilmi V.</h3>
                    <p class="text-yellow-200 mt-1">Web Developer | UI/UX Designer</p>
                </div>

                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-12 mb-6 md:mb-0">
                    <div class="flex flex-col items-center sm:items-start">
                        <p class="font-bold text-lg mb-2">Navigation</p>
                        <a href="#about" class="hover:text-yellow-200 transition-colors duration-300">About Me</a>
                        <a href="#projects" class="hover:text-yellow-200 transition-colors duration-300">Projects</a>
                        <a href="#skills" class="hover:text-yellow-200 transition-colors duration-300">Skills</a>
                    </div>
                    
                    <div class="flex flex-col items-center sm:items-start">
                        <p class="font-bold text-lg mb-2">Connect</p>
                        <a href="mailto:raendhana@gmail.com"
                            class="hover:text-yellow-200 transition-colors duration-300">Email</a>
                        <a href="https://wa.me/6289665908930"
                            class="hover:text-yellow-200 transition-colors duration-300">Phone</a>
                        <a href="https://www.linkedin.com/in/raendhana-ilmi-vadhiasih" target="_blank"
                            class="hover:text-yellow-200 transition-colors duration-300">LinkedIn</a>
                        <a href="https://www.instagram.com/raemiv_/" target="_blank"
                            class="hover:text-yellow-200 transition-colors duration-300">Instagram</a>
                    </div>
                </div>

                <div class="text-center md:text-right">
                    <p class="font-bold text-lg mb-3">Ready to Collaborate?</p>
                    <a href="mailto:raendhana@gmail.com"
                        class="bg-white text-black font-bold py-2 px-6 rounded-full hover:bg-pink-400 transition-colors duration-300 shadow-md">
                        Get In Touch
                    </a>
                </div>
            </div>

            <hr class="border-t border-white border-opacity-30 my-8">

            <div class="text-center text-sm text-white text-opacity-80">
                &copy; 2025 Raendhana Ilmi Vadhiasih. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(el => observer.observe(el));
        });
    </script>

</body>

</html>