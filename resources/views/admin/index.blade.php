@extends('layouts.master')

@section('name')
    Admin Dashboard
@endsection

@section('sidebar')
@endsection

@section('content')
    <!-- ======================= Cards ================== -->
    <img src="{{ asset('images/gambarback.png') }}" alt="gambarback" id="gambarback">

    {{-- <h2 class="overview ">Overview</h2> --}}
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers" id="user-count">0</div>
                <div class="cardName">Jumlah Users</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers" id="jual-count">0</div>
                <div class="cardName">Jumlah Penjualan</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers" id="donasi-count">0</div>
                <div class="cardName">Jumlah Donasi</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>

        </div>
    </div>

    <!-- ================ Order Details List ================= -->

    <div class="detail-index">
        <div class="recentOrders-index">
            <div class="cardHeader">
                <h2>Dashboard</h2>
                <a href="{{ route('statistika-geograpy') }}" class="btn">View Indonesia Geograpy Statistics Tekstil</a>
            </div>

            <section class="welcome">
                <h2>Selamat datang, Admin!</h2>
                <p>Ini adalah halaman dashboard SIPETE (Sistem Pengolahan Limbah Textil).</p>
            </section>



            <section class="management">

                {{-- <div class="container mx-auto">
                    <h1 class="text-2xl font-bold text-center mb-4">Statistics</h1>
                    <canvas id="myChart"></canvas>
                </div> --}}


                {{-- <div class="detail-index">
        <div class="recentOrders-index">
            <div class="cardHeader">
                <h1
                    class="text-4xl font-semibold text-center mt-6 sm:mt-[20vh] ml-auto mr-auto mb-10 sm:mb-16 flex gap-2 items-center justify-center">
                    Dashboard</h1> {{-- <a href="#" class="btn">View All</a> --}}
                {{-- </div> --}}

                {{-- <section class="welcome">
                <h2>Selamat datang, Admin!</h2>
                <p>Ini adalah halaman dashboard SIPETE (Sistem Pengolahan Limbah Textil).</p>
            </section> --}}



                {{-- <section class="management">

                <h2>Manajemen</h2>
                <div class="card-group">
                    <div class="card">
                        <h3>Manajemen Pengguna</h3>
                        <p>Anda dapat mengelola pengguna pada menu ini.</p>
                        <a href="{{ route('manage-user') }}" class="button">Kelola</a>
                    </div>
                    <div class="card">
                        <h3>Manajemen Limbah</h3>
                        <p>Anda dapat mengelola limbah pada menu ini.</p>
                        <a href="{{ route('manage-textil') }}" class="button">Kelola</a>
                    </div>
                    <div class="card">
                        <h3>Manajemen Daur Ulang</h3>
                        <p>Anda dapat mengelola proses daur ulang limbah pada menu ini.</p>
                        <a href="#" class="button">Kelola</a>
                    </div>
                </div>

            </section>
    {{-- <table>

            </section>

            {{-- <table>
                <thead>
                    <tr>
                        <td>Id Order </td>
                        <td>Nama Customert</td>
                        <td>Status</td>
                        <td>Jumlah Item</td>
                        <td>Total Biaya</td>
                        <td>Lokasi Penerima</td>
                        <td>Product Details</td>
                        <td>Lokasi</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gatot Kaca</td>
                        <td><span class="status delivered">Delivered</span></td>
                        <td>2</td>
                        <td>Rp. 50.000</td>
                    </tr>


                </tbody>
            </table> --}}

        </div>
        @parent

    </div>
    </div>
    </div>
@endsection

@section('footer')
@endsection
