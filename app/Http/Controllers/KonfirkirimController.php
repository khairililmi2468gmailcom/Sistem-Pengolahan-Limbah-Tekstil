<?php

namespace App\Http\Controllers;

use App\Models\Konfirkirim;
use App\Models\Donasi;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreKonfirkirimRequest;
use App\Http\Requests\UpdateKonfirkirimRequest;

class KonfirKirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data donasi dan konfirmasi_pengiriman
        $konfirmasi_pengiriman = DB::table('konfirmasi_pengiriman')->join('donasis', 'konfirmasi_pengiriman.id_donasi', '=', 'donasis.id')->get();
        // dd($konfirmasi_pengiriman);
        return view('admin.kelolaKonfir', compact(['konfirmasi_pengiriman']));
    }

    public function konfirmasi($id)
    {
        $konfir_kirim = Donasi::find($id);
        if ($konfir_kirim->status == 'menunggu konfirmasi pengiriman') {
            $konfir_kirim->status = 'selesai';
            $konfir_kirim->save();
        }
        return redirect()->back();
    }
}