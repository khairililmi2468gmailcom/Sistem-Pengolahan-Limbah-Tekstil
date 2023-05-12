<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('name')</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">


</head>

<body>
    @yield('sidebar')
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/imgs/Sipete.svg') }}" alt="Image">
                        </span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('manage-user') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Kelola Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('manage-textil') }}">
                        <span class="icon">
                            <ion-icon name="bag-outline"></ion-icon>
                        </span>
                        <span class="title">Kelola Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kelola-donasi') }}">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Kelola Donasi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('koin.index') }}">
                        <span class="icon">
                            <ion-icon name="gift-outline"></ion-icon>
                        </span>
                        <span class="title">Kelola Koin</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('olah-data') }}">
                        <span class="icon">
                            <ion-icon name="card"></ion-icon>
                        </span>
                        <span class="title">Olah Data</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kritik-saran') }}">
                        <span class="icon">
                            <ion-icon name="bag-check-outline"></ion-icon>
                        </span>
                        <span class="title">Kritik dan Saran</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('tambahBarang') }}">
                        <span class="icon">
                            <ion-icon name="bag-check-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Barang</span>


                </li>
                <li>
                    <a href="{{ route('konfir-kirim') }}">
                        <span class="icon">
                            <ion-icon name="clipboard"></ion-icon>
                        </span>
                        <span class="title">Konfirmasi Barang</span>

                    </a>
                </li>
                {{-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbox"></ion-icon>
                        </span>
                        <span class="title">Pesan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <label for="keyword">
                            <input type="text" placeholder="Search here" id="keyword" class="form-control"
                                name="keyword value="{{ old('keyword') }}" required>
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                </div>

                <div class="user">
                    {{-- <img src="assets/imgs/putin.jpeg" alt=""> --}}
                </div>
            </div>

            @section('content')




            @show


            @yield('footer')
            <!-- =========== Scripts =========  -->
            <script src="assets/js/main.js"></script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
