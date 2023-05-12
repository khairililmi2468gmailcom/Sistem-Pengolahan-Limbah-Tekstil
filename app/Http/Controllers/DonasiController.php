<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\TableKoinModel;
use App\Http\Requests\StoreDonasiRequest;
use App\Http\Requests\UpdatedonasiRequest;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datadonasi = Donasi::all();
        return view('admin.kelolaDonasi', compact('datadonasi'));
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
    public function store(StoreDonasiRequest $request)
    {
        $donasi = Donasi::create([
            'id_user' => Auth::user()->id,
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'tgldonasi' => $request->tanggal,
            'email' => $request->email,
            'no_hp' => $request->telepon,
            'cr_kirim' => $request->pengiriman
        ]);


        return redirect()->back();
    }

    public function terima($id)
    {
        $donasi = Donasi::find($id);
        if ($donasi->status == 'dalam antrian') {
            $donasi->status = 'menunggu konfirmasi pengiriman';
            $donasi->save();

            // Ambil data koin dari database
            $koin = TableKoinModel::where('id_user', Auth::user()->id)->first();
            // Periksa apakah data koin sudah ada di database
            if (!$koin) {
                // Jika belum, buat data koin baru untuk user ini
                $koin = new TableKoinModel();
                $koin->id_user = Auth::user()->id;
                $koin->saldo_koin = 100;
            } else {
                // Jika sudah, tambahkan saldo koin
                $koin->saldo_koin += 100;
            }

            // Simpan data koin ke dalam database
            $koin->save();

            // Simpan data koin ke dalam session
            session()->put('datakoin', $koin);

            return redirect()->back()->with('success', 'Pesanan telah diterima.');
        } else {
            return redirect()->back()->with('error', 'Pesanan sudah diterima sebelumnya.');
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Donasi $Donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donasi $Donasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    // public function updateStatus(Request $request, $id)
    // {

    // }
    public function update(UpdateDonasiRequest $request, Donasi $Donasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $donasi = Donasi::where('id', $id)->first();
        if ($donasi) {
            $donasi->delete();
        }
        return redirect()->back();
    }


}