<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Brand::all();
        return view('brand.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::create([
            'brand_id' => $request->brand_id,
            'nama_brand' => $request->nama_brand,
        ]);
        return redirect('/brand');
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
    public function edit($id)
    {
        $brand = Brand::where('brand_id', $id)->first();
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Brand::findOrFail($id);
        $row->update([
            'nama_brand' => $request->nama_brand,
        ]);

        return redirect('/brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory(string $id)
    {
        $row = Brand::findOrFail($id);
        $row->delete();

        return redirect('/brand');
    }
}
