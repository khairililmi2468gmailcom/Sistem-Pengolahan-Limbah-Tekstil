@extends('layouts.master')

@section('title')
    Manage User
@endsection

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
            <label for="table-search" class="sr-only">Search</label>
            <!-- <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div> -->
        </div>
    </div>
    <table border="3" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4 text-center">
                    {{-- <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div> --}}
                    Id
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Nama
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Pesan
                </th>
            </tr>
            @foreach ($kritiksarans as $ks)
                <tr>
                    <td class='text-center'>
                        {{ $ks->id }}
                    </td>
                    <td>
                        {{ $ks->nama }}
                    </td>
                    <td>
                        {{ $ks->email }}
                    </td>
                    <td>
                        {{ $ks->pesan }}
                    </td>
                </tr>
            @endforeach
        </thead>
        <tbody>
            </div>
            @parent
        @endsection

        @section('foooter')
        @endsection
