@extends('layouts.app')

@section('content')
    <div class="pl-14 pt-40">
        <div>
            <h1 class="pt-20 mb-5 font-[arial] text-6xl font-extrabold  text-[#0B63F8]  ">Dibuka 24 Jam</h1>
        </div>
        <div>
            <h1 class=" mb-5 font-[arial] font-extrabold tracking-tighter text-6xl">Kelola Limbah Tekstil</h1>
        </div>
        <div>
            <h1 class=" pl-1 mb-3 ">Ayo kelola limbah tekstilmu disini</h1>
        </div>
        <div class="pt-4">
            <a href="/pengelolaan"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kelola
                Sekarang
            </a>
        </div>
    </div>

    <div class="text-center pt-32">
        <div>
            <h1 class=" font-[arial] font-extrabold text-4xl mb-9 text-[#118EEA]">About<span
                    class="font-[arial] font-extrabold text-[#000000]"> Us</span></h1>
            <h2 class=" font-[arial] font-extrabold tracking-wide ">Kami ada 24 jam non-stop untuk melayani anda dalam
                menangani sampah tekstil</h2>
        </div>
        <div class="pt-16 p-16">
            <iframe class="w-full h-96 max-w-full border border-gray-200 rounded-lg dark:border-gray-700"
                src="https://www.youtube.com/embed/NW3OFK-O3DM">
            </iframe>
        </div>
    </div>
    <div>
        <div class="text-center pt-20">
            <h1 class="font-[arial] font-extrabold text-4xl">Artikel</h1>
        </div>
        <div class=" pt-16">

            <div id="default-carousel" class="relative w-full" data-carousel="slide">

                <div class="relative overflow-hidden rounded-lg md:h-96">

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a
                            href="https://www.grid.id/parapuan/read/532891955/melihat-potensi-hadirnya-lapangan-kerja-baru-lewat-pengelolaan-sampah?page=all">
                            <img src="/images/grid.jpg"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                                alt="...">
                            <h3 class="absolute text-2xl text-white font-bold top-5 left-5">Melihat Potensi Hadirnya
                                Lapangan Kerja Baru Lewat Pengelolaan Sampah</h3>
                        </a>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a
                            href="https://money.kompas.com/read/2022/02/24/083300926/kurangi-limbah-tekstil-bappenas-ajak-industri-terapkan-konsep-fashion-sirkular?page=all">
                            <img src="/images/kompas.jpg"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                                alt="...">
                            <h3 class="absolute text-2xl text-white font-bold top-5 left-5">Kurangi Limbah Tekstil, Bappenas
                                Ajak Industri Terapkan Konsep Fashion Sirkular</h3>
                        </a>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a
                            href="https://foto.kompas.com/photo/read/2020/2/17/1581948059356/2/Limbah-Industri-Busana-Ancaman-Serius-bagi-Lingkungan#&gid=1&pid=1">
                            <img src="/images/orang.png"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                                alt="...">
                            <h3 class="absolute text-2xl text-white font-bold top-5 left-5">Limbah Industri Busana, Ancaman
                                Serius bagi Lingkungan</h3>
                        </a>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a
                            href="https://www.kompasiana.com/ciciarfian26/5d6266a30d8230502975ba03/atasi-limbah-konveksi-di-kelurahan-purwosari-kkn-unnes-adakan-pelatihan-konversi-kain-perca">
                            <img src="/images/kompasiana.jpg"
                                class="absolute block  w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                                alt="...">
                            <h3 class="absolute text-2xl text-white font-bold top-5 left-5">Atasi Limbah Konveksi di
                                Kelurahan Purwosari, KKN UNNES Adakan Pelatihan Konversi Kain Perca</h3>
                        </a>
                    </div>
                </div>

                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>

                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
@endsection
