@extends('layouts.master')

@section('title')
    create user
@endsection

@section('content')
    <h3 class="tambahAdmin">TAMBAH ADMIN</h3>
    <div class="card-body">
        <form action="{{ route('simpan-user') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="nama user">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password]">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select name="role" id="role">
                    <option value=""></option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="provinsi">Provinsi:</label><br>
                <select id="provinsi" name="provinsi">
                    <option value="Aceh">Aceh</option>
                    <option value="Bali">Bali</option>
                    <option value="Banten">Banten</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Lampung">Lampung</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Riau">Riau</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="provinsi">Alamat: </label><br>
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="tgllhr"mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400
                    focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm
                    focus:ring-1" placeholder="you@example.com class="">Tanggal Lahir: </label><br>
                <input type="date" id="tgllhr" name="tgllhr" class="form-control">
            </div> --}}
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
