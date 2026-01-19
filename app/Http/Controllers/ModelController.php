<?php

namespace App\Http\Controllers;

use App\Models\ShoesModel;  
use App\Models\Brand;  
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = ShoesModel::with('brand')->get();
        return view('model.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('model.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_model' => 'required|string|max:100',
            'brand_id' => 'required|exists:tb_brand,brand_id',
        ]);

        ShoesModel::create($validated);
        return redirect()->route('model.index')->with('success', 'Model berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = ShoesModel::with('brand')->findOrFail($id);
        return view('model.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = ShoesModel::findOrFail($id);
        $brands = Brand::all(); 
        return view('model.edit', compact('model', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_model' => 'required|string|max:100',
            'brand_id' => 'required|exists:tb_brand,brand_id',
        ]);

        $model = ShoesModel::findOrFail($id);
        $model->update($validated);
        return redirect()->route('model.index')->with('success', 'Model berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = ShoesModel::findOrFail($id);
        $model->delete();
        return redirect()->route('model.index')->with('success', 'Model berhasil dihapus!');
    }
}
