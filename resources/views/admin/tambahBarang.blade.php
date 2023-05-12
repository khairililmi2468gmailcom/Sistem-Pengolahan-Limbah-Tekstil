@extends('layouts.master')

@section('name')
    Tambah Barang
@endsection

@section('sidebar')
@endsection
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Gambar
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($databarang))
                    @foreach ($databarang as $barang)
                        <tr>
                            <td class="px-6 py-4">{{ $barang->id }}</td>
                            <td class="px-6 py-4">{{ $barang->nama }}</td>
                            <td class="px-6 py-4">{{ $barang->harga }}</td>
                            <td scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                {{-- @isset($data) --}}
                                <img class="w-10 h-10 rounded-full"
                                    src="{{ asset('storage/assets/profile/' . $barang->gambar) }}" alt="Gambar">
                                {{-- @endisset --}}
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>

    </div>
    <div class="cardHeader">
        <div class="card-tools">
            <a href="{{ route('tambahBarang.create') }}"
                class="font-medium text-green-600 dark:text-green-500 hover:underline">Tambah
                Data</a>
        </div>
    </div>
@endsection

@section('footer')
@endsection
