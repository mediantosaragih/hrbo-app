<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Divisi";
        $data_divisi = Divisi::all();
        return view ('main/divisi/divisi', [
            'data_divisi' => $data_divisi
        ], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_divisi = Divisi::all();
        return view('main/divisi/create', [
            'data_divisi' => $data_divisi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validasi input jika diperlukan
    $request->validate([
        'divisi_id' => 'required',
        'name_divisi' => 'required',
        'jumlah' => 'required|numeric',
        // Sesuaikan aturan validasi lainnya sesuai kebutuhan Anda
    ]);

    // Ambil data dari request
    $data_divisi = $request->only([
        'divisi_id',
        'name_divisi',
        'jumlah',
    ]);

    // Simpan data ke dalam database
    Divisi::create($data_divisi);

    // Redirect ke halaman index atau ke halaman yang diinginkan setelah penyimpanan
    return redirect()->route('divisi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return view('main.divisi.edit', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'divisi_id' => 'required',
            'name_divisi' => 'required',
            'jumlah' => 'required|numeric',
            // Sesuaikan aturan validasi lainnya sesuai kebutuhan Anda
        ]);

        // Temukan data divisi berdasarkan ID
        $divisi = Divisi::findOrFail($id);

        // Update data divisi dengan data baru dari request
        $divisi->update([
            'divisi_id' => $request->input('divisi_id'),
            'name_divisi' => $request->input('name_divisi'),
            'jumlah' => $request->input('jumlah'),
            // Sesuaikan atribut lainnya sesuai kebutuhan
        ]);

        // Redirect ke halaman index atau ke halaman yang diinginkan setelah pembaruan
        return redirect()->route('divisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
