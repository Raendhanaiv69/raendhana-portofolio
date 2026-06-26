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

        /* --- Animasi Scroll Horizontal Kustom --- */
        @keyframes autoscroll-right {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(calc(-100% + 100vw - 48px));
            }

            100% {
                transform: translateX(0);
            }
        }

        .skills-autoscroll {
            width: max-content; 
            animation: autoscroll-right 30s linear infinite normal;
        }

        .skills-autoscroll:hover {
            animation-play-state: paused;
        }
        
        .skills-track-outer {
            overflow-x: hidden;
            padding-bottom: 1rem;
        }

        /* Animasi Umum */
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
            from { opacity: 0; }
            to { opacity: 1; }
        }

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

        .bg-pink-custom {
            background-color: #ED6495;
        }

        .text-yellow-200 {
            color: #fef08a;
        }

        .text-white {
            color: #ffffff;
        }
    </style>
</head>

<body class="min-h-screen bg-custom-yellow flex flex-col">

    <header class="fixed top-0 left-0 w-full z-50 p-4">
        <nav class="max-w-5xl mx-auto bg-black h-16 w-full rounded-full flex items-center justify-between px-4 md:px-6 py-2 z-30 shadow-xl">
            <div>
                <span class="text-pink-custom font-bold text-xl">PORTOFOLIO</span>
            </div>

            <div class="hidden md:flex h-full items-center">
                <div class="bg-pink-custom rounded-full flex items-center px-4 space-x-4 md:space-x-8 h-full">
                    <a href="#home" class="text-yellow-200 hover:text-white transition-colors duration-300 text-xs font-bold">HOME</a>
                    <a href="#about" class="text-white hover:text-yellow-200 transition-colors duration-300 text-xs font-bold">ABOUT ME</a>
                    <a href="#projects" class="text-white hover:text-yellow-200 transition-colors duration-300 text-xs font-bold">PROJECT EXPERIENCE</a>
                    <a href="#manual-book" class="text-white hover:text-yellow-200 transition-colors duration-300 text-xs font-bold">MANUAL BOOK</a>
                    <a href="#skills" class="text-white hover:text-yellow-200 transition-colors duration-300 text-xs font-bold">SKILLS</a>
                </div>
            </div>
        </nav>
    </header>

    <main id="home" class="flex flex-col items-center justify-center flex-grow p-6 md:p-10 mt-36 text-center fade-in">
        <p class="text-gray-700 font-bold text-base sm:text-lg md:text-2xl">
            Hello, I am
        </p>

        <h1 class="text-center font-800 text-pink-custom leading-tight mt-2 text-4xl sm:text-5xl md:text-6xl lg:text-7xl max-w-full font-bold tracking-tight">
            RAENDHANA ILMI VADHIASIH
        </h1>

        <p class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 mt-3 tracking-wide">
            SOFTWARE QUALITY ASSURANCE & WEB DEVELOPER
        </p>

        <p class="text-gray-600 font-medium text-sm sm:text-base md:text-lg mt-2 max-w-2xl">
            Berfokus pada pengembangan aplikasi web yang andal serta melakukan pengujian end-to-end yang ketat demi memastikan fungsionalitas produk digital berjalan optimal dan bebas dari celah eror.
        </p>

        <button onclick="window.location.href='#projects'"
            class="btn-gradient font-bold py-3 px-8 rounded-full mt-6 shadow-custom-pink hover:opacity-90 transition-all duration-300 text-sm sm:text-base transform hover:-translate-y-1">
            Lihat Rekam Jejak Pengujian & Dev
        </button>

        <div class="flex items-center justify-center mt-6 space-x-6">
            <a href="https://github.com/username" target="_blank" class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.387.6.113.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.613-4.042-1.613-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.205.084 1.84 1.238 1.84 1.238 1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.932 0-1.31.468-2.38 1.236-3.22-.124-.303-.536-1.524.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.045.137 3.003.404 2.29-1.552 3.296-1.23 3.296-1.23.656 1.652.244 2.873.12 3.176.77.84 1.234 1.91 1.234 3.22 0 4.61-2.803 5.624-5.475 5.922.43.372.814 1.104.814 2.227 0 1.606-.015 2.898-.015 3.293 0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.63-5.37-12-12-12z" /></svg>
            </a>
            <a href="https://www.linkedin.com/in/raendhanaiv/" target="_blank" class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452H17.3V14.9c0-1.314-.026-3.003-1.828-3.003-1.829 0-2.11 1.43-2.11 2.906v5.649h-3.147V9h3.021v1.561h.043c.421-.797 1.449-1.637 2.983-1.637 3.189 0 3.777 2.099 3.777 4.823v6.704zM5.337 7.433a1.833 1.833 0 11-.003-3.667 1.833 1.833 0 01.003 3.667zM6.963 20.452H3.71V9h3.253v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.728v20.543C0 23.226.792 24 1.771 24h20.451C23.205 24 24 23.226 24 22.271V1.728C24 .774 23.205 0 22.225 0z" /></svg>
            </a>
        </div>
    </main>

    <section id="about" class="container mx-auto px-10 py-16 md:py-24 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12">About Me</h2>
        <div class="flex flex-col md:flex-row items-center md:items-start justify-center gap-10 lg:gap-20">
            <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-2xl overflow-hidden shadow-lg transform rotate-6 hover:rotate-0 transition-transform duration-300 bg-pink-300 p-2">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-300 to-yellow-200 opacity-75 rounded-2xl z-0"></div>
                <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761407635/akuu_cnjopf.jpg" alt="Foto Ilmi" class="relative z-10 w-full h-full object-cover rounded-xl border-4 border-white shadow-md">
            </div>

            <div class="max-w-xl text-center md:text-left">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Who Am I</h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 text-justify">
                    Saya merupakan lulusan D3 Rekayasa Perangkat Lunak Aplikasi dengan spesialisasi ganda yang solid di bidang <strong>Software Quality Assurance (SQA)</strong> dan <strong>Web Development</strong>. Berbekal kemampuan teknis di kedua lini tersebut, saya memiliki keunggulan dalam memahami arsitektur kode sekaligus merancang skenario pengujian yang komprehensif. Saya berpengalaman dalam mengelola siklus hidup pengujian aplikasi mulai dari penyusunan <em>test case</em>, eksekusi manual testing, integrasi fitur kompleks (seperti Point System dan Google Calendar API), koordinasi User Acceptance Testing (UAT), hingga proses Go-Live untuk memastikan sistem bebas dari bug kritis dan siap pakai oleh pengguna akhir.
                </p>

                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Personal Info</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-gray-700 text-base md:text-lg">
                    <div>
                        <p><strong class="font-semibold">Education :</strong> Telkom University, Rekayasa Perangkat Lunak Aplikasi</p>
                        <p><strong class="font-semibold">GPA :</strong> 3.77</p>
                    </div>
                    <div>
                        <p><strong class="font-semibold">Email :</strong> raendhana@gmail.com</p>
                        <p><strong class="font-semibold">Phone :</strong> 089665908930</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="container mx-auto px-6 py-16 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-5xl font-bold text-gray-800">
                Exploring my expertise <br />
                <span class="text-pink-custom">Behind My QA & Development Skills</span>
            </h2>
        </div>

        <div class="skills-track-outer">
            <div id="skill-container" class="flex space-x-8 skills-autoscroll">
                
                <!-- 2. Selenium -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/selenium/selenium-original.svg" alt="Selenium" class="w-10 h-10">
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Selenium</p>
                    <p class="text-pink-custom font-bold text-sm">75%</p>
                </div>

                <!-- 3. Katalon Studio -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <!-- Menggunakan icon representasi automation gear/browser karena Katalon tidak ada di devicon default -->
                        <svg class="w-10 h-10 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Katalon Studio</p>
                    <p class="text-pink-custom font-bold text-sm">70%</p>
                </div>

                <!-- 4. Postman API -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg" alt="Postman" class="w-10 h-10">
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Postman API</p>
                    <p class="text-pink-custom font-bold text-sm">85%</p>
                </div>

                <!-- 5. Laravel -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-10 h-10">
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Laravel</p>
                    <p class="text-pink-custom font-bold text-sm">90%</p>
                </div>

                <!-- 6. Figma -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="w-10 h-10">
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Figma</p>
                    <p class="text-pink-custom font-bold text-sm">90%</p>
                </div>

                <!-- 7. Trello -->
                <div class="flex flex-col items-center space-y-2 flex-shrink-0 w-32">
                    <div class="w-20 h-20 rounded-full shadow-md bg-white flex items-center justify-center hover:scale-105 transition-transform duration-300 border border-gray-100">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain.svg" alt="Trello" class="w-10 h-10">
                    </div>
                    <p class="text-gray-700 font-semibold text-xs mt-1 text-center">Trello (Agile)</p>
                    <p class="text-pink-custom font-bold text-sm">90%</p>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECT EXPERIENCE -->
    <section id="projects" class="container mx-auto px-6 py-16 animate-on-scroll">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-5xl font-bold text-gray-800">PROJECT EXPERIENCE</h2>
            <p class="text-gray-600 mt-2 font-medium">Rekam jejak kontribusi pengembangan sistem dan penjaminan kualitas aplikasi (Testing & Dev)</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center max-w-7xl mx-auto">

            <!-- PROJECT 1: DMS (NEW - PT AMERTA INDAH OTSUKA) -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-full">Internship Project</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Full SQA Process</span>
                    </div>
                    <!-- Placeholder gambar, silakan ganti url gambarnya jika ada -->
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1782451356/image_sfckp9.png" alt="Web Klinik LUNOX" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">DMS (Document Management System)</h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">PT Amerta Indah Otsuka</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Aplikasi enterprise berskala besar untuk digitalisasi, pengarsipan, tracking alur approval, dan manajemen dokumen internal perusahaan.</p>
                        <p><strong>Kontribusi SQA:</strong> Bertanggung jawab penuh dalam menyusun skenario pengujian System Integration Testing (SIT) dan memandu jalannya User Acceptance Testing (UAT) bersama pengguna. Saya merancang skenario validasi otorisasi bertingkat, memastikan integritas data antar-departemen, serta mengawal proses pengujian hingga tahap Go-Live guna menjamin sistem siap digunakan secara aman di lingkungan produksi.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">SIT Scenario</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Access Control</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Document Flow</span>
                </div>
            </div>

            <!-- PROJECT 2: I-CLAIM (NEW - PT AMERTA INDAH OTSUKA) -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-full">Internship Project</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Full SQA Process</span>
                    </div>
                    
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1782451356/image_sfckp9.png" alt="Web Klinik LUNOX" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">I-Claim </h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">PT Amerta Indah Otsuka</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Sistem aplikasi internal terintegrasi untuk pengajuan klaim biaya perjalanan dinas (Traveling Claim) dan pembelian langsung (Direct Purchase).</p>
                        <p><strong>Kontribusi SQA:</strong> Menyusun matrik skenario SIT, mengoordinasikan eksekusi UAT bersama tim finance, serta mengawal fase Go-Live aplikasi. Fokus utama saya adalah memastikan akurasi kalkulasi finansial klaim, validasi lampiran dokumen, dan kelancaran transisi sistem saat rilis resmi tanpa ada blocker bug.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">SIT Testing</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Calculation Audit</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Claim Validation</span>
                </div>
            </div>

            <!-- PROJECT 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full">Client Project</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Dev & Testing</span>
                    </div>
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1761997124/DOkumen_Porto_gwlu5b.png" alt="Web Klinik LUNOX" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">Web Klinik LUNOX (Booking System)</h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">Independent Project</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Aplikasi web profil dokter, jadwal praktik, serta manajemen janji temu medis secara real-time.</p>
                        <p><strong>Kontribusi Dev & SQA:</strong> Mengembangkan fitur back-end menggunakan Laravel. Merancang skenario pengujian komprehensif pada alur integrasi Google Calendar API untuk sinkronisasi jadwal, menulis dokumen test case, serta menekan angka gagal booking.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Laravel</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Manual Testing</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">API Testing</span>
                </div>
            </div>

            <!-- PROJECT 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full">Client Project</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Dev & Testing</span>
                    </div>
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764577385/lu_shop_ju4r5z.png" alt="Web LUNOX Shop" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">Web E-Commerce: LUNOX Shop</h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">Independent Project</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Platform e-commerce khusus produk kesehatan gigi dan mulut yang dilengkapi Point & Top-Up System.</p>
                        <p><strong>Kontribusi Dev & SQA:</strong> Implementasi dan pengujian logika kompleks dari Sistem Top-Up & Point Redemption. 
                            Memastikan sinkronisasi data sisa stok barang dengan poin pengguna berjalan konsisten melalui serangkaian pengujian batas.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Laravel</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Logic Testing</span>
                </div>
            </div>

            <!-- PROJECT 5 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full">Final Project (TA)</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Dev & Testing</span>
                    </div>
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1763007227/DOkumen_Porto_2_etpmch.png" alt="Web Klinik Smile" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">Web Klinik Smile</h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">Tugas Akhir / Final Project</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Sistem berbasis web untuk memfasilitasi pembuatan nomor antrean pasien secara otomatis, terstruktur, dan transparan guna mengurai penumpukan di klinik.</p>
                        <p><strong>Kontribusi Dev & SQA:</strong> Dalam proyek Tugas Akhir ini, saya berperan penuh. Di sisi Development, saya membangun arsitektur sistem dan logika antrean dinamis menggunakan Laravel. 
                            Di sisi SQA, saya memimpin proses System Integration Testing (SIT) dan User Acceptance Testing (UAT) dengan mendesain skenario multi-role guna memastikan validitas antrean berjalan runtut tanpa adanya tabrakan nomor urut.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Laravel Dev</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">SIT & UAT</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Queue Logic Validation</span>
                </div>
            </div>

            <!-- PROJECT 6 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 flex flex-col justify-between border-t-4 border-pink-custom">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-red-100 text-red-800 text-xs font-bold px-3 py-1 rounded-full">Competition Project</span>
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">UI/UX Testing</span>
                    </div>
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764511965/Tambahkan_judul_dsxdtq.png" alt="Ngider Bandung" class="w-full rounded-lg mb-4 object-cover h-48">
                    <h3 class="text-xl font-bold text-gray-800">Aplikasi Mobile Ngider Bandung</h3>
                    <p class="text-xs font-semibold text-pink-custom mb-2">Design Concept</p>
                    
                    <div class="mt-3 space-y-2 text-gray-600 text-sm text-justify">
                        <p><strong>Deskripsi:</strong> Konsep aplikasi mobile pelacakan real-time rute transportasi umum (bus dan angkot) di Kota Bandung.</p>
                        <p><strong>Kontribusi Dev & SQA:</strong> Melakukan pengujian usabilitas awal (Usability Testing) melalui prototipe interaktif Figma demi menjamin *user flow* pencarian rute dibuat sesederhana mungkin sebelum masuk tahap sprint coding.</p>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Figma Proto</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Usability Test</span>
                    <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-semibold">Flow Verification</span>
                </div>
            </div>

        </div>
    </section>

    <section id="manual-book" class="container mx-auto px-6 py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12">
            MANUAL BOOK & TEST DOCUMENTATION
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 max-w-5xl mx-auto">
            <div class="flex justify-center order-2 md:order-2">
                <div class="design-img-container max-w-xl rounded-xl shadow-2xl bg-yellow-100 border-2 border-pink-darker">
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764852499/1_jsoibj.png" alt="Mockup Manual Book LUNOX" class="w-full p-2 hover:scale-100" style="max-height: 100%;">
                </div>
            </div>
            <div class="order-1 md:order-1 text-justify">
                <h3 class="text-2xl font-bold text-pink-custom mb-4">
                    Manual Book & Feature Specification: Web Klinik LUNOX
                </h3>
                
                <ul class="list-disc list-inside text-gray-700 space-y-1 bg-white p-4 rounded-xl shadow-sm">
                    <li><strong class="font-semibold">Cakupan QA:</strong> Validasi Akses Role, Logika Validasi Form, UAT Sign-off.</li>
                    <li><strong class="font-semibold">Tools Dok:</strong> Canva, Figma, Google Docs.</li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-w-5xl mx-auto">
            <div class="flex justify-center order-2">
                <div class="design-img-container max-w-xl rounded-xl shadow-2xl bg-yellow-100 border-2 border-pink-darker">
                    <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764852509/2_wtyexi.png" alt="Mockup Manual Book SMILE" class="w-full p-2 hover:scale-100" style="max-height: 100%;">
                </div>
            </div>
            <div class="order-1 text-justify">
                <h3 class="text-2xl font-bold text-pink-custom mb-4">
                    Skenario Sistem Panduan: Web Klinik SMILE
                </h3>
                
                <ul class="list-disc list-inside text-gray-700 space-y-1 bg-white p-4 rounded-xl shadow-sm">
                    <li><strong class="font-semibold">Cakupan QA:</strong> Alur Pengambilan Antrean, Validasi Transaksi Riwayat.</li>
                    <li><strong class="font-semibold">Tools Dok:</strong> Canva, Figma.</li>
                </ul>
            </div>
        </div>
    </section>


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
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1764825167/Raendhana_Ilmi_Vadhiasih_-_E-Certif_SC_UX_Writing_Introduction_MySkill_page-0001_t51flo.jpg"
                alt="Sertifikat Ux writting"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="https://res.cloudinary.com/dqwuxciqw/image/upload/v1782449980/SERTIFIKAT_KEMNAKER_RAENDHANA_ILMI_page-0001_iugael.jpg"
                alt="Sertifikat Ux writting"
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
                        <a href="#certificates" class="hover:text-yellow-200 transition-colors duration-300">Certificates</a>
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