<?php

namespace App\Http\Controllers;

use App\Models\TableKoinModel;
use App\Models\Jual;
use App\Http\Requests\StorejualRequest;
use App\Http\Requests\UpdatejualRequest;

use Illuminate\Support\Facades\Auth;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datajual = Jual::all();
        return view('admin.manageTextil', compact('datajual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorejualRequest $request)
    {
        jual::create([
            'id_user' => Auth::user()->id,
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'tgljual' => $request->tanggal,
            'email' => $request->email,
            'no_hp' => $request->telepon,
            'pakaian' => $request->pakaian,
            'cr_kirim' => $request->pengiriman,
        ]);
        // ambil data koin dari database
        $koin = TableKoinModel::where('id_user', Auth::user()->id)->first();
        // periksa apakah data koin sudah ada di database
        if (!$koin) {
            // jika belum, buat data koin baru untuk user ini
            $koin = new TableKoinModel();
            $koin->id_user = Auth::User()->id;
            $koin->saldo_koin = 200;
        } else {
            // jika sudah, tambahkan saldo koin
            $koin->saldo_koin += 200;
        }
        // simpan data koin ke database
        $koin->save();
        // simpan data koin ke dalam session
        session()->put('datakoin', $koin);
        return redirect('/halamanjual')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(jual $jual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jual $jual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejualRequest $request, jual $jual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jual $jual)
    {
        //
    }
}