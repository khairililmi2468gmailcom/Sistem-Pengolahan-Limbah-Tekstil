@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-white flex font-medium items-center justify-center h-screen">

    <section class="w-64 mx-auto bg-[#E7ECFF] rounded-2xl px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
            <span class="text-gray-400 text-sm">Profil</span>
            <span class="text-[#118EEA]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </span>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>
        <div class="mt-8 ">
            <h2 class="text-black font-bold text-2xl tracking-wide">
                {{Auth::user()->name}}
            </h2>
        </div>
        
        <div class="h-1 w-full bg-black mt-8 rounded-full">
            <div class="h-1 rounded-full w-2/5 bg-[#111B47] "></div>
        </div>
        <div class="mt-3 text-white text-sm">
            <span class="text-gray-400 font-semibold">Donasi :</span>
            <span class="text-gray-600">100</span>
            <p class="text-[#118EEA] font-semibold mt-2.5" >
            Jual :
            </p>
        </div>
    </section>
</section>
@endsection