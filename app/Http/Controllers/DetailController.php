<?php

namespace App\Http\Controllers;

use App\Models\Detail; 
use App\Models\ShoesModel;  
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = Detail::with('model')->get();
        return view('detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = ShoesModel::all();
        return view('detail.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ukuran' => 'required|string|max:100',
            'warna' => 'required|string|max:100',
            'kondisi' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'model_id' => 'required|exists:tb_model,model_id', 
        ]);

        Detail::create($validated);
        return redirect()->route('detail.index')->with('success', 'Detail berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Detail::with('model')->findOrFail($id);
        return view('detail.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail = Detail::findOrFail($id);
        $models = ShoesModel::all(); 
        return view('detail.edit', compact('detail', 'models'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'ukuran' => 'required|string|max:100',
            'warna' => 'required|string|max:100',
            'kondisi' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'model_id' => 'required|exists:tb_model,model_id', 
        ]);

        $detail = Detail::findOrFail($id);
        $detail->update($validated);

        return redirect()->route('detail.index')->with('success', 'Detail berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Detail::findOrFail($id);
        $detail->delete();

        return redirect()->route('detail.index')->with('success', 'Detail berhasil dihapus!');
    }
}
