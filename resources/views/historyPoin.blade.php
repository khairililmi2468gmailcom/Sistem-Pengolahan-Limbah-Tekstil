@extends('layouts.app')

@section('content')
<div class="pt-32 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tanggal Penukaran Poin
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Produk Ditukarkan
                </th>
                <th scope="col" class="px-6 py-3">
                    Poin Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Saldo Poin
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_donasi as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $item -> nama }}
                </td>
                <td class="px-6 py-4">
                    {{ $item -> tgldonasi}}
                </td>
                <td class="px-6 py-4">
                    {{ $item -> cr_kirim}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> {{ $item -> status}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection