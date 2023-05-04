<?php

namespace App\Http\Controllers;

use App\Models\jual;
use App\Http\Requests\StorejualRequest;
use App\Http\Requests\UpdatejualRequest;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'tgldonasi' => $request->tanggal,
            'email' => $request->email,
            'no_hp' => $request->telepon,
            'pakaian' => $request->pakaian,
            'cr_kirim' => $request->pengiriman,
        ]);
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