@extends('layouts.master')

@section('title')
    create user
@endsection

@section('content')
    <h3 class="tambahAdmin">TAMBAH BARANG</h3>
    <div class="card-body">
        <form action="{{ route('simpan-barang') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" id="name" name="nama" class="form-control" placeholder="nama user">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="profile"
                    class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100" />
            </div>
            <div class="form-group">
                <button
                    class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 ... rounded-full ..."
                    type="submit">Simpan</button>
            </div>

        </form>
    </div>
@endsection
@section('foooter')
@endsection
