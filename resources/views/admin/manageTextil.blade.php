@extends('layouts.master')

@section('title')
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Id_User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Penjual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Penjualan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No. Hp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pakaian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cara Kirim
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @isset($datajual)
                    @foreach ($datajual as $jual)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{-- <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Baju
                    </th> --}}
                            <td class="px-6 py-4">
                                {{ $jual->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $jual->id_user }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $jual->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $jual->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $jual->tgljual }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $jual->email }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $jual->no_hp }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $jual->pakaian }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $jual->cr_kirim }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $jual->status }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                @if ($jual->status == 'dalam antrian')
                                    <form action="{{ route('manage-textil.terima', $jual->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terima</button>
                                    </form>
                                @elseif ($jual->status != 'selesai')
                                    <form action="/manage-textil/selesai/{{ $jual->id }}" method="GET">
                                        @csrf
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Selesai
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('manage-textil.destroy', $jual->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>

    {{-- <div class="detail-index">

        <div class="recentOrders-index">
            <div class="cardHeader">
                <h2>Kelola Produk</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>jenis</th>
                        <th>Beri Koin</th>
                        <th>Jumlah Barang Donasi</th>
                        <th>Jumlah Barang Jual</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($dataTextil))
                        @foreach ($dataTextil as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <button
                                        class="toggleButton absolute top-2 right-2 p-2 rounded-full bg-white shadow-lg focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <img src="{{ asset('storage/assets/profile/' . $item->gambar) }}"
                                        class="w-64 h-48 object-cover rounded-lg">


                                </td>
                                <td>
                                    <button>Edit</button>
                                    <button>
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
            {{-- <a href="{{ route('create-textil') }}" class="btn">Tambah</a> --}}

    </div>
    @parent

    </div>
    <style>
        /* Set posisi tombol */
        button#toggleButton {
            z-index: 10;
        }

        /* Sembunyikan gambar */
        img {
            display: none;
        }

        /* Tampilkan gambar ketika tombol di klik */
        .show {
            display: block;
            animation: fadeIn 1s ease-out;
        }

        /* Animasi fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        const toggleButtons = document.querySelectorAll('.toggleButton');
        const imgs = document.querySelectorAll('img');

        // Loop melalui setiap tombol untuk menambahkan event listener
        toggleButtons.forEach(function(button, index) {
            button.addEventListener('click', function() {
                // Cari img dengan index yang sama dengan tombol yang di klik
                const img = imgs[index];
                img.classList.toggle('show');
            });
        });
    </script>
@endsection

@section('footer')
    @parent
@endsection
