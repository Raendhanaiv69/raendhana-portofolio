<nav class="sticky top-4 bg-black h-16 w-full rounded-full flex items-center justify-between px-4 md:px-6 py-2 z-30">
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

    <div class="hidden md:flex h-full bg-pink-custom rounded-full items-center px-4 space-x-4 md:space-x-8">
        <a href="#" class="text-yellow-200 hover:text-white transition-colors duration-300">HOME</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300">ABOUT ME</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300">PROJECT</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300">SKILL</a>
    </div>
</nav>

<div id="menu-mobile-container" class="md:hidden hidden">
    <div class="bg-pink-custom mx-4 mt-2 p-4 rounded-xl flex flex-col space-y-3 shadow-lg">
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300 py-2 text-center font-semibold border-b border-white/20">HOME</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300 py-2 text-center font-semibold border-b border-white/20">ABOUT ME</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300 py-2 text-center font-semibold border-b border-white/20">PROJECT</a>
        <a href="#" class="text-white hover:text-yellow-200 transition-colors duration-300 py-2 text-center font-semibold">SKILL</a>
    </div>
</div>

<script>
    const btn = document.getElementById('menu-btn');
    const menuMobileContainer = document.getElementById('menu-mobile-container'); // Mengubah ID yang ditargetkan

    btn.addEventListener('click', () => {
        // Toggle class 'hidden' pada container menu mobile
        menuMobileContainer.classList.toggle('hidden');
    });
</script>

<style>
/* Tetap masukkan style kustom Anda */
.bg-custom-yellow {
    background-color: #FFF9CB;
}
.text-pink-custom {
    color: #ED6495;
}
.bg-pink-custom {
    background-color: #ED6495;
}
</style>