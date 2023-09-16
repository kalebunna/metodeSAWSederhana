<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepesertaRequest;
use App\Http\Requests\UpdatepesertaRequest;
use App\Models\peserta;
use Illuminate\Support\Facades\Redirect;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = peserta::get();
        return view('peserta.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepesertaRequest $request)
    {
        $data = $request->all();
        $peserta = peserta::create($data);
        $peserta->nilai()->create([]);
        return  redirect()->route('peserta.index')->with('sucess', 'Peserta Berhasil Di Tambahkan');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepesertaRequest $request, peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peserta $peserta)
    {
        //
    }
}
